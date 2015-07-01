<?php
global $wpdb, $current_user, $pmpro_invoice, $pmpro_msg, $pmpro_msgt;

if ($pmpro_msg) {
    ?>
    <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
    <?php
}

if (empty($current_user->membership_level))
    $confirmation_message = "<p>" . __('Your payment has been submitted. Your membership will be activated shortly.', 'pmpro') . "</p>";
else
    $confirmation_message = "<p>" . sprintf(__('Thank you for your membership to %s. Your %s membership is now active.', 'pmpro'), get_bloginfo("name"), $current_user->membership_level->name) . "</p>";

//confirmation message for this level
$level_message = $wpdb->get_var("SELECT l.confirmation FROM $wpdb->pmpro_membership_levels l LEFT JOIN $wpdb->pmpro_memberships_users mu ON l.id = mu.membership_id WHERE mu.status = 'active' AND mu.user_id = '" . $current_user->ID . "' LIMIT 1");
if (!empty($level_message))
    $confirmation_message .= "\n" . stripslashes($level_message) . "\n";
?>	

<?php if (!empty($pmpro_invoice)) { ?>		

    <?php
    $pmpro_invoice->getUser();
    $pmpro_invoice->getMembershipLevel();

    $confirmation_message .= "<p>" . sprintf(__('Congratulations. You are now on your way to getting informed, getting empowered and getting in. If you have any questions throughout your journey, please don\'t hesitate to contact <a href="mailto:support@admissionsrevolution.com">support@admissionsrevolution.com</a>.', 'pmpro'), $pmpro_invoice->user->user_email) . "</p>";

    //check instructions		
    if ($pmpro_invoice->gateway == "check" && !pmpro_isLevelFree($pmpro_invoice->membership_level))
        $confirmation_message .= wpautop(pmpro_getOption("instructions"));

    $confirmation_message = apply_filters("pmpro_confirmation_message", $confirmation_message, $pmpro_invoice);

    echo "<div class='subtitle'>";
    echo apply_filters("the_content", $confirmation_message);
    echo "</div>";
    ?>

    <h3 class="subtitle">
        <?php printf(__('Invoice #%s', 'pmpro'), $pmpro_invoice->code); ?><br/>
        <?php echo date_i18n(get_option('date_format'), $pmpro_invoice->timestamp); ?>
    </h3>

    <!--
    <a class="pmpro_a-print" href="javascript:window.print()"><?php //_e('Print', 'pmpro');                  ?></a>
    -->

    <div class="content-confirmation">
        <?php do_action("pmpro_invoice_bullets_top", $pmpro_invoice); ?>
        <p><strong><?php _e('Account', 'pmpro'); ?>:</strong> <?php echo $current_user->display_name ?> (<?php echo $current_user->user_email ?>)</p>
        <p><strong><?php _e('Membership Level', 'pmpro'); ?>:</strong> <?php echo ucwords($current_user->membership_level->name) ?></p>
        <?php if ($current_user->membership_level->enddate) { ?>
            <p><strong><?php _e('Membership Expires', 'pmpro'); ?>:</strong> <?php echo date(get_option('date_format'), $current_user->membership_level->enddate) ?></p>
        <?php } ?>
        <?php if ($pmpro_invoice->getDiscountCode()) { ?>
            <p><strong><?php _e('Discount Code', 'pmpro'); ?>:</strong> <?php echo $pmpro_invoice->discount_code->code ?></p>
        <?php } ?>
        <?php do_action("pmpro_invoice_bullets_bottom", $pmpro_invoice); ?>
    </div>
    <br/>
    <div class="content-confirmation">
        <p class="line-height">
            <strong><?php _e('Billing Address', 'pmpro'); ?></strong><br/>
            <?php if (!empty($pmpro_invoice->billing->name)) { ?>
                <?php echo $pmpro_invoice->billing->name ?><br />
                <?php echo $pmpro_invoice->billing->street ?><br />						
                <?php if ($pmpro_invoice->billing->city && $pmpro_invoice->billing->state) { ?>
                    <?php echo $pmpro_invoice->billing->city ?>, <?php echo $pmpro_invoice->billing->state ?> <?php echo $pmpro_invoice->billing->zip ?> <?php echo $pmpro_invoice->billing->country ?><br />												
                <?php } ?>
                <?php echo formatPhone($pmpro_invoice->billing->phone) ?>
            <?php } ?>
        </p>
    </div>
    <br/>
    <div class="content-confirmation">
        <p class="line-height">
            <strong><?php _e('Payment Method', 'pmpro'); ?></strong><br/>
            <?php if ($pmpro_invoice->accountnumber) { ?>
                <?php echo $pmpro_invoice->cardtype ?> <?php _e('ending in', 'pmpro'); ?> <?php echo last4($pmpro_invoice->accountnumber) ?><br />
                <small><?php _e('Expiration', 'pmpro'); ?>: <?php echo $pmpro_invoice->expirationmonth ?>/<?php echo $pmpro_invoice->expirationyear ?></small>
            <?php } elseif ($pmpro_invoice->payment_type) { ?>
                <?php echo $pmpro_invoice->payment_type ?>
            <?php } ?>
        </p>
    </div>
    <br/>
    <div class="content-confirmation">
        <p class="line-height">
            <strong><?php _e('Membership Level', 'pmpro'); ?></strong><br/>
            <?php echo ucwords($pmpro_invoice->membership_level->name) ?>
        </p>
    </div>
    <br/>
    <div class="nav-next alignright">
        <p> <strong><?php _e('Total Billed', 'pmpro'); ?> <?php
                if ($pmpro_invoice->total)
                    echo pmpro_formatPrice($pmpro_invoice->total);
                else
                    echo "---";
                ?></strong></p>
    </div>
    <?php
}
else {
    $confirmation_message .= "<p>" . sprintf(__('Below are details about your membership account. A welcome email has been sent to %s.', 'pmpro'), $current_user->user_email) . "</p>";

    $confirmation_message = apply_filters("pmpro_confirmation_message", $confirmation_message, false);

    echo $confirmation_message;
    ?>	
    <br/>
    <div class="content-confirmation">
        <ul>
            <li><strong><?php _e('Account', 'pmpro'); ?>:</strong> <?php echo $current_user->display_name ?> (<?php echo $current_user->user_email ?>)</li>
            <li><strong><?php _e('Membership Level', 'pmpro'); ?>:</strong> <?php
                if (!empty($current_user->membership_level))
                    echo ucwords($current_user->membership_level->name);
                else
                    _ex("Pending", "User without membership is in {pending} status.", "pmpro");
                ?></li>
        </ul>
    </div>
    <?php
}
?>  
<nav id="nav-below" class="navigation" role="navigation">
    <div class="nav-next">
        <?php if (!empty($current_user->membership_level)) { ?>
            <a href="<?php echo home_url("/all-videos/"); //pmpro_url("account");                                                        ?>"><?php _e('View Your Membership Account', 'pmpro'); ?></a>
        <?php } else { ?>
            <?php _e('If your account is not activated within a few minutes, please contact the site owner.', 'pmpro'); ?>
        <?php } ?>
    </div>
</nav>
