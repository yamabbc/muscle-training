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

        // 変数$trainingsをdate.blade.phpファイルに渡す
        return view('trainingresults.date',compact('trainingrecords4','trainingrecords3'));
      }



      // 詳細ページ
      public function display($id) {
            
        $trainingrecordss = Training_record::find($id);
        $part = Config::get('category.$part');
        
        

    

     // 変数$trainingrecordsをdisplay.blade.phpファイルに渡す
       return view('trainingresults.display',compact('trainingrecordss'),['part'=>$part,]);
    }
}