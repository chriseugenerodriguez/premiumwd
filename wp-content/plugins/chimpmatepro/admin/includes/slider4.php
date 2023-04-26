<style type="text/css">

#wpmchimpas {
width: 500px;
height: 718px;
display: block;
background-color: {{data.theme.s4.slider_canvas_c||'#333'}};
position: relative;
}
#wpmchimpas .wpmchimpas-inner{
top: 50%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
position: absolute;
margin: 0 40px;
padding: 0180px 30px 30px;
min-height:360px;
text-align: center;
background:  {{data.theme.s4.slider_bg_c||'#27313B'}} no-repeat;
background-image: url({{data.theme.s4.slider_img1||'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI0MjBweCIgaGVpZ2h0PSIxNzBweCIgdmlld0JveD0iMCAwIDQyMCAxNzAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDQyMCAxNzAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9IiMyNTJCMzciIHdpZHRoPSI0MjAiIGhlaWdodD0iMTcwIi8+PGc+PGc+PHBhdGggZmlsbD0iI0M2MzIzRCIgZD0iTTExNi44LDc0LjVjLTAuMiwwLjktMC40LDEuOC0wLjQsMi44djYyLjhjMCw1LjQsNC40LDkuOCw5LjgsOS44aDEwNS42YzUuNCwwLDkuOC00LjQsOS44LTkuOFY3Ny4zYzAtMS0wLjEtMi0wLjQtMi44QzI0MS4zLDc0LjUsMTE2LjgsNzQuNSwxMTYuOCw3NC41eiIvPjxwYXRoIGZpbGw9IiMyMTY4OTYiIGQ9Ik0yMzEuOCw1OS4xSDEyNi4xYy01LjQsMC05LjgsNC40LTkuOCw5LjhjMCwwLDAuMi0wLjUsMC43LTEuNmMxLDIsMi40LDMuNyw0LjUsNWw1Ny40LDM5LjVsNTcuNC0zOS41YzItMS4zLDMuNS0zLjIsNC41LTVjMC41LDEuMSwwLjcsMS42LDAuNywxLjZDMjQxLjYsNjMuNSwyMzcuMyw1OS4xLDIzMS44LDU5LjF6Ii8+PHBhdGggZmlsbD0iI0ZDRkNGQyIgZD0iTTIzMi42LDEzOWMwLDUuNy00LjQsMTAuNS05LjgsMTAuNWgtODguNGMtNS40LDAtOS44LTQuNi05LjgtMTAuNVYyNC42YzAtNS43LDQuNC0xMC41LDkuOC0xMC41aDg4LjRjNS40LDAsOS44LDQuNiw5LjgsMTAuNVYxMzl6Ii8+PHJlY3QgeD0iMTMyLjUiIHk9IjI2LjMiIGZpbGw9IiNGNEY0RjQiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjEwNS44Ii8+PGc+PHJlY3QgeD0iMTMyLjkiIHk9IjQ0LjUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI0NC40IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi41IiB5PSI2Ni45IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48cmVjdCB4PSIxMzIuNSIgeT0iNzgiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi41IiB5PSI4OS4yIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48cmVjdCB4PSIxMzIuNSIgeT0iMTAwLjQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI4OS41IiBoZWlnaHQ9IjYuMSIvPjxyZWN0IHg9IjEzMi45IiB5PSI1NS43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iODkuNSIgaGVpZ2h0PSI2LjEiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI1OTQuOTgxIiB5MT0iODExLjM3MTkiIHgyPSI3MTUuNDc0MSIgeTI9IjgxMS4zNzE5IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgLTQ3NS4yIC03MDUuNjgpIj48c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGO3N0b3Atb3BhY2l0eTowIi8+PHN0b3AgIG9mZnNldD0iMC4xNDM0IiBzdHlsZT0ic3RvcC1jb2xvcjojRDRENEQ0O3N0b3Atb3BhY2l0eTowLjEyOTEiLz48c3RvcCAgb2Zmc2V0PSIwLjQ2IiBzdHlsZT0ic3RvcC1jb2xvcjojN0E3QTdBO3N0b3Atb3BhY2l0eTowLjQxNCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE4IiBzdHlsZT0ic3RvcC1jb2xvcjojMzgzODM4O3N0b3Atb3BhY2l0eTowLjY0NjIiLz48c3RvcCAgb2Zmc2V0PSIwLjkwNDIiIHN0eWxlPSJzdG9wLWNvbG9yOiMxMDEwMTA7c3RvcC1vcGFjaXR5OjAuODEzOCIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuOSIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iNi4wMDAwMDBlLTAwMiIgZmlsbD0idXJsKCNTVkdJRF8xXykiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBkPSJNMjM1LDE0NC4yTDEyNSw2OC41Yy0yLTEuMy0zLjUtMy4yLTQuNS01Yy0wLjUsMS4xLTAuNywyLjQtMC43LDMuN3Y3MWMwLDUuNCw0LjQsOS44LDkuOCw5LjhoMTA1LjZjMS44LDAsMy43LTAuNSw1LjEtMS41QzIzOC42LDE0Ni4xLDIzNi43LDE0NS4zLDIzNSwxNDQuMnoiLz48cGF0aCBmaWxsPSIjMkE3RkI1IiBkPSJNMTI2LjUsMTQ2LjJsMTEwLTc1LjdjMi0xLjMsMy41LTMuMiw0LjUtNWMwLjUsMS4xLDAuNywyLjQsMC43LDMuN3Y3MWMwLDUuNC00LjQsOS44LTkuOCw5LjhIMTI2LjRjLTEuOCwwLTMuNy0wLjUtNS4xLTEuNUMxMjMuMSwxNDguMSwxMjQuOCwxNDcuNCwxMjYuNSwxNDYuMnoiLz48cGF0aCBmaWxsPSIjMzQ5NkRBIiBkPSJNMjMxLjEsMTQ2LjdMMTIxLjEsNzFjLTItMS4zLTMuNS0zLjItNC41LTVjLTAuNSwxLjEtMC43LDIuNC0wLjcsMy43djcxYzAsNS40LDQuNCw5LjgsOS44LDkuOGgxMDUuNmMxLjgsMCwzLjctMC41LDUuMS0xLjVDMjM0LjUsMTQ4LjUsMjMyLjcsMTQ3LjgsMjMxLjEsMTQ2Ljd6Ii8+PHBhdGggb3BhY2l0eT0iOC4wMDAwMDBlLTAwMiIgZmlsbD0iIzJBNzM5QiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGQ9Ik0yMzEuMSwxNDYuN2wtNTIuNi0zNi4ybC01Mi42LDM2LjJjLTEuNywxLjEtMy40LDEuOC01LjMsMi4yYzEuNSwwLjksMy4yLDEuNSw1LjEsMS41aDQ2LjZoNTljMS44LDAsMy43LTAuNSw1LjEtMS41QzIzNC41LDE0OC41LDIzMi43LDE0Ny44LDIzMS4xLDE0Ni43eiIvPjwvZz48Zz48cGF0aCBmaWxsPSIjQzYzMjNEIiBkPSJNMjQzLjksMTEwLjhjLTAuMSwwLjUtMC4yLDEtMC4yLDEuNXYzMS44YzAsMi43LDIuMiw1LDUsNWg1My42YzIuNywwLDUtMi4yLDUtNXYtMzEuOGMwLTAuNS0wLjEtMS0wLjItMS41SDI0My45eiIvPjxwYXRoIGZpbGw9IiMyMTY4OTYiIGQ9Ik0zMDIuNCwxMDNoLTUzLjdjLTIuNywwLTUsMi4yLTUsNWMwLDAsMC4xLTAuMiwwLjQtMC45YzAuNSwxLDEuMiwxLjgsMi4zLDIuNmwyOS4xLDIwLjFsMjkuMS0yMC4xYzEtMC43LDEuOC0xLjYsMi4zLTIuNmMwLjIsMC42LDAuNCwwLjksMC40LDAuOUMzMDcuNCwxMDUuMiwzMDUuMSwxMDMsMzAyLjQsMTAzeiIvPjxwYXRoIGZpbGw9IiNGQ0ZDRkMiIGQ9Ik0zMDIuOCwxNDMuNmMwLDIuOS0yLjIsNS40LTUsNS40aC00NC45Yy0yLjcsMC01LTIuNC01LTUuNFY4NS41YzAtMi45LDIuMi01LjQsNS01LjRoNDQuOWMyLjcsMCw1LDIuNCw1LDUuNFYxNDMuNnoiLz48cmVjdCB4PSIyNTEuOSIgeT0iODYuNCIgZmlsbD0iI0Y0RjRGNCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iNTMuNyIvPjxnPjxyZWN0IHg9IjI1Mi4xIiB5PSI5NS43IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjIuNiIgaGVpZ2h0PSIzLjEiLz48cmVjdCB4PSIyNTEuOSIgeT0iMTA3IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNDUuNSIgaGVpZ2h0PSIzLjEiLz48cmVjdCB4PSIyNTEuOSIgeT0iMTEyLjciIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSI0NS41IiBoZWlnaHQ9IjMuMSIvPjxyZWN0IHg9IjI1MS45IiB5PSIxMTguMyIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iMy4xIi8+PHJlY3QgeD0iMjUxLjkiIHk9IjEyNCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjQ1LjUiIGhlaWdodD0iMy4xIi8+PHJlY3QgeD0iMjUyLjEiIHk9IjEwMS4zIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iNDUuNSIgaGVpZ2h0PSIzLjEiLz48L2c+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI3MjAuNjgzMiIgeTE9IjgzMi4zNTEyIiB4Mj0iNzgxLjg0NzIiIHkyPSI4MzIuMzUxMiIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjYuMDAwMDAwZS0wMDIiIGZpbGw9InVybCgjU1ZHSURfMl8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTMwNCwxNDYuMmwtNTUuOS0zOC40Yy0xLTAuNy0xLjgtMS42LTIuMy0yLjZjLTAuMiwwLjYtMC40LDEuMi0wLjQsMS44djM2LjFjMCwyLjcsMi4yLDUsNSw1SDMwNGMxLDAsMS44LTAuMiwyLjYtMC43QzMwNS43LDE0Ny4yLDMwNC45LDE0Ni44LDMwNCwxNDYuMnoiLz48cGF0aCBmaWxsPSIjMkE3RkI1IiBkPSJNMjQ4LjgsMTQ3LjNsNTUuOS0zOC40YzEtMC43LDEuOC0xLjYsMi4zLTIuNmMwLjIsMC42LDAuNCwxLjIsMC40LDEuOHYzNmMwLDIuNy0yLjIsNS01LDVoLTUzLjZjLTEsMC0xLjgtMC4yLTIuNi0wLjdDMjQ3LjEsMTQ4LjMsMjQ4LDE0Ny45LDI0OC44LDE0Ny4zeiIvPjxwYXRoIGZpbGw9IiMzNDk2REEiIGQ9Ik0zMDEuOSwxNDcuNUwyNDYsMTA5LjFjLTEtMC43LTEuOC0xLjYtMi4zLTIuNmMtMC4yLDAuNi0wLjQsMS4yLTAuNCwxLjh2MzYuMWMwLDIuNywyLjIsNSw1LDVoNTMuNmMxLDAsMS44LTAuMiwyLjYtMC43QzMwMy44LDE0OC40LDMwMi44LDE0OCwzMDEuOSwxNDcuNXoiLz48cGF0aCBvcGFjaXR5PSI4LjAwMDAwMGUtMDAyIiBmaWxsPSIjMkE3MzlCIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTMwMS45LDE0Ny41bC0yNi43LTE4LjNsLTI2LjcsMTguM2MtMC45LDAuNi0xLjcsMS0yLjcsMS4xYzAuNywwLjUsMS42LDAuNywyLjYsMC43aDIzLjdoMzBjMSwwLDEuOC0wLjIsMi42LTAuN0MzMDMuOCwxNDguNCwzMDIuOCwxNDgsMzAxLjksMTQ3LjV6Ii8+PC9nPjxnIG9wYWNpdHk9IjAuOTYiPjxnPjxwb2x5Z29uIG9wYWNpdHk9IjYuMDAwMDAwZS0wMDIiIGZpbGw9IiMwMjAyMDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBwb2ludHM9IjI5Ny40LDEwMi44IDI5Miw5MSAyODAuMyw4NS42IDMwNiw3Ny4xICIvPjxwb2x5Z29uIGZpbGw9IiNGMTI4MjEiIHBvaW50cz0iMjk3LjQsMTAxLjIgMjkyLjMsOTAuMiAyODEuMyw4NS4xIDMwNS41LDc3LjEgIi8+PHBvbHlnb24gZmlsbD0iI0VBMjEyMSIgcG9pbnRzPSIyOTIuMyw5MC4yIDMwNS41LDc3LjEgMjk3LjQsMTAxLjIgIi8+PC9nPjwvZz48ZyBvcGFjaXR5PSIwLjk2Ij48cG9seWdvbiBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSIjMDIwMjAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSIyMjQuMiw1My4xIDIxNS4xLDMzLjQgMTk1LjMsMjQuMiAyMzguNyw5LjggIi8+PHBvbHlnb24gZmlsbD0iI0YxMjgyMSIgcG9pbnRzPSIyMjQuMiw1MC41IDIxNS42LDMxLjkgMTk3LDIzLjQgMjM3LjgsOS44ICIvPjxwb2x5Z29uIGZpbGw9IiNFQTIxMjEiIHBvaW50cz0iMjE1LjYsMzEuOSAyMzcuOCw5LjggMjI0LjIsNTAuNSAiLz48L2c+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjAuNSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjE1LjYsMzEuOGMtNC42LTcuMi0xNS4yLTIuOS0xNy41LDQuMmMtMi43LDguMywzLjcsMTQuOCw0LjUsMjIuOGMwLjYsNS41LTMuMiwxNS4zLTEwLjMsMTQuM2MtNS41LTAuNy04LjMtOS4xLTEyLjQtMTIuMmMtMTAuMy04LjMtMTUuNCwyLjMtMTkuNiwxMC42Yy02LjksMTQuMi0xOC4yLDE0LjMtMzIuNSwxMy42Yy0yMS40LTEuMS0xNy43LDIxLjctMjEsMzYuMyIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIwLjUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI5Myw5MC42Yy02LjktMS4yLTE5LjIsMS0xOC4xLDEwLjNjMC42LDUuNiwxMC4zLDEwLjgsNi4xLDE2LjhjLTQuMyw2LjEtMTMuMSwwLjItMTguNiwxLjdjLTYuNiwxLjctNy4zLDExLjMtMTEuNCwxNS44Yy04LjksMTAuMi0yNSwxMC0zNy4yLDEyLjciLz48Zz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0VBMjEyMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGN4PSIxMDYuNyIgY3k9IjEyMi42IiByPSI5LjkiLz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0YxMjgyMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIGN4PSIxMDYuNyIgY3k9IjEyMi42IiByPSI1LjYiLz48L2c+PGc+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNFQTIxMjEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBjeD0iMjExLjkiIGN5PSIxNDguMSIgcj0iNi43Ii8+PGNpcmNsZSBvcGFjaXR5PSIwLjgiIGZpbGw9IiNGMTI4MjEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgICAgIiBjeD0iMjExLjkiIGN5PSIxNDguMSIgcj0iMy44Ii8+PC9nPjwvZz48L3N2Zz4='}});
background-size: contain;
-webkit-border-radius:1px;
-moz-border-radius:1px;
border-radius:1px;
}
#wpmchimpas h3{
margin-bottom:10px;
color: {{data.theme.s4.slider_heading_fc||'#fff'}};
font-size: {{data.theme.s4.slider_heading_fs||'26'}}px;
line-height: {{data.theme.s4.slider_heading_fs||'26'}}px;
font-weight: {{data.theme.s4.slider_heading_fw}};
font-family: {{data.theme.s4.slider_heading_f | livepf}};
font-style: {{data.theme.s4.slider_heading_fst}};
}
#wpmchimpas .slider_msg, #wpmchimpas .slider_msg *{
color: #688292;
font-weight: 600;
line-height: 26px;
margin: 16px auto;
font-size: {{data.theme.s4.slider_msg_fs||'12'}}px;
font-family: {{data.theme.s4.slider_msg_f | livepf}};
}
#wpmchimpas .slider_tbox{
text-align: center;
margin-bottom: 10px;
width: 100%;
padding-left: 60px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
outline:0;
display: block;
position: relative;
color: {{data.theme.s4.slider_tbox_fc||'#353535'}};
font-size: {{data.theme.s4.slider_tbox_fs||'24'}}px;
font-weight: {{data.theme.s4.slider_tbox_fw}};
font-family: {{data.theme.s4.slider_tbox_f | livepf}};
font-style: {{data.theme.s4.slider_tbox_fst}};
background-color: {{data.theme.s4.slider_tbox_bgc||'#fff'}};
width: {{data.theme.s4.slider_tbox_w}}px;
height: {{data.theme.s4.slider_tbox_h||'40'}}px;
border: {{data.theme.s4.slider_tbox_bor||'1'}}px solid {{data.theme.s4.slider_tbox_borc||'#efefef'}};
}
#wpmchimpas .slider_tbox div{
top: 50%;
-webkit-transform: translatey(-50% );
-moz-transform: translatey(-50% );
-ms-transform: translatey(-50% );
-o-transform: translatey(-50% );
transform: translatey(-50% );
position: relative;
}
.slider_tbox.mailicon:before,
.slider_tbox.pericon:before{
content:'';
display: block;
width: 40px;
height: {{data.theme.s4.slider_tbox_h||'40'}}px;
position: absolute;
top: 0;
left: 0;
}
.slider_tbox.mailicon:before{
background: rgba(0,0,0,0.1) {{getIcon('a05',28,data.theme.s4.slider_inico_c||'#27313a')}} no-repeat center;
}
.slider_tbox.pericon:before{
background: rgba(0,0,0,0.1) {{getIcon('c03',28,data.theme.s4.slider_inico_c||'#27313a')}} no-repeat center;
}
#wpmchimpas .wpmchimpa-groups{
display: block;
}
#wpmchimpas .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpas .slider_check {
cursor: pointer;
display: inline-block;
position: relative;
padding-left: 30px;
line-height: 14px;
}
#wpmchimpas .slider_check .cbox{
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
border:1px solid {{data.theme.s4.slider_check_borc}};
background-color: {{data.theme.s4.slider_check_c||'#fff'}};
}
#wpmchimpas .slider_check .ctext{
color: {{data.theme.s4.slider_check_fc||'#fff'}};
font-size: {{data.theme.s4.slider_check_fs}}px;
font-weight: {{data.theme.s4.slider_check_fw}};
font-family: {{data.theme.s4.slider_check_f | livepf}};
font-style: {{data.theme.s4.slider_check_fst}};
}
#wpmchimpas .slider_check .cbox.checked:after,#wpmchimpas .slider_check:hover .cbox:after{
display: block;
overflow: hidden;
width:12px;
height:12px;
content:'';
background: no-repeat center;
background-image:{{getIcon(data.theme.s4.slider_check_mark||'ch2',8,data.theme.s4.slider_check_ic||'#000')}};
}
#wpmchimpas .slider_check:hover .cbox:after{
opacity: 0.5;
}
#wpmchimpas .wpmchimpas > div{
	position: relative;
}
#wpmchimpas .slider_button{
line-height: 40px;
text-align: center;
position: relative;
margin-top: 15px;
text-align: center;
width: 100%;
color: {{data.theme.s4.slider_button_fc||'#fff'}};
font-size: {{data.theme.s4.slider_button_fs || "17"}}px;
font-weight: {{data.theme.s4.slider_button_fw}};
font-family: {{data.theme.s4.slider_button_f | livepf}};
font-style: {{data.theme.s4.slider_button_fst}};
background-color:{{data.theme.s4.slider_button_bc||'#ff2738'}};
width: {{data.theme.s4.slider_button_w}}px;
height: {{data.theme.s4.slider_button_h||'42'}}px;
-webkit-border-radius: {{data.theme.s4.slider_button_br||'3'}}px;
-moz-border-radius: {{data.theme.s4.slider_button_br||'3'}}px;
border-radius: {{data.theme.s4.slider_button_br||'3'}}px;
border: {{data.theme.s4.slider_button_bor||'1'}}px solid {{data.theme.s4.slider_button_borc||'#f42536'}};
}
#wpmchimpas .slider_button:hover{
color: {{data.theme.s4.slider_button_fch}};
background-color: {{data.theme.s4.slider_button_bch||'#f42536'}};
}
#wpmchimpas .slider_button:before{
content:'';
display: block;
width: 42px;
height: {{data.theme.s4.slider_button_h||'42'}}px;
position: absolute;
top: 0;
left: 0;
background: rgba(0,0,0,0.1) {{getIcon('b01',30,data.theme.s4.slider_inico_c||'#27313a')}} no-repeat center;
}
#wpmchimpas .slider_button+div{
position: absolute;
top: 0;
right: 0;
}
.slider_spinner {
top: 0;
right: 0;
margin: 6px 5px;
-webkit-transform: scale(0.8);
-ms-transform: scale(0.8);
transform: scale(0.8);
}

#wpmchimpas .wpmchimpa-social{
display: inline-block;
margin: 12px auto;
height: 45px;
width: 100%;
background: rgba(75, 75, 75, 0.2);
}
#wpmchimpas .wpmchimpa-social::before{
content:"{{data.theme.s4.slider_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
margin: 0 10px;
color: {{data.theme.s4.slider_soc_fc||'#b9babd'}};
font-size: {{data.theme.s4.slider_soc_fs||'13'}}px;
font-weight: {{data.theme.s4.slider_soc_fw}};
font-family: {{(data.theme.s4.slider_soc_f | livepf)}};
font-style: {{data.theme.s4.slider_soc_fst}};
}

#wpmchimpas .wpmchimpa-social .wpmchimpa-soc{
width:36px;
height: 45px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
float: right;
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
content: '';
display: block;
width:36px;
height: 45px;
background: no-repeat center;
}

#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',20,'#fff')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',20,'#fff')}}
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
}
#wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',20,'#fff')}}
}

#slider_tag{
text-align: center;
display: {{data.theme.s4.slider_tag_en? 'block':'none'}};
}
#slider_tag,
#slider_tag *{
pointer-events: none;
color: {{data.theme.s4.slider_tag_fc||'#fff'}};
font-size: {{data.theme.s4.slider_tag_fs||'10'}}px;
font-weight: {{data.theme.s4.slider_tag_fw}};
font-family:Arial;
font-family: {{data.theme.s4.slider_tag_f | livepf}};
font-style: {{data.theme.s4.slider_tag_fst}};
}
#slider_tag:before{
content:{{getIcon('lock1',data.theme.s4.slider_tag_fs||10,data.theme.s4.slider_tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpas-over{
background: rgba(0, 0, 0, 0.4);
height: 100%;
width: 100%;
position: absolute;
display: block;
}
#wpmchimpas-trig{
width: 50px;
height: 50px;
position: absolute;
display: block;
left: 500px;
margin: 0 3px;
top:{{data.theme.s4.slider_trigger_top ||'50'}}%;
background: {{data.theme.s4.slider_trigger_bg || '#ff2738'}};
}
#wpmchimpas-trig:before{ 
content:{{getIcon('b01',32,data.theme.s4.slider_trigger_c||'#fff')}};
height: 32px;
width: 32px;
display: block;
margin: 8px;
}
#wpmchimpas .wpmchimpas-inner.wosoc .wpmchimpa-social {
display: none;
}
#wpmchimpas .wpmchimpas-inner.woleft{
padding-top: 40px;
background-image: none;
}
</style>
<div id="wpmchimpas-over"></div>
<div id="wpmchimpas-trig">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="6" data-lhint="Go to Trigger Options" style="top:0;right:0;margin:-10px">7</div>
</div>
<div id="wpmchimpas" class="{{data.theme.s4.slider_bg_p}}">
<div class="wpmchimpas-inner" ng-class="{'woleft':data.theme.s4.slider_disimg,'wosoc':data.theme.s4.slider_dissoc}">
  <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="9" data-lhint="Go to Additional Theme Options" style="margin:-15px">8</div>
        <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            <h3>{{data.theme.s4.slider_heading}}</h3>
            <div class="slider_msg"><p ng-bind-html="data.theme.s4.slider_msg | safe"></p></div>
        </div>
        <div class="wpmchimpas">
            
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="2" data-lhint="Go to Text Box Settings" style="right: -20px;">2</div>
              <div class="slider_tbox pericon"><div class="in-name">Name</div></div>
              <div class="slider_tbox mailicon"><div class="in-mail">Email address</div></div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="3" data-lhint="Go to Checkbox Settings">3</div>
              <div class="wpmchimpa-groups">
                <div class="slider_check_c"></div>
                <div class="wpmchimpa-item">
                    <div class="slider_check">
                      <div class="cbox"></div>
                      <div class="ctext">group1</div>
                    </div>
                </div>
                <div class="wpmchimpa-item">
                    <div class="slider_check">
                      <div class="cbox checked"></div>
                      <div class="ctext">group2</div>
                    </div>
                </div>
              </div>
            </div>
            <div><div class="wpmc-live-sc righthov" ng-click="gotos($event)" data-optno="4" data-lhint="Go to Button Settings" style="right: -20px;">4</div>
              <div class="slider_button">{{data.theme.s4.slider_button}}</div>
               <div>
	              <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;">5</div>
	              <div class="slider_spinner" ng-bind-html="getSpin(data.theme.s4.slider_spinner_t||'3','wpmchimpas',data.theme.s4.slider_spinner_c||'#000')"></div>
	            </div>
            </div>
            <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Tag Settings">6</div>
          <div id="slider_tag" ng-bind-html="data.theme.s4.slider_tag||'Secure and Spam free...' | safe"></div></div>
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            </div>
           
  </div>
</div>
</div>