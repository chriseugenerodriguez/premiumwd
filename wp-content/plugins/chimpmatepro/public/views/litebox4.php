<?php 
$theme = $wpmchimpa['theme']['l4'];
$theme['lite_msg'] = htmlspecialchars_decode($theme['lite_msg']);
$this->social=true;
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
width: 550px;
min-height: 350px;
background: #27313B;
<?php  if(isset($theme["lite_bg_c"])){
    echo 'background-color:'.$theme["lite_bg_c"].';';
}?>

<?php if($scroll){?>
/*long form*/
height: calc(100% - 150px);
<?php } ?>
}
#wpmchimpa-main .wpmchimpa-leftpane{
height: 135px;
width: 550px;
display: block;
background-image:<?php if(isset($theme['lite_img1']))echo 'url('.$theme['lite_img1'].');';else{?>
 url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI1NTBweCIgaGVpZ2h0PSIxMzVweCIgdmlld0JveD0iMCAwIDU1MCAxMzUiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU1MCAxMzUiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9IiMyNTJCMzciIHdpZHRoPSI1NTAiIGhlaWdodD0iMTM1Ii8+PGc+PHBhdGggZmlsbD0iI0M2MzIzRCIgZD0iTTE5OSw2Mi4xYy0wLjIsMC43LTAuMywxLjUtMC4zLDIuM3Y1MS4zYzAsNC40LDMuNiw4LDgsOEgyOTNjNC40LDAsOC0zLjYsOC04VjY0LjRjMC0wLjgtMC4xLTEuNi0wLjMtMi4zQzMwMC43LDYyLjEsMTk5LDYyLjEsMTk5LDYyLjF6Ii8+PHBhdGggZmlsbD0iIzIxNjg5NiIgZD0iTTI5Myw0OS41aC04Ni40Yy00LjQsMC04LDMuNi04LDhjMCwwLDAuMi0wLjQsMC42LTEuM2MwLjgsMS42LDIsMywzLjcsNC4xbDQ2LjksMzIuM2w0Ni45LTMyLjNjMS42LTEuMSwyLjktMi42LDMuNy00LjFjMC40LDAuOSwwLjYsMS4zLDAuNiwxLjNDMzAxLDUzLjEsMjk3LjUsNDkuNSwyOTMsNDkuNXoiLz48cGF0aCBmaWxsPSIjRkNGQ0ZDIiBkPSJNMjkzLjYsMTE0LjhjMCw0LjctMy42LDguNi04LDguNmgtNzIuM2MtNC40LDAtOC0zLjgtOC04LjZWMjEuM2MwLTQuNywzLjYtOC42LDgtOC42aDcyLjNjNC40LDAsOCwzLjgsOCw4LjZWMTE0Ljh6Ii8+PHJlY3QgeD0iMjExLjgiIHk9IjIyLjciIGZpbGw9IiNGNEY0RjQiIHdpZHRoPSI3My4yIiBoZWlnaHQ9Ijg2LjUiLz48Zz48cmVjdCB4PSIyMTIuMSIgeT0iMzcuNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM2LjMiIGhlaWdodD0iNSIvPjxyZWN0IHg9IjIxMS44IiB5PSI1NS45IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PHJlY3QgeD0iMjExLjgiIHk9IjY1IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PHJlY3QgeD0iMjExLjgiIHk9Ijc0LjEiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI3My4yIiBoZWlnaHQ9IjUiLz48cmVjdCB4PSIyMTEuOCIgeT0iODMuMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjczLjIiIGhlaWdodD0iNSIvPjxyZWN0IHg9IjIxMi4xIiB5PSI0Ni43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PC9nPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNDM5IiB5MT0iLTMxMi40NCIgeDI9IjUzNy41IiB5Mj0iLTMxMi40NCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAtMjM3LjYgLTIyNC44NCkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE0MzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNENEQ0RDQ7c3RvcC1vcGFjaXR5OjAuMTI5MSIvPjxzdG9wICBvZmZzZXQ9IjAuNDYiIHN0eWxlPSJzdG9wLWNvbG9yOiM3QTdBN0E7c3RvcC1vcGFjaXR5OjAuNDE0Ii8+PHN0b3AgIG9mZnNldD0iMC43MTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMzODM4Mzg7c3RvcC1vcGFjaXR5OjAuNjQ2MiIvPjxzdG9wICBvZmZzZXQ9IjAuOTA0MiIgc3R5bGU9InN0b3AtY29sb3I6IzEwMTAxMDtzdG9wLW9wYWNpdHk6MC44MTM4Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yOTUuNiwxMTkuMWwtODkuOS02MS45Yy0xLjYtMS4xLTIuOS0yLjYtMy43LTQuMWMtMC40LDAuOS0wLjYsMi0wLjYsM3Y1OGMwLDQuNCwzLjYsOCw4LDhoODYuM2MxLjUsMCwzLTAuNCw0LjItMS4yQzI5OC41LDEyMC42LDI5NywxMjAsMjk1LjYsMTE5LjF6Ii8+PHBhdGggZmlsbD0iIzJBN0ZCNSIgZD0iTTIwNi45LDEyMC43bDg5LjktNjEuOWMxLjYtMS4xLDIuOS0yLjYsMy43LTQuMWMwLjQsMC45LDAuNiwyLDAuNiwzdjU4YzAsNC40LTMuNiw4LTgsOGgtODYuM2MtMS41LDAtMy0wLjQtNC4yLTEuMkMyMDQuMSwxMjIuMywyMDUuNSwxMjEuNywyMDYuOSwxMjAuN3oiLz48cGF0aCBmaWxsPSIjMzQ5NkRBIiBkPSJNMjkyLjQsMTIxLjFsLTg5LjktNjEuOWMtMS42LTEuMS0yLjktMi42LTMuNy00LjFjLTAuNCwwLjktMC42LDItMC42LDN2NThjMCw0LjQsMy42LDgsOCw4aDg2LjNjMS41LDAsMy0wLjQsNC4yLTEuMkMyOTUuMiwxMjIuNiwyOTMuNywxMjIsMjkyLjQsMTIxLjF6Ii8+PHBhdGggb3BhY2l0eT0iOC4wMDAwMDBlLTAwMiIgZmlsbD0iIzJBNzM5QiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yOTIuNCwxMjEuMWwtNDMtMjkuNmwtNDMsMjkuNmMtMS40LDAuOS0yLjgsMS41LTQuMywxLjhjMS4yLDAuNywyLjYsMS4yLDQuMiwxLjJoMzguMWg0OC4yYzEuNSwwLDMtMC40LDQuMi0xLjJDMjk1LjIsMTIyLjYsMjkzLjcsMTIyLDI5Mi40LDEyMS4xeiIvPjwvZz48Zz48cGF0aCBmaWxsPSIjQzYzMjNEIiBkPSJNMzAyLjksOTEuOGMtMC4xLDAuNC0wLjIsMC44LTAuMiwxLjJ2MjZjMCwyLjIsMS44LDQuMSw0LjEsNC4xaDQzLjhjMi4yLDAsNC4xLTEuOCw0LjEtNC4xVjkzYzAtMC40LTAuMS0wLjgtMC4yLTEuMkgzMDIuOXoiLz48cGF0aCBmaWxsPSIjMjE2ODk2IiBkPSJNMzUwLjcsODUuNGgtNDMuOWMtMi4yLDAtNC4xLDEuOC00LjEsNC4xYzAsMCwwLjEtMC4yLDAuMy0wLjdjMC40LDAuOCwxLDEuNSwxLjksMi4xbDIzLjgsMTYuNGwyMy44LTE2LjRjMC44LTAuNiwxLjUtMS4zLDEuOS0yLjFjMC4yLDAuNSwwLjMsMC43LDAuMywwLjdDMzU0LjgsODcuMiwzNTIuOSw4NS40LDM1MC43LDg1LjR6Ii8+PHBhdGggZmlsbD0iI0ZDRkNGQyIgZD0iTTM1MSwxMTguNmMwLDIuNC0xLjgsNC40LTQuMSw0LjRoLTM2LjdjLTIuMiwwLTQuMS0yLTQuMS00LjRWNzEuMWMwLTIuNCwxLjgtNC40LDQuMS00LjRoMzYuN2MyLjIsMCw0LjEsMiw0LjEsNC40VjExOC42eiIvPjxyZWN0IHg9IjMwOS40IiB5PSI3MS44IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSI0My45Ii8+PGc+PHJlY3QgeD0iMzA5LjYiIHk9Ijc5LjQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIxOC41IiBoZWlnaHQ9IjIuNSIvPjxyZWN0IHg9IjMwOS40IiB5PSI4OC43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSIyLjUiLz48cmVjdCB4PSIzMDkuNCIgeT0iOTMuMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM3LjIiIGhlaWdodD0iMi41Ii8+PHJlY3QgeD0iMzA5LjQiIHk9Ijk3LjkiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzNy4yIiBoZWlnaHQ9IjIuNSIvPjxyZWN0IHg9IjMwOS40IiB5PSIxMDIuNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM3LjIiIGhlaWdodD0iMi41Ii8+PHJlY3QgeD0iMzA5LjYiIHk9Ijg0IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSIyLjUiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI1NDEuNzU4MyIgeTE9Ii0zMjkuNTkiIHgyPSI1OTEuNzU4MyIgeTI9Ii0zMjkuNTkiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgLTIzNy42IC0yMjQuODQpIj48c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGO3N0b3Atb3BhY2l0eTowIi8+PHN0b3AgIG9mZnNldD0iMC4xNDM0IiBzdHlsZT0ic3RvcC1jb2xvcjojRDRENEQ0O3N0b3Atb3BhY2l0eTowLjEyOTEiLz48c3RvcCAgb2Zmc2V0PSIwLjQ2IiBzdHlsZT0ic3RvcC1jb2xvcjojN0E3QTdBO3N0b3Atb3BhY2l0eTowLjQxNCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE4IiBzdHlsZT0ic3RvcC1jb2xvcjojMzgzODM4O3N0b3Atb3BhY2l0eTowLjY0NjIiLz48c3RvcCAgb2Zmc2V0PSIwLjkwNDIiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMDEwMTA7c3RvcC1vcGFjaXR5OjAuODEzOCIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0idXJsKCNTVkdJRF8yXykiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBkPSJNMzUyLDEyMC43bC00NS43LTMxLjRjLTAuOC0wLjYtMS41LTEuMy0xLjktMi4xYy0wLjIsMC41LTAuMywxLTAuMywxLjV2MjkuNWMwLDIuMiwxLjgsNC4xLDQuMSw0LjFIMzUyYzAuOCwwLDEuNS0wLjIsMi4xLTAuNkMzNTMuNCwxMjEuNSwzNTIuNywxMjEuMiwzNTIsMTIwLjd6Ii8+PHBhdGggZmlsbD0iIzJBN0ZCNSIgZD0iTTMwNi45LDEyMS42bDQ1LjctMzEuNGMwLjgtMC42LDEuNS0xLjMsMS45LTIuMWMwLjIsMC41LDAuMywxLDAuMywxLjVWMTE5YzAsMi4yLTEuOCw0LjEtNC4xLDQuMWgtNDMuOGMtMC44LDAtMS41LTAuMi0yLjEtMC42QzMwNS41LDEyMi40LDMwNi4yLDEyMi4xLDMwNi45LDEyMS42eiIvPjxwYXRoIGZpbGw9IiMzNDk2REEiIGQ9Ik0zNTAuMywxMjEuOGwtNDUuNy0zMS40Yy0wLjgtMC42LTEuNS0xLjMtMS45LTIuMWMtMC4yLDAuNS0wLjMsMS0wLjMsMS41djI5LjVjMCwyLjIsMS44LDQuMSw0LjEsNC4xaDQzLjhjMC44LDAsMS41LTAuMiwyLjEtMC42QzM1MS44LDEyMi41LDM1MSwxMjIuMiwzNTAuMywxMjEuOHoiLz48cGF0aCBvcGFjaXR5PSI4LjAwMDAwMGUtMDAyIiBmaWxsPSIjMkE3MzlCIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTM1MC4zLDEyMS44bC0yMS44LTE1bC0yMS44LDE1Yy0wLjcsMC41LTEuNCwwLjgtMi4yLDAuOWMwLjYsMC40LDEuMywwLjYsMi4xLDAuNkgzMjZoMjQuNWMwLjgsMCwxLjUtMC4yLDIuMS0wLjZDMzUxLjgsMTIyLjUsMzUxLDEyMi4yLDM1MC4zLDEyMS44eiIvPjwvZz48ZyBvcGFjaXR5PSIwLjk2Ij48Zz48cG9seWdvbiBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSIjMDIwMjAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIzNDYuNiw4NS4yIDM0Mi4yLDc1LjYgMzMyLjYsNzEuMiAzNTMuNiw2NC4yICIvPjxwb2x5Z29uIGZpbGw9IiNGMTI4MjEiIHBvaW50cz0iMzQ2LjYsODMuOSAzNDIuNCw3NC45IDMzMy40LDcwLjggMzUzLjIsNjQuMiAiLz48cG9seWdvbiBmaWxsPSIjRUEyMTIxIiBwb2ludHM9IjM0Mi40LDc0LjkgMzUzLjIsNjQuMiAzNDYuNiw4My45ICIvPjwvZz48L2c+PGcgb3BhY2l0eT0iMC45NiI+PHBvbHlnb24gb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0iIzAyMDIwMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMjg2LjgsNDQuNiAyNzkuMywyOC41IDI2My4xLDIxIDI5OC42LDkuMiAiLz48cG9seWdvbiBmaWxsPSIjRjEyODIxIiBwb2ludHM9IjI4Ni44LDQyLjUgMjc5LjcsMjcuMyAyNjQuNSwyMC4zIDI5Ny45LDkuMiAiLz48cG9seWdvbiBmaWxsPSIjRUEyMTIxIiBwb2ludHM9IjI3OS43LDI3LjMgMjk3LjksOS4yIDI4Ni44LDQyLjUgIi8+PC9nPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIwLjUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI3OS43LDI3LjJjLTMuOC01LjktMTIuNC0yLjQtMTQuMywzLjRjLTIuMiw2LjgsMywxMi4xLDMuNywxOC42YzAuNSw0LjUtMi42LDEyLjUtOC40LDExLjdjLTQuNS0wLjYtNi44LTcuNC0xMC4xLTEwYy04LjQtNi44LTEyLjYsMS45LTE2LDguN0MyMjksNzEuMiwyMTkuNyw3MS4zLDIwOCw3MC43Yy0xNy41LTAuOS0xNC41LDE3LjctMTcuMiwyOS43Ii8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMzQzLDc1LjNjLTUuNi0xLTE1LjcsMC44LTE0LjgsOC40YzAuNSw0LjYsOC40LDguOCw1LDEzLjdjLTMuNSw1LTEwLjcsMC4yLTE1LjIsMS40Yy01LjQsMS40LTYsOS4yLTkuMywxMi45Yy03LjMsOC4zLTIwLjQsOC4yLTMwLjQsMTAuNCIvPjxnPjxjaXJjbGUgb3BhY2l0eT0iMC44IiBmaWxsPSIjRUEyMTIxIiBjeD0iMTkwLjciIGN5PSIxMDEuNCIgcj0iOC4xIi8+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNGMTI4MjEiIGN4PSIxOTAuNyIgY3k9IjEwMS40IiByPSI0LjYiLz48L2c+PGc+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNFQTIxMjEiIGN4PSIyNzYuNyIgY3k9IjEyMi4zIiByPSI1LjUiLz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0YxMjgyMSIgY3g9IjI3Ni43IiBjeT0iMTIyLjMiIHI9IjMuMSIvPjwvZz48L3N2Zz4=);<?php } ?>
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
}
#wpmchimpa-main #wpmchimpa-newsletterform{
display: inline-block;
padding: 5px 50px 25px;
text-align: center;
<?php if($scroll){?>
/*long form*/
max-height: calc(100% - 135px);
overflow-y: auto;
<?php } ?>
}
#wpmchimpa h3{
line-height: 26px;
margin-bottom:10px;
color: #fff;
font-size: 26px;
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
#wpmchimpa .wpmchimpa_para{
margin: 16px auto;
}
#wpmchimpa .wpmchimpa_para,#wpmchimpa .wpmchimpa_para * {
font-size: 12px;
color: #688292;
font-weight: 600;
line-height: 26px;
<?php if(isset($theme["lite_msg_f"])){
  echo 'font-family:'.$theme["lite_msg_f"].';';
}if(isset($theme["lite_msg_fs"])){
    echo 'font-size:'.$theme["lite_msg_fs"].'px;';
}?>
}
#wpmchimpa form{
margin: 0 70px;
}

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
left: 0;
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
  padding-left: 60px;
  <?php 
if(isset($theme["lite_tbox_h"])){
  echo 'padding-left:'.($theme["lite_tbox_h"]+20).'px;';
  }?>
}
<?php
$col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#27313a');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a05';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c03';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '#wpmchimpa .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: rgba(0,0,0,0.1) '.$this->getIcon($fi,28,$col).' no-repeat center}';
}
?>
#wpmchimpa .wpmchimpa-field select,
#wpmchimpa input[type="text"]{
text-align: left;
width: 100%;
height: 40px;
background: #fff;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #353535;
padding: 0 10px;
font-size:24px;
outline:0;
display: block;
border: 1px solid #efefef;
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
    if(isset($theme["lite_tbox_fc"])){
        echo 'color:'.$theme["lite_tbox_fc"].';';
    }
    if(isset($theme["lite_tbox_bgc"])){
        echo 'background:'.$theme["lite_tbox_bgc"].';';
    }
    if(isset($theme["lite_tbox_h"])){
        echo 'height:'.$theme["lite_tbox_h"].'px;';
    }
    if(isset($theme["lite_tbox_bor"]) && isset($theme["lite_tbox_borc"])){
        echo ' border:'.$theme["lite_tbox_bor"].'px solid '.$theme["lite_tbox_borc"].';';
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
#wpmchimpa input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 40px;
color: rgba(0,0,0,0.6);
font-size: 24px;
font-weight:500;
padding: 0 10px;
white-space: nowrap;
<?php 
if(isset($theme["lite_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["lite_tbox_f"]).';';
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
if(isset($theme["lite_tbox_fc"])){
    echo 'color:'.$theme["lite_tbox_fc"].';';
}
?>
}
#wpmchimpa input[type="text"]:valid + .inputlabel{
display: none;
}
#wpmchimpa select.wpmcerror,
#wpmchimpa input[type="text"].wpmcerror{
  border-color: red;
}
#wpmchimpa .wpmchimpa-check *,
#wpmchimpa .wpmchimpa-radio *{
color: #fff;
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
}
#wpmchimpa .wpmchimpa-item span:before {
border:1px solid #ccc;
border-radius: 1px;
background-color: #fff;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
  if(isset($theme["lite_check_borc"])){
      echo 'border: 1px solid'.$theme["lite_check_borc"].';';
  }
if(isset($theme["lite_check_c"]))echo 'background: '.$theme["lite_check_c"].';';?>
}
#wpmchimpa .wpmchimpa-item input[type='checkbox'] + span:hover:after, #wpmchimpa input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch2';
        if(isset($theme["lite_check_mark"])){$tfi=$theme["lite_check_mark"];}
        $tfc='#000';
        if(isset($theme["lite_check_ic"])){$tfc=$theme["lite_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
#wpmchimpa .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
#wpmchimpa .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
#wpmchimpa input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
#wpmchimpa .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
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
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
width: 100%;
color: #fff;
font-size: 17px;
border: 1px solid #f42536;
background-color: #ff2738;
position: relative;
height: 42px;
line-height: 42px;
text-align: center;
cursor: pointer;
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
background-color: #f42536;
<?php if(isset($theme["lite_button_fch"])){
    echo 'color:'.$theme["lite_button_fch"].';';
}    
if(isset($theme["lite_button_bch"])){
    echo 'background-color:'.$theme["lite_button_bch"].';';
}?>
}
#wpmchimpa .wpmchimpa-subsc{
  position: relative;
}
#wpmchimpa .wpmchimpa-subs-button.subsicon:before{
padding-left: 42px;
  <?php 
  if(isset($theme["lite_button_w"])){
      echo 'padding-left:'.$theme["lite_button_h"].'px;';
  }
  ?>
}
#wpmchimpa .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 42px;
width: 42px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["lite_button_h"])){
      echo 'width:'.$theme["lite_button_h"].'px;';
      echo 'height:'.$theme["lite_button_h"].'px;';
  }
  $col = ((isset($theme["lite_inico_c"]))? $theme["lite_inico_c"] : '#27313a');
  $bi='b01';
  if(isset($theme["lite_button_i"])){
  if($theme["lite_button_i"] == 'inone')$bi='';
  else if($theme["lite_button_i"] != 'idef')$bi=$theme["lite_button_i"];
  }
  echo 'background: rgba(0,0,0,0.1) '.$this->getIcon($bi,28,$col).' no-repeat center;';
  ?>
}

.wpmchimpa-overlay-bg .wpmchimpa-signal {
display: none;
position: absolute;
top: 6px;
right: 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
.wpmchimpa-overlay-bg.signalshow .wpmchimpa-signal {
  display: inline-block;
}
#wpmchimpa-main .wpmchimpa-feedback{
text-align: center;
position: relative;
color: #ccc;
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
color:#fff;
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
  $tfc='#fff';
  if(isset($theme["lite_tag_fc"])){$tfc=$theme["lite_tag_fc"];}
  echo $this->getIcon('lock1',$tfs,$tfc);?>;
margin: 5px;
top: 1px;
position:relative;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
background: rgba(75, 75, 75, 0.2);
}
#wpmchimpa-main .wpmchimpa-social::before{
content: '<?php if(isset($theme['lite_soc_head'])) echo $theme['lite_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
color: #b9babd;
line-height: 45px;
display: block;
float:left;
margin: 0 10px;
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
width:36px;
height: 45px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
float: right;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scaleY(1.1);
-ms-transform:scaleY(1.1);
transform:scaleY(1.1);
} 
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 45px;
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',20,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',20,'#fff');?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',20,'#fff');?>
}

#wpmchimpa-main .wpmchimpa-close-button{
position: absolute;
display: block;
top: 0;
right: 0;
width: 40px;
text-align: center;
background: rgba(75, 75, 75, 0.2);
cursor: pointer;
}
#wpmchimpa-main .wpmchimpa-close-button::before{
content: "\00D7";
font-size: 40px;
line-height: 40px;
font-weight: 100;
color: #999;
opacity: 0.4;
<?php if(isset($theme["lite_close_col"])){
echo 'color:'.$theme["lite_close_col"].';';
}?>
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}
#wpmchimpa-main .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;margin-bottom: 40px;height: auto;
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

#wpmchimpa-main.woleft .wpmchimpa-leftpane{
display:none;
}
#wpmchimpa-main.woleft{min-width: 0}
#wpmchimpa-main.woleft #wpmchimpa-newsletterform{padding: 15px 60px 35px;max-height: 100%;width: calc(100% + 17px);}
#wpmchimpa-main.wosoc .wpmchimpa-social {
display: none;
}
@media only screen 
and (max-width : 1024px){
#wpmchimpa-main.woleft #wpmchimpa-newsletterform{width: 100%;}
  .wpmchimpa-overlay-bg #wpmchimpa-main{
    -webkit-transform:translate(-50%, -50%) scale(0.8);
    -ms-transform:translate(-50%, -50%) scale(0.8);
    transform:translate(-50%, -50%) scale(0.8);

<?php if($scroll){?>
/*long form*/
height: calc(100%);
<?php } ?>
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
        <div class="wpmchimpa-leftpane">
        </div>
    <div id="wpmchimpa-newsletterform" class="wpmchimpa-wrapper">
      <div class="wpmchimpa" id="wpmchimpa">
<?php if(isset($theme['lite_heading'])) echo '<h3>'.$theme['lite_heading'].'</h3>';?>
<?php if(isset($theme['lite_msg'])) echo '<div class="wpmchimpa_para">'.$theme['lite_msg'].'</div>';?>
          <form action="" method="post">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => true,
  'type' => 1
  );
$this->stfield($form['fields'],$set);
$this->gethidden($form['preset']);
$this->wpmchimpa_abtheme();
?>
              <div class="wpmchimpa-subsc">
                <div class="wpmchimpa-subs-button<?php echo (!isset($theme['lite_button_i']) || (isset($theme['lite_button_i']) && $theme['lite_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>
                <div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["lite_spinner_t"])?$theme["lite_spinner_t"]:'3','wpmchimpa-main',isset($theme["lite_spinner_c"])?$theme["lite_spinner_c"]:'#000');?></div>
              </div>

              <?php if(isset($theme['lite_tag_en'])){
              if(isset($theme['lite_tag'])) $tagtxt= $theme['lite_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>

            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            </div>
            
            </form>
          <div class="wpmchimpa-feedback" wpmcerr="gen"></div>
      </div>
    </div>
        <div class="wpmchimpa-close-button"></div>
  </div>
</div>
</div>
</div>