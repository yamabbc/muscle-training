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
                 <a href="{{ route('explanations.show',[$trainings[0]]) }}"><button type=="button">腕解説</button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[1]]) }}"><button type=="button">肩解説</button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[2]]) }}"><button type=="button">胸解説</button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[3]]) }}"><button type=="button">背中解説</button></a><br>
                 <a href="{{ route('explanations.show',[$trainings[4]]) }}"><button type=="button">脚解説</button></a><br>
                 </tr>
             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>