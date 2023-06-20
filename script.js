// Ambil elemen progress bar
var progressBar = document.getElementById("progressBar");

// Ambil total uang dari server menggunakan AJAX
var xhr = new XMLHttpRequest();
xhr.open("GET", "get_total_money.php", true);
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    var totalMoney = parseInt(xhr.responseText);

    // Tampilkan total uang yang terkumpul
    var totalMoneyElement = document.getElementById("totalMoney");
    totalMoneyElement.innerHTML = totalMoney.toLocaleString();

    // Hitung persentase progress
    var progressPercentage = (totalMoney / 40000000) * 100; // Anggap 10,000 sebagai target uang

    // Update nilai dan tampilan progress bar
    progressBar.style.width = progressPercentage + "%";
    progressBar.innerHTML = progressPercentage.toFixed(2) + "%";
  }
};
xhr.send();

// Ambil total user yang menginput jumlah uang dari server menggunakan AJAX
var xhr2 = new XMLHttpRequest();
xhr2.open("GET", "get_total_users.php", true);
xhr2.onreadystatechange = function() {
  if (xhr2.readyState === 4 && xhr2.status === 200) {
    var totalUsers = parseFloat(xhr2.responseText);

    // Tampilkan total user yang menginput jumlah uang
    var totalUsersElement = document.getElementById("totalUsers");
    totalUsersElement.innerHTML = totalUsers.toLocaleString();
  }
};
xhr2.send();

window.addEventListener("scroll", function() {
    var navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Ambil elemen running text
var runningText = document.getElementById('runningText');

// Fungsi untuk mengambil data dari database dan mengupdate running text
function updateRunningText() {
  // Lakukan permintaan AJAX ke server untuk mengambil data dari database
  // Gantikan 'get_data.php' dengan URL atau endpoint yang sesuai untuk mengambil data dari database
  // Pastikan respons dari server berupa data JSON yang berisi nama dan nilai yang diinputkan
  fetch('get_data.php')
    .then(response => response.json())
    .then(data => {
      // Bersihkan isi running text sebelumnya
      runningText.innerHTML = '';

      // Loop melalui data dan tambahkan nama dan nilai ke dalam running text
      data.forEach(item => {
        var textNode = document.createTextNode(item.nama + ' - Nilai: ' + item.nilai);
        runningText.appendChild(textNode);
        runningText.appendChild(document.createElement('br'));
      });
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

// Panggil fungsi updateRunningText setiap beberapa detik (misalnya setiap 5 detik)
setInterval(updateRunningText, 5000);

