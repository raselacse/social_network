<?php

namespace App\Http\Controllers;

use App\Models\LanguageManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class LanguageManagementController extends Controller
{
    public function index(){
        $allLanguages = LanguageManagement::orderBy('id', 'DESC')->paginate(20);

        return view('languageManagement.index', compact('allLanguages'));
    }


    public function create(){

        return view('languageManagement.create');
    }


    public function store(Request $request){
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'language_name' => 'required|unique:language|max:255',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Create Language
        $lang = new LanguageManagement();

        $lang->language_name = $request->language_name;
        $lang->status = $request->status;

        if ($lang->save()){
            Session::flash('success', 'New Language Created Successfully.');
            return redirect()->back();
        }else{
            Session::flash('error', 'New Language is not Created.');
            return redirect()->back();
        }

    }


    public function fileEdit($id){
        $lang = LanguageManagement::find($id);
        //dd(strtolower($lang->language_name.'.php'));

        $file = resource_path().'/lang/en/'.strtolower($lang->language_name.'.php');
        //dd(file_get_contents($file));

        $data['contents'] = File::getRequire($file);
        //dd($data['contents']);

//        foreach ($data['contents'] as $key=>$val){
//            echo $key.'='.$val.'</br>';
//        }

        return view('languageManagement.edit-file', $data, compact('lang', 'file'));
    }


    public function fileUpdate(Request $request){
        $id = Input::get('lang_id');
        $lang = LanguageManagement::find($id);
        //dd($request->get_key, $request->get_val);

        $languages = $request->except('_method', '_token', 'lang_id', 'get_key', 'get_val');
        $file = resource_path().'/lang/en/'.strtolower($lang->language_name.'.php');
        $current = file_get_contents($file);

        //update the existing value
        $current = "<?php return [ ";
        foreach ($languages as $key => $value) {
            $current .= '"' . $key . '"=>"' . $value . '",';
        }

        //insert the new value
        if (!empty($request->get_key)){
            foreach ($request->get_key as $k=>$v){
                //dd($k, $v, $request->get_val[$k]);
                $current .= '"' . $v . '"=>"' . $request->get_val[$k] . '",';
            }
        }
        $current .= '];';

        //dd($current);
        file_put_contents($file, $current);

        Session::flash('success', 'File Update Successfully.');
        return redirect()->back();
    }


    public function activeInActiveLang($id, $status){
        $status = $status ==1 ? 2:1;

        $lang_update = LanguageManagement::find($id);
        $lang_update->status = $status;

        if ( $lang_update->save() ) {
            Session::flash('success', 'Language Status Successfully Updated');
            return Redirect::back();
        } else {
            Session::flash('error', 'Language Status is Not Updated');
            return Redirect::back();
        }
    }


    public function edit($id){
        $lang = LanguageManagement::find($id);

        return View::make('languageManagement.edit', compact('lang'));
    }


    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'language_name' => 'required|unique:language|max:255',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $lang = LanguageManagement::find($id);
        $lang->language_name = $request->language_name;
        $lang->status = $request->status;

        if ($lang->save()){
            Session::flash('success', 'New Language Updated Successfully.');
            return redirect()->back();
        }else{
            Session::flash('error', 'New Language is not Updated.');
            return redirect()->back();
        }
    }


    public function delete($id){
        $lang = LanguageManagement::find($id);

        if ($lang->delete()) {
            Session::flash('success', 'Language Deleted Successfully');
            return Redirect::back();
        } else {
            Session::flash('error', 'Language Not Found');
            return Redirect::back();
        }
    }


}
