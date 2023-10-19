var icon = document.getElementById('icon');

icon.addEventListener('click', function () {
    document.body.classList.toggle('lighttheme');
    if (document.body.classList.contains('lighttheme')) {
        icon.src = 'moon.png';
    } else {
        icon.src = 'sun.png';
    }
});

alert ('Find all your favorite movies here!!!');

function showPopup() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}


document.querySelector('.href="login.php"').addEventListener('click', function (event) {
    event.preventDefault(); // Mencegah navigasi ke anker (default)
    var loginSection = document.querySelector('.login');
    loginSection.style.display = 'block';

});

// function authenticateUser(event) {
//     event.preventDefault(); // Menghentikan pengiriman formulir agar kita bisa memproses nilai

//     // Mendapatkan nilai username dan password
//     var username = document.getElementById('username').value;
//     var password = document.getElementById('password').value;

//     // Memeriksa apakah username dan password sesuai dengan yang diinginkan
//     if (username === 'yuka' && password === '1234') {
//         alert('Login berhasil!'); // Gantilah ini dengan tindakan yang sesuai

//         // Arahkan pengguna ke halaman dashboard
//         window.location.href = 'dashboard.php';
//     } else {
//         alert('Login gagal. Coba lagi.'); // Gantilah ini dengan tindakan yang sesuai
//     }
// }
