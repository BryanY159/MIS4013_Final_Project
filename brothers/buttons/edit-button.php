<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBrotherModalForID:<?php echo $brother['BrotherID'];?>" id="editButtonForID<?php echo $brother['BrotherID'];?>">Edit</button>

<div class="modal fade" id="editBrotherModalForID:<?php echo $brother['BrotherID'];?>" tabindex="-1" aria-labelledby="addBrotherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editBrotherModalLabelForID:<?php echo $brother['BrotherID'];?>">Edit Brother</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="FNForID:<?php echo $brother['BrotherID'];?>" class="form-label">First Name</label>
            <input type="text" class="form-control" id="FNForID:<?php echo $brother['BrotherID'];?>" name="FN" value="<?php echo $brother['FirstName'];?>">
          </div>
          <div class="mb-3">
            <label for="LNForID:<?php echo $brother['BrotherID'];?>" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="LNForID:<?php echo $brother['BrotherID'];?>" name="LN" value="<?php echo $brother['LastName'];?>">
          </div>
          <div class="mb-3">
            <label for="SIDForID:<?php echo $brother['BrotherID'];?>" class="form-label">Section</label>
            <select class="form-select" id="SIDForID:<?php echo $brother['BrotherID'];?>" name="SID">
              <option value="1" <?php if (1 == $brother['SectionID']) echo 'selected'; ?>>Flute</option>
              <option value="2" <?php if (2 == $brother['SectionID']) echo 'selected'; ?>>Clarinet</option>
              <option value="3" <?php if (3 == $brother['SectionID']) echo 'selected'; ?>>Saxophone</option>
              <option value="4" <?php if (4 == $brother['SectionID']) echo 'selected'; ?>>Trumpet</option>
              <option value="5" <?php if (5 == $brother['SectionID']) echo 'selected'; ?>>Mellophone</option>
              <option value="6" <?php if (6 == $brother['SectionID']) echo 'selected'; ?>>Trombone</option>
              <option value="7" <?php if (7 == $brother['SectionID']) echo 'selected'; ?>>Baritone</option>
              <option value="8" <?php if (8 == $brother['SectionID']) echo 'selected'; ?>>Sousaphone</option>
              <option value="9" <?php if (9 == $brother['SectionID']) echo 'selected'; ?>>Snare</option>
              <option value="10" <?php if (10 == $brother['SectionID']) echo 'selected'; ?>>Bass Drum</option>
              <option value="11" <?php if (11 == $brother['SectionID']) echo 'selected'; ?>>Cymbals</option>
              <option value="12" <?php if (12 == $brother['SectionID']) echo 'selected'; ?>>Tenors</option>
              <option value="13" <?php if (13 == $brother['SectionID']) echo 'selected'; ?>>Pit</option>
              <option value="14" <?php if (14 == $brother['SectionID']) echo 'selected'; ?>>Guard</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="MC-IYForID:<?php echo $brother['BrotherID'];?>" class="form-label">Membership Class-Initiation Year</label>
            <?php
              $membershipClasses = selectMembershipClassesForInput();
            ?>
            <select class="form-select" id="MC-IYForID:<?php echo $brother['BrotherID'];?>" name="MC-IY">
              <?php while($membershipClass = $membershipClasses->fetch_assoc()) { ?>
                <option value="<?php echo $membershipClass['MembershipClass']; ?>|<?php echo $membershipClass['InitiationYear']; ?>"
                  <?php if ($membershipClass['MembershipClass'] == $brother['MembershipClass']) echo 'selected';?>>
                  <?php echo $membershipClass['MembershipClass']."-".$membershipClass['InitiationYear'];?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="GYForID:<?php echo $brother['BrotherID'];?>" class="form-label">Graduation Year</label>
            <input type="text" class="form-control" id="GYForID:<?php echo $brother['BrotherID'];?>" name="GY" value="<?php echo $brother['GraduationYear'];?>">
          </div>
          <div class="mb-3">
            <label for="MajorForID:<?php echo $brother['BrotherID'];?>" class="form-label">Major (required)</label>
            <input type="text" class="form-control" id="MajorForID:<?php echo $brother['BrotherID'];?>" name="Major" value="<?php echo $brother['Major'];?>">
          </div>
          <div class="mb-3">
            <label for="Major2ForID:<?php echo $brother['BrotherID'];?>" class="form-label">2nd Major (optional)</label>
            <input type="text" class="form-control" id="Major2ForID:<?php echo $brother['BrotherID'];?>" name="Major2" value="<?php echo $brother['Major2'];?>">
          </div>
          <div class="mb-3">
            <label for="MinorForID:<?php echo $brother['BrotherID'];?>" class="form-label">Minor (optional)</label>
            <input type="text" class="form-control" id="MinorForID:<?php echo $brother['BrotherID'];?>" name="Minor" value="<?php echo $brother['Minor'];?>">
          </div>
          <div class="mb-3">
            <label for="Minor2ForID:<?php echo $brother['BrotherID'];?>" class="form-label">2nd Minor (optional)</label>
            <input type="text" class="form-control" id="Minor2ForID:<?php echo $brother['BrotherID'];?>" name="Minor2" value="<?php echo $brother['Minor2'];?>">
          </div>
          <div class="mb-3">
            <label for="StatusForID:<?php echo $brother['BrotherID'];?>" class="form-label">Status</label>
            <?php
              $statuses = selectStatusesForInput();
            ?>
            <select class="form-select" id="StatusForID:<?php echo $brother['BrotherID'];?>" name="Status">
              <?php while($status = $statuses->fetch_assoc()) { ?>
                <option <?php if ($status['Status'] == $brother['Status']) echo 'selected'; ?>>
                  <?php echo $status['Status'];?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <p class="form-text">Please change the point values to "-1" if the brother goes conditional.</p>
          </div>
          <div class="mb-3">
            <label for="SPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Initial Service Points</label>
            <input type="text" class="form-control" id="SPForID:<?php echo $brother['BrotherID'];?>" name="SP" value="<?php echo $brother['ServicePoints'];?>">
          </div>
          <div class="mb-3">
            <label for="BPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Initial Brotherhood Points</label>
            <input type="text" class="form-control" id="BPForID:<?php echo $brother['BrotherID'];?>" name="BP" value="<?php echo $brother['BrotherhoodPoints'];?>">
          </div>
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Edit Brother</button>   
        </form>
      </div>
    </div>
  </div>
</div>
