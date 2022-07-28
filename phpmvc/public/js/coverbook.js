const viewdetail=document.querySelectorAll(".threeicon");
const viewcart=document.querySelectorAll(".threeiconcart");
const containerimg=document.querySelectorAll(".imgpro");
const imgneedchange=document.querySelectorAll(".card-img-top");
const img=document.querySelectorAll(".cardpex");
const dark=document.querySelectorAll(".dark");

const abc=()=>{
    for(let i=0;i<containerimg.length;i++){
        let tmp=imgneedchange[i].getAttribute("src");
        let two=imgneedchange[i].dataset.bia;
        
        containerimg[i].addEventListener("mouseover",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            imgneedchange[i].setAttribute("src",two);
            
        });


        containerimg[i].addEventListener("mouseout",()=>{
            viewdetail[i].classList.toggle("hidden");
            viewcart[i].classList.toggle("hidden");
            imgneedchange[i].setAttribute("src",tmp);
            
        });
    
    }
}

abc();

const xyz=()=>{
    for(let i=0;i<img.length;i++){
        let tmp=dark[i].getAttribute("src");
        let two=dark[i].dataset.bia;
        
        img[i].addEventListener("mouseover",()=>{
           dark[i].setAttribute("src",two);
        });

        img[i].addEventListener("mouseout",()=>{
            dark[i].setAttribute("src",tmp);
         });
    
    }
}
xyz();

const listblog=document.querySelectorAll(".blogik");


function zoomin(){
    for(let i=0;i<listblog.length;i++){
        listblog[i].addEventListener("mouseover",()=>{
            listblog[i].style.transfrom="scale(1.15,1.15)";
            
        });
        listblog[i].addEventListener("mouseout",()=>{
            listblog[i].style.transfrom="";
        });
    }
}
zoomin();



const lienhe=document.getElementById("lienhe");
const dich=document.getElementById("dich");


lienhe.addEventListener("click",()=>{
    const slcoords=dich.getBoundingClientRect();
    // window.scrollTo(slcoords.left + window.pageXOffset,slcoords.top + window.pageYOffset);
    
    // window.scrollTo(
    //     {
    //         left:slcoords.left + window.pageXOffset,

    //         right:slcoords.top + window.pageYOffset,

    //         behavior:'smooth',

    //     }
    // );
    dich.scrollIntoView({behavior:'smooth'});
});