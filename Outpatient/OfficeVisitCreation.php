<?php require_once '../Masters/MasterMain.php'; ?>

<?php echo head("TITLE", "Allan Santiago", "Physician"); ?>
<link href="../CSS/1column.css" rel="stylesheet" type="text/css" />

<?php echo body("Allan Santiago", "Physician", "../Images/default pic.jpg"); ?>
<!-- insert content here

TEMPLATE:
  <div class="DivTemplate"><p class="DivHeaderText">HEADER TEXT</p><hr>CONTENT</div>
-->
<div class="DivTemplate"><p class="DivHeaderText">NEW OFFICE VISIT</p><hr>
    <table>
        <tr><td colspan="2">PATIENT NAME<br> <input type="text" required/>  </td></tr>
            <tr><td>DATE<br> <input type="date" class="InputHalfWidth" required/>  </td>
                 <td class="twocolumns">TIME<br> <input type="time" class="InputHalfWidth" required/>  </td></tr>
                      <tr><td colspan="2">INSURANCE<br> <input type="text" required/>  </td></tr>
                           <tr><td colspan="2">VISIT TYPE<br>  <select required >
                        <option value="Consultation_New">New Consultation</option>
                        <option value="Consultation_FollowUp">Follow up Consultation</option>
                        <option value="OfficeVisit_New">New Office Visit</option>
                        <option value="OfficeVisit_FollowUp">Follow up Office Visit</option>
                                   </select> </td><tr>
                    <td colspan="2">
                        APPOINTMENT MEMO<br>
                    <textarea  rows="4" cols="50" required/></textarea>
                                 </td>
                   </tr>
                     <tr><td colspan="2">STATUS<br>  <select required >
                     <option value="A">New</option>
                        <option value="B">Confirmed</option>
                        <option value="C">Check in</option>
                        <option value="D">Cancelled</option>
                                    <option value="E">No show</option>
                                          <option value="F">Patient requested</option>
                                           <option value="G">Scheduled appointment</option>
                                   </select> </td><tr>
                      
    </table>
</div>
 
        <div class="DivTemplate"><p class="DivHeaderText">ACTIONS</p><hr>
            <input type="submit" value="SAVE"/>
        </div>


<?php echo foot(); ?>
