<section class="tabs-module module">
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y tabs-module__container">
      @php $_eq = uniqid('_eq_'); @endphp
      <ul class="tabs tabs-module__tabset" data-tabs id="tabs{!! $_eq !!}">
      @foreach($fields->tabs as $tab)
          <li class="tabs-title {!! $loop->index === 0 ? 'is-active' : '' !!}"><a data-tabs-target="tab_{!! $loop->index.$_eq !!}" {!! $loop->index === 0 ? 'aria-selected="true"' : '' !!}>{!! esc_attr($tab->title) !!}</a></li>
      @endforeach
      </ul>
      <div class="tabs-content tabs-module__content" data-tabs-content="tabs{!! $_eq !!}">
        @foreach($fields->tabs as $tab)
          <div class="tabs-panel tabs-module__panel {!! $loop->index === 0 ? 'is-active' : '' !!}" id="tab_{!! $loop->index.$_eq !!}">
            @if($tab->content)
              {!! $tab->content !!}
            @endif
            @if($tab->form != 0)
                <div class="form-container">
                  {!! App::getGFForm($tab->form) !!}
                </div>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
