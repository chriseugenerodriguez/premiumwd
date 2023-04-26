<style type="text/css">

#wpmchimpab {
text-align: center;
min-height: 100px;
display: inline-block;
border-width: 1px 0;
padding-bottom: 10px;
width: 495px;
left: 50px;
top: 200px;
position: relative;
background: {{data.theme.a7.addon_bg_c||'#f7f7f7'}};
border: {{data.theme.a7.addon_bor_w||0}}px solid {{data.theme.a7.addon_bor_c||'#000'}};
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}
#wpmchimpab .wpmchimpa-leftpane{
position: relative;
text-align: left;
}
#wpmchimpab .wpchimpa-banner{
display: block;
position: relative;
background: {{data.theme.a7.addon_hbg_c || '#1d91ce'}};
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
#wpmchimpab .wpmchimpa-leftpane:after{
content: '';
display: block;
width: 55px;
height: 55px;
position: absolute;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
  background: {{getIcon('b04',25,data.theme.a7.addon_hi_c||'#fff')}} no-repeat center;
  background-color: {{data.theme.a7.addon_hi_bc|| '#61c0b5'}};
top:79px;
right: 20px;
z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
#wpmchimpab .wpmchimpa-head{
padding: 0px 0 10px 20px;
position: relative;
text-align: left;
}
#wpmchimpab .addon_heading{
width: 100%;
line-height: 30px;
margin: 0;
color: {{data.theme.a7.addon_heading_fc||'#fff'}};
font-size: {{data.theme.a7.addon_heading_fs||'30'}}px;
font-weight: {{data.theme.a7.addon_heading_fw}};
font-family: {{data.theme.a7.addon_heading_f | livepf}};
font-style: {{data.theme.a7.addon_heading_fst}};
background-color: {{data.theme.a7.addon_hbg_c}};
}
#wpmchimpab .addon_msg,#wpmchimpab .addon_msg *{
color: #fff;
font-weight: lighter;
margin: 0;
line-height: 18px;
font-size: {{data.theme.a7.addon_msg_fs||'15'}}px;
font-family: {{data.theme.a7.addon_msg_f | livepf}};
}
#wpmchimpab .wpmchimpa-databox{
width: 100%;
min-height:100px;
display: inline-block;
background: {{data.theme.a7.addon_exhbc || '#ededed'}};
position: relative;
text-align: left;
}
#wpmchimpab .wpmchimpa-databox *{
    color: {{data.theme.a7.addon_exhc1 || '#ababab'}};
  font-family: {{data.theme.a7.addon_exhf}};
  font-family: {{data.theme.a7.addon_exhfw}};
  font-family:{{data.theme.a7.addon_exhfst}}; 
}
#wpmchimpab .wpmchimpa-databox .wpmcdate{
padding: 15px 0 0 20px;
display: inline-block;
width: 160px;
position: relative;
float: left;
}
#wpmchimpab .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 25px;
line-height: 35px;
}
#wpmchimpab .wpmchimpa-databox .wpmcdm{
font-size: 16px;
line-height: 16px;
}
#wpmchimpab .wpmchimpa-databox .wpmcdd{
font-size: 65px;
line-height: 65px;
color: {{data.theme.a7.addon_exhc2 || '#f95753'}};
display: inline-block;
float: left;
}
#wpmchimpab .wpmchimpa-databox .wpmcweat{
padding: 15px 20px 10px 5px;
display: {{data.theme.a7.addon_wloc ? 'inline-block':'none'}};
width: 180px;
float: right;
}
#wpmchimpab .wpmchimpa-databox .wpmcwl{
font-size: 16px;
line-height: 16px;
display: inline-block;
}
#wpmchimpab .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: {{getIcon('loc1',10,data.theme.a7.addon_exhc1||'#ababab')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-databox .wpmcwc{
font-size: 15px;
line-height: 15px;
}
#wpmchimpab .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin: 3px 0 0 10px;
float: left;
background: {{getIcon('w01',30)}} no-repeat center;
}
#wpmchimpab .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 10px 10px 0;
font-size: 35px;
line-height: 35px;
}
#wpmchimpab .wpmchimpa-databox .wpmcwdinac{display: none;}
#wpmchimpab .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 14px;
line-height: 14px;
margin: 10px 0;
}
#wpmchimpab .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
#wpmchimpab .wpmchimpa-databox .wpmcl2owm{
font-size: 8px;
display: {{data.theme.a7.addon_l2owm ? 'block':'none'}};
  line-height: 8px;
}
#wpmchimpab .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}

#wpmchimpab .wpmchimpa-top{
  padding: 10px;
  text-align: left;
}
#wpmchimpab .wpmchimpa-edit-button,
#wpmchimpab .wpmchimpa-del-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}
#wpmchimpab .wpmchimpa-edit-button{
right: 10px;
background: {{getIcon('ed1',15,data.theme.a7.addon_ui_c||'#fff')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-del-button{
right: 30px;
background: {{getIcon('del1',15,data.theme.a7.addon_ui_c||'#fff')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
#wpmchimpab .wpmchimpa-social::before{
content: '{{data.theme.a7.addon_soc_head || 'Subscribe with'}}';
line-height: 20px;
display: block;
float:left;
color: {{data.theme.a7.addon_soc_fc || '#fff'}};
font-size: {{data.theme.a7.addon_soc_fs||'15'}}px;
font-weight: {{data.theme.a7.addon_soc_fw}};
font-family: {{(data.theme.a7.addon_soc_f | livepf)}};
font-style: {{data.theme.a7.addon_soc_fst}};
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid {{data.theme.a7.addon_soc_fc || '#fff'}};
border-radius: 50%;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',11,data.theme.a7.addon_soc_fc||'#fff')}} 
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',11,data.theme.a7.addon_soc_fc||'#fff')}} 
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',11,data.theme.a7.addon_soc_fc||'#fff')}} 
}
#wpmchimpab .wpmchimpa{
position: relative;
margin: 20px 70px;
}

#wpmchimpab .addon_tbox{
text-align: left;
margin-bottom: 10px;
width: calc(100% - 40px);
margin-left: 40px;
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.a7.addon_tbox_fc||'#61c0b5'}};
font-size: {{data.theme.a7.addon_tbox_fs||'18'}}px;
font-weight: {{data.theme.a7.addon_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.a7.addon_tbox_f | livepf}};
font-style: {{data.theme.a7.addon_tbox_fst}};
background-color: {{data.theme.a7.addon_tbox_bgc || '#f7f7f7'}};
width: {{data.theme.a7.addon_tbox_w}}px;
height: {{data.theme.a7.addon_tbox_h||'40'}}px;
border-bottom: {{data.theme.a7.addon_tbox_bor||'1'}}px solid {{data.theme.a7.addon_tbox_borc||'#000'}};
}
#wpmchimpab .addon_tbox div{
top: 50%;
-webkit-transform: translatey(-50% );
-moz-transform: translatey(-50% );
-ms-transform: translatey(-50% );
-o-transform: translatey(-50% );
transform: translatey(-50% );
position: relative;
}
.addon_tbox.mailicon:before,
.addon_tbox.pericon:before{
content:'';
display: block;
width: 40px;
height:40px;
position: absolute;
top: 0;
left: -40px;
}
.addon_tbox.mailicon:before{
background: {{getIcon('a07',25,data.theme.a7.addon_inico_c||'#ababab')}} no-repeat center;
}
.addon_tbox.pericon:before{
background: {{getIcon('c05',25,data.theme.a7.addon_inico_c||'#ababab')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-groups{
display: block;
margin-left: 40px;
}
#wpmchimpab .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpab .addon_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
}
#wpmchimpab .addon_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
border:1px solid {{data.theme.a7.addon_check_borc||'#61c0b5'}};
background-color: {{data.theme.a7.addon_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpab .addon_check .ctext{
  color: {{data.theme.a7.addon_check_fc}};
font-size: {{data.theme.a7.addon_check_fs}}px;
font-weight: {{data.theme.a7.addon_check_fw}};
font-family: {{data.theme.a7.addon_check_f | livepf}};
font-style: {{data.theme.a7.addon_check_fst}};
}
#wpmchimpab .addon_check .cbox.checked{
border:none;background:none;
}
#wpmchimpab .addon_check .cbox.checked:after{
display: block;
overflow: hidden;
width:20px;
height:20px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.a7.addon_check_mark||'ch1',20,data.theme.a7.addon_check_ic||'#61c0b5')}};
}

#wpmchimpab .wpmchimpa > div{
  position: relative;
}
#wpmchimpab .addon_button{
line-height: 45px;
padding-left: 10px;
text-align: center;
cursor: pointer;
margin-top: 15px;
margin-left: 40px;
position: relative;
width: calc(100% - 40px);
color: {{data.theme.a7.addon_button_fc||'#fff'}};
font-size: {{data.theme.a7.addon_button_fs || "20"}}px;
font-weight: {{data.theme.a7.addon_button_fw}};
font-family: {{data.theme.a7.addon_button_f | livepf}};
font-style: {{data.theme.a7.addon_button_fst}};
background-color:{{data.theme.a7.addon_button_bc||'#61c0b5'}};
width: {{data.theme.a7.addon_button_w}}px;
height: {{data.theme.a7.addon_button_h||'45'}}px;
-webkit-border-radius: {{data.theme.a7.addon_button_br||'1'}}px;
-moz-border-radius: {{data.theme.a7.addon_button_br||'1'}}px;
border-radius: {{data.theme.a7.addon_button_br||'1'}}px;
border: {{data.theme.a7.addon_button_bor||'1'}}px solid {{data.theme.a7.addon_button_borc||'#59c2b6'}};
}
#wpmchimpab .addon_button:hover{
color: {{data.theme.a7.addon_button_fch}};
background-color: {{data.theme.a7.addon_button_bch}};
}

.addon_spinner {
top: 0;
right: 0;
margin: 6px 5px;
  margin-left: 40px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}

#wpmchimpab.woexhead .wpmchimpa-databox{
display: none;
}
#wpmchimpab.woexhead .wpmchimpa-leftpane{
  margin-bottom: 50px;
}
#wpmchimpab.wosoc .wpmchimpa-social{
  display: none;
}

#wpmchimpab .wpmchimpa-tag{
text-align: center;
margin-top: 6px;
display: {{data.theme.a7.addon_tag_en? 'block':'none'}};
}
#wpmchimpab .wpmchimpa-tag,
#wpmchimpab .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.a7.addon_tag_fc||'#b8b8b8'}};
font-size: {{data.theme.a7.addon_tag_fs||'10'}}px;
font-weight: {{data.theme.a7.addon_tag_fw}};
font-family:Arial;
font-family: {{data.theme.a7.addon_tag_f | livepf}};
font-style: {{data.theme.a7.addon_tag_fst}};
}
#wpmchimpab .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.a7.addon_tag_fs||10,data.theme.a7.addon_tag_fc||'#b8b8b8')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpab.wosoc .wpmchimpa-leftpane:after{
  top: 50px
}
</style>

<div id="wpmchimpab" class="wpmchimpab" ng-class="{'woexhead':data.theme.a7.addon_exhead,'wosoc':data.theme.a7.addon_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="10" data-lhint="Go to Additional Theme Options" style="margin:-30px">7</div>
        <div class="wpmchimpa-leftpane">
          <div class="wpchimpa-banner">
            <div class="wpmchimpa-top">
              <div class="wpmchimpa-social">
                    <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                    <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                    <div class="wpmchimpa-soc wpmchimpa-ms"></div>
                </div>
              <div class="wpmchimpa-edit-button"></div>
              <div class="wpmchimpa-del-button"></div>
            </div>
            <div class="wpmchimpa-head">
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Custom Message Settings">1</div>
                <div class="addon_heading">{{data.theme.a7.addon_heading}}</div>
               <div class="addon_msg"><p ng-bind-html="data.theme.a7.addon_msg | safe"></p></div>
            </div></div>
          <div class="wpmchimpa-databox">
            <div class="wpmcdate" ng-show="data.theme.a7.addon_exhopt == '0'">
              <div class="wpmcdm">Monday, January</div>
              <div class="wpmcdd">21</div>
              <div class="wpmcdy">2015</div>
            </div>
            <div class="wpmcweat" ng-show="data.theme.a7.addon_exhopt == '0'">
              <div class="wpmcwl">{{data.theme.a7.addon_wloc}}</div>
          <div class="wpmcwc">Clear</div>
          <div class="wpmcwi"></div>
          <div class="wpmcwd"><span>30</span><span class="wpmcwdinac">86</span></div>
          <div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
          <div class="wpmcl2owm">extended forecast</div>
            </div>
            <div class="wpmcexhp" ng-show="data.theme.a7.addon_exhopt == '1'">{{data.theme.a7.addon_exhp}}</div>
          </div>
        </div>

        <div class="wpmchimpa" id="wpmchimpa">            
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Text Box Settings" style="right: -50px;">2</div>
              <div class="addon_tbox pericon"><div class="in-name">Name</div></div>
              <div class="addon_tbox mailicon"><div class="in-mail">Email address</div></div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Checkbox Settings" style="left: 10px;">3</div>
              <div class="wpmchimpa-groups">
                <div class="addon_check_c"></div>
                <div class="wpmchimpa-item">
                    <div class="addon_check">
                      <div class="cbox"></div>
                      <div class="ctext">group1</div>
                    </div>
                </div>
                <div class="wpmchimpa-item">
                    <div class="addon_check">
                      <div class="cbox checked"></div>
                      <div class="ctext">group2</div>
                    </div>
                </div>
              </div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="6" data-lhint="Go to Button Settings" style="right: -50px;">4</div>
              <div class="addon_button">{{data.theme.a7.addon_button}}</div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.a7.addon_tag||'Secure and Spam free...' | safe"></div></div>
          <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Spinner Settings" style="right: -50px;">5</div>
              <div class="addon_spinner" ng-bind-html="getSpin(data.theme.a7.addon_spinner_t||'1','wpmchimpab',data.theme.a7.addon_spinner_c||'#61c0b5')"></div>
            </div>          
          </div>
  </div>
</div>
