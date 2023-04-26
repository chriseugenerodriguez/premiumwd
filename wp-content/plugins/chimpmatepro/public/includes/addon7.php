<?php 
$theme = $wpmchimpa['theme']['a7'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
$this->social=true;
if(!isset($theme['addon_exhead']) && $theme['addon_exhopt']=='0' && isset($theme['addon_wloc']) && isset($theme['addon_locapi']))
  $weatdata = $this->get_weather($theme['addon_wloc'],$theme['addon_locapi']);
$this->extrascript(1);
$this->extrascript(2);
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
background: #f7f7f7;
margin-bottom: 0;
text-align: center;
display:none;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}
$bc='#EDEDED';
$bw=0;
if(isset($theme["addon_bor_c"]))$bc = $theme["addon_bor_c"];
if(isset($theme["addon_bor_w"]))$bw = $theme["addon_bor_w"];
  echo 'border: '.$bc.' solid '.$bw.'px;';
?>
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.wpmchimpa_lock_content .wpmchimpab{
  box-shadow: none;
}
.wpmchimpab .wpmchimpa-leftpane{
width:100%;
position: relative;
}
.wpmchimpab .wpchimpa-banner{
display: block;
position: relative;
background: <?=(isset($theme['addon_hbg_c'])?$theme['addon_hbg_c']:'#1d91ce')?>;
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
.wpmchimpab .wpmchimpa-leftpane:after{
content: '';
display: block;
width: 55px;
height: 55px;
position: absolute;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: <?php echo $this->getIcon('b04',25,(isset($theme["addon_hi_c"]))?$theme["addon_hi_c"]:'#fff');?> no-repeat center;
background-color: <?=(isset($theme["addon_hi_bc"])?$theme["addon_hi_bc"]:'#61c0b5')?>;
top:79px;
right: 20px;
z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.wpmchimpab .wpmchimpa-head{
padding: 0px 0 10px 20px;
position: relative;
text-align: left;
}
.wpmchimpab h3{
width: 100%;
color: #fff;
font-size: 30px;
line-height: 30px;
margin: 0;
<?php 
    if(isset($theme["addon_heading_f"])){
      echo 'font-family:'.$theme["addon_heading_f"].';';
    }
    if(isset($theme["addon_heading_fs"])){
        echo 'font-size:'.$theme["addon_heading_fs"].'px;';
        echo 'line-height:'.$theme["addon_heading_fs"].'px;';
    }
    if(isset($theme["addon_heading_fw"])){
        echo 'font-weight:'.$theme["addon_heading_fw"].';';
    }
    if(isset($theme["addon_heading_fst"])){
        echo 'font-style:'.$theme["addon_heading_fst"].';';
    }
    if(isset($theme["addon_heading_fc"])){
        echo 'color:'.$theme["addon_heading_fc"].';';
    }
?>
}
.wpmchimpab .wpmchimpa_para,.wpmchimpab .wpmchimpa_para * {
font-size: 15px;
color: #fff;
font-weight: lighter;
line-height: 18px;
margin:0;
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}
.wpmchimpab .wpmchimpa-databox{
width: 100%;
min-height:100px;
display: inline-block;
background: <?=(isset($theme['addon_exhbc'])?$theme['addon_exhbc']:'#ededed')?>;
position: relative;
text-align: left;
}
.wpmchimpab .wpmchimpa-databox *{
    color: <?=(isset($theme['addon_exhc1'])?$theme['addon_exhc1']:'#ababab')?>;
  font-family: <?=(isset($theme['addon_exhf'])?$theme['addon_exhf']:'')?>;
  font-weight: <?=(isset($theme['addon_exhfw'])?$theme['addon_exhfw']:'')?>;
  font-style: <?=(isset($theme['addon_exhfst'])?$theme['addon_exhfst']:'')?>;
}
.wpmchimpab .wpmchimpa-databox .wpmcdate{
padding: 15px 0 0 20px;
display: inline-block;
width: 160px;
position: relative;
float: left;
}
.wpmchimpab .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 25px;
line-height: 35px;
}
.wpmchimpab .wpmchimpa-databox .wpmcdm{
font-size: 16px;
line-height: 16px;
}
.wpmchimpab .wpmchimpa-databox .wpmcdd{
font-size: 65px;
line-height: 65px;
color: <?=(isset($theme['addon_exhc2'])?$theme['addon_exhc2']:'#f95753')?>;
display: inline-block;
float: left;
}
.wpmchimpab .wpmchimpa-databox .wpmcweat{
padding: 10px 20px 10px 5px;
display: <?=(isset($theme['addon_wloc'])?'inline-block':'none')?>;
width: 180px;
float: right;
}
.wpmchimpab .wpmchimpa-databox .wpmcwl{
font-size: 16px;
line-height: 16px;
display: inline-block;
}
.wpmchimpab .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: <?php echo $this->getIcon('loc1',10,(isset($theme['addon_exhc1'])?$theme['addon_exhc1']:'#ababab'));?> no-repeat center;
}
.wpmchimpab .wpmchimpa-databox .wpmcwc{
font-size: 15px;
line-height: 15px;
}
.wpmchimpab .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin: 3px 0 0 10px;
float: left;
background: <?php echo $this->getIcon('w'.substr($weatdata->weather[0]->icon,0,2),50);?> no-repeat center;
}
.wpmchimpab .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 10px 10px 0;
font-size: 35px;
line-height: 35px;
}
.wpmchimpab .wpmchimpa-databox .wpmcwdinac{display: none;}
.wpmchimpab .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 14px;
line-height: 14px;
margin: 10px 0;
}
.wpmchimpab .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
.wpmchimpab .wpmchimpa-databox .wpmcl2owm{
display: <?=(isset($theme['addon_l2owm'])?'block':'none')?>;
font-size: 8px;
  line-height: 8px;
text-decoration: none;
}
.wpmchimpab .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}

.wpmchimpab form {
margin: 0 50px;
display: block;
}
.wpmchimpab .wpmchimpa-cont{
  padding: 20px;
}

.wpmchimpab  .wpmchimpa-field{
position: relative;
width:calc(100% - 40px);
margin: 0 0 12px 40px;
text-align: left;
<?php 
  if(isset($theme["addon_tbox_w"])){
      echo 'width:'.$theme["addon_tbox_w"].'px;';
  }
?>
}
.wpmchimpab .inputicon{
display: none;
}
.wpmchimpab .wpmc-ficon .inputicon {
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
left: -40px;
pointer-events: none;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}

<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ababab');
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
    echo '.wpmchimpab .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
.wpmchimpab .wpmchimpa-field select,
.wpmchimpab input[type="text"]{
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
    if(isset($theme["addon_tbox_f"])){
      echo 'font-family:'.$theme["addon_tbox_f"].';';
    }
    if(isset($theme["addon_tbox_fs"])){
        echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
    }
    if(isset($theme["addon_tbox_fw"])){
        echo 'font-weight:'.$theme["addon_tbox_fw"].';';
    }
    if(isset($theme["addon_tbox_fst"])){
        echo 'font-style:'.$theme["addon_tbox_fst"].';';
    }
    if(isset($theme["addon_tbox_bgc"])){
        echo 'background:'.$theme["addon_tbox_bgc"].';';
    }
    if(isset($theme["addon_tbox_w"])){
        echo 'width:'.$theme["addon_tbox_w"].'px;';
    }
    if(isset($theme["addon_tbox_h"])){
        echo 'height:'.$theme["addon_tbox_h"].'px;';
    }
    if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
        echo ' border-bottom:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
    }
  ?>
}


.wpmchimpab .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 40px;
height: 40px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab .wpmchimpa-field select:focus{
  border-color:#61c0b5;
    <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'border-color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}
.wpmchimpab input[type="text"] ~ .inputlabel{
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
  if(isset($theme["addon_tbox_f"])){
    echo 'font-family:'.$theme["addon_tbox_f"].';';
  }
  if(isset($theme["addon_tbox_fs"])){
      echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
  }
  if(isset($theme["addon_tbox_fw"])){
      echo 'font-weight:'.$theme["addon_tbox_fw"].';';
  }
  if(isset($theme["addon_tbox_fst"])){
      echo 'font-style:'.$theme["addon_tbox_fst"].';';
  }
  ?>
}

.wpmchimpab input:focus ~ .inputlabel, .wpmchimpab input:valid ~ .inputlabel {
  top:-7px;
  font-size:12px;
  color:#61c0b5;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}

.wpmchimpab .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;
<?php 
    if(isset($theme["addon_tbox_w"])){
        echo 'width:'.$theme["addon_tbox_w"].'px;';
    }
?>
}
.wpmchimpab .wpmchimpa-field .bar:before, .wpmchimpab .wpmchimpa-field .bar:after   {
  content:'';
  height:1px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#61c0b5; 
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all; 
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}
.wpmchimpab .wpmchimpa-field .bar:before {
  left:50%;
}
.wpmchimpab .wpmchimpa-field .bar:after {
  right:50%; 
}
.wpmchimpab .wpmchimpa-field input:focus ~ .bar:before, .wpmchimpab .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
.wpmchimpab .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:25%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["addon_tbox_w"])){
        echo 'width:'.$theme["addon_tbox_w"].'px;';
    }
?>
}
.wpmchimpab .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterab 0.3s ease;
  animation:inputHighlighterab 0.3s ease;
}
@-webkit-keyframes inputHighlighterab {
  from { background:#61c0b5;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterab {
  from { background:#61c0b5;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

.wpmchimpab select.wpmcerror,
.wpmchimpab input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpab .wpmchimpa-check *,
.wpmchimpab .wpmchimpa-radio *{
<?php
if(isset($theme["addon_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_check_f"]).';';
}
if(isset($theme["addon_check_fs"])){
    echo 'font-size:'.$theme["addon_check_fs"].'px;';
}
if(isset($theme["addon_check_fw"])){
    echo 'font-weight:'.$theme["addon_check_fw"].';';
}
if(isset($theme["addon_check_fst"])){
    echo 'font-style:'.$theme["addon_check_fst"].';';
}
if(isset($theme["addon_check_fc"])){
    echo 'color:'.$theme["addon_check_fc"].';';
}
?>
}
.wpmchimpab .wpmchimpa-item{
  <?php 
    if(isset($theme["addon_check_pline"])){
      if($theme["addon_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["addon_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
.wpmchimpab .wpmchimpa-item input {
  display: none;
}
.wpmchimpab .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-right: 10px;
  line-height: 20px;
-webkit-backface-visibility:hidden;
}

.wpmchimpab .wpmchimpa-item span:before,
.wpmchimpab .wpmchimpa-item span:after {
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
    if(isset($theme["addon_check_borc"])){
        echo 'border:1px solid '.$theme["addon_check_borc"].';';
 }   if(isset($theme["addon_check_c"])){
        echo 'background-color:'.$theme["addon_check_c"].';';
 }?>
}
.wpmchimpab input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
.wpmchimpab input[type='checkbox'] + span:after {
-webkit-transform:rotate(43deg);
transform:rotate(43deg);
opacity: 0;
width: 20px;
height: 15px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["addon_check_mark"])){$tfi=$theme["addon_check_mark"];}
        $tfc='#61c0b5';
        if(isset($theme["addon_check_ic"])){$tfc=$theme["addon_check_ic"];}
        echo $this->getIcon($tfi,20,$tfc);?>;
}
.wpmchimpab input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:before ,
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
.wpmchimpab .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}
.wpmchimpab .wpmcinfierr{
  display: block;
  height: 14px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -12px;
pointer-events: none;
  font-size: 10px;
  color: red;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
    }
    if(isset($theme["addon_status_fw"])){
        echo 'font-weight:'.$theme["addon_status_fw"].';';
    }
    if(isset($theme["addon_status_fst"])){
        echo 'font-style:'.$theme["addon_status_fst"].';';
    }
  ?>
}

.wpmchimpab .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
color: #fff;
font-size: 20px;
border: 1px solid #59c2b6;
background-color: #61c0b5;
height: 45px;
line-height: 45px;
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
if(isset($theme["addon_button_f"])){
  echo 'font-family:'.$theme["addon_button_f"].';';
}
if(isset($theme["addon_button_fs"])){
    echo 'font-size:'.$theme["addon_button_fs"].'px;';
}
if(isset($theme["addon_button_fw"])){
    echo 'font-weight:'.$theme["addon_button_fw"].';';
}
if(isset($theme["addon_button_fst"])){
    echo 'font-style:'.$theme["addon_button_fst"].';';
}
if(isset($theme["addon_button_fc"])){
    echo 'color:'.$theme["addon_button_fc"].';';
}
if(isset($theme["addon_button_w"])){
    echo 'width:'.$theme["addon_button_w"].'px;';
}
if(isset($theme["addon_button_h"])){
    echo 'height:'.$theme["addon_button_h"].'px;';
    echo 'line-height:'.$theme["addon_button_h"].'px;';
}
if(isset($theme["addon_button_bc"])){
    echo 'background-color:'.$theme["addon_button_bc"].';';
}
if(isset($theme["addon_button_br"])){
    echo '-webkit-border-radius:'.$theme["addon_button_br"].'px;';
    echo '-moz-border-radius:'.$theme["addon_button_br"].'px;';
    echo 'border-radius:'.$theme["addon_button_br"].'px;';
}
if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
    echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
}
?>
}

.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
}
.wpmchimpab .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["addon_button_fch"])){
    echo 'color:'.$theme["addon_button_fch"].';';
}    
if(isset($theme["addon_button_bch"])){
    echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}
.wpmchimpab .wpmchimpa-subsc{position: relative;}
.wpmchimpab .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["addon_button_h"])){
      echo 'width:'.$theme["addon_button_h"].'px;';
      echo 'height:'.$theme["addon_button_h"].'px;';
  }
  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ababab');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-signalc {
height: 40px;
  margin-top: 10px;
  text-align: center;
}
.wpmchimpab .wpmchimpa-signal {
display: none;
}
.wpmchimpab.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
text-align: center;
position: relative;
font-size: 12px;
height: 12px;
margin-top: -30px;
<?php
if(isset($theme["addon_status_f"])){
  echo 'font-family:'.$theme["addon_status_f"].';';
}
if(isset($theme["addon_status_fs"])){
  echo 'font-size:'.$theme["addon_status_fs"].'px;';
}
if(isset($theme["addon_status_fw"])){
  echo 'font-weight:'.$theme["addon_status_fw"].';';
}
if(isset($theme["addon_status_fst"])){
  echo 'font-style:'.$theme["addon_status_fst"].';';
}
if(isset($theme["addon_status_fc"])){
  echo 'color:'.$theme["addon_status_fc"].';';
}
?>
}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;display: inline-block;margin: 0;height: auto;
}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 25px auto;
}

.wpmchimpab .wpmchimpa-top{
  padding: 10px;
  text-align: left;
}
.wpmchimpab .wpmchimpa-edit-button,
.wpmchimpab .wpmchimpa-del-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}

.wpmchimpab .wpmchimpa-edit-button:hover,
.wpmchimpab .wpmchimpa-del-button:hover{
opacity: 1;
}
.wpmchimpab .wpmchimpa-edit-button{
  right: 10px;
background: <?php echo $this->getIcon('ed1',15,(isset($theme["addon_ui_c"]))?$theme["addon_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpab .wpmchimpa-del-button{
  right: 30px;
background: <?php echo $this->getIcon('del1',15,(isset($theme["addon_ui_c"]))?$theme["addon_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpab .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 15px;
line-height: 20px;
display: block;
float:left;
color: #fff;
<?php
if(isset($theme["addon_soc_f"])){
  echo 'font-family:'.$theme["addon_soc_f"].';';
}
if(isset($theme["addon_soc_fs"])){
    echo 'font-size:'.$theme["addon_soc_fs"].'px;';
}
if(isset($theme["addon_soc_fw"])){
    echo 'font-weight:'.$theme["addon_soc_fw"].';';
}
if(isset($theme["addon_soc_fst"])){
    echo 'font-style:'.$theme["addon_soc_fst"].';';
}
if(isset($theme["addon_soc_fc"])){
    echo 'color:'.$theme["addon_soc_fc"].';';
}
?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid <?=(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff')?>;
border-radius: 50%;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc:hover{
  -webkit-transform:scale(1.1);
  -ms-transform:scale(1.1);
  transform:scale(1.1);
}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
margin: 0;
}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}

.wpmchimpab.woexhead .wpmchimpa-databox{
display: none;
}
.wpmchimpab.woexhead .wpmchimpa-leftpane{
  margin-bottom: 50px;
}
.wpmchimpab.wosoc .wpmchimpa-social{
  display: none;
}
.wpmchimpab.wosoc .wpmchimpa-leftpane:after{
  top: 50px
}

.wpmchimpab .wpmchimpa-tag{
margin: 6px auto;
}
.wpmchimpab .wpmchimpa-tag,
.wpmchimpab .wpmchimpa-tag *{
color:#b8b8b8;
font-size: 10px;

<?php
  if(isset($theme["addon_tag_f"])){
    echo 'font-family:'.$theme["addon_tag_f"].';';
  }
  if(isset($theme["addon_tag_fs"])){
      echo 'font-size:'.$theme["addon_tag_fs"].'px;';
  }
  if(isset($theme["addon_tag_fw"])){
      echo 'font-weight:'.$theme["addon_tag_fw"].';';
  }
  if(isset($theme["addon_tag_fst"])){
      echo 'font-style:'.$theme["addon_tag_fst"].';';
  }
  if(isset($theme["addon_tag_fc"])){
      echo 'color:'.$theme["addon_tag_fc"].';';
  }
?>
}
.wpmchimpab .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["addon_tag_fs"])){$tfs=$theme["addon_tag_fs"];}
  $tfc='#b8b8b8';
  if(isset($theme["addon_tag_fc"])){$tfc=$theme["addon_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

.wpmchimpab .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.wpmchimpab .ripple.show {
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
/**/
@media only screen 
and (max-width : 550px) {
.wpmchimpab .wpmchimpa-databox .wpmcweat{
  float: left;padding-right: 20px;
}
.wpmchimpab form{
  margin: 0
}
}
</style>
<script>
  jQuery(function () {
jQuery('.wpmchimpab .wpmchimpa-subs-button').click(function(e){
  var target = e.target;
    var rect = target.getBoundingClientRect();
    var ripple = target.querySelector('.ripple');
    if (!ripple) {
        ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
        target.appendChild(ripple);
    }
    ripple.classList.remove('show');
    var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
    var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
    ripple.style.top = top + 'px';
    ripple.style.left = left + 'px';
    ripple.classList.add('show');
    return false;
});});
</script>
<div class="wpmchimpa-reset wpmchimpselector wpmchimpab chimpmatecss <?=(isset($theme['addon_exhead'])?'woexhead':'')?> <?=(isset($theme['addon_dissoc'])?'wosoc':'')?>" id="wpmchimpab">
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
                <?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
            </div>
          </div>
          <div class="wpmchimpa-databox">
            <?php if($theme['addon_exhopt']=='0'){ ?>
            <div class="wpmcdate">
              <div class="wpmcdm"></div>
              <div class="wpmcdd"></div>
              <div class="wpmcdy"></div>
            </div>
            <div class="wpmcweat">
              <div class="wpmcwl"><?=$theme['addon_wloc']?></div>
          <div class="wpmcwc"><?=$weatdata->weather[0]->main?></div>
          <div class="wpmcwi"></div>
          <div class="wpmcwd"><span><?=$weatdata->cel?></span><span class="wpmcwdinac"><?=$weatdata->far?></span></div>
          <div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
          <a href="http://openweathermap.org/city/<?=$weatdata->id?>" target="_blank" class="wpmcl2owm">extended forecast</a>
            </div>
            <?php } else if($theme['addon_exhopt']=='1'){ ?>
            <div class="wpmcexhp"><?=(isset($theme['addon_exhp'])?$theme['addon_exhp']:'')?></div>
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
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
<div class="wpmchimpa-subsc<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>">
  <div class="wpmchimpa-subs-button wpmchimpa-matbut"></div>
</div>
      <?php if(isset($theme['addon_tag_en'])){
      if(isset($theme['addon_tag'])) $tagtxt= $theme['addon_tag'];
      else $tagtxt='Secure and Spam free...';
      echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
      }?>
    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
    echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'1','wpmchimpab',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#61c0b5');?></div></div>
    </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>
