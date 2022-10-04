<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <title></title>
    </head>
    <body>
        <h1>Function</h1>
        <?php
            $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Suscipit vel repudiandae ex dolor exercitationem iure doloremque dignissimos cupiditate minima veritatis ab quia, 
            inventore molestiae quibusdam. Earum commodi quia iste minima.
            한글은 한 글자에 3byte";
            echo $str;
        ?>
        <h2>strlen()</h2>
        <?php
            echo strlen($str);
        ?>
        <h2>nl2br()</h2>
        <?php
            echo nl2br($str);
        ?>
    </body>
</html>