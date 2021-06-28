<header class="banner {!! is_front_page() ? 'transparent' : '' !!}">
  <div class="grid-container">
    <div class="grid-x grid-padding-x grid-padding-y align-middle">
      <div class="site-brand cell small-10 large-4 align-left">
        <a class="site-brand__logo" href="{{ home_url('/') }}">{!! $site_brand !!}</a>
      </div>
      <div class="nav-wrap cell large-auto align-right show-for-large">
        @include('partials.nav-desktop')
      </div>
      <div class="cell shrink show-for-large align-right">
        <a href="#" class="button gold hollow cta-modal" style="margin:0">Schedule a call!</a>
      </div>
      @include('partials.nav-toggle')
    </div>
  </div>
  @include('partials.nav-mobile')
</header>
