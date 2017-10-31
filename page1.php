<?php
include_once 'dbconnect.php';
?>

    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EDDEY | Home page</title>
		
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <script>
            $(function() {
                $("#skills").autocomplete({
                    source: 'search.php'
                });
            });
        </script>
    </head>
    <style>
	html{
    margin: 0;
    padding: 0;
}

	
	.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color:#EE7D0B ; 
;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button2 {padding: 5px 15px;}
.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}
        .ui-menu .ui-menu-item {
            position: relative;
            margin: 0;
            text-transform: uppercase;
            padding: 3px 1em 3px .4em;
            cursor: pointer;
            min-height: 0;
        }
        
        #buttons {
            float: right;
            position: relative;
            left: -50%;
            text-align: left;
        }
        
        #buttons ul {
            list-style: none;
            position: relative;
            left: 50%;
        }
        
        #buttons li {
            float: left;
            position: relative;
        }
        /* ie needs position:relative here*/
    </style>

    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
        <nav class="navbar navbar-default" id="header-wrap">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h5><a class="logo" href="index.html"><img src="assets/img/logo.png" alt=""></a></h5>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="index.php">Home</a></li>
                        <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Browse<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h5>College</h5>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">College 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">College 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">College 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="indexhtml">College 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">College 5</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Courses</h5>
                                                <ul>
                                                    <li><a href="index.html">Course 1</a> </li>
                                                    <li><a href="index.html">Courses 2</a> </li>
                                                    <li><a href="index.html">Courses 3</a></li>
                                                    <li><a href="index.html">Courses 4</a> </li>
                                                    <li><a href="index.html">Courses 5</a> </li>
                                                    <li><a href="index.html">Courses 6</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Exams</h5>
                                                <ul>
                                                    <li><a href="index.html">Exam 1</a> </li>
                                                    <li><a href="index.html">Exam 2</a> </li>
                                                    <li><a href="index.html">Exam 3</a> </li>
                                                    <li><a href="index.html">Exam 4</a> </li>
                                                    <li><a href="index.html">Exam 5</a> </li>
                                                    <li><a href="index.html">Exam 6</a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h5>Scholarship</h5>
                                                <ul>
                                                    <li><a href="index.html">Scholarship 1</a> </li>
                                                    <li><a href="index.html">Scholarship 2</a> </li>
                                                    <li><a href="index.html">Scholarship 3</a> </li>
                                                    <li><a href="index.html">Scholarship 4</a> </li>
                                                    <li><a href="index.html">Scholarship 5</a> </li>
                                                    <li><a href="index.html">Scholarship 6</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>
                        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
		
		<div class="content-area single-property" style="background-color: #FCFCFC;">
            <div class="container">

                <div class="clearfix padding-top-40">
					
                    <div class="col-md-4 single-property-content ">
								
					<!--left side bar-->
                    <div class="col-md-8 p0">
                        <aside class="sidebar sidebar-property blog-asside-left">
                            
                            <div class="side-block fly-in">
								<div class="side-stars">
									<div class="side-padding">
										<form id="searchsubmit" action="javascript:void(0)"  method="post">
											<div><span class="checkbox"><a style="text-decoration: none;color: darkgray">search for location</a></span></div>

											<div class="input-group" style="width: 200px;">
												<input type="text" class="form-control" id="search_terms" value="" placeholder="Search location">
												<span class="input-group-btn">
													<button class="btn btn-default"  type="submit">
														<span class="fa fa-search"></span>
													</button>
												</span>
												<input type="hidden" id="tagidsection" value="9">

											</div>
										</form>
										<div class="side-lbl" id="streamshow"><a style="text-decoration: none" href="javascript:void(0)"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Sort by <b>stream</b></a></div>

											<div id="streamslide">
												<form method="post" id="streamlist" action="javascript:void(0)">
													<div class="checkbox">
														<label>
															<input type="radio" name="streamsearch" class="streamsearch" value="" checked/>
																All
																</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="radio" name="streamsearch" class="streamsearch" value="Engineering+College"/>
																ENGINEERING
														</label>
													</div>
													<div class="checkbox">
													<label>
														<input type="radio" name="streamsearch" class="streamsearch" value="Medical+College"/>
														MEDICAL
													</label>
														<div>
															<div class="checkbox">
																<label>
																	<input type="radio" name="streamsearch" class="streamsearch" value="Business+Management+College" />
																	MANAGEMENT
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="radio" name="streamsearch" class="streamsearch"  value="Arts+and+Science+College"/>
																	ARTS
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="radio" name="streamsearch" class="streamsearch" value="Agriculture"/>
																	AGRICULTURE
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="radio" name="streamsearch" class="streamsearch" value="Nursing+or+Paramedical+College"/>
																	NURSING
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="radio" name="streamsearch" class="streamsearch" value="Law+College"/>
																	LAW
																</label>
															</div>
														</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								
								<div class="side-block fly-in">
									<div class="side-stars">
										<div class="side-padding">

											<div class="side-lbl" id="stateshow"><a style="text-decoration: none" href="javascript:void(0)"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Sort by <b>place</b></a></div>
												<div id="stateslide">
													<form method="post" id="statelist" action="javascript:void(0)">
														<div class="checkbox">
															<label>
																<input type="radio" class="stateselect" name="stateselect" value="" checked/>
																ALL
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Kerala" />
																KERALA
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Ernakulam" />
																ERNAKULAM
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Kochi" />
																KOCHI
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Chennai" />
																CHENNAI
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Goa" />
																GOA
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Trissur" />
																TRISSUR
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Madras" />
																MADRAS
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Tamilnadu" />
																TAMIL NADU
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Karnataka" />
																KARNATAKA
															</label>
														</div>
														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Maharashtra" />
																MAHARASHTRA
															</label>
														</div>

														<div class="checkbox">
															<label id="state">
																<input type="radio" class="stateselect" name="stateselect" value="Hyderabad" />
																HYDERABAD
															</label>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<!--<div class="panel panel-default sidebar-menu wow fadeInRight animated">
									<div class="panel-heading">
										<h3 class="panel-title">Ads her  </h3>
									</div>
									<div class="panel-body recent-property-widget">
										<img src="assets/img/ads.jpg">
									</div>
								</div>-->

                            </div>
                        </aside>
                    </div
					<!--left side bar-->
					<div class="col-md-8 p0">
						<div class="clearfix padding-top-40">
                        <aside class="sidebar sidebar-property blog-asside-right">
							<div class="dealer-content">
                                <div class="inner-wrapper">

                                    <div class="clear">
                                        <div class="col-xs-3 col-sm-3 dealer-face">
											<a href="">
                                                    <img src="assets/img/demo/property-1.jpg" class="img-square">
                                            </a>
										</div>
										<div class="col-xs-6 col-sm-8 ">
										<h3 class="dealer-name">
											<span>College 1</span>        
                                        </h3>
                                        <div class="dealer-social-media">
                                            <a class="twitter" target="_blank" href="">
                                            <i class="fa fa-twitter"></i>
                                            </a>
											<a class="facebook" target="_blank" href="">
											<i class="fa fa-facebook"></i>
                                             </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                       </div>
									</div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">                                       
										<li><i class="pe-7s-map-marker strong"> </i> 9089 your adress here&nbsp&nbsp; <i class="pe-7s-mail strong"> </i> email@yourcompany.com&nbsp&nbsp;<i class="pe-7s-call strong"> </i> +1 908 967 5906</li>

                                    </ul>
                                    <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non</p>
								</div>
								<button class="button2" align="right" ><span>Apply</span></button>
							</div>
								
					</aside
					</div>
						
				</div>

					<!--left side bar-->
					<div class="col-md-15 p0">
						<div class="clearfix padding-top-40">
                        <aside class="sidebar sidebar-property blog-asside-right">
							<div class="dealer-content">
                                <div class="inner-wrapper">

                                    <div class="clear">
                                        <div class="col-xs-3 col-sm-3 dealer-face">
											<a href="">
                                                    <img src="assets/img/demo/property-2.jpg" class="img-square">
                                            </a>
										</div>
										<div class="col-xs-6 col-sm-8 ">
										<h3 class="dealer-name">
											<span>College 2</span>        
                                        </h3>
                                        <div class="dealer-social-media">
                                            <a class="twitter" target="_blank" href="">
                                            <i class="fa fa-twitter"></i>
                                            </a>
											<a class="facebook" target="_blank" href="">
											<i class="fa fa-facebook"></i>
                                             </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                       </div>
									</div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">      
										<li><i class="pe-7s-map-marker strong"> </i> 9089 your adress here&nbsp&nbsp; <i class="pe-7s-mail strong"> </i> email@yourcompany.com&nbsp&nbsp;<i class="pe-7s-call strong"> </i> +1 908 967 5906</li>

                                    </ul>
                                    <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non</p>
								</div>
								<button class="button2" align="right" ><span>Apply</span></button>
							</div>
								
					</aside
					</div>
						
				</div>
				</div>
				
				<!--left side bar-->
					<div class="col-md-15 p0">
						<div class="clearfix padding-top-40">
                        <aside class="sidebar sidebar-property blog-asside-right">
							<div class="dealer-content">
                                <div class="inner-wrapper">

                                    <div class="clear">
                                        <div class="col-xs-3 col-sm-3 dealer-face">
											<a href="">
                                                    <img src="assets/img/demo/property-4.jpg" class="img-square">
                                            </a>
										</div>
										<div class="col-xs-3 col-sm-8 ">
										<h3 class="dealer-name">
											<span>College 3</span>        
                                        </h3>
                                        <div class="dealer-social-media">
                                            <a class="twitter" target="_blank" href="">
                                            <i class="fa fa-twitter"></i>
                                            </a>
											<a class="facebook" target="_blank" href="">
											<i class="fa fa-facebook"></i>
                                             </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                       </div>
									</div>
                                </div>

                                <div class="clear">
                                    <ul class="dealer-contacts">
										<li><i class="pe-7s-map-marker strong"> </i> 9089 your adress here&nbsp&nbsp; <i class="pe-7s-mail strong"> </i> email@yourcompany.com&nbsp&nbsp;<i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
									</ul>
                                    <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non</p>
								</div>
								<button class="button2" align="right" ><span>Apply</span></button>
							</div>
								
					</aside
					</div>
						
				</div>
				</div>
				
				
				
                </div>
			</div>
        </div>
		</div>
		
		<br><br>

        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/logo.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i>Address Here</li>
                                    <li><i class="pe-7s-mail strong"> </i> info@eddey.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +9746364612</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="index.php">Home</a> </li>
                                    <li><a href="#">Services</a> </li>
                                    <li><a href="#">Colleges</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="faq.html">fqa</a> </li>
                                    <li><a href="faq.html">Terms </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Last News</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">
                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6>
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6>
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">
                                            <a href="single.html">
                                                <img src="assets/img/demo/small-proerty-2.jpg">
                                            </a>
                                            <span class="blg-date">12-12-2016</span>

                                        </div>
                                        <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                            <h6> <a href="single.html">Add news functions </a></h6>
                                            <p style="line-height: 17px; padding: 8px 2px;">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>Stay in touch with us , summit your mail for newsletters.</p>

                                <form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <div class="social pull-right">
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="">
                            <span> (C) <a href="https://www.inkers.in">Inkers</a> , All rights reserved 2017  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>
        <script src="assets/js/main.js"></script>
<script>

    site_url="https://yescolleges.com/";



    $("#streamshow").click(function () {
        $("#streamslide").toggle();
    });
    $("#stateshow").click(function () {
        $("#stateslide").toggle();
    });

var search=function () {


    $("#search_terms").keyup(function () {

        $( function() {
            var availableTags = [
                "Andhrapradesh",
                "Kerala",
                "Tamilnadu",
                "Karnataka",
                "Goa",
                "Ernakulam",
                "Idukki",
                "Kochi",
                "Madras",
                "Chennai",
                "Alapuzha",
                "Trissur",
                "Kozhikode"

            ];
            $( "#search_terms" ).autocomplete({
                source: availableTags
            });
        } );



    });
}


</script>
    </body>
</html>