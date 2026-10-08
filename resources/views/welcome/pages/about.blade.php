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
    .team-sec { padding: 60px 0 70px; background: #f6f6f6; }
    .team-sec .sec-title { text-align: center; margin-bottom: 40px; }
    .team-sec .sec-title h2 { margin: 0 0 10px; }
    .team-sec .sec-title span { display: inline-block; width: 60px; height: 3px; background: #ed1c24; }
    .team-card { display: flex; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,.08); max-width: 820px; margin: 0 auto; }
    .team-card .team-img { flex: 0 0 300px; background: #fff; }
    .team-card .team-img img { width: 100%; height: 100%; min-height: 340px; object-fit: cover; object-position: top; display: block; }
    .team-card .team-info { flex: 1; padding: 40px 35px; display: flex; flex-direction: column; justify-content: center; border-left: 4px solid #ed1c24; }
    .team-card .team-info h3 { font-size: 28px; font-weight: 700; margin: 0 0 6px; color: #222; }
    .team-card .team-info .designation { color: #ed1c24; font-weight: 600; font-size: 15px; letter-spacing: .5px; text-transform: capitalize; margin-bottom: 25px; }
    .team-card .team-contact { list-style: none; padding: 0; margin: 0; }
    .team-card .team-contact li { display: flex; align-items: center; margin-bottom: 14px; font-size: 15px; }
    .team-card .team-contact li i { width: 40px; height: 40px; flex: 0 0 40px; border-radius: 50%; background: #ed1c24; color: #fff; display: flex; align-items: center; justify-content: center; margin-right: 14px; font-size: 16px; }
    .team-card .team-contact li a { color: #444; word-break: break-all; }
    .team-card .team-contact li a:hover { color: #ed1c24; }
    @media (max-width: 767px) {
        .team-card { flex-direction: column; max-width: 400px; }
        .team-card .team-img { flex: none; }
        .team-card .team-img img { min-height: 0; height: 360px; }
        .team-card .team-info { border-left: 0; border-top: 4px solid #ed1c24; padding: 30px 25px; text-align: center; }
        .team-card .team-contact { align-self: center; text-align: left; }
    }
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
                        <img src="{{asset(assetLink().'/images/uploads/page/About Us-2025-01-05-6779eb1c4c00e.jpg')}}" alt="About Us" class="img-fluid mb-4" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                </div>

            </div>
        </div>

<div class="team-sec">
    <div class="container">
        <div class="sec-title">
            <h2 style="color: #000;">Contact Person</h2>
            <span></span>
        </div>
        <div class="team-card">
            <div class="team-img">
                <img src="{{asset(assetLink().'/images/uploads/team/noman.jpg')}}" alt="Noman">
            </div>
            <div class="team-info">
                <h3>Roman</h3>
                <div class="designation">Manager, Merchandising &amp; Marketing</div>
                <ul class="team-contact">
                    <li><i class="fa fa-envelope"></i><a href="mailto:roman@reverse-design.net">roman@reverse-design.net</a></li>
                    <li><i class="fa fa-phone"></i><a href="tel:+8801723692439">+880 1723 692439</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js') 

@endpush


