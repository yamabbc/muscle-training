<div class="wrapper">
   <header>
      <nav class="navbar navbar-light bg-light">
         <div class="container">
             <a class="navbar-brand">筋トレ管理アプリ</a>
            <div class="text-right">
             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST">
               @csrf
             </form>
            </div>
         </div>
      </nav>
   </header>