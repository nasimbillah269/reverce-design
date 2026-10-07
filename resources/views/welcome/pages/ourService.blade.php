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

 <div id="service" class="ourServiceMain homeService">
     <div class="container">
        <h2 class="sectionTitle">Our Services </h2>
        </h1>
         <div class="row">
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Product Development & Sampling</h4>
                          <p>
                              From concept to prototype, we assist in design finalization,
                              material sourcing, and sample execution with precision.
                          </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Vendor Sourcing & Factory Compliance</h4>
                          <p>
                              We select certified factories that meet global compliance standards
                              (BSCI, SEDEX, OEKO-TEX, GOTS, etc.), ensuring quality, safety, and ethical practices.
                          </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Price Negotiation & Cost Optimization</h4>
                          <p>
                             Leveraging strong relationships and market knowledge, we secure competitive pricing without compromising quality.
                          </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Quality Control & Assurance</h4>
                          <p>
                            Dedicated QC teams perform inline and final inspections at every stage of production using AQL standards and custom client checklists.
                          </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Production Monitoring & Timeline Management</h4>
                          <p>
                            Our team tracks every order with real-time updates to ensure accurate delivery schedules and production efficiency.
                          </p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="homeServiceBox">
                          <h4>Audit & Compliance </h4>
                          <p>
                            "Audit & Compliance: Upholding industry standards and regulations through systematic audits and robust compliance practices."
                          </p>
                     </div>
                 </div>
            
             </div>
            
         </div>
     </div>
 </div>
 
 

@endsection @push('js') @endpush