<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            text-align: center;
            padding: 10px;
        }

        .green {
            background-color: green;
        }

        .yellow {
            background-color: yellow;
        }

        .red {
            background-color: red;
        }

    </style>
    <title>Exercise 4</title>
</head>
<body>
    <?php
        $sys = 122;
        $dia = 81;

        $text = 'Impossible';
        $color = 'yellow';

        if ((120 < $sys) && ($sys < 130) && (80 < $dia) && ($dia < 85)) {
            $text = 'NORMAL';
            $color = 'green';
        } else if ((130 < $sys) && ($sys < 139) && (85 < $dia) && ($dia < 89)) {
            $text = 'WARNING';
            $color = 'yellow';            
        } else if (($sys > 140) && ($dia > 90)) {
            $text = 'HIGH';
            $color = 'red';            
        }

        echo "<div class='$color'>$text</div>";
    ?>
</body>
</html>