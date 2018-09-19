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
            	<img alt="loader" src="/storage/images/loader.gif" />
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
                        <h1>Our Services</h1>
                        <h4>Pages / Development Investments</h4>
                    </div>
                </div>
            </div>
    </section>

	
    <section>
            <div class="section-content">
                <div class="container">
                    <article class="onscroll-animate" data-animation="fadeInRight">
                        <center>
                        <div class="profile-full" style="max-width: 800px;">
                                <div class="row flex" style="padding: 10px;">
                                        <div class="col-md-12 profile-full-photo">
                                                <h1>Development Investments</h1>
                                            <img alt="Mission" src="/storage/images/property.jpg" style="padding: 10px; text-align: center;">
                                        </div>
                                    </div><!-- .row -->
                            <div class="row flex" style="padding: 10px;">
                                <div class="col-md-12">
                                    <div class="profile-full-content" style="margin-top: 0px;" id="list2" >
                                                                               
                                                <b>How it works</b>
                                                <ol style="text-align: left;">
                                                <li>Developers projects are listed for sponsorship at building cost</li>
                                                <li>Sponsor a development at already determined yield at target duration</li>
                                                
                                                </ol>
                
                                       
                                    </div><!-- .profile-full-content -->
                                </div><!-- .col-md-9 -->
                            </div><!-- .row -->
                        </div><!-- .profile-full -->
                        </center>
                    </article>

                
            
                </div><!-- .container -->
               </div><!-- .section-content -->
          </section>
     

    

    @include('layout.footer')
</body>
</html>
