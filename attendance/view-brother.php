<h1>Attendance</h1>
    
<div class="table-responsive" style="max-height: 80vh; overflow-y: auto;">
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
            <td>
              <button type="submit" onclick="location.href='attendance.php'" class="btn btn-danger btn-sm">Back</button>
            </td>
            <?php include "buttons/dropdown-button.php"; ?>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
