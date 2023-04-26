<style type="text/css">
.wpmchimpa-overlay-bg {
background: rgba(0,0,0,{{data.theme.l4.lite_bg_op/100 ||'0.4'}});
height: 778px;
width: 1024px;
}

.wpmchimpa-overlay-bg #wpmchimpa-main {
width: 550px;
min-height: 350px;
background: {{data.theme.l4.lite_bg_c || '#27313B'}};
display: inline-block;
position: relative;
left: 50%;
margin: 100px auto;
-webkit-transform: translatex(-50% );
-moz-transform: translatex(-50% );
-ms-transform: translatex(-50% );
-o-transform: translatex(-50% );
transform: translatex(-50% );
}
#wpmchimpa-main .wpmchimpa-leftpane{
height: 135px;
width: 550px;
display: block;
background-image: url({{data.theme.l4.lite_img1||'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI1NTBweCIgaGVpZ2h0PSIxMzVweCIgdmlld0JveD0iMCAwIDU1MCAxMzUiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDU1MCAxMzUiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9IiMyNTJCMzciIHdpZHRoPSI1NTAiIGhlaWdodD0iMTM1Ii8+PGc+PHBhdGggZmlsbD0iI0M2MzIzRCIgZD0iTTE5OSw2Mi4xYy0wLjIsMC43LTAuMywxLjUtMC4zLDIuM3Y1MS4zYzAsNC40LDMuNiw4LDgsOEgyOTNjNC40LDAsOC0zLjYsOC04VjY0LjRjMC0wLjgtMC4xLTEuNi0wLjMtMi4zQzMwMC43LDYyLjEsMTk5LDYyLjEsMTk5LDYyLjF6Ii8+PHBhdGggZmlsbD0iIzIxNjg5NiIgZD0iTTI5Myw0OS41aC04Ni40Yy00LjQsMC04LDMuNi04LDhjMCwwLDAuMi0wLjQsMC42LTEuM2MwLjgsMS42LDIsMywzLjcsNC4xbDQ2LjksMzIuM2w0Ni45LTMyLjNjMS42LTEuMSwyLjktMi42LDMuNy00LjFjMC40LDAuOSwwLjYsMS4zLDAuNiwxLjNDMzAxLDUzLjEsMjk3LjUsNDkuNSwyOTMsNDkuNXoiLz48cGF0aCBmaWxsPSIjRkNGQ0ZDIiBkPSJNMjkzLjYsMTE0LjhjMCw0LjctMy42LDguNi04LDguNmgtNzIuM2MtNC40LDAtOC0zLjgtOC04LjZWMjEuM2MwLTQuNywzLjYtOC42LDgtOC42aDcyLjNjNC40LDAsOCwzLjgsOCw4LjZWMTE0Ljh6Ii8+PHJlY3QgeD0iMjExLjgiIHk9IjIyLjciIGZpbGw9IiNGNEY0RjQiIHdpZHRoPSI3My4yIiBoZWlnaHQ9Ijg2LjUiLz48Zz48cmVjdCB4PSIyMTIuMSIgeT0iMzcuNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM2LjMiIGhlaWdodD0iNSIvPjxyZWN0IHg9IjIxMS44IiB5PSI1NS45IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PHJlY3QgeD0iMjExLjgiIHk9IjY1IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PHJlY3QgeD0iMjExLjgiIHk9Ijc0LjEiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI3My4yIiBoZWlnaHQ9IjUiLz48cmVjdCB4PSIyMTEuOCIgeT0iODMuMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjczLjIiIGhlaWdodD0iNSIvPjxyZWN0IHg9IjIxMi4xIiB5PSI0Ni43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNzMuMiIgaGVpZ2h0PSI1Ii8+PC9nPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNDM5IiB5MT0iLTMxMi40NCIgeDI9IjUzNy41IiB5Mj0iLTMxMi40NCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAtMjM3LjYgLTIyNC44NCkiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE0MzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNENEQ0RDQ7c3RvcC1vcGFjaXR5OjAuMTI5MSIvPjxzdG9wICBvZmZzZXQ9IjAuNDYiIHN0eWxlPSJzdG9wLWNvbG9yOiM3QTdBN0E7c3RvcC1vcGFjaXR5OjAuNDE0Ii8+PHN0b3AgIG9mZnNldD0iMC43MTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMzODM4Mzg7c3RvcC1vcGFjaXR5OjAuNjQ2MiIvPjxzdG9wICBvZmZzZXQ9IjAuOTA0MiIgc3R5bGU9InN0b3AtY29sb3I6IzEwMTAxMDtzdG9wLW9wYWNpdHk6MC44MTM4Ii8+PHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMDtzdG9wLW9wYWNpdHk6MC45Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yOTUuNiwxMTkuMWwtODkuOS02MS45Yy0xLjYtMS4xLTIuOS0yLjYtMy43LTQuMWMtMC40LDAuOS0wLjYsMi0wLjYsM3Y1OGMwLDQuNCwzLjYsOCw4LDhoODYuM2MxLjUsMCwzLTAuNCw0LjItMS4yQzI5OC41LDEyMC42LDI5NywxMjAsMjk1LjYsMTE5LjF6Ii8+PHBhdGggZmlsbD0iIzJBN0ZCNSIgZD0iTTIwNi45LDEyMC43bDg5LjktNjEuOWMxLjYtMS4xLDIuOS0yLjYsMy43LTQuMWMwLjQsMC45LDAuNiwyLDAuNiwzdjU4YzAsNC40LTMuNiw4LTgsOGgtODYuM2MtMS41LDAtMy0wLjQtNC4yLTEuMkMyMDQuMSwxMjIuMywyMDUuNSwxMjEuNywyMDYuOSwxMjAuN3oiLz48cGF0aCBmaWxsPSIjMzQ5NkRBIiBkPSJNMjkyLjQsMTIxLjFsLTg5LjktNjEuOWMtMS42LTEuMS0yLjktMi42LTMuNy00LjFjLTAuNCwwLjktMC42LDItMC42LDN2NThjMCw0LjQsMy42LDgsOCw4aDg2LjNjMS41LDAsMy0wLjQsNC4yLTEuMkMyOTUuMiwxMjIuNiwyOTMuNywxMjIsMjkyLjQsMTIxLjF6Ii8+PHBhdGggb3BhY2l0eT0iOC4wMDAwMDBlLTAwMiIgZmlsbD0iIzJBNzM5QiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yOTIuNCwxMjEuMWwtNDMtMjkuNmwtNDMsMjkuNmMtMS40LDAuOS0yLjgsMS41LTQuMywxLjhjMS4yLDAuNywyLjYsMS4yLDQuMiwxLjJoMzguMWg0OC4yYzEuNSwwLDMtMC40LDQuMi0xLjJDMjk1LjIsMTIyLjYsMjkzLjcsMTIyLDI5Mi40LDEyMS4xeiIvPjwvZz48Zz48cGF0aCBmaWxsPSIjQzYzMjNEIiBkPSJNMzAyLjksOTEuOGMtMC4xLDAuNC0wLjIsMC44LTAuMiwxLjJ2MjZjMCwyLjIsMS44LDQuMSw0LjEsNC4xaDQzLjhjMi4yLDAsNC4xLTEuOCw0LjEtNC4xVjkzYzAtMC40LTAuMS0wLjgtMC4yLTEuMkgzMDIuOXoiLz48cGF0aCBmaWxsPSIjMjE2ODk2IiBkPSJNMzUwLjcsODUuNGgtNDMuOWMtMi4yLDAtNC4xLDEuOC00LjEsNC4xYzAsMCwwLjEtMC4yLDAuMy0wLjdjMC40LDAuOCwxLDEuNSwxLjksMi4xbDIzLjgsMTYuNGwyMy44LTE2LjRjMC44LTAuNiwxLjUtMS4zLDEuOS0yLjFjMC4yLDAuNSwwLjMsMC43LDAuMywwLjdDMzU0LjgsODcuMiwzNTIuOSw4NS40LDM1MC43LDg1LjR6Ii8+PHBhdGggZmlsbD0iI0ZDRkNGQyIgZD0iTTM1MSwxMTguNmMwLDIuNC0xLjgsNC40LTQuMSw0LjRoLTM2LjdjLTIuMiwwLTQuMS0yLTQuMS00LjRWNzEuMWMwLTIuNCwxLjgtNC40LDQuMS00LjRoMzYuN2MyLjIsMCw0LjEsMiw0LjEsNC40VjExOC42eiIvPjxyZWN0IHg9IjMwOS40IiB5PSI3MS44IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSI0My45Ii8+PGc+PHJlY3QgeD0iMzA5LjYiIHk9Ijc5LjQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIxOC41IiBoZWlnaHQ9IjIuNSIvPjxyZWN0IHg9IjMwOS40IiB5PSI4OC43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSIyLjUiLz48cmVjdCB4PSIzMDkuNCIgeT0iOTMuMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM3LjIiIGhlaWdodD0iMi41Ii8+PHJlY3QgeD0iMzA5LjQiIHk9Ijk3LjkiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzNy4yIiBoZWlnaHQ9IjIuNSIvPjxyZWN0IHg9IjMwOS40IiB5PSIxMDIuNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM3LjIiIGhlaWdodD0iMi41Ii8+PHJlY3QgeD0iMzA5LjYiIHk9Ijg0IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzcuMiIgaGVpZ2h0PSIyLjUiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI1NDEuNzU4MyIgeTE9Ii0zMjkuNTkiIHgyPSI1OTEuNzU4MyIgeTI9Ii0zMjkuNTkiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgLTIzNy42IC0yMjQuODQpIj48c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGO3N0b3Atb3BhY2l0eTowIi8+PHN0b3AgIG9mZnNldD0iMC4xNDM0IiBzdHlsZT0ic3RvcC1jb2xvcjojRDRENEQ0O3N0b3Atb3BhY2l0eTowLjEyOTEiLz48c3RvcCAgb2Zmc2V0PSIwLjQ2IiBzdHlsZT0ic3RvcC1jb2xvcjojN0E3QTdBO3N0b3Atb3BhY2l0eTowLjQxNCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE4IiBzdHlsZT0ic3RvcC1jb2xvcjojMzgzODM4O3N0b3Atb3BhY2l0eTowLjY0NjIiLz48c3RvcCAgb2Zmc2V0PSIwLjkwNDIiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMDEwMTA7c3RvcC1vcGFjaXR5OjAuODEzOCIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0idXJsKCNTVkdJRF8yXykiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBkPSJNMzUyLDEyMC43bC00NS43LTMxLjRjLTAuOC0wLjYtMS41LTEuMy0xLjktMi4xYy0wLjIsMC41LTAuMywxLTAuMywxLjV2MjkuNWMwLDIuMiwxLjgsNC4xLDQuMSw0LjFIMzUyYzAuOCwwLDEuNS0wLjIsMi4xLTAuNkMzNTMuNCwxMjEuNSwzNTIuNywxMjEuMiwzNTIsMTIwLjd6Ii8+PHBhdGggZmlsbD0iIzJBN0ZCNSIgZD0iTTMwNi45LDEyMS42bDQ1LjctMzEuNGMwLjgtMC42LDEuNS0xLjMsMS45LTIuMWMwLjIsMC41LDAuMywxLDAuMywxLjVWMTE5YzAsMi4yLTEuOCw0LjEtNC4xLDQuMWgtNDMuOGMtMC44LDAtMS41LTAuMi0yLjEtMC42QzMwNS41LDEyMi40LDMwNi4yLDEyMi4xLDMwNi45LDEyMS42eiIvPjxwYXRoIGZpbGw9IiMzNDk2REEiIGQ9Ik0zNTAuMywxMjEuOGwtNDUuNy0zMS40Yy0wLjgtMC42LTEuNS0xLjMtMS45LTIuMWMtMC4yLDAuNS0wLjMsMS0wLjMsMS41djI5LjVjMCwyLjIsMS44LDQuMSw0LjEsNC4xaDQzLjhjMC44LDAsMS41LTAuMiwyLjEtMC42QzM1MS44LDEyMi41LDM1MSwxMjIuMiwzNTAuMywxMjEuOHoiLz48cGF0aCBvcGFjaXR5PSI4LjAwMDAwMGUtMDAyIiBmaWxsPSIjMkE3MzlCIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTM1MC4zLDEyMS44bC0yMS44LTE1bC0yMS44LDE1Yy0wLjcsMC41LTEuNCwwLjgtMi4yLDAuOWMwLjYsMC40LDEuMywwLjYsMi4xLDAuNkgzMjZoMjQuNWMwLjgsMCwxLjUtMC4yLDIuMS0wLjZDMzUxLjgsMTIyLjUsMzUxLDEyMi4yLDM1MC4zLDEyMS44eiIvPjwvZz48ZyBvcGFjaXR5PSIwLjk2Ij48Zz48cG9seWdvbiBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSIjMDIwMjAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIzNDYuNiw4NS4yIDM0Mi4yLDc1LjYgMzMyLjYsNzEuMiAzNTMuNiw2NC4yICIvPjxwb2x5Z29uIGZpbGw9IiNGMTI4MjEiIHBvaW50cz0iMzQ2LjYsODMuOSAzNDIuNCw3NC45IDMzMy40LDcwLjggMzUzLjIsNjQuMiAiLz48cG9seWdvbiBmaWxsPSIjRUEyMTIxIiBwb2ludHM9IjM0Mi40LDc0LjkgMzUzLjIsNjQuMiAzNDYuNiw4My45ICIvPjwvZz48L2c+PGcgb3BhY2l0eT0iMC45NiI+PHBvbHlnb24gb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0iIzAyMDIwMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMjg2LjgsNDQuNiAyNzkuMywyOC41IDI2My4xLDIxIDI5OC42LDkuMiAiLz48cG9seWdvbiBmaWxsPSIjRjEyODIxIiBwb2ludHM9IjI4Ni44LDQyLjUgMjc5LjcsMjcuMyAyNjQuNSwyMC4zIDI5Ny45LDkuMiAiLz48cG9seWdvbiBmaWxsPSIjRUEyMTIxIiBwb2ludHM9IjI3OS43LDI3LjMgMjk3LjksOS4yIDI4Ni44LDQyLjUgIi8+PC9nPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIwLjUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI3OS43LDI3LjJjLTMuOC01LjktMTIuNC0yLjQtMTQuMywzLjRjLTIuMiw2LjgsMywxMi4xLDMuNywxOC42YzAuNSw0LjUtMi42LDEyLjUtOC40LDExLjdjLTQuNS0wLjYtNi44LTcuNC0xMC4xLTEwYy04LjQtNi44LTEyLjYsMS45LTE2LDguN0MyMjksNzEuMiwyMTkuNyw3MS4zLDIwOCw3MC43Yy0xNy41LTAuOS0xNC41LDE3LjctMTcuMiwyOS43Ii8+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMzQzLDc1LjNjLTUuNi0xLTE1LjcsMC44LTE0LjgsOC40YzAuNSw0LjYsOC40LDguOCw1LDEzLjdjLTMuNSw1LTEwLjcsMC4yLTE1LjIsMS40Yy01LjQsMS40LTYsOS4yLTkuMywxMi45Yy03LjMsOC4zLTIwLjQsOC4yLTMwLjQsMTAuNCIvPjxnPjxjaXJjbGUgb3BhY2l0eT0iMC44IiBmaWxsPSIjRUEyMTIxIiBjeD0iMTkwLjciIGN5PSIxMDEuNCIgcj0iOC4xIi8+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNGMTI4MjEiIGN4PSIxOTAuNyIgY3k9IjEwMS40IiByPSI0LjYiLz48L2c+PGc+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNFQTIxMjEiIGN4PSIyNzYuNyIgY3k9IjEyMi4zIiByPSI1LjUiLz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0YxMjgyMSIgY3g9IjI3Ni43IiBjeT0iMTIyLjMiIHI9IjMuMSIvPjwvZz48L3N2Zz4='}});
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
float: left;
}
#wpmchimpa-main .wpmchimpa{
display: inline-block;
margin: 5px 50px 25px;
text-align: center;
}
#wpmchimpa .lite_heading{
margin-bottom:10px;
color: {{data.theme.l4.lite_heading_fc||'#fff'}};
font-size: {{data.theme.l4.lite_heading_fs||'26'}}px;
line-height: {{data.theme.l4.lite_heading_fs||'26'}}px;
font-weight: {{data.theme.l4.lite_heading_fw}};
font-family: {{data.theme.l4.lite_heading_f | livepf}};
font-style: {{data.theme.l4.lite_heading_fst}};
}
#wpmchimpa .lite_msg,#wpmchimpa .lite_msg *{
color: #688292;
font-weight: 600;
line-height: 28px;
margin: 16px auto;
font-size: {{data.theme.l4.lite_msg_fs||'12'}}px;
font-family: {{data.theme.l4.lite_msg_f | livepf}};
}
#wpmchimpa .wpmchimpa_form{
margin: 0 70px;
}
#wpmchimpa .wpmchimpa_form > div{
position: relative;
}
#wpmchimpa .lite_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
padding-left: 60px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
outline:0;
display: block;
position: relative;
color: {{data.theme.l4.lite_tbox_fc||'#353535'}};
font-size: {{data.theme.l4.lite_tbox_fs||'24'}}px;
font-weight: {{data.theme.l4.lite_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.l4.lite_tbox_f | livepf}};
font-style: {{data.theme.l4.lite_tbox_fst}};
background-color: {{data.theme.l4.lite_tbox_bgc||'#fff'}};
width: {{data.theme.l4.lite_tbox_w}}px;
height: {{data.theme.l4.lite_tbox_h||'40'}}px;
border: {{data.theme.l4.lite_tbox_bor||'1'}}px solid {{data.theme.l4.lite_tbox_borc||'#efefef'}};
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
height: {{data.theme.l4.lite_tbox_h||'40'}}px;
position: absolute;
top: 0;
left: 0;
}
.lite_tbox.mailicon:before{
background: rgba(0,0,0,0.1) {{getIcon('a05',28,data.theme.l4.lite_inico_c||'#27313a')}} no-repeat center;
}
.lite_tbox.pericon:before{
background: rgba(0,0,0,0.1) {{getIcon('c03',28,data.theme.l4.lite_inico_c||'#27313a')}} no-repeat center;
}
#wpmchimpa .wpmchimpa-groups{
display: block;
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
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
-ms-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
border:1px solid {{data.theme.l4.lite_check_borc}};
background-color: {{data.theme.l4.lite_check_c||'#fff'}};
}
#wpmchimpa .lite_check .ctext{
color: {{data.theme.l4.lite_check_fc||'#fff'}};
font-size: {{data.theme.l4.lite_check_fs}}px;
font-weight: {{data.theme.l4.lite_check_fw}};
font-family: {{data.theme.l4.lite_check_f | livepf}};
font-style: {{data.theme.l4.lite_check_fst}};
}
#wpmchimpa .lite_check .cbox.checked:after,#wpmchimpa .lite_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.l4.lite_check_mark||'ch2',8,data.theme.l4.lite_check_ic||'#000')}};
}
#wpmchimpa .lite_check:hover .cbox:after{
opacity: 0.5;
}

#wpmchimpa .lite_button{
line-height: 42px;
text-align: center;
cursor: pointer;
margin-top: 15px;
text-align: center;
width: 100%;
position: relative;
color: {{data.theme.l4.lite_button_fc||'#fff'}};
font-size: {{data.theme.l4.lite_button_fs || "17"}}px;
font-weight: {{data.theme.l4.lite_button_fw}};
font-family: {{data.theme.l4.lite_button_f | livepf}};
font-style: {{data.theme.l4.lite_button_fst}};
background-color:{{data.theme.l4.lite_button_bc||'#ff2738'}};
width: {{data.theme.l4.lite_button_w}}px;
height: {{data.theme.l4.lite_button_h||'42'}}px;
-webkit-border-radius: {{data.theme.l4.lite_button_br||'3'}}px;
-moz-border-radius: {{data.theme.l4.lite_button_br||'3'}}px;
border-radius: {{data.theme.l4.lite_button_br||'3'}}px;
border: {{data.theme.l4.lite_button_bor||'1'}}px solid {{data.theme.l4.lite_button_borc||'#f42536'}};
}
#wpmchimpa .lite_button:hover{
color: {{data.theme.l4.lite_button_fch}};
background-color: {{data.theme.l4.lite_button_bch||'#f42536'}};
}
#wpmchimpa .lite_button:before{
content:'';
display: block;
width: 42px;
height: {{data.theme.l4.lite_button_h||'42'}}px;
position: absolute;
top: 0;
left: 0;
background: rgba(0,0,0,0.1) {{getIcon('b01',30,data.theme.l4.lite_inico_c||'#27313a')}} no-repeat center;
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
color: {{data.theme.l4.lite_close_col||'#999'}};
opacity: 0.4;
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}

.lite_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
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
background: rgba(75, 75, 75, 0.2);
}
#wpmchimpa-main .wpmchimpa-social::before{
content:"{{data.theme.l4.lite_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
margin: 0 10px;
color: {{data.theme.l4.lite_soc_fc||'#b9babd'}};
font-size: {{data.theme.l4.lite_soc_fs||'13'}}px;
font-weight: {{data.theme.l4.lite_soc_fw}};
font-family: {{(data.theme.l4.lite_soc_f | livepf)}};
font-style: {{data.theme.l4.lite_soc_fst}};
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
width:36px;
height: 45px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
float: right;
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
display: {{data.theme.l4.lite_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.l4.lite_tag_fc||'#fff'}};
font-size: {{data.theme.l4.lite_tag_fs||'10'}}px;
font-weight: {{data.theme.l4.lite_tag_fw}};
font-family:Arial;
font-family: {{data.theme.l4.lite_tag_f | livepf}};
font-style: {{data.theme.l4.lite_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.l4.lite_tag_fs||10,data.theme.l4.lite_tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpa-main.woleft .wpmchimpa-leftpane{
display:none;
}
#wpmchimpa-main.woleft{min-width: 0}
#wpmchimpa-main.woleft #wpmchimpa-newsletterform{margin-top: 50px}
#wpmchimpa-main.wosoc .wpmchimpa-social {
display: none;
}
#wpmchimpa-main.wosoc #wpmchimpa-newsletterform{
margin-top: 70px;
}
</style>

<div class="wpmchimpa-overlay-bg wpmchimpa-wrapper" id="lightbox1">
	<div id="wpmchimpa-main" ng-class="{'woleft':data.theme.l4.lite_disimg,'wosoc':data.theme.l4.lite_dissoc}">
        <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:15px;top:0">7</div>
        <div class="wpmchimpa-leftpane"></div>
		<div id="wpmchimpa-newsletterform">
			<div class="wpmchimpa" id="wpmchimpa">
    			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <div class="lite_heading">{{data.theme.l4.lite_heading}}</div>
      			<div class="lite_msg"><p ng-bind-html="data.theme.l4.lite_msg | safe"></p></div>
          </div>
          <div class="wpmchimpa_form">
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
    		<div class="lite_button">{{data.theme.l4.lite_button}}</div>
    		<div>
	          	<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;top: 25px;">5</div>
	          	<div class="lite_spinner" ng-bind-html="getSpin(data.theme.l4.lite_spinner_t||'3','wpmchimpa-wrapper',data.theme.l4.lite_spinner_c||'#000')"></div>
	        </div>
          </div>
			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
	    		<div class="wpmchimpa-tag" ng-bind-html="data.theme.l4.lite_tag||'Secure and Spam free...' | safe"></div></div>
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            </div>
          
          
    			</div>
          </div>
			</div>
      <div class="wpmchimpa-close-button"></div>
	</div>        
</div>