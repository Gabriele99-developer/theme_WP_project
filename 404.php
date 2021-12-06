<!-- page error 404-->
<?php get_header(); ?>
<div class="content"> <!---content of the 404 page--->
	<article id="post-404" class="post">
		<h1 class="content__title"><?php esc_html_e( 'The page is not found.', 'project_theme' ); ?></h1>
		<h2><?php esc_html_e( 'Ops! On this page a 404 error occurred', 'fullbase' ); ?></h2>
	</article>
</div>
<?php get_footer(); ?>
<!-- page 404.php is called when there is a search error, the following message is shown on the following page: Ops! The page is not found.-->