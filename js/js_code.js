// Citeste mai mult/putin. ion_creanga.html
document.getElementById("btnReadMore").addEventListener("click", functReadMore)

function functReadMore() {
    let puncte = document.getElementById("puncte");
    let moreText = document.getElementById("read_more");
    let btnText = document.getElementById("btnReadMore");

    if (puncte.style.display === "none") {
      puncte.style.display = "inline";
      btnText.innerHTML = "Citește mai mult"; 
      moreText.style.display = "none";
  } else {
      puncte.style.display = "none";
      btnText.innerHTML = "Citește mai puțin"; 
      moreText.style.display = "inline"; 
  }
}


// meniu burger
let hamb = document.querySelector(".hamIcon");
hamb.addEventListener("click", toggleClass);

function toggleClass(){
  let menu = document.querySelector(".mainMenu");
  menu.classList.toggle("toggleCls");
}


//scroll down
document.getElementByClass("scrolldown").addEventListener("click", scrollDown)

function scrollDown(){
  window.scrollTo({
      top: 10000,
      behavior: "smooth"
  });
}











