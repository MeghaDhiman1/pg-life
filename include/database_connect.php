<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "PG_life");

if (mysqli_connect_errno()) {
    echo "Error: Failed to connect to MySQL. " . mysqli_connect_error();
    return;
}
// Your script logic here...

?>
