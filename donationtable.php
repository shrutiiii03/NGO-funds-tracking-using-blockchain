<!DOCTYPE html>
<html>
	<head>
	<style>
        table {
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
      </style>
</head>

<body>
    <center>
<p style="color: black; font-size: 35px; font-weight: bold;">Your Donations</p><br>
  <table border="1">
    <tr>
        <th>Donor Name</th>
        <th>NGO Name</th>
        <th>Email</th>
		<th>Donation Amount (ETH)</th>
		<th>Comment</th>
    </tr> 
</center>
<br>
<center>
      <!-- <a href="mainpage.html">
      <button class="button2">Go back to Home</button></a><br> -->
    </center>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','donate');

$con = mysqli_connect('localhost', 'root', '','donate');

// get the post records
// $txtDonorName = $_POST['txtDonorName'];
// $txtNGOName = $_POST['txtNGOName'];
// $txtEmail = $_POST['txtEmail'];
// $txtDA = $_POST['txtDA'];
// $txtComment = $_POST['txtComment'];
$sql = "SELECT DonorName, NGOName, Email,DA,Comment FROM donate1";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["DonorName"] . "</td>";
            echo "<td>" . $row["NGOName"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
			echo "<td>" . $row["DA"] . "</td>";
			echo "<td>" . $row["Comment"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }

    // Close the database connection
    $con->close();
    ?>
</table>

</body>
</html>