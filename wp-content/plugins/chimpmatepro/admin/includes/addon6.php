<style type="text/css">

#wpmchimpab {
text-align: center;
min-height: 100px;
display: inline-block;
border-width: 1px 0;
padding: 0px;
padding-bottom: 10px;
width: 495px;
left: 50px;
top: 45px;
position: relative;
background: {{data.theme.a6.addon_bg_c||'#4097D3'}};
border: {{data.theme.a6.addon_bor_w||0}}px solid {{data.theme.a6.addon_bor_c||'#000'}};
}
#wpmchimpab .wpmchimpa-leftpane{
padding-bottom: 56.25%;
width: 100%;
background-image: url({{ data.theme.a6.addon_img1}});
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
float: left;
}
#wpmchimpab .wpmchimpa-leftpane:before{
content: {{ data.theme.a6.addon_vid1 ? "''":""}};
position:absolute;
top: 0;
left: 0;
background-size: cover;
background-repeat: no-repeat;
background-position: center; 
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhcGFfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9Ii04MCAyNC45IDQ1MCAyNTMuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAtODAgMjQuOSA0NTAgMjUzLjE7IiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0ic3QwIj48c3R5bGUgdHlwZT0idGV4dC9jc3MiPi5zdDB7YmFja2dyb3VuZDojZmZmO30uc3Qxe2ZpbGw6I0NDMTgxRTt9PC9zdHlsZT48Zz48cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTk4LDExOC44Yy0xLjUtNi41LTYuOC0xMS4zLTEzLjMtMTJjLTE1LjItMS43LTMwLjYtMS43LTQ1LjktMS43Yy0xNS4zLDAtMzAuNywwLTQ1LjksMS43Yy02LjQsMC43LTExLjcsNS41LTEzLjIsMTJjLTIuMSw5LjMtMi4yLDE5LjQtMi4yLDI5czAsMTkuNywyLjEsMjljMS41LDYuNSw2LjgsMTEuMywxMy4yLDEyYzE1LjIsMS43LDMwLjYsMS43LDQ1LjksMS43YzE1LjMsMCwzMC43LDAsNDUuOS0xLjdjNi40LTAuNywxMS44LTUuNSwxMy4zLTEyYzIuMS05LjMsMi4xLTE5LjQsMi4xLTI5QzIwMC4xLDEzOC4yLDIwMC4xLDEyOC4xLDE5OCwxMTguOHogTTEyMi45LDE2Ni44YzAtMTMuNiwwLTI3LDAtNDAuNWMxMyw2LjgsMjUuOSwxMy41LDM5LDIwLjNDMTQ4LjksMTUzLjQsMTM2LDE2MC4xLDEyMi45LDE2Ni44eiIvPjwvZz48cGF0aCBjbGFzcz0ic3QwIiBkPSJ6Ii8+PC9zdmc+);
width: 100%;
padding-bottom: 56.25%;
}
#wpmchimpab .wpmchimpa{
width: 330px;
margin: 20px auto 0;
display: inline-block;
}
#wpmchimpab .addon_heading{
margin: 0;
margin-bottom:10px;
text-decoration: underline;
color: {{data.theme.a6.addon_heading_fc||'#FFD804'}};
font-size: {{data.theme.a6.addon_heading_fs||'20'}}px;
line-height: {{data.theme.a6.addon_heading_fs||'20'}}px;
font-weight: {{data.theme.a6.addon_heading_fw}};
font-family: {{data.theme.a6.addon_heading_f | livepf}};
font-style: {{data.theme.a6.addon_heading_fst}};
}
#wpmchimpab .addon_msg, #wpmchimpab .addon_msg *{
color: #fff;
margin-bottom: 10px;
font-size: {{data.theme.a6.addon_msg_fs||'12'}}px;
font-family: {{data.theme.a6.addon_msg_f | livepf}};
}
#wpmchimpab .addon_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
outline:0;
display: block;
position: relative;
padding-left: 40px;
border-radius: 8px;
font-size:15px;
box-shadow: inset -4px 5px 8px 0px rgba(0, 0, 0, 0.31);
color: {{data.theme.a6.addon_tbox_fc||'#fff'}};
font-size: {{data.theme.a6.addon_tbox_fs||'15'}}px;
font-weight: {{data.theme.a6.addon_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.a6.addon_tbox_f | livepf}};
font-style: {{data.theme.a6.addon_tbox_fst}};
background-color: {{data.theme.a6.addon_tbox_bgc||'#0D65A1'}};
width: {{data.theme.a6.addon_tbox_w}}px;
height: {{data.theme.a6.addon_tbox_h||'35'}}px;
border: {{data.theme.a6.addon_tbox_bor}}px solid {{data.theme.a6.addon_tbox_borc}};
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
height: {{data.theme.a6.addon_tbox_h||'35'}}px;
position: absolute;
top: 0;
left: 0;
}
.addon_tbox.mailicon:before{
background: {{getIcon('a05',17,data.theme.a6.addon_inico_c||'#4097D3')}} no-repeat center;
}
.addon_tbox.pericon:before{
background: {{getIcon('c01',17,data.theme.a6.addon_inico_c||'#4097D3')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-groups{
display: block;margin: 10px auto;
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
min-width: 70px;
}
#wpmchimpab .addon_check .cbox{
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
border:1px solid {{data.theme.a6.addon_check_borc||'#0D65A1'}};
background-color: {{data.theme.a6.addon_check_c||'#0D65A1'}};
}
#wpmchimpab .addon_check .ctext{
color: {{data.theme.a6.addon_check_fc||'#fff'}};
font-size: {{data.theme.a6.addon_check_fs}}px;
font-weight: {{data.theme.a6.addon_check_fw}};
font-family: {{data.theme.a6.addon_check_f | livepf}};
font-style: {{data.theme.a6.addon_check_fst}};
}
#wpmchimpab .addon_check .cbox.checked:after,#wpmchimpab .addon_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.a6.addon_check_mark||'ch1',8,data.theme.a6.addon_check_ic||'#fff')}};
}
#wpmchimpab .addon_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpab .wpmchimpa > div{
  position: relative;
}
#wpmchimpab .addon_button{
text-align: center;
cursor: pointer;
margin-top: 15px;
text-align: center;
width: 100%;
position: relative;
color: {{data.theme.a6.addon_button_fc||'#4097D3'}};
font-size: {{data.theme.a6.addon_button_fs || "17"}}px;
font-weight: {{data.theme.a6.addon_button_fw}};
font-family: {{data.theme.a6.addon_button_f | livepf}};
font-style: {{data.theme.a6.addon_button_fst}};
background-color:{{data.theme.a6.addon_button_bc||'#FFD804'}};
width: {{data.theme.a6.addon_button_w}}px;
height: {{data.theme.a6.addon_button_h||'35'}}px;
line-height: {{data.theme.a6.addon_button_h||'35'}}px;
border-radius: {{data.theme.a6.addon_button_br||'8'}}px;
box-shadow:{{data.theme.a6.addon_button_bor||'2'}}px {{data.theme.a6.addon_button_bor||'2'}}px 0 0 {{data.theme.a6.addon_button_borc||'#CCAE0A'}};
}
#wpmchimpab .addon_button:hover{
color: {{data.theme.a6.addon_button_fch}};
background-color: {{data.theme.a6.addon_button_bch}};
}

#wpmchimpab .addon_button+div{
position: absolute;
top: 0;
right: 0;
}
.addon_spinner {
top: 0;
right: 0;
margin: 3px 5px;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
}

#wpmchimpab .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
}
#wpmchimpab .wpmchimpa-social::before{
content:"{{data.theme.a6.addon_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
width: calc(50% - 20px);
text-align: right;
padding: 0 10px;
margin-right: 10px;
border-right: 1px #fff solid;
color: {{data.theme.a6.addon_soc_fc||'#fff'}};
font-size: {{data.theme.a6.addon_soc_fs||'13'}}px;
font-weight: {{data.theme.a6.addon_soc_fw}};
font-family: {{(data.theme.a6.addon_soc_f | livepf)}};
font-style: {{data.theme.a6.addon_soc_fst}};
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
width:36px;
height: 36px;
border-radius: 8px;
float: left;
margin-left: 5px;
margin-top: 5px;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 36px;
background: no-repeat center;
}

#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',20,'#fff')}}
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',20,'#fff')}}
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',20,'#fff')}}
}

#wpmchimpa .wpmchimpa-tag{
text-align: center;
display: {{data.theme.a6.addon_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.a6.addon_tag_fc||'#0D65A1'}};
font-size: {{data.theme.a6.addon_tag_fs||'10'}}px;
font-weight: {{data.theme.a6.addon_tag_fw}};
font-family:Arial;
font-family: {{data.theme.a6.addon_tag_f | livepf}};
font-style: {{data.theme.a6.addon_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.a6.addon_tag_fs||10,data.theme.a6.addon_tag_fc||'#0D65A1')}};
margin: 5px;
top: 1px;
position: relative;
}

#wpmchimpab.woleft .wpmchimpa-leftpane,
#wpmchimpab.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div id="wpmchimpab" class="wpmchimpab" ng-class="{'woleft':data.theme.a6.addon_disimg,'wosoc':data.theme.a6.addon_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="10" data-lhint="Go to Additional Theme Options" style="margin:-30px">7</div>
        <div class="wpmchimpa-leftpane"></div>
        <div class="wpmchimpa" id="wpmchimpa"> 
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Custom Message Settings">1</div>
            <div class="addon_heading">{{data.theme.a6.addon_heading}}</div>
            <div class="addon_msg"><p ng-bind-html="data.theme.a6.addon_msg | safe"></p></div>
            </div>

            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>         
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Text Box Settings" style="right: -50px;">2</div>
              <div class="addon_tbox pericon"><div class="in-name">Name</div></div>
              <div class="addon_tbox mailicon"><div class="in-mail">Email address</div></div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="6" data-lhint="Go to Button Settings" style="right: -50px;">4</div>
              <div class="addon_button">{{data.theme.a6.addon_button}}</div>
              <div>
                <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Spinner Settings" style="right: -50px;top:25px">5</div>
                <div class="addon_spinner" ng-bind-html="getSpin(data.theme.a6.addon_spinner_t||'3','wpmchimpab',data.theme.a6.addon_spinner_c||'#000')"></div>
              </div>
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
                  <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Tag Settings">6</div>
        <div class="wpmchimpa-tag" ng-bind-html="data.theme.a6.addon_tag||'Secure and Spam free...' | safe"></div></div>

          </div>           
  </div>
</div>
