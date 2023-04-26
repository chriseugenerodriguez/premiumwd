<?php 
$wpmchimpa = $this->wpmchimpa;
$cmeta = $this->cmeta;
$cmeta_cat = $this->cmeta_cat;
$form = $this->getformbyid((isset($cmeta['Addon']['form'])?$cmeta['Addon']['form'] : (isset($cmeta_cat['Addon']['form'])?$cmeta_cat['Addon']['form'] : $wpmchimpa['addon_form'])));
global $mcabtheme;
$t= (isset($mcabtheme)?$mcabtheme:(isset($cmeta['Addon']['theme'])?$cmeta['Addon']['theme'] : (isset($cmeta_cat['Addon']['theme'])?$cmeta_cat['Addon']['theme'] :$wpmchimpa['addon_theme'])));
if(!isset($form['preset']))$form['preset'] = array();
if($mcabtheme != -1)
include( 'addon'.$t.'.php' );
?>