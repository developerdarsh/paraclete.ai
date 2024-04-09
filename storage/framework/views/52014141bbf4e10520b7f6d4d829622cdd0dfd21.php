
<?php $__env->startSection('css'); ?>
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(URL::asset('plugins/highlight/highlight.dark.min.css')); ?>" rel="stylesheet" />
	<style>
		.chat-main-container .card-footer {
			height: 75px;
			padding-top: 0;
			padding-bottom: 0;
		}
		.chat-controllers {
			display: flex;
			align-items: center;
			justify-content: center;
			padding-bottom: 10px;

		}
		.chat-message-container .d-flex .form-switch{
			max-height: 1rem;
		}
		.audio_search a{
			padding:0px 2px;
		}
		#audioPlayer{
			display: block;
		}
		.audio_search .fa{
			font-size:1.3rem;
			cursor:pointer;
		}
		.chats-input-b .form-group {
			position: relative;
			display: flex;
			flex-wrap: inherit;
			align-items: center;
			flex-direction: row;
			width: 100%;
		}
		.chats-input-b .input-group-btn {
			position: relative;
		}
		.chats-input-b .microphone-voice {
			margin: 0px 10px !IMPORTANT;
		}
		.chats-input-b .microphone-voice i {
			width: 40px;
			height: 40px;
			line-height: 40px;
			background: #7111ef;
			color: #ffffff;
			font-size: 18px;
			text-align: center;
			border-radius: 100%;
		}
		.chats-input-b .microphone-voice .active:after {
			content: '';
			width: 12px;
			height: 12px;
			background: red;
			position: absolute;
			border-radius: 100%;
			top: 2px;
		}
		.audio_search a i {
			width: 24px;
			height: 24px;
			line-height: 24px;
			text-align: center;
			background: #520cae;
			color: #fff;
			border-radius: 100%;
			font-size: 12px;
		}
		.card-footer .dropdown-selected {
			margin: 15px 0;
		}
		.card-footer .dropdown-selected .btn:focus {
			box-shadow: none;
		}
		.card-footer .dropdown-selected .btn {
			min-width: 100%;
			border: 1px solid #ddd;
			padding: 8px 40px;
			background: #4987f8c2;
			color: #ffffff;
		}
		.chat-main-container .card-footer {
			min-height: auto !important;
			height: auto !important;
		}
		.input-box.chats-input-b .form-control {
			border-color: #007BFF;
		}
		.card-footer .dropdown-selected .s-dropdown-menu {
			width: calc(100% - 24px); 
			padding: 10px 30px 10px;
			overflow-y: auto;
			max-height: 340px;
			height: max-content;
		}
		.card-footer .dropdown-selected .s-dropdown-menu li {
			font-size: 14px;
			line-height: 24px;
			font-weight: 400;
			list-style: number;
		} 
		.card.balance-view {
			background: #f5f9fc;
		}
		.chage-x {
			background: #f4f4f6;
			padding: 5px;
			border-radius: 4px;
		}
		.chage-x span.bold-f {
			font-weight: 600;
			color: #222222;
		}
		.card.balance-view p {
			font-size: 14px;
		}
		.card.balance-view p span {
			background: #75a4fa;
			color: #ffffff;
			font-weight: bold;
			padding: 2px 6px;
			border-radius: 2px;
			font-size: 14px;
		}
		.chat-card-header {
			min-height: 5rem;
		}

		.chat-sidebar-search {
			max-height: 79px;
			font-size: 16px;
			margin: 0;
			padding: 1.2rem 1.5rem;
			color: #333;
			display: block;
			position: relative;
			min-height: 3.5rem;
			border-bottom: 1px solid #ebecf1;
		}
		.chat-sidebar-search .chat-search-icon {
			position: absolute;
			right: 1rem;
			top: 35%;
		}
		#chat-search {
			border-radius: 1rem;
		}
		.chat-controllers {
			align-self: flex-end;
			gap: 1rem !important;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
		.chat-controllers .text-input {
			flex: 1;
		}
		.chat-controllers .action-0btn {
			display: flex;
			gap: 10px;
			margin-bottom: 20px;
		}
		.chat-controllers #message {
			background-color: transparent;
			border: none;
			resize: none;
		}
		.chat-controllers .chat-button {
			font-size: 12px;
			min-width: 100px;
			padding: 0.6rem 10px;
			border-radius: 35px;
			color: #fff;
			background-color: #007BFF;
			border-color: #007BFF;
			box-shadow: 0 1px 3px 0 rgba(50, 50, 50, 0.2), 0 2px 1px -1px rgba(50, 50, 50, 0.12), 0 1px 1px 0 rgba(50, 50, 50, 0.14);
		}
		.chat-controllers .chat-button:hover {
			background-color: #1e1e2d;
			border-color: #1e1e2d;
		}
		.chat-controllers .chat-button-icon {
			color: #007BFF;
			border-radius: 50%;
			padding: 0.5rem 0.8rem;
			width: 43px;
			background-color: #E1F0FF;
			outline: none !important;
			text-decoration: none !important;
		}
		.chat-controllers .chat-button-icon:hover {
			color: #1e1e2d;
			background-color: #D1D3E0;
		}
		.chat-controllers .special-action-color {
			border-color: #E1F0FF;
			color: #007BFF;
			background-color: #E1F0FF;
			box-shadow: none;
		}
		.chat-controllers .special-action-color:hover {
			color: #FFF;
		}
		#new-chat-button {
			padding: 0.6rem 10px;
			text-transform: none;
		}
		@media (max-width: 991px) {
			.chat-controllers .action-0btn {
				margin-bottom: 0px;
			}
			.chat-controllers .text-input {
				flex: inherit;
				width: 100%;
			}
			#chat-system #chat-container {
				height: auto;
			}
	
			.chat-controllers {
				flex-direction: column;
				align-items: flex-start;
			}
		}
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__($chat->name)); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-messages-question mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.chat')); ?>"> <?php echo e(__('AI Chat Assistants')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__($chat->name)); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<div id="balance-status">
				<span class="fs-11 text-muted pl-3"><i class="fa-sharp fa-solid fa-bolt-lightning mr-2 text-primary"></i><?php echo e(__('Your Balance is')); ?> <span class="font-weight-semibold" id="balance-number"><?php if(auth()->user()->available_words == -1): ?> <?php echo e(__('Unlimited')); ?> <?php else: ?> <?php echo e(number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid)); ?> <?php echo e(__('Words')); ?><?php endif; ?></span></span>
			</div>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<form id="openai-form" action="" method="GET" enctype="multipart/form-data">		
		<?php echo csrf_field(); ?>
		<div class="row justify-content-md-center">
			
			<div class="chat-main-container">
				<div class="chat-sidebar-container">
					<div class="chat-sidebar-search">	
						<div class="input-box relative">				
							<input id="chat-search" class="form-control" type="text" placeholder="<?php echo e(__('Search')); ?>">	
							<i class="fa-solid fa-magnifying-glass fs-14 text-muted chat-search-icon"></i>	
						</div>			
					</div>
					<?php if(config('settings.chat_real_time_data') == 'allow'): ?>
						<?php if($internet): ?>
							<div class="form-group" style="padding:15px 0 0 20px">
								<label class="custom-switch mb-0">
									<input type="checkbox" name="google-search" class="custom-switch-input" id="google-search">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description"><?php echo e(__('Use Real-Time Data')); ?></span>
								</label>
							</div>
						<?php endif; ?>
					<?php endif; ?>

					<div class="chat-sidebar-messages">						
						<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="chat-sidebar-message <?php if($loop->first): ?> selected-message <?php endif; ?>" id="<?php echo e($message->conversation_id); ?>">
								<h6 class="chat-title" id="title-<?php echo e($message->conversation_id); ?>">
									<?php echo e(__($message->title)); ?>

								</h6>
								<div class="chat-info">
									<div class="chat-count"><span><?php echo e($message->messages); ?></span> <?php echo e(__('messages')); ?></div>
									<div class="chat-date"><?php echo e(\Carbon\Carbon::parse($message->updated_at)->diffForhumans()); ?></div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit fs-12" id="<?php echo e($message->conversation_id); ?>"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
									<a href="#" class="chat-delete fs-12 ml-2" id="<?php echo e($message->conversation_id); ?>"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
								</div>
							</div>						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</div>
					<div class="card balance-view mb-0"> 
					   <div class="card-body">
                        <p>Available words : <span id="available_words"> <?php echo e(number_format(auth()->user()->available_words)); ?> </span> </p>
                        <p>Available words prepaid : <span id="available_words_prepaid"> <?php echo e(number_format(auth()->user()->available_words_prepaid)); ?> </span></p>
                        <p>Total words : <span id="balance"> <?php echo e(number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid)); ?> </span> <p>
                   		</div>
				   </div>
					<div class="card-footer">
						<div class="row text-center">						
							<div class="col-sm-12">									
								<a class="btn btn-primary pl-6 pr-6 fs-12" id="new-chat-button"><?php echo e(__('New Conversation')); ?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="chat-message-container" id="chat-system">
					<div class="card-header">
						<div class="w-100 pt-2 pb-2">
							<div class="d-flex">
								<div class="overflow-hidden mr-4"><img alt="Avatar" class="chat-avatar" src="<?php echo e(URL::asset($chat->logo)); ?>"></div>
								<div class="widget-user-name"><span class="font-weight-bold"><?php echo e(__($chat->name)); ?></span><br><span class="text-muted"><?php echo e(__($chat->sub_name)); ?></span></div>
							</div>
						</div>
						<div class="w-50 text-right pt-2 pb-2">				
							<a id="expand" class="template-button" href="#"><i class="fa-solid fa-bars table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="<?php echo e(__('Show Chat Conversations')); ?>"></i></a>
							<a id="export-word" class="template-button mr-2" onclick="exportWord();" href="#"><i class="fa-solid fa-file-word table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="<?php echo e(__('Export Chat Conversation as Word File')); ?>"></i></a>
							<a id="export-pdf" class="template-button mr-2" onclick="exportPDF();" href="#"><i class="fa-solid fa-file-pdf table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="<?php echo e(__('Export Chat Conversation as PDF File')); ?>"></i></a>
							<a id="export-txt" class="template-button mr-2" onclick="exportTXT();" href="#"><i class="fa-solid fa-file-lines table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="<?php echo e(__('Export Chat Conversation Text File')); ?>"></i></a>
							
						</div>
					</div>
					<div class="card-body pl-0 pr-0">
						<div class="row">						
							<div class="col-md-12 col-sm-12" >									
								<div id="chat-container">
									<div class="msg left-msg">
										<div class="message-img" style="background-image: url(<?php echo e($chat->logo); ?>)"></div>
										<div class="message-bubble">					
											<div class="msg-text"><?php echo e(__($chat->description)); ?></div>
										</div>
									</div>

									<div id="dynamic-inputs"></div>
									<div id="generating-status" class="text-center">
										<img src='<?php echo e(URL::asset("/img/svgs/code.svg")); ?>'>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">						
							<div class="col-sm-12">	
								<div class="col-sm-12">	
								<div class='d-lg-flex justify-content-between'>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="web_access_button">
										<label class="form-check-label" for="web-access-button">Web access</label>
									</div>
									<div class="text-black-3 font-medium bg-gray-3 px-1.5 rounded-lg">
										<div class="flex gap-0.5 items-center text-xs whitespace-nowrap">
											<p class="chage-x"><svg data-toggle="tooltip" data-placement="top" title="When Web access is highlighted, you will be deducted double the amount of words from your account. Note: Web access is for research purposes only" class="me-1" xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="none"><path stroke="#6B7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M8.5 14a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"/><path stroke="#6B7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M8 7.5h.5V11H9"/><path fill="#6B7280" stroke="#6B7280" stroke-width="125" d="M9.063 5.25a.687.687 0 1 1-1.375 0 .687.687 0 0 1 1.375 0Z"/></svg><span class="bold-f">Charge: <span class="charge-count">1</span> * output words</span></p>
										</div>
									</div>
									<div class="form-check form-switch d-flex">
										<div class="audio_search">
										<audio id="audioPlayer" controls style="visibility:hidden"></audio>
										<input type="hidden" id="isAudioSearch" value="0">
										<p id="status"></p>
										</div>
										
									</div>
                                </div>
								 <?php if(isset($template)): ?>
								<div class="dropdown-selected">
										<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											Conversational Starters
										</button>
										<ul class="dropdown-menu s-dropdown-menu">
                                            <?php $__currentLoopData = $template; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li> <?php echo e($t->template); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
									</div>
								<?php endif; ?>
								<div class="input-box mb-0">								
									<div class="chat-controllers">	
										<div class="text-input">					    
											<textarea type="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="2" id="message" name="message" placeholder="<?php echo e(__('Type your message here...')); ?>"></textarea>
										</div>
                     					<div class="action-0btn">
                  							<div>
												<a class="btn chat-button-icon" href="javascript:void(0)" id="prompt-button" data-bs-toggle="modal" data-bs-target="#promptModal" data-tippy-content="<?php echo e(__('Prompt Library')); ?>"><i class="fa-solid fa-notebook"></i></a>
											</div>
											<div class="microphone-voice">
												<a class="btn chat-button-icon" href="javascript:void(0)" id="record-button"><i class="fa-solid fa-microphone"></i></a>
											</div>
											<!-- <div class="microphone-voice"> <a id="record-button"><i class="fa-regular fa-microphone"></i></a> -->
											<div>
												<a class="btn chat-button special-action-color" href="javascript:void(0)" id="stop-button"><?php echo e(__('Stop')); ?> <i class="fa-solid fa-circle-stop ml-1"></i></a>
											</div>
											<div>
												<button class="btn chat-button" id="chat-button"><?php echo e(__('Send')); ?> <i class="fa-solid fa-paper-plane-top ml-1"></i></button>
											</div>
										</div> 
                  					</div>
									<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('message')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 
							</div>
							<!-- <div class="input-box mb-0">								
									<div class="chat-controllers">	
										<?php if(config('settings.vision_for_chat_feature_user') == 'allow'): ?>
											<input type="file" id="image-input" style="display: none;" accept="image/png, image/jpeg, image/webp">
											<div class="upload-button-nonresponsive"><a class="btn chat-button-icon" href="javascript:void(0)" id="upload-button" data-tippy-content="<?php echo e(__('Select your Image')); ?>"><i class="fa-solid fa-image"></i></a></div>				    					    
										<?php endif; ?>
										<textarea type="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="1" id="message" name="message" placeholder="<?php echo e(__('Type your message here...')); ?>"></textarea>
										<?php if(config('settings.vision_for_chat_feature_user') == 'allow'): ?>
											<div class="chat-button-box upload-button-responsive"><a class="btn chat-button-icon" href="javascript:void(0)" id="upload-button-mobile" data-tippy-content="<?php echo e(__('Select your Image')); ?>"><i class="fa-solid fa-image"></i></a></div>				    					    
										<?php endif; ?>
										<div class="chat-button-box"><a class="btn chat-button-icon" href="javascript:void(0)" id="prompt-button" data-bs-toggle="modal" data-bs-target="#promptModal" data-tippy-content="<?php echo e(__('Prompt Library')); ?>"><i class="fa-solid fa-notebook"></i></a></div>
										<div class="chat-button-box"><a class="btn chat-button-icon" href="javascript:void(0)" id="mic-button"><i class="fa-solid fa-microphone"></i></a></div>
										<div class="chat-button-box no-margin-right"><a class="btn chat-button-icon" href="javascript:void(0)" id="stop-button"><i class="fa-solid fa-circle-stop"></i></a></div>
										<div><button class="btn chat-button" id="chat-button"><?php echo e(__('Send')); ?> <i class="fa-solid fa-paper-plane-top ml-1"></i></button></div>
									</div> 
									<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('message')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<div class="modal fade" id="promptModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		  	<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body pl-5 pr-5">
					<h6 class="text-center font-weight-extra-bold fs-16"><i class="fa-solid fa-notebook mr-2"></i> <?php echo e(__('Prompt Library')); ?></h6>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 p-4">
							<div id="chat-search-panel">
								<div class="search-template">
									<div class="input-box">								
										<div class="form-group prompt-search-bar-dark">							    
											<input type="text" class="form-control" id="search-template" placeholder="<?php echo e(__('Search for prompts...')); ?>">
										</div> 
									</div> 
								</div>
							</div>
						</div>	
					</div>				
					
					<div class="prompts-panel">
			
						<div class="tab-content" id="myTabContent">
			
							<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
								<div class="row" id="templates-panel">			
									<?php $__currentLoopData = $prompts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prompt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-md-6 col-sm-12" id="<?php echo e($prompt->group); ?>">
											<div class="prompt-boxes">
												<div class="card border-0" onclick='applyPrompt("<?php echo e(__($prompt->prompt)); ?>")'>
													<div class="card-body pt-3">
														<div class="template-title">
															<h6 class="mb-2 fs-15 number-font"><?php echo e(__($prompt->title)); ?></h6>
														</div>
														<div class="template-info">
															<p class="fs-13 text-muted mb-2"><?php echo e(__($prompt->prompt)); ?></p>
														</div>							
													</div>
												</div>
											</div>							
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
			
						</div>
					</div>
					
				</div>
		  	</div>
		</div>
	  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/pdf/html2canvas.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/pdf/jspdf.umd.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/highlight/highlight.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/highlight/showdown.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/export-chat.js')); ?>"></script>
<script type="text/javascript">
	const main_form = get("#openai-form");
	const input_text = get("#message");
	const msgerChat = get("#chat-container");
	const dynamicList = get("#dynamic-inputs");
	const msgerSendBtn = get("#chat-button");
	const bot_avatar = "<?php echo e($chat->logo); ?>";
	const user_avatar = "<?php echo e(URL::asset(auth()->user()->profile_photo_path)); ?>";	
	const mic = document.querySelector('#mic-button');
	let eventSource = null;
	let isTranscribing = false;
	let chat_code = "<?php echo e($chat->chat_code); ?>";	
	let active_id;
	let default_message;
	let uploaded_image = '';
	const domainUrl = window.location.origin;

	// Process deault conversation
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$('#audio-player').hide();
		$(".chat-sidebar-message").first().focus().trigger('click');

		let check_messages = document.querySelectorAll('.chat-sidebar-message').length;
		if (check_messages == 0) {
			let id = makeid(10);

			$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'POST',
				url: '/user/chat/conversation',
				data: { 'conversation_id': id, 'chat_code': chat_code},
				success: function (data) {

					if (data == 'success') {
						$('#dynamic-inputs').html('');

						$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
								<div class="chat-title" id="title-${id}">
									<?php echo e(__('New Chat')); ?>

								</div>
								<div class="chat-info">
									<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
									<div class="chat-date"><?php echo e(__('Now')); ?></div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit fs-12" id="${id}"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
									<a href="#" class="chat-delete fs-12 ml-2"  id="${id}"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
								</div>
							</div>`);
						active_id = id;	
					} else {
						toastr.warning('<?php echo e(__('There was an issue while deleting chat conversation')); ?>');
					}		
								
				},
				error: function(data) {
					toastr.warning('<?php echo e(__('There was an issue while deleting chat conversation')); ?>');
				}
			});
		}
		/* web access button click */
		$("#web_access_button").click(function() {
			if ($(this).is(":checked")) {
				$(".charge-count").text("2");
			} else {
				$(".charge-count").text("1");
			}
		});
	});
	

	// Create new chat conversation
	$("#new-chat-button").on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
		let id = makeid(10);
		var element = document.getElementById(active_id);
		if (element) {
			element.classList.remove("selected-message");
		}

		$.ajax({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			method: 'POST',
			url: '/user/chat/conversation',
			data: { 'conversation_id': id, 'chat_code': chat_code},
			success: function (data) {

				if (data == 'success') {
					$('#dynamic-inputs').html('');

					$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
							<div class="chat-title" id="title-${id}">
								<?php echo e(__('New Chat')); ?>

							</div>
							<div class="chat-info">
								<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
								<div class="chat-date"><?php echo e(__('Now')); ?></div>
							</div>
							<div class="chat-actions d-flex">
								<a href="#" class="chat-edit fs-12" id="${id}"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
								<a href="#" class="chat-delete fs-12 ml-2"  id="${id}"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
							</div>
						</div>`);
					active_id = id;	
				} else {
					toastr.warning('<?php echo e(__('There was an issue while creating chat conversation')); ?>');
				}		
							
			},
			error: function(data) {
				toastr.warning('<?php echo e(__('There was an issue while creating chat conversation')); ?>');
			}
		});
    });


	// Show chat history for conversation
	$(document).on('click', ".chat-sidebar-message", function (e) { 

		$('.chat-sidebar-message').removeClass('selected-message');
		$(this).addClass('selected-message');
		$('#dynamic-inputs').html('');
		$('#generating-status').addClass('show-chat-loader');
		active_id = this.id;
		let code = makeid(10);

		$('.chat-sidebar-container').removeClass('extend');

		$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'POST',
				url: '/user/chat/history',
				data: { 'conversation_id': active_id,},
				success: function (data) {

					$('#dynamic-inputs').html('');
					$('#generating-status').removeClass('show-chat-loader');

					for (const key in data) {

						if(data[key]['prompt']) {
							appendMessage(user_avatar, "right", data[key]['prompt'], '', data[key]['images']);
						}

						if (data[key]['response']) {
							appendMessageSpecial(bot_avatar, "left", data[key]['response'], code);
						}
					}		
					
					hljs.highlightAll();
				},
				error: function(data) {
					toastr.warning('<?php echo e(__('There was an issue while retrieving chat history')); ?>');
				}
			});
	});


	// Rename conversation title
	$(document).on('click', '.chat-edit', function(e) {

		e.preventDefault();

		Swal.fire({
			title: '<?php echo e(__('Rename Chat Title')); ?>',
			showCancelButton: true,
			confirmButtonText: '<?php echo e(__('Rename')); ?>',
			reverseButtons: true,
			input: 'text',
		}).then((result) => {
			if (result.value) {
				var formData = new FormData();
				formData.append("name", result.value);
				formData.append("conversation_id", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/rename',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data['status'] == 'success') {
							toastr.success('<?php echo e(__('Chat title has been updated successfully')); ?>');
							document.getElementById("title-"+data['conversation_id']).innerHTML =  result.value;
						} else {
							toastr.error('<?php echo e(__('Chat title was not updated correctly')); ?>');
						}      
					},
					error: function(data) {
						Swal.fire('Update Error', data.responseJSON['error'], 'error');
					}
				})
			} else if (result.dismiss !== Swal.DismissReason.cancel) {
				Swal.fire('<?php echo e(__('No Title Entered')); ?>', '<?php echo e(__('Make sure to provide a new chat title before updating')); ?>', 'warning')
			}
		})
	});


	// Delete conversation	
	$(document).on('click', '.chat-delete', function(e) {

		e.preventDefault();

		Swal.fire({
			title: '<?php echo e(__('Confirm Chat Deletion')); ?>',
			text: '<?php echo e(__('It will permanently delete this chat history')); ?>',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: '<?php echo e(__('Delete')); ?>',
			reverseButtons: true,
		}).then((result) => {
			if (result.isConfirmed) {
				var formData = new FormData();
				formData.append("conversation_id", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/delete',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						
						if (data['status'] == 'success') {
							toastr.success('<?php echo e(__('Chat history has been successfully deleted')); ?>');

							$("#" + active_id).remove();	
							$('#dynamic-inputs').html('');	
							$(".chat-sidebar-message").first().focus().trigger('click');
							let check_messages = document.querySelectorAll('.chat-sidebar-message').length;

							if (check_messages == 0) {
								let id = makeid(10);

								$.ajax({
									headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
									method: 'POST',
									url: '/user/chat/conversation',
									data: { 'conversation_id': id, 'chat_code': chat_code},
									success: function (data) {

										if (data == 'success') {
											$('#dynamic-inputs').html('');

											$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
													<div class="chat-title" id="title-${id}">
														<?php echo e(__('New Chat')); ?>

													</div>
													<div class="chat-info">
														<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
														<div class="chat-date"><?php echo e(__('Now')); ?></div>
													</div>
													<div class="chat-actions d-flex">
														<a href="#" class="chat-edit fs-12" id="${id}"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
														<a href="#" class="chat-delete fs-12 ml-2"  id="${id}"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
													</div>
												</div>`);
											active_id = id;	
										} else {
											toastr.warning('<?php echo e(__('There was an issue while deleting chat conversation')); ?>');
										}		
													
									},
									error: function(data) {
										toastr.warning('<?php echo e(__('There was an issue while deleting chat conversation')); ?>');
									}
								});
							}						
						} else if (data['status'] == 'empty') { 
							$('#dynamic-inputs').html('');	
								
						}else {
							toastr.warning('<?php echo e(__('There was an issue while deleting chat conversation')); ?>');
						}      
					},
					error: function(data) {
						Swal.fire('Oops...','Something went wrong!', 'error')
					}
				})
			} 
		})
	});

	// Check textarea input
	$(function () {		
		main_form.addEventListener("submit", event => {
			event.preventDefault();
			var webAccessBtn = $("#web_access_button").prop('checked') ? 1 : 0;
			const message = input_text.value;
			if (!message) {
				toastr.warning('<?php echo e(__('Type your message first before sending')); ?>');
				return;
			}

			appendMessage(user_avatar, "right", message, '', uploaded_image);
			input_text.value = "";
			process(message,webAccessBtn)
		});

	});


	// Send chat message
	function process(message,webAccessBtn) {
		msgerSendBtn.disabled = true;
		let google = '';
		if ($('#google-search').is(':checked')) {
			google = 'on';
		} else {
			google = '';
		}
		let formData = new FormData();
		formData.append('message', message);
		formData.append('chat_code', chat_code);
		formData.append('conversation_id', active_id);
		formData.append('webAccessBtn', webAccessBtn);
		formData.append('image', uploaded_image);
		formData.append('google_search', google);
		let code = makeid(10);
		appendMessage(bot_avatar, "left", "", code);
        let $msg_txt = $("#" + code);
		let $div = $("#chat-bubble-" + code);
		fetch('/user/chat/process', {
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST', 
				body: formData
			})		
			.then(response => response.json())
			.then(function(result){

				if (result['old'] && result['current']) {
					animateValue("balance-number", result['old'], result['current'], 300);
				}
		
				if (result['status'] == 'error') {
					Swal.fire('<?php echo e(__('Chat Notification')); ?>', result['message'], 'warning');
					clearConversationInvalid();
				}
			})	
			.then(data => {
				
				eventSource = new EventSource("/user/chat/generate?conversation_id=" + active_id);				
				const response = document.getElementById(code);
				const chatbubble = document.getElementById('chat-bubble-' + code);
				let msg = '';
                let i = 0;

				eventSource.onopen = function(e) {
					response.innerHTML = '';					
				};

				eventSource.onmessage = function (e) {

					if (e.data == "[DONE]") {
						if( $('#isAudioSearch').val() == '1'){
							fetch("/user/chat/audio-convert", { 
								headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
								method: 'post',
								 body: formData
							 })
                            .then(function(response){
								return response.text();
							})
							.then(function(result){
								const parsedResult = JSON.parse(result);
								convertTextToSpeech(parsedResult.data, parsedResult.voice_code);
							})
                        }
						fetch("/user/chat/update-words", { 
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							method: 'post',
							body: formData
							})
						.then(function(response){
							return response.text();
						})
						.then(function(result){
							const parsedResult = JSON.parse(result);
							$("#balance").text(parsedResult.balance);
							$("#available_words").text(parsedResult.available_words);
							$("#available_words_prepaid").text(parsedResult.available_words_prepaid);
						})
						msgerSendBtn.disabled = false
						eventSource.close();
						$msg_txt.html(escape_html(msg));
						$div.data('message', msg);
						hljs.highlightAll();
						uploaded_image = '';

					} else {
						let txt;
						if (uploaded_image == '') {
							txt = JSON.parse(e.data).choices[0].delta.content;
						} else {
							txt = e.data
						}

						if (txt !== undefined) {
							msg = msg + txt;

							let str = msg;
							if(str.indexOf('<') === -1){
								str = escape_html(msg)
							} else {
								str = str.replace(/[&<>"'`{}()\[\]]/g, (match) => {
									switch (match) {
										case '<':
											return '&lt;';
										case '>':
											return '&gt;';
										case '{':
											return '&#123;';
										case '}':
											return '&#125;';
										case '(':
											return '&#40;';
										case ')':
											return '&#41;';
										case '[':
											return '&#91;';
										case ']':
											return '&#93;';
										default:
											return match;
									}
								});
								str = str.replace(/(?:\r\n|\r|\n)/g, '<br>');
							}

							$msg_txt.html(str);
                            hljs.highlightAll();

							//response.innerHTML += txt.replace(/(?:\r\n|\r|\n)/g, '<br>');
						}
						msgerChat.scrollTop += 100;
					}
				};
				eventSource.onerror = function (e) {
					msgerSendBtn.disabled = false
					console.log(e);
					eventSource.close();
				};
				
			})
			.catch(function (error) {
				console.log(error);
				msgerSendBtn.disabled = false
			});

	}

	function clearConversation() {
		document.getElementById("dynamic-inputs").innerHTML = "";

		fetch('/user/chat/clear', {
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST', 
			})		
			.then(response => response.json())
			.then(function(result){

				if (result.status == 'success') {
					toastr.success('<?php echo e(__('Chat conversation has been cleared successfully')); ?>');
				}

			})	
			.catch(function (error) {
				console.log(error);
				msgerSendBtn.disabled = false
			});
	}

	function clearConversationInvalid() {
		document.getElementById("dynamic-inputs").innerHTML = "";

		fetch('/user/chat/clear', {
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST', 
			})		
			.then(response => response.json())
			.then(function(result){})	
			.catch(function (error) {
				console.log(error);
				msgerSendBtn.disabled = false
			});
	}

	// Counter for words
	function animateValue(id, start, end, duration) {
		if (start === end) return;
		var range = end - start;
		var current = start;
		var increment = end > start? 1 : -1;
		var stepTime = Math.abs(Math.floor(duration / range));
		var obj = document.getElementById(id);
		var timer = setInterval(function() {
			current += increment;
			if (current > 0) {
				obj.innerHTML = current;
			} else {
				obj.innerHTML = 0;
			}
			
			if (current == end) {
				clearInterval(timer);
			}
		}, stepTime);
	}

	// Display chat messages (bot and user)
	function appendMessage(img, side, text, code, url) {
		let msgHTML;
		text = escape_html(text);

		if (side == 'left' && text == '') {
			msgHTML = `
			<div class="msg ${side}-msg">
			<div class="message-img" style="background-image: url(${img})"></div>
			<div class="message-bubble" id="chat-bubble-${code}" data-message="${text}">
				<div class="msg-text" id="${code}"><img src='<?php echo e(URL::asset("/img/svgs/chat.svg")); ?>'></div>
				<a href="#" class="copy"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 96 960 960" fill="currentColor" width="20"> <path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"></path> </svg></a>
				<a href="#" class="listen"><svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" width="20" viewBox="0 0 1024 1024"><path d="M512 748.885035a224.90824 224.90824 0 0 1-224.652735-224.652735v-299.579565C287.347265 100.796706 388.207847 0 512 0s224.652735 100.796706 224.652735 224.652735v299.515689A224.844364 224.844364 0 0 1 512 748.885035zM512 49.95122a174.893145 174.893145 0 0 0-174.701516 174.701515v299.515689A175.020897 175.020897 0 0 0 512 698.933816a175.020897 175.020897 0 0 0 174.765392-174.765392V224.652735A174.893145 174.893145 0 0 0 512 49.95122z" /><path d="M512 873.763084c-206.448007 0-374.442518-169.463664-374.442518-377.764082V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c0 180.769759 145.57395 327.748986 324.491298 327.748986s324.555174-147.043104 324.555174-327.748986V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c-0.063876 208.236542-167.994511 377.764082-374.506394 377.764082zM736.716612 1023.425114H287.347265a24.911734 24.911734 0 0 1 0-50.015096h449.30547a25.039486 25.039486 0 0 1 0.063877 50.015096z"/><path d="M512 1023.425114a24.911734 24.911734 0 0 1-24.97561-24.97561v-124.750296a24.97561 24.97561 0 1 1 49.95122 0v124.750296a24.847857 24.847857 0 0 1-24.97561 24.97561z" /></svg></a>	
			</div>
			</div>`;
		} else {
			if (side == 'left') {
				msgHTML = `
				<div class="msg ${side}-msg">
				<div class="message-img" style="background-image: url(${img})"></div>
				<div class="message-bubble" id="chat-bubble-${code}" data-message="${text}">
					<div class="msg-text" id="${code}">${text}</div>
					<a href="#" class="copy"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 96 960 960" fill="currentColor" width="20"> <path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"></path> </svg></a>
					<a href="#" class="listen"><svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" width="20" viewBox="0 0 1024 1024"><path d="M512 748.885035a224.90824 224.90824 0 0 1-224.652735-224.652735v-299.579565C287.347265 100.796706 388.207847 0 512 0s224.652735 100.796706 224.652735 224.652735v299.515689A224.844364 224.844364 0 0 1 512 748.885035zM512 49.95122a174.893145 174.893145 0 0 0-174.701516 174.701515v299.515689A175.020897 175.020897 0 0 0 512 698.933816a175.020897 175.020897 0 0 0 174.765392-174.765392V224.652735A174.893145 174.893145 0 0 0 512 49.95122z" /><path d="M512 873.763084c-206.448007 0-374.442518-169.463664-374.442518-377.764082V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c0 180.769759 145.57395 327.748986 324.491298 327.748986s324.555174-147.043104 324.555174-327.748986V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c-0.063876 208.236542-167.994511 377.764082-374.506394 377.764082zM736.716612 1023.425114H287.347265a24.911734 24.911734 0 0 1 0-50.015096h449.30547a25.039486 25.039486 0 0 1 0.063877 50.015096z"/><path d="M512 1023.425114a24.911734 24.911734 0 0 1-24.97561-24.97561v-124.750296a24.97561 24.97561 0 1 1 49.95122 0v124.750296a24.847857 24.847857 0 0 1-24.97561 24.97561z" /></svg></a>	
				</div>
				</div>`;
			} else {
				if (url == '' || url == null) {
					msgHTML = `
					<div class="msg ${side}-msg">
					<div class="message-img" style="background-image: url(${img})"></div>
					<div class="message-bubble" id="chat-bubble-${code}">
						<div class="msg-text" id="${code}">${text}</div>
					</div>
					</div>`;
				} else {
					msgHTML = `
					<div class="msg ${side}-msg">
					<div class="message-img" style="background-image: url(${img})"></div>
					<div class="message-bubble" id="chat-bubble-${code}">
						<div class="msg-text" id="${code}">${text}</div>
						<div class="msg-image mt-2 text-center"><img src="${url}" style="height:200px; border-radius:10px;"></div>						
					</div>
					
					</div>`;
				}
			}
			
		}

		dynamicList.insertAdjacentHTML("beforeend", msgHTML);
		msgerChat.scrollTop += 500;
	}

	function appendMessageSpecial(img, side, text, code, code) {
		let msgHTML;
		let copy_text = text;
		text = escape_html(text);

		msgHTML = `
		<div class="msg ${side}-msg">
		<div class="message-img" style="background-image: url(${img})"></div>
		<div class="message-bubble" id="chat-bubble-${code}" data-message="${copy_text}">
			<div class="msg-text" id="${code}">${text}</div>
			<a href="#" class="copy"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 96 960 960" fill="currentColor" width="20"> <path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"></path> </svg></a>
			<a href="#" class="listen"><svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" width="20" viewBox="0 0 1024 1024"><path d="M512 748.885035a224.90824 224.90824 0 0 1-224.652735-224.652735v-299.579565C287.347265 100.796706 388.207847 0 512 0s224.652735 100.796706 224.652735 224.652735v299.515689A224.844364 224.844364 0 0 1 512 748.885035zM512 49.95122a174.893145 174.893145 0 0 0-174.701516 174.701515v299.515689A175.020897 175.020897 0 0 0 512 698.933816a175.020897 175.020897 0 0 0 174.765392-174.765392V224.652735A174.893145 174.893145 0 0 0 512 49.95122z" /><path d="M512 873.763084c-206.448007 0-374.442518-169.463664-374.442518-377.764082V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c0 180.769759 145.57395 327.748986 324.491298 327.748986s324.555174-147.043104 324.555174-327.748986V324.491298a24.911734 24.911734 0 1 1 49.95122 0v171.507704c-0.063876 208.236542-167.994511 377.764082-374.506394 377.764082zM736.716612 1023.425114H287.347265a24.911734 24.911734 0 0 1 0-50.015096h449.30547a25.039486 25.039486 0 0 1 0.063877 50.015096z"/><path d="M512 1023.425114a24.911734 24.911734 0 0 1-24.97561-24.97561v-124.750296a24.97561 24.97561 0 1 1 49.95122 0v124.750296a24.847857 24.847857 0 0 1-24.97561 24.97561z" /></svg></a>	
		</div>
		</div>`;
			
		dynamicList.insertAdjacentHTML("beforeend", msgHTML);
		msgerChat.scrollTop += 500;
	}

	function get(selector, root = document) {
		return root.querySelector(selector);
	}

	// Generate a random value
	function makeid(length) {
		let result = '';
		const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		const charactersLength = characters.length;
		let counter = 0;
		while (counter < length) {
			result += characters.charAt(Math.floor(Math.random() * charactersLength));
			counter += 1;
		}
		return result;
	}

	function nl2br (str, is_xhtml) {
     	var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
     	return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
  	} 

	$('#upload-button').click(function() {
        $('#image-input').click();
    });

	$('#upload-button-mobile').click(function() {
        $('#image-input').click();
    });

	$("#expand").on('click', function (e) {
        $('.chat-sidebar-container').toggleClass('extend');
    });

	// Process image upload
	const image_input = document.getElementById("image-input");

	const convertBase64 = (file) => {
		return new Promise((resolve, reject) => {
			const fileReader = new FileReader();
			fileReader.readAsDataURL(file);

			fileReader.onload = () => {
				//resolve(fileReader.result);
				var img = new Image();
				img.src = fileReader.result;
				img.onload = function() {
					var canvas = document.createElement('canvas');
					var ctx = canvas.getContext('2d');
					canvas.height = img.height * 500 / img.width;
					canvas.width = 500;
					ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
					var base64 = canvas.toDataURL('image/png');
					uploaded_image = base64;
				}
			};

			fileReader.onerror = (error) => {
				reject(error);
			};
		});
	};

	const uploadImage = async (event) => {
		const file = event.target.files[0];
		const base64 = await convertBase64(file);
	};

	if (image_input) {
		image_input.addEventListener("change", (e) => {
			uploadImage(e);
		});
	}
	
	// Search chat history
	$('#chat-search').on('keyup', function () {
        var search = $(this).val().toLowerCase();
        $('.chat-sidebar-messages').find('.chat-sidebar-message').each(function () {
            if ($(this).filter(function() {
                return $(this).find('h6').text().toLowerCase().indexOf(search) > -1;
            }).length > 0 || search.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });


	// Send via keyboard shortcuts
	$('#message').on('keypress', function (e) {
		if (e.keyCode == 13 && !e.shiftKey) {
			e.preventDefault();
			const message = input_text.value;
			if (!message) {
				toastr.warning('<?php echo e(__('Type your message first before sending')); ?>');
				return;
			}			

			appendMessage(user_avatar, "right", message, '', uploaded_image);
			input_text.value = "";
			process(message)
		}
    });


	// Capture input text via microphone
    if(mic) {
        if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
            const speechRecognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

            speechRecognition.continuous = true;

            speechRecognition.addEventListener('start', () => {
                $("#mic-button").find('i').removeClass('fa-microphone').addClass('fa-stop-circle');
            });

            speechRecognition.addEventListener('result', (event) => {
                const transcript = event.results[0][0].transcript;
                $("#message").val($("#message").val() + transcript + ' ');

                mic.click();
            });

            speechRecognition.addEventListener('end', () => {
                $("#mic-button").find('i').addClass('fa-microphone').removeClass('fa-stop-circle');
                isTranscribing = false;
            });

            mic.addEventListener('click', () => {
                if (!isTranscribing) {
                    speechRecognition.start();
                    isTranscribing = true;
                } else {
                    speechRecognition.stop();
                    isTranscribing = false;
                }
            });
        } else {
            console.log('Web Speech Recognition API not supported by this browser');
            $("#mic-button").hide()
        }
    }


	// Stop chat response
	$('#stop-button').on('click', function(e){
        e.preventDefault();

        if(eventSource){
            eventSource.close();
			msgerSendBtn.disabled = false
        }
    });


	// Apply prompt
	function applyPrompt(prompt) {
		$('#message').text(prompt);
	}


	// Search prompt
	$(document).on('keyup', '#search-template', function () {
		var searchTerm = $(this).val().toLowerCase();
		$('#templates-panel').find('> div').each(function () {
			if ($(this).filter(function() {
				return (($(this).find('h6').text().toLowerCase().indexOf(searchTerm) > -1) || ($(this).find('p').text().toLowerCase().indexOf(searchTerm) > -1));
			}).length > 0 || searchTerm.length < 1) {
				$(this).show();
			} else {
				$(this).hide();
			}
		});
	});


	function escape_html (str) {
        let converter = new showdown.Converter({openLinksInNewWindow: true});
        converter.setFlavor('github');
        str = converter.makeHtml(str);

        /* add copy button */
        str = str.replaceAll('</code></pre>', '</code><button type="button" class="copy-code" onclick="copyCode(this)"><span class="label-copy-code"><?php echo e(__('Copy')); ?></span></button></pre>');

        return str;
    }

	function copyCode(button) {
		const pre = button.parentElement;
		const code = pre.querySelector('code');
		const range = document.createRange();
		range.selectNode(code);
		window.getSelection().removeAllRanges();
		window.getSelection().addRange(range);
		document.execCommand("copy");
		window.getSelection().removeAllRanges();
		toastr.success('<?php echo e(__('Code has been copied successfully')); ?>');
	}

	$(document).on('click', ".copy", function (e) {

		e.preventDefault();

		var textArea = document.createElement("textarea");
		textArea.value = $(this).parents('.message-bubble').data('message');
		textArea.style.top = "0";
		textArea.style.left = "0";
		textArea.style.position = "fixed";
		document.body.appendChild(textArea);
		textArea.focus();
		textArea.select();

		try {
			document.execCommand('copy');
		} catch (err) {
		}

		document.body.removeChild(textArea);
		toastr.success('<?php echo e(__('Response has been copied successfully')); ?>');
	});

	var sound = document.createElement('audio');
	sound.id="msg-player";
 	sound.setAttribute('autoplay','false');
 	sound.setAttribute('src','');
	document.body.appendChild(sound);

	$(document).on('click', ".listen", function (e) {

		e.preventDefault();

		let text = $(this).parents('.message-bubble').data('message');		

		var formData = new FormData();
		formData.append("text", text);
		$.ajax({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			method: 'post',
			url: '/user/chat/listen',
			data: formData,
			processData: false,
			contentType: false,
			success: function (data) {
				if (data['status'] == 'success') {
 					sound.setAttribute("src", data['url']);
 					$('#msg-player')[0].play();

				} else if (data['status'] == 'error') {
					toastr.error(data['message']);
				} else {
					toastr.error('<?php echo e(__('Audio player is not available, please try again or contact support')); ?>');
				}      
			},
			error: function(data) {
				toastr.error('<?php echo e(__('Audio player is not available, please try again or contact support')); ?>');
			}
		})


	});

	const recordButton = document.getElementById('record-button');
	const statusElement = document.getElementById('status');
	let mediaRecorder;
	let audioChunks = [];
	recordButton.addEventListener('click', toggleRecording);
	function toggleRecording() {
		if (mediaRecorder && mediaRecorder.state === 'recording') {
			stopRecording();
		} else {
			$('#isAudioSearch').val(1);
			startRecording();
		}
	}
	function startRecording() {
	navigator.mediaDevices.getUserMedia({ audio: true })
		.then(function (stream) {
		mediaRecorder = new MediaRecorder(stream);
		mediaRecorder.addEventListener('dataavailable', function (event) {
			audioChunks.push(event.data);
		});
		mediaRecorder.addEventListener('stop', function () {
			const audioBlob = new Blob(audioChunks);
			const formData = new FormData();
			formData.append('audio', audioBlob, 'recorded_audio.wav');
			fetch('/user/chat/save-audio', {
				headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST',
				body: formData
			})
			.then(response => response.json())
			.then(data => {
				if (data.response) {
				$('#message').val(data.response.text);
				$('#chat-button').click();
				} else {
				console.log('Error saving audio');
				}
			})
			.catch(error => {
				console.error('Error:', error);
			});
			audioChunks = [];
		});
		mediaRecorder.start();
		recordButton.innerHTML = '<i class="fa-solid fa-stop active"></i>';
		})
		.catch(function (error) {
		console.error('Error:', error);
		});
	}
	function stopRecording() {
		if (mediaRecorder) {
			mediaRecorder.stop();
			recordButton.innerHTML = '<i class="fa-regular fa-microphone"></i>';
		}
	}
		
	function convertTextToSpeech(text, code){
		$.get('<?php echo e(route("convert-text-to-audio")); ?>', { text: text, voiceCode: code })
		.done(function (voices) {
			console.log(voices);
			$('#audioPlayer').css('visibility','inherit');  
			const audioUrl = domainUrl + voices.result_url;
			const audioPlayer = document.getElementById('audioPlayer');
			audioPlayer.src = audioUrl;
			audioPlayer.play();
            $('#isAudioSearch').val(0);
		})
		.fail(function (error) {
			console.error('Error fetching voices:', error);
		});
	}

    $('.s-dropdown-menu li').on('click', function () {
           var selectedTemplateText = $(this).text();
           $('#message').val(selectedTemplateText);
           $('#message').text(selectedTemplateText);

    });  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/chat/view.blade.php ENDPATH**/ ?>