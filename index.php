<?php
    require __DIR__ . '/functions.php';
    $characters = [
        ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
        ['!', '?', '-', '.', ',', '@', '+']
    ];

    if (isset($_GET['passwordCharacters'])) {
          $cycles = $_GET['passwordCharacters'];
    };  

    $password = generatePassword($characters, $cycles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Strong Password Generator</h1>
        <h2 class="subtitle">Genera una password sicura</h2>
        <div class="new-password-container">
            <?php if(isset($cycles) && $cycles != "" && $cycles >= 4) { ?>
            <p class="new-password">La tua Password è: <?php echo $password; ?></p>
            <?php } else {  ?>
            <p class="new-password">Nessun parametro valido inserito - almeno 4 caratteri richiesti</p>
            <?php } ?>
        </div>
        <div class="form-container">
            <form action="index.php" method="GET">
                <div class="interact">
                    <label for="passwordCharacters" class="password-length-label">Lunghezza:</label>
                    <input type="number" for="passwordCharacters" id="passwordCharacters" name="passwordCharacters">
                </div>
               
                <button type="submit">Invia</button>
            </form>
        </div>
    </div>
    
    
</body>
</html>