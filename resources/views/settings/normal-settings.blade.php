@extends('layouts.default')
@section('content')

<div class="content animate-panel">
    <ul class="nav nav-pills">
        <!-- <li class="nav-item">
            <a href="{{ url('normal-usual-settings/1') }}" class="nav-link tab_link btn-color-1 text-dark">সাধারণ সেটিংস</a>
        </li> -->
      <!--   <li class="nav-item">
            <a href="{{ url('normal-usual-settings/2') }}" class="nav-link tab_link btn-color-2 text-dark">ব্যবহার নির্দেশিকা</a>
        </li>
        <li class="nav-item" >
            <a href="{{ url('normal-usual-settings/3') }}" class="nav-link tab_link btn-color-3 text-dark">সাধারণ জিজ্ঞাসা (FAQ)</a>
        </li> -->
    </ul>

    <section class="general-setting btn-color-1 p-5 ">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <a href="{{URL::to('module')}}" class="text-decoration-none d-block">Module Management</a>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <a href="{{URL::to('activity')}}" class="text-decoration-none d-block">Activity Management</a>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body">
                        <a href="{!! URL::to('systemSettings') !!}" class="text-decoration-none d-block"><span class="nav-label">System Settings</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection


@section('js')
@endsection
