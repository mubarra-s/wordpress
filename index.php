<?php get_header(); // Footer ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<h3><?php echo '<a href="'.get_the_permalink().'">'; the_title(); echo '</a>'; ?></h3>
 
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>
 
<?php endwhile; ?>
 
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
 
<?php else: ?>
 
<p>No posts found. :(</p>
 
<?php endif; ?>

<?php get_footer(); // Footer ?>
