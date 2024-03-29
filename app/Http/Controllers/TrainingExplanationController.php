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
        $images = Training_image::select('path')->get();
        return view('explanations.select',compact('trainings','part','images'));
    }
    // 詳細ページ
    public function show($category) {
        $trainings = Training::where('category',$category)->get();
        $part = Config::get('category.$part');
        $images = Training_image::where('training_id',$category)->get();
        return view('explanations.show',compact('trainings','part','images'));
    }
}

