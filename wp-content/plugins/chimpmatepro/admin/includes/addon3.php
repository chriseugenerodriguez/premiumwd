<style type="text/css">

#wpmchimpab {
text-align: center;
min-height: 100px;
display: inline-block;
border-width: 1px 0;
padding: 50px 20px 10px;
width: 495px;
left: 50px;
top: 200px;
position: relative;
background: {{data.theme.a3.addon_bg_c||'#fff'}};
border: {{data.theme.a3.addon_bor_w||0}}px solid {{data.theme.a3.addon_bor_c||'#000'}};
}
#wpmchimpab .wpmchimpa-leftpane{
display: inline-block;
width: 50%;
float: left;
}
#wpmchimpab .wpmchimpa{
position: relative;
width: 50%;
display: inline-block;
}
#wpmchimpab .addon_heading{
line-height: 18px;
margin: 0 auto 10px;
color: {{data.theme.a3.addon_heading_fc||'#888'}};
font-size: {{data.theme.a3.addon_heading_fs||'18'}}px;
font-weight: {{data.theme.a3.addon_heading_fw}};
font-family: {{data.theme.a3.addon_heading_f | livepf}};
font-style: {{data.theme.a3.addon_heading_fst}};
}
#wpmchimpab .addon_msg, #wpmchimpab .addon_msg *{
font-weight: 600;
margin-bottom: 10px;
font-size: {{data.theme.a3.addon_msg_fs||'12'}}px;
font-family: {{data.theme.a3.addon_msg_f | livepf}};
}
#wpmchimpab .addon_tbox{
margin-bottom: 10px;
position: relative;
width: 100%;
-moz-border-radius: 1px;
-webkit-border-radius: 1px
border-radius: 1px;
padding-left: 35px;
outline:0;
display: block;
color: {{data.theme.a3.addon_tbox_fc||'#353535'}};
font-size: {{data.theme.a3.addon_tbox_fs||'14'}}px;
font-weight: {{data.theme.a3.addon_tbox_fw}};
font-family: {{data.theme.a3.addon_tbox_f | livepf}};
font-style: {{data.theme.a3.addon_tbox_fst}};
background-color: {{data.theme.a3.addon_tbox_bgc||'#f0f0f0'}};
width: {{data.theme.a3.addon_tbox_w}}px;
height: {{data.theme.a3.addon_tbox_h||'35'}}px;
border: {{data.theme.a3.addon_tbox_bor||'0'}}px solid {{data.theme.a3.addon_tbox_borc||'#e4e9e9'}};
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
width: 35px;
height:35px;
position: absolute;
top: 0;
left: 0;
}
.addon_tbox.mailicon:before{
background: {{getIcon('a04',16,data.theme.a3.addon_inico_c||'#919191')}} no-repeat center;
}
.addon_tbox.pericon:before{
background: {{getIcon('c02',16,data.theme.a3.addon_inico_c||'#919191')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-groups{
display: block;
}
#wpmchimpab .wpmchimpa-item{
display:inline-block;
margin: 2px 8px;
}
#wpmchimpab .addon_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
min-width: 40px;
}
#wpmchimpab .addon_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
border:1px solid {{data.theme.a3.addon_check_borc}};
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}
#wpmchimpab .addon_check .ctext{
color: {{data.theme.a3.addon_check_fc}};
font-size: {{data.theme.a3.addon_check_fs}}px;
font-weight: {{data.theme.a3.addon_check_fw}};
font-family: {{data.theme.a3.addon_check_f | livepf}};
font-style: {{data.theme.a3.addon_check_fst}};
}
#wpmchimpab .addon_check .cbox.checked{
background-color: {{data.theme.a3.addon_check_c}};
}
#wpmchimpab .addon_check .cbox.checked:after,#wpmchimpab .addon_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.a3.addon_check_mark||'ch4',8,data.theme.a3.addon_check_ic||'#000')}};
}
#wpmchimpab .addon_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpab .addon_button{
color: #fff;
text-align: center;
cursor: pointer;
margin-top: 15px;
text-align: center;
width:100%;
color: {{data.theme.a3.addon_button_fc||'#fff'}};
font-size: {{data.theme.a3.addon_button_fs || "15"}}px;
font-weight: {{data.theme.a3.addon_button_fw}};
font-family: {{data.theme.a3.addon_button_f | livepf}};
font-style: {{data.theme.a3.addon_button_fst}};
background-color:{{data.theme.a3.addon_button_bc||'#ff6160'}};
width: {{data.theme.a3.addon_button_w}}px;
height: {{data.theme.a3.addon_button_h||'35'}}px;
line-height: {{data.theme.a3.addon_button_h||'35'}}px;
-webkit-border-radius: {{data.theme.a3.addon_button_br||'1'}}px;
-moz-border-radius: {{data.theme.a3.addon_button_br||'1'}}px;
border-radius: {{data.theme.a3.addon_button_br||'1'}}px;
border: {{data.theme.a3.addon_button_bor||'1'}}px solid {{data.theme.a3.addon_button_borc||'#ff5757'}};
}
#wpmchimpab .addon_button:hover{
color: {{data.theme.a3.addon_button_fch}};
background-color: {{data.theme.a3.addon_button_bch||'#ff5757'}};
}

.addon_spinner {
margin-top: 10px;
}

#wpmchimpab .wpmchimpa-social{
display: {{data.theme.a3.addon_dissoc?'none':'inline-block'}};
margin: 10px auto;
}
#wpmchimpab .wpmchimpa-social::before{
content:"{{data.theme.a3.addon_soc_head||'Subscribe with'}}";
line-height: 30px;
display: block;
float:left;
margin-right: 4px;
color: {{data.theme.a3.addon_soc_fc}};
font-size: {{data.theme.a3.addon_soc_fs||'13'}}px;
font-weight: {{data.theme.a3.addon_soc_fw}};
font-family: {{(data.theme.a3.addon_soc_f | livepf)}};
font-style: {{data.theme.a3.addon_soc_fst}};
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:30px;
height: 30px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
float: left;
margin: 0 5px;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 7px;
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
content: {{getIcon('fb1',16,'#fff')}}
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
content: {{getIcon('gp1',16,'#fff')}};
margin: 8px;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
content: {{getIcon('ms1',16,'#fff')}}
}

#wpmchimpab .wpmchimpa-tag{
text-align: center;
display: {{data.theme.a3.addon_tag_en? 'block':'none'}};
}
#wpmchimpab .wpmchimpa-tag,
#wpmchimpab .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.a3.addon_tag_fc||'#000'}};
font-size: {{data.theme.a3.addon_tag_fs||'10'}}px;
font-weight: {{data.theme.a3.addon_tag_fw}};
font-family:Arial;
font-family: {{data.theme.a3.addon_tag_f | livepf}};
font-style: {{data.theme.a3.addon_tag_fst}};
}
#wpmchimpab .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.a3.addon_tag_fs||10,data.theme.a3.addon_tag_fc||'#000')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpab.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpab" class="wpmchimpab" ng-class="{'wosoc':data.theme.a3.addon_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="10" data-lhint="Go to Additional Theme Options" style="margin:-30px">7</div>
        <div class="wpmchimpa-leftpane">
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Custom Message Settings">1</div>
            <div class="addon_heading">{{data.theme.a3.addon_heading}}</div>
            <div class="addon_msg"><p ng-bind-html="data.theme.a3.addon_msg | safe"></p></div>
            </div>
        
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
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
              <div class="addon_button">{{data.theme.a3.addon_button}}</div>
            </div>
           <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.a3.addon_tag||'Secure and Spam free...' | safe"></div></div>
           <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Spinner Settings" style="right: -50px;">5</div>
              <div class="addon_spinner" ng-bind-html="getSpin(data.theme.a3.addon_spinner_t||'4','wpmchimpab',data.theme.a3.addon_spinner_c||'#000')"></div>
            </div>
            
          </div>

     
           
  </div>
</div>
