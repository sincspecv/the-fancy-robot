<section class="page-header module">
  <div class="grid-container">
    <div class="grid-x grid-padding-x grid-padding-y">
        @if($show_featured_image)
          <div class="cell medium-4 align-self-stretch page-header__image featured" style="background-image:url({!! esc_url_raw($featured_image_url) !!})" aria-hidden="true">
            <figure class="show-for-sr">
              <img src="{!! esc_url_raw($featured_image_url) !!}" alt="{!! App::title() !!}" />
            </figure>
        @else
          <div class="cell medium-4 align-self-middle">
            <figure class="page-header__image">
              <img src="{!! esc_url_raw($page_header_image->sizes->large) !!}" />
            </figure>
        @endif
      </div>
      <div class="cell medium-8 page-header__intro">
        <h1>{!! App::title() !!}</h1>
        {!! $page_header_intro !!}
      </div>
    </div>
  </div>
</section>
