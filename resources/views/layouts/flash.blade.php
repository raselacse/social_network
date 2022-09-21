<?php


$ses_msg = Session::has('success');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('success'); ?></p>
 </div>
<?php
}


$ses_msg = Session::has('successCoupon');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('successCoupon'); ?></p>
 </div>
    <?php
}

//

$ses_msg = Session::has('successSubscribe');
if (!empty($ses_msg)) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('successSubscribe'); ?></p>
</div>
<?php
}//


$ses_msg = Session::has('errorSubscribe');

if (!empty($ses_msg)) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('errorSubscribe'); ?></p>
</div>
<?php
   }
$ses_msg = Session::has('error');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('error'); ?></p>
    </div>
<?php
}

$ses_msg = Session::has('warning');
if (!empty($ses_msg)) {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('warning'); ?></p>
    </div>
<?php
}

$ses_msg = Session::has('failedCoupon');

if (!empty($ses_msg)) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<p class="m-0"><i class="fa fa-bell-o fa-fw"></i><?php echo Session::get('failedCoupon'); ?></p>
</div>
<?php


}// ?>





<?php if($errors->any()){ ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <p class="m-0"><i class="fa fa-bell-o fa-fw"></i>@foreach($errors->all() as $error)
      {{ $error }}</p>
      @endforeach
  </div>

<?php } ?>
