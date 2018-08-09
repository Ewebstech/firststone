<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
    <!--[if lt IE 9]> 
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleš Trunda alestrunda.cz">
    <meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <link rel="icon" href="icon.png" type="image/png">

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,400italic,500italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>    
    
    <!-- Icon-Font -->
    <link rel="stylesheet" href="{{ asset('/font-awesome/font-awesome/css/font-awesome.min.css') }} " type="text/css">
    <!--[if IE 7]>
    	<link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome-ie7.min.css" type="text/css">
    <![endif]-->
    
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/stroll/stroll.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/owl-carousel/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/styles/animate.min.css') }}" type="text/css">
    <link id="main-stylesheet" rel="stylesheet" href="{{ asset('/styles/main.css') }}" type="text/css">
    
	<title>FirstStone Real Estate Limited</title>
    
    <script type="text/javascript" src="{{ asset('/js/modernizr.js') }}"></script>
    
    <style>
	#theme-customizer {
		font-size: 15px;
		position: fixed;
		background-color: #FFF;
		width: 290px;
		left: -290px;
		top: 50px;
		color: #000;
		-webkit-transition: left 0.7s ease-out;
		-moz-transition: left 0.7s ease-out;
		-o-transition: left 0.7s ease-out;
		transition: left 0.7s ease-out;
		font-style: italic;
		text-align: center;
		padding: 0 5px 5px 5px;
		z-index: 99999;
		border: 1px #e1e1e1 solid;
		border-left: none;
	}
	
	#theme-customizer.active {
		left: 0;
	}
	
	#theme-customizer .customizer-heading {
		font-size: 20px;
		margin: 25px 0;
	}
	
	#theme-customizer .customizer-info {
		color: #969696;
		font-size: 13px;
	}
	
	#theme-customizer hr {
		margin: 20px auto;
		height: 1px;
		width: 80%;
		background-color: #e8e8e8;
	}
	
	#theme-customizer-trigger {
		position: absolute;
		background-color: #FFF;
		width: 50px;
		height: 50px;
		right: -50px;
		top: -1px;
		font-size: 27px;
		line-height: 50px;
		text-align: center;
		cursor: pointer;
		border: 1px #e1e1e1 solid;
		border-left: none;
	}
	
	.theme-setting {
		width: 54px;
		height: 54px;
		display: inline-block;
		margin: 0px 2px;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
		border: 2px #FFF solid;
		-webkit-transition: border 0.2s ease-out;
		-moz-transition: border 0.2s ease-out;
		-o-transition: border 0.2s ease-out;
		transition: border 0.2s ease-out;
		cursor: pointer;
	}
	
	.theme-setting.theme-pattern {
		border-color: #E1E1E1;
	}
	
	.theme-setting:hover {
		border-color: #B1B1B1;
	}
	
	.theme-setting.active {
		border-color: #B1B1B1;
	}
	</style>
</head>

<body>
	

	<div id="page-loader">
    	<div class="centered-columns">
        	<div class="centered-column">
            	<img alt="loader" src="images/loader.gif">
            </div>
        </div>
    </div>
    
	<header id="header-section">
    	<div class="site-top">
        	<div class="container clearfix">
                <div class="pull-left">
                    <span class="site-top-item">
                        <a href="#"><i class="fa fa-envelope"></i> info@hometastic.com</a>
                    </span>
                    <span class="site-top-item">
                        <i class="fa fa-phone"></i> 0 800 55 55 123
                    </span>
                </div>
                <div class="pull-right">
                	<div class="site-top-item">
                    	<a href="#"><i class="fa fa-user"></i> Log in</a>
                    </div>
                    <div class="site-top-item">
                    	<a href="#"><i class="fa fa-pencil"></i> Sign in</a>
                    </div>
                    <div class="site-top-item">
                    	<form id="form-top-search">
                    		<input type="text" name="s">
                            <input type="submit" value="Go">
                        </form>
                    	<a id="form-top-search-trigger" href="#"><i class="fa fa-search"></i></a>
                	</div>
                </div>
            </div><!-- .container -->
        </div><!-- .site-top -->
    	<div class="main-menu">
    		<div class="container">
            	<img class="pull-left main-logo" alt="hometastic" src="{{URL::asset('/images/logo.png')}}">
                <div class="menu-button"><i class="fa fa-reorder"></i></div>
                <nav class="menu-container underscore-container menu-container-fade">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="property_listings.html">Listings</a></li>
                        <li><a href="agents.html">Agents</a>
                        	<ul>
                            	<li><a href="agents.html">John Doe</a></li>
                                <li><a href="agents.html">Chris Rea</a></li>
                                <li><a href="agents.html">Jessica Brown</a></li>
                                <li><a href="agents.html">Hansom Rob</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog_one_column.html">Blog</a>
                        	<ul>
                            	<li><a href="blog_two_columns.html">Latest News</a></li>
                                <li><a href="property_single.html">Latest Property</a></li>
                                <li><a href="blog_single.html">Latest Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <div class="underscore"><div class="underscore-inner"></div></div>
                </nav>
        	</div><!-- .container -->
        </div><!-- .main-menu -->
    </header>
    
	<section>
        <div id="main-slider">
            <div class="slide-1 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6 pull-right">
                            <div class="slide-box arrow-left">
                                <h2>25688 Portafino Pl, Whittier, LA 15998</h2>
                                <p>An entertainer's paradise in the Friendly Hills community, priced to sell. Featuring 4 spacious bedrooms and 3 bathrooms (one bedroom/bath downstairs), 3170 sq ft of living space with a good size lot at approx.13414 sq ft.</p>
                                <p><a title="Tooltip example" data-toggle="tooltip" href="#">I'm tooltip</a></p>
                                <hr>
                                <a href="#">4 Bedrooms</a> <span class="delimiter-inline"></span> <a href="#">3 Bathrooms</a> <span class="delimiter-inline"></span> <a href="#">1 Kitchen</a> <span class="delimiter-inline"></span> <a href="#">2 Garages</a>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="property_single.html #" class="read-more-link-alt">Learn more</a>
                                    <p class="listing-price">$350.000</p>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-1 -->
            <div class="slide-2 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6 pull-right">
                            <div class="slide-box-alt arrow-left">
                                <h2>25688 Portafino Pl, Whittier, LA 15998</h2>
                                <p>An entertainer's paradise in the Friendly Hills community, priced to sell. Featuring 4 spacious bedrooms and 3 bathrooms (one bedroom/bath downstairs), 3170 sq ft of living space with a good size lot at approx.13414 sq ft.</p>
                                <p><a title="Tooltip example" data-toggle="tooltip" href="#">I'm tooltip</a></p>
                                <hr>
                                <a href="#">4 Bedrooms</a> <span class="delimiter-inline"></span> <a href="#">3 Bathrooms</a> <span class="delimiter-inline"></span> <a href="#">1 Kitchen</a> <span class="delimiter-inline"></span> <a href="#">2 Garages</a>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="property_single.html" class="read-more-link-alt">Learn more</a>
                                    <p class="listing-price">$350.000</p>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-2 -->
            <div class="slide-3 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6">
                            <div class="slide-box arrow-right">
                                <h2>25688 Portafino Pl, Whittier, LA 15998</h2>
                                <p>An entertainer's paradise in the Friendly Hills community, priced to sell. Featuring 4 spacious bedrooms and 3 bathrooms (one bedroom/bath downstairs), 3170 sq ft of living space with a good size lot at approx.13414 sq ft.</p>
                                <p><a title="Tooltip example" data-toggle="tooltip" href="#">I'm tooltip</a></p>
                                <hr>
                                <a href="#">4 Bedrooms</a> <span class="delimiter-inline"></span> <a href="#">3 Bathrooms</a> <span class="delimiter-inline"></span> <a href="#">1 Kitchen</a> <span class="delimiter-inline"></span> <a href="#">2 Garages</a>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="property_single.html" class="read-more-link-alt">Learn more</a>
                                    <p class="listing-price">$350.000</p>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-3 -->
            <div class="slide-4 bg-image bg-pattern">
                <div class="container">
                	<div class="row">
                   		<div class="col-sm-6">
                            <div class="slide-box arrow-right">
                                <h2>25688 Portafino Pl, Whittier, LA 15998</h2>
                                <p>An entertainer's paradise in the Friendly Hills community, priced to sell. Featuring 4 spacious bedrooms and 3 bathrooms (one bedroom/bath downstairs), 3170 sq ft of living space with a good size lot at approx.13414 sq ft.</p>
                                <p><a title="Tooltip example" data-toggle="tooltip" href="#">I'm tooltip</a></p>
                                <hr>
                                <a href="#">4 Bedrooms</a> <span class="delimiter-inline"></span> <a href="#">3 Bathrooms</a> <span class="delimiter-inline"></span> <a href="#">1 Kitchen</a> <span class="delimiter-inline"></span> <a href="#">2 Garages</a>
                                <hr>
                                <div class="slide-price-container">
                                    <a href="property_single.html" class="read-more-link-alt">Learn more</a>
                                    <p class="listing-price">$350.000</p>
                                </div>
                            </div>
                       	</div>
                  	</div>
                </div><!-- .container -->
            </div><!-- .slide-4 -->
        </div><!-- .master-slider -->
    </section>
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Find Your Dream Home</h1>
                    <h4>Looking for a good place to sleep try our search engine, we guarnatee you will find what you need.</h4>
        		</div>
                <form id="form-search" action="http://ignitionthemes.co/template/homet/property_listings.html">
                    <div class="row">
                        <div class="col-md-6">
                        	<div class="row">
                                <div class="col-sm-6">
                                    <p>Property ID</p>
                                    <input type="text" placeholder="Any...">
                                </div>
                                <div class="col-sm-6">
                                    <p>Location</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list stroll-list cards">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="Vermont">
                                            	<div class="custom-select-item-content">Vermont</div>
                                            </li>
                                            <li data-val="Kentucky">
                                            	<div class="custom-select-item-content">Kentucky</div>
                                            </li>
                                            <li data-val="Tennessee">
                                            	<div class="custom-select-item-content">Tennessee</div>
                                            </li>
                                            <li data-val="Ohio">
                                            	<div class="custom-select-item-content">Ohio</div>
                                            </li>
                                            <li data-val="Louisiana">
                                            	<div class="custom-select-item-content">Louisiana</div>
                                            </li>
                                            <li data-val="Indiana">
                                            	<div class="custom-select-item-content">Indiana</div>
                                            </li>
                                            <li data-val="Mississippi">
                                            	<div class="custom-select-item-content">Mississippi</div>
                                            </li>
                                            <li data-val="Illinois">
                                            	<div class="custom-select-item-content">Illinois</div>
                                            </li>
                                            <li data-val="Alabama">
                                            	<div class="custom-select-item-content">Alabama</div>
                                            </li>
                                            <li data-val="Maine">
                                            	<div class="custom-select-item-content">Maine</div>
                                            </li>
                                            <li data-val="Missouri">
                                            	<div class="custom-select-item-content">Missouri</div>
                                            </li>
                                            <li data-val="Arkansas">
                                            	<div class="custom-select-item-content">Arkansas</div>
                                            </li>
                                            <li data-val="Michigan">
                                            	<div class="custom-select-item-content">Michigan</div>
                                            </li>
                                            <li data-val="Florida">
                                            	<div class="custom-select-item-content">Florida</div>
                                            </li>
                                            <li data-val="Texas">
                                            	<div class="custom-select-item-content">Texas</div>
                                            </li>
                                            <li data-val="Iowa">
                                            	<div class="custom-select-item-content">Iowa</div>
                                            </li>
                                            <li data-val="Wisconsin">
                                            	<div class="custom-select-item-content">Wisconsin</div>
                                            </li>
                                            <li data-val="California">
                                            	<div class="custom-select-item-content">California</div>
                                            </li>
                                            <li data-val="Minnesota">
                                            	<div class="custom-select-item-content">Minnesota</div>
                                            </li>
                                            <li data-val="Oregon">
                                            	<div class="custom-select-item-content">Oregon</div>
                                            </li>
                                            <li data-val="Kansas">
                                            	<div class="custom-select-item-content">Kansas</div>
                                            </li>
                                            <li data-val="West Virginia">
                                            	<div class="custom-select-item-content">West Virginia</div>
                                            </li>
                                            <li data-val="Nevada">
                                            	<div class="custom-select-item-content">Nevada</div>
                                            </li>
                                            <li data-val="Nebraska">
                                            	<div class="custom-select-item-content">Nebraska</div>
                                            </li>
                                            <li data-val="Colorado">
                                            	<div class="custom-select-item-content">Colorado</div>
                                            </li>
                                            <li data-val="North Dakota">
                                            	<div class="custom-select-item-content">North Dakota</div>
                                            </li>
                                            <li data-val="South Dakota">
                                            	<div class="custom-select-item-content">South Dakota</div>
                                            </li>
                                            <li data-val="Montana">
                                            	<div class="custom-select-item-content">Montana</div>
                                            </li>
                                            <li data-val="Washington">
                                            	<div class="custom-select-item-content">Washington</div>
                                            </li>
                                            <li data-val="Idaho">
                                            	<div class="custom-select-item-content">Idaho</div>
                                            </li>
                                            <li data-val="Wyoming">
                                            	<div class="custom-select-item-content">Wyoming</div>
                                            </li>
                                            <li data-val="Utah">
                                            	<div class="custom-select-item-content">Utah</div>
                                            </li>
                                            <li data-val="Oklahoma">
                                            	<div class="custom-select-item-content">Oklahoma</div>
                                            </li>
                                            <li data-val="new Mexico">
                                            	<div class="custom-select-item-content">New Mexico</div>
                                            </li>
                                            <li data-val="Arizona">
                                            	<div class="custom-select-item-content">Arizona</div>
                                            </li>
                                            <li data-val="Alaska">
                                            	<div class="custom-select-item-content">Alaska</div>
                                            </li>
                                            <li data-val="Hawaii">
                                            	<div class="custom-select-item-content">Hawaii</div>
                                            </li>
                                        </ul>
                                        <input type="hidden">
                                    </div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                        	<div class="row">
                                <div class="col-sm-6">
                                    <p>Status</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="Rent">
                                            	<div class="custom-select-item-content">Rent</div>
                                            </li>
                                            <li data-val="Sale">
                                            	<div class="custom-select-item-content">Sale</div>
                                            </li>
                                      	</ul>
                                        <input type="hidden">
                                  	</div>
                                </div>
                                <div class="col-sm-6">
                                    <p>Property type</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="House">
                                            	<div class="custom-select-item-content">House</div>
                                            </li>
                                            <li data-val="Flat">
                                            	<div class="custom-select-item-content">Flat</div>
                                            </li>
                                            <li data-val="Mansion">
                                            	<div class="custom-select-item-content">Mansion</div>
                                            </li>
                                      	</ul>
                                        <input type="hidden">
                                  	</div>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                    
                    <div class="row">
                        <div class="col-md-6">
                        	<div class="row">
                                <div class="col-sm-4">
                                    <p>Minimum Beds</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list stroll-list cards">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="one">
                                            	<div class="custom-select-item-content">One</div>
                                            </li>
                                            <li data-val="two">
                                            	<div class="custom-select-item-content">Two</div>
                                            </li>
                                            <li data-val="three">
                                            	<div class="custom-select-item-content">Three</div>
                                            </li>
                                            <li data-val="four">
                                            	<div class="custom-select-item-content">Four</div>
                                            </li>
                                            <li data-val="five">
                                            	<div class="custom-select-item-content">Five</div>
                                            </li>
                                            <li data-val="six">
                                            	<div class="custom-select-item-content">Six</div>
                                            </li>
                                            <li data-val="seven">
                                            	<div class="custom-select-item-content">Seven</div>
                                            </li>
                                            <li data-val="eight">
                                            	<div class="custom-select-item-content">Eight</div>
                                            </li>
                                            <li data-val="nine">
                                            	<div class="custom-select-item-content">Nine</div>
                                            </li>
                                            <li data-val="ten">
                                            	<div class="custom-select-item-content">Ten</div>
                                            </li>
                                            <li data-val="eleven">
                                            	<div class="custom-select-item-content">Eleven</div>
                                            </li>
                                            <li data-val="twelve">
                                            	<div class="custom-select-item-content">Twelve</div>
                                            </li>
                                        </ul>
                                        <input type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p>Minimum Baths</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list stroll-list cards">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="one">
                                            	<div class="custom-select-item-content">One</div>
                                            </li>
                                            <li data-val="two">
                                            	<div class="custom-select-item-content">Two</div>
                                            </li>
                                            <li data-val="three">
                                            	<div class="custom-select-item-content">Three</div>
                                            </li>
                                            <li data-val="four">
                                            	<div class="custom-select-item-content">Four</div>
                                            </li>
                                            <li data-val="five">
                                            	<div class="custom-select-item-content">Five</div>
                                            </li>
                                            <li data-val="six">
                                            	<div class="custom-select-item-content">Six</div>
                                            </li>
                                            <li data-val="seven">
                                            	<div class="custom-select-item-content">Seven</div>
                                            </li>
                                            <li data-val="eight">
                                            	<div class="custom-select-item-content">Eight</div>
                                            </li>
                                            <li data-val="nine">
                                            	<div class="custom-select-item-content">Nine</div>
                                            </li>
                                            <li data-val="ten">
                                            	<div class="custom-select-item-content">Ten</div>
                                            </li>
                                            <li data-val="eleven">
                                            	<div class="custom-select-item-content">Eleven</div>
                                            </li>
                                            <li data-val="twelve">
                                            	<div class="custom-select-item-content">Twelve</div>
                                            </li>
                                        </ul>
                                        <input type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p>Minimum Price</p>
                                    <input type="text" placeholder="Any...">
                                </div>
                           	</div><!-- .row -->
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                        	<div class="row">
                                <div class="col-sm-4">
                                    <p>Maximum Price</p>
                                    <input type="text" placeholder="Any...">
                                </div>
                                <div class="col-sm-4">
                                    <p>Minimum Area (sq ft)</p>
                                    <input type="text" placeholder="Any...">
                                </div>
                                <div class="col-sm-4">
                                    <p>Maximum Area (sq ft)</p>
                                    <input type="text" placeholder="Any...">
                                </div>
                            </div>
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </form>
                
                <p class="text-center onscroll-animate" data-animation="flipInY">
                	<a href="#" id="form-search-submit" class="button-void button-long">Search <i class="fa fa-search"></i></a>
                </p>
           	</div><!-- .container -->
       	</div><!-- .section-content -->
  	</section>
    
	<section id="citation-section" class="section-contrast">
    	<div class="bg-image bg-pattern bg-cover parallax-background">
            <div class="section-content onscroll-animate" data-animation="fadeInUp">
            	<p class="citation">“The secret to creativity is knowing how to hide your sources.”</p>
            	<p class="citation-author">Albert EINSTEIN</p>
            </div>
       	</div>
    </section>
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Recent Listings</h1>
                    <h4>See our recent listings here, you will find all kinds of homes.</h4>
        		</div>
                <div class="row">
                	<div class="col-md-4 onscroll-animate">
                    	<article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/1.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">568 E 1st Ave, Ney Jersey</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$2.500 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                    	<article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/2.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">335 W 2nd Ave, California</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$350.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/3.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">658 L 2nd Ave, Boston</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$1.500 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="row">
                	<div class="col-md-4 onscroll-animate">
                    	<article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/4.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">6879 W 2nd Ave, Washington</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$50.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400">
                        <article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/5.jpg">
                                            </div>
                                            <div class="post-preview-label">For Rent</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">1258 E 1st Ave, Alabama</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$3.800 <span class="small">per month</span></p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="600">
                        <article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="images/listings/6.jpg">
                                            </div>
                                            <div class="post-preview-label2">For Sale</div>
                                            <div class="post-preview-label-alt-wrapper">
                                                <div class="post-preview-label-alt">Featured <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">5690 W 2nd Ave, Texas</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located at 335 W 2nd Ave Artesian, California.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                        <p class="listing-price">$155.000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
                <div class="text-center onscroll-animate">
                    <div class="pagination">
                        <div class="pagination-item pagination-first"><a href="#">First</a></div>
                        <div class="pagination-item"><a href="#">1</a></div>
                        <div class="pagination-item active"><a href="#">2</a></div>
                        <div class="pagination-item"><a href="#">3</a></div>
                        <div class="pagination-item"><a href="#">4</a></div>
                        <div class="pagination-item"><a href="#">5</a></div>
                        <div class="pagination-item pagination-last"><a href="#">Last</a></div>
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
    
    <div class="margin-30 visible-lg-block visible-md-block"></div>

    <section id="mobile-section" class="section-contrast">
    	<div class="bg-image bg-pattern bg-cover bg-fixed">
            <div class="section-content no-offset">
            	<div class="margin-30"></div>
                <div class="container">
                	<div class="row">
                    	<div class="col-md-8 onscroll-animate" data-animation="fadeInUp">
                            <div class="section-header-alt">
                            	<h1><img alt="Hometastic" src="images/logo2.png"> Now is availaible for your smartphones</h1>
                            </div>
                            <p>It was under very similar circumstances to the first performance; but this time he did not breast out the line; and hence, when the whale started to run, Pip was left behind on the sea, like a hurried traveller's trunk. Alas! Stubb was but too true to his word. It was a beautiful, bounteous, blue day; the spangled sea calm and cool, and flatly stretching away, all round, to the horizon, like gold-beater's skin hammered out to the extremest.</p>
                    		<p class="text-right">
                            	<a href="#" class="black-box black-box-apple">
                                	<span class="small">Download on the</span><br>
									<strong>App Store</strong>
                                </a>
                            	<a href="#" class="black-box black-box-google">
                                	<span class="small">Get it on</span><br>
									<span class="google-text">Google</span> play
                                </a>
                            </p>
                			<div class="margin-40"></div>
                        </div>
                        <div class="col-md-4" id="mobile-img-col">
                        		<img id="mobile-img" alt="mobile phone" class="img-responsive" src="images/mobile.png">
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .section-content -->
        </div><!-- .bg-image -->
    </section>
    
    <section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>OUR GREAT AGENTS</h1>
                    <h4>See our great agents and they will help you find your homes.</h4>
        		</div>
                <div class="onscroll-animate">
                    <div id="agents-slider">
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/1.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Hansom Rob</h5>
                            <p>home expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">hansom.rob@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 57 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/2.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Rocky Alboa</h5>
                            <p>property expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">rocky.alboa@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 11 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/3.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Haman Gates</h5>
                            <p>designer</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">haman.gates@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 25 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/4.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Malik Barrymore</h5>
                            <p>accountant</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">malik.barrymore@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 88 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/2.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Rocky Alboa</h5>
                            <p>property expert</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">rocky.alboa@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 11 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                        <div class="profile">
                            <div class="profile-img">
                                <img alt="agent" src="images/agents/3.jpg">
                                <div class="profile-img-info">
                                    <a href="#" class="profile-social"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="profile-social"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                            <h5 class="profile-heading">Haman Gates</h5>
                            <p>designer</p>
                            <p>
                                <i class="fa fa-phone"></i> 0 800 50 555 123<br>
                                <i class="fa fa-envelope"></i> <a href="#">haman.gates@hometastic.com</a><br>
                                <i class="fa fa-money"></i> 25 Sales done
                            </p>
                            <a href="agents.html" class="read-more-link-alt">See Full Profile</a>
                        </div><!-- .profile -->
                    </div><!-- #agents-slider -->
                </div><!-- .onscroll-animate -->
                <p class="text-center onscroll-animate" data-animation="flipInY">
                	<a href="agents.html" class="button-void">See All Agents</a>
          		</p>
            </div><!-- .container -->
     	</div><!-- .section-content -->
 	</section>

	<section class="section-dark">
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>SERVICES</h1>
                    <h4>Some of our main services.</h4>
        		</div>
                <div class="row">
                	<div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-signal"></i>
                                    </div>
                                    <h3>Skilled team</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                    <div class="read-more-link-container">
                                    	<a href="blog_single.html" class="read-more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="400" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <h3>Homes for sale</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                    <div class="read-more-link-container">
                                    	<a href="blog_single.html" class="read-more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                    	</div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 onscroll-animate" data-delay="600" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <h3>House for rest</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                    <div class="read-more-link-container">
                                    	<a href="blog_single.html" class="read-more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 onscroll-animate" data-delay="800" data-animation="fadeInUp">
                            	<div class="icon-box">
                                    <div class="icon-box-icon">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <h3>Lots of colors</h3>
                                    <p>Many whalemen have a method of absorbing it into some other substance, and then partaking of it.</p>
                                    <div class="read-more-link-container">
                                    	<a href="blog_single.html" class="read-more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>

	<section>
    	<div class="bg-buildings">
            <div class="container-big section-content bg-logo">
                <div class="container clearfix">
                    <div class="big-notice onscroll-animate">
                        <h3><span class="text-uppercase"><strong>Home</strong>tastic</span> is a beautifull Template for Real Estate businesses, includes all elements needed to start the job</h3>
                        <div class="onscroll-animate pull-right" data-delay="700" data-animation="flipInY">
                        	<div class="button-container"><a class="button" href="#">Buy The Template</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<footer id="footer-section">
    	<a href="#header-section" class="scroll-to" id="to-top"></a>
    	<div class="container footer-info">
        	<div class="row">
            	<div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6 footer-column onscroll-animate">
                            <h4><img alt="Hometastic" src="images/logo.png"></h4>
                            <p>Alarmed at this terrible outburst between the two principal and responsible owners of the ship, and feeling half a mind to give up all idea of sailing in a vessel so questionably owned and temporarily commanded.</p>
                            <a href="#" class="read-more-link-alt">Read more</a>
                        </div>
                        <div class="col-sm-6 footer-column onscroll-animate" data-delay="400">
                            <h4>Recent Posts</h4>
                            <ul class="list-links-simple">
                                <li><a href="#">Lorem Post With Video Format</a></li>
                                <li><a href="#">Example Video Image Post</a></li>
                                <li><a href="#">Example Post With Portfolio Post Format</a></li>
                                <li><a href="#">Example Post With Image Post Format</a></li>
                                <li><a href="#">Lorem Ipsum Dolor Sit Amet</a></li>
                            </ul>
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6 footer-column font-normal onscroll-animate" data-delay="600">
                            <h4>Contact Info</h4>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">0 800 123 456 88</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope"></i></div>
                                    <div class="icon-opening-content">haman.gates@hometastic.com</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-globe"></i></div>
                                    <div class="icon-opening-content">123 Park Avenue, New York, USA</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-money"></i></div>
                                    <div class="icon-opening-content">5,600 Sales done till now</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 footer-column onscroll-animate" data-delay="800">
                            <h4>Newsletter</h4>
                            <p>Subscribe for out newsletter, and we will keep you inform of new offers.</p>
                            <form class="form-subscribe" id="rss-subscribe" action="http://ignitionthemes.co/template/homet/save_rss.php" method="post" data-email-not-set-msg="Email must be set" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully added">
                                <input type="text" name="email" placeholder="your email...">
                                <div class="text-right">
                                	<input type="submit" value="Submit">
                                </div>
                                <p class="return-msg"></p>
                            </form>
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
            </div><!-- .row -->
        </div><!-- .container -->
        <div class="main-menu-alt">
        	<div class="container">
                <div class="menu-button"><i class="fa fa-reorder"></i></div>
                <nav id="bottom-menu" class="menu-container menu-container-slide">
                	<div class="underscore-container">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Listings</a></li>
                        <li><a href="#">Agents</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="underscore"><div class="underscore-inner"></div></div>
                	</div>
                </nav>
            </div><!-- .container -->
      	</div><!-- .main-menu-alt -->
        <div class="site-info">
        	<div class="container">
                <div class="row">
                    <div class="col-xs-6 onscroll-animate" data-animation="fadeInLeft">
                        <p>2014 All rights Reserved. Made with <i class="red fa fa-heart-empty"></i> by <a title="IgnitionThemes" data-toggle="tooltip" href="http://ignitionthemes.eu/"><em>IgnitionThemes</em></a></p>
                    </div>
                    <div class="col-xs-6 text-right onscroll-animate" data-animation="fadeInRight">
                    	<div class="socials-wrapper">
                            <div class="social-round-container">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <div class="social-round-container">
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .site-info -->
    </footer>

	<script type="text/javascript" src="{{ URL::asset('/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/stroll/stroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.stellar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.inview.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>
    
    <script type="text/javascript">
		$(document).ready(function(e) {
			var main_stylesheet = $('#main-stylesheet');
			var theme_customizer = $('#theme-customizer');
			var theme_stylesheets = $('.theme-stylesheet');
			var theme_patterns = $('.theme-pattern');
			$('#theme-customizer-trigger').on('click', function(e) {
				theme_customizer.toggleClass('active');
			});
			
			theme_stylesheets.on('click', function(e) {
				theme_stylesheets.removeClass('active');
				main_stylesheet.attr('href', $(this).data('stylesheet'));
				$(this).addClass('active');
			});
			theme_patterns.on('click', function(e) {
				theme_patterns.removeClass('active');
				$('body').css('background', $(this).data('background'));
				$(this).addClass('active');
			});
        });
	</script>
</body>

<!-- Mirrored from ignitionthemes.co/template/homet/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Aug 2018 13:48:38 GMT -->
</html>
