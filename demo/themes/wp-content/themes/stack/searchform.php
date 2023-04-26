<?php
/**
 * The template for displaying search forms in Stack
 *
 * @package Stack
 * @since Stack 1.0.3
 */
?>

<form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
  <input type="text" placeholder="Search" name="s" id="s" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" />
</form>
