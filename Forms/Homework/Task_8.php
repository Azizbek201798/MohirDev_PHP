<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitsa Buyurtma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>

        .vertical-line {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: black;
            left: calc(35% + 10px);
        }
        
        .label_1 {
            position: fixed;
            top: 20px;
            left: calc(35% + 50px);
            font-size: 20px;
        }
        
        .label_2 {
            position: fixed;
            top: 80px;
            left: calc(35% + 50px);
            font-size: 20px;
        }
        .label_3 {
            position: fixed;
            top: 140px;
            left: calc(35% + 50px);
            font-size: 20px;
        }
        .label_4 {
            position: fixed;
            top: 280px;
            left: calc(35% + 50px);
            font-size: 20px;
        }
        .button-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
        }

        .button-container .btn {
            margin-top: auto; 
        }
        
    </style>
</head>

<body>
    <h1>Pitsa buyurtma qilish</h1><br>
    <h3>Noni qanday bo'lsin?</h3>
    <select >
        <option value="Yupqa" name="option" >Yupqa</option>
        <option value="Qalin" name="option" >Qalin</option>
    </select>
    <h3>Kattaligi</h3><br>

    <svg width="400" height="200">
        <a href="#">
            <circle cx="60" cy="60" r="50" fill="white" stroke="black" stroke-width="2" />
            <text x="60" y="60" text-anchor="middle" alignment-baseline="middle" fill="black">25 sm</text>
        </a>

        <a href="#">
          <circle cx="190" cy="60" r="50" fill="white" stroke="black" stroke-width="2" />
          <text x="190" y="60" text-anchor="middle" alignment-baseline="middle" fill="black">30 sm</text>
        </a>

        <a href="#">
          <circle cx="320" cy="60" r="50" fill="white" stroke="black" stroke-width="2" />
          <text x="320" y="60" text-anchor="middle" alignment-baseline="middle" fill="black">35 sm</text>
        </a>
    </svg>
    
    <h3>Ustiga nima solaylik?</h3>
        <input type="checkbox" name="ustiga[]" value="Pomidor" id="ustiga_pomidor">
        <label for="ustiga_pomidor">Pomidor</label>
        <input type="checkbox" name="ustiga[]" value="Qazi" id="ustiga_qazi">
        <label for="ustiga_qazi">Qazi</label>
        <input type="checkbox" name="ustiga[]" value="Qo'ziqorin" id="ustiga_qoziqorin">
        <label for="ustiga_qoziqorin">Qo'ziqorin</label>
        <input type="checkbox" name="ustiga[]" value="Zaytun" id="ustiga_zaytun">
        <label for="ustiga_zaytun">Zaytun</label>

        <h3>Qo'shimchalar</h3>
        <input type="checkbox" name="qoshimcha[]" value="Achchiq" id="qoshimcha_achchiq">
        <label for="qoshimcha_achchiq">Achchiq</label>
        <input type="checkbox" name="qoshimcha[]" value="Sosiskali" id="qoshimcha_sosiskali">
        <label for="qoshimcha_sosiskali">Sosiskali</label>

    <h2>Chopar pitsa maxsus buyurmasi!</h2>

    <div class="vertical-line"></div>

    <label class="label_1">Non: <?php ?> </label>
    <label class="label_2">Kattaligi: <?php echo $_POST['option'];?> </label>
    <label class="label_3">Ustida: <?php echo $_POST['option'];?> </label>
    <label class="label_4">Qo'shimcha: <?php echo $_POST['option'];?> </label>

    <button type="button" class="btn btn-success">Buyurtma berish</button>

</body>

</html>