<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <?php
        $settings=\App\Models\Settings::find(1);
        ?>
        <span>
            <b class="mm-group"><a href="@if(auth()->user()->role_id == 6) {{URL::to('dashboard')}} @elseif(auth()->user()->role_id == 7) {{URL::to('promoter/dashboard')}} @else {{URL::to('dashboard')}} @endif"><img src="{!! asset($settings->logo) !!}" alt="" style="height:60px;width: 60px;"></a></b>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <!--<span class="text-primary">HOMER APP</span>-->
        </div>




        <div class="navbar-right">
            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <a href="{{ URL::to('logout') }}">
                        <i style="font-size: 25px;" class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </div>

                <div class="p-2 bd-highlight">
                    @if(session()->get('localeVal')=='bn')
                        <a href="{{ url('make-the-website-multi-lang/en') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-18"> English </a>
                    @else
                        <a href="{{ url('/make-the-website-multi-lang/bn') }}" class="btn btn-primary border_radius btn-padding fw-bold color-yellow font-size-18"> বাংলা </a>
                    @endif
                </div>
            </div>
        </div>


    </nav>
</div>
