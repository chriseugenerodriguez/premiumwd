<?php

if(!defined('THEME_NAME')){
    $premiumwd_theme_data = wp_get_theme();
    define('THEME_NAME', $premiumwd_theme_data->Name);
    define('THEME_AUTHOR', $premiumwd_theme_data->Author);
    define('THEME_VERSION', trim($premiumwd_theme_data->Version));
    define('FRAMEWORK_VERSION', '1.0');
    define('FRAMEWORK_NAME', 'Premiumwd Framework');
    define('THEME_MENU_TITLE', 'Innovate'); //Define your menu title
    define('THEME_MENU_SLUG', 'premiumwd_theme_options'); //Define your menu slug
    define('THEME_DOMAIN', 'innovate');
    define('THEME_PRODUCT_ID', 'INOVATE');


class ThemeActuareVld{
    protected $key;
    protected $email;
    protected $date;
    public function __construct(array $args){
        $this->key = isset($args['key']) ? $args['key'] : false;
        $this->email = isset($args['email']) ? $args['email'] : '';
        if(isset($args['date'])){
            $this->date = $args['date'];
        }
    }
    public function has($key){
        return isset($this->{$key});
    }
    public function get($key){
        return isset($this->{$key}) ? $this->{$key} : null;
    }
}

class ThemeActuare{
    const ENDPOINT = 'http://www.premiumwd.com/';
    const SLUG = 'tAasL';
    protected static $params = array('wc-api' => 'software-api', 'request' => 'activation');
    protected static $valid;
    public static function isValid(){
        return false !== ($valid = get_option('_vld_' . THEME_DOMAIN, false)) ? ($valid instanceof ThemeActuareVld) && $valid->has('date') : $valid;
    }

    public static function menuFunc($callable){
        return self::isValid() ? $callable : 'ThemeActuare::menuRender';
    }

    public static function menuRender(){
        $user = wp_get_current_user();
        if(empty($user) || 0 === $user->ID){
            return;
        }

        $out = '<style type="text/css"> span.question {  cursor:pointer;  display:inline-block;  width:16px;  text-shadow:none;  height:16px;  background-color:#333;  line-height:16px;  box-shadow:0px none;  color:White;  font-size:13px;  font-weight:normal;  border-radius:8px;  text-align:center;  position:relative;  }
	 span.question:hover {  background-color:#444444;  }
	 div.tooltip {  background-color:#444444;  color:White;  box-shadow:0px none;  position:absolute;  left:28px;  top:-18px;  z-index:1000000;  width:250px;  border-radius:5px;  }
	 div.tooltip:before {  border-color:transparent #444444 transparent transparent;  border-right:6px solid #444444;  border-style:solid;  border-width:6px 6px 6px 0px;  content:"";  display:block;  height:0;  width:0;  line-height:0;  position:absolute;  top:40%;  left:-5px;  }
	 div.tooltip p {  margin:10px;  color:White;  }
	 div.updated, .login .message {  display:none;  }
	 #premiumwd-content {  min-height:0px;  }
	</style>

	<div id="premiumwd-meta-info">
	   <div id="premiumwd-meta">
		  <h1>Innovate</h1>
		  <span class="theme-version">V.1.2.1</span>
		  <ul class="theme-links">
			 <li><a class="forums" href="https://premiumwd.zendesk.com/home" target="_blank">Support Forums</a></li>
			 <li><a class="themes" href="http://www.premiumwd.com/themes/" target="_blank">More Themes</a></li>
		  </ul>
	   </div>
	</div>
	<form id="premiumwd-settings" method="post" action="">
	   <div id="premiumwd-sidebar">
		  <ul id="premiumwd-main-menu">
			 <li>
				<p><span class="premiumwd-icon-general"></span> Activate Theme</p>
			 </li>
		  </ul>
	   </div>
	   <div id="premiumwd-content">
		  <div id="pw_status" style="display:none"></div>
		  <div class="premiumwd-settings-headline">
			 <h2>Activate Theme</h2>
		  </div>
		  <table class="form-table">
			 <tr valign="top">
				<th scope="row"><label>' . __('Enter Email', THEME_DOMAIN) . ': </label></th>
				<td><input type="text" id="pw_reg_email" name="pw_reg_email" class="regular-text" value="' . $user->user_email . '"/></td>
			 </tr>
			 <tr valign="top">
				<th scope="row"><label>' . __('Enter License Key', THEME_DOMAIN) . ': </label></th>
				<td><input type="text" id="pw_reg_key" name="pw_reg_key" class="regular-text" value=""/></td>
			 </tr>
			 <tr valign="top">
				<th scope="row"><label>' . __('Enter Md5 Key', THEME_DOMAIN) . ': </label>&nbsp;<span class="question">?</span></th>
				<td><input type="text" id="pw_reg_md5_key" name="pw_reg_md5_key" class="regular-text" value=""/></td>
			 </tr>
			 <tr valign="top">
				<th scope="row"><label> </label></th>
				<td></td>
			 </tr>
		  </table>
	   </div>
	   <div id="premiumwd-footer">
		  <input type="submit" name="pw_btn" class="save-button" value="' . __('Activate Now', THEME_DOMAIN) . '"/>
	   </div>
	</form>
</div>';

echo $out . self::getInlineJs();
/*$valid = get_option('_vld_' . THEME_DOMAIN, false);
var_dump($valid);*/
}

protected static function getInlineJs(){
return '<script type="text/javascript">
   jQuery(document).ready(function($){
   $("#premiumwd-settings").submit(function(e){
       e.preventDefault();
       var btn = $(this).find(\'input[type="submit"]\');
       if("" === $("#pw_reg_key").val()){
           $("#pw_status").html(\'<p style="background-color: #FFE9E9;border: 1px solid #FBC4C4;color: #DE5959;box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.03);font-size: 13px;line-height: 18px;margin: 0 0 30px 0;padding: 14px 18px;">' . __('Please Enter Your Registration Key', THEME_DOMAIN) . '</p>\').show();
           return false;
       }
       btn.attr("disabled", true);
       $("#pw_status").html(\'<img style="float:right;margin:-5px;" src="' . get_site_url(get_current_blog_id(), 'wp-includes/js/tinymce/themes/advanced/skins/default/img/progress.gif') .'"/>\').show();
       var fData = $(this).serializeArray();
       fData.push({"name" : "action", "value" : "pw_doform"});
       fData.push({"name" : "_nonce", "value" : "' . wp_create_nonce(ThemeActuare::SLUG) . '"});
       $.post("'.get_bloginfo('url').'/wp-admin/admin-ajax.php", fData, function(data){
           if("undefined" === typeof(data.success)){
               $("#pw_status").html(\'<p style="background-color: #FFE9E9;border: 1px solid #FBC4C4;color: #DE5959;box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.03);font-size: 13px;line-height: 18px;margin: 0 0 30px 0;padding: 14px 18px;">' . __('Unspecified Registration Error', THEME_DOMAIN) . '</p>\');
               btn.attr("disabled", false);
               return;
           }
           if("1" === data.success){
               $("#pw_status").html(\'<p style="background-color: #EBF6E0;border: 1px solid #B3DC82;color: #5F9025;box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.03);font-size: 13px;line-height: 18px;margin: 0 0 30px 0;padding: 14px 18px;">\' + data.msg + \'</p>\');
   if(typeof($(document)[0]) != "undefined")
   window.location.href = $(document)[0].URL;
               return;
           }
           $("#pw_status").html(\'<p style="background-color: #FFE9E9;border: 1px solid #FBC4C4;color: #DE5959;box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.03);font-size: 13px;line-height: 18px;margin: 0 0 30px 0;padding: 14px 18px;">\' + data.msg + \'</p>\');
           btn.attr("disabled", false);
       }, "json");
       return false;
   });
   $("span.question").hover(function () {
   $(this).append("<div class=tooltip><p>(Optional) Enter the MD5 Hash Key received from admin@premiumwd.com</p></div>");
   }, function () {
   $("div.tooltip").remove();
   });
   });
</script>';
}

public static function handleForm(){
	    global $wpdb;
        if(empty($_POST['_nonce']) || false === wp_verify_nonce($_POST['_nonce'], self::SLUG)){
            die('{"success" : "0", "msg" : "' . __('Request not verified, please reload page.', THEME_DOMAIN) . '"}');
        }
		if(isset($_POST['pw_reg_md5_key']))
		{
		   if($_POST['pw_reg_md5_key'] != '' && $_POST['pw_reg_key'] != '')
		   {
		     $currDomainArr = parse_url(site_url());
		     $currDomain = $currDomainArr['host'];
			 if(!isset($_POST['pw_reg_email']) || ! is_email(self::$params['email'] = $_POST['pw_reg_email'])){
            		die('{"success" : "0", "msg" : "' . __('Please enter a valid email address', THEME_DOMAIN) . '"}');
        	 }
			 if(!isset($_POST['pw_reg_key']) || '' === (self::$params['licence_key'] = preg_replace('~[^a-z0-9\-]~i', '', $_POST['pw_reg_key']))){
				die('{"success" : "0", "msg" : "' . __('Please enter a valid license key', THEME_DOMAIN) . '"}');
			 }
			 $email = trim($_POST['pw_reg_email']);
			 $activationKey = trim($_POST['pw_reg_key']);
			 $checkMd5Gen = md5($currDomain.$email.$activationKey);
			 //die($checkMd5Gen."-----------------".trim($_POST['pw_reg_md5_key']));
			/**
			 * Get items
			 */
			 //$md5Hash = $wpdb->get_var( "SELECT `md5_key` FROM {$wpdb->prefix}woocommerce_software_licences WHERE `licence_key` = '".trim($_POST['pw_reg_act_md5_key'])."'" );
			 if($checkMd5Gen == trim($_POST['pw_reg_md5_key']))
			 {
			   //die($md5Hash);
			    self::$params['date'] = date('Y-m-d H:i:s', null);
				update_option('_vld_' . THEME_DOMAIN, new ThemeActuareVld(self::$params));
				die('{"success" : "1", "msg" : "' . __('Theme Activation Successful', THEME_DOMAIN) . '"}');
			 }  
		   }
		}

        if(!isset($_POST['pw_reg_key']) || '' === (self::$params['licence_key'] = preg_replace('~[^a-z0-9\-]~i', '', $_POST['pw_reg_key']))){
            die('{"success" : "0", "msg" : "' . __('Please enter a valid license key', THEME_DOMAIN) . '"}');
        }

        if(!isset($_POST['pw_reg_email']) || ! is_email(self::$params['email'] = $_POST['pw_reg_email'])){
            die('{"success" : "0", "msg" : "' . __('Please enter a valid email address', THEME_DOMAIN) . '"}');
        }

        //self::$params['ts'] = time();
        self::$params['product_id'] = defined('THEME_PRODUCT_ID') ? THEME_PRODUCT_ID : 0;
		self::$params['using_domain'] = get_bloginfo('template_directory')."/premiumwd-options/includes/deactivate.php";

        //self::$params['secret'] = wp_generate_password(24);
        $result = wp_remote_get($url = self::ENDPOINT . '?' .  http_build_query(self::$params));

        if(is_wp_error($result) || !isset($result['response']) || 200 !== $result['response']['code']){
		    $networkErrMsg  = 'Network Error, please try again.';
			$networkErrMsg .= '<BR />';
			$networkErrMsg .= '<p style=font-size:10px;color:red>If you see the above error continously then contact to admin at license@premiumwd.com<BR />';
			$networkErrMsg .= 'Please mention following information in email :<BR />';
			$networkErrMsg .= 'i) Domain Name (where you want to activate key).<BR />';
			$networkErrMsg .= 'ii) Email ID.<BR />';
			$networkErrMsg .= 'iii) Activation key.</p><BR />';
            die('{"success" : "0", "msg" : "' . __($networkErrMsg, THEME_DOMAIN) . '"}');
        }
        if(empty($result['body']) || null === ($response = json_decode($result['body'], true))){
            die('{"success" : "0", "msg" : "' . __('Internal Error', THEME_DOMAIN) . '"}');
        }

        //this is not a validation key, it's tied to the product
        /*if(empty($response['sig']) || !self::chkSig($response['sig'])){
            die('{"success" : "0", "msg" : "' . __('Theme Activation Error: Invalid Request.', THEME_DOMAIN) . '"}');
        }*/
        //die('{"success" : "0", "msg" : ' . json_encode($url) . '}');
        //die('{"success" : "0", "msg" : ' . json_encode(print_r(self::$params, true)) . '}');
        //die('{"success" : "0", "msg" : ' . json_encode(print_r($response, true)) . '}');

        if(!empty($response['activated']) && true === $response['activated']){
            self::$params['date'] = date('Y-m-d H:i:s', empty($response['timestamp']) ? null : $response['timestamp']);
            update_option('_vld_' . THEME_DOMAIN, new ThemeActuareVld(self::$params));
			
//			include TEMPLATEPATH. '/premiumwd-options/premiumwd_options.php';
			premiumwd_theme_activate();
            die('{"success" : "1", "msg" : "' . __('Theme Activation Successful', THEME_DOMAIN) . '"}');
        }
        die('{"success" : "0", "msg" : "' . __('Theme Activation Error: ', THEME_DOMAIN) . (isset($response['error']) ? $response['error'] : __('Please re-check your license key', THEME_DOMAIN)) . '"}');
    }

    public static function getTemplate($templates){
        return get_template_directory()  . '/content.php';
    }

    public static function showNotice(){
        $path = 'admin.php?page=' . THEME_MENU_SLUG;
        printf( '<div class="updated" style="margin:20px 10px 20px 0px;padding:5px 10px;">
    <p>' . __('Innovate Theme is currently not activated', THEME_DOMAIN) . '
        <a href="admin.php?page=premiumwd_theme_options" style="float:right;margin-top:-3px;" class="button-secondary">' . __('Activate Now', THEME_DOMAIN) . '</a>
    </p>
</div>', admin_url($path));
    }

    protected static function chkSig($query){
        $sig = array();
        parse_str($query, $sig);
        return isset($sig['secret']) ? self::$params['secret_key'] === $sig['secret'] : false;
    }
}
}

