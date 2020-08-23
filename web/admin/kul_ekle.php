<?php include "head.php" ?>
    <p> Kullanıcılar  </p>

    <form action="kul_ekleme.php" method="post">
        <table width="376" border="5">
            <tr>
                <td height="30" width="100">E-mail</td>
                <td ><input type="text" name="email" id="email" > </td>
            </tr>
            <tr>
                <td height="30" width="100">sifre</td>
                <td ><input type="text" name="sifre" id="sifre" > </td>
            </tr>
            <td> </td>
            <td> <input type="submit" name="button" id="button" value="Kullanıcı Ekle"></td>
        </table>
    </form> <br>

<?php include "foot.php" ?>