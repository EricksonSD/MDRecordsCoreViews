<html>
<header><title></title></header>
<body>


<?php
require_once('../includes/connect.php');

	//$id = $_REQUEST['id'];
//Get image data from database
    $result = $conn->query("SELECT * FROM patient_info2 WHERE id = 3");
    echo "<table>";
	while ($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>";?> <img src = "<?php echo $row["img"]; ?>" height="500" width="600"><?php echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "</tr>";
	}
    echo "</table>"

?>