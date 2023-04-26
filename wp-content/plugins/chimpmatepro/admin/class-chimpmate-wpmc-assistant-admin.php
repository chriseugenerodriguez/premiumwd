<?php
/** 
 * ChimpMate Pro - WordPress MailChimp Assistant
 *
 * @package   ChimpMate Pro - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * @link      http://voltroid.com/chimpmate
 * @copyright 2015 Voltroid
 */

/**
 *
 * @package   ChimpMate Pro - WordPress MailChimp Assistant
 * @author    Voltroid<care@voltroid.com>
 * 
 */
class ChimpMatePro_WPMC_Assistant_Admin {

	/**
	 * Instance of this class.
	 *
	 * @since    1.0.0
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Slug of the plugin screen.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_screen_hook_suffix = null;

	/**
	 * @since     1.0.0
	 */
	private function __construct() {


		add_action( 'init', array( $this, 'load_plugin' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		
		add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );

		$plugin_basename = plugin_basename( plugin_dir_path( realpath( dirname( __FILE__ ) ) ) . 'chimpmate.php' );
		add_filter( 'plugin_action_links_' . $plugin_basename, array( $this, 'add_action_links' ) );

		add_action( 'admin_head', array( $this,'admin_css' ));
		add_action( 'add_meta_boxes',  array( $this,'chimpmate_meta' ));
		add_action( 'save_post', array($this,'chimpmate_meta_save'));
		add_action( 'category_edit_form_fields', array($this,'chimpmate_meta_cat'), 10, 2 );
		add_action( 'edited_category', array($this,'chimpmate_meta_cat_save'), 10, 2 );

		add_action('wp_ajax_wpmchimpa_us_ajax', array( $this, 'wpmchimpa_update_setting' ) );
		add_action('wp_ajax_wpmchimpa_secure', array( $this, 'wpmchimpa_secure' ) );
		add_action('wp_ajax_wpmchimpa_syncom', array( $this, 'wpmchimpa_syncom' ) );
		add_action('wp_ajax_wpmchimpa_synreg', array( $this, 'wpmchimpa_synreg' ) );

 		add_action('wp_ajax_wpmchimpa_load_list', array( $this, 'wpmchimpa_load_list' ) );
		add_action('wp_ajax_wpmchimpa_load_field', array( $this, 'wpmchimpa_load_field' ) );
 		add_action('wp_ajax_wpmchimpa_prev_ajax', array( $this, 'wpmchimpa_prev' ) );
 		add_action('wp_ajax_wpmchimpa_graphdata', array( $this, 'wpmchimpa_graphdata' ) );

 		add_action('wp_ajax_wpmchimpa_ab', array( $this, 'wpmchimpa_ab' ) );
	
 		add_action('wp_ajax_wpmchimpa_tab', array( $this, 'wpmchimpa_tab' ) );
	}
	/**
	 * Ajax call to update settings from the backend.
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_update_setting(){
		$_POST = stripslashes_deep( $_POST );
		$settings_array = array_filter((array) json_decode($_POST['data'],true),array($this , 'myFilter'));
		$settings_array['theme'] = (array)$settings_array['theme'];
		foreach ($settings_array['theme'] as $key => $value)
			$settings_array['theme'][$key] = array_filter((array) $value,array($this , 'myFilter'));
		$wpmchimpa = $this->wpmchimpa;
		if (function_exists('curl_init') && function_exists('curl_setopt')){
			$up=0;if(isset($settings_array["get_email_update"])){if(!isset($wpmchimpa["get_email_update"]) || (isset($wpmchimpa["get_email_update"]) && $settings_array["email_update"] != $wpmchimpa["email_update"])){$up=1;}}else{if(isset($wpmchimpa["get_email_update"])){$up=2;}}if($up>0){$curl = curl_init();curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,CURLOPT_URL => 'http://voltroid.com/chimpmate/api.php',CURLOPT_REFERER => home_url(),CURLOPT_POST => 1));if($up==1)curl_setopt($curl, CURLOPT_POSTFIELDS, array('action' => 'subs','email' => $settings_array["email_update"]));elsecurl_setopt($curl, CURLOPT_POSTFIELDS, array('action' => 'unsubsp'));$res=curl_exec($curl);curl_close($curl);}
		}
		//wpml$json = $settings_array;
		$json = json_encode($settings_array);
		update_option('wpmchimpa_options',$json);
		die('1');
	}
	/*
	 * Call $plugin_slug from public plugin class.
	 *
	 * @TODO:
	 *
	 */
	public function load_plugin(){
		$this->plugin = ChimpMatePro_WPMC_Assistant::get_instance();
		$this->plugin_slug = $this->plugin->get_plugin_slug();

		//wpml rem delete_option('wpmchimpa_options');
		//wpml rem $_REQUEST['q'] = 'reset';
		//wpml rem $this->wpmchimpa_secure();

		$this->wpmchimpa = $this->plugin->wpmchimpa;
	}
	/**
	 * Function to remove Null Value
	 * @since    1.0.0
	 * 
	 */
	function myFilter($var){
	  return ($var !== NULL && $var !== FALSE && $var !== '');
	}
	/**
	 * Sjax call for one Click Backup and Restore
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_secure(){
		if ( !is_super_admin()) die();
		if($_REQUEST['q']=='backup'){
			$wpmchimpa = $this->wpmchimpa;
			header('Content-disposition: attachment; filename=ChimpMatePro_Backup-'.date('Y-m-d H:i:s').'.json');
			header('Content-Type: application/json');
			echo json_encode($wpmchimpa);
		}
		else if ($_REQUEST['q'] == 'restore'){
			//wpml$json = $_REQUEST['data'];
			$json = json_encode($_REQUEST['data']);
			update_option('wpmchimpa_options',$json);
		}
		else if ($_REQUEST['q'] == 'reset'){
			//wpml$json=json_decode(file_get_contents(WPMCA_PLUGIN_PATH.'src/default.json'),true);
			$json=file_get_contents(WPMCA_PLUGIN_PATH.'src/default.json');
			update_option('wpmchimpa_options',$json);
		}
		die();
	}
	/**
	 * Ajax call to load list for the given API key
	 * @since    1.0.0
	 * 
	 */
	public function wpmchimpa_load_list(){
		$_POST = stripslashes_deep( $_POST );
		$api = $_POST['api_key'];
		$MailChimp = new ChimpMatePro_WPMC_MailChimp($api);
		$result=$MailChimp->get('/lists/?count=50&offset=0');
		if($result['total_items'] == 0){
			$lists =array("stat" => "0");
	    }
	   else{
	   		$list = array();
	   		foreach($result['lists'] as $mclist){
					array_push($list, array(
							"id" => $mclist['id'],
							"name" => $mclist['name']));
			}
	   		for($i=50;$result['total_items'] > 50;$i+=50,$result['total_items']-=50){
				$res=$MailChimp->get('/lists/?count=50&offset='.$i);
		   		foreach($res['lists'] as $mclist){
						array_push($list, array(
								"id" => $mclist['id'],
								"name" => $mclist['name']));
				}
	   		}
			$lists =array("stat" => "2", 
				"lists" => $list);
	   }
	   print(json_encode($lists));
	   die();
	}

	/**
	 * Ajax call to retrieve fields
	 * @since    1.0.3
	 * 
	 */
	public function wpmchimpa_load_field(){
		$_POST = stripslashes_deep( $_POST );
		$api = $_POST['api_key'];
		$list = $_POST['list'];
		$MailChimp = new ChimpMatePro_WPMC_MailChimp($api);
		print(json_encode(array($this->retrieve_groups($list,$MailChimp), $this->retrieve_fields($list,$MailChimp))));
		die();
	}
	function retrieve_groups($list,$MailChimp){
		$groups_result =  $MailChimp->get('/lists/'.$list.'/interest-categories?count=50');
		$groups = array();
		if($groups_result['total_items'] > 0){
			foreach ($groups_result['categories'] as $grouping) {
				$g = array();
				$g['id'] = $grouping['id'];
				$g['name'] = $grouping['title'];
				$g['label'] = $grouping['title'];
				$g['type'] = $grouping['type'];
				$g['cat'] = 'group';
				$s = array();
				$i = 0;$gtot = false;
				do {
					$res=$MailChimp->get('/lists/'.$list.'/interest-categories/'.$grouping['id'].'/interests?count=50&offset='.$i);
					if(!$gtot)$gtot = $res['total_items'];
					foreach ($res['interests'] as $group) {
						$t = array();
						$t['id']=$group['id'];
						$t['gname']=$group['name'];
						array_push($s, $t);
					}
					$i+=50;$gtot-=50;
				} while ($gtot > 50);
				$g['groups'] = $s;
				array_push($groups,$g);
			}
		}
		return $groups;
	}

	function retrieve_fields($list,$MailChimp){
		$groups_result =  $MailChimp->get('/lists/'.$list.'/merge-fields?count=50');
		$groups = array(array("name"=>"Email address","icon"=>"idef","label"=>"Email address","tag"=>"email","type"=>"email","req"=>true,"cat"=>"field"));
		if($groups_result['total_items'] > 0){
			foreach ($groups_result['merge_fields'] as $grouping) {
				if($grouping['type'] == 'address')continue;
				$g = array();
				$g['name'] = $grouping['name'];
				$g['icon'] = 'idef';
				$g['label'] = $grouping['name'];
				$g['tag'] = $grouping['tag'];
				$g['type'] = $grouping['type'];
				$g['opt'] = $grouping['options'];
				$g['req'] = $grouping['required'];
				$g['cat'] = 'field';
				array_push($groups,$g);
			}
		}
		return $groups;
	}
	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Register and enqueue admin-specific style sheet.
	 * @since     1.0.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_styles() {

		if ( ! isset( $this->plugin_screen_hook_suffix ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( $this->plugin_screen_hook_suffix == $screen->id ) {
			wp_enqueue_style( $this->plugin_slug .'-admin-styles', WPMCA_PLUGIN_URL. 'admin/assets/css/admin.css', array(), ChimpMatePro_WPMC_Assistant::VERSION );
			wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Raleway|Roboto:300');
            wp_enqueue_style( 'googleFonts');
		}

	}

	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since     1.0.0
	 *
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_scripts() {

		if ( ! isset( $this->plugin_screen_hook_suffix ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( $this->plugin_screen_hook_suffix == $screen->id ) {

			$this->wpmchimpa_abtimeout();
			$wpmchimpa = $this->wpmchimpa;
			global $wpmchimpa_demoapi;
			if (isset($wpmchimpa_demoapi)){
				$wpmchimpa['api_key']=$wpmchimpa_demoapi['api'];
				$wpmchimpa['lists']=$wpmchimpa_demoapi['list'];
				$wpmchimpa['cforms']=$wpmchimpa_demoapi['form'];
			}
			$wpmchimpa_ab = json_decode(get_option('wpmchimpa_abtest'),true);
			unset($wpmchimpa_ab['record']);
			$wpmchimpa_ab['countdown'] = 0;
			if(isset($wpmchimpa_ab['end']))
				$wpmchimpa_ab['countdown']=strtotime($wpmchimpa_ab['end']) - time();
			$opt['goog_fonts']=json_decode(file_get_contents(WPMCA_PLUGIN_PATH.'src/google_fonts.json'),true);
			$opt['web_fonts']=$this->plugin->webfont();
			$opt['svglist']=$this->plugin->svglist();
			$opt['iconlist']=$this->plugin->iconlist();
			wp_enqueue_script('jquery');
			wp_enqueue_script( $this->plugin_slug . '-admin-script', WPMCA_PLUGIN_URL. 'admin/assets/js/admin.js', array( 'jquery'), ChimpMatePro_WPMC_Assistant::VERSION );
			wp_localize_script( $this->plugin_slug . '-admin-script',  'wpmchimpa_admin_script', array( 'ajaxurl' =>admin_url('admin-ajax.php')));
			wp_localize_script( $this->plugin_slug . '-admin-script', 'wpmchimpa', $wpmchimpa );
			wp_localize_script( $this->plugin_slug . '-admin-script', 'wpmchimpa_ab', $wpmchimpa_ab );
			wp_localize_script( $this->plugin_slug . '-admin-script', 'wpmcopt', $opt );
			wp_register_script( 'angular-core', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.min.js', ChimpMatePro_WPMC_Assistant::VERSION );
			wp_enqueue_script('angular-core');
			wp_enqueue_script( $this->plugin_slug . '-admin-script2', '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', ChimpMatePro_WPMC_Assistant::VERSION );
			wp_enqueue_media();
		}

	}

	/**
	 * Voltroid Control Panel Icon
	 * @since    1.0.0
	 * 
	 */
public function admin_css() {
		?>
<style>

@font-face {
  font-family: "vapanel_fonts";
  src:url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.eot");
  src:url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.eot?#iefix") format("embedded-opentype"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.woff") format("woff"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.ttf") format("truetype"),
    url("<?php echo WPMCA_PLUGIN_URL;?>assets/fonts/vapanel_fonts.svg#vapanel_fonts") format("svg");
  font-weight: normal;
  font-style: normal;
}
#toplevel_page_chimpmatepro .wp-menu-image::before{
	content :'\c032';
	font-family: "vapanel_fonts"!important;
	font-size:17px;
}

</style>

		<?php }
	
	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */
	public function add_plugin_admin_menu() {

		$this->plugin_screen_hook_suffix = add_menu_page(
			__( 'ChimpMate', $this->plugin_slug ),
			__( 'ChimpMate', $this->plugin_slug ),
			'chimpmate_cap',
			$this->plugin_slug,
			array( $this, 'display_plugin_admin_page' ),
			'none' , 85
		);
		$role = get_role( 'administrator' );
		$role->add_cap( 'chimpmate_cap' );
		add_submenu_page($this->plugin_slug,$this->plugin_slug,$this->plugin_slug,'chimpmate_cap',$this->plugin_slug,array( $this, 'display_plugin_admin_page' ));
		remove_submenu_page( $this->plugin_slug, $this->plugin_slug );
		add_submenu_page( $this->plugin_slug,'General','General','chimpmate_cap',$this->plugin_slug.'#general',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Lightbox', 'Lightbox','chimpmate_cap', $this->plugin_slug.'#lightbox',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Slider', 'Slider','chimpmate_cap', $this->plugin_slug.'#slider',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Widget', 'Widget','chimpmate_cap', $this->plugin_slug.'#widget',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Addon', 'Addon','chimpmate_cap', $this->plugin_slug.'#addon',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Statistics', 'Statistics','chimpmate_cap', $this->plugin_slug.'#statistics',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'A/B Testing', 'A/B Testing','chimpmate_cap', $this->plugin_slug.'#abtest',array( $this, 'display_plugin_admin_page' ));
		add_submenu_page( $this->plugin_slug, 'Advanced', 'Advanced','chimpmate_cap', $this->plugin_slug.'#advanced',array( $this, 'display_plugin_admin_page' ));
	}


	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	public function display_plugin_admin_page() {
		
		include_once( 'views/admin.php' );
	}

	/**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	public function add_action_links( $links ) {

		return array_merge(
			array(
				'settings' => '<a href="' . admin_url( 'admin.php?page=' . $this->plugin_slug ) . '">' . __( 'Settings', $this->plugin_slug ) . '</a>'
			),
			$links
		);

	}
	/**
	 * Render Preview of the requested theme
	 *
	 * @since    1.0.0
	 */
	public function wpmchimpa_prev(){
		include_once( 'includes/'.$_GET['type'].$_GET['theme'].'.php' );
		die();
	}
	public function wpmchimpa_tab(){
		$tab = $_GET['tab'];
		include_once( 'views/admin_opt.php' );
		die();
	}
	/**
	 * Compute the data for Instant Analytics
	 *
	 * @since    1.0.0
	 */
	public function wpmchimpa_graphdata(){
		global $wpmchimpa_demochart;if (isset($wpmchimpa_demochart))die($wpmchimpa_demochart);
		$wpmchimpa = $this->wpmchimpa;
		//$api = $wpmchimpa['api_key'];
		$api = $_GET['api'];
		$list = $_GET['list'];
		if(!isset($api) || !isset($list))die(0);
		$MailChimp = new ChimpMatePro_WPMC_MailChimp($api);
		$result=$MailChimp->get('/lists/'.$list.'/activity/?count=180');
		$res['subs'] = $res['unsubs'] = $res['date'] = $res['sent'] = $res['open'] = $res['click'] = $res['bounce']= array();
		$ot = $ct = $st = 0;
		foreach ($result['activity'] as $stat) {
			array_push($res['subs'], $stat['subs'] + $stat['other_adds']);
			array_push($res['unsubs'], $stat['unsubs'] + $stat['other_removes']);
			array_push($res['sent'], $stat['emails_sent']);
			array_push($res['open'], $stat['unique_opens']);
			array_push($res['click'], $stat['recipient_clicks']);
			array_push($res['bounce'], $stat['hard_bounce'] + $stat['soft_bounce']);
			$ot+=$stat['unique_opens'];
			$st+=$stat['emails_sent'];
			$ct+=$stat['recipient_clicks'];
			array_push($res['date'], $stat['day']);
		}
		$MC = new ChimpMatePro_WPMC_MailChimp1($api);
		$result = $MC->call('lists/locations', array('id' => $list));
		$out['chart'] = $res;
		$out['map'] = $result;
		echo json_encode($out);
		die();
	}
	/**
	 * Initialize/Terminate functions of a/b testing
	 *
	 * @since    1.0.0
	 */
	public function wpmchimpa_ab(){
		$_GET = stripslashes_deep($_GET);
		switch ($_GET['act']) {
			case 0:
		$opt['status']=2;
		$opt['start'] = date('Y-m-d H:i:s');
		$opt['end'] = date('Y-m-d H:i:s',strtotime("+".$_GET['dur']." day"));
		$opt['theme'] = array();
		$opt['theme'] = json_decode($_GET['theme'],true);
		$res = strtotime($opt['end']) - time();
		update_option('wpmchimpa_abtest',json_encode($opt));
		echo $res;
				
				break;
			case 1:
		$opt = json_decode(get_option('wpmchimpa_abtest'),true);
		$opt['status'] = 1;
		update_option('wpmchimpa_abtest',json_encode($opt));
		echo $this->wpmchimpa_abcalc();
		break;
			default:
				# code...
				break;
		}
		
		die();
	}
	/**
	 * Terminate and Computing the result with the help of collected data
	 *
	 * @since    1.0.0
	 */
	public function wpmchimpa_abcalc(){
		$abdata = json_decode(get_option('wpmchimpa_abtest'),true);
		if(!current_user_can('manage_options'))$abdata = json_decode('{"status":1,"start":"2015-02-25","end":"2015-03-04","theme":["2","4"],"record":[{"date":"2015-02-25","theme":4,"act":1},{"date":"2015-02-25","theme":2,"act":1},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":4,"act":0},{"date":"2015-02-25","theme":2,"act":0},{"date":"2015-02-25","theme":4,"act":1}]}',true);
		foreach ($abdata['theme'] as $value) {
			$data[$value][0]=0;
			$data[$value][1]=0;
		}
		if(isset($abdata['record'])){
			foreach ($abdata['record'] as $rec)
				$data[$rec['theme']][$rec['act']]+=1;
			$res=array();
			$tot=0;
			foreach ($data as $key => $value) {
				$t['theme']=$key;
				$t['rate']=($value[0] == 0)? 0 : round(($value[1]/$value[0]*100),2);
				$tot+=$t['rate'];
				array_push($res, $t);
			}
			if($tot==0)return 0;
			$final['rec']=$res;
			$fr['rate']=$fr['theme']=-1;
			foreach ($res as $value) {
				$frt= ($value['rate']/$tot)*100;
				if($fr['rate'] < $frt){
					$fr['rate']=round($frt,0);
					$fr['theme']=$value['theme'];
				}
			}
			$final['res']=$fr;
			$abdata['calc']=$final;
			unset($abdata['record']);
			update_option('wpmchimpa_abtest',json_encode($abdata));
			return json_encode($final);
		}
		else return 0;
	}
	/**
	 * Trigger Termination of a/b testing functions if time is out
	 *
	 * @since    1.0.0
	 */
	public function wpmchimpa_abtimeout(){
		if(isset($abdata) && $abdata['status'] == 2){
  			if(strtotime($abdata['end']) < time()){
  				$this->wpmchimpa_abcalc();
  			}
  		}
	}
	public function wpmchimpa_syncom(){
		$emails = array();
		foreach (get_comments() as $comment){
			array_push($emails, array('email' => array('email'=>$comment->comment_author_email)));
		}
		if(empty($emails))die('1');
		$this->wpmchimpa_batchsubs($emails);
	}
	public function wpmchimpa_synreg(){
		$emails = array();
		foreach ( get_users() as $user ) {
			if(isset($_GET['role']) && in_array($user->roles[0], $_GET['role']))
				array_push($emails, array('email' => array('email'=>$user->user_email)));
		}
		if(empty($emails))die('0');
		$this->wpmchimpa_batchsubs($emails);
	}
	public function wpmchimpa_batchsubs($emails){
		$api = $_GET['api'];
		$list = $_GET['list'];
		if(empty($api) || empty($list)){ die("0");}
		$MailChimp = new ChimpMatePro_WPMC_MailChimp1($api);
		$opt_in = $this->wpmchimpa['opt_in'];
		$options =array(
                'id'                => $list,
                'batch'             => $emails,
                'double_optin'      => $_GET['optin'],
                'update_existing'   => false
            );
		$result = $MailChimp->call('/lists/batch-subscribe', $options);
		if( $result['status'] === 'error' ) {
			echo json_encode($result);
		}
		else{
			echo 1;
		}
		die();
	}
	public function chimpmate_meta(){
		add_meta_box( 'chimpmate_meta', 'ChimpMate Settings', array($this,'chimpmate_meta_content'), 'post', 'normal', 'default' );
		add_meta_box( 'chimpmate_meta', 'ChimpMate Settings', array($this,'chimpmate_meta_content'), 'page', 'normal', 'default' );
	}
	public function chimpmate_meta_content($cmeta){

		$themes = array(
				'4'=>'Smash',
				'2'=>'Material',
				'7'=>'Material Lite',
				'3'=>'Onamy',
				'6'=>'Unidesign',
				'5'=>'Glow',
				'1'=>'Epsilon',
				'8'=>'Nova',
				'9'=>'Leo',
				'0'=>'Basic'
			);
		$feats = array('Lightbox','Slider','Widget','Addon','Topbar','Flipbox');
		wp_nonce_field( 'my_chimpmate_meta_nonce', 'chimpmate_meta_nonce' );
		global $post;
	    $values = get_post_custom( $post->ID );
	    $cmeta = isset( $values['chimpmate_meta'] ) ?json_decode($values['chimpmate_meta'][0],true) : ''; 
	    $this->chimpmate_meta_cont($cmeta);
	}
	public function chimpmate_meta_save($post_id){
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if( !isset( $_POST['chimpmate_meta_nonce'] ) || !wp_verify_nonce( $_POST['chimpmate_meta_nonce'], 'my_chimpmate_meta_nonce' ) ) return;
		if( !current_user_can( 'edit_post' ) ) return;

		if(isset($_POST['chimpmate_meta'])){
			foreach ($_POST['chimpmate_meta'] as $key => $value) {
				$_POST['chimpmate_meta'][$key] = array_filter($value,array($this , 'myFilter'));
			}
			$n = json_encode($_POST['chimpmate_meta']);
        	update_post_meta( $post_id, 'chimpmate_meta',  $n );
        }
	}
				 
	function chimpmate_meta_cat( $tag, $taxonomy ) {
		wp_nonce_field( 'my_chimpmate_meta_nonce', 'chimpmate_meta_nonce' );
	    $option_name = 'chimpmate_meta_cat_' . $tag->term_id;
	    $chimpmate_meta_cat = get_option( $option_name );
	 	$cmeta = isset( $chimpmate_meta_cat ) ?json_decode($chimpmate_meta_cat,true) : ''; 
	?>
	<tr class="form-field" id="chimpmate_meta">
		<th scope="row" valign="top">ChimpMate Settings</th>
		<td><?php $this->chimpmate_meta_cont($cmeta);?></td>
	</tr>
	<?php
	}
				 
				 
	function chimpmate_meta_cat_save( $term_id, $tt_id ) {
	 	if( !isset( $_POST['chimpmate_meta_nonce'] ) || !wp_verify_nonce( $_POST['chimpmate_meta_nonce'], 'my_chimpmate_meta_nonce' ) ) return;
		if(isset($_POST['chimpmate_meta'])){
			foreach ($_POST['chimpmate_meta'] as $key => $value) {
				$_POST['chimpmate_meta'][$key] = array_filter($value,array($this , 'myFilter'));
			}
			$n = json_encode($_POST['chimpmate_meta']);
			$option_name = 'chimpmate_meta_cat_' . $term_id;
        	update_option( $option_name, $n );
        }
	}
	function chimpmate_meta_cont($cmeta){
	 		$themes = array(
				'4'=>'Smash',
				'2'=>'Material',
				'7'=>'Material Lite',
				'3'=>'Onamy',
				'6'=>'Unidesign',
				'5'=>'Glow',
				'1'=>'Epsilon',
				'8'=>'Nova',
				'9'=>'Leo',
				'0'=>'Basic'
			);
		$feats = array('Lightbox','Slider','Widget','Addon','Topbar','Flipbox');
				foreach ($feats as $key => $value) {
			?>
    <div class="wpmc_section">
    	<div class="wpmc_head"><?=$value?></div>
    	<div class="wpmc_body">
    		<div class="wpmc_opt">
				<label for="<?=$value?>status">Status</label>
		        <select name="chimpmate_meta[<?=$value?>][status]" id="<?=$value?>status">
					<option value="">Default</option>
					<option value="1" <?php selected( (isset($cmeta[$value]['status']))?$cmeta[$value]['status'] : '', '1' );?>>Enable</option>
					<option value="0" <?php selected( (isset($cmeta[$value]['status']))?$cmeta[$value]['status'] : '', '0' );?>>Disable</option>
				</select>
			</div>
    		<div class="wpmc_opt">
				<label for="<?=$value?>theme">Theme</label>
		        <select name="chimpmate_meta[<?=$value?>][theme]" id="<?=$value?>theme">
					<option value="">Default</option>
					<?php
						foreach ($themes as $k => $v) {
							echo '<option value="'.$k.'" '.selected( (isset($cmeta[$value]['theme']))?$cmeta[$value]['theme'] : '', $k ) .'>'.$v.'</option>';
						}
					?>
				</select>
			</div>
    		<div class="wpmc_opt">
				<label for="<?=$value?>form">Form</label>
		        <select name="chimpmate_meta[<?=$value?>][form]" id="<?=$value?>form">
					<option value="">Default</option>
					<?php
						foreach ($this->wpmchimpa['cforms'] as $v) {
							echo '<option value="'.$v['id'].'" '.selected( (isset($cmeta[$value]['form']))?$cmeta[$value]['form'] : '', $v['id'] ) .'>'.$v['name'].'</option>';
						}
					?>
				</select>
			</div>
			<div style="clear:both"></div>
		</div>
    </div>
		<?php } ?>
<style type="text/css">
	#chimpmate_meta .wpmc_head{font-weight: bold;}
	#chimpmate_meta .wpmc_section{padding: 10px; border-bottom: 1px solid #DADADA;}
	#chimpmate_meta .wpmc_body{margin-left: 20px}
	#chimpmate_meta .wpmc_opt{float: left;margin-right:40px; }
</style><?php
	}

}
