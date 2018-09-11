<?php
function goToDiv($ButtonID, $ButtonName, $TargetDivID)
{
   $html = "<button id=\"". htmlspecialchars($ButtonID)."\" class=\"goToButtons\">". htmlspecialchars($ButtonName)."</button>
<script>
$(\"#". htmlspecialchars($ButtonID)."\").click(function() {
    $('html, body').animate({
        scrollTop: $(\"#". htmlspecialchars($TargetDivID)."\").offset().top
    }, 500);
});</script>";
           return $html;
}



