<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            color: white;
            font-size: 10pt;
            padding: 10px;
            margin: 0 auto;
        }

        .green {
            background-color: #70d570;
        }

        .yellow {
            background-color: #fbfb87;
        }
    </style>
    <title>Exercise3</title>
</head>
<body>
    <?php
        for ($var = 0; $var <= 4; $var++) {
            $color = "green";
            if ($var % 2 == 0)
                $color = "yellow";

            echo "<div class='$color'>$var</div>";
        }
    ?>
</body>
</html>