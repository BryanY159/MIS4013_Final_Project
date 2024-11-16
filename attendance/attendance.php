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
    case "Add":     
      if (addAttendance($_POST['BID'])) {
        echo '<div class="alert alert-success" role="alert"> Attendance Added Successfully </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error: Attendance Not Added </div>';
      }
      break;
    case "Edit":     
      if (editAttendance($_POST['BID'], $_POST['EID'], $_POST['Status'])) {
        $toastMessage = "Attendance Edited Successfully";
      } else {
        $toastMessage = "Error: Attendance Not Edited";
        $toastType = "error";
      }
      break;
  }
}
if(isset($_POST['rowBID'])) {
  $attendance = selectBrother($_POST['rowBID']);
}
else {
  $attendance = selectAttendance();
}
$events = selectEvents();

include "view.php";

?>//<script src="../universal/toastify-script.js"></script>

<script>
  const toastMessage = "<?php echo $toastMessage; ?>";
  const toastType = "<?php echo $toastType; ?>";
  const actionType = "<?php echo $actionType; ?>";

  if (toastMessage) {
    let backgroundColor = actionType === "Delete" ? "red" :
                          actionType === "Add" ? "green" : 
                          actionType === "Edit" ? "yellow" : "blue";

    Toastify({
      text: toastMessage,
      duration: 3000,
      gravity: "top",
      position: "right",
      style: {
        background: backgroundColor,
        color: "black" // Optional: Set text color for better visibility on yellow
      }
    }).showToast();
  }
</script>

<?php

include "../universal/view-footer.php";
?>
