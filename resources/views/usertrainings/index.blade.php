<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>一覧画面</title>
 <body>
   @include('layouts.header')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <main>
        <style>
          .btn {
            height: 80px;
          }
        </style>

              <div class="container">
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('explanations.select') }}"><button class="btn btn-primary btn-lg w-50" type=="button">トレーニング解説 <i class="bi bi-lightbulb"></i></button></a>
                </div>
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('trainingrecords.input') }}"><button class="btn btn-primary btn-lg w-50" type=="button">記録 <i class="bi bi-pencil"></i></button></a>
                </div>
                <div class="m-5 pt-5 text-center">
                  <a href="{{ route('trainingresults.date') }}"><button class="btn btn-primary btn-lg w-50" type=="button">成果 <i class="bi bi-book"></i></button></a>
                </div>
              </div>
    </main>
     @include('layouts.footer')
 </body>
 
 </html>