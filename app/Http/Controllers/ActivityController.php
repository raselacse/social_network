<?php
namespace App\Http\Controllers;

use functions\OwnLibrary;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\View;
use DB;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
class ActivityController extends Controller {

    private $moduleId = 5;

    public function __construct() {

    }

    public function index() {

        OwnLibrary::validateAccess($this->moduleId,1);

        $name = Input::get('name');

        $targetArr = \App\Models\Activity::orderBy('id');

        if (!empty($name)) {
            $targetArr = $targetArr->where('name', 'LIKE', '%' . $name . '%');
        }

        $data['targetArr'] = $targetArr->paginate(trans('en.PAGINATION_COUNT'));

        return View::make('activity.index', $data);
    }

    public function filter() {
        $name = Input::get('name');
        return Redirect::to('activity?name=' . $name);
    }

    public function create() {
        OwnLibrary::validateAccess($this->moduleId, 2);
        return View::make('activity.create');
    }

    public function store() {
        OwnLibrary::validateAccess($this->moduleId, 2);
        $this->middleware('csrf', array('on' => 'post'));

        $rules = array(
            'name' => 'required|Unique:activity',
        );

        $message = array(
            'name.required' => 'Please, insert activity Name!',
            'name.unique' => 'This name has already been taken!'
        );

        $validator = Validator::make(Input::all(), $rules, $message);

        if ($validator->fails()) {
            return Redirect::to('activity/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $target = new \App\Models\Activity();
            $target->name = Input::get('name');
            $target->description = Input::get('description');

            if ($target->save()) {
                Session::flash('success', trans('en.DATA_INSERTED_SUCESSFULLY'));
            } else {
                Session::flash('error', trans('en.DATA_CUOLD_NOT_BE_INSERTED'));
            }

            return Redirect::to('activity');
        }
    }

    public function edit($id) {
        OwnLibrary::validateAccess($this->moduleId, 3);
        $target = \App\Models\Activity::find($id);
        return View::make('activity.edit')->with(compact('target'));
    }

    public function update($id) {
        OwnLibrary::validateAccess($this->moduleId, 3);
        // validate
        $rules = array(
            'name' => 'required|Unique:activity,name,' . $id,
        );

        $message = array(
            'name.required' => 'Please, insert activity Name!',
            'name.unique' => 'This name has already been taken!'
        );

        $validator = Validator::make(Input::all(), $rules, $message);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('activity/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $target = \App\Models\Activity::find($id);
            $target->name = Input::get('name');
            $target->description = Input::get('description');

            if ($target->save()) {
                Session::flash('success', trans('en.DATA_UPDATED_SUCESSFULLY'));
                return Redirect::to('activity');
            } else {
                Session::flash('error', trans('en.DATA_COULD_NOT_BE_UPDATED'));
                return Redirect::to('activity/' . $id . '/edit');
            }
        }
    }

    public function destroy($id) {
        OwnLibrary::validateAccess($this->moduleId, 4);
        //check depedency here....

        $target = \App\Models\Activity::find($id);

        if ($target->delete()) {
            Session::flash('error', trans('en.DATA_DELETED_SUCCESSFULLY'));
        } else {
            Session::flash('error', trans('en.DATA_COULD_NOT_BE_DELETED'));
        }
        return Redirect::to('activity');
    }

}
