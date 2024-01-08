<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="{{ asset('/') }}assets/pulgins/fontawesome/css/all.min.css" rel="stylesheet" >
  </head>
  <body>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-success navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Laravel aii</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ (request()->segment('1')=='' || request()->segment('1') == 'home') ?'active' : ''}}" aria-current="page" href="{{ url('home') }}">
                <i class="fas fa-tachometer-alt"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{( request()->segment('1') == 'pelanggan') ?'active' : ''}}" aria-current="page" href="{{ url('pelanggan') }}">
                <i class="fas fa-user"></i> Pelanggan
            </a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
{{-- end --}}

{{-- content --}}
<div class="mt2">
    <div class="container">
        @yield('content')
    </div>
      </div>
</div>
{{-- endcontent --}}
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>