
<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']=='GET'){
	$response = array();
	$name = $_GET['name'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	$gender = $_GET['gender'];
	$address = $_GET['address'];
	$maritalstatus = $_GET['maritalstatus'];
	$birthday = $_GET['birthday'];
	$language = $_GET['language'];
	$religion = $_GET['religion'];
	
require_once('../includes/connect.php');

$sql = "insert into patient_info2(name,age,email,gender,address,maritalstatus,birthday,language,religion)
 values ('$name','$age','$email','$gender','$address','$maritalstatus','$birthday','$language','$religion')";
if(mysqli_query($conn,$sql)){
	$response["value"] = 1;
	echo json_encode($response);
	
}else{
	
	$response["value"] = 0;
	echo json_encode($response);	

}
mysqli_close($conn);
}else{
$response["value"] = -1;
echo json_encode($response);
}	
?>