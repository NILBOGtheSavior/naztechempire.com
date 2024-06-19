var slides = ['', '/products/merlinus', '/software/3d_printer_utility'];
var captions = ['Welcome to Naztech Empire', 'Track progress of the Merlinus 3D Printer', 'Beta test Naztech 3D Printer Utility on Unix devices'];
var i = 0;
var timer;

function nextSlide() {
    i += 1;
    if (i >= slides.length) {
        i = 0;
    }
    setSlide(i);
}


function setSlide(index) {
    i = index;
    let image = document.getElementById("hero");
    let text = document.getElementById("hero_text");
    let bar = document.getElementsByClassName("bar");
    let imgURL = i == 0 ? "url('/img/hero.jpg')" : "url('/img" + slides[i] + "/hero.jpg')";
    for (let j = 0; j in bar; j++) {
        bar[j].style.backgroundColor = 'rgba(128, 128, 128, 0.5)';
        index = bar[j].getAttribute('index');
        if (j == i) {
            bar[j].style.backgroundColor = 'rgba(255, 255, 255, 0.75)';
        }
    }
    image.style.backgroundImage = imgURL;
    text.innerHTML = captions[i];
    clearTimer();
    setTimer();
}

function heroBar() {
    let barClass = document.getElementById("hero_bar");
    var numBars = slides.length;
    for (let i = 0; i < numBars; i++) {
        barClass.innerHTML += "<div class='bar' index='" + i + "' onclick='setSlide(" + i + ")'></div>";
    }
}

function setTimer() {
    timer = setTimeout(nextSlide, 5000);
}

function clearTimer() {
    clearTimeout(timer);
}

window.addEventListener("load", (event) => {
    heroBar();
    setSlide(0);
    setTimer();
});