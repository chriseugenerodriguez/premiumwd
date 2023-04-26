<?php 
$theme = $wpmchimpa['theme']['a7'];
$topid = 'wpmchimpat' . (isset($topbar_scode)?$topbar_scode:'');
$this->extrascript(1);
$this->extrascript(2);
?>
<style type="text/css">
.wpmchimpat{
position:fixed;z-index: 99999;
display: block;
width: 100%;
height: 50px;
background: #f7f7f7;
box-shadow: 0 0 20px rgba(0,0,0,.2);
left: 0;
text-align: center;
-webkit-transition: margin 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),-webkit-transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
transition: margin 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86),transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);

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
.wpmchimpat h3{
display: inline-block;
font-size: 18px;
color: #888;
line-height: 30px;
vertical-align: top;
margin-right: 10px;
  white-space: nowrap;
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
  if(isset($theme["addon_hbg_c"])){
      echo 'color:'.$theme["addon_hbg_c"].';';
  }
?>
}

.wpmchimpat .wpmchimpa-field{
position: relative;
margin: 0 10px 10px 30px;
text-align: left;
width:<?php echo ((count($fields) > 1)? 21 : 30); ?>%;
display: inline-block;
vertical-align: top;

}
.wpmchimpat .inputicon{
display: none;
}
.wpmchimpat .wpmc-ficon .inputicon {
display: block;
width: 30px;
height: 30px;
position: absolute;
top: 0;
left: -30px;
pointer-events: none;

}

<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ababab');
foreach ($fields as $f) {
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
    echo '.wpmchimpat .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
.wpmchimpat .wpmchimpa-field select,
.wpmchimpat input[type="text"]{
  font-size:18px;
  padding: 0 10px;
  display:inline-block;
  width:100%;
  height: 30px;
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


.wpmchimpat .wpmchimpa-field.wpmchimpa-drop:before{
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
.wpmchimpat .wpmchimpa-field select:focus{
  border-color:#61c0b5;
    <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'border-color:'.$theme["addon_tbox_fc"].';';
  }
   ?>
}
.wpmchimpat input[type="text"] ~ .inputlabel{
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all;
  color:#999;
  font-size:18px;
  font-weight:normal;
  cursor:default;
  position:absolute;
overflow: hidden;
  pointer-events: none;
text-overflow: ellipsis;
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

.wpmchimpat input:focus ~ .inputlabel, .wpmchimpat input:valid ~ .inputlabel {
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

.wpmchimpat .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;

}
.wpmchimpat .wpmchimpa-field .bar:before, .wpmchimpat .wpmchimpa-field .bar:after   {
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
.wpmchimpat .wpmchimpa-field .bar:before {
  left:50%;
}
.wpmchimpat .wpmchimpa-field .bar:after {
  right:50%; 
}
.wpmchimpat .wpmchimpa-field input:focus ~ .bar:before, .wpmchimpat .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
.wpmchimpat .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:25%; 
  left:0;
  opacity:0.5;

}
.wpmchimpat .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlightertb 0.3s ease;
  animation:inputHighlightertb 0.3s ease;
}
@-webkit-keyframes inputHighlightertb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlightertb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["addon_tbox_fc"])){
      echo 'background-color:'.$theme["addon_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

.wpmchimpat select.wpmcerror,
.wpmchimpat input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpat .wpmcinfierr{
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
.wpmchimpat .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
color: #fff;
font-size: 18px;
border: 1px solid #59c2b6;
background-color: #61c0b5;
height: 30px;
line-height: 30px;
text-align: center;
cursor: pointer;
position: relative;
overflow: hidden;
display: inline-block;
width: 100%;
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

.wpmchimpat .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
}
.wpmchimpat .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["addon_button_fch"])){
    echo 'color:'.$theme["addon_button_fch"].';';
}    
if(isset($theme["addon_button_bch"])){
    echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}
.wpmchimpat .subsicon .wpmchimpa-subs-button{
  margin-left: 30px;

}
.wpmchimpat .wpmchimpa-subsc{position: relative;display: inline-block;width: 21%}
.wpmchimpat .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 30px;
width: 30px;
top: 0;
left: 0;
pointer-events: none;
  <?php 

  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#ababab');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],20,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpat .wpmchimpa-feedback{
position: absolute;
bottom: 0;
font-size: 10px;
text-align: center;
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
display: inline-block;
  width: 30px;
  height: 35px;
right: 10px;
top:7px;
position: absolute;
cursor:pointer;
opacity: 0.4;
background: <?php echo $this->getIcon('c1',15,'#000');?> no-repeat center;
}
.wpmchimpat .wpmchimpat-close-button:hover {
opacity: 1
}
.wpmchimpat .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.wpmchimpat .ripple.show {
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
.wpmchimpat .wpmchimpa-signalc {
height: 40px;
top:6px;
right:60px;
position: absolute;
}
.wpmchimpat .wpmchimpa-signal {
display: none;
}
.wpmchimpat.signalshow .wpmchimpa-signal {
  display: inline-block;
}
@media only screen and (max-width : 1200px) {
#wpmchimpat h3{font-size: 13px;}
}

@media only screen and (max-width : 1024px) {
#wpmchimpat{display: none;}
}
<?php if(isset($topbar_scode)){?>
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-signalc {top: calc(50% - 14px);right: 0;width: 40px;}
@media only screen and (min-width : 650px) {
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-signal {-webkit-transform: scale(0.6);transform: scale(0.6);-webkit-transform-origin: left;transform-origin: left;}
}
@media only screen and (max-width : 650px) {
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-field,#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-subsc{width: 100%;margin-bottom: 10px;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpat-cont{flex-direction:column;}
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-signalc {position: relative;top: 0;margin: 0 auto;}
}
<?php } ?>
</style>

<div class="wpmchimpa-reset wpmchimpat chimpmatecss<?php echo (!isset($topbar_scode)?' wpmchimpat-close':'');?> wpmchimpselector<?php echo (isset($wpmchimpa["topbar_orient"]) && $wpmchimpa["topbar_orient"] == 'bot')? ' wpmctb_bot' : ' wpmctb_top';?>" id="<?php echo $topid;?>">
    <form action="" method="post">
    <div class="wpmchimpat-cont">
  <?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => true,
  'type' => 4
  );
$this->stfield($fields,$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
<div class="wpmchimpa-subsc<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>">
  <div class="wpmchimpa-subs-button wpmchimpa-matbut"></div>
</div>
     </div>
   <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php
            echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'1',$topid,isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#61c0b5');?></div></div>

    </form>
    <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    <div class="wpmchimpat-close-button"></div>
</div>
