<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>

    @include('admin.layout.headscripts')

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
    
   @include('admin.layout.footscripts')

</body>
</html>