<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
        <!-- TITLE -->
        <title>{{ config('app.name', 'Davinci') }}</title>
        <script src="https://anywebsite.ai/chatbot/chatbot.js"></script>
		<script>
		var _chatbot = window._chatbot = window._chatbot || []
		_chatbot.website = '01h0hk6cxsdmac89j38d3768fr'
		_chatbot.domainName = 'paraclete.ai'
		_chatbot.frameMode = false // Set this to true if you want to display the window directly
		_chatbot.width = '400px'
		_chatbot.height = '500px'
		_chatbot.title = 'Paraclete Helper'
		_chatbot.hello = 'Hello! You can ask me anything and I\'ll look into our templates and other features to answer your question!'
		_chatbot.placeholder = 'What Can Paraclete Help You With Today?'
		_chatbot.replying = 'Paraclete AI is replying...'
		</script>
        @include('layouts.header')

	</head>

	<body class="app sidebar-mini">

		<!-- LOADER -->
		<div id="preloader" >
			<img src="{{URL::asset('img/svgs/preloader.gif')}}" alt="loader">           
		</div>
		<!-- END LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				@include('layouts.nav-aside')

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">

						@include('layouts.nav-top')

                        {{-- @include('layouts.flash') --}}

						@yield('page-header')

						@yield('content')						

                    </div>                   
                </div>
                <!-- END APP CONTENT -->

                @include('layouts.footer')                

            </div>		
        </div><!-- END PAGE -->
        
		@include('layouts.footer-backend')        

	</body>
</html>


