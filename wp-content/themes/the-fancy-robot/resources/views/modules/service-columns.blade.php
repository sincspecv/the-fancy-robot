<section class="service-columns module {{ $fields->background }}-bg">
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y service-columns__intro align-middle">
      <div class="cell medium-10">
        <h2>{!! esc_attr($fields->heading) !!}</h2>
        <p class="lead">{!! esc_attr($fields->sub_heading) !!}</p>
      </div>
    </div>
    <div class="grid-x grid-margin-x grid-margin-y service-columns__columns align-spaced">
      @foreach($fields->columns as $column)
        <div class="cell medium-4 service-columns__column">
          <div class="card service-columns__column-wrap">
            <div class="card-section service-columns__column-content">
              <h3>
                @if($column->svg)
                <figure class="service-columns__column-icon" aria-hidden="true">
                  {!! $column->svg !!}
                </figure>
                @endif
                {!! esc_attr($column->column_heading) !!}
              </h3>
              {!! $column->text !!}
            </div>
            @if($column->link)
              <div class="service-columns__column-link">
                <a href="{!! esc_url_raw($column->link->url) !!}" target="{{ $column->link->target }}" class="button accent">{!! esc_attr($column->link->title) !!}</a>
              </div>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
