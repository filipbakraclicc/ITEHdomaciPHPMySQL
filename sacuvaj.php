<?php

require 'DB.php';
require 'Izvestaj.php';
$database = new DB();

$izvestaj = new Izvestaj();
$izvestaj->mesec = $_POST['Mesec'];
$izvestaj->godina = $_POST['Godina'];
$izvestaj->prihodi = $_POST['Prihodi'];
$izvestaj->troskovi = $_POST['Troskovi'];
$izvestaj->kompanijaID = $_POST['Kompanija'];

$sql_upit = "insert into izvestaj values (null, '$izvestaj->mesec', '$izvestaj->godina', '$izvestaj->prihodi', '$izvestaj->troskovi', '$izvestaj->kompanijaID')";
$database->conn->query($sql_upit);
