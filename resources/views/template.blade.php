<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('titre')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        {{-- menu --}}
        <div class="col-md-12">
          @include('_navbar')
        </div>
        <div class="col-md-3">
          @include('_sidebar')
        </div>
        <div class="col-md-9" style="position:relative;top: 20vh">
          <h5 class="  text-primary">
            @yield('research')
        </h5>
        <div class="col-md-9" style="position:relative;top: 20vh">
          <h5 class="  text-primary">
            @yield('button')
        </h5>
          {{-- titre --}}
          <h5 class=" text-center text-primary">
              @yield('titre')
          </h5>
          {{-- notice --}}
          @if (session('notice'))
            <div class="col-md-6 mx-auto alert alert-success text-center ">
              {{session('notice')}}
            </div>
              
          @endif
          <div class="row">
            <div class="col-md-4 mx-auto">
              @if ($errors->any())
                  <ul class="alert text-danger ">
                      @foreach ($errors->all() as $e)
                          <li>{{$e}} </li>
                      @endforeach
                  </ul>
              @endif
            </div> 
          </div>
          {{-- contenu --}}
          @yield('content')
          {{-- footer  --}}
        </div>
      </div>
    </div>
   

      <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
      <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
      <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
      <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
      <script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{asset('assets/js/off-canvas.js')}}"></script>
      <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('assets/js/misc.js')}}"></script>
      <script src="{{asset('assets/js/settings.js')}}"></script>
      <script src="{{asset('assets/js/todolist.js')}}"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="{{asset('assets/js/dashboard.js')}}"></script>
      <!-- End custom js for this page -->
  </body>
</html>
