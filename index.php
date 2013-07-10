<?php get_header(); ?>
            
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post">

                <?php 
                if ( has_post_thumbnail() ) { ?>

                   
                    <div class="post-heading">


                        <h1 class="title-with-feature">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h1>

                    
                    <?php the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail-feature')); ?>

                    <div class="category cat-with-feature"> <span class="cat-in-label "> Posted in </span> <?php echo get_the_category_list(); ?></div>

                    </div>

                <?php } else {  ?>

                    <div class="post-heading">
                        <h1 class="title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h1>

                        <div class="category"> <span class="cat-in-label"> Posted in </span> <?php echo get_the_category_list(); ?></div>
                    </div>
                <?php } ?>

                <div class="the-content clearfix">
                    <?php the_content( 'Continue...' ); ?>
                    
                    <?php wp_link_pages(); ?>
                </div><!-- the-content -->
                
                <div class="meta clearfix">
                    
                    <div class="tags"><?php echo get_the_tag_list( ' &nbsp;', '&nbsp;' ); ?></div>
                </div><!-- Meta -->
                
            </article>

        <?php endwhile; ?>
        
        <!-- pagintation -->
        <div id="pagination" class="clearfix">
            <div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
            <div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
        </div><!-- pagination -->


    <?php else : ?>
        
        <article class="post error">
            <h1 class="404">Nothing posted yet</h1>
        </article>

    <?php endif; ?>


<?php get_footer() ?>