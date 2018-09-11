<?php 
session_start();
include_once("../Functions/DB_GetPost.php"); 
$tblname = 'patientprofile';
$tblname2 = 'patientprofileemergencycontact';
$updatestring="";
$updatestring2="";
$econtactscolumns=array();
$econtactscolumnsCTR = 0;
$emergencycontacts=array();
$ctr=0;
if (isset($_COOKIE)){
   $patientid = $_COOKIE["patient_id"];
}
foreach($_POST as $key=>$value)
{
    if (substr($key,0,2) == "p_"){
        $updatestring= $updatestring . "$key='$value',";
    }
    else if (substr($key,0,2) == "e_"){
        if(empty($emergencycontacts)) {
        $updatestring2= $updatestring2 . "$key='$value',";
        }else{
            $updatestring2= $updatestring2 . "$econtactscolumns[$ctr]='$value',";
            $ctr++;
            if($ctr==$econtactscolumnsCTR){
                $ctr=0;
            }
        }
        if(empty($emergencycontacts)) { 
            $econtactscolumns[] = $key;
            $econtactscolumnsCTR++;
        }
        if (strpos($key, "e_contactnumber") !== FALSE){
            $updatestring2 = substr($updatestring2, 0, -1);
            $emergencycontacts[] = $updatestring2;
            $updatestring2="";
        }
    }
}
    $updatestring = substr($updatestring, 0, -1);
    updateData($tblname, $updatestring, "patient_id", $patientid);
    foreach($_SESSION['emergencycontact_id'] as $key => $value){
        #echo "[" . $key . "-" . $value . "]";
        updateData($tblname2, $emergencycontacts[$key], "emergencycontact_id", $value);
    }
    ?>
<pre>
<?php
    #echo $updatestring;
    #echo $patientid;       
    #print_r($emergencycontacts);
    #print_r($econtactscolumns);
    #print_r($_SESSION['emergencycontact_id']);
    #echo $emergencycontacts[1];
    ?>
</pre>