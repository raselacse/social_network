<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Page title -->
        <?php
        $settings=\App\Models\Settings::find(1);

        ?>
        <title>{!! $settings->site_title  !!}</title>
        <link rel="shortcut icon" href="{!! asset($settings->favicon) !!}">
        <link rel="stylesheet" href="{{ url('public/vendor/fontawesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ url('public/vendor/metisMenu/dist/metisMenu.css') }}">
        <link rel="stylesheet" href="{{ url('public/vendor/animate.css/animate.css')}}">
        <link rel="stylesheet" href="{{ url('public/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/pe-fa fa-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/helper.css')}}">
        <link rel="stylesheet" href="{{ url('public/styles/style.css')}}">







    </head>
    <body >

      <div class="main">

        <!--Header-->
        <header class="header">
          <div class="container">
            <div class="d-flex justify-content-between align-items-center  bd-highlight">
              <div class=" bd-highlight logo">
                <a href="#"><img src="public/img/logo.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="p-2 bd-highlight">
                <h3 class="text-danger fw-bold m-0">DNC - Resolution Monitoring Tools</h3>
              </div>
              <div class=" bd-highlight logo mujib-logo">
                <a href="#"><img src="public/img/mujib-logo.png" class="img-fluid" alt=""></a>
              </div>
            </div>
          </div>
        </header>

        <!--NAV BAR-->
        <section class="nav-menu bg-light">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link color-nav active fw-bold" aria-current="page" href="#">Home |</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link color-nav fw-bold" href="#">Supply Reduction |</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link color-nav fw-bold" href="#"> Demand Reduction |</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link color-nav fw-bold " href="#">Harm Reduction - T & R </a>
                    </li>
                  </ul>
                  <div class="d-flex margin-left">
                    <a href="{{ url('') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-18"> Login </a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </section>

          <!--login form-->
      <section class="login-form">
        <div class="container">
          <div class="row m-5">
            <!-- <div class="col-md-7">

            </div> -->
            <div class="col-md-5 login-bg p-5 mx-auto">
              <div class="form-style">
                <h3 class="color-yellow m-0">Login</h3>

                <form>
                  <div class="form-group pb-3">
                    <label class="font-size-20 mb-3 mt-4 color-yellow"> Username</label>
                    <input type="text" placeholder="Type here your name" class="form-control" >
                  </div>
                  <div class="form-group pb-3">
                    <label class="font-size-20 mb-3 color-yellow"> Password</label>
                    <input type="password" placeholder="Type here your password" class="form-control " style="background-color: transparent !important;">
                  </div>

                  <div class="pb-2 text-center mt-3">
                    <button type="submit" class="btn btn-light w-50 font-weight-bold mt-2 border-radius-50 btn-border">Sign In</button>
                  </div>

                  <div class="text-end mt-3">
                    <a href="#" class="text-light text-decoration-underline">Forget Password</a>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
      <!--Footer-->
          <footer class="footer-2 fixed-bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p class="m-0">Copy Right @ <span class="text-danger">Department of Narkotics Control,</span> All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                  <p class="text_end m-0 color-blue">Powered by <a href="" class="issl text-decoration-none">Impel Service & Solutions Limited</a></p>
                </div>
              </div>
            </div>
          </footer>


        <!-- Vendor scripts -->
        <script rel="javascript" src=" {{ url('public/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script rel="javascript" src=" {{ url('public/vendor/iCheck/icheck.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/sparkline/index.js') }}"></script>
        <script rel="javascript" src=" {{ url('public/scripts/homer.js') }}"></script>

    </body>

</html>
<style>
.footer-2 {
      background: #ffffff;
      border: 1px solid #ddd;
padding: 0.5rem 0;
}
    .copy a:hover{
        text-decoration: underline;
    }
    .copy a:visited {
        color: green;
    }
</style>
