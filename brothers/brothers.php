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
      list($MC, $IY) = explode('|', $_POST['MC-IY']);

      $SP = $_POST['SP'];
      $BP = $_POST['BP'];
    
      if($_POST['Status'] == "Conditional") {
        $SP = -1;
        $BP = -1;
      }
    
      if (addBrother($_POST['FN'], $_POST['LN'], $MC, $IY, $_POST['GY'], 
                     $_POST['Major'], $_POST['Major2'], $_POST['Minor'], $_POST['Minor2'], 
                     $_POST['Status'], $_POST['SID'], $SP, $BP)) {
        $toastMessage = "Brother Added Successfully";
        $toastType = "add";
      } else {
        $toastMessage = "Error: Brother Not Added";
        $toastType = "error";
      }
      break;
    case "Edit":
      list($MC, $IY) = explode('|', $_POST['MC-IY']);

      $SP = $_POST['SP'];
      $BP = $_POST['BP'];
    
      if($_POST['Status'] == "Conditional") {
        $SP = -1;
        $BP = -1;
      }
      
      if (editBrother($_POST['BID'], $_POST['FN'], $_POST['LN'], $MC, $IY, $_POST['GY'], 
                      $_POST['Major'], $_POST['Major2'], $_POST['Minor'], $_POST['Minor2'], 
                      $_POST['Status'], $_POST['SID'], $SP, $BP)) {
        $toastMessage = "Brother Edited Successfully";
        $toastType = "edit";
      } else {
        $toastMessage = "Error: Brother Not Edited";
        $toastType = "error";
      }
      break;
    case "Delete":
      if (deleteBrother($_POST['BID'])) {
        $toastMessage = "Brother Deleted Successfully";
        $toastType = "delete";
      } else {
        $toastMessage = "Error: Brother Not Deleted";
        $toastType = "error";
      }
      break;
  }
  include "../universal/toastify.php";
}

$brothers = selectBrothers();

include "view.php";
include "../universal/view-footer.php";
?>
