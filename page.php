<?php get_header(); ?>
<div id="body-squeeze-shadow-left">
<div id="body-squeeze-shadow-right">
<div id="body-squeeze">
<h2><?php the_title(); ?><a id="resume-icon" href="http://danpolant.com/wp-content/uploads/2010/05/resume_current.pdf">Resume <img src="http://danpolant.com/wp-content/themes/dpeq/images/pdf_icon.png"/></a></h2>
<div class="single-post content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>

<?php get_sidebar(); ?>
 <div class="clear"></div>
<?php get_footer(); ?>
