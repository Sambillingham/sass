<?php get_header() ?>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="page">
            
                <h1 class="title"><?php the_title() ?></h1>
                
                <div class="the-content">
                    <?php the_content(); ?>
                    
                    <?php wp_link_pages(); ?>
                </div><!-- the-content -->
                
            </article>

        <?php endwhile; ?>

    <?php else : ?>
        
        <article class="post error">
            <h1 class="404">Nothing posted yet</h1>
        </article>

    <?php endif; ?>

<?php get_footer() ?>

