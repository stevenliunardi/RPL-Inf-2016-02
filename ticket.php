<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>FasTicket Pesan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /> <link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <script src="email/validation.js" type="text/javascript"></script>


    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript">
    function periksa() {
            
                var e = document.getElementById("pilih1");
                var strUser1 = e.options[e.selectedIndex].value;

                var f = document.getElementById("pilih2");
                var strUser2 = f.options[f.selectedIndex].value;

                if(strUser1 == strUser2)
                {
                  alert("Kota asal & kota tujuan tidak boleh sama. Harap diperiksa kembali.");
                }

                else if(strUser1 == "kosong1" || strUser2=="kosong2")
                {
                  alert("Harap isi kota asal & kota tujuan.");
                }

                else if (confirm("Apakah Anda yakin data telah diisi dengan benar?") == true) {
                  
       
                } else {
                    
                }
    
                
            };

    function harga(){
      var price1 = document.getElementById("pilih1");
      var strValue1 = price1.options[price1.selectedIndex].value;

      var price2 = document.getElementById("pilih2");
      var strValue2 = price2.options[price2.selectedIndex].value;

      var biaya;

      if(strValue1 == "banda"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Tidak tersedia"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.35.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.109.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.67.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.81.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.115.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.128.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.162.000,-"
        }
      }

      if(strValue1 == "sigli"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.35.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.100.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.65.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.79.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.112.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.114.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.158.000,-"
        }
      }

      if(strValue1 == "meulaboh"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.100.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.45.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.63.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.74.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.111.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.112.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.157.000,-"
        }
      }

      if(strValue1 == "bireun"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.67.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.46.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.60.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.75.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.119.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.110.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.158.000,-"
        }
      }

      if(strValue1 == "lhokseumawe"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.90.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.47.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.67.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.63.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.101.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.100.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.190.000,-"
        }
      }

      if(strValue1 == "langsa"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.90.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.47.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.67.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.63.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.70.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.100.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.190.000,-"
        }
      }

      if(strValue1 == "takengon"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.120.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.63.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.67.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.63.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.87.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.103.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Tidak Tersedia"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Rp.75.000,-"
        }
      }

      if(strValue1 == "tapaktuan"){
        if(strValue2 == "kosong2"){
          var biaya = "Rp. -"
        }
        if(strValue2 == "banda"){
          var biaya = "Rp.190.000,-"
        }
        if(strValue2 == "sigli"){
          var biaya = "Rp.87.000,-"
        }
        if(strValue2 == "meulaboh"){
          var biaya = "Rp.77.000,-"
        }
        if(strValue2 == "bireun"){
          var biaya = "Rp.83.000,-"
        }
        if(strValue2 == "lhokseumawe"){
          var biaya = "Rp.123.000,-"
        }
        if(strValue2 == "langsa"){
          var biaya = "Rp.105.000,-"
        }
        if(strValue2 == "takengon"){
          var biaya = "Rp.90.000,-"
        }
        if(strValue2 == "tapaktuan"){
          var biaya = "Tidak Tersedia"
        }
      }

      document.getElementById("timpa").innerHTML = biaya;
    }
        
   
    </script>

</head>
<body id="pageBody">
<?php
            require_once 'koneksi.php';
        ?>

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                 <div id="divLogo" class="pull-left">
                        <a href="homes.php" id="divSiteTitle">FasTicket L300</a><br />
                        <a href="homes.php" id="divTagLine">Fastest | Most Secure | Super Cozy</a>
                    </div>


                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                        NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li><a href="homes.php">Home</a></li>
                            <li><a href="about.php">About</a></li>  
                            <?php
              if(isset($_SESSION['email']) && $_SESSION['email'] != ""){
 
          ?>
           <li class="active"><a href="ticket.php">Ticket</a></li>
            <?php
          }else{
            ?>
            <li class="active"><a href="signup.php">Ticket</a></li>
            
            <?php
          }
          ?>  
          <li><a href="contact.php">Contact Us</a></li>

                             <?php
              if(isset($_SESSION['email']) && $_SESSION['email'] != ""){

              
          ?>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="setting.php"><span class="fa fa-user fa-1x"></span>    Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logout.php"><span class="fa fa-power-off fa-1x"></span>    Logout</a></li>
              
             
              </li>
               </ul>
            </li>
            
            <?php
          }else{
            ?>

            <li><a href="signup.php">Login</a></li>
            <?php
          }
          ?>  
                            </ul>
                            </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>
<style>
  .timeTic{
  min-width : 20%;
  min-height : 450px;
  float : left;
  margin : 1.5% 2.5%; /*atas-bawah kiri-kanan*/
 

}

.BioTic{
  overflow : hidden;
  display: block;
  min-height : 450px;
  min-width : 15%;
  margin-top : 1.5%;
  margin-right : 2.5%;
  margin-left : 25%;

}

textarea{
  height : 150px;
}
</style>

   <div class="MyContentBox">

        <div class="divPanel notop page-content">


            <div class="breadcrumbs">
                <a href="homes.php">Home</a> &nbsp;/&nbsp; <span>Ticket</span>
            </div>

        

            
            <div class="myContainer">
              <div class="formTiket">
                <center><h4>FORMULIR PENDAFTARAN L300</h4></center>
                <form action="print.php" method="post">
                  <br>
                  <div class="timeTic">
                  <table>
                  <tr>
                  <td>
                  <div>
                  <p> Pilih Kota Asal</p>
                  <select id="pilih1" name="kota_asal">
                    <option selected="true" value="kosong1" disabled="disabled">--Pilih Kota Asal--</option>
                    <option value="banda">Banda Aceh</option>
                    <option value="sigli">Sigli</option>
                    <option value="meulaboh">Meulaboh</option>
                    <option value="bireun">Bireun</option>
                    <option value="lhokseumawe">Lhokseumawe</option>
                    <option value="langsa">Langsa</option>
                    <option value="takengon">Takengon</option>
                    <option value="tapaktuan">Tapaktuan</option>
                  </select>
                  </div>
                  </td>

                  <br>
      
                  <td style="padding-left : 2em">
                  <div>
                  <p> Pilih Kota Tujuan</p>
                  <select id="pilih2" onclick="harga()" name="kota_tujuan">
                    <option selected="true" value="kosong2" disabled="disabled">--Pilih Kota Tujuan--</option>
                    <option value="banda">Banda Aceh</option>
                    <option value="sigli">Sigli</option>
                    <option value="meulaboh">Meulaboh</option>
                    <option value="bireun">Bireun</option>
                    <option value="lhokseumawe">Lhokseumawe</option>
                    <option value="langsa">Langsa</option>
                    <option value="takengon">Takengon</option>
                    <option value="tapaktuan">Tapaktuan</option>
                  </select>
                  </div>
                  </td>
                  </tr>

                  <br>

                  <tr>
                  <td>
                  <div>
                    <p> Pilih Waktu Keberangkatan </p>
                    <select name="waktu_berangkat">
                    <option value="pagi">Pagi - 10:00 WIB</option>
                    <option value="siang">Siang - 14:00 WIB</option>
                    <option value="malam">Malam - 20:00 WIB</option>
                    </select>
                  </div>
                  </td>

                  <td style="padding-left : 2em">
                  <div>
                    <p> Pilih Tanggal Keberangkatan </p>
                    <input type="date" title="Tanggal berangkat" name="tanggal_berangkat"/>
                  </div>
                  </td>
                  </tr>


                  <tr>
                  <td>
                     <p> Skema tempat duduk </p>
                     <img src="peta.png">
                    </td>

                  <td style="padding-left: 2em">
                    <div>
                      <p> Pilih nomor kursi </p>
                      <select name="no_kursi">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    </td>

                  </tr>
                  
                  </table>
                  </div>
                    
                   <div class="BioTic">
                    <br><br>
                    <table>
                      <tr>
                        <td style="padding-left: 2em"><p>Nama Penumpang</p><input type="text" placeholder="nama penumpang" required="required" name="nama_penumpang"/></td>
                        <td style="padding-left: 2em"><p>Tanggal Lahir Penumpang</p><input type="date" required="required" name="tanggal_lahir"/></td>
                      </tr>

                      <tr>
                        <td style="padding-left: 2em"><p>No.Telp</p><input type="text" placeholder="nomor telepon" required="required" name="no_telp"/></td>
                        <td style="padding-left: 2em"><p>Nomor identitas</p><input type="text" placeholder="ktp/ktm/nis,dsb" name="no_id"/></td>
                      </tr>

                      <tr>
                        <td style="padding-left: 2em"><p>Alamat asal</p><textarea type="text" placeholder="Alamat asal" required="required" name="alamat_asal"></textarea></td>
                        <td style="padding-left: 2em"><p>Alamat tujuan</p><textarea type="text" placeholder="Alamat tujuan" required="required" name="alamat_tujuan"></textarea></td>
                      </tr>

                      <tr>
                      
                      <td style="padding-left: 2em"><strong><p id="timpa" name="harga_tiket">Harga : Rp. -</p></strong></td>
                      
                      <td> <input type="checkbox" required="required"/> I agree with terms and conditions </td>
                      </tr>
                    </table>
                  </div>
                  
                  <center><button type="submit" onclick="periksa()"> Konfirmasi </button></center>
                  
                 
                </form>
                
                
              </div>
            </div>
   <!-- DISINI TAMBAHKAN CODINGGGGGGGGG -->
   <!-- DISINI TAMBAHKAN CODINGGGGGGGGG -->

   <!-- DISINI TAMBAHKAN CODINGGGGGGGGG -->



                    <!-- End Side Categories -->
                                        
                    </div>
                    </div>

                    <?php
                      if(isset($_POST['kota_asal']))
                      {
                        require_once 'koneksi.php';


                        $MyKota = $_POST['kota_asal'];
                        $MyTujuan = $_POST['kota_tujuan'];
                        $MyTime= $_POST['waktu_berangkat'];
                        $MyDate = $_POST['tanggal_berangkat'];
                        $MyChair = $_POST['no_kursi'];
                        $MyName= $_POST['nama_penumpang'];
                        $MyBirth = $_POST['tanggal_lahir'];
                        $MyPhone = $_POST['no_telp'];
                        $MyId= $_POST['no_id'];
                        $MyAdd = $_POST['alamat_asal'];
                        $MyTo = $_POST['alamat_tujuan'];
                        $MyPrice= $_POST['harga_tiket'];



                        $sql = "INSERT INTO pendaftar (kota_asal, kota_tujuan, waktu_berangkat, tanggal_berangkat, no_kursi, nama_penumpang, no_telp, tanggal_lahir, no_id, alamat_asal, alamat_tujuan, harga_tiket) VALUES('$MyKota', '$MyTujuan', '$MyTime', '$MyDate','$MyChair', '$MyName', '$MyBirth', '$MyPhone', '$MyId', '$MyAdd', '$MyTo', '$MyPrice')";


                       

                         

                        if($db->query($sql))
                        {
                          echo 'terima kasih sudah mendaftar';  
                        }
                        else
                        {
                          echo 'Error : ' . $db->error;
                        }

                      }


                    ?>
                    
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>


</body>
</html>