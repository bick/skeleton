<?php get_header(); ?>
    <main class="content">
        <section class="page">
            <div class="container">
                <?php the_content(); ?>
                <?php get_sidebar(); ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>