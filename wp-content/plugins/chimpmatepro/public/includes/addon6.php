<?php 
$theme = $wpmchimpa['theme']['a6'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
$this->social=true;
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
display:none;
background: #4097D3;
<?php
if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}?>
}
.wpmchimpab .wpmchimpa-leftpane{
position: relative;
padding-bottom: 56.25%;
height: 0;
overflow: hidden;
max-width: 100%;
background: top no-repeat;
background-size: contain;
background-image:<?php if(!isset($theme['addon_vid1'])){if(isset($theme['addon_img1']))echo 'url('.$theme['addon_img1'].');';else{?>
 url();<?php }} ?>
}
.wpmchimpab .wpmchimpa-leftpane iframe, .wpmchimpab .wpmchimpa-leftpane object, .wpmchimpab .wpmchimpa-leftpane embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

.wpmchimpab .wpmchimpa-cont{
  margin: 20px auto 0;
  width: calc(100% - 10px);
  max-width: 330px;
  text-align: center;
}
.wpmchimpab h3{
margin-bottom:10px;
color: #FFD804;
text-decoration: underline;
font-size: 20px;
line-height: 20px;
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
.wpmchimpab .wpmchimpa_para{
  margin-bottom: 10px;
}
.wpmchimpab .wpmchimpa_para,.wpmchimpab .wpmchimpa_para * {
font-size: 12px;
color: #fff;
line-height: 12px;
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}

.wpmchimpab  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
text-align: left;
<?php 
  if(isset($theme["addon_tbox_w"])){
      echo 'width:'.$theme["addon_tbox_w"].'px;';
  }
?>
}
.wpmchimpab .inputicon{
display: none;
}
.wpmchimpab .wpmc-ficon .inputicon {
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab .wpmc-ficon input[type="text"],
.wpmchimpab .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 40px;
  <?php 
if(isset($theme["addon_tbox_h"])){
  echo 'padding-left:'.($theme["addon_tbox_h"] + 5).'px;';
  }?>
}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#4097D3');
foreach ($form['fields'] as $f) {
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
    echo '.wpmchimpab .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,17,$col).' no-repeat center}';
}
?>
.wpmchimpab .wpmchimpa-field select,
.wpmchimpab input[type="text"]{
text-align: left;
width: 100%;
height: 35px;
background: #0D65A1;
padding:0 15px;
border-radius: 8px;
color: #fff;
font-size:15px;
outline:0;
display: block;
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
  if(isset($theme["addon_tbox_w"])){
      echo 'width:'.$theme["addon_tbox_w"].'px;';
  }
  if(isset($theme["addon_tbox_h"])){
      echo 'height:'.$theme["addon_tbox_h"].'px;';
  }
  if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
      echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
  }
?>
}



.wpmchimpab .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 35px;
height: 35px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 35px;
color: <?=$col?>;
font-size: 15px;
font-weight:500;
padding:0 15px;
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
.wpmchimpab input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpab select.wpmcerror,
.wpmchimpab input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpab .wpmchimpa-field.wpmchimpa-check,
.wpmchimpab .wpmchimpa-field.wpmchimpa-radio{
  text-align: left;
}
.wpmchimpab .wpmchimpa-check *,
.wpmchimpab .wpmchimpa-radio *{
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
.wpmchimpab .wpmchimpa-item{
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
.wpmchimpab .wpmchimpa-item input {
  display: none;
}
.wpmchimpab .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-right: 10px;
  line-height: 20px;
}

.wpmchimpab .wpmchimpa-item span:before,
.wpmchimpab .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  top: 4px;
  position: absolute;
}
.wpmchimpab .wpmchimpa-item span:before {
border:1px solid #0D65A1;
border-radius: 2px;
background-color: #0D65A1;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
<?php
  if(isset($theme["addon_check_borc"])){
      echo 'border: 1px solid'.$theme["addon_check_borc"].';';
  }
  if(isset($theme["addon_check_c"]))
    echo 'background: '.$theme["addon_check_c"].';';
  ?>
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpab input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["addon_check_mark"])){$tfi=$theme["addon_check_mark"];}
        $tfc='#fff';
        if(isset($theme["addon_check_ic"])){$tfc=$theme["addon_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
.wpmchimpab input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}


.wpmchimpab .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
pointer-events: none;
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

.wpmchimpab .wpmchimpa-subs-button{
width: 100%;
color: #0D65A1;
font-size: 17px;
height: 35px;
line-height: 35px;
text-align: center;
cursor: pointer;
box-shadow:2px 2px 0 0 #CCAE0A;
border-radius: 8px;
background-color: #FFD804;
position: relative;
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
if(isset($theme["addon_button_w"])){
    echo 'width:'.$theme["addon_button_w"].'px;';
}
if(isset($theme["addon_button_h"])){
    echo 'height:'.$theme["addon_button_h"].'px;';
    echo 'line-height:'.$theme["addon_button_h"].'px;';
}
if(isset($theme["addon_button_bc"])){
    echo 'background-color:'.$theme["addon_button_bc"].';';
}
if(isset($theme["addon_button_br"])){
    echo 'border-radius:'.$theme["addon_button_br"].'px;';
}
$lbb=2;
if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
  $lbb=$theme["addon_button_bor"];
echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["addon_button_borc"].';';
}
?>
}

.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
}
.wpmchimpab .wpmchimpa-subs-button:active{
box-shadow:2px 2px 0 0 #FFD804;
<?php 
if(isset($theme["addon_button_bc"])){
    echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["addon_button_bc"].';';
}?>
}
.wpmchimpab .wpmchimpa-subs-button:hover{
<?php if(isset($theme["addon_button_fch"])){
    echo 'color:'.$theme["addon_button_fch"].';';
}    
if(isset($theme["addon_button_bch"])){
    echo 'background-color:'.$theme["addon_button_bch"].';';
}?>
}
.wpmchimpab .wpmchimpa-subsc{position: relative;}
.wpmchimpab .wpmchimpa-subs-button.subsicon:before{
padding-left: 30px;
  <?php 
  if(isset($theme["addon_button_w"])){
      echo 'padding-left:'.$theme["addon_button_h"].'px;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 30px;
width: 30px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["addon_button_h"])){
      echo 'width:'.$theme["addon_button_h"].'px;';
      echo 'height:'.$theme["addon_button_h"].'px;';
  }
  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#0D65A1');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],17,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-signal {
display: none;
position: absolute;
top: 4px;
right: 4px;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
}
.wpmchimpab.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
position: relative;
color: #ccc;
font-size: 12px;
height: 12px;
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
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 25px auto;
}

.wpmchimpab .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
color: #fff;
line-height: 45px;
display: block;
float:left;
width: calc(50% - 20px);
text-align: right;
padding: 0 10px;
margin-right: 10px;
border-right: 1px #fff solid;
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

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:36px;
height: 36px;
border-radius: 8px;
float: left;
cursor: pointer;
margin-left: 5px;
margin-top: 5px;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scale(1.05);
-ms-transform:scale(1.05);
transform:scale(1.05);
} 
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 36px;
background: no-repeat center;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',20,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',20,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',20,'#fff');?>
}

.wpmchimpab .wpmchimpa-tag{
margin: 2px auto;
}
.wpmchimpab .wpmchimpa-tag,
.wpmchimpab .wpmchimpa-tag *{
color:#0D65A1;
font-size: 10px;
<?php
  if(isset($theme["addon_tag_f"])){
    echo 'font-family:'.$theme["addon_tag_f"].';';
  }
  if(isset($theme["addon_tag_fs"])){
      echo 'font-size:'.$theme["addon_tag_fs"].'px;';
  }
  if(isset($theme["addon_tag_fw"])){
      echo 'font-weight:'.$theme["addon_tag_fw"].';';
  }
  if(isset($theme["addon_tag_fst"])){
      echo 'font-style:'.$theme["addon_tag_fst"].';';
  }
  if(isset($theme["addon_tag_fc"])){
      echo 'color:'.$theme["addon_tag_fc"].';';
  }
?>
}
.wpmchimpab .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["addon_tag_fs"])){$tfs=$theme["addon_tag_fs"];}
  $tfc='#0D65A1';
  if(isset($theme["addon_tag_fc"])){$tfc=$theme["addon_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

.wpmchimpab.wosoc .wpmchimpa-social,
.wpmchimpab.wotop .wpmchimpa-leftpane{
display: none;
}

</style>

<div class="wpmchimpa-reset wpmchimpselector wpmchimpab chimpmatecss<?php if(isset($theme['addon_dissoc']))echo ' wosoc';
if(isset($theme['addon_disimg']))echo ' wotop';?>" id="wpmchimpab">


	    <div class="wpmchimpa-leftpane">
          <?php if(!isset($theme['addon_disimg']) && isset($theme['addon_vid1'])){
            echo $this->getVid('a',$theme['addon_vid1']);
          }?>
        </div>
          <div class="wpmchimpa-cont">
<?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
	    <form action="" method="post">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => true,
  'type' => 1
  );
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>

              <div class="wpmchimpa-subsc">
                <div class="wpmchimpa-subs-button<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
        <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
    echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'5','wpmchimpab',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000');?></div></div>
      </div>
              <?php
              if(isset($theme['addon_tag_en'])){
              if(isset($theme['addon_tag'])) $tagtxt= $theme['addon_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
     
    </div></div>