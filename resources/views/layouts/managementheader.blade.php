<div class="wrapper">
     <header>
       <nav class="navbar navbar-light bg-light">
          <div class="container">
             <a class="navbar-brand">筋トレ管理アプリ</a>
             <form method="POST" action="{{ route('admin.login.destroy') }}">
                @method('DELETE')
                @csrf
                <button type="submit">ログアウト</button>
            </form>        
        </div>
        </nav>
     </header>