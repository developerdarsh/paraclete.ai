
  <body style="margin: 0; padding: 0;font-family: 'Poppins', sans-serif;">
    <div class="auto-container" style="width: 100%; max-width: 720px; margin-right: auto; margin-left: auto;">
      <div class="top-header" style="background-color: #363636;">
        <div class="logo" style="padding: 40px;text-align: center;">
          <div style="margin-bottom: 15px">
            @if ($base64URL)
                <img src="{{ $base64URL }}" style="width: 120px;height: 120px;border-radius: 100%;padding: 6px;background: #525252;" />
            @else
                <img src="{{URL::asset('img/resume/default_img.jpg')}}" style="width: 120px;height: 120px;border-radius: 100%;padding: 6px;background: #525252;" />
            @endif
            </div>
            <h2 style="margin: 0px;margin-bottom: 10px;font-size: 24px;line-height: 36px;font-weight: 600;color: #ffffff;">{{ $data['first_name'] }} {{ $data['last_name'] }}</h2>
            <p style="padding: 0px;margin: 0px;color: #ffffff;font-size: 14px;line-height: 16px;text-transform: uppercase;font-weight: 400;">{{ $data['jobTitleInput']}}</p>
        </div>
        <div class="User-Info">
          <ul style="list-style: none;text-align: center;margin: 0px;padding: 10px 0;border-top: 2px solid #525252;">
            <li style="display: inline-block;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
               <span style="font-weight: 600;padding-right: 15px;">Email : </span> {{ $data['email'] }}</a>
            </li>
            <li style="display: inline-block;margin: 6px 0;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
                <span style="font-weight: 600;padding-right: 15px;">Address : </span> {{ $data['address']}} {{ $data['city']}},{{ $data['postal_code']}},{{ $data['country']}}</a>
            </li>
            <li style="display: inline-block;">
              <a href="#" style="color: #ffffff;text-decoration: none;font-size: 14px; line-height: 16px;margin-right: 10px;">
                <span style="font-weight: 600;padding-right: 15px;">Phone : </span> {{ $data['phone'] }} </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="personal-details" style="margin: 0; padding: 20px;">
        <div class="Profile-summury" style="padding: 25px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Summary</h4>
          <p style="font-size: 12px;line-height: 20px;margin: 0px;padding-bottom: 10px;">{{ strip_tags($data['professional_summary']) }}</p>
        </div>
        <div class="Employment-History" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Employment History</h4>
          @foreach($data['emp_job_title'] as $key=>$job_title)
            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{ $job_title }}</h6>
            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 10px;">{{ date('M Y',strtotime($data['emp_start_date'][$key])) }} - {{ date('M Y',strtotime($data['emp_end_date'][$key])) }}</p>
            <ul class="skill-list" style="padding: 0px;padding-left: 20px;padding-bottom: 20px;margin: 0px;">
                <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;">{{ $data['emp_description'][$key] }}</li>
            </ul>
           @endforeach 
        </div>
        <div class="Education" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">
             Education
          </h4>
          @foreach($data['edu_school'] as $key=>$education)
            <h6 style="font-size: 16px;line-height: 18px;margin: 0px;padding-bottom: 10px;font-weight: 500;">{{$data['edu_degree'][$key]}}, {{$education}}</h6>
            <p style="font-size: 12px;line-height: 16px;margin: 0px;padding-bottom: 15px;">{{ date('M Y',strtotime($data['edu_start_date'][$key])) }} - {{ date('M Y',strtotime($data['edu_end_date'][$key])) }}</p>
          @endforeach 
        </div>
        <div class="skill" style="padding: 20px 15px 0px;width: 100%;display: inline-block;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 10px;">Skills</h4>
          <ul style="margin: 0px;padding-left: 15px;">
            @foreach($data['skill_title'] as $key=>$skills)
            <li style="font-size: 12px;line-height: 16px;margin: 0px;padding:0px;float: left;padding-bottom: 5px;">
             {{ $skills }}
            </li>
            @endforeach
          </ul>
        </div>
        <div class="links" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Links</h4>
          <ul class="language-list" style="margin: 0px;padding: 0px;padding-left: 20px;">
            @foreach($data['link_link'] as $links)
            <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 10px;color:#363636;display: inline-block;">
              <a style="color:#363636;" href="#">{{ $links }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="language" style="width: 100%;display: inline-block;padding: 20px 10px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Language</h4>
          <ul class="language-list" style="padding: 0px;padding-left: 20px;margin: 0px;">
            @foreach($data['lang_name'] as $language)
              <li style="font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;">{{ $language }}</li>
            @endforeach
          </ul>
        </div>
     
        @if(isset($data['cur_title']))
        <div class="courses" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
          <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Courses</h4>
          @foreach($data['cur_title'] as $key=>$courses)
          <div class="courses-list" style="margin-bottom: 10px;">
              <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;">{{ $courses }} <span style="font-weight: bold;">at {{ $data['cur_institution'][$key]}}</span> </h3>
               <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ date('M Y',strtotime($data['cur_start_date'][$key]))}} - {{ date('M Y',strtotime($data['cur_end_date'][$key]))}}</p>
          </div>
          @endforeach
        </div>
        @endif
        @if(isset($data['Hobbies']))
        <div class="hobbies" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 10px;">Hobbies</h4>
            <ul class="hobbies-list" style="margin-bottom: 10px;list-style: none;padding-left: 0px;">
                @foreach($data['Hobbies'] as $key=>$Hobbie)
                <li style="float: left;font-size: 12px;line-height: 20px;margin: 0px;margin-bottom: 10px;padding-right: 10px;color:#363636;">
                {{ $Hobbie }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(isset($data['eca_title']))
        <div class="Extra-curricular" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">Extra-curricular Activities</h4>
            @foreach($data['eca_title'] as $key=>$eca)
            <div class="Extra-list" style="margin-bottom: 10px;">
                <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;">{{ $eca }} <span style="font-weight: bold;">at {{ $data['eca_employer'][$key] }},{{ $data['eca_city'][$key]}}</span> </h3>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ date('M Y',strtotime($data['eca_start_date'][$key]))}} - {{ date('M Y',strtotime($data['eca_end_date'][$key]))}}</p>
            </div>
            @endforeach
        </div>
        @endif
        @if(isset($data['ref_name'])) 
        <div class="References" style="width: 100%;display: inline-block;padding: 20px 15px 0px;">
            <h4 style="font-size: 24px;line-height: 28px;margin: 0px;padding-bottom: 15px;">References</h4>
            @foreach($data['ref_name'] as $key=>$refrance)
            <div class="References-list" style="margin-bottom: 10px;">
                <h3 style="font-size: 18px;line-height: 24px;margin: 0px;padding-bottom: 10px;font-weight: 400;">{{ $refrance }} from <span style="font-weight: bold;"> {{ $data['ref_company'][$key] }}</span> </h3>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ $data['ref_phone'][$key] }}</p>
                <p style="color: #222222;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ $data['ref_email'][$key] }}</p>
            </div>
            @endforeach
        </div>
        @endif
         </div>
      <div class="footer-section" style="width: 100%;display: inline-block;">
        <div class="footer-left-sec" style="padding: 20px;background: #303030;">
          <p style="color: #E6EBF2;font-size: 14px;line-height: 16px;margin: 0;font-weight: 400;padding-bottom: 10px;">{{ $data['first_name'] }} {{ $data['last_name'] }}</p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Phone: {{ $data['phone'] }}</p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Email: {{ $data['email'] }}</p>
          <p style="color: #E6EBF2;font-size: 12px;line-height: 14px;margin: 0;padding-bottom: 10px;font-weight: 300;">Address: {{ $data['address'] }} {{ $data['city'] }}, {{ $data['country'] }}-{{ $data['postal_code'] }}</p>
        </div>
      </div>
    </div>
  </body>
