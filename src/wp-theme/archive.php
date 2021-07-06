<?php get_header(); ?>
<?php

$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;

$start_category = get_category($cat_id);

$term = get_queried_object();

$children = get_terms( $term->taxonomy, array(
	'parent'    => $term->term_id,
	'hide_empty' => false
) );
// print_r($children); // uncomment to examine for debugging
if($children) { // get_terms will return false if tax does not exist or term wasn't found.
    include get_theme_file_path( '/includes/category-cards.php' );
} else {
	include get_theme_file_path( '/includes/sub-category.php' );
}

?>

<?php get_footer();