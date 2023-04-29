<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Imports\ProductImport;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function import(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'excel'=>'required|mimes:csv,xlsx|max:8162'
        // ],
        // [
        //     'excel'=>'file not validation',
        // ]);
        Excel::import(new ProductImport(),$request->file('excel')->store('images/products'));
        return redirect()->route('product.index');
    }

    public function export()
    {
        return Excel::download(new ProductExport(),'export.xlsx');
    }
}
