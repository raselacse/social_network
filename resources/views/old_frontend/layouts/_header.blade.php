    <!--Top Header-->
    <header class="main-header">
    <div class="container p_0">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mt-2 mb-0 font-bold text-danger">Department of Narkotics Control</h5>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-end align-items-center flex_column bd-highlight align-items_end">
                    <div class="p-2 bd-highlight padding-0">
                        <a href="" class="btn btn-danger border_radius btn-padding fw-bold color-yellow font-size-14"> DNC AMAMS log in  </a>
                    </div>
                    <div class="p-2 bd-highlight padding-0">
                        <a href="" class="btn btn-bg-color-1 btn-padding fw-bold btn-color-1 font-size-14"> DNC-RMT log in  </a>
                    </div>
                    <div class="p-2 bd-highlight">
                        @if(session()->get('localeVal')=='bn')
                            <a href="{{ url('make-the-website-multi-lang/en') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-14"> English </a>
                        @else
                            <a href="{{ url('/make-the-website-multi-lang/bn') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-14"> বাংলা </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <!--Header-->
    <header class="header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center  bd-highlight">
            <div class=" bd-highlight logo">
                <a href="#"><img src="public/img/logo.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="p-2 bd-highlight">
                <h3 class="text-danger fw-bold m-0">DNC Resolution Monitoring Tools</h3>
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
                                <a class="nav-link color-nav active fw-bold" aria-current="page" href="{{url('/')}}">{{  __(session()->get('localeVal').'.HOME') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-nav fw-bold" href="#">{{  __(session()->get('localeVal').'.SUPPLY_REDUCTION') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-nav fw-bold" href="#">{{  __(session()->get('localeVal').'.DEMAND_REDUCTION') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-nav fw-bold " href="#">{{  __(session()->get('localeVal').'.HARM_REDUCTION') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-nav fw-bold " href="#">{{  __(session()->get('localeVal').'.NEWS') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-nav fw-bold " href="#">{{  __(session()->get('localeVal').'.PHOTO') }}</a>
                            </li>
                        </ul>
                        <div class="d-flex margin-left">
                            <a href="{{ url('/login') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-18">{{  __(session()->get('localeVal').'.LOG_IN') }}</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

