<?php 
$theme = $wpmchimpa['theme']['a0'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
?>
<style type="text/css">
.wpmchimpaf{
	position:fixed;z-index: 99999;
	display: inline-block;
	width: 320px;
	background: #000;
padding-bottom: 35px
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
.wpmchimpaf .wpmchimpaf-head{
  width: 100%;
  height: 35px;
}
.wpmchimpaf h3{
display: block;
width: 200px;
font-size:15px;
line-height: 35px;
font-weight:400;
color:#fff;
padding-left: 10px;
float: left;
width: 100%;
text-align: center;
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
  margin-bottom: 10px;
}
.wpmchimpaf .wpmchimpa_para,.wpmchimpaf .wpmchimpa_para * {
  color: #fff;
<?php if(isset($theme["addon_msg_f"])){
echo 'font-family:'.str_replace("|ng","",$theme["addon_msg_f"]).';';
}?>
}
.wpmchimpaf .wpmchimpaf-cont{
  padding:10px;
  text-align: center;
}

.wpmchimpaf .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
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
left: 0;
pointer-events: none;
}
.wpmchimpaf .wpmc-ficon input[type="text"],
.wpmchimpaf .wpmc-ficon .inputlabel{
  padding-left: 30px;
}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpaf .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
.wpmchimpaf .wpmchimpa-field select,
.wpmchimpaf input[type="text"]{
    display: inline-block;
    width:100%;
    background:#fff;
    height:30px;
    text-align: center;
    border:2px solid #fff;
    outline:0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
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
width: 30px;
height: 30px;
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
line-height: 30px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
white-space: nowrap;
text-align: center;
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
text-align: left;
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
}

.wpmchimpaf .wpmchimpa-item span:before,
.wpmchimpaf .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  top: 4px;
  position: absolute;
}

.wpmchimpaf .wpmchimpa-item span:before {
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
  if(isset($theme["addon_check_borc"])){
      echo 'border: 1px solid'.$theme["addon_check_borc"].';';
  }
?>
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
.wpmchimpaf .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 6px;
left: 4px;
}
.wpmchimpaf .wpmchimpa-item input:checked + span:before{
  <?php if(isset($theme["addon_check_c"])) $color = $theme["addon_check_c"]; else $color = '#158EC6';
  print_r('box-shadow: inset 0 0 0 10px '.$color.';');?>
}

.wpmchimpaf .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpaf input[type='checkbox']:checked + span:after {
  content:'';
  background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["addon_check_mark"])){$tfi=$theme["addon_check_mark"];}
        $tfc='#fff';
        if(isset($theme["addon_check_ic"])){$tfc=$theme["addon_check_ic"];}
        echo $this->getIcon($tfi,12,$tfc);?>;
}
.wpmchimpaf .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
background-image:<?php echo $this->getIcon($tfi,12,'#444');?>;
opacity: 0.5;
}
.wpmchimpaf .wpmcinfierr{
  text-align: left;
  display: block;
  height: 10px;
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
.wpmchimpaf input[type="email"]:focus,.wpmchimpaf input[type="text"]:focus {
    border:2px solid #ddd;
    <?php 
        if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
            echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
        } ?>
}
.wpmchimpaf .wpmchimpa-subs-button{
  display:inline-block;
  text-align: center;
  width: 100%;
    height:28px;
    line-height: 28px;
    margin-bottom:10px;
    background: #62bc33;
  color:#fff;
    cursor:pointer;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-shadow:none;
    border: 0;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    border-radius: 1px;
    position: relative;
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
        else{ ?>
          background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
          background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
          background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);
        <?php }
        if(isset($theme["addon_button_br"])){
            echo '-webkit-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-moz-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-ms-border-radius:'.$theme["addon_button_br"].'px;';
            echo '-o-border-radius:'.$theme["addon_button_br"].'px;';
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
  position: relative;
  line-height: 28px;
}
.wpmchimpaf .wpmchimpa-subs-button:hover{
    background:#8BD331;   
  color:#fff;
	<?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        else{ ?> 
          background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
        background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
        background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);
          <?php }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
        if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
            echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpaf .wpmchimpa-subs-button.subsicon:before{
padding-left: 28px;
}
.wpmchimpaf .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 28px;
width: 28px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpaf .wpmchimpa-feedback{
margin: -40px 0 22px;
  clear:both;
height:14px;
position: relative;
color: #fff;
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

.wpmchimpaf .wpmchimpa-feedback.wpmchimpa-done{
  margin: 0;
  height: auto;
}

.wpmchimpaf .wpmchimpaf-close-button {
display: inline-block;
width: 1.5em;
height: 1.5em;
right: 10px;
top:5px;
position: absolute;
border: 0.1em solid #7e7e7e;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
-msborder-radius: 50%;
-o-border-radius: 50%;
border-radius: 50%;
cursor:pointer;
background-color: #7e7e7e;
-moz-transform: rotate(45deg); 
-o-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
transform: rotate(45deg);
transition: all 0.5s ease;
}


.wpmchimpaf .wpmchimpaf-close-button::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 80%;
    height: 6%;;
    left: 10%;
    top: 47%;
  }

  .wpmchimpaf .wpmchimpaf-close-button::after {
    content: "";
    display: block;
    position: absolute;
    background-color: #000;
    width: 6%;
    height: 80%;
    left: 47%;
    top: 10%;
  }
  .wpmchimpaf .wpmchimpaf-close-button:hover {
    background-color: #fff; 
    -ms-transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    -moz-transform: rotate(225deg); 
    -o-transform: rotate(225deg); 
    transform: rotate(225deg); 
  } 

.wpmchimpaf .wpmchimpaf-close-button:hover::after {
      background-color: #7e7e7e;
    }
.wpmchimpaf .wpmchimpaf-close-button:hover::before {
      background-color: #7e7e7e;
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
@media only screen and (max-width : 1024px) {
.wpmchimpaf{
	display: none;
}
}
</style>
<div class="wpmchimpaf-tray chimpmatecss wpmchimpselector<?php echo (isset($wpmchimpa["flipbox_orient"]) && $wpmchimpa["flipbox_orient"] != 'right')? (($wpmchimpa["flipbox_orient"] == 'mid')? ' wpmctb_mid':' wpmctb_left' ) : ' wpmctb_right';?>" id="wpmchimpaf">
<div class="wpmchimpa-reset wpmchimpaf wpmchimpaf-close">
  <div class="wpmchimpaf-head">
<?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
    <div class="wpmchimpaf-close-button"></div>
  </div>
  <div class="wpmchimpaf-cont">
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
  <form action="" method="post">
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
                        <div class="wpmchimpa-subs-button<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
   <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php
            echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'1','wpmchimpaf',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#fff');?></div></div>
	</form>
	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
  </div>
</div>
</div>