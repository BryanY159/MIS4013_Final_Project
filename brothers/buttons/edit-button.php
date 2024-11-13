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
          <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
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
                <select class="form-select" id="MC-IYForID:<?php echo $brother['BrotherID'];?>" name="MC-IY">
                  <option value="Zeta Mu|2021"<?php if ("Zeta Mu" == $brother['MembershipClass']) echo 'selected';?>>Zeta Mu-2021</option>
                  <option value="Zeta Nu|2022"<?php if ("Zeta Nu" == $brother['MembershipClass']) echo 'selected';?>>Zeta Nu-2022</option>
                  <option value="Zeta Xi|2023"<?php if ("Zeta Xi" == $brother['MembershipClass']) echo 'selected';?>>Zeta Xi-2023</option>
                  <option value="Zeta Omicron|2024"<?php if ("Zeta Omicron" == $brother['MembershipClass']) echo 'selected';?>>Zeta Omicron-2024</option>
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
            </div>
            
            <!-- Right Column -->
            <div class="col-md-6">
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
                <select class="form-select" id="StatusForID:<?php echo $brother['BrotherID'];?>" name="Status">
                  <option <?php if ("Active" == $brother['Status']) echo 'selected'; ?>>Active</option>
                  <option <?php if ("Conditional" == $brother['Status']) echo 'selected'; ?>>Conditional</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="SPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Current Service Points</label>
                <input type="text" class="form-control" id="SPForID:<?php echo $brother['BrotherID'];?>" name="SP" value="<?php echo $brother['ServicePoints'];?>">
              </div>
              <div class="mb-3">
                <label for="BPForID:<?php echo $brother['BrotherID'];?>" class="form-label">Current Brotherhood Points</label>
                <input type="text" class="form-control" id="BPForID:<?php echo $brother['BrotherID'];?>" name="BP" value="<?php echo $brother['BrotherhoodPoints'];?>">
              </div>
              <div class="mb-3">
                <p class="form-text">Please change the above point values to "-1" if the brother goes conditional. You can also edit this on the Points page.</p>
              </div>
            </div>
          </div>
          <input type="hidden" name="BID" value="<?php echo $brother['BrotherID']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" name="editBrotherForm" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
