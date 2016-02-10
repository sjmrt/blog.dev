@extends('layouts.master')


@section('top-script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sj's Resume</title>

    <!-- ======FAVICONS===== -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!-- =====STYLESHEETS===== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- =====FONTS & ICONS===== -->
    <link href='//fonts.googleapis.com/css?family=Kristi|Alegreya+Sans:300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
@stop

@section('content')
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sarajane</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./">Home</a></li>
                        <li class="active"><a href="{{{ action('HomeController@showResume') }}}">Resume<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
                        <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <hr>
        <div id="header" class="row">
            <div class="col-sm-2">
                <img class="propic" src="img/codeuppic.png" alt="">
            </div>
            <div class="col-sm-10">
                <div class="cv-title">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>Sarajane Stevens</h1>
                        </div>
                    </div>
                    <h2>Web Developer</h2>
                </div><!-- Title end-->
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href="mailto:sjmrstevens@gmail.com"><span class="social fa fa-envelope-o"></span>sjmrthompson@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href="http://www.github.com/sjmrt"><span class="social fa fa-github"></span>GitHub</a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/sarajane-stevens-33345152?trk=nav_responsive_tab_profile_pic"><span class="social fa fa-linkedin"></span>Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href=""><span class="social fa fa-home"></span>San Antonio, TX</a>
                            </li>
                            <li><a href=""><span class="social fa fa-skype"></span>210-705-1240</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- header social end-->
            </div><!-- header right end-->
        </div><!-- header end-->
        <hr class="firsthr">
        <div class="col-md-12 mainleft">
            <div id="skills" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-magic"></span>
                </div><!--icon end-->
                <div class="col-sm-11">
                    <h3>Technical Skills</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <h3><p>Linux, Apache, MySQL, PHP, HTML/CSS, JavaScript, jQuery, Laravel MVC, Vagrant dev environment, Sequel Pro, Git/Github, Twitter Bootstrap</p></h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="statement" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-user"></span>
                </div><!--icon end-->
                <div class="col-sm-11">
                    <h3>About Me </h3>
                    <p></p>
                        Fully qualified human, definitely not an alien. Saving the world one line of code at a time. 
                    <p></p>

                    <p class="signature">Sarajane</p>
                </div><!--info end-->
            </div><!--personal statement end-->
            <hr>
            <div id="education" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-graduation-cap"></span>
                </div><!--icon end-->

                <div class="col-sm-11">
                    <h3>Education &amp; Certification</h3>

                    <div class="row">
                        <div class="col-md-9">
                            <h4>Full Stack Web Development</h4>
                            <p class="sub"><a href="">Codeup</a>
                            </p>
                            <p>Studying all aspect of Web Development with an intensive LAMP+J course.</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2015-2016</p>
                        </div>
                    </div><!--Education & Certification 1 end-->
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Technical Courses</h4>
                            <p class="sub"><a href="">NLC</a>
                            </p>
                            <p>MySQL, Linux +, RSCSA, Network +</p>
                        </div>

                        <div class="year col-md-3">
                            <p>2010-2012</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="job" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-briefcase"></span>
                </div><!--icon end-->

                <div class="col-sm-11">
                    <h3>Job Experience</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Project Manager</h4>
                            <p class="sub"><a href="">Innovative Communications Systems</a>
                            </p>
                            <p>Oversee the planning, implementation, and tracking of all telecommunications, IT, and cabling projects</p>
                            <p>Monitor project risks and scope to identify potential problems and proactively identifying solutions to address them in advance</p>
                            <p>Providing strategic direction during the implementation stages.</p>  
                            <p>Managing client expectations by ensuring the delivery of the highest quality service  and acting on client feedback.</p>  
                            <p>Monitoring staff & team performance. Oversee all hiring of new employees</p> 
                        </div>
                        <div class="year col-md-3">
                            <p>2013-2015</p>
                        </div>
                    </div><!--Job 1 end-->
                    <hr>
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Technical Account Manager</h4>
                            <p class="sub"><a href="">Rackspace</a>
                            </p>
                            <p> Complete resource for customer relations, provides hub for Sales, AR/Billing, and other teams</p>   
                            <p>Deployment and all Technical aspects of server hosting.</p>
                            <p>Assessing and addressing customer needs both technically and commercially</p>
                            <p>Developing strong, trusting, customer relationships</p>
                            <p>Perform technical server work during deployments and network issues</p>
                            <p>Experience with Microsoft Office applications (Word, Excel, PowerPoint, Outlook</p>
                        </div>
                        <div class="year col-md-3">
                            <p>2011-2013</p>
                        </div>
                    </div><!--Job 2 end-->
                    <hr>
                       <div class="row">
                        <div class="col-md-9">
                        <h4>Enterprise Linux Technician</h4>
                        <p class="sub"><a href="">Rackspace</a>
                        </p>
                        <p>Provide basic user administration requests</p>
                        <p>Monitor incoming tickets and phone calls and route accordingly to correct members of staff</p>
                        <p>Perform log troubleshooting, restarting and installation of services</p>
                        <p>Schedule and perform server maintenances, kernel upgrades and patching</p>
                        </div>
                        <div class="year col-md-3">
                            <p>2008-2011</p>
                        </div>
                    </div><!--Job 3 end-->
                </div><!--Job experiences end-->
            </div><!--Job experiences end-->
            <hr>
            </div><!--left end-->  

            </div>
@stop

@section('bottom-script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
@stop

