<?php require_once '../Masters/MasterMain.php'; ?>
<?php require_once '../Masters/ControlVisibilityToggler.php'; ?>
<?php echo head("TITLE", "Allan Santiago", "Physician"); ?>
<link href="../CSS/1column.css" rel="stylesheet" type="text/css" />


<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<div class="DivTemplate"><p class="DivHeaderText">PAST MEDICAL HISTORY</p><hr>
    <input type="checkbox" onclick="TogglerNonRadio('div_PastMedicalHistory')" value="No significant past medical history">No significant past medical history<br>
    <div id="div_PastMedicalHistory"><br>SUMMARY<br><textarea id="tbx_PastMedicalHistory" rows="4" cols="50" required/></textarea></div>
</div>
<div class="DivTemplate"><p class="DivHeaderText">PAST SURGICAL HISTORY</p><hr>
    <input type="checkbox" onclick="TogglerNonRadio('div_PastSurgicalHistory');TogglerNonRadio('div_AddPastSurgicalHistory')" value="No significant past surgical history">No significant past surgical history<br>
    <div id="div_PastSurgicalHistory"><br>SUMMARY<br>
        <div class="dataDisplayer">
            <table width="100%" id="tbl_PastSurgicalHistory">
                <tr>
                    <th>SURGERY TYPE</th>
                    <th>SURGERY DATE</th>
                    <th>SURGERY NOTES</th>
                    <th>ACTIONS</th>
                </tr>
            </table>
        </div>
    </div>
</div>

    <div  id="div_AddPastSurgicalHistory">
        <div class="DivTemplate"><p class="DivHeaderText">ADD PAST SURGICAL HISTORY</p><hr>
                SURGERY TYPE<br>
                <input type="text" id="tbx_SurgeryType" placeholder="Surgeries"/>  
                SURGERY DATE<br><input id="tbx_SurgeryDate" type="date"/><br>
                SURGERY NOTES<br>
                <textarea id="tbx_SurgeryNotes" rows="4" cols="50"></textarea>
                <br><br><hr>
                <input type="button" value="ADD TO SURGERY STATUS LIST" onclick="AddToPastSurgicalHistory();"/>

            </div>

        </div>
</div>

<?php require_once '../MedicalHistory/PastMedicalSurgicalHistoryFunctions.php'; ?>

<?php echo foot() ?>