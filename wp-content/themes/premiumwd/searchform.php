<?php
/**
 * The template for displaying search forms in display
 *
 * @package display
 * @since display 1.0.3
 */
?>

<form id="searchform" action="<?php echo home_url(); ?>" method="get" role="search">
  <input type="text" placeholder="Search" name="s" id="s" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" />
</form>
