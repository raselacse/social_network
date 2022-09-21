@extends('layouts.default')
@section('content')
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                {!!trans('english.CHANGE_PASSWORD')!!}
            </h2>
        </div>
        @include('layouts.flash')
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                    {!!trans('english.CHANGE_PASSWORD')!!}
                </div>
                <div class="panel-body">
                    {!! Form::open(array('role' => 'form', 'url' => 'users/cpself', 'files'=> true, 'class' => 'form-horizontal')) !!}
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserOldPassword">{!!trans('english.OLD_PASSWORD')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::password('oldPassword', array('id'=> 'UserOldPassword', 'class' => 'form-control', 'required' => 'true')) !!}
                            <span class="text-danger">{!! $errors->first('oldPassword') !!}</span>
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserNewPassword">{!!trans('english.NEW_PASSWORD')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::password('password', array('id'=> 'UserNewPassword', 'class' => 'form-control', 'required' => 'true')) !!}
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserConfirmPassword">{!!trans('english.CONFIRM_PASSWORD')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation', array('id'=> 'UserConfirmPassword', 'class' => 'form-control', 'required' => 'true')) !!}
                            <span class="text-danger">{!! $errors->first('password_confirmation') !!}</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row form-group mb-3">
                      <div class="col-md-3">

                      </div>
                        <div class="col-sm-8 ">
                            <button type="submit" class="btn btn-info">{!!trans('english.SAVE')!!}</button>
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
