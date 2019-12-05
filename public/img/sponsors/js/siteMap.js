
var hide  =  document.getElementById("overall");
var show = document.getElementById("siteMap");
var middleMen = document.getElementById("middleMen");
var childTwo = document.getElementById("childTwo");
var ab = document.getElementsByClassName("list");
var change = document.getElementById("change");

 var right01 = document.getElementById("right01");
    var right02 = document.getElementById("right02");
    var right03 = document.getElementById("right03");
    var right04 = document.getElementById("right04");

    function love() {
    hide.classList.toggle("allover");
    hide.classList.toggle("alloverAgain");
    show.classList.toggle("indexing01");
    show.classList.toggle("indexing02");
    ab[0].classList.toggle("singleAnimation01")
    ab[1].classList.toggle("singleAnimation02");
    ab[2].classList.toggle("singleAnimation03");
    ab[3].classList.toggle("singleAnimation04");
    ab[4].classList.toggle("singleAnimation05");
    middleMen.classList.toggle("middleMen");  
    change.classList.toggle("change02");  
    childTwo.classList.toggle("childTwo");
    }


function right(argument) {
    // body...
    if (argument==1) {
        right01.style.display="block";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==2) {
        right01.style.display="none";
        right02.style.display="block";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==3) {
        right01.style.display="none";
        right02.style.display="none";
        right03.style.display="block";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==4) {
        right01.style.display="none";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="block";
        // right05.style.display="none";
    }
    if (argument==5) {
        right01.style.display="block";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="block";
    }
}
