<?php

require_once("../models/alumnos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumnos = new Alumnos();

    // Obtener los valores de los input
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $matematicas = $_POST["matematicas"];
    $fisica = $_POST["fisica"];
    $programacion = $_POST["programacion"];

    // Agregar el alumno
    $alumnos->agregarAlumno($id, $nombre, $matematicas, $fisica, $programacion);

    // Calcular los resultados
    $notasPromedio = array(
        "matematicas" => $alumnos->notaPromedioMateria("matematicas"),
        "fisica" => $alumnos->notaPromedioMateria("fisica"),
        "programacion" => $alumnos->notaPromedioMateria("programacion")
    );
    $numAprobados = array(
        "matematicas" => $alumnos->numAprobadosMateria("matematicas"),
        "fisica" => $alumnos->numAprobadosMateria("fisica"),
        "programacion" => $alumnos->numAprobadosMateria("programacion")
    );
    $numAplazados = $alumnos->numAplazados();
    $numAprobaronTodas = $alumnos->numAprobaronTodas();
    $numAprobaronUna = $alumnos->numAprobaronUna();
    $numAprobaronDos = $alumnos->numAprobaronDos();
    $notasMaximas = array(
        "matematicas" => $alumnos->notaMaximaMateria("matematicas"),
        "fisica" => $alumnos->notaMaximaMateria("fisica"),
        "programacion" => $alumnos->notaMaximaMateria("programacion")
    );

    // Devolver los resultados
    $resultado = array(
        "notasPromedio" => $notasPromedio,
        "numAprobados" => $numAprobados,
        "numAplazados" => $numAplazados,
        "numAprobaronTodas" => $numAprobaronTodas,
        "numAprobaronUna" => $numAprobaronUna,
        "numAprobaronDos" => $numAprobaronDos,
        "notasMaximas" => $notasMaximas
    );

    echo json_encode($resultado);
}


?>