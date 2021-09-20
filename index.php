       <?php 
              $url = "https://api.kawalcorona.com/indonesia/";
              $client = curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($client);
              $result = json_decode($response, true);
              $negara = $result[0]['name'];
              $positif= $result[0]['positif'];
              $dirawat= $result[0]['dirawat'];
              $sembuh= $result[0]['sembuh'];
              $meninggal= $result[0]['meninggal'];
          
   ?>
             <?php 
              $url = "https://api.kawalcorona.com/positif/";
              $client = curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($client);
              $result = json_decode($response, true);
              $positif_dun= $result['value'];
   ?>
    <?php 
              $url = "https://api.kawalcorona.com/sembuh/";
              $client = curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($client);
              $result = json_decode($response, true);
              $sembuh_dun= $result['value'];
   ?>
    <?php 
              $url = "https://api.kawalcorona.com/meninggal/";
              $client = curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($client);
              $result = json_decode($response, true);
              $meninggal_dun= $result['value'];
   ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Covid 19</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
               <div class="main">
                  <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">Home</a>
                              <a href="grapik.php">Data</a>
                              <a href="protokol.php">Protokol</a>
                              <a href="about.php">Tentang</a>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                     </ul>
                  </div>
               </div>
            </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Stay Home Stay Healthy</h1>
                              <p class="banner_text">Dengan tetap dirumah dan tetap menjaga kesehatan, anda telah menyelamatkan Indonesia.</p>
                              <div class="more_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Website Informasi Covid</h1>
                              <p class="banner_text">Dapatkan informasi terbaru mengenai perkembangan Covid 19</p>
                              <div class="more_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>            
      </div>
      <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- protect section start -->
      <div class="protect_section layout_padding">
         <div class="container">
               <div class="row">
                     <div class="col-sm-12">
                        <h1 class="protect_taital">Statistik Covid 19 di Indonesia</h1>
                        <p class="protect_text">Data bersumber dari <a href="https://kawalcorona.com/api/" target="_blank">https://kawalcorona.com/api/</a></p><br>
                     </div>
               </div>
               <div class="card-body">
		 	<div class="row">
		    	<div class="col-md-4">
		    		<div class="card card-danger">
		    			<div class="card-header">
		    				POSITIF
		    			</div>
		    			<div class="card-body">
		    				<?= $positif?>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-4">
		    		<div class="card card-primary">
		    			<div class="card-header">
		    				SEMBUH
		    			</div>
		    			<div class="card-body">
		    				<?= $sembuh?>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-4">
		    		<div class="card card-success">
		    			<div class="card-header">
		    				MENINGGAL
		    			</div>
		    			<div class="card-body">
		    				<?= $meninggal?>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-4">
		    		<div class="card card-warning">
		    			<div class="card-header">
		    				DIRAWAT
		    			</div>
		    			<div class="card-body">
		    				<?= $dirawat?>
		    			</div>
		    		</div>
		    	</div>
		    </div>
 		</div>
                <div class="row">
                     <div class="col-sm-12">
                        <h1 class="protect_taital">Statistik Covid 19 Global</h1>
                        <p class="protect_text">Data bersumber dari <a href="https://kawalcorona.com/api/" target="_blank">https://kawalcorona.com/api/</a></p><br>
                     </div>
               </div>
               <div class="card-body">
		 	<div class="row">
		    	<div class="col-md-4">
		    		<div class="card card-danger">
		    			<div class="card-header">
		    				POSITIF
		    			</div>
		    			<div class="card-body">
		    				<?= $positif_dun?>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-4">
		    		<div class="card card-primary">
		    			<div class="card-header">
		    				SEMBUH
		    			</div>
		    			<div class="card-body">
		    				<?= $sembuh_dun?>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-4">
		    		<div class="card card-success">
		    			<div class="card-header">
		    				MENINGGAL
		    			</div>
		    			<div class="card-body">
		    				<?= $meninggal_dun?>
		    			</div>
		    		</div>
		    	</div>
		    </div>
 		</div>
         </div>
      </div>
      <!-- protect section end -->
      <!-- protect section start -->
      <div class="protect_section layout_padding">
         <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="protect_taital">Perlindungan Diri</h1>
                     <p class="protect_text">Berikut langkah-langkah untuk melindungi diri anda dari covid 19</p>
                  </div>
               </div>
               <div class="protect_section_2 layout_padding">
                  <div class="row">
                     <div class="col-md-6">
                        <h1 class="hands_text"><a href="#">Membersihkan<br>tangan</a></h1>
                        <h1 class="hands_text_2"><a href="#">Menjaga<br>jarak</a></h1>
                        <h1 class="hands_text"><a href="#">Hindari menyentuh<br>hidung dan mulut</a></h1>
                     </div>
                     <div class="col-md-6">
                        <div class="image_2"><img src="images/img-2.png"></div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- protect section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/img-1.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">Apa itu CoronaVirus ?</span></h1>
                  <p class="about_text">Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).</p>
                  <div class="read_bt"><a href="https://www.alodokter.com/virus-corona">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                <?php

                    $int =0;
                    $url = 'https://covid19.go.id/feed/berita';
                    $xml = simplexml_load_file($url);
                    foreach ($xml->channel->item as $key => $item) {
                        $int++;
                    ?>
                    <div class="carousel-item <?= $int == 1 ? 'active' : '' ?>">
                     <h1 class="news_taital">Berita terbaru</h1>
                     <p class="news_text">Data bersumber dari <a href="https://covid19.go.id/feed/berita" target="_blank">https://covid19.go.id/feed/berita</a></p><br>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="<?= $item->enclosure['url'] ?>"></div>
                           <h2 class="design_text"><?= $item->title ?></h2>
                           <span class="date"><?= substr($item->pubDate, 0,16)?></span>
                           <div class="read_btn"><a href="<?= $item->link?>" target="_blank">Read More</a></div>
                        </div>
                     </div>
                  </div>
                    <?php
                    }
                    ?>

               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Sumber Data</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="https://covid19.go.id/">Satgas COVID-19</a></li>
                           <li><a href="https://www.who.int/">WHO</a></li>
                           <li><a href="https://kawalcorona.com/api/">API Kawal Corona</a></li>
                           <li><a href="https://www.alodokter.com/">Alodokter</a></li>
                           <li><a href="https://a21700139-vdi.triwega.com/">Website Covid.</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Tentang Kami</h2>
                     <p class="footer_text">Kami merupakan sebuah platform yang peduli akan musibah pandemi COVID-19 ini. Harapan kami, dengan adanya platform ini bisa membantu masyarakat dalam penanganan dan pencegahan penularan COVID-19 di Indonesia</p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Hubungi Kami</h2>
                     <div class="location_text">
                        <ul>
                           <li>
                              <a href="https://www.google.co.id/maps/place/Kec.+Sumedang+Selatan,+Kec.+Sumedang+Sel.,+Kabupaten+Sumedang,+Jawa+Barat/@-6.8671765,107.8821881,13z/data=!3m1!4b1!4m5!3m4!1s0x2e68d1c166bc23ad:0x401e8f1fc28cd60!8m2!3d-6.859079!4d107.9202767"><i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Lokasi</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">Telp +062 82120003945</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">ddkania10@gmail.com</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Negara</h2>
                     <div class="map_image"><img src="images/map-bg.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://colorlib.com/"> colorlib</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
         $(this).removeClass('transition');
         });
         });
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>  
   </body>
</html>