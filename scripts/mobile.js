

function ShowOptions(event){
    
    
   target= event.currentTarget;

   const options= document.querySelector(".links");
   const links= document.querySelectorAll(".links a");


    const img= document.querySelector(".links img");
    const header_nav= document.querySelector("header nav");

    target.classList.add("nascondi");
    img.classList.add("nascondi");
   options.classList.add("mostra");
    header_nav.classList.add("nospace");

   for (let i=0; i<links.length; i++){
    links[i].classList.add("mobile");
  }


 


}




function HideOptions(){


    
    target= document.querySelector("#menu");

    const options= document.querySelector(".links");
    const links= document.querySelectorAll(".links a");
 
 
     const img= document.querySelector(".links img");
     const header_nav= document.querySelector("header nav");
 
     target.classList.remove("nascondi");
     img.classList.remove("nascondi");
    options.classList.remove("mostra");
     header_nav.classList.remove("nospace");
 
    for (let i=0; i<links.length; i++){
     links[i].classList.remove("mobile");
   }

}

















document.querySelector("#menu").addEventListener("click", ShowOptions);

document.querySelector("section").addEventListener("click", HideOptions);
