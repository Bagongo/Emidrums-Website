<?php

        $emailTo="akak@hotmail.it";
        $subject=$_POST["subject"];
        $body=$_POST["msg"];
        $headers="From: ".$_POST["sender"];

        $error="";
        $result="";

        if(!$_POST["sender"] OR !filter_var($_POST["sender"], FILTER_VALIDATE_EMAIL))
            $errors .= "Please enter a <strong>valid email address!</strong><br />";     

        if(!$_POST["msg"])
            $errors .= "Please enter a <strong>message!</strong>";     

        if ($errors !="")
            $result = "<div class='alert alert-danger text-center'>".$errors."</div>";
        else
        {
            if(mail($emailTo, "Message from EMIDRUMS.COM --> subject: ".$subject, $body, $headers))
                $result = "<div class='alert alert-success text-center'>Your message was successfully sent!</div>";
        }


        echo $result;

?>
    

