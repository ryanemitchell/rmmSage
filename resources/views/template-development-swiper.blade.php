{{--
  Template Name: Development Template - Swiper
--}}

@extends('layouts.app')


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')

{{--BEGIN SWIPER--}}

  <div class="w-[500px]">



	  <style>
          html,
          body {
              position: relative;
              height: 100%;
          }

          body {
              background: #eee;
              font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
              font-size: 14px;
              color: #000;
              margin: 0;
              padding: 0;
          }

          .swiper {
              width: 100%;
              height: 100%;
          }

          .swiper-slide {
              text-align: center;
              font-size: 18px;
              background: #fff;

              /* Center slide text vertically */

              display: flex;

              justify-content: center;

              align-items: center;
          }

          .swiper-slide img {
              display: block;
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
	  </style>




	  <!-- Swiper -->
{{--	  <div class="swiper mySwiper">--}}
{{--		  <div class="swiper-wrapper">--}}
{{--			  <div class="swiper-slide">Slide 1</div>--}}
{{--			  <div class="swiper-slide">Slide 2</div>--}}
{{--			  <div class="swiper-slide">Slide 3</div>--}}
{{--			  <div class="swiper-slide">Slide 4</div>--}}
{{--			  <div class="swiper-slide">Slide 5</div>--}}
{{--			  <div class="swiper-slide">Slide 6</div>--}}
{{--			  <div class="swiper-slide">Slide 7</div>--}}
{{--			  <div class="swiper-slide">Slide 8</div>--}}
{{--			  <div class="swiper-slide">Slide 9</div>--}}
{{--		  </div>--}}
{{--		  <div class="swiper-button-next"></div>--}}
{{--		  <div class="swiper-button-prev"></div>--}}
{{--	  </div>--}}




  </div>





{{--END SWIPER--}}









  @endwhile

  <div class="w-[500px]">
  <?php
  $rows = get_field('silde');
  if( $rows ) { ?>
	  <div class="swiper newSwiper">
	  <div class="swiper-wrapper">

		  <?php
	  foreach( $rows as $row ) {
		  $content = $row['content'];
		  echo '<div class="swiper-slide">';
		  echo $content;
		  echo '</div>';
	  }
	  echo '</div>'; ?>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
			  <div class="swiper-pagination"></div>
	 </div>







<?  }
  ?>

	  </div>





@endsection

@section('sidebar')
	@include('sections.sidebar')
@endsection
