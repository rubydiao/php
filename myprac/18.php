<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="18.php" method="get">
        <label for="number">input number:</label>
        <br>
        <input type="text" name = "num">
        <br>
        <input type="submit" value="push">
        <br>
    </form>
    <?php 
        for($i = 2 ; $i <= $_GET['num'] ; $i++){
            for($j = 1 ; $j <= $_GET['num'] ;$j++ ){
                echo $i*$j," ";
            }
            echo "<br>";
        }
        echo "<br>";
    ?>
</body>
</html>