<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" id="add-button">Add</button>

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


          <!-- Need to link initiation year to this -->
          <div class="mb-3">
            <label for="MC" class="form-label">Membership Class</label>
            <?php
              $MembershipClasses = selectMembershipClassesForInput();
            ?>
            <select class="form-select" id="MC" name="MC">
              <?php while($MembershipClass = $MembershipClasses->fetch_assoc()) { ?>
                <option><?php echo $MembershipClass['MembershipClass']; ?></option>
              <?php } ?>
            </select>
          </div>


          
          <div class="mb-3">
            <label for="SongID" class="form-label">First Song</label>
            <?php
              $songList = selectSongsForInput();
            ?>
            <select class="form-select" id="SongID" name="SongID">
              <?php while($song = $songList->fetch_assoc()) { ?>
                <option ><?php echo $song['Title']; ?></option>
              <?php } ?>
            </select>
          </div>


          
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add Brother</button>



          
        </form>
      </div>
    </div>
  </div>
</div>
