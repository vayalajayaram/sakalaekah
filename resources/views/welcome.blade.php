<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sakala ekaH-Home</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->

          <div class="header-notification-bar" style="display:none;">
            <div class="register-user">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="index.html"><img src="img/logo-bu.png" alt=""></a>
                    </div>
                  </div>

                 <div class="col-md-6 col-sm-5">
                    <div class="search-form">
                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Search..." class="topbar-search-input">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>

                    </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li class="user-profile-pic"><a href="#"><img src="./img/content/agent-img-1.jpg" alt=""></a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .register-user -->
          </div> <!-- end. header-notification-bar  -->

          <!--
          END HEADER NOTIFICATION TOP BAR
          -->

          <!--
          HEADER TOP BAR FOR NON REGISTER USER
          -->

          <div class="header-notification-bar">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-4 col-sm-2">
                    <div class="logo-section">
                      <a href="index.html" ><img src="img/logo-bu_old.png" alt=""></a>
                    </div>
                  </div>

                  <!--<div class="col-md-5 col-sm-5"  style="margin-top:20px;">
                    <div class="search-form">

                      <center> <form action="#">
                       <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Search..." class="topbar-search-input">
                        <button class="search-button" ><i class="fa fa-search"></i></button>
                      </form>
                    </center>
                    </div>
                  </div>-->

                  <div class="col-md-8 col-sm-7"  style="margin-top:20px;">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
                    
                        
                      <li><a href="#" data-toggle="modal" data-target="#signin"><input type="submit" class="btn btn-primary" value="Login"></a></li>
                      <li>
                        <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#signup" value="Signup"></li>
                        <!--<li>
                        <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#signup" value="Post A Job"></li>-->
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->
<div id="signin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align:center;"><b>Sign In</b></h3>
       <span style="color: #FFF;"><?php echo $this->session->flashdata('signinmsg'); ?></span>
    </div>
    <form action="" method="POST">
      <div class="modal-body">
    <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>User Name  :</label></div><div class="col-md-8"><input type="text" name="user_name" placeholder="User Name *" class="form-control">   </div></div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Password :</label></div><div class="col-md-8"><input type="password" name="user_password" placeholder="Password *" class="form-control"></div>  </div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"></div><div class="col-md-4"><input type="submit" name="submit" value="Signin" class="btn btn-success col-md-12"></div>  </div>
      </div>
    </form>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 

<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" style="text-align:center;"><b>Sign up</b></h3>
       <span style="color: #FFF;"><?php echo $this->session->flashdata('signinmsg'); ?></span>
    </div>
    <form action="" method="POST">
      <div class="modal-body">
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Full Name  :</label></div><div class="col-md-8"><input type="text" name="user_name" placeholder="User Name *" class="form-control">   </div></div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Email  :</label></div><div class="col-md-8"><input type="text" name="user_email" placeholder="User email *" class="form-control">   </div></div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Phone No  :</label></div><div class="col-md-8"><input type="text" name="phone" placeholder="User Phone no *" class="form-control">   </div></div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Password :</label></div><div class="col-md-8"><input type="password" name="user_password" placeholder="Password *" class="form-control"></div>  </div>
        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"><label>Conf Password :</label></div><div class="col-md-8"><input type="password" name="user_password" placeholder="Password *" class="form-control"></div>  </div>
        

        <div class="row" style="padding-top:10px;"><div class="col-md-3" style="text-align:right;"></div><div class="col-md-4"><input type="submit" name="submit" value="Signup" class="btn btn-success col-md-12"></div>  </div>
      
      </div>
    </form>
      <div class="modal-footer">
         
       
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  

          <!--
          END HEADER TOP BAR FOR WITHOUT LOGIN USER
          -->

          <!-- Navigation -->
          <div class="main-navbar">

            <nav class="navbar navbar-default">
              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="img/logo-bu.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><span class="fa fa-home" ></span> Home</a></li>
                    <li><a href="#"><span class="fa fa-commenting"></span> Govt Job Notifications</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-television"></span> News
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="news.html">World News</a></li>
                        <li><a href="#">Regional News</a></li>
                        <li><a href="#">Political News</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Sports News</a></li>
                        <li><a href="#">Bussiness News</a></li>
                      </ul>
                    </li>
                    <!--<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-commenting"></span> Job Notifications
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="govtjobs.html">Govt Job Notifications</a></li>
                         <li><a href="searchjob.html">Private Job Notifications</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Private Job Notifications<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                        <li><a href="#">BPO Jobs</a></li>
                        <li><a href="#">Software Jobs</a></li>
                        <li><a href="#">Hr Jobs</a></li>
                        <li><a href="#">Others</a></li>
                      </ul>
                        </li>
                      </ul>
                    </li>-->
                        <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-folder-open"></span> Online Test
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Web Technologies</a></li>
                        <li><a href="#">CRT</a></li>
                      </ul>
                    </li>-->
                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-book"></span> Web Tutorials
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JAVASCRIPT</a></li>
                        <li><a href="#">jquery</a></li>
                        <li><a href="#">ajax</a></li>
                        <li><a href="#">Codeigniter</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-search"></span> Search a job</a></li>
                    <li><a href="#"><span class="fa fa-users"></span> Post a job</a></li>
                    <li><a href="client-registration.html"><span class="fa fa-send-o"></span> contact us</a></li>
                    
                    
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </div> <!-- main-navbar -->
          <!-- end .header-top-bar -->
        </div>


      </header>
      <!-- end #header -->

      <!-- header Search bar -->



      <!-- end .header-banner -->


      <!-- Page Content -->
      <div id="page-content">

        <div class="index-page-search-content">
          <div id="owl-demo" class="owl-carousel owl-theme">

            <div class="item"
              style="background: url('./img/home-bg.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/home-bg2.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/home-bg3.jpg') center center no-repeat; background-size: cover;"></div>


          </div>
          <div class="container">
           
            <div class="search-holder">
            
              <h1>Sakala ekaH</h1>
              <h2>get your services done</h2>
<div class="header-search-bar">
                  <div class="">
                    <form>
                      <div class="basic-form clearfix"> <a href="#" class="toggle"><span></span></a>
                        <div class="hsb-input-1">
                          <input type="text" class="form-control" placeholder="Keywords">
                        </div>
                        <div class="hsb-text-1">in</div>
                        <div class="hsb-container">
                          <div class="hsb-input-2">
                            <input type="text" class="form-control" placeholder="Location">
                          </div>
                          <div class="hsb-select">
                            <select class="form-control">
                              <option value="0">Select Category</option>
                              <option value="">Banking</option>
                              <option value="">Finance</option>
                              <option value="">IT</option>
                              <option value="">Specialists</option>
                            </select>
                          </div>
                        </div>
                        <div class="hsb-submit">
                          <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button>
                        </div>
                      </div>
                      <div class="advanced-form">
                        <div class="">
                          <div class="row">
                            <label class="col-md-3">Distance</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="200" data-current="100"></div>
                                <div class="last-value"><span>100</span> km</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Rating</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="100" data-current="20"></div>
                                <div class="last-value">&gt; <span>20</span> %</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Days Published</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="60" data-current="30"></div>
                                <div class="last-value">&lt; <span>30</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Location</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" placeholder="Switzerland">
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-9">
                              <select class="form-control">
                                <option value="">Select Category</option>
                                <option value="">Banking</option>
                                <option value="">Finance</option>
                                <option value="">IT</option>
                                <option value="">Specialists</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
          </div>
        </div><br/>
              <div id="header-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <!--<div class="col-md-3">
                            <center>
                                <div class="hsb-submit">
                                    <button type="submit" class="btn btn-default" style="padding:20px 30px; background-color:#f05f22;"><i class="fa fa-hand-o-right" style="font-size:30px;"></i> <span style="text-align:center; font-size:20px; font-weight:none;">POST A PROJECT</span></button>
                                </div>
                            </center>
                        </div>-->
                        <div class="col-md-4">
                            <center>
                                <div class="hsb-submit">
                                    <button type="submit" class="btn btn-default" style="padding:20px 30px;"><i class="fa fa-briefcase" style="font-size:30px;"></i> <span style="text-align:center; font-size:20px;">POST A JOB &#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;</span></button>
                                </div>
                            </center>
                        </div>
                        
                        <div class="col-md-5">
                            <center>
                                <div class="hsb-submit">
                                    <button type="submit" class="btn btn-default" style="padding:20px 30px; background-color:#f05f22;"> <i class="fa fa-search" style="font-size:30px;"></i> <span style="text-align:center; font-size:20px; font-weight:none;">SEARCH A JOB</span></button>
                                </div>
                            </center>
                        </div>
                        
                        <div class="col-md-1"></div>
                    </div>
                </div><!--END Header-search container -->
                
               <!-- <div class="header-search-bar">
                  <div class="">
                    <form>
                      <div class="basic-form clearfix"> <a href="#" class="toggle"><span></span></a>
                        <div class="hsb-input-1">
                          <input type="text" class="form-control" placeholder="Keywords">
                        </div>
                        <div class="hsb-text-1">in</div>
                        <div class="hsb-container">
                          <div class="hsb-input-2">
                            <input type="text" class="form-control" placeholder="Location">
                          </div>
                          <div class="hsb-select">
                            <select class="form-control">
                              <option value="0">Select Category</option>
                              <option value="">Banking</option>
                              <option value="">Finance</option>
                              <option value="">IT</option>
                              <option value="">Specialists</option>
                            </select>
                          </div>
                        </div>
                        <div class="hsb-submit">
                          <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button>
                        </div>
                      </div>
                      <div class="advanced-form">
                        <div class="">
                          <div class="row">
                            <label class="col-md-3">Distance</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="200" data-current="100"></div>
                                <div class="last-value"><span>100</span> km</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Rating</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="100" data-current="20"></div>
                                <div class="last-value">&gt; <span>20</span> %</div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Days Published</label>
                            <div class="col-md-9">
                              <div class="range-slider">
                                <div class="slider" data-min="1" data-max="60" data-current="30"></div>
                                <div class="last-value">&lt; <span>30</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Location</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" placeholder="Switzerland">
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-9">
                              <select class="form-control">
                                <option value="">Select Category</option>
                                <option value="">Banking</option>
                                <option value="">Finance</option>
                                <option value="">IT</option>
                                <option value="">Specialists</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    </div>
                </div>
                -->
             </div>
            <!--<center style="margin-top:20px;">       
            <a href="index.html"><img src="img/logo-bu.png" alt=""></a>
            </center>-->
                        
            </div>
         </div>
         
         <div class="container">
        <div class="services-holder">
                <center style="padding-bottom:10px; color:#FFF;">
                <h1><b>SAKALA EKAH SERVICES MARKET PLACE</b></h1>
            </center>
            <div class="row">
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Labor-law.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Labour law compliance</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/hr.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">HR Consulting</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/administration.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Administration</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/RECRUITMENT.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Recruitment</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/training-icon-2.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Training</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Compensation1.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Compensation</p>
                        </center>
                    </div>
                </div>
            </div>
            <!-- 2nd Row Starts -->
                <div class="row">
                  <!--<div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Manpower-service1.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Manpower service</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/HR Technology.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">HR Technology</p>
                        </center>
                    </div>
                </div>
            <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Pay-Roll-Industrial.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Pay Roll Industrial</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Relations-Trade1.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Relations Trade</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-2 services-box">
                    <div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/training-icon-2.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Union Activities</p>
                        </center>
                    </div>
                </div>-->
                <div class="col-md-2">
                    <!--<div class="services-box content">
                        <center>
                            <div class="services-img"><img src="img/icons/Compensation1.png" style="width:54px; height:60px;" /></div>
                            
                            <p class="services-box-p">Compensation</p>
                        </center>
                    </div>-->
                </div>
            </div>
        
            <!-- 2nd Row Ends -->
         </div>
         </div>
         
        </div>

        <!-- end .container -->


      </div>

      <!-- Footer Start -->
      <footer id="footer">
        <div class="copyright">
          <div class="container">
            <p class="pull-left">2016 &copy; All rights reserved. Powered by <a href="#">Sakala ekaH</a></p>
            <p class="pull-right">Designed & Developed By <a href="http://jrsofttech.epizy.com">JR Soft Tech</a></p>

            <ul class="list-inline" style="text-align:center !important; float:none;">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
            </ul>
          </div>
        </div>
      </footer>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/jquery.fitvids.js"></script>
      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>

      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/scripts.js"></script>
    </body>
  </html>
