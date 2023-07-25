<?php
$con = mysqli_connect('localhost', 'root', '', 'photogallerywebsite');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);

    $query = "INSERT INTO users(name, email, number) VALUES('$name', '$email', '$number')";

    if (mysqli_query($con, $query)) {
        echo "Record added successfully.";
        header('Location: index.php#contact');
        exit(); // Always exit after a header redirect to prevent further execution of the script.
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
