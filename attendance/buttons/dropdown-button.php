<?php
for ($i = 1; $i <= 10; $i++) {
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
      <li>
        <form method="POST" action="">
          <?php if(isset($_POST['rowBID'])) { ?>
          <input type="hidden" name="rowBID" value="<?php echo $brother['BrotherID']; ?>">
          <?php } ?>
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="EID" value="<?php echo $i; ?>">
          <input type="hidden" name="Status" value="Present">
          <input type="hidden" name="actionType" value="Edit2">
          <button class="dropdown-item" type="submit">Present</button>
        </form>
      </li>
      <li>
        <form method="POST" action="">
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="EID" value="<?php echo $i; ?>">
          <input type="hidden" name="Status" value="Excused">
          <input type="hidden" name="actionType" value="Edit2">
          <button class="dropdown-item" type="submit">Excused</button>
        </form>
      </li>
      <li>
        <form method="POST" action="">
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="EID" value="<?php echo $i; ?>">
          <input type="hidden" name="Status" value="Unexcused">
          <input type="hidden" name="actionType" value="Edit2">
          <button class="dropdown-item" type="submit">Unexcused</button>
        </form>
      </li>
    </ul>
  </div>
</td>
<?php } ?>
