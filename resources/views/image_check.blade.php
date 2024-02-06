<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>画像登録確認</title>
</head>
<body>
    <article class="trainings">
      <div class="trainings-ui">
        <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
      </div>
    <img src="{{asset($Training_image->path)}}" height="200px" width="300px">
</body>
</html>