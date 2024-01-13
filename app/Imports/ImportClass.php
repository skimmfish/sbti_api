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
            "isin"=>$row[2],
            "lei"=>$row[3],
            "country" => $row[4],
            "region"=>$row[5],
            "sector" => $row[6],
            "organization_type"=>$row[7],
            "action" => $row[8],
            "commitment_type"=>$row[9],
            "commitment_deadline"=>$row[10],
            "statustext"=>$row[11],
            "reason_for_commitment_extension_removal"=>$row[12],
            "full_target_language"=>$row[13],
            "submission_type"=>$row[14],
			"companytemperaturetlignment" => $row[15],
            "target" => $row[16],
            "target_wording" => $row[17],
            "scopescovered" => $row[18],
            "target_value"=>$row[19],
            "type"=>$row[20],
            "sub_type"=>$row[21],
            "target_classification"=>$row[22],
            "baseyear"=>$row[23],
            "targetyear"=>$row[24],
            "year_type"=>$row[25],
            "datepublished" => $row[26],
            "near_term_status"=>$row[27],
            "net_zero_status"=>$row[28],
			"ba15Status" => $row[29],
            //'column1' => $row[0],
            //'column2' => $row[1],
            // Add more columns as needed
        ]);

    }


public function Chunk(){

    return 1000;
}

}
