<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=JavaScript">JavaScript</a></li>
            <li><a href="index.php#title">Go Title</a></li>
        </ol>
        <h2>
            <?php
                echo $_GET['id'] ?? 'HTML';           //id 파라미터가 없을 때 기본값으로 HTML 출력
            ?>
        </h2>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio earum consequuntur at tempore provident alias accusamus soluta libero, non tempora explicabo quae. Porro necessitatibus consectetur eos minus ea id officia!
    </body>
</html>