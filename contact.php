

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','database');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `table-details` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	function function_alert($message) {
      
		// Display the alert box 
		echo "<script>alert('$message');</script>";
	}
	  
	  
	// Function call
	function_alert("Your Query has been recorded.We will reach out to you soon :)");
}

?>