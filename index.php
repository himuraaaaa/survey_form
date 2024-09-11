<!DOCTYPE html>
<html lang="en">
<head>
  <title>SURVEY FORM</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div>
  <h1 id="title" class="header">Bootcamp Survey Form</h1>
  <p id="description" class="header">Terima kasih telah belajar bersama kami! harap luangkan beberapa menit untuk menilai kami sehingga kami dapat melayani Anda dengan lebih baik</p>
  <form id="survey-form" method="POST">
    <div class="isi-form">
      <label for="name" id="name-label"> Nama <input id="name" name="name" type="text" placeholder="Masukkan nama"></label>
    </div>
    <div class="isi-form">
      <label for="email" id="email-label">Email <input id="email" name="email" type="email" placeholder="Masukkan email"></label>
    </div>
    <div class="isi-form">
      <label for="number" id="number-label">Umur (Optional) <input id="number" name="age" type="number" placeholder="Masukkan umur" min="17" max="45"></label>
      </div>
      <div class="isi-form">
        <label>Pekerjaan
          <select id="dropdown">
            <option>Pilih salah satu</option>
            <option>Pelajar</option>
            <option>Pekerja Fulltime</option>
            <option>Pekerja Paruh Waktu</option>
            <option>Lainnya</option>
          </select>
        </label>
      </div>
      <div class="isi-form">
      <legend>Bagaimana kepuasan anda terhadap bootcamp kami?</legend>
      <label for="sangat-tidak-puas"><input id="sangat-tidak-puas" type="radio" name="rating" class="inline" value="sangat-tidak-puas" checked>Sangat Tidak Puas</label>
      <label for="tidak-puas"><input id="tidak-puas" type="radio" name="rating" class="inline" value="tidak-puas" >Tidak Puas</label>
      <label for="puas"><input id="puas" type="radio" name="rating" class="inline" value="puas">Puas</label>
      <label for="puas-sekali"><input id="puas-sekali" type="radio" name="rating" class="inline" value="puas-sekali">Puas Sekali</label>
      <label for="sangat-puas-sekali"><input id="sangat-puas-sekali" type="radio" name="rating" class="inline" value="sangat-puas-sekali">Sangat Puas Sekali</label>
      </div>
      <div class="isi-form">
        <p>Apa program yang kamu pelajari dalam bootcamp?</p>
        <label for="frontend-dev">
          <input id="frontend-dev" type="checkbox" class="inline" value="frontend-developer"> Front-end developer
        </label>
        <label for="backend-dev">
          <input id="backend-dev" type="checkbox" class="inline" value="backend-developer"> Back-end developer
        </label>
        <label for="fullstack-dev">
          <input id="fullstack-dev" type="checkbox" class="inline" value="fullstack-developer"> Fullstack Developer
        </label>
        <label for="devops">
          <input id="devops" type="checkbox" class="inline" value="devops-engineer"> Devops Engineer
        </label>
        <label for="cyber">
          <input for="cyber" type="checkbox" class="inline" value="cyber-security"> Cyber Security
        </label>
      </div>
      <div class="isi-form">
        <label for="kritik-saran"> Kritik dan Saran
        <textarea id="textarea" type="textarea" name="kritik-saran" rows="5" cols="30" placeholder="Tulis kritik dan saranmu disini..."></textarea>
        </label>
      </div>
      <div>
        <input id="submit" type="submit" name="submit" value="Submit"/>
      </div>
  </form>
  </div>
  <?php
    if (isset($_POST['submit'])) {
      // Mengambil data
      $name = $_POST['name'];
      $email = $_POST['email'];
      
      // Connect Database
      $conn = mysqli_connect('localhost', 'root', '', 'latihan');

      // Membentuk query SQL
      $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

      // Menjalankan query
      if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  ?>
</body>
