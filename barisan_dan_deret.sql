-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 05:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barisan_dan_deret`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`) VALUES
(1, 'Pembelajaran Matematika yang Menyenangkan', '<p>Matematika adalah salah satu mata pelajaran yang diajarkan di sekolah yang memberikan andil bagi tercapainya tujuan pendidikan nasional serta membentuk insan Indonesia yang produktif, kreatif, inovatif dan afektif. Siswa memerlukan matematika untuk memenuhi kebutuhan praktis, memecahkan masalah dan membantu memahami bidang studi lain antara lain: fisika, kimia, arsitektur, farmasi, geografi, ekonomi dan sebagainya. Di berbagai media massa sering kali informasi disajikan dalam bentuk persen, tabel,maupun diagram. Agar orang dapat memperoleh informasi yang benar dari apa yang dibacanya, mereka harus memiliki pengetahuan mengenai persen, cara membaca tabel maupun diagram. Semua pengetahuan tersebut terdapat dalam pembelajaran matematika.</p><p>Pembelajaran matematika diartikan sebagai proses belajar matematika oleh siswa dengan bantuan/pendampingan guru. Hal ini dimaksutkan bahwa dalam pembelajaran matematika, kegiatan utama dilakukan oleh siswa untuk mempelajari bahan ajar matematika dalam rangka menguasai kompetensi  yang telah ditetapkan. Guru matematika berfungsi sebagai fasilitator dan dinamisator kegiatan belajar oleh siswa. Pembelajaran matematika diharapkan berakhir dengan penguasaan kompetensi yang telah ditetapkan pada mata pelajaran matematika. </p><p>Kemdikbud (2012:15) juga menyatakan bahwa proses pembelajaran yang diharapkan adalah proses pembelajaran yang berpusat pada peserta didik dan kontekstual, serta buku teks yang memuat materi, proses pembelajaran, dan sistem penilaian serta kompetensi yang diharapkan. Secara umum dapat disampaikan bahwa perubahan pembelajaran yang diinginkan adalah perubahan pembelajaran dari:</p><ol><li>Mengingat (memorizing) atau menghafal (rote learning) kea rah berpikir (thinking) dan pemahaman (understanding)</li><li>Model ceramah ke pendekatan: discovery learning, problem based approach, inductive learning, atau inquiry learning</li></ol><p>Mengapa matematika menjadi momok bagi sebagian besar orang? Sebenarnya masalah terbesar justru terletak pada proses pembelajaran matematika itu sendiri. Banyak proses yang sangat mendasar yang seharusnya diajarkan dengan gembira dan saksama, ternyata hal ini dilewati begitu saja. Sebagian besar guru mengunakan metode klasikal dalam pembelajaran matematika dengan model ceramah, contoh latihan soal dan mengerjakan soal. Tidak jarang juga sikap guru yang kurang terbuka terhadap siswa, diktaktor,  pembawaan yang serius seakan kurang ramah dan kurang terbuka terhadap siswa. Sehingga menyebabkan pembelajaran matematika yang kurang menyenangkan dan ditakuti siswa. Hal ini mengakibatkan dasar matematika siswa menjadi lemah dan tidak mampu mendukung proses pembelajaran pada level selanjutnya. Ketika sudah sampai pada level yang cukup tinggi, SMP atau SMU, hal ini akan menjadi dampak merugikan terhadap pelajaran eksata lainnya seperti: fisika dan kimia.</p><p>Kesan awal itu sangat penting. Ketika siswa merasakan sendiri bahwa mempelajari matematika itu mudah dan menyenangkan, pembelajaran konsep dasar matematikapun pada tahap selanjutnya akan menjadi sesuatu yang ringan. Hal itu juga dikarenakan sugesti dari diri siswa sendiri bahwa pembelajaran matematika menyenangkan dengan adanya kesan awal pembelajaran matematika yang menyenangkan.</p><p>Proses pembelajaran matematika yang baik mempunyai tahapan-tahapan yang disesuaikan dengan perkembangan. Pada level dasar, pembelajaran harus dimulai dari suatu yang kongret dan perlahan-lahan menuju pemahaman yang abstrak atau simbolis. Selain itu, unsur-unsur psikologi pembelajaran juga perlu diperhatikan. Oleh karena itu para guru sebaiknya mempelajari psikologi belajar. </p><p>Ada urutan-urutan yang harus dilalui agar siswa menguasai dengan matang suatu konsep matematika. Langkah-langkah pembentukan konsep dasar matematika dalam otak dan memori siswa haruslah memperhatikan aspek-aspek fisiologis dan fungsional otak, kematangan emosional, gaya belajar, kepribadian, dan tahap-tahap perkembangan siswa itu sendiri.</p><p>Mengingat begitu pentingnya pengenalan konsep dasar, sebaiknya pengenalan matematika kepada siswa dilakukan sedemikian rupa sehingga si siswa yang memutuskan ingin tahu lebih banyak. Disini guru sebagai fasilitator dan pembimbing bagi siswanya dengan menemukan sendiri konsep matematika tersebut. Sikap guru hendaknya lebih terbuka, ramah terhadap siswa, dan masih disegani siswa. Dengan demikian siswa tidak canggung dan mudah berkomunikasi dengan gurunya dengan kata lain membangun kemistri guru dan siswa yang bersahabat.</p><p>Tidaklah cukup jika siswa hanya diberikan soal yang sangat banyak dan berulang-ulang. Bukan pula suatu keharusan untuk menguasai apalagi jika disertai konsekuensi dihukum jika tidak bisa. Jika mereka sudah trauma dan benci dengan matematika, maka apapun yang kita lakukan dikemudian hari tidak akan ada gunanya, kecuali si anak bisa mengatasi trauma dan rasa benci tersebut.</p><p>Hal penting yang perlu diketahui adalah keberhasilan proses pembelajaran apa pun sebagian besar ditentukan oleh aspek psikologis dan sisanya ditentukan oleh aspek mekanis/teknik.</p><p>Aspek psikologis yang dimaksutkan adalah konsep diri siswa dan guru. Konsep diri terdiri atas diri ideal, citra diri dan harga diri. Inilah factor dasar kesuksesan seseorang dalam segala hal. Tanpa konsep diri yang bagus akan sangat mempersulit mencapai kesuksesan dalam karier, bisnis maupun bermasyarakat. Dengan kata lain menyugesti diri sendiri dengan hal-hal yang positif bahwa dirinya sendiri memiliki kemampuan.</p><p>Aspek secara mekanik, contohnya: Sesuai penelitiannya (Ariesandi Setyono: 2006) Ada dua kelompok, kelompok pertama diajarkan teknik berhitung cepat dan mudah tanpa pelatihan konsep diri. Kelompok kedua diberi pelatihan untuk memperbaiki konsep dirinya tanpa diajari teknik berhitung cepat. Inilah hasilnya dalam pembelajaran matematika. Kelompok pertama hampir tidak menunjukan perubahan yang berarti. Secara teknik mereka lebih baik, tetapi motivasinya timbul dari lingkungan, bukan dari dalam diri sendiri. Mereka lebih sering menyerah menghadapi tantangan. Yang pertama muncul dipikiran ketika menemui tantangan berupa soal-soal matematika adalah: “Aduh, ini sulit, aku tidak bisa”, “Wah yang ini belum diajarin, aku pasti tidak bisa”, “Aduh gimana sih ini susah banget”. Kelompok kedua yang kemampuan tekniknya tidak dibenahi tetapi konsep dirinya diperbaiki mempunyai motivasi diri yang tinggi untuk mengatasi tantangan yang timbul. Walaupun soal yang mereka temu sangat sulit, mereka yakin bisa mengerjakannya. Mereka tahu diri bahwa mereka pasti bisa, hanya belum ketemu caranya. Dan jika diusahakan terus pasti akan bisa. Beberapa dari kelompok kedua ini mengalami peningkatan yang luar biasa tidak hanya dalam bidang studi matematika tetapi dalam bidang studi lainnya karena kegigihan dirinya tidak mudah putus asa mengenapi konsep dirinya yang berpikiran positif.</p><p>Dengan konsep diri positif, seseorang akan terus maju menghadapi tantangan-tantangan yang ada di depannya. Demikian juga dalam memahami sesuatu. Sesulit apapun pelajaran, jika seorang siswa mempunyai konsep diri positif, ia akan berusaha dengan sekuat tenaga mencari cara untuk menguasainya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int NOT NULL,
  `soal` text NOT NULL,
  `jawaban_a` text NOT NULL,
  `jawaban_b` text NOT NULL,
  `jawaban_c` text NOT NULL,
  `jawaban_d` text NOT NULL,
  `jawaban_e` text NOT NULL,
  `kunci_jawaban` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`) VALUES
(4, 'Perhatikan barisan bilangan berikut: <br>\r\n3, 7, 11, 15, … <br>\r\nBeda dari barisan aritmetika di atas adalah... \r\n', '2', '3', '4', '5', '', 'c'),
(5, 'Diketahui barisan aritmetika: 5, 7, 9, 11,... <br>\r\nSuku ke-15 dari barisan tersebut adalah ...\r\n', '30', '31', '32', '33', '', 'd'),
(6, 'Jika suku ketiga dan ketujuh suatu barisan aritmetika adalah 11 dan 19. Maka suku ke-11 dari barisan tersebut adalah ...', '25', '26', '27', '28', '', 'c'),
(7, 'Diketahui suatu barisan aritmetika dengan U2=8 dan U6=20. Jumlah 6 suku pertama barisan tersebut adalah...', '150', '75', '50', '28', '25', 'b'),
(8, 'Panjang sisi sebuah segitiga siku-siku membentuk barisan aritmetika. Jika keliling segitiga tersebut adalah 72, luasnya adalah...', '216', '363', '364', '383', '432', 'a'),
(9, 'Barisan 1, 3, 9, 27, …. Membentuk deret geometri. Rasio barisan itu adalah...', '1', '3', '9', '28', '81', 'b'),
(10, '7.Barisan 1, 3, 9, 27, …. membentuk deret geometri. Suku ke-5 adalah …..', '1', '3', '9', '27', '81', 'e'),
(11, 'Selembar kertas dipotong menjadi dua bagian. Setiap bagian dipotong menjadi dua dan seterusnya. Jumlah potongan kertas setelah potongan kelima sama dengan...', '17', '16', '18', '19', '20', 'b'),
(12, 'Pada sebuah deret geometri diketahui bahwa suku pertamanya adalah 3 dan suku ke-9 adalah 768. Suku ke-7 deret tersebut adalah..', '192', '120', '234', '100', '115', 'a'),
(13, 'Diketahui suku ke-5 dari barisan geometri adalah 243, hasil bagi suku ke-9 dengan suku ke-6 adalah 27. Suku ke-2 dari barisan tersebut adalah…', '3', '9', '27', '81', '163', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `refleksi`
--

CREATE TABLE `refleksi` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `isMenyenangkan` text NOT NULL,
  `isPaham` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `refleksi`
--

INSERT INTO `refleksi` (`id`, `nama`, `kelas`, `isMenyenangkan`, `isPaham`) VALUES
(1, 'udin', 'agus', 'asep', 'mantap'),
(2, 'nama', '5', 'senang', 'paham');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'user@gmail.com', 'user'),
(2, 'ilham@gmail.com', 'lupa'),
(4, 'sdasd@fd', 'dfsfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refleksi`
--
ALTER TABLE `refleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `refleksi`
--
ALTER TABLE `refleksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
