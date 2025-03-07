function myFunction(imgs) {
    // Haal de uitgebreide afbeelding en tekst op
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");

    // Gebruik dezelfde src en alt voor de uitgebreide afbeelding en tekst
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;

    // Toon de uitgebreide afbeelding container
    document.querySelector(".expanded-container").style.display = "block";
}

// Laad de eerste afbeelding standaard
window.onload = function() {
    var firstImg = document.querySelector(".portfolio-item img");
    if (firstImg) {
        myFunction(firstImg);
    }
};