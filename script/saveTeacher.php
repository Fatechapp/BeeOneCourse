<?php 
error_reporting(0);
include '../Includes/dbcon.php';


    if(isset($_POST['Add'])){

        $teacherNIK = $_POST['teacherNIK'];
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $POST ['$address'];
        $educationalLevel  = $POST ['educationalLevel'];
        $mandarinName = $POST ['mandarinName'];
      


// echo $isLinked;
// echo $_POST['isExisting'];


        $query = "SELECT * FROM User WHERE teacherNIK= '$teacherNIK'";
        $rs = $conn->query($query);
        $num = $rs->num_rows;

        if($password != $conPassword)
        {
            echo "<script type = \"text/javascript\">
            alert(\"Teacher Not Found!\");
            window.location = (\"../teacher.php\")
            </script>";
        }
        
        else if($num > 0)
        {
            echo "<script type = \"text/javascript\">
            alert(\"Teacher already exist\");
            window.location = (\"../teacher.php\")
            </script>";

        }
     
        
    } //end of if for submit button



        ?>
