<div class="categorySwitcher"> <!-- Start of .categorySwitcher -->
	<h2>Categories</h2>


	<?php $args = array(
		'show_option_all'    => 'View All',
		'show_option_none'   => '',
		'option_none_value'  => '-1',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'show_count'         => 1,
		'hide_empty'         => 1,
		'child_of'           => 0,
		'exclude'            => '',
		'include'            => '',
		'echo'               => 1,
		'selected'           => 0,
		'hierarchical'       => 0,
		'name'               => 'cat',
		'id'                 => '',
		'class'              => 'postform',
		'depth'              => 0,
		'tab_index'          => 0,
		'taxonomy'           => 'category',
		'hide_if_empty'      => false,
		'value_field'        => 'term_id',
	); ?>




	<?php wp_dropdown_categories($args); ?>


	<script>
      document.getElementById('cat').onchange = function(){
        // if value is category id
        if( this.value !== '-1' ){
          window.location='/?cat='+this.value
        }
      }
	</script>

</div> <!-- End of .categorySwitcher -->


