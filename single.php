<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <article class="post">
            
            <div class="post-heading" >
                <h1 class="title "><?php the_title() ?></h1>
            
                <div class="category"> 
                    <span class="cat-in-label"> Posted in </span> <?php echo get_the_category_list(); ?>
                </div>
            </div>
            
            <div class="the-content">
                <?php the_content( 'Continue...' ); ?>
                
                <?php wp_link_pages(); ?>
            </div><!-- the-content -->
            
            <div class="meta clearfix">
    
                <div class="tags"><?php echo get_the_tag_list( ' &nbsp;', '&nbsp;' ); ?></div>
                          
            </div><!-- Meta -->       
        </article>

    <?php endwhile; ?>
    
    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
            comments_template( '', true );
    ?>

<?php get_footer() ?>