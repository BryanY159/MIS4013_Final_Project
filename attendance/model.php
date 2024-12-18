<?php

function selectAttendance() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
        SELECT 
              A.BrotherID,
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
              A.BrotherID, FirstName, LastName
          ORDER BY
              FirstName, LastName
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

function selectBrother($BID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT 
              A.BrotherID,
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
          WHERE
              A.BrotherID = ?
          GROUP BY 
              A.BrotherID, FirstName, LastName
          ORDER BY
              FirstName, LastName
        ");      
        $stmt->bind_param("i", $BID);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;

    } catch (Exception $e) {
        if (isset($conn)) {
            $conn->close();
        }
        throw $e; // Rethrow exception for handling elsewhere
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

function selectBrothersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT B.BrotherID, B.FirstName, B.LastName
                                FROM Brothers B
                                LEFT JOIN Attendance A ON B.BrotherID = A.BrotherID
                                WHERE A.BrotherID IS NULL");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function addAttendance($BID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
        INSERT INTO Attendance (BrotherID, EventID, AttendanceStatus)
        VALUES
            (?, 1, 'Present'),
            (?, 2, 'Present'),
            (?, 3, 'Present'),
            (?, 4, 'Present'),
            (?, 5, 'Present'),
            (?, 6, 'Present'),
            (?, 7, 'Present'),
            (?, 8, 'Present'),
            (?, 9, 'Present'),
            (?, 10, 'Present')
        ");
        $stmt->bind_param("iiiiiiiiii", $BID, $BID, $BID, $BID, $BID, $BID, $BID, $BID, $BID, $BID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editAttendance($BID, $EID, $Status) {
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
