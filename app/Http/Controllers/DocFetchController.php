<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use ZipArchive;

class DocFetchController extends Controller
{


    /**
     * Plain function fetching sbti historical data without parameters
     *
     * @header Connection close
     * @header Accept * / *
     * @header Content-Type application/json;utf-8
     * @header API_KEY
     * @ header API_SECRET
     */
    protected $code;

     public function fetch_sbti_data($code){

        $this->code = 'a25630290119SBTix-enmod';

        try{
            if($code==$this->code){
            //finding records from the exceltbl table paginating same data at 20 records per page
            $res = \App\Models\DocFetch::paginate(20);

            if(!is_null($res)){
                return response()->json(['data'=>$res,'status'=>true,'message'=>'records_retrieved_successfully'],200);
            }
        }else{
            return response()->json(['data'=>'NULL','message'=>'no records retrieved, contact the administrators'],404);
        }
        }catch(\Exception $e){
            return response()->json(['data'=>null,'message'=>'error','error'=>$e->getMessage()],500);
        }
    }


    /**
     * This function imports excel sheet into the database table
     * @header Connection close
     * @header Accept * / *
     * @header Content-Type application/json;utf-8
     *
     * @bodyParam File import_f Example: historical_Data.xlxs
     *
     */
    public static function import_excel_sheet(Request $request){
        try{

            // Validate the uploaded file
        $request->validate([
            'import_f' => 'required|mimes:xlsx,xls',
        ]);

         // Get the uploaded file
         $file = $request->file('import_f');

          // ProcessING the Excel file
        Excel::import(new \App\Imports\ImportClass, $file);

         //RETURNING RESPONSE TO THE FRONTEND
         return response()->json(['message'=>'Doc. data imported successfully','status'=>true],200);

        }catch(\Exception $e){

            return response()->json(['data'=>'null','message'=>'error','status'=>false,'error'=>$e->getMessage()],500);
        }


    }
}
