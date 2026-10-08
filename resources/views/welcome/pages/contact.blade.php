@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
@push('css')
<style>
.sitemap {
    margin-top: 50px;
}
</style>
@endpush 

@section('contents')
<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 50px 0;"
@endif
>
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>


<section class="ttm-row form-section ttm-bgcolor-grey clearfix" style="background-color:#222">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--section-title-->
                        <div class="section-title title-style-center_text margin_bottom30">
                            <div class="title-header">
                                <h3>GET IN TOUCH</h3>
                                <h2 class="title">Have A Questions Drop <span>Us Line!</span></h2>
                            </div>
                        </div>
                        <!--section-title-end-->
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class=" ttm-bgcolor-white p-40 res-991-margin_right0 ">
                            
                               @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <strong>Success! </strong> {{Session::get('success')}}.
                                </div>
                                @endif
                            

                            <!--<form method="POST" action="contact.htmlus">-->
                            <form  class="wrap-form contact_form padding_top15" action="{{route('contactMail')}}" id="contactForm" method="post">
                            @csrf
                                <div class="row ttm-boxes-spacing-30px">
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                         @if ($errors->has('name'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                        @endif
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                         @if ($errors->has('phone'))
                                         <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                        @endif
                                        <label>
                                                <span class="text-input margin_bottom0"><input name="phone" type="text" value="" placeholder="Your Phone*" required="required"></span>
                                            </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                         @if ($errors->has('phone'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                        @endif
                                        <label>
                                            <span class="text-input margin_bottom0"><input name="email" type="email" value="" placeholder="Email Address*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 ttm-box-col-wrapper">
                                         @if ($errors->has('subject'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                        @endif
                                        <label>
                                            <span class="text-input margin_bottom0"><input type="subject" name="subject" value="" placeholder="Subject*" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-12 ttm-box-col-wrapper">
                                         @if ($errors->has('message'))
                                        <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                        @endif
                                        <label>
                                                <span class="text-input margin_bottom0"><textarea name="message" cols="40" rows="6" placeholder="Your Message" aria-required="true"></textarea></span>
                                            </label>
                                    </div>



                                </div>
                                <!--<div class="mb-3">-->
                                <!--    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>-->

                                <!--    <div data-sitekey="6LeYiq4qAAAAAMBQJwZk3-_U5G8rlYkfCI1s52Kl" class="g-recaptcha"></div>-->

                                <!--</div>-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">Send Now!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        
        
           <section class="ttm-row padding_zero-section mt_100 res-991-margin_top40 res-991-margin_bottom40 clearfix contact-info-boxes">
            <style>
                .contact-info-boxes .featured-icon-box.style9 { padding: 30px 20px 25px; }
                .contact-info-boxes .featured-icon-box.style9 .featured-icon { padding-right: 15px; }
                .contact-info-boxes .featured-desc p { margin-bottom: 0; }
                .contact-info-boxes .contact-hotline a { display: block; color: inherit; word-break: break-word; }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-content style9">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-location-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Head Office</h3>
                                </div>
                                <div class="featured-desc">
                                    <p> {!!general()->address_one!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-icon-box icon-align-before-content style9 active">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-call-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Call us on</h3>
                                </div>
                                <div class="featured-desc">
                                    <p class="contact-hotline">
                                        @foreach(array_filter(array_map('trim', explode(',', general()->mobile))) as $mobile)
                                        <a href="tel:{{preg_replace('/[^0-9+]/', '', $mobile)}}">{{$mobile}}</a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="featured-icon-box icon-align-before-content style9">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-envelope"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Email Us On</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>{!!general()->email!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div id="google_map" class="google_map mt_90 res-991-margin_top0">
            <div class="map_container clearfix">
                <div id="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.726553699307!2d90.38215303889011!3d23.876733575020143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c413e891ad29%3A0x98211bdb93d8dec1!2sSector%2011%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1733917852795!5m2!1sen!2sbd"
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>




{{--<div class="contact-page">
    <div class="container">
       
        <div class="contact-form">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-info">
                        <h3>Send Messege</h3>
                        <p>Feel Free To Contact Us</p>
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>Success! </strong> {{Session::get('success')}}.
                        </div>
                        @endif
                        <form action="{{route('contactMail')}}" id="contactForm" method="post">
                            @csrf
                            <div class="form-group form-group-section">
                                @if ($errors->has('name'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                @endif
                                <input type="name" name="name" value="" class="form-control control-section" placeholder="Enter Name" required="" />
                            </div>
                            <!-- <span class="required">This field is required</span> -->
                            <div class="form-group form-group-section">
                                @if ($errors->has('email'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                                @endif
                                <input type="email" name="email" value="" class="form-control control-section" placeholder="Email Address" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('phone'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                @endif
                                <input type="phone" name="phone" value="" class="form-control control-section" placeholder="Phone Number" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('subject'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                @endif
                                <input type="subject" name="subject" value="" class="form-control control-section" placeholder="Subject" required="" />
                            </div>
                            <div class="form-group form-group-section">
                                @if ($errors->has('message'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                @endif
                                <textarea name="message" rows="5" value="" class="form-control control-section" placeholder="Write Your Massege" required=""></textarea>
                            </div>
                            <!--<div>-->

                            <!--    <button class="g-recaptcha btn submitbutton" -->
                            <!--    data-sitekey="6LdTLTkrAAAAADMlQDwpl77bDA5tYg68ff5iv6Fx" -->
                            <!--    data-callback='onSubmit' -->
                            <!--    data-action='submit'>Submit</button>-->
                            <!--</div>-->
                            <div>

                                <button class=" btn submitbutton" 
                                type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5> Office Address</h5>
                                <p>{{general()->address_one}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5>Email Address</h5>
                                <!--<p>Buyer Support: raju@elitarabd.com, kamal@elitarabd.com </p>-->
                                <p>General Inquiry: {{general()->email}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="website-info">
                        <div class="media">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div class="media-body">
                                <h5>Phone Numbers</h5>
                                <!--<p>{{general()->mobile}}</p>-->
                                <p>+880-1711326993 (WhatsApp/Direct)</p>
                                <!--<p>+880-1716741866  (WhatsApp/Direct)</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="row">-->
        <!--    <div class="col-md-12">-->
        <!--        <div class="sitemap">-->
        <!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.92021831534!2d90.35768830596885!3d23.876671472592303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1699677238195!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
    </div>
</div>--}}


@endsection 

@push('js') 
 <script src="https://www.google.com/recaptcha/api.js"></script>
 
 
 <script>
    $(document).on('click', '.alert .close', function () {
        $(this).closest('.alert').fadeOut(300); // smooth hide
    });
</script>
 
  <script>
   function onSubmit(token) {
       var recaptchaInput = document.createElement('input');
        recaptchaInput.type = 'hidden';
        recaptchaInput.name = 'recaptchaToken';
        recaptchaInput.value = token;
        document.getElementById("contactForm").appendChild(recaptchaInput);
     document.getElementById("contactForm").submit();
   }
 </script>
 
@endpush


