<?php

$dbname = "ryanpazu_specials";
$username = "ryanpazu_BH";
$password = "BH12345";
$servername = "server236";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//} 

$sql = "SELECT Venue, Address, Phone, Specials FROM specials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"Venue: ". $row["Venue"]. " Address: ". $row["Address"]. " Phone #: ". $row["Phone"]. " Specials: ".  $row["Specials"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

