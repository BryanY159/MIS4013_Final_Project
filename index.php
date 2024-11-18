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
    <p class="card-text">This website contains all KKΨ-relevant information for our chapter. Please check out what pages we have below, or click around the NavBar.</p>
  </div>
</div>

<div class = "row">
  <div class="col-6">
    <div class="card">
      <h5 class="card-header">Brothers - Full Roster</h5>
      <div class="card-body">
        <p class="card-text">Here you can view all infomation about the brothers in our chapter.</p>
        <a href="brothers/brothers.php" class="btn btn-danger">Full Roster</a>
      </div>
    </div>
    <div class="card">
      <h5 class="card-header">Points</h5>
      <div class="card-body">
        <p class="card-text">Here you can view how we're doing with our point requirements.</p>
        <a href="points/points.php" class="btn btn-primary">Points</a>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card">
      <h5 class="card-header">Brothers - Charts</h5>
      <div class="card-body">
        <p class="card-text">Here you can view charts of our chapter demographics.</p>
        <a href="charts/charts.php" class="btn btn-warning">Charts</a>
      </div>
    </div>
    <div class="card">
      <h5 class="card-header">Attendance</h5>
      <div class="card-body">
        <p class="card-text">Here you can view how we're doing with attendance for events.</p>
        <a href="attendance/attendance.php" class="btn btn-success">Attendance</a>
      </div>
    </div>
  </div>
</div>

<?php
include "universal/view-footer.php";
?>
