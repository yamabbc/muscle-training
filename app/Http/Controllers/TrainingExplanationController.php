<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\TrainingRequest;

class TrainingExplanationController extends Controller{

    //一覧ページ
    public function select() {

        $trainings = Training::all();


        // 変数$trainingsをindex.blade.phpファイルに渡す
        return view('explanations.select',compact('trainings'));
    }


    
     // 腕詳細ページ
    public function arm($id) {

        $trainings = Training::find($id);

           

      // 変数$trainingsをarm.blade.phpファイルに渡す
      return view('explanations.arm',compact('trainings'));
    }

    // 肩詳細ページ
    public function shoulder($id) {

        $trainings = Training::find($id);
    

        // 変数$trainingsをshoulder.blade.phpファイルに渡す
        return view('explanations.shoulder',compact('trainings'));
    }

    // 胸詳細ページ
    public function chest($id) {

        $trainings = Training::find($id);
    

        // 変数$trainingsをchest.blade.phpファイルに渡す
        return view('explanations.chest',compact('trainings'));
    }

    public function back($id) {

        $trainings = Training::find($id);
    

        // 変数$trainingsをback.blade.phpファイルに渡す
        return view('explanations.back',compact('trainings'));
    }

    // 脚詳細ページ
    public function leg($id) {

        $trainings = Training::find($id);
    

        // 変数$trainingsをleg.blade.phpファイルに渡す
        return view('explanations.leg',compact('trainings'));
    }

}