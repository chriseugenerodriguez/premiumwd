<style type="text/css">

#wpmchimpaw {
width: 350px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w2.widget_bg_c||'#fff'}};
position: relative;
}
#wpmchimpaw .wpmchimpaw{
  margin: 0 10px;
}
#wpmchimpaw h3{
width: 100%;
line-height: 60px;
margin-bottom:10px;
padding-left: 40px;
text-align: center;
position: relative;
color: {{data.theme.w2.widget_heading_fc||'#fff'}};
font-size: {{data.theme.w2.widget_heading_fs||'20'}}px;
font-weight: {{data.theme.w2.widget_heading_fw}};
font-family: {{data.theme.w2.widget_heading_f | livepf}};
font-style: {{data.theme.w2.widget_heading_fst}};
background-color: {{data.theme.w2.widget_hbg_c||'#0188cc'}};
}
#wpmchimpaw h3:before{
content:'';
position: absolute;
top: 0;
left: 0;
width: 40px;
height: 60px;
background: {{getIcon('opt1',20,data.theme.w2.widget_hi_c||'#fff')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa{margin:10px;}
#wpmchimpaw .widget_msg, #wpmchimpaw .widget_msg *{
font-weight: lighter;
line-height: 18px;
margin: 0;
padding: 10px;
font-size: {{data.theme.w2.widget_msg_fs||'12'}}px;
font-family: {{data.theme.w2.widget_msg_f | livepf}};
}
#wpmchimpaw .widget_tbox{
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
color: {{data.theme.w2.widget_tbox_fc||'#0188cc'}};
font-size: {{data.theme.w2.widget_tbox_fs||'15'}}px;
font-weight: {{data.theme.w2.widget_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.w2.widget_tbox_f | livepf}};
font-style: {{data.theme.w2.widget_tbox_fst}};
background-color: {{data.theme.w2.widget_tbox_bgc}};
width: {{data.theme.w2.widget_tbox_w}}px;
height: {{data.theme.w2.widget_tbox_h||'30'}}px;
border-bottom: {{data.theme.w2.widget_tbox_bor||'1'}}px solid {{data.theme.w2.widget_tbox_borc||'#000'}};
}
#wpmchimpaw .widget_tbox div{
top: 50%;
-webkit-transform: translatey(-50% );
-moz-transform: translatey(-50% );
-ms-transform: translatey(-50% );
-o-transform: translatey(-50% );
transform: translatey(-50% );
position: relative;
}
.widget_tbox.mailicon:before,
.widget_tbox.pericon:before{
content:'';
display: block;
width: 30px;
height:30px;
position: absolute;
top: 0;
right: 0;
}
.widget_tbox.mailicon:before{
background: {{getIcon('a06',20,data.theme.w2.widget_inico_c||'#000')}} no-repeat center;
}
.widget_tbox.pericon:before{
background: {{getIcon('c04',20,data.theme.w2.widget_inico_c||'#000')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-groups{
display: block;
}
#wpmchimpaw .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpaw .widget_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
}
#wpmchimpaw .widget_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
bottom: 0;
text-align: center;
position: absolute;
border:1px solid {{data.theme.w2.widget_check_borc||'#0188cc'}};
background-color: {{data.theme.w2.widget_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w2.widget_check_fc}};
font-size: {{data.theme.w2.widget_check_fs}}px;
font-weight: {{data.theme.w2.widget_check_fw}};
font-family: {{data.theme.w2.widget_check_f | livepf}};
font-style: {{data.theme.w2.widget_check_fst}};
}
#wpmchimpaw .widget_check .cbox.checked{
border:none;background:none;
}
#wpmchimpaw .widget_check .cbox.checked:after{
display: block;
overflow: hidden;
width:20px;
height:20px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.w2.widget_check_mark||'ch1',20,data.theme.w2.widget_check_ic||'#0188cc')}};
}

#wpmchimpaw .widget_button{
line-height: 36px;
padding-left: 10px;
text-align: left;
cursor: pointer;
margin-top: 15px;
position: relative;
width: 100%;
color: {{data.theme.w2.widget_button_fc||'#fff'}};
font-size: {{data.theme.w2.widget_button_fs || "20"}}px;
font-weight: {{data.theme.w2.widget_button_fw}};
font-family: {{data.theme.w2.widget_button_f | livepf}};
font-style: {{data.theme.w2.widget_button_fst}};
background-color:{{data.theme.w2.widget_button_bc||'#0188cc'}};
width: {{data.theme.w2.widget_button_w}}px;
height: {{data.theme.w2.widget_button_h||'36'}}px;
-webkit-border-radius: {{data.theme.w2.widget_button_br||'1'}}px;
-moz-border-radius: {{data.theme.w2.widget_button_br||'1'}}px;
border-radius: {{data.theme.w2.widget_button_br||'1'}}px;
border: {{data.theme.w2.widget_button_bor||'1'}}px solid {{data.theme.w2.widget_button_borc||'#0284C5'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w2.widget_button_fch}};
background-color: {{data.theme.w2.widget_button_bch}};
}
#wpmchimpaw .widget_button:before{
content:'';
display: block;
width: 36px;
height:36px;
position: absolute;
top: 0;
right: 0;
background: {{getIcon('b03',20,data.theme.w2.widget_bg_c||'#fff')}} no-repeat center;
}

.widget_spinner {
margin-top: 15px;
}

.widget_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}

#wpmchimpaw .wpmchimpa-social{
display: inline-block;
margin: 5px auto;
}
#wpmchimpaw .wpmchimpa-social::before{
content:"{{data.theme.w2.widget_soc_head||'Subscribe with'}}";
line-height: 30px;
display: block;
float:left;
margin-right: 20px;
color: {{data.theme.w2.widget_soc_fc}};
font-size: {{data.theme.w2.widget_soc_fs||'13'}}px;
font-weight: {{data.theme.w2.widget_soc_fw}};
font-family: {{(data.theme.w2.widget_soc_f | livepf)}};
font-style: {{data.theme.w2.widget_soc_fst}};
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc{
width:30px;
height: 30px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
float: left;
margin: 0 5px;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 7px;
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
content: {{getIcon('fb1',16,'#2d609b')}};
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
content: {{getIcon('gp1',16,'#eb4026')}};
margin: 8px;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
content: {{getIcon('ms1',16,'#00BCF2')}};
}

#wpmchimpaw .wpmchimpa-tag{
text-align: center;
display: {{data.theme.w2.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w2.widget_tag_fc||'#000'}};
font-size: {{data.theme.w2.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w2.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w2.widget_tag_f | livepf}};
font-style: {{data.theme.w2.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w2.widget_tag_fs||10,data.theme.w2.widget_tag_fc||'#000')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpaw.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpaw" ng-class="{'wosoc':data.theme.w2.widget_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-15px">7</div>
        <h3>{{data.theme.w2.widget_heading}}</h3>
        <div class="wpmchimpaw">
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            
            <div class="widget_msg"><p ng-bind-html="data.theme.w2.widget_msg | safe"></p></div>
            </div>
            <div class="wpmchimpa-social">
              <div class="wpmchimpa-soc wpmchimpa-fb"></div>
              <div class="wpmchimpa-soc wpmchimpa-gp"></div>
              <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
              <div class="widget_tbox pericon"><div class="in-name">Name</div></div>
              <div class="widget_tbox mailicon"><div class="in-mail">Email address</div></div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings">3</div>
              <div class="wpmchimpa-groups">
                <div class="widget_check_c"></div>
                <div class="wpmchimpa-item">
                    <div class="widget_check">
                      <div class="cbox"></div>
                      <div class="ctext">group1</div>
                    </div>
                </div>
                <div class="wpmchimpa-item">
                    <div class="widget_check">
                      <div class="cbox checked"></div>
                      <div class="ctext">group2</div>
                    </div>
                </div>
              </div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
              <div class="widget_button">{{data.theme.w2.widget_button}}</div>
            </div>
             <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.w2.widget_tag||'Secure and Spam free...' | safe"></div></div>
          <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings">5</div>
              <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w2.widget_spinner_t||'3','wpmchimpaw',data.theme.w2.widget_spinner_c||'#0188cc')"></div>
            </div>
          </div>
  </div>
</div>
