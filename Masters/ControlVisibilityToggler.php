<?php
function TogglerRadio($TogglerValue, $RadioButtonGroupName, $TargetControlID)
{
   $html = "<script>$(function() {
    $('input[name=\"". htmlspecialchars($RadioButtonGroupName)."\"]').on('click', function() {
        if ($(this).val() == '". htmlspecialchars($TogglerValue)."') {
            $('#". htmlspecialchars($TargetControlID)."').show();
        }
        else {
             $('#". htmlspecialchars($TargetControlID)."').hide();
        }
    });
});</script>";
   return $html;
}

function TogglerNonRadio()
{
   $html = "<script>function TogglerNonRadio(targetControl) {
    
         var x = document.getElementById(targetControl);
          if (x.style.display === \"none\") {
   
        x.style.display = \"block\";
    } else {
        x.style.display = \"none\";
    }
}</script>";
   return $html;
}





