<section class="hero-nav">
  <div class="parallax-container">
    <video muted preload="none" class="hero-nav__video" loop>
      <source src="{!! esc_url_raw($fields->bg_video->url) !!}" type="{!! $fields->bg_video->mime_type !!}">
    </video>
    <div class="grid-container hero-nav__content">
      <div class="grid-x grid-margin-x grid-margin-y">
        <div class="cell small-8 medium-6 large-5">
          @if($fields->heading)
            <h1>{!! esc_attr($fields->heading) !!}</h1>
          @endif
        </div>
        <div class="cell small-2 medium-4 large-7" aria-hidden="true"></div>
        @if($fields->text)
          <div class="cell small-8 medium-4 hero-nav__content-text">
            {!! $fields->text !!}
          </div>
        @endif
      </div>
    </div>
    <aside class="hero-nav__overlay-image">
      <img src="{!! esc_url_raw($fields->overlay_image->url) !!}" alt="{!! esc_attr($fields->overlay_image->alt) !!}" style="min-width:{{ App::get_image_width($fields->overlay_image->ID, 'full', true) }}" />
    </aside>
  </div>
</section>
