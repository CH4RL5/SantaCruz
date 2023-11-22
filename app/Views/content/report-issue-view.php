<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report an Issue</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">



</head>


<body class="bodyContainer">
    <?php require_once "./app/views/inc/navbar.php" ?>
    <div class="contenedorReport">
        <div class="contenedor-hijo">
            <!-- <div class="caja">
                <img src="https://santacruzskateboards.com/images/logos/santa-cruz-skateboards.png" class="imgReport">
            </div> -->

            <h1 class="Titulo"> Report an Issue </h1>
            <div class="txttitulo">Write a short description of the problem or error.
            </div>


            <form>
                <label for="miCuadroTexto"></label>
                <input type="text" id="miCuadroTexto" name="miCuadroTexto" placeholder="Write here">

                <br>
                <br>
                <br>

                <div class="txttitulo">Enter your email address.
                </div>

            </form>


            <form>
                <label for="miCuadroTexto"></label>
                <input type="text" id="miCuadroTexto" name="miCuadroTexto" placeholder="Write here">

                <br>

                <input type="submit" class="button is-warning " value="Send to">
            </form>

</body>

</html>