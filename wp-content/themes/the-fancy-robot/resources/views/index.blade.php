@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="grid-container">
    <div class="grid-x grid-margin-x grid-margin-y">
      @if (!have_posts())
        <div class="cell small-12 module">
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        </div>
      @endif

      @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
      @endwhile

      {!! App::pagination() !!}
    </div>
  </div>
@endsection
