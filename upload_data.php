 <?php
 
    session_start();    

    include("connection.php");

    $errors="";

    $time;
    $price;
    $info;

    if ($_POST["submitdate"])
    {
        if(!$_POST["showdate"] OR !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$_POST["showdate"]))
            $errors .= "Please insert a date in the format YYYY-mm-dd. <br />";
        
        if(!$_POST["where"])
            $errors .= "<br />Please insert a location for the show.<br />";
        
        if(!$_POST["time"])
            $time = " / ";
        else
            $time = $_POST["time"];
            
        if(!$_POST["price"])
            $price = " / ";
        else
            $price = $_POST["price"];
                    
        if(!$_POST["info"])
            $info = "    ";
        else 
            $info = $_POST["info"];
            
        if($errors != "")
            echo $errors;
        else
        {
            echo "got through if conditions....";
            
            $query = "INSERT INTO `touring` (`dates`, `places`, `time`, `price`, `info`) VALUES ('".$_POST['showdate']."', '".$_POST['where']."','".$time."','".$price."','".$info."')"; 

            if(mysqli_query($connection, $query))
                echo "<br />show posted successfully!!!<br />";
        }      
    }
   
    $insertionDate;

    $piclink;
    $picDescription;
    
    if ($_POST["submitpic"])
    {
        
        if(!$_POST["descr"])
            $picDescription = " ";
        else 
            $picDescription = $_POST["descr"];
                   
        if(!$_POST["piclink"] OR !filter_var($_POST["piclink"], FILTER_VALIDATE_URL))
            echo "please insert a valid url...";
        else
        {
            $piclink = $_POST["piclink"];
            $insertionDate = date("Y-m-d H:i:s");
            $query = "INSERT INTO `piclinks` (`link`, `uploaddate`, `description`) VALUES ('".$piclink."','".$insertionDate."','".$picDescription."')";
            
            if(mysqli_query($connection, $query))
                echo "<br />pic uploaded successfully!!!!<br />";
        }     
    }

    $youtubelink;
    $youtubePlDescription;

    if ($_POST["submit-yt-pl"])
    {

        if(!$_POST["descr2"])
            $youtubePlDescription = " ";
        else 
            $youtubePlDescription = $_POST["descr2"];

        if(!$_POST["youtubelink"] OR !preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $_POST["youtubelink"]))
            echo "please insert a valid embed link...";
        else
        {
            $youtubelink = $_POST["youtubelink"];
            $insertionDate = date("Y-m-d H:i:s");
            $query = "INSERT INTO `youtubepl` (`link`, `uploaddate`, `description`) VALUES ('".$youtubelink."','".$insertionDate."','".$youtubePlDescription."')";

            if(mysqli_query($connection, $query))
                echo "<br />playlist set successfully!!!!<br />";
        }     
    }

    $soundcloudLink;
    $soundcloudPlDescription;

    if ($_POST["submit-sc-pl"])
    {

        if(!$_POST["descr3"])
            $soundcloudPlDescription = " ";
        else 
            $soundcloudPlDescription = $_POST["descr3"];

        if(!$_POST["soundcloudlink"] OR !preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $_POST["soundcloudlink"]))
            echo "please insert a valid embed link...";
        else
        {
            $soundcloudLink = $_POST["soundcloudlink"];
            $insertionDate = date("Y-m-d H:i:s");
            $query = "INSERT INTO `soundcloudpl` (`link`, `uploaddate`, `description`) VALUES ('".$soundcloudLink."','".$insertionDate."','".$soundcloudPlDescription."')";

            if(mysqli_query($connection, $query))
                echo "<br />playlist set successfully!!!!<br />";
        }     
    }
     
?>

<div style="background-color: lightblue; width:50%;">
    
    <h2>Post a new show: </h2>

    <form method="post">

        <label for="showdate">Insert a <strong>date</strong> for the show <u>in the format YYYY-mm-dd</u></label>
        <input type="date" name="showdate" value="<?php echo $_POST['showdate'];  ?>" />
        <br />
        <br />
        <label for="where">Insert a <strong>location</strong> for the show</label>
        <input type="text" name="where" value="<?php echo $_POST['where'] ?>" />
        <br />
        <br />
        <label for="time">Insert a <strong>time</strong> for the show</label>
        <input type="text" name="time" value="<?php echo $_POST['time'] ?>" placeholder="(optional)" />
        <br />
        <br />
        <label for="price">Insert a <strong>price</strong> for the show</label>
        <input type="text" name="price" value="<?php echo $_POST['price'] ?>" placeholder="(optional)" />
        <br />
        <br />
        <label for="info">Insert additional <strong>info</strong> for the show</label>
        <textarea name="info" placeholder="(optional)"><?php echo $_POST['info'] ?></textarea>
        <br />
        <br />
        <input type="submit" name="submitdate" value="upload new date...." style="position:relative; left: 75%;" />

    </form> 
    
</div>

<br />
<br />

<div style="background-color: lightgreen; width:50%;">
    
    <h2>Upload a new picture: </h2>

    <form method="post">

        <label for="piclink">Insert a <strong>link</strong> to the picture</label>
        <input type="text" name="piclink" value="<?php echo $_POST['piclink'];  ?>" />
        <br />
        <br />
        <label for="descr">Insert a <strong>description</strong> for the picture</label>
        <textarea name="descr" placeholder="(optional)"><?php echo $_POST['descr'] ?></textarea>
        <br />
        <br />
        <input type="submit" name="submitpic" value="upload new picture" style="position:relative; left:75%;" />

    </form> 
    
</div>

<br />
<br />

<div style="background-color: red; width:50%; color:white;">
    
    <h2>Set the Youtube playlist: </h2>

    <form method="post">

        <label for="youtubelink">Insert a <strong>link</strong> to the youtube playlist</label>
        <input type="text" name="youtubelink" value="<?php echo $_POST['youtubelink'];  ?>" />
        <br />
        <br />
        <label for="descr2">Insert a <strong>description</strong> for the playlist</label>
        <textarea name="descr2" placeholder="(optional)"><?php echo $_POST['descr2'] ?></textarea>
        <br />
        <br />
        <input type="submit" name="submit-yt-pl" value="upload new youtube playlist" style="position:relative; left:75%;" />

    </form> 
    
</div>

<br />
<br />

<div style="background-color:orange; width:50%; color:white;">
    
    <h2>Set the SoundCloud playlist: </h2>

    <form method="post">

        <label for="soundcloudlink">Insert a <strong>link</strong> to the Soundcloud playlist</label>
        <input type="text" name="soundcloudlink" value="<?php echo $_POST['soundcloudlink'];  ?>" />
        <br />
        <br />
        <label for="descr3">Insert a <strong>description</strong> for the playlist</label>
        <textarea name="descr3" placeholder="(optional)"><?php echo $_POST['descr3'] ?></textarea>
        <br />
        <br />
        <input type="submit" name="submit-sc-pl" value="upload new soundcloud playlist" style="position:relative; left:75%;" />

    </form> 
    
</div>