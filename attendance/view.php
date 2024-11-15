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
        <th style="width: 160px; word-wrap: break-word; white-space: normal;">Name</th>
        <th style="width: 45px; text-align: center;">Total</th>
        <th style="width: 45px; text-align: center;"></th>
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
                  <button class="btn btn-danger btn-sm" style="width: 45px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
                else { ?>
                  <button class="btn btn-success btn-sm" style="width: 45px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
              ?>
            </td>
            <td><button class="btn btn-warning btn-sm" style="width: 45px;">Edit</button></td>
            <?php include "dropdown-buttons.php"; ?>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
