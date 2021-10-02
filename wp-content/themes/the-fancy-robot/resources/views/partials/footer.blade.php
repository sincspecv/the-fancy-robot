<footer class="footer" id="colophon">
  <div class="grid-container footer__menus">
    <div class="grid-x grid-margin-x grid-margin-y">
      <div class="cell medium-4 align-left">
        <figure class="footer__site-brand ">
          <a class="site-brand__logo" href="{{ home_url('/') }}">{!! $site_brand !!}</a>
        </figure>
      </div>
      <div class="cell medium-4">
        <h2 class="h4 footer__menus-title">About</h2>
        @if(has_nav_menu('footer_navigation_1'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation_1', 'menu_class' => 'nav grid-x align-right footer-nav', 'walker' => new App\Navigation\Foundation(),]) !!}
        @endif
      </div>
      <div class="cell medium-4">
        <h2 class="h4 footer__menus-title">Privacy</h2>
        @if(has_nav_menu('footer_navigation_2'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation_2', 'menu_class' => 'nav grid-x align-right footer-nav', 'walker' => new App\Navigation\Foundation(),]) !!}
        @endif
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y align-middle">
      <div class="cell shrink align-left footer__copyright">
        <p class="copyright">&copy; {!! date('Y') !!} The Fancy Robot, LLC</p>
        @include('partials.social-links')
      </div>
    </div>
  </div>
  <div class="modal" id="cal-modal">
    <div class="modal-container">
      <div class="modal-close" aria-label="close popup" role="button">&#127335;</div>
      <script defer src="https://tidycal.com/js/embed.js" data-src="https://tidycal.com/js/embed.js"></script>
      <div id="tidycal-embed" data-path="the-fancy-robot/consultation"></div>
    </div>
  </div>
</footer>
