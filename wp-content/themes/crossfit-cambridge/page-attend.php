<?php
global $post;
$post_slug = $post->post_name;
$master = wp_get_post_by_slug($post_slug, 'page');
$blocks = wp_get_page_and_children($post_slug);
?>
<?php get_header() ?>
    <!-- begin page.php -->
    <!-- begin page.php -->
    <!-- begin page.php -->
    <div class="container npm-container">
        <div class="row">
            <h2>Redirecting to class...please wait.</h2>
        </div>
    </div>
    <!-- end page.php -->
    <!-- end page.php -->
    <!-- end page.php -->
<?php get_footer() ?>