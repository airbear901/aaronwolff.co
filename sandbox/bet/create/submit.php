<?php
$con=mysqli_connect("aaronwolff.co","dbaaron","aaronw","bet");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$currentuser = mysqli_real_escape_string($con, $_POST['currentuser']);
$betagainst = mysqli_real_escape_string($con, $_POST['betagainst']);
$thebet = mysqli_real_escape_string($con, $_POST['thebet']);
$wager = mysqli_real_escape_string($con, $_POST['wager']);
$reminddate = mysqli_real_escape_string($con, $_POST['reminddate']);



	$sql1="INSERT INTO bet_thebet (bet)
	VALUES ('$thebet');";

	$sql2="INSERT INTO bet_users (originator, betee)
	VALUES ('$currentuser', '$betagainst');";

	$sql3="INSERT INTO bet_wager (wager)
	VALUES ('$wager');";

	$sql4="INSERT INTO bet_reminddate (date)
	VALUES ('$reminddate');";

	

if (!mysqli_query($con,$sql1) && !mysqli_query($con,$sql2) && !mysqli_query($con,$sql3 && !mysqli_query($con,$sql4))) {
  die('Error: ' . mysqli_error($con));
} 


echo "Bet saved!";

mysqli_close($con);
?>