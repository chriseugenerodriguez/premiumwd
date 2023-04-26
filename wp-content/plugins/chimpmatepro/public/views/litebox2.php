<?php 
$theme = $wpmchimpa['theme']['l2'];
$theme['lite_msg'] = htmlspecialchars_decode($theme['lite_msg']);
$this->social=true;
$this->extrascript(1);
?><style type="text/css">
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
min-width: 620px;
min-height: 500px;
background: #fff;
<?php  if(isset($theme["lite_bg_c"])){
    echo 'background-color:'.$theme["lite_bg_c"].';';
}?>

<?php if($scroll){?>
/*long form*/
height: calc(100% - 100px);
<?php } ?>
}
#wpmchimpa-main .wpmchimpa-leftpane{
width:220px;
height: 100%;
display: block;
position: absolute;
background: #fff;
float: left;
-webkit-transition:none;
transition:none;
background-image:<?php if(isset($theme['lite_img1']))echo 'url('.$theme['lite_img1'].');';else{?>
 url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIyMjBweCIgaGVpZ2h0PSI1MDBweCIgdmlld0JveD0iMCAwIDIyMCA1MDAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIyMCA1MDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGRpc3BsYXk9Im5vbmUiIGZpbGw9IiNGRjUyNTIiIHdpZHRoPSIyMjAiIGhlaWdodD0iNTAwIi8+PHJlY3QgZmlsbD0iIzQyODVGNCIgd2lkdGg9IjIyMCIgaGVpZ2h0PSI1MDAiLz48Zz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0Y5RjlGOSIgY3g9IjExMCIgY3k9IjEwNy41IiByPSI4OC41Ii8+PHJlY3QgeD0iNDAiIHk9IjQxIiBmaWxsPSIjRkJGQkZCIiB3aWR0aD0iMTM4LjUiIGhlaWdodD0iMTM4LjUiLz48L2c+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMTExMTExIiBzdHJva2Utd2lkdGg9IjAuNzUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTEyNi43NjQsODcuNzEyYy03Ljk0OC0wLjY0OS0yMi41OTYtNC42MjUtMjcuMDU3LDQuODEyYy0yLjQ4Myw1LjI1NCwxLjA4NiwxMS43NDUsMi40MzEsMTYuODE3YzIuMDc0LDcuODI0LTEuOTg1LDkuMzQzLTkuMDMxLDEwLjU0NGMtNi4wMTUsMS4wMjUtMTYuNjAzLDIuODc3LTE1LjI2NywxMS4yOGMxLjEsNi45MTksOC4zODEsOS42NDMsMTIuMDM2LDE0LjgxMWM3LjIzMSwxMC4yMjQtMTQuNjQxLDE0LjMxNi0yMC4zMzksMTYuNTM4Yy02LjM0MiwyLjQ3Mi0xMy4wNyw2LjM5NS0xNi42ODEsMTIuMzYxYy00LjM4MSw3LjIzOC0zLjE0OCwxNy4wODQsMC4xMjYsMjQuNDg2YzAuOTk0LDIuMjQ4LDIuMTQsNC40MjcsMy4yODMsNi42MDEiLz48Zz48Y2lyY2xlIGZpbGw9IiNGQkZCRkIiIGN4PSIxMTIuMzg2IiBjeT0iMzY0LjU4IiByPSI3My4zNzkiLz48cGF0aCBmaWxsPSIjMkYyRjM5IiBkPSJNMTU0LjkzLDI5My40NzljLTEyLjU2MSw4LjMyNi0yNy42MTgsMTMuMTg2LTQzLjgxNywxMy4xODZjLTE1Ljg1NCwwLTMwLjYxLTQuNjY0LTQzLjAwNy0xMi42Njd2LTIuMTFoODYuODI0VjI5My40Nzl6Ii8+PHJlY3QgeD0iMTkxLjY2MyIgeT0iMzUyLjk1IiBmaWxsPSIjNDc0ODU0IiB3aWR0aD0iOC4xMSIgaGVpZ2h0PSIxOS4xNCIvPjxnPjxwYXRoIGZpbGw9IiMyOTI5MzIiIGQ9Ik0xMTEuNTE5LDI3OS44MDJjLTQ2LjcyMiwwLTg0LjU5NywzNy44NzYtODQuNTk3LDg0LjU5N3MzNy44NzYsODQuNTk3LDg0LjU5Nyw4NC41OTdzODQuNTk3LTM3Ljg3Niw4NC41OTctODQuNTk3UzE1OC4yNCwyNzkuODAyLDExMS41MTksMjc5LjgwMnogTTExMS42OTIsNDM5LjEzMmMtNDEuNjYsMC03NS40MzItMzMuNzcyLTc1LjQzMi03NS40MzJjMC00MS42NiwzMy43NzItNzUuNDMyLDc1LjQzMi03NS40MzJzNzUuNDMyLDMzLjc3Miw3NS40MzIsNzUuNDMyQzE4Ny4xMjQsNDA1LjM2LDE1My4zNTIsNDM5LjEzMiwxMTEuNjkyLDQzOS4xMzJ6Ii8+PGc+PHBvbHlsaW5lIGZpbGw9IiMyRjJGMzkiIHBvaW50cz0iNzEuMDUxLDIyNy4wNjYgMTUxLjk4NiwyMjcuMDY2IDE1MS45ODYsMjkxLjg4NyA3MS4wNTEsMjkxLjg4NyA3MS4wNTEsMjI4LjUzMSAiLz48cG9seWxpbmUgZmlsbD0iIzJGMkYzOSIgcG9pbnRzPSI3MS40NjgsNDM2LjE3OSAxNTIuNDAzLDQzNi4xNzkgMTUyLjQwMyw1MDEgNzEuNDY4LDUwMSA3MS40NjgsNDM3LjY0NCAiLz48cGF0aCBmaWxsPSIjNDc0ODU0IiBkPSJNMTExLjkzNiwyODguMzA2Yy00MS43OTUsMC03NS42NzYsMzMuODgxLTc1LjY3Niw3NS42NzZzMzMuODgxLDc1LjY3Niw3NS42NzYsNzUuNjc2czc1LjY3Ni0zMy44ODEsNzUuNjc2LTc1LjY3NlMxNTMuNzMxLDI4OC4zMDYsMTExLjkzNiwyODguMzA2eiBNMTExLjkyNiw0MzYuMzcyYy00MC4wODcsMC03Mi41ODMtMzIuNDk3LTcyLjU4My03Mi41ODNzMzIuNDk3LTcyLjU4Myw3Mi41ODMtNzIuNTgzczcyLjU4MywzMi40OTcsNzIuNTgzLDcyLjU4M1MxNTIuMDEzLDQzNi4zNzIsMTExLjkyNiw0MzYuMzcyeiIvPjwvZz48L2c+PHBhdGggZmlsbD0iI0Q2RDZENiIgZD0iTTEwMC43ODUsMjk5LjI3NmMwLDEuOTc2LTEuNjAyLDMuNTc4LTMuNTc4LDMuNTc4bDAsMGMtMS45NzYsMC0zLjU3OC0xLjYwMi0zLjU3OC0zLjU3OGwwLDBjMC0xLjk3NiwxLjYwMi0zLjU3OCwzLjU3OC0zLjU3OGwwLDBDOTkuMTgzLDI5NS42OTgsMTAwLjc4NSwyOTcuMywxMDAuNzg1LDI5OS4yNzZMMTAwLjc4NSwyOTkuMjc2eiIvPjxwYXRoIGZpbGw9IiNENkQ2RDYiIGQ9Ik0xMTYuMDcsMjk5LjgzMmMwLDIuMjgzLTEuODUxLDQuMTM0LTQuMTM0LDQuMTM0bDAsMGMtMi4yODMsMC00LjEzNC0xLjg1MS00LjEzNC00LjEzNGwwLDBjMC0yLjI4MywxLjg1MS00LjEzNCw0LjEzNC00LjEzNGwwLDBDMTE0LjIxOSwyOTUuNjk4LDExNi4wNywyOTcuNTQ5LDExNi4wNywyOTkuODMyTDExNi4wNywyOTkuODMyeiIvPjxwYXRoIGZpbGw9IiNENkQ2RDYiIGQ9Ik0xMjkuNDA4LDI5OS4yNzZjMCwxLjk3Ni0xLjYwMiwzLjU3OC0zLjU3OCwzLjU3OGwwLDBjLTEuOTc2LDAtMy41NzgtMS42MDItMy41NzgtMy41NzhsMCwwYzAtMS45NzYsMS42MDItMy41NzgsMy41NzgtMy41NzhsMCwwQzEyNy44MDYsMjk1LjY5OCwxMjkuNDA4LDI5Ny4zLDEyOS40MDgsMjk5LjI3NkwxMjkuNDA4LDI5OS4yNzZ6Ii8+PC9nPjxnPjxwYXRoIGZpbGw9IiNDNjMyM0QiIGQ9Ik03MC4xMTYsMzc2LjE1NmMtMC4xMDcsMC40MjgtMC4yMTQsMC44NTYtMC4yMTQsMS4yODR2MjcuODI2YzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzIuMzU0LDAsNC4zODgtMS45MjYsNC4zODgtNC4zODhWMzc3LjQ0YzAtMC40MjgtMC4xMDctMC44NTYtMC4yMTQtMS4yODRINzAuMTE2eiIvPjxwYXRoIGZpbGw9IiNFQTQ3NTMiIGQ9Ik0xMjEuMjcyLDM2OS4zMDdINzQuMjg5Yy0yLjM1NCwwLTQuMzg4LDEuOTI2LTQuMzg4LDQuMzg4YzAsMCwwLjEwNy0wLjIxNCwwLjMyMS0wLjc0OWMwLjQyOCwwLjg1NiwxLjA3LDEuNjA1LDIuMDMzLDIuMjQ3bDI1LjQ3MSwxNy41NTJsMjUuNDcxLTE3LjU1MmMwLjg1Ni0wLjY0MiwxLjYwNS0xLjM5MSwyLjAzMy0yLjI0N2MwLjIxNCwwLjUzNSwwLjMyMSwwLjc0OSwwLjMyMSwwLjc0OUMxMjUuNjYsMzcxLjIzMywxMjMuNjI3LDM2OS4zMDcsMTIxLjI3MiwzNjkuMzA3eiIvPjxwb2x5Z29uIGZpbGw9IiNGN0Y3RjciIHBvaW50cz0iMTEwLjA0NCwzMzUuODQ0IDcyLjYzMywzMzUuODQ0IDcyLjYzMywzOTUuNzQxIDEyMC42ODUsMzk1Ljc0MSAxMjAuNjg1LDM0NC4yNTggIi8+PHJlY3QgeD0iNzcuMDcyIiB5PSIzNDAuODM5IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMzkuODEyIiBoZWlnaHQ9IjQ2Ljk4MyIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNTQ2LjY2MjMiIHkxPSIxMDk1LjY5NTQiIHgyPSI2MDAuMTczMyIgeTI9IjEwOTUuNjk1NCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfMV8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTEyMi42NjMsNDA3LjA4NWwtNDguOTA5LTMzLjYwNWMtMC44NTYtMC42NDItMS42MDUtMS4zOTEtMi4wMzMtMi4yNDdjLTAuMjE0LDAuNTM1LTAuMzIxLDEuMDctMC4zMjEsMS42MDV2MzEuNTcxYzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzAuODU2LDAsMS42MDUtMC4yMTQsMi4yNDctMC42NDJDMTI0LjE2Miw0MDcuOTQyLDEyMy40MTMsNDA3LjYyMSwxMjIuNjYzLDQwNy4wODV6Ii8+PHJlY3QgeD0iNzcuODIxIiB5PSIzOTQuMTg5IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzkuODEyIiBoZWlnaHQ9IjIuNjc2Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxMDkuMTQ0MyIgeTE9IjM0Mi4zOSIgeDI9IjEyMS43NjQyIiB5Mj0iMzQyLjM5Ij48c3RvcCAgb2Zmc2V0PSIwLjAxMDgiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz48c3RvcCAgb2Zmc2V0PSIwLjA2NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMDIwMjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE2NTQiIHN0eWxlPSJzdG9wLWNvbG9yOiM1NDU0NTQiLz48c3RvcCAgb2Zmc2V0PSIwLjI2OTMiIHN0eWxlPSJzdG9wLWNvbG9yOiM4MjgyODIiLz48c3RvcCAgb2Zmc2V0PSIwLjM3NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiNBOEE4QTgiLz48c3RvcCAgb2Zmc2V0PSIwLjQ4NTIiIHN0eWxlPSJzdG9wLWNvbG9yOiNDOEM4QzgiLz48c3RvcCAgb2Zmc2V0PSIwLjU5ODUiIHN0eWxlPSJzdG9wLWNvbG9yOiNFMEUwRTAiLz48c3RvcCAgb2Zmc2V0PSIwLjcxNzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNGMUYxRjEiLz48c3RvcCAgb2Zmc2V0PSIwLjg0NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGQ0ZDRkMiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzJfKSIgcG9pbnRzPSIxMDkuMTQ0LDMzNS4xOCAxMjEuNzY0LDM0NC45MTMgMTA5LjIzNiwzNDkuNjAxICIvPjxyZWN0IHg9Ijc4Ljg5MSIgeT0iMzk0LjkzOCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxnPjxnPjxyZWN0IHg9Ijc3LjI4NiIgeT0iMzQ3LjkwMiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjE5Ljc5OSIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzU3Ljg1NSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzYyLjc3OCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzY3LjcwMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzcyLjczMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjI4NiIgeT0iMzUyLjgyNSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjwvZz48cmVjdCB4PSI3Ni43NTEiIHk9IjM4Mi4yMDMiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48cmVjdCB4PSI3Ni43NTEiIHk9IjM4Ny4xMjYiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48cmVjdCB4PSI3Ni45NjUiIHk9IjM3Ny4xNzMiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48L2c+PHBhdGggZmlsbD0iI0YxNEQ1MSIgZD0iTTc0LjM5Niw0MDguMDQ5bDQ4LjkwOS0zMy42MDVjMC44NTYtMC42NDIsMS42MDUtMS4zOTEsMi4wMzMtMi4yNDdjMC4yMTQsMC41MzUsMC4zMjEsMS4wNywwLjMyMSwxLjYwNXYzMS40NjRjMCwyLjM1NC0xLjkyNiw0LjM4OC00LjM4OCw0LjM4OEg3NC4zOTZjLTAuODU2LDAtMS42MDUtMC4yMTQtMi4yNDctMC42NDJDNzIuODk4LDQwOC45MDUsNzMuNjQ3LDQwOC41ODQsNzQuMzk2LDQwOC4wNDl6Ii8+PHBhdGggZmlsbD0iI0ZBNTY1QSIgZD0iTTEyMC44NDQsNDA4LjI2M2wtNDguOTA5LTMzLjYwNWMtMC44NTYtMC42NDItMS42MDUtMS4zOTEtMi4wMzMtMi4yNDdjLTAuMjE0LDAuNTM1LTAuMzIxLDEuMDctMC4zMjEsMS42MDV2MzEuNTcxYzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzAuODU2LDAsMS42MDUtMC4yMTQsMi4yNDctMC42NDJDMTIyLjQ0OSw0MDkuMDEyLDEyMS41OTMsNDA4LjY5MSwxMjAuODQ0LDQwOC4yNjN6Ii8+PHBhdGggb3BhY2l0eT0iMC42IiBmaWxsPSIjRjE0RDUxIiBkPSJNMTIwLjg0NCw0MDguMjYzbC0yMy4zMzEtMTYuMDUzbC0yMy4zMzEsMTYuMDUzYy0wLjc0OSwwLjUzNS0xLjQ5OCwwLjg1Ni0yLjM1NCwwLjk2M2MwLjY0MiwwLjQyOCwxLjM5MSwwLjY0MiwyLjI0NywwLjY0MmgyMC43NjJoMjYuMjJjMC44NTYsMCwxLjYwNS0wLjIxNCwyLjI0Ny0wLjY0MkMxMjIuNDQ5LDQwOS4wMTIsMTIxLjU5Myw0MDguNjkxLDEyMC44NDQsNDA4LjI2M3oiLz48cG9seWdvbiBmaWxsPSIjRDhEOEQ4IiBwb2ludHM9IjExMC4yNjcsMzM1Ljg0NCAxMjAuNjg2LDM0NC4wNDkgMTEwLjI2NywzNDcuOTAyICIvPjxwYXRoIGZpbGw9IiNDNjMyM0QiIGQ9Ik0xMTEuMzQ2LDM5MS43NTVjLTAuMDU4LDAuMjM0LTAuMTE3LDAuNDY3LTAuMTE3LDAuNzAxdjE1LjE4N2MwLDEuMjg1LDEuMDUxLDIuMzk1LDIuMzk1LDIuMzk1aDI1LjU4NWMxLjI4NSwwLDIuMzk1LTEuMDUxLDIuMzk1LTIuMzk1di0xNS4xODdjMC0wLjIzNC0wLjA1OC0wLjQ2Ny0wLjExNy0wLjcwMUgxMTEuMzQ2eiIvPjxwYXRoIGZpbGw9IiNFQTQ3NTMiIGQ9Ik0xMzkuMjY3LDM4OC4wMTZoLTI1LjY0M2MtMS4yODUsMC0yLjM5NSwxLjA1MS0yLjM5NSwyLjM5NWMwLDAsMC4wNTgtMC4xMTcsMC4xNzUtMC40MDljMC4yMzQsMC40NjcsMC41ODQsMC44NzYsMS4xMSwxLjIyN2wxMy45MDIsOS41OGwxMy45MDItOS41OGMwLjQ2Ny0wLjM1LDAuODc2LTAuNzU5LDEuMTEtMS4yMjdjMC4xMTcsMC4yOTIsMC4xNzUsMC40MDksMC4xNzUsMC40MDlDMTQxLjY2MiwzODkuMDY4LDE0MC41NTIsMzg4LjAxNiwxMzkuMjY3LDM4OC4wMTZ6Ii8+PHBvbHlnb24gZmlsbD0iI0Y3RjdGNyIgcG9pbnRzPSIxMzMuMTM5LDM2OS43NTMgMTEyLjcyLDM2OS43NTMgMTEyLjcyLDQwMi40NDQgMTM4Ljk0Nyw0MDIuNDQ0IDEzOC45NDcsMzc0LjM0NSAiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzNzIuNDc5IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjI1LjY0MyIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfM18iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNTg3LjI4MSIgeTE9IjExMDQuOTk5IiB4Mj0iNjE2LjQ4NzIiIHkyPSIxMTA0Ljk5OSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfM18pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTE0MC4wMjcsNDA4LjYzNmwtMjYuNjk1LTE4LjM0MmMtMC40NjctMC4zNS0wLjg3Ni0wLjc1OS0xLjExLTEuMjI3Yy0wLjExNywwLjI5Mi0wLjE3NSwwLjU4NC0wLjE3NSwwLjg3NnYxNy4yMzJjMCwxLjI4NSwxLjA1MSwyLjM5NSwyLjM5NSwyLjM5NWgyNS41ODVjMC40NjcsMCwwLjg3Ni0wLjExNywxLjIyNy0wLjM1QzE0MC44NDQsNDA5LjEwMywxNDAuNDM1LDQwOC45MjgsMTQwLjAyNyw0MDguNjM2eiIvPjxyZWN0IHg9IjExNS41NTIiIHk9IjQwMS41OTciIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfNF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMTMyLjY0NzgiIHkxPSIzNzMuMzI1MiIgeDI9IjEzOS41MzU3IiB5Mj0iMzczLjMyNTIiPjxzdG9wICBvZmZzZXQ9IjAuMDEwOCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMCIvPjxzdG9wICBvZmZzZXQ9IjAuMDY1OCIgc3R5bGU9InN0b3AtY29sb3I6IzIwMjAyMCIvPjxzdG9wICBvZmZzZXQ9IjAuMTY1NCIgc3R5bGU9InN0b3AtY29sb3I6IzU0NTQ1NCIvPjxzdG9wICBvZmZzZXQ9IjAuMjY5MyIgc3R5bGU9InN0b3AtY29sb3I6IzgyODI4MiIvPjxzdG9wICBvZmZzZXQ9IjAuMzc1OCIgc3R5bGU9InN0b3AtY29sb3I6I0E4QThBOCIvPjxzdG9wICBvZmZzZXQ9IjAuNDg1MiIgc3R5bGU9InN0b3AtY29sb3I6I0M4QzhDOCIvPjxzdG9wICBvZmZzZXQ9IjAuNTk4NSIgc3R5bGU9InN0b3AtY29sb3I6I0UwRTBFMCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE3NCIgc3R5bGU9InN0b3AtY29sb3I6I0YxRjFGMSIvPjxzdG9wICBvZmZzZXQ9IjAuODQ1NyIgc3R5bGU9InN0b3AtY29sb3I6I0ZDRkNGQyIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkYiLz48L2xpbmVhckdyYWRpZW50Pjxwb2x5Z29uIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfNF8pIiBwb2ludHM9IjEzMi42NDgsMzY5LjM5IDEzOS41MzYsMzc0LjcwMiAxMzIuNjk4LDM3Ny4yNjEgIi8+PHJlY3QgeD0iMTE2LjEzNiIgeT0iNDAyLjAwNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PGc+PGc+PHJlY3QgeD0iMTE1LjI2IiB5PSIzNzYuMzM0IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTAuODA2IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODEuNzY2IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODQuNDUzIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODcuMTQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4xNDMiIHk9IjM4OS44ODUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4yNiIgeT0iMzc5LjAyMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PC9nPjxyZWN0IHg9IjExNC45NjgiIHk9IjM5NS4wNTUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNC45NjgiIHk9IjM5Ny43NDIiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4wODQiIHk9IjM5Mi4zMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PC9nPjxwYXRoIGZpbGw9IiNGMTRENTEiIGQ9Ik0xMTMuNjgyLDQwOS4xNjJsMjYuNjk1LTE4LjM0MmMwLjQ2Ny0wLjM1LDAuODc2LTAuNzU5LDEuMTEtMS4yMjdjMC4xMTcsMC4yOTIsMC4xNzUsMC41ODQsMC4xNzUsMC44NzZ2MTcuMTczYzAsMS4yODUtMS4wNTEsMi4zOTUtMi4zOTUsMi4zOTVoLTI1LjU4NWMtMC40NjcsMC0wLjg3Ni0wLjExNy0xLjIyNy0wLjM1QzExMi44NjUsNDA5LjYyOSwxMTMuMjc0LDQwOS40NTQsMTEzLjY4Miw0MDkuMTYyeiIvPjxwYXRoIGZpbGw9IiNGQTU2NUEiIGQ9Ik0xMzkuMDM0LDQwOS4yNzhsLTI2LjY5NS0xOC4zNDJjLTAuNDY3LTAuMzUtMC44NzYtMC43NTktMS4xMS0xLjIyN2MtMC4xMTcsMC4yOTItMC4xNzUsMC41ODQtMC4xNzUsMC44NzZ2MTcuMjMyYzAsMS4yODUsMS4wNTEsMi4zOTUsMi4zOTUsMi4zOTVoMjUuNTg1YzAuNDY3LDAsMC44NzYtMC4xMTcsMS4yMjctMC4zNUMxMzkuOTEsNDA5LjY4NywxMzkuNDQyLDQwOS41MTIsMTM5LjAzNCw0MDkuMjc4eiIvPjxwYXRoIG9wYWNpdHk9IjAuNiIgZmlsbD0iI0YxNEQ1MSIgZD0iTTEzOS4wMzQsNDA5LjI3OGwtMTIuNzM0LTguNzYybC0xMi43MzQsOC43NjJjLTAuNDA5LDAuMjkyLTAuODE4LDAuNDY3LTEuMjg1LDAuNTI2YzAuMzUsMC4yMzQsMC43NTksMC4zNSwxLjIyNywwLjM1aDExLjMzMmgxNC4zMTFjMC40NjcsMCwwLjg3Ni0wLjExNywxLjIyNy0wLjM1QzEzOS45MSw0MDkuNjg3LDEzOS40NDIsNDA5LjUxMiwxMzkuMDM0LDQwOS4yNzh6Ii8+PHBvbHlnb24gZmlsbD0iI0Q4RDhEOCIgcG9pbnRzPSIxMzMuMjYsMzY5Ljc1MyAxMzguOTQ3LDM3NC4yMzEgMTMzLjI2LDM3Ni4zMzQgIi8+PC9nPjxnPjxjaXJjbGUgZmlsbD0iIzcyOUNGQSIgY3g9IjE0My45ODQiIGN5PSIzNDMuMTIxIiByPSIxNi44ODUiLz48Y2lyY2xlIGZpbGw9IiNGOURCMDIiIGN4PSIxNDMuOTg0IiBjeT0iMzQzLjEyMSIgcj0iNy40NTUiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTQzLjYwNCwzMzQuNjk0YzAuMjU0LDAsMC41MDcsMCwwLjc2MSwwYy0wLjEyNy0xLjAxNy0wLjI1NC0yLjAzMy0wLjM4LTMuMDVDMTQzLjg1OCwzMzIuNjYxLDE0My43MzEsMzMzLjY3OCwxNDMuNjA0LDMzNC42OTR6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE0My42MDQsMzUxLjNjMC4yNTQsMCwwLjUwNywwLDAuNzYxLDBjLTAuMTI3LDEuMDE3LTAuMjU0LDIuMDMzLTAuMzgsMy4wNUMxNDMuODU4LDM1My4zMzQsMTQzLjczMSwzNTIuMzE3LDE0My42MDQsMzUxLjN6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE1MS45MDcsMzQzLjEzMWMwLDAuMjU0LDAsMC41MDcsMCwwLjc2MWMxLjAxNy0wLjEyNywyLjAzMy0wLjI1NCwzLjA1LTAuMzhDMTUzLjk0LDM0My4zODUsMTUyLjkyNCwzNDMuMjU4LDE1MS45MDcsMzQzLjEzMXoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTM1LjMwMSwzNDMuMTMxYzAsMC4yNTQsMCwwLjUwNywwLDAuNzYxYy0xLjAxNy0wLjEyNy0yLjAzMy0wLjI1NC0zLjA1LTAuMzhDMTMzLjI2OCwzNDMuMzg1LDEzNC4yODQsMzQzLjI1OCwxMzUuMzAxLDM0My4xMzF6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE0OS41ODcsMzM2Ljk5MWMwLjE3OSwwLjE3OSwwLjM1OSwwLjM1OSwwLjUzOCwwLjUzOGMwLjYyOS0wLjgwOSwxLjI1OS0xLjYxNywxLjg4OC0yLjQyNkMxNTEuMjA0LDMzNS43MzMsMTUwLjM5NSwzMzYuMzYyLDE0OS41ODcsMzM2Ljk5MXoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTM3Ljg0NCwzNDguNzMzYzAuMTc5LDAuMTc5LDAuMzU5LDAuMzU5LDAuNTM4LDAuNTM4Yy0wLjgwOSwwLjYyOS0xLjYxNywxLjI1OS0yLjQyNiwxLjg4OEMxMzYuNTg2LDM1MC4zNSwxMzcuMjE1LDM0OS41NDIsMTM3Ljg0NCwzNDguNzMzeiIvPjxwYXRoIGZpbGw9IiNGOURCMDIiIGQ9Ik0xNTAuNTA1LDM0OC43MzNjLTAuMTc5LDAuMTc5LTAuMzU5LDAuMzU5LTAuNTM4LDAuNTM4YzAuODA5LDAuNjI5LDEuNjE3LDEuMjU5LDIuNDI2LDEuODg4QzE1MS43NjMsMzUwLjM1LDE1MS4xMzQsMzQ5LjU0MiwxNTAuNTA1LDM0OC43MzN6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTEzOC43NjMsMzM2Ljk5MWMtMC4xNzksMC4xNzktMC4zNTksMC4zNTktMC41MzgsMC41MzhjLTAuNjI5LTAuODA5LTEuMjU5LTEuNjE3LTEuODg4LTIuNDI2QzEzNy4xNDYsMzM1LjczMywxMzcuOTU0LDMzNi4zNjIsMTM4Ljc2MywzMzYuOTkxeiIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzVfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjI3Ljc4MDUiIHkxPSIzNzMuOTQ0MiIgeDI9IjEyOC4yOTI1IiB5Mj0iMzczLjk0NDIiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAuMiIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuNCIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iMC4wNiIgZmlsbD0idXJsKCNTVkdJRF81XykiIGQ9Ik02My43NTEsMzA1LjQyNUM2Ni4xLDMzNC45ODYsOTUuMjYyLDMzMi4xMDcsMTEyLjUsMzYxLjVjNi45NDgsMTEuODQ3LDI4LjU1NCw2OS45MDIsNS4yNTgsNzcuNTRDNDAuODYxLDQ2NC4yNTItMTAuMTg5LDM0My4yMTMsNjMuNzUxLDMwNS40MjV6Ii8+PGc+PHBvbHlnb24gb3BhY2l0eT0iMC4wNiIgZmlsbD0iIzAyMDIwMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTM3LjQ3NiwxMTYuNzMzIDEyNS4zNTEsOTAuNzAzIDk5LjE1OSw3OC41NzggMTU2LjU1NCw1OS41ICIvPjxwb2x5Z29uIGZpbGw9IiM0Mjg1RjQiIHBvaW50cz0iMTM3LjQ3NiwxMTMuMzM4IDEyNS45OTcsODguNzYzIDEwMS40MjIsNzcuNDQ2IDE1NS40MjIsNTkuNSAiLz48L2c+PGc+PGNpcmNsZSBmaWxsPSIjRjEyODIxIiBjeD0iMTY1LjMxNyIgY3k9IjE2Ni4zNDgiIHI9IjI2LjYzNiIvPjxnPjxyZWN0IHg9IjE2My42MzgiIHk9IjE1NS41MjMiIGZpbGw9IiNGOUY5RjkiIHdpZHRoPSIyLjM2NiIgaGVpZ2h0PSIyMi42NSIvPjxyZWN0IHg9IjE1My40OTIiIHk9IjE2NS42NjUiIGZpbGw9IiNGOUY5RjkiIHdpZHRoPSIyMi42NSIgaGVpZ2h0PSIyLjM2NiIvPjwvZz48L2c+PGc+PGc+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1MS4wNzQsMzIyLjYzM2gwLjU5NWMwLjI3MywwLDAuNTEzLTAuMDM3LDAuNzE5LTAuMTFjMC4yMDYtMC4wNzMsMC4zOC0wLjE3MiwwLjUxOS0wLjI5N2MwLjE0LTAuMTI1LDAuMjQ1LTAuMjcxLDAuMzE1LTAuNDM5czAuMTA1LTAuMzQ1LDAuMTA1LTAuNTM0YzAtMC4yMTUtMC4wMy0wLjQxLTAuMDktMC41ODhjLTAuMDYtMC4xNzctMC4xNTEtMC4zMy0wLjI3My0wLjQ1OHMtMC4yNzYtMC4yMjgtMC40NjMtMC4zYy0wLjE4Ny0wLjA3Mi0wLjQwOS0wLjEwNy0wLjY2Ni0wLjEwN2MtMC4yMjQsMC0wLjQzMSwwLjAzNC0wLjYxOSwwLjEwMmMtMC4xODksMC4wNjgtMC4zNTMsMC4xNjYtMC40OTMsMC4yOTNjLTAuMTQsMC4xMjctMC4yNDksMC4yOC0wLjMyNywwLjQ2MWMtMC4wNzgsMC4xOC0wLjExNywwLjM4My0wLjExNywwLjYwN2gtMC41ODVjMC0wLjI4NiwwLjA1NC0wLjU0OSwwLjE2My0wLjc5YzAuMTA5LTAuMjQxLDAuMjU4LTAuNDQ4LDAuNDQ5LTAuNjIyYzAuMTktMC4xNzQsMC40MTYtMC4zMDksMC42NzgtMC40MDVjMC4yNjItMC4wOTYsMC41NDUtMC4xNDQsMC44NTEtMC4xNDRjMC4zMTIsMCwwLjU5NywwLjA0NCwwLjg1MywwLjEzMnMwLjQ3NSwwLjIxNSwwLjY1NiwwLjM4M2MwLjE4LDAuMTY3LDAuMzIsMC4zNzMsMC40MTksMC42MTdjMC4wOTksMC4yNDQsMC4xNDksMC41MjMsMC4xNDksMC44MzljMCwwLjE1OS0wLjAyNiwwLjMxOC0wLjA3OCwwLjQ3NWMtMC4wNTIsMC4xNTgtMC4xMjgsMC4zMDYtMC4yMjksMC40NDZzLTAuMjI4LDAuMjY3LTAuMzgsMC4zODNjLTAuMTUzLDAuMTE1LTAuMzI4LDAuMjExLTAuNTI3LDAuMjg1YzAuMjM0LDAuMDY1LDAuNDM2LDAuMTU0LDAuNjA1LDAuMjY2YzAuMTY5LDAuMTEyLDAuMzA4LDAuMjQzLDAuNDE3LDAuMzkzYzAuMTA5LDAuMTUsMC4xOSwwLjMxNCwwLjI0NCwwLjQ5M2MwLjA1NCwwLjE3OSwwLjA4LDAuMzY2LDAuMDgsMC41NjFjMCwwLjMyMi0wLjA1NSwwLjYwOC0wLjE2NiwwLjg1OGMtMC4xMTEsMC4yNS0wLjI2MywwLjQ2Mi0wLjQ1OCwwLjYzNmMtMC4xOTUsMC4xNzQtMC40MjYsMC4zMDYtMC42OTIsMC4zOTVjLTAuMjY3LDAuMDg5LTAuNTU2LDAuMTM0LTAuODY4LDAuMTM0Yy0wLjI4OSwwLTAuNTctMC4wNDItMC44NDEtMC4xMjdzLTAuNTE0LTAuMjExLTAuNzI3LTAuMzc4Yy0wLjIxMy0wLjE2Ny0wLjM4NC0wLjM3OC0wLjUxMi0wLjYzMmMtMC4xMjgtMC4yNTQtMC4xOTMtMC41NDktMC4xOTMtMC44ODhoMC41ODVjMCwwLjIyNCwwLjA0MSwwLjQzMSwwLjEyNCwwLjYxOXMwLjE5OSwwLjM1LDAuMzQ5LDAuNDg1czAuMzI4LDAuMjQsMC41MzQsMC4zMTVjMC4yMDYsMC4wNzUsMC40MzMsMC4xMTIsMC42OCwwLjExMmMwLjUwNCwwLDAuODk2LTAuMTI5LDEuMTc4LTAuMzg4czAuNDIyLTAuNjMzLDAuNDIyLTEuMTI0YzAtMC4yNTctMC4wNDMtMC40NzgtMC4xMjktMC42NjNjLTAuMDg2LTAuMTg1LTAuMjA4LTAuMzM3LTAuMzY2LTAuNDU2Yy0wLjE1OC0wLjExOS0wLjM0Ni0wLjIwNi0wLjU2Ni0wLjI2MXMtMC40NjItMC4wODMtMC43MjktMC4wODNoLTAuNTk1VjMyMi42MzN6Ii8+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1OS43NTksMzI2LjUwMWgtNC40NDh2LTAuNDQ5bDIuMzI2LTIuNjM4YzAuMjE4LTAuMjQ3LDAuNDAyLTAuNDcsMC41NTMtMC42NjhjMC4xNTEtMC4xOTgsMC4yNzMtMC4zODMsMC4zNjYtMC41NTRjMC4wOTMtMC4xNzEsMC4xNTktMC4zMzIsMC4yLTAuNDgzYzAuMDQxLTAuMTUxLDAuMDYxLTAuMzAyLDAuMDYxLTAuNDUxYzAtMC4yMTUtMC4wMzItMC40MS0wLjA5NS0wLjU4OGMtMC4wNjMtMC4xNzctMC4xNTgtMC4zMzEtMC4yODMtMC40NjFzLTAuMjgtMC4yMzEtMC40NjYtMC4zMDJjLTAuMTg1LTAuMDcyLTAuMzk4LTAuMTA3LTAuNjM5LTAuMTA3Yy0wLjI0NywwLTAuNDY5LDAuMDQxLTAuNjY2LDAuMTI0Yy0wLjE5NywwLjA4My0wLjM2NCwwLjE5OC0wLjUwMiwwLjM0NHMtMC4yNDUsMC4zMi0wLjMxOSwwLjUyMmMtMC4wNzUsMC4yMDItMC4xMTIsMC40MjEtMC4xMTIsMC42NThoLTAuNThjMC0wLjI5MywwLjA1LTAuNTY5LDAuMTQ5LTAuODI5YzAuMDk5LTAuMjYsMC4yNDMtMC40ODgsMC40MzItMC42ODNjMC4xODktMC4xOTUsMC40MTctMC4zNDksMC42ODUtMC40NjNjMC4yNjgtMC4xMTQsMC41NzMtMC4xNzEsMC45MTQtMC4xNzFjMC4zMTksMCwwLjYwNiwwLjA0MywwLjg2MywwLjEyOXMwLjQ3NSwwLjIxMSwwLjY1MywwLjM3NmMwLjE3OSwwLjE2NCwwLjMxNiwwLjM2NCwwLjQxMiwwLjZjMC4wOTYsMC4yMzYsMC4xNDQsMC41MDMsMC4xNDQsMC44MDJjMCwwLjIxNS0wLjAzOSwwLjQzMS0wLjExNywwLjY0OWMtMC4wNzgsMC4yMTgtMC4xODIsMC40MzQtMC4zMTIsMC42NDljLTAuMTMsMC4yMTUtMC4yOCwwLjQyOC0wLjQ0OSwwLjYzOWMtMC4xNjksMC4yMTEtMC4zNDMsMC40MTktMC41MjIsMC42MjRsLTEuOTgsMi4yMzhoMy43MzFWMzI2LjUwMXoiLz48L2c+PGc+PGc+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1OS44OCwzMjAuMDhjMC0wLjE3MiwwLjAyOC0wLjMzMSwwLjA4NS0wLjQ3NmMwLjA1Ny0wLjE0NiwwLjEzNy0wLjI3MSwwLjI0LTAuMzc3czAuMjI4LTAuMTg5LDAuMzc0LTAuMjQ4YzAuMTQ1LTAuMDYsMC4zMDgtMC4wOSwwLjQ4Ny0wLjA5YzAuMTgxLDAsMC4zNDYsMC4wMywwLjQ5MywwLjA5YzAuMTQ2LDAuMDU5LDAuMjcxLDAuMTQyLDAuMzc1LDAuMjQ4YzAuMTAzLDAuMTA2LDAuMTgzLDAuMjMyLDAuMjM4LDAuMzc3YzAuMDU2LDAuMTQ1LDAuMDg0LDAuMzA1LDAuMDg0LDAuNDc2djAuMDcyYzAsMC4xNzItMC4wMjgsMC4zMzEtMC4wODQsMC40NzdjLTAuMDU1LDAuMTQ1LTAuMTM1LDAuMjcxLTAuMjM4LDAuMzc3Yy0wLjEwMywwLjEwNi0wLjIyOCwwLjE4OC0wLjM3MywwLjI0N2MtMC4xNDYsMC4wNTktMC4zMSwwLjA4OS0wLjQ4OSwwLjA4OWMtMC4xOCwwLTAuMzQ0LTAuMDMtMC40ODktMC4wODljLTAuMTQ1LTAuMDU5LTAuMjcxLTAuMTQxLTAuMzc1LTAuMjQ3Yy0wLjEwNC0wLjEwNi0wLjE4NS0wLjIzMi0wLjI0MS0wLjM3N2MtMC4wNTYtMC4xNDYtMC4wODUtMC4zMDUtMC4wODUtMC40NzdWMzIwLjA4eiBNMTYwLjE3NSwzMjAuMTUyYzAsMC4xMywwLjAyLDAuMjU0LDAuMDU5LDAuMzcxYzAuMDM5LDAuMTE4LDAuMDk3LDAuMjIsMC4xNzEsMC4zMDljMC4wNzYsMC4wODgsMC4xNjksMC4xNTksMC4yOCwwLjIxMWMwLjExMSwwLjA1MywwLjIzOSwwLjA3OSwwLjM4NCwwLjA3OWMwLjE0NCwwLDAuMjcxLTAuMDI2LDAuMzgyLTAuMDc5YzAuMTExLTAuMDUyLDAuMjAzLTAuMTIzLDAuMjc5LTAuMjExYzAuMDc2LTAuMDg5LDAuMTMyLTAuMTkxLDAuMTcyLTAuMzA5YzAuMDM5LTAuMTE3LDAuMDU5LTAuMjQxLDAuMDU5LTAuMzcxdi0wLjA3MmMwLTAuMTI3LTAuMDItMC4yNDktMC4wNTktMC4zNjZjLTAuMDQtMC4xMTgtMC4wOTctMC4yMi0wLjE3Mi0wLjMxYy0wLjA3Ni0wLjA4OS0wLjE2OS0wLjE2LTAuMjgxLTAuMjEzYy0wLjExMi0wLjA1NC0wLjI0MS0wLjA4LTAuMzg0LTAuMDhjLTAuMTQzLDAtMC4yNjksMC4wMjYtMC4zOCwwLjA4Yy0wLjExMSwwLjA1My0wLjIwNCwwLjEyNC0wLjI4LDAuMjEzYy0wLjA3NSwwLjA4OS0wLjEzMiwwLjE5Mi0wLjE3MSwwLjMxYy0wLjA0LDAuMTE3LTAuMDU5LDAuMjM5LTAuMDU5LDAuMzY2VjMyMC4xNTJ6Ii8+PC9nPjwvZz48Zz48cGF0aCBmaWxsPSIjQzZDNkM2IiBkPSJNMTY1LjExOCwzMjYuMjk4YzAuMTY0LDAsMC4zMjItMC4wMjQsMC40NzMtMC4wNzFjMC4xNTEtMC4wNDcsMC4yODYtMC4xMTcsMC40MDQtMC4yMXMwLjIxNS0wLjIwNiwwLjI5MS0wLjM0MWMwLjA3Ni0wLjEzNSwwLjEyLTAuMjkyLDAuMTMyLTAuNDcxaDAuNDk3Yy0wLjAxMiwwLjIyMi0wLjA2NywwLjQyNi0wLjE2NiwwLjYxM2MtMC4xLDAuMTg3LTAuMjMsMC4zNDgtMC4zOTMsMC40ODRjLTAuMTYyLDAuMTM1LTAuMzUsMC4yNDEtMC41NjMsMC4zMTdjLTAuMjEzLDAuMDc2LTAuNDM4LDAuMTE1LTAuNjczLDAuMTE1Yy0wLjMyOCwwLTAuNjE2LTAuMDYtMC44NjMtMC4xNzljLTAuMjQ4LTAuMTE5LTAuNDU1LTAuMjg1LTAuNjI0LTAuNDk1Yy0wLjE2OC0wLjIxLTAuMjk1LTAuNDU3LTAuMzgtMC43NGMtMC4wODUtMC4yODQtMC4xMjgtMC41OS0wLjEyOC0wLjkxN3YtMC4xODJjMC0wLjMyOCwwLjA0Mi0wLjYzNCwwLjEyOC0wLjkxN2MwLjA4NS0wLjI4MywwLjIxMS0wLjUyOSwwLjM3Ny0wLjczOGMwLjE2Ny0wLjIwOSwwLjM3NS0wLjM3NCwwLjYyNC0wLjQ5NGMwLjI0OS0wLjEyMSwwLjUzNi0wLjE4MiwwLjg2MS0wLjE4MmMwLjI1MSwwLDAuNDgzLDAuMDM5LDAuNjk3LDAuMTE3YzAuMjE0LDAuMDc4LDAuNDAxLDAuMTg5LDAuNTYxLDAuMzMyYzAuMTYsMC4xNDQsMC4yODgsMC4zMTksMC4zODIsMC41MjVjMC4wOTUsMC4yMDYsMC4xNDgsMC40MzUsMC4xNiwwLjY4OGgtMC40OTdjLTAuMDEyLTAuMTktMC4wNTItMC4zNTktMC4xMjMtMC41MDljLTAuMDcxLTAuMTQ5LTAuMTY0LTAuMjc4LTAuMjgxLTAuMzg0Yy0wLjExNi0wLjEwNi0wLjI1Mi0wLjE4OC0wLjQwNi0wLjI0NGMtMC4xNTQtMC4wNTYtMC4zMTktMC4wODQtMC40OTUtMC4wODRjLTAuMjY3LDAtMC40OTQsMC4wNTItMC42OCwwLjE1NWMtMC4xODYsMC4xMDQtMC4zMzcsMC4yNDMtMC40NTUsMC40MTljLTAuMTE5LDAuMTc1LTAuMjA0LDAuMzc3LTAuMjU3LDAuNjA0Yy0wLjA1MywwLjIyNy0wLjA4LDAuNDY1LTAuMDgsMC43MTJ2MC4xODJjMCwwLjI1LDAuMDI2LDAuNDksMC4wOCwwLjcxOGMwLjA1MywwLjIyOSwwLjEzOCwwLjQzMSwwLjI1NCwwLjYwNWMwLjExNywwLjE3NCwwLjI2OSwwLjMxMywwLjQ1OCwwLjQxN0MxNjQuNjIzLDMyNi4yNDcsMTY0Ljg1MSwzMjYuMjk4LDE2NS4xMTgsMzI2LjI5OHoiLz48L2c+PC9nPjwvc3ZnPg==);<?php } ?>
background-size: cover;
background-repeat: no-repeat;
background-position: center; 
}
#wpmchimpa-main #wpmchimpa-newsletterform{
display: inline-block;
width: 620px;
text-align: center;
position: relative;
padding-left:220px;

<?php if($scroll){?>
/*long form*/
height: 100%;
<?php } ?>
}
#wpmchimpa-main #wpmchimpa{
<?php if($scroll){?>
/*long form*/
height: 100%;
<?php } ?>	
}
#wpmchimpa-main .wpmchimpa_scroll{
padding-top: 10px;
<?php if($scroll){?>
/*long form*/
max-height: calc(100% - 86px);
overflow-y: auto;
<?php } ?>
}
#wpmchimpa h3{
width: 100%;
position: relative;
line-height: 86px;
color: #fff;
font-size: 30px;
background: #0188cc;
<?php 
    if(isset($theme["lite_heading_f"])){
      echo 'font-family:'.$theme["lite_heading_f"].';';
    }
    if(isset($theme["lite_heading_fs"])){
        echo 'font-size:'.$theme["lite_heading_fs"].'px;';
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
    if(isset($theme["lite_hbg_c"])){
        echo 'background-color:'.$theme["lite_hbg_c"].';';
    }
?>
}

#wpmchimpa h3::before{
content:'';
background:<?php echo $this->getIcon('opt1',30,(isset($theme["lite_hi_c"]))?$theme["lite_hi_c"]:'#fff');?> no-repeat center;
position: absolute;
top: 0;
left: 0;
width: 65px;
height: 86px;
}
#wpmchimpa .wpmchimpa_para{
  margin: 32px 30px 11px;
}
#wpmchimpa .wpmchimpa_para,#wpmchimpa .wpmchimpa_para * {
font-size: 12px;
color: #000;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["lite_msg_f"])){
  echo 'font-family:'.$theme["lite_msg_f"].';';
}if(isset($theme["lite_msg_fs"])){
    echo 'font-size:'.$theme["lite_msg_fs"].'px;';
}?>
}
#wpmchimpa form{margin:0 50px;}

#wpmchimpa  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
text-align: left;
<?php 
  if(isset($theme["lite_tbox_w"])){
      echo 'width:'.$theme["lite_tbox_w"].'px;';
  }
?>
}
#wpmchimpa .inputicon{
display: none;
}
#wpmchimpa .wpmc-ficon .inputicon {
display: block;
width: 40px;
height: 40px;
position: absolute;
top: 0;
right: 0;
pointer-events: none;
<?php 
if(isset($theme["lite_tbox_h"])){
  echo 'width:'.$theme["lite_tbox_h"].'px;';
  echo 'height:'.$theme["lite_tbox_h"].'px;';
}
?>
}
#wpmchimpa .wpmc-ficon input[type="text"],
#wpmchimpa .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-right: 40px;
  <?php 
if(isset($theme["lite_tbox_h"])){
  echo 'padding-left:'.$theme["lite_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#000');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a06';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c04';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '#wpmchimpa .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,25,$col).' no-repeat center}';
}
?>
#wpmchimpa .wpmchimpa-field select,
#wpmchimpa input[type="text"]{
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


#wpmchimpa .wpmchimpa-field.wpmchimpa-drop:before{
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
#wpmchimpa .wpmchimpa-field select:focus{
	border-color:#0188cc;
	  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'border-color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}
#wpmchimpa input[type="text"] ~ .inputlabel{
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

#wpmchimpa input:focus ~ .inputlabel, #wpmchimpa input:valid ~ .inputlabel {
  top:-7px;
  font-size:12px;
  color:#0188cc;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}

#wpmchimpa .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%; 
<?php 
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
?>
}
#wpmchimpa .wpmchimpa-field .bar:before, #wpmchimpa .wpmchimpa-field .bar:after   {
  content:'';
  height:1px; 
  width:0;
  top:-1px; 
  position:absolute;
  background:#0188cc; 
  -webkit-transition:0.2s ease all;
  transition:0.2s ease all; 
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?>
}
#wpmchimpa .wpmchimpa-field .bar:before {
  left:50%;
}
#wpmchimpa .wpmchimpa-field .bar:after {
  right:50%; 
}
#wpmchimpa .wpmchimpa-field input:focus ~ .bar:before, #wpmchimpa .wpmchimpa-field input:focus ~ .bar:after {
  width:50%;
}
#wpmchimpa .wpmchimpa-field .highlighter {
  position:absolute;
  pointer-events:none;
  height:60%; 
  width:100%; 
  top:14%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["lite_tbox_w"])){
        echo 'width:'.$theme["lite_tbox_w"].'px;';
    }
?>
}
#wpmchimpa .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlighterla 0.3s ease;
  animation:inputHighlighterla 0.3s ease;
}
@-webkit-keyframes inputHighlighterla {
  from { background:#0188cc;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighterla {
  from { background:#0188cc;
  <?php
  if(isset($theme["lite_tbox_fc"])){
      echo 'background-color:'.$theme["lite_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}

#wpmchimpa select.wpmcerror,
#wpmchimpa input[type="text"].wpmcerror{
  border-color: red;
}
#wpmchimpa .wpmchimpa-check *,
#wpmchimpa .wpmchimpa-radio *{
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
#wpmchimpa .wpmchimpa-item{
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
#wpmchimpa .wpmchimpa-item input {
  display: none;
}
#wpmchimpa .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-right: 10px;
  line-height: 20px;
-webkit-backface-visibility:hidden;
}

#wpmchimpa .wpmchimpa-item span:before,
#wpmchimpa .wpmchimpa-item span:after {
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
border:1px solid #0188cc;
border-radius: 1px;
opacity: 1;
  <?php
    if(isset($theme["lite_check_borc"])){
        echo 'border:1px solid '.$theme["lite_check_borc"].';';
 }   if(isset($theme["lite_check_c"])){
        echo 'background-color:'.$theme["lite_check_c"].';';
 }?>
}
#wpmchimpa input[type='checkbox']:checked + span:before {
opacity: 0;
-webkit-transform:rotate(-43deg);
transform:rotate(-43deg);
}
#wpmchimpa input[type='checkbox'] + span:after {
-webkit-transform:rotate(43deg);
transform:rotate(43deg);
opacity: 0;
width: 20px;
height: 15px;
background: no-repeat center;
background-image: <?php
        $tfi='ch1';
        if(isset($theme["lite_check_mark"])){$tfi=$theme["lite_check_mark"];}
        $tfc='#0188cc';
        if(isset($theme["lite_check_ic"])){$tfc=$theme["lite_check_ic"];}
        echo $this->getIcon($tfi,20,$tfc);?>;
}
#wpmchimpa input[type='checkbox']:checked + span:after {
-webkit-transform:rotate(0);
transform:rotate(0);
opacity: 1;
}
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:before ,
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:after {
border-radius: 50%;
top: 4px;
}
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:after {
-webkit-transform-origin: center;
transform-origin: center;
border:1px solid transparent;
}
#wpmchimpa .wpmchimpa-item input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
-webkit-transform:scale(0.6);
transform:scale(0.6);
}
#wpmchimpa .wpmcinfierr{
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

#wpmchimpa .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
width: 100%;
color: #fff;
font-size: 20px;
border: 1px solid #0284C5;
background-color: #0188cc;
height: 45px;
line-height: 45px;
padding: 0 20px;
text-align: left;
cursor: pointer;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
position: relative;
overflow: hidden;
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

#wpmchimpa .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['lite_button'])) echo $theme['lite_button'];else echo 'Subscribe';?>';
}
#wpmchimpa .wpmchimpa-subs-button:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
<?php if(isset($theme["lite_button_fch"])){
    echo 'color:'.$theme["lite_button_fch"].';';
}    
if(isset($theme["lite_button_bch"])){
    echo 'background-color:'.$theme["lite_button_bch"].';';
}?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon:before{
padding-right: 45px;
  <?php 
  if(isset($theme["lite_button_w"])){
      echo 'padding-left:'.$theme["lite_button_h"].'px;';
  }
  ?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
right: 0;
pointer-events: none;
  <?php 
  if(isset($theme["lite_button_h"])){
      echo 'width:'.$theme["lite_button_h"].'px;';
      echo 'height:'.$theme["lite_button_h"].'px;';
  }
  $col = ((isset($theme["lite_bg_col"]))? $theme["lite_bg_col"] : '#fff');
  $bi='b03';
  if(isset($theme["lite_button_i"])){
	if($theme["lite_button_i"] == 'inone')$bi='';
	else if($theme["lite_button_i"] != 'idef')$bi=$theme["lite_button_i"];
  }
  echo 'background: '.$this->getIcon($bi,25,$col).' no-repeat center;';
  ?>
}
#wpmchimpa-main .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
#wpmchimpa-main .wpmchimpa-signal {
display: none;
}
.wpmchimpa-overlay-bg.signalshow #wpmchimpa-main .wpmchimpa-signal {
  display: inline-block;
}

#wpmchimpa-main .wpmchimpa-feedback{
  margin: -40px 0 22px;
  text-align: center;
  position: relative;
  font-size: 12px;
height: 12px;
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
margin: 2px auto;
}
#wpmchimpa-main .wpmchimpa-tag,
#wpmchimpa-main .wpmchimpa-tag *{
color:#000;
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
  $tfc='#000';
  if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 7px auto 17px;
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '<?php if(isset($theme['lite_soc_head'])) echo $theme['lite_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 45px;
display: block;
float:left;
margin-right: 20px;
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
width:45px;
height: 45px;
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
-webkit-transition:background 0.3s,box-shadow 0.3s;
transition:background 0.3s,box-shadow 0.3s;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
margin-right:5px; 
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
width:45px;
height: 45px;
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
background-image:<?php echo $this->getIcon('fb1',16,'#2d609b');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $this->getIcon('fb1',16,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',16,'#eb4026');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $this->getIcon('gp1',16,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',16,'#00BCF2');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $this->getIcon('ms1',16,'#fff');?>
}

#wpmchimpa-main.woleft .wpmchimpa-leftpane{
display:none;
}
#wpmchimpa-main.woleft{min-width: 0}
#wpmchimpa-main.woleft #wpmchimpa-newsletterform{padding-left:0;width:400px;}
.wpmchimpa-overlay-bg #wpmchimpa-main.woleft{min-height:350px;}
#wpmchimpa-main.wosoc .wpmchimpa-social {
display: none;
}

#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 20px;
right: 10px;
width: 40px;
text-align: center;
cursor: pointer;
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 46px;
line-height: 40px;
font-weight: 100;
color: #fff;
opacity: 0.4;
<?php if(isset($theme["lite_close_col"])){
echo 'color:'.$theme["lite_close_col"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
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
and (max-width : 1024px){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    -webkit-transform:translate(-50%, -50%) scale(0.8);
    -ms-transform:translate(-50%, -50%) scale(0.8);
    transform:translate(-50%, -50%) scale(0.8);
  }
}
@media only screen 
and (max-width : 768px){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    -webkit-transform:translate(-50%, -50%) scale(0.7);
    -ms-transform:translate(-50%, -50%) scale(0.7);
    transform:translate(-50%, -50%) scale(0.7);
  }
}
@media only screen 
and (max-width : 480px)
and (orientation : landscape){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
-webkit-transform:translate(-50%, -50%) scale(0.3);
    -ms-transform:translate(-50%, -50%) scale(0.3);
    transform:translate(-50%, -50%) scale(0.3);
  }
}
@media only screen 
and (max-width : 480px)
and (orientation : portrait){
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    -webkit-transform:translate(-50%, -50%) scale(0.4);
    -ms-transform:translate(-50%, -50%) scale(0.4);
    transform:translate(-50%, -50%) scale(0.4);
  }
}

<?php $this->liteanimate();?>
</style>

<div class="wpmchimpa-reset wpmchimpa-overlay-bg wpmchimpselector chimpmatecss">
<div class="wpmchimpa-maina <?php echo (isset($wpmchimpa['lite_behave_anim'])?$wpmchimpa['lite_behave_anim'].' animated':'');?>" <?php echo (isset($wpmchimpa['lite_behave_animo'])?'wpmcexitanim':'');?>>
  <div class="wpmchimpa-mainc">
    <div id="wpmchimpa-main" class="<?php if(isset($theme['lite_disimg']))echo ' woleft';
  if(isset($theme['lite_dissoc'])) echo ' wosoc';  ?>">
        <div class="wpmchimpa-leftpane adjh">
        </div>
    <div id="wpmchimpa-newsletterform" class="wpmchimpa-wrapper">
      <div class="wpmchimpa" id="wpmchimpa">
          <?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
          <div class="wpmchimpa_scroll">
<?php if(isset($theme['lite_msg'])) echo '<div class="wpmchimpa_para">'.$theme['lite_msg'].'</div>';?>
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
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
<div class="wpmchimpa-subs-button wpmchimpa-matbut<?php echo (!isset($theme['lite_button_i']) || (isset($theme['lite_button_i']) && $theme['lite_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>

              <?php if(isset($theme['lite_tag_en'])){
              if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
            <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["lite_spinner_t"])?$theme["lite_spinner_t"]:'3','wpmchimpa-main',isset($theme["lite_spinner_c"])?$theme["lite_spinner_c"]:'#0188cc');?></div></div>
            </form>

          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
          </div>
      </div>
    </div>
        <div class="wpmchimpa-close-button"></div>
  </div>
</div>
</div>
</div>