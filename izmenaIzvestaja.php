 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
     <title>Document</title>
 </head>

 <body>
     <?php
        require 'DB.php';
        $database = new DB();

        $idIzv = $_GET['id'];

        $sql_upit  = "select * from izvestaj where id=" . $idIzv;
        $ResultSet = $database->conn->query($sql_upit);
        $izvestaj = $ResultSet->fetch_object();

        ?>


     <div class="noviIzvestajFrm">


         <form method="post" id="noviIzvestajForma">
             <div class="red-forma">
                 <label for="mesec" class="form-label">Mesec: </label>
                 <input type="text" class="form-control" name="mesec" value="<?php echo $izvestaj->mesec; ?>">
             </div>

             <div class="red-forma">
                 <label for="godina" class="form-label">Godina: </label>
                 <input type="number" class="form-control" name="godina" value="<?php echo $izvestaj->godina; ?>">
             </div>

             <div class="red-forma">
                 <label for="prihodi" class="form-label">Prihodi: </label>
                 <input type="number" class="form-control" name="prihodi" value="<?php echo $izvestaj->prihodi; ?>">
             </div>

             <div class="red-forma">
                 <label for="troskovi" class="form-label">Troskovi: </label>
                 <input type="number" class="form-control" name="troskovi" value="<?php echo $izvestaj->troskovi; ?>">
             </div>


             <div class="red-forma">
                 <label for="kompanija" class="form-label">Kompanija: </label>
                 <select class="form-select" name="kompanija">
                     <?php
                        $sql_upit1  = "select id, ime from kompanija";
                        $ResultSet = $database->conn->query($sql_upit1);

                        while ($red = $ResultSet->fetch_object()) {
                        ?>
                         <option value="<?php echo $red->id; ?>"><?php echo $red->ime ?></option>
                     <?php } ?>
                 </select>
             </div>

             <button type="submit" name="sacuvajIzmene" class="btn btn-primary">Sacuvaj izmene</button>
         </form>

         <?php
            require 'Izvestaj.php';
            if (isset($_POST['sacuvajIzmene'])) {
                $izvestaj = new Izvestaj();
                if ($izvestaj->sacuvajIzmene($idIzv, $_POST['mesec'], $_POST['godina'], $_POST['prihodi'], $_POST['troskovi'], $_POST['kompanija'])) {
                    header('Location: index.php');
                } else {
                    echo "Greska";
                }
            }

            ?>

     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="skripta.js"></script>
 </body>

 </html>