<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "inotes";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

//  INSERT INTO `notes` (`s_no`, `title`, `desp`, `time`) VALUES ('1', 'Saving', 'Want to save the money for a new helicopter.', current_timestamp());
?>