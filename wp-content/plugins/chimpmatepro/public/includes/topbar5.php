<?php 
$theme = $wpmchimpa['theme']['a5'];
$topid = 'wpmchimpat' . (isset($topbar_scode)?$topbar_scode:'');
?>
<style type="text/css">
.wpmchimpat{
position:fixed;z-index: 99999;
display: block;
width: 100%;
height: 50px;
background: #fff;
box-shadow: 0 0 20px rgba(0,0,0,.2);
left: 0;
text-align: center;
overflow: hidden;
-webkit-transition: margin 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),-webkit-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
transition: margin 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -webkit-backface-visibility: hidden;
<?php 
  if(isset($theme["addon_bg_c"])){
      echo 'background:'.$theme["addon_bg_c"].';';
  }
?>
}
.wpmchimpat.wpmctb_top{
top:0;
}
.wpmchimpat.wpmctb_bot{
bottom:0;
}
.wpmchimpat.wpmctb_top.wpmchimpat-close{
margin:-50px 0 0 ;
}
.wpmchimpat.wpmctb_bot.wpmchimpat-close{
margin: 0 0 -50px;
}

.wpmchimpat .wpmchimpat-cont{
  display: block;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 75%;
  margin:0 auto;
  padding: 7px;
  text-align: center;
}
.wpmchimpat .wpmchimpat-cont > *{
position: relative;
display: inline-block;
}
.wpmchimpat h3{
display: inline-block;
position: relative;
  white-space: nowrap;
}
.wpmchimpat h3:before{
content: '';
background: no-repeat top center;
background-image: <?php echo $this->getIcon('glowblur1',400,(isset($theme['addon_glw1_c'])?$theme['addon_glw1_c']:'#979797'),(isset($theme['addon_glw1_b'])?$theme['addon_glw1_b']:'15'));?>;
position: absolute;
  left: -75%;
  top: -25px;
  width: 250%;
padding-top: 200px;
}
.wpmchimpat h3 span{
  position: relative;
font-size: 18px;
color: #000;
line-height: 30px;
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

.wpmchimpat .wpmchimpa-field{
position: relative;
width:30%;
display: inline-block;
vertical-align: top;
text-align: left;
}
.wpmchimpat .wpmchimpa-field.wpmctop{
margin-left: 10px;
}
.wpmchimpat .inputicon{
display: none;
}
.wpmchimpat .wpmc-ficon .inputicon {
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;

}
.wpmchimpat .wpmc-ficon input[type="text"],
.wpmchimpat .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 35px;

}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ccc');
foreach ($fields as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpat .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],15,$col).' no-repeat center}';
}
?>
.wpmchimpat .wpmchimpa-field select,
.wpmchimpat input[type="text"]{
  z-index: 1;
text-align: left;
width: 100%;
height: 35px;
background: #efefef;
padding: 0 10px;
color: #000;
font-size:19px;
outline:0;
display: block;
border: 1px solid #ccc;
border-right: none;
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

.wpmchimpat .wpmchimpa-form{
  margin-top: 10px;
}
.wpmchimpat .formbox input[type="text"]{
  padding-right:35px;
}
.wpmchimpat .wpmctop select,
.wpmchimpat .wpmctop input[type="text"] {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
.wpmchimpat .wpmcbot select,
.wpmchimpat .wpmcbot input[type="text"] {
  border-bottom-right-radius: 5px;
  border-right: 1px solid #ccc;
  border-top-right-radius: 5px;
}
.wpmchimpat .wpmchimpa-field.wpmchimpa-drop:before{
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
.wpmchimpat input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 35px;
overflow: hidden;
color: rgba(0,0,0,0.6);
font-size: 19px;
font-weight:500;
padding: 0 10px;
white-space: nowrap;
text-overflow: ellipsis;
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
.wpmchimpat input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpat select.wpmcerror,
.wpmchimpat input[type="text"].wpmcerror{
  border: 1px solid red;
}
.wpmchimpat .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-top: -10px;
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
.wpmchimpat .wpmchimpa-subs-button{
border-radius: 50%;
width: 25px;
height: 25px;
<?php $subsc = (isset($theme["addon_inico_c"])?$theme["addon_inico_c"] : '#ccc');?>
border: 1px solid <?=$subsc?>;
line-height: 35px;
text-align: center;
cursor: pointer;
position: absolute;
top: 5px;
right: 5px;
background: center no-repeat;
<?php
$bic = ((isset($theme["addon_button_i"]) && $theme["addon_button_i"] != 'idef')? (($theme["addon_button_i"] != 'inone')? $theme["addon_button_i"] : '') : 'd01');
echo 'background-image: '.$this->getIcon($bic,15,$subsc).';';
?>
}
.wpmchimpat.signalshow .wpmchimpa-subs-button{
  display: none;
}
.wpmchimpat .wpmchimpa-signal {
display: none;
position: absolute;
top: 3px;
right: 3px;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
}
.wpmchimpat.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpat .wpmchimpa-feedback{
position: absolute;
bottom: 0;
font-size: 10px;
text-align: center;
color: #ccc;
width: 100%;
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
.wpmchimpat .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: inline-block;
position: relative;
float: left;
margin: 5px 20px 0 0;
background-color: #01E169;
}
.wpmchimpat .wpmchimpa-feedback.wpmchimpa-done{
line-height: 50px;
font-size: 15px;
position: relative;
display: inline-block;
width: auto;
}
.wpmchimpat .wpmchimpat-close-button {
width: 18px;
height: 18px;
border-radius: 50%;
  position: absolute;
  right: 15px;
  top: 15px;
cursor: pointer;
background-position: center;
background-repeat: no-repeat;
background-color: #f67a00;
background-image: <?php echo $this->getIcon('c2',8,'#000');?>
}

@media only screen and (max-width : 1200px) {
#wpmchimpat h3{font-size: 13px;}
}
@media only screen and (max-width : 1024px) {
#wpmchimpat{display: none;}
}
<?php if(isset($topbar_scode)){?>
@media only screen and (max-width : 650px) {
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-field{width: 100%;margin: 0}
#wpmchimpat<?php echo $topbar_scode;?> select,#wpmchimpat<?php echo $topbar_scode;?> input[type="text"] {border-bottom: none;border-right: 1px solid #ccc;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmctop select,#wpmchimpat<?php echo $topbar_scode;?> .wpmctop input[type="text"] {border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius:0;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmcbot select,#wpmchimpat<?php echo $topbar_scode;?> .wpmcbot input[type="text"] {border-bottom-right-radius: 5px;border-bottom: 1px solid #ccc;border-bottom-left-radius: 5px;border-top-right-radius:0;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpat-cont{flex-direction:column;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-signalc {position: relative;top: 0;margin: 0 auto;}
}
<?php } ?>
</style>
<div class="wpmchimpa-reset wpmchimpat chimpmatecss<?php echo (!isset($topbar_scode)?' wpmchimpat-close':'');?> wpmchimpselector<?php echo (isset($wpmchimpa["topbar_orient"]) && $wpmchimpa["topbar_orient"] == 'bot')? ' wpmctb_bot' : ' wpmctb_top';?>" id="<?php echo $topid;?>">
    <form action="" method="post">
    <div class="wpmchimpat-cont">
      <?php if(isset($theme['addon_heading'])) echo '<h3><span>'.$theme['addon_heading'].'</span></h3>';?>
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
'icon' => false,
'type' => 3,
'spin' => $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'3',$topid,isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000')
);
$this->stfield($fields,$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
     </div>
    </form>
    <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    <div class="wpmchimpat-close-button"></div>
</div>