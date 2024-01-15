<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>管理者詳細</title>
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
                 <a href="{{ route('trainingresults.date') }}">&lt; 戻る</a>
             </div>

             <div>
               <h3>トレーニング日</h3>
               <p>{{ $trainingrecordss->date}}</p>
               <h3>トレーニング内容</h3>
               <th>{{$part[$trainingrecordss->training_id]}}</th>
               <h3>回数</h3>
               <p>{{ $trainingrecordss->times}}回</p>
               <h3>重量</h3>
               <p>{{ $trainingrecordss->weight/1000}}kg</p>
             </div>

         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>