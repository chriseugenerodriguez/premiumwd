<?php 
$theme = $wpmchimpa['theme']['s2'];
$theme['slider_msg'] = htmlspecialchars_decode($theme['slider_msg']);
$this->social=true;
$this->extrascript(1);
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
padding: 120px 0 0;
margin: 0 60px;
min-height:450px;
background: #fff no-repeat top;
<?php
if(isset($theme["slider_bg_c"])){
    echo 'background-color:'.$theme["slider_bg_c"].';';
}?>
background-image:<?php if(isset($theme['slider_img1']))echo 'url('.$theme['slider_img1'].');';else{?>
 url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzODBweCIgaGVpZ2h0PSIxMjBweCIgdmlld0JveD0iMCAwIDM4MCAxMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM4MCAxMjAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGRpc3BsYXk9Im5vbmUiIGZpbGw9IiNGRjUyNTIiIHdpZHRoPSIzODAiIGhlaWdodD0iMTIwIi8+PHJlY3QgZmlsbD0iIzQyODVGNCIgd2lkdGg9IjM4MCIgaGVpZ2h0PSIxMjAiLz48Zz48Zz48Y2lyY2xlIGZpbGw9IiNGQkZCRkIiIGN4PSIyNTYuMTYiIGN5PSI2MC4yNCIgcj0iMzIuMTQ1Ii8+PHBhdGggZmlsbD0iIzJGMkYzOSIgZD0iTTI3NC43OTcsMjkuMDkzYy01LjUwMiwzLjY0Ny0xMi4wOTksNS43NzYtMTkuMTk0LDUuNzc2Yy02Ljk0NSwwLTEzLjQwOS0yLjA0My0xOC44NC01LjU0OXYtMC45MjRoMzguMDM0VjI5LjA5M3oiLz48cmVjdCB4PSIyOTAuODg4IiB5PSI1NS4xNDUiIGZpbGw9IiM0NzQ4NTQiIHdpZHRoPSIzLjU1MyIgaGVpZ2h0PSI4LjM4NCIvPjxnPjxwYXRoIGZpbGw9IiMyOTI5MzIiIGQ9Ik0yNTUuNzgsMjMuMTAyYy0yMC40NjcsMC0zNy4wNTksMTYuNTkyLTM3LjA1OSwzNy4wNTlzMTYuNTkyLDM3LjA1OSwzNy4wNTksMzcuMDU5YzIwLjQ2NywwLDM3LjA1OS0xNi41OTIsMzcuMDU5LTM3LjA1OVMyNzYuMjQ3LDIzLjEwMiwyNTUuNzgsMjMuMTAyeiBNMjU1Ljg1Niw5Mi44OThjLTE4LjI1LDAtMzMuMDQ0LTE0Ljc5NC0zMy4wNDQtMzMuMDQ0YzAtMTguMjUsMTQuNzk0LTMzLjA0NCwzMy4wNDQtMzMuMDQ0UzI4OC45LDQxLjYwNCwyODguOSw1OS44NTRDMjg4LjksNzguMTA0LDI3NC4xMDUsOTIuODk4LDI1NS44NTYsOTIuODk4eiIvPjxnPjxwb2x5bGluZSBmaWxsPSIjMkYyRjM5IiBwb2ludHM9IjIzOC4wNTIsMCAyNzMuNTA3LDAgMjczLjUwNywyOC4zOTYgMjM4LjA1MiwyOC4zOTYgMjM4LjA1MiwwLjY0MiAiLz48cG9seWxpbmUgZmlsbD0iIzJGMkYzOSIgcG9pbnRzPSIyMzguMjM1LDkxLjYwNCAyNzMuNjksOTEuNjA0IDI3My42OSwxMjAgMjM4LjIzNSwxMjAgMjM4LjIzNSw5Mi4yNDYgIi8+PHBhdGggZmlsbD0iIzQ3NDg1NCIgZD0iTTI1NS45NjMsMjYuODI3Yy0xOC4zMDksMC0zMy4xNTEsMTQuODQyLTMzLjE1MSwzMy4xNTFzMTQuODQyLDMzLjE1MSwzMy4xNTEsMzMuMTUxczMzLjE1MS0xNC44NDIsMzMuMTUxLTMzLjE1MVMyNzQuMjcxLDI2LjgyNywyNTUuOTYzLDI2LjgyN3ogTTI1NS45NTgsOTEuNjg5Yy0xNy41NiwwLTMxLjc5Ni0xNC4yMzUtMzEuNzk2LTMxLjc5NnMxNC4yMzUtMzEuNzk2LDMxLjc5Ni0zMS43OTZzMzEuNzk2LDE0LjIzNSwzMS43OTYsMzEuNzk2UzI3My41MTksOTEuNjg5LDI1NS45NTgsOTEuNjg5eiIvPjwvZz48L2c+PHBhdGggZmlsbD0iI0Q2RDZENiIgZD0iTTI1MS4wNzgsMzEuNjMzYzAsMC44NjYtMC43MDIsMS41NjctMS41NjcsMS41NjdsMCwwYy0wLjg2NiwwLTEuNTY3LTAuNzAyLTEuNTY3LTEuNTY3bDAsMGMwLTAuODY2LDAuNzAyLTEuNTY3LDEuNTY3LTEuNTY3bDAsMEMyNTAuMzc2LDMwLjA2NSwyNTEuMDc4LDMwLjc2NywyNTEuMDc4LDMxLjYzM0wyNTEuMDc4LDMxLjYzM3oiLz48cGF0aCBmaWxsPSIjRDZENkQ2IiBkPSJNMjU3Ljc3NCwzMS44NzZjMCwxLTAuODExLDEuODExLTEuODExLDEuODExbDAsMGMtMSwwLTEuODExLTAuODExLTEuODExLTEuODExbDAsMGMwLTEsMC44MTEtMS44MTEsMS44MTEtMS44MTFsMCwwQzI1Ni45NjMsMzAuMDY1LDI1Ny43NzQsMzAuODc2LDI1Ny43NzQsMzEuODc2TDI1Ny43NzQsMzEuODc2eiIvPjxwYXRoIGZpbGw9IiNENkQ2RDYiIGQ9Ik0yNjMuNjE2LDMxLjYzM2MwLDAuODY2LTAuNzAyLDEuNTY3LTEuNTY3LDEuNTY3bDAsMGMtMC44NjYsMC0xLjU2Ny0wLjcwMi0xLjU2Ny0xLjU2N2wwLDBjMC0wLjg2NiwwLjcwMi0xLjU2NywxLjU2Ny0xLjU2N2wwLDBDMjYyLjkxNSwzMC4wNjUsMjYzLjYxNiwzMC43NjcsMjYzLjYxNiwzMS42MzNMMjYzLjYxNiwzMS42MzN6Ii8+PC9nPjxnPjxwYXRoIGZpbGw9IiNDNjMyM0QiIGQ9Ik0yMzcuNjQzLDY1LjMxMWMtMC4wNDcsMC4xODgtMC4wOTQsMC4zNzUtMC4wOTQsMC41NjN2MTIuMTg5YzAsMS4wMzEsMC44NDQsMS45MjIsMS45MjIsMS45MjJoMjAuNTM0YzEuMDMxLDAsMS45MjItMC44NDQsMS45MjItMS45MjJWNjUuODczYzAtMC4xODgtMC4wNDctMC4zNzUtMC4wOTQtMC41NjNIMjM3LjY0M3oiLz48cGF0aCBmaWxsPSIjRUE0NzUzIiBkPSJNMjYwLjA1Miw2Mi4zMWgtMjAuNTgxYy0xLjAzMSwwLTEuOTIyLDAuODQ0LTEuOTIyLDEuOTIyYzAsMCwwLjA0Ny0wLjA5NCwwLjE0MS0wLjMyOGMwLjE4OCwwLjM3NSwwLjQ2OSwwLjcwMywwLjg5MSwwLjk4NWwxMS4xNTgsNy42ODlsMTEuMTU4LTcuNjg5YzAuMzc1LTAuMjgxLDAuNzAzLTAuNjA5LDAuODkxLTAuOTg1YzAuMDk0LDAuMjM0LDAuMTQxLDAuMzI4LDAuMTQxLDAuMzI4QzI2MS45NzUsNjMuMTU0LDI2MS4wODQsNjIuMzEsMjYwLjA1Miw2Mi4zMXoiLz48cG9seWdvbiBmaWxsPSIjRjdGN0Y3IiBwb2ludHM9IjI1NS4xMzQsNDcuNjUyIDIzOC43NDUsNDcuNjUyIDIzOC43NDUsNzMuODkgMjU5Ljc5NSw3My44OSAyNTkuNzk1LDUxLjMzNyAiLz48cmVjdCB4PSIyNDAuNjkiIHk9IjQ5Ljg0IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMTcuNDQiIGhlaWdodD0iMjAuNTgxIi8+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI3MTMuNDMyNiIgeTE9Ijc3Ny4wNjIiIHgyPSI3MzYuODczNyIgeTI9Ijc3Ny4wNjIiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSAtNDc1LjIgLTcwNS42OCkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE0MzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNENEQ0RDQ7c3RvcC1vcGFjaXR5OjAuMTI5MSIvPjxzdG9wICBvZmZzZXQ9IjAuNDYiIHN0eWxlPSJzdG9wLWNvbG9yOiM3QTdBN0E7c3RvcC1vcGFjaXR5OjAuNDE0Ii8+PHN0b3AgIG9mZnNldD0iMC43MTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMzODM4Mzg7c3RvcC1vcGFjaXR5OjAuNjQ2MiIvPjxzdG9wICBvZmZzZXQ9IjAuOTA0MiIgc3R5bGU9InN0b3AtY29sb3I6IzEwMTAxMDtzdG9wLW9wYWNpdHk6MC44MTM4Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yNjAuNjYyLDc4Ljg2bC0yMS40MjUtMTQuNzIxYy0wLjM3NS0wLjI4MS0wLjcwMy0wLjYwOS0wLjg5MS0wLjk4NWMtMC4wOTQsMC4yMzQtMC4xNDEsMC40NjktMC4xNDEsMC43MDN2MTMuODNjMCwxLjAzMSwwLjg0NCwxLjkyMiwxLjkyMiwxLjkyMmgyMC41MzRjMC4zNzUsMCwwLjcwMy0wLjA5NCwwLjk4NS0wLjI4MUMyNjEuMzE4LDc5LjIzNSwyNjAuOTksNzkuMDk0LDI2MC42NjIsNzguODZ6Ii8+PHJlY3QgeD0iMjQxLjAxOCIgeT0iNzMuMjEiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIxNy40NCIgaGVpZ2h0PSIxLjE3MiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMl8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjU0LjczOTYiIHkxPSI1MC41MTkxIiB4Mj0iMjYwLjI2NzkiIHkyPSI1MC41MTkxIj48c3RvcCAgb2Zmc2V0PSIwLjAxMDgiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz48c3RvcCAgb2Zmc2V0PSIwLjA2NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMDIwMjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE2NTQiIHN0eWxlPSJzdG9wLWNvbG9yOiM1NDU0NTQiLz48c3RvcCAgb2Zmc2V0PSIwLjI2OTMiIHN0eWxlPSJzdG9wLWNvbG9yOiM4MjgyODIiLz48c3RvcCAgb2Zmc2V0PSIwLjM3NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiNBOEE4QTgiLz48c3RvcCAgb2Zmc2V0PSIwLjQ4NTIiIHN0eWxlPSJzdG9wLWNvbG9yOiNDOEM4QzgiLz48c3RvcCAgb2Zmc2V0PSIwLjU5ODUiIHN0eWxlPSJzdG9wLWNvbG9yOiNFMEUwRTAiLz48c3RvcCAgb2Zmc2V0PSIwLjcxNzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNGMUYxRjEiLz48c3RvcCAgb2Zmc2V0PSIwLjg0NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGQ0ZDRkMiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzJfKSIgcG9pbnRzPSIyNTQuNzQsNDcuMzYxIDI2MC4yNjgsNTEuNjI0IDI1NC43OCw1My42NzggIi8+PHJlY3QgeD0iMjQxLjQ4NyIgeT0iNzMuNTM5IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTcuNDQiIGhlaWdodD0iMS4xNzIiLz48Zz48Zz48cmVjdCB4PSIyNDAuNzg0IiB5PSI1Mi45MzQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI4LjY3MyIgaGVpZ2h0PSIxLjE3MiIvPjxyZWN0IHg9IjI0MC42OSIgeT0iNTcuMjk0IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTcuNDQiIGhlaWdodD0iMS4xNzIiLz48cmVjdCB4PSIyNDAuNjkiIHk9IjU5LjQ1IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTcuNDQiIGhlaWdodD0iMS4xNzIiLz48cmVjdCB4PSIyNDAuNjkiIHk9IjYxLjYwNyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjE3LjQ0IiBoZWlnaHQ9IjEuMTcyIi8+PHJlY3QgeD0iMjQwLjY5IiB5PSI2My44MSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjE3LjQ0IiBoZWlnaHQ9IjEuMTcyIi8+PHJlY3QgeD0iMjQwLjc4NCIgeT0iNTUuMDkiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIxNy40NCIgaGVpZ2h0PSIxLjE3MiIvPjwvZz48cmVjdCB4PSIyNDAuNTQ5IiB5PSI2Ny45NiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjE3LjQ0IiBoZWlnaHQ9IjEuMTcyIi8+PHJlY3QgeD0iMjQwLjU0OSIgeT0iNzAuMTE2IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTcuNDQiIGhlaWdodD0iMS4xNzIiLz48cmVjdCB4PSIyNDAuNjQzIiB5PSI2NS43NTYiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIxNy40NCIgaGVpZ2h0PSIxLjE3MiIvPjwvZz48cGF0aCBmaWxsPSIjRjE0RDUxIiBkPSJNMjM5LjUxOCw3OS4yODJsMjEuNDI1LTE0LjcyMWMwLjM3NS0wLjI4MSwwLjcwMy0wLjYwOSwwLjg5MS0wLjk4NWMwLjA5NCwwLjIzNCwwLjE0MSwwLjQ2OSwwLjE0MSwwLjcwM3YxMy43ODNjMCwxLjAzMS0wLjg0NCwxLjkyMi0xLjkyMiwxLjkyMmgtMjAuNTM0Yy0wLjM3NSwwLTAuNzAzLTAuMDk0LTAuOTg1LTAuMjgxQzIzOC44NjIsNzkuNjU3LDIzOS4xOSw3OS41MTYsMjM5LjUxOCw3OS4yODJ6Ii8+PHBhdGggZmlsbD0iI0ZBNTY1QSIgZD0iTTI1OS44NjUsNzkuMzc1TDIzOC40NCw2NC42NTRjLTAuMzc1LTAuMjgxLTAuNzAzLTAuNjA5LTAuODkxLTAuOTg1Yy0wLjA5NCwwLjIzNC0wLjE0MSwwLjQ2OS0wLjE0MSwwLjcwM3YxMy44M2MwLDEuMDMxLDAuODQ0LDEuOTIyLDEuOTIyLDEuOTIyaDIwLjUzNGMwLjM3NSwwLDAuNzAzLTAuMDk0LDAuOTg1LTAuMjgxQzI2MC41NjgsNzkuNzA0LDI2MC4xOTMsNzkuNTYzLDI1OS44NjUsNzkuMzc1eiIvPjxwYXRoIG9wYWNpdHk9IjAuNiIgZmlsbD0iI0YxNEQ1MSIgZD0iTTI1OS44NjUsNzkuMzc1bC0xMC4yMi03LjAzMmwtMTAuMjIsNy4wMzJjLTAuMzI4LDAuMjM0LTAuNjU2LDAuMzc1LTEuMDMxLDAuNDIyYzAuMjgxLDAuMTg4LDAuNjA5LDAuMjgxLDAuOTg1LDAuMjgxaDkuMDk1aDExLjQ4NmMwLjM3NSwwLDAuNzAzLTAuMDk0LDAuOTg1LTAuMjgxQzI2MC41NjgsNzkuNzA0LDI2MC4xOTMsNzkuNTYzLDI1OS44NjUsNzkuMzc1eiIvPjxwb2x5Z29uIGZpbGw9IiNEOEQ4RDgiIHBvaW50cz0iMjU1LjIzMSw0Ny42NTIgMjU5Ljc5NSw1MS4yNDYgMjU1LjIzMSw1Mi45MzQgIi8+PHBhdGggZmlsbD0iI0M2MzIzRCIgZD0iTTI1NS43MDQsNzIuMTQ0Yy0wLjAyNiwwLjEwMi0wLjA1MSwwLjIwNS0wLjA1MSwwLjMwN3Y2LjY1M2MwLDAuNTYzLDAuNDYxLDEuMDQ5LDEuMDQ5LDEuMDQ5aDExLjIwOGMwLjU2MywwLDEuMDQ5LTAuNDYxLDEuMDQ5LTEuMDQ5di02LjY1M2MwLTAuMTAyLTAuMDI2LTAuMjA1LTAuMDUxLTAuMzA3SDI1NS43MDR6Ii8+PHBhdGggZmlsbD0iI0VBNDc1MyIgZD0iTTI2Ny45MzUsNzAuNTA2aC0xMS4yMzNjLTAuNTYzLDAtMS4wNDksMC40NjEtMS4wNDksMS4wNDljMCwwLDAuMDI2LTAuMDUxLDAuMDc3LTAuMTc5YzAuMTAyLDAuMjA1LDAuMjU2LDAuMzg0LDAuNDg2LDAuNTM3bDYuMDksNC4xOTZsNi4wOS00LjE5NmMwLjIwNS0wLjE1NCwwLjM4NC0wLjMzMywwLjQ4Ni0wLjUzN2MwLjA1MSwwLjEyOCwwLjA3NywwLjE3OSwwLjA3NywwLjE3OUMyNjguOTg0LDcwLjk2NywyNjguNDk4LDcwLjUwNiwyNjcuOTM1LDcwLjUwNnoiLz48cG9seWdvbiBmaWxsPSIjRjdGN0Y3IiBwb2ludHM9IjI2NS4yNTEsNjIuNTA2IDI1Ni4zMDYsNjIuNTA2IDI1Ni4zMDYsNzYuODI2IDI2Ny43OTUsNzYuODI2IDI2Ny43OTUsNjQuNTE3ICIvPjxyZWN0IHg9IjI1Ny4zNjciIHk9IjYzLjciIGZpbGw9IiNGNEY0RjQiIHdpZHRoPSI5LjUxOSIgaGVpZ2h0PSIxMS4yMzMiLz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzNfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjczMS4yMjYxIiB5MT0iNzgxLjEzNzUiIHgyPSI3NDQuMDIwMiIgeTI9Ijc4MS4xMzc1IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgLTQ3NS4yIC03MDUuNjgpIj48c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGO3N0b3Atb3BhY2l0eTowIi8+PHN0b3AgIG9mZnNldD0iMC4xNDM0IiBzdHlsZT0ic3RvcC1jb2xvcjojRDRENEQ0O3N0b3Atb3BhY2l0eTowLjEyOTEiLz48c3RvcCAgb2Zmc2V0PSIwLjQ2IiBzdHlsZT0ic3RvcC1jb2xvcjojN0E3QTdBO3N0b3Atb3BhY2l0eTowLjQxNCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE4IiBzdHlsZT0ic3RvcC1jb2xvcjojMzgzODM4O3N0b3Atb3BhY2l0eTowLjY0NjIiLz48c3RvcCAgb2Zmc2V0PSIwLjkwNDIiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMDEwMTA7c3RvcC1vcGFjaXR5OjAuODEzOCIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iMC4wNiIgZmlsbD0idXJsKCNTVkdJRF8zXykiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBkPSJNMjY4LjI2OCw3OS41MzlsLTExLjY5NC04LjAzNWMtMC4yMDUtMC4xNTQtMC4zODQtMC4zMzMtMC40ODYtMC41MzdjLTAuMDUxLDAuMTI4LTAuMDc3LDAuMjU2LTAuMDc3LDAuMzg0djcuNTQ5YzAsMC41NjMsMC40NjEsMS4wNDksMS4wNDksMS4wNDloMTEuMjA4YzAuMjA1LDAsMC4zODQtMC4wNTEsMC41MzctMC4xNTRDMjY4LjYyNiw3OS43NDQsMjY4LjQ0Nyw3OS42NjcsMjY4LjI2OCw3OS41Mzl6Ii8+PHJlY3QgeD0iMjU3LjU0NiIgeT0iNzYuNDU1IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iOS41MTkiIGhlaWdodD0iMC42NCIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfNF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjY1LjAzNTYiIHkxPSI2NC4wNzA2IiB4Mj0iMjY4LjA1MjkiIHkyPSI2NC4wNzA2Ij48c3RvcCAgb2Zmc2V0PSIwLjAxMDgiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz48c3RvcCAgb2Zmc2V0PSIwLjA2NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMDIwMjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE2NTQiIHN0eWxlPSJzdG9wLWNvbG9yOiM1NDU0NTQiLz48c3RvcCAgb2Zmc2V0PSIwLjI2OTMiIHN0eWxlPSJzdG9wLWNvbG9yOiM4MjgyODIiLz48c3RvcCAgb2Zmc2V0PSIwLjM3NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiNBOEE4QTgiLz48c3RvcCAgb2Zmc2V0PSIwLjQ4NTIiIHN0eWxlPSJzdG9wLWNvbG9yOiNDOEM4QzgiLz48c3RvcCAgb2Zmc2V0PSIwLjU5ODUiIHN0eWxlPSJzdG9wLWNvbG9yOiNFMEUwRTAiLz48c3RvcCAgb2Zmc2V0PSIwLjcxNzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNGMUYxRjEiLz48c3RvcCAgb2Zmc2V0PSIwLjg0NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGQ0ZDRkMiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzRfKSIgcG9pbnRzPSIyNjUuMDM2LDYyLjM0NyAyNjguMDUzLDY0LjY3NCAyNjUuMDU4LDY1Ljc5NSAiLz48cmVjdCB4PSIyNTcuODAyIiB5PSI3Ni42MzUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI5LjUxOSIgaGVpZ2h0PSIwLjY0Ii8+PGc+PGc+PHJlY3QgeD0iMjU3LjQxOSIgeT0iNjUuMzg5IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNC43MzQiIGhlaWdodD0iMC42NCIvPjxyZWN0IHg9IjI1Ny4zNjciIHk9IjY3Ljc2OCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjkuNTE5IiBoZWlnaHQ9IjAuNjQiLz48cmVjdCB4PSIyNTcuMzY3IiB5PSI2OC45NDUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI5LjUxOSIgaGVpZ2h0PSIwLjY0Ii8+PHJlY3QgeD0iMjU3LjM2NyIgeT0iNzAuMTIyIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iOS41MTkiIGhlaWdodD0iMC42NCIvPjxyZWN0IHg9IjI1Ny4zNjciIHk9IjcxLjMyNSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjkuNTE5IiBoZWlnaHQ9IjAuNjQiLz48cmVjdCB4PSIyNTcuNDE5IiB5PSI2Ni41NjYiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI5LjUxOSIgaGVpZ2h0PSIwLjY0Ii8+PC9nPjxyZWN0IHg9IjI1Ny4yOTEiIHk9IjczLjU5IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iOS41MTkiIGhlaWdodD0iMC42NCIvPjxyZWN0IHg9IjI1Ny4yOTEiIHk9Ijc0Ljc2NyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjkuNTE5IiBoZWlnaHQ9IjAuNjQiLz48cmVjdCB4PSIyNTcuMzQyIiB5PSI3Mi4zODciIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI5LjUxOSIgaGVpZ2h0PSIwLjY0Ii8+PC9nPjxwYXRoIGZpbGw9IiNGMTRENTEiIGQ9Ik0yNTYuNzI4LDc5Ljc2OWwxMS42OTQtOC4wMzVjMC4yMDUtMC4xNTQsMC4zODQtMC4zMzMsMC40ODYtMC41MzdjMC4wNTEsMC4xMjgsMC4wNzcsMC4yNTYsMC4wNzcsMC4zODR2Ny41MjNjMCwwLjU2My0wLjQ2MSwxLjA0OS0xLjA0OSwxLjA0OWgtMTEuMjA4Yy0wLjIwNSwwLTAuMzg0LTAuMDUxLTAuNTM3LTAuMTU0QzI1Ni4zNjksNzkuOTc0LDI1Ni41NDksNzkuODk3LDI1Ni43MjgsNzkuNzY5eiIvPjxwYXRoIGZpbGw9IiNGQTU2NUEiIGQ9Ik0yNjcuODMzLDc5LjgybC0xMS42OTQtOC4wMzVjLTAuMjA1LTAuMTU0LTAuMzg0LTAuMzMzLTAuNDg2LTAuNTM3Yy0wLjA1MSwwLjEyOC0wLjA3NywwLjI1Ni0wLjA3NywwLjM4NHY3LjU0OWMwLDAuNTYzLDAuNDYxLDEuMDQ5LDEuMDQ5LDEuMDQ5aDExLjIwOGMwLjIwNSwwLDAuMzg0LTAuMDUxLDAuNTM3LTAuMTU0QzI2OC4yMTcsNzkuOTk5LDI2OC4wMTIsNzkuOTIzLDI2Ny44MzMsNzkuODJ6Ii8+PHBhdGggb3BhY2l0eT0iMC42IiBmaWxsPSIjRjE0RDUxIiBkPSJNMjY3LjgzMyw3OS44MmwtNS41NzgtMy44MzhsLTUuNTc4LDMuODM4Yy0wLjE3OSwwLjEyOC0wLjM1OCwwLjIwNS0wLjU2MywwLjIzYzAuMTU0LDAuMTAyLDAuMzMzLDAuMTU0LDAuNTM3LDAuMTU0aDQuOTY0aDYuMjY5YzAuMjA1LDAsMC4zODQtMC4wNTEsMC41MzctMC4xNTRDMjY4LjIxNyw3OS45OTksMjY4LjAxMiw3OS45MjMsMjY3LjgzMyw3OS44MnoiLz48cG9seWdvbiBmaWxsPSIjRDhEOEQ4IiBwb2ludHM9IjI2NS4zMDQsNjIuNTA2IDI2Ny43OTUsNjQuNDY3IDI2NS4zMDQsNjUuMzg5ICIvPjwvZz48Zz48Y2lyY2xlIGZpbGw9IiM3MjlDRkEiIGN4PSIyNzAuMDAyIiBjeT0iNTAuODM5IiByPSI3LjM5NyIvPjxjaXJjbGUgZmlsbD0iI0Y5REIwMiIgY3g9IjI3MC4wMDIiIGN5PSI1MC44MzkiIHI9IjMuMjY2Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTI2OS44MzUsNDcuMTQ4YzAuMTExLDAsMC4yMjIsMCwwLjMzMywwYy0wLjA1Ni0wLjQ0NS0wLjExMS0wLjg5MS0wLjE2Ny0xLjMzNkMyNjkuOTQ2LDQ2LjI1NywyNjkuODkxLDQ2LjcwMywyNjkuODM1LDQ3LjE0OHoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMjY5LjgzNSw1NC40MjJjMC4xMTEsMCwwLjIyMiwwLDAuMzMzLDBjLTAuMDU2LDAuNDQ1LTAuMTExLDAuODkxLTAuMTY3LDEuMzM2QzI2OS45NDYsNTUuMzEzLDI2OS44OTEsNTQuODY4LDI2OS44MzUsNTQuNDIyeiIvPjxwYXRoIGZpbGw9IiNGOURCMDIiIGQ9Ik0yNzMuNDcyLDUwLjg0NGMwLDAuMTExLDAsMC4yMjIsMCwwLjMzM2MwLjQ0NS0wLjA1NiwwLjg5MS0wLjExMSwxLjMzNi0wLjE2N0MyNzQuMzYzLDUwLjk1NSwyNzMuOTE4LDUwLjg5OSwyNzMuNDcyLDUwLjg0NHoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMjY2LjE5OCw1MC44NDRjMCwwLjExMSwwLDAuMjIyLDAsMC4zMzNjLTAuNDQ1LTAuMDU2LTAuODkxLTAuMTExLTEuMzM2LTAuMTY3QzI2NS4zMDcsNTAuOTU1LDI2NS43NTMsNTAuODk5LDI2Ni4xOTgsNTAuODQ0eiIvPjxwYXRoIGZpbGw9IiNGOURCMDIiIGQ9Ik0yNzIuNDU2LDQ4LjE1NGMwLjA3OSwwLjA3OSwwLjE1NywwLjE1NywwLjIzNiwwLjIzNmMwLjI3Ni0wLjM1NCwwLjU1MS0wLjcwOCwwLjgyNy0xLjA2M0MyNzMuMTY0LDQ3LjYwMywyNzIuODEsNDcuODc4LDI3Mi40NTYsNDguMTU0eiIvPjxwYXRoIGZpbGw9IiNGOURCMDIiIGQ9Ik0yNjcuMzEyLDUzLjI5OGMwLjA3OSwwLjA3OSwwLjE1NywwLjE1NywwLjIzNiwwLjIzNmMtMC4zNTQsMC4yNzYtMC43MDgsMC41NTEtMS4wNjMsMC44MjdDMjY2Ljc2MSw1NC4wMDYsMjY3LjAzNiw1My42NTIsMjY3LjMxMiw1My4yOTh6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTI3Mi44NTgsNTMuMjk4Yy0wLjA3OSwwLjA3OS0wLjE1NywwLjE1Ny0wLjIzNiwwLjIzNmMwLjM1NCwwLjI3NiwwLjcwOCwwLjU1MSwxLjA2MywwLjgyN0MyNzMuNDA5LDU0LjAwNiwyNzMuMTM0LDUzLjY1MiwyNzIuODU4LDUzLjI5OHoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMjY3LjcxNCw0OC4xNTRjLTAuMDc5LDAuMDc5LTAuMTU3LDAuMTU3LTAuMjM2LDAuMjM2Yy0wLjI3Ni0wLjM1NC0wLjU1MS0wLjcwOC0wLjgyNy0xLjA2M0MyNjcuMDA2LDQ3LjYwMywyNjcuMzYsNDcuODc4LDI2Ny43MTQsNDguMTU0eiIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzVfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjIxOS4wOTczIiB5MT0iNjQuMzQxOCIgeDI9IjI2My4xMjc3IiB5Mj0iNjQuMzQxOCI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MC4yIi8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MC40Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzVfKSIgZD0iTTIzNC44NTUsMzQuMzI2YzEuMDI5LDEyLjk1LDEzLjgwNCwxMS42ODgsMjEuMzU1LDI0LjU2NGMzLjA0NCw1LjE5LDEyLjUwOCwzMC42MjEsMi4zMDMsMzMuOTY3QzIyNC44MjcsMTAzLjkwMiwyMDIuNDY0LDUwLjg4LDIzNC44NTUsMzQuMzI2eiIvPjxnPjxnPjxwYXRoIGZpbGw9IiNDNkM2QzYiIGQ9Ik0yNzMuMTA3LDQxLjg2NWgwLjI2MWMwLjEyLDAsMC4yMjUtMC4wMTYsMC4zMTUtMC4wNDhjMC4wOS0wLjAzMiwwLjE2Ni0wLjA3NSwwLjIyOC0wLjEzYzAuMDYxLTAuMDU1LDAuMTA3LTAuMTE5LDAuMTM4LTAuMTkyczAuMDQ2LTAuMTUxLDAuMDQ2LTAuMjM0YzAtMC4wOTQtMC4wMTMtMC4xOC0wLjA0LTAuMjU3cy0wLjA2Ni0wLjE0NS0wLjEyLTAuMjAxcy0wLjEyMS0wLjEtMC4yMDMtMC4xMzFjLTAuMDgyLTAuMDMxLTAuMTc5LTAuMDQ3LTAuMjkyLTAuMDQ3Yy0wLjA5OCwwLTAuMTg5LDAuMDE1LTAuMjcxLDAuMDQ1cy0wLjE1NSwwLjA3My0wLjIxNiwwLjEyOGMtMC4wNjEsMC4wNTYtMC4xMDksMC4xMjMtMC4xNDMsMC4yMDJjLTAuMDM0LDAuMDc5LTAuMDUxLDAuMTY4LTAuMDUxLDAuMjY2aC0wLjI1NmMwLTAuMTI1LDAuMDI0LTAuMjQxLDAuMDcyLTAuMzQ2YzAuMDQ4LTAuMTA1LDAuMTEzLTAuMTk2LDAuMTk3LTAuMjcyYzAuMDgzLTAuMDc2LDAuMTgyLTAuMTM1LDAuMjk3LTAuMTc3YzAuMTE1LTAuMDQyLDAuMjM5LTAuMDYzLDAuMzczLTAuMDYzYzAuMTM3LDAsMC4yNjEsMC4wMTksMC4zNzQsMC4wNThjMC4xMTMsMC4wMzgsMC4yMDgsMC4wOTQsMC4yODcsMC4xNjhjMC4wNzksMC4wNzMsMC4xNCwwLjE2MywwLjE4NCwwLjI3YzAuMDQzLDAuMTA3LDAuMDY1LDAuMjI5LDAuMDY1LDAuMzY3YzAsMC4wNy0wLjAxMSwwLjEzOS0wLjAzNCwwLjIwOGMtMC4wMjMsMC4wNjktMC4wNTYsMC4xMzQtMC4xLDAuMTk1Yy0wLjA0NCwwLjA2MS0wLjEsMC4xMTctMC4xNjcsMC4xNjhjLTAuMDY3LDAuMDUxLTAuMTQ0LDAuMDkyLTAuMjMxLDAuMTI1YzAuMTAzLDAuMDI4LDAuMTkxLDAuMDY3LDAuMjY1LDAuMTE2YzAuMDc0LDAuMDQ5LDAuMTM1LDAuMTA2LDAuMTgzLDAuMTcyYzAuMDQ4LDAuMDY2LDAuMDgzLDAuMTM3LDAuMTA3LDAuMjE2czAuMDM1LDAuMTYsMC4wMzUsMC4yNDZjMCwwLjE0MS0wLjAyNCwwLjI2Ni0wLjA3MywwLjM3NnMtMC4xMTUsMC4yMDMtMC4yMDEsMC4yNzlzLTAuMTg3LDAuMTM0LTAuMzAzLDAuMTczcy0wLjI0NCwwLjA1OS0wLjM4LDAuMDU5Yy0wLjEyNywwLTAuMjUtMC4wMTktMC4zNjgtMC4wNTZzLTAuMjI1LTAuMDkyLTAuMzE4LTAuMTY2cy0wLjE2OC0wLjE2Ni0wLjIyNC0wLjI3N2MtMC4wNTYtMC4xMTEtMC4wODQtMC4yNDEtMC4wODQtMC4zODloMC4yNTZjMCwwLjA5OCwwLjAxOCwwLjE4OSwwLjA1NCwwLjI3MXMwLjA4NywwLjE1MywwLjE1MywwLjIxM2MwLjA2NiwwLjA1OSwwLjE0MywwLjEwNSwwLjIzNCwwLjEzOGMwLjA5LDAuMDMzLDAuMTksMC4wNDksMC4yOTgsMC4wNDljMC4yMjEsMCwwLjM5My0wLjA1NywwLjUxNi0wLjE3czAuMTg1LTAuMjc3LDAuMTg1LTAuNDkyYzAtMC4xMTMtMC4wMTktMC4yMDktMC4wNTctMC4yOTFjLTAuMDM4LTAuMDgxLTAuMDkxLTAuMTQ4LTAuMTYtMC4yYy0wLjA2OS0wLjA1Mi0wLjE1Mi0wLjA5LTAuMjQ4LTAuMTE0Yy0wLjA5Ni0wLjAyNC0wLjIwMy0wLjAzNi0wLjMxOS0wLjAzNmgtMC4yNjFWNDEuODY1eiIvPjxwYXRoIGZpbGw9IiNDNkM2QzYiIGQ9Ik0yNzYuOTEyLDQzLjU1OWgtMS45NDh2LTAuMTk3bDEuMDE5LTEuMTU2YzAuMDk1LTAuMTA4LDAuMTc2LTAuMjA2LDAuMjQyLTAuMjkzczAuMTItMC4xNjgsMC4xNi0wLjI0MmMwLjA0MS0wLjA3NSwwLjA3LTAuMTQ1LDAuMDg4LTAuMjExYzAuMDE4LTAuMDY2LDAuMDI3LTAuMTMyLDAuMDI3LTAuMTk4YzAtMC4wOTQtMC4wMTQtMC4xOC0wLjA0Mi0wLjI1N3MtMC4wNjktMC4xNDUtMC4xMjQtMC4yMDJjLTAuMDU1LTAuMDU3LTAuMTIzLTAuMTAxLTAuMjA0LTAuMTMyYy0wLjA4MS0wLjAzMS0wLjE3NC0wLjA0Ny0wLjI4LTAuMDQ3Yy0wLjEwOCwwLTAuMjA1LDAuMDE4LTAuMjkyLDAuMDU0Yy0wLjA4NiwwLjAzNi0wLjE2LDAuMDg3LTAuMjIsMC4xNTFjLTAuMDYxLDAuMDY0LTAuMTA3LDAuMTQtMC4xNCwwLjIyOWMtMC4wMzMsMC4wODgtMC4wNDksMC4xODQtMC4wNDksMC4yODhoLTAuMjU0YzAtMC4xMjgsMC4wMjItMC4yNDksMC4wNjUtMC4zNjNjMC4wNDMtMC4xMTQsMC4xMDYtMC4yMTQsMC4xODktMC4yOTljMC4wODMtMC4wODUsMC4xODMtMC4xNTMsMC4zLTAuMjAzczAuMjUxLTAuMDc1LDAuNDAxLTAuMDc1YzAuMTQsMCwwLjI2NiwwLjAxOSwwLjM3OCwwLjA1N2MwLjExMywwLjAzOCwwLjIwOCwwLjA5MywwLjI4NiwwLjE2NGMwLjA3OCwwLjA3MiwwLjEzOCwwLjE2LDAuMTgxLDAuMjYzYzAuMDQyLDAuMTAzLDAuMDYzLDAuMjIsMC4wNjMsMC4zNTFjMCwwLjA5NC0wLjAxNywwLjE4OS0wLjA1MSwwLjI4NGMtMC4wMzQsMC4wOTUtMC4wOCwwLjE5LTAuMTM3LDAuMjg0Yy0wLjA1NywwLjA5NC0wLjEyMiwwLjE4Ny0wLjE5NywwLjI4Yy0wLjA3NCwwLjA5My0wLjE1LDAuMTg0LTAuMjI5LDAuMjczbC0wLjg2NywwLjk4MWgxLjYzNFY0My41NTl6Ii8+PC9nPjxnPjxnPjxwYXRoIGZpbGw9IiNDNkM2QzYiIGQ9Ik0yNzYuOTY1LDQwLjc0NmMwLTAuMDc1LDAuMDEyLTAuMTQ1LDAuMDM3LTAuMjA5YzAuMDI1LTAuMDY0LDAuMDYtMC4xMTksMC4xMDUtMC4xNjVjMC4wNDUtMC4wNDYsMC4xLTAuMDgzLDAuMTY0LTAuMTA5YzAuMDY0LTAuMDI2LDAuMTM1LTAuMDQsMC4yMTMtMC4wNGMwLjA3OSwwLDAuMTUyLDAuMDEzLDAuMjE2LDAuMDRjMC4wNjQsMC4wMjYsMC4xMTksMC4wNjIsMC4xNjQsMC4xMDljMC4wNDUsMC4wNDYsMC4wOCwwLjEwMSwwLjEwNCwwLjE2NWMwLjAyNSwwLjA2NCwwLjAzNywwLjEzNCwwLjAzNywwLjIwOXYwLjAzMmMwLDAuMDc1LTAuMDEyLDAuMTQ1LTAuMDM3LDAuMjA5Yy0wLjAyNCwwLjA2NC0wLjA1OSwwLjExOS0wLjEwNCwwLjE2NWMtMC4wNDUsMC4wNDYtMC4xLDAuMDgyLTAuMTYzLDAuMTA4Yy0wLjA2NCwwLjAyNi0wLjEzNiwwLjAzOS0wLjIxNCwwLjAzOWMtMC4wNzksMC0wLjE1MS0wLjAxMy0wLjIxNC0wLjAzOWMtMC4wNjQtMC4wMjYtMC4xMTktMC4wNjItMC4xNjQtMC4xMDhjLTAuMDQ2LTAuMDQ2LTAuMDgxLTAuMTAxLTAuMTA2LTAuMTY1Yy0wLjAyNS0wLjA2NC0wLjAzNy0wLjEzNC0wLjAzNy0wLjIwOVY0MC43NDZ6IE0yNzcuMDk0LDQwLjc3OGMwLDAuMDU3LDAuMDA5LDAuMTExLDAuMDI2LDAuMTYyYzAuMDE3LDAuMDUyLDAuMDQyLDAuMDk2LDAuMDc1LDAuMTM1YzAuMDMzLDAuMDM4LDAuMDc0LDAuMDY5LDAuMTIzLDAuMDkyYzAuMDQ5LDAuMDIzLDAuMTA1LDAuMDM1LDAuMTY4LDAuMDM1YzAuMDYzLDAsMC4xMTktMC4wMTEsMC4xNjctMC4wMzVjMC4wNDgtMC4wMjMsMC4wODktMC4wNTQsMC4xMjItMC4wOTJjMC4wMzMtMC4wMzksMC4wNTgtMC4wODQsMC4wNzYtMC4xMzVjMC4wMTctMC4wNTEsMC4wMjYtMC4xMDUsMC4wMjYtMC4xNjJ2LTAuMDMyYzAtMC4wNTYtMC4wMDktMC4xMDktMC4wMjYtMC4xNmMtMC4wMTctMC4wNTItMC4wNDItMC4wOTYtMC4wNzYtMC4xMzZjLTAuMDMzLTAuMDM5LTAuMDc0LTAuMDctMC4xMjMtMC4wOTNjLTAuMDQ5LTAuMDIzLTAuMTA1LTAuMDM1LTAuMTY4LTAuMDM1Yy0wLjA2MywwLTAuMTE4LDAuMDExLTAuMTY2LDAuMDM1Yy0wLjA0OSwwLjAyMy0wLjA4OSwwLjA1NC0wLjEyMiwwLjA5M2MtMC4wMzMsMC4wMzktMC4wNTgsMC4wODQtMC4wNzUsMC4xMzZjLTAuMDE3LDAuMDUxLTAuMDI2LDAuMTA1LTAuMDI2LDAuMTZWNDAuNzc4eiIvPjwvZz48L2c+PGc+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTI3OS4yNiw0My40N2MwLjA3MiwwLDAuMTQxLTAuMDEsMC4yMDctMC4wMzFjMC4wNjYtMC4wMjEsMC4xMjUtMC4wNTEsMC4xNzctMC4wOTJjMC4wNTItMC4wNCwwLjA5NC0wLjA5LDAuMTI4LTAuMTQ5YzAuMDMzLTAuMDU5LDAuMDUyLTAuMTI4LDAuMDU4LTAuMjA2aDAuMjE3Yy0wLjAwNSwwLjA5Ny0wLjAyOSwwLjE4Ny0wLjA3MywwLjI2OWMtMC4wNDQsMC4wODItMC4xMDEsMC4xNTMtMC4xNzIsMC4yMTJjLTAuMDcxLDAuMDU5LTAuMTUzLDAuMTA2LTAuMjQ3LDAuMTM5Yy0wLjA5MywwLjAzMy0wLjE5MiwwLjA1LTAuMjk1LDAuMDVjLTAuMTQ0LDAtMC4yNy0wLjAyNi0wLjM3OC0wLjA3OWMtMC4xMDgtMC4wNTItMC4xOTktMC4xMjUtMC4yNzMtMC4yMTdjLTAuMDc0LTAuMDkyLTAuMTI5LTAuMi0wLjE2Ni0wLjMyNGMtMC4wMzctMC4xMjQtMC4wNTYtMC4yNTgtMC4wNTYtMC40MDJ2LTAuMDhjMC0wLjE0NCwwLjAxOS0wLjI3OCwwLjA1Ni0wLjQwMmMwLjAzNy0wLjEyNCwwLjA5Mi0wLjIzMiwwLjE2NS0wLjMyM2MwLjA3My0wLjA5MiwwLjE2NC0wLjE2NCwwLjI3My0wLjIxNmMwLjEwOS0wLjA1MywwLjIzNS0wLjA4LDAuMzc3LTAuMDhjMC4xMSwwLDAuMjEyLDAuMDE3LDAuMzA2LDAuMDUxYzAuMDk0LDAuMDM0LDAuMTc2LDAuMDgzLDAuMjQ2LDAuMTQ2YzAuMDcsMC4wNjMsMC4xMjYsMC4xNCwwLjE2NywwLjIzYzAuMDQyLDAuMDksMC4wNjUsMC4xOTEsMC4wNywwLjMwMWgtMC4yMTdjLTAuMDA1LTAuMDgzLTAuMDIzLTAuMTU3LTAuMDU0LTAuMjIzYy0wLjAzMS0wLjA2NS0wLjA3Mi0wLjEyMi0wLjEyMy0wLjE2OGMtMC4wNTEtMC4wNDctMC4xMS0wLjA4Mi0wLjE3OC0wLjEwN2MtMC4wNjgtMC4wMjQtMC4xNC0wLjAzNy0wLjIxNy0wLjAzN2MtMC4xMTcsMC0wLjIxNiwwLjAyMy0wLjI5OCwwLjA2OGMtMC4wODEsMC4wNDUtMC4xNDgsMC4xMDctMC4xOTksMC4xODRjLTAuMDUyLDAuMDc3LTAuMDg5LDAuMTY1LTAuMTEzLDAuMjY1Yy0wLjAyMywwLjEtMC4wMzUsMC4yMDQtMC4wMzUsMC4zMTJ2MC4wOGMwLDAuMTEsMC4wMTIsMC4yMTUsMC4wMzUsMC4zMTVjMC4wMjMsMC4xLDAuMDYsMC4xODksMC4xMTEsMC4yNjVjMC4wNTEsMC4wNzYsMC4xMTgsMC4xMzcsMC4yMDEsMC4xODNDMjc5LjA0Myw0My40NDcsMjc5LjE0Miw0My40NywyNzkuMjYsNDMuNDd6Ii8+PC9nPjwvZz48L2c+PGc+PGc+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNGOUY5RjkiIGN4PSIxMzEiIGN5PSI1Ni45MzUiIHI9IjU2LjUiLz48cmVjdCB4PSI4Ni4zMTEiIHk9IjE0LjQ4IiBmaWxsPSIjRkJGQkZCIiB3aWR0aD0iODguNDIxIiBoZWlnaHQ9Ijg4LjQyMSIvPjwvZz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMxMTExMTEiIHN0cm9rZS13aWR0aD0iMC43NSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTQxLjcwMyw0NC4zMDJjLTUuMDc0LTAuNDE0LTE0LjQyNi0yLjk1My0xNy4yNzQsMy4wNzJjLTEuNTg1LDMuMzU0LDAuNjkzLDcuNDk4LDEuNTUyLDEwLjczNmMxLjMyNCw0Ljk5NS0xLjI2Nyw1Ljk2NS01Ljc2NSw2LjczMWMtMy44NCwwLjY1NS0xMC42LDEuODM3LTkuNzQ3LDcuMjAxYzAuNzAyLDQuNDE3LDUuMzUsNi4xNTYsNy42ODQsOS40NTZjNC42MTYsNi41MjctOS4zNDcsOS4xNC0xMi45ODUsMTAuNTU4Yy00LjA0OSwxLjU3OC04LjM0NCw0LjA4My0xMC42NDksNy44OTFjLTIuNzk3LDQuNjIxLTIuMDEsMTAuOTA3LDAuMDgxLDE1LjYzMmMwLjYzNSwxLjQzNSwxLjM2NiwyLjgyNiwyLjA5Niw0LjIxNCIvPjxnPjxwb2x5Z29uIG9wYWNpdHk9IjAuMDYiIGZpbGw9IiMwMjAyMDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBwb2ludHM9IjE0OC41NDEsNjIuODMgMTQwLjgsNDYuMjEyIDEyNC4wNzksMzguNDcxIDE2MC43MjEsMjYuMjkxICIvPjxwb2x5Z29uIGZpbGw9IiM0Mjg1RjQiIHBvaW50cz0iMTQ4LjU0MSw2MC42NjIgMTQxLjIxMyw0NC45NzMgMTI1LjUyNCwzNy43NDggMTU5Ljk5OCwyNi4yOTEgIi8+PC9nPjxnPjxjaXJjbGUgZmlsbD0iI0YxMjgyMSIgY3g9IjE2Ni4zMTUiIGN5PSI5NC41MDUiIHI9IjE3LjAwNSIvPjxnPjxyZWN0IHg9IjE2NS4yNDQiIHk9Ijg3LjU5NCIgZmlsbD0iI0Y5RjlGOSIgd2lkdGg9IjEuNTExIiBoZWlnaHQ9IjE0LjQ2Ii8+PHJlY3QgeD0iMTU4Ljc2NiIgeT0iOTQuMDY5IiBmaWxsPSIjRjlGOUY5IiB3aWR0aD0iMTQuNDYiIGhlaWdodD0iMS41MTEiLz48L2c+PC9nPjwvZz48L3N2Zz4=);<?php } ?>
background-size: contain;
}

.wpmchimpas h3{
width: 100%;
line-height: 86px;
margin-bottom:10px;
color: #fff;
font-size: 25px;
position: relative;
background: #0188cc;
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
if(isset($theme["slider_hbg_c"])){
    echo 'background-color:'.$theme["slider_hbg_c"].';';
}
?>
}
.wpmchimpas h3::before{
content:'';
background:<?php echo $this->getIcon('opt1',25,(isset($theme["slider_hi_c"]))?$theme["slider_hi_c"]:'#fff');?> no-repeat center;
position: absolute;
top: 0;
left: 0;
width: 65px;
height: 86px;
}
.wpmchimpas .wpmchimpa_para{
margin: 30px 30px 10px;
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
font-size: 12px;
color: #000;
font-weight: lighter;
line-height: 18px;
<?php if(isset($theme["slider_msg_f"])){
echo 'font-family:'.$theme["slider_msg_f"].';';
}if(isset($theme["slider_msg_fs"])){
echo 'font-size:'.$theme["slider_msg_fs"].'px;';
}?>
}

.wpmchimpas .wpmchimpa-cont{
  display: inline-block;
  width: 100%;
}

.wpmchimpas .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 12px auto;
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
right: 0;
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
  padding-right: 40px;
  <?php 
if(isset($theme["slider_tbox_h"])){
  echo 'padding-left:'.$theme["slider_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#000');
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
	border-color:#0188cc;
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
  color:#0188cc;
  line-height: 12px;
  padding-left: 5px;
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'color:'.$theme["slider_tbox_fc"].';';
  }
   ?>
}

.wpmchimpas .wpmchimpa-field .bar  { 
  position:relative; display:block; width:100%; 
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
  top:-1px; 
  position:absolute;
  background:#0188cc; 
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
  top:14%; 
  left:0;
  opacity:0.5;
  <?php 
    if(isset($theme["slider_tbox_w"])){
        echo 'width:'.$theme["slider_tbox_w"].'px;';
    }
?>
}
.wpmchimpas .wpmchimpa-field input:focus ~ .highlighter {
  -webkit-animation:inputHighlightersa 0.3s ease;
  animation:inputHighlightersa 0.3s ease;
}
@-webkit-keyframes inputHighlightersa {
  from { background:#0188cc;
  <?php
  if(isset($theme["slider_tbox_fc"])){
      echo 'background-color:'.$theme["slider_tbox_fc"].';';
  }
   ?> }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlightersa {
  from { background:#0188cc;
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
  line-height: 20px;
  position: relative;
  padding-left: 35px;
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
border:1px solid #0188cc;
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
        $tfc='#0188cc';
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


.wpmchimpas .wpmchimpas-inner form{margin:0 30px;}

.wpmchimpas .wpmchimpa-subs-button{
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
  -webkit-transition:  box-shadow 0.3s;
  transition:  box-shadow 0.3s;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
position: relative;
overflow: hidden;
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
.wpmchimpas .wpmchimpa-subs-button.subsicon:before{
padding-right: 45px;
  <?php 
  if(isset($theme["slider_button_w"])){
      echo 'padding-left:'.$theme["slider_button_h"].'px;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
right: 0;
pointer-events: none;
  <?php 
  if(isset($theme["slider_button_h"])){
      echo 'width:'.$theme["slider_button_h"].'px;';
      echo 'height:'.$theme["slider_button_h"].'px;';
  }
  $col = ((isset($theme["slider_bg_c"]))? $theme["slider_bg_c"] : '#fff');
  $bi='b03';
  if(isset($theme["slider_button_i"])){
	if($theme["slider_button_i"] == 'inone')$bi='';
	else if($theme["slider_button_i"] != 'idef')$bi=$theme["slider_button_i"];
  }
  echo 'background: '.$this->getIcon($bi,25,$col).' no-repeat center;';
  ?>
}
.wpmchimpas .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.wpmchimpas .wpmchimpa-signal {
display: none;
}
.wpmchimpas-inner.signalshow .wpmchimpa-signal {
  display: inline-block;
}

.wpmchimpas .wpmchimpa-tag,
.wpmchimpas .wpmchimpa-tag *{
color:#000;
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
        $tfc='#000';
        if(isset($theme["slider_tag_fc"])){$tfc=$theme["slider_tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpas .wpmchimpa-feedback{
  margin: -40px 0 22px;
  text-align: center;
  position: relative;
  font-size: 12px;
height: 12px;
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
background: #0188cc;
width:50px;
height:50px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
-webkit-transition: -webkit-transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),box-shadow 0.3s;
transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86),box-shadow 0.3s;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}
.wpmchimpas-trig:hover .wpmchimpas-trigi{
-webkit-transform:scale(1.05);
-ms-transform:scale(1.05);
transform:scale(1.05);
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
.wpmchimpas-trigi:before{	
<?php 
$ti='b03';
if(isset($theme["slider_trigger_i"])){
  if($theme["slider_trigger_i"] == 'inone')$ti='';
  else if($theme["slider_trigger_i"] != 'idef')$ti=$theme["slider_trigger_i"];
}
 ?>	
content:<?php echo $this->getIcon($ti,28,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
text-align: center;
line-height: 52px;
}

.wpmchimpas .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
}
.wpmchimpas .wpmchimpa-social::before{
content: '<?php if(isset($theme['slider_soc_head'])) echo $theme['slider_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 45px;
display: block;
float:left;
margin-right: 20px;
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
width:45px;
height: 45px;
-webkit-transition:background 0.3s,box-shadow 0.3s;
transition:background 0.3s,box-shadow 0.3s;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
margin-right:5px; 
float: left;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc:hover{
box-shadow:0 2px 3px rgba(0,0,0,0.1), 0 4px 8px rgba(0,0,0,0.3);
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
width:45px;
height: 45px;
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
background-image:<?php echo $this->getIcon('fb1',16,'#2d609b');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb:hover:before {
background-image:<?php echo $this->getIcon('fb1',16,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',16,'#eb4026');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp:hover:before {
background-image: <?php echo $this->getIcon('gp1',16,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',16,'#00BCF2');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms:hover:before {
background-image: <?php echo $this->getIcon('ms1',16,'#fff');?>
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
    <div class="wpmchimpas-inner wpmchimpselector wpmchimpa-reset wpmchimpa-mainc">
<h3><?php if(isset($theme['slider_heading'])) echo $theme['slider_heading'];?></h3>
<?php if(isset($theme['slider_msg'])) echo '<div class="wpmchimpa_para">'.$theme['slider_msg'].'</div>';?>
  <div class="wpmchimpa-cont">
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
<div class="wpmchimpa-subs-button wpmchimpa-matbut<?php echo (!isset($theme['slider_button_i']) || (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone'))? ' subsicon' : '';?>"></div>


            <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
		    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'3','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#0188cc');?></div></div>
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