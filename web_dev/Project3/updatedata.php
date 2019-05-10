<?php
include('conn.php');
 ?>
<?php

$firstname=$_POST["firstname"];
$ID=$_POST["ID"];
$sql = "UPDATE MyGuests SET firstname='$firstname' WHERE id=$ID";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?> 