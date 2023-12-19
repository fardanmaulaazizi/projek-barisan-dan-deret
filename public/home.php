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
        BARISAN & DERET
      </h1>

      <!--  end::navbar   -->
      <div class="flex flex-1 overflow-hidden mt-5 pb-5">
        <!--   start::Sidebar    -->
        <aside class="w-32 overflow-y-auto flex flex-col overflow-hidden">
          <a href="home.php" class="mb-2"><img src="images/menu_icon/active/home.png" alt="home" /></a>
          <a href="materi.php" class="mb-2"><img src="images/menu_icon/no_active/materi.png" alt="materi" /></a>
          <a href="contoh_soal.php" class="mb-2"><img src="images/menu_icon/no_active/contoh_soal.png" alt="contoh_soal"/></a>
          <a href="quiz.php" class="mb-2"><img src="images/menu_icon/no_active/quiz.png" alt="quiz" /></a>
          <a href="refleksi.php" class="mb-2"><img src="images/menu_icon/no_active/refleksi.png" alt="refleksi"/></a>
          <a href="referensi.php" class="mb-2"><img src="images/menu_icon/no_active/referensi.png" alt="referensi"/></a>
          <a href="tentang.php"><img src="images/menu_icon/no_active/tentang.png" alt="tentang"/></a>
        </aside>

        <main
          class="bg-hijau text-white flex-1 ms-5 overflow-y-auto paragraph me-5 p-3"
        >
          <img src="./images/home_image.png" width="200px" class="mx-auto my-auto mb-3" />
          <p class="mb-3">
            Pernahkan kalian berpikir, apa itu barisan? Nah, barisan adalah
            suatu susunan bilangan yang dibentuk menurut suatu urutan tertentu.
            Bilangan-bilangan yang tersusun itu disebut suku. Apa saja
            contoh-contoh barisan? Perhatikan contoh susunan bilangan berikut
            ini :
          </p>
          <ol class="mb-3">
            <li>(1) 1, 3, 5, 7, 9, 11, ...</li>
            <li>(2) 10, 5, 0, -5, -10, ...</li>
            <li>(3) 2, 4, 8, 16, 32, ...</li>
            <li>(4) 1, 3, 9, 21, 63, ...</li>
          </ol>
          <p class="mb-3">
            Susunan bilangan di atas merupakan contoh dari suatu barisan karena
            susunan bilangan tersebut memiliki aturan tertentu.
          </p>
          <p class="mb-3">
            Pada contoh (1) dan (2) susunan bilangan tersebut mempunyai tambahan
            bilangan yang tetap pada suku yang berurutan, yaitu tambahan 2 pada
            susunan bilangan (1) dan tambahan -5 pada susunan bilangan (2).
            Barisan yang suku berurutannya mempunyai tambahan bilangan yang
            tetap, maka barisan ini disebut <strong>barisan aritmatika</strong>.
            Tambahan bilangan yang tetap disebut beda yang disimbolkan b.
          </p>
          <p class="mb-3">
            Pada contoh (3) dan (4) susunan bilangan tersebut mempunyai
            perbandingan bilangan yang tetap pada suatu suku dengan suku
            sebelumnya, yaitu perbandingan 2 pada susunan bilangan (3) dan
            perbandingan 3 pada susunan bilangan (4). Barisan yang mempunyai
            perbandingan bilangan yang tetap pada suatu suku dengan suku
            sebelumnya disebut <strong>barisan geometri</strong>. Perbandingan
            bilangan yang tetap disebut rasio yang disimbolkan dengan r.
          </p>
          <p class="mb-3">
            Pada suatu barisan, suku pertama perbandingan dilambangkan dengan
            U_1 atau a, suku kedua dilambangkan dengan U_2, dan seterusnya
            hingga suku ke-n dilambangkan dengan U_n, dengan n adalah anggota
            bilangan asli ( n=1,2,3,…).
          </p>
          <p class="mb-3">
            Lalu bagaimana dengan deret? Apakah deret itu? Deret adalah jumlah
            seluruh suku-suku dalam barisan yang dilambangkan dengan S_n. Contoh
            dari deret dapat dilihat dibawah ini :
          </p>
          <ol class="mb-3">
            <li>(1) 1 + 3 + 5 + 9 + 11 +...</li>
            <li>(2) 10 + 5 + 0 + (-5) + (-10) + ...</li>
            <li>(3) 2, 4, 8, 16, 32, ...</li>
            <li>(4) 1 + 3 + 9 + 21 + 63 + ...</li>
          </ol>
        </main>
      </div>
    </div>
  </body>
</html>
