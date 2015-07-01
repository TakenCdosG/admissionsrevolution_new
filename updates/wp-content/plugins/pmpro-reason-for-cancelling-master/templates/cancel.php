<?php
global $pmpro_msg, $pmpro_msgt, $pmpro_confirm;
?>

<div class="row">
    <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2 cancel_your_membership">
        <?php
        if ($pmpro_msg) {
            ?>
            <br/>
            <br/>
            <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
            <?php
        }
        ?>
        <?php if (!$pmpro_confirm) { ?>    
            <form action="" method="post">
                <p><h3><?php _e('Are you sure you want to cancel your membership?', 'pmpro'); ?></h3></p>
                <hr>
                <p>By closing your account, you'll no longer have access to all our great videos, guides, and reports.</p>
                <p>We're sad to see you go. To help us improve, could you tell us why you're cancelling? </p>
                <span class="wpcf7-form-control-wrap checkbox-472">
                    <span class="wpcf7-form-control wpcf7-checkbox">
                        <span class="wpcf7-list-item first">
                            <div class="">
                                <span class="">
                                    <input type="checkbox" name="reason-checkbox[]" value="Too expensive">
                                </span>
                                <span class="wpcf7-list-item-label">Too expensive</span>
                            </div>&nbsp;
                        </span>
                        <span class="wpcf7-list-item">
                            <div class="">
                                <span class="">
                                    <input type="checkbox" name="reason-checkbox[]" value="I couldn't find the classes i wanted">
                                </span>
                                <span class="wpcf7-list-item-label">I couldn't find the classes i wanted</span>
                            </div>&nbsp;
                        </span>
                        <span class="wpcf7-list-item">
                            <div class="">
                                <span class=""> <input type="checkbox" name="reason-checkbox[]" value="I couldn't find the time to use Admissions Revolution"></span>
                                <span class="wpcf7-list-item-label">I couldn't find the time to use Admissions Revolution</span>
                            </div>&nbsp;
                        </span>
                        <span class="wpcf7-list-item">
                            <div class="">
                                <span class=""><input type="checkbox" name="reason-checkbox[]" value="It was missing features that i expected"></span>
                                <span class="wpcf7-list-item-label">It was missing features that i expected</span>
                            </div>&nbsp;
                        </span>
                        <span class="wpcf7-list-item last">
                            <div class="">
                                <span class=""><input type="checkbox" name="reason-checkbox[]" value="Other"></span>
                                <span class="wpcf7-list-item-label">Other</span>
                            </div>&nbsp;
                        </span>
                    </span>
                </span>
                <p>
                    <?php _e('Do you have any comments? (Optional)'); ?><br /><br />
                    <textarea name="reason"></textarea>
                </p>
                <p> <?php _e('We are always improving Admissions Revolution and we appreciate your feedback to help us make it better.'); ?></p><br/><br/>
                <p>	
                    <input type="hidden" name="membership_cancel" value="1" />
                    <input type="hidden" name="confirm" value="1" />
                    <a class="pmpro_nolink nolink pull-left" href="<?php echo get_page_link(190); ?>"><?php _e("Never mind, I'll stay!", 'pmpro'); ?></a>
                    <input type="submit" name="submit" class='orange pull-right' value="<?php _e('Cancel my account', 'pmpro'); ?>" />
                </p>
            <?php } else { ?>
                <p><a href="<?php echo get_home_url() ?>"><?php _e('Click here to go to the home page.', 'pmpro'); ?></a></p>
            <?php } ?>
        </form>
    </div>
</div>