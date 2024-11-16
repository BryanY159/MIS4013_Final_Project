<?php

function selectSections() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT SectionName, COUNT(BrotherID) AS Count FROM Brothers B JOIN Sections S ON B.SectionID = S.SectionID GROUP BY SectionName");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectFamilies() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Family, COUNT(BrotherID) AS Count FROM Brothers B JOIN Sections S ON B.SectionID = S.SectionID GROUP BY Family;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMajors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Major, COUNT(*) AS Count
                                FROM (
                                    SELECT Major FROM Brothers
                                    UNION ALL
                                    SELECT Major2 FROM Brothers
                                ) AS CombinedMajor
                                WHERE Major IS NOT NULL AND Major <> ''
                                GROUP BY Major
                                ORDER BY Major");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMinors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Minor, COUNT(*) AS Count
                                FROM (
                                    SELECT Minor FROM Brothers
                                    UNION ALL
                                    SELECT Minor2 FROM Brothers
                                ) AS CombinedMinor
                                WHERE Minor IS NOT NULL AND Minor <> ''
                                GROUP BY Minor
                                ORDER BY Minor");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMembershipClasses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT MembershipClass, COUNT(BrotherID) AS Count FROM Brothers GROUP BY MembershipClass");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGraduationYears() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT GraduationYear, COUNT(BrotherID) AS Count FROM Brothers GROUP BY GraduationYear ORDER BY GraduationYear");
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
