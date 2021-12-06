<!-- index page -->
<?php 
/*
Template Name: Home Page 
*/
get_header(); ?>
<div class="home-content"> <!---home-content of the main page--->
	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('s_my_theme', array('class' => 'img-res-home','alt' => get_the_title())); ?>
			</a>
				<?php the_excerpt();?>
		</article>
	<?php endwhile; ?>
		<div class="pagination">
			<?php
			global $wp_query;
			$big = 999999999; 
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
		</div>
	<?php else : ?>
	  <h3> <?php esc_html_e('No posts match.', 'project_theme'); ?> </h3>
	<?php endif; ?>
</div>
<?php get_footer(); ?>