<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
</head>

<body>

    <form style="margin:auto;" method="post" action="process.php" class="form">
        <table border="2">
            <tr>
                <td>Name :
                </td>
                <td>
                    <input type="text" name="Name" placeholder="userName" required>
                </td>
            </tr>
            <tr>
                <td>DOB :
                </td>
                <td>
                    <input type="text" name="dob" placeholder="DateOfBirth">
                </td>
            </tr>

            <tr>
                <td>Email :
                </td>
                <td>
                    <input type="text" name="email" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit" name="submit" placeholder="Submit" class="submit">
                </td>
            </tr>
        </table>
    </form>
    <script src="login.js"></script>
</body>

</html>