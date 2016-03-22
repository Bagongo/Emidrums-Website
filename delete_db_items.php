<?php

    include("connection.php");

    $picToDel = $_GET["pictureID"];

    $query = "DELETE FROM `piclinks` WHERE `id`='".$picToDel."'";

    mysqli_query($connection, $query);
    //echo "successfully deleted pic: $picToDel";

?>
