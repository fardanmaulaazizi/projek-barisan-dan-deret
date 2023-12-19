<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BARISAN & DERET</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="background-image: url(images/background.png)" class="100vh">
    <div class="flex flex-col h-screen">
      <h1 class="text-3xl bg-hijau text-white font-bold mt-10 p-4 text-center">
        CONTOH SOAL
      </h1>

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
              src="images/menu_icon/active/contoh_soal.png"
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
            ><img src="images/menu_icon/no_active/tentang.png" alt="tentang"
          /></a>
        </aside>

        <main
          class="bg-hijau text-white flex-1 ms-5 overflow-y-auto paragraph me-5 p-3"
        >
          <div alt="soal1" class="mb-3">
            <h4>No. 1</h4>
            <p>
              Suatu barisan aritmatika adalah 2, 6, 10, … maka suku ke-14 adalah
              :
            </p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal1"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal1"
              tabindex="-1"
              aria-labelledby="soal1Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal1.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal2" class="mb-3">
            <h4>No. 2</h4>
            <p>
              Diketahui barisan aritmatika 7, 10,13, ….79 maka suku tengah nya adalah : 
            </p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal2"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal2"
              tabindex="-1"
              aria-labelledby="soal2Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal2.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal3" class="mb-3">
            <h4>No. 3</h4>
            <p>
              Diketahui barisan aritmatika 7,15,23,31,…. Diantara dua suku berurutan pada barisan tersebut disisipkan 3 bilangan baru 
            </p>
            <p>a. 2 suku pertama barisan aritmatika yang baru </p>
            <p>b. Suku ke- 30 aritmatika yang baru</p>
            
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal3"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal3"
              tabindex="-1"
              aria-labelledby="soal3Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal3_part1.png" alt="" />
                    <img src="./images/contoh_soal/jawaban_soal3_part2.png" alt="" />
                    <img src="./images/contoh_soal/jawaban_soal3_part3.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal4" class="mb-3">
            <h4>No. 4</h4>
            <p>
              Hitunglah jumlah nilai suku ke-4 deret aritmatika apabila terdapat angka : 4, 8,16, ….? 
            </p>
            
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal4"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal4"
              tabindex="-1"
              aria-labelledby="soal4Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal4.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal5" class="mb-3">
            <h4>No. 5</h4>
            <p>
              Jika diketahui barisan geometri  3,15,75,375,,….Tentukan baris geometri ke 9 
            </p>     
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal5"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal5"
              tabindex="-1"
              aria-labelledby="soal5Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal5.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal6" class="mb-3">
            <h4>No. 6</h4>
            <p>
              Jika diketahui barisan geometri 4, 12, 36, ..., 26.244. maka suku tengah barisan tersebut adalah :
            </p>     
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal6"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal6"
              tabindex="-1"
              aria-labelledby="soal6Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal6.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal7" class="mb-3">
            <h4>No. 7</h4>
            <p>
              Diketahui tiga buah suku dari barisan geometri yaitu 2, 32, 512. Jika diantara setiap dua suku disisipkan 3 buah suku, maka didapat barisan geometri yang baru.
            </p>
            <p>a. Suku ke 2 dan 3 barisan geometri yang baru</p>
            <p>b. Suku ke- 30 geometri yang baru</p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal7"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal7"
              tabindex="-1"
              aria-labelledby="soal7Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal7_part1.png" alt="" />
                    <img src="./images/contoh_soal/jawaban_soal7_part2.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal8" class="mb-3">
            <h4>No. 8</h4>
            <p>
              Diketahui suatu deret geometri 1,3,9,27,…. maka  tentukan jumlah 6 suku pertama deret geometri
            </p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal8"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal8"
              tabindex="-1"
              aria-labelledby="soal8Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal8.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal9" class="mb-3">
            <h4>No. 9</h4>
            <p>
              Diketahui deret geometri tak terhingga 2 + 1 + ½ + ... . Tentukan jumlah deret geometri tersebut.
            </p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal9"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal9"
              tabindex="-1"
              aria-labelledby="soal9Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal9.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div alt="soal10" class="mb-3">
            <h4>No. 10</h4>
            <p>
              Diketahui deret geometri tak terhingga 2 + 4 + 8 + ... . Tentukan jumlah deret geometri tersebut.
            </p>
            <button
              type="button"
              class="bg-kuning p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal10"
            >
              Pembahasan
            </button>
            <div
              class="modal fade"
              id="soal10"
              tabindex="-1"
              aria-labelledby="soal10Label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="./images/contoh_soal/jawaban_soal10.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
