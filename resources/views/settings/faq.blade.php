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

    <div class="faq btn-color-3 p-4">
        <div class="accordion" id="accordionExample">
            @foreach($faqInfo as $key=>$faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" @if($key==0)aria-expanded="true"@else aria-expanded="false" @endif aria-controls="collapse{{$key}}">
                            {!! $faq->q_name !!}
                        </button>
                    </h2>
                    <div id="collapse{{$key}}" class="accordion-collapse collapse {{ ($key==0)? 'show':''}}" aria-labelledby="heading{{$key}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $faq->q_ans !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection


@section('js')
@endsection
