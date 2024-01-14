<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training_record;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\TrainingRecordRequest;
use Illuminate\Support\Facades\Auth;


class TrainingRecordController extends Controller{


    public function input() {
        $weight = Config::get('category.$weight');
        $trainingname = Config::get('category.$trainingname');
          return view('trainingrecords.input',
           ['weight'=>$weight,],['trainingname'=>$trainingname,]);

   }



     // 作成機能
    public function store(TrainingRecordRequest $request) {
        
        $auths = Auth::user();
        $trainingrecords = new Training_record();
        $trainingrecords->user_id = $auths->id;
        $trainingrecords->training_id = $request->trainingpart;
        $trainingrecords->date = $request->input('trainingdate');
        $trainingrecords->times = $request->input('trainingtimes');
        $trainingrecords->weight = $request->input('trainingweight');
        $trainingrecords->save();

        return redirect()->route('trainingrecords.input')->with('flash_message', '登録が完了しました。');
    }



}
