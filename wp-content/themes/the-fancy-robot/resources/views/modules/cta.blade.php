<section class="cta module">
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y align-center-middle">
      <div class="cell medium-10 cta__content text-center">
        <p class="lead">{!! esc_attr($fields->pain) !!}</p>
        <h2>{!! esc_attr($fields->agitate) !!}</h2>
        <p>{!! esc_attr($fields->solve) !!}</p>
        <a href="#" class="button gold cta-modal">{!! esc_attr($fields->button_text) !!}</a>
      </div>
    </div>
  </div>
  <div class="svg-bg">
    {!! $fields->background_svg !!}
  </div>
</section>
