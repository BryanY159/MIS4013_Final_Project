<?php $delete-data-step = "";
if($count == 1) { ?>
  $delete-data-step = "data-step='3'";
<?php } ?>

<form method="post" action="">
    <input type="hidden" name="BID" value="<?php echo $brother['BrotherID'];?>">
    <input type = "hidden" name = "actionType" value = "Delete">
    <button type="submit" class="btn btn-danger" <?php echo $delete-data-step; ?> id="deleteButtonForID:<?php echo $brother['BrotherID'];?>">Delete</button>
</form>
