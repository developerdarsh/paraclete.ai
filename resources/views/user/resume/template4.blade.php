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
                   <h1 style="margin: 0px;font-size: 30px;line-height: 36px;font-weight: bold;padding-bottom: 10px;text-transform: uppercase;letter-spacing: 2px;color: #000000;">{{ $data['first_name'] }} {{ $data['last_name'] }}</h1>
                   <h4 style="margin: 0px;color: #a6761b;font-size: 16px;line-height: 24px;text-transform: uppercase;font-weight: 600;letter-spacing: 2px">{{ $data['jobTitleInput'] }}</h4>
              </div>
              <div class="profile-image" style="width: 20%;float: left;text-align: center;">
               <div style="width: 120px;height: 180px;">
                @if ($base64URL)
                    <img src="{{ $base64URL }}" style="border-radius: 100em;width: 120px;height: 120px;object-fit: cover;object-position: center;padding: 6px;background: #f4f4f4;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                @else
                    <img src="{{ URL::asset('img/resume/default_img.jpg') }}" style="border-radius: 100em;width: 120px;height: 120px;object-fit: cover;object-position: center;border-radius: 100%;padding: 6px;background: #f4f4f4;box-shadow: 2px 3px 38px 0px rgba(3, 3, 3, 0.23);">
                @endif 
                </div>
              </div>
              <div class="contact-info" style="width: 25%;float: right;text-align: right;padding-top: 10px;padding-right: 25px;">
                <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                      <div style="float: left;width: 90%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;">{{ $data['address'] }} {{ $data['city'] }}, {{ $data['country'] }}-{{ $data['postal_code'] }}</p></div> 
                      <div style="overflow: hidden;margin-top: -12px;"><img src="{{ URL::asset('img/resume/location.png') }}" alt="addresh" style="width: 12px;height: 12px;margin-left: 5px;"></div>
                  </div> 
                  <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                    <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;">{{ $data['email'] }} <img src="{{ URL::asset('img/resume/email.png') }}" alt="email" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
                   <!-- <div style="float: right;width: 10%;"></div> -->
                </div>
                <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                  <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;">{{ $data['linkedIn'] }} <img src="{{ URL::asset('img/resume/world.png') }}" alt="web" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
              </div>
              <div style="padding-bottom: 10px;width: 100%;display: inline-block;">
                <div style="float: left;width: 100%;"><p style="font-size: 12px;line-height: 14px;margin: 0px;">{{ $data['phone'] }}<img src="{{ URL::asset('img/resume/telephone-call.png') }}" alt="phone" style="width: 12px;height: 12px;margin-left: 5px;"></p></div> 
               
            </div>

              </div>
          </div>
          <div class="body-section" style="width: 100%;position: relative;display: inline-block;">
              <div class="left-part" style="width: 62%; float: left;">
                  <div class="summury-text" style="padding: 0px 20px 0px;">
                      <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                          <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Profile</h4>
                      </div>
                      <p style="font-size: 14px;line-height: 20px;margin: 0px;padding-bottom: 10px;padding-left: 15px;">{{ strip_tags($data['professional_summary']) }}</p>
                  </div>
                  <div class="experiences" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;"> 
                        <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Experiences</h4>
                    </div>
                    <div class="experiences-box">
                       <div style="padding-bottom: 20px;padding-left: 15px;">
                            @foreach($data['emp_job_title'] as $key=>$job_title)
                                <h4 style="margin: 0px;float: left;font-size: 14px;line-height: 22px;padding-bottom: 10px;">{{ date('M Y',strtotime($data['emp_start_date'][$key])) }} - {{date('M Y',strtotime($data['emp_end_date'][$key]))}} </h4>
                                <p style="margin: 0px;overflow: hidden;font-size: 14px;line-height: 22px;padding-left: 15px;">{{ $data['emp_employer'][$key] }}<br>{{ $job_title }}</p>
                                <ul style="padding-left: 20px;margin: 0px;">
                                    <li style="font-size: 14px;line-height: 18px;margin: 0px;margin-bottom: 10px;">{{ $data['emp_description'][$key] }}</li>
                                </ul>
                            @endforeach   
                      </div>
                    </div>
                    </div>
                    @if(isset($data['cur_title']))
                     <div class="course" style="padding: 20px 20px 0px;">
                        <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 25px;"> 
                            <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Course</h4>
                        </div>
                        @foreach($data['cur_title'] as $key=>$courses)
                        <div class="course-name" style="padding-left: 15px;"> 
                            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $courses }} <span style="font-weight: bold;"> At {{ $data['cur_institution'][$key]}}</span> </h6>
                            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;">{{ date('M Y',strtotime($data['cur_start_date'][$key]))}} - {{ date('M Y',strtotime($data['cur_end_date'][$key]))}}</p>
                        </div>
                        @endforeach
                    </div>
                   @endif
                   @if(isset($data['Hobbies']))
                 <div class="hobbie" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Hobbies</h4>
                    </div>
                     <ul style="margin: 0px;padding-left: 20px;">
                      @foreach($data['Hobbies'] as $key=>$Hobbie)
                        <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;"> <span style="padding-left: 10px;font-size: 17px;line-height: 17px;">{{ $Hobbie }}</span></li>           
                      @endforeach
                    </ul>
                   </div>
                   @endif
                  
                @if(isset($data['eca_title']))
                  <div class="ExtraActivity" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Extra-curricular Activities</h4>
                    </div>
                  </div>
                  @foreach($data['eca_title'] as $key=>$eca)
                   <div class="curricular-name" style="margin: 0px;padding-left: 30px;"> 
                      <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $eca }}<span style="font-weight: bold;"> at {{ $data['eca_employer'][$key] }},{{ $data['eca_city'][$key]}}</span> </h6>
                      <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;">{{ date('M Y',strtotime($data['eca_start_date'][$key]))}} - {{ date('M Y',strtotime($data['eca_end_date'][$key]))}}</p>
                  </div>
                  @endforeach
                 @endif 
            </div>
            
              <div class="right-part" style="width: 37%; float: right;">
                  <div class="eduction-text" style="padding: 0px 20px 0px;">
                      <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                          <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Eduction</h4>
                      </div>
                      @foreach($data['edu_school'] as $key=>$education)
                      <div class="eduction-list" style="padding-left: 15px;"> 
                         <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 16px;line-height: 24px;font-weight: bold;">{{$education}}</h4>
                         <p style="font-size: 14px;line-height: 22px;margin: 0px;padding-bottom: 10px;">{{ date('M Y',strtotime($data['edu_start_date'][$key]))}} - {{ date('M Y',strtotime($data['edu_end_date'][$key])) }} | {{$data['edu_degree'][$key]}} </p>
                      </div>
                      @endforeach
                  </div>
                  <div class="skills" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Skills</h4>
                    </div>
                    <ul style="margin: 0px;padding-left: 30px;">
                        @foreach($data['skill_title'] as $key=>$skills)
                            <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;">{{ $skills }}</li>
                        @endforeach    
                    </ul>
                  </div>
                  <div class="languages" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Languages</h4>
                    </div>
                    <ul style="list-style: none; margin: 0px;padding-left: 20px;">
                        @foreach($data['lang_name'] as $language)
                            <li style="font-size: 14px;line-height: 22px;margin: 0px;margin-bottom: 10px;"> <span style="padding-left: 10px;font-size: 14px;line-height: 14px;">{{ $language }}</span></li>
                        @endforeach                        
                    </ul>
                  </div>
                  @if(isset($data['ref_name']))
                  <div class="eduction" style="padding: 20px 20px 0px;">
                    <div style="border-bottom: 1px solid #3d3d3d;padding: 10px 0px;margin-bottom: 15px;"> 
                      <h4 style="margin: 0px;padding-left: 15px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">References</h4>
                    </div>
                    @foreach($data['ref_name'] as $key=>$refrance)
                    <div class="eduction-list" style="padding-left: 15px;"> 
                      <h4 style="margin: 0px;margin-bottom: 5px;letter-spacing: 2px;font-size: 18px;line-height: 24px;font-weight: bold;">{{ $refrance }}</h4>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_company'][$key] }}</p>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_email'][$key] }}</p>
                      <p style="font-size: 14px;line-height: 18px;margin: 0px;padding-bottom: 5px;">{{ $data['ref_phone'][$key] }}</p>
                   </div>
                   @endforeach
                  </div>
                  @endif
              </div>
          </div>
      </div>
  </body>
</html>