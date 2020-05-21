<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12.php" method="post">
        <label for="">ฐาน:</label>
        <input type="text" name="base">
        <br>
        <label for="">สูง:</label>
        <input type="text" name="hi">
        <br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    <br>
    <?php
        $base= $_POST['base'];
        $hi = $_POST['hi'];
        $sum = (0.5*$base*$hi);
        echo "พื้นที่เท่ากับ: ".$sum;

    ?>
</body>
</html>
<?php

?>