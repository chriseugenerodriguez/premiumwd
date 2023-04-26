<?php 
$wpmchimpa = $this->wpmchimpa;
$cmeta = $this->cmeta;
$cmeta_cat = $this->cmeta_cat;
$form = $this->getformbyid((isset($cmeta['Flipbox']['form'])?$cmeta['Flipbox']['form'] : (isset($cmeta_cat['Flipbox']['form'])?$cmeta_cat['Flipbox']['form'] : $wpmchimpa['flipbox_form'])));
global $mcabtheme;
$t= (isset($mcabtheme)?$mcabtheme:(isset($cmeta['Flipbox']['theme'])?$cmeta['Flipbox']['theme'] : (isset($cmeta_cat['Flipbox']['theme'])?$cmeta_cat['Flipbox']['theme'] :$wpmchimpa['addon_theme'])));
if(!isset($form['preset']))$form['preset'] = array();
if($mcabtheme != -1)
include( 'flipbox'.$t.'.php' );
?>