<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use App\Models\Readxlsx;
use App\Models\Readxml;

class AdminController extends Controller
{
    public function index(){
        return view('adminusers.index');
    }

    public function readXML(Request $request)
    {
        $xml = $request->xmlFile;
        // dd($xml);
        $xmlString = file_get_contents($xml);
        
        // $xmlString = file_get_contents(public_path('/storage/xml/fileX2.xml'));
        $xmlObject = simplexml_load_string($xmlString);
                   
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true); 
    
        // dd($phpArray['Object']['Building']['Unit']);
        
        $rowLength=count($phpArray['Object']['Building']['Unit']);
        // $row2Length=count($phpArray['Object']['Building']['Unit'][$row]['Meter']);


        // dd($phpArray);
        

            for ($row = 0; $row < $rowLength; $row++) {
                $row2Length=count($phpArray['Object']['Building']['Unit'][$row]['Meter']);
                for($row2=0; $row2 < $row2Length; $row2++){

                    $moduleNumber=$phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['secondaryAddress'];
                    $deviceStatus=$phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['info'];
                    $deviceType = $phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['type'];

                    $readingValueControl=$phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2];
                    if(isset($readingValueControl['reading'])){
                        $meterValue = $phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['reading']['value'];
                        $meterUnit = $phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['reading']['unit'];
                        $readTime = $phpArray['Object']['Building']['Unit'][$row]['Meter'][$row2]['reading']['time'];
                    }
                    else{
                        $meterValue = null;
                        $readTime = null;
                        $meterUnit = null;

                    }
                    $readXML = [
                        'moduleNumber' => $moduleNumber,
                        'readTime' => $readTime,
                        'meterValue' => $meterValue,
                        'deviceStatus' => $deviceStatus,
                        'deviceType' => $deviceType,
                        'meterUnit' => $meterUnit,
                    ];
                    Readxml::create($readXML);
                    
                    // echo "$secondaryAddress  $meter  $readingTime   $deviceInfo" . '<br>';
                }
                 
                
            }
            // echo "$secondaryAddress  $meter  $readingTime   $deviceInfo" . '<br>';
        // dd($unitLength);
        // dd($phpArray);
        // dd($phpArray['name']);
        // dd($phpArray['Object']['name']);
        // dd($phpArray['Object']['Building']['Unit'][0]);
        // dd($phpArray['Object']['Building']['Unit'][2]['Meter'][1]['reading']['value']);


        
    }

    public function readXLSX(Request $request)
    {
        $reader = new ReaderXlsx();
        // $path = public_path('/storage/xml/fileX.xlsx');
        $path = $request->xlsxFile;
        $spreadsheet = $reader->load($path);
        $sheet = $spreadsheet->getActiveSheet();
        $worksheetInfo = $reader->listWorksheetInfo($path);
        // dd($path);
        // dd($sheet);
        // dd($worksheetInfo);
        $totalRows = $worksheetInfo[0]['totalRows'];
        
        $result = '';

        for ($row = 2; $row <= $totalRows; $row++) {
            $moduleNumber = $sheet->getCell("G{$row}")->getValue();
            $readTime = $sheet->getCell("K{$row}")->getValue();
            $meterValue = $sheet->getCell("I{$row}")->getValue();
            $deviceStatus = $sheet->getCell("L{$row}")->getValue();
            $deviceType =  $sheet->getCell("H{$row}")->getValue();
            $meterUnit =  $sheet->getCell("J{$row}")->getValue();

            // echo "$moduleNumber  $readTime  $meterValue" . '<br>';
            if($meterValue===''){
                $meterValue = null;
            }

            if($meterUnit===''){
                $meterUnit = null;
            }

            $readXLSX = [
                'moduleNumber' => $moduleNumber,
                'readTime' => $readTime,
                'meterValue' => $meterValue,
                'deviceStatus' => $deviceStatus,
                'deviceType' => $deviceType,
                'meterUnit' => $meterUnit,
            ];
            Readxlsx::create($readXLSX);
        
            // echo "$moduleNumber  $dateTime  $meterValue" . '<br>';
            // echo $id . '<br>';
        }
    }
}
