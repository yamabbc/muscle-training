<!DOCTYPE html>
 <html lang="ja">
  @include('layouts.head')
  <title>管理者編集</title>
 <body>
   @include('layouts.managementheader')
     <main>
         <article class="trainings">
             <div class="trainings-ui">
                 <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
             </div>
             <form action="{{ route('trainingmanagements.store') }}" method="POST">
                  @csrf
                <article class="container">
                  <div class="mb-3">
                    <lavel for="trainingcategory">トレーニングカテゴリー</lavel> 
                    <select id="trainingcategory" name="trainingcategory">
                    @foreach($partvalue as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <lavel for="trainingname">トレーニング名称</lavel> 
                    <input type="text" id="trainingname" name="trainingname">
                  </div>
                  <div>
                    <lavel for="traininghow">やり方</lavel>
                    <textarea id="traininghow" class="form-control" style="height: 120px" name="traininghow"></textarea>
                  </div>
                    <lavel for="trainingeffect">効果</lavel>
                    <textarea id="trainingeffect" class="form-control" style="height: 120px" name="trainingeffect"></textarea>
                  <div>
                    <lavel for="trainingpoint">ポイント</lavel>
                    <textarea id="trainingpoint" class="form-control mb-3" style="height: 120px" name="trainingpoint"></textarea>
                   </div>
                  <div class="text-center">
                   <button type="submit" class="btn btn-outline-primary">登録</button>
                  </div>
                </article>
             </form>
         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>