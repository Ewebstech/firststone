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
                        <h4>Pages / Land Investments</h4>
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
                                                <h1>Land Investments</h1>
                                            <img alt="Mission" src="/storage/images/land.jpg" style="padding: 10px; text-align: center;">
                                        </div>
                                    </div><!-- .row -->
                            <div class="row flex" style="padding: 10px;">
                                <div class="col-md-12">
                                    <div class="profile-full-content" style="margin-top: 0px;" id="list2" >
                                                                               
                                 
                                                <ol style="text-align: left;">
                                                <li>We research areas of moderate to high investment potential</li>
                                                <li> Partner with accredited real estate companies with documented estates in the area</li>
                                                <li>We package a project around it that includes; deal size (E.g 2 plots of land at xx estate, address for #amount), deal units, minimum yield </li>
                                                <li>The project is listed on our platform for sponsoring & closed when it’s fully sponsored</li>
                                                <li>Sponsors are awarded ownership certificates that states their percentage ownership of the property </li>
                                                <li>Sponsors are added to the project community and continually updated about the price movement of the project</li>
                                                <li>Sponsors determine the exit price above the minimum yield target.</li>
                                                <li>Project is sold at the determined</li>
                                                <li>We take a commission of 20% that covers all exit cost & and the rest is share according to percentage sponsorship.</li>
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
