<div id="portfolio-filters-inline" class="pt-column">
      <ul>
        <?php
    $terms = get_terms("portfolio_category");
    $count = count($terms);
    echo '<li><a href="javascript:void(0)" title="" data-filter="*" class="active">All</a></li>';
	  if ($count > 0) {
        foreach ($terms as $term) {
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            echo '<li><a href="javascript:void(0)" title="" data-filter=".' . $termname . '">' . $term->name . '</a></li>';
        }
    }
?>
      </ul>
    </div>