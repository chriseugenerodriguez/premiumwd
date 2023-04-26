<?php 
$theme = $wpmchimpa['theme']['a8'];
$topid = 'wpmchimpat' . (isset($topbar_scode)?$topbar_scode:'');
?>
<style type="text/css">
.wpmchimpat{
position:fixed;z-index: 99999;
display: block;
width: 100%;
height: 50px;
background: #262E43;
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
}

.wpmchimpat h3{
display: inline-block;
font-size: 18px;
color: #fff;
  white-space: nowrap;
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
width:<?php echo ((count($fields) > 1)? 21 : 30); ?>%;
margin: 0 10px;
display: inline-block;
vertical-align: top;
text-align: left;
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
.wpmchimpat .wpmchimpa-field.wpmc-ficon input[type="text"],
.wpmchimpat .wpmchimpa-field.wpmc-ficon .inputlabel{
  padding-left: 35px;

}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#888');
foreach ($fields as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpat .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
.wpmchimpat .wpmchimpa-field select,
.wpmchimpat input[type="text"]{
text-align: left;
height: 35px;
width: 100%;
background: #fff;
padding:  0 10px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #353535;
font-size: 17px;
outline:0;
display: block;
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
text-overflow: ellipsis;
right: 0;
pointer-events: none;
width: 100%;
overflow: hidden;
line-height: 35px;
color: rgba(0,0,0,0.6);
font-size: 17px;
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
.wpmchimpat input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpat select.wpmcerror,
.wpmchimpat input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpat .wpmcinfierr{
  display: block;
  height: 10px;
  line-height: 10px;
  margin-top: -10px;
pointer-events: none;
  font-size: 10px;
  color: red;
  position: absolute;
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
.wpmchimpat div.wpmchimpa-subs-button{
display:inline-block;
width: 100%;
height:35px;
line-height: 35px;
color:#fff;
text-shadow:none;
font-size: 17px;
border: 1px solid #50B059;
background-color: #73C557;
text-align: center;
cursor: pointer;
border-radius: 3px;
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
  display: block;
  white-space: nowrap;
}
.wpmchimpat .wpmchimpa-subs-button:hover{
background-color: #50B059;
<?php if(isset($theme["addon_button_fch"])){
echo 'color:'.$theme["addon_button_fch"].';';
}
if(isset($theme["addon_button_bch"])){
echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}
.wpmchimpat .wpmchimpa-subsc{
  position: relative;
  width: 21%;
  display: inline-block;
}
.wpmchimpat .wpmchimpa-subs-button.subsicon:before{
padding-left: 35px;

}
.wpmchimpat .wpmchimpa-subs-button.subsicon::after{
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
     echo 'background: '.$this->getIcon($theme["addon_button_i"],25,$col).' no-repeat center;';
  }
  ?>
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
display: inline-block;
width: 2em;
height: 2em;
line-height: 2em;
right: 10px;
top:10px;
position: absolute;
cursor:pointer;
}

.wpmchimpat .wpmchimpat-close-button::before {
    content: "\00D7";
    font-size: 25px;
    font-weight: 100;
    color: #959595;
  }
.wpmchimpat .wpmchimpat-close-button:hover:before {
    color: #000;
}

.wpmchimpat .wpmchimpa-signal {
display: none;
position: absolute;
top: 3px;
right: 2px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}
.wpmchimpat.signalshow .wpmchimpa-signal {
  display: inline-block;
}
@media only screen and (max-width : 1200px) {
#wpmchimpat h3{font-size: 13px;}
}
@media only screen and (max-width : 1024px) {
#wpmchimpat{
    display: none;
}
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
  <?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>'; ?>
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => false,
  'type' => 1
  );
$this->stfield($fields,$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
              <div class="wpmchimpa-subsc">
                <div class="wpmchimpa-subs-button<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
          <div class="wpmchimpa-signal"><?php 
      echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'3',$topid,isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000');?></div>
      </div>
     </div>
    </form>
    <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    <div class="wpmchimpat-close-button"></div>
</div>