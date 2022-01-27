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
     <div class="noviIzvestajFrm">

         <div id="noviIzvestajForma">
             <div class="red-forma">
                 <label for="mesec" class="form-label">Mesec: </label>
                 <input type="text" class="form-control" id="mesec">
             </div>

             <div class="red-forma">
                 <label for="godina" class="form-label">Godina: </label>
                 <input type="number" class="form-control" id="godina">
             </div>

             <div class="red-forma">
                 <label for="prihodi" class="form-label">Prihodi: </label>
                 <input type="number" class="form-control" id="prihodi">
             </div>

             <div class="red-forma">
                 <label for="troskovi" class="form-label">Troskovi: </label>
                 <input type="number" class="form-control" id="troskovi">
             </div>


             <div class="red-forma">
                 <label for="kompanija" class="form-label">Kompanija: </label>
                 <select class="form-select" id="kompanija">
                     <?php
                        require 'DB.php';
                        $database = new DB();

                        $sql_upit  = "select id, ime from kompanija";
                        $ResultSet = $database->conn->query($sql_upit);

                        while ($red = $ResultSet->fetch_object()) {
                        ?>
                         <option value="<?php echo $red->id; ?>"><?php echo $red->ime ?></option>
                     <?php } ?>
                 </select>
             </div>

             <button type="button" id="sacuvajIzvestaj" class="btn btn-primary">Sacuvaj izvestaj</button>
         </div>

         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script src="skripta.js"></script>
 </body>

 </html>