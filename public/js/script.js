function toggleKategori() {
  var menu = document.getElementById('kategoriMenu');
  if (menu.style.display === "flex") {
    menu.style.display = "none";
  } else {
    menu.style.display = "flex";
  }
}

// Tutup menu kalau klik di luar
window.onclick = function(event) {
  if (!event.target.matches('.kategori-toggle')) {
    var menu = document.getElementById('kategoriMenu');
    if (menu && menu.style.display === "flex") {
      menu.style.display = "none";
    }
  }
}
