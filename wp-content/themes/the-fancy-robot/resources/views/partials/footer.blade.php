<footer class="footer" id="colophon">
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y align-middle">
      <div class="cell shrink align-left">
        <p class="copyright">&copy; {!! date('Y') !!} The Fancy Robot, LLC</p>
      </div>
      <div class="cell medium-auto align-right">
        @if(has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav grid-x align-right footer-nav', 'walker' => new App\Navigation\Foundation(),]) !!}
        @endif
      </div>
    </div>
  </div>
  <div class="modal" id="cal-modal">
    <div class="modal-container">
      <div class="modal-close" aria-label="close popup" role="button">&#127335;</div>
      <script async src="https://tidycal.com/js/embed.js" data-src="https://tidycal.com/js/embed.js"></script>
      <div id="tidycal-embed" data-path="the-fancy-robot/consultation"></div>
    </div>
  </div>
</footer>
