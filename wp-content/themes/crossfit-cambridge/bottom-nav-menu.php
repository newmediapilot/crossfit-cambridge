<!-- begin bottom-nav-menu -->

<?php $footer_menu = wp_get_nav_menu_items('Footer Menu'); ?>

<?php
$footer_menu_parents = array_filter($footer_menu, function ($footer_item) {
    return $footer_item->menu_item_parent == "0";
});
foreach ($footer_menu_parents as $menu_item_parent) {
    $menu_item_parent->menu_item_children = array_filter($footer_menu, function ($footer_item) use ($menu_item_parent) {
        return $footer_item->menu_item_parent == $menu_item_parent->ID;
    });
}
//var_dump($footer_menu_parents);
?>

<div class="container">
    <div class="row">
        <div data-post-title="homepage-address-14"
             class="address-block col-12 col-lg-5 pt-2 pb-1 pt-md-5 pb-md-4">
            <h2>Drop In:</h2>
            <p>54 Guelph Avenue Unit 5<br>
                Cambridge, ON<br>
                N3C 1A3
                (<a href="https://goo.gl/maps/Z69xu49HCrzJrA8M6"
                    target="_blank"
                    rel="noreferrer noopener">Directions</a>)
                <br>
            </p>
            <h2>Call Us:</h2>
            <p>226-280-2328 (<a href="tel:226-280-2328">Call</a>)</p>
        </div>
        <div class="form-block col-12 col-lg-7 pt-2 pb-1 pt-md-5 pb-md-4">
            <?php echo do_shortcode('[ninja_form id=1]'); ?>
        </div>
    </div>
</div>

<a class="container footer-map"
   title="Crossfit Cambridge Location" href="https://goo.gl/maps/Z69xu49HCrzJrA8M6"
   target="_blank">
</a>

<footer class="container footer-menu">
    <div class="row">
        <!-- social items -->
        <div class="footer-menu--social col-12">
            <a href="http://instagram.com/crossfitcambridge" title="Instagram" target="_blank"">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/crossfitcambridge/" title="Facebook" target="_blank"">
            <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <!-- end social items -->
    </div>
    <div class="row footer-menu--items">
        <!-- nav items -->
        <div class="col-lg-1 d-none d-lg-block"></div>
        <div class="col-12 col-md-12 col-lg-10">
            <div class="row">
                <?php foreach ($footer_menu_parents as $footer_menu_parent) { ?>
                    <div class="footer--list col-6 col-md-6 col-lg-auto">
                        <ul>
                            <li>
                                <a href="<?php echo $footer_menu_parent->url ?>"
                                   title="<?php echo $footer_menu_parent->title ?>"><?php echo $footer_menu_parent->title ?></a>
                            </li>
                            <?php foreach ($footer_menu_parent->menu_item_children as $menu_child) { ?>
                                <li>
                                    <a href="<?php echo $menu_child->url ?>"
                                       title="<?php echo $menu_child->title ?>"><?php echo $menu_child->title ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-1 d-none d-lg-block"></div>
        <!-- end nav items -->
    </div>
</footer>

<!-- end bottom-nav-menu -->