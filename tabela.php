 <table class="table table-bordered table-light table-striped border border-2 border-dark">
     <thead>
         <tr>
             <th>Mesec</th>
             <th>Godina</th>
             <th>Prihod</th>
             <th>Troskovi</th>
             <th>Naziv kompanije</th>
             <th>Sediste kompanije</th>
         </tr>
     </thead>

     <tbody>
         <?php

            require 'DB.php';
            $database = new DB();

            $sql_upit = "select i.id, i.mesec, i.godina, i.prihod, i.troskovi, k.ime, k.sediste from izvestaj i join kompanija k on i.kompanijaID=k.id";
            $ResultSet = $database->conn->query($sql_upit);

            while ($red = $ResultSet->fetch_object()) {
            ?>
             <tr>
                 <td><?php echo $red->mesec;  ?></td>
                 <td><?php echo $red->godina;  ?></td>
                 <td><?php echo $red->prihod;  ?></td>
                 <td><?php echo $red->troskovi; ?></td>
                 <td><?php echo $red->ime; ?></td>
                 <td><?php echo $red->sediste; ?></td>
             </tr>
         <?php } ?>

     </tbody>
 </table>