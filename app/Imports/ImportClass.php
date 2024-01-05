<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;


class ImportClass implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

    }

    public function model(Array $row){

         // Define how to create a model from the Excel row data
         return new \App\Models\DocFetch([
            "title" => $row[0],
			"company" => $row[0],
			"neartermtarget" => $row[3],
			"companytemperaturetlignment" => $row[4],
            "temperaturealignment" => $row[4],
            "netzerocommitted"=>$row[9],
            "sme"=>$row[11],
			"ba15Status" => $row[12],
            "country" => $row[14],
            "region"=>$row[15],
            "sector" => $row[16],
			"targetyear" => $row[8],
            "baseyear"=>$row[5],
			"datepublished" => $row[17],
			"slug" => $row[0],
			"targetdescription" => $row[18],
            "statustext"=>"NA",
            "actiontype" => $row[9]
			//"action" => $row[11],
			//"scopescovered" => $row[14],
            //'column1' => $row[0],
            //'column2' => $row[1],
            // Add more columns as needed
        ]);

    }


public function Chunk(){

    return 1000;
}

}
