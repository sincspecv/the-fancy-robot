@extends('layouts.app')

@section('content')
  @if(!is_front_page())
    @include('partials.page-header')
  @endif
  @while(have_posts()) @php the_post() @endphp
    @include('partials.modules')
  @endwhile
@endsection
