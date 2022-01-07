<div class="sidebar">
    <?php if (is_active_sidebar('sidebar1')) : ?>

        <?php dynamic_sidebar('sidebar1'); ?>

    <?php else : ?>
            <p><?php _e('Add content here.'); ?></p>
    <?php endif; ?>
</div>
