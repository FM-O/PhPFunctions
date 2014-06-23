<?php

///////////////////// SECOND PART \\\\\\\\\\\\\\\\\\\\
//Script to paste at the beginning of your post script.

/*********** Get back the initial timestamp from the form script *******/

$timeStamp = $_SESSION['clock']; // put into variable
echo $timeStamp .'<br />'; //debug counter Tstamp session form
//Substract 10sec to the timestamp saved in the current script
//Timestamp saved by time(), we place the value in a variable

$timeStop = time()-10;
echo $timeStop; //debug counter time current session

//Test to know when we exceed the current timestamp session less 10 sec

if ($timeStamp<$timeStop) {
session_destroy();
}
?>
