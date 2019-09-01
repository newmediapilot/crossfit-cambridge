<!-- begin header.php -->

<!DOCTYPE html>

<html lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVY2NL962E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-PVY2NL962E');
    </script>

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?PHP wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php include 'top-nav.php'; ?>

<!-- end header.php -->