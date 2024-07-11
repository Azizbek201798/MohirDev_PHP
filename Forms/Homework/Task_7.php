<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <style>
        body {
            font-family: "Times New Roman", sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .input-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .input-container label {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
            margin-right: 10px;
            font-weight: bold;
        }

        .input-container input[type="number"] {
            width: 100px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    function calculateValues($inputName, $inputValue) {
        if ($inputValue !== 0) {
            $byteValue = $inputName === 'byte' ? $inputValue : 0;
            $kbyteValue = $inputName === 'kbyte' ? $byteValue / 1024 : $byteValue / 1024;
            $megabyteValue = $inputName === 'megabyte' ? $kbyteValue / 1024 : $kbyteValue / 1024;
            $gigabyteValue = $inputName === 'gigabyte' ? $megabyteValue / 1024 : $megabyteValue / 1024;
            $terabyteValue = $inputName === 'terabyte' ? $megabyteValue : $gigabyteValue / 1024;

            return array(
                'byte' => $byteValue,
                'kbyte' => $kbyteValue,
                'megabyte' => $megabyteValue,
                'gigabyte' => $gigabyteValue,
                'terabyte' => $terabyteValue
            );
        } else {
            return array(
                'byte' => '',
                'kbyte' => '',
                'megabyte' => '',
                'gigabyte' => '',
                'terabyte' => ''
            );
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $byteValue = isset($_POST['byte']) ? (int)$_POST['byte'] : 0;

        $calculatedValues = calculateValues('byte', $byteValue);
    } else {
        $calculatedValues = calculateValues('byte', 0);
    }
    ?>

    <h1>Convert Bytes to Kilobytes to Megabytes to Gigabytes to Terabytes</h1>

    <form method="POST">
        <div class="input-container">
            <label>Bytes<input type="number" name="byte" value="<?php echo $calculatedValues['byte']; ?>" oninput="this.form.submit()" /></label>
            <label>Kilobytes<input type="number" name="kbyte" value="<?php echo $calculatedValues['kbyte']; ?>" readonly /></label>
            <label>Megabytes<input type="number" name="megabyte" value="<?php echo $calculatedValues['megabyte']; ?>" readonly /></label>
            <label>Gigabytes<input type="number" name="gigabyte" value="<?php echo $calculatedValues['gigabyte']; ?>" readonly /></label>
            <label>Terabytes<input type="number" name="terabyte" value="<?php echo $calculatedValues['terabyte']; ?>" readonly /></label>
        </div>

        <noscript><input type="submit" value="Calculate"></noscript>
    </form>

</body>
</html>