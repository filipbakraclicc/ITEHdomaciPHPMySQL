<?php

class Izvestaj
{
    public $id;
    public $mesec;
    public $godina;
    public $prihodi;
    public $troskovi;
    public $kompanijaID;

    public function sacuvajIzmene($id, $mesec, $godina, $prihodi, $troskovi, $kompanijaID)
    {
        $database = new DB();
        $sql_upit = "update izvestaj set mesec='$mesec', godina='$godina', prihodi='$prihodi', troskovi='$troskovi', kompanijaID='$kompanijaID' where id='$id'";

        if ($database->conn->query($sql_upit)) {
            $database->conn->close();
            return true;
        } else {
            $database->conn->close();
            return false;
        }
    }
}
