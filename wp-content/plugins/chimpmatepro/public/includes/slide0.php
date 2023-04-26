<?php 
$theme = $wpmchimpa['theme']['s0'];
$theme['slider_msg'] = htmlspecialchars_decode($theme['slider_msg']);
?>
<style type="text/css">
	
.wpmchimpas {
background-color: #333;
color: #fff;
<?php
    if(isset($theme["slider_bg_c"])){
        echo 'background-color:'.$theme["slider_bg_c"].';';
    }
     if(isset($theme["slider_bg_p"])){
    echo 'background-image:url("'.WPMCA_PLUGIN_URL.'assets/'.$theme["slider_bg_p"].'.png");';
    }?>
}
.wpmchimpas-inner {
text-align: center;
}
.wpmchimpas h3{
  font-size: 18px;
  line-height: 18px;
  margin: 40px 0 20px;
  <?php 
        if(isset($theme["slider_heading_f"])){
          echo 'font-family:'.$theme["slider_heading_f"].';';
        }
        if(isset($theme["slider_heading_fs"])){
            echo 'font-size:'.$theme["slider_heading_fs"].'px;';
        }
        if(isset($theme["slider_heading_fw"])){
            echo 'font-weight:'.$theme["slider_heading_fw"].';';
        }
        if(isset($theme["slider_heading_fst"])){
            echo 'font-style:'.$theme["slider_heading_fst"].';';
        }
        if(isset($theme["slider_heading_fc"])){
            echo 'color:'.$theme["slider_heading_fc"].';';
        }
    ?>
}
.wpmchimpas .wpmchimpa_para{
  margin-bottom: 10px;
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
  font-size: 14px;
  line-height: 20px;
  text-align: center;
    <?php 
        if(isset($theme["slider_msg_f"])){
          echo 'font-family:'.$theme["slider_msg_f"].';';
        }
        if(isset($theme["slider_msg_fs"])){
            echo 'font-size:'.$theme["slider_msg_fs"].'px;';
        }
    ?>
}

.wpmchimpas  .wpmchimpa-field{
position: relative;
width:80%;
margin: 0 auto 12px auto;
<?php 
  if(isset($theme["slider_tbox_w"])){
      echo 'width:'.$theme["slider_tbox_w"].'px;';
  }
?>
}
.wpmchimpas .inputicon{
display: none;
}
.wpmchimpas .wpmc-ficon .inputicon {
display: block;
width: 45px;
height: 45px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["slider_tbox_h"])){
  echo 'width:'.$theme["slider_tbox_h"].'px;';
  echo 'height:'.$theme["slider_tbox_h"].'px;';
}
?>
}
.wpmchimpas .wpmc-ficon input[type="text"],
.wpmchimpas .wpmc-ficon .inputlabel{
  padding-left: 45px;
  <?php 
if(isset($theme["slider_tbox_h"])){
  echo 'padding-left:'.$theme["slider_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpas .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
.wpmchimpas .wpmchimpa-field select,
.wpmchimpas input[type="text"]{
    display: inline-block;
    width:100%;
    background:#fff;
    height:45px;
    text-align: center;
    border:2px solid #fff;
    outline:0;
    border-radius: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
    <?php 
        if(isset($theme["slider_tbox_f"])){
          echo 'font-family:'.$theme["slider_tbox_f"].';';
        }
        if(isset($theme["slider_tbox_fs"])){
            echo 'font-size:'.$theme["slider_tbox_fs"].'px;';
        }
        if(isset($theme["slider_tbox_fw"])){
            echo 'font-weight:'.$theme["slider_tbox_fw"].';';
        }
        if(isset($theme["slider_tbox_fst"])){
            echo 'font-style:'.$theme["slider_tbox_fst"].';';
        }
        if(isset($theme["slider_tbox_fc"])){
            echo 'color:'.$theme["slider_tbox_fc"].';';
        }
        if(isset($theme["slider_tbox_bgc"])){
            echo 'background:'.$theme["slider_tbox_bgc"].';';
        }
        if(isset($theme["slider_tbox_h"])){
            echo 'height:'.$theme["slider_tbox_h"].'px;';
        }
        if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
            echo ' border:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
        }
    ?>
}

.wpmchimpas .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 45px;
height: 45px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["slider_tbox_h"])){
  echo 'width:'.$theme["slider_tbox_h"].'px;';
  echo 'height:'.$theme["slider_tbox_h"].'px;';
}
?>
}
.wpmchimpas input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 45px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
white-space: nowrap;
<?php 
if(isset($theme["slider_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["slider_tbox_f"]).';';
}
if(isset($theme["slider_tbox_fs"])){
    echo 'font-size:'.$theme["slider_tbox_fs"].'px;';
}
if(isset($theme["slider_tbox_fw"])){
    echo 'font-weight:'.$theme["slider_tbox_fw"].';';
}
if(isset($theme["slider_tbox_fst"])){
    echo 'font-style:'.$theme["slider_tbox_fst"].';';
}
if(isset($theme["slider_tbox_fc"])){
    echo 'color:'.$theme["slider_tbox_fc"].';';
}
?>
}
.wpmchimpas input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpas select.wpmcerror,
.wpmchimpas input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpas .wpmchimpa-check *,
.wpmchimpas .wpmchimpa-radio *{
font-size: 16px;
color: #fff;
text-align: left;
<?php
if(isset($theme["slider_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["slider_check_f"]).';';
}
if(isset($theme["slider_check_fs"])){
    echo 'font-size:'.$theme["slider_check_fs"].'px;';
}
if(isset($theme["slider_check_fw"])){
    echo 'font-weight:'.$theme["slider_check_fw"].';';
}
if(isset($theme["slider_check_fst"])){
    echo 'font-style:'.$theme["slider_check_fst"].';';
}
if(isset($theme["slider_check_fc"])){
    echo 'color:'.$theme["slider_check_fc"].';';
}
?>
}
.wpmchimpas .wpmchimpa-item{
  <?php 
    if(isset($theme["slider_check_pline"])){
      if($theme["slider_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["slider_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
.wpmchimpas .wpmchimpa-item input {
  display: none;
}
.wpmchimpas .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  line-height: 20px;
  padding-left: 35px;
  margin-right: 10px;
}

.wpmchimpas .wpmchimpa-item span:before,
.wpmchimpas .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  top: 4px;
  position: absolute;
}

.wpmchimpas .wpmchimpa-item span:before {
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
  if(isset($theme["slider_check_borc"])){
      echo 'border: 1px solid'.$theme["slider_check_borc"].';';
  }
?>
}
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 6px;
left: 4px;
}
.wpmchimpas .wpmchimpa-item input:checked + span:before{
  <?php if(isset($theme["slider_check_c"])) $color = $theme["slider_check_c"]; else $color = '#158EC6';
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}

.wpmchimpas .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpas input[type='checkbox']:checked + span:after {
  content:'';
  background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["slider_check_mark"])){$tfi=$theme["slider_check_mark"];}
        $tfc='#fff';
        if(isset($theme["slider_check_ic"])){$tfc=$theme["slider_check_ic"];}
        echo $this->getIcon($tfi,12,$tfc);?>;
}
.wpmchimpas .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
background-image:<?php echo $this->getIcon($tfi,12,'#444');?>;
opacity: 0.5;
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 12px;
  line-height: 12px;
  margin-bottom: -12px;
  font-size: 11px;
  color: red;
  text-align: left;
pointer-events: none;
  <?php
    if(isset($theme["slider_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["slider_status_f"]).';';
    }
    if(isset($theme["slider_status_fw"])){
        echo 'font-weight:'.$theme["slider_status_fw"].';';
    }
    if(isset($theme["slider_status_fst"])){
        echo 'font-style:'.$theme["slider_status_fst"].';';
    }
  ?>
}
.wpmchimpas input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
            echo ' border:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
        } ?>
}
.wpmchimpas .wpmchimpa-subs-button{
  display:inline-block;
  vertical-align: initial;
  text-align: center;
  width: 70%;
    height:45px;
    background: #62bc33;
  color:#fff;
    cursor:pointer;
    position: relative;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  <?php
        if(isset($wpmchimpa['namebox'])){
          echo 'width:100%;';
        }
        if(isset($theme["slider_button_f"])){
          echo 'font-family:'.$theme["slider_button_f"].';';
        }
        if(isset($theme["slider_button_fs"])){
            echo 'font-size:'.$theme["slider_button_fs"].'px;';
        }
        if(isset($theme["slider_button_fw"])){
            echo 'font-weight:'.$theme["slider_button_fw"].';';
        }
        if(isset($theme["slider_button_fst"])){
            echo 'font-style:'.$theme["slider_button_fst"].';';
        }
        if(isset($theme["slider_button_fc"])){
            echo 'color:'.$theme["slider_button_fc"].';';
        }
        if(isset($theme["slider_button_w"])){
            echo 'width:'.$theme["slider_button_w"].'px;';
        }
        if(isset($theme["slider_button_h"])){
            echo 'height:'.$theme["slider_button_h"].'px;';
        }
        if(isset($theme["slider_button_bc"])){
            echo 'background:'.$theme["slider_button_bc"].';';
        }
        else{ ?>
          background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
        <?php }
        if(isset($theme["slider_button_br"])){
            echo '-webkit-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-moz-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-ms-border-radius:'.$theme["slider_button_br"].'px;';
            echo '-o-border-radius:'.$theme["slider_button_br"].'px;';
            echo 'border-radius:'.$theme["slider_button_br"].'px;';
        }
        if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
            echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-subs-button::before{
   content: '<?php if(isset($theme['slider_button'])) echo $theme['slider_button'];else echo 'Subscribe';?>';
  display: block;
  position: relative;
  line-height: 45px;
  <?php if(isset($theme["slider_button_h"])){
      echo 'line-height:'.$theme["slider_button_h"].'px;';
  } ?>
}
.wpmchimpas .wpmchimpa-subs-button:hover{

    background:#8BD331;
   
  color:#fff;
	<?php 
    if(isset($theme["slider_button_bch"])){
        echo 'background:'.$theme["slider_button_bch"].';';
    }
    else{ ?> 
      background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
    background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
    background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
    background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
    background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
      <?php }
    if(isset($theme["slider_button_fch"])){
        echo 'color:'.$theme["slider_button_fch"].';';
    }
    if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
        echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
    }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon:before{
padding-left: 45px;
  <?php 
  if(isset($theme["slider_button_w"])){
      echo 'padding-left:'.$theme["slider_button_h"].'px;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["slider_button_h"])){
      echo 'width:'.$theme["slider_button_h"].'px;';
      echo 'height:'.$theme["slider_button_h"].'px;';
  }
  if($theme["slider_button_i"] != 'inone' && $theme["slider_button_i"] != 'idef'){
    $col = ((isset($theme["slider_button_fc"]))? $theme["slider_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["slider_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-signalc {
height: 40px;
  margin: 15px;
  text-align: center;
}
.wpmchimpas .wpmchimpa-signal {
display: none;
}
.wpmchimpas-inner.signalshow .wpmchimpa-signal {
  display: inline-block;
}

.wpmchimpas .wpmchimpa-feedback{
margin: -40px 0 22px;
  clear:both;
height: 12px;
position: relative;
  <?php
        if(isset($theme["slider_status_f"])){
          echo 'font-family:'.$theme["slider_status_f"].';';
        }
        if(isset($theme["slider_status_fs"])){
            echo 'font-size:'.$theme["slider_status_fs"].'px;';
        }
        if(isset($theme["slider_status_fw"])){
            echo 'font-weight:'.$theme["slider_status_fw"].';';
        }
        if(isset($theme["slider_status_fst"])){
            echo 'font-style:'.$theme["slider_status_fst"].';';
        }
        if(isset($theme["slider_status_fc"])){
            echo 'color:'.$theme["slider_status_fc"].';';
        }
      ?>
}
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done{
margin: 40px;
height: auto;
}
.wpmchimpas .wpmchimpa-tag{
margin-top: 5px;
}
.wpmchimpas .wpmchimpa-tag,
.wpmchimpas .wpmchimpa-tag *{
color:#fff;
font-size: 10px;
<?php
        if(isset($theme["slider_tag_f"])){
          echo 'font-family:'.$theme["slider_tag_f"].';';
        }
        if(isset($theme["slider_tag_fs"])){
            echo 'font-size:'.$theme["slider_tag_fs"].'px;';
        }
        if(isset($theme["slider_tag_fw"])){
            echo 'font-weight:'.$theme["slider_tag_fw"].';';
        }
        if(isset($theme["slider_tag_fst"])){
            echo 'font-style:'.$theme["slider_tag_fst"].';';
        }
        if(isset($theme["slider_tag_fc"])){
            echo 'color:'.$theme["slider_tag_fc"].';';
        }
      ?>

}
.wpmchimpas .wpmchimpa-tag::before{

   content:<?php
        $tfs=10;
        if(isset($theme["slider_tag_fs"])){$tfs=$theme["slider_tag_fs"];}
        $tfc='#fff';
        if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpas-trig{	
top:40%;display: block;
<?php
    if(isset($theme["slider_trigger_top"])){
        echo 'top:'.$theme["slider_trigger_top"].'%;';
    }
  ?>
}
.wpmchimpas-trigi{ 
background: #000;
width:50px;
height:50px;
<?php
  if(isset($theme["slider_trigger_bg"])){
      echo 'background:'.$theme["slider_trigger_bg"].';';
  }
?>
}
.wpmchimpas-trigi:hover{
opacity:0.7;
}

.wpmchimpas-trigi:before{
<?php 
$ti='a01';
if(isset($theme["slider_trigger_i"])){
  if($theme["slider_trigger_i"] == 'inone')$ti='';
  else if($theme["slider_trigger_i"] != 'idef')$ti=$theme["slider_trigger_i"];
}
 ?>	
content:<?php echo $this->getIcon($ti,32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
}
#wpmchimpas-trig .wpmchimpas-trigh{
<?php
  if(isset($theme["slider_trigger_hider"]))
    echo 'display:block;';
?>
}
#wpmchimpas-trig .wpmchimpas-trigh:before{
<?php
  if(isset($theme["slider_trigger_hc"])){
    echo 'border-right-color: '.$theme["slider_trigger_hc"].';';
    echo 'border-left-color: '.$theme["slider_trigger_hc"].';';
  }
?>
}
</style>
<div id="wpmchimpas" class="scrollhide chimpmatecss">
  <div class="wpmchimpas-cont">
  <div class="wpmchimpas-scroller">
    <div class="wpmchimpas-resp">
    <div class="wpmchimpas-inner wpmchimpselector">
     
<?php if(isset($theme['slider_heading'])) echo '<h3>'.$theme['slider_heading'].'</h3>';?>
<?php if(isset($theme['slider_msg'])) echo '<div class="wpmchimpa_para">'.$theme['slider_msg'].'</div>';?>
	<form action="" method="post" class="wpmchimpa-reset wpmchimpa-mainc">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => false,
  'type' => 1
  );
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
		<div class="wpmchimpa-subs-button<?php echo (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone' && $theme['slider_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
    <?php if(isset($theme['slider_tag_en'])){
        if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
        else $tagtxt='Secure and Spam free...';
        echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
        }?>
    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'1','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#fff');?></div></div>
	</form>
	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>

    </div>
  </div>
</div>
</div>
</div><div class="wpmchimpas-bg chimpmatecss"></div>
<div class="wpmchimpas-overlay chimpmatecss"></div>
<div id="wpmchimpas-trig" class="chimpmatecss" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="wpmchimpas-trigc">
    <div class="wpmchimpas-trigi"></div>
    <div class="wpmchimpas-trigh"></div>
  </div>
</div>