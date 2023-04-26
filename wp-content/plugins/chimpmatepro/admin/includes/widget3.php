<style type="text/css">

#wpmchimpaw {
width: 300px;
padding: 25px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w3.widget_bg_c||'#fff'}};
position: relative;
}
#wpmchimpaw h3{
margin-bottom:10px;
color: {{data.theme.w3.widget_heading_fc||'#888'}};
font-size: {{data.theme.w3.widget_heading_fs||'26'}}px;
line-height: {{data.theme.w3.widget_heading_fs||'26'}}px;
font-weight: {{data.theme.w3.widget_heading_fw}};
font-family: {{data.theme.w3.widget_heading_f | livepf}};
font-style: {{data.theme.w3.widget_heading_fst}};
}
#wpmchimpaw .widget_msg, #wpmchimpaw .widget_msg *{
color: #ff6160;
font-weight: 600;
line-height: 18px;
font-size: {{data.theme.w3.widget_msg_fs||'12'}}px;
font-family: {{data.theme.w3.widget_msg_f | livepf}};
}
#wpmchimpaw .widget_tbox{
text-align: center;
margin-bottom: 10px;
width: 100%;
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.w3.widget_tbox_fc||'#353535'}};
font-size: {{data.theme.w3.widget_tbox_fs||'14'}}px;
font-weight: {{data.theme.w3.widget_tbox_fw}};
font-family: {{data.theme.w3.widget_tbox_f | livepf}};
font-style: {{data.theme.w3.widget_tbox_fst}};
background-color: {{data.theme.w3.widget_tbox_bgc||'#f0f0f0'}};
width: {{data.theme.w3.widget_tbox_w}}px;
height: {{data.theme.w3.widget_tbox_h||'35'}}px;
border: {{data.theme.w3.widget_tbox_bor||'0'}}px solid {{data.theme.w3.widget_tbox_borc}};
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
width: 35px;
height:35px;
position: absolute;
top: 0;
left: 0;
}
.widget_tbox.mailicon:before{
background: {{getIcon('a04',16,data.theme.w3.widget_inico_c||'#919191')}} no-repeat center;
}
.widget_tbox.pericon:before{
background: {{getIcon('c02',16,data.theme.w3.widget_inico_c||'#919191')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-groups{
display: block;
}
#wpmchimpaw .wpmchimpa-item{
display:inline-block;
margin: 2px;
}
#wpmchimpaw .widget_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 25px;
min-width: 85px;
}
#wpmchimpaw .widget_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
top:7px;
text-align: center;
position: absolute;
border:1px solid {{data.theme.w3.widget_check_borc}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w3.widget_check_fc}};
font-size: {{data.theme.w3.widget_check_fs}}px;
font-weight: {{data.theme.w3.widget_check_fw}};
font-family: {{data.theme.w3.widget_check_f | livepf}};
font-style: {{data.theme.w3.widget_check_fst}};
}
#wpmchimpaw .widget_check .cbox.checked{
background-color: {{data.theme.w3.widget_check_c}};
}
#wpmchimpaw .widget_check .cbox.checked:after,#wpmchimpaw .widget_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.w3.widget_check_mark||'ch4',8,data.theme.w3.widget_check_ic||'#000')}};
}
#wpmchimpaw .widget_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpaw .widget_button{
cursor: pointer;
width: 100%;
margin-top:5px;
color: {{data.theme.w3.widget_button_fc||'#fff'}};
font-size: {{data.theme.w3.widget_button_fs || "15"}}px;
font-weight: {{data.theme.w3.widget_button_fw}};
font-family: {{data.theme.w3.widget_button_f | livepf}};
font-style: {{data.theme.w3.widget_button_fst}};
background-color:{{data.theme.w3.widget_button_bc||'#ff6160'}};
width: {{data.theme.w3.widget_button_w}}px;
height: {{data.theme.w3.widget_button_h||'35'}}px;
line-height: {{data.theme.w3.widget_button_h||'35'}}px;
-webkit-border-radius: {{data.theme.w3.widget_button_br||'1'}}px;
-moz-border-radius: {{data.theme.w3.widget_button_br||'1'}}px;
border-radius: {{data.theme.w3.widget_button_br||'1'}}px;
border: {{data.theme.w3.widget_button_bor||'1'}}px solid {{data.theme.w3.widget_button_borc||'#ff5757'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w3.widget_button_fch}};
background-color: {{data.theme.w3.widget_button_bch||'#ff5757'}};
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
display: {{data.theme.w3.widget_dissoc?'none':'inline-block'}};
margin: 10px auto;
}
#wpmchimpaw .wpmchimpa-social::before{
content:"{{data.theme.w3.widget_soc_head||'Subscribe with'}}";
line-height: 30px;
display: block;
float:left;
margin-right: 4px;
color: {{data.theme.w3.widget_soc_fc}};
font-size: {{data.theme.w3.widget_soc_fs||'13'}}px;
font-weight: {{data.theme.w3.widget_soc_fw}};
font-family: {{(data.theme.w3.widget_soc_f | livepf)}};
font-style: {{data.theme.w3.widget_soc_fst}};
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc{
width:30px;
height: 30px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
float: left;
margin: 0 5px;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 7px 0;
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
content: {{getIcon('fb1',16,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
content: {{getIcon('gp1',16,'#fff')}};
margin: 8px;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
content: {{getIcon('ms1',16,'#fff')}}
}

#wpmchimpaw .wpmchimpa-tag{
text-align: center;
display: {{data.theme.w3.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w3.widget_tag_fc||'#000'}};
font-size: {{data.theme.w3.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w3.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w3.widget_tag_f | livepf}};
font-style: {{data.theme.w3.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w3.widget_tag_fs||10,data.theme.w3.widget_tag_fc||'#000')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpaw.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpaw" ng-class="{'wosoc':data.theme.w3.widget_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-15px">7</div>
        
        <div class="wpmchimpaw">
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.w3.widget_heading}}</h3>
            <div class="widget_msg"><p ng-bind-html="data.theme.w3.widget_msg | safe"></p></div>
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
              <div class="widget_button">{{data.theme.w3.widget_button}}</div>
            </div>
           <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.w3.widget_tag||'Secure and Spam free...' | safe"></div></div>
           <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings">5</div>
              <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w3.widget_spinner_t||'4','wpmchimpaw',data.theme.w3.widget_spinner_c||'#000')"></div>
            </div>
          </div>
  </div>
</div>
