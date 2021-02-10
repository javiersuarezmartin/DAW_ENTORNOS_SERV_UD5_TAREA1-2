<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grupo - Alumnos</title>
        <link rel="stylesheet" href="../css/styles.css" type="text/css">
    </head>
    <body>
        <div class="container-global">
            <div class="container">
                <div class="formulario">
                    <?php
                        if (isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['curso']) && isset($_POST['nombre2']) && isset($_POST['edad2']) && isset($_POST['curso2'])) {
                            // Incluimos el archivo con el código del objeto Alumno
                            include './Alumno.php';
                            
                            // Declaramos dos nuevos objetos Alumno
                            $alumno1 = new Alumno();
                            $alumno2 = new Alumno();
        
                            // Asignamos el nombre a los objetos Alumno
        
                            $alumno1->cambiarNombre($_POST['nombre']);
                            $alumno2->cambiarNombre($_POST['nombre2']);
        
                            // Asignamos el nombre a los objetos Alumno (EXTRA)
        
                            $alumno1->setEdad($_POST['edad']);
                            $alumno2->setEdad($_POST['edad2']);
                            
                            // Asignamos el nombre a los objetos Alumno (EXTRA)
        
                            $alumno1->setCurso($_POST['curso']);
                            $alumno2->setCurso($_POST['curso2']);
                            
                        
                            // Imprimimos los datos y utlizamos el método mostrarNombre();
                            
                            // Mostramos Alumno_1
                            $alumno1->mostrarNombre();
                            echo ('<p>El alumno ' . $alumno1->getNombre() . ' tiene ' . $alumno1->getEdad() . ' a&ntilde;os y está en el curso ' . $alumno1->getCurso() . 'º</p>');
                            
                            // Mostramos Alumno_2
                            $alumno2->mostrarNombre();
                            echo ('<p>El alumno ' . $alumno2->getNombre() . ' tiene ' . $alumno2->getEdad() . ' a&ntilde;os y está en el curso ' . $alumno2->getCurso() . 'º</p>');
                        } else {
                            echo ('<p>No ha completado correctamente los datos del formulario</p>');
                        };  
        
                    ?>
                    <br>
                    <a href="../html/index.html" class="btn">Volver</a>
                </div>
            </div>
        </div>
        
    </body>
</html>