<div class="flex flex-col justify-center items-center px-4 categorySwitcher py-desktopVGap siteBoxed bg-siteBlack">
  <!-- Start of .categorySwitcher -->
  <h2 >Categories</h2>

  <?php $args = [
      'show_option_all' => 'View All',
      'show_option_none' => '',
      'option_none_value' => '-1',
      'orderby' => 'name',
      'order' => 'ASC',
      'show_count' => 1,
      'hide_empty' => 1,
      'child_of' => 0,
      'exclude' => '',
      'include' => '',
      'echo' => 1,
      'selected' => 0,
      'hierarchical' => 0,
      'name' => 'cat',
      'id' => '',
      'class' => 'postform min-w-[80%] m-0 bg-white inline px-2 py-2 box-border leading-6 border-none appearance-none border rounded-none ',
      'depth' => 0,
      'tab_index' => 0,
      'taxonomy' => 'category',
      'hide_if_empty' => false,
      'value_field' => 'term_id',
  ];

wp_dropdown_categories($args); ?>


  <script>
    document.getElementById('cat').onchange = function() {
      // if value is category id
      if (this.value !== '-1') {
        window.location = '/?cat=' + this.value
      }
    }
  </script>

</div> <!-- End of .categorySwitcher -->
