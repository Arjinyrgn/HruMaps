<?php include "head.php" ?>

  <p> Kullanıcılar</p>
  <?php
   $link=mysqli_connect("localhost","root","","hrumap");
   $link->set_charset("utf8");
   $id=$_GET["id"];
   $cek=mysqli_query( $link,"select * from kullanicilar where k_id='$id'");
   while($yaz=mysqli_fetch_assoc($cek)){
     ?>
     <form action="kul_guncelleme.php?id= <?php echo $id ?>" method="post">
        <table width="376" border="5">
            <tr>
                <td height="30" width="100">E-Mail</td>
                <td><input type="text" name="email" id="email" value="<?php echo $yaz["email"];?>" > </td>
            </tr>
            <tr>
                <td height="30" width="100">Şifre</td>
                <td><input type="text" name="sifre" id="sifre" value="<?php echo $yaz["sifre"];?>" > </td>
            </tr>
            <td> </td>
            <td> <input type="submit" name="button" id="button" value="Kullanıcı Güncelle"></td>
        </table>
     </form>
  <?php } ?>

  <div class="inner-block">

  </div>

<?php include "foot.php" ?>
