<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training_record;
use Illuminate\Support\Facades\Config;

class TrainingResultController extends Controller{

    public function date() {

      $trainingrecords4 = Training_record::whereYear('date', '2024')->get();
      $trainingrecords3 = Training_record::whereYear('date', '2023')->get();
      foreach ($trainingrecords4 as $trainingrecord4){
      $datearrays[]=$trainingrecord4->date;
      $dates = [];
      foreach($datearrays as $datearray)
        if (!in_array($datearray, $dates)) {
          $dates[] = $datearray;
      
          foreach ($trainingrecords3 as $trainingrecord3){
            $datearrays3[]=$trainingrecord3->date;
            $date3 = [];
            foreach($datearrays3 as $datearray3)
              if (!in_array($datearray3, $date3)) {
                $date3[] = $datearray3;

              }
            }
        }
      }
        // 変数$trainingsをdate.blade.phpファイルに渡す
        return view('trainingresults.date',compact('trainingrecords4','trainingrecords3','dates','date3'));
      }



      // 詳細ページ
      public function display($date) {
            
        
        $trainingrecordss = Training_record::where('date',$date)->get();
        $trainingname = Config::get('category.$trainingname');
        
        

    

     // 変数$trainingrecordsをdisplay.blade.phpファイルに渡す
       return view('trainingresults.display',compact('trainingrecordss','trainingname'),['date' => $date]);
    }
}