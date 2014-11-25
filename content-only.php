<?php
/*
Template Name: Page Content
* Version: 1.1
*/
?>
<?php get_header(); ?>
<div class="entry-content left-content">
<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	
		
            
		<?php the_content(); ?>

</div><!-- .entry-content -->
	
		<div class="right-content">
    <?php get_template_part('sidebar-right'); ?>
        </div>
  





<?php get_footer(); ?>