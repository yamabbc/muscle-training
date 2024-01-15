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
                 <a href="{{ route('trainingmanagements.create') }}"><button type=="button">登録</button></a>
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
                   <th>{{$part[$training->category]}}</th>           {{-- 'パラメータ => 値' --}} 
                   <th><a href="{{ route('trainingmanagements.show',['id'=>$training->id]) }}"><button type=="button">詳細</button></a></th>
                   <th><a href="{{ route('trainingmanagements.edit',['id'=>$training->id]) }}"><button type=="button">編集</button></a><th>
                   <form action="{{ route('trainingmanagements.destroy',['id'=>$training->id]) }}" method="POST" onsubmit="return confirm('本当に削除してもよろしいですか？');">
                      @csrf
                      @method('DELETE')
                      <button type="submit">削除</button>
                   </form>
                 </tr>
                @endforeach
             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>