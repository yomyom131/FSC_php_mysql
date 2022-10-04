<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index2.php?id=HTML">HTML</a></li>
            <li><a href="index2.php?id=CSS">CSS</a></li>
            <li><a href="index2.php?id=JavaScript">JavaScript</a></li>
            <li><a href="index2.php#title">Go Title</a></li>
        </ol>
        <h2>
            <?php
                $id = $_GET['id'] ?? 'HTML';                                    //id 파라미터가 없을 때 기본값으로 HTML 출력
                // echo $_GET['id'] ?? 'HTML';
            ?>
        </h2>
        <?php
                echo nl2br(file_get_contents("data/HTML"));
        ?>
        <h2>data/id</h2>
        <?php
                echo nl2br(file_get_contents("data/$id"));                      //줄바꿈까지 표시(nl2br())
                // echo nl2br(file_get_contents("data/".($_GET['id'] ?? 'HTML')));
        ?>
    </body>
</html>