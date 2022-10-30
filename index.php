<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data</title>
    <link rel="shortcut icon" href="logo.png" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form class="login" name="finput" method="post" action="output.php">
      <center><h3>MASUKAN DATA</h3></center>
      <br />
      <label>Telah Diterima Oleh</label><br />
      <input type="text" name="nama" placeholder="Masukan Nama..." /><br />
      <label>Sejumlah Uang</label><br />
      <input type="text" name="uang" placeholder="Masukan Jumlah Uang..." /><br />
      <label>Sewa Mobil</label><br />
      <input type="text" name="mobil" placeholder="Masukan Jenis Mobil..." /><br />
      <label>Tanggal</label><br />
      <input type="text" name="tanggal" placeholder="Masukan Tanggal..." /><br />
      <label>Lain-Lain</label><br />
      <input type="text" name="lain" placeholder="Masukan Lain-Lain..." /><br />
      <label>Biaya Lain-Lain</label><br />
      <input type="text" name="biayalain" placeholder="Masukan Biaya Lain-Lain..." /><br />
      <br />
      <input type="submit" name="tampil" value="Input" />
      <input type="reset" name="reset" value="Reset" />
    </form>
    <br />
    <br />
    <footer><p>Powered by Fery024</p></footer>
  </body>
</html>
