<?php
/**
 * The template for ellioning search forms in ellion
 *
 * @package ellion
 * @since ellion 1.0.3
 */
?>

<form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
  <input type="text" placeholder="Search site..." name="s" id="s" onfocus="if (this.value == 'Search site...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search site...';}" />
	<input id="searchsubmit" class="search-submit go-button" type="submit" value="GO"/>
</form>
