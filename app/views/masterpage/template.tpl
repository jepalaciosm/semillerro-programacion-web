<html>
    <head>
        <title>Facebook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
        {HTML::script('assets/js/app.js')}
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
