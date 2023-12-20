<?php
session_start();
if(!isset($_SESSION["id"])){
  ?>
<script>
  document.location("../login.php");
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BARISAN & DERET</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body style="background-image: url(../images/background.png)" class="100vh">
    <div class="flex flex-col h-screen">
      <h1 class="text-3xl bg-hijau text-white font-bold mt-10 p-4 text-center">
        DERET ARITMATIKA
      </h1>

      <div class="flex flex-1 overflow-hidden mt-5 pb-5">
        <aside class="w-32 overflow-y-auto flex flex-col overflow-hidden">
          <a href="../home.php" class="mb-2"><img src="../images/menu_icon/no_active/home.png" alt="home" /></a>
          <a href="../materi.php" class="mb-2"><img src="../images/menu_icon/active/materi.png" alt="materi" /></a>
          <a href="../contoh_soal.php" class="mb-2"><img src="../images/menu_icon/no_active/contoh_soal.png" alt="contoh_soal"/></a>
          <a href="../quiz.php" class="mb-2"><img src="../images/menu_icon/no_active/quiz.png" alt="quiz" /></a>
          <a href="../refleksi.php" class="mb-2"><img src="../images/menu_icon/no_active/refleksi.png" alt="refleksi"/></a>
          <a href="../referensi.php" class="mb-2"><img src="../images/menu_icon/no_active/referensi.png" alt="referensi"/></a>
          <a href="../tentang.php"><img src="../images/menu_icon/no_active/tentang.png" alt="tentang"/></a>
        </aside>

        <main
          class="bg-hijau text-white flex-1 ms-5 overflow-y-auto paragraph me-5 p-3"
        >
          
            <h3 class="text-center font-bold mb-3">DERET ARITMETIKA</h3>
            <p class="mb-3">Jika diketahui U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>>,…,U<sub>n</sub> merupakan suku-suku dari barisan aritmetika, maka U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>>,…,U<sub>n</sub> disebut deret aritmetika. Secara matematis, deret aritmetika dinyatakan sebagai berikut.</p>
            <img class="mb-3 mx-auto" src="../images/materi/deret_aritmatika_rumus.png" width="180px" alt="rumus">
            <p>Dengan</p>
            <table class="mb-3">
                <tr>
                    <td>S<sub><em>n</em></sub></td>
                    <td>: jumlah n suku pertama</td>
                </tr>
                <tr>
                    <td><em>n</em></td>
                    <td>: urutan suku</td>
                </tr>
                <tr>
                    <td>&alpha;</td>
                    <td>: suku pertama</td>
                </tr>
                <tr>
                    <td><em>b</em></td>
                    <td>: selisih atau beda antarsuku</td>
                </tr>
            </table>
        </main>
      </div>
    </div>
  </body>
</html>
