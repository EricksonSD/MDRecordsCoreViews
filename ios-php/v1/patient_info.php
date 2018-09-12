
 <?php
require_once('../includes/connect.php');

$id = $_REQUEST['id'];
$sql = "SELECT * from patient_info2 where id = '$id' ";
$result = $conn->query($sql);
$rows = array();

   while($r = $result->fetch_assoc()) {
     $rows['patient_info'][] = $r;
   }

 print json_encode($rows);
 ?>