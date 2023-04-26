<?php
$theme = $wpmchimpa['theme']['w7'];
$theme['widget_msg'] = htmlspecialchars_decode($theme['widget_msg']);
$plugin->social=true;
if(!isset($theme['widget_exhead']) && $theme['widget_exhopt']=='0' && isset($theme['widget_wloc']) && isset($theme['widget_locapi']))
  $weatdata = $plugin->get_weather($theme['widget_wloc'],$theme['widget_locapi']);
$plugin->extrascript(1);
$plugin->extrascript(2);
 ?>
 <style type="text/css">

#<?=$wpmcw_id?> {
background: #f7f7f7;
text-align: center;
width: 100%;
<?php  if(isset($theme["widget_bg_c"])){
    echo 'background-color:'.$theme["widget_bg_c"].';';
}?>
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

#<?=$wpmcw_id?> .wpmchimpa-leftpane{
width:100%;
position: relative;
}
#<?=$wpmcw_id?> .wpchimpa-banner{
display: block;
position: relative;
background: <?=(isset($theme['widget_hbg_c'])?$theme['widget_hbg_c']:'#1d91ce')?>;
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
#<?=$wpmcw_id?> .wpmchimpa-leftpane:after{
content: '';
display: block;
width: 45px;
height: 45px;
position: absolute;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: <?php echo $plugin->getIcon('b04',20,(isset($theme["widget_hi_c"]))?$theme["widget_hi_c"]:'#fff');?> no-repeat center;
background-color: <?=(isset($theme["widget_hi_bc"])?$theme["widget_hi_bc"]:'#61c0b5')?>;
top:75px;
right: 20px;
z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
#<?=$wpmcw_id?> .wpmchimpa-head{
padding: 0px 0 10px 10px;
position: relative;
text-align: left;
}
#<?=$wpmcw_id?> h3{
width: 100%;
color: #fff;
font-size: 28px;
line-height: 28px;
margin: 0;
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
?>
}
#<?=$wpmcw_id?> .wpmchimpa_para,#<?=$wpmcw_id?> .wpmchimpa_para * {
font-size: 14px;
color: #fff;
font-weight: lighter;
line-height: 18px;
margin: 0;
<?php if(isset($theme["widget_msg_f"])){
  echo 'font-family:'.$theme["widget_msg_f"].';';
}if(isset($theme["widget_msg_fs"])){
    echo 'font-size:'.$theme["widget_msg_fs"].'px;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-databox{
width: 100%;
min-height:100px;
display: inline-block;
background: <?=(isset($theme['widget_exhbc'])?$theme['widget_exhbc']:'#ededed')?>;
position: relative;
text-align: left;
}
#<?=$wpmcw_id?> .wpmchimpa-databox *{
    color: <?=(isset($theme['widget_exhc1'])?$theme['widget_exhc1']:'#ababab')?>;
  font-family: <?=(isset($theme['widget_exhf'])?$theme['widget_exhf']:'')?>;
  font-weight: <?=(isset($theme['widget_exhfw'])?$theme['widget_exhfw']:'')?>;
  font-style: <?=(isset($theme['widget_exhfst'])?$theme['widget_exhfst']:'')?>;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcdate{
padding: 35px 0 0 10px;
display: inline-block;
width: 125px;
position: relative;
float: left;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 20px;
line-height: 30px;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcdm{
font-size: 14px;
line-height: 14px;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcdd{
font-size: 50px;
line-height: 50px;
color: <?=(isset($theme['widget_exhc2'])?$theme['widget_exhc2']:'#f95753')?>;
display: inline-block;
float: left;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcweat{
padding: 35px 10px 10px 5px;
display: <?=(isset($theme['widget_wloc'])?'inline-block':'none')?>;
width: 125px;
float: left;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwl{
font-size: 14px;
line-height: 14px;
display: inline-block;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: <?php echo $plugin->getIcon('loc1',10,(isset($theme['widget_exhc1'])?$theme['widget_exhc1']:'#ababab'));?> no-repeat center;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwc{
font-size: 11px;
line-height: 11px;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwi{
display: block;
width: 30px;
height: 30px;
margin: 2px 0 0 5px;
float: left;
background: <?php echo $plugin->getIcon('w'.substr($weatdata->weather[0]->icon,0,2),30);?> no-repeat center;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 4px 10px 0;
font-size: 30px;
line-height: 30px;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwdinac{display: none;}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 12px;
line-height: 12px;
margin: 5px 0;
}
#<?=$wpmcw_id?> .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcl2owm{
display: <?=(isset($theme['widget_l2owm'])?'block':'none')?>;
font-size: 8px;
  line-height: 8px;
text-decoration: none;
}
#<?=$wpmcw_id?> .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}

#<?=$wpmcw_id?> form {
display: block;
}
#<?=$wpmcw_id?> .wpmchimpa-cont{
  padding: 10px;
}

#<?=$wpmcw_id?>  .wpmchimpa-field{
position: relative;
width:calc(100% - 40px);
margin: 0 0 12px 40px;
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
width: 40px;
height: 40px;
position: absolute;
top: 0;
left: -40px;
pointer-events: none;
<?php 
if(isset($theme["widget_tbox_h"])){
  echo 'width:'.$theme["widget_tbox_h"].'px;';
  echo 'height:'.$theme["widget_tbox_h"].'px;';
}
?>
}

<?php
$col = ((isset($theme["widget_inico_c"]))? $theme["widget_inico_c"] : '#ababab');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a07';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c05';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '#'.$wpmcw_id.' .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$plugin->getIcon($fi,25,$col).' no-repeat center}';
}
?>
#<?=$wpmcw_id?> .wpmchimpa-field select,
#<?=$wpmcw_id?> input[type="text"]{
  font-size:18px;
  padding: 0 10px;
  display:inline-block;
  width:100%;
  height: 40px;
  border:none;
  border-bottom:1px solid #757575;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: #f7f7f7;
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
width: 40px;
height: 40px;
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
  border-color:#61c0b5;
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
  font-size:18px;
  font-weight:normal;
  cursor:default;
  position:absolute;
  pointer-events: none;
top: 0;
left: 0;
right: 0;
width: 100%;
line-height: 40px;
padding: 0 10px;
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
  color:#61c0b5;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'color:'.$theme["widget_tbox_fc"].';';
  }
   ?>
}

#<?=$wpmcw_id?> .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;
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
  bottom:1px; 
  position:absolute;
  background:#61c0b5; 
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
  top:25%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["widget_tbox_w"])){
        echo 'width:'.$theme["widget_tbox_w"].'px;';
    }
?>
}
#<?=$wpmcw_id?> .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterwb 0.3s ease;
  animation:inputHighlighterwb 0.3s ease;
}
@-webkit-keyframes inputHighlighterwb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["widget_tbox_fc"])){
      echo 'background-color:'.$theme["widget_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterwb {
  from { background:#61c0b5;
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
    else $pline = 1;
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
  line-height: 20px;
  padding-left: 35px;
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
border:1px solid #61c0b5;
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
        $tfc='#61c0b5';
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
color: #fff;
font-size: 20px;
border: 1px solid #59c2b6;
background-color: #61c0b5;
height: 35px;
line-height: 35px;
padding: 0 20px;
text-align: center;
cursor: pointer;
position: relative;
overflow: hidden;
margin-left: 40px;
  -webkit-transition:  box-shadow 0.3s;
  transition:  box-shadow 0.3s;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
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
#<?=$wpmcw_id?> .wpmchimpa-subc{position: relative;}
#<?=$wpmcw_id?> .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["widget_button_h"])){
      echo 'width:'.$theme["widget_button_h"].'px;';
      echo 'height:'.$theme["widget_button_h"].'px;';
  }
  if($theme["widget_button_i"] != 'inone' && $theme["widget_button_i"] != 'idef'){
    $col = ((isset($theme["widget_inico_c"]))? $theme["widget_inico_c"] : '#ababab');
     echo 'background: '.$plugin->getIcon($theme["widget_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
#<?=$wpmcw_id?> .wpmchimpa-signalc {
height: 40px;
    margin: 10px 10px 10px 40px;
  text-align: center;
}
#<?=$wpmcw_id?> .wpmchimpa-signal {
display: none;
}
#<?=$wpmcw_id?>.signalshow .wpmchimpa-signal {
  display: inline-block;
}
#<?=$wpmcw_id?> .wpmchimpa-feedback{
text-align: center;
position: relative;
font-size: 12px;
height: 12px;
margin-top: -30px;
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
font-size: 15px;display: inline-block;height: auto;
}
#<?=$wpmcw_id?> .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$plugin->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 25px auto;
}

#<?=$wpmcw_id?> .wpmchimpa-top{
  padding: 10px;
  text-align: left;
}
#<?=$wpmcw_id?> .wpmchimpa-edit-button,
#<?=$wpmcw_id?> .wpmchimpa-del-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}

#<?=$wpmcw_id?> .wpmchimpa-edit-button:hover,
#<?=$wpmcw_id?> .wpmchimpa-del-button:hover{
opacity: 1;
}
#<?=$wpmcw_id?> .wpmchimpa-edit-button{
  right: 10px;
background: <?php echo $plugin->getIcon('ed1',15,(isset($theme["widget_ui_c"]))?$theme["widget_ui_c"]:'#fff');?> no-repeat center;
}
#<?=$wpmcw_id?> .wpmchimpa-del-button{
  right: 30px;
background: <?php echo $plugin->getIcon('del1',15,(isset($theme["widget_ui_c"]))?$theme["widget_ui_c"]:'#fff');?> no-repeat center;
}
#<?=$wpmcw_id?> .wpmchimpa-social{
display: inline-block;
}
#<?=$wpmcw_id?> .wpmchimpa-social::before{
content: '<?php if(isset($theme['widget_soc_head'])) echo $theme['widget_soc_head'];else echo 'Subscribe with';?>';
font-size: 15px;
line-height: 20px;
display: block;
float:left;
color: #fff;
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
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid <?=(isset($theme["widget_soc_fc"])?$theme["widget_soc_fc"]:'#fff')?>;
border-radius: 50%;
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
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
background-image:<?php echo $plugin->getIcon('fb1',11,(isset($theme["widget_soc_fc"])?$theme["widget_soc_fc"]:'#fff'));?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $plugin->getIcon('gp1',11,(isset($theme["widget_soc_fc"])?$theme["widget_soc_fc"]:'#fff'));?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $plugin->getIcon('ms1',11,(isset($theme["widget_soc_fc"])?$theme["widget_soc_fc"]:'#fff'));?>
}
#<?=$wpmcw_id?> .wpmchimpa-social .wpmchimpa-soc:hover{
  -webkit-transform:scale(1.1);
  -ms-transform:scale(1.1);
  transform:scale(1.1);
}
#<?=$wpmcw_id?> .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
margin: 0;
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

#<?=$wpmcw_id?>.woexhead .wpmchimpa-databox{
display: none;
}
#<?=$wpmcw_id?>.woexhead .wpmchimpa-leftpane{
  margin-bottom: 50px;
}
#<?=$wpmcw_id?>.woexhead  .wpmchimpa-leftpane:after{
 top:55px;
}
#<?=$wpmcw_id?>.wosoc .wpmchimpa-social{
  display: none;
}

#<?=$wpmcw_id?> .wpmchimpa-tag{
margin: 6px auto;
}
#<?=$wpmcw_id?> .wpmchimpa-tag,
#<?=$wpmcw_id?> .wpmchimpa-tag *{
color:#b8b8b8;
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
  $tfc='#b8b8b8';
  if(isset($theme["widget_tag_fc"])){$tfc=$theme["widget_tag_fc"];}
  echo $plugin->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

#<?=$wpmcw_id?> .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

#<?=$wpmcw_id?> .ripple.show {
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
</style>
<div class="widget-text wp_widget_plugin_box">
<div class="wpmchimpa-reset wpmchimpselector wpmchimpa chimpmatecss <?=(isset($theme['widget_exhead'])?'woexhead':'')?> <?=(isset($theme['widget_dissoc'])?'wosoc':'')?>" id="<?=$wpmcw_id?>">
      <div class="wpmchimpa-leftpane">
          <div class="wpchimpa-banner">
            <div class="wpmchimpa-top">
              <div class="wpmchimpa-social">
                    <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                    <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                    <div class="wpmchimpa-soc wpmchimpa-ms"></div>
                </div>
              <div class="wpmchimpa-edit-button"></div>
              <div class="wpmchimpa-del-button"></div>
            </div>
            <div class="wpmchimpa-head">
                <?php if(isset($theme['widget_heading'])) echo '<h3>'.$theme['widget_heading'].'</h3>';?>
<?php if(isset($theme['widget_msg'])) echo '<div class="wpmchimpa_para">'.$theme['widget_msg'].'</div>';?>
            </div>
          </div>
          <div class="wpmchimpa-databox">
            <?php if($theme['widget_exhopt']=='0'){ ?>
            <div class="wpmcdate">
              <div class="wpmcdm"></div>
              <div class="wpmcdd"></div>
              <div class="wpmcdy"></div>
            </div>
            <div class="wpmcweat">
              <div class="wpmcwl"><?=$theme['widget_wloc']?></div>
          <div class="wpmcwc"><?=$weatdata->weather[0]->main?></div>
          <div class="wpmcwi"></div>
          <div class="wpmcwd"><span><?=$weatdata->cel?></span><span class="wpmcwdinac"><?=$weatdata->far?></span></div>
          <div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
          <a href="http://openweathermap.org/city/<?=$weatdata->id?>" target="_blank" class="wpmcl2owm">extended forecast</a>
            </div>
            <?php } else if($theme['widget_exhopt']=='1'){ ?>
            <div class="wpmcexhp"><?=(isset($theme['widget_exhp'])?$theme['widget_exhp']:'')?></div>
            <?php } ?>
          </div>
        </div>
  <div class="wpmchimpa-cont">
      <form action="" method="post">
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
<div class="wpmchimpa-subsc<?php echo (isset($theme['widget_button_i']) && $theme['widget_button_i'] != 'inone' && $theme['widget_button_i'] != 'idef')? ' subsicon' : '';?>">
  <div class="wpmchimpa-subs-button wpmchimpa-matbut"></div>
</div>
      <?php if(isset($theme['widget_tag_en'])){
      if(isset($theme['widget_tag'])) $tagtxt= $theme['widget_tag'];
      else $tagtxt='Secure and Spam free...';
      echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
      }?>
    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
    echo $plugin->getSpin(isset($theme["widget_spinner_t"])?$theme["widget_spinner_t"]:'1',$wpmcw_id ,isset($theme["widget_spinner_c"])?$theme["widget_spinner_c"]:'#61c0b5');?></div></div>
    </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
	</div>	
</div>