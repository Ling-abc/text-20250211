<html> 
    <head> 
        <meta charset="utf-8"> 
        <script src="/assets/js/jquery-2.2.4.min.js" defer></script> 
        <script src="/assets/js/bootstrap.min.js" defer></script> 
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css"> 
        <title class='text-pink'>@yield('title')</title> 
    </head> 
    <body> 

        
   
    <body> 
        <header> 
            @if(session()->has('user_id'))
            <a href="/user/auth/signout">登出</a>
            @else
            <a href="/user/auth/signup">註冊</a> 
            <a href="/user/auth/signin">登入</a> 
            <a href="/google/auth">google登入</a>
            @endif
        </header> 
        <div class="container"> 
            @yield('content') 
        </div> 
        <footer> 
            <a href="#">聯絡我們</a> 
        </footer> 
    </body> 
</html>