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
      $datearrays[]=[$trainingrecord4->date];
      $dates = [];
      foreach($datearrays as $datearray)
        if (!in_array($datearray, $dates)) {
          $dates[] = $datearray;

          
        }
      }
        // 変数$trainingsをdate.blade.phpファイルに渡す
        return view('trainingresults.date',compact('trainingrecords4','trainingrecords3','datearrays','dates'));
      }



      // 詳細ページ
      public function display($date) {
            
        $trainingrecordss = Training_record::where('date',$date)->get();
        $part = Config::get('category.$part');
        
        

    

     // 変数$trainingrecordsをdisplay.blade.phpファイルに渡す
       return view('trainingresults.display',compact('trainingrecordss'),['part'=>$part],['date' => $date]);
    }
}