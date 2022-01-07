<?php
/*
 Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>
<section class="page">
    <div class="container">
        <?php the_content(); ?>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
