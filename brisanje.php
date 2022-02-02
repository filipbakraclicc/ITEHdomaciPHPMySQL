<?php

include 'DB.php';
$database = new DB();

$idBrisanje = $_POST['ID'];
$sql_upit = "delete from izvestaj where id=" . $idBrisanje;
$database->conn->query($sql_upit);
