<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Training;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\TrainingRequest;
use Illuminate\Support\Facades\Auth;

class TrainingManagementController extends Controller{
      //一覧ページ
      public function index() {
        $trainings = DB::table('trainings')->select('id','name','category')->get();
        $part = array(
          1 => '腕',
          2 => '肩',
          3 => '胸',
          4 => '背中',
          5 => '脚',
        );
        return view('trainingmanagements.index',compact('trainings','part'));
      }
     // 詳細ページ
      public function show($id) {
                   //モデル
        $trainings = Training::find($id);
        // 変数$trainingsをshow.blade.phpファイルに渡す
        return view('trainingmanagements.show',compact('trainings'));
      }
     // 編集ページ
      public function edit($id) {
        $trainings = Training::find($id);
        $partvalue = Config::get('category.$part');
        return view('trainingmanagements.edit',compact('trainings','partvalue'));
      }
     //更新機能
      public function update(TrainingRequest $request, $id) {
        $trainings = Training::find($id);
        $trainings->category = $request->trainingcategory;
        $trainings->name = $request->input('trainingname');
        $trainings->how = $request->input('traininghow');
        $trainings->effect = $request->input('trainingeffect');
        $trainings->point = $request->input('trainingpoint');
        $trainings->save();
        return redirect()->route('trainingmanagements.index')->with('flash_message', '内容を編集しました。');
      }
     // 登録ページ
      public function create() {
        $partvalue = Config::get('category.$part');
        return view('trainingmanagements.create',
        ['partvalue'=>$partvalue,]);
      }
     // 作成機能
      public function store(TrainingRequest $request) {
        $auths = Auth::user();
        $trainings = new Training();
        $trainings->admin_id = $auths->id;
        $trainings->category = $request->trainingcategory;
        $trainings->name = $request->input('trainingname');
        $trainings->how = $request->input('traininghow');
        $trainings->effect = $request->input('trainingeffect');
        $trainings->point = $request->input('trainingpoint');
        $trainings->save();
        return redirect()->route('trainingmanagements.index')->with('flash_message', '登録が完了しました。');
      }
     //削除機能
      public function destroy(Request $request, $id) {
        $trainings = Training::find($id);
        $trainings->delete();
        return redirect()->route('trainingmanagements.index')->with('flash_message', '内容を削除しました。');
      }
}

