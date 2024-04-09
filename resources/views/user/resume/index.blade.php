@extends('layouts.app')
@section('css')
	<link href="{{URL::asset('plugins/richtext/richtext.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('css/rte_theme_default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
	<style>
        .skill-levels {
            display: flex;
            background: rgb(239, 242, 249);
            height: 48px;
            gap: 4px;
        }

        .skill-level {
            flex: 1;
            height: 48px;
            border-radius: 4px;
            position: relative;
        }

        .skill-level input[type="radio"] {
            display: none;
        }

        .skill-level label {
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 48px; /* Center text vertically */
            cursor: pointer;
            border-radius: 4px;
        }

        .skill-level:hover {
            background-color: rgba(255, 255, 255, 0.5); /* Lighter shade on hover */
        }

        .skill-level input[type="radio"]:checked + label {
            background-color: inherit;
            color: #fff;
        }

        .skill-level:not(:checked) {
            background-color: inherit;
        }

        .skill-level.novice:hover {
            background-color: #ff5b6d;
        }

        .skill-level.beginner:hover {
            background-color: #f68559;
        }

        .skill-level.intermediate:hover {
            background-color: #f9ba44;
        }

        .skill-level.advanced:hover {
            background-color: #48ba75;
        }

        .skill-level.expert:hover {
            background-color: #bec2fe;
        }
    </style>
@endsection
@section('content')
<!-- header start -->
 <header class="header-1">
      <div class="container">
           <div class="sec-title text-center mb-3">
                 <h2>Untitled</h2>
                 <a href="#"><img src="{{URL::asset('img/flag.png')}}" alt="" /> English</a>
           </div>
           <div class="progress-section"> 
                <h4 class="dsewr"><span class="fa-count">33%</span>Resume score</h4>
                <div class="progress">
                    <div class="progress-bar" style="width:33%">
                    </div>
                </div>
            </div>
      </div>
 </header>
<!-- header end -->

<!-- Personal Details section start -->
<section class="PersonalDetails">
    <div class="container">
        <div class="sec-title">
            <h2>Personal Details</h2>
        </div>
        <form class="resume-form" id="resumeForm" action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-lg-6">
                   <div class="form-group mb-4">
                        <label class="form-label">Wanted Job Title <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top" class="ms-2" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M12 24C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-1.5c5.799 0 10.5-4.701 10.5-10.5S17.799 1.5 12 1.5 1.5 6.201 1.5 12 6.201 22.5 12 22.5zm3.69-13.47c0 2.73-2.827 2.73-2.827 5.558H10.62c0-3.608 2.73-3.608 2.73-5.363 0-.877-.585-1.462-1.56-1.462-.877 0-1.56.682-1.56 1.852H7.89c.098-2.438 1.657-3.998 3.9-3.998 2.438 0 3.9 1.463 3.9 3.413zm-5.167 7.8a1.29 1.29 0 0 1 1.267-1.267 1.29 1.29 0 0 1 1.268 1.267 1.29 1.29 0 0 1-1.268 1.268 1.29 1.29 0 0 1-1.267-1.268z"></path></svg></label>
                        <input type="text" class="form-control" id="jobTitleInput" name="jobTitleInput" placeholder="e.g. Teacher" />
                        <div id="jobTitleSuggestions"></div>
                    </div>
                </div>         
                 <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Upload Photo</label>
                        <input type="file" class="form-control" name="photo" required placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" placeholder="" />
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Linkedin</label>
                        <input type="text" class="form-control" name="linkedIn" placeholder="" />
                    </div>
                </div>
				 <div class="col-lg-12 position-relative">
                    <div class="form-group mb-4"> 
                         <h4 class="mb-2 d-lg-flex justify-content-lg-between">
                            <strong>Professional Summary</strong> 
                            <span id="pre-written">
                                <strong>Pre-written phrases </strong> 
                                <span class="plus-minus ms-2"><i class="fa-solid fa-plus"></i></span>
                            </span>
                         </h4>
                         <label class="form-label">Write 2-4 short & energetic sentences to interest the reader! Mention your role, experience & most importantly - your biggest achievements, best qualities and skills.
                        </label>
                        <textarea name="professional_summary" id="div_editor1" class="div_editor1"></textarea>
                    </div>

                    <div class="SuggestionPanel" id="suggestionPanel">
                        <div class="panel-head">
                            <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" class="sc-gzzlyW cDqiJK"><path d="M11.5,15.5 C13.709139,15.5 15.5,13.709139 15.5,11.5 C15.5,9.290861 13.709139,7.5 11.5,7.5 C9.290861,7.5 7.5,9.290861 7.5,11.5 C7.5,13.709139 9.290861,15.5 11.5,15.5 Z M16.4027819,14.9595737 L18.6821579,17.1305862 L17.2679443,18.5447998 L14.9935823,16.3785629 C14.0096341,17.084429 12.803348,17.5 11.5,17.5 C8.1862915,17.5 5.5,14.8137085 5.5,11.5 C5.5,8.1862915 8.1862915,5.5 11.5,5.5 C14.8137085,5.5 17.5,8.1862915 17.5,11.5 C17.5,12.7883707 17.093925,13.9818975 16.4027819,14.9595737 Z"></path></svg>
                            <input name="professional_summary1" placeholder="Filter phrases by keyword and job title" class="sc-cNizys evLKWD" value="">

                            <a href="javascript:void(0)" id="closeButton" class="close"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M11.987107,10.5728934 L16.2800002,6.28000021 L17.6942138,7.69421377 L13.4013206,11.987107 L17.6942138,16.2800002 L16.2800002,17.6942138 L11.987107,13.4013206 L7.69421377,17.6942138 L6.28000021,16.2800002 L10.5728934,11.987107 L6.28000021,7.69421377 L7.69421377,6.28000021 L11.987107,10.5728934 Z"></path></svg>
                            </a>
                        </div>

                        <div class="panel-body">
                            <div class="most-popular p-2">
                              <p><svg class="me-2" width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M5 12.5H15V14H5V12.5Z M5 11L4 7L8 8L10 4L12 8L16 7L15 11H5Z"></path></svg>Most popular</p>
                            </div>

                            <div class="tm-select-content-sec">
                                 <div class="tm-svg">
                                    <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" class="sc-lcZnTs jEHKyM"><path d="M7.14236 10.8333l3.42074 3.1357-1.12618 1.2286-5-4.5833c-.36031-.3303-.36031-.89832 0-1.2286l5-4.58333 1.12618 1.22859-3.42074 3.1357 8.69104-.00002v1.66666H7.14236z"></path></svg>
                                 </div>   
                                 <div class="tm-content">
                                    <a href="javascript:void(0)">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam incidunt cum consectetur molestias, ipsum corporis. Esse doloremque odit repellat est voluptatum sunt corporis alias ratione blanditiis error nobis, ducimus facilis?</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- Employment History Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Employment History</strong></h4>
                        <p class="mb-4">Show your relevant experience (last 10 years). Use bullet points to note your achievements, if possible - use numbers/facts (Achieved X, measured by Y, by doing Z).</p>
                        <div class="work-experiences" id="workExperiences"> 
                            <div class="accordion mb-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Job title</label>
                                                        <input type="text" class="form-control" name="emp_job_title[]" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Employer</label>
                                                        <input type="text" class="form-control" name="emp_employer[]" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Start & End Date</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="date" name="emp_start_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="date" name="emp_end_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">City</label>
                                                        <input type="text" name="emp_city[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="5" name="emp_description[]" class="form-control" placeholder="Message here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addEmploymentForm()"><i class="fa-solid fa-plus"></i> Add one more employment</a>
                        </div>
                    </div>
                </div>
                <!-- Employment History End -->
                <!-- Education Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Education</strong></h4>
                        <p class="mb-4">A varied education on your resume sums up the value that your learnings and background will bring to the job.</p>
                        <div class="work-experiences" id="Education"> 
                            <div class="accordion mb-4" id="educationAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEducation">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducation" aria-expanded="true" aria-controls="collapseEducation">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseEducation" class="accordion-collapse collapse show" aria-labelledby="headingEducation" data-bs-parent="#educationAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">School</label>
                                                        <input type="text" name="edu_school[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Degree</label>
                                                        <input type="text" name="edu_degree[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Start & End Date</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="date" name="edu_start_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="date" name="edu_end_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">City</label>
                                                        <input type="text" name="edu_city[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="5" name="edu_description[]" class="form-control" placeholder="Message here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addEducationForm()"><i class="fa-solid fa-plus"></i> Add one more education</a>
                        </div>
                    </div>
                </div>
                <!-- Education End -->
                <!-- Websites & Social Links Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Websites & Social Links</strong></h4>
                        <p class="mb-4">You can add links to websites you want hiring managers to see! Perhaps It will be a link to your portfolio, LinkedIn profile, or personal website.</p>
                        <div class="work-experiences" id="WebsitesLink"> 
                            <div class="accordion mb-4" id="websitesAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWebsites" aria-expanded="true" aria-controls="collapseWebsites">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseWebsites" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#websitesAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Label</label>
                                                        <input type="text" name="link_label[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Link</label>
                                                        <input type="url" name="link_link[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addWebsitesLink()"><i class="fa-solid fa-plus"></i> Add one more link</a>
                        </div>
                    </div>
                </div>
                <!-- Websites & Social Links End -->

                <!-- Skills Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Skills</strong></h4>
                        <p class="mb-2">Choose 5 important skills that show you fit the position. Make sure they match the key skills mentioned in the job listing (especially when applying via an online system).</p>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Don't show experience level</label>
                        </div>
                        <div class="skill-list">
                            <ul class="list-inline"></ul>
                        </div>

                        <div class="work-experiences" id="Addskill"> 
                            <div class="accordion mb-4" id="skillsAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSkills" aria-expanded="true" aria-controls="collapseSkills">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseSkills" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#skillsAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Skill</label>
                                                        <input type="text" name="skill_title[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Skill Level</label>
                                                        <div class="skill-levels">
                                                           <div class="skill-level novice" data-color="#ff5b6d">
                                                                <input type="radio" id="novice_0" name="skill_level_0" value="novice">
                                                                <label for="novice_0" class="skill-label">Novice</label>
                                                            </div>
                                                            <div class="skill-level beginner" data-color="#f68559">
                                                                <input type="radio" id="beginner_0" name="skill_level_0" value="beginner">
                                                                <label for="beginner_0" class="skill-label">Beginner</label>
                                                            </div>
                                                            <div class="skill-level intermediate" data-color="#f9ba44">
                                                                <input type="radio" id="intermediate_0" name="skill_level_0" value="intermediate">
                                                                <label for="intermediate_0" class="skill-label">Intermediate</label>
                                                            </div>
                                                            <div class="skill-level advanced" data-color="#48ba75">
                                                                <input type="radio" id="advanced_0" name="skill_level_0" value="advanced">
                                                                <label for="advanced_0" class="skill-label">Advanced</label>
                                                            </div>
                                                            <div class="skill-level expert" data-color="#bec2fe">
                                                                <input type="radio" id="expert_0" name="skill_level_0" value="expert">
                                                                <label for="expert_0" class="skill-label">Expert</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addSkillForm()"><i class="fa-solid fa-plus"></i> Add one more skill</a>
                        </div>
                    </div>
                </div>

                <!-- Skills End -->

                 <!-- Languages Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-4"><strong>Languages</strong></h4>
                        <div class="work-experiences" id="AddLanguages"> 
                            <div class="accordion mb-4" id="languagesAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingLanguages">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLanguages" aria-expanded="true" aria-controls="collapseLanguages">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseLanguages" class="accordion-collapse collapse show" aria-labelledby="headingLanguages" data-bs-parent="#languagesAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Languages</label>
                                                        <input type="text" name="lang_name[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Level</label>
                                                        <select class="form-select form-control" name="lang_level[]" aria-label="Language Level">
                                                            <option selected>Select Level</option>
                                                            <option value="1">Native speaker</option>
                                                            <option value="2">Highly proficient</option>
                                                            <option value="3">Very Good Command</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addLanguageForm()"><i class="fa-solid fa-plus"></i> Add one more Language</a>
                        </div>
                    </div>
                </div>
                <!-- Languages End -->
                <div class="row" id="customSections">
                    <!-- Existing custom sections will be dynamically added here -->
                </div>
                <!-- Add Section Start -->
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-4"><strong>Add Section</strong></h4>
                        <div class="Add-custom-sec"> 
                            <div class="row">
                                <!-- <div class="col-lg-6 col-md-6">
                                    <a href="#" class="custom-box">
                                        <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m8 24h24v10h-24z" fill="#cce8ff"/><rect height="26" rx="2" stroke="#2196f3" stroke-width="2" width="26" x="7" y="7"/><path d="m10 15h20v2h-20z" fill="#2196f3"/><path d="m10 24h20v2h-20z" fill="#2196f3"/><g fill="#fff" stroke="#2196f3" stroke-width="2"><rect height="6" rx="3" width="6" x="20" y="13"/><rect height="6" rx="3" width="6" x="14" y="22"/></g></g></svg>
                                        <span class="ms-1">Custom Section</span> 
                                    </a>
                                </div> -->
                                <div class="col-lg-6 col-md-6">
                                    <a href="#" class="custom-box" data-section="1">
                                    <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m15 32h3v4h-3z" fill="#cce8ff"/><circle cx="16.5" cy="28.5" fill="#cce8ff" r="2.5"/><path d="m20 31.3286672v1.6713328h11v-19h-6c-.5522847 0-1-.4477153-1-1v-7h-15v27h4v-1.6713328c-.6253999-.7728631-1-1.7570189-1-2.8286672 0-2.4852814 2.0147186-4.5 4.5-4.5s4.5 2.0147186 4.5 4.5c0 1.0716483-.3746001 2.0558041-1 2.8286672zm-2 1.4152742c-.4691684.1658273-.9740469.2560586-1.5.2560586s-1.0308316-.0902313-1.5-.2560586v2.7790256l1.1286093-.4514437c.2384111-.0953644.5043703-.0953644.7427814 0l1.1286093.4514437zm-5 2.2560586h-4.5c-.82842712 0-1.5-.6715729-1.5-1.5v-28c0-.82842712.67157288-1.5 1.5-1.5h17.9599349l6.5400651 7.6300759v21.8699241c0 .8284271-.6715729 1.5-1.5 1.5h-11.5v2c0 .7074646-.7145263 1.1912224-1.3713907.9284767l-2.1286093-.8514437-2.1286093.8514437c-.6568644.2627457-1.3713907-.2210121-1.3713907-.9284767zm17.6153846-23-4.6153846-6v6zm-7.6153846 14h4v2h-4zm-10-10h14v2h-14zm0 4h14v2h-14zm3.5 11c1.3807119 0 2.5-1.1192881 2.5-2.5s-1.1192881-2.5-2.5-2.5-2.5 1.1192881-2.5 2.5 1.1192881 2.5 2.5 2.5z" fill="#2196f3"/></g></svg>
                                    <span class="ms-1">Courses</span> 
                                    </a>
                                </div>
                                 <div class="col-lg-6 col-md-6">
                                    <a href="#" class="custom-box" data-section="2">
                                        <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(12 6)"><path d="m9 0h8v8h-2v4h-2l2 13h2l1 4h-9z" fill="#cce8ff"/><g stroke="#2196f3" stroke-width="2"><path d="m1 8v-8h16v8z" stroke-linejoin="round"/><path d="m1 25h16l1 4h-18z" stroke-linejoin="round"/><path d="m3 25 2-13h8l2 13z"/><path d="m3 8v4h12v-4z" stroke-linejoin="round"/><path d="m6 4v-3m6 3v-3"/></g></g></svg>
                                        <span class="ms-1">Hobbies</span> 
                                    </a>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6">
                                    <a href="#" class="custom-box">
                                        <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="#2196f3" stroke-width="2" transform="translate(4 6)"><rect fill="#cce8ff" height="21" rx="2" width="30" x="1" y="5"/><path d="m2 5c-.55228475 0-1 .44771525-1 1v4.5c0 3.0375661 2.46243388 5.5 5.5 5.5h19c3.0375661 0 5.5-2.4624339 5.5-5.5v-4.5c0-.55228475-.4477153-1-1-1z" fill="#fff"/><rect height="4" rx="1" width="8" x="12" y="1"/><rect fill="#fff" height="4" rx="1" width="6" x="13" y="14"/></g></svg>
                                    <span class="ms-1">Internships</span> 
                                    </a>
                                </div> -->
                                
                                <div class="col-lg-6 col-md-6">
                                    <a href="#" class="custom-box" data-section="3">
                                        <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(8 1)"><path d="m12 24v13h7l2-13z" fill="#cce8ff"/><path d="m12 20h10v3h-10z" fill="#cce8ff"/><rect height="5" rx="1" stroke="#2196f3" stroke-width="2" width="22" x="1" y="19"/><path d="m2.5 24 2.5 13h14l2.5-13z" stroke="#2196f3" stroke-linejoin="round" stroke-width="2"/><path d="m11 12h2v8h-2z" fill="#2196f3"/><g stroke="#2196f3" stroke-width="2"><path d="m12 12c-3-3 .5-11.5 8-11.5 3 7-4.2416535 13.5-8 11.5z" stroke-linejoin="round"/><path d="m12 12 4-5.5"/><path d="m12 14c-2.5 2.5-11 2-12-7 9.5-2.5 11.5 3.7528704 12 7z" stroke-linejoin="round"/><path d="m12 14-6-3"/></g></g></svg>
                                        <span class="ms-1">Extra-curricular Activities</span> 
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6" data-section="4">
                                    <a href="#" class="custom-box">
                                        <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(7 6)"><path d="m1 9v9h9l13 6.5v-5.5z" fill="#cce8ff"/><g stroke="#2196f3" stroke-width="2"><path d="m10 7v12h-8c-1.1045695 0-2-.8954305-2-2v-8c-0-1.1045695.8954305-2 2-2z"/><path d="m25 16.8739825c1.7252272-.4440428 3-2.0101431 3-3.8739825s-1.2747728-3.42993972-3-3.87398251z" fill="#cce8ff"/><path d="m3 19 2 6.5c.66666667 1.3333333 1.66666667 1.8333333 3 1.5s2-1.1666667 2-2.5l-2-5.5m2-12c1.3382161-.33577474 3.3382161-1.16910807 6-2.5 2.1583634-1.07918171 4.3199374-2.26955399 6.4847218-3.57111682l.0000005.00000088c.4733199-.28458057 1.0877196-.13157711 1.3723002.34174278.093551.15559588.1429775.33372466.1429775.5152787l-.0000269 22.45433006c0 .5522699-.4477032.9999731-.9999731.9999731-.1788506 0-.3544281-.0479676-.508435-.138904-2.6198308-1.5469302-4.7836858-2.7473651-6.491565-3.6013047-2.0253906-1.0126953-4.0253906-1.8460286-6-2.5z" stroke-linejoin="round"/></g></g></svg>
                                    <span class="ms-1">References</span> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Section End -->
            </div>
            <!-- Submit Button -->
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection

@section('js')
<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{URL::asset('plugins/richtext/jquery.richtext.min.js')}}"></script>
<script src="{{URL::asset('js/rte.js')}}"></script>
<script src="{{URL::asset('js/all_plugins.js')}}"></script>

<script>

var editor1 = new RichTextEditor("#div_editor1");

    function addEmploymentForm() {
        var workExperiences = document.getElementById("workExperiences");
        var clonedForm = workExperiences.querySelector(".accordion-item").cloneNode(true);

        // Update IDs and other attributes to make them unique
        var currentId = new Date().getTime(); // Unique ID based on current timestamp
        clonedForm.querySelector(".accordion-header").setAttribute("id", "heading_" + currentId);
        clonedForm.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapse_" + currentId);
        clonedForm.querySelector(".accordion-collapse").setAttribute("id", "collapse_" + currentId);
        
        // Clear input values in the cloned form
        clonedForm.querySelectorAll("input[type=text], input[type=date], textarea").forEach(function(element) {
            element.value = "";
        });

        workExperiences.querySelector(".accordion").appendChild(clonedForm);
    }

    function addEducationForm() {
        var educationSection = document.getElementById("Education");
        var clonedEducation = educationSection.querySelector(".accordion-item").cloneNode(true);

        // Update IDs and other attributes to make them unique
        var currentId = new Date().getTime(); // Unique ID based on current timestamp
        clonedEducation.querySelector(".accordion-header").setAttribute("id", "heading_" + currentId);
        clonedEducation.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapse_" + currentId);
        clonedEducation.querySelector(".accordion-collapse").setAttribute("id", "collapse_" + currentId);
        
        // Clear input values in the cloned education form
        clonedEducation.querySelectorAll("input[type=text], input[type=date], textarea").forEach(function(element) {
            element.value = "";
        });

        educationSection.querySelector(".accordion").appendChild(clonedEducation);
    }

    function addWebsitesLink() {
        var websitesLink = document.getElementById("WebsitesLink");
        var clonedLink = websitesLink.querySelector(".accordion-item").cloneNode(true);

        // Update IDs and other attributes to make them unique
        var currentId = new Date().getTime(); // Unique ID based on current timestamp
        clonedLink.querySelector(".accordion-header").setAttribute("id", "heading_" + currentId);
        clonedLink.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapse_" + currentId);
        clonedLink.querySelector(".accordion-collapse").setAttribute("id", "collapse_" + currentId);
        
        // Clear input values in the cloned link
        clonedLink.querySelectorAll("input[type=text]").forEach(function(element) {
            element.value = "";
        });

        websitesLink.querySelector(".accordion").appendChild(clonedLink);
    }

    function addLanguageForm() {
        var addLanguages = document.getElementById("AddLanguages");
        var clonedLanguage = addLanguages.querySelector(".accordion-item").cloneNode(true);

        // Update IDs and other attributes to make them unique
        var currentId = new Date().getTime(); // Unique ID based on current timestamp
        clonedLanguage.querySelector(".accordion-header").setAttribute("id", "heading_" + currentId);
        clonedLanguage.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapse_" + currentId);
        clonedLanguage.querySelector(".accordion-collapse").setAttribute("id", "collapse_" + currentId);
        
        // Clear input values in the cloned language form
        clonedLanguage.querySelectorAll("input[type=text], select").forEach(function(element) {
            element.value = "";
        });

        addLanguages.querySelector(".accordion").appendChild(clonedLanguage);
    }

    $(document).ready(function(){
        // Function to update background color of clicked skill level
        function updateSkillLevelColor(skillLevel) {
            const color = skillLevel.getAttribute('data-color');
            const skill = skillLevel.closest('.accordion-item');
            const allSkillLevels = skill.querySelectorAll('.skill-level');

            // Deselect all skill levels for this skill
            allSkillLevels.forEach(level => {
                level.style.backgroundColor = 'inherit';
            });

            // Set the background color for the clicked skill level
            skillLevel.style.backgroundColor = color;
        }

        $('#skillsAccordion').on('change', '.skill-level input[type=radio]', function() {
            updateSkillLevelColor(this.closest('.skill-level'));
        });

        function addSkillForm() {
            var skillsAccordion = document.getElementById("skillsAccordion");
            var clonedForm = skillsAccordion.querySelector(".accordion-item").cloneNode(true);
            var newIndex = skillsAccordion.querySelectorAll(".accordion-item").length;

            // Update IDs and other attributes to make them unique
            clonedForm.querySelector(".accordion-header button").setAttribute("data-bs-target", "#collapseSkills_" + newIndex);
            clonedForm.querySelector(".accordion-collapse").setAttribute("id", "collapseSkills_" + newIndex);

            // Clear input values and reset radio buttons in the cloned form
            var inputElements = clonedForm.querySelectorAll("input[type=text], input[type=radio]");
            inputElements.forEach(function(element) {
                element.value = "";
                if (element.type === "radio") {
                    element.checked = false;
                }
            });

            // Set unique IDs for skill level radio buttons and update names
            var skillLevelRadios = clonedForm.querySelectorAll(".skill-level input[type=radio]");
            skillLevelRadios.forEach(function(radio, index) {
                
                var originalName = radio.getAttribute("name");
                var radioValue=$('#'+radio.id).val();
                var newName = originalName.replace(/_\d+$/, "_" + newIndex); // Replace last digit with newIndex
                radio.id = radio.id.split("_")[0] + "_" + newIndex;
                radio.name = newName;
                radio.value = radioValue;
            });

            // Update labels for skill level radio buttons
            var skillLabels = clonedForm.querySelectorAll(".skill-label");
            skillLabels.forEach(function(label, index) {
                var originalFor = label.getAttribute("for");
                var newFor = originalFor.replace(/_\d+$/, "_" + newIndex); // Replace last digit with newIndex
                label.setAttribute("for", newFor);
            });

            skillsAccordion.appendChild(clonedForm);
        }

        // Call the addSkillForm function when clicking on "Add one more skill"
        $(".AddMore a").on('click', function() {
            addSkillForm();
        });


        $("#pre-written").click(function(){
            $("#suggestionPanel").slideToggle();
        });

        $("#closeButton").click(function(){
            $("#suggestionPanel").hide();
        });

        });

        $('#jobTitleInput').keyup(function(){
            var inputVal = $(this).val();
            if(inputVal.length >= 1) { 
                $.ajax({
                    url: 'get-job-titles',
                    method: 'GET',
                    data: { query: inputVal },
                    success: function(response){
                        var suggestions = '';
                        $.each(response, function(index, jobTitle){
                            suggestions += '<div class="suggestion">' + jobTitle + '</div>';
                        });
                        $('#jobTitleSuggestions').html(suggestions);
                    }
                });
            } else {
                $('#jobTitleSuggestions').empty();
            }
        });

        // Handle click on suggestion
        $(document).on('click', '.suggestion', function(){
            var selectedJobTitle = $(this).text();
            $('#jobTitleInput').val(selectedJobTitle);
            $('#jobTitleSuggestions').empty();

            openAIComplete(selectedJobTitle);

        });

        function openAIComplete(jobTitle) {
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: 'openai-complete', // Replace with your backend endpoint
                method: 'POST',
                data: { job_title: jobTitle },
                success: function(response) {
                    var objectives = response.objective;
                    var skills = response.skills; 
                    
                    var objectivesArray = objectives.split('##'); // Splitting based on '##' delimiter
                    var skillTitles = skills.split('##'); // Splitting skills string
                    
                    var panelBody = document.querySelector('.panel-body');
                    panelBody.innerHTML = '';

                    objectivesArray.forEach(function(objective, index) {
                        if (objective.trim() !== '') {
                            // Create elements
                            var div = document.createElement('div');
                            div.classList.add('tm-select-content-sec');

                            var divSvg = document.createElement('div');
                            divSvg.classList.add('tm-svg');
                            div.appendChild(divSvg);

                            var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                            svg.setAttribute('width', '20');
                            svg.setAttribute('height', '20');
                            svg.setAttribute('viewBox', '0 0 20 20');
                            svg.setAttribute('version', '1.1');
                            svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
                            svg.classList.add('sc-lcZnTs', 'jEHKyM');

                            var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                            path.setAttribute('d', 'M7.14236 10.8333l3.42074 3.1357-1.12618 1.2286-5-4.5833c-.36031-.3303-.36031-.89832 0-1.2286l5-4.58333 1.12618 1.22859-3.42074 3.1357 8.69104-.00002v1.66666H7.14236z');

                            svg.appendChild(path);
                            divSvg.appendChild(svg);

                            var divContent = document.createElement('div');
                            divContent.classList.add('tm-content');

                            var a = document.createElement('a');
                            a.setAttribute('href', 'javascript:void(0)');
                            a.textContent = objective.trim();

                            divContent.appendChild(a);
                            div.appendChild(divContent);

                            // Append the created elements to the panel-body
                            panelBody.appendChild(div);
                        }
                    });

                    // Find the skill-list container
                    var skillListContainer = document.querySelector('.skill-list ul');
                    skillListContainer.innerHTML = '';

                    // Append each skill title to the skill-list container
                    skillTitles.forEach(function(skillTitle) {
                        if (skillTitle.trim() !== '') {
                            var li = document.createElement('li');
                            li.classList.add('list-inline-item');

                            var div = document.createElement('div');
                            div.classList.add('sc-jzZzup');
                            div.textContent = skillTitle.trim();

                            var icon = document.createElement('i');
                            icon.classList.add('fa-regular', 'fa-plus');

                            div.appendChild(icon);
                            li.appendChild(div);
                            skillListContainer.appendChild(li);
                        }
                    });

                    // Show the Addskill section if there are skills
                    if (skillTitles.length > 0) {
                        document.getElementById('Addskill').style.display = 'block';
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors, if any
                    console.error(error);
                }
            });
        }
    
        $(document).on('click', '.tm-content a', function(e) {
            e.preventDefault();
            var currentContent = editor1.getHTMLCode();
            var objectiveText = $(this).text().trim();
	        editor1.setHTMLCode(currentContent + '<br>' +  objectiveText);    
            $(this).parent().prev().find('svg').html('<path d="M4.22 12.5L7 15.28l8.78-8.78-1.06-1.06L7 13.16 5.28 11.44l-1.06 1.06z"></path>');
        });

        $(document).on('click', '.list-inline-item', function() {
            addSkillFormWithTitle($(this).text().trim());
        });
        
        function addSkillFormWithTitle(title) {
            var skillsAccordion = document.getElementById("skillsAccordion");
            var clonedForm = skillsAccordion.querySelector(".accordion-item").cloneNode(true);
            var newIndex = skillsAccordion.querySelectorAll(".accordion-item").length;

            // Update IDs and other attributes to make them unique
            clonedForm.querySelector(".accordion-header button").setAttribute("data-bs-target", "#collapseSkills_" + newIndex);
            clonedForm.querySelector(".accordion-collapse").setAttribute("id", "collapseSkills_" + newIndex);

            // Clear input values and reset radio buttons in the cloned form
            var inputElements = clonedForm.querySelectorAll("input[type=text], input[type=radio]");
            inputElements.forEach(function(element) {
                if (element.type === "radio") {
                    element.checked = false;
                }
                if(element.type === "text"){
                     element.value = title;
                }
            });

            // Set unique IDs for skill level radio buttons and update names
            var skillLevelRadios = clonedForm.querySelectorAll(".skill-level input[type=radio]");
            skillLevelRadios.forEach(function(radio, index) {
                var originalName = radio.getAttribute("name");
                var radioValue=$('#'+radio.id).val();
                var newName = originalName.replace(/_\d+$/, "_" + newIndex); // Replace last digit with newIndex
                radio.id = radio.id.split("_")[0] + "_" + newIndex;
                radio.name = newName;
                radio.value = radioValue;
            });

            // Update labels for skill level radio buttons
            var skillLabels = clonedForm.querySelectorAll(".skill-label");
            skillLabels.forEach(function(label, index) {
                var originalFor = label.getAttribute("for");
                var newFor = originalFor.replace(/_\d+$/, "_" + newIndex); // Replace last digit with newIndex
                label.setAttribute("for", newFor);
            });

            skillsAccordion.appendChild(clonedForm);
        }

        $(document).on('click', '.custom-box', function(e) {
            e.preventDefault();
            var sectionType = $(this).data('section'); // Get the section type from data attribute
            
            // Create HTML for the new custom section
            var courseSectionHTML = `
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Course</strong></h4>
                        <div class="work-experiences" id="Course"> 
                            <div class="accordion mb-4" id="courseAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingCourse">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse" aria-expanded="true" aria-controls="collapseCourse">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseCourse" class="accordion-collapse collapse show" aria-labelledby="headingCourse" data-bs-parent="#courseAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Course</label>
                                                        <input type="text" name="cur_title[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Institution</label>
                                                        <input type="text" name="cur_institution[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Start & End Date</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="date" name="cur_start_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="date" name="cur_end_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addCourseForm()"><i class="fa-solid fa-plus"></i> Add one more course</a>
                        </div>
                    </div>
                </div>
            `;

            var hobbiesSectionHTML = `
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Hobbies</strong></h4>
                        <div class="work-experiences" id="Hobbies"> 
                            <div class="accordion mb-4" id="hobbiesAccordion">
                                <div class="accordion-item">
                                    <div id="collapseHobbies" class="accordion-collapse collapse show" aria-labelledby="headingHobbies" data-bs-parent="#HobbiesAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Hobbies</label>
                                                        <textarea rows="5" name="Hobbies[]" class="form-control" placeholder="Message here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addHobbiesForm()"><i class="fa-solid fa-plus"></i> Add one more Hobbies</a>
                        </div>
                    </div>
                </div>
            `;

             var extraSectionHTML = `
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>Extra-curricular Activities</strong></h4>
                        <div class="work-experiences" id="extraCurricular"> 
                            <div class="accordion mb-4" id="curricularAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingCurricular">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCurricular" aria-expanded="true" aria-controls="collapseCurricular">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseCurricular" class="accordion-collapse collapse show" aria-labelledby="headingCurricular" data-bs-parent="#curricularAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Function Title</label>
                                                        <input type="text" name="eca_title[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Employer</label>
                                                        <input type="text" name="eca_employer[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Start & End Date</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="date" name="eca_start_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="date" name="eca_end_date[]" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">City</label>
                                                        <input type="text" name="eca_city[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                 <div class="col-lg-12">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="5" name="eca_discription[]" class="form-control" placeholder="Message here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addExtraCurricularForm()"><i class="fa-solid fa-plus"></i> Add one more curricular activities</a>
                        </div>
                    </div>
                </div>
            `;

            var referenceSectionHTML = `
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <h4 class="mb-2"><strong>References</strong></h4>
                        <div class="work-experiences" id="References"> 
                            <div class="accordion mb-4" id="referencesAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingReferences">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReferences" aria-expanded="true" aria-controls="collapseReferences">
                                            <strong>(Not specified)</strong>  
                                        </button>
                                    </h2>
                                    <div id="collapseReferences" class="accordion-collapse collapse show" aria-labelledby="headingReferences" data-bs-parent="#referencesAccordion">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Referent's Full Name</label>
                                                        <input type="text" name="ref_name[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Company</label>
                                                        <input type="text" name="ref_company[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Phone</label>
                                                        <input type="tel" name="ref_phone[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="ref_email[]" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AddMore">
                            <a href="javascript:void(0)" onclick="addReferenceForm()"><i class="fa-solid fa-plus"></i> Add one more reference</a>
                        </div>
                    </div>
                </div>
            `;

            // Append the new custom section HTML above the "Add Section" area
            if(sectionType == 1){
                $('#customSections').prepend(courseSectionHTML);
            }else if(sectionType == 2){
                $('#customSections').prepend(hobbiesSectionHTML);
            }else if(sectionType == 3){
                $('#customSections').prepend(extraSectionHTML);
            }else{
                $('#customSections').prepend(referenceSectionHTML);
            }
            

            // Disable the clicked custom section button
            $(this).attr('disabled', true);
        });

        function addCourseForm() {
            var courseSection = document.getElementById("Course");
            var clonedCourse = courseSection.querySelector(".accordion-item").cloneNode(true);

            // Update IDs and other attributes to make them unique
            var currentId = new Date().getTime(); // Unique ID based on current timestamp
            clonedCourse.querySelector(".accordion-header").setAttribute("id", "headingCourse_" + currentId);
            clonedCourse.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapseCourse_" + currentId);
            clonedCourse.querySelector(".accordion-collapse").setAttribute("id", "collapseCourse_" + currentId);
            
            // Clear input values in the cloned course
            clonedCourse.querySelectorAll("input[type=text], input[type=date]").forEach(function(element) {
                element.value = "";
            });

            courseSection.querySelector(".accordion").appendChild(clonedCourse);
        }

        function addHobbiesForm() {
            var hobbiesSection = document.getElementById("Hobbies");
            var clonedHobbies = hobbiesSection.querySelector(".accordion-item").cloneNode(true);

            // Update IDs and other attributes to make them unique
            var currentId = new Date().getTime(); // Unique ID based on current timestamp
            clonedHobbies.querySelector(".accordion-collapse").setAttribute("id", "collapseHobbies_" + currentId);
            
            // Clear input values in the cloned hobbies section
            clonedHobbies.querySelector("textarea").value = "";

            hobbiesSection.querySelector(".accordion").appendChild(clonedHobbies);
        }

        function addExtraCurricularForm() {
            var extraCurricularSection = document.getElementById("extraCurricular");
            var clonedExtraCurricular = extraCurricularSection.querySelector(".accordion-item").cloneNode(true);

            // Update IDs and other attributes to make them unique
            var currentId = new Date().getTime(); // Unique ID based on current timestamp
            clonedExtraCurricular.querySelector(".accordion-collapse").setAttribute("id", "collapseExtraCurricular_" + currentId);
            clonedExtraCurricular.querySelector(".accordion-header").setAttribute("id", "headingExtraCurricular_" + currentId);
            clonedExtraCurricular.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapseExtraCurricular_" + currentId);

            // Clear input values in the cloned Extra-curricular Activities section
            clonedExtraCurricular.querySelector("input[type=text]").value = "";

            extraCurricularSection.querySelector(".accordion").appendChild(clonedExtraCurricular);
        }

        function addReferenceForm() {
            var referenceSection = document.getElementById("References");
            var clonedReference = referenceSection.querySelector(".accordion-item").cloneNode(true);

            // Update IDs and other attributes to make them unique
            var currentId = new Date().getTime(); // Unique ID based on current timestamp
            clonedReference.querySelector(".accordion-collapse").setAttribute("id", "collapseReferences_" + currentId);
            clonedReference.querySelector(".accordion-header").setAttribute("id", "headingReferences_" + currentId);
            clonedReference.querySelector(".accordion-button").setAttribute("data-bs-target", "#collapseReferences_" + currentId);

            // Clear input values in the cloned Reference section
            clonedReference.querySelectorAll("input[type=text], input[type=tel], input[type=email]").forEach(function(element) {
                element.value = "";
            });

            referenceSection.querySelector(".accordion").appendChild(clonedReference);
        }

</script>
@endsection