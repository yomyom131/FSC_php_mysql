<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><a href="index3.php">WEB</a></h1>
        <ol>
            <?php
            $list = array('CSS', 'HTML', 'JavaScript', 'PHP', 'MySQL');
            foreach($list as $item) {
                echo "<li><a href=\"index_plus.php?id=$item\">$item</a></li>";
            }
            ?>
        </ol>
        <h2>
            <?php
                if(isset($_GET['id'])) {
                    echo $_GET['id'];
                } else {
                    echo "Welcome";
                }
            ?>
        </h2>
        <?php
            if(isset($_GET['id'])) {
                echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "Hello, PHP";
            }
        ?>
    </body>
</html>