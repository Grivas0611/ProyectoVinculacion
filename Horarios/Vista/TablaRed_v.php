<?php


$tabla="<div class='row'>";
$tabla.="<table class='table table-light table-sm'>";
$tabla.="<thead class='thead-dark'>";
$tabla.="<tr>";
$tabla.="<th><i class='fas fa-user-plus'></i> 1er Nivel</th>";
$tabla.="<th><i class='fas fa-user-plus'></i> 2do Nivel</th>";
$tabla.="<th><i class='fas fa-user-plus'></i> 3er Nivel</th>";
$tabla.="<th><i class='fas fa-user-plus'></i> 4to Nivel</th>";
$tabla.="<th><i class='fas fa-user-plus'></i> 5to Nivel</th>"; 
$tabla.="</tr>";

$tabla.="</thead>";
$tabla.="<tbody>";
$tabla.="<tr>";
$tabla.="<td>COMUNICACIÒN ORAL Y ESCRITA </td>";
$tabla.="<td>INGLÈS TÈCNICO</td>";
$tabla.="<td>ÈTICA PROFESIONAL</td>";
$tabla.="<td>ADMINISTRACIÒN DE REDES</td>";
$tabla.="<td>TALLER EN REDES INALÀMBRICAS</td>";
$tabla.="</tr>";

$tabla.="<tr>";
$tabla.="<td>MATEMÀTICA I</td>";
$tabla.="<td>MATEMÀTICA EN REDES </td>";
$tabla.="<td>DESARROLLO DE APLICACIONES INTERNET</td>";
$tabla.="<td>TALLER DE FIREWALL Y PROXY</td>";
$tabla.="<td>AUDITORÌA INFORMÀTICA</td>";
$tabla.="</tr>";

$tabla.="<tr>";
$tabla.="<td>INGLÈS  I</td>";
$tabla.="<td>BASE DE DATOS </td>";
$tabla.="<td>TRANSMICIÒN DE DATOS</td>";
$tabla.="<td>TALLER DE REDES LAN Y WAN</td>";
$tabla.="<td>TALLER DE TELEFONÌA</td>";
$tabla.="</tr>";

$tabla.="<tr>";
$tabla.="<td >FUNDAMENTOS DE COMPUTACIÒN</td>";
$tabla.="<td>FUNDAMENTOS DE REDES  </td>";
$tabla.="<td>PLATAFORMA DE SERVIDORES MICROSOFT</td>";
$tabla.="<td>GESTIÒN DE INFRAESTRUCTURA</td>";
$tabla.="<td>SEGURIDAD DE REDES</td>";
$tabla.="</tr>";

$tabla.="<tr>";
$tabla.="<td>PROGRAMACIÒN</td>";
$tabla.="<td>TALLER DE SISTEMAS OPERATIVOS  </td>";
$tabla.="<td>PLATAFORMA DE SERVIDORES LINUX/UNIX</td>";
$tabla.="<td>PRÀCTICA PREPROFESIONAL I (VINCULACIÒN CON LA COMUNIDAD)</td>";
$tabla.="<td>PRÀCTICA PREPROFESIONAL II (VINCULACIÒN CON LA COMUNIDAD)</td>";
$tabla.="</tr>";

$tabla.="<tr>";
$tabla.="<td>FUNDAMENTOS DE SISTEMAS OPERATIVOS</td>";
$tabla.="<td>TALLER DE INSTALACIÒN DE REDES </td>";
$tabla.="<td>METODOLOGÌA DE LA INVESTIGACÌON Y VINCULACIÒN CON LA COMUNIDAD</td>";
$tabla.="<td>PROYECTO DE REDES I</td>";
$tabla.="<td>PROYECTO DE REDES II</td>";
$tabla.="</tr>";

$tabla.="</tbody>";
$tabla.="</table>";
$tabla.="</div>";  

        


header("Location: ../Vista/Principal_v.php?desarrollo=$tabla");

?>
