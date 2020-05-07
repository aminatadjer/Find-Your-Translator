function readMore(a) {


    var dots = document.getElementById("dots"+a.toString());
    var moreText = document.getElementById("more"+a.toString());
    var btnText = document.getElementById("lireLasuite"+a.toString());

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Lire la suite";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Lire moins";
        moreText.style.display = "inline";
    }
}
