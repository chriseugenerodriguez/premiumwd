<?php
/**
 * Customer new account email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p>Here is some important information about your new account. You should save this email, so you can refer to it later. </p>

<h3>Your Login:</h3>
<p><?php printf( __( "%s", 'woocommerce' ), esc_html( $user_login ) ); ?></p>


<?php if ( get_option( 'woocommerce_registration_generate_password' ) == 'yes' && $password_generated ) : ?>
<h3>Your Password:</h3>
<p><?php printf( __( "%s", 'woocommerce' ), esc_html( $user_pass ) ); ?></p>
<?php endif; ?>

<h3>Account Settings:</h3>
<p><?php printf( __( '%s', 'woocommerce' ), wc_get_page_permalink( 'myaccount' ) ); ?></p>

<h2>We are here to help</h2>
<p>Please take a look at our <a hre="http://help.premiumwd.com/guides/getting-started/">Getting Started</a> guide.</p>

<?php do_action( 'woocommerce_email_footer' ); ?>
