<style type="text/css">

#wpmchimpaw {
width: 300px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w9.widget_bg_c||'#262E43'}};
position: relative;
padding: 0 5px;
}
#wpmchimpaw h3{
padding-top:20px;
color: {{data.theme.w9.widget_heading_fc||'#F4233C'}};
font-size: {{data.theme.w9.widget_heading_fs||'20'}}px;
line-height: {{data.theme.w9.widget_heading_fs||'20'}}px;
font-weight: {{data.theme.w9.widget_heading_fw}};
font-family: {{data.theme.w9.widget_heading_f | livepf}};
font-style: {{data.theme.w9.widget_heading_fst}};
}
#wpmchimpaw .widget_msg, #wpmchimpaw .widget_msg *{
color: #959595;
font-size: {{data.theme.w9.widget_msg_fs||'12'}}px;
font-family: {{data.theme.w9.widget_msg_f | livepf}};
}
#wpmchimpaw .widget_msg{
  margin-top: 15px;
  line-height: 14px;
}
#wpmchimpaw .wpmchimpa_form{
margin-top: 20px;
}
#wpmchimpaw .wpmchimpa_formbox > div,
#wpmchimpaw .wpmchimpa_form > div{
position: relative;
}
#wpmchimpaw .wpmchimpa_formbox > div:first-of-type{
  width: 65%;
  float: left;
}
#wpmchimpaw .wpmchimpa_formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
#wpmchimpaw .wpmchimpa_formbox .widget_tbox{
border-radius: 3px 0 0 3px;
}
#wpmchimpaw .widget_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
 padding: 0 10px 0 40px;
border-radius: 3px;
outline:0;
display: block;
color: {{data.theme.w9.widget_tbox_fc||'#353535'}};
font-size: {{data.theme.w9.widget_tbox_fs||'14'}}px;
font-weight: {{data.theme.w9.widget_tbox_fw}};
font-family: {{data.theme.w9.widget_tbox_f | livepf}};
font-style: {{data.theme.w9.widget_tbox_fst}};
background-color: {{data.theme.w9.widget_tbox_bgc||'#fff'}};
width: {{data.theme.w9.widget_tbox_w}}px;
height: {{data.theme.w9.widget_tbox_h||'35'}}px;
line-height: {{data.theme.w9.widget_tbox_h||'35'}}px;
border: {{data.theme.w9.widget_tbox_bor||'1'}}px solid {{data.theme.w9.widget_tbox_borc||'#efefef'}};
}
#wpmchimpab .widget_tbox .in-text{
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
width: 40px;
height: {{data.theme.w9.widget_tbox_h||'35'}}px;
position: absolute;
top: 0;
left: 0;
}
.widget_tbox.mailicon:before{
background: {{getIcon('a02',13,data.theme.w9.widget_inico_c||data.theme.w9.widget_tbox_fc||'#000')}} no-repeat center;
}
.widget_tbox.pericon:before{
background: {{getIcon('c06',13,data.theme.w9.widget_inico_c||data.theme.w9.widget_tbox_fc||'#000')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-groups{
display: block;
  margin: 5px auto 5px;
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
line-height: 14px;
min-width: 85px;
}
#wpmchimpaw .widget_check .cbox{
display: inline-block;
width: 12px;
height: 12px;
left: 0;
top:3px;
text-align: center;
position: absolute;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.w9.widget_check_borc}};
background-color: {{data.theme.w9.widget_check_c||'#fff'}};
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w9.widget_check_fc||'#fff'}};
font-size: {{data.theme.w9.widget_check_fs||'12'}}px;
font-weight: {{data.theme.w9.widget_check_fw}};
font-family: {{data.theme.w9.widget_check_f | livepf}};
font-style: {{data.theme.w9.widget_check_fst}};
}
#wpmchimpaw .widget_check .cbox.checked:after,#wpmchimpaw .widget_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.w9.widget_check_mark||'ch2',8,data.theme.w9.widget_check_ic||'#000')}};
}
#wpmchimpaw .widget_check:hover .cbox:after{
opacity: 0.5;
}
#wpmchimpaw .wpmchimpa_formbox > div{
  position: relative;
}
#wpmchimpaw .widget_button{
width: 100%;
text-align: center;
cursor: pointer;
border-radius: 0 3px 3px 0;
color: {{data.theme.w9.widget_button_fc||'#fff'}};
font-size: {{data.theme.w9.widget_button_fs || "17"}}px;
font-weight: {{data.theme.w9.widget_button_fw}};
font-family: {{data.theme.w9.widget_button_f | livepf}};
font-style: {{data.theme.w9.widget_button_fst}};
background-color:{{data.theme.w9.widget_button_bc||'#FF1F43'}};
width: {{data.theme.w9.widget_button_w}}px;
height: {{data.theme.w9.widget_button_h||'35'}}px;
line-height: {{data.theme.w9.widget_button_h||'35'}}px;
-webkit-border-radius: {{data.theme.w9.widget_button_br||'3'}}px;
-moz-border-radius: {{data.theme.w9.widget_button_br||'3'}}px;
border-radius: {{data.theme.w9.widget_button_br||'3'}}px;
border: {{data.theme.w9.widget_button_bor||'1'}}px solid {{data.theme.w9.widget_button_borc||'#FA0B38'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w9.widget_button_fch}};
background-color: {{data.theme.w9.widget_button_bch||'#FA0B38'}};
}

#wpmchimpaw .wpmchimpa-tag{
margin: 5px auto;
display: {{data.theme.w9.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w9.widget_tag_fc||'#fff'}};
font-size: {{data.theme.w9.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w9.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w9.widget_tag_f | livepf}};
font-style: {{data.theme.w9.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w9.widget_tag_fs||10,data.theme.w9.widget_tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpaw .in-mail+div{
position: absolute;
top: 0;
right: 0;
}
.widget_spinner {
top: 0;
right: 0;
margin: 4px 5px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
transform-origin:right;
}
</style>

<div id="wpmchimpaw">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-25px">7</div>
        
        <div class="wpmchimpaw">
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.w9.widget_heading}}</h3>
            <div class="widget_msg"><p ng-bind-html="data.theme.w9.widget_msg | safe"></p></div>
            </div>
            <div class="wpmchimpa_form">
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
              <div class="widget_tbox pericon"><div class="in-text in-name">Name</div></div>
            </div>
            <div class="wpmchimpa_formbox">
              <div class="widget_tbox mailicon"><div class="in-text in-mail">Email address</div>
                <div>
                  <div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="left:10px;top:25px">5</div>
                  <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w9.widget_spinner_t||'8','wpmchimpaw',data.theme.w9.widget_spinner_c||'#000')"></div>
                </div>
              </div>
              <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
                <div class="widget_button">{{data.theme.w9.widget_button}}</div>
              </div>
              <div style="clear:both"></div>
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
      <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.w9.widget_tag||'Secure and Spam free...' | safe"></div></div>

          </div>
          </div>
  </div>
</div>
