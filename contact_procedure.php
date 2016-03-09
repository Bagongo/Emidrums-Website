<?php

    if($_POST["submit_email"])
    {
        $emailTo="akak@hotmail.it";
        $subject=$_POST["subject"];
        $body=$_POST["msg"];
        $headers="From: ".$_POST["sender"];

        $message;
        $result;

        if(!$_POST["sender"] OR !filter_var($_POST["sender"], FILTER_VALIDATE_EMAIL))
            $message.= "Please enter your <strong>email address</strong>";     

        if(!$_POST["msg"])
            $message.= "<br />Please enter a <strong>message</strong>";     

        if ($message !="")
            $result="<div class='alert alert-danger'>".$message."</div>";
        else
        {
            if(mail($emailTo, "Message from MAIL FORM subject: ".$subject, $body, $headers))
            {
                $result="<div class='alert alert-success'>Your message was successfully sent!</div>";
            }
        }
    }
?>
    

