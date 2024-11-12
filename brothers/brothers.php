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
    
      if (addBrother($_POST['FN'], $_POST['LN'], $MC, $IY, $_POST['GY'], 
                     $_POST['Major'], $Major2, $Minor, $Minor2, $_POST['Status'], 
                     $_POST['SID'], $_POST['SP'], $_POST['BP'])) {
        echo '<div class="alert alert-success" role="alert"> Brother Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Brother Not Added </div>';
      }
      break;
    case "Edit":
      list($MC, $IY) = explode('|', $_POST['MC-IY']);
    
      if (editBrother($_POST['FN'], $_POST['LN'], $MC, $IY, $_POST['GY'], 
                     $_POST['Major'], $Major2, $Minor, $Minor2, $_POST['Status'], 
                      $_POST['SID'], $_POST['SP'], $_POST['BP'], $_POST['BID'])) {
        echo '<div class="alert alert-success" role="alert"> Brother Edited Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Brother Not Edited </div>';
      }
      break;
    case "Delete":
      if (deleteBrother($_POST['BID'])) {
        echo '<div class="alert alert-success" role="alert"> Brother Removed Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Brother Not Removed </div>';
      }
      break;
  }
}

$brothers = selectBrothers();

include "view.php";
include "../universal/view-footer.php";
?>
