
<?php
ini_set('display_errors', 1);
error_reporting(~0);
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "school";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM officials WHERE user ='$_POST[textUsername]' AND password ='$_POST[textPassword]' ";
$query = mysqli_query($conn,$sql);
	if (!$query) {
		printf("Error: %s\n", $conn->error);
	}
$resultArray = array();
	if($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		array_push($resultArray,$result);
		echo "<meta http-equiv='refresh' content='1;URL=/bk/home'>";
	}
	else{
		echo"<script language=\"JavaScript\">";
		echo"alert('Username or Password Incorrect!')";
		echo"</script>";
		echo "<meta http-equiv='refresh' content='1;URL=/officials/login'>";
	}
	mysqli_close($conn);

?>