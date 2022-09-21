<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login Page
//Route::get('/', '\App\Http\Controllers\DashboardController@homePage');

//set Language
//Route::get('make-the-website-multi-lang/{val}', '\App\Http\Controllers\DashboardController@multiLang');


// Login Page
Route::get('/', function() {
    return View::make('login');
});

// Login Page
Route::get('/login', function() {
    return View::make('login');
});


//login
Route::post('login', function (\Illuminate\Http\Request $request) {
    $user = array(
        'username' => $request->username,
        'password' => $request->password,
        'status_id' => 1
    );

    if (Auth::attempt($user)) {

        $dataArr = \App\Models\ModuleToUser::where('user_id', Auth::user()->id)->get();

        $accessArr = array();
        if (!empty($dataArr)) {
            foreach ($dataArr as $item) {
                $accessArr[$item->module_id][$item->activity_id] = $item->activity_id;
            }
        }

        Session::put('acl', $accessArr);
        if(auth()->user()->role_id == 6){

            // return Redirect::to('dashboard');
            return Redirect::to('home');

        }elseif(auth()->user()->role_id == 7){
            return Redirect::to('promoter/dashboard');

        }else{
            
            return Redirect::to('home');

        }
    } else {
        Session::flash('error', 'Your username or password was incorrect.!');
        return View::make('login')->withInput($request->password);
    }
});

Route::POST('register',[\App\Http\Controllers\RegisterNewUserController::class,'RegisterNewUser']);


//Admin route start
Route::group(['middleware'=>'authCheck'],function (){

    Route::group(array('middleware' => 'authCheck'), function() {

        Route::get('logout', array('as' => 'logout', function () {
            Auth::logout();
            Session::flush();
            return Redirect::to('/');
        }));


        //dashboard
        Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'index']);
        Route::post('users/cpself/', [\App\Http\Controllers\UsersController::class,'cpself']);
        //change password
        Route::get('users/cpself/', function() {
            return View::make('users/change_password_self');
        });
        //update profile
        Route::get('users/profile/', function () {
            return View::make('users/user_profile');
        });
        Route::post('users/editProfile/', [\App\Http\Controllers\UsersController::class,'editProfile']);
        //User Resource
        Route::resource('users', '\App\Http\Controllers\UsersController');
        Route::get('users/activate/{id}/{param?}', '\App\Http\Controllers\UsersController@active');
        Route::post('users/filter/', '\App\Http\Controllers\UsersController@filter');
        Route::get('users/cp/{id}/{param?}', '\App\Http\Controllers\UsersController@change_pass');
        Route::post('users/pup', '\App\Http\Controllers\UsersController@pup');


        //Role Management Resource
        Route::post('role/filter', '\App\Http\Controllers\RoleController@filter');
        Route::resource('role', '\App\Http\Controllers\RoleController');
        //Activity Management

        Route::get('activitylist', '\App\Http\Controllers\ActivityController@index');
        Route::get('modulelist', '\App\Http\Controllers\ModuleController@index');
        //ROle Access Control
        Route::get('roleacl', '\App\Http\Controllers\RoleAclController@index');
        Route::post('roleAclSetup', '\App\Http\Controllers\RoleAclController@roleAclSetup');
        Route::post('roleacl', '\App\Http\Controllers\RoleAclController@save');
        //User Access Control
        Route::get('useracl', '\App\Http\Controllers\UserAclController@index');
        Route::post('userAclSetup', '\App\Http\Controllers\UserAclController@userAclSetup');
        Route::post('useracl', '\App\Http\Controllers\UserAclController@save');

        //Module Resource
        Route::post('module/filter', '\App\Http\Controllers\ModuleController@filter');
        Route::resource('module', '\App\Http\Controllers\ModuleController');

        //Activity Resource
        Route::post('activity/filter', '\App\Http\Controllers\ActivityController@filter');
        Route::resource('activity', '\App\Http\Controllers\ActivityController');

        //System Settings
        Route::get('systemSettings', '\App\Http\Controllers\SystemSettingsController@edit');
        Route::put('systemSettings/update', [
            'as'=>'system.update',
            'uses'=>'\App\Http\Controllers\SystemSettingsController@update'

        ]);

        /**
         * ***************************************************
         * ################ Start From Here ################ *
         * ################ Start From Here ################ *
         * ################ Start From Here ################ *
         * ################ Start From Here ################ *
         * ***************************************************
         */
        //Language Management
        Route::get('language-management/all-language', '\App\Http\Controllers\LanguageManagementController@index');
        Route::get('language-management/create', '\App\Http\Controllers\LanguageManagementController@create');
        Route::post('language-management/store', '\App\Http\Controllers\LanguageManagementController@store');
        Route::get('language-active-inactive/{id}/{status}', '\App\Http\Controllers\LanguageManagementController@activeInActiveLang');
        Route::get('language-file-edit/{id}', '\App\Http\Controllers\LanguageManagementController@fileEdit');
        Route::post('language-file-update/', '\App\Http\Controllers\LanguageManagementController@fileUpdate');
        Route::get('language-edit/{id}', '\App\Http\Controllers\LanguageManagementController@edit');
        Route::post('language-update/{id}', '\App\Http\Controllers\LanguageManagementController@update');
        Route::get('language-delete/{id}', '\App\Http\Controllers\LanguageManagementController@delete');



      

        //clear-all-cache
        Route::get('clear-all-cache/', '\App\Http\Controllers\ClearAllCacheController@index');
        Route::get('clear-cache/{val}', '\App\Http\Controllers\ClearAllCacheController@clearCache');


        


        //Settings
        Route::get('normal-usual-settings/{param}', '\App\Http\Controllers\NormalSettingsController@index');




        Route::group(['name' => 'frontend', 'as' => 'frontend.'], function () {

        Route::get('home', [FrontendController::class, 'index'])->name('index');
        Route::get('timeline', [FrontendController::class, 'timeline'])->name('timeline');
        Route::get('timeline-video', [FrontendController::class, 'videos_page'])->name('videospage');
        Route::get('timeline-photo', [FrontendController::class, 'photo_page'])->name('photopage');
        Route::get('timeline-friend', [FrontendController::class, 'friends_page'])->name('friendspage');
        Route::get('timeline-groups', [FrontendController::class, 'groups_page'])->name('groupspage');
        Route::get('timeline-about', [FrontendController::class, 'about_page'])->name('aboutpage');

        Route::get('timeline-create_page', [FrontendController::class, 'create_page'])->name('creatpage');
        Route::get('timeline-edit_password', [FrontendController::class, 'edit_password'])->name('edit_password');
        Route::get('timeline-massage_box', [FrontendController::class, 'massage_box'])->name('massagebox');
        Route::get('timeline-notification_page', [FrontendController::class, 'notification_page'])->name('notification_page');

        Route::get('My_page', [FrontendController::class, 'my_page'])->name('my_page');
   


    });


         
     Route::group(['name' => 'post', 'as' => 'post.'], function () 
    {

      Route::post('add-post', '\App\Http\Controllers\PostController@store')->name('store');
      Route::get('view-post', '\App\Http\Controllers\PostController@view_post')->name('view_post');

    
    });


     Route::group(['name' => 'create_page', 'as' => 'create_page.'], function () 
    {

      Route::post('add-page', '\App\Http\Controllers\create_pageController@store')->name('store');
      Route::get('view-page', '\App\Http\Controllers\create_pageController@view_page')->name('view_page');

    
    });


     Route::group(['name' => 'my_page', 'as' => 'my_page.'], function () 
    {

    
      Route::get('view-my-page/{id}', '\App\Http\Controllers\my_pageController@view_page')->name('view_page');

    
    });



        
        


    });
});
