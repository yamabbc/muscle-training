<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
   <title>管理者登録</title>
 <body>
  @include('layouts.managementheader')
    <main>
       <div>
          <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
       </div>
            <form action="{{ route('trainingmanagements.update',['id'=>$trainings->id]) }}" method="POST">
               @csrf
               @method('PATCH')
                 @foreach ($errors->all() as $error)
                  <p style="color:red">{{ $error }}</p>
                 @endforeach
               <article class="container">
                  <div class="mb-3">
                    <lavel for="trainingcategory">トレーニングカテゴリー</lavel> 
                    <select id="trainingcategory" name="trainingcategory">
                      @foreach($partvalue as $key => $value)
                      @if ($key === $trainings->category)
                        <option value="{{ $key }}" selected="trainings->category">{{ $value }}</option>
                      @else
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <lavel for="trainingname">トレーニング名</lavel> 
                    <input type="text" id="trainingname" name="trainingname" value="{{ $trainings->name }}">
                  </div>
                  <div class="mb-3">
                    <lavel for="traininghow">やり方</lavel>
                    <textarea id="traininghow" class="form-control" style="height: 120px" name="traininghow">{{ $trainings->how }}</textarea>
                  </div>
                    <lavel for="trainingeffect">効く部位</lavel>
                    <textarea id="trainingeffect" class="form-control" style="height: 120px" name="trainingeffect">{{ $trainings->effect }}</textarea>
                  <div>
                    <lavel for="trainingpoint">ポイント</lavel>
                    <textarea id="trainingpoint" class="form-control mb-3" style="height: 120px" name="trainingpoint">{{ $trainings->point }}</textarea>
                   </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-outline-primary">更新</button>
                  </div>
               </article>
            </form>
    </main>
  @include('layouts.footer')
 </body>
 
 </html>