<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>FAQ</title>
    <style>
        button {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: rgb(232, 214, 214);
            border: none;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            body {
                background-color: lightblue;
            }
        }

        @media (min-width: 1024px) {
            body {
                background-color: lightgray;
            }
        }

        @media (max-height: 600px) {
            body {
                background-color: lightgreen;
            }
        }

        @media (orientation: portrait) {
            body {
                background-color: pink;
            }
        }

        @media (orientation: landscape) {
            body {
                background-color: lightyellow;
            }
        }


        @media (min-resolution: 300dpi) {
            body {
                background-color: lightcoral;
            }
        }


        @media (-webkit-min-device-pixel-ratio: 2) {
            body {
                background-color: lightseagreen;
            }
        }


        @media (max-device-width: 480px) {
            body {
                background-color: lightpink;
            }
        }

        @media (min-device-width: 1024px) {
            body {
                background-color: lightblue;
            }
        }


        @media (max-width: 1000px) {
            body {
                background-color: lightsalmon;
            }
        }

        @media (pointer: coarse) {
            body {
                background-color: lightgray;
            }
        }

        @media (pointer: fine) {
            body {
                background-color: lightgreen;
            }
        }

        p {
            border: 2px solid powderblue;
            padding: 30px;
            margin: 50px;
        }

        body {

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Sofia", sans-serif;
            font-size: 30px;

        }

        p.uno {
            border: 2px solid red;
            border-radius: 12px;
            padding: 35px;
            font-family: "Lucida Console", "Courier New", monospace;
        }

        h1 {
            font-size: 30px;
            color: rgb(246, 255, 0);
            -webkit-text-stroke: .5px black;
            border: 5px solid black;
            background-color: red;
            padding: 5px;
        }

        h2 {
            -webkit-text-stroke: .5px black;
            border: 5px solid black;
            background-color: red;
            padding: 5px;
            font-family: "Sofia", sans-serif;
            font-size: 30px;
        }
    </style>
    <style>
        body {
            background-image: url('https://logos-world.net/wp-content/uploads/2021/10/Santa-Cruz-Skateboards-Logo.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Sofia", sans-serif;
            font-size: 20px;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        p,
        p.uno {
            transition: transform 0.3s ease-in-out;
        }

        h1,
        h2 {
            text-align: center;
            padding: 10px;
            margin: 10px;
            border: 2px solid black;
            background-color: #FF5733;
            -webkit-text-stroke: .5px black;
            color: white;
        }

        h2 {
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
        }

        p,
        p.uno {
            border: 2px solid #61C0BF;
            border-radius: 12px;
            padding: 20px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        h1:hover,
        h2:hover,
        p:hover,
        p.uno:hover {
            transform: scale(1.1);
        }

        img:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <?php require_once "./app/views/inc/navbar.php" ?>
    <button onclick="ObscurecerPagina()">Obscurecer pagina</button>
    <script>
        function ObscurecerPagina() {
            document.body.style.backgroundColor = 'Gray';
            document.body.style.color = '#255';
        }
    </script>


    <h1 style="text-align:center;">Preguntas frecuentes</h1>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Cuáles son los diferentes tipos de patinetas disponibles en el mercado?</h2>
        <p class="uno">En el mercado, encontrarás principalmente tres tipos de patinetas: las patinetas de skate, las longboards y las penny boards. Cada una está diseñada para un tipo de patinaje específico, desde trucos en skateparks hasta viajes largos y cruceros.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Cuál es la diferencia entre una patineta de skate, una longboard y una penny board?</h2>
        <p class="uno">Las patinetas de skate son más cortas, con ruedas pequeñas y se utilizan para trucos y acrobacias. Las longboards son más largas y están diseñadas para desplazamientos y descenso de colinas. Las penny boards son pequeñas y ligeras, ideales para la portabilidad y el transporte.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Cuál es el tamaño adecuado de patineta para mí?</h2>
        <p class="uno">El tamaño adecuado de la patineta depende de tus preferencias personales. Para patinaje callejero, una tabla de skate de 7.75" a 8.25" es común. Para longboards, las longitudes varían, pero 40" es una opción versátil.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Qué diferencia hay entre las ruedas de dureza blanda y dura en una patineta?</h2>
        <p class="uno">Las ruedas blandas proporcionan más agarre y absorben impactos, ideales para cruceros y longboarding. Las ruedas duras son ideales para trucos de skate, ya que ofrecen una mejor capacidad de deslizamiento.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Qué diferencia hay entre las ruedas de dureza blanda y dura en una patineta?</h2>
        <p class="uno">Las ruedas blandas proporcionan más agarre y absorben impactos, ideales para cruceros y longboarding. Las ruedas duras son ideales para trucos de skate, ya que ofrecen una mejor capacidad de deslizamiento.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Debo elegir una patineta completa o armarla con piezas individuales?</h2>
        <p class="uno">Depende de tu nivel de experiencia y preferencias. Las patinetas completas son ideales para principiantes, mientras que armar una personalizada te permite elegir cada componente según tus necesidades.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Cuál es la diferencia entre una tabla de skate de madera y una de plástico?</h2>
        <p class="uno">Las tablas de skate de madera ofrecen mayor durabilidad y mejor control. Las de plástico, como las penny boards, son más ligeras y portátiles.</p>
    </div>

    <div style="background-color:rgba(0, 0, 0, 0);color:white;padding:20px;">
        <h2 style="text-align:center;" class="font-effect-shadow-multiple">¿Qué tipo de trucks (ejes) debo elegir para mi patineta?</h2>
        <p class="uno">Los trucks varían en ancho y altura. Elige trucks que se ajusten al ancho de tu tabla y tu estilo de patinaje. Los ejes más anchos ofrecen mayor estabilidad.</p>
    </div>

    <?php require_once "./app/views/inc/footer.php" ?>
</body>

</html>