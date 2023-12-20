<?php
session_start();
if(!isset($_SESSION["id"])){
  ?>
<script>
  document.location("login.php");
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
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="background-image: url(images/background.png)" class="100vh">
    <div class="flex flex-col h-screen">
      <h1 class="text-3xl bg-hijau text-white font-bold mt-10 p-4 text-center">
        TENTANG
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
            ><img src="images/menu_icon/no_active/refleksi.png" alt="refleksi"
          /></a>
          <a href="referensi.php" class="mb-2"
            ><img
              src="images/menu_icon/no_active/referensi.png"
              alt="referensi"
          /></a>
          <a href="tentang.php"
            ><img src="images/menu_icon/active/tentang.png" alt="tentang"
          /></a>
        </aside>

        <main
          class="text-white flex-1 ms-5 overflow-y-auto paragraph me-5 px-3"
        >
          <div
            class="flex bg-hijau flex-col w-full p-5 md:px-12 justify-center"
          >
            <div class="flex mb-5 items-center w-full flex-col md:flex-row">
              <div class="overflow-hidden rounded-full mb-4 md:w-36 md:me-16">
                <img
                  src="images/tentang/irene.jpg"
                  alt="Gambar Anda"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="biodata">
                <table>
                  <tr>
                    <td class="w-14 md:w-28">Nama</td>
                    <td>:</td>
                    <td>Irene Chelsyana Febrianti</td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>K1321049</td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td>Jepara, 19 Februari 2003</td>
                  </tr>
                  <tr>
                    <td>Motto Hidup</td>
                    <td>:</td>
                    <td>kuat dilakoni, nek ora kuat yo dipekso kuat!</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="flex items-center w-full flex-col md:flex-row">
              <div class="overflow-hidden rounded-full mb-4 md:me-16 md:w-36">
                <img
                  src="images/tentang/ira.jpg"
                  alt="Gambar Anda"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="biodata">
                <table>
                  <tr>
                    <td class="w-14 md:w-28">Nama</td>
                    <td>:</td>
                    <td>Ira Septiana Marfi’a</td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>K1321048</td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td>Sragen, 16 September 2003</td>
                  </tr>
                  <tr>
                    <td>Motto Hidup</td>
                    <td>:</td>
                    <td>Be Happy!!! ^^</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="flex items-center w-full flex-col md:flex-row">
              <div class="overflow-hidden rounded-full mb-4 md:me-16 md:w-36">
                <img
                  src="images/tentang/widya.png"
                  alt="Gambar Anda"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="biodata">
                <table>
                  <tr>
                    <td class="w-14 md:w-28">Nama</td>
                    <td>:</td>
                    <td>Widya Damayanti</td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>K1321078</td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td>Magetan, 31 Mei 2003</td>
                  </tr>
                  <tr>
                    <td>Motto Hidup</td>
                    <td>:</td>
                    <td>just let it flow</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="flex items-center w-full flex-col md:flex-row">
              <div class="overflow-hidden rounded-full mb-4 md:me-16 md:w-36">
                <img
                  src="images/tentang/habib.jpg"
                  alt="Gambar Anda"
                  class="w-full h-full object-cover"
                />
              </div>
              <div class="biodata">
                <table>
                  <tr>
                    <td class="w-14 md:w-28">Nama</td>
                    <td>:</td>
                    <td>Habib Nasyith Za'im Alfayyad</td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>K1319033</td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td>Surakarta, 20 Agustus 2001</td>
                  </tr>
                  <tr>
                    <td>Motto Hidup</td>
                    <td>:</td>
                    <td>Tenang , Kalem , Kuasai</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
