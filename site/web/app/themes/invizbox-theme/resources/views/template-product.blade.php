{{--
  Template Name: Product Template
--}}

@extends('layouts.app-wide')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-product')
  @endwhile
@endsection
