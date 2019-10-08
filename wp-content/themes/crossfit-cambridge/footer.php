<!-- begin footer -->

<?php include 'bottom-nav-menu.php'; ?>

</body>

<?php wp_footer(); ?>

<script>
    /**
     * Function to capture outbound clicks
     */
    (function ($) {
        $('a').click(function () {
            var $link = $(this);
            var $curl = $link.attr('href');
            /**
             * zenplanner link
             */
            if ($curl.indexOf('crossfitcambridge.zenplanner.com') > -1) {
                gtag('event', 'click', {
                    'event_category': 'zenplanner',
                    'event_label': $curl
                });
            }
            /**
             * mailto link
             */
            if ($curl.indexOf('mailto:') > -1) {
                gtag('event', 'click', {
                    'event_category': 'mailto',
                    'event_label': $curl
                });
            }
        });
        console.log('activate ga tracking..');
    })(jQuery);
</script>

</html>
<!-- end footer -->