<?php require_once '../Masters/MasterMain.php'; ?>
<?php require_once '../Masters/ControlVisibilityToggler.php'; ?>
<?php echo head("TITLE", "Allan Santiago", "Physician"); ?>
<link href="../CSS/1column.css" rel="stylesheet" type="text/css" />
  <script src="../JS/AgeComputation.js"></script>
  
<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<form>
    <div class="DivTemplate"><p class="DivHeaderText">SOCIAL HISTORY</p><hr> 
      NOTES<br>
                <textarea id="tbx_SocialHistory" rows="4" cols="50"></textarea>
    </div>

        <div class="DivTemplate"><p class="DivHeaderText">SMOKING STATUS</p><hr> 
            <input type="checkbox" onclick="TogglerNonRadio('div_Smoked');" value="Never smoked">Never smoked

            <div id="div_Smoked">
                <input type="checkbox" onclick="TogglerNonRadio('div_KnownSmoker');" value="Unknown if ever smoked">Unknown if ever smoked
                <div id="div_KnownSmoker">
                    <br>
                    <div class="dataDisplayer">
                        <table width="100%" id="tbl_SmokingStatus">
                                                           <tr>
                                    <th>SMOKING TYPE</th>
                                    <th>SMOKER TYPE</th>
                                    <th>FREQUENCY</th>
                                    <th>SMOKING NOTES</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>
                                    <th>TOTAL YEARS SMOKED</th>
                                      <th>ACTIONS</th>
                                </tr>
                              

                            </table>
                    </div><br>
                     <details><summary><i class="DivHeaderText">ADD SMOKING STATUS</i> </summary>
                SMOKING TYPE<br>
                <input type="text" id="tbx_SmokingType" placeholder="Cigarettes / Vape / Tobacco / Others"/>  
                <table width="100%"><tr><td width="250px">
                            SMOKER TYPE<br>
                            <input type="radio" name="SmokerType" value="Former smoker" checked>Former smoker
                            <br><input type="radio" name="SmokerType" value="Current everyday smoker">Current everyday smoker
                            <br><input type="radio" name="SmokerType" value="Current someday smoker" >Current someday smoker
                            <br><input type="radio" name="SmokerType" value="Smoker, current status unknown" >Smoker, current status unknown
                        <td>
                            <!-- if former smoker -->
                            <div id="div_FormerSmoker">
                                APPROXIMATE SMOKING START DATE<br><input id="tbx_FormerSmokerStartDate" type="date" class="InputHalfWidth"/><br>
                                APPROXIMATE SMOKING END DATE<br><input id="tbx_FormerSmokerEndDate" type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS SMOKED&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current everyday smoker -->
                            <div id="div_CurrentEverydaySmoker" style="display: none">
                                APPROXIMATE SMOKING START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS SMOKED&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current someday smoker -->
                            <div id="div_CurrentSomedaySmoker" style="display: none;">
                                APPROXIMATE SMOKING START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS SMOKED&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td >FREQUENCY<br><input id ="tbx_SmokingFrequencyNumber" type="number" class="InputOneThirdWidth" placeholder="Number"/></td>
                        <td class="threecolumns">UNIT<br><select id="sel_SmokingUnit" class="InputOneThirdWidth" >
                                <option value="Pack(s)">Pack(s)</option>
                                <option value="Cigarette(s)">Cigarette(s)</option>
                                <option value="Cigar(s)">Cigar(s)</option>
                                <option value="Poach(es)">Poach(es)</option>
                            </select>
                        </td>
                        <td class="threecolumns"><br>Per Day</td>
                    </tr>
                </table>
                SMOKING NOTES<br>
                <textarea id="tbx_SmokingNotes" rows="4" cols="50"></textarea>
                <br><br>
                <input type="button" value="ADD TO SMOKING STATUS LIST" onclick="AddToSmokingStatus();"/>
                     </details><br>
                      <input type="checkbox" value="Cessation Counseling" onclick="TogglerNonRadio('div_CessationCounseling')"> CESSATION COUNSELING
                  <div id="div_CessationCounseling" style="display: none;">
                    <select id="sel_CessationCounseling"" >
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                      <br>
                      PATIENT RESPONSE<br>
                      <input type="radio" name="Cessation Counseling Patient Response" value="Patient agreed" >Patient agreed<br>
                  <input type="radio" name="Cessation Counseling Patient Response" value="Patient will think about it" >Patient will think about it<br>
                   <input type="radio" name="Cessation Counseling Patient Response" value="Patient refused" >Patient refused<br>
              
                       
                  </select><br>
                       CESSATION COUNSELING NOTES<br>
                <textarea id="tbx_CessationCounselingNotes" rows="4" cols="50"></textarea>
                  </div>
                      
                                   </div>
            </div>
        </div>
    



    <?php echo TogglerRadio('Former smoker', 'SmokerType', 'div_FormerSmoker') ?>
    <?php echo TogglerRadio('Current everyday smoker', 'SmokerType', 'div_CurrentEverydaySmoker') ?>
    <?php echo TogglerRadio('Current someday smoker', 'SmokerType', 'div_CurrentSomedaySmoker') ?>
    <?php echo TogglerNonRadio() ?>


    <div class="DivTemplate" id="div_Actions2"><p class="DivHeaderText">ACTIONS</p><hr>
        <table class="tableActions">
            <tr>
                <td><input type="submit" value="SAVE CHANGES"/></td>
                <td><input type="button" onclick="goToLink('../MedicalHistory/MedicalHistory.php');" value="BACK"></td>
            </tr>
          
        </table>
      
    </div>
</form>

<?php require_once '../MedicalHistory/SocialHistoryFunctions.php'; ?>
<?php echo foot() ?>