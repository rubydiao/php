<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="16.php" method="get">
        <select name="sec" id="">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
        </select>
        <button type="submit">submit</button>
        <br>
        <?php
            for($i =0 ; $i < $_GET['sec'] ; $i++){
            ?>
                <label for="">วิชาที่<?php echo $i?></label>
                <br>
                <input name = <?php echo "data".$i ?> type="text" >    
                <br>  
            <?php
            }
            ?>
            <button type="submit">submit</button>
            <br>
        <?php
            $temp = $_GET['sec'];
            echo $temp,"<br>";
            $sum = array();
            for($i=0 ; $i < $temp ; $i++){
                array_push($sum,$_GET['data'.$i]);
            }
            echo (array_sum($sum));
        ?>
    </form>
</body>
</html>