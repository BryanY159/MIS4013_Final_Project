<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAttendanceModalForID:<?php echo $brother['BrotherID'];?>" id="editButtonForID<?php echo $brother['BrotherID'];?>">Edit</button>

<div class="modal fade" id="editAttendanceModalForID:<?php echo $brother['BrotherID'];?>" tabindex="-1" aria-labelledby="addBrotherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editAttendanceModalLabelForID:<?php echo $brother['BrotherID'];?>">Edit Brother</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
              <?php $i = 0;
                while($event = $events->fetch_assoc()) { 
                  $i++; 
                  if($i <= 5) { ?>
                  <div class="mb-3">
                    <?php $formattedDate = date("m-d", strtotime($event['EventDate']));?>
                    <label for="Event<?php echo $i;?>forID:<?php echo $brother['BrotherID'];?>" class="form-label">
                      <?php echo $formattedDate; ?> <?php echo $event['EventName'];?>
                    </label>
                    <select class="form-select" id="Event<?php echo $i;?>forID:<?php echo $brother['BrotherID'];?>" name="EID<?php echo $i;?>">
                      <option value="Present" <?php if ("Present" == $brother['Event_{$i}_Status']) echo 'selected'; ?>>Present</option>
                      <option value="Excused" <?php if ("Excused" == $brother['Event_{$i}_Status']) echo 'selected'; ?>>Excused</option>
                      <option value="Unexcused" <?php if ("Unexcused" == $brother['Event_{$i}_Status']) echo 'selected'; ?>>Unexcused</option>
                    </select>
                  </div>
                <?php } ?> 
              <?php } ?>
              </div>
            
            <!-- Right Column -->
            <div class="col-md-6">
              
            </div>
            
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="actionType" value="Edit1">
          <button type="submit" name="editAttendanceForm" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>