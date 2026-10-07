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
                            <h2>Message</h2>
                            <p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">We are pleased to inform you that REVERSE DESIGN is a promising sourcing house in Bangladesh. We have strong merchandising and quality team to run everything from sampling to shipment. We specialize in any kind of knit, woven and sweater, because we have our own 100% export-oriented factory, especially knit and sweater.  </span></span>
                            </p>

                            <p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">We also supply woven items such as Denim, Twill, Fake Down, Padding Jackets, Headwear (Caps), Leather, Jute and Handicrafts from the sourcing factory. As a result, we are able to support fast sampling, full quality production, timely shipments as well as attractive prices. <strong> </strong></span></span>
                            </p>
                            <p style="margin-left:0in; margin-right:0in; text-align:justify"><span style="font-size:14px"><span style="font-family:Verdana,Geneva,sans-serif">We have been steadily doing business in this sector for decades. Our main markets are, USA, Canada, Finland, Spain & France respectively. We are already enhancing the market in Australia, Portugal, Netherlands & Russia as well. In addition, we want to more perform all over the world since our return of client values are well efficiency. <strong> </strong></span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <img src="{{asset(assetLink().'/images/uploads/page/message-2025-01-05-6779e2f265532.jpeg')}}" alt="Message" class="img-fluid" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                </div>

            </div>
        </div>



@endsection @push('js') @endpush