<!DOCTYPE html>
<html>
<body>

<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<?php
$d=mktime(11, 14, 54, 8, 12, 2019);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

</body>
</html>