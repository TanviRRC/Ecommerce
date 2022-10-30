<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Xiaomi Redmi Note 8 Pro',
                'price'=>'22500',
                'description'=>'A smartphone with 6gb ram and 128gb rom',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2019/09/Xiaomi-Redmi-Note-8-Pro.jpg'
            ],
            [
                'name'=>'Oppo F21s Pro',
                'price'=>'30500',
                'description'=>'A smartphone with 8gb ram and 128gb rom',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2022/10/Oppo-F21s-Pro.jpg'
            ],
            [
                'name'=>'MSI GF63 THIN 11SC',
                'price'=>'98,500',
                'description'=>'MSI GF63 THIN 11SC Core i5 11th Gen GTX 1650 4GB Graphics 15.6" FHD 144hz Gaming Laptop',
                'category'=>'Gaming Laptop',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/laptop/msi/gf63-thin/gf63-thin-01-500x500.jpg'
            ],
            [
                'name'=>'BenQ MOBIUZ EX2710R',
                'price'=>'59,500',
                'description'=>'enQ MOBIUZ EX2710R 27" 165Hz FreeSync 2K QHD Curved Gaming Monitor',
                'category'=>'Monitor',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/monitor/benq/ex2710r/ex2710r-01-500x500.jpg'
            ],
            [
                'name'=>'Apple iPad Air',
                'price'=>'87,000',
                'description'=>'Apple iPad Air 5th Gen 10.9-inch 64GB Wi-Fi + Cellular Space Grey',
                'category'=>'Tablet',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/tablet/apple/ipad-air-5th-gen/ipad-air-space-gray-01-500x500.jpg'
            ]
        ]);
    }
}
