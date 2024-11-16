<button type="button" class="btn btn-warning" data-step="<?php echo $edit_data_step;?>" data-bs-toggle="modal" data-bs-target="#editPointsModalForID:<?php echo $brother['BrotherID'];?>" id="editButtonForID<?php echo $brother['BrotherID'];?>">Edit</button>

<div class="modal fade" id="editPointsModalForID:<?php echo $brother['BrotherID'];?>" tabindex="-1" aria-labelledby="editPointsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editPointsModalLabelForID:<?php echo $brother['BrotherID'];?>">Edit Points</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start">
        <form method="post" action="">
          <div class="mb-3">
            <label for="SPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Service Points</label>
            <input type="text" class="form-control" id="SPForID:<?php echo $brother['BrotherID'];?>" name="SP" value="<?php echo $brother['ServicePoints'];?>">
          </div>
          <div class="mb-3">
            <label for="BPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Brotherhood Points</label>
            <input type="text" class="form-control" id="BPForID:<?php echo $brother['BrotherID'];?>" name="BP" value="<?php echo $brother['BrotherhoodPoints'];?>">
          </div>
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <?php
            if(isset($_POST['filter'])) {
              switch ($_POST['filter']) {
                case "Complete":
                  ?> <input type="hidden" name="filter" value="Complete"> <?php
                  break;
                case "Incomplete":
                  ?> <input type="hidden" name="filter" value="Incomplete"> <?php
                  break;
              }
            }
          ?>
          <button type="submit" name="editPointsForm" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
