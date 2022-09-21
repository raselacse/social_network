@extends('layouts.default')
@section('content')

<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                {!!trans('english.ROLE_MANAGEMENT')!!}
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                    {!!trans('english.UPDATE_ROLE')!!}
                </div>
                <div class="panel-body">
                    {!! Form::model($target, array('route' => array('role.update', $target->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'userId')) !!}

                    <div class=" row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="name">{!!trans('english.NAME')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control', 'required' => 'true')) !!}
                            <span class="form-error text-danger">{!! $errors->first('name') !!}</span>
                        </div>
                    </div>


                     <div class=" row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="info">{!!trans('english.INFO')!!} :</label>
                        <div class="col-md-6">
                            {!! Form::textarea('info', old('info'), array('id'=> 'info', 'rows' => '3', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class=" row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="name">{!! 'Priority' !!} :</label>
                        <div class="col-md-6">
                            {!!  Form::number('priority', old('priority'), array('id'=> 'name', 'class' => 'form-control', 'required' => 'true','min'=>1)) !!}
                        </div>
                    </div>

                    <div class=" row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="status-id">{!!trans('english.STATUS')!!} :</label>
                        <div class="col-md-6">
                          <select class="form-select" name="status_id" aria-label="Default select example">

                            <option value="1">Active</option>
                            <option value="2">Inactive</option>

                          </select>
                            <!-- {!! Form::select('status_id', array('1' => 'Active', '2' => 'Inactive'), old('status_id'), array('class' => 'selectpicker form-control', 'id' => 'status-id')) !!} -->
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="row form-group mb-3">
                      <div class="col-md-3">

                      </div>
                        <div class="col-sm-8">
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
