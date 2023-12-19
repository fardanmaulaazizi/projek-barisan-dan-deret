function startCountdown(duration, display) {
  let timer = duration,
    minutes,
    seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = "Waktu tesisa = " + minutes + ":" + seconds;

    if (--timer < 0) {
      timer = duration;
    }

    if (minutes == 0 && seconds == 0) {
      setTimeout(function () {
        alert("Waktu habis, harap kumpulkan soal");
        display.textContent = "Waktu habis";
        display = "";
      }, 1000);
      return;
    }
  }, 1000);
}

// Waktu hitung mundur dalam detik
const countdownDuration = 600;

// Memulai hitung mundur saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
  const display = document.getElementById("countdown");
  startCountdown(countdownDuration, display);
});
