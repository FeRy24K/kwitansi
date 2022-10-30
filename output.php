<?php 
	$nama = $_POST['nama'];
	$uang = $_POST['uang'];
	$mobil = $_POST['mobil'];
	$tanggal = $_POST['tanggal'];
  $lain = $_POST['lain'];
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="logo.png" />
    <title>Output Nilai</title>
    <style>
      div {
        border: 2px solid black;
        padding: 0px 10px;
        color: black;
      }
      tr,
      td {
        margin-bottom: 50px;
        color: black;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <h3>EKA MANDIRI TRANSPORT</h3>
    <p>Jl. Jogja-Solo KM 11 Yogyakarta <br>Phone/WA : 081392297799</p>
    <tr>
      <hr />
      <center><td align="center">KWITANSI RENTAL MOBIL</td></center>
      <hr />
    </tr>
    <table cellpadding="2">
      <tr>
        <td>&nbsp;Telah Diterima Dari</td>
        <td>
          &nbsp;:
          <?php echo $nama; ?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;Sejumlah Uang</td>
        <td>
          &nbsp;:
          <?php echo $uang; ?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;Sewa Mobil</td>
        <td>
          &nbsp;:
          <?php echo $mobil; ?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;Tanggal</td>
        <td>
          &nbsp;:
          <?php echo $tanggal; ?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;Lain-Lain</td>
        <td>
          &nbsp;:
          <?php echo $lain; ?>
        </td>
      </tr>
    </table>
    <h4>TOTAL <br> <ins> RP. <?php echo $uang; ?></ins></h4>
      <p>
        Pembayaran via transfer Bank <br />
        BCA : 0300868631 <br />
        a/n Ariyanto <br />
        BRI : 389601028168533 <br />
        a/n Eko Supriyanto <br />
      </p>
    </div>
  </body>
</html>
