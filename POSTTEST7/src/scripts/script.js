var icon = document.getElementById('icon');

icon.addEventListener('click', function () {
    document.body.classList.toggle('lighttheme');
    if (document.body.classList.contains('lighttheme')) {
        icon.src = '../assets/moon.png';
    } else {
        icon.src = '../assets/sun.png';
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

function playVideo(videoId) {
    var modal = document.createElement("div");
    modal.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + videoId + '?si=bkT1P0cBRj--tTBb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

    document.body.appendChild(modal);

    modal.style.position = "fixed";
    modal.style.top = "0";
    modal.style.left = "0";
    modal.style.width = "100%";
    modal.style.height = "100%";
    modal.style.backgroundColor = "rgba(0,0,0,0.7)";
    modal.style.display = "flex";
    modal.style.justifyContent = "center";
    modal.style.alignItems = "center";
    
    modal.addEventListener("click", function () {
      modal.parentNode.removeChild(modal);
    });
  }

  function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('Time').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
  }
  
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }

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
