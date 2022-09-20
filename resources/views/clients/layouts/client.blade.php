<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - title</title>
  <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
  @yield('css')
</head>

<body>
  @include('clients.parts.header')

  <main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-4">
          {{-- <aside>
            @section('sidebar')
              @include('clients.parts.sidebar')
            @show
          </aside> --}}
        </div>
        <div class="col-12">
          <div class="content">
            @yield('content')
          </div>
        </div>
      </div>
    </div>




  </main>

  @include('clients.parts.footer')

  <script src="{{ asset('assets/clients/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/clients/js/main.js') }}"></script>
  @stack('script')
</body>

</html>
