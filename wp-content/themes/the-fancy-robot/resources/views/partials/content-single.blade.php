<article @php post_class() @endphp>
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y">
      @if(has_post_thumbnail())
        <figure class="cell small-12 single-post__image" style="background-image:url({!! esc_url_raw($featured_image->url) !!})">
          <img src="{!! esc_url_raw($featured_image->url) !!}" alt="{!! $featured_image->alt ? esc_attr($featured_image->alt) : App::title() !!}" class="show-for-sr" />
        </figure>
      @endif
      <div class="cell small-12 single-post__meta">
        <header>
          <h1>{!! get_the_title() !!}</h1>
        </header>
        <span class="single-post__date">Published: {!! get_the_date() !!}</span>
        @if(get_the_date() != get_the_modified_date())
         <span class="single-post__date">Updated: {!! get_the_modified_date() !!}</span>
        @endif
      </div>
        <div class="cell small-12 single-post__content">
          @php the_content() @endphp
        </div>
    </div>
  </div>
</article>
