<?php require_once '../Masters/MasterMain.php'; ?>
<?php require_once '../Masters/MasterForGoToDiv.php'; ?>
<?php require_once '../Masters/MasterFor2Columns.php'; ?>
<?php echo head("TITLE"); ?>
<link href="../CSS/2columns.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<?php echo LeftDiv(); ?>
<!--    TEMPLATE:
           <div class="DivTemplateLeft"><p class="divheadertext">HEADER TEXT</p><hr>CONTENT</div>
-->
<?php echo LeftDivFirst("PATIENT NAME", "../Images/default pic.jpg") ?>

<?php echo LeftDivFirstClosing() ?>
<div class = "DivTemplateLeft"><p class="DivHeaderText">PATIENT MEDICAL HISTORY</p><hr>
    <?php echo goToDiv("btnToCC", "Family History", "div_FamilyHistory") ?>
    <?php echo goToDiv("btnToPMSH", "Past Medical / Surgical History", "div_MedicalSurgicalHistory") ?>
    <?php echo goToDiv("btnToHA", "Hospital Admission", "div_HospitalAdmission") ?>
    <?php echo goToDiv("btnToPL", "Problem List", "div_ProblemList") ?>
    <?php echo goToDiv("btnToV", "Vaccine", "div_Vaccine") ?>
    <?php echo goToDiv("btnToA", "Allergy", "div_Allergy") ?>
</div>

<?php echo RightDiv(); ?>

<div id="div_PatientInformation">
    <div class="DivTemplateRight" ><p class="DivHeaderText">SOCIAL HISTORY</p><hr>
        <div class="dataDisplayer">
            <!-- IF NO SIGNIFICANT FINDINGS-->
            <table width="100%"><tr>
                <tr><td width="160px">Summary</td><td><?php echo 'NO SIGNIFICANT SOCIAL HISTORY' ?></td></tr></table>
            <!-- ELSE-->
            <table width="100%">
                <tr><td width="160px">Alcohol use status </td><td><?php echo 'Alcohol use status' ?></td></tr>
                <tr><td>Drug use status</td><td><?php echo 'Drug use status' ?></td></tr>
                <tr><td>Smoking status</td><td><?php echo 'Smoking status' ?></td></tr>
                <tr><td>Smoking status</td><td><?php echo 'Smoking status' ?></td></tr>
                <tr><td>Current occupation</td><td><?php echo 'Occupation' ?></td></tr>
                <tr><td>Others</td><td><?php echo 'Other info' ?></td></tr></table>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../MedicalHistory/SocialHistoryEditor.php';">EDIT INFO</button></div>
        </div>
    </div>
</div>

<div id="div_FamilyHistory">
    <div class="DivTemplateRight" ><p class="DivHeaderText">FAMILY HISTORY</p><hr>
        <div class="dataDisplayer">
            <!-- IF NO SIGNIFICANT FINDINGS-->
            <table width="100%"><tr>
                <tr><td width="160px">Summary</td><td><?php echo 'NO SIGNIFICANT FAMILY HISTORY' ?></td></tr></table><br>
            <!-- ELSE-->
            <table width="100%">
                <tr>
                    <th>DIAGNOSIS</th>
                    <th style="min-width: 100px; width: 100px;">RELATION</th>
                </tr>
                <tr><td><?php echo 'Diagnosis' ?></td>
                    <td><?php echo 'Relation' ?></td>
                </tr>
            </table>
            <table><tr><td width="160px">Others</td><td><?php echo 'Other info' ?></td></tr></table>
            <br>
            <div class="navigator">

               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>

</div>

<div id="div_MedicalSurgicalHistory">
    <div class="DivTemplateRight" ><p class="DivHeaderText">PAST MEDICAL / SURGICAL HISTORY</p><hr>
        <div class="dataDisplayer">
            <!-- Past medical history -->
            <table width="100%">
                <tr><td width="160px">Past Medical History</td><td><?php echo 'NO SIGNIFICANT PAST MEDICAL HISTORY / ADD DETAILS' ?></td></tr>
            </table>
            <!-- No past surgical history -->
            <table width="100%">
                <tr><td width="160px">Surgical History</td><td><?php echo 'NO SIGNIFICANT SURGICAL HISTORY' ?></td></tr>
            </table>
            <br>
            <!-- With past surgical history -->
            <table width="100%">
                <tr>
                    <th>SURGERY TYPE</th>
                    <th style="min-width: 100px; width: 100px;">APPROX. DATE</th>
                </tr>
                <?php for ($x=0; $x<3; $x++) { ?>
                <tr><td><?php echo 'Surgery' ?></td>
                    <td><?php echo 'Date' ?></td>
                </tr>
                <?php }?>
            </table>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>
</div>
<div id="div_HospitalAdmission">
    <div class="DivTemplateRight" ><p class="DivHeaderText">HOSPITAL ADMISSION</p><hr>
        <div class="dataDisplayer">
            <?php for ($x = 0; $x < 3; $x++) { ?>
                <details><summary><i class="DivHeaderText"><?Php echo 'Hospital Name' ?></i></summary>
                    <table width="100%">
                        <tr><td width="160px">Hospital</td><td><?php echo 'Hospital Name' ?></td></tr>
                        <tr><td>Admit Date</td><td><?php echo 'Date' ?></td></tr>
                        <tr><td>Discharge Date</td><td><?php echo 'Date' ?></td></tr>
                        <tr><td>Admitting Diagnosis</td><td><?php echo 'Diagnosis' ?></td></tr>
                        <tr><td>Notes</td><td><?php echo 'Admitting Diagnosis Notes' ?></td></tr>
                        <tr><td>Discharge Diagnosis</td><td><?php echo 'Diagnosis' ?></td></tr>
                        <tr><td>Notes</td><td><?php echo 'Discharge Diagnosis Notes' ?></td></tr>   
                        <tr><td>Surgical Procedure</td><td><?php echo 'Surgical Procedure' ?></td></tr>
                        <tr><td>Attending Physician</td><td><?php echo 'Attending Physician' ?></td></tr>
                        <tr><td>Surgical Physician</td><td><?php echo 'Surgical Physician' ?></td></tr>
                    </table>
                </details>
            <?php } ?>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>
</div>
<div id="div_ProblemList">
    <div class="DivTemplateRight" ><p class="DivHeaderText">PROBLEM LIST</p><hr>
        <div class="dataDisplayer">
            <?php for ($x = 0; $x < 3; $x++) { ?>
                <details><summary><i class="DivHeaderText"><?Php echo 'Diagnosis' ?></i></summary>
                    <table width="100%">
                        <tr><td width="160px">Diagnosis</td><td><?php echo 'Diagnosis' ?></td></tr>
                        <tr><td>ICD Code</td><td><?php echo 'ICD Code' ?></td></tr>
                        <tr><td>Date Diagnosed</td><td><?php echo 'Date' ?></td></tr>
                        <tr><td>Status</td><td><?php echo 'Active / Resolved' ?></td></tr>
                        <tr><td>Notes</td><td><?php echo 'Notes' ?></td></tr>
                        <tr><td>Chronic</td><td><?php echo 'Yes / No' ?></td></tr>
                    </table>
                </details>
            <?php } ?>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>
</div>

<div id="div_Vaccine">
    <div class="DivTemplateRight" ><p class="DivHeaderText">VACCINE</p><hr>
        <div class="dataDisplayer">
            <?php for ($x = 0; $x < 3; $x++) { ?>
                <details><summary><i class="DivHeaderText"><?Php echo 'Vaccine Name' ?></i></summary>
                    <table width="100%">
                        <tr><td width="160px">Administration Date</td><td><?php echo 'Date' ?></td></tr>
                        <tr><td>Patient's Age</td><td><?php echo 'Auto-generated Age' ?></td></tr>
                        <tr><td>Provider</td><td><?php echo 'Physician' ?></td></tr>
                        <tr><td>Other Provider</td><td><?php echo 'Provider' ?></td></tr>
                        <tr><td>Office Location</td><td><?php echo 'Location' ?></td></tr>
                        <tr><td>Other Location</td><td><?php echo 'Location' ?></td></tr>
                        <tr><td>Information Source</td><td><?php echo 'Source' ?></td></tr>
                        <tr><td>Vaccine Group</td><td><?php echo 'Vaccine Group' ?></td></tr>
                        <tr><td>Vaccine</td><td><?php echo 'Vaccine' ?></td></tr>
                        <tr><td>Manufacturer</td><td><?php echo 'Manufacturer' ?></td></tr>
                        <tr><td>Lot Number</td><td><?php echo 'Number' ?></td></tr>
                        <tr><td>Expiration</td><td><?php echo 'Date' ?></td></tr>
                        <tr><td>Doses</td><td><?php echo 'Doses' ?></td></tr>
                        <tr><td>Unit</td><td><?php echo 'Unit' ?></td></tr>
                        <tr><td>Site</td><td><?php echo 'Site' ?></td></tr>
                    </table>
                </details>
            <?php } ?>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>
</div>

<div id="div_Allergy">
    <div class="DivTemplateRight" ><p class="DivHeaderText">ALLERGY</p><hr>
        <div class="dataDisplayer">
            <!-- FOOD ALLERGY -->
            <p class="DivHeaderText">FOOD</p><hr>
            <!-- IF NO SIGNIFICANT FINDINGS-->
            <table width="100%"><tr>
                <tr><td width="160px">Summary</td><td><?php echo 'NO KNOWN FOOD ALLERGY' ?></td></tr></table><br>
            <!-- ELSE -->

            <table width="100%">
                <tr>
                    <th>ALLERGY</th>
                    <th>REACTION</th>
                    <th>STATUS</th>
                    <th>RECORD DATE</th>
                </tr>
                <?php for ($x = 0; $x < 3; $x++) { ?><tr>
                        <td><?php echo 'Allergy name' ?></td>
                        <td><?php echo 'Reaction' ?></td>
                        <td><?php echo 'None / Active / Resolved / Inactive' ?></td>
                        <td><?php echo 'Date' ?></td></tr>

                <?php } ?>
            </table><br>
            <!-- ENVIRONMENT ALLERGY -->
            <p class="DivHeaderText">ENVIRONMENT</p><hr>
            <!-- IF NO SIGNIFICANT FINDINGS-->
            <table width="100%"><tr>
                <tr><td width="160px">Summary</td><td><?php echo 'NO ENVIRONMENT KNOWN ALLERGY' ?></td></tr></table><br>
            <!-- ELSE -->

            <table width="100%">
                <tr>
                    <th>ALLERGY</th>
                    <th>REACTION</th>
                    <th>STATUS</th>
                    <th>RECORD DATE</th>
                </tr>
                <?php for ($x = 0; $x < 3; $x++) { ?><tr>
                        <td><?php echo 'Allergy name' ?></td>
                        <td><?php echo 'Reaction' ?></td>
                        <td><?php echo 'None / Active / Resolved / Inactive' ?></td>
                        <td><?php echo 'Date' ?></td></tr>

                <?php } ?>
            </table><br>
            <!-- MEDICATION ALLERGY -->
            <p class="DivHeaderText">MEDICATION</p><hr>
            <!-- IF NO SIGNIFICANT FINDINGS-->
            <table width="100%"><tr>
                <tr><td width="160px">Summary</td><td><?php echo 'NO KNOWN MEDICATION ALLERGY' ?></td></tr></table><br>
            <!-- ELSE -->

            <table width="100%">
                <tr>
                    <th>ALLERGY</th>
                    <th>REACTION</th>
                    <th>STATUS</th>
                    <th>RECORD DATE</th>
                </tr>
                <?php for ($x = 0; $x < 3; $x++) { ?><tr>
                        <td><?php echo 'Allergy name' ?></td>
                        <td><?php echo 'Reaction' ?></td>
                        <td><?php echo 'None / Active / Resolved / Inactive' ?></td>
                        <td><?php echo 'Date' ?></td></tr>

                <?php } ?>
            </table>
            <div class="navigator">
                <br>
               <button class="navigator" onclick="window.location='../LINK';">UPDATE INFO</button></div>
        </div>
    </div>
</div>


</div>
</div>
<?php echo foot(); ?>
