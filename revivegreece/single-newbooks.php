<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : ?>
        <?php the_post(); ?>
        <article class="content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <p>
                (New books) Σελίδες: <strong><?php the_field( 'pages' ); ?></strong>.
            </p>
            <p>
                Συγγραφέας: <strong><?php the_field( 'author' ); ?></strong>.
            </p>
            <p>
                ISBΝ: <strong><?php the_field( 'isbn' ); ?></strong>.
            </p>
            <p>
                Κατάσταση βιβλίου: <strong><?php the_field( 'status' ); ?></strong>.
            </p>
            <?php the_category(); ?>
            <p>
                <?php the_tags(); ?>
            </p>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>