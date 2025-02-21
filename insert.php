<?php session_start(); ?>
<?php
// Retrieve form data

$i1 = (float)$_POST['i1'];
$lw1 = (float)$_POST['l1'] * (float)$_POST['w1'];

$i2 = (float)$_POST['i2'];
$lw2 = (float)$_POST['l2'] * (float)$_POST['w2'];

$i3 = (float)$_POST['i3'];
$lw3 = (float)$_POST['l3'] * (float)$_POST['w3'];

$i4 = (float)$_POST['i4'];
$lw4 = (float)$_POST['l4'] * (float)$_POST['w4'];

$i5 = (float)$_POST['i5'];
$lw5 = (float)$_POST['l5'] * (float)$_POST['w5'];

$i6 = (float)$_POST['i6'];
$lw6 = (float)$_POST['l6'] * (float)$_POST['w6'];

$i7 = (float)$_POST['i7'];
$lw7 = (float)$_POST['l7'] * (float)$_POST['w7'];

$i8 = (float)$_POST['i8'];
$lw8 = (float)$_POST['l8'] * (float)$_POST['w8'];

$i9 = (float)$_POST['i9'];
$lw9 = (float)$_POST['l9'] * (float)$_POST['w9'];

$i10 = (float)$_POST['i10'];
$lw10 = (float)$_POST['l10'] * (float)$_POST['w10'];

$i11 = (float)$_POST['i11'];
$lw11 = (float)$_POST['l11'] * (float)$_POST['w11'];

$i12 = (float)$_POST['i12'];
$lw12 = (float)$_POST['l12'] * (float)$_POST['w12'];

$client = $_SESSION['name'];
$clientmail = $_SESSION['email'];



// Insert data into the database (use your own database connection code here)
// Example:
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'niwahana';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql = "INSERT INTO details (Name, email, LivingRooms, LivingRoomSqFt, DiningRooms, DiningRoomSqFt, OpenPantrys, OpenPantrySqFt, Kitchens, KitchenSqFt, Bedrooms, BedroomSqFt, BathRooms, BathRoomSqFt, StudyLobbies, StudyLobbySqFt, TVRooms, TVRoomSqFt, ClosetRooms, ClosetRoomSqFt, Garages, GarageSqFt, HomeGyms, HomeGymSqFt, Others, OtherSqFt ) VALUES 
('$client', '$clientmail', $i1, $lw1, $i2, $lw2, $i3, $lw3, $i4, $lw4, $i5, $lw5, $i6, $lw6, $i7, $lw7, $i8, $lw8, $i9, $lw9, $i10, $lw10, $i11, $lw11, $i12, $lw12)";

if ($conn->query($sql) === true) {
  echo 'Data inserted successfully';
  
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>