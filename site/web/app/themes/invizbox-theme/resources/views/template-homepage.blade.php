{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app-wide')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-homepage')
  @endwhile
@endsection
