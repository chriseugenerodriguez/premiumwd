<?php 
$theme = $wpmchimpa['theme']['s7'];
$theme['slider_msg'] = htmlspecialchars_decode($theme['slider_msg']);
$this->social=true;
if(!isset($theme['slider_exhead']) && $theme['slider_exhopt']=='0' && isset($theme['slider_wloc']) && isset($theme['slider_locapi']))
	$weatdata = $this->get_weather($theme['slider_wloc'],$theme['slider_locapi']);
$this->extrascript(1);
$this->extrascript(2);
?>
<style type="text/css">

.wpmchimpas {
background-color: #333;
<?php
    if(isset($theme["slider_canvas_c"])){
        echo 'background-color:'.$theme["slider_canvas_c"].';';
    }
    if(isset($theme["slider_bg_p"]) && $theme["slider_bg_p"]!= 'pat0'){
        echo 'background-image:url("'.WPMCA_PLUGIN_URL.'assets/'.$theme["slider_bg_p"].'.png");';
    }?>
}
.wpmchimpas .wpmchimpas-inner {
text-align: center;
-webkit-border-radius:1px;
-moz-border-radius:1px;
border-radius:1px;
padding: 0;
margin: 0 80px;
min-height:450px;
background: #f7f7f7 no-repeat top;
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
<?php 
    if(isset($theme["slider_bg_c"])){
        echo 'background-color:'.$theme["slider_bg_c"].';';
    }
    ?>
}
.wpmchimpas .wpmchimpa-leftpane{
width:340px;
position: relative;
}
.wpmchimpas .wpchimpa-banner{
height: 230px;
display: block;
position: relative;
background: #333;
background-image:<?php if(isset($theme['slider_img1']))echo 'url('.$theme['slider_img1'].');';else{?>
url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg==);<?php } ?>
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
z-index: 1;
}
.wpmchimpas .wpmchimpa-leftpane:after{
	content: '';
	display: block;
	width: 55px;
	height: 55px;
	position: absolute;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: <?php echo $this->getIcon('b04',25,(isset($theme["slider_hi_c"]))?$theme["slider_hi_c"]:'#fff');?> no-repeat center;
	background-color: <?=(isset($theme["slider_hi_bc"])?$theme["slider_hi_bc"]:'#61c0b5')?>;
	top:202px;
	right: 20px;
	z-index: 1;
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.wpmchimpas .wpmchimpa-head{
display: block;
position: absolute;
width: 100%;
bottom: 0;
text-align: left;
overflow: hidden;
}
.wpmchimpas .wpmchimpa-head:before{
content: '';
background-image:<?php if(isset($theme['slider_img1']))echo 'url('.$theme['slider_img1'].');';else{?>
url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg==);<?php } ?>
background-position: bottom;
-webkit-filter:blur(<?=(isset($theme['slider_hblur'])?$theme['slider_hblur']:'15')?>px);
filter:blur(<?=(isset($theme['slider_hblur'])?$theme['slider_hblur']:'15')?>px);
position: absolute;
  left: 0;
height: 100%;
width: 100%;
overflow: hidden;
}
.wpmchimpas .wpmchimpa-headc{
  padding: 5px 100px 5px 20px;
  position: relative;
}
.wpmchimpas h3{
width: 100%;
color: #fff;
font-size: 30px;
line-height: 30px;
<?php 
    if(isset($theme["slider_heading_f"])){
      echo 'font-family:'.$theme["slider_heading_f"].';';
    }
    if(isset($theme["slider_heading_fs"])){
        echo 'font-size:'.$theme["slider_heading_fs"].'px;';
        echo 'line-height:'.$theme["slider_heading_fs"].'px;';
    }
    if(isset($theme["slider_heading_fw"])){
        echo 'font-weight:'.$theme["slider_heading_fw"].';';
    }
    if(isset($theme["slider_heading_fst"])){
        echo 'font-style:'.$theme["slider_heading_fst"].';';
    }
    if(isset($theme["slider_heading_fc"])){
        echo 'color:'.$theme["slider_heading_fc"].';';
    }
?>
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
font-size: 15px;
color: #fff;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["slider_msg_f"])){
  echo 'font-family:'.$theme["slider_msg_f"].';';
}if(isset($theme["slider_msg_fs"])){
    echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}
.wpmchimpas .wpmchimpa-databox{
width: 100%;
height:100px;
display: block;
background: <?=(isset($theme['slider_exhbc'])?$theme['slider_exhbc']:'#ededed')?>;
position: relative;
text-align: left;
}
.wpmchimpas .wpmchimpa-databox *{
	  color: <?=(isset($theme['slider_exhc1'])?$theme['slider_exhc1']:'#ababab')?>;
	font-family: <?=(isset($theme['slider_exhf'])?$theme['slider_exhf']:'')?>;
	font-weight: <?=(isset($theme['slider_exhfw'])?$theme['slider_exhfw']:'')?>;
	font-style: <?=(isset($theme['slider_exhfst'])?$theme['slider_exhfst']:'')?>;
}
.wpmchimpas .wpmchimpa-databox .wpmcdate{
padding: 15px 0 0 20px;
display: inline-block;
width: 160px;
position: relative;
float: left;
}
.wpmchimpas .wpmchimpa-databox .wpmcdy{
position: relative;
font-size: 25px;
line-height: 35px;
}
.wpmchimpas .wpmchimpa-databox .wpmcdm{
font-size: 16px;
line-height: 16px;
}
.wpmchimpas .wpmchimpa-databox .wpmcdd{
font-size: 65px;
line-height: 65px;
color: <?=(isset($theme['slider_exhc2'])?$theme['slider_exhc2']:'#f95753')?>;
display: inline-block;
float: left;
}
.wpmchimpas .wpmchimpa-databox .wpmcweat{
padding: 15px 20px 10px 5px;
display: <?=(isset($theme['slider_wloc'])?'inline-block':'none')?>;
width: 180px;
}
.wpmchimpas .wpmchimpa-databox .wpmcwl{
font-size: 16px;
line-height: 19px;
display: inline-block;
}
.wpmchimpas .wpmchimpa-databox .wpmcwl:after{
content: '';
width: 12px;
height: 12px;
display: inline-block;
background: <?php echo $this->getIcon('loc1',10,(isset($theme['slider_exhc1'])?$theme['slider_exhc1']:'#ababab'));?> no-repeat center;
}
.wpmchimpas .wpmchimpa-databox .wpmcwc{
font-size: 15px;
line-height: 15px;
}
.wpmchimpas .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin-left: 10px;
float: left;
background: <?php echo $this->getIcon('w'.substr($weatdata->weather[0]->icon,0,2),50);?> no-repeat center;
}
.wpmchimpas .wpmchimpa-databox .wpmcwd{
position: relative;
display: inline-block;
float: left;
padding: 10px 10px 0;
font-size: 35px;
line-height: 35px;
}
.wpmchimpas .wpmchimpa-databox .wpmcwdinac{display: none;}
.wpmchimpas .wpmchimpa-databox .wpmcwdc{
display: inline-block;
font-size: 14px;
line-height: 14px;
margin: 10px 0;
}
.wpmchimpas .wpmchimpa-databox span.wpmcwdcinac{
color:#1a0dab;
cursor: pointer;
}
.wpmchimpas .wpmchimpa-databox .wpmcl2owm{
display: <?=(isset($theme['slider_l2owm'])?'block':'none')?>;
  line-height: 8px;
font-size: 8px;
text-decoration: none;
}
.wpmchimpas .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
}

.wpmchimpas .wpmchimpa-cont{
padding: 20px;
text-align: center;
}

.wpmchimpas  .wpmchimpa-field{
position: relative;
width:calc(100% - 40px);
margin: 0 0 12px 40px;
text-align: left;
<?php 
  if(isset($theme["slider_tbox_w"])){
      echo 'width:'.$theme["slider_tbox_w"].'px;';
  }
?>
}
.wpmchimpas .inputicon{
display: none;
}
.wpmchimpas .wpmc-ficon .inputicon {
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
left: -40px;
pointer-events: none;
<?php 
if(isset($theme["slider_tbox_h"])){
  echo 'width:'.$theme["slider_tbox_h"].'px;';
  echo 'height:'.$theme["slider_tbox_h"].'px;';
}
?>
}

<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#ababab');
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
    echo '.wpmchimpas .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
.wpmchimpas .wpmchimpa-field select,
.wpmchimpas input[type="text"]{
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
    if(isset($theme["slider_tbox_f"])){
      echo 'font-family:'.$theme["slider_tbox_f"].';';
    }
    if(isset($theme["slider_tbox_fs"])){
        echo 'font-size:'.$theme["slider_tbox_fs"].'px;';
    }
    if(isset($theme["slider_tbox_fw"])){
        echo 'font-weight:'.$theme["slider_tbox_fw"].';';
    }
    if(isset($theme["slider_tbox_fst"])){
        echo 'font-style:'.$theme["slider_tbox_fst"].';';
    }
    if(isset($theme["slider_tbox_bgc"])){
        echo 'background:'.$theme["slider_tbox_bgc"].';';
    }
    if(isset($theme["slider_tbox_w"])){
        echo 'width:'.$theme["slider_tbox_w"].'px;';
    }
    if(isset($theme["slider_tbox_h"])){
        echo 'height:'.$theme["slider_tbox_h"].'px;';
    }
    if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
        echo ' border-bottom:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
    }
  ?>
}

.wpmchimpas .wpmchimpa-field.wpmchimpa-drop:before{
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
if(isset($theme["slider_tbox_h"])){
  echo 'width:'.$theme["slider_tbox_h"].'px;';
  echo 'height:'.$theme["slider_tbox_h"].'px;';
}
?>
}
.wpmchimpas .wpmchimpa-field select:focus{
  border-color:#61c0b5;
    <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'border-color:'.$theme["slider_tbox_fc"].';';
  }
   ?>
}
.wpmchimpas input[type="text"] ~ .inputlabel{
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
  if(isset($theme["slider_tbox_f"])){
    echo 'font-family:'.$theme["slider_tbox_f"].';';
  }
  if(isset($theme["slider_tbox_fs"])){
      echo 'font-size:'.$theme["slider_tbox_fs"].'px;';
  }
  if(isset($theme["slider_tbox_fw"])){
      echo 'font-weight:'.$theme["slider_tbox_fw"].';';
  }
  if(isset($theme["slider_tbox_fst"])){
      echo 'font-style:'.$theme["slider_tbox_fst"].';';
  }
  ?>
}

.wpmchimpas input:focus ~ .inputlabel, .wpmchimpas input:valid ~ .inputlabel {
  top:-7px;
  font-size:12px;
  color:#61c0b5;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'color:'.$theme["slider_tbox_fc"].';';
  }
   ?>
}

.wpmchimpas .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%;top: 1px;
<?php 
    if(isset($theme["slider_tbox_w"])){
        echo 'width:'.$theme["slider_tbox_w"].'px;';
    }
?>
}
.wpmchimpas .wpmchimpa-field .bar:before, .wpmchimpas .wpmchimpa-field .bar:after   {
  content:'';
  height:1px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#61c0b5; 
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all; 
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'background-color:'.$theme["slider_tbox_fc"].';';
  }
   ?>
}
.wpmchimpas .wpmchimpa-field .bar:before {
  left:50%;
}
.wpmchimpas .wpmchimpa-field .bar:after {
  right:50%; 
}
.wpmchimpas .wpmchimpa-field input:focus ~ .bar:before, .wpmchimpas .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
.wpmchimpas .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:25%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["slider_tbox_w"])){
        echo 'width:'.$theme["slider_tbox_w"].'px;';
    }
?>
}
.wpmchimpas .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlightersb 0.3s ease;
  animation:inputHighlightersb 0.3s ease;
}
@-webkit-keyframes inputHighlightersb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'background-color:'.$theme["slider_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlightersb {
  from { background:#61c0b5;
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'background-color:'.$theme["slider_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

.wpmchimpas select.wpmcerror,
.wpmchimpas input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpas .wpmchimpa-check *,
.wpmchimpas .wpmchimpa-radio *{
<?php
if(isset($theme["slider_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["slider_check_f"]).';';
}
if(isset($theme["slider_check_fs"])){
    echo 'font-size:'.$theme["slider_check_fs"].'px;';
}
if(isset($theme["slider_check_fw"])){
    echo 'font-weight:'.$theme["slider_check_fw"].';';
}
if(isset($theme["slider_check_fst"])){
    echo 'font-style:'.$theme["slider_check_fst"].';';
}
if(isset($theme["slider_check_fc"])){
    echo 'color:'.$theme["slider_check_fc"].';';
}
?>
}
.wpmchimpas .wpmchimpa-item{
  <?php 
    if(isset($theme["slider_check_pline"])){
      if($theme["slider_check_pline"] == 'f'){
        ?> margin-right: 10px; <?php
      }
      else $pline = $theme["slider_check_pline"];
    }
    else $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
.wpmchimpas .wpmchimpa-item input {
  display: none;
}
.wpmchimpas .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  line-height: 20px;
  margin-right: 10px;
-webkit-backface-visibility:hidden;
}

.wpmchimpas .wpmchimpa-item span:before,
.wpmchimpas .wpmchimpa-item span:after {
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
    if(isset($theme["slider_check_borc"])){
        echo 'border:1px solid '.$theme["slider_check_borc"].';';
 }   if(isset($theme["slider_check_c"])){
        echo 'background-color:'.$theme["slider_check_c"].';';
 }?>
}
.wpmchimpas input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
.wpmchimpas input[type='checkbox'] + span:after {
-webkit-transform:rotate(43deg);
transform:rotate(43deg);
opacity: 0;
width: 20px;
height: 15px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["slider_check_mark"])){$tfi=$theme["slider_check_mark"];}
        $tfc='#61c0b5';
        if(isset($theme["slider_check_ic"])){$tfc=$theme["slider_check_ic"];}
        echo $this->getIcon($tfi,20,$tfc);?>;
}
.wpmchimpas input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:before ,
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
.wpmchimpas .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 14px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -12px;
  font-size: 10px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["slider_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["slider_status_f"]).';';
    }
    if(isset($theme["slider_status_fw"])){
        echo 'font-weight:'.$theme["slider_status_fw"].';';
    }
    if(isset($theme["slider_status_fst"])){
        echo 'font-style:'.$theme["slider_status_fst"].';';
    }
  ?>
}

.wpmchimpas .wpmchimpa-subs-button{
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
  -webkit-transition:  box-shadow 0.3s;
  transition:  box-shadow 0.3s;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
 <?php
if(isset($theme["slider_button_f"])){
  echo 'font-family:'.$theme["slider_button_f"].';';
}
if(isset($theme["slider_button_fs"])){
    echo 'font-size:'.$theme["slider_button_fs"].'px;';
}
if(isset($theme["slider_button_fw"])){
    echo 'font-weight:'.$theme["slider_button_fw"].';';
}
if(isset($theme["slider_button_fst"])){
    echo 'font-style:'.$theme["slider_button_fst"].';';
}
if(isset($theme["slider_button_fc"])){
    echo 'color:'.$theme["slider_button_fc"].';';
}
if(isset($theme["slider_button_w"])){
    echo 'width:'.$theme["slider_button_w"].'px;';
}
if(isset($theme["slider_button_h"])){
    echo 'height:'.$theme["slider_button_h"].'px;';
    echo 'line-height:'.$theme["slider_button_h"].'px;';
}
if(isset($theme["slider_button_bc"])){
    echo 'background-color:'.$theme["slider_button_bc"].';';
}
if(isset($theme["slider_button_br"])){
    echo '-webkit-border-radius:'.$theme["slider_button_br"].'px;';
    echo '-moz-border-radius:'.$theme["slider_button_br"].'px;';
    echo 'border-radius:'.$theme["slider_button_br"].'px;';
}
if(isset($theme["slider_button_bor"]) && isset($theme["slider_button_borc"])){
    echo ' border:'.$theme["slider_button_bor"].'px solid '.$theme["slider_button_borc"].';';
}
?>
}

.wpmchimpas .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['slider_button'])) echo $theme['slider_button'];else echo 'Subscribe';?>';
}
.wpmchimpas .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["slider_button_fch"])){
    echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
    echo 'background-color:'.$theme["slider_button_bch"].';';
}?>
}
.wpmchimpas .wpmchimpa-subsc{position: relative;}
.wpmchimpas .wpmchimpa-subsc.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0px;
pointer-events: none;
  <?php 
  if(isset($theme["slider_button_h"])){
      echo 'width:'.$theme["slider_button_h"].'px;';
      echo 'height:'.$theme["slider_button_h"].'px;';
  }
  if($theme["slider_button_i"] != 'inone' && $theme["slider_button_i"] != 'idef'){
    $col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#ababab');
     echo 'background: '.$this->getIcon($theme["slider_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-signalc {
height: 40px;
  margin-top: 10px;
  text-align: center;
}
.wpmchimpas .wpmchimpa-signal {
display: none;
}
.wpmchimpas-inner.signalshow .wpmchimpa-signal {
  display: inline-block;
}
.wpmchimpas .wpmchimpa-feedback{
text-align: center;
position: relative;
font-size: 12px;
height: 12px;
margin-top: -30px;
<?php
if(isset($theme["slider_status_f"])){
  echo 'font-family:'.$theme["slider_status_f"].';';
}
if(isset($theme["slider_status_fs"])){
  echo 'font-size:'.$theme["slider_status_fs"].'px;';
}
if(isset($theme["slider_status_fw"])){
  echo 'font-weight:'.$theme["slider_status_fw"].';';
}
if(isset($theme["slider_status_fst"])){
  echo 'font-style:'.$theme["slider_status_fst"].';';
}
if(isset($theme["slider_status_fc"])){
  echo 'color:'.$theme["slider_status_fc"].';';
}
?>
}
.wpmchimpas .wpmchimpa-tag{
margin: 6px auto;
}
.wpmchimpas .wpmchimpa-tag,
.wpmchimpas .wpmchimpa-tag *{
color:#b8b8b8;
font-size: 10px;
<?php
  if(isset($theme["slider_tag_f"])){
    echo 'font-family:'.$theme["slider_tag_f"].';';
  }
  if(isset($theme["slider_tag_fs"])){
      echo 'font-size:'.$theme["slider_tag_fs"].'px;';
  }
  if(isset($theme["slider_tag_fw"])){
      echo 'font-weight:'.$theme["slider_tag_fw"].';';
  }
  if(isset($theme["slider_tag_fst"])){
      echo 'font-style:'.$theme["slider_tag_fst"].';';
  }
  if(isset($theme["slider_tag_fc"])){
      echo 'color:'.$theme["slider_tag_fc"].';';
  }
?>
}

.wpmchimpas .wpmchimpa-tag:before{
content:<?php
  $tfs=10;
  if(isset($theme["slider_tag_fs"])){$tfs=$theme["slider_tag_fs"];}
  $tfc='#b8b8b8';
  if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
margin: 0;
height: auto;
}
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done:before{
content:<?=$this->getIcon('ch1',15,'#fff');?>;
width: 40px;
height: 40px;
border-radius: 20px;
line-height: 46px;
display: block;
background-color: #01E169;
margin: 40px auto;
}
.wpmchimpas-trig{
top:40%;
margin: 0 3px;
display: block;
<?php
if(isset($theme["slider_trigger_top"])){
echo 'top:'.$theme["slider_trigger_top"].'%;';
}
?>
}
.wpmchimpas-trigi{ 
width:50px;
height:50px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
-webkit-transition: -webkit-transform 0.5s ease,box-shadow 0.5s ease;
transition: transform 0.5s ease,box-shadow 0.5s ease;
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
<?php 
$ti='b04';
if(isset($theme["slider_trigger_i"])){
  if($theme["slider_trigger_i"] == 'inone')$ti='';
  else if($theme["slider_trigger_i"] != 'idef')$ti=$theme["slider_trigger_i"];
}
 ?> 
background: <?php echo $this->getIcon($ti,25,(isset($theme["slider_hi_c"]))?$theme["slider_hi_c"]:'#fff');?> no-repeat center;
background-color: <?=(isset($theme["slider_trigger_bg"])?$theme["slider_trigger_bg"]:'#61c0b5')?>;
}
.wpmchimpas-trig:hover .wpmchimpas-trigi{
-webkit-transform:translateY(-1px);
transform:translateY(-1px);
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
@media only screen and (max-width:420px) {
.wpmchimpas-trig:hover .wpmchimpas-trigi{
-webkit-transform:scale(0.8) translateY(-1px);
transform:scale(0.8) translateY(-1px);
}
}

.wpmchimpas .wpmchimpa-top{
	padding: 10px;
	text-align: center;
}
.wpmchimpas .wpmchimpa-edit-button,
.wpmchimpas .wpmchimpa-del-button{
display: block;
position: absolute;
width: 20px;
height: 20px;
top: 10px;
cursor: pointer;
opacity: 0.8;
}

.wpmchimpas .wpmchimpa-edit-button:hover,
.wpmchimpas .wpmchimpa-del-button:hover{
opacity: 1;
}
.wpmchimpas .wpmchimpa-edit-button{
	right: 10px;
background: <?php echo $this->getIcon('ed1',15,(isset($theme["slider_ui_c"]))?$theme["slider_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpas .wpmchimpa-del-button{
	right: 30px;
background: <?php echo $this->getIcon('del1',15,(isset($theme["slider_ui_c"]))?$theme["slider_ui_c"]:'#fff');?> no-repeat center;
}
.wpmchimpas .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
.wpmchimpas .wpmchimpa-social::before{
content: '<?php if(isset($theme['slider_soc_head'])) echo $theme['slider_soc_head'];else echo 'Subscribe with';?>';
font-size: 15px;
line-height: 20px;
display: block;
float:left;
color: #fff;
<?php
if(isset($theme["slider_soc_f"])){
  echo 'font-family:'.$theme["slider_soc_f"].';';
}
if(isset($theme["slider_soc_fs"])){
    echo 'font-size:'.$theme["slider_soc_fs"].'px;';
}
if(isset($theme["slider_soc_fw"])){
    echo 'font-weight:'.$theme["slider_soc_fw"].';';
}
if(isset($theme["slider_soc_fst"])){
    echo 'font-style:'.$theme["slider_soc_fst"].';';
}
if(isset($theme["slider_soc_fc"])){
    echo 'color:'.$theme["slider_soc_fc"].';';
}
?>
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc{
width:20px;
height: 20px;
margin-left:  5px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
border: 1px solid <?=(isset($theme["slider_soc_fc"])?$theme["slider_soc_fc"]:'#fff')?>;
border-radius: 50%;
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',11,(isset($theme["slider_soc_fc"])?$theme["slider_soc_fc"]:'#fff'));?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',11,(isset($theme["slider_soc_fc"])?$theme["slider_soc_fc"]:'#fff'));?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',11,(isset($theme["slider_soc_fc"])?$theme["slider_soc_fc"]:'#fff'));?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc:hover{
	-webkit-transform:scale(1.1);
	-ms-transform:scale(1.1);
	transform:scale(1.1);
}

.wpmchimpas .ripple {
  position: absolute;
  background: rgba(0,0,0,.25);
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-transform: scale(0);
  transform: scale(0);
  pointer-events: none;
}

.wpmchimpas .ripple.show {
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
.wpmchimpas.woexhead .wpmchimpa-databox{
display: none;
}
.wpmchimpas.woexhead .wpmchimpa-leftpane{
	margin-bottom: 50px;
}
.wpmchimpas.wosoc .wpmchimpa-social{
	display: none;
}

#wpmchimpas-trig .wpmchimpas-trigh{
<?php
  if(isset($theme["slider_trigger_hider"]))
    echo 'display:block;';
?>
}
#wpmchimpas-trig .wpmchimpas-trigh:before{
<?php
  if(isset($theme["slider_trigger_hc"])){
    echo 'border-right-color: '.$theme["slider_trigger_hc"].';';
    echo 'border-left-color: '.$theme["slider_trigger_hc"].';';
  }
?>
}
</style>
<div id="wpmchimpas" class="scrollhide chimpmatecss <?=(isset($theme['slider_exhead'])?'woexhead':'')?> <?=(isset($theme['slider_dissoc'])?'wosoc':'')?>">
  <div class="wpmchimpas-cont">
  <div class="wpmchimpas-scroller">
    <div class="wpmchimpas-resp">
    <div class="wpmchimpas-inner wpmchimpselector wpmchimpa-reset wpmchimpa-mainc">
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
	        		<div class="wpmchimpa-headc">
		        		<?php if(isset($theme['slider_heading'])) echo '<h3>'.$theme['slider_heading'].'</h3>';?>
<?php if(isset($theme['slider_msg'])) echo '<div class="wpmchimpa_para">'.$theme['slider_msg'].'</div>';?>
	        		</div>
	        	</div>
	        </div>
	        <div class="wpmchimpa-databox">
	        	<?php if($theme['slider_exhopt']=='0'){ ?>
		        <div class="wpmcdate">
		        	<div class="wpmcdm"></div>
		        	<div class="wpmcdd"></div>
		        	<div class="wpmcdy"></div>
		        </div>
		        <div class="wpmcweat">
		        	<div class="wpmcwl"><?=$theme['slider_wloc']?></div>
					<div class="wpmcwc"><?=$weatdata->weather[0]->main?></div>
					<div class="wpmcwi"></div>
					<div class="wpmcwd"><span><?=$weatdata->cel?></span><span class="wpmcwdinac"><?=$weatdata->far?></span></div>
					<div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
					<a href="http://openweathermap.org/city/<?=$weatdata->id?>" target="_blank" class="wpmcl2owm">extended forecast</a>
		        </div>
		        <?php } else if($theme['slider_exhopt']=='1'){ ?>
		        <div class="wpmcexhp"><?=(isset($theme['slider_exhp'])?$theme['slider_exhp']:'')?></div>
		        <?php } ?>
	        </div>
        </div>

  <div class="wpmchimpa-cont">
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
<div class="wpmchimpa-subsc<?php echo (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone' && $theme['slider_button_i'] != 'idef')? ' subsicon' : '';?>">
  <div class="wpmchimpa-subs-button wpmchimpa-matbut"></div>
</div>
              <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
            <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'1','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#61c0b5');?></div></div>
            </form>
          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div>
	</div>	</div></div></div></div>
<div class="wpmchimpas-bg chimpmatecss"></div>
<div class="wpmchimpas-overlay chimpmatecss"></div>
<div id="wpmchimpas-trig" class="chimpmatecss" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="wpmchimpas-trigc">
    <div class="wpmchimpas-trigi"></div>
    <div class="wpmchimpas-trigh"></div>
  </div>
</div>