{{--
  Template Name: Shop Template
--}}

@extends('layouts.app-woo')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-shop')
  @endwhile
@endsection
