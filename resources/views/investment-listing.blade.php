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
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Recent Listings</h1>
                    <h4>See our recent listings here, you will find all kinds of homes.</h4>
                </div>
                
                <div class="row">

                    @foreach($investmentDetails as $details)
                        <div class="col-md-4 onscroll-animate">
                            <article>
                                <div class="post-preview">
                                    <a href="property_single.html">
                                        <section>
                                            <div class="post-preview-img">
                                                <div class="post-preview-img-inner">
                                                    <img alt="post img" src="{{ $details->image_name }}">
                                                </div>
                                                <div class="post-preview-label">ON SALE</div>
                                            </div>
                                        </section>
                                    </a>
                                    <div class="post-preview-content">
                                        <h2 class="post-preview-heading">{{$details->address }}</h2>
                                        <p>{{ $details->description }}</p>
                                        <div class="post-preview-price-container">
                                            <a href="property_single.html" class="read-more-link-alt">Read more</a>
                                            <p class="listing-price">{{$details->amount }}<span class="small">per month</span></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!-- .col-md-4 -->
                    @endforeach    

                </div><!-- .row -->

                <div class="text-center onscroll-animate">
                    <div class="pagination">
                        {{ $investmentDetails->links() }}
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
     

    

    @include('layout.footer')
</body>
</html>
