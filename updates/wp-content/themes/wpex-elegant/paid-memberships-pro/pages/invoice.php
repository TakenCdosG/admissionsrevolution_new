<?php
global $wpdb, $pmpro_invoice, $pmpro_msg, $pmpro_msgt, $current_user;

if ($pmpro_msg) {
    ?>
    <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
    <?php
}
?>	

<div class="row billing-content invoice-page">
    <div class="col-md-8 col-sm-8 col-sm-offset-3 col-md-offset-3">
        <!-- BEGIN CONTENT-->
        <?php if ($pmpro_invoice) { ?>
            <?php
            $pmpro_invoice->getUser();
            $pmpro_invoice->getMembershipLevel();
            ?>
            <br/>
            <br/>
            <br/>
            <?php wpex_logo(); ?>
            <div class="clear clearfix"></div>
            <br/>
            <h3 class="invoice-title">
                <?php printf(__('Invoice #%s', 'pmpro'), $pmpro_invoice->code); ?><br/>
                <?php printf(__('%s', 'pmpro'), date_i18n(get_option('date_format'), $pmpro_invoice->timestamp)); ?>
            </h3>
            <a class="pmpro_a-print" href="javascript:window.print()">Print</a>
            <div class="clear clearfix"></div>
            <?php if (!empty($pmpro_invoice->billing->name)) { ?>
                <div class="pmpro_box">
                    <h4>Customer Information</h4>
                    <div class="pmpro_box_content">
                        <?php echo $pmpro_invoice->billing->name ?><br />
                        <?php echo $pmpro_invoice->Email; ?><br />
                        <?php echo $pmpro_invoice->billing->street ?><br />						
                        <?php if ($pmpro_invoice->billing->city && $pmpro_invoice->billing->state) { ?>
                            <?php echo $pmpro_invoice->billing->city ?>, <?php echo $pmpro_invoice->billing->state ?> <?php echo $pmpro_invoice->billing->zip ?> <?php echo $pmpro_invoice->billing->country ?><br />												
                        <?php } ?>
                        <?php echo formatPhone($pmpro_invoice->billing->phone) ?>
                    </div>
                </div>   
            <?php } ?>
            <?php if ($pmpro_invoice->accountnumber || $pmpro_invoice->payment_type) { ?>
                <div class="pmpro_box">
                    <h4>Payment Method</h4>
                    <div class="pmpro_box_content">
                        <?php if ($pmpro_invoice->accountnumber) { ?>
                            <?php echo $pmpro_invoice->cardtype ?> <?php echo __('ending in', 'pmpro'); ?> <?php echo last4($pmpro_invoice->accountnumber) ?><br />
                            <small><?php _e('Expiration', 'pmpro'); ?>: <?php echo $pmpro_invoice->expirationmonth ?>/<?php echo $pmpro_invoice->expirationyear ?></small>
                        <?php } elseif ($pmpro_invoice->payment_type) { ?>
                            <?php echo $pmpro_invoice->payment_type ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($pmpro_invoice->membership_level->name)) { ?>
                <div class="pmpro_box">
                    <h4>Membership Level</h4>
                    <div class="pmpro_box_content">
                        <?php echo ucwords($pmpro_invoice->membership_level->name) ?>
                    </div>
                </div>
            <?php } ?>
            <div class="total_invoice_box">
                <h4 class="total-inline pmpro_box_content">
                    Total Billed&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ($pmpro_invoice->total != '0.00') { ?>
                        <?php if (!empty($pmpro_invoice->tax)) { ?>
                            <?php _e('Subtotal', 'pmpro'); ?>: <?php echo pmpro_formatPrice($pmpro_invoice->subtotal); ?><br />
                            <?php _e('Tax', 'pmpro'); ?>: <?php echo pmpro_formatPrice($pmpro_invoice->tax); ?><br />
                            <?php if (!empty($pmpro_invoice->couponamount)) { ?>
                                <?php _e('Coupon', 'pmpro'); ?>: (<?php echo pmpro_formatPrice($pmpro_invoice->couponamount); ?>)<br />
                            <?php } ?>
                            <strong><?php _e('Total', 'pmpro'); ?>: <?php echo pmpro_formatPrice($pmpro_invoice->total); ?></strong>
                        <?php } else { ?>
                            <?php echo pmpro_formatPrice($pmpro_invoice->total); ?>
                        <?php } ?>						
                    <?php } else { ?>
                        <span class=""><?php echo pmpro_formatPrice(0); ?></span>
                    <?php } ?>	
                </h4>
            </div>
            <br/>
            <nav id="nav-below" class="navigation" role="navigation">
                <!--
                <div class="nav-next alignright">
                    <a href="<?php echo pmpro_url("account") ?>"><?php _e('View Your Membership Account &rarr;', 'pmpro'); ?></a>
                </div>
                -->
                <?php if ($pmpro_invoice) { ?>
                    <div class="nav-prev alignleft">
                        <a href="<?php echo pmpro_url("invoice") ?>"><?php _e('&larr; View All Invoices', 'pmpro'); ?></a>
                    </div>
                <?php } ?>
            </nav>

        <?php } else { ?>

            <?php //Show all invoices for user if no invoice ID is passed ?>
            <?php
            $invoices = $wpdb->get_results("SELECT *, UNIX_TIMESTAMP(timestamp) as timestamp FROM $wpdb->pmpro_membership_orders WHERE user_id = '$current_user->ID' ORDER BY timestamp DESC");
            ?>
            <?php if ($invoices) { ?>
                <h3 class="invoice-title">
                    Invoices
                </h3>
                <table id="pmpro_invoices_table" class="pmpro_invoice" width="100%" cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th><?php _e('Date', 'pmpro'); ?></th>
                            <th><?php _e('Invoice #', 'pmpro'); ?></th>
                            <th><?php _e('Total Billed', 'pmpro'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($invoices as $invoice) {
                            ?>
                            <tr class="<?php echo ($i % 2 == 0) ? "even" : "odd"; ?>">
                                <td><?php echo date(get_option("date_format"), $invoice->timestamp) ?></td>
                                <td><a href="<?php echo pmpro_url("invoice", "?invoice=" . $invoice->code) ?>"><?php echo $invoice->code; ?></a></td>
                                <td><?php echo pmpro_formatPrice($invoice->total); ?></td>
                            </tr>
                            <?php
                            $i = $i + 1;
                        }
                        ?>
                    </tbody>
                </table>
                <br>
                <br>
                <div class="nav-prev alignleft">
                    <a href="<?php echo get_page_link(270); ?>"><?php _e('&larr; View Billing Information', 'pmpro'); ?></a>
                </div>
            <?php } else { ?>
                <p><?php _e('No invoices found.', 'pmpro'); ?></p>
            <?php } ?>
        <?php } ?>
        <!-- END CONTENT-->
    </div>
</div>