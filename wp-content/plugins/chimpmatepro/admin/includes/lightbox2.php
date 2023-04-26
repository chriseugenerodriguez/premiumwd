<style type="text/css">
.wpmchimpa-overlay-bg {
background: rgba(0,0,0,{{data.theme.l2.lite_bg_op/100 ||'0.4'}});
height: 778px;
width: 1024px;
}

.wpmchimpa-overlay-bg #wpmchimpa-main {
min-width: 720px;
min-height: 350px;
background: {{data.theme.l2.lite_bg_c || '#fff'}};
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
width:220px;
height: 500px;
display: block;
background-image: url({{data.theme.l2.lite_img1||'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIyMjBweCIgaGVpZ2h0PSI1MDBweCIgdmlld0JveD0iMCAwIDIyMCA1MDAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIyMCA1MDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGRpc3BsYXk9Im5vbmUiIGZpbGw9IiNGRjUyNTIiIHdpZHRoPSIyMjAiIGhlaWdodD0iNTAwIi8+PHJlY3QgZmlsbD0iIzQyODVGNCIgd2lkdGg9IjIyMCIgaGVpZ2h0PSI1MDAiLz48Zz48Y2lyY2xlIG9wYWNpdHk9IjAuOCIgZmlsbD0iI0Y5RjlGOSIgY3g9IjExMCIgY3k9IjEwNy41IiByPSI4OC41Ii8+PHJlY3QgeD0iNDAiIHk9IjQxIiBmaWxsPSIjRkJGQkZCIiB3aWR0aD0iMTM4LjUiIGhlaWdodD0iMTM4LjUiLz48L2c+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMTExMTExIiBzdHJva2Utd2lkdGg9IjAuNzUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTEyNi43NjQsODcuNzEyYy03Ljk0OC0wLjY0OS0yMi41OTYtNC42MjUtMjcuMDU3LDQuODEyYy0yLjQ4Myw1LjI1NCwxLjA4NiwxMS43NDUsMi40MzEsMTYuODE3YzIuMDc0LDcuODI0LTEuOTg1LDkuMzQzLTkuMDMxLDEwLjU0NGMtNi4wMTUsMS4wMjUtMTYuNjAzLDIuODc3LTE1LjI2NywxMS4yOGMxLjEsNi45MTksOC4zODEsOS42NDMsMTIuMDM2LDE0LjgxMWM3LjIzMSwxMC4yMjQtMTQuNjQxLDE0LjMxNi0yMC4zMzksMTYuNTM4Yy02LjM0MiwyLjQ3Mi0xMy4wNyw2LjM5NS0xNi42ODEsMTIuMzYxYy00LjM4MSw3LjIzOC0zLjE0OCwxNy4wODQsMC4xMjYsMjQuNDg2YzAuOTk0LDIuMjQ4LDIuMTQsNC40MjcsMy4yODMsNi42MDEiLz48Zz48Y2lyY2xlIGZpbGw9IiNGQkZCRkIiIGN4PSIxMTIuMzg2IiBjeT0iMzY0LjU4IiByPSI3My4zNzkiLz48cGF0aCBmaWxsPSIjMkYyRjM5IiBkPSJNMTU0LjkzLDI5My40NzljLTEyLjU2MSw4LjMyNi0yNy42MTgsMTMuMTg2LTQzLjgxNywxMy4xODZjLTE1Ljg1NCwwLTMwLjYxLTQuNjY0LTQzLjAwNy0xMi42Njd2LTIuMTFoODYuODI0VjI5My40Nzl6Ii8+PHJlY3QgeD0iMTkxLjY2MyIgeT0iMzUyLjk1IiBmaWxsPSIjNDc0ODU0IiB3aWR0aD0iOC4xMSIgaGVpZ2h0PSIxOS4xNCIvPjxnPjxwYXRoIGZpbGw9IiMyOTI5MzIiIGQ9Ik0xMTEuNTE5LDI3OS44MDJjLTQ2LjcyMiwwLTg0LjU5NywzNy44NzYtODQuNTk3LDg0LjU5N3MzNy44NzYsODQuNTk3LDg0LjU5Nyw4NC41OTdzODQuNTk3LTM3Ljg3Niw4NC41OTctODQuNTk3UzE1OC4yNCwyNzkuODAyLDExMS41MTksMjc5LjgwMnogTTExMS42OTIsNDM5LjEzMmMtNDEuNjYsMC03NS40MzItMzMuNzcyLTc1LjQzMi03NS40MzJjMC00MS42NiwzMy43NzItNzUuNDMyLDc1LjQzMi03NS40MzJzNzUuNDMyLDMzLjc3Miw3NS40MzIsNzUuNDMyQzE4Ny4xMjQsNDA1LjM2LDE1My4zNTIsNDM5LjEzMiwxMTEuNjkyLDQzOS4xMzJ6Ii8+PGc+PHBvbHlsaW5lIGZpbGw9IiMyRjJGMzkiIHBvaW50cz0iNzEuMDUxLDIyNy4wNjYgMTUxLjk4NiwyMjcuMDY2IDE1MS45ODYsMjkxLjg4NyA3MS4wNTEsMjkxLjg4NyA3MS4wNTEsMjI4LjUzMSAiLz48cG9seWxpbmUgZmlsbD0iIzJGMkYzOSIgcG9pbnRzPSI3MS40NjgsNDM2LjE3OSAxNTIuNDAzLDQzNi4xNzkgMTUyLjQwMyw1MDEgNzEuNDY4LDUwMSA3MS40NjgsNDM3LjY0NCAiLz48cGF0aCBmaWxsPSIjNDc0ODU0IiBkPSJNMTExLjkzNiwyODguMzA2Yy00MS43OTUsMC03NS42NzYsMzMuODgxLTc1LjY3Niw3NS42NzZzMzMuODgxLDc1LjY3Niw3NS42NzYsNzUuNjc2czc1LjY3Ni0zMy44ODEsNzUuNjc2LTc1LjY3NlMxNTMuNzMxLDI4OC4zMDYsMTExLjkzNiwyODguMzA2eiBNMTExLjkyNiw0MzYuMzcyYy00MC4wODcsMC03Mi41ODMtMzIuNDk3LTcyLjU4My03Mi41ODNzMzIuNDk3LTcyLjU4Myw3Mi41ODMtNzIuNTgzczcyLjU4MywzMi40OTcsNzIuNTgzLDcyLjU4M1MxNTIuMDEzLDQzNi4zNzIsMTExLjkyNiw0MzYuMzcyeiIvPjwvZz48L2c+PHBhdGggZmlsbD0iI0Q2RDZENiIgZD0iTTEwMC43ODUsMjk5LjI3NmMwLDEuOTc2LTEuNjAyLDMuNTc4LTMuNTc4LDMuNTc4bDAsMGMtMS45NzYsMC0zLjU3OC0xLjYwMi0zLjU3OC0zLjU3OGwwLDBjMC0xLjk3NiwxLjYwMi0zLjU3OCwzLjU3OC0zLjU3OGwwLDBDOTkuMTgzLDI5NS42OTgsMTAwLjc4NSwyOTcuMywxMDAuNzg1LDI5OS4yNzZMMTAwLjc4NSwyOTkuMjc2eiIvPjxwYXRoIGZpbGw9IiNENkQ2RDYiIGQ9Ik0xMTYuMDcsMjk5LjgzMmMwLDIuMjgzLTEuODUxLDQuMTM0LTQuMTM0LDQuMTM0bDAsMGMtMi4yODMsMC00LjEzNC0xLjg1MS00LjEzNC00LjEzNGwwLDBjMC0yLjI4MywxLjg1MS00LjEzNCw0LjEzNC00LjEzNGwwLDBDMTE0LjIxOSwyOTUuNjk4LDExNi4wNywyOTcuNTQ5LDExNi4wNywyOTkuODMyTDExNi4wNywyOTkuODMyeiIvPjxwYXRoIGZpbGw9IiNENkQ2RDYiIGQ9Ik0xMjkuNDA4LDI5OS4yNzZjMCwxLjk3Ni0xLjYwMiwzLjU3OC0zLjU3OCwzLjU3OGwwLDBjLTEuOTc2LDAtMy41NzgtMS42MDItMy41NzgtMy41NzhsMCwwYzAtMS45NzYsMS42MDItMy41NzgsMy41NzgtMy41NzhsMCwwQzEyNy44MDYsMjk1LjY5OCwxMjkuNDA4LDI5Ny4zLDEyOS40MDgsMjk5LjI3NkwxMjkuNDA4LDI5OS4yNzZ6Ii8+PC9nPjxnPjxwYXRoIGZpbGw9IiNDNjMyM0QiIGQ9Ik03MC4xMTYsMzc2LjE1NmMtMC4xMDcsMC40MjgtMC4yMTQsMC44NTYtMC4yMTQsMS4yODR2MjcuODI2YzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzIuMzU0LDAsNC4zODgtMS45MjYsNC4zODgtNC4zODhWMzc3LjQ0YzAtMC40MjgtMC4xMDctMC44NTYtMC4yMTQtMS4yODRINzAuMTE2eiIvPjxwYXRoIGZpbGw9IiNFQTQ3NTMiIGQ9Ik0xMjEuMjcyLDM2OS4zMDdINzQuMjg5Yy0yLjM1NCwwLTQuMzg4LDEuOTI2LTQuMzg4LDQuMzg4YzAsMCwwLjEwNy0wLjIxNCwwLjMyMS0wLjc0OWMwLjQyOCwwLjg1NiwxLjA3LDEuNjA1LDIuMDMzLDIuMjQ3bDI1LjQ3MSwxNy41NTJsMjUuNDcxLTE3LjU1MmMwLjg1Ni0wLjY0MiwxLjYwNS0xLjM5MSwyLjAzMy0yLjI0N2MwLjIxNCwwLjUzNSwwLjMyMSwwLjc0OSwwLjMyMSwwLjc0OUMxMjUuNjYsMzcxLjIzMywxMjMuNjI3LDM2OS4zMDcsMTIxLjI3MiwzNjkuMzA3eiIvPjxwb2x5Z29uIGZpbGw9IiNGN0Y3RjciIHBvaW50cz0iMTEwLjA0NCwzMzUuODQ0IDcyLjYzMywzMzUuODQ0IDcyLjYzMywzOTUuNzQxIDEyMC42ODUsMzk1Ljc0MSAxMjAuNjg1LDM0NC4yNTggIi8+PHJlY3QgeD0iNzcuMDcyIiB5PSIzNDAuODM5IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMzkuODEyIiBoZWlnaHQ9IjQ2Ljk4MyIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNTQ2LjY2MjMiIHkxPSIxMDk1LjY5NTQiIHgyPSI2MDAuMTczMyIgeTI9IjEwOTUuNjk1NCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfMV8pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTEyMi42NjMsNDA3LjA4NWwtNDguOTA5LTMzLjYwNWMtMC44NTYtMC42NDItMS42MDUtMS4zOTEtMi4wMzMtMi4yNDdjLTAuMjE0LDAuNTM1LTAuMzIxLDEuMDctMC4zMjEsMS42MDV2MzEuNTcxYzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzAuODU2LDAsMS42MDUtMC4yMTQsMi4yNDctMC42NDJDMTI0LjE2Miw0MDcuOTQyLDEyMy40MTMsNDA3LjYyMSwxMjIuNjYzLDQwNy4wODV6Ii8+PHJlY3QgeD0iNzcuODIxIiB5PSIzOTQuMTg5IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMzkuODEyIiBoZWlnaHQ9IjIuNjc2Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxMDkuMTQ0MyIgeTE9IjM0Mi4zOSIgeDI9IjEyMS43NjQyIiB5Mj0iMzQyLjM5Ij48c3RvcCAgb2Zmc2V0PSIwLjAxMDgiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDAiLz48c3RvcCAgb2Zmc2V0PSIwLjA2NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiMyMDIwMjAiLz48c3RvcCAgb2Zmc2V0PSIwLjE2NTQiIHN0eWxlPSJzdG9wLWNvbG9yOiM1NDU0NTQiLz48c3RvcCAgb2Zmc2V0PSIwLjI2OTMiIHN0eWxlPSJzdG9wLWNvbG9yOiM4MjgyODIiLz48c3RvcCAgb2Zmc2V0PSIwLjM3NTgiIHN0eWxlPSJzdG9wLWNvbG9yOiNBOEE4QTgiLz48c3RvcCAgb2Zmc2V0PSIwLjQ4NTIiIHN0eWxlPSJzdG9wLWNvbG9yOiNDOEM4QzgiLz48c3RvcCAgb2Zmc2V0PSIwLjU5ODUiIHN0eWxlPSJzdG9wLWNvbG9yOiNFMEUwRTAiLz48c3RvcCAgb2Zmc2V0PSIwLjcxNzQiIHN0eWxlPSJzdG9wLWNvbG9yOiNGMUYxRjEiLz48c3RvcCAgb2Zmc2V0PSIwLjg0NTciIHN0eWxlPSJzdG9wLWNvbG9yOiNGQ0ZDRkMiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRkZGRkZGIi8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBvcGFjaXR5PSIwLjA2IiBmaWxsPSJ1cmwoI1NWR0lEXzJfKSIgcG9pbnRzPSIxMDkuMTQ0LDMzNS4xOCAxMjEuNzY0LDM0NC45MTMgMTA5LjIzNiwzNDkuNjAxICIvPjxyZWN0IHg9Ijc4Ljg5MSIgeT0iMzk0LjkzOCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxnPjxnPjxyZWN0IHg9Ijc3LjI4NiIgeT0iMzQ3LjkwMiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjE5Ljc5OSIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzU3Ljg1NSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzYyLjc3OCIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzY3LjcwMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjA3MiIgeT0iMzcyLjczMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjxyZWN0IHg9Ijc3LjI4NiIgeT0iMzUyLjgyNSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjM5LjgxMiIgaGVpZ2h0PSIyLjY3NiIvPjwvZz48cmVjdCB4PSI3Ni43NTEiIHk9IjM4Mi4yMDMiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48cmVjdCB4PSI3Ni43NTEiIHk9IjM4Ny4xMjYiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48cmVjdCB4PSI3Ni45NjUiIHk9IjM3Ny4xNzMiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIzOS44MTIiIGhlaWdodD0iMi42NzYiLz48L2c+PHBhdGggZmlsbD0iI0YxNEQ1MSIgZD0iTTc0LjM5Niw0MDguMDQ5bDQ4LjkwOS0zMy42MDVjMC44NTYtMC42NDIsMS42MDUtMS4zOTEsMi4wMzMtMi4yNDdjMC4yMTQsMC41MzUsMC4zMjEsMS4wNywwLjMyMSwxLjYwNXYzMS40NjRjMCwyLjM1NC0xLjkyNiw0LjM4OC00LjM4OCw0LjM4OEg3NC4zOTZjLTAuODU2LDAtMS42MDUtMC4yMTQtMi4yNDctMC42NDJDNzIuODk4LDQwOC45MDUsNzMuNjQ3LDQwOC41ODQsNzQuMzk2LDQwOC4wNDl6Ii8+PHBhdGggZmlsbD0iI0ZBNTY1QSIgZD0iTTEyMC44NDQsNDA4LjI2M2wtNDguOTA5LTMzLjYwNWMtMC44NTYtMC42NDItMS42MDUtMS4zOTEtMi4wMzMtMi4yNDdjLTAuMjE0LDAuNTM1LTAuMzIxLDEuMDctMC4zMjEsMS42MDV2MzEuNTcxYzAsMi4zNTQsMS45MjYsNC4zODgsNC4zODgsNC4zODhoNDYuODc2YzAuODU2LDAsMS42MDUtMC4yMTQsMi4yNDctMC42NDJDMTIyLjQ0OSw0MDkuMDEyLDEyMS41OTMsNDA4LjY5MSwxMjAuODQ0LDQwOC4yNjN6Ii8+PHBhdGggb3BhY2l0eT0iMC42IiBmaWxsPSIjRjE0RDUxIiBkPSJNMTIwLjg0NCw0MDguMjYzbC0yMy4zMzEtMTYuMDUzbC0yMy4zMzEsMTYuMDUzYy0wLjc0OSwwLjUzNS0xLjQ5OCwwLjg1Ni0yLjM1NCwwLjk2M2MwLjY0MiwwLjQyOCwxLjM5MSwwLjY0MiwyLjI0NywwLjY0MmgyMC43NjJoMjYuMjJjMC44NTYsMCwxLjYwNS0wLjIxNCwyLjI0Ny0wLjY0MkMxMjIuNDQ5LDQwOS4wMTIsMTIxLjU5Myw0MDguNjkxLDEyMC44NDQsNDA4LjI2M3oiLz48cG9seWdvbiBmaWxsPSIjRDhEOEQ4IiBwb2ludHM9IjExMC4yNjcsMzM1Ljg0NCAxMjAuNjg2LDM0NC4wNDkgMTEwLjI2NywzNDcuOTAyICIvPjxwYXRoIGZpbGw9IiNDNjMyM0QiIGQ9Ik0xMTEuMzQ2LDM5MS43NTVjLTAuMDU4LDAuMjM0LTAuMTE3LDAuNDY3LTAuMTE3LDAuNzAxdjE1LjE4N2MwLDEuMjg1LDEuMDUxLDIuMzk1LDIuMzk1LDIuMzk1aDI1LjU4NWMxLjI4NSwwLDIuMzk1LTEuMDUxLDIuMzk1LTIuMzk1di0xNS4xODdjMC0wLjIzNC0wLjA1OC0wLjQ2Ny0wLjExNy0wLjcwMUgxMTEuMzQ2eiIvPjxwYXRoIGZpbGw9IiNFQTQ3NTMiIGQ9Ik0xMzkuMjY3LDM4OC4wMTZoLTI1LjY0M2MtMS4yODUsMC0yLjM5NSwxLjA1MS0yLjM5NSwyLjM5NWMwLDAsMC4wNTgtMC4xMTcsMC4xNzUtMC40MDljMC4yMzQsMC40NjcsMC41ODQsMC44NzYsMS4xMSwxLjIyN2wxMy45MDIsOS41OGwxMy45MDItOS41OGMwLjQ2Ny0wLjM1LDAuODc2LTAuNzU5LDEuMTEtMS4yMjdjMC4xMTcsMC4yOTIsMC4xNzUsMC40MDksMC4xNzUsMC40MDlDMTQxLjY2MiwzODkuMDY4LDE0MC41NTIsMzg4LjAxNiwxMzkuMjY3LDM4OC4wMTZ6Ii8+PHBvbHlnb24gZmlsbD0iI0Y3RjdGNyIgcG9pbnRzPSIxMzMuMTM5LDM2OS43NTMgMTEyLjcyLDM2OS43NTMgMTEyLjcyLDQwMi40NDQgMTM4Ljk0Nyw0MDIuNDQ0IDEzOC45NDcsMzc0LjM0NSAiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzNzIuNDc5IiBmaWxsPSIjRjRGNEY0IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjI1LjY0MyIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfM18iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNTg3LjI4MSIgeTE9IjExMDQuOTk5IiB4Mj0iNjE2LjQ4NzIiIHkyPSIxMTA0Ljk5OSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIC00NzUuMiAtNzA1LjY4KSI+PHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGRkZGRjtzdG9wLW9wYWNpdHk6MCIvPjxzdG9wICBvZmZzZXQ9IjAuMTQzNCIgc3R5bGU9InN0b3AtY29sb3I6I0Q0RDRENDtzdG9wLW9wYWNpdHk6MC4xMjkxIi8+PHN0b3AgIG9mZnNldD0iMC40NiIgc3R5bGU9InN0b3AtY29sb3I6IzdBN0E3QTtzdG9wLW9wYWNpdHk6MC40MTQiLz48c3RvcCAgb2Zmc2V0PSIwLjcxOCIgc3R5bGU9InN0b3AtY29sb3I6IzM4MzgzODtzdG9wLW9wYWNpdHk6MC42NDYyIi8+PHN0b3AgIG9mZnNldD0iMC45MDQyIiBzdHlsZT0ic3RvcC1jb2xvcjojMTAxMDEwO3N0b3Atb3BhY2l0eTowLjgxMzgiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojMDAwMDAwO3N0b3Atb3BhY2l0eTowLjkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfM18pIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTE0MC4wMjcsNDA4LjYzNmwtMjYuNjk1LTE4LjM0MmMtMC40NjctMC4zNS0wLjg3Ni0wLjc1OS0xLjExLTEuMjI3Yy0wLjExNywwLjI5Mi0wLjE3NSwwLjU4NC0wLjE3NSwwLjg3NnYxNy4yMzJjMCwxLjI4NSwxLjA1MSwyLjM5NSwyLjM5NSwyLjM5NWgyNS41ODVjMC40NjcsMCwwLjg3Ni0wLjExNywxLjIyNy0wLjM1QzE0MC44NDQsNDA5LjEwMywxNDAuNDM1LDQwOC45MjgsMTQwLjAyNyw0MDguNjM2eiIvPjxyZWN0IHg9IjExNS41NTIiIHk9IjQwMS41OTciIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfNF8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMTMyLjY0NzgiIHkxPSIzNzMuMzI1MiIgeDI9IjEzOS41MzU3IiB5Mj0iMzczLjMyNTIiPjxzdG9wICBvZmZzZXQ9IjAuMDEwOCIgc3R5bGU9InN0b3AtY29sb3I6IzAwMDAwMCIvPjxzdG9wICBvZmZzZXQ9IjAuMDY1OCIgc3R5bGU9InN0b3AtY29sb3I6IzIwMjAyMCIvPjxzdG9wICBvZmZzZXQ9IjAuMTY1NCIgc3R5bGU9InN0b3AtY29sb3I6IzU0NTQ1NCIvPjxzdG9wICBvZmZzZXQ9IjAuMjY5MyIgc3R5bGU9InN0b3AtY29sb3I6IzgyODI4MiIvPjxzdG9wICBvZmZzZXQ9IjAuMzc1OCIgc3R5bGU9InN0b3AtY29sb3I6I0E4QThBOCIvPjxzdG9wICBvZmZzZXQ9IjAuNDg1MiIgc3R5bGU9InN0b3AtY29sb3I6I0M4QzhDOCIvPjxzdG9wICBvZmZzZXQ9IjAuNTk4NSIgc3R5bGU9InN0b3AtY29sb3I6I0UwRTBFMCIvPjxzdG9wICBvZmZzZXQ9IjAuNzE3NCIgc3R5bGU9InN0b3AtY29sb3I6I0YxRjFGMSIvPjxzdG9wICBvZmZzZXQ9IjAuODQ1NyIgc3R5bGU9InN0b3AtY29sb3I6I0ZDRkNGQyIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkYiLz48L2xpbmVhckdyYWRpZW50Pjxwb2x5Z29uIG9wYWNpdHk9IjAuMDYiIGZpbGw9InVybCgjU1ZHSURfNF8pIiBwb2ludHM9IjEzMi42NDgsMzY5LjM5IDEzOS41MzYsMzc0LjcwMiAxMzIuNjk4LDM3Ny4yNjEgIi8+PHJlY3QgeD0iMTE2LjEzNiIgeT0iNDAyLjAwNiIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PGc+PGc+PHJlY3QgeD0iMTE1LjI2IiB5PSIzNzYuMzM0IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMTAuODA2IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODEuNzY2IiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODQuNDUzIiBmaWxsPSIjRDhEOEQ4IiB3aWR0aD0iMjEuNzI5IiBoZWlnaHQ9IjEuNDYiLz48cmVjdCB4PSIxMTUuMTQzIiB5PSIzODcuMTQiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4xNDMiIHk9IjM4OS44ODUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4yNiIgeT0iMzc5LjAyMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PC9nPjxyZWN0IHg9IjExNC45NjgiIHk9IjM5NS4wNTUiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNC45NjgiIHk9IjM5Ny43NDIiIGZpbGw9IiNEOEQ4RDgiIHdpZHRoPSIyMS43MjkiIGhlaWdodD0iMS40NiIvPjxyZWN0IHg9IjExNS4wODQiIHk9IjM5Mi4zMSIgZmlsbD0iI0Q4RDhEOCIgd2lkdGg9IjIxLjcyOSIgaGVpZ2h0PSIxLjQ2Ii8+PC9nPjxwYXRoIGZpbGw9IiNGMTRENTEiIGQ9Ik0xMTMuNjgyLDQwOS4xNjJsMjYuNjk1LTE4LjM0MmMwLjQ2Ny0wLjM1LDAuODc2LTAuNzU5LDEuMTEtMS4yMjdjMC4xMTcsMC4yOTIsMC4xNzUsMC41ODQsMC4xNzUsMC44NzZ2MTcuMTczYzAsMS4yODUtMS4wNTEsMi4zOTUtMi4zOTUsMi4zOTVoLTI1LjU4NWMtMC40NjcsMC0wLjg3Ni0wLjExNy0xLjIyNy0wLjM1QzExMi44NjUsNDA5LjYyOSwxMTMuMjc0LDQwOS40NTQsMTEzLjY4Miw0MDkuMTYyeiIvPjxwYXRoIGZpbGw9IiNGQTU2NUEiIGQ9Ik0xMzkuMDM0LDQwOS4yNzhsLTI2LjY5NS0xOC4zNDJjLTAuNDY3LTAuMzUtMC44NzYtMC43NTktMS4xMS0xLjIyN2MtMC4xMTcsMC4yOTItMC4xNzUsMC41ODQtMC4xNzUsMC44NzZ2MTcuMjMyYzAsMS4yODUsMS4wNTEsMi4zOTUsMi4zOTUsMi4zOTVoMjUuNTg1YzAuNDY3LDAsMC44NzYtMC4xMTcsMS4yMjctMC4zNUMxMzkuOTEsNDA5LjY4NywxMzkuNDQyLDQwOS41MTIsMTM5LjAzNCw0MDkuMjc4eiIvPjxwYXRoIG9wYWNpdHk9IjAuNiIgZmlsbD0iI0YxNEQ1MSIgZD0iTTEzOS4wMzQsNDA5LjI3OGwtMTIuNzM0LTguNzYybC0xMi43MzQsOC43NjJjLTAuNDA5LDAuMjkyLTAuODE4LDAuNDY3LTEuMjg1LDAuNTI2YzAuMzUsMC4yMzQsMC43NTksMC4zNSwxLjIyNywwLjM1aDExLjMzMmgxNC4zMTFjMC40NjcsMCwwLjg3Ni0wLjExNywxLjIyNy0wLjM1QzEzOS45MSw0MDkuNjg3LDEzOS40NDIsNDA5LjUxMiwxMzkuMDM0LDQwOS4yNzh6Ii8+PHBvbHlnb24gZmlsbD0iI0Q4RDhEOCIgcG9pbnRzPSIxMzMuMjYsMzY5Ljc1MyAxMzguOTQ3LDM3NC4yMzEgMTMzLjI2LDM3Ni4zMzQgIi8+PC9nPjxnPjxjaXJjbGUgZmlsbD0iIzcyOUNGQSIgY3g9IjE0My45ODQiIGN5PSIzNDMuMTIxIiByPSIxNi44ODUiLz48Y2lyY2xlIGZpbGw9IiNGOURCMDIiIGN4PSIxNDMuOTg0IiBjeT0iMzQzLjEyMSIgcj0iNy40NTUiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTQzLjYwNCwzMzQuNjk0YzAuMjU0LDAsMC41MDcsMCwwLjc2MSwwYy0wLjEyNy0xLjAxNy0wLjI1NC0yLjAzMy0wLjM4LTMuMDVDMTQzLjg1OCwzMzIuNjYxLDE0My43MzEsMzMzLjY3OCwxNDMuNjA0LDMzNC42OTR6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE0My42MDQsMzUxLjNjMC4yNTQsMCwwLjUwNywwLDAuNzYxLDBjLTAuMTI3LDEuMDE3LTAuMjU0LDIuMDMzLTAuMzgsMy4wNUMxNDMuODU4LDM1My4zMzQsMTQzLjczMSwzNTIuMzE3LDE0My42MDQsMzUxLjN6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE1MS45MDcsMzQzLjEzMWMwLDAuMjU0LDAsMC41MDcsMCwwLjc2MWMxLjAxNy0wLjEyNywyLjAzMy0wLjI1NCwzLjA1LTAuMzhDMTUzLjk0LDM0My4zODUsMTUyLjkyNCwzNDMuMjU4LDE1MS45MDcsMzQzLjEzMXoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTM1LjMwMSwzNDMuMTMxYzAsMC4yNTQsMCwwLjUwNywwLDAuNzYxYy0xLjAxNy0wLjEyNy0yLjAzMy0wLjI1NC0zLjA1LTAuMzhDMTMzLjI2OCwzNDMuMzg1LDEzNC4yODQsMzQzLjI1OCwxMzUuMzAxLDM0My4xMzF6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTE0OS41ODcsMzM2Ljk5MWMwLjE3OSwwLjE3OSwwLjM1OSwwLjM1OSwwLjUzOCwwLjUzOGMwLjYyOS0wLjgwOSwxLjI1OS0xLjYxNywxLjg4OC0yLjQyNkMxNTEuMjA0LDMzNS43MzMsMTUwLjM5NSwzMzYuMzYyLDE0OS41ODcsMzM2Ljk5MXoiLz48cGF0aCBmaWxsPSIjRjlEQjAyIiBkPSJNMTM3Ljg0NCwzNDguNzMzYzAuMTc5LDAuMTc5LDAuMzU5LDAuMzU5LDAuNTM4LDAuNTM4Yy0wLjgwOSwwLjYyOS0xLjYxNywxLjI1OS0yLjQyNiwxLjg4OEMxMzYuNTg2LDM1MC4zNSwxMzcuMjE1LDM0OS41NDIsMTM3Ljg0NCwzNDguNzMzeiIvPjxwYXRoIGZpbGw9IiNGOURCMDIiIGQ9Ik0xNTAuNTA1LDM0OC43MzNjLTAuMTc5LDAuMTc5LTAuMzU5LDAuMzU5LTAuNTM4LDAuNTM4YzAuODA5LDAuNjI5LDEuNjE3LDEuMjU5LDIuNDI2LDEuODg4QzE1MS43NjMsMzUwLjM1LDE1MS4xMzQsMzQ5LjU0MiwxNTAuNTA1LDM0OC43MzN6Ii8+PHBhdGggZmlsbD0iI0Y5REIwMiIgZD0iTTEzOC43NjMsMzM2Ljk5MWMtMC4xNzksMC4xNzktMC4zNTksMC4zNTktMC41MzgsMC41MzhjLTAuNjI5LTAuODA5LTEuMjU5LTEuNjE3LTEuODg4LTIuNDI2QzEzNy4xNDYsMzM1LjczMywxMzcuOTU0LDMzNi4zNjIsMTM4Ljc2MywzMzYuOTkxeiIvPjwvZz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzVfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjI3Ljc4MDUiIHkxPSIzNzMuOTQ0MiIgeDI9IjEyOC4yOTI1IiB5Mj0iMzczLjk0NDIiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkY7c3RvcC1vcGFjaXR5OjAuMiIvPjxzdG9wICBvZmZzZXQ9IjEiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDAwMDA7c3RvcC1vcGFjaXR5OjAuNCIvPjwvbGluZWFyR3JhZGllbnQ+PHBhdGggb3BhY2l0eT0iMC4wNiIgZmlsbD0idXJsKCNTVkdJRF81XykiIGQ9Ik02My43NTEsMzA1LjQyNUM2Ni4xLDMzNC45ODYsOTUuMjYyLDMzMi4xMDcsMTEyLjUsMzYxLjVjNi45NDgsMTEuODQ3LDI4LjU1NCw2OS45MDIsNS4yNTgsNzcuNTRDNDAuODYxLDQ2NC4yNTItMTAuMTg5LDM0My4yMTMsNjMuNzUxLDMwNS40MjV6Ii8+PGc+PHBvbHlnb24gb3BhY2l0eT0iMC4wNiIgZmlsbD0iIzAyMDIwMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAgICAiIHBvaW50cz0iMTM3LjQ3NiwxMTYuNzMzIDEyNS4zNTEsOTAuNzAzIDk5LjE1OSw3OC41NzggMTU2LjU1NCw1OS41ICIvPjxwb2x5Z29uIGZpbGw9IiM0Mjg1RjQiIHBvaW50cz0iMTM3LjQ3NiwxMTMuMzM4IDEyNS45OTcsODguNzYzIDEwMS40MjIsNzcuNDQ2IDE1NS40MjIsNTkuNSAiLz48L2c+PGc+PGNpcmNsZSBmaWxsPSIjRjEyODIxIiBjeD0iMTY1LjMxNyIgY3k9IjE2Ni4zNDgiIHI9IjI2LjYzNiIvPjxnPjxyZWN0IHg9IjE2My42MzgiIHk9IjE1NS41MjMiIGZpbGw9IiNGOUY5RjkiIHdpZHRoPSIyLjM2NiIgaGVpZ2h0PSIyMi42NSIvPjxyZWN0IHg9IjE1My40OTIiIHk9IjE2NS42NjUiIGZpbGw9IiNGOUY5RjkiIHdpZHRoPSIyMi42NSIgaGVpZ2h0PSIyLjM2NiIvPjwvZz48L2c+PGc+PGc+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1MS4wNzQsMzIyLjYzM2gwLjU5NWMwLjI3MywwLDAuNTEzLTAuMDM3LDAuNzE5LTAuMTFjMC4yMDYtMC4wNzMsMC4zOC0wLjE3MiwwLjUxOS0wLjI5N2MwLjE0LTAuMTI1LDAuMjQ1LTAuMjcxLDAuMzE1LTAuNDM5czAuMTA1LTAuMzQ1LDAuMTA1LTAuNTM0YzAtMC4yMTUtMC4wMy0wLjQxLTAuMDktMC41ODhjLTAuMDYtMC4xNzctMC4xNTEtMC4zMy0wLjI3My0wLjQ1OHMtMC4yNzYtMC4yMjgtMC40NjMtMC4zYy0wLjE4Ny0wLjA3Mi0wLjQwOS0wLjEwNy0wLjY2Ni0wLjEwN2MtMC4yMjQsMC0wLjQzMSwwLjAzNC0wLjYxOSwwLjEwMmMtMC4xODksMC4wNjgtMC4zNTMsMC4xNjYtMC40OTMsMC4yOTNjLTAuMTQsMC4xMjctMC4yNDksMC4yOC0wLjMyNywwLjQ2MWMtMC4wNzgsMC4xOC0wLjExNywwLjM4My0wLjExNywwLjYwN2gtMC41ODVjMC0wLjI4NiwwLjA1NC0wLjU0OSwwLjE2My0wLjc5YzAuMTA5LTAuMjQxLDAuMjU4LTAuNDQ4LDAuNDQ5LTAuNjIyYzAuMTktMC4xNzQsMC40MTYtMC4zMDksMC42NzgtMC40MDVjMC4yNjItMC4wOTYsMC41NDUtMC4xNDQsMC44NTEtMC4xNDRjMC4zMTIsMCwwLjU5NywwLjA0NCwwLjg1MywwLjEzMnMwLjQ3NSwwLjIxNSwwLjY1NiwwLjM4M2MwLjE4LDAuMTY3LDAuMzIsMC4zNzMsMC40MTksMC42MTdjMC4wOTksMC4yNDQsMC4xNDksMC41MjMsMC4xNDksMC44MzljMCwwLjE1OS0wLjAyNiwwLjMxOC0wLjA3OCwwLjQ3NWMtMC4wNTIsMC4xNTgtMC4xMjgsMC4zMDYtMC4yMjksMC40NDZzLTAuMjI4LDAuMjY3LTAuMzgsMC4zODNjLTAuMTUzLDAuMTE1LTAuMzI4LDAuMjExLTAuNTI3LDAuMjg1YzAuMjM0LDAuMDY1LDAuNDM2LDAuMTU0LDAuNjA1LDAuMjY2YzAuMTY5LDAuMTEyLDAuMzA4LDAuMjQzLDAuNDE3LDAuMzkzYzAuMTA5LDAuMTUsMC4xOSwwLjMxNCwwLjI0NCwwLjQ5M2MwLjA1NCwwLjE3OSwwLjA4LDAuMzY2LDAuMDgsMC41NjFjMCwwLjMyMi0wLjA1NSwwLjYwOC0wLjE2NiwwLjg1OGMtMC4xMTEsMC4yNS0wLjI2MywwLjQ2Mi0wLjQ1OCwwLjYzNmMtMC4xOTUsMC4xNzQtMC40MjYsMC4zMDYtMC42OTIsMC4zOTVjLTAuMjY3LDAuMDg5LTAuNTU2LDAuMTM0LTAuODY4LDAuMTM0Yy0wLjI4OSwwLTAuNTctMC4wNDItMC44NDEtMC4xMjdzLTAuNTE0LTAuMjExLTAuNzI3LTAuMzc4Yy0wLjIxMy0wLjE2Ny0wLjM4NC0wLjM3OC0wLjUxMi0wLjYzMmMtMC4xMjgtMC4yNTQtMC4xOTMtMC41NDktMC4xOTMtMC44ODhoMC41ODVjMCwwLjIyNCwwLjA0MSwwLjQzMSwwLjEyNCwwLjYxOXMwLjE5OSwwLjM1LDAuMzQ5LDAuNDg1czAuMzI4LDAuMjQsMC41MzQsMC4zMTVjMC4yMDYsMC4wNzUsMC40MzMsMC4xMTIsMC42OCwwLjExMmMwLjUwNCwwLDAuODk2LTAuMTI5LDEuMTc4LTAuMzg4czAuNDIyLTAuNjMzLDAuNDIyLTEuMTI0YzAtMC4yNTctMC4wNDMtMC40NzgtMC4xMjktMC42NjNjLTAuMDg2LTAuMTg1LTAuMjA4LTAuMzM3LTAuMzY2LTAuNDU2Yy0wLjE1OC0wLjExOS0wLjM0Ni0wLjIwNi0wLjU2Ni0wLjI2MXMtMC40NjItMC4wODMtMC43MjktMC4wODNoLTAuNTk1VjMyMi42MzN6Ii8+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1OS43NTksMzI2LjUwMWgtNC40NDh2LTAuNDQ5bDIuMzI2LTIuNjM4YzAuMjE4LTAuMjQ3LDAuNDAyLTAuNDcsMC41NTMtMC42NjhjMC4xNTEtMC4xOTgsMC4yNzMtMC4zODMsMC4zNjYtMC41NTRjMC4wOTMtMC4xNzEsMC4xNTktMC4zMzIsMC4yLTAuNDgzYzAuMDQxLTAuMTUxLDAuMDYxLTAuMzAyLDAuMDYxLTAuNDUxYzAtMC4yMTUtMC4wMzItMC40MS0wLjA5NS0wLjU4OGMtMC4wNjMtMC4xNzctMC4xNTgtMC4zMzEtMC4yODMtMC40NjFzLTAuMjgtMC4yMzEtMC40NjYtMC4zMDJjLTAuMTg1LTAuMDcyLTAuMzk4LTAuMTA3LTAuNjM5LTAuMTA3Yy0wLjI0NywwLTAuNDY5LDAuMDQxLTAuNjY2LDAuMTI0Yy0wLjE5NywwLjA4My0wLjM2NCwwLjE5OC0wLjUwMiwwLjM0NHMtMC4yNDUsMC4zMi0wLjMxOSwwLjUyMmMtMC4wNzUsMC4yMDItMC4xMTIsMC40MjEtMC4xMTIsMC42NThoLTAuNThjMC0wLjI5MywwLjA1LTAuNTY5LDAuMTQ5LTAuODI5YzAuMDk5LTAuMjYsMC4yNDMtMC40ODgsMC40MzItMC42ODNjMC4xODktMC4xOTUsMC40MTctMC4zNDksMC42ODUtMC40NjNjMC4yNjgtMC4xMTQsMC41NzMtMC4xNzEsMC45MTQtMC4xNzFjMC4zMTksMCwwLjYwNiwwLjA0MywwLjg2MywwLjEyOXMwLjQ3NSwwLjIxMSwwLjY1MywwLjM3NmMwLjE3OSwwLjE2NCwwLjMxNiwwLjM2NCwwLjQxMiwwLjZjMC4wOTYsMC4yMzYsMC4xNDQsMC41MDMsMC4xNDQsMC44MDJjMCwwLjIxNS0wLjAzOSwwLjQzMS0wLjExNywwLjY0OWMtMC4wNzgsMC4yMTgtMC4xODIsMC40MzQtMC4zMTIsMC42NDljLTAuMTMsMC4yMTUtMC4yOCwwLjQyOC0wLjQ0OSwwLjYzOWMtMC4xNjksMC4yMTEtMC4zNDMsMC40MTktMC41MjIsMC42MjRsLTEuOTgsMi4yMzhoMy43MzFWMzI2LjUwMXoiLz48L2c+PGc+PGc+PHBhdGggZmlsbD0iI0M2QzZDNiIgZD0iTTE1OS44OCwzMjAuMDhjMC0wLjE3MiwwLjAyOC0wLjMzMSwwLjA4NS0wLjQ3NmMwLjA1Ny0wLjE0NiwwLjEzNy0wLjI3MSwwLjI0LTAuMzc3czAuMjI4LTAuMTg5LDAuMzc0LTAuMjQ4YzAuMTQ1LTAuMDYsMC4zMDgtMC4wOSwwLjQ4Ny0wLjA5YzAuMTgxLDAsMC4zNDYsMC4wMywwLjQ5MywwLjA5YzAuMTQ2LDAuMDU5LDAuMjcxLDAuMTQyLDAuMzc1LDAuMjQ4YzAuMTAzLDAuMTA2LDAuMTgzLDAuMjMyLDAuMjM4LDAuMzc3YzAuMDU2LDAuMTQ1LDAuMDg0LDAuMzA1LDAuMDg0LDAuNDc2djAuMDcyYzAsMC4xNzItMC4wMjgsMC4zMzEtMC4wODQsMC40NzdjLTAuMDU1LDAuMTQ1LTAuMTM1LDAuMjcxLTAuMjM4LDAuMzc3Yy0wLjEwMywwLjEwNi0wLjIyOCwwLjE4OC0wLjM3MywwLjI0N2MtMC4xNDYsMC4wNTktMC4zMSwwLjA4OS0wLjQ4OSwwLjA4OWMtMC4xOCwwLTAuMzQ0LTAuMDMtMC40ODktMC4wODljLTAuMTQ1LTAuMDU5LTAuMjcxLTAuMTQxLTAuMzc1LTAuMjQ3Yy0wLjEwNC0wLjEwNi0wLjE4NS0wLjIzMi0wLjI0MS0wLjM3N2MtMC4wNTYtMC4xNDYtMC4wODUtMC4zMDUtMC4wODUtMC40NzdWMzIwLjA4eiBNMTYwLjE3NSwzMjAuMTUyYzAsMC4xMywwLjAyLDAuMjU0LDAuMDU5LDAuMzcxYzAuMDM5LDAuMTE4LDAuMDk3LDAuMjIsMC4xNzEsMC4zMDljMC4wNzYsMC4wODgsMC4xNjksMC4xNTksMC4yOCwwLjIxMWMwLjExMSwwLjA1MywwLjIzOSwwLjA3OSwwLjM4NCwwLjA3OWMwLjE0NCwwLDAuMjcxLTAuMDI2LDAuMzgyLTAuMDc5YzAuMTExLTAuMDUyLDAuMjAzLTAuMTIzLDAuMjc5LTAuMjExYzAuMDc2LTAuMDg5LDAuMTMyLTAuMTkxLDAuMTcyLTAuMzA5YzAuMDM5LTAuMTE3LDAuMDU5LTAuMjQxLDAuMDU5LTAuMzcxdi0wLjA3MmMwLTAuMTI3LTAuMDItMC4yNDktMC4wNTktMC4zNjZjLTAuMDQtMC4xMTgtMC4wOTctMC4yMi0wLjE3Mi0wLjMxYy0wLjA3Ni0wLjA4OS0wLjE2OS0wLjE2LTAuMjgxLTAuMjEzYy0wLjExMi0wLjA1NC0wLjI0MS0wLjA4LTAuMzg0LTAuMDhjLTAuMTQzLDAtMC4yNjksMC4wMjYtMC4zOCwwLjA4Yy0wLjExMSwwLjA1My0wLjIwNCwwLjEyNC0wLjI4LDAuMjEzYy0wLjA3NSwwLjA4OS0wLjEzMiwwLjE5Mi0wLjE3MSwwLjMxYy0wLjA0LDAuMTE3LTAuMDU5LDAuMjM5LTAuMDU5LDAuMzY2VjMyMC4xNTJ6Ii8+PC9nPjwvZz48Zz48cGF0aCBmaWxsPSIjQzZDNkM2IiBkPSJNMTY1LjExOCwzMjYuMjk4YzAuMTY0LDAsMC4zMjItMC4wMjQsMC40NzMtMC4wNzFjMC4xNTEtMC4wNDcsMC4yODYtMC4xMTcsMC40MDQtMC4yMXMwLjIxNS0wLjIwNiwwLjI5MS0wLjM0MWMwLjA3Ni0wLjEzNSwwLjEyLTAuMjkyLDAuMTMyLTAuNDcxaDAuNDk3Yy0wLjAxMiwwLjIyMi0wLjA2NywwLjQyNi0wLjE2NiwwLjYxM2MtMC4xLDAuMTg3LTAuMjMsMC4zNDgtMC4zOTMsMC40ODRjLTAuMTYyLDAuMTM1LTAuMzUsMC4yNDEtMC41NjMsMC4zMTdjLTAuMjEzLDAuMDc2LTAuNDM4LDAuMTE1LTAuNjczLDAuMTE1Yy0wLjMyOCwwLTAuNjE2LTAuMDYtMC44NjMtMC4xNzljLTAuMjQ4LTAuMTE5LTAuNDU1LTAuMjg1LTAuNjI0LTAuNDk1Yy0wLjE2OC0wLjIxLTAuMjk1LTAuNDU3LTAuMzgtMC43NGMtMC4wODUtMC4yODQtMC4xMjgtMC41OS0wLjEyOC0wLjkxN3YtMC4xODJjMC0wLjMyOCwwLjA0Mi0wLjYzNCwwLjEyOC0wLjkxN2MwLjA4NS0wLjI4MywwLjIxMS0wLjUyOSwwLjM3Ny0wLjczOGMwLjE2Ny0wLjIwOSwwLjM3NS0wLjM3NCwwLjYyNC0wLjQ5NGMwLjI0OS0wLjEyMSwwLjUzNi0wLjE4MiwwLjg2MS0wLjE4MmMwLjI1MSwwLDAuNDgzLDAuMDM5LDAuNjk3LDAuMTE3YzAuMjE0LDAuMDc4LDAuNDAxLDAuMTg5LDAuNTYxLDAuMzMyYzAuMTYsMC4xNDQsMC4yODgsMC4zMTksMC4zODIsMC41MjVjMC4wOTUsMC4yMDYsMC4xNDgsMC40MzUsMC4xNiwwLjY4OGgtMC40OTdjLTAuMDEyLTAuMTktMC4wNTItMC4zNTktMC4xMjMtMC41MDljLTAuMDcxLTAuMTQ5LTAuMTY0LTAuMjc4LTAuMjgxLTAuMzg0Yy0wLjExNi0wLjEwNi0wLjI1Mi0wLjE4OC0wLjQwNi0wLjI0NGMtMC4xNTQtMC4wNTYtMC4zMTktMC4wODQtMC40OTUtMC4wODRjLTAuMjY3LDAtMC40OTQsMC4wNTItMC42OCwwLjE1NWMtMC4xODYsMC4xMDQtMC4zMzcsMC4yNDMtMC40NTUsMC40MTljLTAuMTE5LDAuMTc1LTAuMjA0LDAuMzc3LTAuMjU3LDAuNjA0Yy0wLjA1MywwLjIyNy0wLjA4LDAuNDY1LTAuMDgsMC43MTJ2MC4xODJjMCwwLjI1LDAuMDI2LDAuNDksMC4wOCwwLjcxOGMwLjA1MywwLjIyOSwwLjEzOCwwLjQzMSwwLjI1NCwwLjYwNWMwLjExNywwLjE3NCwwLjI2OSwwLjMxMywwLjQ1OCwwLjQxN0MxNjQuNjIzLDMyNi4yNDcsMTY0Ljg1MSwzMjYuMjk4LDE2NS4xMTgsMzI2LjI5OHoiLz48L2c+PC9nPjwvc3ZnPg=='}});
background-size: contain;
background-repeat: no-repeat;
background-position: center; 
float: left;
}
#wpmchimpa-main #wpmchimpa-newsletterform{float: left;}
#wpmchimpa-main .wpmchimpa{
display: inline-block;
width: 380px;
margin: 40px 60px 0;
text-align: center;
}
#wpmchimpa-main .lite_heading{
width: 100%;
line-height: 86px;
margin-bottom:10px;
text-align: center;
position: relative;
color: {{data.theme.l2.lite_heading_fc||'#fff'}};
font-size: {{data.theme.l2.lite_heading_fs||'30'}}px;
font-weight: {{data.theme.l2.lite_heading_fw}};
font-family: {{data.theme.l2.lite_heading_f | livepf}};
font-style: {{data.theme.l2.lite_heading_fst}};
background-color: {{data.theme.l2.lite_hbg_c||'#0188cc'}};
}
#wpmchimpa-main .lite_heading:before{
content:'';
position: absolute;
top: 0;
left: 0;
width: 65px;
height: 86px;
background: {{getIcon('opt1',30,data.theme.l2.lite_hi_c||'#fff')}} no-repeat center;
}
#wpmchimpa .lite_msg,#wpmchimpa .lite_msg *{
font-weight: lighter;
line-height: 18px;
margin: 0;
font-size: {{data.theme.l2.lite_msg_fs||'12'}}px;
font-family: {{data.theme.l2.lite_msg_f | livepf}};
}
#wpmchimpa .lite_tbox{
text-align: left;
margin-bottom: 10px;
width: 100%;
padding: 0 20px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
outline:0;
display: block;
position: relative;
color: {{data.theme.l2.lite_tbox_fc||'#0188cc'}};
font-size: {{data.theme.l2.lite_tbox_fs||'18'}}px;
font-weight: {{data.theme.l2.lite_tbox_fw}};
font-family:Arial;
font-family: {{data.theme.l2.lite_tbox_f | livepf}};
font-style: {{data.theme.l2.lite_tbox_fst}};
background-color: {{data.theme.l2.lite_tbox_bgc}};
width: {{data.theme.l2.lite_tbox_w}}px;
height: {{data.theme.l2.lite_tbox_h||'40'}}px;
border-bottom: {{data.theme.l2.lite_tbox_bor||'1'}}px solid {{data.theme.l2.lite_tbox_borc||'#000'}};
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
width: 50px;
height:50px;
position: absolute;
top: 0;
right: 0;
}
.lite_tbox.mailicon:before{
background: {{getIcon('a06',25,data.theme.l2.lite_inico_c||'#000')}} no-repeat center;
}
.lite_tbox.pericon:before{
background: {{getIcon('c04',25,data.theme.l2.lite_inico_c||'#000')}} no-repeat center;
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
border:1px solid {{data.theme.l2.lite_check_borc||'#0188cc'}};
background-color: {{data.theme.l2.lite_check_c}};
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
}
#wpmchimpa .lite_check .ctext{
color: {{data.theme.l2.lite_check_fc}};
font-size: {{data.theme.l2.lite_check_fs}}px;
font-weight: {{data.theme.l2.lite_check_fw}};
font-family: {{data.theme.l2.lite_check_f | livepf}};
font-style: {{data.theme.l2.lite_check_fst}};
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
background-image:{{getIcon(data.theme.l2.lite_check_mark||'ch1',20,data.theme.l2.lite_check_ic||'#0188cc')}};
}

#wpmchimpa .lite_button{
line-height: 45px;
padding-left: 10px;
text-align: left;
cursor: pointer;
margin-top: 15px;
position: relative;
width: 100%;
color: {{data.theme.l2.lite_button_fc||'#fff'}};
font-size: {{data.theme.l2.lite_button_fs || "20"}}px;
font-weight: {{data.theme.l2.lite_button_fw}};
font-family: {{data.theme.l2.lite_button_f | livepf}};
font-style: {{data.theme.l2.lite_button_fst}};
background-color:{{data.theme.l2.lite_button_bc||'#0188cc'}};
width: {{data.theme.l2.lite_button_w}}px;
height: {{data.theme.l2.lite_button_h||'45'}}px;
-webkit-border-radius: {{data.theme.l2.lite_button_br||'1'}}px;
-moz-border-radius: {{data.theme.l2.lite_button_br||'1'}}px;
border-radius: {{data.theme.l2.lite_button_br||'1'}}px;
border: {{data.theme.l2.lite_button_bor||'1'}}px solid {{data.theme.l2.lite_button_borc||'#0284C5'}};
}
#wpmchimpa .lite_button:hover{
color: {{data.theme.l2.lite_button_fch}};
background-color: {{data.theme.l2.lite_button_bch}};
}
#wpmchimpa .lite_button:before{
content:'';
display: block;
width: 45px;
height:45px;
position: absolute;
top: 0;
right: 0;
background: {{getIcon('b03',25,data.theme.l2.lite_bg_c||'#fff')}} no-repeat center;
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
color: {{data.theme.l2.lite_close_col||'#999'}};
opacity: 0.4;
}
#wpmchimpa-main .wpmchimpa-close-button:hover:before{
opacity: 1;
}

.lite_spinner {
margin: 15px 0;
}

.lite_status{
position: relative;
font-size: 18px;
margin-bottom: 15px;
}

#wpmchimpa-main .wpmchimpa-social{
display: inline-block;
margin: 5px auto;
}
#wpmchimpa-main .wpmchimpa-social::before{
content:"{{data.theme.l2.lite_soc_head||'Subscribe with'}}";
line-height: 45px;
display: block;
float:left;
margin-right: 20px;
color: {{data.theme.l2.lite_soc_fc}};
font-size: {{data.theme.l2.lite_soc_fs||'13'}}px;
font-weight: {{data.theme.l2.lite_soc_fw}};
font-family: {{(data.theme.l2.lite_soc_f | livepf)}};
font-style: {{data.theme.l2.lite_soc_fst}};
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc{
width:45px;
height: 45px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
background: #f5f5f5;
box-shadow:0 2px 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.3);
float: left;
margin: 0 5px;
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
content: '';
width:45px;
height: 45px;
background: no-repeat center;
}

#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image: {{getIcon('fb1',16,'#2d609b')}}
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: {{getIcon('gp1',16,'#eb4026')}}
}
#wpmchimpa-main .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: {{getIcon('ms1',16,'#00BCF2')}}
}

#wpmchimpa .wpmchimpa-tag{
text-align: center;
display: {{data.theme.l2.lite_tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{data.theme.l2.lite_tag_fc||'#000'}};
font-size: {{data.theme.l2.lite_tag_fs||'10'}}px;
font-weight: {{data.theme.l2.lite_tag_fw}};
font-family:Arial;
font-family: {{data.theme.l2.lite_tag_f | livepf}};
font-style: {{data.theme.l2.lite_tag_fst}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',data.theme.l2.lite_tag_fs||10,data.theme.l2.lite_tag_fc||'#000')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpa-main.woleft .wpmchimpa-leftpane{
display:none;
}
#wpmchimpa-main.woleft{min-width: 0}
#wpmchimpa-main.woleft #wpmchimpa-newsletterform{margin: 50px}
#wpmchimpa-main.wosoc .wpmchimpa-social {
display: none;
}
#wpmchimpa-main.wosoc #wpmchimpa-newsletterform{
margin-top: 30px;
}
</style>

<div class="wpmchimpa-overlay-bg wpmchimpa-wrapper" id="lightbox1">
	<div id="wpmchimpa-main" ng-class="{'woleft':data.theme.l2.lite_disimg,'wosoc':data.theme.l2.lite_dissoc}">
        <div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="8" data-lhint="Go to Additional Theme Options" style="margin:15px;top:0">7</div>
        <div class="wpmchimpa-leftpane"></div>
		<div id="wpmchimpa-newsletterform">
			<div class="lite_heading">{{data.theme.l2.lite_heading}}</div>
			<div class="wpmchimpa" id="wpmchimpa">
    			<div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="1" data-lhint="Go to Custom Message Settings">1</div>
            
      			<div class="lite_msg"><p ng-bind-html="data.theme.l2.lite_msg | safe"></p></div>
          </div>
          <div class="wpmchimpa-social">
            <div class="wpmchimpa-soc wpmchimpa-fb"></div>
            <div class="wpmchimpa-soc wpmchimpa-gp"></div>
            <div class="wpmchimpa-soc wpmchimpa-ms"></div>
          </div>
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
        		<div class="lite_button">{{data.theme.l2.lite_button}}</div>
          </div>
          <div><div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="7" data-lhint="Go to Tag Settings">6</div>
	    		<div class="wpmchimpa-tag" ng-bind-html="data.theme.l2.lite_tag||'Secure and Spam free...' | safe"></div></div>
          <div>
          	<div class="wpmc-live-sc" ng-click="gotos($event)" data-optno="5" data-lhint="Go to Spinner Settings" style="right: -20px;">5</div>
          	<div class="lite_spinner" ng-bind-html="getSpin(data.theme.l2.lite_spinner_t||'3','wpmchimpa-wrapper',data.theme.l2.lite_spinner_c||'#0188cc')"></div>
          </div>
    			
          </div>
			</div>
      <div class="wpmchimpa-close-button"></div>
	</div>        
</div>