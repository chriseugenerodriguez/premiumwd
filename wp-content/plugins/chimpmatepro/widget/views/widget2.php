<?php
$theme = $wpmchimpa['theme']['w2'];
$theme['widget_msg'] = htmlspecialchars_decode($theme['widget_msg']);
$plugin->social=true;
$plugin->extrascript(1);
 ?>
 <style type="text/css">

#<?=$wpmcw_id?> {
margin: 20px 0;
background: #fff;
text-align: center;
width: 100%;
overflow: hidden;
<?php  if(isset($theme["widget_bg_c"])){
    echo 'background-color:'.$theme["widget_bg_c"].';';
}?>
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}

#<?=$wpmcw_id?> h3{
width: 100%;
line-height: 55px;
position: relative;
padding-left: 40px;
margin-bottom:10px;
color: #fff;
font-size: 20px;
background: #0188cc;
<?php 
    if(isset($theme["widget_heading_f"])){
      echo 'font-family:'.$theme["widget_heading_f"].';';
    }
    if(isset($theme["widget_heading_fs"])){
        echo 'font-size:'.$theme["widget_heading_fs"].'px;';
        echo 'line-height:'.$theme["widget_heading_fs"].'px;';
    }
    if(isset($theme["widget_heading_fw"])){
        echo 'font-weight:'.$theme["widget_heading_fw"].';';
    }
    if(isset($theme["widget_heading_fst"])){
        echo 'font-style:'.$theme["widget_heading_fst"].';';
    }
    if(isset($theme["widget_heading_fc"])){
        echo 'color:'.$theme["widget_heading_fc"].';';
    }
    if(isset($theme["widget_hbg_c"])){
        echo 'background-color:'.$theme["widget_hbg_c"].';';
    }
?>
}

#<?=$wpmcw_id?> h3::before{
content:'';
background:<?php echo $plugin->getIcon('opt1',20,(isset($theme["widget_hi_c"]))?$theme["widget_hi_c"]:'#fff');?> no-repeat center;
position: absolute;
top: 0;
left: 0;
width: 40px;
height: 60px;
}
#<?=$wpmcw_id?> .wpmchimpa_para{
margin: 20px 10px 10px;
}
#<?=$wpmcw_id?> .wpmchimpa_para,#<?=$wpmcw_id?> .wpmchimpa_para * {
font-size: 12px;
color: #000;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["widget_msg_f"])){
  echo 'font-family:'.$theme["widget_msg_f"].';';
}if(isset($theme["widget_msg_fs"])){
    echo 'font-size:'.$theme["widget_msg_fs"].'px;';
}?>
}
#<?=$wpmcw_id?> form{
  margin:0 5px;
}
#<?=$wpmcw_id?> .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
text-align: left;
<?php 
  if(isset($theme["widget_tbox_w"])){
      echo 'width:'.$theme["widget_tbox_w"].'px;';
  }
?>
}
#<?=$wpmcw_id?> .inputicon{
display: none;
}
#<?=$wpmcw_id?> .wpmc-ficon .inputicon {
display: block;
width: 30px;
height: 30px;
position: absolute;
top: 0;
right: 0;
pointer-events: none;
<?php 
if(isset($theme["widget_tbox_h"])){
  echo 'width:'.$theme["widget_tbox_h"].'px;';
  echo 'height:'.$theme["widget_tbox_h"].'px;';
}
?>
}
#<?=$wpmcw_id?> .wpmc-ficon input[type="text"],
#<?=$wpmcw_id?> .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-right: 30px;
  <?php 
if(isset($theme["widget_tbox_h"])){
  echo 'padding-left:'.$theme["widget_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["widget_inico_c"]))? $theme["widget_inico_c"] : '#000');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a06';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c04';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '#'.$wpmcw_id.' .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$plugin->getIcon($fi,25,$col).' no-repeat center}';
}
?>
#<?=$wpmcw_id?> .wpmchimpa-field select,
#<?=$wpmcw_id?> input[type="text"]{
  font-size:15px;
  padding: 0 5px;
  display:inline-block;
  width:100%;
  height: 30px;
  border:none;
  border-bottom:1px solid #757575;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  <?php 
    if(isset($theme["widget_tbox_f"])){
      echo 'font-family:'.$theme["widget_tbox_f"].';';
    }
    if(isset($theme["widget_tbox_fs"])){
        echo 'font-size:'.$theme["widget_tbox_fs"].'px;';
    }
    if(isset($theme["widget_tbox_fw"])){
        echo 'font-weight:'.$theme["widget_tbox_fw"].';';
    }
    if(isset($theme["widget_tbox_fst"])){
        echo 'font-style:'.$theme["widget_tbox_fst"].';';
    }
    if(isset($theme["widget_tbox_bgc"])){
        echo 'background:'.$theme["widget_tbox_bgc"].';';
    }
    if(isset($theme["widget_tbox_w"])){
        echo 'width:'.$theme["widget_tbox_w"].'px;';
    }
    if(isset($theme["widget_tbox_h"])){
        echo 'height:'.$theme["widget_tbox_h"].'px;';
    }
    if(isset($theme["widget_tbox_bor"]) && isset($theme["widget_tbox_borc"])){
        echo ' border-bottom:'.$theme["widget_tbox_bor"].'px solid '.$theme["widget_tbox_borc"].';';
    }
  ?>
}


#<?=$wpmcw_id?> .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 30px;
height: 30px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$plugin->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["widget_tbox_h"])){
  echo 'width:'.$theme["widget_tbox_h"].'px;';
  echo 'height:'.$theme["widget_tbox_h"].'px;';
}
?>
}
#<?=$wpmcw_id?> .wpmchimpa-field select:focus{
  border-color:#0188cc;
    <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'border-color:'.$theme["widget_tbox_fc"].';';
  }
   ?>
}
#<?=$wpmcw_id?> input[type="text"] ~ .inputlabel{
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all;
  color:#999;
  font-size:15px;
  font-weight:normal;
  cursor:default;
  position:absolute;
  pointer-events: none;
top: 0;
left: 0;
right: 0;
width: 100%;
line-height: 30px;
padding: 0 5px;
white-space: nowrap;
  <?php
  if(isset($theme["widget_tbox_f"])){
    echo 'font-family:'.$theme["widget_tbox_f"].';';
  }
  if(isset($theme["widget_tbox_fs"])){
      echo 'font-size:'.$theme["widget_tbox_fs"].'px;';
  }
  if(isset($theme["widget_tbox_fw"])){
      echo 'font-weight:'.$theme["widget_tbox_fw"].';';
  }
  if(isset($theme["widget_tbox_fst"])){
      echo 'font-style:'.$theme["widget_tbox_fst"].';';
  }
  ?>
}

#<?=$wpmcw_id?> input:focus ~ .inputlabel, #<?=$wpmcw_id?> input:valid ~ .inputlabel {
  top:-7px;
  font-size:12px;
  color:#0188cc;
  line-height: 12px;
  padding-left: 3px;
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'color:'.$theme["widget_tbox_fc"].';';
  }
   ?>
}

#<?=$wpmcw_id?> .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%; 
<?php 
    if(isset($theme["widget_tbox_w"])){
        echo 'width:'.$theme["widget_tbox_w"].'px;';
    }
?>
}
#<?=$wpmcw_id?> .wpmchimpa-field .bar:before, #<?=$wpmcw_id?> .wpmchimpa-field .bar:after   {
  content:'';
  height:1px; 
  width:0;
  top:-1px; 
  position:absolute;
  background:#0188cc; 
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all; 
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'background-color:'.$theme["widget_tbox_fc"].';';
  }
   ?>
}
#<?=$wpmcw_id?> .wpmchimpa-field .bar:before {
  left:50%;
}
#<?=$wpmcw_id?> .wpmchimpa-field .bar:after {
  right:50%; 
}
#<?=$wpmcw_id?> .wpmchimpa-field input:focus ~ .bar:before, #<?=$wpmcw_id?> .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
#<?=$wpmcw_id?> .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:14%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["widget_tbox_w"])){
        echo 'width:'.$theme["widget_tbox_w"].'px;';
    }
?>
}
#<?=$wpmcw_id?> .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterwa 0.3s ease;
  animation:inputHighlighterwa 0.3s ease;
}
@-webkit-keyframes inputHighlighterwa {
  from { background:#0188cc;
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'background-color:'.$theme["widget_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterwa {
  from { background:#0188cc;
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'background-color:'.$theme["widget_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

#<?=$wpmcw_id?> select.wpmcerror,
#<?=$wpmcw_id?> input[type="text"].wpmcerror{
  border-color: red;
}
#<?=$wpmcw_id?> .wpmchimpa-check *,
#<?=$wpmcw_id?> .wpmchimpa-radio *{
<?php
if(isset($theme["widget_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["widget_check_f"]).';';
}
if(isset($theme["widget_check_fs"])){
    echo 'font-size:'.$theme["widget_check_fs"].'px;';
}
if(isset($theme["widget_check_fw"])){
    echo 'font-weight:'.$theme["widget_check_fw"].';';
}
if(isset($theme["widget_check_fst"])){
    echo 'font-style:'.$theme["widget_check_fst"].';';
}
if(isset($theme["widget_check_fc"])){
    echo 'color:'.$theme["widget_check_fc"].';';
}
?>
}
#<?php echo $wpmcw_id;?> .wpmchimpa-item{
  <?php 
    if(isset($theme["widget_check_pline"])){
      if($theme["widget_check_pline"] == 'f'){
        ?> margin-right: 5px; <?php
      }
      else $pline = $theme["widget_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
#<?=$wpmcw_id?> .wpmchimpa-item input {
  display: none;
}
#<?=$wpmcw_id?> .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  line-height: 20px;
  margin-right: 10px;
-webkit-backface-visibility:hidden;
}

#<?=$wpmcw_id?> .wpmchimpa-item span:before,
#<?=$wpmcw_id?> .wpmchimpa-item span:after {
content: '';
display: inline-block;
width: 12px;
height: 12px;
left: 0;
top: 4px;
position: absolute;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
-webkit-transform-origin: left;
transform-origin: left;
}
.wpmchimpa-item span:before {
border:1px solid #0188cc;
border-radius: 1px;
opacity: 1;
  <?php
    if(isset($theme["widget_check_borc"])){
        echo 'border:1px solid '.$theme["widget_check_borc"].';';
 }   if(isset($theme["widget_check_c"])){
        echo 'background-color:'.$theme["widget_check_c"].';';
 }?>
}
#<?=$wpmcw_id?> input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
#<?=$wpmcw_id?> input[type='checkbox'] + span:after {
-webkit-transform:rotate(43deg);
transform:rotate(43deg);
opacity: 0;
width: 20px;
height: 15px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["widget_check_mark"])){$tfi=$theme["widget_check_mark"];}
        $tfc='#0188cc';
        if(isset($theme["widget_check_ic"])){$tfc=$theme["widget_check_ic"];}
        echo $plugin->getIcon($tfi,20,$tfc);?>;
}
#<?=$wpmcw_id?> input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
#<?=$wpmcw_id?> .wpmchimpa-item input[type='radio'] + span:before ,
#<?=$wpmcw_id?> .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
#<?=$wpmcw_id?> .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
#<?=$wpmcw_id?> .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}
#<?=$wpmcw_id?> .wpmcinfierr{
  display: block;
  height: 14px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -12px;
  font-size: 10px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["widget_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["widget_status_f"]).';';
    }
    if(isset($theme["widget_status_fw"])){
        echo 'font-weight:'.$theme["widget_status_fw"].';';
    }
    if(isset($theme["widget_status_fst"])){
        echo 'font-style:'.$theme["widget_status_fst"].';';
    }
  ?>
}

#<?=$wpmcw_id?> .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
width: 100%;
color: #fff;
font-size: 18px;
border: 1px solid #0284C5;
background-color: #0188cc;
height: 36px;
line-height: 36px;
padding: 0 5px;
text-align: left;
cursor: pointer;
  -webkit-transition:  box-shadow 0.3s;
  transition:  box-shadow 0.3s;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
position: relative;
overflow: hidden;
margin-bottom: 10px;
 <?php
if(isset($theme["widget_button_f"])){
  echo 'font-family:'.$theme["widget_button_f"].';';
}
if(isset($theme["widget_button_fs"])){
  echo 'font-size:'.$theme["widget_button_fs"].'px;';
}
if(isset($theme["widget_button_fw"])){
  echo 'font-weight:'.$theme["widget_button_fw"].';';
}
if(isset($theme["widget_button_fst"])){
  echo 'font-style:'.$theme["widget_button_fst"].';';
}
if(isset($theme["widget_button_fc"])){
  echo 'color:'.$theme["widget_button_fc"].';';
}
if(isset($theme["widget_button_w"])){
  echo 'width:'.$theme["widget_button_w"].'px;';
}
if(isset($theme["widget_button_h"])){
  echo 'height:'.$theme["widget_button_h"].'px;';
  echo 'line-height:'.$theme["widget_button_h"].'px;';
}
if(isset($theme["widget_button_bc"])){
  echo 'background-color:'.$theme["widget_button_bc"].';';
}
if(isset($theme["widget_button_br"])){
  echo '-webkit-border-radius:'.$theme["widget_button_br"].'px;';
  echo '-moz-border-radius:'.$theme["widget_button_br"].'px;';
  echo 'border-radius:'.$theme["widget_button_br"].'px;';
}
if(isset($theme["widget_button_bor"]) && isset($theme["widget_button_borc"])){
  echo ' border:'.$theme["widget_button_bor"].'px solid '.$theme["widget_button_borc"].';';
}
?>
}

#<?=$wpmcw_id?> .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['widget_button'])) echo $theme['widget_button'];else echo 'Subscribe';?>';
}
#<?=$wpmcw_id?> .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["widget_button_fch"])){
    echo 'color:'.$theme["widget_button_fch"].';';
}    
if(isset($theme["widget_button_bch"])){
    echo 'background-color:'.$theme["widget_button_bch"].';';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-subs-button.subsicon:before{
padding-right: 36px;
  <?php 
  if(isset($theme["widget_button_w"])){
      echo 'padding-left:'.$theme["widget_button_h"].'px;';
  }
  ?>
}
#<?=$wpmcw_id?> .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 36px;
width: 36px;
top: 0;
right: 0;
pointer-events: none;
  <?php 
  if(isset($theme["widget_button_h"])){
      echo 'width:'.$theme["widget_button_h"].'px;';
      echo 'height:'.$theme["widget_button_h"].'px;';
  }
  $col = ((isset($theme["widget_bg_c"]))? $theme["widget_bg_c"] : '#fff');
  $bi='b03';
  if(isset($theme["widget_button_i"])){
    if($theme["widget_button_i"] == 'inone')$bi='';
    else if($theme["widget_button_i"] != 'idef')$bi=$theme["widget_button_i"];
  }
  echo 'background: '.$plugin->getIcon($bi,25,$col).' no-repeat center;';
  ?>
}
#<?=$wpmcw_id?> .wpmchimpa-social{
display: inline-block;
margin: 6px auto;
}
#<?=$wpmcw_id?> .wpmchimpa-social::before{
content: '<?php if(isset($theme['widget_soc_head'])) echo $theme['widget_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 30px;
display: block;
float:left;
margin-right: 20px;
<?php
if(isset($theme["widget_soc_f"])){
  echo 'font-family:'.$theme["widget_soc_f"].';';
}
if(isset($theme["widget_soc_fs"])){
    echo 'font-size:'.$theme["widget_soc_fs"].'px;';
}
if(isset($theme["widget_soc_fw"])){
    echo 'font-weight:'.$theme["widget_soc_fw"].';';
}
if(isset($theme["widget_soc_fst"])){
    echo 'font-style:'.$theme["widget_soc_fst"].';';
}
if(isset($theme["widget_soc_fc"])){
    echo 'color:'.$theme["widget_soc_fc"].';';
}
?>
}

#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc{
width:30px;
height: 30px;
-webkit-transition:background 0.3s,box-shadow 0.3s;
transition:background 0.3s,box-shadow 0.3s;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
margin-right:5px; 
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc::before{
width:30px;
height: 30px;
display: block;
content: '';
background: no-repeat center;
}

#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $plugin->getIcon('fb1',16,'#2d609b');?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $plugin->getIcon('fb1',16,'#fff');?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $plugin->getIcon('gp1',16,'#eb4026');?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $plugin->getIcon('gp1',16,'#fff');?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $plugin->getIcon('ms1',16,'#00BCF2');?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $plugin->getIcon('ms1',16,'#fff');?>
}
#<?=$wpmcw_id?>  .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

#<?=$wpmcw_id?>  .ripple.show {
  -webkit-animation: ripple 1s ease-out;
  animation: ripple 1s ease-out;
}
@-webkit-keyframes ripple { to {
 -webkit-transform: scale(1.5);
 opacity: 0;
}}
@keyframes ripple { to {
  transform: scale(1.5);
 opacity: 0;
}}
#<?=$wpmcw_id?>  .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
#<?=$wpmcw_id?>  .wpmchimpa-signal {
display: none;
}
#<?=$wpmcw_id?>.signalshow .wpmchimpa-signal {
  display: inline-block;
}
#<?=$wpmcw_id?> .wpmchimpa-feedback{
  margin: -40px 0 22px;
position: relative;
font-size: 12px;
height: 12px;
<?php
if(isset($theme["widget_status_f"])){
  echo 'font-family:'.$theme["widget_status_f"].';';
}
if(isset($theme["widget_status_fs"])){
    echo 'font-size:'.$theme["widget_status_fs"].'px;';
}
if(isset($theme["widget_status_fw"])){
    echo 'font-weight:'.$theme["widget_status_fw"].';';
}
if(isset($theme["widget_status_fst"])){
    echo 'font-style:'.$theme["widget_status_fst"].';';
}
if(isset($theme["widget_status_fc"])){
    echo 'color:'.$theme["widget_status_fc"].';';
}
?>
}
#<?=$wpmcw_id?> .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
height: auto;
}

#<?=$wpmcw_id?> .wpmchimpa-tag{
margin: 2px auto;
}
#<?=$wpmcw_id?> .wpmchimpa-tag,
#<?=$wpmcw_id?> .wpmchimpa-tag *{
color:#000;
font-size: 10px;
<?php
  if(isset($theme["widget_tag_f"])){
    echo 'font-family:'.$theme["widget_tag_f"].';';
  }
  if(isset($theme["widget_tag_fs"])){
      echo 'font-size:'.$theme["widget_tag_fs"].'px;';
  }
  if(isset($theme["widget_tag_fw"])){
      echo 'font-weight:'.$theme["widget_tag_fw"].';';
  }
  if(isset($theme["widget_tag_fst"])){
      echo 'font-style:'.$theme["widget_tag_fst"].';';
  }
  if(isset($theme["widget_tag_fc"])){
      echo 'color:'.$theme["widget_tag_fc"].';';
  }
?>
}
#<?=$wpmcw_id?> .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["widget_tag_fs"])){$tfs=$theme["widget_tag_fs"];}
  $tfc='#000';
  if(isset($theme["widget_tag_fc"])){$tfc=$theme["widget_tag_fc"];}
  echo $plugin->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}
#<?=$wpmcw_id?> .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$plugin->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}
</style>
<div class="widget-text wp_widget_plugin_box">
<div class="wpmchimpa-reset wpmchimpselector wpmchimpa chimpmatecss" id="<?=$wpmcw_id?>">
        <h3><?php if(isset($theme['widget_heading'])) echo $theme['widget_heading'];?></h3>
<?php if(isset($theme['widget_msg'])) echo '<div class="wpmchimpa_para">'.$theme['widget_msg'].'</div>';?>
		<div class="wpmchimpa-social">
        <div class="wpmchimpa-soc wpmchimpa-fb"></div>
        <div class="wpmchimpa-soc wpmchimpa-gp"></div>
        <div class="wpmchimpa-soc wpmchimpa-ms"></div>
    </div>
    <form action="" method="post" >

<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => true,
  'type' => 4
  );
$plugin->stfield($form['fields'],$set);
$plugin->gethidden($form['preset']);
$plugin->wpmchimpa_abtheme();
?>
<div class="wpmchimpa-subs-button wpmchimpa-matbut<?php echo (!isset($theme['widget_button_i']) || (isset($theme['widget_button_i']) && $theme['widget_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>
              <?php if(isset($theme['widget_tag_en'])){
              if(isset($theme['widget_tag'])) $tagtxt= $theme['widget_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>

			<div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $plugin->getSpin(isset($theme["widget_spinner_t"])?$theme["widget_spinner_t"]:'3',$wpmcw_id,isset($theme["widget_spinner_c"])?$theme["widget_spinner_c"]:'#0188cc');?></div></div>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
	</div>	
</div>