<?php
namespace App\Http\Controllers;

use functions\OwnLibrary;
use View;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Redirect;
class UserAclController extends Controller {

    private $moduleId = 6;
    private $name = 'useracl';

    public function __construct() {
        
    }

    public function index() {
    

        OwnLibrary::validateAccess($this->moduleId, 1);

        $userArr = \App\Models\User::where('status_id', 1)->whereNotNull('role_id')->orderBy('username','ASC')->get(array('id', 'username', 'first_name', 'last_name'));

        $userList = array('0' => trans('english.SELECT_USER_OPT'));
        if (!empty($userArr)) {
            foreach ($userArr as $item) {
                $userList[$item->id] = $item->username . ' &raquo; ' . $item->first_name . ' ' . $item->last_name;
            }//foreach
        }//if
        $data['userList'] = $userList;
        return View::make('acl.useracl', $data);
    }

    public function save2() {
        //$this->custom->check_acl($this->moduleId, 3);
        $updateExist = Input::get('update_exist');

        $moduleActivity = Input::get('module_activity');
        $roleId = Input::get('role_id');
        $target = \App\Models\Role::find($roleId);

        if (empty($target)) {
            show_404();
        }

        //if module to activity empty
        if (empty($moduleActivity)) {
            Session::flash('error', trans('english.NO_ACTIVITY_WAS_SELECTED'));
            return Redirect::to($this->name);
        }

        if (!empty($roleId)) {
            $i = 0;
            $saveField = array();
            if (!empty($moduleActivity)) {
                foreach ($moduleActivity as $moduleId => $modActivity) {
                    foreach ($modActivity as $activityId => $val) {
                        $saveField[$i]['role_id'] = $roleId;
                        $saveField[$i]['module_id'] = $moduleId;
                        $saveField[$i]['activity_id'] = $activityId;
                        $i++;
                    }
                }

                //Delete old access
                \App\Models\ModuleToUser::where('role_id', $roleId)->delete();

                if (\App\Models\ModuleToUser::insert($saveField)) {

                    if ($updateExist == '1') {
                        $saveFieldUsr = array();
                        $employeArr = \App\Models\User::where('role_id', $roleId)->get(array('id'));
                        if (!empty($employeArr)) {
                            foreach ($employeArr as $employeid) {

                                $this->roleaccessmodel->deleteModule($employeid['id']);
                                $j = 0;
                                foreach ($moduleActivity as $moduleId => $modActivity) {
                                    foreach ($modActivity as $activityId => $val) {
                                        $saveFieldUsr[$j]['user_id'] = $employeid['id'];
                                        $saveFieldUsr[$j]['module_id'] = $moduleId;
                                        $saveFieldUsr[$j]['activity_id'] = $activityId;
                                        $j++;
                                    }
                                }

                                $this->roleaccessmodel->storeUser($saveFieldUsr);
                            }//foreach
                        }//if !empty($employeArr)
                    }//if $updateExist

                    Session::flash('success', trans('english.ROLE_WISE_ACL_UPDATED_SUCCESSFULLY'));
                } else {
                    Session::flash('error', trans('english.ROLE_WISE_ACL_COULD_NOT_BE_UPDATED'));
                }
                return Redirect::to($this->name);
            }//if
        }
    }

    public function userAclSetup() {
        $userId = Input::get('user_id');

        $data = array();
        $userInfo = array();
        if (!empty($userId)) {

//            $module_activity = DB::table('module_to_activity as ma')
//                ->leftJoin('module as m', DB::raw('m.id'), '=', DB::raw('ma.module_id'))
//                ->leftJoin('module_to_user as mu', function($join) use ($userId) {
//                    $join->on(DB::raw('mu.activity_id'), '=', DB::raw('ma.activity_id'))
//                        ->on(DB::raw('mu.module_id'), '=', DB::raw('ma.module_id'))
//                        ->on(DB::raw('mu.module_id'), '=', DB::raw('m.id'))
//                        ->where(DB::raw('mu.user_id'), '=', $userId);
//                })
//                ->orderBy(DB::raw('m.id'), 'asc')
//                ->orderBy(DB::raw('ma.activity_id'), 'asc')
//                ->get(array(DB::raw('m.id, m.name, ma.activity_id, mu.activity_id as mu_activity')));
//

            $module_activity = DB::table('module_to_activity')
                    ->leftJoin('module', 'module.id', '=', 'module_to_activity.module_id')
                    ->leftJoin('module_to_user', function($join) use ($userId) {
                        $join->on('module_to_user.activity_id', '=', 'module_to_activity.activity_id')
                        ->on('module_to_user.module_id', '=', 'module_to_activity.module_id')
                        ->on('module_to_user.module_id', '=', 'module.id')
                        ->where('module_to_user.user_id', '=', $userId);
                    })
                    ->orderBy('module.id', 'asc')
                    ->orderBy('module_to_activity.activity_id', 'asc')
                    ->select('module.id', 'module.name', 'module_to_activity.activity_id', 'module_to_user.activity_id as mu_activity')
                    ->get();

            $m_activity = array();

            //Gather selected User's Info
            $userInfo = \App\Models\User::find($userId);
            //Get Role wise Module
            $groupRole = \App\Models\ModuleToRole::where('role_id', $userInfo->role_id)->get();

            $m_activity = array();
            $tmp_module = '';
            if (!empty($module_activity)) {
                foreach ($module_activity as $ma) {
                    if ($tmp_module != $ma->id) {
                        $tmp_module = $ma->id;
                    }
                    $m_activity[$tmp_module][$ma->activity_id] = 1;

                    if (!empty($ma->mu_activity)) {

                        $m_activity[$tmp_module][$ma->activity_id] = 2;
                    }
                }
            }
            
            $data['m_activity'] = $m_activity;

            $roleRelation = array();
            foreach ($groupRole as $item) {
                $roleRelation[$item->module_id][$item->activity_id] = $item->activity_id;
            }

            $data['role_relation'] = $roleRelation;

            $data['all_activity'] = \App\Models\Activity::all();
            $data['modules'] = \App\Models\Module::all();
        }
        $data['user_info'] = $userInfo;

        return View::make('acl.useraclsetup', $data);
    }

    public function save() {

        //$this->custom->check_acl($this->moduleId, 3);
        
        $moduleActivity = Input::get('module_activity');
        $userId = Input::get('user_id');

        //if module to activity empty
        if (empty($moduleActivity)) {
            Session::flash('error', trans('english.NO_ACTIVITY_WAS_SELECTED'));
            return Redirect::to($this->name);
        }

        if(empty($userId)) {
            Session::flash('error', trans('english.NO_USER_WAS_SELECTED'));
            return Redirect::to($this->name);
        }

        $i = 0;
        if (!empty($moduleActivity)) {
            foreach ($moduleActivity as $moduleId => $modActivity) {
                foreach ($modActivity as $activityId => $val) {
                    $saveField[$i]['user_id'] = $userId;
                    $saveField[$i]['module_id'] = $moduleId;
                    $saveField[$i]['activity_id'] = $activityId;
                    $i++;
                }
            }

            //Delete old access
            \App\Models\ModuleToUser::where('user_id', $userId)->delete();
            
            //echo '<pre>';print_r($saveField);exit;
            
            if (\App\Models\ModuleToUser::insert($saveField)) {
                Session::flash('success', trans('english.USER_WISE_ACL_UPDATED_SUCCESSFULLY'));
            } else {
                Session::flash('error', trans('english.USER_WISE_ACL_COULD_NOT_BE_UPDATED'));
            }
        }//if

        return Redirect::to($this->name);
    }

}
