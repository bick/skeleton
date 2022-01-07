<?php get_header(); ?>
    <main class="content">
        <section class="hero">
            <h1><?php the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>'); ?></h1>
        </section>
        <h1>Blog</h1>
        <article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?> role="article">
            <header class="article__header">
                <h1 class="article__header__title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>
            </header>
            <div class="article__content">
                <?php the_excerpt(); ?>
            </div>
        </article>
    </main>
<?php get_footer(); ?>