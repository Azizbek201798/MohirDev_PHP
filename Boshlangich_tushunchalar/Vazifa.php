<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

    </style>
</head>

<body>
    <table>
        <?php
            $malumotlar = array(
                array("Sardor", "$1000"),
                array("Eshmat", "$1200"),
                array("Toshmat", "$1500")
            );

            foreach ($malumotlar as $malumot) {
                echo "<tr>";
                foreach ($malumot as $qiymat) {
                    echo "<td>$qiymat</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>