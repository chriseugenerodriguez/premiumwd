<style type="text/css">
.wpmchimpa-overlay-bg {
background: rgba(0,0,0,{{data.theme.l7.lite_bg_op/100 ||'0.4'}});
height: 778px;
width: 1024px;
}

.wpmchimpa-overlay-bg #wpmchimpa-main {
min-width: 340px;
min-height: 350px;
background: {{data.theme.l7.lite_bg_c || '#f7f7f7'}};
display: inline-block;
position: relative;
left: 50%;
margin: 70px auto;
-webkit-transform: translatex(-50% );
-moz-transform: translatex(-50% );
-ms-transform: translatex(-50% );
-o-transform: translatex(-50% );
transform: translatex(-50% );
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
background-image: url({{data.theme.l7.lite_img1 || 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg=='}});
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
	background: {{getIcon('b04',25,data.theme.l7.lite_hi_c||'#fff')}} no-repeat center;
	background-color: {{data.theme.l7.lite_hi_bc|| '#61c0b5'}};
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
background-image: url({{data.theme.l7.lite_img1 || 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzNDBweCIgaGVpZ2h0PSIyMzBweCIgdmlld0JveD0iMCAwIDM0MCAyMzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM0MCAyMzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IHg9IjIzMi41NzgiIHk9IjEwLjA0IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC43ODY1IC0wLjYxNzYgMC42MTc2IC0wLjc4NjUgNDgyLjAxMjMgNTA2LjU1MSkiIGZpbGw9IiMxRDdCQkYiIHdpZHRoPSIxOTEuOTcyIiBoZWlnaHQ9IjMxOS44MzgiLz48cmVjdCB4PSI0NC4wNzUiIHk9Ii0xMy42NjUiIHRyYW5zZm9ybT0ibWF0cml4KC0wLjc2NzUgLTAuNjQxMSAwLjY0MTEgLTAuNzY3NSAxNTcuMzIgMzAzLjc0MDIpIiBmaWxsPSIjMTg1RkExIiB3aWR0aD0iMTc5LjMzOSIgaGVpZ2h0PSIyNzQuMDA5Ii8+PGc+PHJlY3QgeD0iMTEuNTM1IiB5PSItMTYuMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcyLjgyMDcgMjYxLjUyNTEpIiBvcGFjaXR5PSIwLjEiIGZpbGw9IiMxQzFDMUMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiB3aWR0aD0iMTc5LjMyNCIgaGVpZ2h0PSIyNzMuOTg3Ii8+PHJlY3QgeD0iMTAuODY4IiB5PSItMTguMDAyIiB0cmFuc2Zvcm09Im1hdHJpeCgtMC45NzQ3IC0wLjIyMzMgMC4yMjMzIC0wLjk3NDcgMTcxLjk1IDI1Ny40MjY1KSIgZmlsbD0iI0VBNkIxMCIgd2lkdGg9IjE3OS4zMjQiIGhlaWdodD0iMjczLjk4NyIvPjwvZz48Zz48cmVjdCB4PSIxLjM0OSIgeT0iLTE0LjY2NCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEgMC4xIC0wLjk5NSAxNjkuMzQyNyAyNTMuMTYzOSkiIG9wYWNpdHk9IjAuMSIgZmlsbD0iIzFDMUMxQyIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHdpZHRoPSIxNzkuMzM1IiBoZWlnaHQ9IjI3NC4wMDMiLz48cmVjdCB4PSIwLjQxMiIgeT0iLTE1LjY2NyIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuOTk1IC0wLjEwMDIgMC4xMDAyIC0wLjk5NSAxNjcuNTUxIDI1MS4wODk2KSIgZmlsbD0iI0VFQTkxQyIgd2lkdGg9IjE3OS4zMzkiIGhlaWdodD0iMjc0LjAwOSIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ijk5OC42OTI2IiB5MT0iMjY2LjU1MTkiIHgyPSI4MzUuMDA3IiB5Mj0iMjAxLjE2NjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMC4zMjA5IDAuMzYzNyAtMC4zNjM3IC0wLjgwNTIgLTEwMS4yNDg2IC0yNi44MTQ5KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMzAyMyIgc3R5bGU9InN0b3AtY29sb3I6IzExMEYwRjtzdG9wLW9wYWNpdHk6MC4yNzIiLz48c3RvcCAgb2Zmc2V0PSIwLjY3MjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMxRTFCMUM7c3RvcC1vcGFjaXR5OjAuNjA0OSIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMzFGMjA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBvbHlnb24gb3BhY2l0eT0iMC4yIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTkyLjg2LDI1My44NTEgMTcyLjkyMiwyNjQuNTI5IDIxLjkyNywtMTcuNDIgNDEuODY1LC0yOC4wOTggIi8+PHJlY3QgeD0iLTU1LjIxNCIgeT0iLTIuOTA3IiB0cmFuc2Zvcm09Im1hdHJpeCgtMC44ODE1IDAuNDcyMSAtMC40NzIxIC0wLjg4MTUgMTM4Ljk0MTQgMjc5LjE0NjcpIiBmaWxsPSIjRTg1NjFGIiB3aWR0aD0iMTc5LjMyNiIgaGVpZ2h0PSIzMTkuODIzIi8+PGc+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOTEuOTU4MiIgeTE9Ii0xMTQuMjgyNSIgeDI9IjQyNS44NjI3IiB5Mj0iMzYuOTA4NyIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgwLjY3NjcgMC4zNTIgLTAuMzUyIC0wLjYxNTEgLTE2LjgwNSAtMzAuNDI1NSkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjMwODMiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMTBGMTA7c3RvcC1vcGFjaXR5OjAuMjc3NCIvPjxzdG9wICBvZmZzZXQ9IjAuNjcwNSIgc3R5bGU9InN0b3AtY29sb3I6IzFFMUIxQztzdG9wLW9wYWNpdHk6MC42MDM1Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzIzMUYyMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjMiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyNC45MjksLTM0LjE0MyA2NC43MTQsLTc3LjU2IDQ1MS42NCwyNzYuOTk5IDQxMS44NTUsMzIwLjQxNiAiLz48cmVjdCB4PSIxOTYuODE4IiB5PSItMjA4LjkxNCIgdHJhbnNmb3JtPSJtYXRyaXgoMC42NzU2IC0wLjczNzMgMC43MzczIDAuNjc1NiA1Ni45MzA0IDIzNi43Mzk3KSIgZmlsbD0iIzFEOTREMCIgd2lkdGg9IjIwMS4zMiIgaGVpZ2h0PSI1MjUuMTg1Ii8+PC9nPjwvc3ZnPg=='}});
background-position: bottom;
-webkit-filter:blur({{data.theme.l7.lite_hblur|| '15'}}px);
filter:blur({{data.theme.l7.lite_hblur|| '15'}}px);
position: absolute;
height: 100%;
width: 100%;
overflow: hidden;
}
#wpmchimpa-main .wpmchimpa-headc{
  padding: 5px 100px 5px 20px;
  position: relative;
}
#wpmchimpa-main .lite_heading{
width: 100%;
line-height: 30px;
color: {{data.theme.l7.lite_heading_fc||'#fff'}};
font-size: {{data.theme.l7.lite_heading_fs||'30'}}px;
font-weight: {{data.theme.l7.lite_heading_fw}};
font-family: {{data.theme.l7.lite_heading_f | livepf}};
font-style: {{data.theme.l7.lite_heading_fst}};
background-color: {{data.theme.l7.lite_hbg_c}};
}
#wpmchimpa-main .lite_msg,#wpmchimpa-main .lite_msg *{
font-size: 15px;
color: #fff;
font-weight: lighter;
margin: 0;
font-size: {{data.theme.l7.lite_msg_fs||'18'}}px;
font-family: {{data.theme.l7.lite_msg_f | livepf}};
}
#wpmchimpa-main .wpmchimpa-databox{
width: 100%;
height:100px;
display: block;
background: {{data.theme.l7.lite_exhbc || '#ededed'}};
position: relative;
}
#wpmchimpa-main .wpmchimpa-databox *{
	  color: {{data.theme.l7.lite_exhc1 || '#ababab'}};
	font-family: {{data.theme.l7.lite_exhf}};
	font-family: {{data.theme.l7.lite_exhfw}};
	font-family:{{data.theme.l7.lite_exhfst}}; 
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
color: {{data.theme.l7.lite_exhc2 || '#f95753'}};
display: inline-block;
float: left;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcweat{
padding: 15px 20px 10px 5px;
display: {{data.theme.l7.lite_wloc ? 'inline-block':'none'}};
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
background: {{getIcon('loc1',10,data.theme.l7.lite_exhc1||'#ababab')}} no-repeat center;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwc{
font-size: 15px;
line-height: 15px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcwi{
display: block;
width: 40px;
height: 40px;
margin: 3px 0 0 10px;
float: left;
background: {{getIcon('w01',50)}} no-repeat center;
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
display: {{data.theme.l7.lite_l2owm ? 'block':'none'}};
  line-height: 8px;
}
#wpmchimpa-main .wpmchimpa-databox .wpmcexhp{
padding: 30px 20px 0;
font-size: 15px;
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

#wpmchimpa-main .wpmchimpa-close-button{
background: {{getIcon('c1',15,data.theme.l7.lite_close_col||'#fff')}} no-repeat center;
}
#wpmchimpa-main .wpmchimpa-edit-button{
	right: 10px;
background: {{getIcon('ed1',15,data.theme.l7.lite_close_col||'#fff')}} no-repeat center;
}
#wpmchimpa-main .wpmchimpa-del-button{
	right: 30px;
background: {{getIcon('del1',15,data.theme.l7.lite_close_col||'#fff')}} no-repeat center;
}
#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin-left: 10px;
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '{{data.theme.l7.lite_soc_head || 'Subscribe with'}}';
line-height: 20px;
display: block;
float:left;
color: {{data.theme.l7.lite_soc_fc || '#fff'}};
font-size: {{data.theme.l7.lite_soc_fs||'15'}}px;
font-weight: {{data.theme.l7.lite_soc_fw}};
font-family: {{(data.theme.l7.lite_soc_f | livepf)}};
font-style: {{data.theme.l7.lite_soc_fst}};
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
border: 1px solid {{data.theme.l7.lite_soc_fc || '#fff'}};
border-radius: 50%;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
width:18px;
height: 18px;
display: block;
content: '';
background: no-repeat center;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',11,data.theme.l7.lite_soc_fc||'#fff')}} 
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',11,data.theme.l7.lite_soc_fc||'#fff')}} 
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',11,data.theme.l7.lite_soc_fc||'#fff')}} 
}
#wpmchimpa-main .wpmchimpa{
	padding: 20px;
}
#wpmchimpa .lite_tbox{
text-align: left;
margin-bottom: 10px;
margin-left: 40px;
width: calc(100% -40px);
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.l7.lite_tbox_fc||'#61c0b5'}};
font-size: {{data.theme.l7.lite_tbox_fs||'18'}}px;
font-weight: {{data.theme.l7.lite_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.l7.lite_tbox_f | livepf}};
font-style: {{data.theme.l7.lite_tbox_fst}};
background-color: {{data.theme.l7.lite_tbox_bgc || '#f7f7f7'}};
width: {{data.theme.l7.lite_tbox_w}}px;
height: {{data.theme.l7.lite_tbox_h||'40'}}px;
border-bottom: {{data.theme.l7.lite_tbox_bor||'1'}}px solid {{data.theme.l7.lite_tbox_borc||'#000'}};
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
width: 40px;
height:40px;
position: absolute;
top: 0;
left: -40px;
}
.lite_tbox.mailicon:before{
background: {{getIcon('a07',25,data.theme.l7.lite_inico_c||'#ababab')}} no-repeat center;
}
.lite_tbox.pericon:before{
background: {{getIcon('c05',25,data.theme.l7.lite_inico_c||'#ababab')}} no-repeat center;
}
#wpmchimpa .wpmchimpa-groups{
display: block;
margin-left: 40px;
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
border:1px solid {{data.theme.l7.lite_check_borc||'#61c0b5'}};
background-color: {{data.theme.l7.lite_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpa .lite_check .ctext{
color: {{data.theme.l7.lite_check_fc}};
font-size: {{data.theme.l7.lite_check_fs}}px;
font-weight: {{data.theme.l7.lite_check_fw}};
font-family: {{data.theme.l7.lite_check_f | livepf}};
font-style: {{data.theme.l7.lite_check_fst}};
}
#wpmchimpa .lite_check .cbox.checked{
border:none;background:none;
}
#wpmchimpa .lite_check .cbox.checked:after{
display: block;
overflow: hidden;
width:20px;
height:20px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.l7.lite_check_mark||'ch1',20,data.theme.l7.lite_check_ic||'#61c0b5')}};
}

#wpmchimpa .lite_button{
line-height: 45px;
padding-left: 10px;
text-align: center;
cursor: pointer;
margin-top: 15px;
position: relative;
width: calc(100% - 40px);
margin-left: 40px;
color: {{data.theme.l7.lite_button_fc||'#fff'}};
font-size: {{data.theme.l7.lite_button_fs || "20"}}px;
font-weight: {{data.theme.l7.lite_button_fw}};
font-family: {{data.theme.l7.lite_button_f | livepf}};
font-style: {{data.theme.l7.lite_button_fst}};
background-color:{{data.theme.l7.lite_button_bc||'#61c0b5'}};
width: {{data.theme.l7.lite_button_w}}px;
height: {{data.theme.l7.lite_button_h||'45'}}px;
-webkit-border-radius: {{data.theme.l7.lite_button_br||'1'}}px;
-moz-border-radius: {{data.theme.l7.lite_button_br||'1'}}px;
border-radius: {{data.theme.l7.lite_button_br||'1'}}px;
border: {{data.theme.l7.lite_button_bor||'1'}}px solid {{data.theme.l7.lite_button_borc||'#59c2b6'}};
box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
#wpmchimpa .lite_button:hover{
color: {{data.theme.l7.lite_button_fch}};
background-color: {{data.theme.l7.lite_button_bch}};
}

.lite_spinner {
margin: 5px 0;
}

.lite_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}


#wpmchimpa .wpmchimpa-tag{
text-align: center;
margin-top: 6px;
display: {{data.theme.l7.lite_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.l7.lite_tag_fc||'#b8b8b8'}};
font-size: {{data.theme.l7.lite_tag_fs||'10'}}px;
font-weight: {{data.theme.l7.lite_tag_fw}};
font-family:Arial;
font-family: {{data.theme.l7.lite_tag_f | livepf}};
font-style: {{data.theme.l7.lite_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.l7.lite_tag_fs||10,data.theme.l7.lite_tag_fc||'#b8b8b8')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpa-main.woexhead .wpmchimpa-databox{
display: none;
}
#wpmchimpa-main.woexhead .wpmchimpa-leftpane{
	margin-bottom: 50px;
}
#wpmchimpa-main.wosoc .wpmchimpa-social{
	display: none;
}
</style>

<div class="wpmchimpa-overlay-bg wpmchimpa-wrapper" id="lightbox1">
	<div id="wpmchimpa-main" ng-class="{'woexhead':data.theme.l7.lite_exhead,'wosoc':data.theme.l7.lite_dissoc}">
        <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="  margin: -10px;top: 0;z-index: 10;">7</div>
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
		        		<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
		            		<div class="lite_heading">{{data.theme.l7.lite_heading}}</div>
		      				<div class="lite_msg"><p ng-bind-html="data.theme.l7.lite_msg | safe"></p></div>
		          		
	        		</div>
	        	</div>
	        </div>
	        <div class="wpmchimpa-databox">
		        <div class="wpmcdate" ng-show="data.theme.l7.lite_exhopt == '0'">
		        	<div class="wpmcdm">Monday, January</div>
		        	<div class="wpmcdd">21</div>
		        	<div class="wpmcdy">2015</div>
		        </div>
		        <div class="wpmcweat" ng-show="data.theme.l7.lite_exhopt == '0'">
		        	<div class="wpmcwl">{{data.theme.l7.lite_wloc}}</div>
					<div class="wpmcwc">Clear</div>
					<div class="wpmcwi"></div>
					<div class="wpmcwd"><span>30</span><span class="wpmcwdinac">86</span></div>
					<div class="wpmcwdc"><span>&deg;C</span> |<span class="wpmcwdcinac">&deg;F</span></div>
					<div class="wpmcl2owm">extended forecast</div>
		        </div>
		        <div class="wpmcexhp" ng-show="data.theme.l7.lite_exhopt == '1'">{{data.theme.l7.lite_exhp}}</div>
	        </div>
        </div>
		<div id="wpmchimpa-newsletterform">
			
			<div class="wpmchimpa" id="wpmchimpa">
    			
          <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
            <div class="lite_tbox pericon"><div class="in-name">Name</div></div>
      			<div class="lite_tbox mailicon"><div class="in-mail">Email address</div></div>
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
          <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
        		<div class="lite_button">{{data.theme.l7.lite_button}}</div>
          </div>
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
	    		<div class="wpmchimpa-tag" ng-bind-html="data.theme.l7.lite_tag||'Secure and Spam free...' | safe"></div></div>
          <div>
          	<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;">5</div>
          	<div class="lite_spinner" ng-bind-html="getSpin(data.theme.l7.lite_spinner_t||'1','wpmchimpa-wrapper',data.theme.l7.lite_spinner_c||'#61c0b5')"></div>
          </div>
    			
          </div>
			</div>
	</div>        
</div>