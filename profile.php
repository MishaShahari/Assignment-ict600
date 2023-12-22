<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>

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

    @keyframes blink {
      0%, 100% {
        color: #000; /* Initial and final color */
      }
      50% {
        color: red; /* Blink color */
      }
    }

    a.blink {
      text-decoration: none;
      animation: blink 1s infinite;
    }

    img {
      width: 200px;
      height: 270px;
      animation: fadeInAndRollIn 1s ease-in-out;
    }

    @keyframes fadeInAndRollIn {
      0% {
        opacity: 0;
        transform: translateX(-100%);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }


  </style>

<body>
<?php include 'header.php'; ?>

<div class="container mt-4">
  <h2><strong>Profil Saya</strong></h2>
  <img src="misha.jpg" width="200" height="270" >
  <ul>
    Name Penuh: Hamisha Husna Binti Shahari
    <br>
    No. Matrik : 2021898548
    <br>
    Kelas: RCS2405B
  </ul>

  <h3>Maklumat untuk Dihubungi</h3>
  <p>
  <p>Sila hubungi saya melalui e-mel di <a href="mailto:2021898548@student.uitm.edu.my" class="blink">2021898548@student.uitm.edu.my</a>.</p>
  </p>
  </div>
  <p style="text-align: eft; margin-top: 20px;">
    <a href="main.php">Kembali Ke Menu Utama</a>
  </p>
  <?php include 'footer.php'; ?>
</body>
</html>