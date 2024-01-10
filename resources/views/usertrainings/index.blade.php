<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ユーザー一覧</title>
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
             <table class="usertrainings-table">
                 <tr>
                   <th><a href="{{ route('explanations.select') }}"><button type=="button">トレーニング</button></a></th>
                   <th><a href="{{ route('trainingrecords.input') }}"><button type=="button">記録</button></a></th>
                   <th><a href="{{ route('trainingresults.date') }}"><button type=="button">成果</button></a></th>
                 </tr>

             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>