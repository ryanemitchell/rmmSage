{{-- ==========================================================================
* Filename: rmmSectionSplitContentServices.blade.php
* Description: Simple section with header text, menu from wp-admin and footer text
* Fields Behavior: Choos+e to get fields from parent, current post or none.
* Reference: NA
* Author: @ryanemitchell
==========================================================================--}}
<section class="flex relative justify-center items-center place-items-center bg-no-repeat rmmsection to-the-edge full-width-bound bg-blueTriangle pt-mobileVGap mb-mobileVGap lg:pt-desktopVGap">
	<div class="flex justify-center items-center pt-4 lg:pt-12 inner__wrapper">
		<div class="flex flex-col justify-between items-center w-full lg:flex-row content">
			<div class="mb-6 w-11/12 lg:mb-0 lg:w-1/2 col1 <?php echo 'page-'.$post->post_name;?>">
				<img src="https://unsplash.it/565/320?random" alt="photo" class="image aboutImage" loading="auto" height="320px" width="565px">
				<iframe loading="lazy" title="The Sansone Air Conditioning Story" width="500" height="281" src="https://www.youtube.com/embed/xKESF1VhjVY?feature=oembed"  allow="" allowfullscreen="" class="aboutVideo"></iframe>
				<style>
                    .page-home .aboutImage {
                        display: none;
                    }

                    .page-home .aboutVideo {
                        display: block;
                    }

                    :not(.page-home) aboutVideo {
	                  display: none;
                  }
                    @media screen and (max-width: 1024px) {
                        iframe {
                            height: 220px;
	                        width: 100%;
                        }

                    }

				</style>


			</div>
			<div class="mb-6 w-11/12 lg:pl-14 lg:mb-0 lg:w-1/2 col2">
				<div class="tagline text-secondary text-[1.5rem]">Comfort Solutions for Texans</div>
				<h2 class="max-w-xs lg:mb-4 lg:max-w-fit lg:text-mt1">Honest, Professional, Quality Service</h2>
				<div class="mb-2 lg:mb-4 lg:max-w-[480px]">
					<p>For over 40 years, the air conditioning and heating professionals at Expert Air have provided quality and honest HVAC services to our customers in The Woodlands & surrounding areas. Our business is dedicated to our customers’ complete satisfaction and to the quality of our workmanship.</p>
				</div>
				<div class="cta grandChildren:self-start">
					<a href="#" class="mb-2 btn">Learn More</a>
				</div>


			</div>
		</div>
	</div>
</section>
