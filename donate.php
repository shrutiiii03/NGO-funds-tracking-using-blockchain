<!DOCTYPE html>
<html>
	<head>
	<style>
    #button1 {
        border: solid 2px #444;
        font-size:20px;
        padding: 20px 40px 20px 70px;
        align-items: center;
        background: #fffffe;
        background-image: url("mm.png");
        background-size: 50px;
        background-repeat: no-repeat;
        background-position: 20px;
        font-weight: bold;
        color: #172d4c;
        box-shadow: inset 2px 2px 0 #fff, 0 8px 10px -4px rgba(0,0,0,0.4);
        cursor: pointer;
        transition: all 0.4s ease;
      }
      .button2 {
  /* border: solid 2px #444; */
  font-size:20px;
  padding: 20px 40px 20px 40px;
  /* align-items: center; */
  background: #3e4271;
  text-align: center;
  background-size: 20px;
  background-repeat: no-repeat;
  background-position: 20px;
  font-weight: bold;
  color: #fff;
  /* box-shadow: inset 2px 2px 0 #fff, 0 8px 10px -4px rgba(0,0,0,0.4); */
  cursor: pointer;
  transition: all 0.4s ease;
}

	  /* table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
} */
      </style>
</head>

	
	<body>
		<center>
			<br>
			<br>
<button type="submit" id="button1">Donate</button>
</center>
<br>
<center>
      <a href="donationtable.php">
      <button class="button2">My Donations!</button></a>
    </center>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
   <script>
    document.getElementById('button1').addEventListener('click', event => {
      let account;
      let button = event.target;
      ethereum.request({method: 'eth_requestAccounts'}).then(accounts => {
        account = accounts[0];
        console.log(account);
        button.textContent = account;

        ethereum.request({method: 'eth_getBalance' , params: [account, 'latest']}).then(result => {
          console.log(result);
          let wei = parseInt(result,16);
          let balance = wei / (10**18);
          console.log(balance + " ETH");
        });
      });
    });
  </script> 
  <br>
  <br>
  <br>
  <!-- <p style="color: black; font-size: 35px; font-weight: bold;">Your Donations</p>
  <table border="1">
    <tr>
        <th>Donor Name</th>
        <th>NGO Name</th>
        <th>Email</th>
		<th>Donation Amount (ETH)</th>
		<th>Comment</th>
    </tr>  -->
</center>
</body>
</html>
	
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','donate');

$con = mysqli_connect('localhost', 'root', '','donate');

// get the post records
$txtDonorName = $_POST['txtDonorName'];
$txtNGOName = $_POST['txtNGOName'];
$txtEmail = $_POST['txtEmail'];
$txtDA = $_POST['txtDA'];
$txtComment = $_POST['txtComment'];

// database insert SQL code
$sql = "INSERT INTO `donate1` (`DonorName`, `NGOName`, `Email`, `DA`, `Comment`) VALUES ('$txtDonorName', '$txtNGOName', '$txtEmail', '$txtDA', '$txtComment')";

// insert in database 
$rs = mysqli_query($con, $sql);

// $sql = "SELECT DonorName, NGOName, Email,DA,Comment FROM donate1";
//     $result = $con->query($sql);

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             echo "<tr>";
//             echo "<td>" . $row["DonorName"] . "</td>";
//             echo "<td>" . $row["NGOName"] . "</td>";
//             echo "<td>" . $row["Email"] . "</td>";
// 			echo "<td>" . $row["DA"] . "</td>";
// 			echo "<td>" . $row["Comment"] . "</td>";
//             echo "</tr>";
//         }
//     } else {
//         echo "<tr><td colspan='3'>No data found</td></tr>";
//     }

    // Close the database connection
    $con->close();
    ?>
</table>

</body>
</html>
<!-- Make sure to replace the placeholders in the code with your actual database credentials and table name. This code establishes a connection to the database, retrieves data from a specified table, and displays it in an HTML table on a web page. -->







<!-- if($rs)
{
	function function_alert($message) {
      
		// Display the alert box 
		echo "<script>alert('$message');</script>";
	}
	  
	  
	// Function call
// 	function_alert("Thank you for your donation:)");
// 
}

?> -->