var icon = document.getElementById("icon");
var hogwartsTitle = document.querySelector('.hogwarts-title h1');
var hogwartsDescription = document.querySelector('.hogwarts-title p');

function toggleDarkMode() {
    document.body.classList.toggle("dark-theme");
    var icon = document.getElementById("icon");
    if (document.body.classList.contains("dark-theme")) {
        icon.src = "sun.icon.jpeg";
    } else {
        icon.src = "moon.icon.jpeg";
    }
}


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



