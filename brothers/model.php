<?php

function selectBrothers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM Brothers B JOIN Sections S ON B.SectionID = S.SectionID ORDER BY FirstName, LastName;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMembershipClassesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Distinct MembershipClass, InitiationYear FROM Brothers ORDER BY InitiationYear");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectStatusesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Distinct Status FROM Brothers");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSectionsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SectionID, SectionName FROM Sections");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function addBrother($FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
	INSERT INTO 
        Brothers (FirstName, LastName, MembershipClass, InitiationYear, GraduationYear, Major, Major2, Minor, Minor2, Status, SectionID, ServicePoints, BrotherhoodPoints) 
	Values   (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
 	");
        $stmt->bind_param("sssiisssssiii", $FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editBrother($BID, $FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Brothers SET FirstName = ?, SET LastName = ?, SET MembershipClass = ?, SET InitiationYear = ?, SET GraduationYear = ?, 
						SET Major = ?, SET Major2 = ?, SET Minor = ?, SET Minor2 = ?, SET Status = ?, SET SectionID = ?, 
      						SET ServicePoints = ?, SET BrotherhoodPoints = ? WHERE BrotherID = ?");
        $stmt->bind_param("sssiisssssiiii", $FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP, $BID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBrother($BID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Brothers WHERE BrotherID = ?");
        $stmt->bind_param("i", $BID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
