<button type="button" class="btn btn-success" data-step="2" data-bs-toggle="modal" data-bs-target="#addAttendanceModal">Add</button>

<div class="modal fade" id="addAttendanceModal" tabindex="-1" aria-labelledby="addAttendanceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New Attendance</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="BID" class="form-label">Brother</label>
              <?php $brothers = selectBrothersForInput(); ?>
              <select class="form-select" id="BID" name="BID">
                <?php while($brother = $brothers->fetch_assoc()) { ?>
                  <option value="<?php echo $brother['BrotherID']; ?>"><?php echo $brother['FirstName']; ?> <?php echo $brother['LastName']; ?></option>
                <?php } ?>
              </select>  
            </div>
          <p>If no name(s) appears, then all Brothers currently have attendance records.</p>
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
