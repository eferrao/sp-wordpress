<?php get_header(); ?>
  <div class="main-content-wrapper row">
    <div class="main-content column col8">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>	
      <article <?php post_class('entry-post');?>>
              
        <div class="entry-content row">            
          <div class="entry-text">
            <h3 class="entry-title"><?php the_title(); ?></h3>              
            <?php the_content(); ?>
            <?php wp_link_pages();?>
          </div>
        </div>
      </article><!-- .entry-post -->
      <?php endwhile; endif;?>
      <?php comments_template(); ?> 
    </div><!-- .main-content -->
    
    <aside class="primary-sidebar column col4">
      <?php get_sidebar(); ?>
    </aside><!-- .primary-sidebar -->
	</div>  
<?php get_footer(); ?>