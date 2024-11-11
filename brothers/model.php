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

function selectMembershipClassForInput() {
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

function selectStatusForInput() {
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

function addBrother($FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO 
        Brothers (FirstName, LastName, MembershipClass, InitiationYear, GraduationYear, Major, Major2, Minor, Minor2, Status, SectionID, ServicePoints, BrotherhoodPoints) 
		Values   (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiisssssiii", $FN, $LN, $MC, $IY, $GY, $Major, $Major2, $Minor, $Minor2, $Status, $SID, $SP, $BP);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
