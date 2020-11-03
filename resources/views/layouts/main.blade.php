<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("assets/img/apple-icon.png") }}">
  <link rel="icon" type="image/png" href="{{ asset("assets/img/favicon.png") }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ env("APP_NAME") }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet" />
  <link href="{{ asset("assets/css/now-ui-kit.css?v=1.3.0") }}" rel="stylesheet" />
  <link href="{{ asset("assets/demo/demo.css") }}" rel="stylesheet" />
  @yield('css')
</head>
<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url("/") }}">
          {{ env("APP_NAME") }}
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>Driver</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>Rider</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>Bussiness</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>Login</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <p>Sign Up</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <div class="section section-examples py-5" data-background-color="black">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-3">
          <h3 class="m-0">JCAR</h3>
        </div>
        <div class="col-md-3">
          <h3 class="m-0">JRIDE</h3>
        </div>
        <div class="col-md-3">
          <h3 class="m-0">JFOOD</h3>
        </div>
        <div class="col-md-3">
          <h3 class="m-0">JSHOP</h3>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer" data-background-color="black">
    <div class=" container ">
      <div class="copyright" id="copyright">
        &copy; 2020, Designed by
        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="{{ url("https://buatin.website") }}" target="_blank">Buatin Website</a>.
      </div>
    </div>
  </footer>
  @yield('js')
  <script src="{{ asset("assets/js/core/jquery.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("assets/js/core/popper.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("assets/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset("assets/js/plugins/bootstrap-switch.js") }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset("assets/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset("assets/js/plugins/bootstrap-datepicker.js") }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset("assets/js/now-ui-kit.js?v=1.3.0") }}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>
