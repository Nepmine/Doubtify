<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    if(isset($_POST['submit']))
    {
        $arr=$_POST['lang'];
        print_r($arr);
    }
    ?>
</head>
<?php   $var;  ?>
<body>
    <form action="" method="POST">
        <select name="lang[]" multiple>
            <option>Option</option>
            <option value="gede" onclick="<?php     ?>">gede1111</option>
            <option value="gede1">gede111</option>
            <option value="gede11">gede11</option>
            <option value="gede111">gede1</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>