@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle()}}</title>
@endsection 
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
@endsection 
@push('css')
<script type="application/ld+json">
    { 
    "@context": "https://schema.org", 
    "@type": "WebPage", 
    "url": "{{route('index')}}", 
    "name": "{{websiteTitle()}}",
    "author": {
        "@type": "Webpage",
        "name": "{{websiteTitle()}}"
    },
    "description": "{!!general()->meta_description!!}"
    }
</script>
@endpush 

@section('contents')

<!--Slider Part Include Start-->
@include(welcomeTheme().'layouts.slider')

      <!--Welcome-section-->
        <section class="ttm-row perfomance-section bg-layer-equal-height  clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--section-title-->
                        <div class="section-title ">
                            <div class="title-header">
                                <h3>ABOUT COMPNY</h3>
                                <h2 class="title">
                                    <strong class="ttm-textcolor-skincolor"> Welcome to <br> Reverse Design</strong></h2>
                            </div>
                            <div class="title-desc">
                                <p>Reverse Design is a trusted apparel sourcing partner connecting international buyers with reliable and compliant manufacturing partners in Bangladesh.
                                    From product development and sourcing to costing, production follow-up, quality control and shipment, we provide end-to-end support tailored to each buyer's requirements.
                                    Our focus is on quality, competitive pricing, transparency, timely delivery and long-term partnership.</p>
                                <p>With a strong understanding of the global apparel market, we continuously seek the right products, the right factories and the right solutions to create greater value for our customers.</p>
                                <p><strong>Your requirements. Our expertise. One reliable sourcing partner.</strong></p>
                                <a target="_blank" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_top15" href="{{general()->website}}">
                               See Our Profile <i class="fa fa-long-arrow-right"></i>
                           </a>
                            </div>
                        </div>
                        <!--section-title-end-->
                        <div class="ttm-tabs ttm-tab-style-01 clearfix" data-effect="fadeIn">
                            <ul class="tabs">

                                <li class="tab active">
                                    <a href="#">Our Mission</a>
                                </li>
                                <li class="tab ">
                                    <a href="#">Our Vision</a>
                                </li>
                                <li class="tab ">
                                    <a href="#">Our Services</a>
                                </li>
                            </ul>
                            <div class="content-tab padding_top30 padding_bottom30">

                                <div class="content-inner active">
                                    <div class="ttm-tabs-desc">
                                        <p>
                                            <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">Our mission speech is to &ldquo;An Invincible Art of Style&rdquo; which is a statement that explains a company&#39;s purpose and how it serves its customers. The statement is clear, concise and easy to understand. It can help a company focus its efforts and make decisions aligned with its goals.</span></span>
                                            </p>
                                        </p>
                                    </div>
                                    <!--<div class="row g-0">-->
                                    <!--    <div class="col-lg-4 col-6">-->
                                    <!--        <div class="tab-figure res-767-mb-20">-->
                                    <!--            <img class="img-fluid" src="{{asset(assetLink().'/images/uploads/slider/psdfsap-2024-12-10-67582610c8cd0.jpg')}}" alt="image">-->
                                    <!--        </div>-->
                                    <!--    </div>-->

                                    <!--</div>-->
                                </div>
                                <div class="content-inner ">
                                    <div class="ttm-tabs-desc">
                                        <p>
                                            <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">
                                                Our vision is to be the world's largest seller and exporter of companies, from where end customers can find and discover fashion apparels bought directly from around the world with just one click. As we believe in norms, values and beliefs.
                                            </span></span>
                                            </p>
                                        </p>
                                    </div>
                                    <!--<div class="row g-0">-->
                                    <!--    <div class="col-lg-4 col-6">-->
                                    <!--        <div class="tab-figure res-767-mb-20">-->
                                    <!--            <img class="img-fluid" src="uploads/previous/pdsdp-2024-12-10-675825fe50748.png" alt="image">-->
                                    <!--        </div>-->
                                    <!--    </div>-->

                                    <!--</div>-->
                                </div>
                                <div class="content-inner ">
                                    <div class="ttm-tabs-desc">
                                        <p>
                                            <p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">
                                                It is important to consider the reputation and reliability of our service provider, including price and quality, as well as terms of services. In addition, we are a global consumer-driven sourcing and manufacturing platform serving leading brands and retailers.
                                            </span></span>
                                            </p>
                                        </p>
                                    </div>
                                    <!--<div class="row g-0">-->
                                    <!--    <div class="col-lg-4 col-6">-->
                                    <!--        <div class="tab-figure res-767-mb-20">-->
                                    <!--            <img class="img-fluid" src="uploads/previous/dafault.png" alt="image">-->
                                    <!--        </div>-->
                                    <!--    </div>-->

                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white ttm-right-span position-relative">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- col-img-img-four -->
                                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-eight ttm-right-span">
                                    <div class="ttm-col-wrapper-bg-layer">
                                        <img width="100%" src="{{asset(assetLink().'/images/uploads/about/1751692822.jpg')}}" >
                                    </div>
                                    <div class="layer-content"></div>
                                </div>
                                <!-- col-img-bg-img-four end-->
                                <!-- <img class="img-fluid ttm-equal-height-image w-100 res-991-margin_bottom30" src="images/bg-image/col-bgimage-8.jpg" alt="bg-image"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-9">
                        <div class="border-right">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg ttm-right-span">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer spacing-11 vertical-border">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="fid-box-style">
                                    <div class="ttm-fid inside style5">
                                        <div class="ttm-fid-contents">
                                            <h4 class="ttm-fid-inner">
                                                <span data-after="+" data-after-style="sub" class="numinate"><p>17+</p></span>


                                            </h4>
                                        </div>
                                        <div class="ttm-fid-title">
                                            <p>Years Of <br> Experiance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome-section-end-->

        <!--Product-section-->
        <section class="ttm-row work-section res-991-margin_top0 ttm-bgcolor-darkgrey clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!--section-title-->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <!-- <h3>OUR PROJECT</h3> -->
                                <h2 style="font-weight:600; text-align: center" class="title" >OUR PRODUCTS </h2>
                            </div>
                        </div>
                        <!--section-title-end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="row justify-content-center">

                              @foreach($categories as $categorie)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="featured-imagebox featured-imagebox-portfolio style3">
                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                        <div class="featured-thumbnail">
                                            <a href="{{ route('serviceCategory', ['slug' => $categorie->slug]) }}"> <img class="img-fluid" src="{{$categorie->image()}}" alt="image"></a>
                                        </div>
                                        <div class="ttm-media-link">
                                            <a href="{{ route('serviceCategory', ['slug' => $categorie->slug]) }}" class="ttm_link"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="{{ route('serviceCategory', ['slug' => $categorie->slug]) }}">{{$categorie->name}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product-section-end-->
    





 
<!-- Modal -->
<div class="modal" id="pdfModal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <iframe id="pdfFrame" src=""></iframe>
  </div>
</div>






@endsection @push('js') @endpush