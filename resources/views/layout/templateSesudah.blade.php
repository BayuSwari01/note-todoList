<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
  <body>
    <div class="utama" style="display: flex; flex-direction: column; min-height: 100vh">
      {{-- bagian nav bar --}}
      @section('navbar')
      <nav class="navbar navbar-expand-lg bg-primary">
        <div class="row container-fluid">
            <div class="col-9 text-start" onclick="location.href='{{url('home')}}'">
                <h2 class="text-light">NoteList</h2>
            </div>
            <div class="col-3 justify-content-end">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active  text-light" aria-current="page" href="{{url('note')}}" style="margin-right: 15px">Note</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="{{url('todoList')}}" style="margin-right: 15px">Todo List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="{{url('')}}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </nav>
      @show

      {{-- body page --}}
      <div class="container-fluid text-start bg-secondary" style="flex: 1 1 0%;">
        @yield('content')
      </div>
    </div>
      
    
  </body>
</html>