<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;

class TrainingManagementController extends Controller{

    //一覧ページ
      public function index() {

        $trainings = DB::table('trainings')->select('id','name','category')->get();
        // 変数$trainingsをindex.blade.phpファイルに渡す
        return view('trainingmanagements.index',compact('trainings'));
    }

     // 編集ページ
      public function edit() {
        
        $trainings = DB::table('trainings')->select('name','how','effect','point')->get();

        // 変数$trainingsをedit.blade.phpファイルに渡す
        return view('trainingmanagements.edit',compact('trainings'));
     }

     //更新機能
     public function update(TrainingRequest $request, Trainings $trainings)
     {
      $trainings = new Trainings();
      $trainings->trainingname = $request->input('trainingname');
      $trainings->save();

      return redirect()->route('trainingmanagements.store', $trainings);

     }

     // 登録ページ
     public function create() {
        
         return view('trainingmanagements.create');
     }

     // 作成機能
     public function store(TrainingRequest $request)
     {
         
         $trainings->trainingname = $request->input('trainingname');
         $trainings->traininghow = $request->input('traininghow');
         $trainings->save();
 
         return redirect()->route('trainingmanagemets.index')->with('flash_message', '登録が完了しました。');
     }
}

