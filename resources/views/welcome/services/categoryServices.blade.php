@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($category->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($category->name)}}" />
        <meta name="description" property="og:description" content="{!!$category->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$category->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($category->image())}}" />
        <meta name="url" property="og:url" content="{{route('serviceCategory',$category->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('serviceCategory',$category->slug?:'no-title')}}">
@endsection 
@push('css')
<style>

</style>
@endpush 

@section('contents')

<div class="breadcrumb-area"
    @if($category->bannerFile)
    style="background-image:url({{asset($category->banner())}});background-repeat: no-repeat;
        background-size: cover;padding: 50px 0;"
    @endif
    >
    <div class="container">
        <div class="title">
            <h1>{{$category->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$category->name}}</li>
            </ul>
        </div>
    </div>
</div>


<!--grid-section-->
            <div class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row g-0 ttm-boxes-spacing-30px">

                    @foreach($services as $service)
                        <div class="col-lg-3 col-md-6 col-sm-6 ttm-box-col-wrapper pb-0">
                            <div class="featured-imagebox featured-imagebox-portfolio style2">
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset($service->image())}}" alt="image">
                                    </div>
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="benoit-architecture" data-rel="prettyPhoto" href="{{asset($service->image())}}">
                                    <i class="ti ti-search"></i>
                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        {{$services->links('pagination')}}
                        
                    </div>
                    <!-- row end -->
                </div>
            </div>



<!--<div class="serviceCompany">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            @foreach($services as $service)-->
<!--            <div class="col-md-4">-->
<!--                @include(welcomeTheme().'services.includes.serviceGrid')-->
<!--            </div>-->
<!--            @endforeach-->
<!--        </div>-->

<!--        {{$services->links('pagination')}}-->
<!--    </div>-->
<!--</div>-->

@endsection 

@push('js') @endpush