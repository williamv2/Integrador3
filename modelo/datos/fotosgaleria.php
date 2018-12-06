<?php

include("../conexion.php");

$con = new conexion;

$sql = "SELECT * FROM galeria ORDER BY galeria.uploaded_on DESC";

$resultset = $con->consulta($sql);

$total_records = array();

while($row =$resultset->fetch_assoc()) {

$total_records[] = $row;

}

echo json_encode($total_records);
?>