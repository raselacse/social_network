<?php

namespace App\Http\Controllers;

use App\Content;
use App\Jobs\SendEmailJob;
use App\Jobs\SendSMS;
use App\Operator;
use App\ProcessTimeSet;
use App\Subscription;
use App\KeywordType;
use Illuminate\Http\Request;
use functions\OwnLibrary;
use DB;
use Illuminate\Support\Facades\Input;
use View;
use Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
class SystemSettingsController extends Controller
{
    private $moduleId = 7;


    public function __construct() {

    }

    public function edit() {
        OwnLibrary::validateAccess($this->moduleId, 3);
        $target = \App\Models\Settings::find(1);
        return View::make('settings.edit')->with(compact('target'));
    }

    public function update(Request $request) {
        //OwnLibrary::validateAccess($this->moduleId, 3);
        // validate

        $message = array(
            'site_title.required' => 'Please, insert activity site_title!',
            'tag_line.required' => 'Please, insert activity tag line!',
            'site_description.required' => 'Please, insert activity site description!',
            'email.required' => 'Please, insert activity email!',
        );

        $validator = Validator::make(Input::all(), $message);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('systemSettings')
                ->withErrors($validator)
                ->withInput();
        } else {

            $target = \App\Models\Settings::find(1);
            $target->site_title = Input::get('site_title');
            $target->tag_line = Input::get('tag_line');
            $target->site_description = Input::get('site_description');
            $target->email = Input::get('email');
            $target->phone = Input::get('phone');
            $target->location = Input::get('location');
            $target->site_description = Input::get('site_description');
            $imageLogo = $request->file('logo');

            if ($imageLogo) {
                if ($target->logo != null) {
                    @unlink($target->logo);
                }
                $image_name =mt_rand(111111, 999999);
                $ext = strtolower($imageLogo->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'public/upload/systemSettings/';
                $image_url = $upload_path . $image_full_name;
                $imageLogo->move($upload_path, $image_full_name);
                if ($ext=='jpg' || $ext=='png'|| $ext=='jpeg'|| $ext=='JPG' || $ext=='PNG'|| $ext=='JPEG'){
                    $target->logo = $image_url;
                }else{

                    Session::flash('warning','Image is not valid!!');
                    return redirect()->back();
                }
            }

            $favicon= $request->file('favicon');
            if ($favicon) {
                    if ($target->favicon != null) {
                        @unlink($target->favicon);
                    }
                $image_name =mt_rand(111111, 999999);
                $ext = strtolower($favicon->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'public/upload/systemSettings/';
                $image_url = $upload_path . $image_full_name;
                $favicon->move($upload_path, $image_full_name);
                if ($ext=='jpg' || $ext=='png'|| $ext=='jpeg'|| $ext=='JPG' || $ext=='PNG'|| $ext=='JPEG'|| $ext=='ico'){
                    $target->favicon = $image_url;
                }else{

                    Session::flash('warning','Image is not valid!!');
                    return redirect()->back();
                }
            }

            if ($target->save()) {
                Session::flash('success', trans('english.DATA_UPDATED_SUCESSFULLY'));
                return Redirect::to('systemSettings');
            } else {
                Session::flash('error', trans('english.DATA_COULD_NOT_BE_UPDATED'));
                return Redirect::to('systemSettings');
            }
        }
    }



    //footer Settings
    public function footerSettingsEdit(){

           // OwnLibrary::validateAccess($this->moduleId, 3);
            $target = \App\Models\FooterSettings::find(1);
            $operators=Operator::where('status_id',1)->get();
            return View::make('footersettings.edit')->with(compact('target','operators'));


    }

    //supdate footer
    public function footerSettingsUpdate(Request $request) {
       // OwnLibrary::validateAccess($this->moduleId, 3);
        // validate

        $message = array(
            'facebook_url.required' => 'Please, insert activity facebook_url!',
            'support.required' => 'Please, insert Support Contents!',
            'terms.required' => 'Please, insert Terms Contents!',
        );

        $validator = Validator::make(Input::all(), $message);


        // process the login
        if ($validator->fails()) {
            return Redirect::to('footerSettings')
                ->withErrors($validator)
                ->withInput();
        } else {

            $target = \App\Models\FooterSettings::find(1);
            $target->facebook_url = Input::get('facebook_url');
            $target->support = Input::get('support');
            $target->terms = Input::get('terms');
            $target->operator_wise_code = serialize(Input::get('operator_wise_code'));
            $target->unsubscribe_button = Input::get('unsubscribe_button');
            $target->copyright = Input::get('copyright');
            if ($target->save()) {
                Session::flash('success', trans('english.DATA_UPDATED_SUCESSFULLY'));
                return Redirect::to('footerSettings');
            } else {
                Session::flash('error', trans('english.DATA_COULD_NOT_BE_UPDATED'));
                return Redirect::to('footerSettings');
            }
        }
    }







    //Message Settings
    public function messageSettings(){

        OwnLibrary::validateAccess($this->moduleId, 3);
        $target = \App\Models\MessageSettings::find(1);
        $operators=Operator::where('status_id',1)->get();

        return View::make('messagesettings.edit')->with(compact('target','operators'));


    }

    //supdate footer
    public function messageSettingsUpdate(Request $request)
    {
        OwnLibrary::validateAccess($this->moduleId, 3);
        $target = \App\Models\MessageSettings::find(1);
        $target->op_inactive_message = Input::get('op_inactive_message');
        $target->download_duarition = Input::get('download_duarition');
        $target->subscribe_failure = Input::get('subscribe_failure');
        $target->not_sufficient_balance = Input::get('not_sufficient_balance');
        $target->incorrect_text_param_msg = Input::get('incorrect_text_param_msg');
        $target->invalid_code_msg = Input::get('invalid_code_msg');
        $target->content_url_msg = Input::get('content_url_msg');
        $target->invalid_package_code_msg = Input::get('invalid_package_code_msg');
        $target->unsubscribe_failure = Input::get('unsubscribe_failure');
        $target->req_pending_msg = Input::get('req_pending_msg');
        $target->no_package_msg = Input::get('no_package_msg');
        $target->do_start = Input::get('do_start');
        $target->do_unsubscribe = Input::get('do_unsubscribe');
        $target->default_message = Input::get('default_message');
        $target->subscription_message = serialize(Input::get('subscription_message'));
        $target->daily_namaz_time_text = Input::get('daily_namaz_time_text');
        $target->content_instruction_msg = Input::get('content_instruction_msg');
        if ($target->save()) {
            Session::flash('success', trans('english.DATA_UPDATED_SUCESSFULLY'));
            return Redirect::to('messageSettings');
        } else {
            Session::flash('error', trans('english.DATA_COULD_NOT_BE_UPDATED'));
            return Redirect::to('messageSettings');
        }
    }


    public function subscriber_mail_send(){

        $data['platform']=\App\Models\Operator::where('status_id',1)->pluck('name','id');
        return view('mail_sending.send_mail',$data);
    }
    public function send_mail_individual($user_id){

        $data['user']=\App\Models\User::where('id',$user_id)->first();
        return view('mail_sending.send_mail_individual',$data);
    }

 //   public function __construct(\Mailchimp $mailchimp)
//    {
//        $this->mailchimp = $mailchimp;
//    }

  //  private $listId='fe0072079d';

    public function mail_chimp_mail_send(Request $request){
        $settings= \App\Models\Settings::find(1);
//        try {
//
//
//
//            $this->mailchimp
//                ->lists
//                ->subscribe(
//                    $this->listId,
//                    ['email' => 'farhanmonsi@gmail.com'],null,
//                    null,
//                    false
//                );
//            return redirect()->back()->with('success','Email Subscribed successfully');
//
//
//        } catch (\Mailchimp_List_AlreadySubscribed $e) {
//            dd($e);
//
//            return redirect()->back()->with('error','Email is Already Subscribed');
//        } catch (\Mailchimp_Error $e) {
//            dd($e);
//            return redirect()->back()->with('error','Error from MailChimp');
//        }



        if ($request->type == 1) {
            $options = [
                'list_id' => $this->listId,
                'subject' => $request->input('subject'),
                'from_email' => 'track.issl@gmail.com',
                'from_name' => 'Quizbook',
            ];

            $settings = \App\Models\Settings::find(1);
            $message = $request->message;
            $mail_messages = view('emails.group_email', compact('settings', 'message'));
            $content = [
                'html' => $mail_messages,
            ];

            $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);
            $this->mailchimp->campaigns->send($campaign['id']);
        }


        $operator=Operator::where('id',$request->platform)->first();




        if ($request->type == 3 || $request->type == 2) {
            $subdcriptionTable=New Subscription();
            $subscriber=$subdcriptionTable->setTable('subscribers_'.$operator->alias);

            $users = $subscriber->get();

            foreach ($users as $user) {
                //replace template var with value

                if ($operator->alias =='gp'){
                    $first_download_log = \App\Models\Download::where('vmsisdn', $user->vmsisdn)->orderBy('id', 'ASC')->first();

                    $zone=KeywordType::where('id',$first_download_log->zone_id)->first();

                }else{
                    $first_download_log = \App\Models\Download::where('msisdn', $user->msisdn)->orderBy('id', 'ASC')->first();

                    $zone=KeywordType::where('id',$first_download_log->zone_id)->first();

                }

                $content_table=New Content();
                if ($first_download_log != null) {
                    if ($first_download_log->content_type == 1){

                      $content_table->setTable('contents_wallpaper')->where('id', $first_download_log->content_id)->first();

                    }

                    if ($first_download_log->content_type == 2){

                        $content_table->setTable('contents_animation')->where('id', $first_download_log->content_id)->first();

                    }

                    if ($first_download_log->content_type == 3){

                        $content_table->setTable('contents_video')->where('id', $first_download_log->content_id)->first();

                    }

                    if ($first_download_log->content_type == 4){

                        $content_table->setTable('contents_music')->where('id', $first_download_log->content_id)->first();

                    }

                    if ($first_download_log->content_type == 5){

                        $content_table->setTable('contents_games')->where('id', $first_download_log->content_id)->first();

                    }

                    if ($first_download_log->content_type == 6){

                        $content_table->setTable('contents_text')->where('id', $first_download_log->content_id)->first();

                    }


                    $first_sub_category = \App\Models\Categories::where('id', $content_table->category_id)->first();
                    if ($first_sub_category != null) {
                        $first_category = \App\Models\Categories::where('id', $first_sub_category->parent_id)->first();
                    } else {
                        $first_category = null;
                    }
                } else {
                    $first_sub_category = null;
                    $first_category = null;
                }

                if ($operator->alias =='gp'){
                    $last_download_log = \App\Models\Download::where('vmsisdn', $user->vmsisdn)->orderBy('id', 'DESC')->first();
                    $zone=KeywordType::where('id',$last_download_log->zone_id)->first();


                }else{
                    $last_download_log = \App\Models\Download::where('msisdn', $user->msisdn)->orderBy('id', 'DESC')->first();
                    $zone=KeywordType::where('id',$last_download_log->zone_id)->first();

                }

                if ($last_download_log->content_type == 1){

                    $content_table->setTable('contents_wallpaper')->where('id', $last_download_log->content_id)->first();

                }

                if ($last_download_log->content_type == 2){

                    $content_table->setTable('contents_animation')->where('id', $last_download_log->content_id)->first();

                }

                if ($last_download_log->content_type == 3){

                    $content_table->setTable('contents_video')->where('id', $last_download_log->content_id)->first();

                }

                if ($last_download_log->content_type == 4){

                    $content_table->setTable('contents_music')->where('id', $last_download_log->content_id)->first();

                }

                if ($last_download_log->content_type == 5){

                    $content_table->setTable('contents_games')->where('id', $last_download_log->content_id)->first();

                }

                if ($last_download_log->content_type == 6){

                    $content_table->setTable('contents_text')->where('id', $last_download_log->content_id)->first();

                }
                
                if ($last_download_log != null) {
                    $last_sub_category = \App\Models\Categories::where('id', $content_table->category_id)->first();
                    if ($last_sub_category != null) {
                        $last_category = \App\Models\Categories::where('id', $last_sub_category->parent_id)->first();
                    } else {
                        $last_category = null;
                    }
                } else {
                    $last_sub_category = null;
                    $last_category = null;
                }

                $new_category = \App\Models\Categories::orderBy('id', 'ASC')->first();
                $new_sub_category = \App\Models\Categories::where('parent_id', $new_category->id)->first();


                $token = array(
                   // 'USER_NAME' => $user != null ? $user->first_name . ' ' . $user->last_name : null,
                    'USER_EMAIL' => $user != null ? $user->email : null,
                    'USER_MSISDN' => $user != null ? $user->msisdn : null,


                    'FIRST_CATEGORY_NAME' => $first_category != null ? $first_category->name : null,
                    'FIRST_CATEGORY_URL' => $first_category != null ? '<a href="' . url($zone->suffix.'/category/' . $first_category->id) . '">Click here</a>' : null,
                    'FIRST_SUB_CATEGORY_NAME' => $first_sub_category != null ? $first_sub_category->name : null,
                    'FIRST_SUB_CATEGORY_URL' => $first_sub_category != null ? '<a href="' . url($zone->suffix.'/contents/' . $first_sub_category->slug) . '">Click here</a>' : null,

                    'LAST_CATEGORY_NAME' => $last_category != null ? $last_category->name : null,
                    'LAST_CATEGORY_URL' => $last_category != null ? '<a href="' . url($zone->suffix.'/category/' . $last_category->id) . '">Click here</a>' : null,
                    'LAST_SUB_CATEGORY_NAME' => $last_sub_category != null ? $last_sub_category->name : null,
                    'LAST_SUB_CATEGORY_URL' => $last_sub_category != null ? '<a href="' . url($zone->suffix.'/contents/' . $last_sub_category->id) . '">Click here</a>' : null,

                    'NEW_CATEGORY_NAME' => $new_category != null ? $new_category->name : null,
                    'NEW_CATEGORY_URL' => $new_category != null ? '<a href="' . url($zone->suffix.'/category/' . $new_category->id) . '">Click here</a>' : null,
                    'NEW_SUB_CATEGORY_NAME' => $new_sub_category != null ? $new_sub_category->name : null,
                    'NEW_SUB_CATEGORY_URL' => $new_sub_category != null ? '<a href="' . url($zone->suffix.'/contents/' . $new_sub_category->id) . '">Click here</a>' : null,

                );


                $pattern = '[%s]';
                foreach ($token as $key => $val) {
                    if ($val != null) {
                        $varMap[sprintf($pattern, $key)] = $val;
                    }
                }

                $message = strtr($request->input('message'), $varMap);

                if ($request->type == 2){
                    $data['message'] = $message;
                    $data['settings'] = \App\Models\Settings::find(1);
                    $data['subject'] = $request->input('subject');
                    $data['email'] = $user->email;
                    $data['email'] = $user->msisdn;
                    $this->email_status($user->email,$user->msisdn,$request->input('subject'),$message,$type=2);

                    dispatch(new SendEmailJob($data));

                }

                if ($request->type == 3){

                    dispatch(New SendSMS($data));


                }
            }


        }


        \Illuminate\Support\Facades\Session::flash('success','SMS Successfully Send');

        return redirect()->back();

    }




    public function email_status($email, $contact,$subject,$message,$type){

        $message_sending=New \App\Models\EmailSMS();
        $message_sending->email=$email;
        $message_sending->contact_no=$contact;
        $message_sending->subject=$subject;
        $message_sending->message=$message;
        $message_sending->status=1;
        $message_sending->type=$type;
        $message_sending->save();
    }



    public function email_and_sms_settings() {
        $target = \App\Models\Settings::find(1);
        return View::make('settings.email_sms_settings')->with(compact('target'));
    }
    public function email_and_sms_settings_update(Request $request) {
        $target = \App\Models\Settings::find(1);
        $target->mail_types=$request->mail_types;
        $target->mail_host=$request->mail_host;
        $target->mail_user_name=$request->mail_user_name;
        $target->mail_password=$request->mail_password;
        $target->sms_api_url=$request->sms_api_url;
        $target->sms_user_name=$request->sms_user_name;
        $target->sms_password=$request->sms_password;
        $target->save();
        Session::flash('success','Settings Successfully Update');
        return redirect()->back();
    }


    public function google_analytics_report(Request $request){

        $formDate=$request->from_date;
        $toDate=$request->to_date;

        $data['type']=$request->type;
        if (!empty($formDate)){
            $data['targetArr']=\App\Models\GoogleAnalytics::whereDate('created_at', '>',new Carbon($formDate))
                ->whereDate('created_at', '<', new Carbon($toDate))->paginate(20);
        }

        if (!empty($request->type)){
            $data['targetArr']=\App\Models\GoogleAnalytics::paginate(20);
        }
        return view('report.google_analytics_report',$data);

    }



    public function subscriber_message_sending_status(Request $request){
        $data['allRequest']=$request->all();

        $type=$request->type;
        $formDate=$request->from_date;
        $toDate=$request->to_date;

        $targetArr =New \App\Models\EmailSMS();
        if(!empty($formDate)){
            $targetArr =  $targetArr->whereDate('created_at', '>',new Carbon($formDate))
                ->where('created_at', '<', new Carbon($toDate));
        }

        if(!empty($type)){
            $targetArr =  $targetArr->where('type',$type);
        }

        if (!empty($data['allRequest'])){
            $targetArr = $targetArr->paginate(20);

        }else{
            $targetArr=null;
        }

        $data['targetArr'] = $targetArr;
        return view('report.sending_message_report',$data);
    }

    public function subscriber_message_sending_status_download(Request $request){

        $type=$request->type;
        $formDate=$request->from_date;
        $toDate=$request->to_date;

        $targetArr =New \App\Models\EmailSMS();
        if(!empty($formDate)){
            $targetArr =  $targetArr->whereDate('created_at', '>',new Carbon($formDate))
                ->where('created_at', '<', new Carbon($toDate));
        }

        if(!empty($type)){
            $targetArr =  $targetArr->where('type',$type);
        }

        $targetArr = $targetArr->get();

        $searchedValue=[];

        foreach ($targetArr as $id=>$value){

            $searchedValue[$id]=[
                'Email'=>$value->email,
                'Phone Number'=>$value->contact_no,
                'Subject'=>$value->subject,
                'Message'=>$value->message,
                'Status'=>$value->status==1?'Success':'Fail',
                'Sending Date'=>date('Y-m-d',strtotime($value->created_at)),
            ];

        }

        return Excel::create('Subscriber Message Sending Status', function($excel) use ($searchedValue) {

            $excel->setTitle('Subscriber Message Sending Status');
            $excel->sheet('Sheet1', function($sheet) use($searchedValue) {
                $sheet->fromArray($searchedValue);
            });


        })->export('xls');
    }


    public function process_time_set(){
        $target = \App\Models\ProcessTimeSet::find(1);



        return View::make('settings.process_time_set')->with(compact('target'));
    }

    public function process_time_set_update(){
        $target = \App\Models\ProcessTimeSet::find(1);
        $target->process_time_1 = Input::get('process_time_1');
        $target->process_time_2 = Input::get('process_time_2');
        $target->save();
        return \redirect()->back();
    }

}
