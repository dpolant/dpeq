<?php get_header(); ?>
<div id="body-squeeze-shadow-left">
<div id="body-squeeze-shadow-right">
<div id="body-squeeze">
    <div id="featured"> 
    <h2><strong>Featured</strong> work<a id="resume-icon" href="http://danpolant.com/wp-content/uploads/2010/05/resume_current.pdf">Resume <img src="http://danpolant.com/wp-content/themes/dpeq/images/pdf_icon.png"/></a></h2>
    	<div id="featured-loop">
             <!-- Edit Below -->
            <?php query_posts('cat=54&posts_per_page=2'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="front-post">
            <div class="featured-post">
                <div class="featured-title">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
        </a></h2>
                </div>
                <div class="featured-image">
                    <!-- 220 x 200 -->
                    <a class="light-up" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php image_attachment('image', 220, 220); ?></a>
                </div>
            </div> <!-- END Featured-post -->
            </div>
            <?php endwhile; ?>
            <!-- Edit Below 2 -->
            <?php query_posts('cat=54&posts_per_page=1&offset=2'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="front-post-last"> <!-- Featured-Last -->
            <div class="featured-post">
                <div class="featured-title">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
        </a></h2>
                </div>
                <div class="featured-image">
                    <a class="light-up" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php image_attachment('image', 220, 220); ?></a>
                </div>
            </div> <!-- END Featured-post -->
			</div>
            <?php endwhile; ?>
            <div class="clear"></div>
        </div>
    </div> <!-- END Featured -->
    <div class="clear"></div>
    <div id="front-bottom">
        <div id="latest-wrap">
            <h2><strong>Thoughts</strong> / Development</h2>
            <div class="content">
                <!-- Edit Below 3 --> 
                <?php query_posts('cat=-54&showposts=2'); ?>
				<?php while (have_posts()) : the_post(); ?>
                    <div class="latest-post-wrap">
                        <div class="latest-post">
                            <div class="latest-title">
                                <span class="date"><?php the_time('F j, Y') ?></span>
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
                        <div class="latest-content">
                            <p><?php
                              $excerpt = get_the_excerpt();
                              echo string_limit_words($excerpt,30);
                            ?></p>
                        
                            <p class="moretext"><a href="<?php the_permalink() ?>">more ...</a></p>
                            <div id="tags"><?php the_tags("Tags: ") ?></div>
                        </div> 
                    </div>
                <?php endwhile; ?> <!-- END -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="front-low-bottom">
        <div class="half-content-wrap" id="left-half">
            <h2><strong>Tags</strong></h2>
            <div class="half-content">
                <?php wp_tag_cloud() ?>
            </div>
         </div>
         
         <div class="half-content-wrap" id="right-half">
            <h2><strong>Categories</strong></h2>
            <div class="half-content">
                <?php wp_list_categories( array( 'show_count' => 1, 'title_li' => NULL ) ); ?>
            </div>
         </div>
         <div class="clear"></div>
     
 	</div>

<?php get_footer(); ?>