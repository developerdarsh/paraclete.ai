<!DOCTYPE html>
<html lang="en" class="">

  <head>

    <!-- Site Title 2-->
    <title></title>

    <!-- Character Set and Responsive Meta Tags -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
     <style>
         /* Reset default margin and padding */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        /* Set page size to A4 */
        @page {
            size: A4;
            margin: 1cm; /* Adjust margin as needed */
        }
        /* Define font-face for Montserrat */
        @font-face {
            font-family: 'Montserrat';
            src: url('<?php echo e(asset("css/Montserrat-Thin.woff2")); ?>') format('woff2'),
                url('<?php echo e(asset("css/Montserrat-Thin.woff")); ?>') format('woff'),
                url('<?php echo e(asset("css/Montserrat-VariableFont_wght.ttf")); ?>') format('truetype');
            font-weight: 100;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Montserrat';
            src: url('<?php echo e(asset("css/Montserrat-ThinItalic.woff2")); ?>') format('woff2'),
                url('<?php echo e(asset("css/Montserrat-ThinItalic.woff")); ?>') format('woff');
            font-weight: 100;
            font-style: italic;
            font-display: swap;
        }
        
        /* @font-face {
          font-family: 'Open Sans';
          font-style: normal;
           font-weight: normal;
          src: url(http://themes.googleusercontent.com/static/fonts/opensans/v8/cJZKeOuBrn4kERxqtaUH3aCWcynf_cDxXwCLxiixG1c.ttf) format('truetype');
        } */
    </style>

  </head>
  <body style="margin: 0;padding: 0;font-family: 'Montserrat';">
      <div class="auto-container" style="width: 100%;margin-right: auto; margin-left: auto;position: relative;">
      
        <div class="resume-section" style="width: 100%; display: inline-block;position: relative;">
          <div class="leftpart" style="width: 30%; float: left;">
            <div style="padding: 15px;"> 
              <div class="user-image" style="margin-bottom: 20px;position: relative;overflow: hidden;border: none;">
                <img style="width: 100%; height: 240px;object-fit: cover;position: relative;" src="<?php echo e($base64URL); ?>" alt="">
                <div style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 0;
                    height: 0;
                    border-right: 60px solid transparent;
                    border-top: 60px solid rgb(255 255 255 / 100%);"></div>
                <div style="
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    width: 0;
                    height: 0;
                    border-left: 55px solid transparent;
                    border-bottom: 55px solid rgb(255 255 255 / 100%);"></div>
            </div>

                <h2 style="margin: 0px;font-size: 30px;line-height: 32px;color: #000000;padding-bottom: 15px;"><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></h2>
                <p style="margin: 0px;font-size: 16px;line-height: 16px;color: #000000;text-transform: uppercase;padding-bottom: 40px;"><?php echo e($data['jobTitleInput']); ?></p>

                <div class="contact-box" style="margin-bottom: 40px;">
                    <h4 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Contact</h4>
                    <div class="number-line" style="color: #000000;font-size: 14px;line-height: 18px;font-weight: 500;margin-bottom: 10px; ">
                      <div style="font-weight: bold;padding-right: 10px;text-transform: uppercase;float: left;">P</div>
                      <div style="margin-left: 20px;"><?php echo e($data['phone']); ?></div>
                    </div>
                    <div class="email-line" style="color: #000000;font-size: 14px;line-height: 18px;font-weight: 500;margin-bottom: 10px;">
                      <div style="font-weight: bold;padding-right: 10px;text-transform: uppercase;float: left;">E</div>
                      <div style="margin-left: 20px;"><?php echo e($data['email']); ?></div>
                    </div>
                    <div class="address-line" style="color: #000000;font-size: 14px;line-height: 18px;font-weight: 500;margin-bottom: 10px;">
                      <div style="font-weight: bold;padding-right: 10px;text-transform: uppercase;float: left;">A</div>
                      <div style="margin-left: 20px;"><?php echo e($data['address']); ?> <?php echo e($data['city']); ?>, <?php echo e($data['address']); ?>-<?php echo e($data['postal_code']); ?>,<?php echo e($data['country']); ?></div>
                    </div>
                </div>

                <div class="eduction-box" style="margin-bottom: 40px;">
                  <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">eduction</h2>
                   <?php $__currentLoopData = $data['edu_school']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="eduction-line" style="margin-bottom: 10px;">
                     <h4 style="margin: 0px;margin-bottom: 10px;color: #000000;letter-spacing: 2px;font-size: 16px;line-height: 24px;"><?php echo e($education); ?> / <?php echo e(date('M Y',strtotime($data['edu_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['edu_end_date'][$key]))); ?>

                      </h4>
                      <p style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin-bottom: 10px;"><?php echo e($data['edu_city'][$key]); ?></p>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                </div>
            </div>
          <div class="rightpart" style="width: 70%;float: right;">
              <div style="padding: 15px;"> 

                  <div class="summary-box" style="margin-bottom: 40px;">
                    <h4 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">summary</h4>
                    <p style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin-bottom: 10px;"><?php echo e(strip_tags($data['professional_summary'])); ?></p>
                  </div>
                   
                    <?php $__currentLoopData = $data['emp_job_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$job_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="experience-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">experience</h2>
                            <h4 style="margin: 0px;margin-bottom: 5px;color: #000000;letter-spacing: 2px;font-size: 16px;line-height: 24px;"><?php echo e($data['emp_employer'][$key]); ?></h4>
                            <p style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;"><?php echo e($job_title); ?> / <?php echo e(date('M Y',strtotime($data['emp_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['emp_end_date'][$key]))); ?></p>
                            <ul style="padding-left: 30px;">
                            <?php echo e($data['emp_description'][$key]); ?>

                            </ul>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="skills-box" style="margin-bottom: 40px;">
                    <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">skills</h2>
                    <ul style="padding-left: 0px;list-style: none;">
                    <?php $__currentLoopData = $data['skill_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;"><?php echo e($skills); ?>

                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </div>

                  
             </div>
          </div>
      </div>
  
     <div class="shape-bottom" style="position: absolute;bottom: 0px;right: 200px;">
            <div><img src="data:image/png;base64,<?php echo e(base64_encode(file_get_contents( "https://staging.paraclete.ai/img/users/shape-vector.png" ))); ?>"></div>
      </div>

      </div>
  </body>
</html><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/resume/template2.blade.php ENDPATH**/ ?>