<?php
    $mysqli = mysqli_connect("localhost", "root", "koreait", "opentutorials");
    //var_dump($mysqli);
    $res = mysqli_query($mysqli, "SHOW TABLES FROM opentutorials;");
    // var_dump(($res));
    if(!$res) {
        echo mysqli_error($mysqli);
    }

    $row = mysqli_fetch_row($res);
    var_dump($row);
?>