<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Successful</title>
  <style>
    
    body {
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: none;
      text-align: left;
    }

    fieldset {
      border: 1px solid #555;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      text-align: left;
    }

    legend {
      font-weight: bold;
      color: #333;
    }

    h2 {
      color: #333;
      text-align: center;
    }

    .a{
      text-align: center;
    }

    .logo-details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .logo-details img {
      max-height: 120px;
    }
    
    .p{
      text-align: left;
      margin-bottom: 20px;
    }

    .tabbed-line {
    padding-left: 7.9em; 
    }

    .tabbed{
      padding-left: 3.7em;
    }


    /* Added styles for consistent indentation */
    fieldset p {
      margin: 10px 0;
      padding-left: 2em;
    }

    fieldset p b {
      display: inline-block;
      width: 150px; /* Adjust the width as needed */
    }

    label{
      padding-left: 20px; 
      text-align: justify;
    }

  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

  <div class="logo-details">

  <p><b>PUSAT KEBUDAYAAN<br> 
  BAHAGIAN HAL EHWAL PELAJAR<br>
  BANGUNAN BUDISISWA<br>
  UiTM SHAH ALAM<br>
  TEL: 03-55443661<br>
  FAKS: 03-5544369</b></p> 

  <img src="uitm_logo.svg" alt="UITM Logo" width="200" height="120">
  <img src="logo_pusat_kebudayaan.png" alt="Pusat Kebudayaan Logo" width="200" height="120">
  </div>

  <p>
  <b><u>WAKTU BERURUSAN</u></b><br>
  ISNIN – KHAMIS : 9.00 PAGI – 12.00 TENGAHARI <br>
  <span class="tabbed-line">: 2.00 PETANG – 4.00 PETANG </span> <br>
  JUMAAT <span class="tabbed">: 9.00 PAGI – 12.00 TENGHARI </span> <br>
  </p>

  <u><h2>PENYERAHAN BORANG BERJAYA</h2></u>

   <fieldset>
    <legend>A. MAKLUMAT PROGRAM</legend>
    <p><b>PROGRAM:</b> <?php echo $_POST["program"]; ?></p>
    <p><b>TARIKH PINJAM:</b> <?php echo $_POST["tarikhpinjam"]; ?></p>
    <p><b>TARIKH PULANG:</b> <?php echo $_POST["tarikhpulang"]; ?></p>
    <p><b>MASA:</b> <?php echo $_POST["masa"]; ?></p>
    <p><b>PENGANJUR:</b> <?php echo $_POST["penganjur"]; ?></p>
    <p><b>JUMLAH PESERTA:</b> <?php echo $_POST["jumlah"]; ?></p>
  </fieldset>

  <fieldset>
  <legend>B. BUTIRAN PEMOHON</legend>
    <p><b>NAMA PEMOHON</b><?php echo $_POST["namapemohon"]; ?></p>
    <p><b>NO. PEKERJA/NO. PELAJAR</b><?php echo $_POST["nopelajar"]; ?></p>
    <p><b>JAWATAN PEMOHON</b><?php echo $_POST["jawatanpemohon"]; ?></p>
    <p><b>BAHAGIAN PEMOHON</b><?php echo $_POST["bahagianpemohon"]; ?></p>

    <?php if (isset($_POST["phonetypepemohon"])) : ?>
      <p><b>JENIS TELEFON PEMOHON:</b> <?php echo strtoupper($_POST["phonetypepemohon"]); ?></p>
      <p><b>NO. TELEFON PEMOHON</b><?php echo $_POST["phonepemohon"]; ?></p>
    <?php endif; ?>

  </fieldset>

  <fieldset>
  <legend>C. BUTIRAN PENJAMIN</legend>
  <p><b>NAMA PENJAMIN</b><?php echo $_POST["namapenjamin"]; ?></p>
  <p><b>NO. PEKERJA PENJAMIN</b><?php echo $_POST["nopekerja"]; ?></p>
  <p><b>AWATAN PENJAMIN</b><?php echo $_POST["jawatanpenjamin"]; ?></p>
  <p><b>BAHAGIAN PENJAMIN</b><?php echo $_POST["bahagianpenjamin"]; ?></p>

    <?php if (isset($_POST["phonetypepenjamin"])) : ?>
      <p><b>JENIS TELEFON PENJAMIN:</b> <?php echo strtoupper($_POST["phonetypepenjamin"]); ?></p>
      <p><b>NO. TELEFON PENJAMIN</b><?php echo $_POST["phonepenjamin"]; ?></p>
    <?php endif; ?>

  </fieldset>

  <fieldset>
    <legend><b>PENGAKUAN PEMOHON</b></legend>
    <?php
    $pengakuan_pemohon_checked = isset($_POST['pengakuan_pemohon']) ? 'checked' : '';
    ?>
    <input type="checkbox" name="pengakuan_pemohon" id="pengakuan_pemohon" <?php echo $pengakuan_pemohon_checked; ?> disabled>
    <label for="pengakuan_pemohon" >
      Saya mengaku akan bertanggungjawab terhadap semua kostum dan peralatan yang dipinjam dan
      mematuhi etika penggunaan. Saya juga bersetuju untuk membayar gantirugi sekiranya berlaku
      kerosakan dan kehilangan pada peralatan tersebut. Sekiranya saya gagal berbuat demikian pihak
      UiTM berhak mengambil tindakan sewajarnya.
      </label><br><br>
</fieldset>

<fieldset>
    <legend><b>D. PENGAKUAN PENJAMIN</b></legend>
    <?php
    $pengakuan_penjamin_checked = isset($_POST['pengakuan_penjamin']) ? 'checked' : '';
    ?>
    <input type="checkbox" name="pengakuan_penjamin" id="pengakuan_penjamin" <?php echo $pengakuan_penjamin_checked; ?> disabled>
    <label for="pengakuan_pemohon" >
      Saya mengaku akan bertanggungjawab terhadap semua kostum dan peralatan yang dipinjam dan
      mematuhi etika penggunaan. Saya juga bersetuju untuk membayar gantirugi sekiranya berlaku
      kerosakan dan kehilangan pada peralatan tersebut. Sekiranya saya gagal berbuat demikian pihak
      UiTM berhak mengambil tindakan sewajarnya.
      </label><br><br>
</fieldset>

</div>

  <p style="text-align: center; margin-top: 20px;">
    <a href="main.php">Kembali Ke Menu Utama</a>
  </p>

<?php include 'footer.php'; ?>
</body>
</html>
