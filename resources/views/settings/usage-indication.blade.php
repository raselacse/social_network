@extends('layouts.default')
@section('content')


<div class="content animate-panel">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="{{ url('normal-usual-settings/1') }}" class="nav-link tab_link btn-color-1 text-dark">সাধারণ সেটিংস</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('normal-usual-settings/2') }}" class="nav-link tab_link btn-color-2 text-dark">ব্যবহার নির্দেশিকা</a>
        </li>
        <li class="nav-item" >
            <a href="{{ url('normal-usual-settings/3') }}" class="nav-link tab_link btn-color-3 text-dark">সাধারণ জিজ্ঞাসা (FAQ)</a>
        </li>
    </ul>

    <section class="general-setting btn-color-2 p-5">
      <div class="">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">01</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">পাসওয়ার্ড নীতি</a>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">02</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">পরিপোর্টিং নীতি</a>
      </div>

      <div class="mt-3">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">03</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">তথ্য নিরাপত্তা নীতিি</a>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">04</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">পাসওয়ার্ড নীতি</a>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">05</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">পাসওয়ার্ড নীতি</a>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-light rounded-0 color-blue-2" style="margin-right: 1.5rem;">06</a>
        <a href="#" class="btn btn-light rounded-pill color-blue-2 w-25">পাসওয়ার্ড নীতি </a>
      </div>


</section>

</div>













@endsection


@section('js')
@endsection
