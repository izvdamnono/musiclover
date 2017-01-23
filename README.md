REST 1.0
<pre>
json -> json_encode
        json_decode

2.0 Métodos HTTP (CRUD)
    ->GET:      consultar(R)
    ->POST:	    crear(C)
    ->PUT:	    modificar(U)
    ->DELETE:   eliminar(D) 
3.0 Api (Direcciones amigables)
    -> Normal:  https://www.izv.org/ver.php?alumno=2334
            GET:    http://www.izv.org/alumno/2334 -> informacion del alumno 2334
            POST:	http://www.izv.org/alumno + {json} -> Crear alumno
            PUT:	http://www.izv.org/alumno/2334 + {json} -> Modificar alumno
            DELETE: http://www.izv.org/alumno/2334 -> borrar http://www.izv.org/alumno + {json}
    -> borrar where -> 1 sola página web que recibe todas las peticiones
            apache+php -> .htaccess -> reglas de reescritura {
                si pido una página que no existe te mando a una página concreta
            }

    1º Averiguar el método utilizado ( PUT, POST, DELETE, GET ) $_SERVER['REQUEST_METHOD']
    2º Descomponer la URL: alumno/2334 -> array( alumno, 2334 )
    3º Obtener los parámetros json: php://input
    4º Operar: Cuando se tengan los datos se trabajan con ellos
    5º Respuesta json

    //BD Proyecto
    Nombre BD: wp
    Usuario: uwp
    Clave: cwp
    
    
    Doctrine -> Aplicación para melomanos
    disco 
        -> id 
        -> titulo
          
    Cancion 
        -> id
        -> titulo
    
    Artista
        -> id 
        -> nombre
    
    Disco_cancion
        -> id
        -> id_disco   }
        -> id_cancion } unique 
        -> id_artista }
        
        
        
        
    tabla PROFESOR      id_profesor autoincrement, nombre departamento,         
    tabla ACTIVIDAD     id_actividad autoincrement, id_profesor que organiza, titulo, descripcion de la actividad, descripcion corta, id_grupo, fecha (DATE), lugar, hora inicio (TIME), hora fin (TIME), Foto reprensentiva  *(opcional)    (1...n)
    tabla GRUPO         id_grupo 
    
    Lista las actividades de datos de una fecha concreta. -> mas cercanas primero
    Lista las actividades de las actividades de profesor.
</pre>