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
            <?php
              $sections = selectSectionsForInput();
            ?>
            <select class="form-select" id="SIDForID:<?php echo $brother['BrotherID'];?>" name="SID">
              <?php while($section = $sections->fetch_assoc()) { ?>
                <option value="<?php echo $section['SectionID']; ?>"><?php echo $section['SectionName']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="MC-IYForID:<?php echo $brother['BrotherID'];?>" class="form-label">Membership Class-Initiation Year</label>
            <?php
              $membershipClasses = selectMembershipClassesForInput();
            ?>
            <select class="form-select" id="MC-IYForID:<?php echo $brother['BrotherID'];?>" name="MC-IY">
              <?php while($membershipClass = $membershipClasses->fetch_assoc()) { ?>
                <option value="<?php echo $membershipClass['MembershipClass']; ?>|<?php echo $membershipClass['InitiationYear']; ?>">
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
                <option><?php echo $status['Status'];?></option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <p class="form-text">Please change "-1" for the following point values if the brother goes conditional.</p>
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
