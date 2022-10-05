@extends('layouts.default')

<style type="text/css">
    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
    .bootstrap-select.btn-group, .bootstrap-select.btn-group[class*="span"]{
        margin-bottom: 0px !important;
    }
</style>

@section('content')
    <div class="small-header transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    <h3>
                        Language File Edit
                    </h3>
                </h2>
            </div>
            @include('layouts.flash')
        </div>
    </div>

    <div class="content animate-panel">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="hpanel">
                    <div class="panel-heading hbuilt">
                        <h3>Language File Edit</h3>
                    </div>

                    <div class="panel-body">
                        {{ Form::open(array('role' => 'form', 'url' => 'language-file-update/', 'files'=> true, 'class' => '', 'id'=>'')) }}
                        <input type="hidden" name="lang_id" value="{!! $lang->id !!}">

                        <div class="row">
                            @foreach($contents as $key=>$content)
                                <div class="col-md-4 form-group mb-3">
                                    <label>{!! $key !!}:<span class="text-danger"></span></label>
                                    <input type="text" name="{!! $key !!}" value="{!! $content !!}" class="form-control {!! $key !!}">
                                </div>
                            @endforeach
                        </div>

                        <!-- Create New Key Value-->
                        <p class="mt-2 mb-0 pb-0 font-bold"><u>Create New Key:</u></p>
                        <div class="row remove appendRewRow firstRow" id="firstRow" >
{{--                            <div class="col-md-5 form-group mb-3">--}}
{{--                                <label>key:<span class="text-danger"></span></label>--}}
{{--                                <input type="text" name="get_key[]" value="" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-5 form-group mb-3">--}}
{{--                                <label>Value:<span class="text-danger"></span></label>--}}
{{--                                <input type="text" name="get_val[]" value="" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-1 form-group mb-3 mt-auto">--}}
{{--                                <button class="btn btn-danger removeRow " type="button" title="Add New"><i class="fa fa-trash"></i></button>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-10"></div>
                            <div class="col-md-2 pull-right">
                                <button class="btn btn-info" id="addNewRow" type="button" title="Add New"><i class="icon-plus"></i></button>
                            </div>
                        </div>
                        <!--End Create New Key Value-->
                        <br><br>

                        <div class="row mt-3">
                            <div class="col-md-10"></div>
                            <div class="col-md-2 pull-right">
                                <button class="btn btn-primary form-control" type="submit" >Update</button>
                            </div>
                        </div>
                        {!!  Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('js')
    <script type="text/javascript">
        var i  = 0;

        $(document).on('click','#addNewRow',function(){
            $( "body" ).find( ".firstRow" ).eq( i ).after(
                '<div class="row remove appendRewRow firstRow" id="firstRow" >\n' +
                '                            <div class="col-md-5 form-group mb-3">\n' +
                '                                <label>key:<span class="text-danger"></span></label>\n' +
                '                                <input type="text" name="get_key[]" value="" class="form-control" required="required">\n' +
                '                            </div>\n' +
                '                            <div class="col-md-5 form-group mb-3">\n' +
                '                                <label>Value:<span class="text-danger"></span></label>\n' +
                '                                <input type="text" name="get_val[]" value="" class="form-control" required="required">\n' +
                '                            </div>\n' +
                '                            <div class="col-md-1 form-group mb-3 mt-auto">\n' +
                '                                <button class="btn btn-danger removeRow " type="button" title="Add New"><i class="fa fa-trash"></i></button>\n' +
                '                            </div>\n' +
                '                        </div>'
            );
            i++;
        });

        $(document).on("click",".removeRow",function(){
            $(this).closest('.remove').remove();
            i = i-1;
        });
    </script>
@stop


