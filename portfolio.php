<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
<div id="body-squeeze-shadow-left">
<div id="body-squeeze-shadow-right">
<div id="body-squeeze">
    <div id="featured"> 
    <h2><strong>Portfolio</strong><a id="resume-icon" href="http://danpolant.com/wp-content/uploads/2010/05/resume_current.pdf">Resume <img src="http://danpolant.com/wp-content/themes/dpeq/images/pdf_icon.png"/></a></h2>

    	<div id="featured-loop" class="single-post portfolio">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<div class="post">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
             <!-- Edit Below -->
            <?php query_posts('cat=55&posts_per_page=5'); ?>
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
            <?php query_posts('cat=55&posts_per_page=1&offset=5'); ?>
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
        <?php get_sidebar() ?>
        <div class="clear"></div>
    </div> <!-- END Featured -->

<?php get_footer(); ?>