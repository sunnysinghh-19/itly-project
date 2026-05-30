<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new ProductsImport, $request->file('file'));

        return redirect('/itly-admin-panel')
       ->with('success', 'Products Imported Successfully');

       }
}
