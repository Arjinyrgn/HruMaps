<?php include "head.php" ?>

            <p> Yerleşkeler</p>
            <?php
            $link=mysqli_connect("localhost","root","","hrumap");
            $link->set_charset("utf8");
            $id=$_GET["id"];
            $cek=mysqli_query( $link,"select * from yerleskeler where yerleske_id='$id'");
            while($yaz=mysqli_fetch_assoc($cek)){
             ?>
               <form action="y_guncelleme.php?id= <?php echo $id ?>" method="post">
                 <table width="376" border="5">
                     <tr>
                         <td height="30" width="100">Yerleşke Adı</td>
                         <td><input type="text" name="ad" id="ad" value="<?php echo $yaz["yerleske_ad"];?>" > </td>
                     </tr>
                     <td> </td>
                     <td> <input type="submit" name="button" id="button" value="Yerleşke Güncelle"></td>
                  </table>
               </form>
            <?php } ?>
       
            <div class="inner-block">

            </div>
            
          <?php include "foot.php" ?>
