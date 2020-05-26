<?php
        if($_POST['answer'] == "อินเดีย" && $_POST['answer'] != null){
            echo "<script>alert('ตอบถูก!')</script>";
            header("Refresh:0 , url =  davin2.php");
            exit();
        }else{
            echo "<script>alert('ตอบผิด!')</script>";
            header("Refresh:0 , url =  davin1.php");
            exit();
        }
?>