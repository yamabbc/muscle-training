<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>画像登録</title>
</head>
<body>
    <form method="post" action="{{route('image_check')}}" enctype="multipart/form-data">
        @csrf
        <div>
          <lavel for="trainingid">登録画像</lavel>
          <select id="trainingid" name="trainingid">
          @foreach($trainingid as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </div>

        <input type="file" name="img">
        <button>送信</button>
    </form>
</body>
</html>