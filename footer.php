<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <nav role="navigation">
        <?php wp_nav_menu(array('container' => 'container',
            'container_class' => 'container',
            'menu' => __('Footer Menu'),
            'menu_class' => 'footer',
            'theme_location' => 'footer-links',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'depth' => 0
        )); ?>
    </nav>

    <p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->