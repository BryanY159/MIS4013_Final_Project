<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Attendance";
$homeClass = "nav-link";
$brothersClass = "nav-link dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link active";
$demographicsClass = "nav-link";

include "../universal/view-header.php";

$attendance = selectAttendance();
$events = selectEvents();

include "view.php";
include "../universal/view-footer.php";
?>
