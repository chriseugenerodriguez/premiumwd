<?php 
$theme = $wpmchimpa['theme']['a6'];
$topid = 'wpmchimpat' . (isset($topbar_scode)?$topbar_scode:'');
?>
<style type="text/css">
.wpmchimpat{
position:fixed;z-index: 99999;
display: block;
width: 100%;
height: 50px;
background: #4097D3;
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
line-height: 30px;
color: #FFD804;
text-decoration: underline;
  white-space: nowrap;
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
text-align: left;
vertical-align: top;
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
  padding-left: 40px;

}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#4097D3');
foreach ($fields as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a05';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c01';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '.wpmchimpat .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,17,$col).' no-repeat center}';
}
?>
.wpmchimpat .wpmchimpa-field select,
.wpmchimpat input[type="text"]{
width: 100%;
text-align: left;
height: 35px;
outline:0;
display: block;
background: #0D65A1;
padding: 0 20px;
border-radius: 8px;
color: #fff;
font-size:15px;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
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
right: 0;
pointer-events: none;
width: 100%;
line-height: 35px;
color: <?=$col?>;
overflow: hidden;
font-size: 15px;
font-weight:500;
padding: 0 20px;
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
  border-color: red;
}
.wpmchimpat .wpmcinfierr{
  display: block;
  height: 10px;
pointer-events: none;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
  position: absolute;
  pointer-events:none;
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
color:#0D65A1;
text-shadow:none;
text-align: center;
cursor: pointer;
color: #4097D3;
font-size: 17px;
box-shadow:2px 2px 0 0 #CCAE0A;
border-radius: 8px;
background-color: #FFD804;
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
echo 'background-color:'.$theme["addon_button_bc"].';';
}
if(isset($theme["addon_button_br"])){
echo '-webkit-border-radius:'.$theme["addon_button_br"].'px;';
echo '-moz-border-radius:'.$theme["addon_button_br"].'px;';
echo 'border-radius:'.$theme["addon_button_br"].'px;';
}
$lbb=2;
if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
  $lbb=$theme["addon_button_bor"];
echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["addon_button_borc"].';';
}
?>
}

.wpmchimpat .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
  display: block;
  white-space: nowrap;
}
.wpmchimpat .wpmchimpa-subs-button:active{
box-shadow:2px 2px 0 0 #FFD804;
<?php 
if(isset($theme["addon_button_bc"])){
    echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["addon_button_bc"].';';
}?>
}
.wpmchimpat .wpmchimpa-subs-button:hover{
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
padding-left: 50px;

}
.wpmchimpat .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 50px;
width: 50px;
top: 0;
left: 0;
pointer-events: none;
  <?php 

  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#0D65A1');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],17,$col).' no-repeat center;';
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
position: absolute;
display: block;
top: 10px;
right: 10px;
width: 26px;
height: 26px;
text-align: center;
background: #FFF;
cursor: pointer;
border-radius: 50%;
box-shadow: 2px 2px 6px 0 rgba(0,0,0,0.3);
}

.wpmchimpat .wpmchimpat-close-button::before {
content: "\00D7";
font-size: 26px;
line-height: 26px;
font-weight: 100;
color: #000;
opacity: 0.7;
}
.wpmchimpat .wpmchimpat-close-button:hover:before {
opacity: 1;
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
#wpmchimpat{display: none;}
}
<?php if(isset($topbar_scode)){?>
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
  'icon' => true,
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