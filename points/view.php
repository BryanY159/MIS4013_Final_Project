<div class = "row">
  <div class = "col">
    <h1>Points</h1>
  </div>
  <div class = "col-auto">
    Temp
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Service</th>
        <th>Brotherhood</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $brothers->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td><?php echo $brother['ServicePoints'];?></td>
            <td><?php echo $brother['BrotherhoodPoints'];?></td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
