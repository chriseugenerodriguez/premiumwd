<?php
/**
 * Login Form
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<?php wc_print_notices(); ?>
<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
<div id="customer_login" class="row">
<ul class="tabs full">
  <li><a href="#login" class="active">Login</a></li>
<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>  <li><a href="#register">Register</a></li> <?php endif; ?>
</ul>
<div class="tabs-content">
  <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
  <?php endif; ?>
  <div id="login" class="active">
    <div class="text-center">
      <h3>I'm an existing customer and<br>would like to login.</h3>
      <form method="post" class="login">
        <?php do_action( 'woocommerce_login_form_start' ); ?>
        <div class="twelve columns">
          <label for="username"> Username or email <span class="required">*</span> </label>
          <input type="text" class="input-text placeholder" name="username" id="username" />
        </div>
        <div class="twelve columns">
          <label for="password"> Password <span class="required">*</span> </label>
          <input class="input-text placeholder" type="password" name="password" id="password" />
        </div>
        <?php do_action( 'woocommerce_login_form' ); ?>
        <div class="six columns">
          <label for="rememberme" class="remember">
            <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
            <?php _e( 'Remember me', 'woocommerce' ); ?>
          </label>
        </div>
        <div class="six columns">
          <?php wp_nonce_field( 'woocommerce-login' ); ?>
          <a class="lost_password woo-lost_password2" href="<?php echo esc_url( wc_lostpassword_url() ); ?>">
          <?php _e( 'Lost Password?', 'woocommerce' ); ?>
          </a> </div>        <div class="twelve columns">
          <input type="submit" class="button" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
        </div>
        <?php do_action( 'woocommerce_login_form_end' ); ?>
      </form>
    </div>
  </div>
  <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
  <div id="register">
    <div class="text-center">
      <h3>I'm a new customer and<br>would like to register.</h3>
      <form method="post" class="register">
        <?php if ( get_option( 'woocommerce_registration_generate_username' ) === 'no' ) : ?>
        <div class="twelve columns">
          <label for="username"> Username <span class="required">*</span> </label>
          <input type="text" class="input-text placeholder"  name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) esc_attr_e( $_POST['username'] ); ?>" />
        </div>
        <?php endif; ?>
        <div class="twelve columns">
        <label for="email"> Email <span class="required">*</span> </label>
        <input type="email" class="input-text placeholder" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) esc_attr_e( $_POST['email'] ); ?>" />
        </div>
        <div class="twelve columns">
        <label for="email"> Password <span class="required">*</span> </label>
        <input type="password" class="input-text placeholder" name="password" id="reg_password" value="<?php if ( ! empty( $_POST['password'] ) ) esc_attr_e( $_POST['password'] ); ?>" />
        </div>
        </p>
        
        <!-- Spam Trap -->
        <div style="left:-999em; position:absolute;">
          <label for="trap">
            <?php _e( 'Anti-spam', 'woocommerce' ); ?>
          </label>
          <input type="text" name="email_2" id="trap" tabindex="-1" />
        </div>
        <?php do_action( 'woocommerce_register_form' ); ?>
        <?php do_action( 'register_form' ); ?>
        <div class="twelve columns">
          <?php wp_nonce_field( 'woocommerce-register', 'register' ); ?>
          <input type="submit" class="button" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
        </div>
        <?php do_action( 'woocommerce_register_form_end' ); ?>
      </form>
    </div>
  </div>
  <?php endif; ?>
</ul>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
