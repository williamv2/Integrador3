<?php

include_once("../conexion.php");

$con = new conexion;

$sql = "SELECT file_name FROM galeria WHERE uploaded_on <= NOW() ORDER BY id DESC LIMIT 6";

$resultset = $con->consulta($sql);

$total_records = array();

while($row =$resultset->fetch_assoc()) {

$total_records[] = $row;

}

echo json_encode($total_records);
?>