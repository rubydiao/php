<?php
        if($_POST['answer'] == "ข้าวต้มกุ๊ย" && $_POST['answer'] != null){
            echo "<script>alert('ตอบถูก!')</script>";
            header("Refresh:0 , url =  davin4.php");
            exit();
        }else{
            echo "<script>alert('ตอบผิด!')</script>";
            header("Refresh:0 , url =  davin3.php");
            exit();
        }
?>