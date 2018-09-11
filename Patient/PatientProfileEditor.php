<?php require_once '../Masters/MasterMain.php'; ?>
<?php require_once '../Masters/ControlVisibilityToggler.php'; ?>
<?php require_once '../Masters/MasterForGoToDiv.php'; ?>
<?php require_once '../Masters/MasterFor2Columns.php'; ?>
<?php echo head("TITLE"); ?>
<link href="../CSS/2columns.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<?php echo LeftDiv(); ?>
<!--    TEMPLATE:
           <div class="DivTemplateLeft"><p class="divheadertext">HEADER TEXT</p><hr>CONTENT</div>
-->
<?php echo LeftDivFirst("NEW USER", "../Images/default pic.jpg") ?>
<input type="file"/><br><br><input type="submit" value="UPLOAD"/><br><br>


<?php echo LeftDivFirstClosing() ?>
<div class = "DivTemplateLeft"><p class="DivHeaderText">PATIENT INFORMATION</p><hr>
    <?php echo goToDiv("btnToFacilityDetails", "Facility details", "div_FacilityDetails") ?>
    <?php echo goToDiv("btnToEmergencyContact", "Emergency Contact", "div_EmergencyContact") ?>

    <?php echo goToDiv("btnToAction1", "Actions", "div_Actions1") ?>

</div>

<div class = "DivTemplateLeft"><p class="DivHeaderText">INSURANCE</p><hr>
    <?php echo goToDiv("btnToInsuredInformation", "Insured Information", "div_InsuredInformation") ?>
    <?php echo goToDiv("btnToAction2", "Actions", "div_Actions2") ?>
</div>

<?php echo RightDiv(); ?>
<div class="tab DivTemplateRight">
    <button class="tablinks" onclick="openTab(event, 'divPatientInformation')" id="defaultOpen">Patient Information</button>
    <button class="tablinks" onclick="openTab(event, 'divInsurance')">Insurance</button>
</div>
<div id="divPatientInformation" class="tabcontent">
    <form>
        <div class="DivTemplateRight"><p class="DivHeaderText">PATIENT INFORMATION</p><hr>
            <table><tr><td>
                        FIRST NAME<br>
                        <input type="text" class="InputOneThirdWidth" placeholder="Jose" required></td>
                    <td class="threecolumns">MIDDLE NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Protacio"></td>
                    <td class="threecolumns">LAST NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Rizal" required></td>
                </tr>
                <tr><td>
                        BIRTHDAY<br>
                        <input type="date" class="InputOneThirdWidth" required></td>
                        <td class="threecolumns">GENDER<br>   <input type="radio" name="gender" value="male" required> Male&emsp;
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                    <td class="threecolumns">CIVIL STATUS<br>
                        <select class="InputOneThirdWidth" >
                            <option value="SINGLE">SINGLE</option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="WIDOWED">WIDOWED</option>
                            <option value="DIVORCED">DIVORCED</option>
                            <option value="SEPARATED">SEPARATED</option>
                        </select> </td>
                </tr>
                <tr><td colspan="3">HOME ADDRESS<br><input type="text" placeholder="Home address" required=""></td></tr>
                <tr><td>STATE/PROVINCE<br>
                        <select class="InputOneThirdWidth">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select> 
                    </td>
                    <td class="threecolumns"> CITY<br> <input type="text" class="InputOneThirdWidth" placeholder="City" required></td>
                    <td class="threecolumns">
                        ZIP CODE<br>
                        <input type="number" class="InputOneThirdWidth" placeholder="number" required></td>

                </tr>
                <tr>
                    <td>EMAIL ADDRESS<br><input type="email" class="InputOneThirdWidth" placeholder="joserizal@pilipinas.com"></td>
                    <td class="threecolumns">MOBILE NO.<br>
                        <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    <td class="threecolumns">CONTACT NO.<br>
                        <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr></table><table>
                <tr><td>
                        LANGUAGE<br>
                        <input type="text" class="InputHalfWidth" placeholder="Tagalog, English" required></td>
                    <td class="twocolumns">RELIGION<br><input type="text" class="InputHalfWidth" placeholder="Religion"></td>
                </tr></table><table>
                <tr>
                    <td>SSS NUMBER<br><input type="tel" class="InputOneThirdWidth" pattern="([0-9]){2}(-|\s)?([0-9]){7}(-|\s)?([0-9])" placeholder="#-#######-#" ></td>

                    <td class="threecolumns">
                        OCCUPATION<br>
                        <input type="text" class="InputOneThirdWidth"></td>
                    <td class="threecolumns">EMPLOYER<br><input type="text" class="InputOneThirdWidth" placeholder="Religion"></td>
                </tr>
            </table>
        </div>
        <div class="DivTemplateRight" id="div_FacilityDetails"><p class="DivHeaderText">FACILITY DETAILS</p><hr>
            <table><tr><td colspan="3">
                        FACILITY<br>
                        <select required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select> </td>
                </tr>
                <tr><td colspan="3">ADDRESS<br><input type="text" placeholder="Home address" required=""></td></tr>
                <tr><td>STATE/PROVINCE<br>
                        <select class="InputOneThirdWidth" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select> 
                    </td>
                    <td class="threecolumns"> CITY<br> <input type="text" class="InputOneThirdWidth" placeholder="City" required></td>
                    <td class="threecolumns">
                        ZIP CODE<br>
                        <input type="number" class="InputOneThirdWidth" placeholder="number" required></td>
                </tr>
                <tr><td>
                        MODE OF COMMUNICATION<br>
                        <input type="checkbox" value="1">Email<br>
                        <input type="checkbox" value="2">Phone Number<br>
                        <input type="checkbox" value="3">Mobile<br>
                        <input type="checkbox"  value="4">Text Messaging<br>
                        <input type="checkbox" value="5" onclick="TogglerNonRadio('tbx_MOCOthers')">Others</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="text" id="tbx_MOCOthers" style="display: none;" placeholder="Others"></td>
                        </td>
                    </tr>
                <tr><td colspan="3">
                        PHARMACY<br>
                        <input type="text" />   </td>
                </tr>
                <tr><td colspan="3">
                        PATIENT STATUS<br>
                        <select >
                            <option value="Active">ACTIVE</option>
                            <option value="Inactive">INACTIVE</option>
                            <option value="Deceased">DECEASED</option>
                        </select> </td>
                </tr>
                <tr><td colspan="3">
                        ATTENDING PHYSICIAN<br>
                        <input type="text" />   </td>
                </tr>
                <tr><td colspan="3">
                        COVERING PHYSICIAN<br>
                        <input type="text" />   </td>
                </tr>
            </table>
        </div>
        <div class="DivTemplateRight" id="div_EmergencyContact"><p class="DivHeaderText">EMERGENCY CONTACT</p><hr>
            <table>
                <tr><td>
                        FIRST NAME<br>
                        <input type="text" class="InputOneThirdWidth" placeholder="Jose" required></td>
                    <td class="threecolumns">MIDDLE NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Protacio"></td>
                    <td class="threecolumns">LAST NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Rizal" required></td>
                </tr>
                <tr><td colspan="3">
                        RELATIONSHIP<br>
                        <input type="text" />   </td>
                </tr>
                <tr><td colspan="3">
                        <input type="checkbox" name="vehicle1" value="Bike"> Same address with the patient? </td>
                </tr>
                <tr><td colspan="3">HOME ADDRESS<br><input type="text" placeholder="Home address" required=""></td></tr>
                <tr><td>STATE/PROVINCE<br>
                        <select class="InputOneThirdWidth">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select> 
                    </td>
                    <td class="threecolumns"> CITY<br> <input type="text" class="InputOneThirdWidth" placeholder="City" required></td>
                    <td class="threecolumns">
                        ZIP CODE<br>
                        <input type="number" class="InputOneThirdWidth" placeholder="number" required></td>

                </tr>
                <tr>
                    <td>EMAIL ADDRESS<br><input type="email" class="InputOneThirdWidth" placeholder="joserizal@pilipinas.com"></td>
                    <td class="threecolumns">MOBILE NO.<br>
                        <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    <td class="threecolumns">CONTACT NO.<br>
                        <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr>
            </table>
        </div>
        <div class="DivTemplateRight" id="div_Actions1"><p class="DivHeaderText">ACTIONS</p><hr>
            <input type="submit" value="SAVE"/>
        </div>
    </form>
</div>
<div id="divInsurance" class="tabcontent">
    <form>
        <div class="DivTemplateRight"><p class="DivHeaderText">INSURANCE LIST</p><hr>
            <select size="6" style="height: 120px !important;">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option> 
            </select> </div>

        <div class="DivTemplateRight"><p class="DivHeaderText">INSURANCE COMPANY INFORMATION</p><hr>

            <table>
                <tr>
                    <td>INSURANCE NAME<BR>
                        <input type="text" id="tbx_InsuranceName" required/>
                    </td>
                </tr>
                <tr>
                    <td>INSURANCE ADDRESS<BR>

                        <input type="text" id="tbx_InsuranceID"  required/></td>
                </tr>
                <tr>
                    <td>
                        PAYER ID <BR>
                        <input type="number" id="tbx_insurancePayerID"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        FREE SCHEDULE<BR>
                        <input type="text" ID="tbx_insuranceFreeSchedule"  />
                    </td>
                </tr>
                <tr>
                    <td>MEMBER PHONE NUMBER<BR>
                        <input type="tel"  pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr>                             
                <tr>
                    <td>
                        PROVIDER PHONE NUMBER <BR>
                        <input type="tel"  pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr>
                <tr>
                    <td>
                        ELIGIBLE PHONE NUMBER <BR>
                        <input type="tel" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr>
                <tr>
                    <td>
                        FAX NUMBER <BR>
                        <input type="tel" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  
                    </td>
                </tr>
            </table>
        </div>
        <form>
            <div class="DivTemplateRight" id="div_InsuredInformation"><p class="DivHeaderText">INSURED INFORMATION</p><hr>
                <table><tr><td>
                            FIRST NAME<br>
                            <input type="text" class="InputOneThirdWidth" placeholder="Jose" required></td>
                        <td class="threecolumns">MIDDLE NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Protacio"></td>
                        <td class="threecolumns">LAST NAME<br><input type="text" class="InputOneThirdWidth" placeholder="Rizal" required></td>
                    </tr>
                    <tr><td>
                            BIRTHDAY<br>
                            <input type="date" class="InputOneThirdWidth" required></td>
                        <td class="threecolumns">GENDER<br>   <input type="radio" name="gender" value="male" required> Male&emsp;
                            <input type="radio" name="gender" value="female"> Female
                        </td>
                        <td class="threecolumns">CIVIL STATUS<br>
                            <select class="InputOneThirdWidth" >
                                <option value="SINGLE">SINGLE</option>
                                <option value="MARRIED">MARRIED</option>
                                <option value="WIDOWED">WIDOWED</option>
                                <option value="DIVORCED">DIVORCED</option>
                                <option value="SEPARATED">SEPARATED</option>
                            </select> </td>
                    </tr>
                    <tr><td colspan="3">HOME ADDRESS<br><input type="text" placeholder="Home address" required=""></td></tr>
                    <tr><td>STATE/PROVINCE<br>
                            <select class="InputOneThirdWidth">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select> 
                        </td>
                        <td class="threecolumns"> CITY<br> <input type="text" class="InputOneThirdWidth" placeholder="City" required></td>
                        <td class="threecolumns">
                            ZIP CODE<br>
                            <input type="number" class="InputOneThirdWidth" placeholder="number" required></td>

                    </tr>
                    <tr>
                        <td>EMAIL ADDRESS<br><input type="email" class="InputOneThirdWidth" placeholder="joserizal@pilipinas.com"></td>
                        <td class="threecolumns">MOBILE NO.<br>
                            <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  </td>
                        <td class="threecolumns">CONTACT NO.<br>
                            <input type="tel" class="InputOneThirdWidth" pattern="^((09|\+639)|(|\d{2}|\d{3}))(-|\s)?(\d{9}|\d{7})$" required/>  </td>
                        </td>
                    </tr></table><table>
                    <tr>
                        <td>SSS NUMBER<br><input type="tel" class="InputOneThirdWidth" pattern="([0-9]){2}(-|\s)?([0-9]){7}(-|\s)?([0-9])" placeholder="#-#######-#" ></td>
                        <td class="threecolumns">
                            OCCUPATION<br>
                            <input type="text" class="InputOneThirdWidth"></td>
                        <td class="threecolumns">EMPLOYER<br><input type="text" class="InputOneThirdWidth" placeholder="Religion"></td>
                    </tr>
                </table>
            </div>



            <div class="DivTemplateRight" id="div_Actions2"><p class="DivHeaderText">ACTIONS</p><hr>
                <input type="submit" value="SAVE"/>
            </div>
        </form>
</div>

     <?php echo TogglerNonRadio('tbx_MOCOthers') ?>
<?php echo foot(); ?>
