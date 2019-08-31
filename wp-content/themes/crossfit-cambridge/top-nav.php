<!-- begin bottom-nav-menu -->

<?php

$common_menu = wp_get_nav_menu_items('Footer Menu');
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
    <div class="nmp-top-nav--top">
        <a href="/" class="top--left">
            <img class="img--desktop" src="/wp-content/uploads/2019/08/CCLogo_BW_Main-300x266.png"
                 alt="Crossfit Cambridge Logo">
            <img class="img--mobile" src="/wp-content/uploads/2019/08/CCLogo_bw-195x300.png"
                 alt="Crossfit Cambridge Logo">
        </a>
        <div class="top--right">
            <a href="" target="_blank" class="btn button-join btn-lg">Join Today</a>
        </div>
    </div>
    <div class="nmp-top-nav--bottom">
        <a href="https://goo.gl/maps/V4vqwnG93yv6W48cA"
           title="Open Map (opens a new window)"
           target="_blank" class="bottom--left">
            <i class="fas fa-map-marker-alt"></i>&nbsp;54 Guelph Avenue Unit 5 Cambridge, ON
        </a>
        <div class="bottom--right">
            <!-- begin bootstrap nav -->
            <!-- begin bootstrap nav -->
            <!-- begin bootstrap nav -->
            <nav class="navbar navbar-expand-lg">
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
                    </ul>
                </div>
            </nav>
            <!-- end bootstrap nav -->
            <!-- end bootstrap nav -->
            <!-- end bootstrap nav -->
        </div>
    </div>
</nav>