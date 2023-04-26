<?php
$plugin = ChimpMatePro_WPMC_Assistant::get_instance();
$wpmchimpa = $plugin->wpmchimpa;
if($plugin->isload['w']){
	$plugin->loadscripts();
	$cmeta = $plugin->cmeta;
	$cmeta_cat = $plugin->cmeta_cat;
	$form = $plugin->getformbyid((isset($cmeta['Widget']['form'])?$cmeta['Widget']['form'] : (isset($cmeta_cat['Widget']['form'])?$cmeta_cat['Widget']['form'] : $wpmchimpa['widget_form'])));
	global $mcabtheme;
	$t= (isset($mcabtheme)?$mcabtheme:(isset($cmeta['Widget']['theme'])?$cmeta['Widget']['theme'] : (isset($cmeta_cat['Widget']['theme'])?$cmeta_cat['Widget']['theme'] :$wpmchimpa['widget_theme'])));
	if(!isset($form['preset']))$form['preset'] = array();
	if(isset($this->wid_count))$this->wid_count++;
	else $this->wid_count = 1;
	$wpmcw_id = "wpmchimpaw-".$this->wid_count;
	if($mcabtheme != -1)
		include( 'widget'.$t.'.php' );
}?>