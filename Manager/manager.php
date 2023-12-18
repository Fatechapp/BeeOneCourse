<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $teacherNIK = $_POST['teacherNIK'];
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $address = $POST ['$address'];
        $educationalLevel  = $POST ['educationalLevel'];
        $mandarinName = $POST ['mandarinName'];

    $sql = "INSERT INTO Teacher (name, phoneNumber, email, address, educationalLevel, mandarinName ) VALUES ('$name','$phoneNumber','$email', '$address', '$educationalLevel', '$mandarinName')";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher Added Succsessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

// html menambahkan guru baru
?>

<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentID = $POST ['studentID'];
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $POST ['$address'];
     

    $sql = "INSERT INTO Teacher ( studentID , name, phoneNumber, email, address ) VALUES ( '$studentID', '$name','$phoneNumber', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher Added Succsessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


// html menambahkan murid baru
?>


