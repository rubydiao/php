<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=submit],[type=reset]{
            margin: 50px;
            left: 0px;
        }
        input[type=text]{
            margin: 10px;
        }
    </style>
</head>
<body>
<form action="13.php" method="post">
        <label for="">เลขที่1:</label>
        <input type="text" name="one">
        <br>
        <label for="">เลขที่2:</label>
        <input type="text" name="two">
        <br>
        <label for="">เลขที่3:</label>
        <input type="text" name="three">
        <br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    <br>
    <?php
        $num1 = $_POST['one'];
        $num2 = $_POST['two'];
        $num3 = $_POST['three'];
        $data=array($num1,$num2,$num3);
        sort($data);
        echo "จำนวนที่มากที่สุด: ".$data[2]."จำนวนตรงกลาง: ".$data[1]."จำนวนน้อยสุด: ".$data[0];
    ?>
</body>
</html>