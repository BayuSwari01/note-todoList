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
          <div class="col-9 text-start text-white">
            <h2 class="text-light">NoteList</h2>
          </div>
          <div class="col-3 justify-content-end">
            <button class="btn btn-outline-light position-absolute top-50 end-0 translate-middle-y" type="submit" style="margin-right: 10px">Login</button>
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