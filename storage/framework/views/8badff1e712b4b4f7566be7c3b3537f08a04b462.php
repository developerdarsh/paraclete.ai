<?php $__env->startSection('css'); ?>
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
	<style>
	.audio_search a{
		padding:0px 5px;
		
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
				<span class="fs-11 text-muted pl-3"><i class="fa-sharp fa-solid fa-bolt-lightning mr-2 text-primary"></i><?php echo e(__('Your Balance is')); ?> <span class="font-weight-semibold" id="balance-number"><?php echo e(number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid)); ?></span> <?php echo e(__('Words')); ?></span>
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
					<div class="chat-sidebar-messages">
						<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="chat-sidebar-message <?php if($loop->first): ?> selected-message <?php endif; ?>" id="<?php echo e($message->message_code); ?>">
								<div class="chat-title" id="title-<?php echo e($message->message_code); ?>">
									<?php echo e(__($message->title)); ?>

								</div>
								<div class="chat-info">
									<div class="chat-count"><span><?php echo e($message->messages); ?></span> <?php echo e(__('messages')); ?></div>
									<div class="chat-date"><?php echo e(\Carbon\Carbon::parse($message->updated_at)->diffForhumans()); ?></div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit fs-12" id="<?php echo e($message->message_code); ?>"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
									<a href="#" class="chat-delete fs-12 ml-2" id="<?php echo e($message->message_code); ?>"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
								</div>
							</div>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
					</div>
					<div class="card-footer">
						<div class="row text-center">						
							<div class="col-sm-12">									
								<a class="btn btn-primary pl-5 pr-5 mt-1" id="new-chat-button"><?php echo e(__('New Chat')); ?></a>
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
								
								<div id="chat-container"></div>
							</div>
						</div>
					</div>
					<div class="card-footer mb-8">
						<div class="row">						
							<div class="col-sm-12">	
                                <div class='d-flex justify-content-between'>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="web_access_button">
									<label class="form-check-label" for="web-access-button">Web access</label>
                                </div>
								<div class="form-check form-switch d-flex">
									
                                    <div class="audio_search">
									<input type="hidden" id="isAudioSearch" value="0">
									<audio id="audioPlayer" style="visibility:hidden;" controls></audio>
									<p id="status"></p>
                                    </div>
                                    
                                </div>
                                </div>
                               <div class="input-box chats-input-b mb-0">								
									<div class="form-group file-browser">							    
										<input type="message" class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="message" name="message" placeholder="<?php echo e(__('Enter your question here...')); ?>">
										<div class="microphone-voice"> <a id="record-button"><i class="fa-regular fa-microphone"></i></a>
										</div>
										<label class="input-group-btn">
											<button class="btn btn-primary special-btn" id="chat-button">
												<?php echo e(__('Send')); ?>

											</button>
										</label>
										
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/pdf/html2canvas.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/pdf/jspdf.umd.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/export-chat.js')); ?>"></script>
<script type="text/javascript">
	const main_form = get("#openai-form");
	const input_text = get("#message");
	const msgerChat = get("#chat-container");
	const msgerSendBtn = get("#chat-button");
	const bot_avatar = "<?php echo e($chat->logo); ?>";
	const user_avatar = "<?php echo e(URL::asset(auth()->user()->profile_photo_path)); ?>";	
	let chat_code = "<?php echo e($chat->chat_code); ?>";	
	let active_id;
	let default_message;

	// Process deault chat message	
	$(document).ready(function() {
		$('#audio-player').hide();
		$(".chat-sidebar-message").first().focus().trigger('click');
        let check_messages = document.querySelectorAll('.chat-sidebar-message').length;
		if (check_messages == 0) {
			let id = makeid(10);
			$('#chat-container').html('');
			
			$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
					<div class="chat-title" id="title-${id}">
						<?php echo e(__('New Chat')); ?>

					</div>
					<div class="chat-info">
						<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
						<div class="chat-date"><?php echo e(__('Now')); ?></div>
					</div>
					<div class="chat-actions d-flex">
						<a href="#" class="chat-edit id=${id} fs-12"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
						<a href="#" class="chat-delete  id=${id} fs-12 ml-2"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
					</div>
				</div>`);
			active_id = id;
		}
	});
	

	// Change message box styles
	$(document).on('click', ".chat-sidebar-message", function (e) { 

		$('.chat-sidebar-message').removeClass('selected-message');
		$(this).addClass('selected-message');
		active_id = this.id;

		$('.chat-sidebar-container').removeClass('extend');

		$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'POST',
				url: '/user/chat/messages',
				data: { 'code': active_id,},
				success: function (data) {
					$('#chat-container').html('');

					let messages = document.querySelectorAll('.chat-sidebar-message').length;
					if (messages >= 1) {
						let json = isJson(data)
						if (json) {
							let result = JSON.parse(data);
							if (result['chat']) {
								let chat = result['chat'];

								for(const key in chat) {
									if (chat[key]['role'] == 'user') {
										appendMessage(user_avatar, "right", chat[key]['content']);
									} else if (chat[key]['role'] == 'assistant') {
										appendMessage(bot_avatar, "left", chat[key]['content']);
									}
								}
							}
						}
					} else {
						let id = makeid(10);
						$('#chat-container').html('');

						$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
								<div class="chat-title" id="title-${id}">
									<?php echo e(__('New Chat')); ?>

								</div>
								<div class="chat-info">
									<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
									<div class="chat-date"><?php echo e(__('Now')); ?></div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit id=${id} fs-12"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
									<a href="#" class="chat-delete  id=${id} fs-12 ml-2"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
								</div>
							</div>`);
						active_id = id;
					}
								
				},
				error: function(data) {
					toastr.warning('<?php echo e(__('There was an issue while retrieving chat history')); ?>');
				}
			});
	});
    function loadChat(active_id)
    {
        $.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'POST',
				url: '/user/chat/messages',
				data: { 'code': active_id,},
				success: function (data) {
					$('#chat-container').html('');

					let messages = document.querySelectorAll('.chat-sidebar-message').length;
					if (messages >= 1) {
						let json = isJson(data)
						if (json) {
							let result = JSON.parse(data);
							if (result['chat']) {
								let chat = result['chat'];

								for(const key in chat) {
									if (chat[key]['role'] == 'user') {
										appendMessage(user_avatar, "right", chat[key]['content']);
									} else if (chat[key]['role'] == 'assistant') {
										appendMessage(bot_avatar, "left", chat[key]['content']);
									}
								}
							}
						}
					} else {
						let id = makeid(10);
						$('#chat-container').html('');

						$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
								<div class="chat-title" id="title-${id}">
									<?php echo e(__('New Chat')); ?>

								</div>
								<div class="chat-info">
									<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
									<div class="chat-date"><?php echo e(__('Now')); ?></div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit id=${id} fs-12"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
									<a href="#" class="chat-delete  id=${id} fs-12 ml-2"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
								</div>
							</div>`);
						active_id = id;
					}
								
				},
				error: function(data) {
					toastr.warning('<?php echo e(__('There was an issue while retrieving chat history')); ?>');
				}
			});
    }
	// Create new chat message box
	$("#new-chat-button").on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
		let id = makeid(10);
		var element = document.getElementById(active_id);
		if (element) {
			element.classList.remove("selected-message");
		}
  		
		$('#chat-container').html('');

        $('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
				<div class="chat-title" id="title-${id}">
					<?php echo e(__('New Chat')); ?>

				</div>
				<div class="chat-info">
					<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
					<div class="chat-date"><?php echo e(__('Now')); ?></div>
				</div>
				<div class="chat-actions d-flex">
					<a href="#" class="chat-edit id=${id} fs-12"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
					<a href="#" class="chat-delete id=${id} fs-12 ml-2"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
				</div>
			</div>`);
		active_id = id;
    });

	$(function () {
		
		main_form.addEventListener("submit", event => {
			var webAccessBtn = $("#web_access_button").prop('checked') ? 1 : 0;
			var audioSearchBtn = $("#isAudioSearch").val();
            event.preventDefault();
			const message = input_text.value;
			if (!message) return;

			appendMessage(user_avatar, "right", message);
			input_text.value = "";
			$('#audioPlayer').css('visibility','hidden');
			process(message , webAccessBtn, audioSearchBtn)
		});

	});


	// Send chat message
	function process(message,webAccessBtn, audioSearchBtn) {
		msgerSendBtn.disabled = true
		let formData = new FormData();
		formData.append('message', message);
		formData.append('webAccessBtn', webAccessBtn);
		formData.append('chat_code', chat_code);
		formData.append('message_code', active_id);
		formData.append('audioSearchBtn', audioSearchBtn);
		
		let code = makeid(10);
		
		appendMessage(bot_avatar, "left", "", code);
		
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
				}

					 
			})	
			.then(data => {
				const eventSource = new EventSource("/user/chat/generate?message="+message, {withCredentials: true});				
				const response = document.getElementById(code);
				const chatbubble = document.getElementById('chat-bubble-' + code);
			 
 				eventSource.onopen = function(e) {			 
					response.innerHTML = '';
				};
				eventSource.onmessage = function (e) {
					if (e.data == "[DONE]") {
                        msgerSendBtn.disabled = false
						eventSource.close();
				        loadChat(active_id);
						if( $('#isAudioSearch').val() == '1'){
							$('#preloader').show();
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
								ConvertaudioPlayer(parsedResult.data, parsedResult.voice_code);
							})
                        }
					} else {
						let txt = JSON.parse(e.data).choices[0].delta.content
						if (txt !== undefined) {
							response.innerHTML += txt.replace(/(?:\r\n|\r|\n)/g, '<br>');
						}
						msgerChat.scrollTop += 100;
					}
				};
				eventSource.onerror = function (e) {
					msgerSendBtn.disabled = false
					eventSource.close();
				};
				
			})
			.catch(function (error) {
				msgerSendBtn.disabled = false
			});

	}

	function clearConversation() {
		document.getElementById("chat-container").innerHTML = "";

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
				msgerSendBtn.disabled = false
			});
	}

	// RENAME TITLE
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
				formData.append("code", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/rename',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data['status'] == 'success') {
							Swal.fire('<?php echo e(__('Title Updated')); ?>', '<?php echo e(__('Chat title has been updated successfully')); ?>', 'success');
							document.getElementById("title-"+data['code']).innerHTML =  result.value;
						} else {
							Swal.fire('<?php echo e(__('Update Error')); ?>', '<?php echo e(__('Chat title was not updated correctly')); ?>', 'error');
						}      
					},
					error: function(data) {
						Swal.fire('Update Error', data.responseJSON['error'], 'error');
					}
				})
			} else if (result.dismiss !== Swal.DismissReason.cancel) {
				Swal.fire('<?php echo e(__('No Title Entered')); ?>', '<?php echo e(__('Make sure to provide a new chat title before updating')); ?>', 'error')
			}
		})
	});

	// DELETE PLAN
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
				formData.append("code", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/delete',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data['status'] == 'success') {
							Swal.fire('<?php echo e(__('Chat Deleted')); ?>', '<?php echo e(__('Chat history has been successfully deleted')); ?>', 'success');	
							$("#" + active_id).remove();	
							$('#chat-container').html('');	
							$(".chat-sidebar-message").first().focus().trigger('click');
							let check_messages = document.querySelectorAll('.chat-sidebar-message').length;
							if (check_messages == 0) {
								let id = makeid(10);
								$('#chat-container').html('');
								
								$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
										<div class="chat-title" id="title-${id}">
											<?php echo e(__('New Chat')); ?>

										</div>
										<div class="chat-info">
											<div class="chat-count"><span>0</span> <?php echo e(__('messages')); ?></div>
											<div class="chat-date"><?php echo e(__('Now')); ?></div>
										</div>
										<div class="chat-actions d-flex">
											<a href="#" class="chat-edit id=${id} fs-12"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="<?php echo e(__('Edit Name')); ?>"></i></a>
											<a href="#" class="chat-delete  id=${id} fs-12 ml-2"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="<?php echo e(__('Delete Chat')); ?>"></i></a>
										</div>
									</div>`);
								active_id = id;
							}						
						} else if (data['status'] == 'empty') { 
							$('#chat-container').html('');	
								
						}else {
							Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this chat history')); ?>', 'error');
						}      
					},
					error: function(data) {
						Swal.fire('Oops...','Something went wrong!', 'error')
					}
				})
			} 
		})
	});

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
	function appendMessage(img, side, text, code) {
		let msgHTML;
		text = nl2br(text);

		if (side == 'left' && text == '') {
			msgHTML = `
			<div class="msg ${side}-msg">
			<div class="message-img" style="background-image: url(${img})"></div>
			<div class="message-bubble" id="chat-bubble-${code}">
				<div class="msg-text" id="${code}"><img src='<?php echo e(URL::asset("/img/svgs/chat.svg")); ?>'></div>
			</div>
			</div>`;
		} else {
			msgHTML = `
			<div class="msg ${side}-msg">
			<div class="message-img" style="background-image: url(${img})"></div>
			<div class="message-bubble" id="chat-bubble-${code}">
		

				<div class="msg-text" id="${code}">${text}</div>
			</div>
			</div>`;
		}

		msgerChat.insertAdjacentHTML("beforeend", msgHTML);
		msgerChat.scrollTop += 500;
	}

	function get(selector, root = document) {
		return root.querySelector(selector);
	}

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

	$("#expand").on('click', function (e) {
        $('.chat-sidebar-container').toggleClass('extend');
    });

	function isJson(str) {
		try {
			JSON.parse(str);
		} catch (e) {
			return false;
		}
		return true;
	}

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

function ConvertaudioPlayer(text,code){
	const url = (code === 0) ? "https://api.elevenlabs.io/v1/text-to-speech/21m00Tcm4TlvDq8ikWAM/stream" : "https://api.elevenlabs.io/v1/text-to-speech/TxGEqnHWrfWFTfGW9XjX/stream";
	fetch(url, {
		method: 'POST',
		headers: {
			'Accept': '*/*',
			'Xi-Api-Key': 'd2babf9c40d755b3190831cb00b3950c',
			'Content-Type': 'application/json'
		},
		body: JSON.stringify({
			text: text,
			model_id: 'eleven_monolingual_v1',
			voice_settings: {
			stability: 0,
			similarity_boost: 0,
			style: 1,
			use_speaker_boost: true
			}
		})
	})
  	.then(response => response.blob())
  	.then(blob => {
		$('#preloader').hide(); 
		$('#audioPlayer').css('visibility','inherit');  
		const audioUrl = URL.createObjectURL(blob);
		const audioPlayer = document.getElementById('audioPlayer');
		audioPlayer.src = audioUrl;
		audioPlayer.play();
  	})
  	.catch(error => {
    	console.error('Error:', error);
  	});
}
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/user/chat/view.blade.php ENDPATH**/ ?>