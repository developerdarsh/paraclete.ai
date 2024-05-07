
  <body style="margin: 0; padding: 0;font-family: 'Poppins', sans-serif;">
    <div class="auto-container" style="width: 100%; max-width: 720px; margin-right: auto; margin-left: auto;">
      <div class="top-header" style="background-color: #363636;">
        <div class="logo" style="padding: 40px;text-align: center;">
          <div style="margin-bottom: 15px">
            <?php if($base64URL): ?>
                <img src="<?php echo e($base64URL); ?>" style="width: 120px;height: 120px;border-radius: 100%;padding: 6px;background: #525252;" />
            <?php else: ?>
                <img src="<?php echo e(URL::asset('img/resume/default_img.jpg')); ?>" style="width: 120px;height: 120px;border-radius: 100%;padding: 6px;background: #525252;" />
            <?php endif; ?>
            </div>
            <h2 style="margin: 0px;margin-bottom: 10px;font-size: 24px;line-height: 36px;font-weight: 600;color: #ffffff;"><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></h2>
            <p style="padding: 0px;margin: 0px;color: #ffffff;font-size: 14px;line-height: 16px;text-transform: uppercase;font-weight: 400;"><?php echo e($data['jobTitleInput']); ?></p>
        </div>
        <div class="User-Info">
          <ul style="list-style: none;text-align: center;margin: 0px;padding: 10px 0;border-top: 2px solid #525252;">
            <li style="display: inline-block;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
               <span style="font-weight: 600;padding-right: 15px;">Email : </span> <?php echo e($data['email']); ?></a>
            </li>
            <li style="display: inline-block;margin: 6px 0;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
                <span style="font-weight: 600;padding-right: 15px;">Address : </span> <?php echo e($data['address']); ?> <?php echo e($data['city']); ?>,<?php echo e($data['postal_code']); ?>,<?php echo e($data['country']); ?></a>
            </li>
            <li style="display: inline-block;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
                <span style="font-weight: 600;padding-right: 15px;">Phone : </span> <?php echo e($data['phone']); ?> </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="personal-details" style="margin: 0; padding: 20px;">
        <div class="Profile-summury" style="padding: 25px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Summary</h4>
          <p style="font-size: 12px;line-height: 20px;margin: 0px;padding-bottom: 10px;"><?php echo e(strip_tags($data['professional_summary'])); ?></p>
        </div>
        <div class="Employment-History" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Employment History</h4>
          <?php $__currentLoopData = $data['emp_job_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$job_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($job_title); ?></h6>
            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['emp_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['emp_end_date'][$key]))); ?></p>
            <ul class="skill-list" style="padding: 0px;padding-left: 20px;padding-bottom: 20px;margin: 0px;">
                <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><?php echo e($data['emp_description'][$key]); ?></li>
            </ul>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
        <div class="Education" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">
             Education
          </h4>
          <?php $__currentLoopData = $data['edu_school']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;"><?php echo e($data['edu_degree'][$key]); ?>, <?php echo e($education); ?></h6>
            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;"><?php echo e(date('M Y',strtotime($data['edu_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['edu_end_date'][$key]))); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
        <div class="skill" style="padding: 20px 15px 0px;width: 100%;display: inline-block;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 10px;">Skills</h4>
          <ul style="margin: 0px;padding-left: 15px;">
            <?php $__currentLoopData = $data['skill_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$skills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="font-size: 12px;line-height: 16px;margin: 0px;padding:0px;float: left;padding-bottom: 5px;">
             <?php echo e($skills); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <div class="links" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Links</h4>
          <ul class="language-list" style="margin: 0px;padding: 0px;padding-left: 20px;">
            <?php $__currentLoopData = $data['link_link']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 10px;color:#363636;display: inline-block;">
              <a style="color:#363636;" href="#"><?php echo e($links); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <div class="language" style="width: 100%;display: inline-block;padding: 20px 10px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Language</h4>
          <ul class="language-list" style="padding: 0px;padding-left: 20px;margin: 0px;">
            <?php $__currentLoopData = $data['lang_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><?php echo e($language); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
     
        <?php if(isset($data['cur_title'])): ?>
        <div class="courses" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Courses</h4>
          <?php $__currentLoopData = $data['cur_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="courses-list" style="margin-bottom: 10px;">
              <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;"><?php echo e($courses); ?> <span style="font-weight: bold;">at <?php echo e($data['cur_institution'][$key]); ?></span> </h3>
               <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['cur_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['cur_end_date'][$key]))); ?></p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <?php if(isset($data['Hobbies'])): ?>
        <div class="hobbies" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 10px;">Hobbies</h4>
            <ul class="hobbies-list" style="margin-bottom: 10px;list-style: none;padding-left: 0px;">
                <?php $__currentLoopData = $data['Hobbies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$Hobbie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="float: left;font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 10px;color:#363636;">
                <?php echo e($Hobbie); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if(isset($data['eca_title'])): ?>
        <div class="Extra-curricular" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Extra-curricular Activities</h4>
            <?php $__currentLoopData = $data['eca_title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$eca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="Extra-list" style="margin-bottom: 10px;">
                <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;"><?php echo e($eca); ?> <span style="font-weight: bold;">at <?php echo e($data['eca_employer'][$key]); ?>,<?php echo e($data['eca_city'][$key]); ?></span> </h3>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;"><?php echo e(date('M Y',strtotime($data['eca_start_date'][$key]))); ?> - <?php echo e(date('M Y',strtotime($data['eca_end_date'][$key]))); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <?php if(isset($data['ref_name'])): ?> 
        <div class="References" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">References</h4>
            <?php $__currentLoopData = $data['ref_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$refrance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="References-list" style="margin-bottom: 10px;">
                <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;"><?php echo e($refrance); ?> from <span style="font-weight: bold;"> <?php echo e($data['ref_company'][$key]); ?></span> </h3>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;"><?php echo e($data['ref_phone'][$key]); ?></p>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;"><?php echo e($data['ref_email'][$key]); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
         </div>
      <div class="footer-section" style="width: 100%;display: inline-block;">
        <div class="footer-left-sec" style="padding: 20px;background: #303030;">
          <p style="color: #E6EBF2;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;"><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Phone: <?php echo e($data['phone']); ?></p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Email: <?php echo e($data['email']); ?></p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Address: <?php echo e($data['address']); ?> <?php echo e($data['city']); ?>, <?php echo e($data['country']); ?>-<?php echo e($data['postal_code']); ?></p>
        </div>
      </div>
    </div>
  </body>
<?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/resume/template3.blade.php ENDPATH**/ ?>