<?php 
$theme = $wpmchimpa['theme']['a2'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
$this->social=true;
$this->extrascript(1);
?>
<style type="text/css">
#wpmchimpaf .wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 300px;
background: #fff;
text-align: center;
box-shadow: 0 0 20px rgba(0,0,0,.2);
overflow: hidden;
-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  <?php 
    if(isset($theme["addon_bg_c"])){
        echo 'background:'.$theme["addon_bg_c"].';';
    }
  ?>
}
#wpmchimpaf.wpmctb_mid .wpmchimpaf{left: calc(50% - 150px);bottom: 0}
#wpmchimpaf.wpmctb_mid .wpmchimpaf.wpmchimpaf-close{
-webkit-transform: translateY(1000px);transform: translateY(1000px);
}
#wpmchimpaf.wpmctb_left .wpmchimpaf{left: 10px;bottom: 10px}
#wpmchimpaf.wpmctb_left .wpmchimpaf.wpmchimpaf-close{
-webkit-transform: translateX(-500px);transform: translateX(-500px);
}
#wpmchimpaf.wpmctb_right .wpmchimpaf{right: 10px;bottom: 10px}
#wpmchimpaf.wpmctb_right .wpmchimpaf.wpmchimpaf-close{
-webkit-transform: translateX(500px);transform: translateX(500px);
}
.wpmchimpaf h3{
width: 100%;
line-height: 50px;
color: #fff;
font-size: 20px;
position: relative;
background: #0188cc;
<?php 
if(isset($theme["addon_heading_f"])){
echo 'font-family:'.$theme["addon_heading_f"].';';
}
if(isset($theme["addon_tbox_fs"])){
    echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
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
.wpmchimpaf h3::before{
content:'';
background:<?php echo $this->getIcon('opt1',20,(isset($theme["addon_hi_c"]))?$theme["addon_hi_c"]:'#fff');?> no-repeat center;
position: absolute;
top: 0;
left: 0;
width: 40px;
height: 50px;
}
.wpmchimpaf .wpmchimpa_para{
margin: 15px 10px 10px;
}
.wpmchimpaf .wpmchimpa_para,.wpmchimpaf .wpmchimpa_para * {
font-size: 10px;
color: #000;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.$theme["addon_msg_f"].';';
}?>
}
.wpmchimpaf .wpmchimpaf-cont{
  padding:10px;
  text-align: center;
}

.wpmchimpaf .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
text-align: left;

}
.wpmchimpaf .inputicon{
display: none;
}
.wpmchimpaf .wpmc-ficon .inputicon {
display: block;
width: 30px;
height: 30px;
position: absolute;
top: 0;
right: 0;
pointer-events: none;
}
.wpmchimpaf .wpmc-ficon input[type="text"],
.wpmchimpaf .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-right: 30px;
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
    echo '.wpmchimpaf .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
.wpmchimpaf .wpmchimpa-field select,
.wpmchimpaf input[type="text"]{
  font-size:15px;
  padding: 0 10px;
  display:inline-block;
  width:100%;
  height: 30px;
  border:none;
  border-bottom:1px solid #757575;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  <?php 
    if(isset($theme["addon_tbox_f"])){
      echo 'font-family:'.$theme["addon_tbox_f"].';';
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
    if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
        echo ' border-bottom:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
    }
  ?>
}


.wpmchimpaf .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 30px;
height: 30px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;

}
.wpmchimpaf .wpmchimpa-field select:focus{
  border-color:#0188cc;
    <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'border-color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}
.wpmchimpaf input[type="text"] ~ .inputlabel{
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

.wpmchimpaf input:focus ~ .inputlabel, .wpmchimpaf input:valid ~ .inputlabel {
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

.wpmchimpaf .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%; 

}
.wpmchimpaf .wpmchimpa-field .bar:before, .wpmchimpaf .wpmchimpa-field .bar:after   {
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
.wpmchimpaf .wpmchimpa-field .bar:before {
  left:50%;
}
.wpmchimpaf .wpmchimpa-field .bar:after {
  right:50%; 
}
.wpmchimpaf .wpmchimpa-field input:focus ~ .bar:before, .wpmchimpaf .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
.wpmchimpaf .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:14%; 
  left:0;
  opacity:0.5;

}
.wpmchimpaf .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterfa 0.3s ease;
  animation:inputHighlighterfa 0.3s ease;
}
@-webkit-keyframes inputHighlighterfa {
  from { background:#0188cc;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterfa {
  from { background:#0188cc;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

.wpmchimpaf select.wpmcerror,
.wpmchimpaf input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpaf .wpmchimpa-check *,
.wpmchimpaf .wpmchimpa-radio *{
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
.wpmchimpaf .wpmchimpa-item{
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
.wpmchimpaf .wpmchimpa-item input {
  display: none;
}
.wpmchimpaf .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  line-height: 20px;
  margin-right: 10px;
-webkit-backface-visibility:hidden;
}

.wpmchimpaf .wpmchimpa-item span:before,
.wpmchimpaf .wpmchimpa-item span:after {
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
.wpmchimpaf input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
.wpmchimpaf input[type='checkbox'] + span:after {
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
.wpmchimpaf input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
.wpmchimpaf .wpmchimpa-item input[type='radio'] + span:before ,
.wpmchimpaf .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
.wpmchimpaf .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
.wpmchimpaf .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}
.wpmchimpaf .wpmcinfierr{
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

.wpmchimpaf .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
width: 100%;
color: #fff;
font-size: 16px;
border: 1px solid #0284C5;
background-color: #0188cc;
height: 35px;
line-height: 35px;
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
if(isset($theme["addon_button_fw"])){
    echo 'font-weight:'.$theme["addon_button_fw"].';';
}
if(isset($theme["addon_button_fst"])){
    echo 'font-style:'.$theme["addon_button_fst"].';';
}
if(isset($theme["addon_button_fc"])){
    echo 'color:'.$theme["addon_button_fc"].';';
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

.wpmchimpaf .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
}
.wpmchimpaf .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["addon_button_fch"])){
    echo 'color:'.$theme["addon_button_fch"].';';
}    
if(isset($theme["addon_button_bch"])){
    echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}
.wpmchimpaf .wpmchimpa-subs-button.subsicon:before{
padding-right: 35px;
}
.wpmchimpaf .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 35px;
width: 35px;
top: 0;
right: 0;
pointer-events: none;
  <?php 
  $col = ((isset($theme["addon_bg_c"]))? $theme["addon_bg_c"] : '#fff');
  $bi='b03';
  if(isset($theme["addon_button_i"])){
    if($theme["addon_button_i"] == 'inone')$bi='';
    else if($theme["addon_button_i"] != 'idef')$bi=$theme["addon_button_i"];
  }
  echo 'background: '.$this->getIcon($bi,25,$col).' no-repeat center;';
  ?>
}
.wpmchimpaf .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
}
.wpmchimpaf .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 30px;
display: block;
float:left;
margin-right: 20px;
<?php
if(isset($theme["addon_soc_f"])){
  echo 'font-family:'.$theme["addon_soc_f"].';';
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

.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc{
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
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc::before{
width:30px;
height: 30px;
display: block;
content: '';
background: no-repeat center;
}

.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',16,'#2d609b');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $this->getIcon('fb1',16,'#fff');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',16,'#eb4026');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $this->getIcon('gp1',16,'#fff');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',16,'#00BCF2');?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $this->getIcon('ms1',16,'#fff');?>
}

.wpmchimpaf .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.wpmchimpaf .ripple.show {
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
.wpmchimpaf .wpmchimpa-feedback{
position: relative;
font-size: 12px;
bottom: 10px;
height:14px;
width: 100%;
  margin: -40px 0 22px;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.$theme["addon_status_f"].';';
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

.wpmchimpaf .wpmchimpa-feedback.wpmchimpa-done:before{
content:'';
background:<?=$this->getIcon('ch1',15,'#fff');?> no-repeat center;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 30px auto;
}
.wpmchimpaf .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;height: auto;margin:0;
}

.wpmchimpaf .wpmchimpaf-close-button{
position: absolute;
display: block;
top: 10px;
right: 10px;
width: 25px;
text-align: center;
cursor: pointer;
}
.wpmchimpaf .wpmchimpaf-close-button::before{
content: "\00D7";
font-size: 25px;
line-height: 25px;
font-weight: 100;
color: #fff;
opacity: 0.4;
<?php if(isset($theme["addon_close_col"])){
echo 'color:'.$theme["addon_close_col"].';';
}?>
}
.wpmchimpaf .wpmchimpaf-close-button:hover:before{
opacity: 1;
}

.wpmchimpaf .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.wpmchimpaf .wpmchimpa-signal {
display: none;
}
#wpmchimpaf.signalshow .wpmchimpa-signal {
  display: inline-block;
}
@media only screen and (max-width : 1024px) {
#wpmchimpaf .wpmchimpaf{
  display: none;
}
}
</style>
<div class="wpmchimpaf-tray chimpmatecss wpmchimpselector<?php echo (isset($wpmchimpa["flipbox_orient"]) && $wpmchimpa["flipbox_orient"] != 'right')? (($wpmchimpa["flipbox_orient"] == 'mid')? ' wpmctb_mid':' wpmctb_left' ) : ' wpmctb_right';?>" id="wpmchimpaf">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close">
<?php echo isset($theme['addon_heading'])?'<h3>'.$theme['addon_heading'].'</h3>' : '<h3>Subscribe Now</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  <div class="wpmchimpaf-cont">
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
  <div class="wpmchimpa-social">
      <div class="wpmchimpa-soc wpmchimpa-fb"></div>
      <div class="wpmchimpa-soc wpmchimpa-gp"></div>
      <div class="wpmchimpa-soc wpmchimpa-ms"></div>
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


   <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php
            echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'3','wpmchimpaf',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#0188cc');?></div></div>
  </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
  </div>
</div>
