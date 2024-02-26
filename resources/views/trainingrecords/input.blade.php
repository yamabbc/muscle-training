<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>トレーニング記録</title>
 <body>
   @include('layouts.header')
     <main>
        @if (session('flash_message'))
        <p>{{ session('flash_message') }}</p>
        @endif
        <div class="mb-5 ms-5">
                 <a href="{{ route('usertrainings.index') }} "class="text-decoration-none">&lt; 戻る</a>
             </div>
          <article class="container">
             <form action="{{ route('trainingrecords.store') }}" method="POST">
                  @csrf

                
                  <div class="row mb-5 row justify-content-center">
                    <lavel for="trainingdate" class="col-form-label col-sm-2">トレーニング日</lavel> 
                    <div class="col-sm-5">
                      <input type="date" class="form-control" id="trainingdate" name="trainingdate">
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    <lavel for="trainingpart" class="col-form-label col-sm-2">部位</lavel>
                    <div class="col-sm-5">
                      <select class="form-select" id="trainingpart" name="trainingpart"></div>
                        @foreach($trainingname as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    <lavel for="trainingtimes" class="col-form-label col-sm-2">回数</lavel>
                    <div class="col-sm-5 d-flex align-items-center">
                      <input type="text" class="form-control mx-auto0" id="trainingtimes" name="trainingtimes"><span class="align-bottom">回</span>
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    <lavel for="trainingweight" class="col-form-label col-sm-2">重量</lavel>
                    <div class="col-sm-5">
                      <select class="form-select" id="trainingweight" name="trainingweight">
                        @foreach($weight as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="mb-5 text-center">
                   <button type="submit" class="btn btn-outline-primary justify-content-center">登録</button>
                  </div>
             </form>
          </article>
     </main>
     @include('layouts.footer')
   </div>
 </body>
 
 </html>