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
            if ($curl.indexOf('crossfitcambridge.zenplanner.com')) {
                ga('send', 'event', 'zenplanner', 'click', $curl);
            }
            /**
             * mailto link
             */
            if ($curl.indexOf('mailto:')) {
                ga('send', 'event', 'mailto', 'click', $curl);
            }
        });
        console.log('activate ga tracking..');
    })(jQuery);
</script>

</html>
<!-- end footer -->