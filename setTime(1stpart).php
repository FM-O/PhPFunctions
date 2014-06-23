<?php

///////////////////// FIRST PART \\\\\\\\\\\\\\\\\\\\\

// Get back current timestamp session

$_SESSION['time']=new DateTime(); // Needed to initialize the time session by Datetime() object
$timeStamp = $_SESSION['time']->getTimeStamp(); // Call getTimeStamp from DateTime object (give us the fixed timestamp (creation time))
$_SESSION['clock'] = $timeStamp; // Set the saved timestamp in a Session global

?>