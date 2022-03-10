<div class="categorySwitcher categorySwitcherMobile"> <!-- Start of .categorySwitcher -->
	<h2>Categories</h2>


	<?php $args = array(
		'show_option_all'    => 'View All',
		'show_option_none'   => '',
		'option_none_value'  => '-1',
		'orderby'            => 'ID',
		'order'              => 'ASC',
		'show_count'         => 0,
		'hide_empty'         => 1,
		'child_of'           => 0,
		'exclude'            => '',
		'include'            => '',
		'echo'               => 1,
		'selected'           => 0,
		'hierarchical'       => 0,
		'name'               => 'catMobile',
		'id'                 => '',
		'class'              => 'postform',
		'depth'              => 0,
		'tab_index'          => 0,
		'taxonomy'           => 'category',
		'hide_if_empty'      => false,
		'value_field'        => 'term_id',
	); ?>




	<?php wp_dropdown_categories($args); ?>

	<script type="text/javascript">
      <!--
      var dropdown = document.getElementById("catMobile");
      function onCatChange() {
        if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
          location.href = "<?php echo esc_url(home_url('/')); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
        }
      }
      dropdown.onchange = onCatChange;
      -->
	</script>

</div> <!-- End of .categorySwitcher -->


