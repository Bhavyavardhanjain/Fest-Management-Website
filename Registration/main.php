<?php
        header("Location: http://localhost:3000/Login/index.php");
        error_reporting(0);
        $connect = mysqli_connect("localhost", "root", "root", "fest_management") or die(" Connection Failed");
        $name = $_POST["name"];
        $regno = $_POST["regno"];
        $year = $_POST["year"];
        $course = $_POST["course"];
        $branch = $_POST["branch"];
        $email = $_POST["email"];
        $phone_no = $_POST["phoneno"];
        $password = $_POST["pass"];
        $query = "INSERT INTO registration VALUES('$name',$regno,'$year','$course','$branch','$email',$phone_no,'$password')";
        mysqli_query($connect, $query);
        ?>