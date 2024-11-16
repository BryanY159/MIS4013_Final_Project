<?php if($count == 1) { ?>
  <form method="post" action="">
    <input type="hidden" name="BID" value="<?php echo $brother['BrotherID'];?>">
    <input type = "hidden" name = "actionType" value = "Delete">
    <button type="submit" class="btn btn-danger" data-step="3" id="deleteButtonForID:<?php echo $brother['BrotherID'];?>">Delete</button>
  </form>
<?php }
else { ?>
  <form method="post" action="">
    <input type="hidden" name="BID" value="<?php echo $brother['BrotherID'];?>">
    <input type = "hidden" name = "actionType" value = "Delete">
    <button type="submit" class="btn btn-danger" id="deleteButtonForID:<?php echo $brother['BrotherID'];?>">Delete</button>
  </form>
<?php } ?>
