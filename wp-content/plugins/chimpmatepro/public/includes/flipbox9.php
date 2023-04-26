<?php 
$theme = $wpmchimpa['theme']['a9'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
?>
<style type="text/css">
#wpmchimpaf .wpmchimpaf{
  position:fixed;z-index: 99999;
  display: inline-block;
  width: 320px;
background: #27313B;
text-align: center;
box-shadow: 0 0 20px rgba(0,0,0,.2);
overflow: hidden;
border-radius: 3px;
padding: 0 5px;
  -webkit-backface-visibility: hidden;
-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  <?php 
    if(isset($theme["addon_bg_c"])){
        echo 'background:'.$theme["addon_bg_c"].';';
    }
  ?>
}
#wpmchimpaf.wpmctb_mid .wpmchimpaf{left: calc(50% - 160px);bottom: 0}
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
.wpmchimpaf div{
  position:relative;
}
.wpmchimpaf h3{
color: #F4233C;
line-height: 20px;
padding-top:18px;
font-size: 20px;
<?php 
  if(isset($theme["addon_heading_f"])){
    echo 'font-family:'.$theme["addon_heading_f"].';';
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
.wpmchimpaf .wpmchimpa_para{
  margin: 12px auto;
}
.wpmchimpaf .wpmchimpa_para,.wpmchimpaf .wpmchimpa_para * {
font-size: 12px;
color: #959595;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.$theme["addon_msg_f"].';';
}?>
}
.wpmchimpaf form{
margin: 20px auto;
}
.wpmchimpaf .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
.wpmchimpaf .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
.wpmchimpaf .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
.wpmchimpaf  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
text-align: left;

}
.wpmchimpaf .inputicon{
display: none;
}
.wpmchimpaf .wpmc-ficon .inputicon {
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;

}
.wpmchimpaf .wpmc-ficon input[type="text"],
.wpmchimpaf .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 35px;

}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a02';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c06';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '.wpmchimpaf .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,15,$col).' no-repeat center}';
}
?>
.wpmchimpaf .wpmchimpa-field select,
.wpmchimpaf input[type="text"]{
text-align: left;
width: 100%;
height: 35px;
background: #fff;
 padding: 0 10px;
border-radius: 3px;
color: #353535;
font-size:14px;
outline:0;
display: block;
border: 1px solid #efefef;
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
  if(isset($theme["addon_tbox_fc"])){
      echo 'color:'.$theme["addon_tbox_fc"].';';
  }
  if(isset($theme["addon_tbox_bgc"])){
      echo 'background:'.$theme["addon_tbox_bgc"].';';
  }
  if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
      echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
  }
?>
}


.wpmchimpaf .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 35px;
height: 35px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;

}
.wpmchimpaf input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 35px;
color: rgba(0,0,0,0.6);
font-size: 14px;
font-weight:500;
padding: 0 10px;
white-space: nowrap;
<?php 
if(isset($theme["addon_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_tbox_f"]).';';
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
if(isset($theme["addon_tbox_fc"])){
    echo 'color:'.$theme["addon_tbox_fc"].';';
}
?>
}
.wpmchimpaf input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpaf select.wpmcerror,
.wpmchimpaf input[type="text"].wpmcerror{
  border-color: red;
}

.wpmchimpaf .wpmchimpa-check *,
.wpmchimpaf .wpmchimpa-radio *{
  color: #fff;
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
  margin-right: 10px;
  line-height: 20px;
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
}
.wpmchimpaf .wpmchimpa-item span:before {
border:1px solid #ccc;
border-radius: 1px;
background-color: #fff;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
  if(isset($theme["addon_check_borc"])){
      echo 'border: 1px solid'.$theme["addon_check_borc"].';';
  }
 if(isset($theme["addon_check_c"]))echo 'background: '.$theme["addon_check_c"].';';?>
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpaf input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch2';
        if(isset($theme["addon_check_mark"])){$tfi=$theme["addon_check_mark"];}
        $tfc='#000';
        if(isset($theme["addon_check_ic"])){$tfc=$theme["addon_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.wpmchimpaf .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
.wpmchimpaf input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
.wpmchimpaf .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
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
border-radius: 0 3px 3px 0;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #FA0B38;
background-color: #FF1F43;
height: 35px;
line-height: 30px;
text-align: center;
cursor: pointer;
position: relative;
top: 0;
transition: all 0.5s ease;
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
      echo 'background:'.$theme["addon_button_bc"].';';
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
  display: block;
}
.wpmchimpaf .wpmchimpa-subs-button:hover{
background-color: #FA0B38; 
    <?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
      ?>
}
.wpmchimpaf .wpmchimpa-subsc{
  text-align: center;
}
.wpmchimpaf .wpmchimpa-subs-button.subsicon:before{
padding-left: 35px;

}
.wpmchimpaf .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 35px;
width: 35px;
top: 0;
left: 0;
pointer-events: none;
  <?php 

  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],15,$col).' no-repeat center;';
  }
  ?>
}
#wpmchimpaf.signalshow .wpmchimpa-subs-button::after,
#wpmchimpaf.signalshow .wpmchimpa-subs-button::before{
  display: none;
}

.wpmchimpaf .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.$theme["addon_status_f"].';';
    }
    if(isset($theme["addon_status_fs"])){
        echo 'font-size:'.$theme["addon_status_fs"].'px;';
        echo 'height:'.$theme["addon_status_fs"].'px;';
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
font-size: 15px;height: auto;  margin: 10px;
}


.wpmchimpaf .wpmchimpaf-close-button {
display: inline-block;
top: 0;
right: 0;
width: 25px;
position: absolute;
cursor:pointer;
}

.wpmchimpaf .wpmchimpaf-close-button::before {
    content: "\00D7";
font-size: 25px;
line-height: 25px;
font-weight: 100;
color: #999;
opacity: 0.4;
}
.wpmchimpaf .wpmchimpaf-close-button:hover:before {
opacity: 1;
}

.wpmchimpaf .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 4px;
  left: calc(50% - 20px);
  position: absolute;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
#wpmchimpaf.signalshow .wpmchimpa-signal{
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
          <?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
      
    <div class="wpmchimpaf-close-button"></div>
  
    <?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
  <form action="" method="post">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
'icon' => true,
'bui' => (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')?true:false,
'type' => 2,
'sig' => $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'8','wpmchimpaf',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000')
);
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme(); ?>
  
                <div style="clear:both"></div>

  </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>