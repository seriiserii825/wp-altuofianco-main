<?php
	/**
	 * Template Name:
	 * Template Post Type: soluzioni
	 */
	get_header();
?>

<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <div class="head_soluzione">
		<?php if (get_field('title_page')): ?>
            <div class="title-page" >
                         <span >
                            <?php if ( function_exists('yoast_breadcrumb') ) {
	                            yoast_breadcrumb('
                                  <p id="breadcrumbs">','</p>
                                    ');
                            }
                            ?>
                         </span>
                <h2><?php the_field('title_page'); ?></h2>
            </div>
		<?php endif; ?>
    </div>

	<?php the_content(); ?>
<?php endif; ?>


<?php get_footer(); ?>
