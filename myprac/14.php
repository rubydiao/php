<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: pink;
            font-family: 'Mitr', sans-serif;
        }
        h1{
            background: yellow;
            margin: 50px;
            text-align: center;
            border: 5px dashed orange;

        }
        label{
            font-size: 20px;
            margin: 10px 0px 0px 400px;
        }
        [type=text]{
            border-radius: 10px;
            margin: 10px 200px 0px 200px;
            width: 200px;
        }
        [type=text]:hover{
            background-color: #F5F5F5;
        }
        [type=submit]{
            font-family: 'Mitr', sans-serif;
            color: white;
            width: 50%;
            background-color: green;
            border-collapse: collapse;
            border-radius: 10px;
            padding: 20px 2px 20px 2px;
            margin: 50px;
            margin-left: 400px;
            margin-right: 400px;
        }
        [type=submit]:hover{
            color: black;
            background-color: #DEDEDE;
        }
        [type=reset]{
            font-family: 'Mitr', sans-serif;
            color: white;
            width: 50%;
            background-color: red;
            border-collapse: collapse;
            border-radius: 10px;
            padding: 20px 2px 20px 2px;
            margin: 10px;
            margin-left: 400px;
        }
        [type=reset]:hover{
            color : black;
            background-color: orange;
        }
    </style>
</head>
<body>
    <h1>Calculate Your Grade</h1>
    <form action="14.php" method="post">
        <label for="">วิชาที่ 1 :</label>
        <input type="text" name="sub1" required>
        <br>
        <label for="">วิชาที่ 2 :</label>
        <input type="text" name="sub2" required>
        <br>
        <label for="">วิชาที่ 3 :</label>
        <input type="text" name="sub3" required>
        <br>
        <label for="">วิชาที่ 4 :</label>
        <input type="text" name="sub4" required>
        <br>
        <label for="">วิชาที่ 5 :</label>
        <input type="text" name="sub5" required>
        <br>
        <label for="">วิชาที่ 6 :</label>
        <input type="text" name="sub6" required>
        <br>
        <label for="">วิชาที่ 7 :</label>
        <input type="text" name="sub7" required>
        <br>
        <input type="submit" value="กดเพื่อคำนวน">
        <input type="reset" value="กดเพื่อยกเลิก">
        <input class = "reset" type="submit" value="reset">

    </form>
    <?php
        $total = array_sum((array($_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['sub4'],$_POST['sub5'],$_POST['sub6'],$_POST['sub7'])));
    ?>
    <h1>
        <?php
            echo "เกรดเฉลี่ยของคุณคือ: ".number_format((float)$total/7,2);
        ?>
    </h1>
</body>
</html>