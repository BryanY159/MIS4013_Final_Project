<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Brothers";
$homeClass = "nav-link";
$brothersClass = "nav-link active dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link";
$demographicsClass = "nav-link";

include "../universal/view-header.php";

$brothers = selectBrothers();

include "view.php";
include "../universal/view-footer.php";
?>
