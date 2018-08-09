<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!--[if lte IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<!-- iPad Settings -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, width=device-width">
<!-- iPad End -->

<title>Admin</title>

<link rel="shortcut icon" href="favicon.ico">

<!-- iOS ICONS -->
<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.png" />
<link rel="apple-touch-startup-image" href="touch-startup-image.png">
<!-- iOS ICONS END -->

<!-- STYLESHEETS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/reset.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/grids.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/style.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/jquery.uniform.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/forms.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('/admin/css/themes/lightblue/style.css') }}" />

<style type = "text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color: #eeeeee; height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->

</head>
<body class="login" style="overflow: hidden;">
    <div id="loading"> 
        {{-- @if(isset(Auth::user()->email))
            <div class="alert alert-danger sucess-block">
            <strong>{{ Auth::user()->email }}</strong>
            </div>
        @endif --}}
        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +
                           "Loading...</p></div>");
        </script> 

    </div> 

    <div class="login-box">
    	<section class="portlet login-box-top">
            <header>
                <h2 class="ac">Admin Login</h2>
            </header>
            <section>
                @if($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong> {{ $message }}</strong>

                    </div>
                @else
                    <div class="message info">Enter your Email and Password to Begin</div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif
                    
                
                
                <form id="form" class="has-validation" action="{{ route('login') }}" method="post" style="margin-top: 30px">
                    {{ csrf_field() }}    
                <p style="margin-bottom: 30px">
                        <input type="text" id="username" class="full" value="" name="username" required="required" placeholder="Username" />
                    </p>
                    <p style="margin-bottom: 30px">
                        <input type="password" id="password" class="full" value="" name="password" required="required" placeholder="Password" />
                    </p>
                    <p class="clearfix">
                        <span class="fl" style="line-height: 23px;">
                            <label class="choice" for="remember">
                                <input type="checkbox" id="remember" class="" value="1" name="remember"/>
                                Remember me
                            </label>
                        </span>

                        <button class="fr" name="login" type="submit">Login</button>
                    </p>
                </form>
                <footer class="ac">
                    <a href="#" class="button">Reset Password</a>
               
                </footer>
            </section>
    	</section>
	</div>
    
    <!-- MAIN JAVASCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
    <script>window.jQuery || document.write("<script src='{{ asset('/admin/js/jquery.min.js') }}'>\x3C/script>")</script>
    <script type="text/javascript" src="{{ asset('/admin/js/jquery.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.uniform.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/PIE.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]-->

    <script type="text/javascript" src="{{ asset('/js/global.js') }}"></script>
    <!-- MAIN JAVASCRIPTS END -->

    <!-- LOADING SCRIPT -->
    <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    $(document).ready(function(){
        $.tools.validator.fn("#username", function(input, value) {
            return value!='Username' ? true : {     
                en: "Please complete this mandatory field"
            };
        });
        
        $.tools.validator.fn("#password", function(input, value) {
            return value!='Password' ? true : {     
                en: "Please complete this mandatory field"
            };
        });

        $("#form").validator({ 
            position: 'bottom left', 
            messageClass:'form-error',
            message: '<div><em/></div>' // em element is the arrow
        });
    });
    </script>
    <!-- LOADING SCRIPT -->

</body>
</html>