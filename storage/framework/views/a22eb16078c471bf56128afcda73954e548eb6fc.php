<!DOCTYPE html>
<html lang="en" class="">

  <head>

    <!-- Site Title -->
    <title></title>

    <!-- Character Set and Responsive Meta Tags -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
     @page {background: #f2f2f2;}
  </style>

  </head>
  <body style="margin: 0;padding: 0;font-family: 'Mukta', sans-serif;color: #3d3d3d;">
      <div class="auto-container" style="border: 1px solid #eeeeee;position: relative;">
          <div class="header-section" style="width: 100%; display: inline-block;position: relative;padding: 20px 10px;">
              <div class="profile-details" style="width: 50%;float: left;text-align: center;padding-top: 10px;">
                   <h1 style="margin: 0px;font-size: 30px;line-height: 36px;font-weight: bold;padding-bottom: 10px;text-transform: uppercase;letter-spacing: 2px;color: #000000;"><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></h1>
                   <h4 style="margin: 0px;color: #a6761b;font-size: 16px;line-height: 24px;text-transform: uppercase;font-weight: 600;letter-spacing: 2px"><?php echo e($data['jobTitleInput']); ?></h4>
              </div>
              <div class="profile-image" style="width: 20%;float: left;text-align: center;">
               <div style="width: 120px;height: 180px;">
                <?php if($base64URL): ?>
                    <img src="<?php echo e($base64URL); ?>" style="border-radius: 100em;width: 120px;height: 120px;object-fit: cover;object-position: center;padding: 6px;background: #f4f4f4;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                <?php else: ?>
                    <img src="<?php echo e(URL::asset('img/resume/default_img.jpg')); ?>" style="border-radius: 100em;width: 120px;height: 120px;object-fit: cover;object-position: center;border-radius: 100%;padding: 6px;background: #f4f4f4;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                <?php endif; ?> 
                </div>
              </div>
              <div class="contact-info" style="width: 25%;float: right;text-align: right;padding-top: 10px;padding-right: 25px;">
                <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                      <div style="float: left;width: 90%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;"><?php echo e($data['address']); ?> <?php echo e($data['city']); ?>, <?php echo e($data['country']); ?>-<?php echo e($data['postal_code']); ?></p></div> 
                      <div style="overflow: hidden;margin-top: -12px;"><img src="<?php echo e(URL::asset('img/resume/location.png')); ?>" alt="addresh" style="width: 12px;height: 12px;margin-left: 5px;"></div>
                  </div> 
                  <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                    <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;"><?php echo e($data['email']); ?> <img src="<?php echo e(URL::asset('img/resume/email.png')); ?>" alt="email" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
                   <!-- <div style="float: right;width: 10%;"></div> -->
                </div>
                <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                  <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;"><?php echo e($data['linkedIn']); ?> <img src="<?php echo e(URL::asset('img/resume/world.png')); ?>" alt="web" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
              </div>
              <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;"><?php echo e($data['phone']); ?><img src="<?php echo e(URL::asset('img/resume/telephone-call.png')); ?>" alt="phone" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
               
            </div>

              </div>
          </div>
          <div class="body-section" style="width: 100%;position: relative;display: inline-block;">
              <div class="left-part" style="width: 62%; float: left;">
                  <div class="summury-text" style="padding: 0px 20px 0px;">
                      <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                          <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Profile</h4>
                      </div>
                      <p style="font-size: 14px;line-height: 20px;margin: 0px;padding-bottom: 10px;padding-left: 15px;"><?php echo e(strip_tags($data['professional_summary'])); ?></p>
                  </div>
                  <div class="experiences" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;"> 
                        <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Experiences</h4>
                    </div>
                    <div class="experiences-box">
                       <div style="padding-bottom: 20px;padding-left: 15px;">
                            <?php $__currentLoopData = $data['emp_job_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$job_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <h4 style="margin: 0px;float: left;font-size: 14px;line-height: 22px;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['emp_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['emp_end_date'][$key]))); ?> </h4>
                                <p style="margin: 0px;overflow: hidden;font-size: 14px;line-height: 22px;padding-left: 15px;"><?php echo e($data['emp_employer'][$key]); ?><br><?php echo e($job_title); ?></p>
                                <ul style="padding-left: 20px;margin: 0px;">
                                    <li style="font-size: 14px;line-height: 18px;margin: 0px;margin-bottom: 10px;"><?php echo e($data['emp_description'][$key]); ?></li>
                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                      </div>
                    </div>
                    </div>
                    <?php if(isset($data['cur_title'])): ?>
                     <div class="course" style="padding: 20px 20px 0px;">
                        <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;"> 
                            <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Course</h4>
                        </div>
                        <?php $__currentLoopData = $data['cur_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="course-name" style="padding-left: 15px;"> 
                            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($courses); ?> <span style="font-weight: bold;"> At <?php echo e($data['cur_institution'][$key]); ?></span> </h6>
                            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;"><?php echo e(date('M Y',strtotime($data['cur_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['cur_end_date'][$key]))); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                   <?php endif; ?>
                   <?php if(isset($data['Hobbies'])): ?>
                 <div class="hobbie" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Hobbies</h4>
                    </div>
                     <ul style="margin: 0px;padding-left: 20px;">
                      <?php $__currentLoopData = $data['Hobbies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$Hobbie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;"> <span style="padding-left: 10px;font-size: 17px;line-height: 17px;"><?php echo e($Hobbie); ?></span></li>           
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                   </div>
                   <?php endif; ?>
                  
                <?php if(isset($data['eca_title'])): ?>
                  <div class="ExtraActivity" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Extra-curricular Activities</h4>
                    </div>
                  </div>
                  <?php $__currentLoopData = $data['eca_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$eca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="curricular-name" style="margin: 0px;padding-left: 30px;"> 
                      <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($eca); ?><span style="font-weight: bold;"> at <?php echo e($data['eca_employer'][$key]); ?>,<?php echo e($data['eca_city'][$key]); ?></span> </h6>
                      <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;"><?php echo e(date('M Y',strtotime($data['eca_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['eca_end_date'][$key]))); ?></p>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endif; ?> 
            </div>
            
              <div class="right-part" style="width: 37%; float: right;">
                  <div class="eduction-text" style="padding: 0px 20px 0px;">
                      <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                          <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Eduction</h4>
                      </div>
                      <?php $__currentLoopData = $data['edu_school']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="eduction-list" style="padding-left: 15px;"> 
                         <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 16px;line-height: 24px;font-weight: bold;"><?php echo e($education); ?></h4>
                         <p style="font-size: 14px;line-height: 22px;margin: 0px;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['edu_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['edu_end_date'][$key]))); ?> | <?php echo e($data['edu_degree'][$key]); ?> </p>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <div class="skills" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Skills</h4>
                    </div>
                    <ul style="margin: 0px;padding-left: 30px;">
                        <?php $__currentLoopData = $data['skill_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;"><?php echo e($skills); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                    </ul>
                  </div>
                  <div class="languages" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Languages</h4>
                    </div>
                    <ul style="list-style: none; margin: 0px;padding-left: 20px;">
                        <?php $__currentLoopData = $data['lang_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;"> <span style="padding-left: 10px;font-size: 14px;line-height: 14px;"><?php echo e($language); ?></span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    </ul>
                  </div>
                  <?php if(isset($data['ref_name'])): ?>
                  <div class="eduction" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">References</h4>
                    </div>
                    <?php $__currentLoopData = $data['ref_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$refrance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="eduction-list" style="padding-left: 15px;"> 
                      <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 18px;line-height: 24px;font-weight: bold;"><?php echo e($refrance); ?></h4>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;"><?php echo e($data['ref_company'][$key]); ?></p>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;"><?php echo e($data['ref_email'][$key]); ?></p>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;"><?php echo e($data['ref_phone'][$key]); ?></p>
                   </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                  <?php endif; ?>
              </div>
          </div>
      </div>
  </body>
</html><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/resume/template4.blade.php ENDPATH**/ ?>