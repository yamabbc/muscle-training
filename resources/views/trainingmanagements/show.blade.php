<!DOCTYPE html>
 <html lang="ja">
   @include('layouts.head')
    <title>管理者詳細</title>
 <body>
   @include('layouts.managementheader')
    <main>
       <div>
         <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
       </div>
        <div class="container">
         <h3>トレーニング名</h3>
         <p>{{ $trainings->name }}</p>
         <h3>やり方</h3>
         <p>{{ $trainings->how }}</p>
         <h3>効く部位</h3>
         <p>{{ $trainings->effect }}</p>
         <h3>ポイント</h3>
         <p>{{ $trainings->point }}</p>
        </div>
    </main>
     @include('layouts.footer')
 </body>
 </html>