const slideBG =(herBG)=>{
    herBG.style.backgroundPosition = scrollY / 25 + 10 + "%";
}

window.addEventListener('scroll',function(){
    slideBG(document.querySelector('.hero'))
})










