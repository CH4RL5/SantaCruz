<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Santacruz</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            overflow: auto;
        }

        .contact-form {
            width: 100%;
            margin: auto;
        }

        .contact-form label {
            display: block;
            margin-top: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        .social-media-container {
            width: 100%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .social-media-container img {
            width: 30px;
            height: 30px;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <?php require_once "./app/views/inc/navbar.php" ?>
    <div class="container">
        <h1>Contacto</h1>
        <form class="contact-form">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
        <div class="social-media-container">
            <a href="https://www.facebook.com/SantaCruzSkateboards/?locale=es_LA" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/fb.svg" alt="Facebook"></a>
            <a href="https://www.instagram.com/santacruzskateboards/?hl=es" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/ins.svg" alt="Instagram"></a>
            <a href="https://twitter.com/santacruzskate?lang=es" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/twe.svg" alt="Twitter"></a>
            <a href="https://www.youtube.com/SantaCruzSkateboards" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/you.svg" alt="Youtube"></a>
            <a href="https://www.tiktok.com/@santa_cruz_skateboards" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/tik.svg" alt="TikTok"> </a>

        </div>
    </div>
    <?php require_once "./app/views/inc/footer.php" ?>
</body>

</html>