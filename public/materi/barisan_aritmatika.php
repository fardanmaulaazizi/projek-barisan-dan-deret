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
        BARISAN ARITMATIKA
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
          <img src="../images/materi/gambar_materi1.png" class="mx-auto my-auto mb-3" />
          <p class="text-center italic">Contoh Barisan Aritmetika</p>  
          <p class="mb-3">Barisan aritmetika sering juga disebut barisan hitung adalah barisan bilangan yang setiap sukunya diperoleh dari suku sebelumnya dengan menambah atau mengurangi dengan suatu bilangan tetap. Bilangan tetap tersebut dinamakan beda. Jadi beda merupakan selisih antara suatu suku barisan dengan suku sebelumnya.</p>
            <p class="mb-3">Jika suku pertama = a dan beda = b, maka secara umum barisan aritmetika tersebut adalah</p>
            <img src="../images/materi/barisan_aritmatika_pola_barisan.png" width="100%" class="text-center mb-3"/>
            <p class="mb-3"> Jadi rumus suku ke-n barisan aritmetika adalah:</p>
            <img class="mb-3 mx-auto" src="../images/materi/barisan_aritmatika_rumus.png" width="180px" alt="rumus">
            <p class="mb-5">Dengan</p>
            <table class="mb-3">
                <tr>
                    <td>U<sub>n</sub></td>
                    <td>: suku ke-n</td>
                </tr>
                <tr>
                    <td>&alpha;</td>
                    <td>: suku pertama</td>
                </tr>
                <tr>
                    <td><em>b</em></td>
                    <td>: beda atau selisih yaitu U<sub>n-1</sub>- U<sub>(n-1)<sub></td>
                </tr>
            </table>
            <h3 class="text-center font-bold mb-3">SUKU TENGAH BARISAN ARITMETIKA</h3>
            <p class="mb-3">Barisan aritmetika dengan jumlah sukunya ganjil memiliki suku tengah yang dilambangkan dengan <em>U<sub>t</sub></em>. Sedangkan barisan aritemtika dengan banyak suku genap tidak memiliki suku tengah. Rumus suku tengah barisan aritmetika adalah sebagai berikut.</p>
            <img class="mb-3 mx-auto" src="../images/materi/barisan_aritmatika_rumus_suku_tengah.png" width="180px" alt="rumus">
            <p>Dengan</p>
            <table class="mb-3">
                <tr>
                    <td>U<sub>t</sub></td>
                    <td>: suku tengah</td>
                </tr>
                <tr>
                    <td>U<sub>1</sub></td>
                    <td>: suku pertama</td>
                </tr>
                <tr>
                    <td>U<sub>n</sub></td>
                    <td>: suku ke-n</td>
                </tr>
            </table>
            <h3 class="text-center font-bold mb-3">SUKU SISIPAN PADA BARISAN ARITMETIKA</h3>
            <p class="mb-3">Suatu barisan aritmetika baru dapat terbentuk dari suatu barisan aritmetika lama dengan diberikan sisipan sebanyak k bilangan diatara dua suku yang berurutannya. Misalkan p dan q dua suku berurutan pada suatu barisan aritmetika. Diantara p dan q disisipkan sebanyak k buah bilangan sehingga membentuk barisan aritmetika baru dengan beda b’ berikut ini: </p>
            <img class="mb-3 mx-auto" src="../images/materi/barisan_aritmatika_suku_sisipan.png" alt="rumus">
            <p>dari barisan tersebut maka diperoleh hal berikut ini </p>
            <ol class="list-decimal list-inside">
                <li>Beda pada barisan baru yaitu b'=b/(k+1) dengan b adalah beda padabarisan aritmetika lama </li>
                <li>Suku pertama barisan aritmetika lama = suku pertama barisan aritmetika baru </li>
                <li>Suku terakhir barisan aritmetika lama = suku terakhir barisan aritmetika baru</li>
                <li>Apabila banyak suku ganjil maka suku tengah barisan aritmetika lama = suku tengah barisan aritmetika baru</li>
                <li>Seandainya banyak suku barisan aritmetika lama adalah n, maka banyak suku barisan aritmetika baru n’ = n + (n – 1)k dengan k adalah banyak suku sisipannya.</li>
            </ol>
        </main>
      </div>
    </div>
  </body>
</html>
