<!--page-->
<!-- this is a simple page -->
<?php 
/*
Template Name: Classic Page 
*/
get_header(); ?>
<div class="menu-content"> <!---menu of the contents of my pages--->
	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('s_my_theme', array('class' => 'img-res-menu','alt' => get_the_title())); ?>
			</a>
			<?php the_content();?>
		</article>
	<?php endwhile; else : ?>
	<h3> <?php esc_html_e('Sorry, no posts matched your criteria.','project_theme'); ?>  </h3>
	<?php endif; ?>
</div>
<?php get_footer(); ?>