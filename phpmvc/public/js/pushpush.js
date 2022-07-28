const btnleft=document.querySelector(".slider_btn--left");
const btnright=document.querySelector(".slider_btn--right");
const listpr=document.querySelectorAll(".dp");
let curslide=0;

const Gotoslide=(slide)=>{
    listpr.forEach((s,i)=>{
        s.style.transform=`translateX(${(i-slide)*125}%)`;
        if((i-slide) >3){ s.style.display="none";} 
        else{s.style.display="";}
        
    });
};

Gotoslide(0);

btnright.addEventListener("click",function(){
    if(curslide===listpr.length- 4) {
        curslide=0;
        
        Gotoslide(0);
        
    }
    else { curslide++;

    Gotoslide(curslide);}

});
btnleft.addEventListener("click",()=>{
    if(curslide===0){
        curslide=listpr.length-4;
        Gotoslide(curslide);
    }
    else {curslide--;
        Gotoslide(curslide);
    }
} );

