<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @foreach($trainings as $training)
     <title>{{$part[$training->category]}}詳細</title>
     @endforeach
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
                   <a href="{{ route('explanations.select') }}">&lt; 戻る</a>
                 </div>
             </div>
             @foreach($trainings as $training)
             <div>
             <h3>トレーニング名</h3>
               <p>{{ $training->name }}</p>
               <h3>やり方</h3>
               <p>{{ $training->how }}</p>
               <h3>効く部位</h3>
               <p>{{ $training->effect }}</p>
               <h3>ポイント</h3>
               <p>{{ $training->point }}</p>
             </div>
             @endforeach
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>