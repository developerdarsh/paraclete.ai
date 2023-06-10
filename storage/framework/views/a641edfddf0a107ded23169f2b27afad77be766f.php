<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		
        <!-- TITLE -->
        <title><?php echo e(config('app.name', 'Davinci')); ?></title>
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
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</head>

	<body class="app sidebar-mini">

		<!-- LOADER -->
		<div id="preloader" >
			<img src="<?php echo e(URL::asset('img/svgs/preloader.gif')); ?>" alt="loader">           
		</div>
		<!-- END LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<?php echo $__env->make('layouts.nav-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">

						<?php echo $__env->make('layouts.nav-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        

						<?php echo $__env->yieldContent('page-header'); ?>

						<?php echo $__env->yieldContent('content'); ?>						

                    </div>                   
                </div>
                <!-- END APP CONTENT -->

                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                

            </div>		
        </div><!-- END PAGE -->
        
		<?php echo $__env->make('layouts.footer-backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        

	</body>
</html>


<?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>