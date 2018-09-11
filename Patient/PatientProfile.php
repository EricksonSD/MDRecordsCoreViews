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
    <div class="DivTemplateRight" ><p class="DivHeaderText">PATIENT INFORMATION</p><hr>
        <div class="dataDisplayer">
            <table width="100%">
                <tr><td width="160px">Full name</td><td><?php echo 'Full Name' ?></td></tr>
                <tr><td>Birthday</td><td><?php echo 'Birthday' ?></td></tr>
                <tr><td>Age</td><td><?php echo 'Age' ?></td></tr>
                <tr><td>Gender</td><td><?php echo 'Gender' ?></td></tr>
                <tr><td>Civil Status</td><td><?php echo 'Status' ?></td></tr>
                <tr><td>Home Address</td><td><?php echo 'Address' ?></td></tr>
                 <tr><td>State / Provice</td><td><?php echo 'State / Province' ?></td></tr>
                <tr><td>City</td><td><?php echo 'City' ?></td></tr>
                <tr><td>Zip Code</td><td><?php echo 'Zip Code' ?></td></tr>
                <tr><td>Email Address</td><td><?php echo 'Email Address' ?></td></tr>
                <tr><td>Mobile Number</td><td><?php echo 'Mobile Number' ?></td></tr>
                <tr><td>Contact Number</td><td><?php echo 'Contact Number' ?></td></tr>
                 <tr><td>Fax Number</td><td><?php echo 'Contact Number' ?></td></tr>
                <tr><td>Language</td><td><?php echo 'Language' ?></td></tr>
                <tr><td>Religion</td><td><?php echo 'Religion' ?></td></tr>
                <tr><td>SSS Number</td><td><?php echo 'SSS Number' ?></td></tr>
                <tr><td>Occupation</td><td><?php echo 'Occupation' ?></td></tr>
                <tr><td>Employer</td><td><?php echo 'Employer' ?></td></tr>
            </table>
        </div>

    </div>
    <div class="DivTemplateRight" id="div_FacilityDetails" ><p class="DivHeaderText">FACILITY DETAILS</p><hr>
        <div class="dataDisplayer">
            <table width="100%">
                <tr><td width="160px">Facility</td><td><?php echo 'Facility' ?></td></tr>
            <tr><td>Address</td><td><?php echo 'Address' ?></td></tr>
                 <tr><td>State / Provice</td><td><?php echo 'State / Province' ?></td></tr>
                <tr><td>City</td><td><?php echo 'City' ?></td></tr>
                <tr><td>Zip Code</td><td><?php echo 'Zip Code' ?></td></tr>
                <tr><td>Email Address</td><td><?php echo 'Email Address' ?></td></tr>
                <tr><td>Mobile Number</td><td><?php echo 'Mobile Number' ?></td></tr>
                <tr><td>Contact Number</td><td><?php echo 'Contact Number' ?></td></tr>
                 <tr><td>Fax Number</td><td><?php echo 'Contact Number' ?></td></tr>
                <tr><td>Mode of Communication</td><td><?php echo 'Communication mode' ?></td></tr>
             
                <tr><td>Patient Status</td><td><?php echo 'Status' ?></td></tr>
                <tr><td>Attending Physician</td><td><?php echo 'Physician' ?></td></tr>
                <tr><td>Covering Physician</td><td><?php echo 'Physician' ?></td></tr>

            </table>
        </div>
    </div>
     <div class="DivTemplateRight" id="div_Pharmacy" ><p class="DivHeaderText">PHARMACY</p><hr>
        <div class="dataDisplayer">
            <table width="100%">
            </table>
        </div>
     </div>
    <div class="DivTemplateRight" id="div_EmergencyContact" ><p class="DivHeaderText">EMERGENCY CONTACT</p><hr>
        <div class="dataDisplayer">
            <table width="100%">
                <tr><td width="160px">Full Name</td><td><?php echo 'Full Name' ?></td></tr>
                <tr><td>Relationship</td><td><?php echo 'Relationship' ?></td></tr>
             <tr><td>Home Address</td><td><?php echo 'Address' ?></td></tr>
                 <tr><td>State / Provice</td><td><?php echo 'State / Province' ?></td></tr>
                <tr><td>City</td><td><?php echo 'City' ?></td></tr>
                <tr><td>Zip Code</td><td><?php echo 'Zip Code' ?></td></tr>
                <tr><td>Email Address</td><td><?php echo 'Email Address' ?></td></tr>
                <tr><td>Mobile Number</td><td><?php echo 'Mobile Number' ?></td></tr>
                <tr><td>Contact Number</td><td><?php echo 'Contact Number' ?></td></tr>
                 <tr><td>Fax Number</td><td><?php echo 'Contact Number' ?></td></tr>

            </table>
        </div>
    </div>
    <div class="DivTemplateRight" id="div_Actions1"><p class="DivHeaderText">ACTIONS</p><hr>
        <input type="submit" value="EDIT"/>
    </div>
</div>
<div id="divInsurance" class="tabcontent">
    <div class="DivTemplateRight"><p class="DivHeaderText">INSURANCE COMPANY INFORMATION</p><hr>
        <div class="dataDisplayer">
            <table width="100%">
                <tr><td width="160px">Insurance Name</td><td><?php echo 'Full Name' ?></td></tr>
                <tr><td>Insurance Address</td><td><?php echo 'Address' ?></td></tr>
                <tr><td>Payer ID</td><td><?php echo 'Payer ID' ?></td></tr>
                <tr><td>Free Schedule</td><td><?php echo 'Schedule' ?></td></tr>
                <tr><td>Member Phone Number</td><td><?php echo 'Phone' ?></td></tr>
                <tr><td>Provider Phone Number</td><td><?php echo 'Phone' ?></td></tr>
                <tr><td>Eligible Phone Number</td><td><?php echo 'Phone' ?></td></tr>
                <tr><td>Fax Number</td><td><?php echo 'Fax' ?></td></tr>

            </table>
        </div>
    </div>

    <div class="DivTemplateRight" id="div_InsuredInformation"><p class="DivHeaderText">INSURED INFORMATION</p><hr>
              <div class="dataDisplayer">
            <table width="100%">
                <tr><td width="160px">Full name</td><td><?php echo 'Full Name' ?></td></tr>
                <tr><td>Birthday</td><td><?php echo 'Birthday' ?></td></tr>
                <tr><td>Age</td><td><?php echo 'Age' ?></td></tr>
                <tr><td>Gender</td><td><?php echo 'Gender' ?></td></tr>
                <tr><td>Civil Status</td><td><?php echo 'Status' ?></td></tr>
                <tr><td>Home Address</td><td><?php echo 'Address' ?></td></tr>
                 <tr><td>State / Provice</td><td><?php echo 'State / Province' ?></td></tr>
                <tr><td>City</td><td><?php echo 'City' ?></td></tr>
                <tr><td>Zip Code</td><td><?php echo 'Zip Code' ?></td></tr>
                <tr><td>Email Address</td><td><?php echo 'Email Address' ?></td></tr>
                <tr><td>Mobile Number</td><td><?php echo 'Mobile Number' ?></td></tr>
                <tr><td>Contact Number</td><td><?php echo 'Contact Number' ?></td></tr>
                 <tr><td>Fax Number</td><td><?php echo 'Contact Number' ?></td></tr>
                <tr><td>SSS Number</td><td><?php echo 'SSS' ?></td></tr>
                <tr><td>Occupation</td><td><?php echo 'Occupation' ?></td></tr>
                <tr><td>Employer</td><td><?php echo 'Employer' ?></td></tr>
            </table>
        </div>
    </div>
    <div class="DivTemplateRight" id="div_Actions2"><p class="DivHeaderText">ACTIONS</p><hr>
        <input type="submit" value="EDIT"/>
    </div>
</div>
</div>
<?php echo foot(); ?>
