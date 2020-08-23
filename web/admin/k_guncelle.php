<?php include "head.php" ?>
            <p> Kategoriler  </p>
            <?php
            $link=mysqli_connect("localhost","root","","hrumap");
            $link->set_charset("utf8");
            $id=$_GET["id"];
            $cek=mysqli_query( $link,"select * from kategoriler where kategori_id='$id'");
            while($yaz=mysqli_fetch_assoc($cek)){
             ?>
                <form action="k_guncelleme.php?id= <?php echo $id ?>" method="post">
                    <table width="376" border="5">

                        <tr>
                            <td height="30" width="100">Kategori Adı</td>
                            <td ><input type="text" name="ad" id="ad" value="<?php echo $yaz["kategori_ad"];?>" > </td>
                        </tr>
                        <td> &nbsp;</td>
                        <td> <input type="submit" name="button" id="button" value="Kategori Güncelle"></td>
                    </table>
                </form>
            <?php } ?>
            <br>

            
            <div class="inner-block">

            </div>
            
<?php include "foot.php" ?>