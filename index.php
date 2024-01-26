<?php
include 'functions.php';

    session_start();

        // Verifica se è stato inviato il form
    if (isset($_GET['password_length'])) {
        // Ottieni la lunghezza della password dal form
        $passwordLength = $_GET['password_length'];

        // Genera la password utilizzando la funzione da functions.php
        $generatedPassword = generatePassword($passwordLength);

        // Salva la password nella sessione
        $_SESSION['generated_password'] = $generatedPassword;

        // Redirect alla pagina dedicata
        header('Location: ViewPassword.php');
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="py-5 text-white">Password Generator</h1>
            </div>
            <div class="offset-4 col-4 text-center justify-content-center">
                <?php if (isset($generatedPassword)): ?>
                    <p class="py-5 text-white">La tua password generata è: <?php echo $generatedPassword; ?></p>
                <?php endif; ?>
            
                <form action="index.php" method="GET">
                    <label for="password_length"></label>
                    <input type="number" name="password_length" id="password_length" class="form-control"  placeholder="Inserisci la lunghezza della password:" required>
                    <button class="my-5 p-3 type="submit">Genera Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>