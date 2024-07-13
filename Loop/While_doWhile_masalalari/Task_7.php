<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaxmat Doskasi</title>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            display: flex;
            flex-wrap: wrap;
        }

        .chessboard button {
            width: 50px;
            height: 50px;
            border: none;
            outline: none;
            color: black;
        }

        .white {
            background-color: #f0d9b5;
        }

        .black {
            background-color: #b58813;
        }
    </style>
</head>

<body>
    <div class="chessboard">
    
    <?php
        $size = 8;
$row = 1;

    while ($row <= $size) {
        $col = 1;

        while ($col <= $size) {
            $total = $row + $col;

            if ($total % 2 == 0) {
                echo '<button class="white"></button>';
            } else {
                echo '<button class="black"></button>';
            }

            $col++;
        }

        $row++;
    }
    ?>

    </div>
</body>

</html>