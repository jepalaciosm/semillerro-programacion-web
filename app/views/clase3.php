<html>
    <head>        
        <script src="./assets/js/app.js"></script>
        <script src="./libs/alertify/lib/alertify.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="../../public/libs/amsul-pickadate/lib/legacy.js"></script>
        <script src="../../public/libs/amsul-pickadate/lib/picker.date.js"></script>
        <script src="../../public/libs/amsul-pickadate/lib/picker.time.js"></script>
        
        

        <script type="text/javascript" src="./libs/complexify/jquery.complexify.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./libs/alertify/themes/alertify.default.css">
        <link rel="stylesheet" type="text/css" href="./libs/alertify/themes/alertify.core.css">
        <link rel="stylesheet" type="text/css" href="./libs/amsul-pickadate/lib/themes/default.css">
        <link rel="stylesheet" type="text/css" href="./libs/amsul-pickadate/lib/themes/default.date.css">
        <link rel="stylesheet" type="text/css" href="./libs/amsul-pickadate/lib/themes/default.time.css">
      
        <title>Clase JavaScript</title>
    </head>
    <body>
        <button onclick="ms.cambiarColorFondo('green')">Verde</button>
        <button onclick="ms.cambiarColorFondo('yellow')">Amarillo</button>
        <button onclick="ms.Saludar()">Saludo</button>
        <button onclick="ms.OcultarParrafoconID('Oculto')">Ocultar Parrafo</button>
        <button onclick="ms.OcultarParrafos()">Ocultar Todos los Parrafos</button>
        <button onclick="ms.MostrarParrafos()">Ocultar Todos los Parrafos</button>
        <button onclick="ms.Alertify()">Mensaje</button>
        
       
        
        <p id="Oculto">Esto es un parrafo</p>
        <p>Parrafo 1</p>
        <p>Parrafo 2</p>
        <p>Parrafo 3</p>
        
        <input type="text" value="75" class="dial">
        
         <div>
            <input onclick="ms.Calendar()" class="datepicker" type="text">
        </div>
        
    </body>
</html>

