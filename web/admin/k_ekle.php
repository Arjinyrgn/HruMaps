<?php include "head.php" ?>
      <p> Kategoriler  </p>

           <form action="k_ekleme.php" method="post">
               <table width="376" border="5">
                   <tr>
                       <td height="30" width="100">Kategori Adı</td>
                       <td ><input type="text" name="ad" id="ad" > </td>
                   </tr>
                   <td> </td>
                   <td> <input type="submit" name="button" id="button" value="Kategori Ekle"></td>
               </table>
           </form> <br>

<?php include "foot.php" ?>