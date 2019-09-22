<?php get_header(); ?>

 <h1>  <?php wp_title(''); ?></h1>
<h4> <?php wp_title(''); ?></h4>  

<?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : ?>
        <?php the_post(); ?>
        <article class="content">
            <h2><?php the_title(); ?></h2> 
            <p class="date">
                <?php the_time('Y M d'); ?>
            </p>

            <?php 
            the_post_thumbnail( 'medium' );
            ?>
            <?php the_excerpt(); ?>
            <p>
                <a href="<?php the_permalink(); ?>" title="Read More">Read More</a>
            </p>
            
        </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>