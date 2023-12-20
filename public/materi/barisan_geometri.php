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
        BARISAN GEOMETRI
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
          <p class="text-center italic">Contoh Barisan Geometri</p>    
          <p class="mb-3">Barisan geometri atau barisan ukur adalah barisan bilangan yang tiap sukunya diperoleh dari suku sebelumnya dengan mengalikan dengan suatu bilangan tetap yang tidak sama dengan nol. Bilangan tetap tersebut dinamakan pembanding atau rasio, (biasanya disimbolkan dengan r).</p>
            <p class="mb-3">Berdasar pengertian barisan geometri, maka bentuk umum barisan geometri adalah sebagai berikut.</p>
            <img src="../images/materi/barisan_geometri_pola.png" width="250px" class="text-center mb-3"/>
            <p class="mb-3">dengan  a : suku pertama barisan, r : rasio pada barisan dimana r=U<sub>n</sub>/U<sub>(n-1)</sub></p>
            <img src="../images/materi/barisan_geometri_rumus.png" class="mx-auto my-auto mb-3" />


            <h3 class="text-center font-bold mb-3">SUKU TENGAH BARISAN GEOMETRI</h3>
            <p class="mb-3">Suatu barisan geometri baru dapat terbentuk dari suatu barisan geometri lama dengan diberikan sisipan sebanyak k bilangakan diatara dua suku yang berurutannya. Misalkan p dan q dua suku berurutan pada suatu barisan geometri. Diantara p dan q disisipkan sebanyak k buah bilangan sehingga membentuk barisan geometri dengan rasio r’ berikut ini: </p>
            <img class="mb-3 mx-auto" src="../images/materi/barisan_geometri_suku_tengah.png" alt="rumus">

            <h3 class="text-center font-bold mb-3">SUKU SISIPAN BARISAN GEOMETRI</h3>
            <p class="mb-3">Barisan geometri dengan jumlah sukunya ganjil memiliki suku tengah yang dilambangkan dengan U_t. Sedangkan barisan geometri dengan banyak suku genap tidak memiliki suku tengah. Rumus suku tengah barisan geometri adalah sebagai berikut.</p>
            <img class="mb-3 mx-auto" src="../images/materi/barisan_geometri_suku_sisipan.png" alt="rumus">

            <p>dari barisan tersebut maka diperoleh hal berikut ini</p>
            <ol class="list-decimal list-inside">
                <li>Rasio pada barisan baru yaitu r^'=√(k+1&r) , dimana r adalah rasio barisan geometri lama</li>
                <li>Suku pertama barisan geometri lama = suku pertama barisan geometri baru</li>
                <li>Suku terakhir barisan geometri lama = suku terakhir barisan geometri baru</li>
                <li>Jika banyak suku ganjil maka suku tengah barisan geometri lama = suku tengah barisan geometri baru</li>
                <li>Seandainya banyak suku barisan geometri lama adalah n, maka banyak suku barisan geometri baru n’ = n + (n – 1)k dengan k adalah banyak suku sisipannya.</li>
            </ol>
        </main>
      </div>
    </div>
  </body>
</html>
