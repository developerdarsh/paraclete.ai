<!DOCTYPE html>
<html lang="en" class="">

<head>
    <!-- Site Title -->

    <title></title>

    <!-- Character Set and Responsive Meta Tags -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PDF Document</title>
    <style>
        /* Reset default margin and padding */
        body, html {
            margin: 0;
            padding: 0;
        }
        /* Set page size to A4 */
        @page {
            size: A4;
            margin: 1cm; /* Adjust margin as needed */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,600&display=swap" rel="stylesheet" />
</head>
<?php
// dd($data);
?>
<body style="margin: 0; padding: 0; font-family: 'Poppins', sans-serif;">
   <div style="position: relative;">
    <div class="auto-container" style="width: 100%; max-width: 750px; margin-right: auto; margin-left: auto;">
        <div class="top-header" style="background-color: #303030;width: 100%;display: inline-block;">
            <div class="logo" style="width: 30%;height: 140px;float: left;">
                <img src="<?php echo e($base64URL); ?>" style="width: 100%;height: 180px;object-fit: cover;object-position: center;" />
            </div>
            <div class="User-Info" style="">
                <div class="User_Name" style="padding: 15px;">
                    <h2 style="margin: 0px; padding: 0px; font-size: 24px; line-height: 30px; font-weight: 600; color: #ffffff;"><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></h2>
                    <p style="padding: 0px;margin: 0px;color: #ffffff;"><?php echo e($data['jobTitleInput']); ?></p>
                </div>
                <div class="User_Address" style="padding: 10px 15px 5px;">
                    <p style="margin: 0; padding: 0; color: #ffffff; font-size: 14px; line-height: 16px;"><?php echo e($data['address']); ?> <?php echo e($data['city']); ?>, <?php echo e($data['address']); ?>-<?php echo e($data['postal_code']); ?>,<?php echo e($data['country']); ?></p>
                    <p><a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;"><?php echo e($data['phone']); ?></a> <a href="#" style="font-size: 14px; line-height: 16px;color: #ffffff;"><?php echo e($data['email']); ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="personal-details" style="width: 100%;position: relative;display: inline-block;">
            <div class="left-part" style="width: 30%;float: left;">
                <div class="skill" style="padding: 20px 10px 0px"> 
                    <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 0px;">Skills</h4>
                     <ul style="list-style: none;padding: 0px;">
                        
                        <?php $__currentLoopData = $data['skill_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="font-size: 12px;line-height: 16px;margin: 0px;padding:0px;">
                            <p><?php echo e($skills); ?> </p>
                            <div style="width: 100%;display: inline-block;background: #cecece;height: 4px;">
                                <?php if(isset($data['skill_level_'.$key]) && ($data['skill_level_'.$key]=='novice' || $data['skill_level_'.$key]=='beginner' || $data['skill_level_'.$key]=='intermediate' || $data['skill_level_'.$key]=='advanced' || $data['skill_level_'.$key]=='expert')): ?>
                                <div style="float: left;width: 20%;height: 4px;background: #000000;"></div>
                                <?php endif; ?>

                                <?php if(isset($data['skill_level_'.$key]) && ($data['skill_level_'.$key]=='beginner' || $data['skill_level_'.$key]=='intermediate' || $data['skill_level_'.$key]=='advanced' || $data['skill_level_'.$key]=='expert')): ?>
                                <div style="float: left;width: 40%;height: 4px;background: #000000;"></div>
                                <?php endif; ?>

                                <?php if(isset($data['skill_level_'.$key]) && ($data['skill_level_'.$key]=='intermediate' || $data['skill_level_'.$key]=='advanced' || $data['skill_level_'.$key]=='expert')): ?>
                                <div style="float: left;width: 60%;height: 4px;background: #000000;"></div>
                                <?php endif; ?>

                                <?php if(isset($data['skill_level_'.$key]) && ($data['skill_level_'.$key]=='advanced' || $data['skill_level_'.$key]=='expert')): ?>
                                <div style="float: left;width: 80%;height: 4px;background: #000000;"></div>
                                <?php endif; ?>

                                <?php if(isset($data['skill_level_'.$key]) && ($data['skill_level_'.$key]=='expert')): ?>
                                <div style="float: left;width: 100%;height: 4px;background: #000000;"></div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                </div>
                <div class="links" style="padding: 20px 10px 0px;">
                    <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 15px;">Links</h4>
                    <ul class="language-list" style="padding: 0px;padding-left: 20px;margin: 0px;">
                        <?php $__currentLoopData = $data['link_link']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><a href="#" style="color: #000000;"><?php echo e($links); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="language" style="padding: 20px 10px;">
                    <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 15px;">Language</h4>
                    <ul class="language-list" style="padding: 0px;padding-left: 20px;padding-bottom: 20px;margin: 0px;">
                        <?php $__currentLoopData = $data['lang_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><?php echo e($language); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="Profile-sec" style="">
                <div style="padding: 20px 10px;"> 
                    <div class="Profile-summury"> 
                        <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 10px;"><img src="data:image/svg+xml;base64,<?php echo e(base64_encode(file_get_contents( "https://staging.paraclete.ai/img/users/user.svg" ))); ?>" style="margin-right: 5px;float: left;" /> Profile</h4>
                        <p style="font-size: 12px;line-height: 20px;margin: 0px;padding-bottom: 20px;margin-bottom: 10px;">Bringing forth a motivated attitude and a variety of powerful skills. Adept in various social media platforms and office technology programs. Committed to utilizing my skills to further the mission of a company. Proven ability to establish and maintain excellent communication and relationships with clients.</p>
                    </div>
                    <div class="Employment-History"> 
                        <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 10px;"><img src="data:image/svg+xml;base64,<?php echo e(base64_encode(file_get_contents( "https://staging.paraclete.ai/img/users/briefcase.svg" ))); ?>" style="margin-right: 5px;float: left;" /> Employment History</h4>
                        <?php $__currentLoopData = $data['emp_job_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$job_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($job_title); ?></h6>
                        <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['emp_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['emp_end_date'][$key]))); ?></p>
                        <ul class="skill-list" style="padding: 0px;padding-left: 20px;padding-bottom: 20px;margin: 0px;">
                            <?php echo e($data['emp_description'][$key]); ?>

                         </ul>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="Education"> 
                        <h4 style="font-size: 20px;line-height: 24px;margin: 0px;padding-bottom: 10px;"><img src="data:image/svg+xml;base64,<?php echo e(base64_encode(file_get_contents( "https://staging.paraclete.ai/img/users/award.svg" ))); ?>" style="margin-right: 5px;float: left;" /> Education</h4>
                        <?php $__currentLoopData = $data['edu_school']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($data['edu_degree'][$key]); ?>, <?php echo e($education); ?></h6>
                        <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;"><?php echo e(date('M Y',strtotime($data['edu_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['edu_end_date'][$key]))); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


  
       <!-- <div style="width: 100%;display: inline-block;position: absolute;bottom: 0px;left: 0px;background: #303030;">
            <div class="footer-left-sec" style="width: 50%;display: inline-block;  text-align: left;">
                <p style="color: #E6EBF2;font-size: 11px;line-height: 14px;margin: 0;padding-bottom: 5px;font-weight: 300;">Phone: <?php echo e($data['phone']); ?></p>
                <p style="color: #E6EBF2;font-size: 11px;line-height: 14px;margin: 0;font-weight: 300;">Email: <?php echo e($data['email']); ?></p>
            </div>
            <div class="footer-right-sec" style="width: 50%;display: inline-block;">
                
               
            </div>
           </div>
        </div>
    -->
</body>

</html><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/resume/pdf.blade.php ENDPATH**/ ?>