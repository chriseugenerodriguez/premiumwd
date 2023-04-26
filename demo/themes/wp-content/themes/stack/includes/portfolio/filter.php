<?php 
	$terms = get_terms("portfolio_tag");  
        $term = '';
        $count = count($terms);  
?>

<?php if (get_option('premiumwd_filter', 'true') == 'true'): ?>
<div class="portfolio-title clearfix <?php if (get_option('premiumwd_filter', 'true') == 'true'): ?>fixed<?php endif;?>">
  <div id="portfolio-filters-inline" class="container">
    <div class="three columns clearfix">
	<span class="current-portfolio">All</span>
    </div>
    <div class="nine columns clearfix">
       <ul>
	    <li id="sort-label">Sort Portfolio: </li>
	    <li><a href="#" class="active" data-filter="*">All</a></li>
         <?php  
            if ( $count > 0 ) {     
                foreach ( $terms as $term ) {  
                    $termname = $term->name; 
                    $termname = str_replace(' ', '-', $termname);  
                    echo '<li><a href="#" data-filter=".'.strtolower($termname).'">'.$term->name.'</a></li>';  
                }  
            }  
         ?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>