<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>管理者一覧</title>
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
                 <a href="{{ route('trainingmanagements.create') }}">登録</a>
             </div>
             <table class="products-table">
                 <tr>
                   <th>id</th>
                   <th>トレーニング名称</th>
                   <th>カテゴリ</th>
                     <ul>
                 </tr>
                @foreach($trainings as $training)
                 <tr>
                   <th>{{ $training->id }}</th>
                   <th>{{ $training->name }}</th>
                   <th>{{ $training->category }}</th>
                   <th><a href="{{ route('usertrainings.explanation') }}">詳細</a><th>
                     <th><a href="{{ route('trainingmanagements.edit') }}">編集</a><th>
                     <th><a href="#" class="btn">削除</a></th>
                 </tr>
                @endforeach
                     </ul>
                 </tr>
             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>