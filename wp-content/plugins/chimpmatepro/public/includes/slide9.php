<?php 
$theme = $wpmchimpa['theme']['s9'];
$theme['slider_msg'] = htmlspecialchars_decode($theme['slider_msg']);
?>
<style type="text/css">

.wpmchimpas {
background-color: #333;
<?php
    if(isset($theme["slider_canvas_c"])){
        echo 'background-color:'.$theme["slider_canvas_c"].';';
    }
    if(isset($theme["slider_bg_p"]) && $theme["slider_bg_p"]!= 'pat0'){
        echo 'background-image:url("'.WPMCA_PLUGIN_URL.'assets/'.$theme["slider_bg_p"].'.png");';
    }?>
}
.wpmchimpas .wpmchimpas-inner {
text-align: center;
border-radius:3px;
background: #27313B;
padding: 0;
margin:0 50px;
padding:0 20px;
display: inline-block;
<?php
if(isset($theme["slider_bg_c"])){
    echo 'background-color:'.$theme["slider_bg_c"].';';
}?>
}
.wpmchimpas div{
  position:relative;
}
.wpmchimpas h3{
line-height: 24px;
margin-top:20px;
color: #F4233C;
font-size: 24px;
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
  margin-top: 15px;
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
font-size: 15px;
color: #959595;
<?php if(isset($theme["slider_msg_f"])){
echo 'font-family:'.$theme["slider_msg_f"].';';
}if(isset($theme["slider_msg_fs"])){
echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}

.wpmchimpas form{
margin: 20px auto;
}
.wpmchimpas .formbox > div:first-of-type{
  width: 65%;
  float: left;
}
.wpmchimpas .formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
.wpmchimpas .formbox input[type="text"]{
border-radius: 3px 0 0 3px;
}
.wpmchimpas  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
text-align: left;
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
width: 40px;
height: 40px;
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
.wpmchimpas .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 40px;
  <?php 
if(isset($theme["slider_tbox_h"])){
  echo 'padding-left:'.$theme["slider_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#888');
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
    echo '.wpmchimpas .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,15,$col).' no-repeat center}';
}
?>
.wpmchimpas .wpmchimpa-field select,
.wpmchimpas input[type="text"]{
text-align: left;
width: 100%;
height: 40px;
border-radius:3px;
background: #fff;
 padding: 0 10px;
color: #353535;
font-size:17px;
outline:0;
display: block;
border: 1px solid #efefef;
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
if(isset($theme["slider_tbox_w"])){
echo 'width:'.$theme["slider_tbox_w"].'px;';
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
width: 40px;
height: 40px;
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
line-height: 40px;
color: rgba(0,0,0,0.6);
font-size: 17px;
font-weight:500;
padding: 0 10px;
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
  color: #fff;
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
  padding-left: 35px;
  line-height: 20px;
  margin-right: 10px;
}

.wpmchimpas .wpmchimpa-item span:before,
.wpmchimpas .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  top: 4px;
  position: absolute;
}
.wpmchimpas .wpmchimpa-item span:before {
border:1px solid #ccc;
border-radius: 1px;
background-color: #fff;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
  if(isset($theme["slider_check_borc"])){
      echo 'border: 1px solid'.$theme["slider_check_borc"].';';
  }
if(isset($theme["slider_check_c"]))echo 'background: '.$theme["slider_check_c"].';';?>
}
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpas input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch2';
        if(isset($theme["slider_check_mark"])){$tfi=$theme["slider_check_mark"];}
        $tfc='#000';
        if(isset($theme["slider_check_ic"])){$tfc=$theme["slider_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
.wpmchimpas .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
.wpmchimpas input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
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


.wpmchimpas .wpmchimpa-subs-button{
border-radius: 0 3px 3px 0;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #FA0B38;
background-color: #FF1F43;
height: 40px;
line-height: 40px;
text-align: center;
cursor: pointer;
position: relative;
top: 0;
transition: all 0.5s ease;
<?php
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
echo 'line-height:'.$theme["slider_button_h"].'px;';
}
if(isset($theme["slider_button_bc"])){
echo 'background-color:'.$theme["slider_button_bc"].';';
}
if(isset($theme["slider_button_br"])){
echo '-webkit-border-radius:'.$theme["slider_button_br"].'px;';
echo '-moz-border-radius:'.$theme["slider_button_br"].'px;';
echo 'border-radius:'.$theme["slider_button_br"].'px;';
}
if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
}
?>
}
.wpmchimpas .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['slider_button'])) echo $theme['slider_button'];else echo 'Subscribe';?>';
}
.wpmchimpas .wpmchimpa-subs-button:hover{
background-color: #FA0B38;
<?php if(isset($theme["slider_button_fch"])){
echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
echo 'background-color:'.$theme["slider_button_bch"].';';
}?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon:before{
padding-left: 40px;
  <?php 
  if(isset($theme["slider_button_w"])){
      echo 'padding-left:'.$theme["slider_button_h"].'px;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 40px;
width: 40px;
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
     echo 'background: '.$this->getIcon($theme["slider_button_i"],15,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpas-inner .wpmchimpa-subsc{
  text-align: center;
}
.wpmchimpas-inner.signalshow  .wpmchimpa-subs-button::after,
.wpmchimpas-inner.signalshow  .wpmchimpa-subs-button::before{
  display: none;
}
.wpmchimpas .wpmchimpa-signal {
display: none;
  z-index: 1;
    top: 5px;
  left: calc(50% - 20px);
  position: absolute;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
.wpmchimpas-inner.signalshow .wpmchimpa-signal {
  display: inline-block;
}

.wpmchimpas.wpmchimpa-tag{
margin: 5px auto;
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
.wpmchimpas .wpmchimpa-tag:before{

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
.wpmchimpas .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 10px;
height: 12px;
margin-top: -12px;
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
font-size: 15px;   margin: 10px;
  height: auto;
}
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}
.wpmchimpas-trig{	
top:40%;
margin: 0 3px;
display: block;
<?php
if(isset($theme["slider_trigger_top"])){
echo 'top:'.$theme["slider_trigger_top"].'%;';
}
?>
}
.wpmchimpas-trigi{
background: #27313B;
width:50px;
height:50px;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}

.wpmchimpas-trig .wpmchimpas-trigi:hover{
-webkit-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
-moz-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
}
.wpmchimpas-trigi:before{	
<?php 
$ti='b06';
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
    <div class="wpmchimpas-inner wpmchimpselector wpmchimpa-mainc">
          <?php if(isset($theme['slider_heading'])) echo '<h3>'.$theme['slider_heading'].'</h3>';?>
          <?php if(isset($theme['slider_msg'])) echo '<div class="wpmchimpa_para">'.$theme['slider_msg'].'</div>';?>
  <div class="wpmchimpa-cont">
	    <form action="" method="post" class="wpmchimpa-reset">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
'icon' => true,
'bui' => (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone' && $theme['slider_button_i'] != 'idef')?true:false,
'type' => 2,
'sig' => $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'8','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#000')
);
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme(); ?>
  
                <div style="clear:both"></div>

              <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>


		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div>
	</div>	</div></div></div></div>
<div class="wpmchimpas-bg chimpmatecss"></div>
<div class="wpmchimpas-overlay chimpmatecss"></div>
<div id="wpmchimpas-trig" class="chimpmatecss" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="wpmchimpas-trigc">
    <div class="wpmchimpas-trigi"></div>
    <div class="wpmchimpas-trigh"></div>
  </div>
</div>