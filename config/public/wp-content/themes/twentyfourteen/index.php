<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

<? php get_header(); ?>

if (have_posts()) :      while (have_posts()) : the_post(); ?>

    <article class = "post">                   
    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
    	</a></h2>
		
		<font color = #FAED39> 
		<p class ="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a
		href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author();

		?></a></p></font> 

        <?php the_content(); ?>      
    </article>

	<?php endwhile;?>

	else :  echo '<p>No content found</p>';

	endif;
	


<? php get_footer(); ?>  php get_sidebar(); ?>