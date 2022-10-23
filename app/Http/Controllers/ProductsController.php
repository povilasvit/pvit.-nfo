<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use Illuminate\Support\Facades\Storage;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         return view('products.index')->with('categories', Category::all())->with('products', Product::paginate(50));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.create_product')->with('categories', Category::all())->with('discounts', Discount::all());
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $input = array_merge($request->all(), ['slug' => str_slug($request->input('name').'-')]);
        $productDiscount = (int)$input['discount_id'];
        $discount = Discount::findOrFail($productDiscount);
        $input['lastPrice'] = $input['price'] - $input['price'] * ($discount->value/100);

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input1['path'] = $name;            

        } else {

            $input1 = [];

            }


        if($file2 = $request->file('file2')){
            $name2 = $file2->getClientOriginalName();
            $file2->move('images', $name2);
            $input2['path2'] = $name2;  
         } else {

            $input2 = [];

            }

        if($file3 = $request->file('file3')){

            $name3 = $file3->getClientOriginalName();
            $file3->move('images', $name3);
            $input3['path3'] = $name3;

        } else {

            $input3 = [];

            }      

        $data = array_merge($input, $input1, $input2, $input3);
        Product::create($data);
        session()->flash('success', 'Product Created successfully');
        return redirect('/products');        

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products/edit_product')->with('product', $product)->with('categories', Category::all())->with('discounts', Discount::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $productDiscount = (int)$request['discount_id'];
        $discount = Discount::findOrFail($productDiscount);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->inStock = $request->input('inStock');
        $product->lastPrice = $request->price - (intval($request->input('price'))*($discount->value / 100));
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->discount_id = $request->input('discount_id');
        $product->content = $request->input('content');

        if($file = $request->hasFile('file')) {

            $file = $request->file('file');
            $oldFile = 'images';
            $oldFileName = $product->path;
            File::delete($oldFile.'/'.$oldFileName);  
            $name = $file->getClientOriginalName();
            $filename = time().'.'.$name;
            $file->move('images', $filename);
            $product->path = $filename; 

        } 

        if($file2 = $request->hasFile('file2')){

            $file2 = $request->file('file2');
            $oldFile2 = 'images';
            $oldFileName2 = $product->path2;
            File::delete($oldFile2.'/'.$oldFileName2);
            $name2 = $file2->getClientOriginalName();
            $filename2 = time().'.'.$name2;
            $file2->move('images', $filename2);
            $product->path2 = $filename2;

        }

        if($file3 = $request->hasFile('file3')){

            $file3 = $request->file('file3');
            $oldFile3 = 'images';
            $oldFileName3 = $product->path3;
            File::delete($oldFile3.'/'.$oldFileName3);
            $name3 = $file3->getClientOriginalName();
            $filename3 = time().'.'.$name3;
            $file3->move('images', $filename3);
            $product->path3 = $filename3;

        }


        $product->save();

        session()->flash('success', 'Product'.' '.'Id'.' '.$product->id.' '.'Updated successfully');

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
        $product->delete();

        session()->flash('danger', 'Product Deleted successfully');

        return redirect('/products');
    }
}
