<?php 
$theme = $wpmchimpa['theme']['a2'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
$this->social=true;
$this->extrascript(1);
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
background: #fff;
margin-bottom: 40px;
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
}
.wpmchimpab .wpmchimpa-cont > div:not(.wpmchimpa-feedback){
display: block;
width: 100%;
float: left;
text-align: center;
}
.wpmchimpab h3{
width: 100%;
line-height: 60px;
margin: 0 0 10px;
padding-left: 50px;
color: #fff;
font-size: 30px;
background: #0188cc;
position: relative;
<?php 
    if(isset($theme["addon_heading_f"])){
      echo 'font-family:'.$theme["addon_heading_f"].';';
    }
    if(isset($theme["addon_heading_fs"])){
        echo 'font-size:'.$theme["addon_heading_fs"].'px;';
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
    if(isset($theme["addon_hbg_c"])){
        echo 'background-color:'.$theme["addon_hbg_c"].';';
    }
?>
}

.wpmchimpab h3::before{
content:'';
background:<?php echo $this->getIcon('opt1',28,(isset($theme["addon_hi_c"]))?$theme["addon_hi_c"]:'#fff');?> no-repeat center;
position: absolute;
top: 0;
left: 0;
width: 65px;
height: 60px;
}
.wpmchimpab .wpmchimpa_para{
margin: 40px 30px 20px;
}
.wpmchimpab .wpmchimpa_para,.wpmchimpab .wpmchimpa_para * {
font-size: 12px;
color: #000;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}
.wpmchimpab form {
margin: 0 70px;
display: block;
}

.wpmchimpab .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
text-align: left;
-webkit-backface-visibility: hidden;
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
right: 0;
pointer-events: none;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab .wpmc-ficon input[type="text"],
.wpmchimpab .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-right: 40px;
  <?php 
if(isset($theme["addon_tbox_h"])){
  echo 'padding-left:'.$theme["addon_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#000');
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
    echo '.wpmchimpab .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,15,$col).' no-repeat center}';
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
  position: relative;
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
    z-index: 1;
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
  border-color:#0188cc;
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
  color:#0188cc;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}

.wpmchimpab .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%; 
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
  top:-1px; 
  position:absolute;
  background:#0188cc; 
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
  top:14%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["addon_tbox_w"])){
        echo 'width:'.$theme["addon_tbox_w"].'px;';
    }
?>
}
.wpmchimpab .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighteraa 0.3s ease;
  animation:inputHighlighteraa 0.3s ease;
}
@-webkit-keyframes inputHighlighteraa {
  from { background:#0188cc;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighteraa {
  from { background:#0188cc;
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
  line-height: 20px;
  margin-right: 10px;
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
border:1px solid #0188cc;
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
        $tfc='#0188cc';
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
  font-size: 10px;
  color: red;
pointer-events: none;
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
width: 100%;
color: #fff;
font-size: 20px;
border: 1px solid #0284C5;
background-color: #0188cc;
height: 45px;
line-height: 45px;
padding: 0 20px;
text-align: left;
cursor: pointer;
  -webkit-transition:  box-shadow 0.3s;
  transition:  box-shadow 0.3s;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
position: relative;
overflow: hidden;
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
.wpmchimpab .wpmchimpa-subs-button.subsicon:before{
padding-right: 45px;
  <?php 
  if(isset($theme["addon_button_w"])){
      echo 'padding-left:'.$theme["addon_button_h"].'px;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
right: 0;
pointer-events: none;
  <?php 
  if(isset($theme["addon_button_h"])){
      echo 'width:'.$theme["addon_button_h"].'px;';
      echo 'height:'.$theme["addon_button_h"].'px;';
  }
  $col = ((isset($theme["addon_bg_c"]))? $theme["addon_bg_c"] : '#fff');
  $bi='b03';
  if(isset($theme["addon_button_i"])){
    if($theme["addon_button_i"] == 'inone')$bi='';
    else if($theme["addon_button_i"] != 'idef')$bi=$theme["addon_button_i"];
  }
  echo 'background: '.$this->getIcon($bi,25,$col).' no-repeat center;';
  ?>
}
.wpmchimpab .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.wpmchimpab .wpmchimpa-signal {
display: none;
}
.wpmchimpab.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
position: relative;
color: #000;
font-size: 12px;
height: 12px;
  margin: -40px 0 22px;
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
font-size: 15px;display: block;height: auto;margin:0;
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

.wpmchimpab .wpmchimpa-social{
display: inline-block;
margin: 6px auto;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 45px;
display: block;
float:left;
margin-right: 20px;
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
width:45px;
height: 45px;-webkit-transition:background 0.3s,box-shadow 0.3s;
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
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
width:45px;
height: 45px;
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
background-image:<?php echo $this->getIcon('fb1',16,'#2d609b');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $this->getIcon('fb1',16,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',16,'#eb4026');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $this->getIcon('gp1',16,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',16,'#00BCF2');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $this->getIcon('ms1',16,'#fff');?>
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
.wpmchimpab.wosoc .wpmchimpa-social{
display: none;
}

.wpmchimpab .wpmchimpa-tag{
margin: 2px auto;
}
.wpmchimpab .wpmchimpa-tag,
.wpmchimpab .wpmchimpa-tag *{
color:#000;
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
  $tfc='#000';
  if(isset($theme["addon_tag_fc"])){$tfc=$theme["addon_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}
@media only screen and (max-width : 768px) {
.wpmchimpab form {margin: 0;}
.wpmchimpab .wpmchimpa_para { margin: 40px 12px 20px;}
}
</style>
<div class="wpmchimpa-reset wpmchimpselector wpmchimpab chimpmatecss<?php if(isset($theme['addon_dissoc']))echo ' wosoc';?>" id="wpmchimpab">

  <div class="wpmchimpa-cont">
	    <div class="wpmchimpa-leftpane">
          <h3><?php if(isset($theme['addon_heading'])) echo $theme['addon_heading'];?></h3>
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
        
        <div class="wpmchimpa-social">
            <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            <div class="wpmchimpa-soc wpmchimpa-gp"></div>
            <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            <div style="clear:both">
        </div>
        </div>
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
<div class="wpmchimpa-subs-button wpmchimpa-matbut<?php echo (!isset($theme['addon_button_i']) || (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>

              <?php if(isset($theme['addon_tag_en'])){
              if(isset($theme['addon_tag'])) $tagtxt= $theme['addon_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
<div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
    echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'3','wpmchimpab',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#0188cc');?></div></div>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
     
    </div>
  </div>
</div>