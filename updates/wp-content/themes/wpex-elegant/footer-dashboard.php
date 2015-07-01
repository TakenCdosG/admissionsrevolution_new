<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
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
<script src="//fast.wistia.com/static/integrations-hubspot-v1.js" async></script>


<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        //Demo.init(); // init demo features 
        //Index.init();
    });
</script>
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

<!-- END JAVASCRIPTS -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
    twttr.conversion.trackPid('l61mk', {tw_sale_amount: 0, tw_order_quantity: 0});</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l61mk&p_id=Twitter&tw_…" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l61mk&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>
</body>
<!-- END BODY -->
</html>