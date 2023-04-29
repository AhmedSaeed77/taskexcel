<?php

namespace App\Exports;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromArray;

class ProductExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
        $list=[];
        $products = Product::all();
        foreach($products as $product)
        {
            $list[] = [$product->name,$product->type,$product->counter];
        }
        return $list;
    }
}
