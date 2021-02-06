<?php
$tablad = "<div class='container'> ";
$tablad .= "<table class='table table-bordered'>";
$tablad .= "<thead>";
$tablad .= "<tr>";
$tablad .= "<th>Nombre:</th>";
$tablad .= "<th>Apellido:</th>";
$tablad .= "<th>Email:</th>";
$tablad .= "</tr>";
$tablad .= "</thead>";
$tablad .= "<tbody>";
$tablad .= "<tr>";
$tablad .= "<td>David</td>";
$tablad .= "<td>Galarza</td>";
$tablad .= "<td>DGalarza@itsqmet.edu.ec</td>";
$tablad .= "</tr>";
$tablad .= "<tr>";
$tablad .= "<td>Diego</td>";
$tablad .= "<td>Ortega</td>";
$tablad .= "<td>DOrtega@itsqmet.edu.ec</td>";
$tablad = "</tr>";
$tablad .= "<tr>";
$tablad .= "<td>Gabriela</td>";
$tablad .= "<td>Rivas</td>";
$tablad .= "<td>GRivas@itsqmet.edu.ec</td>";
$tablad .= "</tr>";
$tablad .= "<tr>";
$tablad .= "<td>Luis Enrique</td>";
$tablad .= "<td>Yulan</td>";
$tablad .= "<td>LYulan@itsqmet.edu.ec</td>";
$tablad .= "</tr>";
$tablad .= "<tr>";
$tablad .= "<td>Alexis</td>";
$tablad .= "<td>Taco</td>";
$tablad .= "<td>ATaco@itsqmet.edu.ec</td>";
$tablad .= "</tr>";
$tablad .= "<tr>";
$tablad .= "<td>Viviana</td>";
$tablad .= "<td>Flores</td>";
$tablad .= "<td>VFlores@itsqmet.edu.ec</td>";
$tablad .= "</tr>";
$tablad .= "</tbody>";
$tablad .= "</table>";
$tablad = "</div>";
echo $tablad;
?>          <!-- mostrar malla curricular

                    <div class="card bg-primary text-white">
                        <div class="card-header" align="center">
                            Malla Curricular
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">
                           //<?php
//if (isset($_GET['desarrollo'])) {
//  $tabla = $_GET['desarrollo'];
//echo $tabla;
//}
?>
                        </div>
                    </div> 
                    
                    <!-- mostrar profesor
                    <br>
                    <div align="center">
                        <div class="card bg-primary text-white w-50">
                            <div class="card-header">Docentes</div>
                        </div> 
                        <div class="card w-50">
                            <div class="card-body">
                                <?php
//if (isset($_GET['docente'])) {
//  $tablad = $_GET['docente'];
//echo $tablad;
//}
?>
                            </div> 
                        </div>   
                    </div>
                    !-->
function Enviar() {
var carrera = document.getElementById("carrera").value;
if (carrera === "1") {
location.href = "../Vista/TablaDes_v.php";
} else if (carrera === "2") {
location.href = "../Vista/TablaRed_v.php";
}
}