{{--
  Template Name: Development Template - Flexible Content
--}}

@php $desktopBreakpoint = '1024px'; @endphp




@extends('layouts.app')


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')

<?php if( have_rows('flexible_content_field') ): ?>

	<div class="wit-sections-wrapper">

	<?php while( have_rows('flexible_content_field') ): the_row(); ?>



			<?php if (get_row_layout() == 'layout'): ?>



<?php
				$witSection = new App\lib\witSection();
				$sectionInfo = $witSection->makeSectionStyling();

		//		Pull in the vars
				$sectionClassNames = $sectionInfo->sectionClassNames;
				$sectionStyles = $sectionInfo->sectionStyles;

		//		Render section tyles
				echo $sectionStyles;
				?>



				<div class="witSection {{ $sectionClassNames }}">

					@include('witSections.witSection-wysiwyg')

				</div>



			<? endif; ?>

{{--		Image Section--}}



		<?php if (get_row_layout() == 'image_section'):

		$witSection = new App\lib\witSection();
		$sectionInfo = $witSection->makeSectionStyling();

		//		Pull in the vars
		$sectionClassNames = $sectionInfo->sectionClassNames;
		$sectionStyles = $sectionInfo->sectionStyles;

		//		Render section tyles
		echo $sectionStyles;
		?>



		<div class="witSection {{ $sectionClassNames }}">

			@include('witSections.witSection-image-section')

		</div>

		<? endif; ?>



		<?php if (get_row_layout() == 'bigtest'):

		$witSection = new App\lib\witSection();
		$sectionInfo = $witSection->makeSectionStyling();

		//		Pull in the vars
		$sectionClassNames = $sectionInfo->sectionClassNames;
		$sectionStyles = $sectionInfo->sectionStyles;

		//		Render section tyles
		echo $sectionStyles;
		?>



		<div class="witSection {{ $sectionClassNames }}">

			@include('witSections.witSection-reusable-block-section')

		</div>

		<? endif; ?>


	<?php endwhile; ?>

	</div>

<?php endif; ?><div class="wysiwyg_623a974442a52 superclass block lg:block">





  @endwhile
@endsection


