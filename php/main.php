<?php

$servername = "localhost";
$username = "admin";
$password = "password";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}


$sql = "INSERT INTO users (email)
VALUES ('john@example.com')";

if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

<html>
  <div>
  Sign up for the newsletter
  <?div>
    <form>
      <label for="email">Email Address:</label><br>
      <input type="text" id="no" email="email">
    </form>
  </body>
</html>
