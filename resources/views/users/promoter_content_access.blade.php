@extends('layouts.default')
@section('styles')
    <link href="{{ asset('public/chosenmultiselect/docsupport/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('public/chosenmultiselect/chosen.css') }}" rel="stylesheet">
    <style type="text/css" media="screen">
        .chosen-container-multi .chosen-choices{
            width: 100% !important;
            padding: 2.5px !important;
            box-shadow: none !important;
            border: 1px solid #e2e2e2 !important;
            background-image: none !important;
        }
        .chosen-container .chosen-drop{
            width: 100% !important;
        }
        .chosen-container-multi .chosen-choices li.search-field input[type="text"] {
            padding-left: 25px !important;
            font-size: 85% !important;
        }
    </style>
@stop
@section('content')

    <div class="small-header transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    User Special Access
                </h2>
            </div>
        </div>
    </div>
    @include('layouts.flash')

    <div class="content animate-panel">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2" style="">
                <div class="hpanel">
                    <div class="panel-heading sub-title">
                        User Special Access
                    </div>
                    <div class="panel-body">

                        {!!   Form::open(array('role' => 'form', 'url' => 'promoter_access/store', 'class' => 'form-horizontal','files'=>true)) !!}

                        @if(isset($users))
                        <div class="form-group"><label class="control-label col-xs-12 col-sm-3 no-padding-right" for="role_id">Select Role:<span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                {!! Form::select('role_id',$roles,$users->role_id, array('class' => 'js-source-states form-control', 'id' => 'role_id','placeholder'=>'Select  Role')) !!}
                            </div>
                        </div>
                            @else
                            <div class="form-group"><label class="control-label col-xs-12 col-sm-3 no-padding-right" for="role_id">Select Role:<span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    {!! Form::select('role_id',$roles, null, array('class' => 'js-source-states form-control', 'id' => 'role_id','placeholder'=>'Select  Role')) !!}
                                </div>
                            </div>
                       @endif
                         <div class="form-group">
                             <div class="roleUsers"></div>
                                <div class="col-md-6" id="users">

                               </div>
                           </div>




                        <div class="form-group">
                            <div class="category_label"></div>
                            <div class="col-md-6">
                                <div id="category">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="operator_label"></div>
                            <div class="col-md-6">
                                <div id="operator">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="promoter_start_date_label"></div>
                            <div class="col-md-6">
                                <div id="promoter_start_date_input">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="promoter_end_date_label"></div>
                            <div class="col-md-6">
                                <div id="promoter_end_date_input">
                                </div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">{!!trans('english.UPDATE')!!}</button>
                                <button type="button" class="btn btn-default cancel">{!!trans('english.CANCEL')!!}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">


        @if(isset($users))
        $('#userIdSelect').val('{!! $users->id !!}');
        var users_selected_id='{!! $users->id !!}';
            @else
        var users_selected_id='{!! \Illuminate\Support\Facades\Input::old('user_id') !!}';

        @endif
        $(document).ready(function () {

            $("#role_id").change(function () {

                var role_id=$("#role_id").val();
                var url='{!! URL::to('getUsers') !!}'+'/'+role_id;

                $.ajax({
                    type: "GET",
                    url:url,
                    success:
                        function (data) {
                            $('.remove_categroy_Level').remove();
                            $('.remove_categories').remove();


                            $('.remove_operator_Level').remove();
                            $('.remove_operators').remove();

                            $('.remove_promoter_start_date_label').remove();
                            $('.remove_promoter_start_date_input').remove();

                            $('.remove_promoter_end_date_label').remove();
                            $('.remove_promoter_end_date_input').remove();


                            $('.removeLevel').remove();
                            $('.users').remove();
                            $('.roleUsers').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right removeLevel" for="role_id">Users :<span class="text-danger">*</span></label>');
                            var users='<div class="users"><select name="user_id" class="form-control" id="userIdSelect" required="required"><option value="">Please Select User</select></div>';
                            $('#users').append(users);
                            $.each(data['users'], function(index, singleObj){
                                $('#userIdSelect').append('<option value="'+singleObj.id+'">'+singleObj.first_name+' '+singleObj.last_name+'</option>');
                            });


                        },
                    error: function() {
                        $('.removeLevel').remove();
                        $('.users').remove();

                        $('.remove_categroy_Level').remove();
                        $('.remove_categories').remove();


                        $('.remove_operator_Level').remove();
                        $('.remove_operators').remove();

                        $('.remove_promoter_start_date_label').remove();
                        $('.remove_promoter_start_date_input').remove();

                        $('.remove_promoter_end_date_label').remove();
                        $('.remove_promoter_end_date_input').remove();

                    }
                });
                return false;
            });

            if($("#role_id").val() != null){

                var role_id=$("#role_id").val();
                var url='{!! URL::to('getUsers') !!}'+'/'+role_id;

                $.ajax({
                    type: "GET",
                    url:url,
                    success:
                        function (data) {
                            $('.removeLevel').remove();
                            $('.users').remove();
                            $('.roleUsers').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right removeLevel" for="role_id">Users :<span class="text-danger">*</span></label>');
                            var users='<div class="users"><select name="user_id" class="form-control" id="userIdSelect" required="required"><option value="">Please Select User</select></div>';
                            $('#users').append(users);
                            $.each(data['users'], function(index, singleObj){
                                $('#userIdSelect').append('<option value="'+singleObj.id+'">'+singleObj.first_name+' '+singleObj.last_name+'</option>');
                            });

                            $('#userIdSelect').val(users_selected_id);


                        }
                });


            }


            $(document).on('change','#userIdSelect',function () {
                var user_id=$("#userIdSelect").val();
                var url='{!! URL::to('getRoles') !!}'+'/'+user_id;

                $.ajax({
                    type: "GET",
                    url:url,
                    success:
                        function (data) {


                            $.ajax({
                                type: "GET",
                                url: url,
                                success:
                                    function () {

                                        $('.remove_categroy_Level').remove();
                                        $('.remove_categories').remove();


                                        $('.remove_operator_Level').remove();
                                        $('.remove_operators').remove();

                                        $('.remove_promoter_start_date_label').remove();
                                        $('.remove_promoter_start_date_input').remove();

                                        $('.remove_promoter_end_date_label').remove();
                                        $('.remove_promoter_end_date_input').remove();


                                        $('.category_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_categroy_Level" for="role_id">Keywords :</label>');
                                        var category='<div class="remove_categories"><select name="keywords[]" class="form-control chosen-select" multiple tabindex="4" id="category_selected" ></select></div>';
                                        $('#category').append(category);

                                        if (data['users'].keywords !== null) {

                                            var categories = (data['users'].keywords).split(',');
                                        }
                                        $.each(data['categories'], function (index, singleObj) {
                                            if (jQuery.inArray(singleObj.id.toString(), categories) !== -1) {

                                                var selected = 'selected="selected"';
                                            } else {

                                                var selected = '';
                                            }
                                            $('#category_selected').append('<option value="'+singleObj.id+'"  ' + selected + '>'+singleObj.name+'</option> ');

                                        });


                                        $('.operator_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_operator_Level" for="role_id">Operators :</label>');
                                        var operator_select_type='<div class="remove_operators"><select name="operators[]" class="form-control chosen-select" multiple tabindex="4" id="operator_selected" ></select></div>';
                                        $('#operator').append(operator_select_type);

                                        if (data['users'].operators !== null) {

                                            var operators = (data['users'].operators).split(',');
                                        }
                                        $.each(data['operator'], function (index, singleObj) {
                                            if (jQuery.inArray(singleObj.id.toString(), operators) !== -1) {

                                                var selected = 'selected="selected"';
                                            } else {

                                                var selected = '';
                                            }
                                            $('#operator_selected').append('<option value="'+singleObj.id+'"  ' + selected + '>'+singleObj.name+'</option> ');

                                        });

                                        $(".chosen-select").chosen("refresh");

                                        $('.promoter_start_date_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_promoter_start_date_label" >Start Date :</label>');
                                        var promoter_start_date='<div class="remove_promoter_start_date_input"><input type="text" name="start_date" class="form-control startdate" value="'+data['users'].promoter_start_date+'" placeholder="Start Date"></div>';
                                        $('#promoter_start_date_input').append(promoter_start_date);


                                        $('.promoter_end_date_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_promoter_start_date_label" >End Date :</label>');
                                        var promoter_end_date='<div class="remove_promoter_end_date_input"><input type="text" name="end_date" class="form-control enddate" value="'+data['users'].promoter_end_date+'" placeholder="End Date"></div>';
                                        $('#promoter_end_date_input').append(promoter_end_date);
                                        datepicker();
                                    },
                                error: function() {

                                    $('.remove_categroy_Level').remove();
                                    $('.remove_categories').remove();

                                    $('.remove_promoter_start_date_label').remove();
                                    $('.remove_promoter_start_date_input').remove();

                                    $('.remove_promoter_end_date_label').remove();
                                    $('.remove_promoter_end_date_input').remove();




                                    $('.remove_content_type_Level').remove();
                                    $('.remove_content_types').remove();
                                }
                            });

                        }



                });
                if(user_id == ''){

                    $('.remove_categroy_Level').remove();
                    $('.remove_categories').remove();


                    $('.remove_operator_Level').remove();
                    $('.remove_operators').remove();

                    $('.remove_promoter_start_date_label').remove();
                    $('.remove_promoter_start_date_input').remove();

                    $('.remove_promoter_end_date_label').remove();
                    $('.remove_promoter_end_date_input').remove();
                }
                return false;
            });


            if(users_selected_id !=null){
                var user_id=users_selected_id;
                var url='{!! URL::to('getRoles') !!}'+'/'+user_id;

                $.ajax({
                    type: "GET",
                    url:url,
                    success:
                        function (data) {


                            $.ajax({
                                type: "GET",
                                url: url,
                                success:
                                    function () {

                                        $('.remove_categroy_Level').remove();
                                        $('.remove_categories').remove();


                                        $('.remove_operator_Level').remove();
                                        $('.remove_operators').remove();


                                        $('.remove_promoter_start_date_label').remove();
                                        $('.remove_promoter_start_date_input').remove();

                                        $('.remove_promoter_end_date_label').remove();
                                        $('.remove_promoter_end_date_input').remove();


                                        $('.category_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_categroy_Level" for="role_id">Keywords :</label>');
                                        var category='<div class="remove_categories"><select name="keywords[]" class="form-control chosen-select" multiple tabindex="4" id="category_selected" ></select></div>';
                                        $('#category').append(category);

                                        if (data['users'].keywords !== null) {

                                            var categories = (data['users'].keywords).split(',');
                                        }
                                        $.each(data['categories'], function (index, singleObj) {
                                            if (jQuery.inArray(singleObj.id.toString(), categories) !== -1) {

                                                var selected = 'selected="selected"';
                                            } else {

                                                var selected = '';
                                            }
                                            $('#category_selected').append('<option value="'+singleObj.id+'"  ' + selected + '>'+singleObj.name+'</option> ');

                                        });



                                        $('.operator_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_operator_Level" for="role_id">Operators :</label>');
                                        var operator_select_type='<div class="remove_operators"><select name="operators[]" class="form-control chosen-select" multiple tabindex="4" id="operator_selected" ></select></div>';
                                        $('#operator').append(operator_select_type);

                                        if (data['users'].operators !== null) {

                                            var operators = (data['users'].operators).split(',');
                                        }
                                        $.each(data['operator'], function (index, singleObj) {
                                            if (jQuery.inArray(singleObj.id.toString(), operators) !== -1) {

                                                var selected = 'selected="selected"';
                                            } else {

                                                var selected = '';
                                            }
                                            $('#operator_selected').append('<option value="'+singleObj.id+'"  ' + selected + '>'+singleObj.name+'</option> ');

                                        });


                                        $(".chosen-select").chosen("refresh");
                                        $('.promoter_start_date_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_promoter_start_date_label" >Start Date :</label>');
                                        var promoter_start_date='<div class="remove_promoter_start_date_input"><input type="text" name="start_date" class="form-control startdate" value="'+data['users'].promoter_start_date+'" placeholder="Start Date"></div>';
                                        $('#promoter_start_date_input').append(promoter_start_date);


                                        $('.promoter_end_date_label').append('<label class="control-label col-xs-12 col-sm-3 no-padding-right remove_promoter_start_date_label" >End Date :</label>');
                                        var promoter_end_date='<div class="remove_promoter_end_date_input"><input type="text" name="end_date" class="form-control enddate" value="'+data['users'].promoter_end_date+'" placeholder="End Date"></div>';
                                        $('#promoter_end_date_input').append(promoter_end_date);
                                        datepicker();

                                    }
                            });

                        }
                });
            }
            //Select Date
            function datepicker() {



                $('.startdate').datetimepicker({
                    format: 'Y-MM-D HH:mm:ss',

                });
                $('.enddate').datetimepicker({
                    format: 'Y-MM-D HH:mm:ss',
                });

            }

        });






    </script>


@stop


@section('js')
    <script src="{{ asset('public/chosenmultiselect/chosen.jquery.js') }}"></script>
    <script src="{{ asset('public/chosenmultiselect/docsupport/prism.js') }}"></script>
    <script src="{{ asset('public/chosenmultiselect/docsupport/init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection
