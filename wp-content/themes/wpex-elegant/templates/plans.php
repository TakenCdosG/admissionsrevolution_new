<?php
/**
 * Template Name: Plans
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header();
?>
<div id="primary" class="content-area clr">
    <!-- #first-box content -->
    <div class="first-box">
        <?php $background_top = get_field('background_top_plans'); ?>
        <table>
            <tbody>
                <tr>
                    <td class="plans_background_top" >
                        <div class="content-feature-top">
                            <h1></h><?php print get_field('title_plans_top'); ?></h1>
                            <?php print get_field('content_plans_top'); ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- #End first-box content -->
    <!-- #pricing-box content -->
    <div class="pricing-box">
        <?php $content_first_box_plans = get_field('content_first_box_plans'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $content_first_box_plans; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    <!-- #pricing-box content -->
    <div class="clearfix"></div>
    <!-- #second-box content -->
    <div class="second-box">
        <?php $content_second_box_plans = get_field('content_second_box_plans'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-5">
                    <?php echo $content_second_box_plans; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #End second-box content -->
    <!-- #third-box content -->
    <div class="third-box">
        <div class='container'>
            <?php $title_third_box_plans = get_field('title_third_box_plans'); ?>

            <?php $left_third_title_plans = get_field('left_third_title_plans'); ?>
            <?php $left_third_resumen_plans = get_field('left_third_resumen_plans'); ?>

            <?php $middle_third_title_plans = get_field('middle_third_title_plans'); ?>
            <?php $middle_third_resumen_plans = get_field('middle_third_resumen_plans'); ?>

            <?php $right_third_title_plans = get_field('right_third_title_plans'); ?>
            <?php $right_third_resumen_plans = get_field('right_third_resumen_plans'); ?>

            <div class="row top-category">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="easy-pie-chart">
                        <a class="title" href="#">
                            <?php echo $title_third_box_plans; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>


            <div class="page-bar" style="height: 9px; width: 70%; text-align: center; margin: auto auto 75px auto;padding-top: 7px; background: #fff;">
                <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

                <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 11px; margin-top: -2px;  float: left;">
                    <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                        <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                        </div>
                    </div>
                </div>
                <div class="middle-container-left" style="display: block; position: relative; width: 67%; float: left; margin: auto; text-align: center;">
                    <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 10px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                        <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                            <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 10px; margin-top: -2px; float: right; ">
                    <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                        <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                        </div>   
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row init-row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <div class="details">
                            <div class="title"><?php echo $left_third_title_plans; ?></div>
                            <div class="number"><?php echo $left_third_resumen_plans; ?></div>
                        </div>
                    </a>
                </div>  

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <div class="details">
                            <div class="title"><?php echo $middle_third_title_plans; ?></div>
                            <div class="number"><?php echo $middle_third_resumen_plans; ?></div>
                        </div>
                    </a>
                </div>         

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <div class="details">
                            <div class="title"><?php echo $right_third_title_plans; ?></div>
                            <div class="number"><?php echo $right_third_resumen_plans; ?></div>
                        </div>
                    </a>
                </div> 

            </div>

        </div>
    </div>
    <!-- #End third-box content -->
    <!-- #futuredin -->
        <?php include('featured_in.php') ?>
    <!-- #end futuredin -->
    <!-- #fourth-box content -->
    <div class="fourth-box">
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
        <?php $title_fourth_box_plans = get_field('title_fourth_box_plans'); ?>
        <?php $bottom_text_fourth_box_plans = get_field('bottom_text_fourth_box_plans'); ?>
        <?php $bottom_link_fourth_box_plans = get_field('bottom_link_fourth_box_plans'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content">
                            <div class="box-content">
                                <h1><?php echo $title_fourth_box_plans; ?></h1>
                                <a href="<?php echo $bottom_link_fourth_box_plans; ?>" title="<?php echo $bottom_text_fourth_box_plans; ?>"><?php echo $bottom_text_fourth_box_plans; ?></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    <!-- #End fourth-box content -->
</div><!-- #primary -->
<?php get_footer(); ?>