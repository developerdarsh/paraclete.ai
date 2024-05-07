<body style="margin: 0;padding: 0;font-family: 'Montserrat', sans-serif;">
    <div class="shape-left" style="width: 1.4cm; height: 5.9cm; position: absolute;left: 0px; top: 44px;">
      <div style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px;"><img src="{{URL::asset('img/resume/profile-left-shape.png')}}"></div>
    </div> 
    <div class="shape-top" style="width: 24cm; height: 6cm; position: absolute;left: 40px; top: 0px;">
       <div style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px;"><img src="{{URL::asset('img/resume/profile-top-shape.png')}}"></div>
    </div> 
   <div class="shape-top" style="width: 5cm; height: 5cm; position: absolute;left: 254px; top: 0px;">
         <div style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px;"><img src="{{URL::asset('img/resume/shape-trigle.png')}}"></div>
     </div> 
       <div class="shape-top-left" style="width: 6cm; height: 6cm; position: absolute;left: 200px; top: 170px;">
         <div style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px;"><img src="{{URL::asset('img/resume/shape-trigle2.png')}}"></div>
     </div> 
    <div class="auto-container" style="width: 100%;margin-right: auto; margin-left: auto;position: relative;">
        <div class="resume-section" style="width: 100%; display: inline-block;position: relative;padding: 0px 40px 40px;">
            <div class="leftpart" style="width: 30%; float: left;">
                <div style="padding: 0px;"> 
                    <div class="user-image" style="width: 100%; height: 260px;margin: 0px;border: none;overflow: hidden;">
                        @if ($base64URL)
                            <img style="width: 100%; height: 230px;object-fit: cover;position: relative;" src="{{ $base64URL}}" alt="">
                        @else
                            <img style="width: 100%; height: 230px;object-fit: cover;position: relative;" src="{{URL::asset('img/resume/default_img.jpg')}}" alt="">
                        @endif
                    </div>
                    <div style="padding: 0px 10px;">
                    <div class="user-info" style="width: 100%;position: relative;">
                        <h2 style="margin: 0px;font-size: 24px;line-height: 28px;color: #000000;padding-bottom: 15px;">{{ $data['first_name'] }} {{ $data['last_name'] }}</h2>
                        <p style="margin: 0px;font-size: 14px;line-height: 14px;color: #000000;text-transform: uppercase;padding-bottom: 40px;">{{ $data['jobTitleInput']}}</p>
                    </div>
                    <div class="contact-box" style="margin-bottom: 40px;">
                        <h4 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Contact</h4>
                        <div class="number-line">
                            <div style="margin-bottom: 10px;font-size: 15px;">
                              <div style="float: left;width: 10%;margin-right: 10px;font-weight: bold;"> P :</div>
                              <div style="overflow: hidden;margin-left: 30px;"> {{ $data['phone'] }} </div>
                            </div>
                        </div>
                        <div class="email-line">
                             <div style="margin-bottom: 10px;font-size: 15px;">
                              <div style="float: left;width: 10%;margin-right: 10px;font-weight: bold;"> E :</div>
                              <div style="overflow: hidden;margin-left: 30px;"> {{ $data['email']}} </div>
                            </div>
                        </div>
                        <div class="address-line">
                             <div style="margin-bottom: 10px;font-size: 15px;">
                              <div style="float: left;width: 10%;margin-right: 10px;font-weight: bold;"> A :</div>
                              <div style="overflow: hidden;margin-left: 30px;"> {{ $data['address']}} {{ $data['city']}}, {{ $data['country']}}-{{ $data['postal_code']}} </div>
                            </div>
                        </div>
                    </div>
                    <div class="eduction-box" style="margin-bottom: 40px;">
                        <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">eduction</h2>
                        @foreach($data['edu_school'] as $key=>$education)
                            <div class="eduction-line" style="margin-bottom: 10px;">
                                <h4 style="margin: 0px;margin-bottom: 10px;color: #000000;letter-spacing: 0px;font-size: 16px;line-height: 24px;">{{$education}} </h4>
                                   <p style="color: #000000;font-size: 15px;line-height: 20px;font-weight: 500;margin: 0px;margin-bottom: 5px;">{{ date('M Y',strtotime($data['edu_start_date'][$key]))}} - {{ date('M Y',strtotime($data['edu_end_date'][$key]))}}</p>
                                <p style="color: #000000;font-size: 15px;line-height: 20px;font-weight: 500;margin: 0px;margin-bottom: 5px;">{{$data['edu_city'][$key]}}</p>
                            </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
            <div class="rightpart" style="width: 70%;float: right;">
                <div style="padding-top: 60px;padding-left: 40px;"> 
                    <div class="summary-box" style="margin-bottom: 40px;">
                        <h4 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">summary</h4>
                        <p style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin-bottom: 10px;">{{ strip_tags($data['professional_summary']) }}</p>
                    </div> 
                    @foreach($data['emp_job_title'] as $key=>$job_title)
                        <div class="Experience-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">experience</h2>
                            <h4 style="margin: 0px;margin-bottom: 5px;color: #000000;letter-spacing: 2px;font-size: 16px;line-height: 24px;">{{ $data['emp_employer'][$key] }} </h4>
                            <p style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;"><em> {{ $job_title}} / {{ date('M Y',strtotime($data['emp_start_date'][$key]))}} - {{date('M Y',strtotime($data['emp_end_date'][$key]))}}</em></p>
                            <ul style="padding-left: 0px;">
                                {{ $data['emp_description'][$key]}}
                            </ul>
                        </div>
                    @endforeach
                    <div class="skills-box" style="margin-bottom: 40px;">
                        <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">skills</h2>
                        <ul style="padding-left: 0px;list-style: none;">
                            @foreach($data['skill_title'] as $key=>$skills)
                                <li style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;">{{ $skills}}
                                </li>
                            @endforeach
                        </ul>
                    </div> 
                    @if(isset($data['lang_name'] ))  
                        <div class="languages-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Languages</h2>
                            <ul style="padding-left: 15px;">
                                @foreach($data['lang_name'] as $language)
                                    <li style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;float: left;">{{ $language }}
                                    </li>
                                @endforeach
                            </ul>
                        </div> 
                    @endif
                    @if(isset($data['cur_title']))
                        <div class="Course-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Course</h2>
                            @foreach($data['cur_title'] as $key=>$courses)
                                <div class="course-name"> 
                                    <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $courses }} <span style="font-weight: bold;"> At {{ $data['cur_institution'][$key]}}</span> </h6>
                                    <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;">{{ date('M Y',strtotime($data['cur_start_date'][$key]))}} - {{ date('M Y',strtotime($data['cur_end_date'][$key]))}}</p>
                                </div>
                            @endforeach
                        </div> 
                    @endif
                    @if(isset($data['Hobbies']))
                        <div class="Hobbies-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Hobbies</h2>
                            <ul style="display: inline-block;list-style: none;padding: 0px;">
                                @foreach($data['Hobbies'] as $key=>$Hobbie)
                                    <li style="color: #000000;font-size: 15px;line-height: 22px;font-weight: 500;margin: 0px;margin-bottom: 10px;display: inline;">{{ $Hobbie }}
                                    </li>
                                @endforeach
                            </ul>
                        </div> 
                    @endif
                    @if(isset($data['eca_title']))
                        <div class="Extra-curricular-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">Extra-curricular Activities</h2>
                            @foreach($data['eca_title'] as $key=>$eca)
                                <div class="curricular-name"> 
                                    <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $eca }} <span style="font-weight: bold;"> at  {{ $data['eca_employer'][$key] }},{{ $data['eca_city'][$key]}}</span> </h6>
                                    <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;">{{ date('M Y',strtotime($data['eca_start_date'][$key]))}} - {{ date('M Y',strtotime($data['eca_end_date'][$key]))}}</p>
                                </div>
                            @endforeach
                        </div> 
                    @endif
                    @if(isset($data['ref_name']))
                        <div class="References-box" style="margin-bottom: 40px;">
                            <h2 style="margin: 0px;margin-bottom: 20px;border-top: 1px solid #000000;border-bottom: 1px solid #000000;padding: 10px 0px;text-transform: uppercase;letter-spacing: 2px;font-size: 20px;line-height: 24px;">References</h2>
                            @foreach($data['ref_name'] as $key=>$refrance)
                                <div class="curricular-name"> 
                                    <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $refrance }}<span style="font-weight: bold;"> from  {{ $data['ref_company'][$key] }}</span> </h6>
                                    <ul class="Hobbies-list" style="padding: 0px;margin: 0px;list-style: none;">
                                        <li><p style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 5px;">{{ $data['ref_phone'][$key] }}</p></li>
                                        <li><p style="font-size: 14px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 5px;">{{ $data['ref_email'][$key] }};</p></li>
                                    </ul>   
                                </div>
                            @endforeach
                        </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>
    
   <div class="shape-bottom" style="width: 14cm; height: 2cm; position: absolute;right: -390px; bottom: 0px;">
      <div style="width: 100%; height: 100%; position: absolute; right: 0px; bottom: 0px;"><img src="data:image/png;base64,{{ base64_encode(file_get_contents( "https://staging.paraclete.ai/img/users/shape-vector.png" )) }}"></div>
    </div> 
    

</body>
