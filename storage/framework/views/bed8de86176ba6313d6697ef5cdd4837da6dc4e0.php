

<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />

	<style>
    .videos-frame-container .slick-slide {
		margin: 0 10px;
	}
	.videos-frame-container .slick-dots li button:before {
		font-family: slick;
		font-size: 12px;
	}
	.slick-prev {
    left: -15px;
    width: 0;
    height: 0;
    border-left: 0 solid transparent;
    border-right: 15px solid #113463;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    background: none;
}
.slick-next {
	right: -15px;
    width: 0;
    height: 0;
    border-right: 0 solid transparent;
    border-left: 15px solid #113463;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    background: none;
}
.slick-next:before, .slick-prev:before {
	display: none;
}
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('All Users Video')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-id-badge mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.user.dashboard')); ?>"> <?php echo e(__('User Video Management')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- USERS LIST DATA TABEL -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<form action="<?php echo e(route('user.videos')); ?>" method="get" >
					<div class="card-header d-flex justify-content-between">
						<h3 class="card-title"><?php echo e(__('Video Tutorial')); ?></h3>
						<select class="form-control w-25" name="media_category" onchange="this.form.submit()">
							<option value="all">All</option>
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($cate->id); ?>" <?php echo e((isset($_GET['media_category']) && $_GET['media_category']==$cate->id) ? 'selected':''); ?>><?php echo e($cate->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</form>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<div class="videos-frame-container mb-5 pb-2">
							<div id="videoList">
								<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($video->section == 0): ?>
										<?php 
											$embedUrl = $video['embadded_url'];
											$videoId = substr($embedUrl, strrpos($embedUrl, '/') + 1);
											$thumbnailUrl = "https://img.youtube.com/vi/$videoId/maxresdefault.jpg";
										?>
										<div class="video-list">
											<a href="<?php echo e($video->embadded_url); ?>" class="various fancybox fancybox.iframe"><img src="<?php echo e($thumbnailUrl); ?>" width="100%" height="200"></a>
											<!-- <iframe width="100%" class="mr-" height="250" src="<?php echo e($video['embadded_url']); ?>"></iframe> -->
											<div class="py-3 video-caption">
												<span><?php echo e($video->title); ?></span>
												<a href="<?php echo e(url('user/videos/download')); ?>?link=<?php echo e(urlencode($embedUrl)); ?>&title=<?php echo e(urlencode($video->title)); ?> class="font-weight-bold"><i class="fas fa-download"></i></a>
											</div>
											<!-- <div><a href="" class="video-download">Download</a></div> -->
										</div>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div> <!-- END BOX CONTENT -->
					<hr>
					<div class="downloads-section"> 
						<h2>Downloads </h2>
					<!-- DATATABLE -->
					
					<table id='listVideos' class='table listVideos' width='100%'>
						<thead>
							<tr>	
								<th width="15%"><?php echo e(__('Title')); ?></th> 	 							    						           								    						           	
								<th width="7%"><?php echo e(__('Actions')); ?></th>        	      	
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($video->section == "1"): ?>
								<tr>
									<td><?php echo e($video->title); ?></td>
									<td><a href="<?php echo e(url('user/videos/pdfdownload')); ?>?link=<?php echo e(urlencode($video->file_link)); ?>&title=<?php echo e(urlencode($video->title)); ?>&type=<?php echo e($video->files); ?>" download="<?php echo e($video->title); ?>">Download</a></td>
								</tr>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
					<!-- END DATATABLE -->
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<script>
		var table = $('#listVideos').DataTable({
			searching: false,
			paging: false,
			language: {
				"emptyTable": "<div class='text-center'><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br><?php echo e(__('Not found any documents')); ?></div>",
				search: "<i class='fa fa-search search-icon'></i>",
				lengthMenu: '_MENU_ ',
				paginate : {
					first    : '<i class="fa fa-angle-double-left"></i>',
					last     : '<i class="fa fa-angle-double-right"></i>',
					previous : '<i class="fa fa-angle-left"></i>',
					next     : '<i class="fa fa-angle-right"></i>'
				}
			},
		})
		
		$('#videoList').slick({
			dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
   
  ],
})

		function viewVideo(src){
			$("#frameSrc").attr("src",src);
			$("#exampleModal").modal('show');
		}

		$(".various").fancybox({
            maxWidth    : 800,
            maxHeight   : 600,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });
		
		</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/video/video_list.blade.php ENDPATH**/ ?>