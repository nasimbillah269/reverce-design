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

 </style>
@endpush 

@section('contents')
<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 130px 0;"
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


 <div class="about-sec">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <h2>About Us</h2>
                            <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">
                                REVERSE DESIGN is dedicated and passionate about the design, production and manufacture of world class apparels and garments utilizing the latest trends, technologies and processes.
In order to achieve our ambitious vision to become a world-class garment manufacturing corporation, REVERSE DESIGN not only focuses on qualitative management and environmental control but also active maintenance of proper inter-relationship with our personnel and all the neighboring communities.
 </span></span>
                            </p>

                            <p style="text-align:justify">Being under current global economic landscape characterized by volatility and recession, especially among our major export markets such as the United States and the European Union, cost reduction initiatives are an approach to maintain our competitiveness in an ever-changing global marketplace. Concurrently, we aim to shorten our delivery period to even better respond to our customer needs.<span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif"></span></span>
                            </p>
                            <p style="text-align:justify">The secret of the Company’s success thus far can be credited to the key connections and relationships the business has maintained driving customer trust and loyalty.<span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif"></span></span>
                            </p>
                            <p style="text-align:justify">I invite you to explore the potential of REVERSE DESIGN in helping to supply and deliver world-class finished apparel and garment solutions for everyone from infants, boys and girls, to adult men and women; across a range of essentials, smart, casual, formal and sporting applications<span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif"></span></span>
                            </p>
                            <p style="text-align:justify">Our mission speech is to “An Invincible Art of Style” which is a statement that explains a company's purpose and how it serves its customers. The statement is clear, concise and easy to understand. It can help a company focus its efforts and make decisions aligned with its goals. <span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif"></span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <img src="{{asset(assetLink().'/images/uploads/page/About Us-2025-01-05-6779eb1c4c00e.jpg')}}" alt="About Us" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                </div>

            </div>
        </div>


@endsection 

@push('js') 

@endpush


