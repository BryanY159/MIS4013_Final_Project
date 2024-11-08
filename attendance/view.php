<div class = "row">
  <div class = "col">
    <h1>Attendance</h1>
  </div>
  <div class = "col-auto">
    <button class="btn btn-info">Need help?</button>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $attendance->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td><?php echo $brother['Event_1_Status'];?></td>
            <td><?php echo $brother['Event_2_Status'];?></td>
            <td><?php echo $brother['Event_3_Status'];?></td>
            <td><?php echo $brother['Event_4_Status'];?></td>
            <td><?php echo $brother['Event_5_Status'];?></td>
            <td><?php echo $brother['Event_6_Status'];?></td>
            <td><?php echo $brother['Event_7_Status'];?></td>
            <td><?php echo $brother['Event_8_Status'];?></td>
            <td><?php echo $brother['Event_9_Status'];?></td>
            <td><?php echo $brother['Event_10_Status'];?></td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
