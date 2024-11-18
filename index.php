<?php
$pageTitle = "Home";
$homeClass = "nav-link active";
$brothersClass = "nav-link dropdown-toggle";
$pointsClass = "nav-link";
$attendanceClass = "nav-link";
include "universal/view-header.php";
?>

<h1>Home</h1>

<div class="card">
  <h5 class="card-header">Welcome!</h5>
  <div class="card-body">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Brothers - Full Roster</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="brothers/brothers.php" class="btn btn-primary">Full Roster</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Brothers - Charts</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="charts/charts.php" class="btn btn-primary">Charts</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Points</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="points/points.php" class="btn btn-primary">Points</a>
  </div>
</div>
<div class="card">
  <h5 class="card-header">Attendance</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="attendance/attendance.php" class="btn btn-primary">Attendance</a>
  </div>
</div>

<?php
include "universal/view-footer.php";
?>
