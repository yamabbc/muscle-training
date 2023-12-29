<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ユーザー解説</title>
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
                 <div>
                     <!-- ここに作成する -->
                 </div>
                 <a href="{{ route('trainingmanagements.index') }}">&lt; 戻る</a>
                 <a href="#" class="btn">更新</a>
             </div>

                 
                @foreach($trainings as $training)
                  <div>
                    <lavel for="trainingname">トレーニング名称</lavel> 
                    <input type="text" id="trainingname" name="trainingname" value="{{ $training->name }}">
                  </div>
                  <div>
                    <lavel for="traininghow">やり方</lavel>
                    <textarea id="traininghow" name="traininghow">{{ $training->how }}</textarea>
                  </div>
                    <lavel for="trainingeffect">効果</lavel>
                    <textarea id="trainingeffect" name="trainingeffect">{{ $training->effect }}</textarea>
                  <div>
                    <lavel for="trainingpoint">ポイント</lavel>
                    <textarea id="trainingpoint" name="trainingpoint">{{ $training->point }}</textarea>
                   </div>
                @endforeach
                     </ul>
                 </tr>
             </table>
         </article>
     </main>
     <footer>
         <p class="copyright">&copy; 筋トレ管理アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>