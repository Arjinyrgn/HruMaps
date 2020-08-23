<?php include "head.php" ?>
            <p> Haritalar </p>

            <form action="hm_ekleme.php" method="post">
                <table width="376" border="5">
                    <tr>
                        <td height="30" width="100">Ad</td>
                        <td><input type="text" name="adi" id="adi" > </td>
                    </tr>
                    <tr>
                        <td height="30" width="100">Adres</td>
                        <td><input type="text" name="adresi"id="adresi" > </td>
                    </tr>
                    <tr>
                        <td height="30" width="100">Lat</td>
                        <td><input type="text" name="enlem" id="enlem" > </td>
                    </tr>
                    <tr>
                        <td height="30" width="100">Lng</td>
                        <td><input type="text" name="boylam" id="boylam" > </td>
                    </tr>
					 <tr>
                        <td height="30" width="100">Yerleşke</td>
                        <td><input type="text" name="yid" id="yid" > </td>
                    </tr>
					 <tr>
                        <td height="30" width="100">Kategori</td>
                        <td><input type="text" name="kid" id="kid" > </td>
                    </tr>
                    <td height="30" width="100">İletişim</td>
                    <td><input type="text" name="ilet" id="ilet" > </td>
					 <tr>
                        <td height="30" width="100">Url</td>
                        <td><input type="text" name="url" id="url" > </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <input type="submit" name="button" id="button" value="İçerik Ekle"></td>
                    </tr>

                </table>
            </form> <br>

   <?php include "foot.php" ?>        