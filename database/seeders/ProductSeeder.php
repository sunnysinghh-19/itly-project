<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        Product::create([
            'category' => 'Laptop',
            'brand' => 'Lenovo',
            'product_name' => 'Lenovo ThinkPad E16',
            'specs' => 'Intel Core i5, 16GB RAM, 512GB SSD',
            'price' => '65999',
            'image' => 'https://p1-ofp.static.pub/fes/cms/2023/11/09/4vuk7q0v0m4v0h0nn6hz6q7t0x4t4l.png'
        ]);

        Product::create([
            'category' => 'Printer',
            'brand' => 'Epson',
            'product_name' => 'Epson L3250',
            'specs' => 'WiFi Color Printer',
            'price' => '17999',
            'image' => 'https://mediaserver.goepson.com/ImConvServlet/imconv/6d3d6f3b'
        ]);

        Product::create([
            'category' => 'AIO PC',
            'brand' => 'Lenovo',
            'product_name' => 'IdeaCentre AIO',
            'specs' => 'Core i5, 16GB RAM, 512GB SSD',
            'price' => '74999',
            'image' => 'https://p3-ofp.static.pub/fes/cms/2024/01/15/abcxyz.png'
        ]);

    }
}
