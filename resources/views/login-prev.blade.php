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
        <link rel="stylesheet" href="{{ url('public/vendor/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/pe-fa fa-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/helper.css')}}">
        <link rel="stylesheet" href="{{ url('public/styles/style.css')}}">







    </head>
    <body class="blank">

        <!-- Simple splash screen-->
        <div class="splash">
            <div class="color-line"></div>
            <div class="splash-title"><img src="{!! asset($settings->logo) !!}" class="rotating123" width="64" height="64" /><h1 class="mm-group-text"><b>{!! $settings->site_title !!}</b></h1><p></p> </div> </div>
        <div class="login-container l-panel">
            <div class="row">
                <div class="col-md-12 col-md-offset-1 login-logo">
                    <img src="{!! asset($settings->logo) !!}" width="300" height="120" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="hpanel">
                        <div class="panel-body">

                            @if(Session::has('error'))
                            <div class='alert alert-danger alert-dismissable'>
                               <a class="close" data-dismiss="alert" href="#">&times;</a>
                               <i class='icon-remove-sign'></i>
                              {{ Session::get('error') }}
                            </div>
                            @endif

                            {!! Form::open(array('url' => 'login', 'class' => 'validate-form', 'autocomplete'=>'off')) !!}

                            <div class="form-group">
                                <label class="control-label" for="username">{{trans('english.USERNAME')}}</label>
                                <input type="text" id="login-username" name="username" class="form-control" placeholder="Username" autocomplete="off">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">{{trans('english.PASSWORD')}}</label>
                                <input type="password" id="login-password" name="password" class="form-control" placeholder="Your password..">
                            </div>
                            <button class="btn btn-success btn-block">{{trans('english.SIGN_IN')}}</button>
                            {!! Form::close() !!}
                        </div>
                        <!-- <div class="panel-footer text-center">
                            Foregot password
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center copy">
                    Copyright &copy; <?php echo date('Y'); ?> <a href="#" target="_blank">{!! $settings->copyRight !!}</a>
                </div>
            </div>
        </div>


        <!-- Vendor scripts -->
        <script rel="javascript" src=" {{ url('public/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script rel="javascript" src="  {{ url('public/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script rel="javascript" src=" {{ url('public/vendor/iCheck/icheck.min.js') }}"></script>
        <script rel="javascript" src="   {{ url('public/vendor/sparkline/index.js') }}"></script>
        <script rel="javascript" src=" {{ url('public/scripts/homer.js') }}"></script>










    </body>

</html>
<style>
    .copy a:hover{
        text-decoration: underline;
    }
    .copy a:visited {
        color: green;
    }
</style>
