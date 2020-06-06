<!--
This is a special page which works by taking the query string and referencing
an existing page with the name of the query string, then extracting the redirectTo
parameter and heading to that URL on a 3000ms delay
-->
<?php get_header() ?>
<div class="page-attend">
    <h2 align="center">Redirecting you to the class... please wait.</h2>
</div>
<?php
$id = $_GET["d"];
if (!$id) {
    $redirectTo = '/';
}
$time = wp_get_post_by_slug($id, 'page');
$redirectTo = false;
if ($time) {
    $redirectTo = get_metadata('post', $time->ID, 'redirectTo', true);
} else {
    $redirectTo = '/';
}
?>
<?php if ($redirectTo) { ?>
    <script type="text/javascript">
        (function () {
            setTimeout(function () {
                var redirectTo = "<?php echo $redirectTo ?>";
                console.log('redirectTo', redirectTo);
                window.location.href = redirectTo;
            }, 3000);
        })();
    </script>
<?php } ?>
<?php get_footer() ?>