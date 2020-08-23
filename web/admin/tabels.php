<!DOCTYPE HTML>
<html>
<head>
<title>Hrumap Admin Paneli</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-31J" />
<meta name="keywords" content="/>
<script type="application/x-javascript">  </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
</head> 
<body>
   <div class="page-container">
<div class="left-content">
	   <div class="mother-grid-inner">
				<div class="header-main">
					
                    <div class="profile_details w3l">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="images/profil.png" alt=""> </span>
                                        <div class="user-name">
                                            <span>Admin</span>
                                        </div>
                                        <i class="fa fa-angle-down"></i>
                                        <i class="fa fa-angle-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="cikis.php"><i class="fa fa-sign-out"></i> Çıkış</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                    <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="main.php">Anasayfa</a><i class="fa fa-angle-right"></i>Tabels</li>
            </ol>
<div class="agile-grids">	

				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Hrumaps</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>Ad</th>
							<th>Adres</th>
							<th>Lat</th>
							<th>Lng</th>
							<th>Yerleşke</th>
							<th>Kategori</th>
                            <th>İletişim</th>
							<th>Url</th>
                            <th>İşlemler</th>
						  </tr>
						</thead>
                            <?php
                            $link=mysqli_connect("localhost","root","","hrumap");
                            $link->set_charset("utf8");
                            $cek=mysqli_query($link,"select * from hrumaps where aktiflik=1 order by h_id asc ");
                            while ($yaz=mysqli_fetch_assoc($cek)){
                            ?>
						<tbody>
						  <tr>
							<td> <?php echo $yaz["ad"] ?> </td>
							<td> <?php echo $yaz["adres"] ?> </td>
							<td> <?php echo $yaz["lat"] ?> </td>
							<td> <?php echo $yaz["lng"] ?> </td>
							<td> <?php echo $yaz["yerleske_id"] ?> </td>
							<td> <?php echo $yaz["kategori_id"] ?> </td>
                            <td> <?php echo $yaz["tel"] ?> </td>
							<td> <?php echo $yaz["url"] ?> </td>
                              <td><a href="h_guncelle.php?id=<?php echo $yaz["h_id"]?>"><button class="btn btn-primary">Düzenle</button></a>  </td>
                              <td><a href="h_sil.php?id=<?php echo $yaz["h_id"]?>"><button class="btn btn-danger">Sil</button> </a> </td>


                          </tr>
						</tbody>
                            <?php } ?>
					  </table>
					</div>

		
				  <h3>Kategoriler</h3>
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						<th>Adı</th>
						<th>Aktiflik</th>
                        <th>İşlemler</th>
					  </tr>
					</thead>
                         <?php
                         $link=mysqli_connect("localhost","root","","hrumap");
                         $link->set_charset("utf8");
                         $cek=mysqli_query($link,"select *from kategoriler where aktiflik=1 order by kategori_id asc ");
                         while ($yaz=mysqli_fetch_assoc($cek)){
                             ?>
					<tbody>
					  <tr>
						<td> <?php echo $yaz["kategori_ad"] ?> </td>
						<td > <?php echo $yaz["aktiflik"] ?> </td>
                          <td width="30"><a href="k_guncelle.php?id=<?php echo $yaz["kategori_id"]?>"><button class="btn btn-primary">Düzenle</button></a>  </td>
                          <td><a href="k_sil.php?id=<?php echo $yaz["kategori_id"]?>"><button class="btn btn-danger">Sil</button> </a> </td>

					  </tr>
					</tbody>
                        <?php } ?>
				  </table>

				  <h3>Yerleşkeler</h3>

				 
				  <table id="table-force-off">
					<thead>
					  <tr>
						<th>Ad</th>
                        <th>İşlemler</th>
					  </tr>
					</thead>
                      <?php
                      $link=mysqli_connect("localhost","root","","hrumap");
                      $link->set_charset("utf8");
                      $cek=mysqli_query($link,"select *from yerleskeler where aktiflik=1 order by yerleske_id asc ");
                      while ($yaz=mysqli_fetch_assoc($cek)){
                      ?>
					<tbody>
					  <tr>
						<td width="300"><?php echo $yaz["yerleske_ad"] ?>  </td>
                          <td width="30"><a href="y_guncelle.php?id=<?php echo $yaz["yerleske_id"]?>"><button class="btn btn-primary">Düzenle</button></a>  </td>
                          <td><a href="y_sil.php?id=<?php echo $yaz["yerleske_id"]?>"><button class="btn btn-danger">Sil</button> </a> </td>

					  </tr>
					</tbody>
                      <?php } ?>
				  </table>
				   <h3>Kullanıcılar</h3>

				 
				  <table id="table-force-off">
					<thead>
					  <tr>
						<th>E-mail</th>
						<th>Şifre</th>
						<th>Tarih</th>
                        <th>İşlemler</th>
					  </tr>
					</thead>
                      <?php
                      $link=mysqli_connect("localhost","root","","hrumap");
                      $link->set_charset("utf8");
                      $cek=mysqli_query($link,"select *from kullanicilar where aktiflik=1 order by k_id asc ");
                      while ($yaz=mysqli_fetch_assoc($cek)){
                      ?>
					<tbody>
					  <tr>
						<td><?php echo $yaz["email"] ?>  </td>
						<td ><?php echo $yaz["sifre"] ?>  </td>
						<td ><?php echo $yaz["tarih"] ?>  </td>
                          <td width="30"><a href="kul_guncelle.php?id=<?php echo $yaz["k_id"]?>"><button class="btn btn-primary">Düzenle</button></a> </td>
                          <td><a href="kul_sil.php?id=<?php echo $yaz["k_id"]?>"><button class="btn btn-danger">Sil</button> </a> </td>

					  </tr>
					</tbody>
                      <?php } ?>
				  </table>


				</div>
			
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<?php include "foot.php"?>