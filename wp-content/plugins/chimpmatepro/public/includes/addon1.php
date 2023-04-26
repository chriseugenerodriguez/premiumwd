<?php 
$theme = $wpmchimpa['theme']['a1'];
$theme['addon_msg'] = htmlspecialchars_decode($theme['addon_msg']);
$this->social=true;
$this->extrascript(0);
?>
 <style type="text/css">
.wpmchimpab {
width: 100%;
padding:10px;
background: #fff;
display:none;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}
$bc='#EDEDED';
$bw=1;
if(isset($theme["addon_bor_c"]))$bc = $theme["addon_bor_c"];
if(isset($theme["addon_bor_w"]))$bw = $theme["addon_bor_w"];
  echo 'border: '.$bc.' solid '.$bw.'px;';
?>
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}
.wpmchimpab .wpmchimpa-leftpane{
display: inline-block;
float: left;
<?php 
        if(isset($theme["addon_dissoc"])){
          echo 'display:none;';
        }?>
}
.wpmchimpab form{
  display: inline-block;
  padding: 0 20px;
  width: calc(100% - 160px);
}
.wpmchimpab .wpmchimpa-cont{
  margin-top: 20px;
}
.wpmchimpab h3{
  font-size: 18px;
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
        if(isset($theme["addon_heading_fc"])){
            echo 'color:'.$theme["addon_heading_fc"].';';
        }
    ?>
}
.wpmchimpab .wpmchimpa_para,.wpmchimpab .wpmchimpa_para * {
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.$theme["addon_msg_f"].';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}

.wpmchimpab  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
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
width: 45px;
height: 45px;
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
.wpmchimpab .wpmc-ficon  input[type="text"] ~ .inputlabel{
  padding-left: 45px;
  <?php 
if(isset($theme["addon_tbox_h"])){
  echo 'padding-left:'.$theme["addon_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["addon_inico_c"]))? $theme["addon_inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpab .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],30,$col).' no-repeat center}';
}
?>
.wpmchimpab .wpmchimpa-field select,
.wpmchimpab input[type="text"]{
width: 100%;
height: 45px;
background: #f8fafa;
padding: 0 20px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
border-radius: 5px;
border: 1px solid #e4e9e9;
color: #353535;
font-size: 16px;
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
width: 45px;
height: 45px;
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
line-height: 45px;
padding: 0 20px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
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
.wpmchimpab .wpmchimpa-check *,
.wpmchimpab .wpmchimpa-radio *{
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
  line-height: 24px;
}

.wpmchimpab .wpmchimpa-item span:before,
.wpmchimpab .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  top: 2px;
  position: absolute;
}
.wpmchimpab .wpmchimpa-item span:before {
box-shadow: 0 0 1px 1px #ccc;
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
  if(isset($theme["addon_check_borc"])){
      echo 'border: 1px solid'.$theme["addon_check_borc"].';';
  }if(isset($theme["addon_check_c"]))echo 'background: '.$theme["addon_check_c"].';';
?>
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpab input[type='checkbox']:checked + span:after {
  content:'';
  background: no-repeat center;
background-image: <?php
        $tfi='ch6';
        if(isset($theme["addon_check_mark"])){$tfi=$theme["addon_check_mark"];}
        $tfc='#000';
        if(isset($theme["addon_check_ic"])){$tfc=$theme["addon_check_ic"];}
        echo $this->getIcon($tfi,15,$tfc);?>;
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 16px;
height: 16px;
top: 4px;
}
.wpmchimpab input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 12px;
height: 12px;
top: 6px;
left: 2px;
border-radius: 50%;
}
.wpmchimpab .wpmcinfierr{
  display: block;
  height: 12px;
  line-height: 12px;
  margin-bottom: -12px;
  font-size: 11px;
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
.wpmchimpab .wpmchimpa-subs-button{
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
width: 100%;
padding: 0 22px;
color: #fff;
font-size: 22px;
border: 1px solid #3079ed;
background-color: #4d90fe;
height: 45px;
line-height: 45px;
text-align: center;
cursor: pointer;
margin-bottom: 10px;
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
    }
    if(isset($theme["addon_button_bc"])){
        echo 'background-color:'.$theme["addon_button_bc"].';';
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
.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
<?php if(isset($theme["addon_button_h"])){
      echo 'line-height:'.$theme["addon_button_h"].'px;';
  } ?>
}
.wpmchimpab .wpmchimpa-subs-button:hover{
<?php if(isset($theme["addon_button_fch"])){
        echo 'color:'.$theme["addon_button_fch"].';';
    }    
    if(isset($theme["addon_button_bch"])){
        echo 'background-color:'.$theme["addon_button_bch"].';';
    } else{ ?>
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  <?php }?>
}
.wpmchimpab .wpmchimpa-subs-button.subsicon:before{
padding-left: 45px;
  <?php 
  if(isset($theme["addon_button_w"])){
      echo 'padding-left:'.$theme["addon_button_h"].'px;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["addon_button_h"])){
      echo 'width:'.$theme["addon_button_h"].'px;';
      echo 'height:'.$theme["addon_button_h"].'px;';
  }
  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],30,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-social{
display: block;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 20px;
line-height: 30px;
display: block;
text-align: center;
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
margin: 5px;
cursor: pointer;
width:150px;
height: 35px;
margin-bottom: 5px;
border-radius: 5px;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scale(1.1);
-ms-transform:scale(1.1);
transform:scale(1.1);
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 4px 6px;
padding: 0px 5px;
display: inline-block;
border-right: 1px solid #cccccc;
height: 23px;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::after{
position: absolute;
line-height: 35px;
padding-left: 10px;
color: #fff;
font-size: 14px;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
    background: #2d609b;
    <?php if(!isset($wpmchimpa["fb_api"])){
	echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
   content:<?php echo $this->getIcon('fb',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
    background: #eb4026;
    <?php if(!isset($wpmchimpa["gp_api"])){
	echo 'display:none;';
    }?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
    content: <?php echo $this->getIcon('gp',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
    background: #00BCF2;
    <?php if(!isset($wpmchimpa["ms_api"])){
  echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
    content: <?php echo $this->getIcon('ms',25,'#fff');?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::after {
    content:"Facebook";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::after {
    content:"Google Plus";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::after {
    content:"Outlook";
}

.wpmchimpab .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.wpmchimpab .wpmchimpa-signal {
display: none;
}
.wpmchimpab.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
margin: -40px 0 22px;
position: relative;
font-size: 16px;
min-height: 16px;
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
  clear: both;
  margin: 0;
}

.wpmchimpab .wpmchimpa-tag{
text-align: center;
position: relative;
margin-top: 5px;
}
.wpmchimpab .wpmchimpa-tag,
.wpmchimpab .wpmchimpa-tag *{
color:#000;
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
        $tfc='#000';
        if(isset($theme["addon_tag_fc"])){$tfc=$theme["addon_tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
@media only screen 
and (max-width : 900px) {
.wpmchimpab form{
  clear:both;
  width: 100%;
}
.wpmchimpab .wpmchimpa-leftpane{width: 100%;}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc{margin:5px auto;}
}
</style>

<div class="wpmchimpa-reset wpmchimpselector wpmchimpab chimpmatecss" id="wpmchimpab">
<?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
<?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
  <div class="wpmchimpa-cont">
	    <div class="wpmchimpa-leftpane">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
        </div>
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
			              <?php if(isset($theme['addon_tag_en'])){
              if(isset($theme['addon_tag'])) $tagtxt= $theme['addon_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
      <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["addon_spinner_t"])?$theme["addon_spinner_t"]:'7','wpmchimpab',isset($theme["addon_spinner_c"])?$theme["addon_spinner_c"]:'#000');?></div></div>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div> <div style="clear:both"></div>
	</div>	
