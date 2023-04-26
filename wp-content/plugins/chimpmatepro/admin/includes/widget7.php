<style type="text/css">

#wpmchimpaw {
width: 350px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w7.widget_bg_c||'#f7f7f7'}};
position: relative;
}
#wpmchimpaw .wpmchimpa-leftpane{
position: relative;
text-align: left;
}
#wpmchimpaw .wpchimpa-banner{
display: block;
position: relative;
background: {{data.theme.w7.widget_hbg_c || '#1d91ce'}};
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
#wpmchimpaw .wpmchimpa-leftpane:after{
content: '';
display: block;
width: 45px;
height: 45px;
position: absolute;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
  background: {{getIcon('b04',25,data.theme.w7.widget_hi_c||'#fff')}} no-repeat center;
  background-color: {{data.theme.w7.widget_hi_bc|| '#61c0b5'}};
top:75px;
right: 20px;
z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
#wpmchimpaw .wpmchimpa-head{
padding-left:10px;
position: relative;
text-align: left;
}
#wpmchimpaw h3{
width: 100%;
line-height: 28px;
margin: 0;
color: {{data.theme.w7.widget_heading_fc||'#fff'}};
font-size: {{data.theme.w7.widget_heading_fs||'28'}}px;
font-weight: {{data.theme.w7.widget_heading_fw}};
font-family: {{data.theme.w7.widget_heading_f | livepf}};
font-style: {{data.theme.w7.widget_heading_fst}};
background-color: {{data.theme.w7.widget_hbg_c}};
}
#wpmchimpaw .widget_msg,#wpmchimpaw .widget_msg *{
font-size: 14px;
color: #fff;
font-weight: lighter;
margin: 0;
font-size: {{data.theme.w7.widget_msg_fs||'18'}}px;
font-family: {{data.theme.w7.widget_msg_f | livepf}};
}
#wpmchimpaw .wpmchimpa-databox{
width: 100%;
height:100px;
display: block;
background: {{data.theme.w7.widget_exhbc || '#ededed'}};
position: relative;
}
#wpmchimpaw .wpmchimpa-databox *{
    color: {{data.theme.w7.widget_exhc1 || '#ababab'}};
  font-family: {{data.theme.w7.widget_exhf}};
  font-family: {{data.theme.w7.widget_exhfw}};
  font-family:{{data.theme.w7.widget_exhfst}}; 
}
#wpmchimpaw .wpmchimpa-databox .wpmcdate{
padding: 35px 0 0 10px;
display: inline-block;
width: 125px;
position: relative;
float: left;
}
#wpmchimpaw .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 25px;
line-height: 35px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcdm{
font-size: 14px;
line-height: 14px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcdd{
font-size: 50px;
line-height: 50px;
color: {{data.theme.w7.widget_exhc2 || '#f95753'}};
display: inline-block;
float: left;
}
#wpmchimpaw .wpmchimpa-databox .wpmcweat{
padding: 35px 10px 10px 5px;
display: {{data.theme.w7.widget_wloc ? 'inline-block':'none'}};
width: 180px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwl{
font-size: 14px;
line-height: 14px;
display: inline-block;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: {{getIcon('loc1',10,data.theme.w7.widget_exhc1||'#ababab')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwc{
font-size: 11px;
line-height: 11px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwi{
display: block;
width: 30px;
height: 30px;
margin: 2px 0 0 5px;
float: left;
background: {{getIcon('w01',30)}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 4px 10px 0;
font-size: 30px;
line-height: 30px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcwdinac{display: none;}
#wpmchimpaw .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 12px;
line-height: 12px;
margin: 5px 0;
}
#wpmchimpaw .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
#wpmchimpaw .wpmchimpa-databox .wpmcl2owm{
font-size: 8px;
display: {{data.theme.w7.widget_l2owm ? 'block':'none'}};
  line-height: 8px;
}
#wpmchimpaw .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}

#wpmchimpaw .wpmchimpa-top{
  padding: 10px;
  text-align: center;
}
#wpmchimpaw .wpmchimpa-edit-button,
#wpmchimpaw .wpmchimpa-del-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}
#wpmchimpaw .wpmchimpa-edit-button{
right: 10px;
background: {{getIcon('ed1',15,data.theme.w7.widget_ui_c||'#fff')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-del-button{
right: 30px;
background: {{getIcon('del1',15,data.theme.w7.widget_ui_c||'#fff')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
#wpmchimpaw .wpmchimpa-social::before{
content: '{{data.theme.w7.widget_soc_head || 'Subscribe with'}}';
line-height: 20px;
display: block;
float:left;
color: {{data.theme.w7.widget_soc_fc || '#fff'}};
font-size: {{data.theme.w7.widget_soc_fs||'15'}}px;
font-weight: {{data.theme.w7.widget_soc_fw}};
font-family: {{(data.theme.w7.widget_soc_f | livepf)}};
font-style: {{data.theme.w7.widget_soc_fst}};
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc{
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid {{data.theme.w7.widget_soc_fc || '#fff'}};
border-radius: 50%;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',11,data.theme.w7.widget_soc_fc||'#fff')}} 
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',11,data.theme.w7.widget_soc_fc||'#fff')}} 
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',11,data.theme.w7.widget_soc_fc||'#fff')}} 
}
#wpmchimpaw .wpmchimpa{
margin: 10px;
padding-bottom: 10px;
width: calc(100% - 20px);
}
#wpmchimpaw .widget_tbox{
text-align: left;
margin-bottom: 10px;
margin-left: 40px;
width: calc(100% - 40px);
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.w7.widget_tbox_fc||'#61c0b5'}};
font-size: {{data.theme.w7.widget_tbox_fs||'18'}}px;
font-weight: {{data.theme.w7.widget_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.w7.widget_tbox_f | livepf}};
font-style: {{data.theme.w7.widget_tbox_fst}};
background-color: {{data.theme.w7.widget_tbox_bgc || '#f7f7f7'}};
width: {{data.theme.w7.widget_tbox_w}}px;
height: {{data.theme.w7.widget_tbox_h||'40'}}px;
border-bottom: {{data.theme.w7.widget_tbox_bor||'1'}}px solid {{data.theme.w7.widget_tbox_borc||'#000'}};
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
width: 40px;
height:40px;
position: absolute;
top: 0;
left: -40px;
}
.widget_tbox.mailicon:before{
background: {{getIcon('a07',25,data.theme.w7.widget_inico_c||'#ababab')}} no-repeat center;
}
.widget_tbox.pericon:before{
background: {{getIcon('c05',25,data.theme.w7.widget_inico_c||'#ababab')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-groups{
display: block;
margin-left: 40px;
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
border:1px solid {{data.theme.w7.widget_check_borc||'#61c0b5'}};
background-color: {{data.theme.w7.widget_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w7.widget_check_fc}};
font-size: {{data.theme.w7.widget_check_fs}}px;
font-weight: {{data.theme.w7.widget_check_fw}};
font-family: {{data.theme.w7.widget_check_f | livepf}};
font-style: {{data.theme.w7.widget_check_fst}};
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
background-image:{{getIcon(data.theme.w7.widget_check_mark||'ch1',20,data.theme.w7.widget_check_ic||'#61c0b5')}};
}

#wpmchimpaw .widget_button{
line-height: 35px;
padding-left: 10px;
text-align: center;
cursor: pointer;
margin-top: 15px;
position: relative;
width: calc(100% - 40px);
margin-left: 40px;
color: {{data.theme.w7.widget_button_fc||'#fff'}};
font-size: {{data.theme.w7.widget_button_fs || "20"}}px;
font-weight: {{data.theme.w7.widget_button_fw}};
font-family: {{data.theme.w7.widget_button_f | livepf}};
font-style: {{data.theme.w7.widget_button_fst}};
background-color:{{data.theme.w7.widget_button_bc||'#61c0b5'}};
width: {{data.theme.w7.widget_button_w}}px;
height: {{data.theme.w7.widget_button_h||'35'}}px;
-webkit-border-radius: {{data.theme.w7.widget_button_br||'1'}}px;
-moz-border-radius: {{data.theme.w7.widget_button_br||'1'}}px;
border-radius: {{data.theme.w7.widget_button_br||'1'}}px;
border: {{data.theme.w7.widget_button_bor||'1'}}px solid {{data.theme.w7.widget_button_borc||'#59c2b6'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w7.widget_button_fch}};
background-color: {{data.theme.w7.widget_button_bch}};
}
.widget_spinner {
margin-top: 15px;
}

.widget_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}
#wpmchimpaw.woexhead .wpmchimpa-databox{
display: none;
}
#wpmchimpaw.woexhead .wpmchimpa-leftpane{
  margin-bottom: 50px;
}
#wpmchimpaw.woexhead  .wpmchimpa-leftpane:after{
 top:55px;
}

#wpmchimpaw .wpmchimpa-tag{
text-align: center;
margin-top: 6px;
display: {{data.theme.w7.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w7.widget_tag_fc||'#b8b8b8'}};
font-size: {{data.theme.w7.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w7.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w7.widget_tag_f | livepf}};
font-style: {{data.theme.w7.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w7.widget_tag_fs||10,data.theme.w7.widget_tag_fc||'#b8b8b8')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpaw.wosoc .wpmchimpa-social{
  display: none;
}
</style>

<div id="wpmchimpaw" ng-class="{'woexhead':data.theme.w7.widget_exhead,'wosoc':data.theme.w7.widget_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-15px">7</div>
        
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
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
                <h3>{{data.theme.w7.widget_heading}}</h3>
               <div class="widget_msg"><p ng-bind-html="data.theme.w7.widget_msg | safe"></p>
            </div></div>
          </div>
          <div class="wpmchimpa-databox">
            <div class="wpmcdate" ng-show="data.theme.w7.widget_exhopt == '0'">
              <div class="wpmcdm">Monday, January</div>
              <div class="wpmcdd">21</div>
              <div class="wpmcdy">2015</div>
            </div>
            <div class="wpmcweat" ng-show="data.theme.w7.widget_exhopt == '0'">
              <div class="wpmcwl">{{data.theme.w7.widget_wloc}}</div>
          <div class="wpmcwc">Clear</div>
          <div class="wpmcwi"></div>
          <div class="wpmcwd"><span>30</span><span class="wpmcwdinac">86</span></div>
          <div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
          <div class="wpmcl2owm">extended forecast</div>
            </div>
            <div class="wpmcexhp" ng-show="data.theme.w7.widget_exhopt == '1'">{{data.theme.w7.widget_exhp}}</div>
          </div>
        </div>
        <div class="wpmchimpaw">
            
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
              <div class="widget_button">{{data.theme.w7.widget_button}}</div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.w7.widget_tag||'Secure and Spam free...' | safe"></div></div>
          <div>
              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings">5</div>
              <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w7.widget_spinner_t||'1','wpmchimpaw',data.theme.w7.widget_spinner_c||'#61c0b5')"></div>
            </div>
          </div>
  </div>
