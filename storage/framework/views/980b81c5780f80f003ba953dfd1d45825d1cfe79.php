<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>University Social Network</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
       <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/main.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/color.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <h1>University Social Network</h1>
                        <p>
                            Join us in Our Comminty
                        </p>
                        <div class="friend-logo">
                            <span><img src="<?php echo e(asset('public/frontend/images/smile.png')); ?>" alt=""></span>
                        </div>
                        <a href="#" title="" class="folow-me">Follow Us on</a>
                    </div>  
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <h2 class="log-title">Login</h2>
                            
                        <?php if(Session::has('error')): ?>
                            <div class='alert alert-danger alert-dismissable'>
                                <a class="close" data-dismiss="alert" href="#">&times;</a>
                                <i class='icon-remove-sign'></i>
                                <?php echo e(Session::get('error')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo Form::open(array('url' => 'login', 'class' => 'validate-form', 'autocomplete'=>'off')); ?>

                        
                            <div class="form-group">    
                              <input type="text" id="username" name="username" required="required"/>
                              <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">    
                              <input type="password" name="password" required="required"/>
                              <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                           <!--  <div class="checkbox">
                              <label>
                                <input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
                              </label>
                            </div> -->
                            <!-- <a href="#" title="" class="forgot-pwd">Forgot Password?</a> -->
                            <div class="submit-btns">
                                <button class="mtr-btn signin" type="submit"><span>Login</span></button>

                                <button class="mtr-btn signup" type="button"><span>Register</span></button>
                            </div>
                        <?php echo Form::close(); ?>



                    </div>
                    <div class="log-reg-area reg">
                        <h2 class="log-title">Register</h2>
                           
                        <?php echo Form::open(array('url' => 'register', 'class' => 'validate-form', 'autocomplete'=>'off')); ?>

                            <div class="form-group">    
                              <input type="text" name="full_name" required="required"/>
                              <label class="control-label" for="input">Full Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">    
                              <input type="text" name="username" required="required"/>
                              <label class="control-label" for="input"> User Name</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">    
                              <input type="password" name="password" required="required"/>
                              <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-radio">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="gender" value="male" checked="checked"/><i class="check-box"></i>Male
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="gender" value="female" /><i class="check-box"></i>Female
                                </label>
                              </div>
                              
                             <div class="form-group">    
                              <input type="hidden" name="status_id" value="1" required="required"/>
                             
                            </div>

                            </div>
                            <div class="form-group">    
                              <input type="email" name="email" required="required"/>
                              <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
                              </label>
                            </div>
                            <a href="#" title="" class="already-have">Already have an account</a>
                            <div class="submit-btns">
                                <button class="mtr-btn" type="submit"><span>Register</span></button>
                               
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo e(asset('public/frontend/js/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/map-init.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body> 

</html><?php /**PATH C:\xampp\htdocs\Social-Network\resources\views/login.blade.php ENDPATH**/ ?>