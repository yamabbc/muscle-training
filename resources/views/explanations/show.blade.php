<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>トレーニング記録</title>
 <body>
   @include('layouts.header')
     <main>
         <article class="trainings">
             <div class="trainings-ui">
                 <div>
                   <a href="{{ route('explanations.select') }}">&lt; 戻る</a>
                 </div>
             </div>

             @foreach($trainings as $training)
             <div>
             <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
             <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
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
     @include('layouts.footer')
 </body>
 
 </html>