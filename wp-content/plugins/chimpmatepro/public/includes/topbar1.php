<?php 
$theme = $wpmchimpa['theme']['a1'];
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
.wpmchimpat.wpmchimpat-close{
visibility: hidden;
}
.wpmchimpat .wpmchimpat-cont{
  display: block;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 75%;
  margin:0 auto;
  padding: 8px;
  text-align: center;
}
.wpmchimpat h3{
  font-size: 18px;
  display: inline-block;
  line-height: 30px;
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
.wpmchimpat  .wpmchimpa-field{
position: relative;
width:<?php echo ((count($fields) > 1)? 21 : 30); ?>%;
margin: 0 10px;
display: inline-block;
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
left: 0;
pointer-events: none;
}
.wpmchimpat .wpmc-ficon input[type="text"],
.wpmchimpat .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 30px;
}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpat .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],20,$col).' no-repeat center}';
}
?>
.wpmchimpat .wpmchimpa-field select,
.wpmchimpat input[type="text"]{
    display: inline-block;
    width: 100%;
    background: #f8fafa;
   -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    padding: 0 20px;
    border: 1px solid #e4e9e9;
    height:30px;
    color: #353535;
    outline:0;
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
.wpmchimpat input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 30px;
color: rgba(0,0,0,0.6);
font-size: 16px;
padding: 0 20px;
text-align: left;
font-weight:500;
overflow: hidden;
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
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
  position: absolute;
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
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    border-radius: 3px;
  display:inline-block;
  text-align: center;
  width: 21%;
    height:30px;
    line-height: 28px;
    border: 1px solid #3079ed;
   background-color: #4d90fe;
  color:#fff;
    cursor:pointer;
    text-shadow:none;
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
           background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
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
.wpmchimpat .wpmchimpa-subs-button::before{
  content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
  display: block;
}
.wpmchimpat .wpmchimpa-subs-button:hover{
    background:#8BD331;   
  color:#fff;
    <?php 
        if(isset($theme["addon_button_bch"])){
            echo 'background:'.$theme["addon_button_bch"].';';
        }
        else{ ?> 
          background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  <?php }
        if(isset($theme["addon_button_fch"])){
            echo 'color:'.$theme["addon_button_fch"].';';
        }
        if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
            echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpat .wpmchimpa-subs-button.subsicon:before{
padding-left: 30px;

}
.wpmchimpat .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 30px;
width: 30px;
top: 0;
left: 0;
pointer-events: none;
  <?php 

  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#fff');
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
.wpmchimpat .wpmchimpa-feedback.wpmchimpa-done{
  line-height: 50px;
  font-size: 20px;
  top:0;
}
.wpmchimpat .wpmchimpat-close-button {
display: inline-block;
width: 2em;
height: 2em;
right: 10px;
top:0;
position: absolute;
cursor:pointer;
}

.wpmchimpat .wpmchimpat-close-button::before {
    content: "\00D7";
    font-size: 30px;
    font-weight: 600;
    color: #959595;
  }
.wpmchimpat .wpmchimpat-close-button:hover:before {
    color: #000;
}

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
#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-field,#wpmchimpat<?php echo $topbar_scode;?> .wpmchimpa-subs-button{width: 100%;margin-bottom: 10px;}
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
  'icon' => false,
  'type' => 1
  );
$this->stfield($fields,$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
  <div class="wpmchimpa-subs-button<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
     </div>
   <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php
            echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'7',$topid,isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000');?></div></div>

     </form>
    <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
     <div class="wpmchimpat-close-button"></div>
</div>