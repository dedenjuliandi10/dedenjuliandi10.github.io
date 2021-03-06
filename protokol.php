   <?php 
              $url = "https://api.kawalcorona.com/indonesia/provinsi/";
              $client = curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($client);
              $result = json_decode($response, true);
              $provinsi = $result[0]['attributes']['Provinsi'];
              $positif= $result[0]['attributes']['Kasus_Posi'];
              $sembuh= $result[0]['attributes']['Kasus_Semb'];
              $meninggal= $result[0]['attributes']['Kasus_Meni'];
          
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
      <title>Protokol</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
          <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
      <div class="header_section header_bg">
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
            <div class="container">
               <div class="about_taital_main">
                  <h2 class="about_tag">Data Covid 19</h2>
                  <div class="about_menu">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Protokol</li>
                     </ul>
                  </div>
               </div>
            </div>
         <!-- banner section end -->
      </div>
      <div class="protect_section layout_padding">
         <div class="container">
            <div class="row">
                <?php
                    $url = 'https://covid19.go.id/feed/protokol';
                    $xml = simplexml_load_file($url);
                    foreach ($xml->channel->item as $key => $item) {
                        echo '<div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                                <div class="post-entry">
                                    <a href="' . $item->link . '" target="_blank" class="thumb">
                                        <span class="date">' . substr($item->pubDate, 0, 15) . '</span>
                                        <img src="' . $item->enclosure['url'] . '" alt="Image" class="img-fluid">
                                    </a>
                                    <h3><a href="' . $item->link . '" target="_blank">' . $item->title . '</a></h3>
                                </div>
                            </div>';
                    }
                    ?>
            </div>
         </div>
      </div>
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
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">?? 2020 All Rights Reserved.<a href="https://colorlib.com/"> colorlib</a></p>
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
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready( function () {
            $('#tabel').DataTable();
         } );
      </script>
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