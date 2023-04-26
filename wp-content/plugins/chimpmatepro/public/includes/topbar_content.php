<?php 
$wpmchimpa = $this->wpmchimpa;
$cmeta = $this->cmeta;
$cmeta_cat = $this->cmeta_cat;
$form = $this->getformbyid((isset($cmeta['Topbar']['form'])?$cmeta['Topbar']['form'] : (isset($cmeta_cat['Topbar']['form'])?$cmeta_cat['Topbar']['form'] : $wpmchimpa['topbar_form'])));
$fields = array();
foreach ($form['fields'] as $v) {
  if((isset($v['eft']) && $v['eft'] == true) || ($v['tag']=='email'))
    array_push($fields, $v);
}
if(!isset($form['preset']))$form['preset'] = array();
global $mcabtheme;
$t= (isset($mcabtheme)?$mcabtheme:(isset($cmeta['Topbar']['theme'])?$cmeta['Topbar']['theme'] : (isset($cmeta_cat['Topbar']['theme'])?$cmeta_cat['Topbar']['theme'] :$wpmchimpa['addon_theme'])));
if($mcabtheme != -1)
include( 'topbar'.$t.'.php' );
?>