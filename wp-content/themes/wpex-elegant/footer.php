<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?>

</div><!-- #main-content -->

<div id="footer-wrap" class="site-footer clr">
    <div id="footer" class="clr container">
        <div id="footer-widgets" class="clr">
            <div class="footer-box span_1_of_3 col col-1">
                <?php dynamic_sidebar('footer-one'); ?>
            </div><!-- .footer-box -->
            <div class="footer-box span_1_of_8 col col-2">
                <?php dynamic_sidebar('footer-two'); ?>
            </div><!-- .footer-box -->
            <div class="footer-box span_1_of_3 col col-3">
                <?php dynamic_sidebar('footer-three'); ?>
            </div><!-- .footer-box -->
        </div><!-- #footer-widgets -->
    </div><!-- #footer -->
</div><!-- #footer-wrap -->

<footer id="copyright-wrap" class="clear">
    <hr class="blue">
    <div id="copyright" role="contentinfo" class="clr">
        <?php
        // Displays copyright info
        // See functions/copyright.php
        wpex_copyright();
        ?>
    </div><!-- #copyright -->
</footer><!-- #footer-wrap -->
</div><!-- #wrap -->
<aside class="bestseller--sidebar">
    <a href="http://lat.ms/1dsTpJe" class="sidebar-toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/images/LATimes_triangle_callout.png">
    </a>
</aside>
<!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<script src="//fast.wistia.com/static/embed_shepherd-v1.js" async></script>
<script>
    //<![CDATA[
    wistiaEmbeds.onFind(function (video) {
        var email = Wistia.localStorage("golden-ticket");
        if (email) {
            video.setEmail(email);
        }
    });
    wistiaEmbeds.bind("conversion", function (video, type, data) {
        if (/^(pre|mid|post)-roll-email$/.test(type)) {
            Wistia.localStorage("golden-ticket", data);
            for (var i = 0; i < wistiaEmbeds.length; i++) {
                wistiaEmbeds[i].setEmail(data);
            }
        }
    });
    //]]>
</script>
<?php wp_footer(); ?>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-61903910-1', 'auto');
    ga('send', 'pageview');

</script>
<script src="//fast.wistia.com/static/integrations-hubspot-v1.js" async></script>
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
    twttr.conversion.trackPid('l61mk', {tw_sale_amount: 0, tw_order_quantity: 0});</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l61mk&p_id=Twitter&tw_…" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l61mk&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" /></noscript>
<!-- Start of Leadin Embed -->
<script type="text/javascript" src="//js.leadin.com/js/v1/1628111.js" id="LeadinEmbed-1628111" crossorigin="use-credentials" async defer></script>
<!-- End of Leadin Embed -->
</body>
</html>