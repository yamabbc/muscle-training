<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>トレーニング部位選択</title>
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
                 <div>
                     <!-- ここに作成する -->
                 </div>
                 <a href="{{ route('usertrainings.index') }}">&lt; 戻る</a>
             </div>
             <table class="products-table">
                 <tr>
                 <a href="{{ route('explanations.show',[$trainings[0]]) }}">腕解説<button type=="button"><img src="{{asset('storage/表紙腕解説.png')}}"height="200px" width="300px"></button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[1]]) }}">肩解説<button type=="button"><img src="{{asset('storage/表紙肩解説.png')}}"height="200px" width="300px"></button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[2]]) }}">胸解説<button type=="button"><img src="{{asset('storage/表紙胸解説.png')}}"height="200px" width="300px"></button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[3]]) }}">背中解説<button type=="button"><img src="{{asset('storage/表紙背中解説.png')}}"height="200px" width="300px"></button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[4]]) }}">脚解説<button type=="button"><img src="{{asset('storage/表紙脚解説.png')}}"height="200px" width="300px"></button></a><br>
                 </tr>
             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>