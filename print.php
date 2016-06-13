<!DOCTYPE html>
<html>
<head>
	<title>Cetak Tiket</title>

	<style>
	 .kontainerCetak{
			width:70%;
			height :auto;
			margin-left: 15%;
			border-style: groove;
			
		}

		@media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }
}

		
	</style>

</head>
<body>
	<?php
        require_once 'koneksi.php';
    ?>


	<div class="kontainerCetak" id="section-to-print">
		<center><h1>FasTicket L300</h1></center>
		<hr>

	
      
                <center><strong>
                  <br>
                  <div class="timeTic">
                  <table>
                  <tr>
                  <td>
                  <div>
                  <u><p> Kota Asal</p></u>
                  <?php echo $_POST['kota_asal']; ?>
                  </div>
                  </td>

                  <br>
      
                  <td style="padding-left : 2em">
                  <div>
                  <u><p> Kota Tujuan</p></u>
                  <?php echo $_POST['kota_tujuan']; ?>
                  </div>
                  </td>
                  </tr>

                  <br>

                  <tr>
                  <td>
                  <div>
                    <u><p>  Waktu Keberangkatan </p></u>

                    <?php 
                    if($_POST['waktu_berangkat'] == "pagi")
                    	{
                    		echo "Pagi - 10:00 WIB";
                    	}
                    if($_POST['waktu_berangkat'] == "siang")
                    	{
                    		echo "Siang - 14:00 WIB";
                    	}
                    if($_POST['waktu_berangkat'] == "malam")
                    	{
                    		echo "Malam - 22:00 WIB";
                    	}

                    ?>
                  </div>
                  </td>

                  <td style="padding-left : 2em">
                  <div>
                    <u><p> Tanggal Keberangkatan </p></u>
                    <?php echo $_POST['tanggal_berangkat']; ?>
                  </div>
                  </td>
                  </tr>


                  <tr>
                  <td>
                    <u> <p> Skema tempat duduk </p></u>
                     <img src="peta.png">
                    </td>

                  <td style="padding-left: 2em">
                    <div>
                      <u><p> Nomor kursi </p></u>
                      <?php echo $_POST['no_kursi']; ?>
                    </div>
                    </td>

                  </tr>
                  
                  </table>
                  </div>
                    
                   <div class="BioTic">
                    <br><br>
                    <table>
                      <tr>
                        <td style="padding-left: 2em"><u><p>Nama Penumpang</p></u><?php echo $_POST['nama_penumpang']; ?></td>
                        <td style="padding-left: 15em"><u><p>Tanggal Lahir Penumpang</p></u><?php echo $_POST['tanggal_lahir']; ?></td>
                      </tr>

                      <tr>
                        <td style="padding-left: 2em"><u><p>No.Telp</p></u><?php echo $_POST['no_telp']; ?></td>
                        <td style="padding-left: 15em"><u><p>Nomor identitas</p></u><?php echo $_POST['no_id']; ?></td>
                      </tr>

                      <tr>
                        <td style="padding-left: 2em"><u><p>Alamat asal</p></u><?php echo $_POST['alamat_asal']; ?>
                        <td style="padding-left: 15em"><u><p>Alamat tujuan</p></u><?php echo $_POST['alamat_tujuan']; ?></td>
                      </tr>

                      <tr>
                      
                      </tr>
                    </table>
                  </div>
                 
                
                
              </div>
            </div>

		</div>
	</strong></center>

<br>
<center><button onclick="myFunction()">Cetak Tiket</button></center>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>