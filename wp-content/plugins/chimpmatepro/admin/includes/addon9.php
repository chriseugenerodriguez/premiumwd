<style type="text/css">

#wpmchimpab {
text-align: center;
min-height: 100px;
display: inline-block;
border-width: 1px 0;
width: 495px;
left: 50px;
top: 200px;
position: relative;
background: {{data.theme.a9.addon_bg_c||'#27313B'}};
border: {{data.theme.a9.addon_bor_w||0}}px solid {{data.theme.a9.addon_bor_c||'#000'}};
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
padding: 0 60px;
}
#wpmchimpab .addon_heading{
padding-top:20px;
color: {{data.theme.a9.addon_heading_fc||'#F4233C'}};
font-size: {{data.theme.a9.addon_heading_fs||'24'}}px;
font-weight: {{data.theme.a9.addon_heading_fw}};
font-family: {{data.theme.a9.addon_heading_f | livepf}};
font-style: {{data.theme.a9.addon_heading_fst}};
}
#wpmchimpab .addon_msg, #wpmchimpab .addon_msg *{
color: #959595;
font-size: {{data.theme.a9.addon_msg_fs||'15'}}px;
font-family: {{data.theme.a9.addon_msg_f | livepf}};
}
#wpmchimpab .addon_msg{
  margin-top: 15px;
}
#wpmchimpab .wpmchimpa{
margin-top: 20px;
}
#wpmchimpab .wpmchimpa_formbox > div,
#wpmchimpab .wpmchimpa > div{
position: relative;
}
#wpmchimpab .wpmchimpa_formbox > div:first-of-type{
  width: 65%;
  float: left;
}
#wpmchimpab .wpmchimpa_formbox > div:first-of-type + div{
  width: 35%;
  float: left;
}
#wpmchimpab .wpmchimpa_formbox .addon_tbox{
border-radius: 3px 0 0 3px;
}
#wpmchimpab .addon_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
border-radius: 3px;
outline:0;
display: block;
 padding: 0 10px 0 40px;
color: {{data.theme.a9.addon_tbox_fc||'#353535'}};
font-size: {{data.theme.a9.addon_tbox_fs||'17'}}px;
font-weight: {{data.theme.a9.addon_tbox_fw}};
font-family: {{data.theme.a9.addon_tbox_f | livepf}};
font-style: {{data.theme.a9.addon_tbox_fst}};
background-color: {{data.theme.a9.addon_tbox_bgc||'#fff'}};
width: {{data.theme.a9.addon_tbox_w}}px;
height: {{data.theme.a9.addon_tbox_h||'40'}}px;
line-height: {{data.theme.a9.addon_tbox_h||'40'}}px;
border: {{data.theme.a9.addon_tbox_bor||''}}px solid {{data.theme.a9.addon_tbox_borc||'#efefef'}};
}
#wpmchimpab .addon_tbox .in-text{
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
height: {{data.theme.a9.addon_tbox_h||'40'}}px;
position: absolute;
top: 0;
left: 0;
}
.addon_tbox.mailicon:before{
background: {{getIcon('a02',15,data.theme.a9.addon_inico_c||data.theme.a9.addon_tbox_fc||'#000')}} no-repeat center;
}
.addon_tbox.pericon:before{
background: {{getIcon('c06',15,data.theme.a9.addon_inico_c||data.theme.a9.addon_tbox_fc||'#000')}} no-repeat center;
}
#wpmchimpab .wpmchimpa-groups{
display: block;
  margin:5px auto;
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
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.a9.addon_check_borc}};
background-color: {{data.theme.a9.addon_check_c||'#fff'}};
}
#wpmchimpab .addon_check .ctext{
color: {{data.theme.a9.addon_check_fc||'#fff'}};
font-size: {{data.theme.a9.addon_check_fs||'12'}}px;
font-weight: {{data.theme.a9.addon_check_fw}};
font-family: {{data.theme.a9.addon_check_f | livepf}};
font-style: {{data.theme.a9.addon_check_fst}};
}
#wpmchimpab .addon_check .cbox.checked:after,#wpmchimpab .addon_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.a9.addon_check_mark||'ch2',8,data.theme.a9.addon_check_ic||'#000')}};
}
#wpmchimpab .addon_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpab .addon_button{
width: 100%;
text-align: center;
cursor: pointer;
border-radius: 0 3px 3px 0;
color: {{data.theme.a9.addon_button_fc||'#fff'}};
font-size: {{data.theme.a9.addon_button_fs || "17"}}px;
font-weight: {{data.theme.a9.addon_button_fw}};
font-family: {{data.theme.a9.addon_button_f | livepf}};
font-style: {{data.theme.a9.addon_button_fst}};
background-color:{{data.theme.a9.addon_button_bc||'#FF1F43'}};
width: {{data.theme.a9.addon_button_w}}px;
height: {{data.theme.a9.addon_button_h||'40'}}px;
line-height: {{data.theme.a9.addon_button_h||'40'}}px;
border-radius: {{data.theme.a9.addon_button_br}}px;
border: {{data.theme.a9.addon_button_bor||'1'}}px solid {{data.theme.a9.addon_button_borc||'#FA0B38'}};
}
#wpmchimpab .addon_button:hover{
color: {{data.theme.a9.addon_button_fch}};
background-color: {{data.theme.a9.addon_button_bch||'#FA0B38'}};
}

#wpmchimpab .wpmchimpa-tag{
margin: 5px auto;
display: {{data.theme.a9.addon_tag_en? 'block':'none'}};
}
#wpmchimpab .wpmchimpa-tag,
#wpmchimpab .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.a9.addon_tag_fc||'#fff'}};
font-size: {{data.theme.a9.addon_tag_fs||'10'}}px;
font-weight: {{data.theme.a9.addon_tag_fw}};
font-family:Arial;
font-family: {{data.theme.a9.addon_tag_f | livepf}};
font-style: {{data.theme.a9.addon_tag_fst}};
}
#wpmchimpab .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.a9.addon_tag_fs||10,data.theme.a9.addon_tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpab .in-mail+div{
position: absolute;
top: 0;
right: 0;
}
.addon_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}

</style>

<div id="wpmchimpab" class="wpmchimpab">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="10" data-lhint="Go to Additional Theme Options" style="margin:-30px">7</div>
        
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Custom Message Settings">1</div>
            <div class="addon_heading">{{data.theme.a9.addon_heading}}</div>
            <div class="addon_msg"><p ng-bind-html="data.theme.a9.addon_msg | safe"></p></div>
            </div>
        <div class="wpmchimpa" id="wpmchimpa">  
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Text Box Settings" style="right: -50px;">2</div>
              <div class="addon_tbox pericon"><div class="in-text in-name">Name</div></div>
            </div>
            <div class="wpmchimpa_formbox">
              <div class="addon_tbox mailicon"><div class="in-text in-mail">Email address</div>
                <div>
                  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Spinner Settings" style="left:10px;top:25px">5</div>
                  <div class="addon_spinner" ng-bind-html="getSpin(data.theme.a9.addon_spinner_t||'8','wpmchimpab',data.theme.a9.addon_spinner_c||'#000')"></div>
                </div>
              </div>
              <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="6" data-lhint="Go to Button Settings" style="right: -50px;">4</div>
                <div class="addon_button">{{data.theme.a9.addon_button}}</div>
              </div>
              <div style="clear:both;"></div>
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
          <div class="wpmchimpa-tag" ng-bind-html="data.theme.a9.addon_tag||'Secure and Spam free...' | safe"></div></div>
          </div>
  </div>
</div>
