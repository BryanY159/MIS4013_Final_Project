<h1>Brothers</h1>

<div class="table-responsive">
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
            <td><?php echo $brother['Major'];?></td>
            <td><?php echo $brother['Minor'];?></td>
            <td>Edit</td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
