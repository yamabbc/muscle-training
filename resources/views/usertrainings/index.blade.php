<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>トレーニング記録</title>
 <body>
   @include('layouts.header')
    <main>
        <style>
          .btn {
            height: 80px;
          }
        </style>

              <div class="container">
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('explanations.select') }}"><button class="btn btn-primary btn-lg w-50" type=="button">トレーニング</button></a>
                </div>
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('trainingrecords.input') }}"><button class="btn btn-primary btn-lg w-50" type=="button">記録</button></a>
                </div>
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('trainingresults.date') }}"><button class="btn btn-primary btn-lg w-50" type=="button">成果</button></a>
                </div>
              </div>
    </main>
     @include('layouts.footer')
 </body>
 
 </html>