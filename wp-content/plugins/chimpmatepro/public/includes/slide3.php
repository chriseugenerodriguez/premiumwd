<?php 
$theme = $wpmchimpa['theme']['s3'];
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
padding: 180px 20px 0;
margin: 0 80px;
min-height:360px;
background: #fff no-repeat top;
<?php
if(isset($theme["slider_bg_c"])){
    echo 'background-color:'.$theme["slider_bg_c"].';';
}?>
background-image:<?php if(isset($theme['slider_img1']))echo 'url('.$theme['slider_img1'].');';else{?>
 url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzODBweCIgaGVpZ2h0PSIxNjBweCIgdmlld0JveD0iMCAwIDM4MCAxNjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDM4MCAxNjAiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxyZWN0IGZpbGw9IiNGRjUyNTIiIHdpZHRoPSIzODAiIGhlaWdodD0iMTYwIi8+PGc+PGc+PHJlY3QgeD0iOTQuOCIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSIxMDYuOSIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48L2c+PGc+PHJlY3QgeD0iMTc0LjIiIHk9IjUwLjIiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSI4LjkiIGhlaWdodD0iMi42Ii8+PHJlY3QgeD0iMTg2LjIiIHk9IjUwLjIiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSI4LjkiIGhlaWdodD0iMi42Ii8+PC9nPjxnPjxnPjxyZWN0IHg9IjExOCIgeT0iMzQuNCIgZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgd2lkdGg9IjE4IiBoZWlnaHQ9IjUuMyIvPjxyZWN0IHg9IjE0Mi40IiB5PSIzNC40IiBmaWxsPSIjRjRGNEY0IiBzdHJva2U9IiNGNEY0RjQiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB3aWR0aD0iMTgiIGhlaWdodD0iNS4zIi8+PC9nPjwvZz48Zz48cmVjdCB4PSIxOTguNCIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSIyMTAuNiIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSIyMjIuNSIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSIyMzQuNyIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48L2c+PGc+PHJlY3QgeD0iNzAuOCIgeT0iNTAuMiIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSI4Mi45IiB5PSI1MC4yIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjwvZz48Zz48Zz48cmVjdCB4PSIxMTguOCIgeT0iMTE4LjkiIGZpbGw9IiNGNEY0RjQiIHN0cm9rZT0iI0Y0RjRGNCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHdpZHRoPSIxOCIgaGVpZ2h0PSI1LjMiLz48cmVjdCB4PSIxNDMuMiIgeT0iMTE4LjkiIGZpbGw9IiNGNEY0RjQiIHN0cm9rZT0iI0Y0RjRGNCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHdpZHRoPSIxOCIgaGVpZ2h0PSI1LjMiLz48L2c+PC9nPjxnPjxyZWN0IHg9Ijk2LjQiIHk9IjEwNS4xIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjxyZWN0IHg9IjEwOC41IiB5PSIxMDUuMSIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48L2c+PGc+PHJlY3QgeD0iMTc1LjYiIHk9IjEwMy44IiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjxyZWN0IHg9IjE4Ny44IiB5PSIxMDMuOCIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48L2c+PHBhdGggZmlsbD0iI0VENEE0QSIgZD0iTTg5LjYsNzkuMmMwLDEzLjMsNS4yLDI1LjUsMTMuNywzNC41aDczLjNjOC41LTksMTMuNy0yMS4yLDEzLjctMzQuNXMtNS4yLTI1LjUtMTMuNy0zNC41aC03My4zQzk0LjgsNTMuNyw4OS42LDY1LjgsODkuNiw3OS4yeiIvPjxyZWN0IHg9IjcyLjIiIHk9IjU2LjIiIGZpbGw9IiNFRDRBNEEiIHdpZHRoPSIxNzIuOSIgaGVpZ2h0PSI0NS4zIi8+PGc+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTk4LjIsNzcuNWwxLjgtMTcuN2gxOC4yVjY0aC0xNC4zbC0xLjEsOS42YzAuNi0wLjQsMS41LTAuNywyLjUtMS4xYzEtMC4zLDIuMi0wLjUsMy40LTAuNWMxLjYsMCwzLDAuMyw0LjQsMC45YzEuNCwwLjYsMi41LDEuNCwzLjMsMi40YzAuOSwxLDEuNiwyLjMsMi4xLDMuN2MwLjUsMS41LDAuNywzLDAuNyw0LjljMCwxLjctMC4yLDMuMi0wLjcsNC43Yy0wLjUsMS41LTEuMiwyLjYtMi4xLDMuN2MtMC45LDEuMS0yLjEsMS45LTMuNCwyLjVzLTMsMC45LTQuOSwwLjljLTEuNSwwLTIuNy0wLjItNC0wLjZjLTEuMy0wLjQtMi40LTEtMy40LTEuOGMtMS0wLjgtMS44LTEuOS0yLjUtM2MtMC43LTEuMi0xLTIuNi0xLjItNC4zaDQuMmMwLjMsMi4xLDEsMy41LDIuMiw0LjZjMS4yLDEsMi43LDEuNiw0LjYsMS42YzEuMSwwLDIuMS0wLjIsMi44LTAuNmMwLjgtMC40LDEuNi0wLjksMi4xLTEuNmMwLjYtMC43LDEtMS42LDEuMy0yLjZjMC4zLTEsMC41LTIuMSwwLjUtMy4zYzAtMS4xLTAuMi0yLjItMC41LTNjLTAuMy0xLTAuOC0xLjgtMS40LTIuNXMtMS40LTEuMy0yLjMtMS43Yy0wLjktMC40LTEuOS0wLjYtMy0wLjZjLTAuOCwwLTEuNCwwLjEtMiwwLjJjLTAuNiwwLjEtMS4xLDAuMy0xLjUsMC41cy0wLjksMC40LTEuMiwwLjdjLTAuNCwwLjMtMC44LDAuNi0xLjIsMUw5OC4yLDc3LjV6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTE0Ni4yLDgwLjJjMCwyLjktMC4zLDUuMy0wLjgsNy40Yy0wLjUsMi0xLjMsMy42LTIuMyw0LjhjLTEsMS4yLTIuMiwyLjEtMy41LDIuNmMtMS40LDAuNS0yLjksMC44LTQuNiwwLjhzLTMuMi0wLjMtNC42LTAuOHMtMi42LTEuNC0zLjUtMi42Yy0xLTEuMi0xLjgtMi44LTIuMy00LjhjLTAuNS0yLTAuOC00LjQtMC44LTcuNHYtNS40YzAtMi45LDAuMy01LjMsMC44LTcuM2MwLjUtMiwxLjMtMy41LDIuMy00LjdjMS0xLjIsMi4yLTIuMSwzLjUtMi42YzEuNC0wLjUsMi45LTAuOCw0LjYtMC44czMuMiwwLjMsNC42LDAuOGMxLjQsMC41LDIuNiwxLjQsMy41LDIuNmMxLDEuMiwxLjcsMi43LDIuMyw0LjdjMC41LDIsMC44LDQuNCwwLjgsNy4zVjgwLjJ6IE0xNDEuNyw3NC4xYzAtMi0wLjEtMy43LTAuNC01LjFjLTAuMy0xLjQtMC43LTIuNi0xLjMtMy40Yy0wLjYtMC45LTEuMy0xLjUtMi4xLTEuOXMtMS44LTAuNi0yLjgtMC42Yy0xLjEsMC0yLjEsMC4yLTIuOCwwLjZjLTAuOCwwLjQtMS42LDEtMi4xLDEuOWMtMC42LDAuOS0xLDItMS4zLDMuNGMtMC4zLDEuNC0wLjQsMy0wLjQsNS4xdjYuOWMwLDIsMC4xLDMuNiwwLjQsNS4xczAuNywyLjYsMS4zLDMuNGMwLjYsMC45LDEuMywxLjYsMi4yLDJjMC44LDAuNCwxLjgsMC42LDIuOCwwLjZjMS4xLDAsMi4xLTAuMiwyLjgtMC42czEuNS0xLjEsMi4xLTJjMC42LTAuOSwxLTIuMSwxLjMtMy40YzAuMy0xLjQsMC40LTMuMSwwLjQtNS4xTDE0MS43LDc0LjFMMTQxLjcsNzQuMXoiLz48cGF0aCBmaWxsPSIjRjRGNEY0IiBzdHJva2U9IiNGNEY0RjQiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTUxLjUsNjYuN2MwLTEsMC4yLTIsMC41LTIuOGMwLjMtMC45LDAuOC0xLjcsMS41LTIuNGMwLjYtMC43LDEuNC0xLjIsMi4zLTEuNmMwLjktMC40LDEuOS0wLjYsMy0wLjZjMS4yLDAsMi4yLDAuMiwzLDAuNnMxLjcsMC45LDIuMywxLjZjMC42LDAuNywxLjEsMS41LDEuNCwyLjRjMC4zLDAuOSwwLjUsMS45LDAuNSwyLjh2MS45YzAsMS0wLjIsMi0wLjUsMi44Yy0wLjMsMC45LTAuOCwxLjctMS40LDIuM2MtMC42LDAuNy0xLjQsMS4yLTIuMywxLjZjLTAuOSwwLjQtMS45LDAuNi0zLDAuNnMtMi4yLTAuMi0zLTAuNmMtMC45LTAuNC0xLjctMC45LTIuMy0xLjZjLTAuNi0wLjctMS4xLTEuNS0xLjUtMi4zYy0wLjMtMC45LTAuNS0xLjktMC41LTIuOFY2Ni43eiBNMTU0LjksNjguNmMwLDAuNiwwLjEsMS4xLDAuMiwxLjdjMC4yLDAuNSwwLjQsMSwwLjcsMS40YzAuMywwLjQsMC43LDAuNywxLjIsMWMwLjUsMC4yLDEuMSwwLjQsMS44LDAuNGMwLjcsMCwxLjItMC4xLDEuNy0wLjRjMC41LTAuMiwwLjktMC42LDEuMi0xYzAuMy0wLjQsMC42LTAuOSwwLjctMS40YzAuMi0wLjUsMC4yLTEuMSwwLjItMS43di0xLjljMC0wLjYtMC4xLTEuMS0wLjItMS43Yy0wLjItMC41LTAuNC0xLTAuNy0xLjRjLTAuMy0wLjQtMC43LTAuNy0xLjItMWMtMC41LTAuMy0xLjEtMC40LTEuNy0wLjRjLTAuNywwLTEuMywwLjEtMS44LDAuNGMtMC41LDAuMy0wLjksMC42LTEuMiwxYy0wLjMsMC40LTAuNiwwLjktMC43LDEuNGMtMC4yLDAuNS0wLjIsMS4xLTAuMiwxLjdWNjguNnogTTE1OS44LDkyLjZsLTIuNi0xLjZsMTcuMy0yNy42bDIuNiwxLjZMMTU5LjgsOTIuNnogTTE2OC44LDg2LjZjMC0xLDAuMi0yLDAuNS0yLjhjMC4zLTAuOSwwLjgtMS43LDEuNS0yLjRzMS40LTEuMiwyLjMtMS42YzAuOS0wLjQsMS45LTAuNiwzLTAuNnMyLjIsMC4yLDMsMC42czEuNywwLjksMi4zLDEuNmMwLjYsMC43LDEuMSwxLjUsMS41LDIuNGMwLjMsMC45LDAuNSwxLjksMC41LDIuOHYxLjljMCwxLTAuMiwyLTAuNSwyLjhjLTAuMywwLjktMC44LDEuNy0xLjUsMi4zYy0wLjYsMC43LTEuNCwxLjItMi4zLDEuNmMtMC45LDAuNC0xLjksMC42LTMsMC42Yy0xLjIsMC0yLjItMC4yLTMtMC42Yy0wLjktMC40LTEuNy0wLjktMi4zLTEuNmMtMC42LTAuNy0xLjEtMS41LTEuNS0yLjNjLTAuMy0wLjktMC41LTEuOS0wLjUtMi44Vjg2LjZ6IE0xNzIuMSw4OC41YzAsMC42LDAuMSwxLjEsMC4yLDEuN2MwLjIsMC41LDAuNCwxLDAuNywxLjRzMC43LDAuNywxLjIsMWMwLjUsMC4yLDEuMSwwLjQsMS44LDAuNHMxLjItMC4xLDEuNy0wLjRjMC41LTAuMiwwLjktMC42LDEuMi0xYzAuMy0wLjQsMC42LTAuOSwwLjctMS40YzAuMi0wLjUsMC4yLTEuMSwwLjItMS43di0xLjljMC0wLjYtMC4xLTEuMS0wLjItMS43Yy0wLjItMC41LTAuNC0xLTAuNy0xLjRjLTAuMy0wLjQtMC43LTAuNy0xLjItMWMtMC41LTAuMi0xLjEtMC40LTEuNy0wLjRjLTAuNywwLTEuMiwwLjEtMS43LDAuNGMtMC41LDAuMi0wLjksMC42LTEuMiwxYy0wLjMsMC40LTAuNiwwLjktMC43LDEuNGMtMC4yLDAuNS0wLjIsMS4xLTAuMiwxLjdMMTcyLjEsODguNUwxNzIuMSw4OC41eiIvPjwvZz48Zz48cGF0aCBmaWxsPSIjRjRGNEY0IiBzdHJva2U9IiNGNEY0RjQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTIwNS43LDc4LjFjMCwxLTAuMSwxLjktMC40LDIuNnMtMC42LDEuNC0xLjEsMmMtMC41LDAuNS0xLDEtMS43LDEuM2MtMC43LDAuMy0xLjQsMC40LTIuMiwwLjRjLTAuOCwwLTEuNS0wLjEtMi4xLTAuNGMtMC43LTAuMy0xLjItMC43LTEuNy0xLjNjLTAuNS0wLjUtMC44LTEuMi0xLjEtMmMtMC4zLTAuOC0wLjQtMS43LTAuNC0yLjZ2LTAuOGMwLTEsMC4xLTEuOSwwLjQtMi42YzAuMy0wLjgsMC42LTEuNSwxLjEtMmMwLjUtMC41LDEtMSwxLjctMS4zYzAuNy0wLjMsMS40LTAuNCwyLjEtMC40YzAuOCwwLDEuNSwwLjEsMi4yLDAuNGMwLjcsMC4zLDEuMiwwLjcsMS43LDEuM2MwLjUsMC41LDAuOCwxLjIsMS4xLDJzMC40LDEuNywwLjQsMi42Vjc4LjF6IE0yMDQuMSw3Ny4zYzAtMC44LTAuMS0xLjUtMC4yLTIuMWMtMC4yLTAuNi0wLjQtMS4xLTAuNy0xLjVjLTAuMy0wLjQtMC43LTAuNy0xLjEtMC45Yy0wLjQtMC4yLTAuOS0wLjMtMS41LTAuM2MtMC41LDAtMSwwLjEtMS41LDAuM2MtMC40LDAuMi0wLjgsMC41LTEuMSwwLjljLTAuMywwLjQtMC41LDAuOS0wLjcsMS41Yy0wLjIsMC42LTAuMywxLjMtMC4zLDIuMXYwLjhjMCwwLjgsMC4xLDEuNSwwLjMsMi4xczAuNCwxLjEsMC43LDEuNWMwLjMsMC40LDAuNywwLjcsMS4xLDAuOWMwLjQsMC4yLDAuOSwwLjMsMS41LDAuM2MwLjYsMCwxLjEtMC4xLDEuNS0wLjNjMC40LTAuMiwwLjgtMC41LDEuMS0wLjljMC4zLTAuNCwwLjUtMC45LDAuNy0xLjVzMC4yLTEuMywwLjItMi4xVjc3LjN6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0yMDguOSw4NC4ydi04LjNoLTEuNXYtMS4zaDEuNXYtMWMwLTAuNSwwLjEtMSwwLjItMS40YzAuMS0wLjQsMC40LTAuNywwLjYtMXMwLjYtMC41LDEtMC42czAuOC0wLjIsMS4zLTAuMmMwLjQsMCwwLjgsMC4xLDEuMSwwLjJsLTAuMSwxLjRjLTAuMSwwLTAuMywwLTAuNC0wLjFjLTAuMiwwLTAuMywwLTAuNSwwYy0wLjUsMC0xLDAuMi0xLjMsMC41Yy0wLjMsMC4zLTAuNCwwLjgtMC40LDEuNHYxaDIuMVY3NmgtMi4xdjguM2gtMS41Vjg0LjJ6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0yMTUuMiw4NC4ydi04LjNoLTEuNXYtMS4zaDEuNXYtMWMwLTAuNSwwLjEtMSwwLjItMS40YzAuMS0wLjQsMC40LTAuNywwLjYtMXMwLjYtMC41LDEtMC42czAuOC0wLjIsMS4zLTAuMmMwLjQsMCwwLjgsMC4xLDEuMSwwLjJsLTAuMSwxLjRjLTAuMSwwLTAuMywwLTAuNC0wLjFjLTAuMiwwLTAuMywwLTAuNSwwYy0wLjUsMC0xLDAuMi0xLjMsMC41Yy0wLjMsMC4zLTAuNCwwLjgtMC40LDEuNHYxaDIuMVY3NmgtMi4xdjguM2gtMS41Vjg0LjJ6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0yMjQuNCw4NC40Yy0wLjcsMC0xLjMtMC4xLTEuOC0wLjRjLTAuNi0wLjItMS0wLjYtMS40LTFzLTAuNy0wLjktMC45LTEuNXMtMC4zLTEuMi0wLjMtMS45di0wLjRjMC0wLjgsMC4xLTEuNSwwLjQtMi4xYzAuMi0wLjYsMC42LTEuMiwxLTEuNmMwLjQtMC40LDAuOS0wLjgsMS40LTFjMC41LTAuMiwxLTAuMywxLjYtMC4zYzAuNywwLDEuMywwLjEsMS44LDAuNGMwLjUsMC4yLDAuOSwwLjYsMS4zLDFzMC42LDAuOSwwLjcsMS41YzAuMiwwLjYsMC4yLDEuMiwwLjIsMS45djAuN2gtNi41YzAsMC41LDAuMSwwLjksMC4yLDEuM2MwLjEsMC40LDAuMywwLjcsMC42LDFjMC4zLDAuMywwLjYsMC41LDAuOSwwLjdjMC40LDAuMiwwLjgsMC4zLDEuMiwwLjNjMC42LDAsMS4xLTAuMSwxLjUtMC40YzAuNC0wLjIsMC44LTAuNiwxLjEtMWwxLDAuOGMtMC4yLDAuMi0wLjMsMC41LTAuNiwwLjdjLTAuMiwwLjItMC41LDAuNC0wLjgsMC42Yy0wLjMsMC4yLTAuNiwwLjMtMSwwLjRDMjI1LjMsODQuMywyMjQuOSw4NC40LDIyNC40LDg0LjR6IE0yMjQuMiw3NS43Yy0wLjMsMC0wLjYsMC4xLTAuOSwwLjJjLTAuMywwLjEtMC41LDAuMy0wLjgsMC41Yy0wLjMsMC4yLTAuNCwwLjUtMC42LDAuOWMtMC4xLDAuMy0wLjIsMC43LTAuMywxLjJoNC44di0wLjFjMC0wLjMtMC4xLTAuNi0wLjItMWMtMC4xLTAuMy0wLjItMC42LTAuNC0wLjlzLTAuNC0wLjUtMC43LTAuNkMyMjQuOSw3NS44LDIyNC42LDc1LjcsMjI0LjIsNzUuN3oiLz48cGF0aCBmaWxsPSIjRjRGNEY0IiBzdHJva2U9IiNGNEY0RjQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTIzNC43LDc2Yy0wLjEsMC0wLjMsMC0wLjQsMGMtMC4xLDAtMC4zLDAtMC40LDBjLTAuNiwwLTEsMC4xLTEuNCwwLjRzLTAuNiwwLjYtMC44LDF2Ni44aC0xLjd2LTkuNmgxLjZ2MS4xYzAuMy0wLjQsMC42LTAuNywwLjktMWMwLjQtMC4yLDAuOC0wLjQsMS40LTAuNGMwLjEsMCwwLjMsMCwwLjQsMGMwLjIsMCwwLjMsMC4xLDAuMywwLjFMMjM0LjcsNzZMMjM0LjcsNzZ6Ii8+PC9nPjxnPjxyZWN0IHg9IjIwMCIgeT0iMTAzLjgiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSI4LjkiIGhlaWdodD0iMi42Ii8+PHJlY3QgeD0iMjEyLjEiIHk9IjEwMy44IiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjxyZWN0IHg9IjIyNC4xIiB5PSIxMDMuOCIgZmlsbD0iI0ZGRkZGRiIgd2lkdGg9IjguOSIgaGVpZ2h0PSIyLjYiLz48cmVjdCB4PSIyMzYuMyIgeT0iMTAzLjgiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSI4LjkiIGhlaWdodD0iMi42Ii8+PC9nPjxnPjxyZWN0IHg9IjcyLjIiIHk9IjEwNS4xIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjxyZWN0IHg9Ijg0LjMiIHk9IjEwNS4xIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iOC45IiBoZWlnaHQ9IjIuNiIvPjwvZz48cGF0aCBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgZD0iTTEzOS45LDMzLjNjLTI1LjIsMC00NS42LDIwLjQtNDUuNiw0NS42czIwLjQsNDUuNiw0NS42LDQ1LjZzNDUuNi0yMC40LDQ1LjYtNDUuNlMxNjUuMSwzMy4zLDEzOS45LDMzLjN6IE0xNDAuMSwxMjIuMmMtMjMuOCwwLTQzLjMtMTkuMy00My4zLTQzLjNjMC0yMy44LDE5LjMtNDMuMyw0My4zLTQzLjNjMjMuOCwwLDQzLjMsMTkuMyw0My4zLDQzLjNTMTY0LjEsMTIyLjIsMTQwLjEsMTIyLjJ6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTEzOS45LDI4LjVDMTEyLDI4LjUsODkuNSw1MSw4OS41LDc4LjlzMjIuNiw1MC40LDUwLjQsNTAuNHM1MC40LTIyLjYsNTAuNC01MC40UzE2Ny44LDI4LjUsMTM5LjksMjguNXogTTEzOS45LDEyNC41Yy0yNS4yLDAtNDUuNi0yMC40LTQ1LjYtNDUuNnMyMC40LTQ1LjYsNDUuNi00NS42czQ1LjYsMjAuNCw0NS42LDQ1LjZTMTY1LjEsMTI0LjUsMTM5LjksMTI0LjV6Ii8+PGc+PGc+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTI1MC40LDU3YzAtMC4xLDAtMC4yLTAuMS0wLjNjMC0wLjEtMC4xLTAuMi0wLjItMC4zcy0wLjItMC4yLTAuNC0wLjJjLTAuMi0wLjEtMC40LTAuMS0wLjYtMC4yYy0wLjMtMC4xLTAuNS0wLjItMC43LTAuM3MtMC40LTAuMi0wLjYtMC4zYy0wLjItMC4xLTAuMy0wLjMtMC4zLTAuNGMtMC4xLTAuMi0wLjEtMC4zLTAuMS0wLjZjMC0wLjMsMC0wLjQsMC4xLTAuNmMwLjEtMC4yLDAuMi0wLjMsMC40LTAuNWMwLjItMC4xLDAuNC0wLjIsMC42LTAuM3MwLjUtMC4xLDAuOC0wLjFjMC4zLDAsMC42LDAsMC44LDAuMXMwLjQsMC4yLDAuNiwwLjRjMC4yLDAuMiwwLjMsMC4zLDAuNCwwLjVjMC4xLDAuMiwwLjEsMC40LDAuMSwwLjZoLTAuN2MwLTAuMiwwLTAuMy0wLjEtMC40YzAtMC4xLTAuMS0wLjItMC4yLTAuM2MtMC4xLTAuMS0wLjItMC4yLTAuNC0wLjJjLTAuMS0wLjEtMC4zLTAuMS0wLjUtMC4xcy0wLjQsMC0wLjUsMC4xYy0wLjEsMC0wLjMsMC4xLTAuMywwLjJjLTAuMSwwLjEtMC4yLDAuMi0wLjIsMC4zcy0wLjEsMC4yLTAuMSwwLjNjMCwwLjEsMCwwLjIsMC4xLDAuM2MwLDAuMSwwLjEsMC4yLDAuMiwwLjNzMC4yLDAuMiwwLjQsMC4yYzAuMiwwLDAuMywwLjEsMC42LDAuMmMwLjMsMC4xLDAuNiwwLjIsMC44LDAuM3MwLjQsMC4yLDAuNSwwLjRjMC4xLDAuMSwwLjMsMC4zLDAuMywwLjRjMC4xLDAuMiwwLjEsMC40LDAuMSwwLjZjMCwwLjIsMCwwLjQtMC4xLDAuNmMtMC4xLDAuMi0wLjIsMC4zLTAuNCwwLjVzLTAuNCwwLjItMC42LDAuM2MtMC4yLDAuMS0wLjUsMC4xLTAuOCwwLjFjLTAuMiwwLTAuMywwLTAuNSwwcy0wLjMtMC4xLTAuNS0wLjFjLTAuMi0wLjEtMC4zLTAuMS0wLjQtMC4yYy0wLjEtMC4xLTAuMi0wLjItMC4zLTAuM2MtMC4xLTAuMS0wLjItMC4zLTAuMi0wLjRzLTAuMS0wLjMtMC4xLTAuNWgwLjdjMCwwLjIsMCwwLjMsMC4xLDAuNWMwLjEsMC4xLDAuMiwwLjIsMC4zLDAuM2MwLjEsMC4xLDAuMywwLjEsMC40LDAuMmMwLjEsMC4xLDAuMywwLjEsMC41LDAuMWMwLjQsMCwwLjctMC4xLDAuOS0wLjJDMjUwLjMsNTcuNSwyNTAuNCw1Ny4zLDI1MC40LDU3eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yNTUuNyw1My4xdjMuNmMwLDAuMy0wLjEsMC42LTAuMiwwLjhzLTAuMiwwLjQtMC40LDAuNmMtMC4yLDAuMi0wLjQsMC4zLTAuNiwwLjNjLTAuMiwwLjEtMC41LDAuMS0wLjcsMC4xYy0wLjMsMC0wLjUsMC0wLjgtMC4xYy0wLjItMC4xLTAuNC0wLjItMC42LTAuM2MtMC4yLTAuMi0wLjMtMC4zLTAuNC0wLjZjLTAuMS0wLjItMC4yLTAuNS0wLjItMC44di0zLjZoMC43djMuNmMwLDAuMiwwLDAuNCwwLjEsMC41YzAuMSwwLjEsMC4xLDAuMywwLjMsMC40YzAuMSwwLjEsMC4yLDAuMiwwLjQsMC4yczAuMywwLjEsMC41LDAuMXMwLjQsMCwwLjUtMC4xYzAuMiwwLDAuMy0wLjEsMC40LTAuMmMwLjEtMC4xLDAuMi0wLjIsMC4zLTAuNGMwLjEtMC4yLDAuMS0wLjMsMC4xLTAuNXYtMy42SDI1NS43eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yNTcuOCw1My4xbDEuNyw0LjNsMS44LTQuM2gwLjl2NS4zaC0wLjd2LTIuMWwwLjEtMi4zbC0xLjgsNC4zaC0wLjVsLTEuOC00LjNsMC4xLDIuM3YyLjFoLTAuN3YtNS4zSDI1Ny44eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yNjQuMiw1My4xbDEuOCw0LjNsMS44LTQuM2gwLjl2NS4zSDI2OHYtMi4xbDAuMS0yLjNsLTEuOCw0LjNoLTAuNWwtMS44LTQuM2wwLjEsMi4zdjIuMWgtMC44di01LjNIMjY0LjJ6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTI3Mi45LDU1LjloLTIuM3YxLjloMi42djAuNmgtMy4zdi01LjNoMy4zdjAuNmgtMi42djEuN2gyLjNWNTUuOXoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjc2LDU2LjJoLTEuM3YyLjJIMjc0di01LjNoMS44YzAuNiwwLDEuMSwwLjEsMS40LDAuNGMwLjMsMC4zLDAuNSwwLjcsMC41LDEuMmMwLDAuMy0wLjEsMC42LTAuMywwLjljLTAuMiwwLjItMC40LDAuNC0wLjgsMC42bDEuMywyLjNsMCwwaC0wLjhMMjc2LDU2LjJ6IE0yNzQuNyw1NS42aDEuMWMwLjIsMCwwLjQsMCwwLjUtMC4xYzAuMS0wLjEsMC4zLTAuMSwwLjQtMC4yYzAuMS0wLjEsMC4yLTAuMiwwLjItMC4zczAuMS0wLjMsMC4xLTAuNGMwLTAuMiwwLTAuMy0wLjEtMC40YzAtMC4xLTAuMS0wLjItMC4yLTAuM3MtMC4yLTAuMi0wLjQtMC4yYy0wLjEsMC0wLjMtMC4xLTAuNS0wLjFoLTEuMVY1NS42eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yODMuMyw1N2MwLTAuMSwwLTAuMi0wLjEtMC4zYzAtMC4xLTAuMS0wLjItMC4yLTAuM2MtMC4xLTAuMS0wLjItMC4yLTAuNC0wLjJjLTAuMi0wLjEtMC40LTAuMS0wLjYtMC4yYy0wLjMtMC4xLTAuNS0wLjItMC43LTAuM2MtMC4yLTAuMS0wLjQtMC4yLTAuNi0wLjNjLTAuMi0wLjEtMC4zLTAuMy0wLjMtMC40Yy0wLjEtMC4yLTAuMS0wLjMtMC4xLTAuNmMwLTAuMywwLTAuNCwwLjEtMC42czAuMi0wLjMsMC40LTAuNWMwLjItMC4xLDAuNC0wLjIsMC42LTAuM2MwLjItMC4xLDAuNS0wLjEsMC44LTAuMWMwLjMsMCwwLjYsMCwwLjgsMC4xYzAuMiwwLjEsMC40LDAuMiwwLjYsMC40YzAuMiwwLjIsMC4zLDAuMywwLjQsMC41YzAuMSwwLjIsMC4xLDAuNCwwLjEsMC42aC0wLjdjMC0wLjIsMC0wLjMtMC4xLTAuNGMwLTAuMS0wLjEtMC4yLTAuMi0wLjNjLTAuMS0wLjEtMC4yLTAuMi0wLjQtMC4yYy0wLjEtMC4xLTAuMy0wLjEtMC41LTAuMWMtMC4yLDAtMC40LDAtMC41LDAuMWMtMC4xLDAtMC4zLDAuMS0wLjMsMC4yYy0wLjEsMC4xLTAuMiwwLjItMC4yLDAuM3MtMC4xLDAuMi0wLjEsMC4zYzAsMC4xLDAsMC4yLDAuMSwwLjNjMCwwLjEsMC4xLDAuMiwwLjIsMC4zYzAuMSwwLjEsMC4yLDAuMiwwLjQsMC4yYzAuMiwwLDAuMywwLjEsMC42LDAuMmMwLjMsMC4xLDAuNiwwLjIsMC44LDAuM3MwLjQsMC4yLDAuNSwwLjRjMC4xLDAuMSwwLjMsMC4zLDAuMywwLjRjMC4xLDAuMiwwLjEsMC40LDAuMSwwLjZjMCwwLjIsMCwwLjQtMC4xLDAuNmMtMC4xLDAuMi0wLjIsMC4zLTAuNCwwLjVjLTAuMiwwLjItMC40LDAuMi0wLjYsMC4zYy0wLjIsMC4xLTAuNSwwLjEtMC44LDAuMWMtMC4yLDAtMC4zLDAtMC41LDBjLTAuMiwwLTAuMy0wLjEtMC41LTAuMWMtMC4yLTAuMS0wLjMtMC4xLTAuNC0wLjJjLTAuMS0wLjEtMC4yLTAuMi0wLjMtMC4zcy0wLjItMC4zLTAuMi0wLjRzLTAuMS0wLjMtMC4xLTAuNWgwLjdjMCwwLjIsMCwwLjMsMC4xLDAuNWMwLjEsMC4xLDAuMiwwLjIsMC4zLDAuM2MwLjEsMC4xLDAuMywwLjEsMC40LDAuMmMwLjEsMC4xLDAuMywwLjEsMC41LDAuMWMwLjQsMCwwLjctMC4xLDAuOS0wLjJDMjgzLjIsNTcuNSwyODMuMyw1Ny4zLDI4My4zLDU3eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yODcuOCw1N2gtMi4zbC0wLjUsMS40aC0wLjdsMi4xLTUuM2gwLjZsMi4xLDUuM2gtMC43TDI4Ny44LDU3eiBNMjg1LjgsNTYuNGgxLjhsLTAuOS0yLjVMMjg1LjgsNTYuNHoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjkwLjQsNTcuOGgyLjZ2MC42aC0zLjJ2LTUuM2gwLjdMMjkwLjQsNTcuOEwyOTAuNCw1Ny44eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTYuNyw1NS45aC0yLjN2MS45aDIuNnYwLjZoLTMuM3YtNS4zaDMuM3YwLjZoLTIuNnYxLjdoMi4zTDI5Ni43LDU1LjlMMjk2LjcsNTUuOXoiLz48L2c+PC9nPjxnPjxnPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zMDguMiw1N2gtMi4zbC0wLjUsMS40aC0wLjdsMi4xLTUuM2gwLjZsMi4xLDUuM2gtMC43TDMwOC4yLDU3eiBNMzA2LjEsNTYuNGgxLjhMMzA3LDU0TDMwNi4xLDU2LjR6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTMxMSw1My4xbDEuOCw0LjNsMS44LTQuM2gwLjl2NS4zaC0wLjd2LTIuMWwwLjEtMi4zbC0xLjgsNC4zaC0wLjdsLTEuOC00LjNsMC4xLDIuM3YyLjFIMzEwdi01LjNIMzExeiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zMTkuNiw1NS45aC0yLjN2MS45aDIuNnYwLjZoLTMuM3YtNS4zaDMuM3YwLjZoLTIuNnYxLjdoMi4zVjU1Ljl6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTMyMi43LDU2LjJoLTEuM3YyLjJoLTAuN3YtNS4zaDEuOGMwLjYsMCwxLjEsMC4xLDEuNCwwLjRjMC4zLDAuMywwLjUsMC43LDAuNSwxLjJjMCwwLjMtMC4xLDAuNi0wLjMsMC45Yy0wLjIsMC4yLTAuNCwwLjQtMC44LDAuNmwxLjMsMi4zbDAsMGgtMC44TDMyMi43LDU2LjJ6IE0zMjEuNSw1NS42aDEuMWMwLjIsMCwwLjQsMCwwLjUtMC4xYzAuMS0wLjEsMC4zLTAuMSwwLjQtMC4yYzAuMS0wLjEsMC4yLTAuMiwwLjItMC4zczAuMS0wLjMsMC4xLTAuNGMwLTAuMiwwLTAuMy0wLjEtMC40cy0wLjEtMC4yLTAuMi0wLjNjLTAuMS0wLjEtMC4yLTAuMi0wLjQtMC4yYy0wLjEsMC0wLjMtMC4xLTAuNS0wLjFoLTEuMVY1NS42eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zMjYuMSw1OC40aC0wLjd2LTUuM2gwLjdWNTguNHoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMzMxLjMsNTYuN2MwLDAuMy0wLjEsMC41LTAuMiwwLjdjLTAuMSwwLjItMC4yLDAuNC0wLjQsMC42Yy0wLjIsMC4yLTAuNCwwLjMtMC42LDAuNGMtMC4yLDAuMS0wLjUsMC4xLTAuOCwwLjFjLTAuMywwLTAuNi0wLjEtMC45LTAuMmMtMC4zLTAuMS0wLjUtMC4zLTAuNy0wLjVjLTAuMi0wLjItMC4zLTAuNS0wLjQtMC44Yy0wLjEtMC4zLTAuMi0wLjYtMC4yLTF2LTAuNmMwLTAuNCwwLjEtMC43LDAuMi0xYzAuMS0wLjMsMC4yLTAuNiwwLjQtMC44YzAuMi0wLjIsMC40LTAuNCwwLjctMC41czAuNi0wLjIsMC45LTAuMmMwLjMsMCwwLjYsMCwwLjgsMC4xYzAuMiwwLjEsMC40LDAuMiwwLjYsMC40YzAuMiwwLjIsMC4zLDAuMywwLjQsMC42YzAuMSwwLjMsMC4yLDAuNSwwLjIsMC43aC0wLjdjMC0wLjItMC4xLTAuNC0wLjEtMC41Yy0wLjEtMC4yLTAuMS0wLjMtMC4yLTAuNGMtMC4xLTAuMS0wLjItMC4yLTAuNC0wLjJjLTAuMiwwLTAuMy0wLjEtMC41LTAuMWMtMC4yLDAtMC41LDAtMC42LDAuMWMtMC4yLDAuMS0wLjMsMC4yLTAuNSwwLjRjLTAuMiwwLjItMC4yLDAuNC0wLjMsMC42Yy0wLjEsMC4yLTAuMSwwLjUtMC4xLDAuOHYwLjVjMCwwLjMsMCwwLjUsMC4xLDAuN2MwLjEsMC4yLDAuMSwwLjQsMC4zLDAuNmMwLjIsMC4yLDAuMywwLjMsMC40LDAuNGMwLjIsMC4xLDAuNCwwLjIsMC42LDAuMmMwLjIsMCwwLjQsMCwwLjYtMC4xYzAuMi0wLjEsMC4zLTAuMSwwLjQtMC4yYzAuMS0wLjEsMC4yLTAuMiwwLjItMC40YzAtMC4yLDAuMS0wLjMsMC4xLTAuNUwzMzEuMyw1Ni43TDMzMS4zLDU2Ljd6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTMzNS4yLDU3SDMzM2wtMC41LDEuNGgtMC43bDIuMS01LjNoMC42bDIuMSw1LjNoLTAuN0wzMzUuMiw1N3ogTTMzMy4yLDU2LjRoMS44bC0wLjktMi41TDMzMy4yLDU2LjR6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTM0MS4xLDU4LjRoLTAuN2wtMi42LTQuMXY0LjFoLTAuN3YtNS4zaDAuN2wyLjYsNC4xdi00LjFoMC43VjU4LjR6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTM0Ny4xLDU3aC0yLjNsLTAuNSwxLjRoLTAuN2wyLjEtNS4zaDAuNmwyLjEsNS4zaC0wLjdMMzQ3LjEsNTd6IE0zNDUuMiw1Ni40aDEuOGwtMC45LTIuNUwzNDUuMiw1Ni40eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zNDkuOCw1Ni4zdjIuMWgtMC43di01LjNoMmMwLjMsMCwwLjYsMCwwLjgsMC4xYzAuMiwwLjEsMC40LDAuMiwwLjYsMC4zYzAuMiwwLjEsMC4zLDAuMywwLjQsMC41YzAuMSwwLjIsMC4xLDAuNCwwLjEsMC43YzAsMC4zLDAsMC41LTAuMSwwLjdjLTAuMSwwLjItMC4yLDAuNC0wLjQsMC41Yy0wLjIsMC4xLTAuNCwwLjItMC42LDAuM2MtMC4yLDAuMS0wLjUsMC4xLTAuOCwwLjFMMzQ5LjgsNTYuM0wzNDkuOCw1Ni4zeiBNMzQ5LjgsNTUuN2gxLjNjMC4yLDAsMC40LDAsMC41LTAuMWMwLjEtMC4xLDAuMy0wLjEsMC40LTAuMmMwLjEtMC4xLDAuMi0wLjIsMC4yLTAuM3MwLjEtMC4zLDAuMS0wLjRjMC0wLjEsMC0wLjMtMC4xLTAuNGMwLTAuMS0wLjEtMC4yLTAuMi0wLjNjLTAuMS0wLjEtMC4yLTAuMi0wLjQtMC4yYy0wLjEtMC4xLTAuMy0wLjEtMC41LTAuMWgtMS4zVjU1Ljd6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTM1NC41LDU2LjN2Mi4xaC0wLjd2LTUuM2gyYzAuMywwLDAuNiwwLDAuOCwwLjFjMC4yLDAuMSwwLjQsMC4yLDAuNiwwLjNjMC4yLDAuMSwwLjMsMC4zLDAuNCwwLjVzMC4xLDAuNCwwLjEsMC43YzAsMC4zLDAsMC41LTAuMSwwLjdjLTAuMSwwLjItMC4yLDAuNC0wLjQsMC41Yy0wLjIsMC4xLTAuNCwwLjItMC42LDAuM2MtMC4yLDAuMS0wLjUsMC4xLTAuOCwwLjFMMzU0LjUsNTYuM0wzNTQuNSw1Ni4zeiBNMzU0LjUsNTUuN2gxLjNjMC4yLDAsMC40LDAsMC41LTAuMXMwLjMtMC4xLDAuNC0wLjJjMC4xLTAuMSwwLjItMC4yLDAuMi0wLjNzMC4xLTAuMywwLjEtMC40YzAtMC4xLDAtMC4zLTAuMS0wLjRjMC0wLjEtMC4xLTAuMi0wLjItMC4zYy0wLjEtMC4xLTAuMi0wLjItMC40LTAuMmMtMC4xLTAuMS0wLjMtMC4xLTAuNS0wLjFoLTEuM1Y1NS43eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zNjAuOSw1N2gtMi4zbC0wLjUsMS40aC0wLjdsMi4xLTUuM2gwLjZsMi4xLDUuM2gtMC43TDM2MC45LDU3eiBNMzU4LjksNTYuNGgxLjhsLTAuOS0yLjVMMzU4LjksNTYuNHoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMzY0LjgsNTYuMmgtMS4zdjIuMmgtMC43di01LjNoMS44YzAuNiwwLDEuMSwwLjEsMS40LDAuNGMwLjMsMC4zLDAuNSwwLjcsMC41LDEuMmMwLDAuMy0wLjEsMC42LTAuMywwLjljLTAuMiwwLjItMC40LDAuNC0wLjgsMC42bDEuMywyLjNsMCwwaC0wLjhMMzY0LjgsNTYuMnogTTM2My41LDU1LjZoMS4xYzAuMiwwLDAuNCwwLDAuNS0wLjFzMC4zLTAuMSwwLjQtMC4yYzAuMS0wLjEsMC4yLTAuMiwwLjItMC4zczAuMS0wLjMsMC4xLTAuNGMwLTAuMiwwLTAuMy0wLjEtMC40Yy0wLjEtMC4xLTAuMS0wLjItMC4yLTAuM3MtMC4yLTAuMi0wLjQtMC4yYy0wLjEsMC0wLjMtMC4xLTAuNS0wLjFoLTEuMVY1NS42eiIvPjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0zNzAuNCw1NS45aC0yLjN2MS45aDIuNnYwLjZoLTMuM3YtNS4zaDMuM3YwLjZoLTIuNnYxLjdoMi4zVjU1Ljl6Ii8+PHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTM3Mi4zLDU3LjhoMi42djAuNmgtMy4ydi01LjNoMC43TDM3Mi4zLDU3LjhMMzcyLjMsNTcuOHoiLz48L2c+PC9nPjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0Y3RjdGNyIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMjQ3LjQiIHkxPSI2MS43IiB4Mj0iMzc1LjIiIHkyPSI2MS43Ii8+PGxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRjdGN0Y3IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHgxPSIyNDciIHkxPSI0OS44IiB4Mj0iMzc0LjciIHkyPSI0OS44Ii8+PGc+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTI3NC43LDk3LjFjMC0wLjgtMC4xLTEuNi0wLjQtMi4yYy0wLjMtMC42LTAuNy0xLjItMS40LTEuOGMtMC42LTAuNS0xLjUtMS0yLjYtMS41Yy0xLjEtMC41LTIuNS0wLjktNC4xLTEuNGMtMS44LTAuNS0zLjMtMS4xLTQuNy0xLjdjLTEuNC0wLjYtMi42LTEuNC0zLjYtMi4yYy0xLTAuOC0xLjgtMS44LTIuMy0yLjhjLTAuNS0xLjEtMC44LTIuMy0wLjgtMy42YzAtMS40LDAuMy0yLjYsMC45LTMuOGMwLjYtMS4yLDEuNC0yLjIsMi41LTNjMS4xLTAuOSwyLjMtMS42LDMuNy0yLjFzMy4xLTAuNyw0LjktMC43YzIsMCwzLjcsMC4zLDUuMywwLjljMS42LDAuNiwyLjgsMS40LDMuOSwyLjRjMS4xLDEsMS45LDIuMiwyLjUsMy40YzAuNiwxLjMsMC44LDIuNiwwLjgsNGgtNC43YzAtMS0wLjItMS45LTAuNS0yLjdjLTAuMy0wLjktMC44LTEuNi0xLjUtMi4yYy0wLjctMC42LTEuNS0xLjEtMi41LTEuNWMtMS0wLjQtMi4yLTAuNS0zLjQtMC41Yy0xLjMsMC0yLjQsMC4xLTMuMiwwLjRjLTAuOSwwLjMtMS43LDAuNy0yLjMsMS4ycy0xLjEsMS4xLTEuNCwxLjhjLTAuMywwLjctMC40LDEuNS0wLjQsMi4zczAuMiwxLjQsMC41LDIuMWMwLjMsMC42LDAuOCwxLjIsMS41LDEuN2MwLjcsMC41LDEuNSwxLDIuNiwxLjVjMS4xLDAuNCwyLjMsMC45LDMuNywxLjNjMiwwLjYsMy43LDEuMiw1LjIsMS45YzEuNSwwLjcsMi42LDEuNSwzLjYsMi40YzEsMC45LDEuNywxLjksMi4xLDIuOWMwLjUsMS4xLDAuNywyLjMsMC43LDMuNmMwLDEuNS0wLjMsMi43LTAuOSwzLjljLTAuNiwxLjItMS40LDIuMi0yLjUsMi45Yy0xLjEsMC44LTIuNCwxLjUtMy44LDEuOWMtMS41LDAuNC0zLjEsMC43LTUsMC43Yy0xLjEsMC0yLjItMC4xLTMuMi0wLjNjLTEuMS0wLjItMi4yLTAuNS0zLjEtMC45Yy0xLTAuNC0xLjktMC45LTIuNy0xLjVjLTAuOS0wLjYtMS42LTEuMy0yLjMtMi4xYy0wLjYtMC44LTEuMS0xLjctMS41LTIuNmMtMC40LTEtMC41LTIuMS0wLjUtMy4yaDQuN2MwLDEuMiwwLjIsMi4zLDAuNywzLjFjMC41LDAuOSwxLjEsMS42LDEuOSwyLjJzMS43LDEsMi43LDEuM2MxLjEsMC4zLDIuMiwwLjQsMy4yLDAuNGMyLjUsMCw0LjMtMC41LDUuNi0xLjVDMjczLjksMTAwLjUsMjc0LjcsOTguOSwyNzQuNyw5Ny4xeiIvPjxwYXRoIGZpbGw9IiNGNEY0RjQiIHN0cm9rZT0iI0Y0RjRGNCIgc3Ryb2tlLXdpZHRoPSIzIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0zMDQuNyw5Ni44SDI5MGwtMy4zLDkuMkgyODJsMTMuNC0zNS4yaDRsMTMuNCwzNS4yaC00LjhMMzA0LjcsOTYuOHogTTI5MS41LDkzaDEybC02LTE2LjVMMjkxLjUsOTN6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTMyMi4zLDEwMi4ySDMzOXYzLjhoLTIxLjNWNzAuOGg0LjdMMzIyLjMsMTAyLjJMMzIyLjMsMTAyLjJ6Ii8+PHBhdGggZmlsbD0iI0Y0RjRGNCIgc3Ryb2tlPSIjRjRGNEY0IiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTM2NC4yLDg5LjhIMzQ5djEyLjVoMTcuOHYzLjhoLTIyLjRWNzAuOGgyMnYzLjhoLTE3LjV2MTEuM2gxNS4yTDM2NC4yLDg5LjhMMzY0LjIsODkuOHoiLz48L2c+PGc+PHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRjdGN0Y3IiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMzkuNyw2MS4yQzM1LDU5LjksMjguNSw1OC42LDI0LjMsNjJjLTUuMiw0LjMtMC4yLDExLjUsMS44LDE2LjJjMyw3LjMsMC4zLDExLjEtNS4zLDE2LjJjLTUuOSw1LjMtNy4zLDEwLjEtNy4zLDE3LjYiLz48Zz48cG9seWdvbiBvcGFjaXR5PSI2LjAwMDAwMGUtMDAyIiBmaWxsPSIjMDIwMjAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3ICAgICIgcG9pbnRzPSI1My45LDk1LjggMzguNSw2Mi44IDUuMyw0Ny40IDc4LDIzLjMgIi8+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyMzcuODA4IiB5MT0iLTEzNC42ODA5IiB4Mj0iMzA3LjY2NTkiIHkyPSItMTM0LjY4MDkiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgLTIzMC44NCAtNzYuNikiPjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiNGRkZGRkYiLz48c3RvcCAgb2Zmc2V0PSIwLjQ3NDciIHN0eWxlPSJzdG9wLWNvbG9yOiNFQ0VDRUMiLz48c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojRDJEMkQyIi8+PC9saW5lYXJHcmFkaWVudD48cG9seWdvbiBmaWxsPSJ1cmwoI1NWR0lEXzFfKSIgcG9pbnRzPSI1My42LDkyLjkgMzguOCw2MS4xIDcsNDYuNSA3Ni44LDIzLjMgIi8+PC9nPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0Y3RjdGNyIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTM4LDYwLjljLTYuNiw1LTEyLjMsMTIuMy05LjUsMjEuNGMyLjMsNy42LDguNSw4LjksMTQuNywxMS4zYzcuMiwyLjcsMTEuNCw2LjEsMTMuNCwxNC4xYzMuOSwxNS44LDkuNywxNy43LDI0LjQsMTQuN2MxMS0yLjMsMTYuMiwzLjIsMjIuNiwxMi4yIi8+PC9nPjwvZz48cmVjdCB4PSIzMDEuMyIgeT0iNTEuNyIgZmlsbD0iI0Y0RjRGNCIgd2lkdGg9IjAuNSIgaGVpZ2h0PSI4LjIiLz48L3N2Zz4=);<?php } ?>
background-size: contain;
}
.wpmchimpas .wpmchimpa-cont{
  display: inline-block;
  width: 100%;
}
.wpmchimpas form{-webkit-backface-visibility:hidden;}
.wpmchimpas h3{
line-height: 26px;
margin-bottom:10px;
color: #888;
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
margin-bottom: 10px;
}
.wpmchimpas .wpmchimpa_para,.wpmchimpas .wpmchimpa_para * {
font-size: 12px;
color: #ff6160;
font-weight: 600;
line-height: 18px;
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
  padding-left: 40px;
  <?php 
if(isset($theme["slider_tbox_h"])){
  echo 'padding-left:'.$theme["slider_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["slider_inico_c"]))? $theme["slider_inico_c"] : '#919191');
foreach ($form['fields'] as $f) {
  $fi = false;
  if($f['icon'] == 'idef'){
    if($f['tag']=='email')
      $fi = 'a04';
    else if($f['tag']=='FNAME' || $f['tag']=='LNAME')
      $fi = 'c02';
  }
  else if( $f['icon'] != 'inone')
    $fi = $f['icon'];
  if($fi)
    echo '.wpmchimpas .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($fi,26,$col).' no-repeat center}';
}
?>
.wpmchimpas .wpmchimpa-field select,
.wpmchimpas input[type="text"]{
text-align: center;
width: 100%;
height: 40px;
background: #f0f0f0;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
color: #353535;
font-size: 15px;
outline:0;
display: block;
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
font-size: 15px;
font-weight:500;
padding: 0 20px;
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
.wpmchimpas .wpmchimpa-field.wpmchimpa-check,
.wpmchimpas .wpmchimpa-field.wpmchimpa-radio{
	text-align: left;
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
        $tfi='ch4';
        if(isset($theme["slider_check_mark"])){$tfi=$theme["slider_check_mark"];}
        $tfc='#919191';
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
.wpmchimpas form > div{
position: relative;
}

.wpmchimpas .wpmchimpa-subs-button{
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
width: 100%;
color: #fff;
font-size: 16px;
border: 1px solid #ff5757;
background-color: #ff6160;
height: 40px;
line-height: 40px;
text-align: center;
cursor: pointer;
box-shadow:0 2px 0 -1px #C2C2C2;
position: relative;
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
background-color: #ff5757;
<?php if(isset($theme["slider_button_fch"])){
echo 'color:'.$theme["slider_button_fch"].';';
}    
if(isset($theme["slider_button_bch"])){
echo 'background-color:'.$theme["slider_button_bch"].';';
}?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon:before{
padding-left: 40px;
  <?php 
  if(isset($theme["slider_button_w"])){
      echo 'padding-left:'.$theme["slider_button_h"].'px;';
  }
  ?>
}
.wpmchimpas .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 40px;
width: 40px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["slider_button_h"])){
      echo 'width:'.$theme["slider_button_h"].'px;';
      echo 'height:'.$theme["slider_button_h"].'px;';
  }
  if($theme["slider_button_i"] != 'inone' && $theme["slider_button_i"] != 'idef'){
    $col = ((isset($theme["slider_button_fc"]))? $theme["slider_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["slider_button_i"],26,$col).' no-repeat center;';
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
margin: -32px 0 20px;
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
background: #ff6160;
width:50px;
height:50px;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
border-radius: 50%;
-webkit-transition: -webkit-transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
transition: transform 0.2s cubic-bezier(0.785, 0.135, 0.15, 0.86);
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}
.wpmchimpas-trig:hover .wpmchimpas-trigi{
-webkit-transform:scale(1.05);
-ms-transform:scale(1.05);
transform:scale(1.05);
}
.wpmchimpas-trigi:before{	
<?php 
$ti='b02';
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
margin: 15px auto;
}
.wpmchimpas .wpmchimpa-social::before{
content: '<?php if(isset($theme['slider_soc_head'])) echo $theme['slider_soc_head'];else echo 'Subscribe with';?>';
font-size: 13px;
line-height: 30px;
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
width:30px;
height: 30px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
float: left;
margin: 0 5px;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc:hover{
-webkit-transform:scale(1.1);
-ms-transform:scale(1.1);
transform:scale(1.1);
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc::before{
width:30px;
height: 30px;
display: block;
content: '';
background: no-repeat center;
}

.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
background: #2d609b;
<?php if(!isset($wpmchimpa["fb_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
background-image:<?php echo $this->getIcon('fb1',16,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
background: #eb4026;
<?php if(!isset($wpmchimpa["gp_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
background-image: <?php echo $this->getIcon('gp1',16,'#fff');?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
background: #00BCF2;
<?php if(!isset($wpmchimpa["ms_api"])){
echo 'display:none;';
}?>
}
.wpmchimpas .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
background-image: <?php echo $this->getIcon('ms1',16,'#fff');?>
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
      <div class="wpmchimpa-social">
          <div class="wpmchimpa-soc wpmchimpa-fb"></div>
          <div class="wpmchimpa-soc wpmchimpa-gp"></div>
          <div class="wpmchimpa-soc wpmchimpa-ms"></div>
      </div>
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
  <div class="wpmchimpa-subs-button<?php echo (isset($theme['slider_button_i']) && $theme['slider_button_i'] != 'inone' && $theme['slider_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
            <?php if(isset($theme['slider_tag_en'])){
              if(isset($theme['slider_tag'])) $tagtxt= $theme['slider_tag'];
              else $tagtxt='Secure and Spam free...';
              echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
              }?>
		    <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><?php 
            echo $this->getSpin(isset($theme["slider_spinner_t"])?$theme["slider_spinner_t"]:'4','wpmchimpas',isset($theme["slider_spinner_c"])?$theme["slider_spinner_c"]:'#000');?></div></div>
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