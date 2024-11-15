<?php

function selectAttendance() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
        SELECT 
              FirstName,
              LastName,
              MAX(CASE WHEN EventID = 1 THEN AttendanceStatus END) AS Event_1_Status,
              MAX(CASE WHEN EventID = 2 THEN AttendanceStatus END) AS Event_2_Status,
              MAX(CASE WHEN EventID = 3 THEN AttendanceStatus END) AS Event_3_Status,
              MAX(CASE WHEN EventID = 4 THEN AttendanceStatus END) AS Event_4_Status,
              MAX(CASE WHEN EventID = 5 THEN AttendanceStatus END) AS Event_5_Status,
              MAX(CASE WHEN EventID = 6 THEN AttendanceStatus END) AS Event_6_Status,
              MAX(CASE WHEN EventID = 7 THEN AttendanceStatus END) AS Event_7_Status,
              MAX(CASE WHEN EventID = 8 THEN AttendanceStatus END) AS Event_8_Status,
              MAX(CASE WHEN EventID = 9 THEN AttendanceStatus END) AS Event_9_Status,
              MAX(CASE WHEN EventID = 10 THEN AttendanceStatus END) AS Event_10_Status,
              SUM(CASE WHEN A.AttendanceStatus = 'Unexcused' THEN 1 ELSE 0 END) AS Unexcused_Absences
          FROM 
              Attendance A
          JOIN 
              Brothers B ON A.BrotherID = B.BrotherID
          GROUP BY 
              FirstName, LastName
          ORDER BY
              FirstName, LastName;
        ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectEvents() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM Events ORDER BY EventDate;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editAttendance2($BID, $EID, $Status) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Attendance SET AttendanceStatus = ? WHERE BrotherID = ? AND EventID = ?");
        $stmt->bind_param("sii", $Status, $BID, $EID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
