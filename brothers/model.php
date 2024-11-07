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

?>
