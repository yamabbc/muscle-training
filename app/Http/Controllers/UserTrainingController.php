<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use App\Models\Training_record;
use App\Models\Training_image;

class UserTrainingController extends Controller{
    //一覧ページ
    public function index() {
      $trainings = Training::all();
      $trainingrecords = Training_record::all();
      // 変数$trainingsをindex.blade.phpファイルに渡す
      return view('usertrainings.index',compact('trainings','trainingrecords'));
    }
}
