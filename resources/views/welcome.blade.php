<!DOCTYPE html>
<html lang="en">
<head>
    <title>JobStreet.com - Job Search</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="Public">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="https://dna.jsstatic.com/myjs/myjs-1.3.0.css">
    <link rel="stylesheet" href="https://dna.jsstatic.com/select2/select2.css">
    <link rel="stylesheet" href="https://dna.jsstatic.com/pi/icon-font/2.3/icon-font.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../ico/favicon.png">
    <link rel="apple-touch-icon" href="../../ico/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href=../../"ico/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../ico/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../ico/touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../ico/touch-icon-iphone6p-ios8.png">
    <!-- End of Favicon -->
</head>
<body class="body-mobile-align">

<!--=====================================================Header========================================================================-->
<div class="mobile-navbar-fixed-top">
    <div class="navbar navbar-inverse navbar-static">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" data-canvas="body" type="button" onclick="$('#mobile_search_bar').removeClass('active');">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="jslogo jslogo-mobile visible-xs"></span>
                <!--Mobile View Search Bar toggle button-->
                <div class="search-toggle">
                    <a href="#"><span class="icon-search visible-xs"></span></a>
                </div>
                <div class="navbar-search toggle">
                    <div class="container visible-xs">
                        <div class="col-xs-12">
                            <form id="frmSearch_mobile" name="frmSearch-mobile" action="/" method="get">
                                <div class="input-group">
                                    <input class="form-control" id="search_box_keyword_mobile" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords..." value="{{$keywords}}">
                                    <span class="input-group-btn">
										<a class="btn btn-default" id="header_searchbox_btn_mobile" type="button">Search</a>
										</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-collapse navbar-collapse-align collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.jobstreet.com.my" title="Leading Job Site in Malaysia - Find Jobs in Malaysia">Home</a></li>
                    <li><a id="header-job-link" href="http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php" title="Search Jobs @ Job Search JobStreet.com Malaysia">Search Jobs</a></li>
                    <li><a href="http://www.jobstreet.com.my/en/companies" title="company profiles">Company Profiles</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">MyJobStreet&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header hidden-xs">My Resume</li>
                            <li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/resume/preview-resume.php?x=a2p6dkp4hosoojv84nsr44ecp4">Preview Resume</a></li>
                            <li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/resume/edit-work-experience.php?x=a2p6dkp4hosoojv84nsr44ecp4">Edit Resume</a></li>
                            <li class="divider hidden-xs"></li>
                            <li class="dropdown-header">My Applications</li>
                            <li><a href="http://myjobstreet-dev.jobstreet.com.my/application/application-status.php?view=0&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Online Applications</a></li>
                            <li><a href="http://myjobstreet-dev.jobstreet.com.my/application/interview-request.php?view=latest&amp;x=a2p6dkp4hosoojv84nsr44ecp4">Interview Requests</a></li>
                            <li class="hidden-xs"><a id="header_emp_request_link" href="http://myjobstreet-dev.jobstreet.com.my/application/employer-request.php?x=a2p6dkp4hosoojv84nsr44ecp4">Resume Requests</a></li>
                            <li class="divider hidden-xs"></li>
                            <li class="dropdown-header hidden-xs">Career Enhancers</li>
                            <li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/pa-summary.php?x=a2p6dkp4hosoojv84nsr44ecp4">Priority Application</a></li>
                            <li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/career-enhancer/salary-report.php?x=a2p6dkp4hosoojv84nsr44ecp4">Salary Report</a></li>
                            <li class="hidden-xs"><a href="javascript: popup_win8('http://myjobstreet-dev.jobstreet.com.my/career-enhancer/assessment.php?x=a2p6dkp4hosoojv84nsr44ecp4', 1000,700,'JELA');">English Assessment</a></li>
                            <li class="hidden-xs">
                                <a class="hidden-xs" href="javascript: popup_win8('http://www.jobstreet.com.my/career-resources/', 1000,700,'JELA');">
                                    Career Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Learning&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.jobstreet.com.my/learning/">View Course</a></li>
                            <li><a href="http://myjobstreet-dev.jobstreet.com.my/learning/learning-profile.php?x=g8q1cqbllnaoieol1h0ulno8h2">Edit Learning Profile</a></li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">More&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/oversea.html">Overseas Jobs</a></li>
                            <li><a href="http://www.jobstreet.com.my/campus/">Fresh Grad Jobs</a></li>
                            <li><a href="http://job-search-dev.jobstreet.com.my/malaysia/job-classified.php">Classified Jobs</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" style="display: list-item;">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false">
                            <span class="display-name">Lucas Lee</span>&nbsp;
                            <span><b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://myjobstreet-dev.jobstreet.com.my/home/logout.php?x=g8q1cqbllnaoieol1h0ulno8h2">Logout</a></li>
                            <li class="hidden-xs"><a href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?x=g8q1cqbllnaoieol1h0ulno8h2&amp;site=my">Help</a></li>
                            <li class="hidden-xs"><a class="language-separator" href="http://myjobstreet-dev.jobstreet.com.my/registration/update-account.php?x=g8q1cqbllnaoieol1h0ulno8h2">My Account</a></li>
                        </ul>
                    </li>
                    <li style="display: none;">
                        <a href="https://myjobstreet-dev.jobstreet.com.my/home/login.php?site=my&amp;language_code=3">Log In</a>
                    </li>
                    <li class="hidden-xs" style="display: none;"> <span>|</span> </li>
                    <li style="display: none;">
                        <a href="https://myjobstreet-dev.jobstreet.com.my/registration/simple-signup.php?site=my&amp;language_code=3">Sign Up</a>
                    </li>
                    <ul></ul>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <div class="navbar-lower-deck hidden-xs">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                    <a class="jslogo my" id="header-logo-link" href="http://www.jobstreet.com.my" title="Leading Job Site in Malaysia - Find Jobs, Advertise Jobs in Malaysia"></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="search-area">
                        <form id="frmSearch" name="frmSearch" action="/" method="get">
                            <div class="input-group">
                                <input class="form-control" name="key" type="text" placeholder="Search Jobs By Title, Skills or Keywords..." value="{{$keywords}}">
                                <span class="input-group-btn"><a class="btn btn-default" type="button" ><span class="icon-search"></span></a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                    <a class="btn btn-link" href="http://job-search-dev.jobstreet.com.my/malaysia/advance-job-search.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;sort=1&amp;order=0" title="Advanced Job Search @ JobStreet.com ">Advanced</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs text-right">
                    <a class="btn btn-link employer-link" id="header-employer-link" href="http://www.jobstreet.com.my/employers/" title="Post a Job Ad: +603-­2176 0333">Employers</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===============================================End of header=============================================================================================-->
<div class="page-title">
    <div class="container">
        <div class="information col-lg-12">
            <h1 class="search-desc"><b>Audit & Taxation jobs</b></h1>
            <span class="save-job-alert hidden-sm hidden-xs">
					<a id="save_job_alert" href="#" title="Save as email job alert">
					<span class="icon-envelope"></span>Save as email job alert
					</a>
				</span>
            <span class="result-count pull-right">1 - 20 of 100 jobs</span>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="panel panel-basic perpectual perpectual-md-3" data-offset="bottom">
            <div class="panel-header">
                <h4 class="hidden-sm hidden-xs">Search Criteria</h4>
                <h4 aria-controls="collapse_search" aria-expanded="false" class="visible-sm visible-xs collapsed" data-toggle="collapse">Search Criteria<span class=
                                                                                                                                                              "icon-caret-down pull-right"></span></h4>
            </div>
            <div aria-expanded="false" class="panel-body collapse not-md not-lg" id="collapse_search">
                <div id="qsCon">
                    <form>
                        <div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" id="key" maxlength="100" name="key" placeholder="Job Title or Keywords ..." title=
                                "Enter job title, company name, skill, etc" type="text" value="{{$keywords}}">
                            </div>
                            <div class="form-group">
                                <select id="location" name="location">
                                    <option value="">
                                    </option>
                                    <option value="0">
                                        All Locations
                                    </option>
                                    <optgroup label="Malaysia">
                                        <option class="opt-indent" value="50100">
                                            Johor
                                        </option>
                                        <option class="opt-indent" value="50200">
                                            Kedah
                                        </option>
                                        <option class="opt-indent" value="50400">
                                            Kelantan
                                        </option>
                                        <option class="opt-indent" value="50300">
                                            Kuala Lumpur
                                        </option>
                                        <option class="opt-indent" value="51500">
                                            Labuan
                                        </option>
                                        <option class="opt-indent" value="50500">
                                            Melaka
                                        </option>
                                        <option class="opt-indent" value="50600">
                                            Negeri Sembilan
                                        </option>
                                        <option class="opt-indent" value="50800">
                                            Pahang
                                        </option>
                                        <option class="opt-indent" value="50700">
                                            Penang
                                        </option>
                                        <option class="opt-indent" value="50900">
                                            Perak
                                        </option>
                                        <option class="opt-indent" value="51000">
                                            Perlis
                                        </option>
                                        <option class="opt-indent" value="51600">
                                            Putrajaya
                                        </option>
                                        <option class="opt-indent" value="51100">
                                            Sabah
                                        </option>
                                        <option class="opt-indent" value="51300">
                                            Sarawak
                                        </option>
                                        <option class="opt-indent" value="51200">
                                            Selangor
                                        </option>
                                        <option class="opt-indent" value="51400">
                                            Terengganu
                                        </option>
                                    </optgroup>
                                    <optgroup label="Overseas">
                                        <option class="opt-indent" value="100000">
                                            China
                                        </option>
                                        <option class="opt-indent" value="20000">
                                            Hong Kong
                                        </option>
                                        <option class="opt-indent" value="40000">
                                            India
                                        </option>
                                        <option class="opt-indent" value="30000">
                                            Indonesia
                                        </option>
                                        <option class="opt-indent" value="150000">
                                            Japan
                                        </option>
                                        <option class="opt-indent" value="60000">
                                            Philippines
                                        </option>
                                        <option class="opt-indent" value="70000">
                                            Singapore
                                        </option>
                                        <option class="opt-indent" value="80000">
                                            Thailand
                                        </option>
                                        <option class="opt-indent" value="110000">
                                            Vietnam
                                        </option>
                                    </optgroup>
                                    <optgroup label="Other Work Locations">
                                        <option class="opt-indent" value="90100">
                                            All Other Work Locations
                                        </option>
                                        <option class="opt-indent" value="90110">
                                            Africa
                                        </option>
                                        <option class="opt-indent" value="90120">
                                            Asia - Middle East
                                        </option>
                                        <option class="opt-indent" value="90130">
                                            Asia - Others
                                        </option>
                                        <option class="opt-indent" value="90140">
                                            Australia &amp; New Zealand
                                        </option>
                                        <option class="opt-indent" value="90150">
                                            Europe
                                        </option>
                                        <option class="opt-indent" value="90160">
                                            North America
                                        </option>
                                        <option class="opt-indent" value="90170">
                                            South America
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="specialization" name="specialization">
                                    <option value="">
                                    </option>
                                    <option value="0">
                                        All Specializations
                                    </option>
                                    <optgroup class="optgroup" label="Accounting/Finance">
                                        <option class="opt-indent" value="130,131,132,135">
                                            All Accounting/Finance
                                        </option>
                                        <option class="opt-indent" value="130">
                                            Audit &amp; Taxation
                                        </option>
                                        <option class="opt-indent" value="135">
                                            Banking/Financial
                                        </option>
                                        <option class="opt-indent" value="132">
                                            Finance/Investment
                                        </option>
                                        <option class="opt-indent" value="131">
                                            General/Cost Accounting
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Admin/Human Resources">
                                        <option class="opt-indent" value="133,137,146,148">
                                            All Admin/Human Resources
                                        </option>
                                        <option class="opt-indent" value="133">
                                            Clerical/General Admin
                                        </option>
                                        <option class="opt-indent" value="137">
                                            Human Resources
                                        </option>
                                        <option class="opt-indent" value="146">
                                            Secretarial
                                        </option>
                                        <option class="opt-indent" value="148">
                                            Top Management
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Arts/Media/Communications">
                                        <option class="opt-indent" value="100,101,106,141">
                                            All Arts/Media/Communications
                                        </option>
                                        <option class="opt-indent" value="100">
                                            Advertising
                                        </option>
                                        <option class="opt-indent" value="101">
                                            Arts/Creative Design
                                        </option>
                                        <option class="opt-indent" value="106">
                                            Entertainment
                                        </option>
                                        <option class="opt-indent" value="141">
                                            Public Relations
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Building/Construction">
                                        <option class="opt-indent" value="150,180,184,198">
                                            All Building/Construction
                                        </option>
                                        <option class="opt-indent" value="180">
                                            Architect/Interior Design
                                        </option>
                                        <option class="opt-indent" value="184">
                                            Civil/Construction
                                        </option>
                                        <option class="opt-indent" value="150">
                                            Property/Real Estate
                                        </option>
                                        <option class="opt-indent" value="198">
                                            Quantity Surveying
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Computer/Information Technology">
                                        <option class="opt-indent" value="191,192,193">
                                            All Computer/Information Technology
                                        </option>
                                        <option class="opt-indent" value="192">
                                            IT-Hardware
                                        </option>
                                        <option class="opt-indent" value="193">
                                            IT-Network/Sys/DB Admin
                                        </option>
                                        <option class="opt-indent" value="191">
                                            IT-Software
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Education/Training">
                                        <option class="opt-indent" value="105,121">
                                            All Education/Training
                                        </option>
                                        <option class="opt-indent" value="105">
                                            Education
                                        </option>
                                        <option class="opt-indent" value="121">
                                            Training &amp; Dev.
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Engineering">
                                        <option class="opt-indent" value="185,186,187,188,189,190,195,200">
                                            All Engineering
                                        </option>
                                        <option class="opt-indent" value="185">
                                            Chemical Engineering
                                        </option>
                                        <option class="opt-indent" value="187">
                                            Electrical
                                        </option>
                                        <option class="opt-indent" value="186">
                                            Electronics
                                        </option>
                                        <option class="opt-indent" value="189">
                                            Environmental
                                        </option>
                                        <option class="opt-indent" value="200">
                                            Industrial Engineering
                                        </option>
                                        <option class="opt-indent" value="195">
                                            Mechanical
                                        </option>
                                        <option class="opt-indent" value="190">
                                            Oil/Gas
                                        </option>
                                        <option class="opt-indent" value="188">
                                            Other Engineering
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Healthcare">
                                        <option class="opt-indent" value="111,112,113">
                                            All Healthcare
                                        </option>
                                        <option class="opt-indent" value="113">
                                            Diagnosis/Others
                                        </option>
                                        <option class="opt-indent" value="112">
                                            Pharmacy
                                        </option>
                                        <option class="opt-indent" value="111">
                                            Practitioner/Medical Asst
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Hotel/Restaurant">
                                        <option class="opt-indent" value="107,114">
                                            All Hotel/Restaurant
                                        </option>
                                        <option class="opt-indent" value="107">
                                            Food/Beverage/Restaurant
                                        </option>
                                        <option class="opt-indent" value="114">
                                            Hotel/Tourism
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Manufacturing">
                                        <option class="opt-indent" value="115,140,194,196,197">
                                            All Manufacturing
                                        </option>
                                        <option class="opt-indent" value="115">
                                            Maintenance
                                        </option>
                                        <option class="opt-indent" value="194">
                                            Manufacturing
                                        </option>
                                        <option class="opt-indent" value="196">
                                            Process Control
                                        </option>
                                        <option class="opt-indent" value="140">
                                            Purchasing/Material Mgmt
                                        </option>
                                        <option class="opt-indent" value="197">
                                            Quality Assurance
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Sales/Marketing">
                                        <option class="opt-indent" value="139,142,143,144,145,149,151">
                                            All Sales/Marketing
                                        </option>
                                        <option class="opt-indent" value="142">
                                            Sales - Corporate
                                        </option>
                                        <option class="opt-indent" value="139">
                                            Marketing/Business Dev
                                        </option>
                                        <option class="opt-indent" value="149">
                                            Merchandising
                                        </option>
                                        <option class="opt-indent" value="145">
                                            Retail Sales
                                        </option>
                                        <option class="opt-indent" value="143">
                                            Sales - Eng/Tech/IT
                                        </option>
                                        <option class="opt-indent" value="144">
                                            Sales - Financial Services
                                        </option>
                                        <option class="opt-indent" value="151">
                                            Telesales/Telemarketing
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Sciences">
                                        <option class="opt-indent" value="102,103,108,109,181,182,183,199">
                                            All Sciences
                                        </option>
                                        <option class="opt-indent" value="103">
                                            Actuarial/Statistics
                                        </option>
                                        <option class="opt-indent" value="102">
                                            Agriculture
                                        </option>
                                        <option class="opt-indent" value="181">
                                            Aviation
                                        </option>
                                        <option class="opt-indent" value="182">
                                            Biotechnology
                                        </option>
                                        <option class="opt-indent" value="183">
                                            Chemistry
                                        </option>
                                        <option class="opt-indent" value="108">
                                            Food Tech/Nutritionist
                                        </option>
                                        <option class="opt-indent" value="109">
                                            Geology/Geophysics
                                        </option>
                                        <option class="opt-indent" value="199">
                                            Science &amp; Technology
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Services">
                                        <option class="opt-indent" value="118,119,120,134,138,147,152">
                                            All Services
                                        </option>
                                        <option class="opt-indent" value="119">
                                            Armed Forces
                                        </option>
                                        <option class="opt-indent" value="134">
                                            Customer Service
                                        </option>
                                        <option class="opt-indent" value="147">
                                            Logistics/Supply Chain
                                        </option>
                                        <option class="opt-indent" value="138">
                                            Lawyer/Legal Asst
                                        </option>
                                        <option class="opt-indent" value="118">
                                            Personal Care
                                        </option>
                                        <option class="opt-indent" value="120">
                                            Social Services
                                        </option>
                                        <option class="opt-indent" value="152">
                                            Tech &amp; Helpdesk Support
                                        </option>
                                    </optgroup>
                                    <optgroup class="optgroup" label="Others">
                                        <option class="opt-indent" value="90,104,110,116,117">
                                            All Others
                                        </option>
                                        <option class="opt-indent" value="110">
                                            General Work
                                        </option>
                                        <option class="opt-indent" value="104">
                                            Journalist/Editors
                                        </option>
                                        <option class="opt-indent" value="117">
                                            Publishing
                                        </option>
                                        <option class="opt-indent" value="116">
                                            Others
                                        </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" id="salary" maxlength="20" name="salary" placeholder="Minimum Salary (MYR)" type="text" value="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" id="btnSubmit" title="Search Jobs Now" type="submit" value="Search"><strong>Search</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Dynamic Browse Job -->
        <div class="panel-group hidden-sm hidden-xs">
            <div class="panel panel-basic">
                <div class="panel-header">
                    <h4>Browse Jobs</h4>
                </div>
                <div class="panel-body">
                    <div class="list-panel-content">
                        <ol class="browse-type-list list-unstyled" id="browse_type_list">
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/specialization.html" id="browse_specialization" title=
                                " Jobs by Specializations in Malaysia @ JobStreet.com">Specializations</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/position-level.html" id="browse_position" title=
                                " Jobs by Position Level in Malaysia @ JobStreet.com">Position Levels</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/location.html" id="browse_location" title=
                                " Jobs by Locations in Malaysia @ JobStreet.com">Locations</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/browse-company.php?by=company&amp;c=a" id="browse_company" title=
                                "Jobs by Company Names in Malaysia @ JobStreet.com">Company Names</a>
                            </li>
                        </ol>
                        <ol class="browse-type-list list-unstyled" id="browse_type_microsite_list">
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/browse/oversea.html" id="browse_oversea" title=
                                " Jobs Overseas in Malaysia @ JobStreet.com">Overseas Jobs</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/campus/malaysia/job-opening.php" id="browse_campus" title=
                                "Fresh Graduate Jobs in Malaysia @ JobStreet.com">Fresh Grad Jobs</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/malaysia/job-classified.php" id="browse_classified" title=
                                "Classified Jobs in Malaysia @ JobStreet.com">Classified Jobs</a>
                            </li>
                            <li>
                                <a href="http://job-search-dev.jobstreet.com.my/low-application/malaysia/job-opening.php" id="browse_low_app" title=
                                "All Jobs looking for more Applicants in Malaysia @ JobStreet.com">Jobs looking for more Applicants</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="panel panel-basic">
                <div class="panel-header">
                    <h4>Job Interview Tips</h4>
                </div>
                <div class="panel-body">
                    <div class="list-panel-content">
                        <ol class="list-unstyled">
                            <li>
                                <a href="http://careers.jobstreet.com.my/interview/managing-bad-interview-questions" id="interview_tips_1" target="_blank" title=
                                "Interview Questions - Managing Bad Interview Questions">Interview Questions</a>
                            </li>
                            <li>
                                <a href="http://careers.jobstreet.com.my/interview/winning-at-behavioural-interviews" id="interview_tips_2" target="_blank" title=
                                "Behavioural Interviews">Behavioural Interviews</a>
                            </li>
                            <li>
                                <a href="http://careers.jobstreet.com.my/interview/success-at-interview-the-zagorski-way" id="interview_tips_3" target="_blank" title=
                                "Interview Preparation">Interview Preparation</a>
                            </li>
                            <li>
                                <a href="http://careers.jobstreet.com.my/interview" id="interview_tips_4" target="_blank" title="More Interview Tips @ JobStreet.com">More Interview
                                    Tips..</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-7">
        <!--======================================Tabs====================================================-->
        <div class="panel-tabs text-left hidden-xs">
            <div class="col-sm-10">
                <ul class="nav nav-tabs nav-line">
                    <li class="active">
                        <a data-toggle="tab" href="#">All Jobs</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#">Direct Employers</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#">Recruitment Firms</a>
                    </li>
                </ul>
                <div class="pull-right">
                    <a href=
                       "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=1&amp;order=1&amp;srcr=1"
                       rel="nofollow" title="Change sort order"><span class="icon-alpha-desc"></span></a>
                </div>
            </div>
            <div class="col-sm-2 pull-right">
                <select class="form-control" id="sort_result" onchange="window.location=this.value">
                    <option selected="selected" value=
                    "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=1&amp;order=1&amp;srcr=1">
                        Date
                    </option>
                    <option value=
                            "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=3&amp;order=1&amp;srcr=1">
                        Job Title
                    </option>
                    <option value=
                            "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=4&amp;order=1&amp;srcr=1">
                        Company
                    </option>
                    <option value=
                            "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=6&amp;order=0&amp;srcr=1">
                        Salary
                    </option>
                    <option value=
                            "http://job-search-dev.jobstreet.com.my/malaysia/job-opening.php?area=1&amp;option=1&amp;job-source=1%2C64&amp;classified=1&amp;job-posted=0&amp;src=46&amp;pg=1&amp;sort=7&amp;order=1&amp;srcr=1">
                        Location
                    </option>
                </select>
            </div>
        </div><!--======================================End of Tabs====================================================-->
        <div class="tab-content jobs jobs-no-hover">
            <!--Search Result-->
            <div class="tab-pane fade in active">
                @foreach($data as $job)
                <div class="panel panel-card">
                    <div class="panel-body card-body">
                        <div class="card-primary">
                            <a class="pull-right hidden-xs" href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd."><img src="http://placehold.it/150x150"></a>
                            <h4 class="card-title"><a href="#" title="View job details - Senior Web Development Engineer">{{$job->fields->position_title}}</a></h4>
                            <div class="info no-fig xn">
                                <a href="#" title="View all jobs posted by F-Secure Corporation Sdn. Bhd."><span class="text">{{$job->fields->company_name}}</span></a>
                            </div>
                        </div>
                        <div class="card-secondary">
                            <span class="info no-fig xn job-location"><a href="#"><span class="icon-location"></span><span class="text">{{$job->fields->work_location_state}}</span></a></span><span class=
                                                                                                                                                                            "info no-fig xn expected-salary"><span class="icon-dollar-sign"></span><span class="text">Around Expected Salary</span></span>
                        </div>
                        <div class="card-tertiary hidden-xs">
                            <div class="info no-fig xn">
									<span class="text">Responsibilities - Generate new ways of thinking about all aspects of website/portal development by using cutting edge technologies
									to create that wow effect.</span>
                            </div>
                        </div>
                        <div class="sub-info">
                            <span>3 minutes ago</span>
                            <div class="sub-info-expand hidden-xs">
                                &nbsp;&bull;&nbsp;
                                <span class="sub-info-toggle" role="button">
										<span class="text">more</span>
										<span class="caret"></span>
                                    </span>
                                <div class="sub-info-detail collapse" aria-expanded="false">
                                    <hr>
                                    <a class="muted hidden-xs" href="#" title="IT - Software &gt; Software Engineer/Programmer">IT - Software</a> &gt;
                                    <a class="muted hidden-xs" href="#" title="Software Engineer/Programmer">Software Engineer/Programmer</a>
                                    <div class="industry-info">
                                        <span class="hidden-xs">Industry:</span>&nbsp;<a class="muted hidden-xs" href="#" title="IT / Software in Malaysia">IT / Software</a>
                                    </div>
                                    <div class="tag-info">
                                        <ul class="list-inline">
                                            <li><span class="icon-tag"></span></li>
                                            <li><a class="tag-text" href="#">senior finance</a></li>
                                            <li><a class="tag-text" href="#">finance manager</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
                <div class="panel">
                    <div class="panel-body text-center">
                        <ul class="pagination pull-left">
                            <li class="disabled">
                                <a href="#"><span class="icon-angle-left"></span></a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a class="hidden-xs" href="#">6</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-angle-right"></span></a>
                            </li>
                        </ul>
                        <span class="pull-right pagination-result-count">1 - 20 of 100 jobs</span>
                    </div>
                </div>
            </div><!--End of Search Result-->
        </div><!--End of Second content tab-->
    </div>
    <div class="hidden-xs hidden-sm col-md-2">
        <span class=""><img src="http://placehold.it/160x600"></span>
        <div class="clearfix x2">
            <span class=""></span>
        </div><span class=""><img src="http://placehold.it/160x600"></span>
    </div><span class=""></span>
</div>
<a href="javascript:;" class="btn btn-top"><span class="icon-angle-up"></span></a>

<footer>
    <div class="container">
        <ul class="list-inline">
            <li><a href="http://www.jobstreet.com.my/sitemap.htm" id="footer-sitemap">Site Map</a></li>
            <li><a href="http://www.jobstreet.com.my/aboutus/default.htm">About Us</a></li>
            <li><a href="http://job-search.jobstreet.com/CompanyProfile/company-profile.php?dm=http%3a%2f%2fsiva-my.jsstatic.com&amp;p=%2f_ads%2f_static%2fxml%2fMY%2f&amp;token=28b361b7dc8f5a797749c8397de04e59d5e14a2968d0b48e496e&amp;rnd=91859390#.UrjtWvQW1qV" id="footer_work_with_us">Work With Us</a></li>
            <li><a href="http://www.jobstreet.com.my/terms-of-use.htm" id="footer_term_use">Terms of Use</a> </li>
            <li><a href="http://www.jobstreet.com.my/privacy-policy.htm" id="footer_privacy_policy">Privacy Policy</a></li>
            <li><a href="http://www.jobstreet.com.my/safe-job-search-guide.htm" id="footer_safe_guide">Safe Job Search Guide</a></li>
            <li><a href="http://myjobstreet-dev.jobstreet.com.my/home/help.php?site=my" id="footer_help">Help</a></li>
            <li><a href="http://myjobstreet-dev.jobstreet.com.my/home/feedback.php?site=my&amp;sub=feedback" id="footer_feedback" target="_blank">Send Feedback</a></li>
        </ul>
        <p class="footer-copyright">Copyright &copy; <span id="year"></span> JobStreet.com</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://dna.jsstatic.com/js/bootstrap.js"></script>

<!-- Plugin -->
<script src="https://dna.jsstatic.com/select2/select2.js"></script>
<script src="https://dna.jsstatic.com/js/myjs.js"></script>
<script>

    $(document).ready(function(){

        //Toggle sub info details
        $(".sub-info-toggle").click(function() {
            var sub_info_parent = $(this).parent();
            var toggle_text = $(this).find(".text");

            sub_info_parent
                .toggleClass("expand")
                .find(".sub-info-detail").collapse('toggle');
            toggle_text.text(sub_info_parent.hasClass("expand") ? 'less' : 'more');
        });

    });
</script>
</body>
</html>