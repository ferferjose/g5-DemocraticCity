<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Modificar Pregunta</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <audio src="audio/musicaInicio.mp3" preload="auto" id="audio"></audio>
    <main>
        <div class="icons">
            <button id="musica" class="unmute"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#000000"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-volume"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8a5 5 0 0 1 0 8" /><path d="M17.7 5a9 9 0 0 1 0 14" /><path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" /></svg></button>
            <button id="musica2" class="mute"><svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-volume-off"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8a5 5 0 0 1 1.912 4.934m-1.377 2.602a5 5 0 0 1 -.535 .464" /><path d="M17.7 5a9 9 0 0 1 2.362 11.086m-1.676 2.299a9 9 0 0 1 -.686 .615" /><path d="M9.069 5.054l.431 -.554a.8 .8 0 0 1 1.5 .5v2m0 4v8a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l1.294 -1.664" /><path d="M3 3l18 18" /></svg></button>
        </div>
        <div>
            <h1>Modificar pregunta</h1>
            <form id="formularioModificarPregunta">
            <?php
                echo '<input type="number" placeholder="Introduce la pregunta" name="idPregunta" id="idPregunta" value="'.$datos['idPregunta'].'" hidden>';
                echo '<div class="validacionPregunta"></div>';
                echo '<input type="text" placeholder="Introduce la pregunta" name="pregunta" id="pregunta" value="'.$datos['texto'].'">';
                echo '<div>';

                //Id multimedia de la pregunta
                echo '<input type="hidden" name="idMultimediaPregunta" id="idPregunta" value="'.$datos['idMultimediaPregunta'].'">';
                //rutaPregunta
                echo '<input type="hidden" name="rutaPregunta" value="'.$datos['rutaPregunta'].'">';
                

                echo '<img src="'.$datos['rutaPregunta'].'" alt="Imagen de la pregunta" class="imagenModificar">';
                echo '<input type="file" name="imagenPregunta" id="imagenPregunta" class="inputFile">';
                echo '</div>';

                $contador = 1; // Contador para nombres e IDs únicos
                foreach ($datos['respuestas'] as $respuesta) {
                    echo '<div class="validacionRespuesta'.$contador.'"></div>';
                    echo ' <input type="text" placeholder="Respuesta '.$contador.'" name="respuesta'.$contador.'" id="respuesta'.$contador.'" value="'.$respuesta['respuesta'].'">';
                    echo '<div>';

                     //Id multimedia de la respuesta
                    echo '<input type="hidden" name="idMultimediaEdificio'.$contador.'" value="'.$respuesta['idMultimediaEdificio'].'">';
                    //rutaRespuesta
                    echo '<input type="hidden" name="rutaEdificio'.$contador.'" value="'.$respuesta['rutaEdificio'].'">';

                    echo '<input type="file" name="respuesta'.$contador.'file" id="respuesta'.$contador.'file" class="inputFile">';
                    echo '<img src="'.$respuesta['rutaEdificio'].'" alt="Imagen de la pregunta" class="imagenModificar">';
                    echo '</div>';
                    
                    echo '<div>';
                    echo '<div class="validacionEducacion'.$contador.'"></div>';
                    echo '<input type="number" placeholder="Educación" name="educacion'.$contador.'" id="educacion'.$contador.'" value="'.$respuesta['educacion'].'">';
                    echo '<div class="validacionSanidad'.$contador.'"></div>';
                    echo '<input type="number" placeholder="Sanidad" name="sanidad'.$contador.'" id="sanidad'.$contador.'" value="'.$respuesta['sanidad'].'">';
                    echo '<div class="validacionSeguridad'.$contador.'"></div>';
                    echo '<input type="number" placeholder="Seguridad" name="seguridad'.$contador.'" id="seguridad'.$contador.'" value="'.$respuesta['seguridad'].'">';
                    echo '<div class="validacionEconomia'.$contador.'"></div>';
                    echo '<input type="number" placeholder="Economía" name="economia'.$contador.'" id="economia'.$contador.'" value="'.$respuesta['economia'].'">';
                    echo '</div>';
                    $contador++; // Incrementar para la siguiente respuesta
                }
            ?>
                <input type="submit" class="boton" value="Modificar" id="modificarPregunta">
                <p><a href="index.php?c=Usuarios&m=mostrarPanelSuper">Panel Admin</a></p>
                <p><a href="index.php?c=Preguntas&m=cMostrarPreguntasyRespuestas">Volver atras</a></p>

            </form>
            <div class="alcaldes">
                <div><img src="img/alcalde1.png" alt=""></div>
                <div><img src="img/alcalde2.png" alt=""></div>
            </div>
            
        </div>
    </main>
    <script type="module" src="js/views/modificarPregunta.js"></script>
    <script type="module" src="js/controllers/cModificarPregunta.js"></script>
    <script type="module" src="js/models/mModificarPregunta.js"></script>
    <!-- <script src="js/musica.js"></script> -->
</body>
</html>