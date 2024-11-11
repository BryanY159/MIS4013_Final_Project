  if($eventStatus = "Present") {
    $buttonClass = btn btn-success dropdown-toggle;
  }
  else if($eventStatus = "Excused") {
    $buttonClass = btn btn-warning dropdown-toggle;
  }
  else {
    $buttonClass = btn btn-danger dropdown-toggle;
  }
?>

<td>
  <div class="dropdown">
    <button class="<?php echo $buttonClass;?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php echo $eventStatus;?>
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" type="button">Present</button></li>
      <li><button class="dropdown-item" type="button">Excused</button></li>
      <li><button class="dropdown-item" type="button">Unexcused</button></li>
    </ul>
  </div>
</td>

<?php
