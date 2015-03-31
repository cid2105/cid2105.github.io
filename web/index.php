<?php

// require('../vendor/autoload.php');

// $app = new Silex\Application();
// $app['debug'] = true;

// // Register the monolog logging service
// $app->register(new Silex\Provider\MonologServiceProvider(), array(
//   'monolog.logfile' => 'php://stderr',
// ));

// // Our web handlers

// $app->get('/', function() use($app) {
//   $app['monolog']->addDebug('logging output.');
//   return 'Hello';
// });

// $app->run();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Cole Diamond</title>
<meta name="description" content="The Spice Lounge" />
<meta name="keywords" content="The Spice Lounge" />
<meta name="author" content="The Spice Lounge" />

<!-- Loading Google Web fonts-->
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!--General CSS-->
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="assets/css/simple-line-icons.css"/>
<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" />

<!--Menu-->
<link rel="stylesheet" href="assets/css/menu.css" type="text/css" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/slicknav.css">

<!--Optional CSS Starts-->

<!--Gallery Cycle Slider-->
<link rel="stylesheet" href="assets/css/cycleslider.css">
<!--Gallery Cycle Slider End-->

<!--Gallery SuperSized Slider-->
<link rel="stylesheet" href="assets/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="assets/css/supersized.shutter.css" type="text/css" media="screen" />
<!--Gallery SuperSized Slider End-->

<!--Gallery Filer-->
<link type="text/css" rel="stylesheet" href="assets/css/portfolio-new.css"/>
<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" />
<!--Gallery Filer End-->

<!--Optional CSS Ends-->

<!--Typewriter Style And Color-->
<link rel="stylesheet" href="assets/css/typewriter.css">
<link rel="stylesheet" href="assets/css/colors/typewriter-color.css" id="color" type="text/css" />
<!--Typewriter Style And Color-->


<link rel="shortcut icon" href="assets/assets/images/favicon.ico" />  
<link rel="apple-touch-icon" href="assets/assets/images/apple_touch_icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="assets/assets/images/apple_touch_icon_72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="assets/assets/images/apple_touch_icon_114x114.png" />

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

</head>
<body>

<!--PRELOADER STARTS-->
<section id="jSplash">
  <div class="spinner">
      <div class="cube cube0"></div>
      <div class="cube cube1"></div>
      <div class="cube cube2"></div>
      <div class="cube cube3"></div>
      <div class="cube cube4"></div>
      <div class="cube cube5"></div>
      <div class="cube cube6"></div>
      <div class="cube cube7"></div>
      <div class="cube cube8"></div>
      <div class="cube cube9"></div>
      <div class="cube cube10"></div>
      <div class="cube cube11"></div>
      <div class="cube cube12"></div>
      <div class="cube cube13"></div>
      <div class="cube cube14"></div>
      <div class="cube cube15"></div>
  </div>
</section>
<!--PRELOADER ENDS-->

<!--Nice Scroll-->           <!--Used For Mobile Resolution-->
<div id="menutop"></div>
<!--Nice Scroll--> 



<!--Wrapper 
=============================-->
<div id="wrapper">
<div id="mask">
    
<!--Header 
=============================-->
<div id="header" class="header">
    <!--  Menu section for sub page and mobile resolution -->
    <div class="menu-inner">
        <div class="container">
            <div class="row">
                <div class="header-table col-md-12 header-menu">
                    <!--  Logo section -->
                    <div class="logo">
                        <a href="#home"  class="nav-link"><img src="assets/img/typer-logo.png" alt="Logo"></a>
                    </div>
                   <!--  // Logo section -->
                
                <!--  Menu section -->
                <nav class="main-nav">
                    <a href="#" class="nav-toggle"></a>
                <ul id="sub-nav" class="nav">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#fullwidth" class="nav-link">About Me</a></li>
                    <li><a href="#skills3" class="nav-link">Skills</a></li>
                  <li><a href="#resume" class="nav-link">Resume</a></li>
                    <li><a href="#projectmodal" class="nav-link">Projects</a></li>
                    <li><a href="#references" class="nav-link">References</a></li>
                  <li><a href="#contactform" class="nav-link">Contact</a></li>
                </ul>
                </nav>
                <!--  // Menu section -->
                </div>
            </div>
        </div>
    </div>
    <!--  Menu section for sub page and mobile resolution -->
</div>
<!-- // Header 
=============================-->



<!--Home Page
=============================-->
<div id="home" class="item">
    <div class="bgimg"></div>
    <div class="pattern_bg"></div>
<div class="clearfix">
    <div class="header_details">
        <div class="container">
            <div class="clearfix">
                <div class="header_icons accura-header-block accura-hidden-2xs">
                    <ul class="accura-social-icons accura-stacked accura-jump accura-full-height accura-bordered accura-small accura-colored-bg clearFix">
                        <!--  Social Icon 1-->
                        <!-- <li id="1">
                            <a href="http://www.facebook.com" target="_blank" class="accura-social-icon-facebook circle">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li> -->
                        <!--Social Icon 1--> -->
                        
                        <!--Social Icon 2-->
                        <li id="2">
                            <a href="http://www.twitter.com/coal_diamond" target="_blank" class="accura-social-icon-twitter circle">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 2-->
                        
                        <!--Social Icon 3-->
                        <li id="3">
                            <a href="https://plus.google.com/+ColeDiamondPlus/" target="_blank" class="accura-social-icon-gplus circle">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 3-->
                        
                        
                        <!--Social Icon 5-->
                        <li id="5">
                            <a href="https://www.linkedin.com/in/colediamond" target="_blank" class="accura-social-icon-linkedin circle">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <!-- // Social Icon 5-->
                        
                    </ul>
                </div>
                <div class="call">
                    <div class="home_address">
                        <a href="mailto:info@mathewjoyson.com">
                            <i class="fa fa-envelope"></i>cole.ian.diamond@gmail.com
                        </a>
                    </div>
                    <i class="fa fa-phone"></i>&nbsp;&nbsp;+1 516 996 7037
            </div>
            </div>
        </div>
    
    <!-- Mainheader --> 
    <div class="mainheaderslide" id="slide">
<!--  Menu section for main page -->
    <div id="mainheader" class="header">
            <div class="menu-inner">
                <div class="container">
                    <div class="row">
                        <div class="header-table col-md-12 header-menu">
                            <!--  Logo Desktop section -->
                                <div class="logo">
                                    <a href="#home"  class="nav-link"><img src="assets/img/typer-logo.png" alt="Logo"></a>
                                </div>
                            <!--  // Logo Desktop section -->
                        <!--  Menu section -->
                        <nav class="main-nav">
                            <a href="#" class="nav-toggle"></a>
                        <ul id="home_scroll" class="nav">
                            <li><span class="nav-link selected1">Home</span></li>
                            <li><a href="#fullwidth" class="nav-link">About Me</a></li>
                            <li><a href="#skills3" class="nav-link">Skills</a></li>
                          <li><a href="#resume" class="nav-link">Resume</a></li>
                            <li><a href="#projectmodal" class="nav-link">Projects</a>
                          </li>
                          <li><a href="#references" class="nav-link">References</a></li>
                          <li><a href="#contactform" class="nav-link">Contact</a></li>
                        </ul>
                        </nav>
                        <!--  // Menu section -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!--  Menu section for main page -->
</div>
<!-- // Mainheader -->
    </div>

<!--Home Content-->
<!-- Typer -->
<div class="clearfix">
    <div class="clearfix container center">
        <div class="home_title" id="home_title">Hello, I'm <span class="bold">Cole Diamond</span></div>
       <div id="typed" class="home_title_type"></div>
    </div>
</div>
<!-- // Typer -->
<!-- // Home Content-->

</div>
</div>
<!-- // Home Page
=============================-->



<!-- Skills
=============================--> 

<div id="skills3" class="item subpage">
    <div class="content">
        <div class="content_overlay"></div>
    <div class="content_inner">
        <div class="row contentscroll">
            <div class="container">
                <div class="col-md-6 empty">&nbsp;</div>
            <div class="col-md-6 content_text">
                <div class="clearfix" >
                    <h1>My Skills</h1>
                    <div class="tags">I'm a full stack engineer specializing in Machine Learning solutions. I also love tinkering with microcontrollers.</div>
                <div class="pad_top40 clearfix">
                    <h2 class="pad_top13">Programming Skills <i class="fa fa-file-code-o sub-shadow"></i></h2>
                        <div class="clearfix pad_top20">
                            <ul class="progress_bars">
                                <!--Progress 1-->
                                <li>
                                    <div class="progress_heading">Python</div>
                                    <div class="bar-wrap">
                                        <span data-width="90"></span> 
                                    </div>
                                </li> 
                                <!-- // Progress 1-->

                                <!--Progress 2-->
                                <li>
                                    <div class="progress_heading">Ruby</div>
                                    <div class="bar-wrap">
                                        <span data-width="87"></span> 
                                    </div>
                                </li> 
                                <!-- // Progress 2-->

                                <li>
                                    <div class="progress_heading">SQL</div>
                                    <div class="bar-wrap">
                                        <span data-width="85"></span> 
                                    </div>
                                </li> 

                                <!--Progress 3-->
                                <li>
                                    <div class="progress_heading">Java</div>
                                    <div class="bar-wrap">
                                        <span data-width="83"></span> 
                                    </div>
                                </li> 
                                <!-- // Progress 3-->

                                <!--Progress 4-->
                                <li>
                                    <div class="progress_heading">C/C++</div>
                                    <div class="bar-wrap">
                                        <span data-width="80"></span> 
                                    </div>
                                </li> 
                                <!-- // Progress 4-->
                            
                                <!--Progress 5-->
                                <li>
                                    <div class="progress_heading">Matlab</div>
                                    <div class="bar-wrap">
                                        <span data-width="75"></span>
                                    </div>
                                </li>
                                <!-- // Progress 5-->
                                
                                <!--Progress 6-->
                                <li>
                                    <div class="progress_heading">R</div>
                                    <div class="bar-wrap">
                                        <span data-width="60"></span>
                                    </div>
                                </li>
                                <!-- // Progress 3-->
                                
                                <!--Progress 4-->
                                <li>
                                    <div class="progress_heading">Objective C</div>
                                    <div class="bar-wrap">
                                        <span data-width="40"></span>               
                                    </div>
                                </li>
                                <!-- // Progress 4-->
                            </ul>
                        </div>
                
                        <div class="pad_top50">
                            <h2 class="pad_top13">Web Development <i class="fa fa-paint-brush sub-shadow"></i></h2>
                                <div class="clearfix pad_top20">
                                    <ul class="progress_bars">
                                        <!--Progress 6-->
                                        <li>
                                            <div class="progress_heading">HTML</div>
                                            <div class="bar-wrap">
                                                <span data-width="95"></span>                
                                            </div>
                                            </li> 
                                        <!-- // Progress 6-->
                                        
                                        <!--Progress 7-->
                                        
                                        <li>
                                            <div class="progress_heading">JQuery</div>
                                            <div class="bar-wrap">
                                                <span data-width="90"></span>                
                                            </div>
                                        </li>
                                        <!-- // Progress 7-->
                                        
                                        <!--Progress 8-->
                                        <li>
                                            <div class="progress_heading">CSS</div>
                                            <div class="bar-wrap">
                                                <span data-width="87"></span>                
                                            </div>
                                        </li>
                                        <!-- // Progress 8-->

                                        <!--Progress 6-->
                                        <li>
                                            <div class="progress_heading">Rails</div>
                                            <div class="bar-wrap">
                                                <span data-width="85"></span>                
                                            </div>
                                            </li> 
                                        <!-- // Progress 6-->

                                        <!--Progress 6-->
                                        <li>
                                            <div class="progress_heading">Django</div>
                                            <div class="bar-wrap">
                                                <span data-width="80"></span>                
                                            </div>
                                            </li> 
                                        <!-- // Progress 6-->

                                        <!--Progress 8-->
                                        <li>
                                            <div class="progress_heading">PHP</div>
                                            <div class="bar-wrap">
                                                <span data-width="65"></span>                
                                            </div>
                                        </li>
                                        <!-- // Progress 8-->
                                        
                                    </ul>
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

<!-- // Skills
=============================--> 



<!-- Resume
=============================--> 

<div id="resume" class="item subpage">
    <div class="content">
        <div class="content_overlay"></div>
    <div class="content_inner">
        <div class="row contentscroll">
            <div class="container">
                <div class="col-md-6 empty">&nbsp;</div>
            <div class="col-md-6 content_text">
                <div class="clearfix">
                    <h1>Resume</h1>
                    <div class="tags">Quantitative Training. Managerial Experience. Striving to engineer successful outcomes in the finance and technology sectors.</div>

                <div class="pad_top20">
                    <div class="pad_top13 clearfix">
                        <h2 class="pad_top13">Education &amp; Certifications</h2>
                    <ul class="cbp_tmtimeline">
                        <!--Time-Line 3-->
                        <li>
                            <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>2015</span> <span>Graduated</span></time>
                        <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                            <div class="cbp_tmlabel element_from_right">
                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                <h3>Harvard University</h3>
                                <div class="content-smalltxt">M.S. Computational Science and Engineering<span class="bullet">–</span><span class="bold">Cambridge, Massachussetts</span></div>
                            </div>
                        </li>
                        <!-- // Time-Line 3-->
                        
                        <!--Time-Line 4-->
                        <li class="pad_top20">
                            <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>2013</span> <span>Graduated</span></time>
                        <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                            <div class="cbp_tmlabel element_from_right">
                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                <h3>Columbia University</h3>
                                <div class="content-smalltxt">B.S. Computer Science, Economics Minor <span class="bullet">–</span><span class="bold">New York, New York</span></div>
                                <ul class="content-smalltxt" style="font-size:10px;">
    <li>GPA: 3.7,</li>
    <li>Deans List all semesters</li>
    <li>President: ACM</li>
  <li>Associate Principal Cellist of Columbia University Orchestra, Spring 2009</li>
</ul>
 
                            </div>
                        </li>
                        <!-- // Time-Line 4-->
                        
                        <!--Time-Line 5-->
                        <li class="pad_top20">
                            <time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>2009</span> <span>Graduated</span></time>
                        <div class="cbp_tmicon"><i class="fa fa-book"></i></div>
                            <div class="cbp_tmlabel element_from_right">
                                <i class="fa fa-graduation-cap resume-shadow"></i>
                                <h3>Great Neck North High School</h3>
                                <div class="content-smalltxt"><span class="bullet">–</span><span class="bold">Great Neck, New York</span></div><ul class="content-smalltxt" style="font-size:10px;">
    <li>Valedictorian</li>
    <li>National AP Scholar (14 APs)</li>
    <li>All-state Cellist</li>
  <li>SAT: 2360/2400</li>
  <li>SAT II: Math 800/800, History: 790/800,Physics 780/800</li>
</ul>


                            </div>
                        </li>
                        <!-- // Time-Line 5-->
                    </ul>
                    </div>
                </div>

                <div class="pad_top40 clearfix">
                    <h2 class="pad_top13">Professional Experience</h2>

                <ul class="cbp_tmtimeline">
                    <!--Time-Line 1-->
                    <li>
                        <time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Sep '13</span> <span>to Sep '14</span></time>
                    <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                        <div class="cbp_tmlabel element_from_right">
                            <i class="fa fa-book resume-shadow"></i>
                            <h3>Program Manager - Microsoft</h3>
                        <div class="content-smalltxt">Program Management<span class="bullet">•</span> Application Development</div>
                            <p class="pad_top13">
                                </p><ul class="content-smalltxt" style="font-size:10px;">
                                    <li>Played an instrumental role in managing resources and synergizing efforts of engineers across development, test and design disciplines to create feed-aggregating infrastructure to power a local news application</li>
                                    <li>Architected, orchestrated and shipped a search feature for the new msn</li>
                                    <li>Managed strategic relationships with a top news provider to specify logistics and cement process flow for feed ingestion of audio media</li>
                                </ul>
                            <p></p>
                        </div>
                    </li>
                    <!-- // Time-Line 1-->
                    
                    <!--Time-Line 2-->
                    <li class="pad_top20">
                        <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>Mar '13</span> <span>to Aug '13</span></time>
                    <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                        <div class="cbp_tmlabel element_from_right">
                            <i class="fa fa-book resume-shadow"></i>
                            <h3>Dorm Room Fund - Investment Team Partner</h3>
                        <div class="content-smalltxt">Venture Capital</div>
                            <p class="pad_top13">
                                </p><ul class="content-smalltxt" style="font-size:10px;">
                                    <li>Selected from a pool of hundreds of applicants to serve on First Round Capital’s Dorm Room Fund investment team that oversaw the allocation of $500,000 into student-run startups</li>
                                    <li>Played an instrumental role in managing resources and synergizing efforts of engineers across development, test and design</li>
                                    <li>Sourced deal-flow, and led business development efforts for the inaugural New York City team</li>
                                </ul>
                            <p></p>
                        </div>
                    </li>
                    <!-- // Time-Line 3-->

                    <!--Time-Line 3-->
                    <li class="pad_top20">
                        <time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>May '12</span> <span>to Aug '12</span></time>
                    <div class="cbp_tmicon"><i class="fa fa-pencil"></i></div>
                        <div class="cbp_tmlabel element_from_right">
                            <i class="fa fa-book resume-shadow"></i>
                            <h3>Black Rock - Portfolio Analytics Group Analyst</h3>
                        <div class="content-smalltxt">Financial Services<span class="bullet">•</span> Risk Management</div>
                            <p class="pad_top13">
                                </p><ul class="content-smalltxt" style="font-size:10px;">
                                    <li>Streamlined workflow and produced enhancements to in-house analytics tools</li>
                                    <li>Coordinated with the Municipal Bond Portfolio Managers to construct a VBA-based inventory surveillance tool.</li>
                                    <li>Introduced critical safeguard into the analytics production jobstream to backup factor parameters in case of data corruption</li>
                                    <li>Released embedded perl script to graphically depict night jobs dependency hierarchies using the graphviz library.</li>
                                </ul>
                            <p></p>
                            
                        </div>
                    </li>
                    <!-- // Time-Line 3-->

                </ul>
                </div>
                
                
                </div>
            </div>

            
            </div>
        </div>
    </div>
    </div>
</div>

<!-- // Resume
=============================--> 


<!-- Portfolio Modal
=============================-->

<!-- PORTFOLIO STARTS
===============================================================================================-->

<div id="projectmodal" class="item projectmodal">
<!-- Portfolio Section --> 
<div class="content contentscroll">
<section class="portfolio">   
  <section class="section">
    <div class="text-center">
  <h1>Sample Work</h1>
    <div class="tags">I love tinkering with cool hardware, web development, and machine learning. Below are some of my pet projects.</div>
    </div>
    <div class="container">
      <!-- Portfolio Filters -->
     <ul class="filters">
          <li class="filter" data-filter="all">View All</li>
          <li class="filter" data-filter="software">Software</li>
          <li class="filter" data-filter="hardware">Hardware</li>
      </ul>
      <!-- End Portfolio Filters -->
    </div>
    <div class="portfolio-top"></div> 
 <!-- Portfolio Grid -->
    <ul id="portfolio-grid-modal">
      <li class="mix hardware mix_all">
        <a href="#project_title1" data-toggle="modal"> 
        <img src="assets/img/gallery/fingerprint.png"  alt="">
        </a>
      </li>
      <li class="mix software mix_all">
        <a href="#project_title2" data-toggle="modal"> 
        <img src="assets/img/gallery/emotion_classification.png" alt="">
        </a>
      </li>
      <li class="mix hardware mix_all">
        <a href="#project_title3" data-toggle="modal"> 
        <img src="assets/img/gallery/door_opener.png"  alt="text-message triggered door opener">
        </a>
      </li>
      <li class="mix hardware mix_all">
        <a href="#project_title4" data-toggle="modal"> 
        <img src="assets/img/gallery/weight_alarm2.png" alt="weight alarm clock">
        </a>
      </li>
      <li class="mix hardware mix_all">
        <a href="#project_title5" data-toggle="modal"> 
        <img src="assets/img/gallery/speech_to_text.png" alt="">
        </a>
      </li>
      <li class="mix software mix_all">
        <a href="#project_title6" data-toggle="modal"> 
        <img src="assets/img/gallery/greek_gavel.png" height="250" alt="">
        </a>
      </li>
      <li class="mix software mix_all">
        <a href="#project_title7" data-toggle="modal"> 
        <img src="assets/img/gallery/matchume.png" alt="">
        </a>
      </li>
      <li class="mix software mix_all">
        <a href="#project_title8" data-toggle="modal"> 
        <img src="assets/img/gallery/stakd.png" alt="">
        </a>
      </li>
    </ul>
    <!-- End Portfolio Grid -->
  </section>
  </section>
  </div>


    <!-- Project Title1 modal 
========================================================================================================================================-->
            <div id="project_title1" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title1" aria-hidden="true">
                <!-- Modal body start -->
                <div class="modal-body color_background">
                    <!-- Modal container -->
                    <div class="container">
                        <div class="row">
                            <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                            <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title8" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title2" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                            
                            <!-- Project Heading -->
                            <div class="clearfix col-lg-12">
                                <div class="port-title clearfix">
                                    <h1>Wings of Beauty</h1>
                                    <div class="tags">Static Portfolio</div>
                                </div>
                                
                                
                            </div>
                            <!-- // Project Heading -->
                            <div class="pad_top30">
                            <div class="col-md-6 mar_bot30">
                                <img src="assets/img/gallery/15.jpg" alt="" class="img-responsive img_width"/>                            </div>
                             <div class="col-md-6 project_content">
                            <h5>Project Descriptions</h5>
                                <p class="pad_top13">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh
                                sed elit mattis adipiscing. Fusce in hendrerit purus. Suspendisse potenti.
                                Proin quis odio, dapibus mauris. Donec nisi libero, adipiscing
                                id pretium eget, consectetur sit amet leo.</p>
                                <div class="project_details">
                                <h5>Project Details</h5>
                                <div class="clearfix pad_top13">    
                                
                                <div class="pinfo clearfix">
                                    <span class="input-box">Date </span>
                                    <span class="pright">15th December 2013</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Categories </span>
                                    <span class="pright">Brochures</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Client </span>
                                    <span class="pright">John Doe</span>
                                </div>
                                    
                                </div>
                                </div>
                            <div class="clearfix pad_top10">
                                <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>
                             </div>
                            </div>   
                            </div>
                        </div>
                    </div>
                    <!-- // Modal container -->
                </div>
                <!-- // Modal body start -->
            </div>
            <!-- // Project Title1 modal -->
        
            <!-- Project Title2 modal 
========================================================================================================================================-->
            <div id="project_title2" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title2" aria-hidden="true">
                <div class="modal-body color_background">
                    <div class="container">
                        <div class="row">
                            <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title1" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title3" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                        
                            <div class="clearfix col-lg-12">
                                <div class="port-title clearfix">
                                    <h1>I Believe I Can Fly</h1>
                                    <div class="tags">Landscape Portfolio</div>
                                </div>
                            </div>
                        
                            <div class="clearfix col-lg-12 pad_top30">
                                <img src="assets/img/gallery/26.jpg" alt=""  class="img-responsive port-modal-img"/>                            </div>
                        
                            <div class="project_content_top">
                                <div class="col-lg-12 clearfix text-left">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur  elit. Cras vel turpis laoreet, auctor sapien sit amet, condimentum metus.</p>
                                        <div class="clearfix pad_top20">
                                            <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>                                   </div>
                                    </div>
                                    <div class="col-lg-4 mar_bot30 restop30">
                                        <p>Proin eleifend velit et lacus aliquet sodales. Ut condimentum lacus quis tellus scelerisque rutrum. Duis at auctor mi. Sed scelerisque eget.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Project Details</h5>
                                        <div class="clearfix pad_top13">
                                        
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Date </span>
                                            <span class="pright">15th December 2013</span>
                                        </div>
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Categories </span>
                                            <span class="pright">Brochures</span>
                                        </div>
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Client </span>
                                            <span class="pright">John Doe</span>
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
        <!-- //Project Title2 modal -->
        
        <!-- Project Title3 modal 
========================================================================================================================================-->
        <div id="project_title3" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title3" aria-hidden="true">
            <div class="modal-body color_background">
                <div class="container">
                    <div class="row">
                        <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title2" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title4" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                    
                        <div class="clearfix col-lg-12">
                            <div class="port-title clearfix">
                                <h1>Flying Rose</h1>
                                <div class="tags">Vimeo Portfolio</div>
                            </div>
                        </div>
                    
                        <div class="col-md-12 text-center pad_top30">
                        <div class="video_containers">
                        <iframe src="http://player.vimeo.com/video/85330977?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" ></iframe>
</div>  
                      </div>
                    
                        <div class="clearfix text-left project_content_top">
                            <div class="col-lg-8">
                                <div class="clearfix">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel turpis laoreet, auctor sapien sit amet, condimentum metus. Vivamus vehicula nisl id rutrum volutpat. Mauris ut mauris in dui .pretium porttitor ut quis sapien.</p>
                                </div>
                                <div class="clearfix pad_top20">
                                    <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>
                                </div>
                            </div>
                            <div class="col-lg-4  restop30">
                                <h5 class="martop0">Project Details</h5>
                                <div class="clearfix pad_top13">
                                
                                <div class="pinfo clearfix">
                                    <span class="input-box">Date </span>
                                    <span class="pright">15th December 2013</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Categories </span>
                                    <span class="pright">Brochures</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Client </span>
                                    <span class="pright">John Doe</span>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Project Title3 modal -->
        
        <!-- Project Title4 modal 
========================================================================================================================================-->
        <div id="project_title4" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title4" aria-hidden="true">
            <div class="modal-body color_background">
                <div class="container">
                    <div class="row">
                        <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title3" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title5" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                    
                        <div class="clearfix col-lg-12">
                            <div class="port-title clearfix">
                                <h1>Shy on Sky</h1>
                                <div class="tags">Portfolio with Slider</div>
                            </div>
                        </div>
                        <div class="clearfix col-md-12 pad_top30">  
                            <div id="myCarousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                
                                <div class="carousel-inner">
                                    <div class="item active"><img src="assets/img/gallery/24.jpg" class="img-responsive img_width" alt=""/></div>
                                    <div class="item"><img src="assets/img/gallery/25.jpg" class="img-responsive img_width" alt=""/></div>
                                    <div class="item"><img src="assets/img/gallery/23.jpg" class="img-responsive img_width" alt=""/></div>
                                </div>  
                            </div>          
                        </div>
                    </div>
                
                    <div class="row  project_content_top">
                                <div class="col-lg-12 clearfix text-left">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur  elit. Cras vel turpis laoreet, auctor sapien sit amet, condimentum metus.</p>
                                        <div class="clearfix pad_top20">
                                            <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>                                   </div>
                                    </div>
                                    <div class="col-lg-4 mar_bot30  restop30">
                                        <p>Proin eleifend velit et lacus aliquet sodales. Ut condimentum lacus quis tellus scelerisque rutrum. Duis at auctor mi.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Project Details</h5>
                                        <div class="clearfix pad_top13">
                                        
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Date </span>
                                            <span class="pright">15th December 2013</span>
                                        </div>
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Categories </span>
                                            <span class="pright">Brochures</span>
                                        </div>
                                        <div class="pinfo clearfix">
                                            <span class="input-box">Client </span>
                                            <span class="pright">John Doe</span>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                  </div>                    
                </div>
            </div>
        </div>
        <!-- //Project Title4 modal -->
        
        <!-- Project Title5 modal 
========================================================================================================================================-->
        <div id="project_title5" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title5" aria-hidden="true">
            <div class="modal-body color_background">
                <div class="container">
                    <div class="row">
                        <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title4" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title6" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                    
                        <div class="clearfix col-lg-12">
                            <div class="port-title clearfix">
                                <h1>Portraitable Beauty</h1>
                                <div class="tags">Landscape Portfolio Images</div>
                            </div>
                       </div>
                    
                        <div class="clearfix col-lg-12 pad_top30">              
                            <img src="assets/img/gallery/26.jpg" alt="" class="img-responsive port-modal-img"/>
                            <img src="assets/img/gallery/25.jpg" alt="" class="pad_top10 img-responsive port-modal-img"/>                        </div>                 
                        <div class="clearfix text-left project_content_top">
                            <div class="col-lg-8">
                                <div class="clearfix">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel turpis laoreet, auctor sapien sit amet, condimentum metus. Vivamus vehicula nisl id rutrum volutpat. Mauris ut mauris in dui .pretium porttitor ut quis sapien.</p>
                                </div>
                                <div class="clearfix pad_top20">
                                <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>
                                </div>
                            </div>
                            <div class="col-lg-4 restop30">
                                <h5 class="martop0">Project Details</h5>
                                <div class="clearfix pad_top13">
                                
                                <div class="pinfo clearfix">
                                    <span class="input-box">Date </span>
                                    <span class="pright">15th December 2013</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Categories </span>
                                    <span class="pright">Brochures</span>
                                </div>
                                <div class="pinfo clearfix">
                                    <span class="input-box">Client </span>
                                    <span class="pright">John Doe</span>
                                </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Project Title5 modal -->
    
        <!-- Project Title6 modal 
========================================================================================================================================-->
        <div id="project_title6" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title6" aria-hidden="true">
            <div class="modal-body color_background">
                <div class="container">
                    <div class="row">
                        <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title5" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title7" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                    
                        <div class="clearfix col-lg-12">
                            <div class="port-title clearfix">
                                <h1>Buttery Beauty</h1>
                                <div class="tags">3 BY 1 Image Portfolio</div>
                            </div>
                        </div>
                        
                        <div class=" pad_top30">
                        <div class="col-md-8 mar_bot30">
                            <img src="assets/img/gallery/6.jpg" alt="" class="img-responsive img_width"/>                        </div>
                         
                         <div class="col-md-4 project_content">
                            <h5>Project Descriptions</h5>
                            <p class="pad_top13">Lorem ipsum dolor sit amet, adipiscing elit. Aenean vitae lacinia justo. Lorem ipsum amet, consectetur adipiscing elit. Suspendisse volutpat quam vitae enim hendrerit venenatis.<br/><br/> Integer aliquet ac ipsum id pulvinar. Nulla varius ut congue bibendum. Quisque luctus laoreet.</p>
                        
                        <div class="team-line-port"></div>
                        
                        <div class="project_details">
                                <h5>Project Details</h5>
                                <div class="clearfix pad_top13">    
                                    
                                    <div class="pinfo clearfix">
                                        <span class="input-box">Date </span>
                                        <span class="pright">15th December 2013</span>
                                    </div>
                                    <div class="pinfo clearfix">
                                        <span class="input-box">Categories </span>
                                        <span class="pright">Brochures</span>
                                    </div>
                                    <div class="pinfo clearfix">
                                        <span class="input-box">Client </span>
                                        <span class="pright">John Doe</span>

                                    </div>

                                </div>
                                </div>
                            <div class="clearfix pad_top10">
                                <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>
                            </div>
                        </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Project Title6 modal -->
    
        <!-- Project Title7 modal 
========================================================================================================================================-->
        <div id="project_title7" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title7" aria-hidden="true">
            <div class="modal-body color_background">
                <div class="container">
                    <div class="row">
                        <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title6" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title8" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
                    
                        <div class="clearfix col-lg-12">
                            <div class="port-title clearfix">
                                <h1>Shy on Sky</h1>
                                <div class="tags">Portfolio with Slider</div>
                            </div>
                        </div>
                        <div class="clearfix col-md-12 pad_top30">  
                            <div id="myCarousel1" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                      <div class="item active"><img src="assets/img/gallery/24.jpg" class="img-responsive img_width" alt=""/></div>
                                    <div class="item"><img src="assets/img/gallery/25.jpg" class="img-responsive img_width" alt=""/></div>
                                    <div class="item"><img src="assets/img/gallery/23.jpg" class="img-responsive img_width" alt=""/></div>
                                </div>  
                            </div>          
                        </div>
                    </div>
                
                    <div class="row  project_content_top">
                                <div class="clearfix text-left">
                                    <div class="col-lg-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur  elit. Cras vel turpis laoreet, auctor sapien sit amet, condimentum metus. Vivamus vehicula nisl id rutrum volutpat.</p>
                                        <div class="clearfix pad_top20">
                                            <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>                                   </div>
                                    </div>
                                    <div class="col-lg-4 mar_bot30  restop30">
                                        <p>Proin eleifend velit et lacus aliquet sodales. Ut condimentum lacus quis tellus scelerisque rutrum. Duis at auctor mi. Sed scelerisque mi dui, eget libero ornare eget.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Project Details</h5>
                                        <div class="clearfix pad_top13">
                                            
                                            <div class="pinfo clearfix">
                                                <span class="input-box">Date </span>
                                                <span class="pright">15th December 2013</span>
                                            </div>
                                            <div class="pinfo clearfix">
                                                <span class="input-box">Categories </span>
                                                <span class="pright">Brochures</span>
                                            </div>
                                            <div class="pinfo clearfix">
                                                <span class="input-box">Client </span>
                                                <span class="pright">John Doe</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                  </div>                    
                </div>
            </div>
        </div>
        <!-- //Project Title7 modal -->
    
        <!-- Project Title8 modal 
========================================================================================================================================-->
    <div id="project_title8" class="modal contentscroll fade white_bg" tabindex="-1" role="dialog" aria-labelledby="project_title8" aria-hidden="true">
    <div class="modal-body color_background">
    <div class="container">
    <div class="row">
    
    <!-- Project navigation -->
                            <div class="clearfix col-lg-12">
                                <div class="project_navigation">
                                <div class="navigation_button"><a href="#project_title7" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-left"></i></a></div>
                                <div class="navigation_button1"><a href="#" data-dismiss="modal"><i class="fa fa-times"></i></a></div>
                                <div class="navigation_button"><a href="#project_title1" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true"><i class="fa fa-angle-right"></i></a></div>
                              </div>
                            </div>
                            <!-- // Project navigation -->
    
    <div class="clearfix col-lg-12">
        <div class="port-title clearfix">
            <h1>I Believe I Can Fly</h1>
            <div class="tags">You tube Video</div>
        </div>
    </div>
    
    
    <div class="clearfix col-lg-12 pad_top30">
    <div class="video_containers">
        <iframe src="http://www.youtube.com/embed/iU8iA7jfrIg?html5=1" width="500" height="281" ></iframe>
    </div>
</div>

<div class="col-lg-12 marleft_10 clearfix text-left project_content_top">
<div class="row">
<div class="col-lg-8">
<div class="clearfix"><p>In interdum ante nisi, vel venenatis metus ullamcorper et. Duis malesuada sapien ac nunc congue bibendum. Nam quis risus vulputate risus faucibus ultrices. Nullam ultricies dui justo, quis imperdiet nunc fringilla non. Sed luctus mattis pellentesque. </p></div>
<div class="clearfix pad_top20">
                                <a href="#" class="btn btn-3 btn-3e nav-link" target="_blank">Live Preview</a>
              </div>
</div>

<div class="col-lg-4  restop30">
<h5 class="martop0">Project Details</h5>
<div class="clearfix pad_top13">

    <div class="pinfo clearfix">
        <span class="input-box">Date </span>
        <span class="pright">15th December 2013</span>
    </div>
    <div class="pinfo clearfix">
        <span class="input-box">Categories </span>
        <span class="pright">Brochures</span>
    </div>
    <div class="pinfo clearfix">
        <span class="input-box">Client </span>
        <span class="pright">John Doe</span>
    </div>

</div>
</div>
</div>
</div>
    </div>
    </div>
    </div>
    </div>
    <!-- //Project Title8 modal -->

</div>
<!-- Portfolio CONTENT -->

<!-- Portfolio Modal
=============================-->


<!-- Pages
=============================-->


<!-- Full-Width
=============================-->    

<div id="fullwidth" class="item subpage fullwidth">
    <div class="content">
        <div class="content_overlay_fullwidth"></div>
    <div class="content_inner">
        <div class="row contentscroll">
            <div class="container">
            <div class="col-md-12 content_text">
                <div class="clearfix" >
                    <h1>About Me</h1>
                    <div class="tags">A little about myself, my interests and background.</div>
                <div class="row clearfix pad_top40">
                    <!--Left Section-->
                    <div class="about col-md-6">
                        <div class="subtitle">My Story</div>
                         <p class="pad_top13">Hailing from Great Neck, New York, Cole Diamond is a alumnus of <span class="subtitle">Columbia Engineering</span> where he majored in <span class="subtitle">Computer Science</span> and minored in <span class="subtitle">Economics</span>. Currently, Cole Diamond is a student in the <a class="subtitle" href="http://www.seas.harvard.edu/programs/graduate/computational-science-and-engineering/master-of-science-in-cse">Computational Science and Engineering masters program</a> at <span class="subtitle">Harvard</span>. A former member of the <a class="subtitle" href="http://www.dormroomfund.com/about" target="_blank">Dorm Room Fund</a> and <a class="subtitle" href="http://apply.hackny.org" target="_blank">HackNY Fellow</a> (Class of 2011), Cole is passionate about technological entrepreneurship. Cole is also a former <span class="subtitle">Program Manager</span> at <span class="subtitle">Microsoft</span>.</p>

                         <br/>
                         <p>Please feel free to download my resume below.</p>
                    </div>
                    <!--Left Section-->
                    
                    <!--Right Section-->
                    <div class="about col-md-6">
                        <div class="subtitle">Personal Info <i class="fa fa-user sub-shadow"></i></div>
                            <div class="clearfix pad_top13">
                                <!--Info 1-->
                                <div class="pinfo clearfix">
                                    <span class="input-box">Name </span>
                                    <span class="pright">Cole Diamond</span> 
                                </div>
                                <!-- // Info 1-->
                                
                                <!--Info 4-->
                                <div class="pinfo clearfix">
                                    <span class="input-box">Phone</span> 
                                    <span class="pright">+1516-996-7037</span>  
                                </div>
                                <!-- // Info 4-->
                                
                                <!--Info 5-->
                                <div class="pinfo clearfix">
                                    <span class="input-box">E-mail</span>
                                    <span class="pright"><a href="#">me@colediamond.com</a></span> 
                                </div>
                                <!-- // Info 5-->
                            </div>
                    </div>
                     <!--Right Section-->
                </div>      
                    <!--Buttons-->                                  
                    <div class="clearfix">
                        <a href="resume.pdf" class="btn btn-3 btn-3e link"><i class="fa fa-download down_icon"></i>Download Resume</a>                                      </div>
                    <!--Buttons-->
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Full-Width
=============================-->







<!-- References
=============================--> 

<div id="references" class="item subpage">
    <div class="content">
        <div class="content_overlay"></div>
    <div class="content_inner">
        <div class="row contentscroll">
            <div class="container">
                <div class="col-md-6 empty">&nbsp;</div>
            <div class="col-md-6 content_text">
                <div class="clearfix" >
                    <h1>References</h1>
                    <div class="tags"> Some awesome people I've had the pleasure to work with.</div>
                <div class="clearfix">
                    <div class="pad_top40">
                        <div class="pad_top20 clearfix">
                            <div class="row">
                                <!--Team 1-->
                                <div class="clearfix team">
                                    <div class="col-md-3">
                                        <div class="team-img">
                                            <img src="assets/img/daniel_weinstock.jpg" width="330" height="330" class="img-responsive" alt="">
                                        <div class="person-overlay">
                                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram"></i></a>                                                                         </div>
                                        </div>
                                    </div>
                                    <div class="team-space col-md-9">
                                        <div class="team-box">
                                            <i class="fa fa-users team-shadow"></i>
                                            <div class="team-title">Dr. Daniel Weinstock</div>
                                        <div class="content-smalltxt">Director, Computational Science and Engineering Program at Harvard</div>
                                            <p>I am a GUI hardwareer, specializing in user experience for web-based applications and websites with <span class="bold">11 years of experience </span>. voluptate velit esse cillum dolore eu fugiat.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- // Team 1-->
                                
                                <!--Team 2-->                                
                                <div class="clearfix team">
                                    <div class="col-md-3">
                                        <div class="team-img">
                                            <img src="assets/img/austin_reiter.jpg" width="330" height="330" class="img-responsive" alt="">
                                        <div class="person-overlay">
                                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram"></i></a>                                                             </div>
                                        </div>
                                    </div>
                                    <div class="team-space col-md-9">
                                        <div class="team-box">
                                            <i class="fa fa-users team-shadow"></i>
                                            <div class="team-title">Austin Reiter</div>
                                        <div class="content-smalltxt">Assistant Research Professor at Johns Hopkins University</div>
                                            <p>Our passion for dynamic, <span class="bold">gorgeous hardware and the little details</span> come through with every click of mouse.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- // Team 2-->
                                
                                <!--Team 3-->
                                <div class="clearfix team">
                                    <div class="col-md-3">
                                        <div class="team-img">
                                            <img src="assets/img/3.jpg" width="330" height="330" class="img-responsive" alt="">
                                        <div class="person-overlay">
                                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram"></i></a>                                                             </div>
                                        </div>
                                    </div>
                                    <div class="team-space col-md-9">
                                        <div class="team-box">
                                            <i class="fa fa-users team-shadow"></i>
                                            <div class="team-title">Charles Tyler</div>
                                        <div class="content-smalltxt">Manager</div>
                                        <p>Duis aute irure dolor in reprehenderit in <span class="bold">WWW Awarded WP Developer </span>esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- // Team 3-->
                                
                                <!--Team 4-->
                                <div class="clearfix team">
                                    <div class="col-md-3">
                                        <div class="team-img">
                                            <img src="assets/img/4.jpg" width="330" height="330" class="img-responsive" alt="">
                                        <div class="person-overlay">
                                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="https://instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram"></i></a>                                                             </div>
                                        </div>
                                    </div>
                                    <div class="team-space col-md-9">
                                        <div class="team-box">
                                            <i class="fa fa-users team-shadow"></i>
                                            <div class="team-title">Benjamin Fillier</div>
                                        <div class="content-smalltxt">hardwareer</div>
                                        <p>Duis aute irure dolor in <span class="bold">reprehenderit in voluptate velit</span> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- // Team 4-->
                            
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
</div>

<!-- // Team
=============================--> 




<!-- Contact Form
=============================-->

<div id="contactform" class="item">
    <div class="content">
        <div class="content_overlay"></div>
    <div class="content_inner" >
        <div class="row contentscroll">
            <div class="container col-md-12">
                <div class="col-md-6 empty">&nbsp;</div>
            <div class="col-md-6 content_text">
                <div id="contactforms">
                    <h1>Drop Me A Line</h1>
                    <div class="tags">If you’re considering hiring me or would like a free project price quote, please fill the form below Thank you!
</div>
                <!--Form Starts-->
                <form id="contact_form" class="cont_form pad_top13" action="contact_form.php" method="post">
                    
                <div class="clearfix cont_form pad_top30"> 
                
                    <div class="subtitle">Enter Your Contact Details</div>
                    <!--Input 1-->
                    <input type="text" name="name" class="validate['required'] textbox1" placeholder="* Name : "
                    onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'" />
                    <!--Input 1-->
                    
                    <!--Input 2-->
                    <input type="text" name="email"  class="validate['required','email']  textbox1"
                    placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'" />
                    <!-- // Input 2-->
                    
                    <!--Input 3-->
                    <textarea name="message" class="validate['required'] messagebox1"
                    placeholder="* Message : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>
                    <!-- // Input 3-->
                    
                    <!--Button-->
                    <button id="contactsubmitBtn" type="submit" class="btn btn-3 btn-3e">Submit</button>
                    <!-- // Button-->
                </div>
                </form>
                <!--Form Ends-->
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- // Contact Form
=============================-->


<!-- Footer
=============================-->

<div id="footer" class="footer">
    <div class="copyright">Copyrights &copy; <span>Cole Diamond</span> 2015.</div>
</div>

<!-- // Footer Ends
=============================-->



<!--Special Menu 
=============================-->

<div id="specialmenu" class="toHideTheBubbles hidden-phone">
    <div class="spcontainer">
    
    <!--Spmenu 2-->
    <div id="spmenu2">   <button class="spmenu spmenu2"  onclick="modalshow('#video1')"  data-toggle="modal" data-target="#lightbox2">
            <span><i class="fa fa-desktop"></i></span>
            <span class="sptext">Video Resume</span>
        </button>
    </div>
    <!-- // Spmenu 2-->
    
    <!--Spmenu 3-->
    <div id="spmenu3">
        <a href="resume.pdf" class="spmenu spmenu3 link">
            <span><i class="fa fa-download down_icon"></i></span>
            <span class="sptext"><span>Resume</span>Download</span>
        </a>
    </div>
    <!-- // Spmenu 3-->
    </div>
</div>

<!-- // Special Menu 
=============================-->


<div id="video1" >
    <div id="lightbox2" class="lightbox2 modal fade in" tabindex="-1" role="dialog" aria-labelledby="video1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" ><img src="assets/img/close.png" alt=" "></button>
                <div class="modal-body">
                <div class="video_containers">
                   <iframe width="500" height="281" src="http://www.youtube.com/embed/VBOKFAnVjas?autoplay=0" frameborder="0" allowfullscreen="" ></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

</div>
</div>
<!-- // Wrapper =============================-->



<!--java script-->

<!-- Preloader Starts -->
<script type="text/javascript" src="assets/js/jpreloader.min.js"></script>
<!-- Preloader Starts -->

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/appear.js"></script>


<!-- Slick Navigation -->
<script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>
<!-- Slick Navigation -->

<!-- Nice Scroll-->
<script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>

<!-- include retina js -->
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<!-- include retina js -->

<!-- Typing Slider Starts-->
<script type="text/javascript" src='assets/js/typed.js'></script>
<!-- Typing Slider Ends-->

<!-- Cycle Slider Sldier -->
<script type="text/javascript" src="assets/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="assets/js/jquery.cycle2.caption2.js"></script>
<!-- Cycle Slider Sldier Ends-->

<!--SuperSized Gallery-->
<script type="text/javascript" src="assets/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="assets/js/supersized.shutter.min.js"></script>
<!--SuperSized Gallery End-->

<!-- Filter Gallery And PrettyPhoto-->
<script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<!-- Filter Gallery And PrettyPhoto End-->

<!-- Skills Progress Bar Starts-->
<script src="assets/js/jquery.easypiechart.min.js"></script>
<!-- Skills Progress Bar Ends-->

<!-- Fit Text Starts-->
<script type="text/javascript" src="assets/js/jquery.fittext.js"></script>
<script type="text/javascript">
    $("#home_title").fitText(1.1, { minFontSize: '24px', maxFontSize: '65px' });
    $(".home_title_type").fitText(1.1, { minFontSize: '24px', maxFontSize: '65px' });
    
</script>
<!-- Fit Text Ends-->

<!-- Place Holder Scripts Starts-->
<script type="text/javascript" src="assets/js/jquery.placeholder.min.js"></script>
<!-- Place Holder Scripts Ends-->

<!-- Custom Scripts Starts-->
<script type="text/javascript" src="assets/js/custom-general.js"></script>
<script type="text/javascript" src="assets/js/google-map-custom.js"></script>
<script type="text/javascript" src="assets/js/typed-custom.js"></script>
<!-- Custom Scripts Ends-->
    

<!--IE9 Hack Code For Gradient Color-->

<!--[if gte IE 9]>
  <style type="text/css">
    .pattern_bg {
       filter: none;
    }
  </style>
<![endif]-->

</body>

</html>