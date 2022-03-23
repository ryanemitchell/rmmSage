{{--
  Template Name: Development Template
--}}

@extends('layouts.app')


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')



<?php

	$socialSites = rmmGetField('social_media','',1)





 ?>

	  {{ $pageTitle }}

<?php //echo $socialSites; ?>




  @foreach($socialSites as $site)
	  <bacon><?php </bacon>
  @endforeach



  @endwhile
@endsection

@section('sidebar')
	@include('sections.sidebar')
@endsection
