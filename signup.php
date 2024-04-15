
<form style="margin:auto; visiblity:visible !important;"  action="signupprocess.php" class="form" method="post" id="signupform">   <!-- process.php -->
    <table style="border:2px solid black">
        <tr>
            <td>First Name :
            </td>
            <td>
            <input type="text" name="firstname" placeholder="FirstName" required>
            </td>
        </tr>
        <tr>
            <td>Last Name 
            </td>
            <td>
            <input type="text" name="lastname" placeholder="lastName" required>
            </td>
        </tr>
        <tr>
            <td>Date of birth :
            </td>
            <td>
            <input type="date" name="dob" placeholder="DD/MM/YY" required>
            </td>
        </tr>
        <tr>
            <td>Country :
            </td>
            <td>
            <input type="text" name="country" placeholder="Nepal" required>
            </td>
        </tr>
        <tr>
            <td>Phone No :
            </td>
            <td>
            <input type="tel" name="phone" placeholder="90000000000" required>
            </td>
        </tr>
        <tr>
            <td>Email :
            </td>
            <td>
            <input type="email" name="email" placeholder="xyz@gmail.com" required>
            </td>
        </tr>
        <tr>
            <td>Username :
            </td>
            <td>
            <input type="text" name="username1" placeholder="Username" required>
            </td>
        </tr>
        <tr>
            <td>Password :
            </td>
            <td>
            <input type="password" name="password1" placeholder="ram#550" required>
            </td>
        </tr>
        <tr>  
            <!-- not for the database, just for the testing using js -->
            <td>Conform Password :
            </td>
            <td>
            <input type="password" name="confirm1" placeholder="ram#550" required>
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" value="signup" name="signupbtn" class="submit">
            </td>
        </tr>
    </table>
    </form>
