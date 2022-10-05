
<div class="widget friend-list stick-widget">
	<h4 class="widget-title">Followers</h4>
	<?php $__currentLoopData = $myfriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div id="searchDir"></div>
			
			<ul id="people-list" class="friendz-list" style="margin-bottom: -42px;">
				<li>
					<figure>
						<img src="<?php echo e(asset('public/frontend/images/resources/friend-avatar.jpg')); ?>" alt="">
						<span class="status f-online"></span>
					</figure>
					<div class="friendz-meta">
						<a href="time-line.html"><?php echo e($data->full_name); ?></a>
						<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d7c9ced4c5d2d3cfccc4c5d2e0c7cdc1c9cc8ec3cfcd"><?php echo e($data->email); ?></a></i>
					</div>
				</li>	
			</ul>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<div class="chat-box">
				<div class="chat-head">
					<span class="status f-online"></span>
					<h6>Bucky Barnes</h6>
					<div class="more">
						<span><i class="ti-more-alt"></i></span>
						<span class="close-mesage"><i class="ti-close"></i></span>
					</div>
				</div>
				<div class="chat-list">
					<ul>
						<li class="me">
							<div class="chat-thumb"><img src="<?php echo e(asset('public/frontend/images/resources/chatlist1.jpg')); ?>" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
						<li class="you">
							<div class="chat-thumb"><img src="<?php echo e(asset('frontend/images/resources/chatlist2.jpg')); ?>" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
						<li class="me">
							<div class="chat-thumb"><img src="<?php echo e(asset('public/frontend/images/resources/chatlist1.jpg')); ?>" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
					<form class="text-box">
						<textarea placeholder="Post enter to post..."></textarea>
						<div class="add-smiles">
							<span title="add icon" class="em em-expressionless"></span>
						</div>
						<div class="smiles-bunch">
							<i class="em em---1"></i>
							<i class="em em-smiley"></i>
							<i class="em em-anguished"></i>
							<i class="em em-laughing"></i>
							<i class="em em-angry"></i>
							<i class="em em-astonished"></i>
							<i class="em em-blush"></i>
							<i class="em em-disappointed"></i>
							<i class="em em-worried"></i>
							<i class="em em-kissing_heart"></i>
							<i class="em em-rage"></i>
							<i class="em em-stuck_out_tongue"></i>
						</div>
						<button type="submit"></button>
					</form>
				</div>
	</div><!-- friends list sidebar --><?php /**PATH C:\xampp\htdocs\social-network\resources\views/frontend/rightsidebar.blade.php ENDPATH**/ ?>