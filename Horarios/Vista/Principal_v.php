<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <?php
    include '../Controlador/Sidebar.php';
    ?>
    <style>

        body:before {
            content: "";
            width: 100%;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-image: url("../Fondo/pexels-photo-301926.jpeg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.35;
            z-index: auto;

        }

        td {
            font-size: 10px;
        }

        i {
            font-size: 10px;
        }

        button.btn-block {
            border-radius: 25px;
            border: 2px solid #DFFFF1;
        }

    </style>
</head>
<body>

<div class="container">
    <?php
    include '../Controlador/Menubar_c.php';
    ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header card bg-success  text-white"><h5 style="font-family: fantasy">Formulario</h5>
                </div>
                <div class="card-body">
                    <h5>Carrera:</h5>
                    <select class="form-control" id="carrera" onclick="Datos(1)">
                        <option>Seleccione</option>
                        <option value="1">Desarrollo</option>
                        <option value="2">Redes y comunicacion</option>
                    </select><br>
                    <h5>Semestre:</h5>
                    <select class="form-control" id="semestre">

                    </select><br>
                    <h5>Modalidad:</h5>
                    <select class="form-control" id="modalidad">

                    </select><br>
                    <h5>Asignatura:</h5>
                    <select class="form-control" id="asignatura">

                    </select><br>
                    <h5>Dia:</h5>
                    <select class="form-control" id="dia">

                    </select><br>
                    <h5>Hora:</h5>
                    <select class="form-control" id="hora">

                    </select><br>
                    <h5>Docente:</h5>
                    <select class="form-control" id="carrera">
                        <option>Seleccione</option>
                        <option>M. Sc David Galarza</option>
                        <option>M. Sc Diego Ortega</option>
                        <option>Programacion</option>
                    </select><br>
                    <button type="button" id="asignar" class="btn btn-primary btn- btn-block">GUARDAR</button>
                    <br>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <!-- asignaciones!-->
            <div class="card bg-primary text-white">
                <div class="card-header">Asignación</div>
            </div>
            <div class="card">
                <div class="card-body">Content</div>
            </div>
        </div>
    </div>
</div>
<script>
    function Datos(selec) {
        var carrera = document.getElementById("carrera").value;
        var nivel = document.getElementById('semestre').value;
        var modalidad = document.getElementById('modalidad').value;
        var asignatura = document.getElementById('asignatura').value;
        var datos = {
            carrera: carrera,
            nivel: nivel,
            selec: selec,
            modalidad: modalidad,
            asignatura: asignatura
        };

        $.ajax({
            data: datos,
            url: "../Modelo/info_combo_m.php",
            async: true,
            type: "GET",
            dataType: "text",
            success: function (control) {
                if (selec === 1) {

                    document.getElementById("semestre").innerHTML = control;

                } else if (selec === 2) {
                    alert (control);
                    document.getElementById("modalidad").innerHTML = control;

                } else if (selec === 3) {
                    document.getElementById("asignatura").innerHTML = control;

                } else if (selec === 4) {
                    document.getElementById("dia").innerHTML = control;

                }
            }
        });
    }
</script>

</body>
</html>

