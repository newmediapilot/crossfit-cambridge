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
    <div class="npm-carousel" tabindex="-1">
        <?php
        $sliderId = get_metadata('post', $master->ID, 'sliderId', true);
        if (!$sliderId) {
            echo('<h1>no sliderId provided in post: ' . $master->ID . '</h1>');
        }
        echo do_shortcode('[wonderplugin_slider id=' . $sliderId . ']');
        ?>
        <div class="npm-carousel--slogan">
            <?php echo $post->post_content; ?>
        </div>
    </div>
    <div class="container npm-container">
        <div class="row">
            <?php foreach ($blocks as $child) { ?>
                <div data-post-title="<?php echo $child->post_title; ?>"
                     class="<?php echo(get_metadata('post', $child->ID, 'className', true)); ?>">
                    <?php if ($child->post_title == 'homepage-form-15') {
                        echo do_shortcode('[ninja_form id=1]');
                    } else {
                        echo $child->post_content;
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- end page.php -->
    <!-- end page.php -->
    <!-- end page.php -->
<?php get_footer() ?>