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



<?php echo LeftDivFirstClosing() ?>
<div class = "DivTemplateLeft"><p class="DivHeaderText">EMPLOYEES</p><hr>
    <?php echo goToDiv("btnToAction2", "Patient Care Privilege", "div_PatientCarePriv") ?>
    <?php echo goToDiv("btnPriv", "Facility Privilege", "div_FacilityPriv") ?>
</div>

<?php echo RightDiv(); ?>




<div class="DivTemplateRight"><p class="DivHeaderText">LOG IN DETAILS</p><hr>
    <div class="dataDisplayer">
        <table> <tr><td>
                    USERNAME</td><td><?php echo 'USERNAME' ?></td>
            </tr></table>
    </div>
</div>

<div class="DivTemplateRight"><p class="DivHeaderText">BASIC INFORMATION</p><hr>
    <div class="dataDisplayer">
        <table width="100%">
            <tr><td width="160px">Full name</td><td><?php echo 'Full Name' ?></td></tr>
            <tr><td>Birthday</td><td><?php echo 'Birthday' ?></td></tr>
            <tr><td>Age</td><td><?php echo 'Age' ?></td></tr>
            <tr><td>Gender</td><td><?php echo 'Gender' ?></td></tr>
            <tr><td>Civil Status</td><td><?php echo 'Status' ?></td></tr>
            <tr><td>Home Address</td><td><?php echo 'Address' ?></td></tr>
            <tr><td>City</td><td><?php echo 'City' ?></td></tr>
            <tr><td>Zip Code</td><td><?php echo 'Zip Code' ?></td></tr>
            <tr><td>Email Address</td><td><?php echo 'Email Address' ?></td></tr>
            <tr><td>Mobile Number</td><td><?php echo 'Mobile Number' ?></td></tr>
            <tr><td>Contact Number</td><td><?php echo 'Contact Number' ?></td></tr>
            <tr><td>License number</td><td><?php echo 'License number' ?></td></tr>
            <tr><td>Occupation</td><td><?php echo 'Occupation' ?></td></tr>
            <tr><td>Specialization</td><td><?php echo 'Specialization' ?></td></tr>
        </table>
    </div>
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
