@extends('layouts.app')

@section('content')

  <div class="grid-container four-oh-four-container">
    <div class="grid-x grid-margin-x grid-margin-y align-center-middle">
      <div class="cell medium-10 text-center">
        @if (!have_posts())
          <h1>404</h1>
          <div class="alert alert-warning">
            {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
