{{--
  Template Name: Testimonial Template
--}}

@extends('layouts.app-wide')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-testimonial')
  @endwhile
@endsection
