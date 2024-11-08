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
        <td></td>
        <th>Brotherhood</th>
        <td></td>
      </tr>
    </thead>
    <tbody>
      <?php
        while($brother = $brothers->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $brother['FirstName'];?> <?php echo $brother['LastName'];?></td>
            <td><?php echo $brother['ServicePoints'];?></td>
            <td>
              <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button> 
              <button class="btn btn-primary"><i class="bi bi-dash-circle-fill"></i></button>
            </td>
            <td><?php echo $brother['BrotherhoodPoints'];?></td>
            <td>
              <button class="btn btn-danger"><i class="bi bi-plus-circle-fill"></i></button> 
              <button class="btn btn-danger"><i class="bi bi-dash-circle-fill"></i></button>
            </td>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
