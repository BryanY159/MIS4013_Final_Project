<?php

function selectAttendance() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
        SELECT 
              B.FirstName,
              B.LastName,
              MAX(CASE WHEN A.EventID = 1 THEN A.AttendanceStatus END) AS Event_1_Status,
              MAX(CASE WHEN A.EventID = 2 THEN A.AttendanceStatus END) AS Event_2_Status,
              MAX(CASE WHEN A.EventID = 3 THEN A.AttendanceStatus END) AS Event_3_Status,
              MAX(CASE WHEN A.EventID = 4 THEN A.AttendanceStatus END) AS Event_4_Status,
              MAX(CASE WHEN A.EventID = 5 THEN A.AttendanceStatus END) AS Event_5_Status,
              MAX(CASE WHEN A.EventID = 6 THEN A.AttendanceStatus END) AS Event_6_Status,
              MAX(CASE WHEN A.EventID = 7 THEN A.AttendanceStatus END) AS Event_7_Status,
              MAX(CASE WHEN A.EventID = 8 THEN A.AttendanceStatus END) AS Event_8_Status,
              MAX(CASE WHEN A.EventID = 9 THEN A.AttendanceStatus END) AS Event_9_Status,
              MAX(CASE WHEN A.EventID = 10 THEN A.AttendanceStatus END) AS Event_10_Status
          FROM 
              Attendance A
          JOIN 
              Brothers B ON A.BrotherID = B.BrotherID
          GROUP BY 
              B.FirstName, B.LastName;
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

?>
