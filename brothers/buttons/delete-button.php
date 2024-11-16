<?php $delete_data_step = "";
if($count == 1) {
  $delete_data_step = "3";
} ?>

<form method="post" action="">
    <input type="hidden" name="BID" value="<?php echo $brother['BrotherID'];?>">
    <input type = "hidden" name = "actionType" value = "Delete">
    <button type="submit" class="btn btn-danger" data-step="<?php echo $delete_data_step; ?>" id="deleteButtonForID:<?php echo $brother['BrotherID'];?>">Delete</button>
</form>
