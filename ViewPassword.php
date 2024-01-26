<?php
    session_start();

    // Verifica se la password è presente nella sessione
    if (isset($_SESSION['generated_password'])) {
        $generatedPassword = $_SESSION['generated_password'];
    } else {
        // Se la password non è presente, reindirizza alla pagina principale
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Password</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white py-5">
                <h1 class="py-5">Password Generata</h1>
                <?php (isset($generatedPassword)) ?>
                    <h5 class="text-white">La tua password è: <?php echo $generatedPassword; ?></h5>
            </div>
        </div>
    </div>
</body>
</html>