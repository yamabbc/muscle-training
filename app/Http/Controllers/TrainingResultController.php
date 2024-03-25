<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training_record;
use Illuminate\Support\Facades\Config;

class TrainingResultController extends Controller{
    public function date() {

        foreach ($trainingrecords4 as $trainingrecord4){
          $datearrays[]=$trainingrecord4->date;
          $dates = [];
          foreach($datearrays as $datearray)
          if (!in_array($datearray, $dates)) {
            $dates[] = $datearray;
          }
        }
      $dateArray = [];
        foreach ($dates as $value) {
          $year = mb_substr($value, 0, 4);
          $date = mb_substr($value, 5, 5);
          if (!array_key_exists($year, $dateArray)) {
            //$year(キー)に[$date](配列)を追加
            $dateArray[$year] = [$date];
          } 
            else {
              $dateArray[$year][] = $date;
            }
        }
        // 変数$trainingsをdate.blade.phpファイルに渡す
        return view('trainingresults.date',compact('trainingrecords4','dates','dateArray','year'));
    }
      // 詳細ページ
      public function display($date) {
        $trainingrecordss = Training_record::where('date',$date)->get();
        $trainingname = Config::get('category.$trainingname');
        // 変数$trainingrecordsをdisplay.blade.phpファイルに渡す
        return view('trainingresults.display',compact('trainingrecordss','trainingname'),['date' => $date]);
      }
}