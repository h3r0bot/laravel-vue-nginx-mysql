<?php

namespace App\Imports;

use App\Models\Cars;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {        
        foreach($collection as $item)
        {            
            if(isset($item['first_name']) && $item['first_name'] != null)
            {
                Cars::firstOrCreate([
                    'first_name' => $item['first_name'],
                    'last_name' => $item['last_name'],
                    'email' => $item['email'],
                    'gender' => $item['gender'],
                    'ip_address' => $item['ip_address'],
                    'date' => $item['date'],
                    'car' => $item['car'],
                    'car_vin' => $item['car_vin'],
                    'car_year' => $item['car_year'],
                ]);
            }
        }
    }
}
