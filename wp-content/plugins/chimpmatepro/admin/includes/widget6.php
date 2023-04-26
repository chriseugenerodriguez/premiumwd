<style type="text/css">

#wpmchimpaw {
width: 300px;
padding: 0px;
display: block;
left: 624px;
text-align: center;
top: 95px;
background: {{data.theme.w6.widget_bg_c||'#4097D3'}};
position: relative;
}
#wpmchimpaw .wpmchimpa-leftpane{
padding-bottom: 56.25%;
width: 100%;
background-image: url({{ data.theme.w6.widget_img1}});
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
float: left;
}
#wpmchimpaw .wpmchimpa-leftpane:before{
content: {{ data.theme.w6.widget_vid1 ? "''":""}};
position:absolute;
top: 0;
left: 0;
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhcGFfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9Ii04MCAyNC45IDQ1MCAyNTMuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAtODAgMjQuOSA0NTAgMjUzLjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0ic3QwIj48c3R5bGUgdHlwZT0idGV4dC9jc3MiPi5zdDB7YmFja2dyb3VuZDojZmZmO30uc3Qxe2ZpbGw6I0NDMTgxRTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTk4LDExOC44Yy0xLjUtNi41LTYuOC0xMS4zLTEzLjMtMTJjLTE1LjItMS43LTMwLjYtMS43LTQ1LjktMS43Yy0xNS4zLDAtMzAuNywwLTQ1LjksMS43Yy02LjQsMC43LTExLjcsNS41LTEzLjIsMTJjLTIuMSw5LjMtMi4yLDE5LjQtMi4yLDI5czAsMTkuNywyLjEsMjljMS41LDYuNSw2LjgsMTEuMywxMy4yLDEyYzE1LjIsMS43LDMwLjYsMS43LDQ1LjksMS43YzE1LjMsMCwzMC43LDAsNDUuOS0xLjdjNi40LTAuNywxMS44LTUuNSwxMy4zLTEyYzIuMS05LjMsMi4xLTE5LjQsMi4xLTI5QzIwMC4xLDEzOC4yLDIwMC4xLDEyOC4xLDE5OCwxMTguOHogTTEyMi45LDE2Ni44YzAtMTMuNiwwLTI3LDAtNDAuNWMxMyw2LjgsMjUuOSwxMy41LDM5LDIwLjNDMTQ4LjksMTUzLjQsMTM2LDE2MC4xLDEyMi45LDE2Ni44eiIvPjwvZz48cGF0aCBjbGFzcz0ic3QwIiBkPSJ6Ii8+PC9zdmc+);
width: 100%;
padding-bottom: 56.25%;
}
#wpmchimpaw .wpmchimpaw{
width: calc(100% - 30px);
margin: 20px auto 0;
display: inline-block;
}
#wpmchimpaw h3{
margin: 0;
margin-bottom:10px;
text-decoration: underline;
color: {{data.theme.w6.widget_heading_fc||'#FFD804'}};
font-size: {{data.theme.w6.widget_heading_fs||'17'}}px;
line-height: {{data.theme.w6.widget_heading_fs||'17'}}px;
font-weight: {{data.theme.w6.widget_heading_fw}};
font-family: {{data.theme.w6.widget_heading_f | livepf}};
font-style: {{data.theme.w6.widget_heading_fst}};
}
#wpmchimpaw .widget_msg, #wpmchimpaw .widget_msg *{
color: #fff;
margin-bottom: 10px;
font-size: {{data.theme.w6.widget_msg_fs||'12'}}px;
font-family: {{data.theme.w6.widget_msg_f | livepf}};
}
#wpmchimpaw .widget_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
outline:0;
display: block;
position: relative;
padding-left: 35px;
border-radius: 8px;
font-size:15px;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
color: {{data.theme.w6.widget_tbox_fc||'#fff'}};
font-size: {{data.theme.w6.widget_tbox_fs||'15'}}px;
font-weight: {{data.theme.w6.widget_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.w6.widget_tbox_f | livepf}};
font-style: {{data.theme.w6.widget_tbox_fst}};
background-color: {{data.theme.w6.widget_tbox_bgc||'#0D65A1'}};
width: {{data.theme.w6.widget_tbox_w}}px;
height: {{data.theme.w6.widget_tbox_h||'30'}}px;
border: {{data.theme.w6.widget_tbox_bor}}px solid {{data.theme.w6.widget_tbox_borc}};
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
height: {{data.theme.w6.widget_tbox_h||'30'}}px;
position: absolute;
top: 0;
left: 0;
}
.widget_tbox.mailicon:before{
background: {{getIcon('a05',15,data.theme.w6.widget_inico_c||'#4097D3')}} no-repeat center;
}
.widget_tbox.pericon:before{
background: {{getIcon('c01',15,data.theme.w6.widget_inico_c||'#4097D3')}} no-repeat center;
}
#wpmchimpaw .wpmchimpa-groups{
display: block;margin: 10px auto;
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
bottom: 0;
text-align: center;
position: absolute;
border-radius: 2px;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.w6.widget_check_borc||'#0D65A1'}};
background-color: {{data.theme.w6.widget_check_c||'#0D65A1'}};
}
#wpmchimpaw .widget_check .ctext{
color: {{data.theme.w6.widget_check_fc||'#fff'}};
font-size: {{data.theme.w6.widget_check_fs}}px;
font-weight: {{data.theme.w6.widget_check_fw}};
font-family: {{data.theme.w6.widget_check_f | livepf}};
font-style: {{data.theme.w6.widget_check_fst}};
}
#wpmchimpaw .widget_check .cbox.checked:after,#wpmchimpaw .widget_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.w6.widget_check_mark||'ch1',8,data.theme.w6.widget_check_ic||'#fff')}};
}
#wpmchimpaw .widget_check:hover .cbox:after{
opacity: 0.5;
}
#wpmchimpaw .wpmchimpaw > div{
  position: relative;
}
#wpmchimpaw .widget_button{
text-align: center;
cursor: pointer;
margin-top: 10px;
text-align: center;
width: 100%;
position: relative;
color: {{data.theme.w6.widget_button_fc||'#4097D3'}};
font-size: {{data.theme.w6.widget_button_fs || "17"}}px;
font-weight: {{data.theme.w6.widget_button_fw}};
font-family: {{data.theme.w6.widget_button_f | livepf}};
font-style: {{data.theme.w6.widget_button_fst}};
background-color:{{data.theme.w6.widget_button_bc||'#FFD804'}};
width: {{data.theme.w6.widget_button_w}}px;
height: {{data.theme.w6.widget_button_h||'30'}}px;
line-height: {{data.theme.w6.widget_button_h||'30'}}px;
border-radius: {{data.theme.w6.widget_button_br||'8'}}px;
box-shadow:{{data.theme.w6.widget_button_bor||'2'}}px {{data.theme.w6.widget_button_bor||'2'}}px 0 0 {{data.theme.w6.widget_button_borc||'#CCAE0A'}};
}
#wpmchimpaw .widget_button:hover{
color: {{data.theme.w6.widget_button_fch}};
background-color: {{data.theme.w6.widget_button_bch}};
}

#wpmchimpaw .widget_button+div{
position: absolute;
top: 0;
right: 0;
}
.widget_spinner {
top: 0;
right: 0;
margin: 0px 5px;
-webkit-transform: scale(0.5);
-ms-transform: scale(0.5);
transform: scale(0.5);
}

.widget_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}

#wpmchimpaw .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
}
#wpmchimpaw .wpmchimpa-social::before{
content:"{{data.theme.w6.widget_soc_head||'Subscribe with'}}";
line-height: 35px;
display: block;
float:left;
width: calc(50% - 5px);
text-align: right;
padding-right: 5px;
border-right: 1px #fff solid;
color: {{data.theme.w6.widget_soc_fc||'#fff'}};
font-size: {{data.theme.w6.widget_soc_fs||'13'}}px;
font-weight: {{data.theme.w6.widget_soc_fw}};
font-family: {{(data.theme.w6.widget_soc_f | livepf)}};
font-style: {{data.theme.w6.widget_soc_fst}};
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc{
width:25px;
height: 25px;
border-radius: 8px;
float: left;
margin-left: 5px;
margin-top: 5px;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:25px;
height: 25px;
background: no-repeat center;
}

#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',17,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',17,'#fff')}}
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpaw .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',17,'#fff')}}
}

#wpmchimpaw .wpmchimpa-tag{
text-align: center;
display: {{data.theme.w6.widget_tag_en? 'block':'none'}};
}
#wpmchimpaw .wpmchimpa-tag,
#wpmchimpaw .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.w6.widget_tag_fc||'#0D65A1'}};
font-size: {{data.theme.w6.widget_tag_fs||'10'}}px;
font-weight: {{data.theme.w6.widget_tag_fw}};
font-family:Arial;
font-family: {{data.theme.w6.widget_tag_f | livepf}};
font-style: {{data.theme.w6.widget_tag_fst}};
}
#wpmchimpaw .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.w6.widget_tag_fs||10,data.theme.w6.widget_tag_fc||'#0D65A1')}};
margin: 5px;
top: 1px;
position: relative;
}

#wpmchimpaw.woleft .wpmchimpa-leftpane,
#wpmchimpaw.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpaw" ng-class="{'woleft':data.theme.w6.widget_disimg,'wosoc':data.theme.w6.widget_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:-15px">7</div>
        <div class="wpmchimpa-leftpane"></div>
        <div class="wpmchimpaw">
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.w6.widget_heading}}</h3>
            <div class="widget_msg"><p ng-bind-html="data.theme.w6.widget_msg | safe"></p></div>
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
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
              <div class="widget_button">{{data.theme.w6.widget_button}}</div>
              <div>
                <div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;top:25px">5</div>
                <div class="widget_spinner" ng-bind-html="getSpin(data.theme.w6.widget_spinner_t||'3','wpmchimpaw',data.theme.w6.widget_spinner_c||'#000')"></div>
              </div>
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
        <div class="wpmchimpa-tag" ng-bind-html="data.theme.w6.widget_tag||'Secure and Spam free...' | safe"></div></div>

          </div>
  </div>
</div>
