<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBrotherModal">Add</button>

<!-- Add Modal -->
<div class="modal fade" id="addBrotherModal" tabindex="-1" aria-labelledby="addBrotherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New Brother</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="FN" class="form-label">First Name</label>
            <input type="text" class="form-control" id="FN" name="FN">
          </div>
          <div class="mb-3">
            <label for="LN" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="LN" name="LN">
          </div>
          <div class="mb-3">
            <label for="MC-IY" class="form-label">Membership Class-Initiation Year</label>
            <?php
              $MembershipClasses = selectMembershipClassesForInput();
            ?>
            <select class="form-select" id="MC-IY" name="MC-IY">
              <?php while($MembershipClass = $MembershipClasses->fetch_assoc()) { ?>
                <option value="<?php echo $MembershipClass['MembershipClass']; ?>|<?php echo $MembershipClass['InitiationYear']; ?>">
                  <?php echo $MembershipClass['MembershipClass']."-".$MembershipClass['InitiationYear'];?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="GY" class="form-label">Graduation Year</label>
            <input type="text" class="form-control" id="GY" name="GY">
          </div>
          <div class="mb-3">
            <label for="Major" class="form-label">Major</label>
            <input type="text" class="form-control" id="Major" name="Major">
          </div>
          <div class="mb-3">
            <label for="Major2" class="form-label">Major2</label>
            <input type="text" class="form-control" id="Major2" name="Major2">
          </div>
          <div class="mb-3">
            <label for="Minor" class="form-label">Minor</label>
            <input type="text" class="form-control" id="Minor" name="Minor">
          </div>
          <div class="mb-3">
            <label for="Minor2" class="form-label">Minor2</label>
            <input type="text" class="form-control" id="Minor2" name="Minor2">
          </div>
          <div class="mb-3">
            <label for="Status" class="form-label">Status</label>
            <?php
              $Statuses = selectStatusesForInput();
            ?>
            <select class="form-select" id="Status" name="Status">
              <?php while($Status = $Statuses->fetch_assoc()) { ?>
                <option><?php echo $Status['Status'];?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="SID" class="form-label">Section</label>
            <?php
              $Sections = selectSectionsForInput();
            ?>
            <select class="form-select" id="SID" name="SID">
              <?php while($Section = $Sections->fetch_assoc()) { ?>
                <option value="<?php echo $song['SectionID']; ?>"><?php echo $song['SectionName']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="SP" class="form-label">Initial Service Points</label>
            <input type="text" class="form-control" id="SP" name="SP">
          </div>
          <div class="mb-3">
            <label for="BP" class="form-label">Initial Brotherhood Points</label>
            <input type="text" class="form-control" id="BP" name="BP">
          </div>
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add Brother</button>   
        </form>
      </div>
    </div>
  </div>
</div>
