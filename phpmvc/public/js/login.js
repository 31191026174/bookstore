var find=document.querySelector(".Login");

function Login(){
    
    find.classList.remove("hidden");
    
}

document.addEventListener("keydown",function(e){
    if(e.key==="Escape" && !find.classList.contains("hidden")) {
        find.classList.add("hidden");
        
    }
});

var overlay=document.querySelector(".header-wrapper");
overlay.addEventListener("click",function(){
    if(!find.classList.contains("hidden")){
        find.classList.add("hidden");
    }
})
document.querySelector(".esc").addEventListener("click",function(){
    find.classList.add("hidden");
})
