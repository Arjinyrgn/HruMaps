<?php include "head.php" ?>
            <p> Haritalar </p>
            <?php
            $link=mysqli_connect("localhost","root","","hrumap");
            $link->set_charset("utf8");
            $id=$_GET["id"];
            $cek=mysqli_query( $link,"select * from hrumaps where h_id='$id'");
            while($yaz=mysqli_fetch_assoc($cek)){

                ?>

                <form action="hm_guncelleme.php?id=<?php echo $id ?>" method="post">
                    <table width="376" border="5">
                        <tr>
                            <td height="30" width="100">Ad</td>
                            <td><input type="text" name="adi" id="adi" value="<?php echo $yaz["ad"]; ?>" > </td>
                        </tr>
                        <tr>
                            <td height="30" width="100">Adres</td>
                            <td><input type="text" name="adresi" id="adresi" value="<?php echo $yaz["adres"]; ?>" ></td>
                    </tr>
                    <tr>
                        <td height="30" width="100">Lat</td>
                            <td><input type="text" name="enlem" id="enlem" value="<?php echo $yaz["lat"]; ?> "> </td>
                        </tr>
                        <tr>
                            <td height="30" width="100">Lng</td>
                            <td><input type="text"  name="boylam" id="boylam" value="<?php echo $yaz["lng"]; ?>" > </td>
                        </tr>
						 </tr>
                        <tr>
                        <td height="30" width="100">Yeleşke</td>
                        <td><input type="text" name="yid" id="yid" value="<?php echo $yaz["yerleske_id"]; ?>" > </td>
                    </tr>
					<tr>
                        <td height="30" width="100">Kategori</td>
                        <td><input type="text" name="kid" id="kid" value="<?php echo $yaz["kategori_id"]; ?>" > </td>
                    </tr>
						 <tr>
                            <td height="30" width="100">İletişim</td>
                            <td><input type="text"  name="ilet" id="ilet" value="<?php echo $yaz["tel"]; ?>" > </td>
                      </tr>
					   <tr>
                        <td height="30" width="100">Url</td>
                        <td><input type="text" name="url" id="url" value="<?php echo $yaz["url"]; ?>" > </td>
                   
					 
                        <tr>
                            <td> </td>
                            <td> <input type="submit" name="button" id="button" value="İçerik Güncelle"></td>
                        </tr>

                    </table>
                </form>
            <?php } ?>
            <br>
            <!--inner block start here-->
            <div class="inner-block">

            </div>
            <!--inner block end here-->
  <?php include "foot.php" ?>         
