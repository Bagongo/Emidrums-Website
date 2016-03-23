<?php

    include("connection.php");

    if ($_GET["pictureID"])
    {
        $picToDel = $_GET["pictureID"];
        $query = "DELETE FROM `piclinks` WHERE `id`='".$picToDel."'";
    }

    if($_GET["dateID"])
    {
        $dateToDel = $_GET["dateID"];
        $query = "DELETE FROM `touring` WHERE `id`='".$dateToDel."'";
    }


    mysqli_query($connection, $query);
    echo "successfully deleted: $dateToDel";

?>
