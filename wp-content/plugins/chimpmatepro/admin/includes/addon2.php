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
background: {{data.theme.a2.addon_bg_c||'#fff'}};
border: {{data.theme.a2.addon_bor_w||0}}px solid {{data.theme.a2.addon_bor_c||'#000'}};
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}
#wpmchimpab .wpmchimpa{
position: relative;
margin: 0 70px;
}
#wpmchimpab .addon_heading{
width: 100%;
line-height: 60px;
margin-bottom:10px;
text-align: center;
position: relative;
color: {{data.theme.a2.addon_heading_fc||'#fff'}};
font-size: {{data.theme.a2.addon_heading_fs||'30'}}px;
font-weight: {{data.theme.a2.addon_heading_fw}};
font-family: {{data.theme.a2.addon_heading_f | livepf}};
font-style: {{data.theme.a2.addon_heading_fst}};
background-color: {{data.theme.a2.addon_hbg_c||'#0188cc'}};
}
#wpmchimpab .addon_heading:before{
content:'';
position: absolute;
top: 0;
left: 0;
width: 65px;
height:60px;
background: {{getIcon('opt1',28,data.theme.a2.addon_hi_c||'#fff')}} no-repeat center;
}
#wpmchimpab .addon_msg, #wpmchimpab .addon_msg *{
font-weight: lighter;
line-height: 18px;
margin: 30px 15px 20px;
font-size: {{data.theme.a2.addon_msg_fs||'12'}}px;
font-family: {{data.theme.a2.addon_msg_f | livepf}};
}
#wpmchimpab .addon_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.a2.addon_tbox_fc||'#0188cc'}};
font-size: {{data.theme.a2.addon_tbox_fs||'18'}}px;
font-weight: {{data.theme.a2.addon_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.a2.addon_tbox_f | livepf}};
font-style: {{data.theme.a2.addon_tbox_fst}};
background-color: {{data.theme.a2.addon_tbox_bgc}};
width: {{data.theme.a2.addon_tbox_w}}px;
height: {{data.theme.a2.addon_tbox_h||'40'}}px;
border-bottom: {{data.theme.a2.addon_tbox_bor||'1'}}px solid {{data.theme.a2.addon_tbox_borc||'#000'}};
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
width: 50px;
height:50px;
position: absolute;
top: 0;
right: 0;
}
.addon_tbox.mailicon:before{
background: {{getIcon('a06',25,data.theme.a2.addon_inico_c||'#000')}} no-repeat center;
}
.addon_tbox.pericon:before{
background: {{getIcon('c04',25,data.theme.a2.addon_inico_c||'#000')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-groups{
display: block;
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
border:1px solid {{data.theme.a2.addon_check_borc||'#0188cc'}};
background-color: {{data.theme.a2.addon_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpab .addon_check .ctext{
color: {{data.theme.a2.addon_check_fc}};
font-size: {{data.theme.a2.addon_check_fs}}px;
font-weight: {{data.theme.a2.addon_check_fw}};
font-family: {{data.theme.a2.addon_check_f | livepf}};
font-style: {{data.theme.a2.addon_check_fst}};
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
background-image:{{getIcon(data.theme.a2.addon_check_mark||'ch1',20,data.theme.a2.addon_check_ic||'#0188cc')}};
}

#wpmchimpab .wpmchimpa > div{
  position: relative;
}
#wpmchimpab .addon_button{
line-height: 45px;
padding-left: 10px;
text-align: left;
cursor: pointer;
margin-top: 15px;
position: relative;
width: 100%;
color: {{data.theme.a2.addon_button_fc||'#fff'}};
font-size: {{data.theme.a2.addon_button_fs || "20"}}px;
font-weight: {{data.theme.a2.addon_button_fw}};
font-family: {{data.theme.a2.addon_button_f | livepf}};
font-style: {{data.theme.a2.addon_button_fst}};
background-color:{{data.theme.a2.addon_button_bc||'#0188cc'}};
width: {{data.theme.a2.addon_button_w}}px;
height: {{data.theme.a2.addon_button_h||'45'}}px;
-webkit-border-radius: {{data.theme.a2.addon_button_br||'1'}}px;
-moz-border-radius: {{data.theme.a2.addon_button_br||'1'}}px;
border-radius: {{data.theme.a2.addon_button_br||'1'}}px;
border: {{data.theme.a2.addon_button_bor||'1'}}px solid {{data.theme.a2.addon_button_borc||'#0284C5'}};
}
#wpmchimpab .addon_button:hover{
color: {{data.theme.a2.addon_button_fch}};
background-color: {{data.theme.a2.addon_button_bch}};
}
#wpmchimpab .addon_button:before{
content:'';
display: block;
width: 45px;
height:45px;
position: absolute;
top: 0;
right: 0;
background: {{getIcon('b03',25,data.theme.a2.addon_bg_c||'#fff')}} no-repeat center;
}
.addon_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}

#wpmchimpab .wpmchimpa-social{
display: inline-block;
margin: 5px auto;
}
#wpmchimpab .wpmchimpa-social::before{
content:"{{data.theme.a2.addon_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
margin-right: 20px;
color: {{data.theme.a2.addon_soc_fc}};
font-size: {{data.theme.a2.addon_soc_fs||'13'}}px;
font-weight: {{data.theme.a2.addon_soc_fw}};
font-family: {{(data.theme.a2.addon_soc_f | livepf)}};
font-style: {{data.theme.a2.addon_soc_fst}};
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:45px;
height: 45px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
float: left;
margin: 0 5px;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
content: '';
width:45px;
height: 45px;
background: no-repeat center;
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',16,'#2d609b')}}
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',16,'#eb4026')}}
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',16,'#00BCF2')}}
}

#wpmchimpab .wpmchimpa-tag{
text-align: center;
display: {{data.theme.a2.addon_tag_en? 'block':'none'}};
}
#wpmchimpab .wpmchimpa-tag,
#wpmchimpab .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.a2.addon_tag_fc||'#000'}};
font-size: {{data.theme.a2.addon_tag_fs||'10'}}px;
font-weight: {{data.theme.a2.addon_tag_fw}};
font-family:Arial;
font-family: {{data.theme.a2.addon_tag_f | livepf}};
font-style: {{data.theme.a2.addon_tag_fst}};
}
#wpmchimpab .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.a2.addon_tag_fs||10,data.theme.a2.addon_tag_fc||'#000')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpab.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpab" class="wpmchimpab" ng-class="{'wosoc':data.theme.a2.addon_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="10" data-lhint="Go to Additional Theme Options" style="margin:-30px">7</div>
        <div class="addon_heading">{{data.theme.a2.addon_heading}}</div>
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Custom Message Settings">1</div>
            
            <div class="addon_msg"><p ng-bind-html="data.theme.a2.addon_msg | safe"></p></div>
            </div>

          <div class="wpmchimpa-social">
            <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            <div class="wpmchimpa-soc wpmchimpa-gp"></div>
            <div class="wpmchimpa-soc wpmchimpa-ms"></div>
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
              <div class="addon_button">{{data.theme.a2.addon_button}}</div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.a2.addon_tag||'Secure and Spam free...' | safe"></div></div>
           <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Spinner Settings" style="right: -50px;">5</div>
              <div class="addon_spinner" ng-bind-html="getSpin(data.theme.a2.addon_spinner_t||'3','wpmchimpab',data.theme.a2.addon_spinner_c||'#0188cc')"></div>
            </div>          
          </div>

     
           
  </div>
</div>
