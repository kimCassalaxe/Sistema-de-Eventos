<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>


    </head>
    <body>
      
      <header>
        <div class="logo">
          <img src="/img/hdcevents_logo.svg" alt="">
        </div>
        <nav>
          <ul>
            <li><a href="/">Eventos</a></li>
            <li><a href="/events/create">Criar Eventos</a></li>
            <li><a href="/events/login">Entrar</a></li>
            <li><a href="/events/cadastrar">Cadastrar</a></li>
          </ul>
        </nav>
      </header>
      @yield('content')
        <footer>
          <p> HDC &copy; 2024</p>
        </footer>
    </body>
</html>
