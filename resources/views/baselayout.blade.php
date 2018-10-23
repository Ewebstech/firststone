<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

@include('layout.headlinks')

<body>
	<div id="page-loader">
    	<div class="centered-columns">
        	<div class="centered-column">
            	<img alt="loader" src="/storage/images/loader.gif">
            </div>
        </div>
    </div>
	<header id="header-section">
    	@include('layout.nav')
        @include('layout.flashmessages')
    </header>
    
    @include('layout.slider')
    
	<section>
    	<div class="section-content">
        	<div class="container" style="color: #000 !important;">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft" style="color: #000 !important;">
        			<h1>Find Properties</h1>
                    <h4>Looking for a nice property? Search our property shop, we guarnatee you will find what you need.</h4>
        		</div>
                <form id="form-search" action="#">
                    <div class="row">
                        <div class="col-md-12">
                        	<div class="row">
                                <div class="col-sm-3">
                                    <p>Location</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list stroll-list cards">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                        </ul>
                                        <input type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <p>Property type</p>
                                    <div class="custom-select">
                                        <div class="custom-select-val"></div>
                                        <ul class="custom-select-list">
                                            <li class="custom-select-default" data-val="">
                                            	<div class="custom-select-item-content">Any...</div>
                                            </li>
                                            <li data-val="House">
                                            	<div class="custom-select-item-content">Land</div>
                                            </li>
                                            <li data-val="Flat">
                                            	<div class="custom-select-item-content">Structure</div>
                                            </li>
                                            
                                      	</ul>
                                        <input type="hidden">
                                  	</div>
                                </div>

                                <div class="col-sm-3">
                                    <p>Minimum Price</p>
                                    <input type="text" placeholder="Any...">
                                </div>

                                <div class="col-sm-3">
                                    <p>Maximum Price</p>
                                    <input type="text" placeholder="Any...">
                                </div>

                            </div><!-- .row -->
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
            	<p class="citation">“We connect people to real estate opportunities..”</p>
            	<p class="citation-author">-- What We do -- </p>
            </div>
       	</div>
    </section>
    
	<section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Property Listings</h1>
                    <h4>See our recent property listings deals  </h4>
        		</div>
                
                <div class="row">
                	<div class="col-md-4 onscroll-animate">
                    	<article>
                            <div class="post-preview">
                            	<a href="property_single.html">
                                    <section>
                                        <div class="post-preview-img">
                                            <div class="post-preview-img-inner">
                                                <img alt="post img" src="/storage/images/listings/1.jpg">
                                            </div>
                                            <div class="post-preview-label">On Sale</div>
                                        </div> 
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">25A, Road 5, Lekki Phase 3, Ikota</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is spacious and located in Lagos.</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                        <p class="listing-price">&#8358 5,000,000</p>
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
                                                <img alt="post img" src="/storage/images/listings/2.jpg">
                                            </div>
                                            <div class="post-preview-label2">Closed</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">62D, Holland Way, Ikeja, Lagos</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located in Lagos</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                        <p class="listing-price">&#8358 4,500,000</p>
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
                                                <img alt="post img" src="/storage/images/listings/3.jpg">
                                            </div>
                                            <div class="post-preview-label">For Sale</div>
                                        </div>
                                    </section>
                                </a>
                                <div class="post-preview-content">
                                    <h2 class="post-preview-heading">664, Boston Avenue, Epe, Lagos</h2>
                                    <p>This is a 5 bedroom, 1.5 bathroom, single family home. It is located Epe, Lagos</p>
                                    <div class="post-preview-price-container">
                                        <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                        <p class="listing-price">&#8358 7,000,000</p>
                                    </div>
                                    <div class="post-preview-detail">
                                        <a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
        
            
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
                            	
                            </div>
                            <p></p>
                    		<p class="text-right">
                                    <h1><img alt="Hometastic" src="/storage/images/firststonelogog.png" style="max-height: 120px;"></h1>
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
                        		<img id="mobile-img" alt="mobile phone" class="img-responsive" src="/storage/images/mobile.png">
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .section-content -->
        </div><!-- .bg-image -->
    </section>
    <div class="margin-30 visible-lg-block visible-md-block"></div>
    <section>
            <div class="section-content">
                <div class="container">
                    <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                        <h1>Investment Listings</h1>
                        <h4>See our recent investment listings availaible for sponsorships </h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4 onscroll-animate">
                            <article>
                                <div class="post-preview">
                                    <a href="property_single.html">
                                        <section>
                                            <div class="post-preview-img">
                                                <div class="post-preview-img-inner">
                                                    <img alt="post img" src="/storage/images/listings/4.jpg">
                                                </div>
                                                <div class="post-preview-label">Structure</div>
                                            </div> 
                                        </section>
                                    </a>
                                    <div class="post-preview-content">
                                        <h2 class="post-preview-heading">45, Road 3, Garki, Abuja</h2>
                                        <p>55 Plots of Land located in Garki, Abuja</p>
                                        <div class="post-preview-price-container">
                                            <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                            <p class="listing-price">&#8358 50,000,000</p>
                                        </div>
                                        <div class="post-preview-detail">
                                            <a href="#">10500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Acres</a> <span class="delimiter-inline-alt"></span> <a href="#">Near City</a> <span class="delimiter-inline-alt"></span> <a href="#">Dev Area</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!-- .col-md-4 -->
                        <div class="col-md-4 onscroll-animate">
                                <article>
                                    <div class="post-preview">
                                        <a href="property_single.html">
                                            <section>
                                                <div class="post-preview-img">
                                                    <div class="post-preview-img-inner">
                                                        <img alt="post img" src="/storage/images/listings/5.jpg">
                                                    </div>
                                                    <div class="post-preview-label">Land</div>
                                                </div> 
                                            </section>
                                        </a>
                                        <div class="post-preview-content">
                                            <h2 class="post-preview-heading">45, Road 3, Garki, Abuja</h2>
                                            <p>55 Plots of Land located in Garki, Abuja</p>
                                            <div class="post-preview-price-container">
                                                <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                                <p class="listing-price">&#8358 50,000,000</p>
                                            </div>
                                            <div class="post-preview-detail">
                                                <a href="#">10500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Acres</a> <span class="delimiter-inline-alt"></span> <a href="#">Near City</a> <span class="delimiter-inline-alt"></span> <a href="#">Dev Area</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div><!-- .col-md-4 -->
                            <div class="col-md-4 onscroll-animate">
                                    <article>
                                        <div class="post-preview">
                                            <a href="property_single.html">
                                                <section>
                                                    <div class="post-preview-img">
                                                        <div class="post-preview-img-inner">
                                                            <img alt="post img" src="/storage/images/listings/6.jpg">
                                                        </div>
                                                        <div class="post-preview-label">Structure</div>
                                                    </div> 
                                                </section>
                                            </a>
                                            <div class="post-preview-content">
                                                <h2 class="post-preview-heading">45, Road 3, Garki, Abuja</h2>
                                                <p>55 Plots of Land located in Garki, Abuja</p>
                                                <div class="post-preview-price-container">
                                                    <a href="property_single.html" class="read-more-link-alt">View Details</a>
                                                    <p class="listing-price">&#8358 50,000,000</p>
                                                </div>
                                                <div class="post-preview-detail">
                                                    <a href="#">10500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Acres</a> <span class="delimiter-inline-alt"></span> <a href="#">Near City</a> <span class="delimiter-inline-alt"></span> <a href="#">Dev Area</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- .col-md-4 -->
                    </div><!-- .row -->
            
                
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
   
	
    @include('layout.footer')
</body>
</html>
