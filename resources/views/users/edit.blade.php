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
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                {!!trans('english.USER_MANAGEMENT')!!}
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                    {!!trans('english.UPDATE_A_USER')!!}
                </div>
                <div class="panel-body">


                    {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'files'=> true, 'class' => 'form-horizontal', 'id' => 'userId')) !!}
                    <div class="row form-group mb-3">
                      <label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="role_id">{!!trans('english.SELECT_ROLE')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::select('role_id', $roleList, null, array('class' => 'js-source-states form-control', 'id' => 'ruleIdChange')) !!}
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserFirstName">{!!trans('english.FIRST_NAME')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::text('first_name', old('first_name'), array('id'=> 'UserFirstName', 'class' => 'form-control', 'required' => 'true')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserLastName">{!!trans('english.LAST_NAME')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::text('last_name', old('last_name'), array('id'=> 'UserLastName', 'class' => 'form-control', 'required' => 'true')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserUsername">{!!trans('english.USERNAME')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::text('username', old('username'), array('id'=> 'UserUsername', 'class' => 'form-control', 'required' => 'true')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserPassword">{!!trans('english.PASSWORD')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::password('password', array('id'=> 'UserPassword', 'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserConfirmPassword">{!!trans('english.CONFIRM_PASSWORD')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation', array('id'=> 'UserConfirmPassword', 'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3" ><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserEmail">{!!trans('english.EMAIL')!!} :</label>
                        <div class="col-md-6">
                            {!! Form::email('email',old('email'), array('id'=> 'UserEmail', 'class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserContactNo">{!!trans('english.CONTACT_NO')!!} :</label>
                        <div class="col-md-6">
                            {!! Form::text('contact_no',old('contact_no'), array('id'=> 'UserContactNo', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="UserPhoto">{!!trans('english.PHOTO')!!} :</label>
                        <div class="col-md-6">
                            {!! Form::file('photo',old('photo'), array('id'=> 'UserPhoto', 'class' => 'form-control')) !!}
                            <div style="color:#B4B7B8">{!!trans('english.USER_PHOTO_HINTS')!!}</div>
                        </div>
                    </div>



                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="userStatusId">{!!trans('english.STATUS')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::select('status_id', array('1' => 'Active', '2' => 'Inactive'), old('status_id'), array('class' => 'selectpicker form-control', 'id' => 'userStatusId')) !!}
                        </div>
                    </div>
                    <div class="row form-group mb-3">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="update_acl">{!!trans('english.UPDATE_ACL')!!}:</label>
                        <div class="col-md-6">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="update_acl" class="activity checkbox" data-column-id="1" id="update_acl" value="1" />
                                <label for="update_acl" style="font-weight: bold;"></label>
                            </div>
                        </div>
                    </div>

               <div class="row form-group mb-3">
                        <label class="control-label col-xs-12 col-sm-3 no-padding-right text-end fw-bold pt-2" for="process_sms_alert">Process SMS Alert:</label>
                        <div class="col-md-6">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="process_sms_alert" class="activity checkbox" data-column-id="1" id="process_sms_alert" value="1" />
                                <label for="update_acl" style="font-weight: bold;"></label>
                            </div>
                        </div>
                    </div>


                    <div class="hr-line-dashed"></div>
                    <div class="row form-group">
                      <div class="col-xs-12 col-sm-3">

                      </div>
                        <div class="col-sm-8 ">
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


<script type="text/javascript">


    $(function () {
        $('.categories_id').hide();
        $('.question_type_id').hide();
        $('.keywords').hide();
        if ($('#role_id').val() ==9 || $('#role_id').val() ==8 ){
            $('.categories_id').show();
            $('.question_type_id').show();
            $('.keywords').show();

        }else{
            $('.keywords').hide();
            $('.categories_id').hide();
            $('.question_type_id').hide();
            $('.categoryInput').attr('disabled',true);
            $('.questionInput').attr('disabled',true);
            $('.keywordInput').attr('disabled',true);

        }
        $('#userCreate').on("submit", function () {
            if ($('#role_id').val() == '') {
                alert('Select User Role');
                return false;
            }
            if ($('#UserFirstName').val() == '') {
                alert('Enter First Name');
                return false;
            }
            if ($('#UserLastName').val() == '') {
                alert('Enter Last Name');
                return false;
            }
            if ($('#UserUsername').val() == '') {
                alert('Enter Username');
                return false;
            }
            var passWord = $('#UserPassword').val();
            var confirmPassWord = $('#UserConfirmPassword').val();
            if (passWord !== '') {
                if (confirmPassWord == '') {
                    alert('Enter Confirm Password');
                    return false;
                }
                if (passWord !== confirmPassWord) {
                    alert('Password and Confirm Passowrd doesn\'t match');
                    return false;
                }
            }
        });
//        $(document).on('change','#role_id',function () {
//            if ($('#role_id').val() ==9 || $('#role_id').val() ==8 ){
//                $('.categories_id').show();
//                $('.question_type_id').show();
//                $('.keywords').show();
//                $('.keywordInput').show();
//
//            }else{
//                $('.categories_id').hide();
//                $('.question_type_id').hide();
//                $('.keywords').hide();
//                $('.categoryInput').attr('disabled',true);
//                $('.questionInput').attr('disabled',true);
//                $('.keywordInput').attr('disabled',true);
//
//            }
//        });
    });
</script>
@stop

@section('js')
    <script src="{{ asset('public/chosenmultiselect/chosen.jquery.js') }}"></script>
    <script src="{{ asset('public/chosenmultiselect/docsupport/prism.js') }}"></script>
    <script src="{{ asset('public/chosenmultiselect/docsupport/init.js') }}"></script>
@stop
