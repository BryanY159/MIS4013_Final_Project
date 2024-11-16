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

      $SP = $_POST['SP'];
      $BP = $_POST['BP'];
    
      if($SP < 0 || $BP < 0) {
        $SP = 0;
        $BP = 0;
      }      
      
      if (editPoints($_POST['BID'], $SP, $BP)) {
        $toastMessage = "Points Edited Successfully";
        $toastType = "edit";
      } else {
        $toastMessage = "Error: Points Not Edited";
        $toastType = "error";
      }
      break;
  }
  include "../universal/toastify.php";
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
