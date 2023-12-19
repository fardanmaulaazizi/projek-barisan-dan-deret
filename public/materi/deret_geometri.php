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
        DERET GEOMETRI
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

            <h3 class="text-center font-bold mb-3">DERET GEOMETRI</h3>
            <p class="mb-3">Jika diketahui U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>,…,U<sub>n</sub> merupakan suku-suku dari barisan geometri, maka U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>,…,U<sub>n</sub> disebut deret geometri. Secara matematis, deret geometri dinyatakan sebagai berikut.</p>
            <img class="mb-3 mx-auto" src="../images/materi/deret_geometri_rumus.png" width="180px" alt="rumus">
            <p class="mb-3">Untuk r yang lain deret geometri diperoleh dengan rumus </p>
            <img class="mb-3 mx-auto" src="../images/materi/deret_geometri_rumus_2.png" width="80px" alt="rumus">
            
            <h3 class="text-center font-bold mb-3">DERET GEOMETRI TAK HINGGA</h3>
            <p class="mb-3">Jika diketahui U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>,…,U<sub>n</sub> merupakan suku-suku dari barisan geometri, maka U<sub>1</sub>,U<sub>2</sub>,U<sub>3</sub>,…,U<sub>n</sub> disebut deret geometri. Secara matematis, deret geometri dinyatakan sebagai berikut.</p>
            <img class="mb-3 mx-auto" src="../images/materi/deret_geometri_tak_hingga.png" width="400px" alt="rumus">
            <p class="mb-3">Jadi deret geometri tak hingga akan memberikan suatu nilai tertentu jika deret geometri tersebut konvergen. Deret geometri akan konvergen jika -1 &lt; r &lt; 1 dengan rumus deret geometri tak hingga adalah S<sub>&infin;</sub>=a/(1-r)</p>

            <h3 class="text-center font-bold mb-3">DERET GABUNGAN</h3>
            <p class="mb-3">Suku-suku pada deret gabungan terbentuk dari perkalian suku-suku yang bersesuaian dari suatu deret aritmetika dan deret geometri. Berikut ini beberapa contoh deret gabungan.</p>
            <ol class="list-decimal list-inside">
                <li>1 + 2.5  +3.5<sup>2</sup>+4.5<sup>3</sup>+5.5<sup>4</sup>+⋯+n.5<sup>(n-1)</sup></li>
                <li><em>x</em> + 3<em>x</em><sup>2</sup>+5<em>x</em><sup>3</sup>+7<em>x</em><sup>4</sup>+9<em>x</em><sup>5</sup>+⋯+(2<em>n</em>-1)x<sup>n</sup></li>
            </ol>
        </main>
      </div>
    </div>
  </body>
</html>
