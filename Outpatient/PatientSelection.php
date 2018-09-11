<?php require_once '../Masters/MasterMain.php'; ?>

<?php echo head("TITLE", "Allan Santiago", "Physician"); ?>
<link href="../CSS/1column.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<!-- insert content here

TEMPLATE:
  <div class="DivTemplate"><p class="DivHeaderText">HEADER TEXT</p><hr>CONTENT</div>
-->
<div class="DivTemplate"><p class="DivHeaderText">PATIENT SELECTION</p><hr>
    <table>
        <tr>
            <td>SEARCH BY:<br>

                <select class="InputOneThirdWidth">
                    <option value="FullName">Name</option>
                    <option value="PatientNo">Patient No.</option>
                    <option value="Physician">Attending Physician</option></td>
            <td class="threecolumns">SEARCH:<br>
                <input type="text" placeholder="Search..." class="InputHalfWidth"/></td>
            <td class="threecolumns"><br>
                </select> <input type="submit" value="SEARCH"/></td>
        </tr>
    </table><br>
    <div id="btnContainer">
        <button class="btn" onclick="listView()">&#9776;  List</button> 
        <button class="btn active" onclick="gridView()">&#9638; Grid</button>
    </div>
<div class="gridlistwrapper">
    <div class="row">
        <div class="column">
            <div class="dataDisplayer">
                <table>
                    <tr><td>Full Name</td><td><?php echo 'Full name' ?></td></tr>
                        <tr><td>Patient Status</td><td><?php echo 'Status' ?></td></tr>
                         <tr><td>Patient No</td><td><?php echo 'ID' ?></td></tr>
                           <tr><td>Birthday</td><td><?php echo 'Birthday' ?></td></tr>
                        <tr><td>Age</td><td><?php echo 'Age' ?></td></tr>
                </table>
            </div>
            <br>
            <input type="Submit" value="View full profile"/>&emsp;
            <input type="Submit" value="Select as current patient"/>&emsp;
        </div>
        <div class="column">
            <div class="dataDisplayer">
                <table>
                    <tr><td>Full Name</td><td><?php echo 'Full name' ?></td></tr>
                        <tr><td>Patient Status</td><td><?php echo 'Status' ?></td></tr>
                         <tr><td>Patient No</td><td><?php echo 'ID' ?></td></tr>
                           <tr><td>Birthday</td><td><?php echo 'Birthday' ?></td></tr>
                        <tr><td>Age</td><td><?php echo 'Age' ?></td></tr>
                </table>
            </div>
            <br>
            <input type="Submit" value="View full profile"/>&emsp;
            <input type="Submit" value="Select as current patient"/>&emsp;
        </div>
    </div>
</div>
</div>
</div>

<?php echo foot(); ?>
