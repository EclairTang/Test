<!DOCTYPE html>
<html>
<body>
    <?php
        //while
        $x = 1;
        while($x <= 5) {
            echo "数字是： $x <br>";
            $x++;
        }
    ?>
    <?php
        //for
        for($x = 0; $x <= 10; $x++){
            echo "数字是： $x <br>";
        }
    ?>
    <?php
        //foreach
        $color = array("red", "green", "blue", "yellow");
        foreach($color as $value){
            echo "$value <br>";
        }
    ?>
</body>
</html>