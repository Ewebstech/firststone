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
            <div class="page-title-container bg-image bg-cover bg-pattern" style="max-height: 130px;">
                <div class="page-title">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <h4>Pages / Contact</h4>
                    </div>
                </div>
            </div>
    </section>

    <section>
    	<div class="section-content">
        	<div class="container">
            	<div class="section-header onscroll-animate" data-animation="fadeInLeft">
        			<h1>Contact Us</h1>
                    <h4>If you want to ask us about property do it right away, we are waitng.</h4>
        		</div>
                <div class="row">
                	<div class="col-md-3 onscroll-animate">
                    	<div class="clearfix">
                    		<span class="heading-small-inline">Contact Information</span>
                        </div>
                        <hr>
                        <p>Please contact us using this form if you have any questions or comments about Firstonerls.

                            Our phone lines will be on from 9am to 5pm, Mondays to Thursdays, 9am to 4pm on Fridays.</p>
                        <div class="margin-10"></div>
                        <div class="">
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-phone"></i></div>
                                    <div class="icon-opening-content">+234 800 000 0000</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-mobile-phone text-big"></i></div>
                                    <div class="icon-opening-content">+234 800 000 0000</div>
                                </div>
                            </div>
                            <div class="icon-opening-wrapper">
                                <div class="icon-opening-container">
                                    <div class="icon-opening"><i class="fa fa-envelope-alt"></i></div>
                                    <div class="icon-opening-content">
                                        office@firststonersl.com<br>
                                        info@firststonersl.com<br>
                                        support@firststonersl.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-40"></div>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-5 onscroll-animate" data-delay="400">
                    	<form class="form-contact-full" id="contact-form" action="#" method="post" data-name-not-set-msg="Name is required" data-message-not-set-msg="Message is required" data-email-not-set-msg="Email is required" data-ajax-fail-msg="Ajax could not set the request" data-success-msg="Email successfully sent.">
                            <div class="row">
                            
                                <div class="col-xs-12">
                                	Email/Username
                                	<input type="text" name="email" placeholder="Your Email/Username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                	Subject
                                	<input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            Message
                            <textarea name="message" placeholder="Inquiry or Comments"></textarea>
                            <p class="return-msg"></p>
                            <div class="text-center">
                                <div class="form-contact-full-submit">
                                    <input type="submit" value="Send Message">
                                </div>
                          	</div>
                        </form>
                    </div><!-- .col-md-4 -->
                    <div class="col-md-4 onscroll-animate" data-delay="400" >
                        <img src="/storage/images/mail_animation.gif" class="img-responsive" /> 
                    </div>

                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-content -->
    </section>
     

    

    @include('layout.footer')
</body>
</html>
