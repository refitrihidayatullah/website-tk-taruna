// slider
const myslide = document.querySelectorAll('.myslide'),
    dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);

function autoSlide() {
    counter += 1;
    slidefun(counter);
}

function plusSlides(n) {
    counter += n;
    slidefun(counter);
    resetTimer();
}

function currentSlide(n) {
    counter = n;
    slidefun(counter);
    resetTimer();
}

function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {

    let i;
    for (i = 0; i < myslide.length; i++) {
        myslide[i].style.display = "none";
    }
    for (i = 0; i < dot.length; i++) {
        dot[i].className = dot[i].className.replace(' active', '');
    }
    if (n > myslide.length) {
        counter = 1;
    }
    if (n < 1) {
        counter = myslide.length;
    }
    myslide[counter - 1].style.display = "block";
    dot[counter - 1].className += " active";
}
// efek mengetik informasi terbaru
const txtElement = ['Terbaru', 'Terkini'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function mengetik() {
    if (count == txtElement.length) {
        count = 0;
    }
    currentTxt = txtElement[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('.efek-mengetik').textContent = words;

    if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;
    }

    setTimeout(mengetik, 500);
})();
// end mengetik