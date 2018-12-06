<?php

include("../conexion.php");

$con = new conexion;

$sql = "SELECT * FROM noticia ORDER BY noticia.fecha  DESC LIMIT 3";

$resultset = $con->consulta($sql);

$total_records = array();

while($row =$resultset->fetch_assoc()) {

$total_records[] = $row;

}

echo json_encode($total_records);
?>