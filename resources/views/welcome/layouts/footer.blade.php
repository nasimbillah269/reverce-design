{{--<footer>
    <div class="footerWidgetArea" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>ELITRA GLOBAL LIMITED</h4>
                        <p><b>Address:</b> {!!general()->address_one!!}</p>
                        <p><b>Email:</b> {!!general()->email!!}</p>
                        <p><b>Phone:</b> {!!general()->mobile!!}</p>
                    </div>
                </div>
              
                <div class="col-md-3">
                    @if($menu = menu('Footer Three'))
                    <div class="footer-widget">
                        <h4>Quick Link</h4>
                        <ul class="footer-menu">
                            @foreach($menu->subMenus as $menu)
                            <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                            @endforeach
                        </ul>
                        <!--<ul class="">-->
                        <!--    <li >-->
                        <!--        <a href="#">home</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#worldwide">worldwide</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">service</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">people & design</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">sustainability</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">production</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">products & customers</a>-->
                        <!--    </li>-->
                            
                        <!--</ul>-->
                    </div>
                    @endif
                </div>
                <div class="col-md-2">
                    @if($menu = menu('Footer Two'))
                    <div class="footer-widget">
                        <h4>Products</h4>
                        <ul class="footer-menu">
                            @foreach($menu->subMenus as $menu)
                            <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                            @endforeach
                        </ul>
                        <!--<ul class="">-->
                        <!--    <li >-->
                        <!--        <a href="#">home</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#worldwide">worldwide</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">service</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">people & design</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">sustainability</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">production</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">products & customers</a>-->
                        <!--    </li>-->
                            
                        <!--</ul>-->
                    </div>
                    @endif
                </div>
                
                  <div class="col-md-3">
                    <div class="footer-widget">
                        <h4>Social Link</h4>
                        
                        <ul class="footerSoiclaLink">
                            @if(general()->facebook_link)
                            <li><a href="{{general()->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(general()->twitter_link)
                            <li><a href="{{general()->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
                            @if(general()->linkedin_link)
                            <li><a href="{{general()->linkedin_link}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if(general()->youtube_link)
                            <li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>
                            @endif
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
                        </ul>
                        
                        
                        
                        <!--  @if($menu = menu('Footer Two'))-->
                        <!--   <ul class="footer-menu">-->
                        <!--    @foreach($menu->subMenus as $menu)-->
                        <!--    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                        <!--    @endforeach-->
                        <!--</ul>-->
                        <!--@endif-->
                    </div>
                </div>
                <!--<div class="col-md-3">-->
                <!--    <div class="footer-widget">-->
                <!--        <h4>CONTACT US</h4>-->
                <!--        <p><b>Email:</b> {!!general()->email!!}</p>-->
                <!--        <p><b>Hotline:</b> {!!general()->mobile!!} </p>-->
                <!--        <p><b>Hotline:</b> 01948-800600 </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget">-->
                <!--         <h4>SOCIAL LINK</h4>-->
                <!--       <div class="socialMenu">-->
                <!--        <ul>-->
                <!--            @if(general()->facebook_link)-->
                <!--            <li><a href="{{general()->facebook_link}}"><i class="fa fa-facebook"></i></a></li>-->
                <!--            @endif-->
                <!--            @if(general()->twitter_link)-->
                <!--            <li><a href="{{general()->twitter_link}}"><i class="fa fa-twitter"></i></a></li>-->
                <!--            @endif-->
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
                <!--            @if(general()->linkedin_link)-->
                <!--            <li><a href="{{general()->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>-->
                <!--            @endif-->
                            <!--@if(general()->youtube_link)-->
                            <!--<li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>-->
                            <!--@endif-->
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-5">-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-6">-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>FACTORY OFFICE</h4>-->
                <!--                <p><b>Address:</b> {!!general()->address_one!!}</p>-->
                <!--                <p><b>Email:</b> {!!general()->email!!}</p>-->
                <!--                <p><b>Hotline:</b> {!!general()->mobile!!}</p>-->
                                
                <!--            </div>-->
                <!--            @if($menu = menu('Footer Two'))-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>{{$menu->name}}</h4>-->
                <!--                <ul class="footer-menu">-->
                <!--                    @foreach($menu->subMenus as $menu)-->
                <!--                    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                <!--                    @endforeach-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--            @endif-->
                <!--        </div>-->
                <!--        <div class="col-md-6">-->
                <!--            @if($menu = menu('Footer Three'))-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>{{$menu->name}}</h4>-->
                <!--                <ul class="footer-menu">-->
                <!--                    @foreach($menu->subMenus as $menu)-->
                <!--                    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                <!--                    @endforeach-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--            @endif-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="footer-widget">-->
                <!--        <h4>Office Location</h4>-->
                <!--        <p><b>Address:</b> {!!general()->address_one!!}</p>-->
                <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.920218312618!2d90.35768829914689!3d23.876671472604375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1700193399770!5m2!1sen!2sbd" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--        <div class="socialMenu">-->
            <!--            <ul>-->
            <!--                @if(general()->facebook_link)-->
            <!--                <li><a href="{{general()->facebook_link}}"><i class="fa fa-facebook"></i></a></li>-->
            <!--                @endif-->
            <!--                @if(general()->twitter_link)-->
            <!--                <li><a href="{{general()->twitter_link}}"><i class="fa fa-twitter"></i></a></li>-->
            <!--                @endif-->
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
            <!--                @if(general()->linkedin_link)-->
            <!--                <li><a href="{{general()->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>-->
            <!--                @endif-->
                            <!--@if(general()->youtube_link)-->
                            <!--<li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>-->
                            <!--@endif-->
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
            <!--            </ul>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    <div class="cory-right-section">
        <span class="copyright">© {{date('Y')}} <a href="{{route('index')}}">{{general()->title}}</a> | All Rights Reserved. Design by <a href="https://natoreit.com/" target="_blank">Natore-IT</a></span>
    </div>
</footer>--}}
 <!--footer start-->
        <footer class="footer widget-footer clearfix">

            <div class="second-footer ttm-bgimage-yes bg-footer ttm-bg ttm-bgcolor-darkgrey">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-8 col-lg-5 widget-area">
                            <div class="widget-latest-tweets mt_140 res-991-margin_top0 clearfix">
                                <div class="widgte-text">

                                    <div class="widgte-title">
                                        <h4>About Us</h4>
                                    </div>
                                    <div class="">
                                        <p>REVERSE DESIGN is dedicated and passionate about the design, production and manufacture of world class apparels and garments utilizing the latest trends, technologies and processes.</p>
                                    </div>
                                    <div class="widget_social padding_top10 clearfix">
                                        <div class="social-icons">

                                            <ul class="social-icons list-inline">
                                                  @if(general()->facebook_link)
                                                <li><a class="tooltip-top" href="{{general()->facebook_link}}" target="_blank" rel="noopener" aria-label="facebook" data-tooltip="Facebook">
                                                <i class="fa fa-facebook"></i></a></li>
                                                  @endif
                                                  
                                                   @if(general()->instagram_link)
                                                <li><a class="tooltip-top" href="{{general()->instagram_link}}" target="_blank" rel="noopener" aria-label="instagram" data-tooltip="instagram">
                                                <i class="fa fa-instagram"></i></a></li>
                                                @endif
                                                
                                                 @if(general()->linkedin_link)
                                                <li><a class="tooltip-top" href="{{general()->linkedin_link}}" target="_blank" rel="noopener" aria-label="linkedin" data-tooltip="linkedin">
                                                <i class="fa fa-linkedin"></i></a></li>
                                                 @endif
                                                
                                                
                                                @if(general()->pinterest_link)
                                                <li><a class="tooltip-top" href="{{general()->pinterest_link}}" target="_blank" rel="noopener" aria-label="pinterest" data-tooltip="Linkedin"><i class="fa fa-pinterest-p"></i></a></li>
                                                @endif
                                                 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-2 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                       
                                
                                @if($menu = menu('Footer Two'))
                                <ul id="menu-footer-quick-links">
                                    @foreach($menu->subMenus as $menu)
                                    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                                    @endforeach

                                </ul>
                                @endif
                                
                                
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 widget-area">
                            <div class="widget widget-recent-post clearfix">
                                <h3 class="widget-title">Contact</h3>

                                <div class="contact">
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"> <i class="flaticon flaticon-location-1"></i></div>
                                        <div style="color: #fff; font-size: 10px;" class="top_bar_content">{!!general()->address_one!!}</div>
                                    </div>

                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"> <i class="flaticon flaticon-call-1"></i></div>
                                        <div class="top_bar_content"> <a href="">{!!general()->mobile!!}</a></div>
                                    </div>


                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"> <i class="flaticon flaticon-envelope"></i></div>
                                        <div class="top_bar_content"> <a href="#">{!!general()->email!!}</a></div>


                                    </div>



                                </div>


                                <!-- <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58490.537698106804!2d90.46976667170318!3d23.61657361555775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b10812a520a3%3A0x6d3af4457bec4c90!2sNarayanganj!5e0!3m2!1sen!2sbd!4v1668594340708!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text ttm-bg copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-left">
                                    <span class="cpy-text">
    <p>Copyright © 2025 Reverse Design. All Rights Reserved</p>
</span>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right right-woner">
                                    <span class="cpy-text"> Design & Develop By  : <a href="https://natoreit.com/" target="_blank"><span style="font-family:cursive">Natore It</span></a> 
                                    </span>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
