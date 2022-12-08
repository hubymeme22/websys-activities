<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: <?php
                $data = 1231231232;
                if ($data % 2 == 0)
                    echo 'blue';
                else
                    echo 'green';
            ?>;
        }
    </style>
    <title>Exercise2</title>
</head>
<body>
</body>
</html>