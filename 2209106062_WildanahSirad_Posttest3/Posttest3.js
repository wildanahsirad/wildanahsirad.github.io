var icon = document.getElementById("icon");
var hogwartsTitle = document.querySelector('.hogwarts-title h1');
var hogwartsDescription = document.querySelector('.hogwarts-title p');

// icon.onclick = function(){
//     document.body.classList.toggle("dark-theme");
//     if(document.body.classList.contains("dark-theme")){
//         icon.src = "sun.icon.jpeg";
//         // Mengubah warna teks dan latar belakang pada mode gelap
//         hogwartsTitle.style.color = "#90b4ce"; // Ubah warna teks menjadi putih
//         hogwartsDescription.style.color = "#90b4ce"; // Ubah warna teks menjadi putih
//         hogwartsDescription.style.background = "var(--primary-color)"; // Ubah latar belakang teks menjadi warna primer
//     } else {
//         icon.src = "moon.icon.jpeg";
//         // Mengembalikan warna teks dan latar belakang pada mode terang
//         hogwartsTitle.style.color = "initial"; // Mengembalikan warna teks ke default
//         hogwartsDescription.style.color = "initial"; // Mengembalikan warna teks ke default
//         hogwartsDescription.style.background = "initial"; // Mengembalikan latar belakang teks ke default
//     }
// }

function toggleDarkMode() {
    document.body.classList.toggle("dark-theme");
    var icon = document.getElementById("icon");
    if (document.body.classList.contains("dark-theme")) {
        icon.src = "sun.icon.jpeg";
    } else {
        icon.src = "moon.icon.jpeg";
    }
}

// var icon = document.getElementById("icon");
// icon.onclick = toggleDarkMode;



// // Mendapatkan elemen logo
// var moonIcon = document.getElementById("moon-icon");

// // Menambahkan event listener untuk mengubah warna saat diklik
// moonIcon.addEventListener("click", function () {
//     // Ganti warna dengan menggunakan CSS
//     if (moonIcon.style.color === "red") {
//         moonIcon.style.color = "blue"; // Ganti warna ke biru jika saat ini merah
//     } else {
//         moonIcon.style.color = "red"; // Ganti warna ke merah jika saat ini biru atau warna lainnya
//     }
// });



//pop up box
alert("Channeling my inner Hermione with a touch of Luna Lovegood's whimsy. 💫📚 #WizardingWorldCharm #BookishMagic")

// script.js
var icon = document.getElementById("icon");

icon.addEventListener("click", function () {
    document.body.classList.toggle("dark-theme");
    if (document.body.classList.contains("dark-theme")) {
        icon.src = "sun.icon.jpeg";
    } else {
        icon.src = "moon.icon.jpeg";
    }
});


var books = document.querySelectorAll(".book");

books.forEach(function (book) {
    book.addEventListener("click", function () {
        alert("You clicked a book!");
    });
});



