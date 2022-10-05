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
            return Redirect::to('dashboard');

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

        Route::get('all-user',[\App\Http\Controllers\DashboardController::class,'UserIndex']);

        Route::get('edit-user/{id}', '\App\Http\Controllers\DashboardController@edit_user')->name('edit_user');

        Route::get('delete-user/{id}', '\App\Http\Controllers\DashboardController@delete_user')->name('delete_user');



        Route::get('all-user-post/{id}', '\App\Http\Controllers\DashboardController@all_user_post')->name('all_user_post');
        Route::get('all-user-post-edit/{id}', '\App\Http\Controllers\DashboardController@all_user_post_edit')->name('all_user_post_edit');
        Route::get('all-user-post-delete/{id}', '\App\Http\Controllers\DashboardController@all_user_post_delete')->name('all_user_post_delete');



        Route::get('all-user-friend/{id}', '\App\Http\Controllers\DashboardController@all_user_friend')->name('all_user_friend');
         Route::get('all-user-pandingfriend/{id}', '\App\Http\Controllers\DashboardController@all_user_pandingfriend')->name('all_user_pandingfriend');
         Route::get('all-user-approvefriend/{id}', '\App\Http\Controllers\DashboardController@approvefriend')->name('approvefriend');
        Route::get('all-user-friend-edit/{id}', '\App\Http\Controllers\DashboardController@all_user_friend_edit')->name('all_user_friend_edit');
        Route::get('all-user-friend-delete/{id}', '\App\Http\Controllers\DashboardController@all_user_friend_delete')->name('all_user_friend_delete');


        Route::get('all-user-page/{id}', '\App\Http\Controllers\DashboardController@all_user_page')->name('all_user_page');
        Route::get('all-user-page-edit/{id}', '\App\Http\Controllers\DashboardController@all_user_page_edit')->name('all_user_page_edit');
        Route::get('all-user-page-delete/{id}', '\App\Http\Controllers\DashboardController@all_user_page_delete')->name('all_user_page_delete');



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
        Route::post('update_password', [FrontendController::class, 'update_password'])->name('update_password');
        Route::get('timeline-massage_box', [FrontendController::class, 'massage_box'])->name('massagebox');
        Route::get('timeline-notification_page', [FrontendController::class, 'notification_page'])->name('notification_page');


        Route::get('my_page', [FrontendController::class, 'my_page'])->name('my_page');
   


    });


         
     Route::group(['name' => 'post', 'as' => 'post.'], function () 
    {

      Route::post('add-post', '\App\Http\Controllers\PostController@store')->name('store');
      Route::get('view-post', '\App\Http\Controllers\PostController@view_post')->name('view_post');

    
    });


      Route::group(['name' => 'profile', 'as' => 'profile.'], function () 
    {

      Route::get('edit_profile', '\App\Http\Controllers\profileController@index')->name('index');
      Route::post('store-profile/{id}', '\App\Http\Controllers\profileController@store')->name('store');
      Route::get('view-profile', '\App\Http\Controllers\profileController@view_post')->name('view_profile');

    
    });


     Route::group(['name' => 'create_page', 'as' => 'create_page.'], function () 
    {

      Route::post('add-page', '\App\Http\Controllers\create_pageController@store')->name('store');
      Route::get('view-page', '\App\Http\Controllers\create_pageController@view_page')->name('view_page');

       Route::get('edit-my-page/{id}', '\App\Http\Controllers\create_pageController@edit_page')->name('edit_page');

      Route::get('delete-my-page/{id}', '\App\Http\Controllers\create_pageController@delete_page')->name('delete_page');

      Route::POST('update-my-page/{id}', '\App\Http\Controllers\create_pageController@update_page')->name('update_page');

    
    });


     Route::group(['name' => 'my_page', 'as' => 'my_page.'], function () 
    {
      Route::post('page-post', '\App\Http\Controllers\my_pageController@store')->name('store'); 

      Route::get('view-my-page/{id}', '\App\Http\Controllers\my_pageController@view_page')->name('view_page'); 

      Route::get('view-my-page-post/{id}', '\App\Http\Controllers\my_pageController@view_page_post')->name('view_page_post'); 
    });


  Route::group(['name' => 'friend', 'as' => 'friend.'], function () 
    {

      Route::get('add-friend/{id}', '\App\Http\Controllers\friendController@addfriend')->name('addfriend'); 
      Route::get('confrim-friend/{id}', '\App\Http\Controllers\friendController@confrimfriend')->name('confrimfriend'); 
      Route::get('remove-friend/{id}', '\App\Http\Controllers\friendController@removefriend')->name('removefriend'); 


    });

  Route::group(['name' => 'elibrary', 'as' => 'elibrary.'], function () 
    {

      Route::get('e-Library', '\App\Http\Controllers\ElibraryController@index')->name('index'); 
       Route::get('e-LibraryForm', '\App\Http\Controllers\ElibraryController@form')->name('form');
      Route::post('e-Library-store', '\App\Http\Controllers\ElibraryController@store')->name('store'); 
      Route::get('e-Library-list/{id}', '\App\Http\Controllers\ElibraryController@view')->name('view');
      Route::get('e-Library-edit/{id}', '\App\Http\Controllers\ElibraryController@edit')->name('edit'); 
      Route::get('e-Library-delete/{id}', '\App\Http\Controllers\ElibraryController@delete')->name('delete');
      Route::post('e-Library-update/{id}', '\App\Http\Controllers\ElibraryController@update')->name('update');  


    });


        
        


    });
});
