<div class="site-top">
    <div class="container clearfix">
        <div class="pull-left">
            <span class="site-top-item">
                <a href="#"><i class="fa fa-envelope"></i> info@firststonersl.com</a>
            </span>
            <span class="site-top-item">
                <i class="fa fa-phone"></i> +234 800 000 0000
            </span>
            <span class="site-top-item">
                &reg; <b>RC:</b> 1518397
            </span>
        </div>
        <div class="pull-right">
            <div class="site-top-item">
                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user"></i> Log in</a>
            </div>
            <div class="site-top-item">
                <a href="#" data-toggle="modal" data-target="#regModal"><i class="fa fa-pencil"></i> Sign Up</a>
            </div>
            <div class="site-top-item">
                <form id="form-top-search">
                    <input type="text" name="s">
                    <input type="submit" value="Go">
                </form>
                <a id="form-top-search-trigger" href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div><!-- .container -->
</div><!-- .site-top -->
<div class="main-menu">
    <div class="container">
        <img class="pull-left main-logo" alt="FirstStone" src="/storage/images/firststonelogog.png" style="max-height: 80px;">
        <div class="menu-button"><i class="fa fa-reorder"></i></div>
        <nav class="menu-container underscore-container menu-container-fade">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="#">Our Services</a>
                    <ul>
                        <li><a href="/services/land">Land Investment</a></li>
                        <li><a href="/services/dev">Development Investment</a></li>
                        
                    </ul>
                </li>
                <li><a href="agents.html">Property Shop</a>
                    <ul>
                        <li><a href="#">Land</a></li>
                        <li><a href="#">Structures</a></li>
                        
                    </ul>
                </li>
                <li><a href="/contact">Contact Us</a></li>
                
            </ul>
            <div class="underscore"><div class="underscore-inner"></div></div>
        </nav>
    </div><!-- .container -->
</div><!-- .main-menu -->
@include('modals.login')
@include('modals.register')