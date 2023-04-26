<?php 
$theme = $wpmchimpa['theme']['s4'];
$theme['slider_msg'] = htmlspecialchars_decode($theme['slider_msg']);
$this->social=true;
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
margin: 0 40px;
padding: 180px 30px 0;
min-height:360px;
background: #27313B no-repeat top;
<?php
if(isset($theme["slider_bg_c"])){
    echo 'background-color:'.$theme["slider_bg_c"].';';
}?>
background-image:<?php if(isset($theme['slider_img1']))echo 'url('.$theme['slider_img1'].');';else{?>
 url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI0MjBweCIgaGVpZ2h0PSIxNzBweCIgdmlld0JveD0iMCAwIDQyMCAxNzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQyMCAxNzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9IiMyNTJCMzciIHdpZHRoPSI0MjAiIGhlaWdodD0iMTcwIi8+PGc+PGc+PHBhdGggZmlsbD0iI0M2MzIzRCIgZD0iTTExNi44LDc0LjVjLTAuMiwwLjktMC40LDEuOC0wLjQsMi44djYyLjhjMCw1LjQsNC40LDkuOCw5LjgsOS44aDEwNS42YzUuNCwwLDkuOC00LjQsOS44LTkuOFY3Ny4zYzAtMS0wLjEtMi0wLjQtMi44QzI0MS4zLDc0LjUsMTE2LjgsNzQuNSwxMTYuOCw3NC41eiIvPjxwYXRoIGZpbGw9IiMyMTY4OTYiIGQ9Ik0yMzEuOCw1OS4xSDEyNi4xYy01LjQsMC05LjgsNC40LTkuOCw5LjhjMCwwLDAuMi0wLjUsMC43LTEuNmMxLDIsMi40LDMuNyw0LjUsNWw1Ny40LDM5LjVsNTcuNC0zOS41YzItMS4zLDMuNS0zLjIsNC41LTVjMC41LDEuMSwwLjcsMS42LDAuNywxLjZDMjQxLjYsNjMuNSwyMzcuMyw1OS4xLDIzMS44LDU5LjF6Ii8+PHBhdGggZmlsbD0iI0ZDRkNGQyIgZD0iTTIzMi42LDEzOWMwLDUuNy00LjQsMTAuNS05LjgsMTAuNWgtODguNGMtNS40LDAtOS44LTQuNi05LjgtMTAuNVYyNC42YzAtNS43LDQuNC0xMC41LDkuOC0xMC41aDg4LjRjNS40LDAsOS44LDQuNiw5LjgsMTAuNVYxMzl6Ii8+PHJlY3QgeD0iMTMyLjUiIHk9IjI2LjMiIGZpbGw9IiNGNEY0RjQiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjEwNS44Ii8+PGc+PHJlY3QgeD0iMTMyLjkiIHk9IjQ0LjUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI0NC40IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi41IiB5PSI2Ni45IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48cmVjdCB4PSIxMzIuNSIgeT0iNzgiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi41IiB5PSI4OS4yIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48cmVjdCB4PSIxMzIuNSIgeT0iMTAwLjQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi45IiB5PSI1NS43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI1OTQuOTgxIiB5MT0iODExLjM3MTkiIHgyPSI3MTUuNDc0MSIgeTI9IjgxMS4zNzE5IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgLTQ3NS4yIC03MDUuNjgpIj48c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGO3N0b3Atb3BhY2l0eTowIi8+PHN0b3AgIG9mZnNldD0iMC4xNDM0IiBzdHlsZT0ic3RvcC1jb2xvcjojRDRENEQ0O3N0b3Atb3BhY2l0eTowLjEyOTEiLz48c3RvcCAgb2Zmc2V0PSIwLjQ2IiBzdHlsZT0ic3RvcC1jb2xvcjojN0E3QTdBO3N0b3Atb3BhY2l0eTowLjQxNCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE4IiBzdHlsZT0ic3RvcC1jb2xvcjojMzgzODM4O3N0b3Atb3BhY2l0eTowLjY0NjIiLz48c3RvcCAgb2Zmc2V0PSIwLjkwNDIiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMDEwMTA7c3RvcC1vcGFjaXR5OjAuODEzOCIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0idXJsKCNTVkdJRF8xXykiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBkPSJNMjM1LDE0NC4yTDEyNSw2OC41Yy0yLTEuMy0zLjUtMy4yLTQuNS01Yy0wLjUsMS4xLTAuNywyLjQtMC43LDMuN3Y3MWMwLDUuNCw0LjQsOS44LDkuOCw5LjhoMTA1LjZjMS44LDAsMy43LTAuNSw1LjEtMS41QzIzOC42LDE0Ni4xLDIzNi43LDE0NS4zLDIzNSwxNDQuMnoiLz48cGF0aCBmaWxsPSIjMkE3RkI1IiBkPSJNMTI2LjUsMTQ2LjJsMTEwLTc1LjdjMi0xLjMsMy41LTMuMiw0LjUtNWMwLjUsMS4xLDAuNywyLjQsMC43LDMuN3Y3MWMwLDUuNC00LjQsOS44LTkuOCw5LjhIMTI2LjRjLTEuOCwwLTMuNy0wLjUtNS4xLTEuNUMxMjMuMSwxNDguMSwxMjQuOCwxNDcuNCwxMjYuNSwxNDYuMnoiLz48cGF0aCBmaWxsPSIjMzQ5NkRBIiBkPSJNMjMxLjEsMTQ2LjdMMTIxLjEsNzFjLTItMS4zLTMuNS0zLjItNC41LTVjLTAuNSwxLjEtMC43LDIuNC0wLjcsMy43djcxYzAsNS40LDQuNCw5LjgsOS44LDkuOGgxMDUuNmMxLjgsMCwzLjctMC41LDUuMS0xLjVDMjM0LjUsMTQ4LjUsMjMyLjcsMTQ3LjgsMjMxLjEsMTQ2Ljd6Ii8+PHBhdGggb3BhY2l0eT0iOC4wMDAwMDBlLTAwMiIgZmlsbD0iIzJBNzM5QiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yMzEuMSwxNDYuN2wtNTIuNi0zNi4ybC01Mi42LDM2LjJjLTEuNywxLjEtMy40LDEuOC01LjMsMi4yYzEuNSwwLjksMy4yLDEuNSw1LjEsMS41aDQ2LjZoNTljMS44LDAsMy43LTAuNSw1LjEtMS41QzIzNC41LDE0OC41LDIzMi43LDE0Ny44LDIzMS4xLDE0Ni43eiIvPjwvZz48Zz48cGF0aCBmaWxsPSIjQzYzMjNEIiBkPSJNMjQzLjksMTEwLjhjLTAuMSwwLjUtMC4yLDEtMC4yLDEuNXYzMS44YzAsMi43LDIuMiw1LDUsNWg1My42YzIuNywwLDUtMi4yLDUtNXYtMzEuOGMwLTAuNS0wLjEtMS0wLjItMS41SDI0My45eiIvPjxwYXRoIGZpbGw9IiMyMTY4OTYiIGQ9Ik0zMDIuNCwxMDNoLTUzLjdjLTIuNywwLTUsMi4yLTUsNWMwLDAsMC4xLTAuMiwwLjQtMC45YzAuNSwxLDEuMiwxLjgsMi4zLDIuNmwyOS4xLDIwLjFsMjkuMS0yMC4xYzEtMC43LDEuOC0xLjYsMi4zLTIuNmMwLjIsMC42LDAuNCwwLjksMC40LDAuOUMzMDcuNCwxMDUuMiwzMDUuMSwxMDMsMzAyLjQsMTAzeiIvPjxwYXRoIGZpbGw9IiNGQ0ZDRkMiIGQ9Ik0zMDIuOCwxNDMuNmMwLDIuOS0yLjIsNS40LTUsNS40aC00NC45Yy0yLjcsMC01LTIuNC01LTUuNFY4NS41YzAtMi45LDIuMi01LjQsNS01LjRoNDQuOWMyLjcsMCw1LDIuNCw1LDUuNFYxNDMuNnoiLz48cmVjdCB4PSIyNTEuOSIgeT0iODYuNCIgZmlsbD0iI0Y0RjRGNCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iNTMuNyIvPjxnPjxyZWN0IHg9IjI1Mi4xIiB5PSI5NS43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjIuNiIgaGVpZ2h0PSIzLjEiLz48cmVjdCB4PSIyNTEuOSIgeT0iMTA3IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNDUuNSIgaGVpZ2h0PSIzLjEiLz48cmVjdCB4PSIyNTEuOSIgeT0iMTEyLjciIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI0NS41IiBoZWlnaHQ9IjMuMSIvPjxyZWN0IHg9IjI1MS45IiB5PSIxMTguMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iMy4xIi8+PHJlY3QgeD0iMjUxLjkiIHk9IjEyNCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iMy4xIi8+PHJlY3QgeD0iMjUyLjEiIHk9IjEwMS4zIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNDUuNSIgaGVpZ2h0PSIzLjEiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI3MjAuNjgzMiIgeTE9IjgzMi4zNTEyIiB4Mj0iNzgxLjg0NzIiIHkyPSI4MzIuMzUxMiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjYuMDAwMDAwZS0wMDIiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTMwNCwxNDYuMmwtNTUuOS0zOC40Yy0xLTAuNy0xLjgtMS42LTIuMy0yLjZjLTAuMiwwLjYtMC40LDEuMi0wLjQsMS44djM2LjFjMCwyLjcsMi4yLDUsNSw1SDMwNGMxLDAsMS44LTAuMiwyLjYtMC43QzMwNS43LDE0Ny4yLDMwNC45LDE0Ni44LDMwNCwxNDYuMnoiLz48cGF0aCBmaWxsPSIjMkE3RkI1IiBkPSJNMjQ4LjgsMTQ3LjNsNTUuOS0zOC40YzEtMC43LDEuOC0xLjYsMi4zLTIuNmMwLjIsMC42LDAuNCwxLjIsMC40LDEuOHYzNmMwLDIuNy0yLjIsNS01LDVoLTUzLjZjLTEsMC0xLjgtMC4yLTIuNi0wLjdDMjQ3LjEsMTQ4LjMsMjQ4LDE0Ny45LDI0OC44LDE0Ny4zeiIvPjxwYXRoIGZpbGw9IiMzNDk2REEiIGQ9Ik0zMDEuOSwxNDcuNUwyNDYsMTA5LjFjLTEtMC43LTEuOC0xLjYtMi4zLTIuNmMtMC4yLDAuNi0wLjQsMS4yLTAuNCwxLjh2MzYuMWMwLDIuNywyLjIsNSw1LDVoNTMuNmMxLDAsMS44LTAuMiwyLjYtMC43QzMwMy44LDE0OC40LDMwMi44LDE0OCwzMDEuOSwxNDcuNXoiLz48cGF0aCBvcGFjaXR5PSI4LjAwMDAwMGUtMDAyIiBmaWxsPSIjMkE3MzlCIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTMwMS45LDE0Ny41bC0yNi43LTE4LjNsLTI2LjcsMTguM2MtMC45LDAuNi0xLjcsMS0yLjcsMS4xYzAuNywwLjUsMS42LDAuNywyLjYsMC43aDIzLjdoMzBjMSwwLDEuOC0wLjIsMi42LTAuN0MzMDMuOCwxNDguNCwzMDIuOCwxNDgsMzAxLjksMTQ3LjV6Ii8+PC9nPjxnIG9wYWNpdHk9IjAuOTYiPjxnPjxwb2x5Z29uIG9wYWNpdHk9IjYuMDAwMDAwZS0wMDIiIGZpbGw9IiMwMjAyMDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBwb2ludHM9IjI5Ny40LDEwMi44IDI5Miw5MSAyODAuMyw4NS42IDMwNiw3Ny4xICIvPjxwb2x5Z29uIGZpbGw9IiNGMTI4MjEiIHBvaW50cz0iMjk3LjQsMTAxLjIgMjkyLjMsOTAuMiAyODEuMyw4NS4xIDMwNS41LDc3LjEgIi8+PHBvbHlnb24gZmlsbD0iI0VBMjEyMSIgcG9pbnRzPSIyOTIuMyw5MC4yIDMwNS41LDc3LjEgMjk3LjQsMTAxLjIgIi8+PC9nPjwvZz48ZyBvcGFjaXR5PSIwLjk2Ij48cG9seWdvbiBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSIjMDIwMjAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyMjQuMiw1My4xIDIxNS4xLDMzLjQgMTk1LjMsMjQuMiAyMzguNyw5LjggIi8+PHBvbHlnb24gZmlsbD0iI0YxMjgyMSIgcG9pbnRzPSIyMjQuMiw1MC41IDIxNS42LDMxLjkgMTk3LDIzLjQgMjM3LjgsOS44ICIvPjxwb2x5Z29uIGZpbGw9IiNFQTIxMjEiIHBvaW50cz0iMjE1LjYsMzEuOSAyMzcuOCw5LjggMjI0LjIsNTAuNSAiLz48L2c+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjE1LjYsMzEuOGMtNC42LTcuMi0xNS4yLTIuOS0xNy41LDQuMmMtMi43LDguMywzLjcsMTQuOCw0LjUsMjIuOGMwLjYsNS41LTMuMiwxNS4zLTEwLjMsMTQuM2MtNS41LTAuNy04LjMtOS4xLTEyLjQtMTIuMmMtMTAuMy04LjMtMTUuNCwyLjMtMTkuNiwxMC42Yy02LjksMTQuMi0xOC4yLDE0LjMtMzIuNSwxMy42Yy0yMS40LTEuMS0xNy43LDIxLjctMjEsMzYuMyIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIwLjUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI5Myw5MC42Yy02LjktMS4yLTE5LjIsMS0xOC4xLDEwLjNjMC42LDUuNiwxMC4zLDEwLjgsNi4xLDE2LjhjLTQuMyw2LjEtMTMuMSwwLjItMTguNiwxLjdjLTYuNiwxLjctNy4zLDExLjMtMTEuNCwxNS44Yy04LjksMTAuMi0yNSwxMC0zNy4yLDEyLjciLz48Zz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0VBMjEyMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGN4PSIxMDYuNyIgY3k9IjEyMi42IiByPSI5LjkiLz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0YxMjgyMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGN4PSIxMDYuNyIgY3k9IjEyMi42IiByPSI1LjYiLz48L2c+PGc+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNFQTIxMjEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBjeD0iMjExLjkiIGN5PSIxNDguMSIgcj0iNi43Ii8+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNGMTI4MjEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBjeD0iMjExLjkiIGN5PSIxNDguMSIgcj0iMy44Ii8+PC9nPjwvZz48L3N2Zz4=);<?php } ?>
background-size: contain;
}

.wpmchimpas h3{
line-height: 26px;
margin-bottom:10px;
color: #fff;
font-size: 26px;
<?php 
if(isset($theme["slider_heading_f"])){
echo 'font-family:'.$theme["slider_heading_f"].';';
}
if(isset($theme["slider_heading_fs"])){
echo 'font-size:'.$theme["slider_heading_fs"].'px;';
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
.wpmchimpas .wpmchimpa_para{
margin: 16px auto;
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
font-size: 12px;
color: #688292;
font-weight: 600;
line-height: 26px;
<?php if(isset($theme["slider_msg_f"])){
echo 'font-family:'.$theme["slider_msg_f"].';';
}if(isset($theme["slider_msg_fs"])){
echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}

.wpmchimpas  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
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
left: 0;
pointer-events: none;
<?php 
if(isset($theme["slider_tbox_h"])){
  echo 'width:'.$theme["slider_tbox_h"].'px;';
  echo 'height:'.$theme["slider_tbox_h"].'px;';
}
?>
}
.wpmchimpas .wpmc-ficon input[type="text"],
.wpmchimpas .wpmc-ficon input[type="text"] ~ .inputlabel{
  padding-left: 60px;
  <?php 
if(isset($theme["slider_tbox_h"])){
  echo 'padding-left:'.($theme["slider_tbox_h"]+20).'px;';
  }?>
}
<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#27313a');
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
    echo '.wpmchimpas .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: rgba(0,0,0,0.1) '.$this->getIcon($fi,28,$col).' no-repeat center}';
}
?>
.wpmchimpas .wpmchimpa-field select,
.wpmchimpas input[type="text"]{
text-align: left;
width: 100%;
height: 40px;
background: #fff;
padding: 0 10px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #353535;
font-size:24px;
outline:0;
display: block;
border: 1px solid #efefef;
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
if(isset($theme["slider_tbox_fc"])){
echo 'color:'.$theme["slider_tbox_fc"].';';
}
if(isset($theme["slider_tbox_bgc"])){
echo 'background:'.$theme["slider_tbox_bgc"].';';
}
if(isset($theme["slider_tbox_h"])){
echo 'height:'.$theme["slider_tbox_h"].'px;';
}
if(isset($theme["slider_tbox_bor"]) && isset($theme["slider_tbox_borc"])){
echo ' border:'.$theme["slider_tbox_bor"].'px solid '.$theme["slider_tbox_borc"].';';
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
.wpmchimpas input[type="text"] ~ .inputlabel{
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
if(isset($theme["slider_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["slider_tbox_f"]).';';
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
if(isset($theme["slider_tbox_fc"])){
    echo 'color:'.$theme["slider_tbox_fc"].';';
}
?>
}
.wpmchimpas input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpas select.wpmcerror,
.wpmchimpas input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpas .wpmchimpa-check *,
.wpmchimpas .wpmchimpa-radio *{
color: #fff;
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
}
.wpmchimpas .wpmchimpa-item span:before {
border:1px solid #ccc;
border-radius: 1px;
background-color: #fff;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
<?php
  if(isset($theme["slider_check_borc"])){
      echo 'border: 1px solid'.$theme["slider_check_borc"].';';
  }
 if(isset($theme["slider_check_c"]))echo 'background: '.$theme["slider_check_c"].';';?>
}
.wpmchimpas .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpas input[type='checkbox']:checked + span:after {
content:'';
width: 14px;
height: 14px;
background: no-repeat center;
background-image: <?php
        $tfi='ch2';
        if(isset($theme["slider_check_mark"])){$tfi=$theme["slider_check_mark"];}
        $tfc='#000';
        if(isset($theme["slider_check_ic"])){$tfc=$theme["slider_check_ic"];}
        echo $this->getIcon($tfi,8,$tfc);?>;
}
.wpmchimpas .wpmchimpa-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.wpmchimpas .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 12px;
height: 12px;
top: 4px;
}
.wpmchimpas input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 8px;
height: 8px;
top: 7px;
left: 3px;
border-radius: 50%;
}
.wpmchimpas .wpmcinfierr{
  display: block;
  height: 10px;
  text-align: left;
  line-height: 10px;
  margin-bottom: -10px;
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
background-color: #f42536;
<?php if(isset($theme["slider_button_fch"])){
echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
echo 'background-color:'.$theme["slider_button_bch"].';';
}?>
}
.wpmchimpas .wpmchimpa-subsc{
  position: relative;
}
.wpmchimpas .wpmchimpa-subs-button.subsicon:before{
padding-left: 42px;
  <?php 
  if(isset($theme["slider_button_w"])){
      echo 'padding-left:'.$theme["slider_button_h"].'px;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 42px;
width: 42px;
top: -1px;
left: -1px;
pointer-events: none;
  <?php 
  if(isset($theme["slider_button_h"])){
      echo 'width:'.$theme["slider_button_h"].'px;';
      echo 'height:'.$theme["slider_button_h"].'px;';
  }
  $col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#27313a');
  $bi='b01';
  if(isset($theme["slider_button_i"])){
  if($theme["slider_button_i"] == 'inone')$bi='';
  else if($theme["slider_button_i"] != 'idef')$bi=$theme["slider_button_i"];
  }
  echo 'background: rgba(0,0,0,0.1) '.$this->getIcon($bi,28,$col).' no-repeat center;';
  ?>
}

.wpmchimpas .wpmchimpa-signal {
display: none;
position: absolute;
top: 7px;
right: 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}
.wpmchimpas-inner.signalshow .wpmchimpa-signal {
  display: inline-block;
}

.wpmchimpas .wpmchimpa-tag,
.wpmchimpas .wpmchimpa-tag *{
color:#fff;
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
        $tfc='#fff';
        if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpas .wpmchimpa-feedback{
position: relative;
font-size: 12px;
height: 12px;
color: #ccc;
padding: 4px;
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
.wpmchimpas .wpmchimpa-feedback.wpmchimpa-done{
font-size: 15px;
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
background: #ff2738;
width:50px;
height:50px;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}

.wpmchimpas-trig .wpmchimpas-trigi:hover{
-webkit-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
-moz-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
}
.wpmchimpas-trigi:before{	
<?php 
$ti='b01';
if(isset($theme["slider_trigger_i"])){
  if($theme["slider_trigger_i"] == 'inone')$ti='';
  else if($theme["slider_trigger_i"] != 'idef')$ti=$theme["slider_trigger_i"];
}
 ?> 
content:<?php echo $this->getIcon($ti,32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
}

.wpmchimpas .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
background: rgba(75, 75, 75, 0.2);
}
.wpmchimpas .wpmchimpa-social::before{
content: '<?php if(isset($theme['slider_soc_head'])) echo $theme['slider_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
color: #b9babd;
line-height: 45px;
display: block;
float:left;
margin: 0 10px;
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
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scaleY(1.1);
-ms-transform:scaleY(1.1);
transform:scaleY(1.1);
} 
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 45px;
background: no-repeat center;
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',20,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',20,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',20,'#fff');?>
}

.wpmchimpas.wotop .wpmchimpas-inner{
padding-top: 30px;
background-image: none;
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


<div id="wpmchimpas" class="scrollhide chimpmatecss<?php if(isset($theme['slider_disimg']))echo ' wotop';
if(isset($theme['slider_dissoc']))echo ' wosoc';?>">
  <div class="wpmchimpas-cont">
  <div class="wpmchimpas-scroller">
    <div class="wpmchimpas-resp">
    <div class="wpmchimpas-inner wpmchimpselector wpmchimpa-mainc">
<?php if(isset($theme['slider_heading'])) echo '<h3>'.$theme['slider_heading'].'</h3>';?>
<?php if(isset($theme['slider_msg'])) echo '<div class="wpmchimpa_para">'.$theme['slider_msg'].'</div>';?>
  <div class="wpmchimpa-cont">
	    <form action="" method="post" class="wpmchimpa-reset">
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
                <div class="wpmchimpa-subs-button<?php echo (!isset($theme['slider_button_i']) || (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>
        <div class="wpmchimpa-signal"><?php 
    echo $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'3','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#000');?></div>
      </div>
            <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
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
	</div>	</div></div></div></div>
<div class="wpmchimpas-bg chimpmatecss"></div>
<div class="wpmchimpas-overlay chimpmatecss"></div>
<div id="wpmchimpas-trig" class="chimpmatecss" <?php if(isset($wpmchimpa['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="wpmchimpas-trigc">
    <div class="wpmchimpas-trigi"></div>
    <div class="wpmchimpas-trigh"></div>
  </div>
</div>