<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="17.php" method="get">
        <label for="number">input number:</label>
        <br>
        <input type="text" name = "num">
        <br>
        <input type="submit" value="push">
        <br>
    </form>
    <?php
        for($i=1 ; $i <= $_GET['num'] ; $i++){
            for($j = 1 ; $j <=$i ; $j++){
                echo $j;
            }
            echo "<br>";
        }
        echo "<br>";
        for($i = $_GET['num'] ; $i <= $_GET['num'] ; $i--){
            for($j = 1 ; $j <= $i ; $j++){
                echo $j;
            }
            echo "<br>";
        }
        echo "<br>";
    ?>
</body>
</html>