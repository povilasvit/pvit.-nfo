<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('categories')->insert([
            'name' => 'Kaklo papuošalai',
            'path' => 'a.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'kaklo-papuošalai',
        ]);    
        DB::table('categories')->insert([
            'name' => 'Auskarai',
            'path' => 'b.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'auskarai',
        ]);
         DB::table('categories')->insert([
            'name' => 'Apyrankės',
            'path' => 'c.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'apyrankės',
        ]);
        DB::table('categories')->insert([
            'name' => 'Lankeliai',
            'path' => 'd.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'Lankeliai',
        ]);
        DB::table('categories')->insert([
            'name' => 'Grandinėlės Akiniams',
            'path' => 'e.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'grandinėlės-akiniams',
        ]);
        DB::table('categories')->insert([
            'name' => 'Plaukų Gumytės',
            'path' => 'f.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'slug' => 'plaukų-gumytės',
        ]); 

////////////////////////////////////////////


        DB::table('deliveries')->insert([
            'name' => 'Omniva',
            'price' => 5,
            'created_at' => date("Y-m-d H:i:s"),
        ]); 

        DB::table('deliveries')->insert([
            'name' => 'LP EXPRESS',
            'price' => 6,
            'created_at' => date("Y-m-d H:i:s"),
        ]);


////////////////////////////////////////////
        DB::table('discounts')->insert([
            'name' => '',
            'value' => 0,
            'created_at' => date("Y-m-d H:i:s"),
        ]); 
        DB::table('discounts')->insert([
            'name' => 'Nuolaida -20%',
            'value' => 20,
            'created_at' => date("Y-m-d H:i:s"),
        ]); 
        DB::table('discounts')->insert([
            'name' => 'Nuolaida -30%',
            'value' => 30,
            'created_at' => date("Y-m-d H:i:s"),
        ]); 
//////////////////////////////////////////////
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 1,
            'name' => 'Grandinėlė su Žvaidžute', 
            'inStock' => 1, 
            'path' => '10.jpg',            
            'path2' => '11.jpg',            
            'path3' => '12.jpg',            
            'price' => 10,            
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'grandinėlė-su-žvaidžute',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 1,
            'name' => 'Grandinėlė su Pakabuku',
            'inStock' => 1, 
            'path' => '20.jpg',            
            'path2' => '21.jpg',            
            'path3' => '22.jpg',            
            'price' => 10, 
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'grandinėlė-su-pakabuku',            
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'discount_id' => 1,
            'name' => 'Auskarai su Pakabuku',
            'inStock' => 1, 
            'path' => '30.jpg',            
            'path2' => '31.jpg',            
            'path3' => '32.jpg',            
            'price' => 20,           
            'lastPrice' => 20,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'auskarai-su-pakabuku',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 2,
            'name' => 'Juoda Apyrankė',
            'inStock' => 1,             
            'path' => '40.jpg',            
            'path2' => '41.jpg',            
            'path3' => '42.jpg',            
            'price' => 20,     
            'lastPrice' => 16,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'juoda-apyrankė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 1,
            'name' => 'Aukso Spalvos Grandinėlė',
            'inStock' => 1,           
            'path' => '50.jpg',            
            'path2' => '51.jpg',            
            'path3' => '52.jpg',            
            'price' => 10,        
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'aukso-spalvos-grandinėlė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'discount_id' => 1,
            'name' => 'Juodas Lankelis',
            'inStock' => 1,           
            'path' => '60.jpg',            
            'path2' => '61.jpg',            
            'path3' => '62.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'juodas-lankelis',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 2,
            'name' => 'Sidabro Spalvos Grandinėlė',      
            'inStock' => 1,     
            'path' => '70.jpg',            
            'path2' => '71.jpg',            
            'path3' => '72.jpg',            
            'price' => 10, 
            'lastPrice' => 8,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'sidabro-spalvos-grandinėlė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'discount_id' => 3,
            'name' => 'Rudas Lankelis',           
            'inStock' => 1,
            'path' => '80.jpg',            
            'path2' => '81.jpg',            
            'path3' => '82.jpg',            
            'price' => 20, 
            'lastPrice' => 11,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'rudas-lankelis',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 3,
            'name' => 'Juoda Grandinėlė',            
            'inStock' => 1,
            'path' => '90.jpg',            
            'path2' => '91.jpg',            
            'path3' => '92.jpg',            
            'price' => 20,
            'lastPrice' => 14,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'juoda-grandinėlė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'discount_id' => 1,
            'name' => 'Aukso Spalvos Auskarai', 
            'inStock' => 1,          
            'path' => 'a0.jpg',            
            'path2' => 'a1.jpg',            
            'path3' => 'a2.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'aukso-spalvos-auskarai',            
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'discount_id' => 1,
            'name' => 'Plaukų Gumytės',           
            'inStock' => 1,
            'path' => 'b0.jpg',            
            'path2' => 'b1.jpg',            
            'path3' => 'b2.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'plaukų-gumytės',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 1,
            'name' => 'Balta Grandinėlė', 
            'inStock' => 1,           
            'path' => 'c0.jpg',            
            'path2' => 'c1.jpg',            
            'path3' => 'c2.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'balta-grandinėlė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'discount_id' => 1,
            'name' => 'Pilkas Lankelis', 
            'inStock' => 1,           
            'path' => 'd0.jpg',            
            'path2' => 'd1.jpg',            
            'path3' => 'd2.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'pilkas-lankelis',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 3,
            'name' => 'Grandinėlė su Pakabuku',            
            'inStock' => 1,
            'path' => '12.jpg',            
            'path2' => '11.jpg',            
            'path3' => '10.jpg',            
            'price' => 10,     
            'lastPrice' => 7,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'grandinėlė-su-pakabuku',            
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'discount_id' => 3,
            'name' => 'Plaukų Gumytės',            
            'inStock' => 1,
            'path' => '22.jpg',            
            'path2' => '21.jpg',            
            'path3' => '20.jpg',            
            'price' => 10,
            'lastPrice' => 7,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'plaukų-gumytės',            
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'discount_id' => 3,
            'name' => 'Aukso Spalvos Grandinėlė',           
            'inStock' => 1,
            'path' => '32.jpg',            
            'path2' => '31.jpg',            
            'path3' => '30.jpg',            
            'price' => 10,     
            'lastPrice' => 7,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'aukso-spalvos-grandinėlė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'discount_id' => 2,
            'name' => 'Plaukų Gumytės',            
            'inStock' => 1,
            'path' => '42.jpg',            
            'path2' => '41.jpg',            
            'path3' => '40.jpg',            
            'price' => 10,     
            'lastPrice' => 8,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'plaukų-gumytės',            
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'discount_id' => 1,
            'name' => 'Sidabro Spalvos Grandinėlė Akiniams',           
            'inStock' => 1,
            'path' => '52.jpg',            
            'path2' => '51.jpg',            
            'path3' => '50.jpg',            
            'price' => 10,   
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'sidabro-spalvos-grandinėlė-akiniams',            
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'discount_id' => 1,
            'name' => 'Auskarai',           
            'inStock' => 1,
            'path' => '62.jpg',            
            'path2' => '61.jpg',            
            'path3' => '60.jpg',            
            'price' => 10, 
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'auskarai',            
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'discount_id' => 1,
            'name' => 'Baltas Lankelis',            
            'inStock' => 1,
            'path' => '72.jpg',            
            'path2' => '71.jpg',            
            'path3' => '70.jpg',            
            'price' => 10,  
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'baltas-lankelis',            
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'discount_id' => 1,
            'name' => 'Taškuotas Lankelis',            
            'inStock' => 1,
            'path' => '82.jpg',            
            'path2' => '81.jpg',            
            'path3' => '80.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'taškuotas-lankelis',            
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'discount_id' => 1,
            'name' => 'Aukso Spalvos Grandinėlė Akiniams',           
            'inStock' => 1,
            'path' => '92.jpg',            
            'path2' => '91.jpg',            
            'path3' => '90.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'aukso-spalvos-grandinėlė-akiniams',            
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'discount_id' => 1,
            'name' => 'Sidabro Spalvos Grandinėlė Akiniams',           
            'inStock' => 1,
            'path' => 'a2.jpg',            
            'path2' => 'a1.jpg',            
            'path3' => 'a0.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'sidabro-spalvos-grandinėlė-akiniams',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 2,
            'name' => 'Balta Apyrankė',            
            'inStock' => 1,
            'path' => 'b2.jpg',            
            'path2' => 'b1.jpg',            
            'path3' => 'b0.jpg',            
            'price' => 10,     
            'lastPrice' => 8,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'balta-apyrankė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'discount_id' => 2,
            'name' => 'Sidabro Spalvos Grandinėlė Akiniams',           
            'inStock' => 1,
            'path' => 'c2.jpg',            
            'path2' => 'c1.jpg',            
            'path3' => 'c0.jpg',            
            'price' => 10,  
            'lastPrice' => 8,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'sidabro-spalvos-grandinėlė-akiniams',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 1,
            'name' => 'Apyrankė "Akvamarinas"',           
            'inStock' => 1,
            'path' => 'd2.jpg',            
            'path2' => 'd1.jpg',            
            'path3' => 'd0.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'apyrankė-akvamarinas',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 1,
            'name' => 'Balta Apyrankė',            
            'inStock' => 1,
            'path' => '11.jpg',            
            'path2' => '10.jpg',            
            'path3' => '12.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'balta-apyrankė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 3,
            'name' => 'Juoda Apyrankė',           
            'inStock' => 1,
            'path' => '21.jpg',            
            'path2' => '20.jpg',            
            'path3' => '22.jpg',            
            'price' => 10,    
            'lastPrice' => 7,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'juoda-apyrankė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'discount_id' => 2,
            'name' => 'Apyrankė',            
            'inStock' => 1,
            'path' => '31.jpg',            
            'path2' => '30.jpg',            
            'path3' => '32.jpg',            
            'price' => 10,
            'lastPrice' => 8,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'apyrankė',            
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'discount_id' => 1,
            'name' => 'Auskarai su Pakabuku',            
            'inStock' => 1,
            'path' => '41.jpg',            
            'path2' => '40.jpg',            
            'path3' => '42.jpg',            
            'price' => 10,
            'lastPrice' => 10,            
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis vel orci quis tincidunt. Curabitur varius id purus et dignissim. Integer tincidunt velit at mi ultricies dapibus. Cras eu dui et lectus posuere posuere ac ac quam. Quisque a magna tortor. Aenean vel velit dolor. Nullam pellentesque id nibh in.',            
            'content' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur',            
            'created_at' => date("Y-m-d H:i:s"),            
            'slug' => 'auskarai-su-pakabuku',            
        ]); 
// Contact links
        DB::table('others')->insert([
            'name' => 'Shipping',
            'content'=> '<div><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis velit a nisi faucibus dictum.</strong>&nbsp;<br>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet diam ac ligula tempor mattis at eu velit. Vivamus vestibulum auctor magna in rhoncus. Aliquam at dignissim lorem, quis elementum risus. Pellentesque sapien nibh, sollicitudin ac consequat vel, volutpat non ipsum. Proin rutrum sodales ex sed elementum. Pellentesque eros magna, varius accumsan sem a, bibendum egestas felis. Vivamus condimentum et dolor nec rhoncus. Proin ante sem, ornare sit amet lorem vitae, blandit sagittis urna. Vivamus in justo vel urna vulputate accumsan.<br><br></div><div><strong>Etiam nibh nisi, elementum vel sagittis et, dictum nec leo.<br></strong>&nbsp;Sed auctor, dolor et congue posuere, elit massa fermentum leo, eleifend vestibulum nunc odio sed felis. Etiam tempor dolor metus, at elementum mauris laoreet consectetur. Aliquam blandit vehicula vehicula. Morbi sodales eros eget sapien tincidunt tempus. Integer et nibh leo. Integer quis elit nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis in molestie ipsum. Proin vitae mi congue, tincidunt nisi et, molestie dui.<br><br></div><div><strong>Curabitur scelerisque varius arcu, eu aliquet lectus lacinia ut.<br></strong>Quisque elit lorem, ullamcorper id pretium et, iaculis sit amet velit. Quisque ac nunc at lacus faucibus pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus euismod dui, non scelerisque eros tempor id. Maecenas ut enim in nulla porttitor accumsan. Vestibulum scelerisque, dolor non tincidunt vestibulum, lorem ante venenatis ex, et viverra purus metus id sapien.<br><br></div><div><strong>Curabitur hendrerit, tortor accumsan pellentesque sollicitudin, enim lectus auctor augue, quis gravida tortor orci a ligula.</strong>&nbsp;<br>Quisque nec tortor ac purus vulputate dapibus ac et nulla. Suspendisse tincidunt porttitor justo in tincidunt. Duis efficitur turpis nec arcu molestie, sit amet fermentum nunc efficitur. Phasellus tincidunt malesuada lobortis. Nunc congue odio at metus condimentum porta. Praesent rhoncus metus enim, in ultrices libero congue eu. Sed imperdiet ipsum sapien, et efficitur ipsum porttitor at. Suspendisse sit amet lorem nec nibh gravida interdum vel tincidunt mi. Donec id orci ac purus sagittis imperdiet. Aenean diam magna, imperdiet non consequat in, lobortis posuere leo. Vivamus ac convallis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque egestas metus, finibus scelerisque ipsum mattis sit amet. Donec ac leo mollis, rhoncus augue ut, maximus velit. Nam ligula mauris, mattis sit amet velit ac, pulvinar elementum sem.<br><br></div><div><strong>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br></strong>Curabitur fermentum dolor vel est mollis, in egestas felis iaculis. Nullam efficitur est vehicula, pellentesque elit eleifend, euismod purus. Nunc interdum nisl in dolor laoreet, quis sollicitudin ante malesuada. Morbi dolor arcu, ornare ac ullamcorper nec, sagittis convallis odio. Curabitur aliquam lacinia neque, ac vulputate odio convallis ut. Donec pellentesque eleifend orci, ac efficitur lectus gravida ut. Fusce aliquet ante dolor, vel accumsan sapien varius a. Proin luctus, orci id dapibus tincidunt, enim est vehicula risus, ac mollis quam tortor sit amet lacus. Duis eget cursus orci, vitae mattis mauris. In sed elit vel metus malesuada pulvinar eget eget turpis. Sed vitae arcu facilisis, dapibus turpis vitae, sodales diam.<br><br></div><div>Generated 5 paragraphs, 524 words, 3580 bytes of <a href="https://www.lipsum.com/">Lorem Ipsum</a></div>',   
        ]); 
        DB::table('others')->insert([
            'name' => 'Privacy Policy',
            'content' => '<div><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis velit a nisi faucibus dictum.</strong>&nbsp;<br>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet diam ac ligula tempor mattis at eu velit. Vivamus vestibulum auctor magna in rhoncus. Aliquam at dignissim lorem, quis elementum risus. Pellentesque sapien nibh, sollicitudin ac consequat vel, volutpat non ipsum. Proin rutrum sodales ex sed elementum. Pellentesque eros magna, varius accumsan sem a, bibendum egestas felis. Vivamus condimentum et dolor nec rhoncus. Proin ante sem, ornare sit amet lorem vitae, blandit sagittis urna. Vivamus in justo vel urna vulputate accumsan.<br><br></div><div><strong>Etiam nibh nisi, elementum vel sagittis et, dictum nec leo.<br></strong>&nbsp;Sed auctor, dolor et congue posuere, elit massa fermentum leo, eleifend vestibulum nunc odio sed felis. Etiam tempor dolor metus, at elementum mauris laoreet consectetur. Aliquam blandit vehicula vehicula. Morbi sodales eros eget sapien tincidunt tempus. Integer et nibh leo. Integer quis elit nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis in molestie ipsum. Proin vitae mi congue, tincidunt nisi et, molestie dui.<br><br></div><div><strong>Curabitur scelerisque varius arcu, eu aliquet lectus lacinia ut.<br></strong>Quisque elit lorem, ullamcorper id pretium et, iaculis sit amet velit. Quisque ac nunc at lacus faucibus pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus euismod dui, non scelerisque eros tempor id. Maecenas ut enim in nulla porttitor accumsan. Vestibulum scelerisque, dolor non tincidunt vestibulum, lorem ante venenatis ex, et viverra purus metus id sapien.<br><br></div><div><strong>Curabitur hendrerit, tortor accumsan pellentesque sollicitudin, enim lectus auctor augue, quis gravida tortor orci a ligula.</strong>&nbsp;<br>Quisque nec tortor ac purus vulputate dapibus ac et nulla. Suspendisse tincidunt porttitor justo in tincidunt. Duis efficitur turpis nec arcu molestie, sit amet fermentum nunc efficitur. Phasellus tincidunt malesuada lobortis. Nunc congue odio at metus condimentum porta. Praesent rhoncus metus enim, in ultrices libero congue eu. Sed imperdiet ipsum sapien, et efficitur ipsum porttitor at. Suspendisse sit amet lorem nec nibh gravida interdum vel tincidunt mi. Donec id orci ac purus sagittis imperdiet. Aenean diam magna, imperdiet non consequat in, lobortis posuere leo. Vivamus ac convallis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque egestas metus, finibus scelerisque ipsum mattis sit amet. Donec ac leo mollis, rhoncus augue ut, maximus velit. Nam ligula mauris, mattis sit amet velit ac, pulvinar elementum sem.<br><br></div><div><strong>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br></strong>Curabitur fermentum dolor vel est mollis, in egestas felis iaculis. Nullam efficitur est vehicula, pellentesque elit eleifend, euismod purus. Nunc interdum nisl in dolor laoreet, quis sollicitudin ante malesuada. Morbi dolor arcu, ornare ac ullamcorper nec, sagittis convallis odio. Curabitur aliquam lacinia neque, ac vulputate odio convallis ut. Donec pellentesque eleifend orci, ac efficitur lectus gravida ut. Fusce aliquet ante dolor, vel accumsan sapien varius a. Proin luctus, orci id dapibus tincidunt, enim est vehicula risus, ac mollis quam tortor sit amet lacus. Duis eget cursus orci, vitae mattis mauris. In sed elit vel metus malesuada pulvinar eget eget turpis. Sed vitae arcu facilisis, dapibus turpis vitae, sodales diam.<br><br></div><div>Generated 5 paragraphs, 524 words, 3580 bytes of <a href="https://www.lipsum.com/">Lorem Ipsum</a></div>',
        ]);
        DB::table('others')->insert([
            'name' => 'Returns & Replacements',
            'content' => '<div><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse convallis velit a nisi faucibus dictum.</strong>&nbsp;<br>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet diam ac ligula tempor mattis at eu velit. Vivamus vestibulum auctor magna in rhoncus. Aliquam at dignissim lorem, quis elementum risus. Pellentesque sapien nibh, sollicitudin ac consequat vel, volutpat non ipsum. Proin rutrum sodales ex sed elementum. Pellentesque eros magna, varius accumsan sem a, bibendum egestas felis. Vivamus condimentum et dolor nec rhoncus. Proin ante sem, ornare sit amet lorem vitae, blandit sagittis urna. Vivamus in justo vel urna vulputate accumsan.<br><br></div><div><strong>Etiam nibh nisi, elementum vel sagittis et, dictum nec leo.<br></strong>&nbsp;Sed auctor, dolor et congue posuere, elit massa fermentum leo, eleifend vestibulum nunc odio sed felis. Etiam tempor dolor metus, at elementum mauris laoreet consectetur. Aliquam blandit vehicula vehicula. Morbi sodales eros eget sapien tincidunt tempus. Integer et nibh leo. Integer quis elit nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis in molestie ipsum. Proin vitae mi congue, tincidunt nisi et, molestie dui.<br><br></div><div><strong>Curabitur scelerisque varius arcu, eu aliquet lectus lacinia ut.<br></strong>Quisque elit lorem, ullamcorper id pretium et, iaculis sit amet velit. Quisque ac nunc at lacus faucibus pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus euismod dui, non scelerisque eros tempor id. Maecenas ut enim in nulla porttitor accumsan. Vestibulum scelerisque, dolor non tincidunt vestibulum, lorem ante venenatis ex, et viverra purus metus id sapien.<br><br></div><div><strong>Curabitur hendrerit, tortor accumsan pellentesque sollicitudin, enim lectus auctor augue, quis gravida tortor orci a ligula.</strong>&nbsp;<br>Quisque nec tortor ac purus vulputate dapibus ac et nulla. Suspendisse tincidunt porttitor justo in tincidunt. Duis efficitur turpis nec arcu molestie, sit amet fermentum nunc efficitur. Phasellus tincidunt malesuada lobortis. Nunc congue odio at metus condimentum porta. Praesent rhoncus metus enim, in ultrices libero congue eu. Sed imperdiet ipsum sapien, et efficitur ipsum porttitor at. Suspendisse sit amet lorem nec nibh gravida interdum vel tincidunt mi. Donec id orci ac purus sagittis imperdiet. Aenean diam magna, imperdiet non consequat in, lobortis posuere leo. Vivamus ac convallis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque egestas metus, finibus scelerisque ipsum mattis sit amet. Donec ac leo mollis, rhoncus augue ut, maximus velit. Nam ligula mauris, mattis sit amet velit ac, pulvinar elementum sem.<br><br></div><div><strong>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br></strong>Curabitur fermentum dolor vel est mollis, in egestas felis iaculis. Nullam efficitur est vehicula, pellentesque elit eleifend, euismod purus. Nunc interdum nisl in dolor laoreet, quis sollicitudin ante malesuada. Morbi dolor arcu, ornare ac ullamcorper nec, sagittis convallis odio. Curabitur aliquam lacinia neque, ac vulputate odio convallis ut. Donec pellentesque eleifend orci, ac efficitur lectus gravida ut. Fusce aliquet ante dolor, vel accumsan sapien varius a. Proin luctus, orci id dapibus tincidunt, enim est vehicula risus, ac mollis quam tortor sit amet lacus. Duis eget cursus orci, vitae mattis mauris. In sed elit vel metus malesuada pulvinar eget eget turpis. Sed vitae arcu facilisis, dapibus turpis vitae, sodales diam.<br><br></div><div>Generated 5 paragraphs, 524 words, 3580 bytes of <a href="https://www.lipsum.com/">Lorem Ipsum</a></div>',
        ]);       
    }
}
