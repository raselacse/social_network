@extends('layouts.default')
@section('content')
    <div class="content animate-panel">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- <h2>
                    {!! $title->site_title !!}
                </h2> -->

                <p class="col-md-offset-1">
                    <!--Better Customer Experience-->
                </p>
            </div>
        </div>
    </div>


@stop


@section('js')

    <script>
        $(document).ready(function(){

            $('.randColorChange').each(function() {
                $(this).css('background',randomColor());
                $(this).css('color','white');
                $(this).css('text-align','center');

            });

        });

        var safeColors = ['11','33','66','99','cc','ee'];//["#00e64d","#ff80aa","#990099","#30DDBC","#ff8533"];
        var rand = function() {
            return Math.floor(Math.random()*6);
        };
        var randomColor = function() {
            var r = safeColors[rand()];
            var g = safeColors[rand()];
            var b = safeColors[rand()];
            return "#"+r+g+b;
            //return r;
        };
    </script>
@endsection
