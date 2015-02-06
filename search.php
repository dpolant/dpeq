<?php get_header(); ?>
<div id="body-squeeze-shadow-left">
<div id="body-squeeze-shadow-right">
<div id="body-squeeze">

<h2><strong>Search Results</strong><a id="resume-icon" href="http://danpolant.com/wp-content/uploads/2015/02/2015Resume.pdf">Resume <img src="http://danpolant.com/wp-content/themes/dpeq/images/pdf_icon.png"/></a></h2>

<div class="single-post content">
		<?php if (have_posts()) : ?>

		

		<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <div class="postMeta-post">
            
            
                        <span class="post-category"><p><?php the_category(' / ') ?></p></span> 
			<span class="post-tags"><?php the_tags( '<p>Tags: ', ', ', '</p>'); ?></span> 
            <div class="clear"></div>
            
            <span class="date"><?php the_time('F j, Y') ?></span>
            <span class="comments"><a href="#comments" title="Jump to the comments"><?php comments_number('0', '1', '%'); ?></a></span>
            <div class="clear"></div>
            
			
		</div>
        <?php the_excerpt(); ?>
            <p class="moretext"><a href="<?php the_permalink() ?>">Continue Reading...</a></p>
            </div> 
		<?php endwhile; ?>
			<p><?php edit_post_link('Edit Post', '', '  '); ?></p>
            <p><?php next_post_link('%link', 'Next post'); ?></p>
			<p><?php previous_post_link('%link', 'Previous post'); ?></p>
            
            <?php else : ?>

		<h3>No posts found. Try a different search?</h3>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
 <div class="clear"></div>
<?php get_footer(); ?>
