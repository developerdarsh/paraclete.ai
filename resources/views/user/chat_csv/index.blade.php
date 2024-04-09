@extends('layouts.app')
@section('css')
	<!-- Sweet Alert CSS -->
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/highlight/highlight.dark.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
	<form id="openai-form" action="" method="GET" enctype="multipart/form-data" class="mt-24">		
		@csrf
		<div class="row justify-content-md-center">	
			<div class="col-sm-12 text-center">
				<h3 class="card-title fs-20 mb-3 super-strong">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="mr-2" xmlns:xlink="http://www.w3.org/1999/xlink" 
					viewBox="0 0 303.188 303.188" width="30px" height="30px" xml:space="preserve">
					<g>
						<polygon style="fill:#E4E4E4;" points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 	"/>
						<polygon style="fill:#007934;" points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 	"/>
						<g>
							<g>
								<path style="fill:#A4A9AD;" d="M114.872,227.984c-2.982,0-5.311,1.223-6.982,3.666c-1.671,2.444-2.507,5.814-2.507,10.109
									c0,8.929,3.396,13.393,10.188,13.393c2.052,0,4.041-0.285,5.967-0.856c1.925-0.571,3.86-1.259,5.808-2.063v10.601
									c-3.872,1.713-8.252,2.57-13.14,2.57c-7.004,0-12.373-2.031-16.107-6.094c-3.734-4.062-5.602-9.934-5.602-17.615
									c0-4.803,0.904-9.023,2.714-12.663c1.809-3.64,4.411-6.438,7.808-8.395c3.396-1.957,7.39-2.937,11.98-2.937
									c5.016,0,9.808,1.09,14.378,3.27l-3.841,9.871c-1.713-0.805-3.428-1.481-5.141-2.031
									C118.681,228.26,116.841,227.984,114.872,227.984z"/>
								<path style="fill:#A4A9AD;" d="M166.732,250.678c0,2.878-0.729,5.433-2.191,7.665c-1.459,2.232-3.565,3.967-6.315,5.205
									c-2.751,1.237-5.977,1.856-9.681,1.856c-3.089,0-5.681-0.217-7.775-0.65c-2.095-0.434-4.274-1.191-6.538-2.27v-11.172
									c2.391,1.227,4.877,2.186,7.458,2.872c2.582,0.689,4.951,1.032,7.109,1.032c1.862,0,3.227-0.322,4.095-0.969
									c0.867-0.645,1.302-1.476,1.302-2.491c0-0.635-0.175-1.19-0.524-1.666c-0.349-0.477-0.91-0.958-1.682-1.444
									c-0.772-0.486-2.83-1.48-6.173-2.983c-3.026-1.375-5.296-2.708-6.809-3.999s-2.634-2.771-3.364-4.443s-1.095-3.65-1.095-5.936
									c0-4.273,1.555-7.605,4.666-9.997c3.109-2.391,7.384-3.587,12.822-3.587c4.803,0,9.7,1.111,14.694,3.333l-3.841,9.681
									c-4.337-1.989-8.082-2.984-11.234-2.984c-1.63,0-2.814,0.286-3.555,0.857s-1.111,1.28-1.111,2.127
									c0,0.91,0.471,1.725,1.412,2.443c0.941,0.72,3.496,2.031,7.665,3.936c3.999,1.799,6.776,3.729,8.331,5.792
									C165.955,244.949,166.732,247.547,166.732,250.678z"/>
								<path style="fill:#A4A9AD;" d="M199.964,218.368h14.027l-15.202,46.401H184.03l-15.139-46.401h14.092l6.316,23.519
									c1.312,5.227,2.031,8.865,2.158,10.918c0.148-1.481,0.443-3.333,0.889-5.555c0.443-2.222,0.835-3.967,1.174-5.236
									L199.964,218.368z"/>
							</g>
						</g>
						<polygon style="fill:#D1D3D3;" points="219.821,50.525 270.346,50.525 219.821,0 	"/>
						<g>
							<rect x="134.957" y="80.344" style="fill:#007934;" width="33.274" height="15.418"/>
							<rect x="175.602" y="80.344" style="fill:#007934;" width="33.273" height="15.418"/>
							<rect x="134.957" y="102.661" style="fill:#007934;" width="33.274" height="15.419"/>
							<rect x="175.602" y="102.661" style="fill:#007934;" width="33.273" height="15.419"/>
							<rect x="134.957" y="124.979" style="fill:#007934;" width="33.274" height="15.418"/>
							<rect x="175.602" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
							<rect x="94.312" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
							<rect x="134.957" y="147.298" style="fill:#007934;" width="33.274" height="15.418"/>
							<rect x="175.602" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
							<rect x="94.312" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
							<g>
								<path style="fill:#007934;" d="M127.088,116.162h-10.04l-6.262-10.041l-6.196,10.041h-9.821l10.656-16.435L95.406,84.04h9.624
									l5.8,9.932l5.581-9.932h9.909l-10.173,16.369L127.088,116.162z"/>
							</g>
						</g>
					</g>
				</svg>
				  {{ __('AI Chat CSV') }}
				</h3>
				<h6 class="mb-0 fs-12 text-muted">{{ __('Unleash the Power of your CSV documents with the help of AI') }}</h6>
				<div class="mb-4" id="balance-status">
					<span class="fs-11 text-muted pl-3"><i class="fa-sharp fa-solid fa-bolt-lightning mr-2 text-primary"></i>{{ __('Your Balance is') }} <span class="font-weight-semibold" id="balance-number">@if (auth()->user()->available_words == -1) {{ __('Unlimited') }} @else {{ number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid) }}@endif</span> {{ __('Words') }}</span>
				</div>	
			</div>

			<div class="chat-main-container">
				<div class="chat-sidebar-container">
					<div class="chat-sidebar-search">	
						<div class="input-box relative">				
							<input id="chat-search" class="form-control" type="text" placeholder="{{ __('Search') }}">	
							<i class="fa-solid fa-magnifying-glass fs-14 text-muted chat-search-icon"></i>	
						</div>			
					</div>
					<div class="chat-sidebar-messages">				
						@foreach ($chats as $chat)						
							@if ($loop->first) <input type="hidden" name="_chat_id" value="{{$chat->id}}" />@endif
							<div class="chat-sidebar-message @if ($loop->first) selected-message @endif" id="{{ $chat->id }}">
								<h6 class="chat-title mb-2 chat-small" id="title-{{ $chat->id }}">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  class="mr-1" xmlns:xlink="http://www.w3.org/1999/xlink" 
										viewBox="0 0 303.188 303.188" width="20px" height="20px" xml:space="preserve">
										<g>
											<polygon style="fill:#E4E4E4;" points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 	"/>
											<polygon style="fill:#007934;" points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 	"/>
											<g>
												<g>
													<path style="fill:#A4A9AD;" d="M114.872,227.984c-2.982,0-5.311,1.223-6.982,3.666c-1.671,2.444-2.507,5.814-2.507,10.109
														c0,8.929,3.396,13.393,10.188,13.393c2.052,0,4.041-0.285,5.967-0.856c1.925-0.571,3.86-1.259,5.808-2.063v10.601
														c-3.872,1.713-8.252,2.57-13.14,2.57c-7.004,0-12.373-2.031-16.107-6.094c-3.734-4.062-5.602-9.934-5.602-17.615
														c0-4.803,0.904-9.023,2.714-12.663c1.809-3.64,4.411-6.438,7.808-8.395c3.396-1.957,7.39-2.937,11.98-2.937
														c5.016,0,9.808,1.09,14.378,3.27l-3.841,9.871c-1.713-0.805-3.428-1.481-5.141-2.031
														C118.681,228.26,116.841,227.984,114.872,227.984z"/>
													<path style="fill:#A4A9AD;" d="M166.732,250.678c0,2.878-0.729,5.433-2.191,7.665c-1.459,2.232-3.565,3.967-6.315,5.205
														c-2.751,1.237-5.977,1.856-9.681,1.856c-3.089,0-5.681-0.217-7.775-0.65c-2.095-0.434-4.274-1.191-6.538-2.27v-11.172
														c2.391,1.227,4.877,2.186,7.458,2.872c2.582,0.689,4.951,1.032,7.109,1.032c1.862,0,3.227-0.322,4.095-0.969
														c0.867-0.645,1.302-1.476,1.302-2.491c0-0.635-0.175-1.19-0.524-1.666c-0.349-0.477-0.91-0.958-1.682-1.444
														c-0.772-0.486-2.83-1.48-6.173-2.983c-3.026-1.375-5.296-2.708-6.809-3.999s-2.634-2.771-3.364-4.443s-1.095-3.65-1.095-5.936
														c0-4.273,1.555-7.605,4.666-9.997c3.109-2.391,7.384-3.587,12.822-3.587c4.803,0,9.7,1.111,14.694,3.333l-3.841,9.681
														c-4.337-1.989-8.082-2.984-11.234-2.984c-1.63,0-2.814,0.286-3.555,0.857s-1.111,1.28-1.111,2.127
														c0,0.91,0.471,1.725,1.412,2.443c0.941,0.72,3.496,2.031,7.665,3.936c3.999,1.799,6.776,3.729,8.331,5.792
														C165.955,244.949,166.732,247.547,166.732,250.678z"/>
													<path style="fill:#A4A9AD;" d="M199.964,218.368h14.027l-15.202,46.401H184.03l-15.139-46.401h14.092l6.316,23.519
														c1.312,5.227,2.031,8.865,2.158,10.918c0.148-1.481,0.443-3.333,0.889-5.555c0.443-2.222,0.835-3.967,1.174-5.236
														L199.964,218.368z"/>
												</g>
											</g>
											<polygon style="fill:#D1D3D3;" points="219.821,50.525 270.346,50.525 219.821,0 	"/>
											<g>
												<rect x="134.957" y="80.344" style="fill:#007934;" width="33.274" height="15.418"/>
												<rect x="175.602" y="80.344" style="fill:#007934;" width="33.273" height="15.418"/>
												<rect x="134.957" y="102.661" style="fill:#007934;" width="33.274" height="15.419"/>
												<rect x="175.602" y="102.661" style="fill:#007934;" width="33.273" height="15.419"/>
												<rect x="134.957" y="124.979" style="fill:#007934;" width="33.274" height="15.418"/>
												<rect x="175.602" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
												<rect x="94.312" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
												<rect x="134.957" y="147.298" style="fill:#007934;" width="33.274" height="15.418"/>
												<rect x="175.602" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
												<rect x="94.312" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
												<g>
													<path style="fill:#007934;" d="M127.088,116.162h-10.04l-6.262-10.041l-6.196,10.041h-9.821l10.656-16.435L95.406,84.04h9.624
														l5.8,9.932l5.581-9.932h9.909l-10.173,16.369L127.088,116.162z"/>
												</g>
											</g>
										</g>
									</svg>
									  {{ __($chat->title) }}
								</h6>
								<a class="chat-url chat-small fs-10 text-muted" href="{{ $chat->url }}" target="_blank"><i class="fa-solid fa-link fs-10 mr-2 text-muted"></i>{{ $chat->url }}</a>
								<div class="chat-info mt-2">
									<div class="chat-count fs-10"><span>{{ $chat->messages }}</span> {{ __('messages') }}</div>
									<div class="chat-date fs-10">{{ \Carbon\Carbon::parse($chat->updated_at)->diffForhumans() }}</div>
								</div>
								<div class="chat-actions d-flex">
									<a href="#" class="chat-edit fs-12" id="{{ $chat->id }}"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="{{ __('Edit Name') }}"></i></a>
									<a href="#" class="chat-delete fs-12 ml-2" id="{{ $chat->id }}"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="{{ __('Delete Chat') }}"></i></a>
								</div>
							</div>						
						@endforeach												
					</div>
					<div class="card-footer">
						<div class="row text-center">						
							<div class="col-sm-12">		
								<input type="file" class="csv-input" style="display: none;" name="csv_file" id="csv_file" accept=".csv">							
								<a class="btn btn-primary pl-6 pr-6 fs-12 mt-1" id="upload-csv-button" href="javascript:void(0);">{{ __('Upload CSV File') }}</a>
							</div>
						</div>
					</div>
				</div>

				<div class="chat-message-container" id="chat-system">
					<div class="card-header">
						<div class="w-100 pt-2 pb-2">						
							<div class="d-flex">
								<div class="overflow-hidden mr-4"><img alt="Avatar" class="chat-avatar" src="{{ URL::asset('/chats/csv.jpg') }}"></div>
								<div class="widget-user-name"><span class="font-weight-bold">{{ __('AI CSV') }}</span><br><span class="text-muted">{{ __('CSV Analyst Expert') }}</span></div>
							</div>
						</div>
						<div class="w-50 text-right pt-2 pb-2">				
							<a id="expand" class="template-button" href="#"><i class="fa-solid fa-bars table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="{{ __('Show Chat Conversations') }}"></i></a>
							<a id="export-word" class="template-button mr-2" onclick="exportWord();" href="#"><i class="fa-solid fa-file-word table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="{{ __('Export Chat Conversation as Word File') }}"></i></a>
							<a id="export-pdf" class="template-button mr-2" onclick="exportPDF();" href="#"><i class="fa-solid fa-file-pdf table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="{{ __('Export Chat Conversation as PDF File') }}"></i></a>
							<a id="export-txt" class="template-button mr-2" onclick="exportTXT();" href="#"><i class="fa-solid fa-file-lines table-action-buttons table-action-buttons-big edit-action-button" data-tippy-content="{{ __('Export Chat Conversation Text File') }}"></i></a>
						</div>
					</div>
					<div class="card-body pl-0 pr-0">
						<div class="row">						
							<div class="col-md-12 col-sm-12" >									
								<div id="chat-container">
									<div class="msg left-msg" id="intro-drop-box">
										<div class="message-img" style="background-image: url('/chats/csv.jpg')"></div>
										<div class="message-bubble">					
											<div class="msg-text">{{ __('Hey there, I can help you get any insights out of your CSV documents, what would you like to know?') }}</div>
										</div>
									</div>
									<div id="image-drop-box">
										<div class="image-drop-area text-center">
											<div class="msg left-msg text-center mt-9">
												<div class="message-img" style="background-image: url('/chats/csv.jpg')"></div>
												<div class="message-bubble">					
													<div class="msg-text">{{ __('Hey there, I can help you with analyzing any CSV documents that share with me') }}</div>
													<div class="msg-text">{{ __('Select and upload your CSV documents to get started') }}</div>
												</div>
											</div>											
										</div>
									</div>
									<div id="progress-drop-box" class="mt-9 text-center">
										<p id="progress-text" class="text-muted"></p>
									</div>									
									<div id="dynamic-inputs"></div>
									<div id="generating-status" class="text-center">
										<img src='{{ URL::asset("/img/svgs/code.svg") }}'>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">						
							<div class="col-sm-12">									
								<div class="input-box mb-0">								
									<div class="chat-controllers">	
										<textarea type="message" class="form-control @error('message') is-danger @enderror" rows="1" id="message" name="message" placeholder="{{ __('Type your message here...') }}"></textarea>
										<div class="chat-button-box"><a class="btn chat-button-icon" href="javascript:void(0)" id="prompt-button" data-bs-toggle="modal" data-bs-target="#promptModal" data-tippy-content="{{ __('Prompt Library') }}"><i class="fa-solid fa-notebook"></i></a></div>
										<div class="chat-button-box"><a class="btn chat-button-icon" href="javascript:void(0)" id="mic-button"><i class="fa-solid fa-microphone"></i></a></div>
										<div class="chat-button-box no-margin-right"><a class="btn chat-button-icon" href="javascript:void(0)" id="stop-button"><i class="fa-solid fa-circle-stop"></i></a></div>
										<div><button class="btn chat-button" id="chat-button">{{ __('Send') }} <i class="fa-solid fa-paper-plane-top ml-1"></i></button></div>
									</div> 
									@error('message')
										<p class="text-danger">{{ $errors->first('message') }}</p>
									@enderror
								</div> 
							</div>
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
					<h6 class="text-center font-weight-extra-bold fs-16"><i class="fa-solid fa-notebook mr-2"></i> {{ __('Prompt Library') }}</h6>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 p-4">
							<div id="chat-search-panel">
								<div class="search-template">
									<div class="input-box">								
										<div class="form-group prompt-search-bar-dark">							    
											<input type="text" class="form-control" id="search-template" placeholder="{{ __('Search for prompts...') }}">
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
									@foreach ($prompts as $prompt)
										<div class="col-md-6 col-sm-12" id="{{ $prompt->group }}">
											<div class="prompt-boxes">
												<div class="card border-0" onclick='applyPrompt("{{ __($prompt->prompt) }}")'>
													<div class="card-body pt-3">
														<div class="template-title">
															<h6 class="mb-2 fs-15 number-font">{{ __($prompt->title) }}</h6>
														</div>
														<div class="template-info">
															<p class="fs-13 text-muted mb-2">{{ __($prompt->prompt) }}</p>
														</div>							
													</div>
												</div>
											</div>							
										</div>
									@endforeach
								</div>
							</div>
			
						</div>
					</div>
					
				</div>
		  	</div>
		</div>
	</div>

@endsection

@section('js')
<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{URL::asset('plugins/pdf/html2canvas.min.js')}}"></script>
<script src="{{URL::asset('plugins/pdf/jspdf.umd.min.js')}}"></script>
<script src="{{URL::asset('plugins/highlight/highlight.min.js')}}"></script>
<script src="{{URL::asset('plugins/highlight/showdown.min.js')}}"></script>
<script src="{{URL::asset('js/export-chat.js')}}"></script>
<script type="text/javascript">
	const main_form = get("#openai-form");
	const input_text = get("#message");
	const msgerChat = get("#chat-container");
	const dynamicList = get("#dynamic-inputs");
	const msgerSendBtn = get("#chat-button");
	const bot_avatar = "{{ URL::asset('/chats/csv.jpg') }}";	
	const user_avatar = "{{ URL::asset(auth()->user()->profile_photo_path) }}";	
	const mic = document.querySelector('#mic-button');
	let eventSource = null;
	let isTranscribing = false;
	let start_chat = false;
	let chat_code = "{{ $chat_code }}";	
	let active_id;
	let proceed_further = true;
	var fileLimit = "{{ $limit }}"; 
	let loading = `<span class="loading">
    <span style="background-color: #fff;"></span>
    <span style="background-color: #fff;"></span>
    <span style="background-color: #fff;"></span>
    </span>`;
	let loading_dark = `<span class="loading">
    <span style="background-color: #1e1e2d;"></span>
    <span style="background-color: #1e1e2d;"></span>
    <span style="background-color: #1e1e2d;"></span>
    </span>`;

	// Process deault conversation
	$(document).ready(function() {
		$(".chat-sidebar-message").first().focus().trigger('click');

		let check_messages = document.querySelectorAll('.chat-sidebar-message').length;
		if (check_messages == 0) {
			$('#intro-drop-box').addClass('block-display');
			$('#dynamic-inputs').html('');
			$('#image-drop-box').removeClass('hidden');
			$('#progress-drop-box').addClass('hidden');
			$('#intro-drop-box').addClass('block-display');
		}
	});


	// Show chat history for conversation
	$(document).on('click', ".chat-sidebar-message", function (e) { 

		$('.chat-sidebar-message').removeClass('selected-message');
		$(this).addClass('selected-message');
		$('#dynamic-inputs').html('');
		$('#image-drop-box').addClass('hidden');
		$('#progress-drop-box').addClass('hidden');
		$('#generating-status').addClass('show-chat-loader');
		$('#intro-drop-box').removeClass('block-display');
		active_id = this.id;
		let code = makeid(10);

		$('.chat-sidebar-container').removeClass('extend');

		$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'POST',
				url: '/user/chat/csv/conversation',
				data: { 'chat_id': active_id,},
				success: function (data) {

					$('#dynamic-inputs').html('');
					$('#generating-status').removeClass('show-chat-loader');
		
					start_chat = true;
					$('#dynamic-inputs').html('');
					$('#image-drop-box').addClass('hidden');
					$('#progress-drop-box').addClass('hidden');
					$('#intro-drop-box').removeClass('block-displays');
				
					for (const key in data['messages']) {

						if(data['messages'][key]['role'] == 'user') {
							appendMessage(user_avatar, "right", data['messages'][key]['content'], '');
						}

						if (data['messages'][key]['role'] == 'bot') {
							appendMessageSpecial(bot_avatar, "left", data['messages'][key]['content'], '');
						}
					}		
					
					hljs.highlightAll();
				},
				error: function(data) {
					toastr.warning('{{ __('There was an issue while retrieving chat history') }}');
				}
			});
	});


	// Rename conversation title
	$(document).on('click', '.chat-edit', function(e) {

		e.preventDefault();

		Swal.fire({
			title: '{{ __('Rename Chat Title') }}',
			showCancelButton: true,
			confirmButtonText: '{{ __('Rename') }}',
			reverseButtons: true,
			input: 'text',
		}).then((result) => {
			if (result.value) {
				var formData = new FormData();
				formData.append("name", result.value);
				formData.append("chat_id", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/csv/rename',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data['status'] == 'success') {
							toastr.success('{{ __('Chat title has been updated successfully') }}');
							document.getElementById("title-"+data['chat_id']).innerHTML =  result.value;
						} else {
							toastr.error('{{ __('Chat title was not updated correctly') }}');
						}      
					},
					error: function(data) {
						Swal.fire('Update Error', data.responseJSON['error'], 'error');
					}
				})
			} else if (result.dismiss !== Swal.DismissReason.cancel) {
				Swal.fire('{{ __('No Title Entered') }}', '{{ __('Make sure to provide a new chat title before updating') }}', 'warning')
			}
		})
	});


	// Delete conversation	
	$(document).on('click', '.chat-delete', function(e) {

		e.preventDefault();

		Swal.fire({
			title: '{{ __('Confirm Chat Deletion') }}',
			text: '{{ __('It will permanently delete this chat history') }}',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: '{{ __('Delete') }}',
			reverseButtons: true,
		}).then((result) => {
			if (result.isConfirmed) {
				var formData = new FormData();
				formData.append("chat_id", $(this).attr('id'));
				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/user/chat/csv/delete',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						
						if (data['status'] == 'success') {
							toastr.success('{{ __('Chat history has been successfully deleted') }}');

							$("#" + active_id).remove();	
							$('#dynamic-inputs').html('');	
							$(".chat-sidebar-message").first().focus().trigger('click');
							let check_messages = document.querySelectorAll('.chat-sidebar-message').length;

							if (check_messages == 0) {
							
								$('#dynamic-inputs').html('');
								$('#image-drop-box').removeClass('hidden');
								$('#progress-drop-box').addClass('hidden');
								$('#intro-drop-box').addClass('hidden');
							}						
						} else if (data['status'] == 'empty') { 
							$('#dynamic-inputs').html('');	
								
						}else {
							toastr.warning('{{ __('There was an issue while deleting chat conversation') }}');
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
			const message = input_text.value;
			
			if (!start_chat) {
				toastr.warning('{{ __('Upload a valid CSV document before analyzing') }}');
				return;
			}

			if (!message) {
				toastr.warning('{{ __('Type your message first before sending') }}');
				return;
			}

			checkBalance('process', message);

			if (proceed_further) {
				appendMessage(user_avatar, "right", message, '');
				input_text.value = "";
				process(message)
			}
		});

	});


	// Send chat message
	function process(message) {
		msgerSendBtn.disabled = true
		let formData = new FormData();
		formData.append('message', message);
		formData.append('chat_id', active_id);
		let code = makeid(10);
		appendMessage(bot_avatar, "left", "", code);
        let $msg_txt = $("#" + code);
		let $div = $("#chat-bubble-" + code);
		const progress = document.getElementById(code);
		progress.innerHTML = loading_dark;

		const response = document.getElementById(code);
		const chatbubble = document.getElementById('chat-bubble-' + code);
		let msg = '';
		let i = 0;

		fetch('/user/chat/csv/process', {
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST', 
				body: formData
			})		
			.then(async (res) => {
			

                response.innerHTML = "";
                const reader = res.body.getReader();
                const decoder = new TextDecoder();

                let text = "";
                while (true) {
                    const { value, done } = await reader.read();
                    if (done) break;
                    text += decoder.decode(value, { stream: true });

					text = text.replace(/(?:\r\n|\r|\n)/g, '<br>');
							
                    response.innerHTML = text;
			
					msgerChat.scrollTop += 100;
                }

				msgerSendBtn.disabled = false;
				calculateCredits();
            })
            .catch((e) => {
                console.log(e);
				msgerSendBtn.disabled = false
            });	
	}

	function calculateCredits() {

		let current = document.getElementById('balance-number').innerHTML;

		$.ajax({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			method: 'post',
			url: '/user/chat/csv/credits',
			data: 'credit',
			processData: false,
			contentType: false,
			success: function (data) {
				console.log(data)
				if (data['credits'] != 'Unlimited') {
					animateValue("balance-number", parseInt(current.replace(/,/g, '')), data['credits'], 300);
				}
				    
			},
			error: function(data) {
				console.log(data)
			}
		})
	}

	function clearConversation() {
		document.getElementById("dynamic-inputs").innerHTML = "";

		fetch('/user/vision/clear', {
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				method: 'POST', 
			})		
			.then(response => response.json())
			.then(function(result){

				if (result.status == 'success') {
					toastr.success('{{ __('Chat conversation has been cleared successfully') }}');
				}

			})	
			.catch(function (error) {
				console.log(error);
				msgerSendBtn.disabled = false
			});
	}

	function clearConversationInvalid() {
		document.getElementById("dynamic-inputs").innerHTML = "";

		fetch('/user/vision/clear', {
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
	function appendMessage(img, side, text, code) {
		let msgHTML;
		text = escape_html(text);
				
		if (side == 'left' && text == '') {
			msgHTML = `
			<div class="msg ${side}-msg">
			<div class="message-img" style="background-image: url(${img})"></div>
			<div class="message-bubble" id="chat-bubble-${code}" data-message="${text}">
				<div class="msg-text" id="${code}"></div>
				<a href="#" class="copy"><svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 96 960 960" fill="currentColor" width="20"> <path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"></path> </svg></a>
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

	$("#expand").on('click', function (e) {
        $('.chat-sidebar-container').toggleClass('extend');
    });


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
			if (!start_chat) {
				toastr.warning('{{ __('Upload a valid CSV document before analyzing') }}');
				return;
			}
			
			if (!message) {
				toastr.warning('{{ __('Type your message first before sending') }}');
				return;
			}			

			checkBalance('process', message);

			if (proceed_further) {
				appendMessage(user_avatar, "right", message, '');
				input_text.value = "";
				process(message)
			}
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
        str = str.replaceAll('</code></pre>', '</code><button type="button" class="copy-code" onclick="copyCode(this)"><span class="label-copy-code">{{ __('Copy') }}</span></button></pre>');

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
		toastr.success('{{ __('Code has been copied successfully') }}');
	}

	$(document).on('click', ".copy", function (e) {

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
		toastr.success('{{ __('Response has been copied successfully') }}');
	});

	var input_pdf = document.getElementById("csv_file");

	input_pdf.addEventListener('change', function(){
		var files = input_pdf.files;
		var fileSize = files[0].size; 
		var fileSizeInKB = (fileSize/1024)/1024; 
		
		if(fileSizeInKB < fileLimit){
			checkBalance('analyze', 'none');

			if (proceed_further) {
				analyze(files);
			}
		} else {   
			toastr.warning('{{ __('Selected CSV file is too big. ') }}{{ __('Maximum allowed file size is ') }}'+fileLimit+'MB');
		}
	});

	function analyze(files) {
		console.log(files)
		msgerSendBtn.disabled = true
		let formData = new FormData();
		formData.append('file', files[0]);

        const progress = document.getElementById("progress-text");
        const btn = document.getElementById("upload-csv-button");
        progress.style.paddingBottom = "8px";
		$('#dynamic-inputs').html('');
		$('#image-drop-box').addClass('hidden');
		$('#progress-drop-box').removeClass('hidden');
		$('#intro-drop-box').addClass('block-display');
        btn.innerHTML = loading;
		let new_chat_id = '';


        fetch("/user/chat/csv/embedding", {
            headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			method: 'POST', 
            body: formData,
        })
            .then(async (res) => {
				console.log(res)
                const reader = res.body.getReader();
                const decoder = new TextDecoder();
				
                let text = "";
                while (true) {
                    const { value, done } = await reader.read();
                    if (done) break;
                    text = decoder.decode(value, { stream: true });
					console.log(text)
					if (text.trim() != "_END_" && text.trim() != "_ERROR_" && !text.includes('data_id:')) {
						progress.innerText = text;
					}  

					if (text.includes('data_id:')) {
						new_chat_id = text.split('data_id: ').pop();
					}

                }

				if (text.trim() == "_END_") {
						$('#progress-drop-box').addClass('hidden');
						$('#intro-drop-box').removeClass('block-display');
						progress.innerText = "";

						createConversationBox(new_chat_id);				
						start_chat = true;
						
					} else if (text.trim() == "_ERROR_") {
						toastr.error('{{ __('There was an error analyzing your URL link, please contact support') }}');
						progress.innerText = "";
						start_chat = false;
						$('#progress-drop-box').addClass('hidden');
						$('#image-drop-box').removeClass('hidden');
						
					}

                btn.innerHTML = "{{ __('Upload CSV File') }}";
            })
            .catch((e) => {
				$('#image-drop-box').removeClass('hidden');
				$('#progress-drop-box').addClass('hidden');
				$('#intro-drop-box').addClass('block-display');
                console.error(e);
            });
    }

	function checkBalance(task, message) {
		var formData = new FormData();
		formData.append("task", task);
		formData.append("message", message);

		$.ajax({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			method: 'post',
			url: '/user/chat/csv/check-balance',
			data: formData,
			processData: false,
			contentType: false,
			success: function (data) {
				if (data['status'] == 'success') {
					proceed_further = true;
				} else {
					toastr.warning(data['message']);
					proceed_further = false;
				}
			},
			error: function(data) {
				Swal.fire('Update Error', data.responseJSON['error'], 'error');
			}
		});

	}

	function createConversationBox(new_chat_id) {
		var formData = new FormData();
		formData.append("chat_id", new_chat_id);
		$.ajax({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			method: 'post',
			url: '/user/chat/csv/metainfo',
			data: formData,
			processData: false,
			contentType: false,
			success: function (data) {
				console.log(data)
				if (data['status'] == 'success') {

					var element = document.getElementById(active_id);
					if (element) {
						element.classList.remove("selected-message");
					}

					let id = data['id'];
					let title = data['title'];
					let url = data['url'];
					
					$('.chat-sidebar-messages').prepend(`<div class="chat-sidebar-message selected-message" id=${id}>
						<h6 class="chat-title chat-small mb-2" id="title-${id}">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
								viewBox="0 0 303.188 303.188" width="20px" height="20px" class="mr-1" xml:space="preserve">
								<g>
									<polygon style="fill:#E4E4E4;" points="219.821,0 32.842,0 32.842,303.188 270.346,303.188 270.346,50.525 	"/>
									<polygon style="fill:#007934;" points="227.64,25.263 32.842,25.263 32.842,0 219.821,0 	"/>
									<g>
										<g>
											<path style="fill:#A4A9AD;" d="M114.872,227.984c-2.982,0-5.311,1.223-6.982,3.666c-1.671,2.444-2.507,5.814-2.507,10.109
												c0,8.929,3.396,13.393,10.188,13.393c2.052,0,4.041-0.285,5.967-0.856c1.925-0.571,3.86-1.259,5.808-2.063v10.601
												c-3.872,1.713-8.252,2.57-13.14,2.57c-7.004,0-12.373-2.031-16.107-6.094c-3.734-4.062-5.602-9.934-5.602-17.615
												c0-4.803,0.904-9.023,2.714-12.663c1.809-3.64,4.411-6.438,7.808-8.395c3.396-1.957,7.39-2.937,11.98-2.937
												c5.016,0,9.808,1.09,14.378,3.27l-3.841,9.871c-1.713-0.805-3.428-1.481-5.141-2.031
												C118.681,228.26,116.841,227.984,114.872,227.984z"/>
											<path style="fill:#A4A9AD;" d="M166.732,250.678c0,2.878-0.729,5.433-2.191,7.665c-1.459,2.232-3.565,3.967-6.315,5.205
												c-2.751,1.237-5.977,1.856-9.681,1.856c-3.089,0-5.681-0.217-7.775-0.65c-2.095-0.434-4.274-1.191-6.538-2.27v-11.172
												c2.391,1.227,4.877,2.186,7.458,2.872c2.582,0.689,4.951,1.032,7.109,1.032c1.862,0,3.227-0.322,4.095-0.969
												c0.867-0.645,1.302-1.476,1.302-2.491c0-0.635-0.175-1.19-0.524-1.666c-0.349-0.477-0.91-0.958-1.682-1.444
												c-0.772-0.486-2.83-1.48-6.173-2.983c-3.026-1.375-5.296-2.708-6.809-3.999s-2.634-2.771-3.364-4.443s-1.095-3.65-1.095-5.936
												c0-4.273,1.555-7.605,4.666-9.997c3.109-2.391,7.384-3.587,12.822-3.587c4.803,0,9.7,1.111,14.694,3.333l-3.841,9.681
												c-4.337-1.989-8.082-2.984-11.234-2.984c-1.63,0-2.814,0.286-3.555,0.857s-1.111,1.28-1.111,2.127
												c0,0.91,0.471,1.725,1.412,2.443c0.941,0.72,3.496,2.031,7.665,3.936c3.999,1.799,6.776,3.729,8.331,5.792
												C165.955,244.949,166.732,247.547,166.732,250.678z"/>
											<path style="fill:#A4A9AD;" d="M199.964,218.368h14.027l-15.202,46.401H184.03l-15.139-46.401h14.092l6.316,23.519
												c1.312,5.227,2.031,8.865,2.158,10.918c0.148-1.481,0.443-3.333,0.889-5.555c0.443-2.222,0.835-3.967,1.174-5.236
												L199.964,218.368z"/>
										</g>
									</g>
									<polygon style="fill:#D1D3D3;" points="219.821,50.525 270.346,50.525 219.821,0 	"/>
									<g>
										<rect x="134.957" y="80.344" style="fill:#007934;" width="33.274" height="15.418"/>
										<rect x="175.602" y="80.344" style="fill:#007934;" width="33.273" height="15.418"/>
										<rect x="134.957" y="102.661" style="fill:#007934;" width="33.274" height="15.419"/>
										<rect x="175.602" y="102.661" style="fill:#007934;" width="33.273" height="15.419"/>
										<rect x="134.957" y="124.979" style="fill:#007934;" width="33.274" height="15.418"/>
										<rect x="175.602" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
										<rect x="94.312" y="124.979" style="fill:#007934;" width="33.273" height="15.418"/>
										<rect x="134.957" y="147.298" style="fill:#007934;" width="33.274" height="15.418"/>
										<rect x="175.602" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
										<rect x="94.312" y="147.298" style="fill:#007934;" width="33.273" height="15.418"/>
										<g>
											<path style="fill:#007934;" d="M127.088,116.162h-10.04l-6.262-10.041l-6.196,10.041h-9.821l10.656-16.435L95.406,84.04h9.624
												l5.8,9.932l5.581-9.932h9.909l-10.173,16.369L127.088,116.162z"/>
										</g>
									</g>
								</g>
							</svg>
							${title}
						</h6>
						<a class="chat-url chat-small fs-10 text-muted" href="${url}"><i class="fa-solid fa-link fs-10 mr-2 text-muted"></i>${url}</a>
						<div class="chat-info mt-2">
							<div class="chat-count fs-10"><span>0</span> {{ __('messages') }}</div>
							<div class="chat-date fs-10">{{ __('Now') }}</div>
						</div>
						<div class="chat-actions d-flex">
							<a href="#" class="chat-edit fs-12" id="${id}"><i class="fa-sharp fa-solid fa-pen-to-square" data-tippy-content="{{ __('Edit Name') }}"></i></a>
							<a href="#" class="chat-delete fs-12 ml-2"  id="${id}"><i class="fa-sharp fa-solid fa-trash" data-tippy-content="{{ __('Delete Chat') }}"></i></a>
						</div>
					</div>`);

					active_id = data['id'];
	
				}    
			},
			error: function(data) {
				Swal.fire('Update Error', data.responseJSON['error'], 'error');
			}
		})
	}

	$('#upload-csv-button').click(function() {
        $('#csv_file').click();
    });





</script>
@endsection