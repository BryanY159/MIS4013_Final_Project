<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Brothers";
$homeClass = "nav-link";
$brothersClass = "nav-link active dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link";

include "../universal/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (addBrother($_POST['$FN'], $_POST['$LN'], $_POST['$MC'], $_POST['$IY'], $_POST['$GY'], 
                     $_POST['$Major'], $_POST['$Major2'], $_POST['$Minor'], $_POST['$Minor2'], 
                     $_POST['$Status'], $_POST['$SID'], $_POST['$SP'], $_POST['$BP'])) {
        echo '<div class="alert alert-success" role="alert"> Brother Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Brother Not Added </div>';
      }
      break;
  }
}

$brothers = selectBrothers();

include "view.php";
include "../universal/view-footer.php";
?>
