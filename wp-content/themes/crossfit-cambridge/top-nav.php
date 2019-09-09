<!-- begin bottom-nav-menu -->

<?php

$common_menu = wp_get_nav_menu_items('Special Links');
$footer_menu = wp_get_nav_menu_items('Footer Menu');

$footer_menu_parents = array_filter($footer_menu, function ($footer_item) {
    return $footer_item->menu_item_parent == "0";
});
foreach ($footer_menu_parents as $menu_item_parent) {
    $menu_item_parent->menu_item_children = array_filter($footer_menu, function ($footer_item) use ($menu_item_parent) {
        return $footer_item->menu_item_parent == $menu_item_parent->ID;
    });
}
?>

<nav class="npm-top-nav">
    <div class="npm-top-nav--info">
        <div class="info--element">
            <a title="Click for map" href="https://goo.gl/maps/Z69xu49HCrzJrA8M6" target="_blank">
                <i class="fas fa-map-marker-alt"></i>
                <span>&nbsp;54 Guelph Ave, Cambridge, ON N3C 1A3</span>
            </a>
        </div>
        <div class="info--element">
            <a title="Call +1 (226) 280-2328" href="tel:226-280-2328"><i class="fas fa-phone"></i>
                <span>&nbsp;+1 (226) 280-2328</span>
            </a>
            <a title="Email info@crossfitcambridge.com" href="mailto:info@crossfitcambridge.com">
                <i class="fas fa-envelope"></i>
                <span>&nbsp;info@crossfitcambridge.com</span>
            </a>
        </div>
    </div>
    <div class="npm-top-nav--items">
        <a href="/" class="npm-top-nav--logo">
            <img class="img--desktop" src="/wp-content/uploads/2019/09/CCLogo_BW_Main_invert-300x266.png"
                 alt="Crossfit Cambridge Logo">
        </a>
        <div class="npm-to-nav--bootstrap navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarTargetContent" aria-controls="navbarTargetContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTargetContent">
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($footer_menu_parents as $footer_menu_parent) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>dropdown-toggle<?php } ?>"
                               href="<?php echo $footer_menu_parent->url ?>"
                               target="<?php echo $footer_menu_parent->target ?>"
                               title="<?php echo $footer_menu_parent->title ?>"
                               <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>id="navbarDropdown"<?php } ?>
                               <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>role="button"<?php } ?>
                               <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>data-toggle="dropdown"<?php } ?>
                               <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>aria-haspopup="true"<?php } ?>
                               <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>aria-expanded="false"<?php } ?>>
                                <?php echo $footer_menu_parent->title ?>
                            </a>
                            <?php if (!empty($footer_menu_parent->menu_item_children)) { ?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($footer_menu_parent->menu_item_children as $menu_child) { ?>
                                        <a class="dropdown-item" href="<?php echo $menu_child->url ?>"
                                           target="<?php echo $menu_child->target ?>"
                                           title="<?php echo $menu_child->title ?>">
                                            <?php echo $menu_child->title ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </li>
                    <?php } ?>
                    <div class="nav-item">
                        <a href="<?php echo $common_menu[0]->url ?>" target="_blank" class="btn button-join">Join
                            Today</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>