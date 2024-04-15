<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <!-- <h1 style="color:yellow"> Hello there</h1> -->
        <input type="button" value="Ask a Question" id="button1" onclick="btn1_clicked()">
    </div>
    <div class="blacky">
    </div>



    <form style="margin:auto;"  action="process.php"  method="post" class="form" id="form1">
    <table style="border:2px solid black;">
        <tr>
            <td>Name :
            </td>
            <td>
            <input type="text" name="username" placeholder="Email/UserName" required>
            </td>
        </tr>
        <tr>
            <td>Password :
            </td>
            <td>
            <input type="password" name="password" placeholder="password">
            </td>   
        </tr>
        
        <tr>
            <td>
            <input type="submit" value="Submit" name="submit" placeholder="Submit" class="submit">
            </td>
        </tr>
        <tr>
            <td>
            <input type="button" value="signup" name="submitsignup" class="submit" onclick=signupclicked()>
            </td>
        </tr>
    </table>
    </form>

    <div id="signupFormContainer">
    
        <?php include 'signup.php'; ?>
    </div>

</body>
<script>
    function btn1_clicked()
    {
        document.getElementById("form1").style.visibility = "visible";
    }
    function signupclicked() {
    document.getElementById("form1").style.visibility = "hidden";
    document.getElementById("signupform").style.visibility = "visible";
    document.getElementById("signupform").style.backgroundColor = "yellow";
}

</script>
</html>