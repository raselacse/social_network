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
                        Language Edit
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
                        <h3>Language Edit</h3>
                    </div>

                    <div class="panel-body">
                        {{ Form::open(array('role' => 'form', 'url' => 'language-update/'.$lang->id, 'files'=> true, 'class' => '', 'id'=>'')) }}

                        <div class="row">
                            <div class="col-md-8 form-group mb-2">
                                <label for="language_name">Name:<span class="text-danger"></span></label>
                                <input type="text" name="language_name" value="{!! $lang->language_name !!}" class="form-control" id="language_name" placeholder="language name">
                            </div>

                            <div class="col-md-4 form-group mb-2">
                                <label for="status">Name:<span class="text-danger"></span></label>
                                <select class="form-control status" name="status" id="status">
                                    <option {{ ($lang->status==1)? 'selected':'' }} value="1">Active</option>
                                    <option {{ ($lang->status==2)? 'selected':'' }}value="2">Inactive</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-10"></div>
                            <div class="col-md-2 pull-right">
                                <button class="btn btn-primary form-control" type="submit" >Update</button>
                            </div>
                        </div>
                        {!!   Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('js')

@stop


