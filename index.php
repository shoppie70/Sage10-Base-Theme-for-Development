<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php
        include_once(__DIR__ . '/resources/views/common/meta.blade.php');
        include_once(__DIR__ . '/resources/views/common/style.blade.php');
        wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'get_header' ); ?>

<div id="app" class="drawer drawer--right">
    <?php echo \Roots\view( \Roots\app( 'sage.view' ), \Roots\app( 'sage.data' ) )->render(); ?>
</div>

<?php
    do_action( 'get_footer' );
    include_once(__DIR__ . '/resources/views/common/script.blade.php');
    wp_footer();
?>
</body>
</html>
