<?php
$currentControllerName = Request::segment(1);
$currentControllerName1 = Request::segment(2);
$action = Route::currentRouteAction();
$aclList = Session::get('acl');
$currentPath = Request::path();

?>

<aside id="menu">
    <div id="navigation">

        <div class="profile-picture">
            <a href="{{URL::to('dashboard')}}">
                @if(isset(Auth::user()->photo))
                    <img class="img-circle m-b" width="76" height="76" src="{{URL::to('/')}}/public/uploads/thumbnail/{{Auth::user()->photo}}">
                @else
                    <img class="img-circle m-b" width="76" height="76" src="{{URL::to('/')}}/public/img/unknown.png">
                @endif
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">{{Auth::user()->first_name.' '. Auth::user()->last_name}}</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <small class="text-muted"><b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs" aria-labelledby="dropdownMenuButton1">
                        <li><a href="{{ URL::to('users/profile/')}}" class="dropdown-item">{{ __(session()->get('localeVal').'.PROFILE') }}</a></li>
                        <li><a href="{{ URL::to('users/cpself/') }}"  class="dropdown-item">{{ __(session()->get('localeVal').'.CHANGE_PASSWORD') }}</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('logout') }}"  class="dropdown-item">{{ __(session()->get('localeVal').'.SIGN_OUT') }}</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <ul class="list-group" id="side-menu">
            <li <?php $current = ($currentControllerName == 'dashboard') ? 'active' : ''; ?> class=" d-flex justify-content-between align-items-center pl-3 <?php echo $current; ?>" >
                <a href="{!! URL::to('dashboard') !!}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.DASHBOARD') }}</a>
                 <span ><i class="fas fa-tachometer-alt"></i></span>
            </li>

            <?php if (!empty($aclList[1][1]) || !empty($aclList[2][1])  || !empty($aclList[6][1]) || !empty($aclList[3][1])) { ?>
            <li <?php $current = (request::is('role') == 'role' || $currentControllerName == 'users' || $currentControllerName == 'roleacl' || $currentControllerName == 'useracl' || $currentControllerName == 'modulelist' || $currentControllerName == 'activitylist') ? 'active' : ''; ?> class="<?php echo $current; ?> ">
                <a href="#" class="text-decoration-none d-block"><span class="nav-label">{{ __(session()->get('localeVal').'.USER_INFO') }}</span><span class="fa arrow"></span></a>
                <ul class="list-group nav-second-level in collapse {{ ($currentControllerName == 'users' || $currentControllerName == 'roleacl' || $currentControllerName == 'useracl' || $currentControllerName == 'role')?'show':'' }}">

                    <?php if (!empty($aclList[3][1])) { ?>
                    <li <?php $current = ( $currentControllerName == 'users' ) ? 'active' : ''; ?> class="<?php echo $current; ?> ">
                        <a href="{{URL::to('users')}}" class="text-decoration-none d-block"><span class="nav-label">{{ __(session()->get('localeVal').'.USER_MANAGE') }}</span></a>
                    </li>
                    <?php } ?>

                    <?php if (!empty($aclList[1][1])) { ?>
                    <li <?php $current = ($currentControllerName == 'role') ? 'active' : ''; ?> class="<?php echo $current; ?> ">
                        <a href="{{URL::to('role')}}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.ROLE_MANAGE') }}</a>
                    </li>
                    <?php } ?>

                    <?php if (!empty($aclList[2][1])) { ?>
                    <li <?php $current = ($currentControllerName == 'roleacl') ? 'active' : ''; ?> class="<?php echo $current; ?> ">
                        <a href="{{URL::to('roleacl')}}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.ROLE_ACCESS') }}</a>
                    </li>
                    <?php }   ?>

                    <?php if (!empty($aclList[6][1])) { ?>
                    <li <?php $current = ($currentControllerName == 'useracl') ? 'active' : ''; ?> class="<?php echo $current; ?>">
                        <a href="{{URL::to('useracl')}}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.USER_ACCESS') }}</a>
                    </li>
                    <?php } ?>

                </ul>
            </li>
            <?php } ?>


            <?php if (!empty($aclList[4][1]) || !empty($aclList[5][1])|| !empty($aclList[7][3])) { ?>
                <li <?php $current = ($currentControllerName == 'normal-usual-settings' || $currentControllerName == 'module' || $currentControllerName == 'activity' || $currentControllerName == 'systemSettings') ? 'active' : ''; ?> class="d-flex justify-content-between align-items-center pl-3 <?php echo $current; ?>" >
                <a href="{{url('normal-usual-settings/1')}}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.SETTING') }}</a>
                <span><i class="fas fa-cog"></i></span>
                </li>
            <?php } ?>

            <?php if (!empty($aclList[1][1]) || !empty($aclList[2][1])  || !empty($aclList[6][1]) || !empty($aclList[3][1])) { ?>
            <li <?php $current = ( $currentControllerName == 'meeting-frequency' || $currentControllerName == 'meeting-type' || $currentControllerName == 'meeting-room' || $currentControllerName == 'meeting-category' || $currentControllerName == 'meeting-priority' || $currentControllerName == 'meeting-convener-org' || $currentControllerName == 'clear-all-cache' || $currentControllerName == 'frequently-asked-q' ) ? 'active' : ''; ?> class="<?php echo $current; ?> justify-content-around">
                <a href="#" class="text-decoration-none d-block"><span class="nav-label">{{ __(session()->get('localeVal').'.ADMINISTRATION') }}</span><span class="fa arrow"></span></a>
                <ul class="list-group nav-second-level in collapse {{ ($currentControllerName == 'meeting-frequency' || $currentControllerName == 'meeting-type' || $currentControllerName == 'meeting-room' || $currentControllerName == 'meeting-category' || $currentControllerName == 'meeting-priority' || $currentControllerName == 'meeting-convener-org' || $currentControllerName == 'clear-all-cache' || $currentControllerName == 'frequently-asked-q')?'show':'' }}">
                    <?php if (!empty($aclList[4][1])) { ?>
                        <li <?php $current = ( $currentControllerName == 'clear-all-cache') ? 'active' : ''; ?> class="<?php echo $current; ?> ">
                            <a href="{{URL::to('clear-all-cache/')}}" class="text-decoration-none d-block">{{ __(session()->get('localeVal').'.CLEAR_CACHE') }}</a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>


            <?php if (!empty($aclList[4][1]) || !empty($aclList[5][1])|| !empty($aclList[7][3])) { ?>
            <li <?php $current = ($currentControllerName == 'language-management') ? 'active' : ''; ?> class="<?php echo $current; ?>">
                <a href="#" class="text-decoration-none d-block"><span class="nav-label">{{ __(session()->get('localeVal').'.LANGUAGE_MANAGE') }}</span><span class="fa arrow"></span></a>
                <ul class="list-group nav-second-level in collapse {{ ($currentControllerName == 'language-management')?'show':'' }}">

                    <?php if (!empty($aclList[4][1])) { ?>
                    <li <?php $current = ($currentControllerName1 == 'all-language') ? 'active' : ''; ?> class="<?php echo $current; ?>" >
                        <a href="{{URL::to('language-management/all-language')}}" class="text-decoration-none d-block"><span class="nav-label">{{ __(session()->get('localeVal').'.LANGUAGE_ALL') }}</span></a>
                    </li>
                    <?php } ?>

                </ul>
            </li>
            <?php } ?>



        </ul>
    </div>
</aside>
