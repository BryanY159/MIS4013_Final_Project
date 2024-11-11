<div class = "row">
  <div class = "col">
    <h1>Attendance</h1>
  </div>
  <div class = "col-auto">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" id="add-button">Add</button>
    <button class="btn btn-info">Need help?</button>
  </div>
</div>

<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Total</th>
        <th></th>
        <?php
          while($event = $events->fetch_assoc()) {
            $formattedDate = date("m-d", strtotime($event['EventDate'])); ?>
            <th style="white-space: nowrap;"><?php echo $formattedDate; ?> <?php echo $event['EventName']; ?></th>
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
                  <button class="btn btn-danger btn-sm"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
                else { ?>
                  <button class="btn btn-success btn-sm"><?php echo $brother['Unexcused_Absences'];?></button>
                <?php }
              ?>
            </td>
            <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#addModal" id="add-button">Edit</button></td>
            <?php
              for ($i = 1; $i <= 10; $i++) {
                $eventStatus = $brother['Event_1_Status'];

              if($brother["Event_{$i}_Status"] == "Present") {
                $buttonClass = "btn btn-success dropdown-toggle";
              }
              else if($brother["Event_{$i}_Status"] == "Excused") {
                $buttonClass = "btn btn-secondary dropdown-toggle";
              }
              else {
                $buttonClass = "btn btn-danger dropdown-toggle";
              }
            ?>

            <td>
              <div class="dropdown">
                <button class="<?php echo $buttonClass;?>" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 120px;">
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
