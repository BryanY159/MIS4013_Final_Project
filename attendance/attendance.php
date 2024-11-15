<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Attendance";
$homeClass = "nav-link";
$brothersClass = "nav-link dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link active";

include "../universal/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Edit2":     
      if (editAttendance($_POST['BID'], $_POST['EID'], $_POST['Status'])) {
        echo '<div class="alert alert-success" role="alert"> Attendance Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Attendance Not Edited </div>';
      }
      break;
  }
}

$events = selectEvents();

if(isset($_POST['rowBID'])) {
  $attendance = selectBrother($_POST['rowBID']);
}
else {
  $attendance = selectAttendance();
}
include "view-full-roster.php";

include "../universal/view-footer.php";
?>
