<?php require_once '../Masters/MasterMain.php'; ?>


<?php echo head("TITLE", "Allan Santiago", "Physician"); ?>
<link href="../CSS/1column.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<div class="DivTemplate"><p class="DivHeaderText">ADD RISK FACTORS</p><hr>
    <div class="dataDisplayer">
        To be completed on all residents on Admission/Readmission and quarterly. If risk factors apply and/or if status has changed. This assessment should also be completed s/p transfer to ER/Ambulatory surgery or extensive radiological exams such as MRI. 
        <br><br>
        <p class="DivHeaderText">Check all that apply<br>ADDITIONAL RISK FACTORS TO BE CONSIDERED</p>
        <i>Serves as supporting documentation in assessing for and documenting possible DTI. The chief risk factor is the increased time of pressure to boony areas. Such as but not limited to decreased mobility that would result from the following events:
            Identification of any risk factors, especially in combination with an observed area of skin that resembles the definition of DTI (Deep Tissue Injury is a purple or maroon localized area of discolored intact skin ot blood-filled blister caused by damage to the underlying soft tissue from pressure and/or shear. The area may be firm, mushy, boggy, painful, or warmer or cooler than adjacent tissue.) should result in an assessment of "Possible DTI" and the following steps should be taken.
            <br><br>*Documentation of "Possible DTI" vs. Stage 1 on the admission Skin assessment and in the admission note.
            <br>*Completion of Braden Scale Risk Assessment.
            <br>*MD Orders for treatment as protocol.
            <br>*Treatment transcribed to treatment book.
            <br>*Initiation/Updating of Skin Integrity CCP and Skin Integrity Instruction sheet for CNAAR.
            <br>*Interdiscipllinary notification of all departments re: Pressure Ulcer Status.
            <br>*Include resident on 24 hour report.
            <br>*Referral to WOCN Consultant for evaluation.</i><br><br>
        <table width='100%'>
            <tr>
                <th></th>
                <th width='100px'>RISK FACTOR</th>
            </tr>
            <tr>
                <td>Additional Factors to be considered (serves as supporting documentation in assessing for and documenting Possible DTI).
                    <br>The chief risk factor is the increased time of pressure related to decreased mobility that would result from the
                    <br>following events.)</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
            <tr>
                <td>Recent Hospitalization/Emergency Admission, Ambulatory Surgery or Extensive Radiological Exams (such as MRI)</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
            <tr>
                <td>Recent Surgery</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Recent Fracture</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Splint or Brace Use</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Bony Deformities</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Contractures</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>End Stage Renal Disease</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>G-Tube Feeding</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Unstable Diabetes</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Use of Vasocontrictive Drugs (Such as but not limited to: Amphetamine, Angiotensin, Antihistamines, Adrenaline, Catecholamine, Decongestants, Dopamine, Phenylephrine, Pseudoephedrine, Tyramine, and Tetrahydrozoline hydrochloride in eye drops).</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Obesity</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
             <tr>
                <td>Resident refuses skin integration or is non-compliant secondary to mental status.</td>
                <td><?php echo 'Present / Not Present' ?></td>
            </tr>
        </table>

    </div>
</div>

<div class="DivTemplate"><p class="DivHeaderText">BRADEN SCALE</p><hr>
    <div class='dataDisplayer'>
        <table width='100%'>
            <tr>
                <th width='180px'></th>
                <th width='160px'>STATUS</th>
                <th>DESCRIPTION</th>
            </tr>
                <!-- If sensory perception status is completely  limited-->
            <tr>
                <td>Sensory Perception</td>
                <td><?php echo'Completely limited' ?></td>
                <td>
                    Unresponsive (does not moan, flinch, or grasp) to painful stimuli, due to diminished level of consciousness or sedation. OR Limited ability to feel pain over most of body surface.
                </td>
            </tr>
            <!-- If sensory perception status is very limited-->
            <tr>
                <td></td>
                <td>Very limited</td>
                <td>Responds only to painful stimuli. Cannot communicate discomfort except by moaning or restlessness. OR Has a sensory impairment which limits the ability to feel pain or discomfot over 1/2 of body.</td>
            </tr>
            <tr>
                <td >Moisture</td>
                <td><?php echo'Completely limited <br> Very limited <br> Slightly <br> No impairement' ?></td>
            </tr>
            <tr>
                <td >Activity</td>
                <td><?php echo'Completely limited <br> Very limited <br> Slightly <br> No impairement' ?></td>
            </tr>
            <tr>
                <td >Mobility</td>
                <td><?php echo'Completely limited <br> Very limited <br> Slightly <br> No impairement' ?></td>
            </tr>
            <tr>
                <td >Nutrition</td>
                <td><?php echo'Completely limited <br> Very limited <br> Slightly <br> No impairement' ?></td>
            </tr>
            <tr>
                <td >Friction and Shear</td>
                <td><?php echo'Completely limited <br> Very limited <br> Slightly <br> No impairement' ?></td>
            </tr>
            <tr>
                <td >Braden Scale Total Score</td>
                <td><?php echo'Total Score' ?></td>
            </tr>
        </table>
    </div>
    <br>
    <hr>
</div>


<?php echo foot(); ?>