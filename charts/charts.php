<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Charts";
$homeClass = "nav-link";
$brothersClass = "nav-link active dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link";

include "../universal/view-header.php";
?>

<h1>Charts</h1>

<p>Info here</p>

<?php
include "view.php";
include "../universal/view-footer.php";
?>
