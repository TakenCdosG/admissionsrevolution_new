<?php
/**
 * Template Name: Features
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header();
$url = home_url();
?>

<div id="primary" class="content-area clr">
    <!-- #first-box content -->
    <div class="first-box" id="first-box" >
        <?php $background_top = get_field('background_top_features'); ?>
        <?php $title_top = get_field('title_top_features'); ?>
        <table>
            <tbody>
                <tr>
                    <td class="features_background_top" style="background-image:url(<?php echo $background_top; ?>); background-repeat: no-repeat; background-position: right top; background-size: cover;">
                        <div class="content-feature-top">
                            <?php echo $title_top; ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>
    <!-- #End first-box content -->
    <div class="clearfix"></div>
    <!-- #second-box content -->
    <div class="second-box" id="second-box">
        <?php $content_left_second_box_features = get_field('content_left_second_box_features'); ?>
        <?php $content_right_second_box_features = get_field('content_right_second_box_features'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-4">
                    <?php echo $content_left_second_box_features; ?>
                </div>
                <div class="col-md-8">
                    <?php echo $content_right_second_box_features; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    <!-- #End second-box content -->
    <div class="clearfix"></div>
    <!-- #third-box content -->
    <div class="third-box" id="third-box">
        <?php $content_left_third_box_features = get_field('content_left_third_box_features'); ?>
        <?php $content_right_third_box_features = get_field('content_right_third_box_features'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-8">
                    <?php echo $content_left_third_box_features; ?>
                </div>
                <div class="col-md-4">
                    <?php echo $content_right_third_box_features; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #End third-box content -->
    <div class="clearfix"></div>

    <!-- #fourth-box content -->
    <div class="fourth-box" id="fourth-box">
        <?php $content_left_fourth_box_features = get_field('content_left_fourth_box_features'); ?>
        <?php $content_right_fourth_box_features = get_field('content_right_fourth_box_features'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-4">
                    <?php echo $content_left_fourth_box_features; ?>
                </div>
                <div class="col-md-8">
                    <?php echo $content_right_fourth_box_features; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #End fourth-box content -->
    <div class="clearfix"></div>
    <!-- #fifth-box content -->
    <div class="fifth-box" id="fifth-box">
        <div class='container'>
            <?php $left_fifth_icon_features = get_field('left_fifth_icon_features'); ?>
            <?php $left_fifth_title_features = get_field('left_fifth_title_features'); ?>
            <?php $left_fifth_resumen_features = get_field('left_fifth_resumen_features'); ?>

            <?php $middle_fifth_icon_features = get_field('middle_fifth_icon_features'); ?>
            <?php $middle_fifth_title_features = get_field('middle_fifth_title_features'); ?>
            <?php $middle_fifth_resumen_features = get_field('middle_fifth_resumen_features'); ?>

            <?php $right_fifth_icon_features = get_field('right_fifth_icon_features'); ?>
            <?php $right_fifth_title_features = get_field('right_fifth_title_features'); ?>
            <?php $right_fifth_resumen_features = get_field('right_fifth_resumen_features'); ?>

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
                        <div class="visual">
                            <img src="<?php echo $left_fifth_icon_features; ?>" alt="" class="img-responsive">
                        </div>
                        <div class="details">
                            <div class="title"><?php echo $left_fifth_title_features; ?></div>
                            <div class="number"><?php echo $left_fifth_resumen_features; ?></div>
                        </div>
                    </a>
                </div>  

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <div class="visual">
                            <img src="<?php echo $middle_fifth_icon_features; ?>" alt="" class="img-responsive">
                        </div>
                        <div class="details">
                            <div class="title"><?php echo $middle_fifth_title_features; ?></div>
                            <div class="number"><?php echo $middle_fifth_resumen_features; ?></div>
                        </div>
                    </a>
                </div>         

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <div class="visual">
                            <img src="<?php echo $right_fifth_icon_features; ?>" alt="" class="img-responsive">
                        </div>
                        <div class="details">
                            <div class="title"><?php echo $right_fifth_title_features; ?></div>
                            <div class="number"><?php echo $right_fifth_resumen_features; ?></div>
                        </div>
                    </a>
                </div> 

            </div>

        </div>
    </div>
    <!-- #End fifth-box content -->

    <!-- #Sixth-box content -->
    <div class="sixth-box" id="sixth-box">
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
        <?php $content_left_sixth_box_features = get_field('content_left_sixth_box_features'); ?>
        <?php $content_right_sixth_box_features = get_field('content_right_sixth_box_features'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content-left">
                            <div class="left-box-content">
                                <?php echo $content_left_sixth_box_features; ?>
                            </div>
                        </td>
                        <td class="td-content-right">
                            <div class="right-box-content">
                                <?php echo $content_right_sixth_box_features; ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="arrow_line_right" style="right: -125px; margin: auto; position: absolute; width: 667px; z-index: 99; background-image: url('<?php echo $url; ?>/wp-content/themes/wpex-elegant/images/testimonial_line.png'); height: 387px; top: 20px;"></div>
        </div>
    </div>
    <!-- #End sixth-box content -->

    <!-- #futuredin -->
        <?php include('featured_in.php') ?>
    <!-- #end futuredin -->

    <!-- #End seventh-box content -->
    <div class="seventh-box" id="seventh-box">
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
        <?php $seventh_text_seventh_box_features = get_field('seventh_text_seventh_box_features'); ?>
        <?php $seventh_resumen_seventh_box_features = get_field('seventh_resumen_seventh_box_features'); ?>
        <?php $seventh_link_seventh_box_features = get_field('seventh_link_seventh_box_features'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content">
                            <div class="box-content">
                                <p><?php echo $seventh_resumen_seventh_box_features; ?></p>
                                <a href="<?php echo $seventh_link_seventh_box_features; ?>" title="<?php echo $seventh_text_seventh_box_features; ?>"><?php echo $seventh_text_seventh_box_features; ?></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    <!-- #End sixth-box content -->

</div><!-- #primary -->

<?php get_footer(); ?>