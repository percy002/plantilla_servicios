<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <section class="hero">
        <div class="hero__content">
            <h2 class="hero__title"><?php the_title(); ?></h2>
            <p class="hero__description"><?php the_content(); ?></p>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>
