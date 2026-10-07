@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}" />
@endsection @push('css')
<style>
    .client-logos { row-gap: 30px; }
    .client-card {
        height: 170px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        overflow: hidden;
    }
    .client-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    .client-card:hover {
        transform: translateY(-6px);
        border-color: #e8202a;
        box-shadow: 0 12px 28px rgba(232, 32, 42, 0.25);
    }
    @media (max-width: 575px) {
        .client-card { height: 130px; padding: 14px; }
    }
</style>
@endpush @section('contents')

<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;padding: 50px 0;" @endif >
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



  <section class="ttm-row dream-section res-991-padding_top0 ttm-bg bg-layer-equal-height clearfix grid-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h2 style="font-weight:600" class="title">EXPERIENCE WITH LEADING GLOBAL BUYERS</h2>
                            </div>
                        </div>

                    </div>
                </div>
                @php
                    // [file, client name, logo background colour]
                    $clients = [
                        ['offtex.jpg', 'Offtex', '#ffffff'],
                        ['chicoree.jpg', 'Chicorée', '#000000'],
                        ['garments-planet.jpg', 'Garments Planet', '#000000'],
                        ['carry.jpg', 'Carry', '#000000'],
                        ['point-zero.jpg', 'Point Zero', '#ffffff'],
                        ['whispering-smith.jpg', 'Whispering Smith', '#f7f4ef'],
                        ['ppt.jpg', 'PPT', '#ffffff'],
                    ];
                @endphp
                <div class="row client-logos justify-content-center">
                    @foreach($clients as [$file, $name, $bg])
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-card" style="background-color: {{$bg}}">
                            <img src="{{asset(assetLink().'/images/clients/'.$file)}}" alt="{{$name}}" title="{{$name}}" loading="lazy">
                        </div>
                    </div>
                    @endforeach
                </div>



            </div>
        </section>



@endsection @push('js') @endpush