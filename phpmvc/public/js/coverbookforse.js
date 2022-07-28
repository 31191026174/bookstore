const viewdetail=document.querySelectorAll(".threeicon");
const viewcart=document.querySelectorAll(".threeiconcart");
const containerimg=document.querySelectorAll(".imgpro");



const abc=()=>{
    for(let i=0;i<containerimg.length;i++){
        
        containerimg[i].addEventListener("mouseover",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            
            
        });


        containerimg[i].addEventListener("mouseout",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            
            
        });
    
    }
}

abc();