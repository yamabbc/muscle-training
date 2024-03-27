<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Training_image;
use App\Models\Training;
use Illuminate\Support\Facades\Config;

class UploadController extends Controller{
        /*画面表示*/
    public function index(){
      $trainingid = Config::get('category.$trainingid');
      return view('image_register',['trainingid'=>$trainingid]);
    }
        /* 画面表保存*/
    public function imagePost(Request $request){
      $file_name = $request->file('img');

      
        // ファイル情報をDBに保存
      $trainings = Training::all();
      $Training_image = new Training_image();
      $Training_image->training_id = $request->trainingid;
      $Training_image->path = base64_encode(file_get_contents($file_name));
      $Training_image->sort = 1;
      $Training_image->save();
      return view('image_check')->with('Training_image',$Training_image);
    }
}

