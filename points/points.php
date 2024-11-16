<?php
require_once("../universal/db-connection.php");
require_once("model.php");

$pageTitle = "Points";
$homeClass = "nav-link";
$brothersClass = "nav-link dropdown-toggle";
$pointsClass = "nav-link active";
$attendanceClass = "nav-link";

include "../universal/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Edit":
      if (editPoints($_POST['BID'], $_POST['SP'], $_POST['BP'])) {
        echo '<div class="alert alert-success" role="alert"> Points Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Points Not Edited </div>';
      }
      break;
  }
}

if(isset($_POST['filter'])) {
  switch ($_POST['filter']) {
    case "Complete":
      $brothers = selectCompleteBrothers();
      break;
    case "Incomplete":
      $brothers = selectIncompleteBrothers();
      break;
  }
}
else {
  $brothers = selectBrothers();
}

include "view.php";
include "../universal/view-footer.php";
?>
