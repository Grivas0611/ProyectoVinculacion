<?php

include './cbdd.php';
$acum = "<option>Seleccione</option>";
$sql = "";
$result = "";
$carrera = $_GET['carrera'];
$sele = $_GET['selec'];
if ($sele == "1") {

    $sql = "SELECT NUM_SEMESTRES FROM `carrera` WHERE ID_CARRERA='$carrera'";
    $result = mysqli_query($cnx, $sql);
    while ($obj = mysqli_fetch_array($result)) {
        $semestre = $obj['NUM_SEMESTRES'];
        for ($i = 1; $i <= $semestre; $i++) {
            $acum .= "<option onclick='Datos(2)' value='$i'>$i Semestre</option>";
        }
    }
    echo $acum;
} else if ($sele == "2") {
    $i = 0;
    $sql = "select modalidad.MOD_DESCRIPCION from modalidad";  //aqui le veo error
    $result = mysqli_query($cnx, $sql);
    while ($obj = mysqli_fetch_array($result)) {
        $modali = $obj['MOD_DESCRIPCION'];
        $i++;// xq va antes??
        $acum .= "<option onclick='Datos(3)' value='$i' > " . $modali .  "</option>";
    }
    echo $acum;
} else if ($sele == "3") {

    $nivel = $_GET['nivel'];
    $modalidad = $_GET['modalidad'];

    $sql1 = "SELECT ID_ASIGNATURA,ASI_DESCRIPCION FROM `asignatura` WHERE ID_CARRERA='$carrera' AND ID_NIVEL='$nivel'";
    $sql2 = "SELECT registro.ID_ASIGNATURA  FROM `registro` inner JOIN asignatura on registro.ID_ASIGNATURA=asignatura.ID_ASIGNATURA WHERE registro.ID_CARRERA='$carrera' AND registro.ID_NIVEL='$nivel' AND registro.ID_MODALIDAD='$modalidad'";
    echo Consulta($sql1, $sql2);
} else if ($sele == "4") {

    $nivel = $_GET['nivel'];
    $modalidad = $_GET['modalidad'];
    $asignatura = $_GET['asignatura'];

    $sql1 = "SELECT CONCAT_WS('-',count(JOR_DESCRIPCION)+1,JOR_DESCRIPCION),JOR_DESCRIPCION,ID_JORNADA FROM `jornada` GROUP BY JOR_DESCRIPCION";
    $sql2 = "SELECT CONCAT_WS('-',count(jornada.JOR_DESCRIPCION),JOR_DESCRIPCION) FROM `registro` inner join jornada on registro.ID_JORNADA=jornada.ID_JORNADA WHERE registro.ID_CARRERA='$carrera' AND registro.ID_NIVEL='$nivel' AND registro.ID_MODALIDAD='$modalidad'  GROUP by jornada.JOR_DESCRIPCION";
    echo Consulta($sql1, $sql2);
} else if ($sele == "5") {

    $nivel = $_GET['nivel'];
    $modalidad = $_GET['modalidad'];
    $asignatura = $_GET['asignatura'];
    $dia=
    
    $sql1 = "SELECT CONCAT_WS('-',count(JOR_DESCRIPCION)+1,JOR_DESCRIPCION),JOR_DESCRIPCION FROM `jornada` GROUP BY JOR_DESCRIPCION";
    $sql2 = "SELECT CONCAT_WS('-',count(jornada.JOR_DESCRIPCION),JOR_DESCRIPCION) FROM `registro` inner join jornada on registro.ID_JORNADA=jornada.ID_JORNADA WHERE registro.ID_CARRERA='$carrera' AND registro.ID_NIVEL='$nivel' AND registro.ID_MODALIDAD='$modalidad'  GROUP by jornada.JOR_DESCRIPCION";
    echo Consulta($sql1, $sql2);
}

function Consulta($sql1, $sql2) {
    include './cbdd.php';
    $acum = "<option>Seleccione</option>";
    $tabla_origen = "";
    $tabla_cruce = "";
    $id = "";
    $horario = 0;
    $horari = "";
    $sele = $_GET['selec'] + 1;
    $result1 = mysqli_query($cnx, $sql1);
    while ($obj1 = mysqli_fetch_array($result1)) {
        $tabla_origen = $obj1[0] . "_" . $tabla_origen;
        $id = $obj1[1] . "-" . $id;
        if ($sele == 5) {
            $horario = $obj1[2] . "-" . $horario;
        }
    }

    $result2 = mysqli_query($cnx, $sql2);
    while ($obj2 = mysqli_fetch_array($result2)) {
        $tabla_cruce = $obj2[0] . "_" . $tabla_cruce;
    }

    $tabla1 = explode("_", $tabla_origen);
    $tabla2 = explode("_", $tabla_cruce);
    $idasig = explode("-", $id);
    

    $num1 = count($tabla1) - 1;  //xq -1 ?
    $num2 = count($tabla2);
    for ($i = 0; $i < $num1; $i++) {
        $conta = 0;
        for ($j = 0; $j < $num2; $j++) {
            if (strcmp($tabla1[$i], $tabla2[$j]) == 0) {
                $conta = $conta + 1;
            }
        }
        if ($conta == 0) {
            if ($sele != 5) {
                $acum .= "<option onclick='Datos($sele)' value='$tabla1[$i]'> " . $idasig[$i] . " </option>";
            } else {
                $acum .= "<option onclick='Datos($sele)' value='$horari[$i]'> " . $idasig[$i] . " </option>";
            }
        }
    }
    return $acum;
}
