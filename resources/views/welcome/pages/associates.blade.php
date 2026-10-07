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
<style></style>
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


 <div class="about-sec">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <h2>Associates</h2>
                            <p style="text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">REVERSE DESIGN is introducing its associates THE ALADIN APPARELS, NOBLE TEX INTERNATIONAL, KNIVEN ASIA for the nationwide execution wing, who are working from the back end for the final approaching. </span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <img src="{{asset(assetLink().'/images/uploads/page/Associates.jpg')}}" alt="Associates" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                </div>

            </div>
        </div>



@endsection @push('js') @endpush