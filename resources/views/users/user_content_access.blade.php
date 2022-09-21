@extends('layouts.default')
@section('styles')

@stop
@section('content')

    <div class="small-header transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    Operator To Keyword
                </h2>
            </div>
        </div>
    </div>
    @include('layouts.flash')

    <div class="content animate-panel">
        <div class="row">
            <div class="col-sm-10  col-md-12" style="">
                <div class="hpanel">
                    <div class="panel-heading sub-title">
                        Operator To Keyword
                    </div>
                    <div class="panel-body">

                        {!!   Form::open(array('role' => 'form', 'url' => 'content_access/store', 'class' => 'form-horizontal','files'=>true)) !!}

                        <div class="form-group"><label class="control-label col-xs-12 col-sm-3 no-padding-right" for="role_id">Select Operator:<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                {!! Form::select('user_id',$users, null, array('class' => 'js-source-states form-control', 'id' => 'users','placeholder'=>'Select User')) !!}
                            </div>
                        </div>

                        <div class="form-group"><label class="control-label col-xs-12 col-sm-3 no-padding-right" for="role_id">Select Keywords:<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                {!! Form::select('keyword_type',$keywords, null, array('class' => 'js-source-states form-control', 'id' => 'keywords','onchange'=>'keywords_key(this.value)','placeholder'=>'Select Keyword')) !!}
                            </div>
                        </div>


                        <div class="col-md-12" id="keyword_content">


                        </div>




                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn btn-info">{!!trans('english.UPDATE')!!}</button>
                                <button type="button" class="btn btn-default cancel">{!!trans('english.CANCEL')!!}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

@section('js')

    <script type="text/javascript">

        function keywords_key(value){
            var users=$("#users").val();

            var keywords=value;
            var url='{!! URL::to('getKeyword_content') !!}'+'/'+users+'/'+keywords;

            $.ajax({
                type: "GET",
                url:url,
                success:
                    function (data) {
                        $('#keyword_content').html(data);

                    }
            });
        }



    </script>

@stop
