<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([

            'category'     => $row['category'],
            'brand'        => $row['brand'],
            'product_name' => $row['product_name'],
            'specs'        => $row['specs'],
            'price'        => $row['price'],
            'image'        => $row['image'],

        ]);
    }
}
