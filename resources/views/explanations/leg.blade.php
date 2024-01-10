<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>脚詳細</title>
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

             <div>
               <h3>トレーニング名</h3>
               <p>{{ $trainings->name }}</p>
               <h3>やり方</h3>
               <p>{{ $trainings->how }}</p>
               <h3>効く部位</h3>
               <p>{{ $trainings->effect }}</p>
               <h3>ポイント</h3>
               <p>{{ $trainings->point }}</p>
             </div>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>