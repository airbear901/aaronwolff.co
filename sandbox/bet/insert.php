<?php
$con=mysqli_connect("aaronwolff.co","dbaaron","aaronw","bet");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$sql="INSERT INTO users (FirstName, Email, Password)
VALUES ('$firstname', '$email', '$password')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Welcome!";

mysqli_close($con);
?>