<div class = "row">
  <div class = "col">
    <h1>Full Roster</h1>
  </div>
  <div class = "col-auto">
    <?php include "buttons/add-button.php";?>
    <button class="btn btn-info">Need help?</button>
  </div>
</div>

<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Section</th>
        <th>Status</th>
        <th>Class</th>
        <th>Initiated</th>
        <th>Graduates</th>
        <th>Major(s)</th>
        <th>Minor(s)</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $brothers->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td><?php echo $brother['SectionName'];?></td>
            <td><?php echo $brother['Status'];?></td>
            <td><?php echo $brother['MembershipClass'];?></td>
            <td><?php echo $brother['InitiationYear'];?></td>
            <td><?php echo $brother['GraduationYear'];?></td>
            <td>
              <?php 
                echo $brother['Major'];
                if (!empty($brother['Major2'])) {
                  echo "/".$brother['Major2'];
                }
              ?>
            </td>
            <td>
                <?php 
                  echo $brother['Minor'];
                  if (!empty($brother['Minor2'])) {
                    echo "/".$brother['Minor2'];
                  }
                ?>
            </td>
            <td><?php include "buttons/edit-button.php";?></td>
            <td><?php include "buttons/delete-button.php";?></td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

<?php include "buttons/delete-button-alert.php;" ?>
