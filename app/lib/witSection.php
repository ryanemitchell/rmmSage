<?php

/**
 * Filename: witSection.php
 * Description:
 * Author: ryan
 */


namespace App\lib;

	class witSection {

		public function layoutUniqueID(){
			$layoutUniqueID = uniqid(get_row_layout().'_');
			return $layoutUniqueID;
		}

		public function makeSectionStyling(){
			$layoutID = $this->layoutUniqueID();

			if ( get_field('desktop_breakpoint','option') ) {
			    $desktopBreakpoint = get_field('desktop_breakpoint','option').'px';
			} else {
			    $desktopBreakpoint = '1024px';
			}


			$sectionClassNames .= $layoutID;
			$sectionClassNames .= ' ';

			if ( get_sub_field('class_name') ) {
				$sectionClassNames .= get_sub_field('class_name');
			} else {
				$sectionClassNames .= '';
			}

			$sectionClassNames .= ' ';


			if ( get_sub_field('show_on_mobile') ) {
				$sectionClassNames .= 'block';
			} else {
				$sectionClassNames .= 'hidden';
			}

			$sectionClassNames .= ' ';



			if ( get_sub_field('show_on_desktop') ) {
				$sectionClassNames .= 'lg:block';
			} else {
				$sectionClassNames .= 'lg:hidden';
			}

//			Styles

			if ( get_sub_field('desktop_margin_top') ) {
				$desktop_margin_top = get_sub_field('desktop_margin_top');
			} else {
				$desktop_margin_top = 0;
			}


			if ( get_sub_field('desktop_margin_bottom') ) {
				$desktop_margin_bottom = get_sub_field('desktop_margin_bottom');
			} else {
				$desktop_margin_bottom = 0;
			}


			if ( get_sub_field('mobile_margin_top') ) {
				$mobile_margin_top = get_sub_field('mobile_margin_top');
			} else {
				$mobile_margin_top = 0;
			}


			if ( get_sub_field('mobile_margin_bottom') ) {
				$mobile_margin_bottom = get_sub_field('mobile_margin_bottom');
			} else {
				$mobile_margin_bottom = 0;
			}
// Create Style HTML
				ob_start(); ?>
				<style>
				    .<?php echo $layoutID ?> {
				        margin-top: <?php echo$mobile_margin_top?>px;
				        margin-bottom: <?php echo$mobile_margin_bottom?>px;
				    }

				    @media only screen and (min-width : <?php echo$desktopBreakpoint?>) {
				        .<?php echo$layoutID?> {
				            margin-top: <?php echo$desktop_margin_top?>px;
				            margin-bottom: <?php echo$desktop_margin_bottom?>px;
				        }
				    }


				</style>

				<?php

				$sectionStyles = ob_get_clean();

//  Remove whitespace and linebreaks
                $sectionStyles = preg_replace('/\v(?:[\v\h]+)/', '', $sectionStyles);


			$section = ['layoutID' => $layoutID, 'sectionClassNames' =>$sectionClassNames, 'sectionStyles' => $sectionStyles ];
			$sectionInfo = (object) $section;



			return $sectionInfo;
		}






	}




?>
