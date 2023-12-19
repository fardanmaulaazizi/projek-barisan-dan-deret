<?php
  include "koneksi.php";

    if(isset($_POST["register"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
        
    if (mysqli_num_rows($query) > 0) {
        ?>
        <script>
            alert("Akun email sudah terdaftar sebelumnya")
            // document.location = "register.php"
        </script>
        <?php
    }else{
        ?>
        
        <?php
        $query = mysqli_query($conn, "INSERT INTO `user` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')");
        ?>
        <script>
        alert("Register berhasil")
        document.location = "login.php"
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
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
  </head>
  <body
    style="background-image: url(./images/background.png)"
    class="100vh flex items-center justify-center"
  >
    <section class="dark:bg-gray-900">
      <div class="flex flex-col items-center justify-center px-6 py-32 mx-auto">
        <div
          class="bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700"
        >
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1
              class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"
            >
              Register
            </h1>
            <form
              class="space-y-4 md:space-y-6"
              action="register.php"
              method="post"
            >
              <div>
                <label
                  for="email"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >Email</label
                >
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Masukkan Email"
                  required=""
                />
              </div>
              <div>
                <label
                  for="password"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >Password</label
                >
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="••••••••"
                  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  required=""
                />
              </div>
              <button
                type="submit"
                name="register"
                class="w-full text-white mb-5 bg-kuning hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              >
                Register
              </button>
              
            </form>
            <a href="login.php">
                <button
                  class="w-full mt-3 text-white bg-hijau hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                >
                  Sudah punya akun? login
                </button>
              </a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
