var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  var navbar = document.getElementById("navbar");

  // Jika pengguna berada di paling atas halaman
  if (currentScrollPos == 0) {
    navbar.style.top = "0";
  } else {
    // Sembunyikan navbar jika pengguna scroll ke bawah
    navbar.style.top = "-200px";
  }

  prevScrollpos = currentScrollPos;
}
