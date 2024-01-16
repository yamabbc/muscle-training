<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>成果年月日</title>
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
                 <a href="{{ route('usertrainings.index') }}">&lt; 戻る</a>
             </div>
             <h3>トレーニング日</h3> 

             <style>
               .accordion-btn {
                 cursor: pointer;
                 background: skyblue;
                 padding: 10px;
                }
               .accordion-content p{
                 padding: 10px;
                }
                .accordion-btn::after{
                  content: '▼';
                  float: right;
                }
               .accordion-btn.open::after{
                  content: '▲';
                }
             </style>
             <div class="accordion-btn open">2023年</div>
               <div class="accordion-content">
                 @foreach($trainingrecords as $trainingrecord)
                 
                      <a href="{{ route('trainingresults.display',['id'=>$trainingrecord->id]) }}"><button type=="button">@foreach($recorddates as $recorddate){{ $recorddate->date}} @endforeach </button></a><br>
                 @endforeach 
                
               </div>
               <div class="accordion-btn ">2022年</div>
               <div class="accordion-content">
                 @foreach($trainingrecords as $trainingrecord)
                      <a href="{{ route('trainingresults.display',['id'=>$trainingrecord->id]) }}"><button type=="button">{{ $trainingrecord->date}}</button></a><br>
                 @endforeach 
               </div>

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
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>