<?php 
include '../Includes/dbcon.php';
include '../Includes/session.php';


    $query = "SELECT
    C.ClassID,
    C.ClassName,
    C.ClassScheduleDate,
    T.TeacherName,
    S.StudentName,
    SA.StudentStatus
FROM
    Class C
JOIN
    Teacher T ON C.TeacherNIK = T.TeacherNIK
LEFT JOIN
    StudentAttendance SA ON C.ClassID = SA.ClassID
LEFT JOIN
    Student S ON SA.StudentID = S.StudentID;";

    $rs = $conn->query($query);
    $num = $rs->num_rows;
    $rrw = $rs->fetch_assoc();


    // kurang dibawah php html melihat jadwal kelas
?>






