<?php

session_start();


include 'connectivity.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
                                                    //      [For skills storage]
    // real maal
//     $selected_skills = $_POST['skills'];

//     $uname="Suraj1";
//     // $uname=$_SESSION[$username];              <------------------username exists here
//     // print_r($selected_skills);
//     foreach ($selected_skills as $skl) {
//         $sql = "INSERT INTO skills VALUES ('$uname', '$skl')";
//         mysqli_query($connection, $sql);
//     }
// }




$selected_skills = $_POST['skills'];
    $uname = "Suraj";

    // Establish a database connection
    // Make sure you replace these parameters with your actual database credentials

    // Use a prepared statement to prevent SQL injection
    $stmt = $connection->prepare("INSERT IGNORE INTO skills VALUES (?, ?)");

    if ($stmt === false) {
        die('Prepare failed: ' . $connection->error);
    }

    // Bind the parameters
    $stmt->bind_param("ss", $uname, $skill);

    foreach ($selected_skills as $skl) {
        $skill = $skl; // Set the parameter value

        // Execute the statement and check for errors
        $check="select skills from skills where username='$uname' and skills='$skl'";
        $checkdub = $connection->query($check);
        if (!$checkdub->num_rows) {
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error;
            }
        }
    }
    $stmt->close();
    // Close the statement and connection




                                                    //      [For the rest of the form]

    

                                                    
//     $file_name=$_FILES['profileImage']['name'];
//     // $query="insert into expert values('$file_name')";

//     $template=$_FILES['profileImage']['temp_name'];
//     $folder='Images/'.$file_name;
//     if(!move_uploaded_file($template,$folder))
//     {
//         echo "Image not uploaded !! <br>";
//     }










//     $bio=$_POST['bio'];
//     $describe=$_POST['describe'];
//     $exportfolio=$_POST['exportfolio'];
//     $profession=$_POST['profession'];

//     if(empty($bio) || empty($explink))
//     {
//         header("Location: login.php");
//         exit(0);
//     }
//     $sql2="insert into signup values('$file_name','$bio','$describe','$exportfolio','$profession');";
//     if(mysqli_query($connection,$sql2))
//     echo"<script>alert('Data Inserted')</script>";
//     else
//     echo"<script>alert('Data not inserted')</script>";
//  mysqli_close($connection);
}
 
