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
        @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
        @endif
         <article class="trainings">
             <div class="trainings-ui">
                 <a href="{{ route('usertrainings.index') }}">&lt; 戻る</a>
             </div>
             <form action="{{ route('trainingrecords.store') }}" method="POST">
                  @csrf


                  <div>
                    <lavel for="trainingdate">トレーニング日</lavel> 
                    <input type="date" id="trainingdate" name="trainingdate">
                  </div>
                  <lavel for="trainingpart">部位</lavel>
                    <select id="trainingpart" name="trainingpart">
                      @foreach($trainingname as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>
                  <div>
                    <lavel for="trainingtimes">回数</lavel>
                    <input type="text" id="trainingtimes" name="trainingtimes">回</textarea>
                  </div>
                  <div>
                    <lavel for="trainingweight">重量</lavel>
                    <select id="trainingweight" name="trainingweight">
                      @foreach($weight as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>
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