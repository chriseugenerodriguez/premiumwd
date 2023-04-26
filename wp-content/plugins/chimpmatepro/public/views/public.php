<?php
$wpmchimpa = $this->wpmchimpa;
$cmeta = $this->cmeta;
$cmeta_cat = $this->cmeta_cat;
$form = $this->getformbyid((isset($cmeta['Lightbox']['form'])?$cmeta['Lightbox']['form'] : (isset($cmeta_cat['Lightbox']['form'])?$cmeta_cat['Lightbox']['form'] : $wpmchimpa['lite_form'])));
global $mcabtheme;
$t= (isset($mcabtheme)?$mcabtheme:(isset($cmeta['Lightbox']['theme'])?$cmeta['Lightbox']['theme'] : (isset($cmeta_cat['Lightbox']['theme'])?$cmeta_cat['Lightbox']['theme'] :$wpmchimpa['litebox_theme'])));
$scroll=0;
if(!isset($form['preset']))$form['preset'] = array();
if(isset($form['scroll']))$scroll=1;
if($mcabtheme != -1)
include_once( 'litebox'.$t.'.php' );
?>
