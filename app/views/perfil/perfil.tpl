{capture assign='left'}
    <div>
        <center><img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10516802_727098207344364_6397306397119633881_n.jpg?oh=20c422ef8e7c8b3ae539781fe27bf33f&oe=55A6FC0C&__gda__=1438362804_531013be962354835a574a780e60cff6" width="150" height="150"></center>
    </div> 
    <div>
        Información
    </div>
    Lo de la izquierda         
{/capture}

{capture assign="right"}
  
   {Form::open(['url'=>'publicacion/crear'])}
   <textarea required name="publicacion" placeholder="¿Qué estás pensando?" rows="3" class="col-sm-12"></textarea>
  <button type="submit" class="btn pull-right btn-success">Publicar</button>
  {Form::close()}
  <hr>
  <br>
  <br>
  <br>
     {foreach $publicaciones as $publicacion}
       <div class="well" style="word-break: break-all; margin-bottom: 5px; padding: 10px 5px; font-family: 'Noto Sans', sans-serif; ">
         <button class="close" aria-hidden="true" style="margin-top: -10px;"><a href="{url('publicacion/eliminar')}/{$publicacion->id}">&times;</a></button>
         {$publicacion->publicacion}
       </div>
       <div>
         <span class="glyphicon glyphicon-comment"></span> <span>Comentar</span> |
         <span class="glyphicon glyphicon-thumbs-up"></span> Me gusta
         
         <div id="comentarios-{$publicacion->id}">
           <div style="font-size: 10px; padding: 3px;" class="well well-sm col-sm-7">Esto es un comentario</div>
         </div>
         <br>
         <br>
         <textarea id="comentario-{$publicacion->id}" rows="1" placeholder="Escribe tu comentario ... " class="col-sm-6"></textarea>
         <button class="btn btn-success btn-sm" onclick="fb.comentar({$publicacion->id})">Comentar</button>
         
         
       </div>
       <hr>
       {foreachelse}
         
         <div class="alert alert-danger">
            No hay publicaciones
         </div>
       
     {/foreach}
  
  {/capture}



{capture assign='portada'}
    <div>
    <img src="http://www.3dcloudmotion.com/wp-content/uploads/2014/06/Slider-4.png" width="1150" height="300">
    <p><br>
    </div>
{/capture}

{include file='../masterpage/template.tpl' layout="two_columns"} 