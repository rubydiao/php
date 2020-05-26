<?php
        if($_POST['answer'] == "แว่นตากันแดด" && $_POST['answer'] != null){
            echo "<script>alert('ตอบถูก!')</script>";
            header("Refresh:0 , url =  davin3.php");
            exit();
        }else{
            echo "<script>alert('ตอบผิด!')</script>";
            header("Refresh:0 , url =  davin2.php");
            exit();
        }
?>