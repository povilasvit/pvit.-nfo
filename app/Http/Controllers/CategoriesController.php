<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Support\Facades\Storage;
use File;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $categories = Category::all();

       return view('categories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        $input = array_merge($request->all(), ['slug' => str_slug($request->input('name').'-')]);
            if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('images\categories', $name);
            $input1['path'] = $name;            

        } else {

            $input1 = [];

            }

        $data = array_merge($input, $input1);

        Category::create($data);

        session()->flash('success', 'Category Created Successfully');

        return redirect('/categories');  

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
    public function edit($id)
    {

        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');

        if($file = $request->hasFile('file')) {

            $file = $request->file('file');
            $oldFile = 'images/categories';
            $oldFileName = $category->path;
            File::delete($oldFile.'/'.$oldFileName);  
            $name = $file->getClientOriginalName();
            $filename = time().'.'.$name;
            $file->move('images/categories', $filename);
            $category->path = $filename; 

        } 

        $category->save();

        session()->flash('success', 'Category Updated Successfully');

        return redirect('/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = Category::findOrFail($id);
        if($category->products->count() > 0){
            session()->flash('danger', 'You cannot delete this category. It has some products!');
            return redirect('/categories');
        } else {
            $category->delete();
            session()->flash('success', 'Category Deleted Successfully');
            return redirect('/categories');
        }



    }
}
