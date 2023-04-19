<?php
    session_start();
    if (isset($_SESSION['newPass'])) {
        $cycles = $_SESSION['newPass'];
    }

  
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewPassword</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <div class="new-password-container">
        <?php if(isset($cycles) && $cycles != "" && $cycles >= 4) { ?>
        <p class="new-password">La tua Password è: <span><?php echo $cycles; ?></span></p>
        <?php } else {  ?>
        <p class="new-password">Nessun parametro valido inserito - almeno 4 caratteri richiesti</p>
        <?php } ?>
    </div>
</div>
</body>
</html>

