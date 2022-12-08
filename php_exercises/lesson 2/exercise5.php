<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        pre {
            padding: 5px;
            width: 20%;
            margin: 0;
        }
    </style>
    <title>Exercise 5</title>
</head>
<body>
    <?php

        function calculate($color1, $color2) {
            $prime = array(0, 1, 3, 5, 7, 9);
            $col = 0;

            foreach ($prime as $val) {
                $color = $color2;
                $byTwo = ($val * 2);
                $power = ($val * $val);
                $cube = $power * $val;

                if ($col % 2 == 0) $color = $color1;

                echo "<pre style='background-color: $color;'>$byTwo\t$power\t$cube</pre>";
                $col++;
            }
        }

        calculate('blue', 'cyan');
        echo "<br>";

        calculate('#CCCCCC', '#999999');

    ?>
</body>
</html>