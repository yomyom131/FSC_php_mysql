<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Function</h1>
        <h2>basic</h2>
        <?php
            function basic() {
                print("Lorem ipsum dolor1<b1>");
                print("Lorem ipsum dolor2<br>");
            }

            basic();
        ?>

        <h2>parameter &amp argument</h2>
        <?php
            function sum($left, $right) {
                print($left + $right);
                print("<br");
            }

            sum(2,4);
            sum(4,6);
        ?>

        <h2>return</h2>
        <?php
            function sum2($left, $right){
                return $left + $right;
            }

            print(sum2(2,4).'<br>');
            file_put_contents('result.txt', sum(2,4));
            
        ?>
    </body>
</html>