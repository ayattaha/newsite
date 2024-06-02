@extends('layouts.main')

@section('header')
 <!-- header section strats -->
 @include('includes.header')
  <!-- end header section -->
@endsection

@section('content')

 <!-- slider section -->
 @include('includes.slider')
  <!-- end slider section -->

<!-- shop section -->
@include('includes.shop')
  <!-- end shop section -->

  <!-- about section -->
  @include('includes.aboutus')
  <!-- end about section -->

  <!-- offer section -->

  @include('includes.offersection')
  <!-- end offer section -->

  <!-- blog section -->
  @include('includes.blog')
  <!-- end blog section -->

  <!-- client section -->
  @include('includes.client')
  <!-- end client section -->
@endsection