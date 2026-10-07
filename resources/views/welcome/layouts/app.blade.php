
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="google-site-verification" content="3LFP8tpCZD3MHU0SVKY0o8VhnA3jYcK-TJWR9jYCnGs" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}" />
        @yield('title')
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset(general()->favicon())}}" />
        @yield('SEO')
        <!-- Google Font CDN-->
        <link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet" />
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Alfa+Slab+One&family=Bebas+Neue&family=Big+Shoulders:opsz,wght@10..72,100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poiret+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira:ital,wght@0,100..900;1,100..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        
 
        
        <!-- new css link-->
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/animate.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/flaticon.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/font-awesome.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/main.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/megamenu.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/prettyPhoto.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/responsive.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/shortcodes.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/slick.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/themify-icons.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/revolution/css/flaticon.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset(assetLink().'/css/revolution/css/rs6.css')}}" />
                
        
       
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
        />
        
        
        <style>
            .nav-item-link a {
                color: #fff !important;
            }
        </style>
                
        @stack('css')
    </head>
    
    <body>
        
        
        <!-- Scroll to Top Button -->
        <button id="scrollTopBtn" title="Go to top">↑</button>
        
   
        
          <!--<div class="languagePart mobileLang">-->
          <!--              <div class="gtranslate_wrapper"></div>-->
                        
                        
                        
          <!--          </div>-->

        
   
        
       

      
        

            <!--<div id="container">-->
            <!--    <header>-->
            <!--        <div class="wrapper cf">-->
            <!--            @if(menu('Header Menus'))-->
            <!--            <nav id="main-nav">-->
            <!--                <ul class="first-nav">-->
            <!--                    @foreach(menu('Header Menus')->subMenus as $menu)-->
            <!--                    <li class="devices">-->
                                    
            <!--                        @if($menu->subMenus->count() > 0)-->
            <!--                        <span>{{$menu->menuName()}}</span>-->
            <!--                        <ul>-->
            <!--                            @foreach($menu->subMenus as $menu)-->
            <!--                            <li class="mobile">-->
            <!--                                <a href="{{url($menu->menuLink())}}">{{$menu->menuName()}}</a>-->
                                            
            <!--                                @if($menu->subMenus->count() > 0)-->
            <!--                                <ul>-->
            <!--                                    @foreach($menu->subMenus as $menu)-->
            <!--                                    <li><a href="{{url($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
            <!--                                    @endforeach-->
            <!--                                </ul>-->
            <!--                                @endif-->
                                            
            <!--                            </li>-->
            <!--                            @endforeach-->
                                        
            <!--                        </ul>-->
            <!--                        @else-->
            <!--                        <a href="{{url($menu->menuLink())}}">{{$menu->menuName()}}</a>-->
            <!--                        @endif-->
                                    
            <!--                    </li>-->
            <!--                    @endforeach-->
            <!--                    <li class="devices"><span> <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a></span></li>-->
            <!--                </ul>-->
            <!--            </nav>-->
            <!--            @endif-->
            <!--            <a class="toggle" href="#">-->
            <!--                <span></span>-->
            <!--            </a>-->
            <!--        </div>-->
            <!--    </header>-->
            <!--</div>-->
        </body>
        
        <!--Header Part Include Start-->
        @include(welcomeTheme().'layouts.header')

        <!--Main Content Section Start-->
        <div class="main-content">
        @yield('contents')
        </div>
        <!--Main Content Section End-->
        
        <!--Footer Part Include Start-->
        @include(welcomeTheme().'layouts.footer')
        
        
        <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset(assetLink().'/js/hc-offcanvas-nav.js')}}"></script>
        <!-- new script-->
        <script src="{{asset(assetLink().'/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery-migrate-3.3.2.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery.easing.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery-waypoints.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery-validate.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset(assetLink().'/js/slick.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/numinate.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/imagesloaded.min.js')}}"></script>
        <script src="{{asset(assetLink().'/js/jquery-isotope.js')}}"></script>
        <script src="{{asset(assetLink().'/revolution/js/rbtools.min.js')}}"></script>
        <script src="{{asset(assetLink().'/revolution/js/rs6.min.js')}}"></script>
        <script src="{{asset(assetLink().'/revolution/js/slider.js')}}"></script>
        <script src="{{asset(assetLink().'/js/main.js')}}"></script>
        
        
        

         
         
         
         
       
        <script>
        // Get the button
        const scrollTopBtn = document.getElementById("scrollTopBtn");
        
        // Show button when user scrolls down 200px
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        };
        
        // Scroll to top smoothly when button is clicked
        scrollTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        </script>
        
        
        @once
<script>
    window.gtranslateSettings = {
        default_language: "en",
        native_language_names: true,
        detect_browser_language: true,
        languages: ["bn", "ar", "en"],
        wrapper_selector: ".gtranslate_wrapper"
    };

    window.onload = function () {
        if (window.__gtranslateInitialized) return;
        window.__gtranslateInitialized = true;

        var userLanguage = navigator.language || navigator.userLanguage;
        userLanguage = userLanguage.split("-")[0];

        if (userLanguage === "bn") {
            var gtranslateElement = document.querySelector(".gtranslate_wrapper select");
            if (gtranslateElement) {
                gtranslateElement.value = "bn";
                gtranslateElement.dispatchEvent(new Event("change"));
            }
        }
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>
@endonce


<!--<script>-->
<!--  $(document).ready(function(){-->
<!--    $('.plus-button').click(function(){-->
<!--        var url = $(this).data('url');-->
<!--      $('#pdfFrame').attr('src', url);-->
<!--      $('#pdfModal').fadeIn();-->
<!--    });-->

<!--    $('.close-btn, .modal').click(function(e){-->
<!--      if (e.target !== this) return;-->
<!--      $('#pdfModal').fadeOut();-->
<!--      $('#pdfFrame').attr('src', '');-->
<!--    });-->
<!--  });-->
<!--</script>-->

<script>
    
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();
        
        console.log(scrollTop);

        // Show image after 100px scroll
        if (scrollTop >= 100) {
            $('.homeBannerBrid .img2').addClass('visible');
            $('.homeBannerBrid .img1').addClass('visible');
            $('.topScrollImg img').addClass('visible');
        } else {
            $('.homeBannerBrid .img2').removeClass('visible');
            $('.homeBannerBrid .img1').removeClass('visible');
            $('.topScrollImg img').removeClass('visible');
           
        }
        // Show image after 100px scroll
        if (scrollTop >= 2000) {
            $('.homeBannerBrid .img3').addClass('visible');
        } else {
            // $('.homeBannerBrid .img3').removeClass('visible');
            $('.homeBannerBrid .img3').addClass('visible');
           
        }

        // Horizontal movement
        let move = scrollTop - 100;
        let moveX = move * 9.0;
        
        //  moveX +=200;

        // Rotation logic: swing left and right
          let rotateDeg = Math.sin((scrollTop + 50) / 100) * 15; // Adjust 100 and 15 for frequency and tilt
          
        console.log('moveX:', moveX);

        // Apply transform: move and rotate
        $('.homeBannerBrid .img2').css('transform', `translateX(${moveX}px) rotate(${rotateDeg}deg)`);
        $('.homeBannerBrid .img3').css('transform', `translateX(${-moveX}px) rotate(${-rotateDeg}deg)`);
    });
</script>


  <script>
  $(document).ready(function(){
    $('.partner-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>
  <script>
  $(document).ready(function(){
    $('.outware-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>
  <script>
  $(document).ready(function(){
    $('.suitBlazer-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.kints-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 600,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.wovent-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

  <script>
  $(document).ready(function(){
    $('.denim-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>

        <script>
              Fancybox.bind('[data-fancybox="gallery"]', {
              }); 
        </script>
        
        <script>
            $('.accordion-header').click(function() {
                const icon = $(this).find('i');
                $('.accordion-header').not(this).removeClass('active').find('i').attr('class', 'fas fa-plus');
                $('.accordion-content').not($(this).next()).slideUp();
        
                $(this).toggleClass('active');
                $(this).next('.accordion-content').slideToggle();
                icon.toggleClass('fa-plus fa-minus');
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200) {
                        $('#scrollTopBtn').fadeIn();
                    } else {
                        $('#scrollTopBtn').fadeOut();
                    }
                });
        
                $('#scrollTopBtn').click(function () {
                    $('html, body').animate({scrollTop: 0}, 600);
                    return false;
                });
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('.main-header').addClass('sticky-active');
                    } else {
                        $('.main-header').removeClass('sticky-active');
                    }
                });
            });
        </script>

        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });

                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>

        <script>
            $(document).ready(function(){

           
            $("#division").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#district').empty().append('<option value="">No District</option>');
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#district').empty().append(data.geoData);
                    $('#city').empty().append('<option value="">No City</option>');
                  });   
            });

            $("#district").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#city').empty().append(data.geoData);  
                  });   
            });
            
        });
        </script>
        
        <script>
            $(document).on('click','.subsriberbtm',function(e){
              e.preventDefault();
               var url = $('#subscirbeForm').data('url');
               var subscribeEmail =$('#subscribeEmail').val();
                    $.ajax({
                      url: url,
                      type: 'POST',
                      dataType: 'json',
                       data: {email : subscribeEmail},
                      cache: false,
        
                    })
                    .done(function(data) {
                        if(data.success)
                          {
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                            $("#subscribeEmail").css("border","");
                            $("#subscirbeForm")[0].reset();
                          }else{
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #ff9800;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                          }
                    })
                    .fail(function() {
                      // alert("error");
                    });
        
            });
        
            $("#subscribeEmail").keyup(function(){
                  if(validateEmail()){
                      $("#subscribeEmail").css("border","2px solid green");
                      $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Validated Email</p>");
                  }else{
                        var subscribeEmail=$("#subscribeEmail").val();
                       if(subscribeEmail==''||subscribeEmail==null || subscribeEmail=='undefined'){
                            $("#subscribeemailMsg").html("<p style='color: white;background: red;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Please Get a Verified Email</p>");
                        }else{
                          $("#subscribeEmail").css("border","2px solid red");
                          $("#subscribeemailMsg").html("");
                        }
                  }
              });
        
            function validateEmail(){
                  var subscribeEmail=$("#subscribeEmail").val();
        
                   var reg =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                   if(reg.test(subscribeEmail)){
                      return true;
                   }else{
                      return false;
              }
        
            }
        </script>
        

        
        <script>
            function openSearch() {
              document.getElementById("myOverlay").style.display = "block";
            }
            
            function closeSearch() {
              document.getElementById("myOverlay").style.display = "none";
            }
        </script>
        
        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });

                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>
        
        @stack('js')
        
        
    </body>
</html>
