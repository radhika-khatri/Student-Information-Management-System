<?php
session_start();
include 'connection.php';


// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}


if (isset($_POST['submit'])) {
    $name = $connect->real_escape_string(strip_tags($_POST['name']));
    $secondname = $connect->real_escape_string(strip_tags($_POST['secondname']));
    $email = $connect->real_escape_string(strip_tags($_POST['email']));
    $gender = $connect->real_escape_string(strip_tags($_POST['gender']));
    $course = $connect->real_escape_string(strip_tags($_POST['course']));
    $description = $connect->real_escape_string(strip_tags($_POST['description']));


    $check_email = $connect->query("SELECT email FROM user_info WHERE email='$email'");
    $count = $check_email->num_rows;


    if ($count == 0) {
        $query = "INSERT INTO user_info (first_name, last_name, email, gender, course, description)
                  VALUES ('$name', '$secondname', '$email', '$gender', '$course', '$description')";


        if ($connect->query($query) === TRUE) {
            $_SESSION['message'] = "Information was submitted successfully!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error occurred while submitting your information: " . $connect->error;
            $_SESSION['message_type'] = "error";
        }
    } else {
        $_SESSION['message'] = "Sorry, email already taken!";
        $_SESSION['message_type'] = "error";
    }


    $connect->close();
    header("Location: index.php");
    exit();
}