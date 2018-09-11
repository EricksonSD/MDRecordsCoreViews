<?php require_once '../Masters/MasterMain.php'; ?>
<?php require_once '../Masters/MasterForGoToDiv.php'; ?>
<?php require_once '../Masters/MasterFor2Columns.php'; ?>
<?php echo head("Employee profile"); ?>
<link href="../CSS/2columns.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<?php echo LeftDiv(); ?>
<!--    TEMPLATE:
           <div class="DivTemplateLeft"><p class="divheadertext">HEADER TEXT</p><hr>CONTENT</div>
-->
<?php echo LeftDivFirst("NEW USER", "../Images/default pic.jpg") ?>
<input type="file"/><br><br><input type="submit" value="UPLOAD"/><br><br>


<?php echo LeftDivFirstClosing() ?>
<div class = "DivTemplateLeft"><p class="DivHeaderText">EMPLOYEES</p><hr>
                <?php echo goToDiv("btnToAction2", "Patient Care Privilege", "div_PatientCarePriv") ?>
         <?php echo goToDiv("btnPriv", "Facility Privilege", "div_FacilityPriv") ?>
</div>

<?php echo RightDiv(); ?>



  
        <div class="DivTemplateRight"><p class="DivHeaderText">LOG IN DETAILS</p><hr>
            <form> <table> <tr><td>
                        USERNAME<br>
                        <input type="text" class="InputHalfWidth" minlength="8" placeholder="Minimum of 8 characters" required></td>
                    <td class="twocolumns"><br><input type="submit" value="Check availability"><label class="warningLabel">Username taken</label><label class="success">Username available</label></td>
                </tr></table><table>
                <tr>
                    <td>PASSWORD<br><input type="password" class="InputOneThirdWidth" minlength="8" placeholder="Minimum of 8 characters" required></td>

                     <td class="threecolumns">PASSWORD<br><input type="password" class="InputOneThirdWidth" minlength="8" placeholder="Retype password" required></td>
                     <td class="threecolumns"><label class="warningLabel">Password mismatched</label><label class="success">Password mismatched</label></td>
                </tr></table></form>
        </div>
<form>
          <div class="DivTemplateRight"><p class="DivHeaderText">BASIC INFORMATION</p><hr>
            <table><tr><td colspan="3">TITLE<br>
                    <select>
                        <option>Dr.</option>
                        <option>Mr.</option>
                        <option>Ms.</option>
                        <option>Mrs.</option>
                            <option>Engr.</option>
                    </select> 
                </td></tr><tr><td>
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
                </tr></table>
              <table>
                <tr>
                    <td>LICENSE NUMBER<br><input type="text" class="InputOneThirdWidth" pattern="[0-9]+"></td>

                    <td class="threecolumns">
                        OCCUPATION<br>
                        <input type="text" class="InputOneThirdWidth" required></td>
                    <td class="threecolumns">SPECIALIZATION<br>
                        <select class="InputOneThirdWidth" >
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select> </td>
                </tr>
            </table>
        </div>
        <div class="DivTemplateRight" id="div_PatientCarePriv"><p class="DivHeaderText">PATIENT CARE PRIVILEGE</p><hr>
            <div class="dataDisplayer">
                <table width="100%">
                    <tr>
                        <th>Module</th>
                        <th width="30px">View</th>
                        <th width="40px">Create</th>
                        <th width="45px">Update</th>
                        <th width="60px">Check all</th>
                    </tr>
                  
                    <tr>
                        <td>Patient profile</td>
                        <td> <input type="checkbox" name="Patient Care" value="View"></td>
                        <td> <input type="checkbox" name="Patient Care" value="Create"></td>
                        <td> <input type="checkbox" name="Patient Care" value="Update"></td>
                        <td> <input type="checkbox" name="Check all" onclick="ToggleCheckAll(this, 'Patient Care')"></td>
                     
                    </tr>
                     <tr>
                        <td>Chief complaints</td>
                        <td> <input type="checkbox" name="Chief complaints" value="View"></td>
                        <td> <input type="checkbox" name="Chief complaints" value="Create"></td>
                        <td> <input type="checkbox" name="Chief complaints" value="Update"></td>
                        <td> <input type="checkbox" name="Check all" onclick="ToggleCheckAll(this, 'Chief complaints')"></td>
                    
                    </tr>
                     <tr>
                        <td>Sample</td>
                        <td> <input type="checkbox" name="Sample" value="View"></td>
                        <td> <input type="checkbox" name="Sample" value="Create"></td>
                        <td> <input type="checkbox" name="Sample" value="Update"></td>
                        <td> <input type="checkbox" name="Check all"  onclick="ToggleCheckAll(this, 'Sample')"></td>
                      
                    </tr>
                </table>
            </div>
        </div>
            <div class="DivTemplateRight" id="div_FacilityPriv"><p class="DivHeaderText">FACILITY PRIVILEGE</p><hr>
            <div class="dataDisplayer">
                <table width="100%">
                    <tr>
                        <th>Module</th>
                        <th width="30px">View</th>
                        <th width="40px">Create</th>
                        <th width="45px">Update</th>
                        <th width="60px">Check all</th>
                    </tr>
                  
                    <tr>
                        <td>Employee</td>
                        <td> <input type="checkbox" name="Employee" value="View"></td>
                        <td> <input type="checkbox" name="Employee" value="Create"></td>
                        <td> <input type="checkbox" name="Employee" value="Update"></td>
                        <td> <input type="checkbox" name="Check all" onclick="ToggleCheckAll(this, 'Employee')"></td>
                     
                    </tr>
                     <tr>
                        <td>Access type</td>
                        <td> <input type="checkbox" name="Employee Access Type" value="View"></td>
                        <td> <input type="checkbox" name="Employee Access Type" value="Create"></td>
                        <td> <input type="checkbox" name="Employee Access Type" value="Update"></td>
                        <td> <input type="checkbox" name="Check all" onclick="ToggleCheckAll(this, 'Employee Access Type')"></td>
                    
                    </tr>
                     <tr>
                        <td>Insurance</td>
                        <td> <input type="checkbox" name="Insurance" value="View"></td>
                        <td> <input type="checkbox" name="Insurance" value="Create"></td>
                        <td> <input type="checkbox" name="Insurance" value="Update"></td>
                        <td> <input type="checkbox" name="Check all"  onclick="ToggleCheckAll(this, 'Insurance')"></td>
                      
                    </tr>
                </table>
            </div>
        </div>
      
<form>
     

       
    
        <div class="DivTemplateRight" id="div_Actions2"><p class="DivHeaderText">ACTIONS</p><hr>
            <input type="submit" value="SAVE"/>
        </div>
    </form>
</div>
<?php echo foot(); ?>
