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
#wpmchimpaf .wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 340px;
background: #f7f7f7;
text-align: center;
overflow: hidden;
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  <?php 
    if(isset($theme["addon_bg_c"])){
        echo 'background:'.$theme["addon_bg_c"].';';
    }
  ?>
}
#wpmchimpaf.wpmctb_mid .wpmchimpaf{left: calc(50% - 170px);bottom: 0}
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
.wpmchimpaf .wpmchimpa-leftpane{
width:100%;
position: relative;
}
.wpmchimpaf .wpchimpa-banner{
display: block;
position: relative;
background: <?=(isset($theme['addon_hbg_c'])?$theme['addon_hbg_c']:'#1d91ce')?>;
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
.wpmchimpaf .wpmchimpa-leftpane:after{
content: '';
display: block;
width: 45px;
height: 45px;
position: absolute;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: <?php echo $this->getIcon('b04',20,(isset($theme["addon_hi_c"]))?$theme["addon_hi_c"]:'#fff');?> no-repeat center;
background-color: <?=(isset($theme["addon_hi_bc"])?$theme["addon_hi_bc"]:'#61c0b5')?>;
top:63px;
right: 20px;
z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.wpmchimpaf .wpmchimpa-head{
padding: 0px 0 10px 20px;
position: relative;
text-align: left;
}
.wpmchimpaf h3{
width: 100%;
color: #fff;
font-size: 25px;
line-height: 25px;
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
.wpmchimpaf .wpmchimpa_para,.wpmchimpaf .wpmchimpa_para * {
font-size: 12px;
color: #fff;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}
.wpmchimpaf .wpmchimpa-databox{
width: 100%;
height:100px;
display: block;
background: <?=(isset($theme['addon_exhbc'])?$theme['addon_exhbc']:'#ededed')?>;
position: relative;
text-align: left;
}
.wpmchimpaf .wpmchimpa-databox *{
    color: <?=(isset($theme['addon_exhc1'])?$theme['addon_exhc1']:'#ababab')?>;
  font-family: <?=(isset($theme['addon_exhf'])?$theme['addon_exhf']:'')?>;
  font-weight: <?=(isset($theme['addon_exhfw'])?$theme['addon_exhfw']:'')?>;
  font-style: <?=(isset($theme['addon_exhfst'])?$theme['addon_exhfst']:'')?>;
}
.wpmchimpaf .wpmchimpa-databox .wpmcdate{
padding: 15px 0 0 20px;
display: inline-block;
width: 160px;
position: relative;
float: left;
}
.wpmchimpaf .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 20px;
line-height: 30px;
}
.wpmchimpaf .wpmchimpa-databox .wpmcdm{
font-size: 13px;
line-height: 13px;
}
.wpmchimpaf .wpmchimpa-databox .wpmcdd{
font-size: 60px;
line-height: 60px;
color: <?=(isset($theme['addon_exhc2'])?$theme['addon_exhc2']:'#f95753')?>;
display: inline-block;
float: left;
}
.wpmchimpaf .wpmchimpa-databox .wpmcweat{
padding: 17px 20px 10px 5px;
display: <?=(isset($theme['addon_wloc'])?'inline-block':'none')?>;
width: 180px;
float: right;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwl{
font-size: 15px;
line-height: 15px;
display: inline-block;
position: relative;
top: -3px;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: <?php echo $this->getIcon('loc1',10,(isset($theme['addon_exhc1'])?$theme['addon_exhc1']:'#ababab'));?> no-repeat center;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwc{
font-size: 14px;
line-height: 14px;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin-left: 10px;
float: left;
background: <?php echo $this->getIcon('w'.substr($weatdata->weather[0]->icon,0,2),50);?> no-repeat center;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 7px 10px 0;
font-size: 35px;
line-height: 35px;
}
.wpmchimpaf .wpmchimpa-databox .wpmcwdinac{display: none;}
.wpmchimpaf .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 14px;
line-height: 14px;
margin: 7px 0;
}
.wpmchimpaf .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
.wpmchimpaf .wpmchimpa-databox .wpmcl2owm{
display: <?=(isset($theme['addon_l2owm'])?'block':'none')?>;
font-size: 8px;
  line-height: 8px;
text-decoration: none;
}
.wpmchimpaf .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}
.wpmchimpaf .wpmchimpa-cont{
padding:20px;
}
.wpmchimpaf form {
display: block;
}

.wpmchimpaf  .wpmchimpa-field{
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
.wpmchimpaf .inputicon{
display: none;
}
.wpmchimpaf .wpmc-ficon .inputicon {
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
left: -40px;
pointer-events: none;

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
    echo '.wpmchimpaf .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
.wpmchimpaf .wpmchimpa-field select,
.wpmchimpaf input[type="text"]{
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
    if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
        echo ' border-bottom:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
    }
  ?>
}


.wpmchimpaf .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 40px;
height: 40px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;

}
.wpmchimpaf .wpmchimpa-field select:focus{
  border-color:#61c0b5;
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

.wpmchimpaf input:focus ~ .inputlabel, .wpmchimpaf input:valid ~ .inputlabel {
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

.wpmchimpaf .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;

}
.wpmchimpaf .wpmchimpa-field .bar:before, .wpmchimpaf .wpmchimpa-field .bar:after   {
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
  top:25%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["addon_tbox_w"])){
        echo 'width:'.$theme["addon_tbox_w"].'px;';
    }
?>
}
.wpmchimpaf .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterfb 0.3s ease;
  animation:inputHighlighterfb 0.3s ease;
}
@-webkit-keyframes inputHighlighterfb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterfb {
  from { background:#61c0b5;
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
        $tfc='#61c0b5';
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
pointer-events: none;
  margin-bottom: -12px;
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

.wpmchimpaf .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
color: #fff;
font-size: 20px;
border: 1px solid #59c2b6;
background-color: #61c0b5;
height: 40px;
line-height: 40px;
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
.wpmchimpaf .wpmchimpa-subsc{position: relative;}
.wpmchimpaf .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 

  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ababab');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpaf .wpmchimpa-signalc {
height: 40px;
  margin-top: 10px;
  text-align: center;
}
.wpmchimpaf .wpmchimpa-signal {
display: none;
}
#wpmchimpaf.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpaf .wpmchimpa-feedback{
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
.wpmchimpaf .wpmchimpa-top{
  padding: 5px;
  text-align: center;
}
.wpmchimpaf .wpmchimpa-edit-button,
.wpmchimpaf .wpmchimpa-del-button,
.wpmchimpaf .wpmchimpaf-close-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 5px;
cursor: pointer;
opacity: 0.8;
}

.wpmchimpaf .wpmchimpa-edit-button:hover,
.wpmchimpaf .wpmchimpa-del-button:hover,
.wpmchimpaf .wpmchimpaf-close-button{
opacity: 1;
}
.wpmchimpaf .wpmchimpaf-close-button{
background: <?php echo $this->getIcon('c1',15,(isset($theme["addon_ui_c"]))?$theme["addon_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpaf .wpmchimpa-edit-button{
  right: 10px;
background: <?php echo $this->getIcon('ed1',15,(isset($theme["addon_ui_c"]))?$theme["addon_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpaf .wpmchimpa-del-button{
  right: 30px;
background: <?php echo $this->getIcon('del1',15,(isset($theme["addon_ui_c"]))?$theme["addon_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpaf .wpmchimpa-social{
display: inline-block;
margin-left: 5px;
}
.wpmchimpaf .wpmchimpa-social::before{
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

.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc{
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
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
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
background-image:<?php echo $this->getIcon('fb1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',11,(isset($theme["addon_soc_fc"])?$theme["addon_soc_fc"]:'#fff'));?>
}
.wpmchimpaf .wpmchimpa-social .wpmchimpa-soc:hover{
  -webkit-transform:scale(1.1);
  -ms-transform:scale(1.1);
  transform:scale(1.1);
}

.wpmchimpaf.woexhead .wpmchimpa-databox{
display: none;
}
.wpmchimpaf.woexhead .wpmchimpa-leftpane{
  margin-bottom: 50px;
}
.wpmchimpaf.wosoc .wpmchimpa-social{
  display: none;
}
.wpmchimpaf.wosoc .wpmchimpa-head{
  margin-top: 15px;
}
.wpmchimpaf.wosoc .wpmchimpa-leftpane:after{
  top: 55px
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
font-size: 15px;margin: 0;height: auto;
}

@media only screen and (max-width : 1024px) {
#wpmchimpaf .wpmchimpaf{
  display: none;
}
}
</style>
<div class="wpmchimpaf-tray chimpmatecss wpmchimpselector<?php echo (isset($wpmchimpa["flipbox_orient"]) && $wpmchimpa["flipbox_orient"] != 'right')? (($wpmchimpa["flipbox_orient"] == 'mid')? ' wpmctb_mid':' wpmctb_left' ) : ' wpmctb_right';?>" id="wpmchimpaf">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close <?=(isset($theme['addon_exhead'])?'woexhead':'')?> <?=(isset($theme['addon_dissoc'])?'wosoc':'')?> ">
  <div class="wpmchimpa-leftpane">
          <div class="wpchimpa-banner">
            <div class="wpmchimpa-top">
              <div class="wpmchimpaf-close-button"></div>
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
    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
    echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'1','wpmchimpaf',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#61c0b5');?></div></div>
    </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
  </div>
  </div>
