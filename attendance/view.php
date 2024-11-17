<div class = "row">
  <div class = "col">
    <h1>Attendance</h1>
  </div>
  <div class = "col-auto">
    <?php if (!isset($_POST['rowBID'])) { ?>
      <?php include "buttons/add-button.php"; ?>
      <button class="btn btn-info" onclick="startIntro()">Need help?</button>
    <?php } ?>
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
        $count = 0; // for help button
        while($brother = $brothers->fetch_assoc()) { 
        $count++;

        $total_data_step = "";
        $dropdown_data_step = "";
        $edit_data_step = "";
        if($count == 1) {
          $total_data_step = "1";
          $dropdown_data_step = "3";
          $edit_data_step = "4";
        }
          ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td>
              <?php
                if($brother['Unexcused_Absences'] > 4) { ?>
                  <button class="btn btn-danger btn-sm" data-step="<?php echo $total_data_step;?>" style="width: 45px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
                else { ?>
                  <button class="btn btn-success btn-sm" data-step="<?php echo $total_data_step;?>" style="width: 45px;"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
              ?>
            </td>
            <td>
              <?php if (isset($_POST['rowBID'])) { ?>
                <button type="submit" onclick="location.href='attendance.php'" class="btn btn-danger btn-sm">Back</button>
              <?php } 
              else { ?>
                <form method="post" action="attendance.php">
                  <input type="hidden" name="rowBID" value="<?php echo $brother['BrotherID']; ?>">
                  <button type="submit" class="btn btn-warning btn-sm" data-step="<?php echo $edit_data_step;?>">Edit</button>
                </form>
              <?php } ?>
            </td>
            <?php include "buttons/dropdown-button.php"; ?>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

<?php include "buttons/help-button-function.php";?>
