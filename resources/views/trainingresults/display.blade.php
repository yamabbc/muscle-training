<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>成果</title>
 <body>
   @include('layouts.header')
     <main>
         <article class="trainings">
             <div class="trainings-ui">
                 <a href="{{ route('trainingresults.date') }}">&lt; 戻る</a>
             </div>
             <div class="container">
               <h4>トレーニング日</h4>
               @php
                $d = substr_replace($date, '年',4,1);
                $e = substr_replace($d, '月',9,1);
                @endphp
               <p class="fs-5">{{$e}}日</p>

               <h4>トレーニング内容</h4>
               @foreach($trainingrecordss as $trainingrecordsss)
               <div class="card mb-1 border border-success">

                 <div class="row">
                   <div class="col-4 text-center">
                     <p class="card-text fs-5">{{$trainingname[$trainingrecordsss->training_id]}}</p>
                   </div>
                   <div class="col-4 text-center">
                     <p class="card-text fs-5">{{ $trainingrecordsss->times}}回</p>
                   </div>
                   <div class="col-4 text-center">
                     <p class="card-text fs-5">{{ $trainingrecordsss->weight/1000}}kg</p>
                   </div>
                  </div>

               </div>
               @endforeach
             </div>

         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>