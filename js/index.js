function load() {
    var divimg = document.getElementById("image");
    divimg.style.margin = "0";
    divimg.style.opacity = "1";
}

function loaded() {
    let length = 100;
    let length1 = 200;
    let length2 = 350;
    let length3 = 700;
    let length4 = 900;
    var img = document.getElementById("img");
    var h = document.getElementById("head");
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var ele = document.getElementById("nav");
    var l = document.getElementById("links");
    var link = document.getElementsByClassName("link");
    var heading = document.getElementById("heading");
    if (pageYOffset >= length) {
        img.style.height = "95%";
        ele.style.backgroundColor = "#102543";
        heading.style.color = "white";
        heading.style.height = "70px";
        ele.style.height = "70px";
        l.style.height = "70px";
        link[0].style.color = "white";
        link[1].style.color = "white";
        link[2].style.color = "white";
    }
    else {
        img.style.height = "100%";
        heading.style.height = "100px";
        ele.style.height = "100px";
        ele.style.backgroundColor = "white";
        heading.style.color = "#102543";
        l.style.height = "100px";
        link[0].style.color = "#102543";
        link[1].style.color = "#102543";
        link[2].style.color = "#102543";
    }
    if (pageYOffset >= length1) {
        h.style.marginLeft = "0%";
        h.style.fontSize = "35px";
        h.style.color = "#102543";
    }
    else {
        h.style.marginLeft = "90%";
        h.style.color = "#E4EDF9";
        h.style.fontSize = "10px";
    }
    if (pageYOffset >= length2) {
        card1.style.marginRight = "20px";
        card2.style.marginLeft = "20px";
        card1.style.opacity = "1";
        card2.style.opacity = "1";
    }
    else {
        card1.style.marginRight = "200px";
        card2.style.marginLeft = "200px";
        card1.style.opacity = "0";
        card2.style.opacity = "0";
    }
    if (pageYOffset >= length3) {
        card3.style.marginRight = "20px";
        card4.style.marginLeft = "20px";
        card3.style.opacity = "1";
        card4.style.opacity = "1";
    }
    else {
        card3.style.marginRight = "200px";
        card4.style.marginLeft = "200px";
        card3.style.opacity = "0";
        card4.style.opacity = "0";
    }
    if (pageYOffset >= length4) {
        card5.style.marginTop = "20px";
        card5.style.opacity = "1";
    }
    else {
        card5.style.marginTop = "200px";
        card5.style.opacity = "0";
    }
}