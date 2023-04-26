<h3><?php _e('Checkout Subscription', 'follow_up_emails'); ?></h3>

<table class="form-table">
    <tr>
        <th>
            <label for="enable_checkout_subscription">
                <input type="checkbox" name="enable_checkout_subscription" id="enable_checkout_subscription" value="1" <?php if (1 == get_option('fue_enable_checkout_subscription', 1)) echo 'checked'; ?> />
                <?php _e('Allow customers to subscribe to the newsletter on the checkout form', 'follow_up_emails'); ?>
            </label>
        </th>
    </tr>
</table>