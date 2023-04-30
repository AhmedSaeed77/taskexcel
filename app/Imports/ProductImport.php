<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements  ToModel, WithStartRow ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function model(array $row)
    {
        $name = array_search('name',$row);
        $type = array_search('type',$row);
        $counter = array_search('counter',$row);

        return new Product([
            "name" => $row['name'],
            "type" => $row['type'],
            "counter" => intval($row['counter']) ,
        ]);
    }
}
