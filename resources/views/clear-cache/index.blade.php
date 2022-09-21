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
                        Clear All Cache
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
                            Clear All Cache
                        </h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped middle-align">
                                <thead>
                                <tr class="center">
                                    <th class="text-center" width="5%">SL#</th>
                                    <th class="text-center" >Function Name</th>
                                    <th class="text-center" width="10%"> {!!trans('english.ACTION')!!}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($sl=0; $sl<4; $sl++)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        @if($sl==0)
                                            <td>{{ 'View Clear' }}</td>
                                        @elseif($sl==1)
                                            <td>{{ 'Route Clear' }}</td>
                                        @elseif($sl==2)
                                            <td>{{ 'Cache Clear' }}</td>
                                        @else
                                            <td>{{ 'Config Clear' }}</td>
                                        @endif

                                        <td class="text-center">
                                            <a class="btn btn-danger btn-xs" href="{{ URL::to("clear-cache/".$sl) }}" title="Delete" onclick="return confirm('Are You Sure?');">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop



@section('js')

@stop


