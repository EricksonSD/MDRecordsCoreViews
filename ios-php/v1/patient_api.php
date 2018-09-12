 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iosdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from patient_info2";
$result = $conn->query($sql);


 $rows = array();
   while($r = $result->fetch_assoc()) { 
     $rows['patient_info'][] = $r;
   }

 print json_encode($rows);
 ?>