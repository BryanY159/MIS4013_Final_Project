<?php

function selectBrothers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT FirstName, LastName, ServicePoints, BrotherhoodPoints FROM Brothers WHERE ServicePoints >= 0;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
