<?php get_header(); ?>
<div id="body-squeeze-shadow-left">
<div id="body-squeeze-shadow-right">
<div id="body-squeeze">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?><a id="resume-icon" href="http://danpolant.com/wp-content/uploads/2010/05/resume_current.pdf">Resume <img src="http://danpolant.com/wp-content/themes/dpeq/images/pdf_icon.png"/></a></h2>
        <div class="single-post content">
            <div class="post" id="post-<?php the_ID(); ?>">
            
                <?php if ( !in_category('Portfolio') ) : ?>
                	<div class="postMeta-post">
					
                        <span class="post-category"><p><?php the_category(' / ') ?></p></span> 
                        <span class="post-tags"><?php the_tags( '<p>Tags: ', ', ', '</p>'); ?></span> 
                        <div class="clear"></div>
                        <span class="date"><?php the_time('F j, Y') ?></span>                          
                        <span class="comments"><a href="#comments" title="Jump to the comments"><?php comments_number('0', '1', '%'); ?></a></span>

                   		<div class="clear"></div>
                    </div>  
               <?php endif; ?>
               
          
                
                <?php if ( in_category('Portfolio') ) : ?>
                	<div class="summary">
                    	<h3>Description:</h3>
                        <p><?php the_excerpt() ?></p>
                        <h3>Skills used:</h3>
                        <p><?php echo get_post_meta( get_the_ID(), 'skills', true ); ?></p>
                    </div>
                    
                <h3>Case Study</h3>
                <?php endif; ?>
                
                <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
                <p><?php edit_post_link('Edit Post', '', '  '); ?></p>
            </div>
            
            <?php if ( !in_category('Portfolio') ) : ?>
            <div id="comments">
                <?php comments_template(); ?>
            </div>
			<?php endif; ?>
            
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div>
<?php get_sidebar(); ?>
 <div class="clear"></div>
<?php get_footer(); ?>
