// Untuk Scrolling Navigation Bar
let prevScrollpos = window.pageYOffset;
let nav = document.getElementsByClassName("navbar")[0];
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
} else {
    nav.style.top = "-100px";
    nav.style.transition = "top 0.5s";
    nav.style.transitionTimingFunction = "ease-in-out";
  }
  prevScrollpos = currentScrollPos;
}

// // Untuk Scroll to Top
// let mybutton = document.getElementById("idmuApa");
// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//   if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//     mybutton.style.display = "block";
//     mybutton.style.transition = "display 0.5s";
//     mybutton.style.transitionTimingFunction = "ease-in-out";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// Untuk menampilkan konten berdasarkan tombol yang di klik
var buttons = document.querySelectorAll(".button");
var konten_proker = document.querySelectorAll(".konten-proker");
var divKonten = document.getElementById("konten");

buttons.forEach(function(button) {
  button.addEventListener("click", function() {
    var judulButton = this.innerHTML; // Mendapatkan judul button yang diklik

    var konten = {
      "MAJELIS TA'LIM": konten_proker[0].innerHTML,
      "TADARUSAN": konten_proker[1].innerHTML,
      "KAJIAN FIQIH": konten_proker[2].innerHTML,
      "PHBI": konten_proker[3].innerHTML
    };

    if (konten.hasOwnProperty(judulButton)) {
      divKonten.innerHTML = konten[judulButton]; // Mengisi div dengan konten sesuai judul button
      divKonten.classList.add("konten-proker");
    } else {
      divKonten.innerHTML = "Konten tidak ditemukan";
      divKonten.style.color = "white";
    }
  });
});

// Untuk FA
function toggleAnswer(event) {
  var answer = event.target.nextElementSibling;
  if (answer.style.display === "block") {
    answer.style.display = "none";
  } else {
    answer.style.display = "block";
  }
}