<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle?></title>
    <link rel="icon" type="image/x-icon" href="/universal/img/kky-crest.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- ECharts -->
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Toastify.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    
    <!-- Intro.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css">
    <script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>

    <style>
      .table thead th {
        position: sticky;
        top: 0;
        background-color: white; /* Set to match the table's background */
        z-index: 1; /* Ensure headers stay above other table rows */
      }
    </style>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="/universal/img/kky-banner.png" width="300px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="<?php echo $homeClass?>" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="<?php echo $brothersClass?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brothers
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/brothers/brothers.php">Full Roster</a></li>
                <li><a class="dropdown-item" href="/charts/charts.php">Charts</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="<?php echo $pointsClass?>" href="/points/points.php">Points</a>
            </li>
            <li class="nav-item">
              <a class="<?php echo $attendanceClass?>" href="/attendance/attendance.php">Attendance</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div style="margin: 20px;">
