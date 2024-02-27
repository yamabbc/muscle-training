<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>成果年月日</title>
 <body>
   @include('layouts.header')
     <main>
         <article class="trainings">
             <div class="trainings-ui">
                 <a href="{{ route('usertrainings.index') }}">&lt; 戻る</a>
             </div>
             

             <style>
                .accordion-btn::after{
                  content: '▼';
                  float: right;
                }
               .accordion-btn.open::after{
                  content: '▲';
                }
             </style>
             
             <div class="container text-center">
               <p class="h3 mb-4">トレーニング日</p>
                 @foreach($dateArray as $key=> $value)
                   <div class="accordion-btn btn btn-success btn-lg w-50 fs-3" type=="button">{{$key}}年</div>
                     <div class="accordion-content">
                       @foreach($value as $i =>$v)
                       @php
                       $s = str_replace('-', '月',$v);
                       @endphp
                         <a href="{{ route('trainingresults.display',['date'=> "$key-$v"]) }}"><button class="btn btn-outline-success btn-lg w-50 fs-5" type=="button">{{ $s}} 日</button></a><br>
                       @endforeach 
                     </div>
                 @endforeach 

                


               <script>
                 document.querySelectorAll('.accordion-btn').forEach(function(el){
                   const next = el.nextElementSibling
                   const nextH = next.scrollHeight + 'px'
                   next.style.overflow = 'hidden'
                   next.style.transition = '0.5s'
                   next.style.height = el.classList.contains("open") ? nextH : 0
                   el.onclick = () => next.style.height = el.classList.toggle('open') ? nextH : 0
                 })
               </script>
         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>