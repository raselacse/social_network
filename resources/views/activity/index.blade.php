@extends('layouts.default')
@section('content')
<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                Activity Management
            </h2>
        </div>
        @include('layouts.flash')
    </div>
</div>
<div class="content animate-panel">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading hbuilt">
                    <?php if(!empty(Session::get('acl')[6][2])){ ?>
                    <div class="pull-right">
                        <a class="btn btn-info btn-effect-ripple" href="{!! URL::to('activity/create') !!}"><i class="fa fa-plus"></i> Create Activity</a>
                    </div>
                    <?php } ?>
                    <h4>Activity Management</h4>
                </div>
                <div class="panel-body">
                    {!!  Form::open(array('activity' => 'form', 'url' => 'activity/filter', 'class' => 'form-horizontal'))  !!}
                    <div class="form-group col-md-6">
                        <div class="row form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold">{!!trans('english.NAME')!!} :</label>
                            <div class="col-md-6">
                                {!!   Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">

                        <div class="col-sm-8 mx-auto text-center mb-3 mt-3">
                            <button type="submit" class="btn btn-info"> {!!trans('english.FILTER')!!}</button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped middle-align">
                            <thead>
                                <tr class="center">
                                    <th>{!!trans('english.ID')!!}</th>
                                    <th>{!!trans('english.NAME')!!}</th>
                                    <th>{!!trans('english.INFO')!!}</th>
                                     <?php if(!empty(Session::get('acl')[6][3]) || !empty(Session::get('acl')[6][4])){ ?>
                                    <th class="text-center">{!!trans('english.ACTION')!!}</th>
                                     <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$targetArr->isEmpty())

                                @foreach($targetArr as $value)

                                <tr class="contain-center">
                                    <td>{!! $value->id !!}</td>
                                    <td>{!! $value->name !!}</td>
                                    <td>{!! $value->description !!}</td>
                                    <?php if(!empty(Session::get('acl')[6][3]) || !empty(Session::get('acl')[6][4])){ ?>
                                    <td class="action-center">
                                        <div class="text-center">
                                            {!! Form::open(array('url' => 'activity/' . $value->id)) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}


                                            <?php if(!empty(Session::get('acl')[6][3])){ ?>
                                            <a class="btn btn-primary btn-xs" href="{!! URL::to('activity/' . $value->id . '/edit') !!}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <?php } ?>
                                            <?php if(!empty(Session::get('acl')[6][4])){ ?>
                                            <button class="btn btn-danger btn-xs delete" type="submit" data-placement="top" data-rel="tooltip" data-original-title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <?php } ?>
                                            {!!   Form::close() !!}
                                        </div>
                                    </td>
                                    <?php } ?>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">{!!trans('english.EMPTY_DATA')!!}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table><!---/table-responsive-->
                        {!! $targetArr->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
