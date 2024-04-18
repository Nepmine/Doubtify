<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        form {
            display: flex;
            flex-direction: row;
        }

        .linkbtn {
            margin: auto;
            border: 2px solid black;
            border-radius: 50%;
        }
    </style>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
</head>

<body>



    <form style="margin:auto; visiblity:visible !important;" action="expert_fillprocess.php" class="form" method="post" id="expert_fill"> 

        <div style="border:2px solid black">


            <tr>
                <td>Insert your photograph[Password Size] :<br>
                </td>
                <td>
                    <input type="file" name="profileImage" placeholder="Upload Image" accept="image/*" required><br><br>
                </td>
            </tr>
            <tr>
                <td>Bio :<br>
                </td>
                <td>
                    <input type="text" name="bio" placeholder="Enter in 40 words max" id="bio" style="width:300px"
                        height="60px" required><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    Detail about your profile:<br>
                </td>
                <textarea id="describe" name="describe" rows="8" cols="50"
                    placeholder="Peoples dont like to read much"></textarea><br><br>
                </td>


            </tr>
            <tr id="linksTable">
                <td>Portfolio Link :<br>
                </td>
                <td>
                    Link: <input type="text" name="exportfolio" placeholder="www.google.com/intl/drive.." class="link"
                        multiple required><br><br>
                </td>
            </tr>
           
            <tr>
                <td>Enter your current profession :<br>
                </td>
                <td>
                    <input type="text" name="profession" placeholder="Graphics Designer in Polzi" class="link" multiple
                        required><br><br>
                </td>
            </tr> 


            <tr>
                <td>
                    Enter your skills:<br>
                </td>

                <!-- Yo gitHub bata uthako ho, yesko class rw script link ko form ma tala xa class mathi -->
                <td>
                    <select name="skills[]" id="skills" multiple>
                        <option value="Painter">Painter</option>
                        <option value="Graphics Designer">Graphics Designer</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Professor">Professor</option>
                        <option value="Criminal">Criminal</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Writer">Writer</option>
                    </select><br><br>
                    <!-- <input type="text" id="skill" name="skills" 
                    placeholder="Select"></input><br><br> -->
                </td>

            </tr>

            <center>
                <tr>
                    <td>
                        <input type="submit" value="Submit" name="expertSubmit" class="submit">
                    </td>
                </tr>
            </center>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('skills')  // id
    </script>
    <script src="expert_fill.js"></script>
</body>

</html>