<?php


class Alumnos {
    private $alumnos;

    function __construct() {
        $this->alumnos = array();
    }

    public function agregarAlumno($id, $nombre, $matematicas, $fisica, $programacion) {
        // Agrega un alumno al arreglo de alumnos
        $alumno = array(
            'id' => $id,
            'nombre' => $nombre,
            'matematicas' => $matematicas,
            'fisica' => $fisica,
            'programacion' => $programacion
        );
        array_push($this->alumnos, $alumno);
    }

    public function notaPromedioMateria($materia) {
        // Calcula y devuelve la nota promedio de una materia dada
        $total_notas = 0;
        $num_alumnos = count($this->alumnos);
        foreach ($this->alumnos as $alumno) {
            $total_notas += $alumno[$materia];
        }
        return $total_notas / $num_alumnos;
    }

    public function numAprobadosMateria($materia) {
        // Calcula y devuelve el número de alumnos aprobados en una materia dada
        $num_aprobados = 0;
        foreach ($this->alumnos as $alumno) {
            if ($alumno[$materia] >= 10) {
                $num_aprobados++;
            }
        }
        return $num_aprobados;
    }
    public function numAprobaronUna() {
        // Calcula y devuelve el número de alumnos que aprobaron una sola materia
        $numAprobaronUna = 0;
        foreach ($this->alumnos as $alumno) {
            $materiasAprobadas = 0;
            if ($alumno['matematicas'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['fisica'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['programacion'] >= 10) {
                $materiasAprobadas++;
            }
            if ($materiasAprobadas == 1) {
                $numAprobaronUna++;
            }
        }
        return $numAprobaronUna;
    }

    public function numAprobaronDos() {
        // Calcula y devuelve el número de alumnos que aprobaron dos materias
        $numAprobaronDos = 0;
        foreach ($this->alumnos as $alumno) {
            $materiasAprobadas = 0;
            if ($alumno['matematicas'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['fisica'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['programacion'] >= 10) {
                $materiasAprobadas++;
            }
            if ($materiasAprobadas == 2) {
                $numAprobaronDos++;
            }
        }
        return $numAprobaronDos;
    }

    public function numAprobaronTodas() {
        // Calcula y devuelve el número de alumnos que aprobaron dos materias
        $numAprobaronTodas = 0;
        foreach ($this->alumnos as $alumno) {
            $materiasAprobadas = 0;
            if ($alumno['matematicas'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['fisica'] >= 10) {
                $materiasAprobadas++;
            }
            if ($alumno['programacion'] >= 10) {
                $materiasAprobadas++;
            }
            if ($materiasAprobadas == 3) {
                $numAprobaronTodas++;
            }
        }
        return $numAprobaronTodas;
    }

    public function notaMaximaMateria($materia) {
        // Calcula y devuelve la nota máxima de una materia dada
        $notas = array();
        foreach ($this->alumnos as $alumno) {
            array_push($notas, $alumno[$materia]);
        }
        return max($notas);
    }

    public function numAplazados() {
        // Calcula y devuelve el número de alumnos que aprobaron dos materias
        $numAplazados = 0;
        foreach ($this->alumnos as $alumno) {
            $materiasAplazadas = 0;
            if ($alumno['matematicas'] < 10) {
                $materiasAplazadas++;
            }
            if ($alumno['fisica'] < 10) {
                $materiasAplazadas++;
            }
            if ($alumno['programacion'] < 10) {
                $materiasAplazadas++;
            }
            
        }
        return $numAplazados;
    }
}

