<?php
//gets db info
$dbname = "ryanpazu_specials";
$username = "ryanpazu_BH";
$password = "BH12345";
$servername = "server236";

//connects to db
$conn = new mysqli($servername, $username, $password, $dbname);

//selecting columns: Venue, Address, Phone from table 'specials'
$sql = "SELECT Venue, Address, Phone, Specials FROM specials";

//setting result to a connection of the query
$result = $conn->query($sql);

//if table is not empty
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"Venue: ". $row["Venue"]. " Address: ". $row["Address"]. " Phone #: ". $row["Phone"]. " Specials: ".  $row["Specials"];
    }
 //else, table is empty
} else {
    echo "0 results";
}

//close connection
$conn->close();
?>

