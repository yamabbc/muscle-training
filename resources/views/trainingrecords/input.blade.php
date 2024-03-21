<!DOCTYPE html>
 <html lang="ja">
 @include('layouts.head')
 <title>トレーニング記録</title>
 <body>
   @include('layouts.header')
     <main>
        @if (session('flash_message'))
        <h4>{{ session('flash_message') }}</h4>
        @endif
          <div class="mb-5 ms-5">
            <a href="{{ route('usertrainings.index') }} "class="text-decoration-none">&lt; 戻る</a>
          </div>
          <article class="container">
             <form action="{{ route('trainingrecords.store') }}" method="POST">
                  @csrf
                  <div class="row mb-5 row justify-content-center">
                    @if ($errors->has('trainingdate'))
                     <p style="color:red" class="row justify-content-center">{{$errors->first('trainingdate')}}</p>
                    @endif
                    <lavel for="trainingdate" class="col-form-label col-sm-2 fs-4 text-success">トレーニング日</lavel> 
                    <div class="col-sm-5">
                      <input type="date" class="form-control  border-success" id="trainingdate" name="trainingdate">
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    @if ($errors->has('trainingpart'))
                      <p style="color:red" class="row justify-content-center">{{$errors->first('trainingpart')}}</p>
                    @endif
                    <lavel for="trainingpart" class="col-form-label col-sm-2 fs-3 text-success">部位</lavel>
                    <div class="col-sm-5">
                      <select class="form-select border-success" id="trainingpart" name="trainingpart"></div>
                        @foreach($trainingname as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    @if ($errors->has('trainingtimes'))
                      <p style="color:red" class="row justify-content-center">{{$errors->first('trainingtimes')}}</p>
                    @endif
                    <lavel for="trainingtimes" class="col-form-label col-sm-2 fs-3 text-success">回数</lavel>
                    <div class="col-sm-5 d-flex align-items-center">
                      <input type="text" class="form-control mx-auto0 border-success" id="trainingtimes" name="trainingtimes"><span class="align-bottom">回</span>
                    </div>
                  </div>
                  <div class="row mb-5 row justify-content-center">
                    @if ($errors->has('trainingweight'))
                      <p style="color:red" class="row justify-content-center">{{$errors->first('trainingweight')}}</p>
                    @endif
                    <lavel for="trainingweight" class="col-form-label col-sm-2 fs-3 text-success">重量</lavel>
                    <div class="col-sm-5">
                      <select class="form-select border-success" id="trainingweight" name="trainingweight">
                        @foreach($weight as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="mb-5 text-center">
                   <button type="submit" class="btn btn-primary justify-content-center">登録</button>
                  </div>
             </form>
          </article>
     </main>
     @include('layouts.footer')
   </div>
 </body>
 
 </html>