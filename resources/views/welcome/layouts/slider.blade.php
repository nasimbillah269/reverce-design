@if($slider =slider('Front Page Slider'))
<div id="homeSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($slider->subSliders as $i => $sub)
      <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
        <img src="{{ asset($sub->image()) }}" class="d-block w-100"
             alt="{{ $sub->name }}" title="{{ $sub->name }}">

        <div class="carousel-caption d-none d-md-block">
          @if($sub->name)
            <h1>{!! $sub->name !!}</h1>
          @endif

          @if($sub->description)
            <p>{!! $sub->description !!}</p>
          @endif

          @if($sub->seo_title && $sub->seo_description)
            <a href="{{ $sub->seo_description }}" class="btn btn-sm btn-success">
              {!! $sub->seo_title !!}
            </a>
          @endif
        </div>
      </div>
    @endforeach
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#homeSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>











@endif