///alert("Hola mundo");
 //edad = 21

/*function mayor_edad(edad){
    if(edad > 18){
        alert("usted es mayor de edad");
        laction.href="http//www.google.com";
    }
}*/

//name= prompt("Ingrese su nombre");
//alert("Usted se llama" +name);


/*años = prompt("Ingrese su edad");
while(años < 18){
    años = prompt("Ingrese su edad");
}*/

/* JSON (JavaScript Object Notation*/
/*var persona ={
    nombre: "John",
    apellido:"Palacios",
    lugar_nacimiento:"Bolivar",
    interes:['programación','futbol','aventura']
};*/
var fb ={
    comentar:function(id){
        var comentario = $("#comentario-"+id);
        if(comentario.val()!==""){
         ///   alert(comentario.val());
            $.ajax({
            url: 'publicacion/comentar',
            type: 'POST',
            async: true,
            data: {
                usuario :1,
                comentario : comentario.val()
            },
            success: procesaRespuesta,
            error: muestraError
});
        }else{
            alert("Este campo es obligatorio");
        }
        
    }
};

/// alert(persona.nombre);
 
 /*var managerScreen= managerScreen ||{};
 managerScreen={
     cambiarColorFondo: function(color){
         document.body.style.background=color;
     },
     
     Saludar:function(){
         alert("Hello moto");
     },
     
     OcultarParrafoconID:function(id){
         document.getElementById(id).style.display = 'none';
     },
     
     OcultarParrafos:function(){
         /// JavaScript normal
       /* var ps= document.getElementsByTagName('p');
        for (i = 0; i < ps.length; i++){
            ps[i].style.display = 'none';
        }*/
       /// $("button").click(function(){
                //$("p").hide();
       /// });
     /*   $("p").toggle();
     },
     
     
     MostrarParrafos:function(){
        var ps= document.getElementsByTagName('p');
        for (i = 0; i < ps.length; i++){
            ps[i].style.display = 'block';
        }
     },
     
     Alertify: function(){
        alertify.alert("Message");
     },
    
     
     Complesify:function(pass){
       /*  $("#password").complexify({}, callback(valid, 10){
             alert("Password complexity: " + 10);
            });*/
    /* },
     
     Calendar:function(){
         $('.datepicker').pickadate();
     }
 };

var ms= managerScreen;*/


