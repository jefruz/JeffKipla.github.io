<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Establish a connection to the database (modify the parameters accordingly)
    $conn = new mysqli("localhost", "root", "", "sign up wamp");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to retrieve user with the entered username and password
    $sql = "SELECT * FROM `sign up wamp` WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to a new page
        header("Location: indexx.html");
        exit(); // Ensure that no more content is sent after the header
    } else {
        echo "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>
