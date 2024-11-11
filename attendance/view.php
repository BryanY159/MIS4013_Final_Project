<div class = "row">
  <div class = "col">
    <h1>Attendance</h1>
  </div>
  <div class = "col-auto">
    <button class="btn btn-info">Need help?</button>
  </div>
</div>

<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <?php
          while($event = $events->fetch_assoc()) {
            $formattedDate = date("m-d", strtotime($event['EventDate'])); ?>
            <th><?php echo $formattedDate; ?> <?php echo $event['EventName']; ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $attendance->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <?php
              for ($i = 1; $i <= 10; $i++) {
                $eventStatus = $brother['Event_1_Status'];

              if($brother["Event_{$i}_Status"] == "Present") {
                $buttonClass = "btn btn-success dropdown-toggle";
              }
              else if($brother["Event_{$i}_Status"] == "Excused") {
                $buttonClass = "btn btn-warning dropdown-toggle";
              }
              else {
                $buttonClass = "btn btn-danger dropdown-toggle";
              }
            ?>

            <td>
              <div class="dropdown">
                <button class="<?php echo $buttonClass;?>" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px;">
                  <?php echo $brother["Event_{$i}_Status"];?>
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">Present</button></li>
                  <li><button class="dropdown-item" type="button">Excused</button></li>
                  <li><button class="dropdown-item" type="button">Unexcused</button></li>
                </ul>
              </div>
            </td>
            <?php } ?>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
