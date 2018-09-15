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
                        <h1>Blank Page</h1>
                        <h4>Pages / Blank</h4>
                    </div>
                </div>
            </div>
    </section>

	<section>
        <div class="section-content">
            <div class="container">
                ...content
            </div>
        </div>
      </section>
     

    

    @include('layout.footer')
</body>
</html>
