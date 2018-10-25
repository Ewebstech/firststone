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
     

    <section>
            <div class="page-title-container bg-image bg-cover bg-pattern" style="max-height: 100px;">
                <div class="page-title">
                    <div class="container">
                        <h1>Investment Listing</h1>
                        <h4>Pages / Investment Listing</h4>
                    </div>
                </div>
            </div>
    </section>

	<section>
        <div class="section-content">
            <div class="container">
            <section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Investment</h1>
                    <h4>Full Description Of Investment</h4>
        		</div>
                <div class="row">
                	<div class="col-md-9">

                    	<section id="slider-section">
                            <div id="flex-slider" class="preview-images-slider">
                                
                                <ul class="slides">
                                    
                                    <li>
                                        <div class="preview-single">
                                            <a href="images/listings/big.jpg" data-lightbox="post1-img"><img alt="slide1" src="{{ asset('storage/images/listings/big.jpg') }}"></a>
                                            <div class="preview-single-labels">
                                                <div class="clearfix">
                                                    <div class="label-black pull-left">
                                                        <h3>568 E 1st Ave, Ney Jersey</h3>
                                                        <p><a href="#">2500 Sq Ft</a> <span class="delimiter-inline-alt"></span> <a href="#">4 Bedrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">2 Bathrooms</a> <span class="delimiter-inline-alt"></span> <a href="#">1 Garage</a></p>
                                                    </div>
                                                    <div class="label-white pull-right">
                                                        <div class="listing-price">
                                                            $2.500 <span class="small">per month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-color">
                                                    <h3 class="no-margin">FOR RENT</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div><!-- #slider -->
                            <div class="onscroll-animate" data-animation="fadeInUp">
                                <div id="flex-carousel" class="preview-thumnails-slider">
                                    <ul class="slides">

                                        <li>
                                            <img alt="slide1 thumbnail" src="{{ asset('storage/images/listings/thumbnails/6.jpg') }}">
                                        </li>
                                        
                                    </ul>
                                </div><!-- #carousel -->
                            </div><!-- .onscroll-animate -->
                            <p class="onscroll-animate" data-animation="fadeInUp">{{ $investmentDetails->description }}</p>
                    	</section>                                      
                        
                        <div class="margin-30 visible-sm-block visible-xs-block"></div>
                    </div><!-- .col-md-9 -->
                    <div class="col-md-3 sidebar">
                    	<section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>Share It</h1>
                                </div>
                                <div class="onscroll-animate" data-animation="fadeInUp">
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                    <div class="social-container">
                                        <a href="#"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div><!-- .section-content -->
                        </section>
                        
                        
                        <section>
                        	<div class="section-content">
                            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
                                    <h1>News Letter</h1>
                                </div>
                                <p>Subscribe for latest news</p>
                                <form class="form-layout1" id="rss-subscribe-2" action="{{ route('subscribemail') }}" method="post"> {{@csrf_field()}}
                                    <input type="text" name="email" placeholder="your email...">
                                    <input type="submit" class="btn btn-link" value="subscribe"/>
                                    <p class="return-msg"></p>
                                </form>
                          	</div>
                      	</section>
                    </div><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
            </div>
        </div>
      </section>
     

    

    @include('layout.footer')
</body>
</html>
