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
            <a href="https://twitter.com/cf_cambridge" title="Twitter" target="_blank"">
            <i class="fab fa-twitter"></i>
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
                    <div class="footer--list col-12 col-md-6 col-lg-auto col-xl-auto">
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