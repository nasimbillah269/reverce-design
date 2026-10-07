<!--header start-->
<header id="masthead" class="header ttm-header-style-03 ">
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container-fluid full-wide">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-navigation d-flex align-items-center justify-content-between">
                            <div class="site-branding">
                                  
                                <a class="home-link" href="{{route('index')}}" title="Website" rel="home">
                                    <img id="logo-img"  class="img-fluid auto_size" src="{{asset(general()->logo())}}" alt="logo-img" />
                                </a>
                            </div>

                            <div class="border-box-block m-auto">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>

                                    <nav class="main-menu menu-mobile" id="menu">
                                          @if($menu = menu('Header Menus'))
                                        <ul class="menu">
                                         @foreach($menu->subMenus as $menu)
                                            <li class="mega-menu-item">
                                                <a href="{{ url($menu->menuLink()) }}" class="mega-menu-link">
                                                   {{ $menu->menuName() }}
                                                </a>
                                                  @if($menu->subMenus->count())
                                                <ul class="mega-submenu">
                                                    <!-- Loop for Submenus -->
                                                    @foreach($menu->subMenus as $submenu)
                                                    <li class="mega-menu-item">
                                                        <a href="{{ url($submenu->menuLink()) }}" >
                                                          {{ $submenu->menuName() }}
                                                        </a>
                                                    </li>
                                                     @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                     

                                         
                                        </ul>
                                        @endif
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header end-->


{{--<header class="sticky-header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="top-right-header">
                        <ul>
                            <li> <a href="tel:+880{{ general()->mobile }}">
                                <i class="fa-brands fa-whatsapp"></i>
                                <i class="fa-solid fa-plus"></i>
    <i class="fa fa-phone"></i>  {{ general()->mobile }}
</a></li>
                            <li><a href="mailto:{{general()->email}}"><i class="fa fa-envelope-o"></i> {{general()->email}}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="top-left-header">
                        <ul>
                            <li><a href="javascript:void();">Follow on</a></li>
                            @if(general()->facebook_link)
                            <li><a href="{{general()->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(general()->twitter_link)
                            <li><a href="{{general()->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            @endif
                    
                            @if(general()->linkedin_link)
                            <li><a href="{{general()->linkedin_link}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                       
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-10">
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset(general()->logo())}}" alt="{{general()->title}}"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header-menu">
                      
                        @if($menu = menu('Header Menus'))
                        <ul class="menu">
                            @foreach($menu->subMenus as $menu)
                            <li class="menu-item">
                                <a href="{{ url($menu->menuLink()) }}">{{ $menu->menuName() }}</a>
                                @if($menu->subMenus->count())
                                <ul class="submenu">
                                    @foreach($menu->subMenus as $submenu)
                                    <li>
                                        <a style="padding: 20px !important; " href="{{ url($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                        
                                         @if($submenu->subMenus->count())
                                          <ul class="submenu lastSubmenu">
                                            @foreach($submenu->subMenus as $submenu)
                                            <li>
                                                <a style="padding: 20px !important; " href="{{ url($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                            </li>
                                             @endforeach
                                        </ul>
                                         @endif
                                    
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                              <li class="menu-item">
                                <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a>

                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
  
    </div>
</header>--}}



