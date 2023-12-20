<?php
require 'koneksi.php';

session_start();
if(!isset($_SESSION["id"])){
  ?>
<script>
  document.location("login.php");
</script>
<?php
}

// Menambahkan data
if (isset($_POST['kirim'])) {
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $isMenyenangkan = $_POST['isMenyenangkan'];
  $isPaham = $_POST['isPaham'];
  
  $query = mysqli_query($conn, "INSERT INTO `refleksi` (`id`, `nama`, `kelas`, `isMenyenangkan`, `isPaham`) VALUES (NULL, '$nama', '$kelas', '$isMenyenangkan', '$isPaham');");
  if ($query) {
  ?>
      <script>
          alert("Terimakasih sudah mengirimkan jawaban kamu");
          document.location = 'refleksi.php';
      </script>
  <?php
  } else {
  ?>
      <script>
          alert("gagal");
          document.location = 'refleksi.php';
      </script>
  <?php
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BARISAN & DERET</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="background-image: url(images/background.png)" class="100vh">
    <div class="flex flex-col h-screen">
      <h1 class="text-3xl bg-hijau text-white font-bold mt-10 p-4 text-center">
        REFLEKSI
      </h1>
      <a href="./logout.php" class="ms-auto me-5" style="background-color: red; color: white; padding: 5px 10px; border-radius: 10%; margin-top: 7px">Logout</a>
      <!--  end::navbar   -->
      <div class="flex flex-1 overflow-hidden mt-5 pb-5">
        <!--   start::Sidebar    -->
        <aside class="w-32 overflow-y-auto flex flex-col overflow-hidden">
          <a href="home.php" class="mb-2"
            ><img src="images/menu_icon/no_active/home.png" alt="home"
          /></a>
          <a href="materi.php" class="mb-2"
            ><img src="images/menu_icon/no_active/materi.png" alt="materi"
          /></a>
          <a href="contoh_soal.php" class="mb-2"
            ><img
              src="images/menu_icon/no_active/contoh_soal.png"
              alt="contoh_soal"
          /></a>
          <a href="quiz.php" class="mb-2"
            ><img src="images/menu_icon/no_active/quiz.png" alt="quiz"
          /></a>
          <a href="refleksi.php" class="mb-2"
            ><img src="images/menu_icon/active/refleksi.png" alt="refleksi"
          /></a>
          <a href="referensi.php" class="mb-2"
            ><img
              src="images/menu_icon/no_active/referensi.png"
              alt="referensi"
          /></a>
          <a href="tentang.php"
            ><img src="images/menu_icon/no_active/tentang.png" alt="tentang"
          /></a>
        </aside>

        <main
          class="bg-hijau text-white flex-1 ms-5 overflow-y-auto paragraph me-5 p-5"
        >
          <h3 class="text-center font-bold mb-3">Refleksi</h3>

          <p class="mb-4">
            Setelah kalian mempelajari materi barisan dan deret dalam web/blog
            ini, kalina dapat mengisi beberapa pertanyaan-pertanyaan dibawah ini
            :
          </p>
          <form action="refleksi.php" method="POST">
            <div class="mb-4">
                <label for="nama" class="block text-sm mb-2">Siapa namamu?</label>
                <input type="text" id="nama" name="nama" style="color: black;" class="w-full md:w-64 border border-gray-300 p-2 rounded focus:outline-none focus:border-kuning" placeholder="Masukkan nama...">
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-sm mb-2">Kelas berapa kamu sekarang?</label>
                <input type="text" id="kelas" name="kelas" style="color: black;" class="w-full md:w-64 border border-gray-300 p-2 rounded focus:outline-none focus:border-kuning" placeholder="Masukkan kelas...">
            </div>

            <div class="mb-4">
                <label for="isMenyenangkan" class="block text-sm mb-2">Apakah belajar di web/blog ini menyenangkan?</label>
                <textarea id="isMenyenangkan" name="isMenyenangkan" style="color: black;" class="w-full md:w-64 border border-gray-300 p-2 rounded focus:outline-none focus:border-kuning" placeholder="Apakah menyenangkan?"></textarea>
            </div>
            <div class="mb-4">
              <label for="isPaham" class="block text-sm mb-2">Apakah kalian paham dengan materi yang diajarkan dalam web/blog ini?</label>
              <textarea id="isPaham" name="isPaham" style="color: black;" class="w-full md:w-64 border border-gray-300 p-2 rounded focus:outline-none focus:border-kuning"placeholder="Apakah mudah dipahami?"></textarea>
            </div>
            <button type="submit" name="kirim" class="bg-kuning text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Kirim
            </button>
        </main>
      </div>
    </div>
  </body>
</html>
