<?php
global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user;
if ($pmpro_msg) {
    ?>
    <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
    <?php
}
?>
<div class="row-box-level">
    <?php
    $count = 0;
    foreach ($pmpro_levels as $level) {
        if ($level->id != 12) {
            if (isset($current_user->membership_level->ID))
                $current_level = ($current_user->membership_level->ID == $level->id);
            else
                $current_level = false;
            ?>
            <div class="box-level <?php if ($count++ % 2 == 0) { ?>odd<?php } else { ?> even<?php } ?><?php if ($current_level == $level) { ?> active<?php } ?>">
                <h1><?php echo $current_level ? "<strong>{$level->name}</strong>" : $level->name ?></h1>
                <div class="copy">
                    <?php
                    if (pmpro_isLevelFree($level))
                        $cost_text = "<strong>Free</strong>";
                    else
                        $cost_text = pmpro_getLevelCost($level, true, true);
                    $expiration_text = pmpro_getLevelExpiration($level);
                    if (!empty($cost_text) && !empty($expiration_text))
                        echo $cost_text . "<br />" . $expiration_text;
                    elseif (!empty($cost_text))
                        echo $cost_text;
                    elseif (!empty($expiration_text))
                        echo $expiration_text;
                    ?>
                </div>
                <div class="links">
                    <?php if (empty($current_user->membership_level->ID)) { ?>
                        <a class="pmpro_btn pmpro_btn-select sign-up" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Select Plan', 'pmpro'); ?></a>
                    <?php } elseif (!$current_level) { ?>     
                        <!--
                        <a class="pmpro_btn pmpro_btn-select" href="<?php //echo pmpro_url("checkout", "?level=" . $level->id, "https")                                                     ?>"><?php //_e('Change Subscription', 'pmpro');                                                     ?></a>
                        -->
                        <a class="pmpro_btn pmpro_btn-select change-subscription" href="<?php echo "/billing/subscription-checkout?level=" . $level->id; ?>"><?php _e('Select Plan', 'pmpro'); ?></a>
                    <?php } elseif ($current_level) { ?>      
                        <?php
                        //if it's a one-time-payment level, offer a link to renew				
                        if (!pmpro_isLevelRecurring($current_user->membership_level) && !empty($current_user->membership_level->enddate)) {
                            ?>
                            <a class="pmpro_btn pmpro_btn-select renew" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Renew', 'pmpro'); ?></a>
                            <?php
                        } else {
                            ?>
                            <a class="pmpro_btn disabled your-current-level" href="<?php echo pmpro_url("account") ?>"><?php _e('Your&nbsp;Plan', 'pmpro'); ?></a>
                            <?php
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<div class="clear clearfix"></div>
<nav id="nav-below" class="navigation" role="navigation">
    <div class="nav-previous alignleft">
        <?php if (!empty($current_user->membership_level->ID)) { ?>
            <!--
                <a href="<?php echo pmpro_url("account") ?>"><?php _e('&larr; Return to Your Account', 'pmpro'); ?></a>
            -->
        <?php } else { ?>
            <a href="<?php echo home_url() ?>"><?php _e('&larr; Return to Home', 'pmpro'); ?></a>
        <?php } ?>
    </div>
</nav>


