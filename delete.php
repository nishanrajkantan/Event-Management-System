<?php

include 'dbh.inc.php'; 

$id = $_GET['event_id'];

$q = " DELETE FROM `events` WHERE event_id=$id ";

mysqli_query($conn,$q);

header('location:updateevent.php');

?>