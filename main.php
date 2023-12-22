<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Borang Tempahan Kostum dan Peralatan</title>

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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .costume-image {
      margin-bottom: 20px; 
    }
    
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container">
    
    <div class="welcome-message">
      <p>Selamat Datang Ke Borang Tempahan Kostum dan Peralatan.</p>
    </div>

    <!-- Costume Images -->
    <div class="costume-image">
      <img src="baju_tarian_melayu.jpeg" alt="Baju Tarian Melayu" width="250" height="250"/>
      <br>
      Baju Tarian Melayu
    </div>

    <div class="costume-image">
      <img src="costume_tarian_naga.jpg" alt="Costume Tarian Naga" width="250" height="250"/>
      <br>
      Kostum Tarian Naga
    </div>

    <div class="costume-image">
      <img src="bharata.jpg" alt="Baju Tarian Bhrata Natyam" width="250" height="250"/>
      <br>
      Baju Tarian Bharata Natyam
    </div>

    <div class="costume-image">
      <img src="alat_muzik.jpg" alt="Alat Muzik Tradisional" width="250" height="250"/>
      <br>
      Alat Muzik Tradisional
    </div>

  </div>
<?php include 'footer.php'; ?>
</body>
</html>
