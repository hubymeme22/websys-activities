<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            text-align: center;
            color: white;
            font-size: 30pt;
            padding: 30px;
        }

        .green {
            background-color: green;
        }

        .blue {
            background-color: blue;
        }
    </style>
    <title>Exercise3</title>
</head>
<body>
    <?php
        $data = 321313;
        $color = "blue";
        $type = "even";

        if ($data % 2 != 0) {
            $color = "green";
            $type = "odd";
        }

        echo "<div class='$color'>$type</div>";
    ?>
</body>
</html>