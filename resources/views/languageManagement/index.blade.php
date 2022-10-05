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
                        Language Management
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
                        <h3>
                            Language Management
                            &nbsp; &nbsp; &nbsp;
                            <a class="btn btn-info btn-effect-ripple pull-right" style="margin-left:5px;" href="{{ URL::to('language-management/create') }}" ><i class="fa fa-plus"></i> Add New</a>
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped middle-align">
                                <thead>
                                <tr class="center">
                                    <th class="text-center" width="5%">SL#</th>
                                    <th class="text-center">{{'Language'}}</th>
                                    <th class="text-center" width="20%">{{'Status'}}</th>
                                    <th class="text-center" width="15%"> {!!trans('english.ACTION')!!}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($allLanguages) > 0)

                                    <?php
                                    $page = \Input::get('page');
                                    $page = empty($page) ? 1 : $page;
                                    $sl = ($page-1)*20;
                                    $l = 1;
                                    ?>

                                    @foreach($allLanguages as $lang)
                                        <tr>
                                            <td>{{++$sl}}</td>
                                            <td>{{$lang->language_name}}</td>
                                            <td class="text-center">
                                                @if($lang->status==1)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label bg-warning text-white">Inactive</span>
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                @if($lang->status==1)
                                                    <a class="btn btn-warning btn-xs" href="{{url('language-active-inactive/'.$lang->id.'/'.$lang->status)}}" onclick="return confirm('Are You Sure?')" title="Active">
                                                        <i class="fa fa-thumbs-down"></i>
                                                    </a>
                                                @else
                                                    <a class="btn btn-success btn-xs" href="{{url('language-active-inactive/'.$lang->id.'/'.$lang->status)}}" onclick="return confirm('Are You Sure?')" title="Active">
                                                        <i class="fa fa-thumbs-up"></i>
                                                    </a>
                                                @endif

                                                <a class="btn btn-primary btn-xs" href="{{ URL::to("language-edit/".$lang->id) }}" title="Edit" >
                                                    <i class="icon-edit"></i>
                                                </a>

                                                <a class="btn btn-primary btn-xs" href="{{ URL::to("language-file-edit/".$lang->id) }}" title="Edit" >
                                                    <i class="fa fa-file-text-o"></i>
                                                </a>

                                                <a class="btn btn-danger btn-xs" href="{{ URL::to("language-delete/".$lang->id) }}" title="Delete" onclick="return confirm('Are You Sure?');">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">{{'Empty Data'}}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>


                            <!-- paginate -->
                            @if(!empty($allLanguages) )
                                {{ $allLanguages->appends(Request::except('page'))->links()}}
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('js')

@stop


