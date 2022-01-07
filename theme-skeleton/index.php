<?php get_header(); ?>
    <main class="content">
        <section class="hero">
            <h1>Welcome to Skeleton!</h1>
            <p>Thank you for installing Skeleton, a barebones starter theme for WordPress.<br/>This theme includes SCSS
                support.</p>
        </section>
        <h1>Blog</h1>
        <article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?> role="article">
            <header class="article__header">
                <h1 class="article__header__title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>
            </header>
            <section class="article__content">
                <?php the_content(); ?>
            </section>
        </article>
    </main>
<?php get_footer(); ?>

