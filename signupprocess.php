<?php


include 'connectivity.php';

if (isset($_POST['signupbtn'])) {
    // Collect data from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $phone_no = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username1'];
    $password = $_POST['password1'];

    // Prepare an SQL statement with placeholders
    $sql = "INSERT INTO signup VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_prepare($connection, $sql);
    if ($stmt) {
        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssssssss", $first_name, $last_name, $dob, $country, $phone_no, $email, $username, $password);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Record inserted successfully.";
        } else {
            echo "Error inserting record: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the statement: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}











// for the injection free code
// include 'connectivity.php';

// if(isset($_POST['signupbtn']))
// {


//     $first_name=$_POST['firstname'];
//     $last_name=$_POST['lastname'];
//     $dob=$_POST['dob'];
//     $country=$_POST['country'];
//     $phone_no=$_POST['phone'];
//     $email=$_POST['email'];
//     $username = $_POST['username1'];
//     $password=$_POST['password1'];


        
//         $sql="insert into signup values('$first_name','$last_name','$dob','$country','$phone_no','$email','$username','$password');";

//         if (mysqli_query($connection, $sql)) {
//             echo "Record inserted successfully.";
//         } else {
//             echo "Error inserting record: " . mysqli_error($connection);
//         }

//     echo "<br>";
//     echo $first_name;
//     echo "<br>";
//     echo $last_name;
//     echo "<br>";
//     echo $dob;
//     echo "<br>";
//     echo $country;
//     echo "<br>";
//     echo $phone_no;
//     echo "<br>";
//     echo $email;
//     echo "<br>";
//     echo $username;
//     echo "<br>";
//     echo $password;
//     echo "<br>";
//     mysqli_close($connection);

// }
    


