let title= document.querySelector(".h1-header"); 

window.addEventListener("scroll", ()=>{
    if(window.scrollY>0){
    title.style.color= "red"; 

} else {
    title.style.color= "black"; 
   
} 
}); 

title.addEventListener("mouseenter", ()=>{
    title.innerHTML=`Scopri le nostre proposte`; 
})

title.addEventListener("mouseleave", ()=>{
    title.innerHTML=`Benvenuti nel sito di Artisan Viaggi`; 
})