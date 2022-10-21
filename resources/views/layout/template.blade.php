<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <body>
      {{-- bagian nav bar --}}
      @section('navbar')
      <nav class="navbar navbar-expand-lg " style="background-color: #2f302f">
        <div class="row container-fluid">
          <div class="col-9 text-start text-white">
            <h2 style="color: #8bb158">NoteList</h2>
          </div>
          <div class="col-3 justify-content-end">
            <button class="btn btn-outline-success position-absolute top-50 end-0 translate-middle-y" type="submit" style="color: #8bb158; margin-right: 10px">Login</button>
          </div>
        </div>
      </nav>
      @show

      {{-- body page --}}
      <div class="container-fluid text-start" style="background-color: #424242; height: 1000px">
        @yield('content')
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>