<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\TrainingRequest;
use App\Models\Training_image;

class TrainingExplanationController extends Controller{

    //一覧ページ
    public function select() {

        $trainings = Training::all();
        $part = Config::get('category.$part');


        // 変数$trainingsをselect.blade.phpファイルに渡す
        return view('explanations.select',compact('trainings','part'));
        
    }

    // 詳細ページ
    public function show($category) {

        $trainings = Training::where('category',$category)->get();
        $part = Config::get('category.$part');
        $images = Training_image::where('training_id',$category)->get();
        
    

        // 変数$trainingsをshoulder.blade.phpファイルに渡す
        return view('explanations.show',compact('trainings','part','images'));
        
    }

    }

