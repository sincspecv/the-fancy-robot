<div class="cell medium-4">
  <div class="card">
    <div class="card-section archive-image">
      <figure style="background-image:url({!! esc_url_raw($featured_image->url) !!})">
        <img src="{!! esc_url_raw($featured_image->url) !!}" alt="{!! esc_attr($featured_image->alt) !!}" class="show-for-sr" />
      </figure>
    </div>
    <div class="card-section archive-content">
      <article @php post_class() @endphp>
        <header>
          <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
          @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
          @php the_excerpt() @endphp
        </div>
      </article>
    </div>
    <div class="card-section archive-button">
      <a href="{!! get_permalink() !!}" class="button primary">Read More</a>
    </div>
  </div>
</div>
