<header>
    <h1><a href="#">Admin Panel</a></h1>
    <nav>
        <ul id="main-navigation" class="clearfix"> 
            <li class="dropdown active"> 
                <a href="#a"><i class="fa fa-plus"></i> Projects</a> 
                <ul> 
                    <li> 
                        <a href="{{ route('investment.create') }}"> <i class="fa fa-plus"></i>  Add Investments</a> 
                        <a href="{{ route('property.create') }}"> <i class="fa fa-plus"></i>  Add Property</a> 
                    </li> 
                
                </ul> 
            </li> 
            
   
            
            <li class="fr dropdown"> 
                <a href="#" class="with-profile-image"><span><img src="{{ asset('/storage/admin/images/profile-image.png') }}" /></span>Administrator</a> 
                <ul> 
                    <li><a href="#">Settings</a></li> 
                <li><a href="{{ route('logout') }}">Signout</a></li> 
                </ul>
            </li> 
        </ul> 
    </nav>
</header>