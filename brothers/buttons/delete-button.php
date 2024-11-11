<form method="post" action="">
  <input type="hidden" name="BID" value="<?php echo $brother['BrotherID'];?>">
  <input type = "hidden" name = "actionType" value = "Delete">
  <button type="submit" class="btn btn-danger" id="deleteButtonForID:<?php echo $brother['BrotherID'];?>" onclick="return confirm('Are you sure?');">Delete</button>
</form>
