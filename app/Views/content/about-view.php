<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <style>
        .contenedor {
            background-image: url(https://ollie.aws.owta.net/pixelstv/wp-content/uploads/sites/4/2018/11/Fabio.jpg);
            background-size: cover;
            background-position: center center;
            display: flex;
            background-repeat: no-repeat;
            font-family: 'Oswald', sans-serif;
            color: black;
        }

        .Titulo {
            justify-content: center;
            text-align: center;
        }

        .subtitulo {
            justify-content: center;
            text-align: center;
        }

        .caja {
            margin: 25px;
            width: 300px;
            height: 300px;


        }

        .caja img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: left;
        }

        .txttitulo {
            text-align: justify;
        }

        .txt {
            text-align: justify;
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
    <div class="contenedor">
        <div class="contenedor-hijo">


            <h1 class="Titulo"> ABOUT US </h1>
            <div class="txttitulo">It is a brand worthy of recognition because it is full of innovation, learnings and
                amazing designs for skateboarding.
                Its story began in 1973, when three friends (lovers of surfing and the sunny state of California) began
                selling raw materials to make surfboards.
                he original idea of friends Richard Novak, Doug Haut and Jay Shuirman was not to sell skateboards.
                The market we cover is youth for young people who practice this sport, our mission is to provide good
                use, material and quality when making each skateboard that is created in the company.
            </div>
            <br>

            <div class="txttitulo">At that time, skateboarding was mainly about skating downhill and doing a few
                tricks... but things changed when riders started to
                use empty parking lots, parks, streets and swimming pools to take over the pavement. With the
                progressive adoption of skateboarding in the 1970s, Santa Cruz began producing skateboards that were
                wider, longer, and with upturned tips (colloquially known as the nose and tail).
                It was at this point that they began working on their renowned “Classic Dot” logo and developed more
                artistic boards.
                The importance of the brand not only lies in its innovation, but also in the effort of its founders to
                spread the sport: the 80s were extremely difficult, as Jay Shuirman died and some skate parks in the
                United States closed, which caused participation in skateboarding to decline.</div>
            <br>

            <div class="txttitulo">However, Jay Shuirman (before he passed away) and Richard Novak founded a brand
                specializing in skateboard trucks together with other adrenaline enthusiasts: the creators of Thrasher
                Skateboard Magazine,
                the most important magazine "or at least the best known" in the industry. Many know it as “the bible” of
                skateboarding.
                The brand's legacy is undeniable and, today, many people recognize it for the bizarre colors, surreal
                designs and for the iconic “Screaming Hand” created more than 30 years ago by artist Jim Phillips, who
                was creative director of the company. and created hundreds of designs for skateboard decks, t-shirts,
                stickers and advertisements.
                In fact, the famous Screaming Hand still remains a symbol of skate and urban culture.</div>
            <br>
            <div class="txttitulo">Over time, Santa Cruz has evolved not only to create better boards, useful
                accessories and high-quality clothing, but also to be an ally to riders, especially with videos where
                people can learn tricks and techniques to master skateboarding.
                Santa Cruz Skateboards has a love story for skateboarding (which we understand at New Era through our
                own passion for headwear and streetwear) and it demonstrates this through its graphics and the
                improvements it makes to the material of its boards.
                Without a doubt, few companies have played such an important role in the scene. Today we can say that
                Santa Cruz has adopted skateboarding as a culture and a way of life, beyond seeing it as a simple sport.
                For New Era it is an honor to manifest the unique and experimental spirit of Santa Cruz through original
                clothing and caps stamped by skateboarding pros.
            </div>
            <br>

            <div class="frase">Let the slips, falls, bumps and scrapes continue, because without them skating would not
                be the same...</div>

            <h2 class="subtitulo">MISSION</h2>
            <div class="txt">
                <p>Our company is avant-garde, oriented at all times to ensure that our products have the
                    elegance, fashion, trend and quality that our most demanding clients deserve to have.
                </p>
            </div>

            <h3 class="subtitulo">VISION</h3>
            <div class="txt">
                <p>
                    We like to stand out for the services we offer, grow as a company
                    becoming a leader, being recognized and distinguished for the quality of our products.
                </p>
            </div>
            <br>
            <div class="Imagenes">
                <div class="social-media-container">
                    <a href="https://www.facebook.com/SantaCruzSkateboards/?locale=es_LA" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/fb.svg" alt="Facebook"></a>
                    <a href="https://www.instagram.com/santacruzskateboards/?hl=es" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/ins.svg" alt="Instagram"></a>
                    <a href="https://twitter.com/santacruzskate?lang=es" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/twe.svg" alt="Twitter"></a>
                    <a href="https://www.youtube.com/SantaCruzSkateboards" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/you.svg" alt="Youtube"></a>
                    <a href="https://www.tiktok.com/@santa_cruz_skateboards" target="_blank"><img src="<?php echo APP_URL; ?>app/views/img/tik.svg" alt="TikTok"> </a>

                </div>

            </div>

        </div>

    </div>
    <?php require_once "./app/views/inc/footer.php" ?>
</body>

</html>