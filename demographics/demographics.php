<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Demographics";
$homeClass = "nav-link";
$brothersClass = "nav-link dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link";
$demographicsClass = "nav-link active";

include "../universal/view-header.php";
?>

<h1>Demographics</h1>

<p>Info here</p>

<?php
include "view.php";
include "../universal/view-footer.php";
?>
