

const callback=(entires,observe)=>{
    const [entry]=entires;
    if(!entry.isIntersecting) return;
    entry.target.src = entry.target.dataset.src;
    entry.target.addEventListener('load',function(){
       entry.target.classList.remove('lazy-img');
    });

        obverser.unobserve(entry.target);
};


const obverser=new IntersectionObserver(callback,{
    root:null,
    rootMargin:'0px',
    threshold:1,
})

const imgtarget=document.querySelectorAll("img[data-src]");
imgtarget.forEach(target=>obverser.observe(target));


const back=document.querySelector(".back-top");

back.addEventListener("click",function(e){
    e.preventDefault();
    window.scrollTo({
        left:0,
        top:0,
        behavior:"smooth",
    });
    
})