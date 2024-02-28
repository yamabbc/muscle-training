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
              <div class="container">
              <div class="row">
              <div class="col-3">
                @if($training->id==1)
                 <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
                @elseif($training->id==2)
                 <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
                @elseif($training->id==3)
                 <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
                @elseif($training->id==4)
                 <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
                @elseif($training->id==5)
                 <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
                @elseif($training->id==6)
                 <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
                @elseif($training->id==7)
                 <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
                @elseif($training->id==8)
                 <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
                @elseif($training->id==9)
                 <img src="{{asset($images[0]->path)}}"height="200px" width="300px">
                @elseif($training->id==10)
                 <img src="{{asset($images[1]->path)}}"height="200px" width="300px">
                @endif
                </div>
                <div class="col-3 mb-5">
                <h3>トレーニング名</h3>
                <p>{{ $training->name }}</p>
                <h3>やり方</h3>
                <p>{{ $training->how }}</p>
                <h3>効く部位</h3>
                <p>{{ $training->effect }}</p>
                <h3>ポイント</h3>
                <p>{{ $training->point }}</p>
              </div>
              </div>
            @endforeach
         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>