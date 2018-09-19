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
                        <h1>About Us</h1>
                        <h4>Pages / About</h4>
                    </div>
                </div>
            </div>
    </section>

	
    <section>
            <div class="section-content">
                <div class="container">
                    <article class="onscroll-animate" data-animation="fadeInRight">
                        <center>
                        <div class="profile-full" style="max-width: 700px;">
                            <div class="row flex">
                                <div class="col-md-5 profile-full-photo">
                                    <img alt="Mission" src="/storage/images/mission.PNG" style="padding: 10px; mmargin-top: -30px; text-align: center;">
                                </div>
                                <div class="col-md-7">
                                    <div class="profile-full-content" style="margin-top: 30px;">
                                        <h1>Our Mission</h1>
                                        
                                        <p style="text-align: left;">Our mission is to use our technology platform to reach an increasing number of people with increasing quantity of real estate deals that are satisfactorily beneficial.</p>
                                       
                                    </div><!-- .profile-full-content -->
                                </div><!-- .col-md-9 -->
                            </div><!-- .row -->
                        </div><!-- .profile-full -->
                        </center>
                    </article>

                    <article class="onscroll-animate" data-animation="fadeInRight">
                            <center>
                            <div class="profile-full" style="max-width: 700px;">
                                <div class="row flex">
                                    <div class="col-md-5 profile-full-photo">
                                        <img alt="Mission" src="/storage/images/vision.png" style="padding: 10px; mmargin-top: -30px; text-align: center;">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="profile-full-content" style="margin-top: 30px;">
                                            <h1>Our Vision</h1>
                                            
                                            <p style="text-align: left;">Our vision is to have developed over 100 Africa real estate portfolio for over 2000 people and become the most preferred real estate investment platform in Africa by 2030</p>
                                           
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
