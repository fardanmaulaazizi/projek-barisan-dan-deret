<?php
  session_start();
  if(!isset($_SESSION["id"])){
    ?>
      <script>
        document.location("login")
      </script>
    <?php
  }
  include "koneksi.php";
  $query =  mysqli_query($conn, "SELECT * FROM quiz");
  $id = $_SESSION["id"];
  $riwayatQuizPengguna = mysqli_query($conn, "SELECT * FROM riwayat_quiz WHERE id_user = $id");

  if(isset($_POST["selesai"])){
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];

    $query = mysqli_query($conn, "SELECT * FROM quiz");
    $kunciJawaban = [];
    $jawabanBenar = 0;
    while($data = mysqli_fetch_assoc($query)){
      $kunciJawaban[] = $data;
    }


    if($q1 == $kunciJawaban[0]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q2 == $kunciJawaban[1]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q3 == $kunciJawaban[2]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q4 == $kunciJawaban[3]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q5 == $kunciJawaban[4]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q6 == $kunciJawaban[5]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q7 == $kunciJawaban[6]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q8 == $kunciJawaban[7]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q9 == $kunciJawaban[8]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    if($q10 == $kunciJawaban[9]["kunci_jawaban"]){
      $jawabanBenar += 1;
    }
    $tanggalHariIni = date("Y-m-d");
    $query = mysqli_query($conn, "INSERT INTO `riwayat_quiz` (`id`, `tanggal`, `nilai`, `id_user`) VALUES (NULL, '$tanggalHariIni', '$jawabanBenar', '$id');")
    ?>
<script>
  alert("Jawaban anda benar : <?= $jawabanBenar ?> soal");
  document.location = "quiz.php";
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="background-image: url(images/background.png)" class="100vh">
    <div class="flex flex-col h-screen">
      <h1 class="text-3xl bg-hijau text-white font-bold text-center mt-10" style="padding: 10px 10px">
        QUIZ
      </h1>
      <a href="./logout.php" class="ms-auto text-decoration-none" style="background-color: red; color: white; padding: 5px 10px; border-radius: 10%;">Logout</a>
      <!--  end::navbar   -->
      <div class="flex flex-1 overflow-hidden mt-1 pb-5">
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
            ><img src="images/menu_icon/active/quiz.png" alt="quiz"
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
          <p id="countdown" class="text-center fixed bg-kuning">Go</p>
          <form action="quiz.php" id="quizForm" method="post" class="mt-4">
            <div alt="soal1" class="mb-3">
              <h4>No. 1</h4>
              <p>
                1. Perhatikan barisan bilangan berikut:<br />3, 7, 11, 15, …<br />Beda
                dari barisan aritmetika di atas adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q1"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 2</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q1"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q1"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 4</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q1"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 5</label>
              </div>
            </div>
            <div alt="soal2" class="mb-3">
              <h4>No. 2</h4>
              <p>
                Diketahui barisan aritmetika: 5, 7, 9, 11,...<br />Suku ke-15
                dari barisan tersebut adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 30</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 31</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 32</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q2"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 33</label>
              </div>
            </div>
            <div alt="soal3" class="mb-3">
              <h4>No. 3</h4>
              <p>
                Jika suku ketiga dan ketujuh suatu barisan aritmetika adalah 11
                dan 19. Maka suku ke-11 dari barisan tersebut adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 25</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 26</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 27</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q3"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 28</label>
              </div>
            </div>
            <div alt="soal4" class="mb-3">
              <h4>No. 4</h4>
              <p>
                Diketahui suatu barisan aritmetika dengan U2=8 dan U6=20. Jumlah
                6 suku pertama barisan tersebut adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 150</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 75</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 50</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 28</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q4"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 25</label>
              </div>
            </div>
            <div alt="soal5" class="mb-3">
              <h4>No. 5</h4>
              <p>
                Panjang sisi sebuah segitiga siku-siku membentuk barisan
                aritmetika. Jika keliling segitiga tersebut adalah 72, luasnya
                adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 216</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 363</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 364</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 383</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q5"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 432</label>
              </div>
            </div>
            <div alt="soal6" class="mb-3">
              <h4>No. 6</h4>
              <p>
                Barisan 1, 3, 9, 27, …. Membentuk deret geometri. Rasio barisan
                itu adalah ...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 9</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 28</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q6"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 81</label>
              </div>
            </div>
            <div alt="soal7" class="mb-3">
              <h4>No. 7</h4>
              <p>
                Barisan 1, 3, 9, 27,... membentuk deret geometri. Suku ke-5
                adalah ...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 1</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 9</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 27</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q7"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 81</label>
              </div>
            </div>
            <div alt="soal8" class="mb-3">
              <h4>No. 8</h4>
              <p>
                Selembar kertas dipotong menjadi dua bagian. Setiap bagian
                dipotong menjadi dua dan seterusnya. Jumlah potongan kertas
                setelah potongan kelima sama dengan...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 17</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 16</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 18</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 19</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q8"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 20</label>
              </div>
            </div>
            <div alt="soal9" class="mb-3">
              <h4>No. 9</h4>
              <p>
                Pada sebuah deret geometri diketahui bahwa suku pertamanya
                adalah 3 dan suku ke-9 adalah 768. Suku ke-7 deret tersebut
                adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 192</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 120</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 234</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 100</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q9"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 115</label>
              </div>
            </div>
            <div alt="soal10" class="mb-3">
              <h4>No. 10</h4>
              <p>
                Diketahui suku ke-5 dari barisan geometri adalah 243, hasil bagi
                suku ke-9 dengan suku ke-6 adalah 27. Suku ke-2 dari barisan
                tersebut adalah...
              </p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="a"
                  required
                />
                <label class="form-check-label"> (A) 3</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="b"
                  required
                />
                <label class="form-check-label"> (B) 9</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="c"
                  required
                />
                <label class="form-check-label"> (C) 27</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="d"
                  required
                />
                <label class="form-check-label"> (D) 81</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="q10"
                  value="e"
                  required
                />
                <label class="form-check-label"> (E) 163</label>
              </div>
            </div>
            <button type="submit" class="bg-kuning p-1 mt-3" name="selesai">
              Selesai
            </button>
          </form>
        </main>
        <div class="">
        <button
              type="button"
              class="bg-hijau p-1"
              data-bs-toggle="modal"
              data-bs-target="#soal1"
            >
              Riwayat Quiz
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
                    <table class="w-full table">
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Benar</th>
                      </tr>
                      <?php $i = 1; while($data = mysqli_fetch_assoc($riwayatQuizPengguna)){ ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $data["tanggal"] ?></td>
                        <td><?= $data["nilai"]?>/10</td>
                      </tr>
                      <?php $i++; }?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
     
    </div>
    <script src="js/quiz.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
