<!-- single page -->
<?php 
/*
Template Name: Blog Page 
*/
get_header(); ?>
<div class="content">
 <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="content__title"><?php the_title(); ?></h1>		
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('s_my_theme', array('class' => 'img-res','alt' => get_the_title())); ?>
		</a>
		<?php the_content();?>
		<?php $post_tags = wp_get_post_tags($post->ID);
		if(!empty($post_tags)) {?>
			<p class="tag"> <small> <strong><?php esc_html_e('Tag: ', 'project_theme'); ?></strong>  </small> <br/> <?php the_tags('', ' ', ''); ?></p>
		<?php } ?>
	</article>
	<?php endwhile; else : ?>
	  <h3> <?php esc_html_e('Sorry, No posts match your request', 'project_theme'); ?> </h3>
	<?php endif; ?>
</div>
<?php get_footer(); ?>