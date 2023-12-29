<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use App\Models\Training_image;

class UserTrainingController extends Controller
{
     // 解説ページ
     public function explanation() {
        
        $trainings = DB::table('trainings')->select('name','how','effect','point')->get();
             
 
        // 変数$trainingsをexpanation.blade.phpファイルに渡す
        return view('usertrainings.explanation',compact('trainings'));
     }
}
