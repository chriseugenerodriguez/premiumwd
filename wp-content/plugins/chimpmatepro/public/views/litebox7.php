<?php 
$theme = $wpmchimpa['theme']['l7'];
$theme['lite_msg'] = htmlspecialchars_decode($theme['lite_msg']);
$this->social=true;
if(!isset($theme['lite_exhead']) && $theme['lite_exhopt']=='0' && isset($theme['lite_wloc']) && isset($theme['lite_locapi']))
  $weatdata = $this->get_weather($theme['lite_wloc'],$theme['lite_locapi']);
$this->extrascript(1);
$this->extrascript(2);
?><style type="text/css">
@import url(//fonts.googleapis.com/css?family=Roboto:100);
.wpmchimpa-overlay-bg.wpmchimpselector {
display: none;
top: 0;
left: 0;
height:100%;
width: 100%;
cursor: pointer;
z-index: 999999;
background: #000;
background: rgba(0,0,0,0.40);
<?php  if(isset($theme["lite_bg_op"])){
      echo 'background:rgba(0,0,0,'.($theme["lite_bg_op"]/100).');';
    }?>
cursor: default;
position: fixed!important;
}
.wpmchimpa-overlay-bg #wpmchimpa-main *{
 transition: all 0.5s ease;
}
.wpmchimpa-overlay-bg .wpmchimpa-mainc,
.wpmchimpa-overlay-bg .wpmchimpa-maina{
-webkit-transform: translate(0,0);
    height:100%;}
.wpmchimpa-overlay-bg #wpmchimpa-main {
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
min-width: 340px;
background: #f7f7f7;
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
<?php  if(isset($theme["lite_bg_c"])){
    echo 'background-color:'.$theme["lite_bg_c"].';';
}?>

<?php if($scroll){?>
/*long form*/
height: calc(100% - 40px);
<?php } ?>
}
#wpmchimpa-main .wpmchimpa-leftpane{
width:340px;
position: relative;
}
#wpmchimpa-main .wpchimpa-banner{
height: 230px;
display: block;
position: relative;
background: #333;
background-image:<?php if(isset($theme['lite_img1']))echo 'url('.$theme['lite_img1'].');';else{?>
url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg==);<?php } ?>
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
#wpmchimpa-main .wpmchimpa-leftpane:after{
	content: '';
	display: block;
	width: 55px;
	height: 55px;
	position: absolute;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: <?php echo $this->getIcon('b04',25,(isset($theme["lite_hi_c"]))?$theme["lite_hi_c"]:'#fff');?> no-repeat center;
	background-color: <?=(isset($theme["lite_hi_bc"])?$theme["lite_hi_bc"]:'#61c0b5')?>;
	top:202px;
	right: 20px;
	z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
#wpmchimpa-main .wpmchimpa-head{
display: block;
position: absolute;
width: 100%;
bottom: 0;
}
#wpmchimpa-main .wpmchimpa-head:before{
content: '';
background-image:<?php if(isset($theme['lite_img1']))echo 'url('.$theme['lite_img1'].');';else{?>
url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg==);<?php } ?>
background-position: bottom;
-webkit-filter:blur(<?=(isset($theme['lite_hblur'])?$theme['lite_hblur']:'15')?>px);
filter:blur(<?=(isset($theme['lite_hblur'])?$theme['lite_hblur']:'15')?>px);
position: absolute;
height: 100%;
width: 100%;
overflow: hidden;
}
#wpmchimpa-main .wpmchimpa-headc{
  padding: 5px 100px 5px 20px;
  position: relative;
}
#wpmchimpa-main h3{
width: 100%;
color: #fff;
font-size: 30px;
line-height: 30px;
<?php 
    if(isset($theme["lite_heading_f"])){
      echo 'font-family:'.$theme["lite_heading_f"].';';
    }
    if(isset($theme["lite_heading_fs"])){
        echo 'font-size:'.$theme["lite_heading_fs"].'px;';
        echo 'line-height:'.$theme["lite_heading_fs"].'px;';
    }
    if(isset($theme["lite_heading_fw"])){
        echo 'font-weight:'.$theme["lite_heading_fw"].';';
    }
    if(isset($theme["lite_heading_fst"])){
        echo 'font-style:'.$theme["lite_heading_fst"].';';
    }
    if(isset($theme["lite_heading_fc"])){
        echo 'color:'.$theme["lite_heading_fc"].';';
    }
?>
}
#wpmchimpa-main .wpmchimpa_para,#wpmchimpa-main .wpmchimpa_para * {
font-size: 15px;
color: #fff;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["lite_msg_f"])){
  echo 'font-family:'.$theme["lite_msg_f"].';';
}if(isset($theme["lite_msg_fs"])){
    echo 'font-size:'.$theme["lite_msg_fs"].'px;';
}?>
}
#wpmchimpa-main .wpmchimpa-databox{
width: 100%;
height:100px;
display: block;
background: <?=(isset($theme['lite_exhbc'])?$theme['lite_exhbc']:'#ededed')?>;
position: relative;
}
#wpmchimpa-main .wpmchimpa-databox *{
	  color: <?=(isset($theme['lite_exhc1'])?$theme['lite_exhc1']:'#ababab')?>;
	font-family: <?=(isset($theme['lite_exhf'])?$theme['lite_exhf']:'')?>;
	font-weight: <?=(isset($theme['lite_exhfw'])?$theme['lite_exhfw']:'')?>;
	font-style: <?=(isset($theme['lite_exhfst'])?$theme['lite_exhfst']:'')?>;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcdate{
padding: 15px 0 0 20px;
display: inline-block;
width: 160px;
position: relative;
float: left;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 25px;
line-height: 35px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcdm{
font-size: 16px;
line-height: 16px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcdd{
font-size: 65px;
line-height: 65px;
color: <?=(isset($theme['lite_exhc2'])?$theme['lite_exhc2']:'#f95753')?>;
display: inline-block;
float: left;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcweat{
padding: 15px 20px 10px 5px;
display: <?=(isset($theme['lite_wloc'])?'inline-block':'none')?>;
width: 180px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwl{
font-size: 16px;
line-height: 16px;
display: inline-block;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: <?php echo $this->getIcon('loc1',10,(isset($theme['lite_exhc1'])?$theme['lite_exhc1']:'#ababab'));?> no-repeat center;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwc{
font-size: 15px;
line-height: 19px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin-left: 10px;
float: left;
background: <?php echo $this->getIcon('w'.substr($weatdata->weather[0]->icon,0,2),50);?> no-repeat center;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 10px 10px 0;
font-size: 35px;
line-height: 35px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwdinac{display: none;}
#wpmchimpa-main .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 14px;
line-height: 14px;
margin: 10px 0;
}
#wpmchimpa-main .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcl2owm{
font-size: 8px;
display: <?=(isset($theme['lite_l2owm'])?'block':'none')?>;
  line-height: 8px;
text-decoration: none;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}
#wpmchimpa-main #wpmchimpa-newsletterform{
width: 340px;
display: inline-block;

<?php if($scroll){?>
/*long form*/
max-height: calc(100% - 330px);
overflow-y: auto;
<?php } ?>
}
#wpmchimpa-main .wpmchimpa{
padding: 20px;
text-align: center;
}

#wpmchimpa-main form{}


#wpmchimpa-main  .wpmchimpa-field{
position: relative;
width:calc(100% - 40px);
margin: 0 0 12px 40px;
text-align: left;
<?php 
  if(isset($theme["lite_tbox_w"])){
      echo 'width:'.$theme["lite_tbox_w"].'px;';
  }
?>
}
#wpmchimpa-main .inputicon{
display: none;
}
#wpmchimpa-main .wpmc-ficon .inputicon {
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
left: -40px;
pointer-events: none;
<?php 
if(isset($theme["lite_tbox_h"])){
  echo 'width:'.$theme["lite_tbox_h"].'px;';
  echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}

<?php
$col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#ababab');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a07';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c05';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '#wpmchimpa-main .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
#wpmchimpa-main .wpmchimpa-field select,
#wpmchimpa-main input[type="text"]{
  font-size:18px;
  padding: 0 10px;
  display:inline-block;
  width:100%;
  height: 40px;
  border:none;
  border-bottom:1px solid #757575;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: #f7f7f7;
  <?php 
    if(isset($theme["lite_tbox_f"])){
      echo 'font-family:'.$theme["lite_tbox_f"].';';
    }
    if(isset($theme["lite_tbox_fs"])){
        echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
    }
    if(isset($theme["lite_tbox_fw"])){
        echo 'font-weight:'.$theme["lite_tbox_fw"].';';
    }
    if(isset($theme["lite_tbox_fst"])){
        echo 'font-style:'.$theme["lite_tbox_fst"].';';
    }
    if(isset($theme["lite_tbox_bgc"])){
        echo 'background:'.$theme["lite_tbox_bgc"].';';
    }
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
    if(isset($theme["lite_tbox_h"])){
        echo 'height:'.$theme["lite_tbox_h"].'px;';
    }
    if(isset($theme["lite_tbox_bor"]) && isset($theme["lite_tbox_borc"])){
        echo ' border-bottom:'.$theme["lite_tbox_bor"].'px solid '.$theme["lite_tbox_borc"].';';
    }
  ?>
}

#wpmchimpa-main .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 40px;
height: 40px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["lite_tbox_h"])){
  echo 'width:'.$theme["lite_tbox_h"].'px;';
  echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa-main .wpmchimpa-field select:focus{
  border-color:#61c0b5;
    <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'border-color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}
#wpmchimpa-main input[type="text"] ~ .inputlabel{
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all;
  color:#999;
  font-size:18px;
  font-weight:normal;
  cursor:default;
  position:absolute;
  pointer-events: none;
top: 0;
left: 0;
right: 0;
width: 100%;
line-height: 40px;
padding: 0 10px;
white-space: nowrap;
  <?php
  if(isset($theme["lite_tbox_f"])){
    echo 'font-family:'.$theme["lite_tbox_f"].';';
  }
  if(isset($theme["lite_tbox_fs"])){
      echo 'font-size:'.$theme["lite_tbox_fs"].'px;';
  }
  if(isset($theme["lite_tbox_fw"])){
      echo 'font-weight:'.$theme["lite_tbox_fw"].';';
  }
  if(isset($theme["lite_tbox_fst"])){
      echo 'font-style:'.$theme["lite_tbox_fst"].';';
  }
  ?>
}

#wpmchimpa-main input:focus ~ .inputlabel, #wpmchimpa-main input:valid ~ .inputlabel {
  top:-7px;
  font-size:12px;
  color:#61c0b5;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}

#wpmchimpa-main .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;
<?php 
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
?>
}
#wpmchimpa-main .wpmchimpa-field .bar:before, #wpmchimpa-main .wpmchimpa-field .bar:after   {
  content:'';
  height:1px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#61c0b5; 
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all; 
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}
#wpmchimpa-main .wpmchimpa-field .bar:before {
  left:50%;
}
#wpmchimpa-main .wpmchimpa-field .bar:after {
  right:50%; 
}
#wpmchimpa-main .wpmchimpa-field input:focus ~ .bar:before, #wpmchimpa-main .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
#wpmchimpa-main .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:25%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
?>
}
#wpmchimpa-main .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterlb 0.3s ease;
  animation:inputHighlighterlb 0.3s ease;
}
@-webkit-keyframes inputHighlighterlb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterlb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

#wpmchimpa-main select.wpmcerror,
#wpmchimpa-main input[type="text"].wpmcerror{
  border-color: red;
}
#wpmchimpa-main .wpmchimpa-check *,
#wpmchimpa-main .wpmchimpa-radio *{
<?php
if(isset($theme["lite_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["lite_check_f"]).';';
}
if(isset($theme["lite_check_fs"])){
    echo 'font-size:'.$theme["lite_check_fs"].'px;';
}
if(isset($theme["lite_check_fw"])){
    echo 'font-weight:'.$theme["lite_check_fw"].';';
}
if(isset($theme["lite_check_fst"])){
    echo 'font-style:'.$theme["lite_check_fst"].';';
}
if(isset($theme["lite_check_fc"])){
    echo 'color:'.$theme["lite_check_fc"].';';
}
?>
}

#wpmchimpa-main .wpmchimpa-item{
  <?php 
    if(isset($theme["lite_check_pline"])){
      if($theme["lite_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["lite_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
#wpmchimpa-main .wpmchimpa-item input {
  display: none;
}
#wpmchimpa-main .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-right: 10px;
  line-height: 20px;
-webkit-backface-visibility:hidden;
}

#wpmchimpa-main .wpmchimpa-item span:before,
#wpmchimpa-main .wpmchimpa-item span:after {
content: '';
display: inline-block;
width: 12px;
height: 12px;
left: 0;
top: 4px;
position: absolute;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
-webkit-transform-origin: left;
transform-origin: left;
}
.wpmchimpa-item span:before {
border:1px solid #61c0b5;
border-radius: 1px;
opacity: 1;
  <?php
    if(isset($theme["lite_check_borc"])){
        echo 'border:1px solid '.$theme["lite_check_borc"].';';
 }   if(isset($theme["lite_check_c"])){
        echo 'background-color:'.$theme["lite_check_c"].';';
 }?>
}
#wpmchimpa-main input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
#wpmchimpa-main input[type='checkbox'] + span:after {
-webkit-transform:rotate(43deg);
transform:rotate(43deg);
opacity: 0;
width: 20px;
height: 15px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["lite_check_mark"])){$tfi=$theme["lite_check_mark"];}
        $tfc='#61c0b5';
        if(isset($theme["lite_check_ic"])){$tfc=$theme["lite_check_ic"];}
        echo $this->getIcon($tfi,20,$tfc);?>;
}
#wpmchimpa-main input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-item input[type='radio'] + span:before ,
#wpmchimpa-main .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
#wpmchimpa-main .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
#wpmchimpa-main .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}

#wpmchimpa-main .wpmcinfierr{
  display: block;
  height: 14px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -12px;
  font-size: 10px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["lite_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["lite_status_f"]).';';
    }
    if(isset($theme["lite_status_fw"])){
        echo 'font-weight:'.$theme["lite_status_fw"].';';
    }
    if(isset($theme["lite_status_fst"])){
        echo 'font-style:'.$theme["lite_status_fst"].';';
    }
  ?>
}


#wpmchimpa-main .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
color: #fff;
font-size: 20px;
border: 1px solid #59c2b6;
background-color: #61c0b5;
height: 45px;
line-height: 45px;
padding: 0 20px;
text-align: center;
cursor: pointer;
position: relative;
overflow: hidden;
margin-left: 40px;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
 <?php
if(isset($theme["lite_button_f"])){
  echo 'font-family:'.$theme["lite_button_f"].';';
}
if(isset($theme["lite_button_fs"])){
    echo 'font-size:'.$theme["lite_button_fs"].'px;';
}
if(isset($theme["lite_button_fw"])){
    echo 'font-weight:'.$theme["lite_button_fw"].';';
}
if(isset($theme["lite_button_fst"])){
    echo 'font-style:'.$theme["lite_button_fst"].';';
}
if(isset($theme["lite_button_fc"])){
    echo 'color:'.$theme["lite_button_fc"].';';
}
if(isset($theme["lite_button_w"])){
    echo 'width:'.$theme["lite_button_w"].'px;';
}
if(isset($theme["lite_button_h"])){
    echo 'height:'.$theme["lite_button_h"].'px;';
    echo 'line-height:'.$theme["lite_button_h"].'px;';
}
if(isset($theme["lite_button_bc"])){
    echo 'background-color:'.$theme["lite_button_bc"].';';
}
if(isset($theme["lite_button_br"])){
    echo '-webkit-border-radius:'.$theme["lite_button_br"].'px;';
    echo '-moz-border-radius:'.$theme["lite_button_br"].'px;';
    echo 'border-radius:'.$theme["lite_button_br"].'px;';
}
if(isset($theme["lite_button_bor"]) && isset($theme["lite_button_borc"])){
    echo ' border:'.$theme["lite_button_bor"].'px solid '.$theme["lite_button_borc"].';';
}
?>
}

#wpmchimpa-main .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['lite_button'])) echo $theme['lite_button'];else echo 'Subscribe';?>';
}
#wpmchimpa-main .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["lite_button_fch"])){
    echo 'color:'.$theme["lite_button_fch"].';';
}    
if(isset($theme["lite_button_bch"])){
    echo 'background-color:'.$theme["lite_button_bch"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-subsc{position: relative;}
#wpmchimpa-main .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0px;
pointer-events: none;
  <?php 
  if(isset($theme["lite_button_h"])){
      echo 'width:'.$theme["lite_button_h"].'px;';
      echo 'height:'.$theme["lite_button_h"].'px;';
  }
  if($theme["lite_button_i"] != 'inone' && $theme["lite_button_i"] != 'idef'){
    $col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#ababab');
     echo 'background: '.$this->getIcon($theme["lite_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
#wpmchimpa-main .wpmchimpa-signalc {
height: 40px;
  margin-top: 10px;
  text-align: center;
}
#wpmchimpa-main .wpmchimpa-signal {
display: none;
}
.wpmchimpa-overlay-bg.signalshow #wpmchimpa-main .wpmchimpa-signal {
  display: inline-block;
}
#wpmchimpa-main .wpmchimpa-feedback{
text-align: center;
position: relative;
font-size: 12px;
height: 12px;
margin-top: -30px;
<?php
if(isset($theme["lite_status_f"])){
  echo 'font-family:'.$theme["lite_status_f"].';';
}
if(isset($theme["lite_status_fs"])){
  echo 'font-size:'.$theme["lite_status_fs"].'px;';
}
if(isset($theme["lite_status_fw"])){
  echo 'font-weight:'.$theme["lite_status_fw"].';';
}
if(isset($theme["lite_status_fst"])){
  echo 'font-style:'.$theme["lite_status_fst"].';';
}
if(isset($theme["lite_status_fc"])){
  echo 'color:'.$theme["lite_status_fc"].';';
}
?>
}
#wpmchimpa-main .wpmchimpa-tag{
margin: 6px auto;
}
#wpmchimpa-main .wpmchimpa-tag,
#wpmchimpa-main .wpmchimpa-tag *{
color:#b8b8b8;
font-size: 10px;

<?php
  if(isset($theme["lite_tag_f"])){
    echo 'font-family:'.$theme["lite_tag_f"].';';
  }
  if(isset($theme["lite_tag_fs"])){
      echo 'font-size:'.$theme["lite_tag_fs"].'px;';
  }
  if(isset($theme["lite_tag_fw"])){
      echo 'font-weight:'.$theme["lite_tag_fw"].';';
  }
  if(isset($theme["lite_tag_fst"])){
      echo 'font-style:'.$theme["lite_tag_fst"].';';
  }
  if(isset($theme["lite_tag_fc"])){
      echo 'color:'.$theme["lite_tag_fc"].';';
  }
?>
}
#wpmchimpa-main .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["lite_tag_fs"])){$tfs=$theme["lite_tag_fs"];}
  $tfc='#b8b8b8';
  if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}


#wpmchimpa-main .wpmchimpa-top{
	padding: 10px;
	text-align: center;
}
#wpmchimpa-main .wpmchimpa-edit-button,
#wpmchimpa-main .wpmchimpa-del-button,
#wpmchimpa-main .wpmchimpa-close-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}

#wpmchimpa-main .wpmchimpa-edit-button:hover,
#wpmchimpa-main .wpmchimpa-del-button:hover,
#wpmchimpa-main .wpmchimpa-close-button:hover{
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-close-button{
background: <?php echo $this->getIcon('c1',15,(isset($theme["lite_close_col"]))?$theme["lite_close_col"]:'#fff');?> no-repeat center;
}
#wpmchimpa-main .wpmchimpa-edit-button{
	right: 10px;
background: <?php echo $this->getIcon('ed1',15,(isset($theme["lite_close_col"]))?$theme["lite_close_col"]:'#fff');?> no-repeat center;
}
#wpmchimpa-main .wpmchimpa-del-button{
	right: 30px;
background: <?php echo $this->getIcon('del1',15,(isset($theme["lite_close_col"]))?$theme["lite_close_col"]:'#fff');?> no-repeat center;
}
#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '<?php if(isset($theme['lite_soc_head'])) echo $theme['lite_soc_head'];else echo 'Subscribe with';?>';
font-size: 15px;
line-height: 20px;
display: block;
float:left;
color: #fff;
<?php
if(isset($theme["lite_soc_f"])){
  echo 'font-family:'.$theme["lite_soc_f"].';';
}
if(isset($theme["lite_soc_fs"])){
    echo 'font-size:'.$theme["lite_soc_fs"].'px;';
}
if(isset($theme["lite_soc_fw"])){
    echo 'font-weight:'.$theme["lite_soc_fw"].';';
}
if(isset($theme["lite_soc_fst"])){
    echo 'font-style:'.$theme["lite_soc_fst"].';';
}
if(isset($theme["lite_soc_fc"])){
    echo 'color:'.$theme["lite_soc_fc"].';';
}
?>
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid <?=(isset($theme["lite_soc_fc"])?$theme["lite_soc_fc"]:'#fff')?>;
border-radius: 50%;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',11,(isset($theme["lite_soc_fc"])?$theme["lite_soc_fc"]:'#fff'));?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',11,(isset($theme["lite_soc_fc"])?$theme["lite_soc_fc"]:'#fff'));?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',11,(isset($theme["lite_soc_fc"])?$theme["lite_soc_fc"]:'#fff'));?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc:hover{
	-webkit-transform:scale(1.1);
	-ms-transform:scale(1.1);
	transform:scale(1.1);
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
margin: 0;
  height: auto;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}

#wpmchimpa-main.woexhead .wpmchimpa-databox{
display: none;
}
#wpmchimpa-main.woexhead #wpmchimpa-newsletterform{
<?php if($scroll){?>
/*long form*/
max-height: calc(100% - 230px);
padding-top: 50px;
<?php } ?>
}
#wpmchimpa-main.wosoc .wpmchimpa-social{
	display: none;
}


#wpmchimpa-main .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

#wpmchimpa-main .ripple.show {
  -webkit-animation: ripple 1s ease-out;
  animation: ripple 1s ease-out;
}
@-webkit-keyframes ripple { to {
 -webkit-transform: scale(1.5);
 opacity: 0;
}}
@keyframes ripple { to {
  transform: scale(1.5);
 opacity: 0;
}}

@media only screen 
and (max-width : 1024px)
and (orientation : landscape){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    min-width: 680px;
    height: 330px;
  }
  #wpmchimpa-main .wpmchimpa-leftpane{
float: left;
  }
  #wpmchimpa-main.woexhead #wpmchimpa-newsletterform,
  #wpmchimpa-main #wpmchimpa-newsletterform{
    max-height: 100%;
    padding: 0;
  }
}
@media only screen 
and (max-width : 700px)
and (orientation : landscape){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
-webkit-transform:translate(-50%, -50%) scale(0.4);
    -ms-transform:translate(-50%, -50%) scale(0.4);
    transform:translate(-50%, -50%) scale(0.4);
  }
}
@media only screen 
and (max-width : 480px)
and (orientation : portrait){

  .wpmchimpa-overlay-bg #wpmchimpa-main{
<?php if($scroll){?>
/*long form*/
height: 100%;
<?php } ?>
-webkit-transform:translate(-50%, -50%) scale(0.6);
    -ms-transform:translate(-50%, -50%) scale(0.6);
    transform:translate(-50%, -50%) scale(0.6);
  }
}

<?php $this->liteanimate();?>
</style>

<div class="wpmchimpa-reset wpmchimpa-overlay-bg wpmchimpselector chimpmatecss">
<div class="wpmchimpa-maina <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
  <div class="wpmchimpa-mainc">
    <div id="wpmchimpa-main" class="<?=(isset($theme['lite_exhead'])?'woexhead':'')?> <?=(isset($theme['lite_dissoc'])?'wosoc':'')?>">
        <div class="wpmchimpa-leftpane">
        	<div class="wpchimpa-banner">
	        	<div class="wpmchimpa-top">
	        		<div class="wpmchimpa-close-button"></div>
	        		<div class="wpmchimpa-social">
		                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
		                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
		                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
		            </div>
	        		<div class="wpmchimpa-edit-button"></div>
	        		<div class="wpmchimpa-del-button"></div>
	        	</div>
	        	<div class="wpmchimpa-head">
	        		<div class="wpmchimpa-headc">
<?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
<?php if(isset($theme['lite_msg'])) echo '<div class="wpmchimpa_para">'.$theme['lite_msg'].'</div>';?>
	        		</div>
	        	</div>
	        </div>
	        <div class="wpmchimpa-databox">
	        	<?php if($theme['lite_exhopt']=='0'){ ?>
		        <div class="wpmcdate">
		        	<div class="wpmcdm"></div>
		        	<div class="wpmcdd"></div>
		        	<div class="wpmcdy"></div>
		        </div>
		        <div class="wpmcweat">
		        	<div class="wpmcwl"><?=$theme['lite_wloc']?></div>
					<div class="wpmcwc"><?=$weatdata->weather[0]->main?></div>
					<div class="wpmcwi"></div>
					<div class="wpmcwd"><span><?=$weatdata->cel?></span><span class="wpmcwdinac"><?=$weatdata->far?></span></div>
					<div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
					<a href="http://openweathermap.org/city/<?=$weatdata->id?>" target="_blank" class="wpmcl2owm">extended forecast</a>
		        </div>
		        <?php } else if($theme['lite_exhopt']=='1'){ ?>
		        <div class="wpmcexhp"><?=(isset($theme['lite_exhp'])?$theme['lite_exhp']:'')?></div>
		        <?php } ?>
	        </div>
        </div>
    <div id="wpmchimpa-newsletterform" class="wpmchimpa-wrapper">
      <div class="wpmchimpa" id="wpmchimpa">

          <form action="" method="post">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => true,
  'type' => 4
  );
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
<div class="wpmchimpa-subsc<?php echo (isset($theme['lite_button_i']) && $theme['lite_button_i'] != 'inone' && $theme['lite_button_i'] != 'idef')? ' subsicon' : '';?>">
  <div class="wpmchimpa-subs-button wpmchimpa-matbut"></div>
</div>
              <?php if(isset($theme['lite_tag_en'])){
              if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.stripslashes($tagtxt).'</div>';
              }?>
            <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["lite_spinner_t"])?$theme["lite_spinner_t"]:'1','wpmchimpa-main',isset($theme["lite_spinner_c"])?$theme["lite_spinner_c"]:'#61c0b5');?></div></div>
            </form>
          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
      </div>
    </div>
        
  </div>
</div>
</div>
</div>