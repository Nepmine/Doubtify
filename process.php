<?php
// This is a simple PHP script to display a message in the browser
echo "Hello, World! This is a simple PHP script.";



session_start(); // Start the session

include 'connectivity.php'; // Include the database connectivity file

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Redirect if username or password is empty
    if (empty($username) || empty($password)) {
        header("Location: login.php");
        exit;
    }

    // Prepare the SQL query

    $sql="SELECT username, password FROM signup WHERE username = ?";
    $stmt = mysqli_prepare($connection, $sql);



    if ($stmt) {
        // Bind the username parameter
        mysqli_stmt_bind_param($stmt, "s", $username);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Fetch the result of the query
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Check if the password matches
            if ($password == $row['password']) {
                $_SESSION["username"] = $username;
                echo "[INFO] Welcome to Doubtify!!";
            } else {
                echo "[ERROR] Please check your password and retry";
            }
        } else {
            // Username not found
            echo "[ERROR] Please check your username or sign up if not already ::";
            session_destroy();
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing the statement
        echo "<br>";
        echo "[ERROR] Could not prepare the statement.";
    }

    // Close the database connection
    mysqli_close($connection);
}