<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>部位選択</title>
 <body>
   @include('layouts.header')
     <main>
        @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
        @endif
         <article class="trainings">
             <div class="trainings-ui">
               <a href="{{ route('usertrainings.index') }}">&lt; 戻る</a>
             </div>
                  <div class="container">
                    <h3>部位を選択してください</h3>
                    <div class="row">
                      <div class="col-6 text-center">
                        <a href="{{ route('explanations.show',[$trainings[0]])}}"><button type=="button" class="rounded"><img src="{{asset('storage/表紙腕解説.png')}}"height="auto" width="150px"></button><br><p>腕解説</p></a><br>
                      </div>
                      <div class="col-6 text-center">
                        <a href="{{ route('explanations.show',[$trainings[1]])}}"><button type=="button" class="rounded"><img src="{{asset('storage/表紙肩解説.png')}}"height="auto" width="150px"></button><br><p>肩解説</p></a><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-center">
                        <a href="{{ route('explanations.show',[$trainings[2]]) }}"><button type=="button" class="rounded"><img src="{{asset('storage/表紙胸解説.png')}}"height="auto" width="150px"></button><br><p>胸解説</p></a><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 text-center">
                        <a href="{{ route('explanations.show',[$trainings[3]]) }}"><button type=="button" class="rounded"><img src="{{asset('storage/表紙背中解説.png')}}"height="auto" width="150px"></button><br><p>背中解説</p></a><br>
                      </div>
                      <div class="col-6 text-center">
                        <a href="{{ route('explanations.show',[$trainings[4]]) }}"><button type=="button" class="rounded"><img src="{{asset('storage/表紙脚解説.png')}}"height="auto" width="150px"></button><br><p>脚解説</p></a><br>
                      </div>
                    </div>
                  </div>
         </article>
     </main>
     @include('layouts.footer')
 </body>
 
 </html>