<?php
 
    session_start();    

    include("connection.php");

    $errors="";

    if ($_POST["submit"])
    {
        if(!$_POST["showdate"] OR !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$_POST["showdate"]))
            $errors .= "Please insert a date in the format YYYY-mm-dd <br />";
        
        if(!$_POST["where"])
            $errors .= "<br />Please insert a location for the show.<br />";
        
        if(!$_POST["gatesAndInfo"])
            $errors .= "<br />Please insert general info as time and price for the show.<br />";
            
        if($errors != "")
            echo $errors;
        else
        {
            $query = "INSERT INTO touring (`dates`, `places`, `info`) VALUES ('".$_POST['showdate']."', '".$_POST['where']."', '".$_POST['gatesAndInfo']."')"; 
            
            mysqli_query($connection, $query);
        }      
    }

    
      
      
?> 

<form method="post">
    
    <label for="showdate">Insert a date in the format YYYY-mm-dd</label>
    <input type="date" name="showdate" value="<?php echo $_POST['showdate'];  ?>" />
    <br />
    <br />
    <label for="where">Insert a location for the show</label>
    <input type="text" name="where" value="<?php echo $_POST['where'] ?>" />
    <br />
    <br />
    <label for="gatesAndInfo">Insert additional info for the show (gates, price, ecc...)</label>
    <input type="text" name="gatesAndInfo" value="<?php echo $_POST['gatesAndInfo'] ?>" />
    <br />
    <br />
    <input type="submit" name="submit" value="upload new date!!!!" />
    
</form>    