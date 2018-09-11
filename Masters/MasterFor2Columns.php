<?php
function LeftDiv()
{
   $html = "     <div style=\"max-width: 1024px; width:1024px; display:inline-block;  height: 100%;\">
                <div style=\" position: absolute;  padding-left: 5px;\">";
   return $html;
}

function RightDiv()
{
       $html = "     </div>
                <div style=\"padding-left:300px;\">";
   return $html;
   
}

function LeftDivFirst($Name = "Juan Dela Cruz", $ImgSrc = "../Images/default pic.jpg")
{
     $html="  <div class=\"DivTemplateLeft\" style=\"height: 50px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  background-color: #0996c1;\">

                        <center> <img src=\"". htmlspecialchars($ImgSrc)."\" width=\"100px\" height=\"100px\" style=\"margin-top: 10px; border: #0996c1 solid medium\"/></center>
                    </div>

                    <div class=\"DivTemplateLeft\" style=\" border-top-left-radius: 0px; border-top-right-radius: 0px; margin-top: 0px; background-color: white; padding-top: 60px; color: #1e1e1e;\">
                        <center><p class=\"HeaderText\">".htmlspecialchars($Name)."</p></center>";
                        return $html;
}

function LeftDivFirstClosing()
{
$html = "</div>";
                        return $html;
}