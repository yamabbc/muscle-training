<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>トレーニング解説</title>
 <body>
   @include('layouts.header')
     <main>
         <article class="trainingsshow">
             <div class="trainings-ui">
                 <div>
                   <a href="{{ route('explanations.select') }}">&lt; 戻る</a>
                 </div>
             </div>
            @foreach($trainings as $training)
            <div class="container bg-body-secondary border border-success-subtle">
              <div class="row">
                <div class="col-8 mb-5">
                  <h3><u>トレーニング名</u></h3>
                  <p>{{ $training->name }}</p>
                  <h3><u>やり方</u></h3>
                  <p>{!! nl2br(htmlspecialchars($training->how)) !!}</p>
                  <h3><u>効く部位</u></h3>
                  <p>{{ $training->effect }}</p>
                  <h3><u>ポイント</u></h3>
                  <p>{!! nl2br(htmlspecialchars($training->point)) !!}</p>
                </div>
                <div class="col-4 mb-5">
                  @if($training->id==1)
                    <img src="{{asset($images[0]->path)}}"height="auto" width="100%">
                  @elseif($training->id==2)
                    <img src="{{asset($images[1]->path)}}"height="auto" width="100%">
                  @elseif($training->id==3)
                    <img src="{{asset($images[0]->path)}}"height="auto" width="100%">
                  @elseif($training->id==4)
                    <img src="{{asset($images[1]->path)}}"height="auto" width="100%">
                  @elseif($training->id==5)
                   <img src="{{asset($images[0]->path)}}"height="auto" width="100%">
                  @elseif($training->id==6)
                   <img src="{{asset($images[1]->path)}}"height="auto" width="100%">
                  @elseif($training->id==7)
                   <img src="{{asset($images[0]->path)}}"height="auto" width="100%">
                  @elseif($training->id==8)
                   <img src="{{asset($images[1]->path)}}"height="auto" width="100%">
                  @elseif($training->id==9)
                   <img src="{{asset($images[0]->path)}}"height="auto" width="100%">
                  @elseif($training->id==10)
                   <img src="{{asset($images[1]->path)}}"height="auto" width="100%">
                  @endif
                </div>
              </div>
            </div>
            @endforeach
         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>