<style type="text/css">
.wpmchimpa-overlay-bg {
background: rgba(0,0,0,{{data.theme.l6.lite_bg_op/100 ||'0.4'}});
height: 778px;
width: 1024px;
}

.wpmchimpa-overlay-bg #wpmchimpa-main {
width: 450px;
background: {{data.theme.l6.lite_bg_c || '#4097D3'}};
display: inline-block;
position: relative;
left: 50%;
margin: 60px auto;
-webkit-transform: translatex(-50% );
-moz-transform: translatex(-50% );
-ms-transform: translatex(-50% );
-o-transform: translatex(-50% );
transform: translatex(-50% );
}
#wpmchimpa-main .wpmchimpa-leftpane{
padding-bottom: 56.25%;
width: 100%;
background-image: url({{ data.theme.l6.lite_img1}});
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
float: left;
}
#wpmchimpa-main .wpmchimpa-leftpane:before{
content: {{ data.theme.l6.lite_vid1 ? "''":""}};
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
#wpmchimpa-main #wpmchimpa-newsletterform{
  display: inline-block;
  width: 100%;
}
#wpmchimpa-main .wpmchimpa{
margin: 20px auto 0;
width: 330px;
text-align: center;
}
#wpmchimpa .lite_heading{
margin-bottom:10px;
text-decoration: underline;
color: {{data.theme.l6.lite_heading_fc||'#FFD804'}};
font-size: {{data.theme.l6.lite_heading_fs||'20'}}px;
line-height: {{data.theme.l6.lite_heading_fs||'20'}}px;
font-weight: {{data.theme.l6.lite_heading_fw}};
font-family: {{data.theme.l6.lite_heading_f | livepf}};
font-style: {{data.theme.l6.lite_heading_fst}};
}
#wpmchimpa .lite_msg,#wpmchimpa .lite_msg *{
color: #fff;
margin-bottom: 10px;
font-size: {{data.theme.l6.lite_msg_fs||'12'}}px;
font-family: {{data.theme.l6.lite_msg_f | livepf}};
}
#wpmchimpa .wpmchimpa_form > div{
position: relative;
}
#wpmchimpa .lite_tbox{
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
color: {{data.theme.l6.lite_tbox_fc||'#fff'}};
font-size: {{data.theme.l6.lite_tbox_fs||'15'}}px;
font-weight: {{data.theme.l6.lite_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.l6.lite_tbox_f | livepf}};
font-style: {{data.theme.l6.lite_tbox_fst}};
background-color: {{data.theme.l6.lite_tbox_bgc||'#0D65A1'}};
width: {{data.theme.l6.lite_tbox_w}}px;
height: {{data.theme.l6.lite_tbox_h||'35'}}px;
border: {{data.theme.l6.lite_tbox_bor}}px solid {{data.theme.l6.lite_tbox_borc}};
}
#wpmchimpa .lite_tbox div{
top: 50%;
-webkit-transform: translatey(-50% );
-moz-transform: translatey(-50% );
-ms-transform: translatey(-50% );
-o-transform: translatey(-50% );
transform: translatey(-50% );
position: relative;
}
.lite_tbox.mailicon:before,
.lite_tbox.pericon:before{
content:'';
display: block;
width: 35px;
height: {{data.theme.l6.lite_tbox_h||'35'}}px;
position: absolute;
top: 0;
left: 0;
}
.lite_tbox.mailicon:before{
background: {{getIcon('a05',17,data.theme.l6.lite_inico_c||'#4097D3')}} no-repeat center;
}
.lite_tbox.pericon:before{
background: {{getIcon('c01',17,data.theme.l6.lite_inico_c||'#4097D3')}} no-repeat center;
}
#wpmchimpa .wpmchimpa-groups{
display: block;margin: 10px auto;
}
#wpmchimpa .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpa .lite_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
}
#wpmchimpa .lite_check .cbox{
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
border:1px solid {{data.theme.l6.lite_check_borc||'#0D65A1'}};
background-color: {{data.theme.l6.lite_check_c||'#0D65A1'}};
}
#wpmchimpa .lite_check .ctext{
color: {{data.theme.l6.lite_check_fc||'#fff'}};
font-size: {{data.theme.l6.lite_check_fs}}px;
font-weight: {{data.theme.l6.lite_check_fw}};
font-family: {{data.theme.l6.lite_check_f | livepf}};
font-style: {{data.theme.l6.lite_check_fst}};
}
#wpmchimpa .lite_check .cbox.checked:after,#wpmchimpa .lite_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.l6.lite_check_mark||'ch1',8,data.theme.l6.lite_check_ic||'#fff')}};
}
#wpmchimpa .lite_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpa .lite_button{
text-align: center;
cursor: pointer;
margin-top: 15px;
text-align: center;
width: 100%;
position: relative;
color: {{data.theme.l6.lite_button_fc||'#4097D3'}};
font-size: {{data.theme.l6.lite_button_fs || "17"}}px;
font-weight: {{data.theme.l6.lite_button_fw}};
font-family: {{data.theme.l6.lite_button_f | livepf}};
font-style: {{data.theme.l6.lite_button_fst}};
background-color:{{data.theme.l6.lite_button_bc||'#FFD804'}};
width: {{data.theme.l6.lite_button_w}}px;
height: {{data.theme.l6.lite_button_h||'35'}}px;
line-height: {{data.theme.l6.lite_button_h||'35'}}px;
border-radius: {{data.theme.l6.lite_button_br||'8'}}px;
box-shadow:{{data.theme.l6.lite_button_bor||'2'}}px {{data.theme.l6.lite_button_bor||'2'}}px 0 0 {{data.theme.l6.lite_button_borc||'#CCAE0A'}};
}
#wpmchimpa .lite_button:hover{
color: {{data.theme.l6.lite_button_fch}};
background-color: {{data.theme.l6.lite_button_bch}};
}

#wpmchimpa .lite_button+div{
position: absolute;
top: 0;
right: 0;
}
#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 0;
right: 0;
width: 26px;
margin:-13px;
text-align: center;
background: #FFF;
cursor: pointer;
border-radius: 50%;
box-shadow: 2px 2px 6px 0 rgba(0,0,0,0.3);
background-color: {{data.theme.l6.lite_close_col}};
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 26px;
line-height: 22px;
font-weight: 100;
color: #000;
opacity: 0.9;
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}

.lite_spinner {
top: 0;
right: 0;
margin: 3px 5px;
-webkit-transform: scale(0.6);
-ms-transform: scale(0.6);
transform: scale(0.6);
}

.lite_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
}
#wpmchimpa-main .wpmchimpa-social::before{
content:"{{data.theme.l6.lite_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
width: calc(50% - 20px);
text-align: right;
padding: 0 10px;
margin-right: 10px;
border-right: 1px #fff solid;
color: {{data.theme.l6.lite_soc_fc||'#fff'}};
font-size: {{data.theme.l6.lite_soc_fs||'13'}}px;
font-weight: {{data.theme.l6.lite_soc_fw}};
font-family: {{(data.theme.l6.lite_soc_f | livepf)}};
font-style: {{data.theme.l6.lite_soc_fst}};
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
width:36px;
height: 36px;
border-radius: 8px;
float: left;
margin-left: 5px;
margin-top: 5px;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 36px;
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',20,'#fff')}}
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',20,'#fff')}}
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',20,'#fff')}}
}

#wpmchimpa .wpmchimpa-tag{
text-align: center;
display: {{data.theme.l6.lite_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.l6.lite_tag_fc||'#0D65A1'}};
font-size: {{data.theme.l6.lite_tag_fs||'10'}}px;
font-weight: {{data.theme.l6.lite_tag_fw}};
font-family:Arial;
font-family: {{data.theme.l6.lite_tag_f | livepf}};
font-style: {{data.theme.l6.lite_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.l6.lite_tag_fs||10,data.theme.l6.lite_tag_fc||'#0D65A1')}};
margin: 5px;
top: 1px;
position: relative;
}

#wpmchimpa-main.woleft .wpmchimpa-leftpane,
#wpmchimpa-main.wosoc .wpmchimpa-social {
display: none;
}
</style>

<div class="wpmchimpa-overlay-bg wpmchimpa-wrapper" id="lightbox1">
	<div id="wpmchimpa-main" ng-class="{'woleft':data.theme.l6.lite_disimg,'wosoc':data.theme.l6.lite_dissoc}">
		<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:15px;top:0">7</div>
		<div class="wpmchimpa-leftpane"></div>
		<div id="wpmchimpa-newsletterform">
			<div class="wpmchimpa" id="wpmchimpa">
				<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
					<div class="lite_heading">{{data.theme.l6.lite_heading}}</div>
						<div class="lite_msg"><p ng-bind-html="data.theme.l6.lite_msg | safe"></p></div>
				</div>
				<div class="wpmchimpa-social">
					<div class="wpmchimpa-soc wpmchimpa-fb"></div>
					<div class="wpmchimpa-soc wpmchimpa-gp"></div>
					<div class="wpmchimpa-soc wpmchimpa-ms"></div>
				</div>
		<div class="wpmchimpa_form">
			<div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
				<div class="lite_tbox pericon"><div class="in-name">Name</div></div>
					<div class="lite_tbox mailicon"><div class="in-mail">Email address</div></div>
			</div>
			<div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
				<div class="lite_button">{{data.theme.l6.lite_button}}</div>
				<div>
					<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;top: 25px;">5</div>
					<div class="lite_spinner" ng-bind-html="getSpin(data.theme.l6.lite_spinner_t||'5','wpmchimpa-wrapper',data.theme.l6.lite_spinner_c||'#000')"></div>
				</div>
			</div>
			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings">3</div>
				<div class="wpmchimpa-groups">
					<div class="lite_check_c"></div>
					<div class="wpmchimpa-item">
					<div class="lite_check">
					<div class="cbox"></div>
					<div class="ctext">group1</div>
					</div>
					</div>
					<div class="wpmchimpa-item">
					<div class="lite_check">
					<div class="cbox checked"></div>
					<div class="ctext">group2</div>
					</div>
					</div>
				</div>
			</div>
			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
				<div class="wpmchimpa-tag" ng-bind-html="data.theme.l6.lite_tag||'Secure and Spam free...' | safe"></div></div>

				</div>
			</div>
			</div>
		<div class="wpmchimpa-close-button"></div>
	</div>
</div>