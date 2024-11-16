<?php

function selectBrothers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT BrotherID, FirstName, LastName, ServicePoints, BrotherhoodPoints FROM Brothers WHERE ServicePoints >= 0 ORDER BY FirstName, LastName;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editPoints($BID, $SP, $BP) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Brothers SET ServicePoints = ?, BrotherhoodPoints = ? WHERE BrotherID = ?");
        $stmt->bind_param("iii", $SP, $BP, $BID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
