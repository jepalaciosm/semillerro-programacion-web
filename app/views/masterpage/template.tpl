<html>
    <head>
        <title>Facebook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <div class="container">
            {capture assign='layouts'}../layouts/{$layout}.tpl{/capture}
         
            {include file=$layouts} 
            
        </div>
        
        <!-- 
        Hola {$nombre}, tu edad es {$edad}<br>
        
        {capture assign='xxx'}
                PUEDO PONER CUALQUER TEXTO O FUNCIÓN DE html, css, js ...
                 Y LO ASIGNA A LA VARIABLE xxx
        {/capture}
        
        {$xxx}--->
        
        

    </body>
</html>
