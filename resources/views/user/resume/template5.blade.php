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
      <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
   </head>
   <body style="margin: 0;padding: 0;font-family: 'Mukta', sans-serif;color: #3d3d3d;">
      <div class="auto-container" style="width: 100%;max-width: 840px;margin-right: auto; margin-left: auto;position: relative;">
         <div class="header-section" style="width: 100%; display: inline-block;position: relative;padding: 20px 10px;">
            <div class="profile-details" style="width: 70%;float: left;">
               <div style="padding: 20px 15px;">
                  <h1 style="margin: 0px;font-size: 42px;line-height: 54px;font-weight: bold;padding-bottom: 10px;text-transform: uppercase;letter-spacing: 2px;color: #000000;font-family: 'Arimo', sans-serif;">{{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
                  <div style="background: #2b2b2b;padding: 10px 10px;width: 300px;">
                     <h4 style="margin: 0px;color: #ffffff;font-size: 20px;line-height: 26px;text-transform: uppercase;font-weight: 300;letter-spacing: 2px;"><span>{{ $data['jobTitleInput'] }}</span></h4>
                  </div>
               </div>
            </div>
            <div class="profile-image" style="width: 25%;float: left;text-align: center;">
                 @if ($base64URL)
                    <img src="{{ $base64URL }}" style="width: 140px;height: 140px;object-fit: cover;object-position: center;border-radius: 100%;padding: 7px;background: #2b2b2b;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                @else
                    <img src="{{ URL::asset('img/resume/man-3803551_1280.jpg') }}" style="width: 140px;height: 140px;object-fit: cover;object-position: center;border-radius: 100%;padding: 7px;background: #2b2b2b;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                @endif 
            </div>
         </div>
         <div class="body-section" style="width: 100%;position: relative;display: inline-block;border-top: 1px solid #222222;">
            <div class="left-part" style="width: 60%; float: left;">
              <div style="padding: 10px;">
               <div class="summury-text" style="padding: 10px 20px 0px;">
                  <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Profile</h4>
                  </div>
                  <p style="font-size: 14px;line-height: 24px;margin: 0px;padding-bottom: 10px;">{{ strip_tags($data['professional_summary']) }}
                  </p>
               </div>
               <div class="experiences" style="padding: 20px 20px 0px;">
                  <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Experiences</h4>
                  </div>
                  <div class="experiences-box">
                    @foreach($data['emp_job_title'] as $key=>$job_title)
                     <div style="padding-bottom: 20px;">
                        <h4 style="margin: 0px;margin-bottom: 5px;font-size: 16px;line-height: 24px;text-transform: uppercase;">{{ $job_title }}</h4>
                        <p style="margin: 0px;font-size: 14px;line-height: 20px;">{{ $data['emp_employer'][$key] }}</p>
                        <p style="margin: 0px;font-size: 14px;line-height: 20px;">{{ date('M Y',strtotime($data['emp_start_date'][$key])) }} - {{date('M Y',strtotime($data['emp_end_date'][$key]))}}</p>
                        <ul style="padding-left: 20px;">
                           <li style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;">{{ $data['emp_description'][$key] }}
                           </li>
                        </ul>
                     </div>
                    @endforeach
                  </div>
               </div>

               <div class="languages" style="padding: 0px 20px 0px;">
                <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                   <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Languages</h4>
                </div>
                <ul style="list-style: none; margin: 0px;padding-left: 0px;">
                @foreach($data['lang_name'] as $language)
                   <li style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;"> <span style="padding-left: 10px;font-size: 14px;line-height: 20px;">{{ $language }}</span></li>
                @endforeach
                </ul>
             </div>
             <div class="eduction-text" style="padding: 0px 20px 0px;">
                  <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Eduction</h4>
                  </div>
                  @foreach($data['edu_school'] as $key=>$education)
                  <div class="eduction-list" style="padding-bottom: 10px;">
                     <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 16px;line-height: 24px;font-weight: bold;text-transform: uppercase;">{{$education}}</h4>
                     <p style="font-size: 14px;line-height: 24px;margin: 0px;padding-bottom: 0px;">{{$data['edu_degree'][$key]}} </p>
                     <p style="font-size: 14px;line-height: 24px;margin: 0px;padding-bottom: 0px;">{{ date('M Y',strtotime($data['edu_start_date'][$key]))}} - {{ date('M Y',strtotime($data['edu_end_date'][$key])) }}</p>
                  </div>
                   @endforeach
               </div>
                @if(isset($data['eca_title']))
                <div class="Extra-curricular" style="width: 100%;display: inline-block;padding: 10px 20px 0px;">
                 <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Extra-curricular Activities</h4>
                  </div>
                    @foreach($data['eca_title'] as $key=>$eca)
                    <div class="Extra-list" style="margin-bottom: 10px;">
                        <h3 style="font-size: 16px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;">{{ $eca }} <span style="font-weight: bold;">at {{ $data['eca_employer'][$key] }},{{ $data['eca_city'][$key]}}</span> </h3>
                        <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ date('M Y',strtotime($data['eca_start_date'][$key]))}} - {{ date('M Y',strtotime($data['eca_end_date'][$key]))}}</p>
                    </div>
                    @endforeach
                </div>
                @endif
               </div>
            </div>
            <div class="right-part" style="width: 39%; float: right;">
              <div style="padding-right: 10px;">
               <div class="skills" style="padding: 20px 20px 0px;">
                  <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Skills</h4>
                  </div>
                  <ul style="margin: 0px;padding-left: 20px;">
                    @foreach($data['skill_title'] as $key=>$skills)
                     <li style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;">{{ $skills }}
                     </li>
                    @endforeach 
                  </ul>
               </div>
               <div class="links" style="padding: 0px 20px 0px;">
                <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                   <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Links</h4>
                </div>
                  <ul class="language-list" style="padding: 0px;padding-left: 20px;margin: 0px;">
                     <li style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><a href="#" style="color: #000000;">www.facebook.com</a></li>
                     <li style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;"><a href="#" style="color: #000000;">www.facebook.com</a></li>
                  </ul>
                </div>
                @if(isset($data['cur_title']))
                <div class="courses" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
                  <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Courses</h4>
                  </div>
                    @foreach($data['cur_title'] as $key=>$courses)
                    <div class="courses-list" style="margin-bottom: 10px;">
                        <h3 style="font-size: 16px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;">{{ $courses }} <span style="font-weight: bold;">at {{ $data['cur_institution'][$key]}}</span> </h3>
                        <p style="color: #222222;font-size: 14px;line-height: 20px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ date('M Y',strtotime($data['cur_start_date'][$key]))}} - {{ date('M Y',strtotime($data['cur_end_date'][$key]))}}</p>
                    </div>
                    @endforeach
                </div>
                @endif
                @if(isset($data['Hobbies']))
                <div class="hobbies" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
                   <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;">
                     <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">Hobbies</h4>
                  </div>
                    <ul class="hobbies-list" style="margin-bottom: 10px;list-style: none;padding-left: 0px;">
                        @foreach($data['Hobbies'] as $key=>$Hobbie)
                        <li style="float: left;font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 10px;color:#363636;">
                            {{ $Hobbie }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
               
                @if(isset($data['ref_name']))
                <div class="References" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;">
                    <h4 style="margin: 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 32px;">References</h4>
                    </div>
                    @foreach($data['ref_name'] as $key=>$refrance)
                    <div class="eduction-list">
                       <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 20px;line-height: 24px;font-weight: bold;">{{ $refrance }}</h4>
                       <p style="font-size: 14px;line-height: 20px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_company'][$key] }}</p>
                       <p style="font-size: 14px;line-height: 20px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_email'][$key] }}</p>
                       <p style="font-size: 14px;line-height: 20px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_phone'][$key] }}</p>
                    </div>
                    @endforeach
                </div>
                @endif
                </div>

             <div class="Contact-info" style="margin-top: 20px; padding: 30px 20px 20px;background: #2b2b2b;">
                <div style="padding-bottom: 15px;width: 100%;display: inline-block;">
                  <div style="float: left;width: 10%;margin-right: 10px;">
                      <div style="width: 28px;height: 28px;background: #ffffff;text-align: center;border-radius: 100%;"> 
                         <img src="{{ URL::asset('img/resume/phone-call.svg') }}" alt="call" style="width: 16px;height: 16px;margin-top: 6px;">
                     </div>
                  </div>
                  <div style="overflow: hidden;margin-left: 40px;"><p style="font-size: 14px;line-height: 24px;margin: 0px;color: #ffffff;font-weight: 300;">{{ $data['phone'] }}</p></div>
               </div>
                  <div style="padding-bottom: 15px;width: 100%;display: inline-block;">
                    <div style="float: left;width: 10%;margin-right: 10px;">
                      <div style="width: 28px;height: 28px;background: #ffffff;text-align: center;border-radius: 100%;"> 
                         <img src="{{ URL::asset('img/resume/email.png') }}" alt="email" style="width: 16px;height: 16px;margin-top: 6px;">
                       </div>
                    </div>
                    <div style="overflow: hidden;margin-left: 40px;"><p style="font-size: 14px;line-height: 24px;margin: 0px;color: #ffffff;font-weight: 300;">{{ $data['email'] }} </p></div>
                 </div>
                 <div style="padding-bottom: 15px;width: 100%;display: inline-block;">
                  <div style="float: left;width: 10%;margin-right: 10px;">
                    <div style="width: 28px;height: 28px;background: #ffffff;text-align: center;border-radius: 100%;"> 
                        <img src="{{ URL::asset('img/resume/location.png') }}" alt="addresh" style="width: 16px;height: 16px;margin-top: 6px;">
                     </div>
                  </div>
                  <div style="overflow: hidden;margin-left: 40px;"><p style="font-size: 14px;line-height: 24px;margin: 0px;color: #ffffff;font-weight: 300;">{{ $data['address'] }} {{ $data['city'] }}, {{ $data['country'] }}-{{ $data['postal_code'] }}</p></div>
               </div>
               <div style="padding-bottom: 15px;width: 100%;display: inline-block;">
                <div style="float: left;width: 10%;margin-right: 10px;">
                  <div style="width: 28px;height: 28px;background: #ffffff;text-align: center;border-radius: 100%;"> 
                     <img src="{{ URL::asset('img/resume/world.png') }}" alt="web" style="width: 16px;height: 16px;margin-top: 6px;">
                 </div>
                </div>
                <div style="overflow: hidden;margin-left: 40px;"><p style="font-size: 14px;line-height: 24px;margin: 0px;color: #ffffff;font-weight: 300;">{{ $data['linkedIn'] }}</p></div>
               </div>

               </div>
            </div>
         </div>
      </div>
   </body>
</html>