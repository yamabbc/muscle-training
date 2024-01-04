<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>管理者編集</title>
 </head>
 <body>
     <header>
         <nav>
             <a>筋トレ管理アプリ</a>
             <a href="#" class="btn">ログアウト</a>
         </nav>
     </header>
     <main>
         <article class="trainings">
             <div class="trainings-ui">
                 <div>
                     <!-- ここに作成する -->
                 </div>
                 <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
             </div>
             <form action="{{ route('trainingmanagements.store') }}" method="POST">
                  @csrf

                  <div>
                    <lavel for="trainingcategory">トレーニングカテゴリー</lavel> 
                    <select id="trainingcategory" name="trainingcategory">
                    @foreach($partvalue as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div>
                    <lavel for="trainingname">トレーニング名称</lavel> 
                    <input type="text" id="trainingname" name="trainingname">
                  </div>
                  <div>
                    <lavel for="traininghow">やり方</lavel>
                    <textarea id="traininghow" name="traininghow"></textarea>
                  </div>
                    <lavel for="trainingeffect">効果</lavel>
                    <textarea id="trainingeffect" name="trainingeffect"></textarea>
                  <div>
                    <lavel for="trainingpoint">ポイント</lavel>
                    <textarea id="trainingpoint" name="trainingpoint"></textarea>
                   </div>
                   <button type="submit">登録</button>
             </form>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>