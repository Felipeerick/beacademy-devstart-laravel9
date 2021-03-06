<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
     <header class='mt-4'>
        <nav class='navbar navbar-expand-lg navbar navbar-dark bf-dark'>
            <div class='container'>
              <a class='btn btn-sucess' href="{{ route('users.index')}}">Listar Usuarios</a>
              <a class='btn btn-alert' href="{{ route('posts.index') }}">Posts</a>
              </div>
              <div class='col-2'>
                  <ul class="navbar-nav mr-auto">
                        @if(Auth::User())
                        <li class='nav-item'>
                            <a href="#" class="nav-link text-dark">{{ Auth::User()->name }}</a>
                        </li>
                             @if(Auth::user()->is_admin == 1)
                             <li class='nav-item'>
                               <a href="{{ route('dashboard')}}" class="nav-link text-dark">Dashboard</a>
                             </li>
                             @endif
                        <li class='nav-item'>
                             <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                          <button type="submit" class="text-white" >Sair</button>                         
                                        </form>
                         </li>
                        @else
                        <li class='nav-item'>
                            <a href="{{ route('login') }}" class="nav-link text-dark">Entrar</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{ route('register') }}" class="nav-link text-dark">Cadastrar</a> 
                        </li>
                        @endif
                  </ul>
              </div>       
            </nav>

     </header>
  <body>
        <div class="container">
        @yield('body')
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>