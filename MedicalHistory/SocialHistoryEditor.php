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
                                    <th>TOTAL YEARS</th>
                                      <th>ACTIONS</th>
                                </tr>
                              

                            </table>
                    </div><br>
                     <details><summary><i class="DivHeaderText">ADD SMOKING STATUS</i> </summary>
                SMOKING TYPE<br>
                <input type="text" id="tbx_SmokingType" placeholder="Cigarettes / Vape / Tobacco / Others"/>  
                <table width="100%"><tr><td width="340px">
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
    

<div class="DivTemplate"><p class="DivHeaderText">ALCOHOL USE STATUS</p><hr> 
            <input type="checkbox" onclick="TogglerNonRadio('div_UsedAlcohol');" value="Never used alcohol">Never used alcohol

            <div id="div_UsedAlcohol">
                <input type="checkbox" onclick="TogglerNonRadio('div_KnownAlcoholUser');" value="Unknown if ever used alcohol">Unknown if ever used alcohol
                <div id="div_KnownAlcoholUser">
                    <br>
                    <div class="dataDisplayer">
                        <table width="100%" id="tbl_AlcoholUseStatus">
                                                           <tr>
                                    <th>ALCOHOL TYPE</th>
                                    <th>DRINKER TYPE</th>
                                    <th>FREQUENCY</th>
                                    <th>ALCOHOL USE NOTES</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>
                                    <th>TOTAL YEARS</th>
                                      <th>ACTIONS</th>
                                </tr>
                              

                            </table>
                    </div><br>
                     <details><summary><i class="DivHeaderText">ADD ALCOHOL USE STATUS</i> </summary>
                ALCOHOL TYPE<br>
                <input type="text" id="tbx_AlcoholType" placeholder="Beer / Vodka / Gin / Hard liquor / Wine"/>  
                <table width="100%"><tr><td width="340px">
                            ALCOHOL TYPE<br>
                            <input type="radio" name="AlcoholUserType" value="Former alcohol user" checked>Former alcohol user
                            <br><input type="radio" name="AlcoholUserType" value="Current everyday alcohol user">Current everyday alcohol user
                            <br><input type="radio" name="AlcoholUserType" value="Current someday alcohol user" >Current someday alcohol user
                            <br><input type="radio" name="AlcoholUserType" value="Alcohol user, current status unknown" >Alcohol User, current status unknown
                        <td>
                            <!-- if former alcohol user -->
                            <div id="div_FormerAlcoholUser">
                                APPROXIMATE ALCOHOL USE START DATE<br><input id="tbx_FormerAlcoholUserStartDate" type="date" class="InputHalfWidth"/><br>
                                APPROXIMATE ALCOHOL USE END DATE<br><input id="tbx_FormerAlcoholUserEndDate" type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF ALCOHOL USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current everyday alcohol user -->
                            <div id="div_CurrentEverydayAlcoholUser" style="display: none">
                                APPROXIMATE ALCOHOL USE START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF ALCOHOL USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current someday alcohol user -->
                            <div id="div_CurrentSomedayAlcoholUser" style="display: none;">
                                APPROXIMATE ALCOHOL USE START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF ALCOHOL USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td >FREQUENCY<br><input id ="tbx_AlcoholUseFrequencyNumber" type="number" class="InputOneThirdWidth" placeholder="Number"/></td>
                        <td class="threecolumns">UNIT<br><select id="sel_AlcoholUseUnit" class="InputOneThirdWidth" >
                                <option value="Bottle(s)">Bottle(s)</option>
                                <option value="Glass(es)">Glass(es)</option>
                                <option value="ml.">ml.</option>
                                <option value="oz.">oz.</option>
                            </select>
                        </td>
                        <td class="threecolumns">PERIOD<br><input type="text" class="InputOneThirdWidth" id="tbx_AlcoholUsePeriod" placeholder="Per Day / Per Month / Thrice a week / Etc."></td>
                    </tr>
                </table>
                ALCOHOL USE NOTES<br>
                <textarea id="tbx_AlcoholUseNotes" rows="4" cols="50"></textarea>
                <br><br>
                <input type="button" value="ADD TO ALCOHOL USE STATUS LIST" onclick="AddToAlcoholUseStatus();"/>
                     </details><br>
                      <input type="checkbox" value="Alcohol Use Counseling" onclick="TogglerNonRadio('div_AlcoholUseCounseling')"> Advised for counseling to stop alcohol use
                  <div id="div_AlcoholUseCounseling" style="display: none;">
                                        <br>
                      PATIENT RESPONSE<br>
                      <input type="radio" name="Cessation Counseling Patient Response" value="Patient agreed" >Patient agreed<br>
                  <input type="radio" name="Cessation Counseling Patient Response" value="Patient will think about it" >Patient will think about it<br>
                   <input type="radio" name="Cessation Counseling Patient Response" value="Patient refused" >Patient refused<br>
              
                       
                  </select><br>
                       CESSATION COUNSELING NOTES<br>
                <textarea id="tbx_AlcoholUseCessationCounselingNotes" rows="4" cols="50"></textarea>
                  </div>
                      
                                   </div>
            </div>
        </div>

         <div class="DivTemplate"><p class="DivHeaderText">DRUG USE STATUS</p><hr> 
            <input type="checkbox" onclick="TogglerNonRadio('div_UsedDrug');" value="Never used drug">Never used drug

            <div id="div_UsedDrug">
                <input type="checkbox" onclick="TogglerNonRadio('div_KnownDrugUser');" value="Unknown if ever used drug">Unknown if ever used drug
                <div id="div_KnownDrugUser">
                    <br>
                    <div class="dataDisplayer">
                        <table width="100%" id="tbl_DrugUseStatus">
                                                           <tr>
                                    <th>DRUG TYPE</th>
                                    <th>DRUG USER TYPE</th>
                                    <th>FREQUENCY</th>
                                    <th>DRUG USE NOTES</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>
                                    <th>TOTAL YEARS</th>
                                      <th>ACTIONS</th>
                                </tr>
                              

                            </table>
                    </div><br>
                     <details><summary><i class="DivHeaderText">ADD DRUG USE STATUS</i> </summary>
                DRUG TYPE<br>
                <input type="text" id="tbx_DrugType" placeholder="Marijuana / Cocaine / Heroine / Metampethamine / PCP"/>  
                <table width="100%"><tr><td width="340px">
                            DRUG TYPE<br>
                            <input type="radio" name="DrugUserType" value="Former drug user" checked>Former drug user
                            <br><input type="radio" name="DrugUserType" value="Current everyday drug user">Current everyday drug user
                            <br><input type="radio" name="DrugUserType" value="Current someday drug user" >Current someday drug user
                            <br><input type="radio" name="DrugUserType" value="Drug user, current status unknown" >Drug User, current status unknown
                        <td>
                            <!-- if former drug user -->
                            <div id="div_FormerDrugUser">
                                APPROXIMATE DRUG USE START DATE<br><input id="tbx_FormerDrugUserStartDate" type="date" class="InputHalfWidth"/><br>
                                APPROXIMATE DRUG USE END DATE<br><input id="tbx_FormerDrugUserEndDate" type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF DRUG USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current everyday drug user -->
                            <div id="div_CurrentEverydayDrugUser" style="display: none">
                                APPROXIMATE DRUG USE START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF DRUG USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                            <!-- if current someday drug user -->
                            <div id="div_CurrentSomedayDrugUser" style="display: none;">
                                APPROXIMATE DRUG USE START DATE<br><input type="date" class="InputHalfWidth"/><br>
                                TOTAL YEARS OF DRUG USAGE&emsp;<i class="DivHeaderText"><?php echo 'Auto-generated based on input' ?></i>
                            </div>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td >FREQUENCY<br><input id ="tbx_DrugUseFrequencyNumber" type="number" class="InputOneThirdWidth" placeholder="Number"/></td>
                        <td class="threecolumns">UNIT<br><select id="sel_DrugUseUnit" class="InputOneThirdWidth" >
                                <option value="Bottle(s)">Bottle(s)</option>
                                <option value="Glass(es)">Glass(es)</option>
                                <option value="ml.">ml.</option>
                                <option value="oz.">oz.</option>
                            </select>
                        </td>
                        <td class="threecolumns">PERIOD<br><input type="text" class="InputOneThirdWidth" id="tbx_DrugUsePeriod" placeholder="Per Day / Per Month / Thrice a week / Etc."></td>
                    </tr>
                </table>
                DRUG USE NOTES<br>
                <textarea id="tbx_DrugUseNotes" rows="4" cols="50"></textarea>
                <br><br>
                <input type="button" value="ADD TO DRUG USE STATUS LIST" onclick="AddToDrugUseStatus();"/>
                     </details><br>
                      <input type="checkbox" value="Drug Use Counseling" onclick="TogglerNonRadio('div_DrugUseCounseling')"> Advised for counseling to stop drug use
                  <div id="div_DrugUseCounseling" style="display: none;">
                                        <br>
                      PATIENT RESPONSE<br>
                      <input type="radio" name="Cessation Counseling Patient Response" value="Patient agreed" >Patient agreed<br>
                  <input type="radio" name="Cessation Counseling Patient Response" value="Patient will think about it" >Patient will think about it<br>
                   <input type="radio" name="Cessation Counseling Patient Response" value="Patient refused" >Patient refused<br>
              
                       
                  </select><br>
                       CESSATION COUNSELING NOTES<br>
                <textarea id="tbx_DrugUseCessationCounselingNotes" rows="4" cols="50"></textarea>
                  </div>
                      
                                   </div>
            </div>
        </div>


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