const heder = document.querySelector('nav')
let prevHeight = scrollY;


const hederOut=(heder)=>{
    heder.classList.remove("hadeIn")
    heder.classList.add("hadeOut")
  }
  const hederIn=(heder)=>{
    heder.classList.remove("hadeOut")
  heder.classList.add("hadeIn")
}

const slideBG = (herBG) => {
    herBG.style.backgroundPosition = scrollY / 25 + 10 + "%";
  };


  window.addEventListener("scroll", function () {
    slideBG(document.querySelector(".hero"));

if (prevHeight>scrollY) {
    hederIn(heder)
    
    prevHeight=scrollY
}else{
    hederOut(heder)

    prevHeight=scrollY
}

  });