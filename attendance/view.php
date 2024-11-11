<div class = "row">
  <div class = "col">
    <h1>Attendance</h1>
  </div>
  <div class = "col-auto">
    <button class="btn btn-success">Add</button>
    <button class="btn btn-info">Need help?</button>
  </div>
</div>

<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
  <table class="table">
    <thead>
      <tr>
        <th style="width: 50px; text-align: center; word-wrap: break-word; white-space: normal;">Name</th>
        <th style="width: 50px; text-align: center;">Total</th>
        <th style="width: 50px; text-align: center;"></th>
        <?php
          while($event = $events->fetch_assoc()) {
            $formattedDate = date("m-d", strtotime($event['EventDate'])); ?>
            <th style="width: 100px; text-align: center; word-wrap: break-word; white-space: normal;"><?php echo $formattedDate; ?> <?php echo $event['EventName']; ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $attendance->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td>
              <?php
                if($brother['Unexcused_Absences'] > 4) { ?>
                  <button class="btn btn-danger btn-sm" style="width: 50px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
                else { ?>
                  <button class="btn btn-success btn-sm" style="width: 50px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
              ?>
            </td>
            <td><button class="btn btn-warning" style="width: 50px;">Edit</button></td>
            <?php
              for ($i = 1; $i <= 10; $i++) {
                $eventStatus = $brother['Event_1_Status'];

              if($brother["Event_{$i}_Status"] == "Present") {
                $buttonClass = "btn btn-success btn-sm dropdown-toggle";
              }
              else if($brother["Event_{$i}_Status"] == "Excused") {
                $buttonClass = "btn btn-secondary btn-sm dropdown-toggle";
              }
              else {
                $buttonClass = "btn btn-danger btn-sm dropdown-toggle";
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
