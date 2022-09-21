@extends('old_frontend.layouts.master')
@section('css')
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
@endsection

@section('content')
    <!--login form-->
    <section class="login-form">
        <div class="container">
            <div class="row m-5">

                <div class="col-md-5 login-bg p-5 mx-auto">
                    <div class="form-style">
                        @if(Session::has('error'))
                            <div class='alert alert-danger alert-dismissable'>
                                <a class="close" data-dismiss="alert" href="#">&times;</a>
                                <i class='icon-remove-sign'></i>
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <h3 class="color-yellow m-0">{{  __(session()->get('localeVal').'.LOG_IN') }}</h3>

                        {!! Form::open(array('url' => 'login', 'class' => 'validate-form', 'autocomplete'=>'off')) !!}

                        <div class="form-group pb-3">
                            <label class="font-size-20 mb-3 mt-4 color-yellow" for="username">{{ __(session()->get('localeVal').'.USERNAME') }}</label>
                            <input type="text" id="login-username" name="username" class="form-control" placeholder="{{ __(session()->get('localeVal').'.USER_NAME') }}" autocomplete="off">
                        </div>

                        <div class="form-group pb-3">
                            <label class="font-size-20 mb-3 color-yellow" for="password">{{ __(session()->get('localeVal').'.PASSWORD') }}</label>
                            <input type="password" id="login-password" name="password" class="form-control" placeholder="{{ __(session()->get('localeVal').'.YOUR_PASS') }}" style="background-color: transparent !important;">
                        </div>

                        <div class="pb-2 text-center mt-3">
                            <button type="submit" class="btn btn-light w-50 font-weight-bold mt-2 border-radius-50 btn-border">{{ __(session()->get('localeVal').'.SIGN_IN') }}</button>
                        </div>

                        <div class="text-end mt-3">
                            <a href="#" class="text-light text-decoration-underline">{{ __(session()->get('localeVal').'.FORGOT_PASSWORD') }}</a>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
