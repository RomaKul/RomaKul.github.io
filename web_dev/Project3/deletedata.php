<?php
include('conn.php');
 ?>
<?php
// sql to delete a record
$id=$_POST["ID"];
$sql = "DELETE FROM MyGuests WHERE id=$id; ";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 