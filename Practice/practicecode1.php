<?php
echo "hay";

// Include your connectivity file if necessary
// include '../connectivity.php';

if (isset($_POST['submit'])) {
    // Fetch the file details
    $file_name = $_FILES['profileImage']['name'];
    $template = $_FILES['profileImage']['tmp_name']; // Corrected 'temp_name' to 'tmp_name'
    $folder = '../Images/' . $file_name;
    
    // Move the uploaded file
    if (move_uploaded_file($template, $folder)) {
        echo "Image uploaded successfully!<br>";
        // Additional code to handle successful upload, such as saving the filename to a database
    } else {
        echo "Image not uploaded!<br>";
    }
}