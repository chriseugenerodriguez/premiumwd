<?php 
$theme = $wpmchimpa['theme']['l6'];
$theme['lite_msg'] = htmlspecialchars_decode($theme['lite_msg']);
$this->social=true;
?><style type="text/css">
.wpmchimpa-overlay-bg.wpmchimpselector {
display: none;
top: 0;
left: 0;
height:100%;
width: 100%;
cursor: pointer;
z-index: 999999;
background: #000;
background: rgba(0,0,0,0.40);
<?php  if(isset($theme["lite_bg_op"])){
      echo 'background:rgba(0,0,0,'.($theme["lite_bg_op"]/100).');';
    }?>
cursor: default;
position: fixed!important;
}
.wpmchimpa-overlay-bg #wpmchimpa-main *{
 transition: all 0.5s ease;
}
.wpmchimpa-overlay-bg .wpmchimpa-mainc,
.wpmchimpa-overlay-bg .wpmchimpa-maina{
-webkit-transform: translate(0,0);
    height:100%;}
.wpmchimpa-overlay-bg #wpmchimpa-main {
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
max-width: 450px;
width: calc(100% - 20px);
-webkit-backface-visibility: hidden;
box-shadow: 2px 2px 30px -6px rgba(0,0,0,0.2),2px 2px 30px -6px rgba(0,0,0,0.2);
background: #4097D3;
<?php  if(isset($theme["lite_bg_c"])){
    echo 'background-color:'.$theme["lite_bg_c"].';';
}?>


<?php if($scroll){?>
/*long form*/
height: calc(100% - 40px);
<?php } ?>
}

#wpmchimpa-main .wpmchimpa-leftpane{
position: absolute;
padding-bottom: 56.25%;
height: 0;
overflow: hidden;
min-width: 100%;
background: top no-repeat;
background-size: contain;
z-index: 1;
background-image:<?php if(!isset($theme['lite_vid1'])){if(isset($theme['lite_img1']))echo 'url('.$theme['lite_img1'].');';else{?>
 url();<?php }} ?>
}
#wpmchimpa-main .wpmchimpa-leftpane iframe, #wpmchimpa-main .wpmchimpa-leftpane object, #wpmchimpa-main .wpmchimpa-leftpane embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
#wpmchimpa-main #wpmchimpa-newsletterform{
text-align: center;
padding-top: 56.25%;
position: relative;
top: 0;
width: 100%;
height: 100%;
}
#wpmchimpa-main .wpmchimpa-scroll{
padding-top: 20px;
<?php if($scroll){?>
/*long form*/
max-height: 100%;
overflow-y: auto;
<?php } ?>
}
#wpmchimpa-main .wpmchimpa{
  width: calc(100% - 50px);
  max-width: 330px;
  margin: 0 auto;
}
#wpmchimpa h3{
margin-bottom:10px;
color: #FFD804;
text-decoration: underline;
font-size: 20px;
line-height: 20px;
<?php 
    if(isset($theme["lite_heading_f"])){
      echo 'font-family:'.$theme["lite_heading_f"].';';
    }
    if(isset($theme["lite_heading_fs"])){
        echo 'font-size:'.$theme["lite_heading_fs"].'px;';
        echo 'line-height:'.$theme["lite_heading_fs"].'px;';
    }
    if(isset($theme["lite_heading_fw"])){
        echo 'font-weight:'.$theme["lite_heading_fw"].';';
    }
    if(isset($theme["lite_heading_fst"])){
        echo 'font-style:'.$theme["lite_heading_fst"].';';
    }
    if(isset($theme["lite_heading_fc"])){
        echo 'color:'.$theme["lite_heading_fc"].';';
    }
?>
}
#wpmchimpa .wpmchimpa_para{
  margin-bottom: 10px;
}
#wpmchimpa .wpmchimpa_para,#wpmchimpa .wpmchimpa_para * {
font-size: 12px;
color: #fff;
line-height: 12px;
<?php if(isset($theme["lite_msg_f"])){
  echo 'font-family:'.$theme["lite_msg_f"].';';
}if(isset($theme["lite_msg_fs"])){
    echo 'font-size:'.$theme["lite_msg_fs"].'px;';
}?>
}

#wpmchimpa  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
text-align: left;
<?php 
  if(isset($theme["lite_tbox_w"])){
      echo 'width:'.$theme["lite_tbox_w"].'px;';
  }
?>
}
#wpmchimpa .inputicon{
display: none;
}
#wpmchimpa .wpmc-ficon .inputicon {
display: block;
width: 35px;
height: 35px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["lite_tbox_h"])){
  echo 'width:'.$theme["lite_tbox_h"].'px;';
  echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa .wpmc-ficon input[type="text"],
#wpmchimpa .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 40px;
  <?php 
if(isset($theme["lite_tbox_h"])){
  echo 'padding-left:'.($theme["lite_tbox_h"] + 5).'px;';
  }?>
}
<?php
$col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#4097D3');
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
    echo '#wpmchimpa .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,17,$col).' no-repeat center}';
}
?>
#wpmchimpa .wpmchimpa-field select,
#wpmchimpa input[type="text"]{
text-align: left;
width: 100%;
height: 35px;
background: #0D65A1;
padding: 0 15px;
border-radius: 8px;
color: #fff;
font-size:15px;
outline:0;
display: block;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
<?php 
    if(isset($theme["lite_tbox_f"])){
      echo 'font-family:'.$theme["lite_tbox_f"].';';
    }
    if(isset($theme["lite_tbox_fs"])){
        echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
    }
    if(isset($theme["lite_tbox_fw"])){
        echo 'font-weight:'.$theme["lite_tbox_fw"].';';
    }
    if(isset($theme["lite_tbox_fst"])){
        echo 'font-style:'.$theme["lite_tbox_fst"].';';
    }
    if(isset($theme["lite_tbox_fc"])){
        echo 'color:'.$theme["lite_tbox_fc"].';';
    }
    if(isset($theme["lite_tbox_bgc"])){
        echo 'background:'.$theme["lite_tbox_bgc"].';';
    }
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
    if(isset($theme["lite_tbox_h"])){
        echo 'height:'.$theme["lite_tbox_h"].'px;';
    }
    if(isset($theme["lite_tbox_bor"]) && isset($theme["lite_tbox_borc"])){
        echo ' border:'.$theme["lite_tbox_bor"].'px solid '.$theme["lite_tbox_borc"].';';
    }
?>
}


#wpmchimpa .wpmchimpa-field.wpmchimpa-drop:before{
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
if(isset($theme["lite_tbox_h"])){
  echo 'width:'.$theme["lite_tbox_h"].'px;';
  echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa input[type="text"] ~ .inputlabel{
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
padding: 0 15px;
white-space: nowrap;
<?php 
if(isset($theme["lite_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["lite_tbox_f"]).';';
}
if(isset($theme["lite_tbox_fs"])){
    echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
}
if(isset($theme["lite_tbox_fw"])){
    echo 'font-weight:'.$theme["lite_tbox_fw"].';';
}
if(isset($theme["lite_tbox_fst"])){
    echo 'font-style:'.$theme["lite_tbox_fst"].';';
}
if(isset($theme["lite_tbox_fc"])){
    echo 'color:'.$theme["lite_tbox_fc"].';';
}
?>
}
#wpmchimpa input[type="text"]:valid + .inputlabel{
display: none;
}
#wpmchimpa select.wpmcerror,
#wpmchimpa input[type="text"].wpmcerror{
  border-color: red;
}
#wpmchimpa .wpmchimpa-field.wpmchimpa-check,
#wpmchimpa .wpmchimpa-field.wpmchimpa-radio{
  text-align: left;
}
#wpmchimpa .wpmchimpa-check *,
#wpmchimpa .wpmchimpa-radio *{
  color: #fff;
<?php
if(isset($theme["lite_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["lite_check_f"]).';';
}
if(isset($theme["lite_check_fs"])){
    echo 'font-size:'.$theme["lite_check_fs"].'px;';
}
if(isset($theme["lite_check_fw"])){
    echo 'font-weight:'.$theme["lite_check_fw"].';';
}
if(isset($theme["lite_check_fst"])){
    echo 'font-style:'.$theme["lite_check_fst"].';';
}
if(isset($theme["lite_check_fc"])){
    echo 'color:'.$theme["lite_check_fc"].';';
}
?>
}
#wpmchimpa .wpmchimpa-item{
  <?php 
    if(isset($theme["lite_check_pline"])){
      if($theme["lite_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["lite_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
#wpmchimpa .wpmchimpa-item input {
  display: none;
}
#wpmchimpa .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-right: 10px;
  line-height: 20px;
}

#wpmchimpa .wpmchimpa-item span:before,
#wpmchimpa .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  left: 0;
  top: 4px;
  position: absolute;
}
#wpmchimpa .wpmchimpa-item span:before {
border:1px solid #0D65A1;
border-radius: 2px;
background-color: #0D65A1;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
<?php
  if(isset($theme["lite_check_borc"])){
      echo 'border: 1px solid'.$theme["lite_check_borc"].';';
  }
  if(isset($theme["lite_check_c"]))
    echo 'background: '.$theme["lite_check_c"].';';
  ?>
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + span:hover:after, #wpmchimpa input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["lite_check_mark"])){$tfi=$theme["lite_check_mark"];}
        $tfc='#fff';
        if(isset($theme["lite_check_ic"])){$tfc=$theme["lite_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
#wpmchimpa input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
#wpmchimpa .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["lite_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["lite_status_f"]).';';
    }
    if(isset($theme["lite_status_fw"])){
        echo 'font-weight:'.$theme["lite_status_fw"].';';
    }
    if(isset($theme["lite_status_fst"])){
        echo 'font-style:'.$theme["lite_status_fst"].';';
    }
  ?>
}


#wpmchimpa .wpmchimpa-subs-button{
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
if(isset($theme["lite_button_f"])){
  echo 'font-family:'.$theme["lite_button_f"].';';
}
if(isset($theme["lite_button_fs"])){
    echo 'font-size:'.$theme["lite_button_fs"].'px;';
}
if(isset($theme["lite_button_fw"])){
    echo 'font-weight:'.$theme["lite_button_fw"].';';
}
if(isset($theme["lite_button_fst"])){
    echo 'font-style:'.$theme["lite_button_fst"].';';
}
if(isset($theme["lite_button_fc"])){
    echo 'color:'.$theme["lite_button_fc"].';';
}
if(isset($theme["lite_button_w"])){
    echo 'width:'.$theme["lite_button_w"].'px;';
}
if(isset($theme["lite_button_h"])){
    echo 'height:'.$theme["lite_button_h"].'px;';
    echo 'line-height:'.$theme["lite_button_h"].'px;';
}
if(isset($theme["lite_button_bc"])){
    echo 'background-color:'.$theme["lite_button_bc"].';';
}
if(isset($theme["lite_button_br"])){
    echo 'border-radius:'.$theme["lite_button_br"].'px;';
}
$lbb=2;
if(isset($theme["lite_button_bor"]) && isset($theme["lite_button_borc"])){
  $lbb=$theme["lite_button_bor"];
echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["lite_button_borc"].';';
}
?>
}

#wpmchimpa .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['lite_button'])) echo $theme['lite_button'];else echo 'Subscribe';?>';
}
#wpmchimpa .wpmchimpa-subs-button:active{
box-shadow:2px 2px 0 0 #FFD804;
<?php 
if(isset($theme["lite_button_bc"])){
    echo 'box-shadow:'.$lbb.'px '.$lbb.'px  0 0 solid '.$theme["lite_button_bc"].';';
}?>
}
#wpmchimpa .wpmchimpa-subs-button:hover{
<?php if(isset($theme["lite_button_fch"])){
    echo 'color:'.$theme["lite_button_fch"].';';
}    
if(isset($theme["lite_button_bch"])){
    echo 'background-color:'.$theme["lite_button_bch"].';';
}?>
}
#wpmchimpa .wpmchimpa-subsc{position: relative;}
#wpmchimpa .wpmchimpa-subs-button.subsicon:before{
padding-left: 35px;
  <?php 
  if(isset($theme["lite_button_w"])){
      echo 'padding-left:'.$theme["lite_button_h"].'px;';
  }
  ?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 35px;
width: 35px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["lite_button_h"])){
      echo 'width:'.$theme["lite_button_h"].'px;';
      echo 'height:'.$theme["lite_button_h"].'px;';
  }
  if($theme["lite_button_i"] != 'inone' && $theme["lite_button_i"] != 'idef'){
    $col = ((isset($theme["lite_button_fc"]))? $theme["lite_button_fc"] : '#0D65A1');
     echo 'background: '.$this->getIcon($theme["lite_button_i"],17,$col).' no-repeat center;';
  }
  ?>
}
#wpmchimpa-main .wpmchimpa-signal {
display: none;
position: absolute;
top: 4px;
right: 4px;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
}
.wpmchimpa-overlay-bg.signalshow  #wpmchimpa-main .wpmchimpa-signal {
  display: inline-block;
}
#wpmchimpa-main .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
font-size: 12px;
height: 12px;
<?php
if(isset($theme["lite_status_f"])){
  echo 'font-family:'.$theme["lite_status_f"].';';
}
if(isset($theme["lite_status_fs"])){
  echo 'font-size:'.$theme["lite_status_fs"].'px;';
}
if(isset($theme["lite_status_fw"])){
  echo 'font-weight:'.$theme["lite_status_fw"].';';
}
if(isset($theme["lite_status_fst"])){
  echo 'font-style:'.$theme["lite_status_fst"].';';
}
if(isset($theme["lite_status_fc"])){
  echo 'color:'.$theme["lite_status_fc"].';';
}
?>
}
#wpmchimpa-main .wpmchimpa-tag{
margin: 2px auto;
}
#wpmchimpa-main .wpmchimpa-tag,
#wpmchimpa-main .wpmchimpa-tag *{
color:#0D65A1;
font-size: 10px;
<?php
  if(isset($theme["lite_tag_f"])){
    echo 'font-family:'.$theme["lite_tag_f"].';';
  }
  if(isset($theme["lite_tag_fs"])){
      echo 'font-size:'.$theme["lite_tag_fs"].'px;';
  }
  if(isset($theme["lite_tag_fw"])){
      echo 'font-weight:'.$theme["lite_tag_fw"].';';
  }
  if(isset($theme["lite_tag_fst"])){
      echo 'font-style:'.$theme["lite_tag_fst"].';';
  }
  if(isset($theme["lite_tag_fc"])){
      echo 'color:'.$theme["lite_tag_fc"].';';
  }
?>
}
#wpmchimpa-main .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["lite_tag_fs"])){$tfs=$theme["lite_tag_fs"];}
  $tfc='#0D65A1';
  if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '<?php if(isset($theme['lite_soc_head'])) echo $theme['lite_soc_head'];else echo 'Subscribe with';?>';
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
if(isset($theme["lite_soc_f"])){
  echo 'font-family:'.$theme["lite_soc_f"].';';
}
if(isset($theme["lite_soc_fs"])){
    echo 'font-size:'.$theme["lite_soc_fs"].'px;';
}
if(isset($theme["lite_soc_fw"])){
    echo 'font-weight:'.$theme["lite_soc_fw"].';';
}
if(isset($theme["lite_soc_fst"])){
    echo 'font-style:'.$theme["lite_soc_fst"].';';
}
if(isset($theme["lite_soc_fc"])){
    echo 'color:'.$theme["lite_soc_fc"].';';
}
?>
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
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
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scale(1.05);
-ms-transform:scale(1.05);
transform:scale(1.05);
} 
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 36px;
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',20,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',20,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',20,'#fff');?>
}

#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 0;
right: 0;
width: 26px;
margin:-13px;
text-align: center;
background: #FFF;
cursor: pointer;
border-radius: 50%;
box-shadow: 2px 2px 6px 0 rgba(0,0,0,0.3);
<?php if(isset($theme["lite_close_col"])){
echo 'background-color:'.$theme["lite_close_col"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 26px;
line-height: 26px;
font-weight: 100;
color: #000;
opacity: 0.9;
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;margin-bottom: 40px;height: auto;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}

#wpmchimpa-main.woleft #wpmchimpa-newsletterform{padding: 0}
#wpmchimpa-main.woleft .wpmchimpa-leftpane,
#wpmchimpa-main.wosoc .wpmchimpa-social{
display:none;
}

@media only screen and (max-device-width : 750px) and (orientation : landscape){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
-webkit-transform:translate(-50%, -50%) scale(0.5);
    -ms-transform:translate(-50%, -50%) scale(0.5);
    transform:translate(-50%, -50%) scale(0.5);
  }
}
@media only screen and (max-device-width : 750px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 2) and (-webkit-max-device-pixel-ratio: 2){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
-webkit-transform:translate(-50%, -50%) scale(0.3);
    -ms-transform:translate(-50%, -50%) scale(0.3);
    transform:translate(-50%, -50%) scale(0.3);
  }
}
@media only screen and (max-device-width : 750px) and (orientation : portrait){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    -webkit-transform:translate(-50%, -50%) scale(0.9);
    -ms-transform:translate(-50%, -50%) scale(0.9);
    transform:translate(-50%, -50%) scale(0.9);
  }
}

<?php $this->liteanimate();?>
</style>

<div class="wpmchimpa-reset wpmchimpa-overlay-bg wpmchimpselector chimpmatecss">
<div class="wpmchimpa-maina <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
  <div class="wpmchimpa-mainc">
  <div id="wpmchimpa-main" class="<?php if(isset($theme['lite_disimg']))echo ' woleft';
  if(isset($theme['lite_dissoc'])) echo ' wosoc';  ?>">
        <div class="wpmchimpa-leftpane">
          <?php if(!isset($theme['lite_disimg']) && isset($theme['lite_vid1'])){
            echo $this->getVid('l',$theme['lite_vid1']);
          }?>
        </div>
    <div id="wpmchimpa-newsletterform" class="wpmchimpa-wrapper">
    <div class="wpmchimpa-scroll">
      <div class="wpmchimpa" id="wpmchimpa">
<?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
<?php if(isset($theme['lite_msg'])) echo '<div class="wpmchimpa_para">'.$theme['lite_msg'].'</div>';?>
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
                <div class="wpmchimpa-subs-button<?php echo (isset($theme['lite_button_i']) && $theme['lite_button_i'] != 'inone' && $theme['lite_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
                <div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["lite_spinner_t"])?$theme["lite_spinner_t"]:'5','wpmchimpa-main',isset($theme["lite_spinner_c"])?$theme["lite_spinner_c"]:'#000');?></div>
              </div>
              <?php
              if(isset($theme['lite_tag_en'])){
              if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
            
            </form>
          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
      </div>
    </div>
    </div>
        <div class="wpmchimpa-close-button"></div>
  </div>
</div>
</div>
</div>