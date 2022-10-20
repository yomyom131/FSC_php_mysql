<?php
    $conn = mysqli_connect("localhost", "root", "koreait", "opentutorials");
    $sql = "
        INSERT INTO topic (
            title,
            description,
            created
        ) VALUES (
            'MySQL',
            'MySQL is ....',
            NOW()
        )";
    $result = mysqli_query($conn, $sql);
?>
