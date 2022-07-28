const bookcontainer=document.getElementById("book-cover");
const bookchild=document.querySelectorAll(".book-cover-child");

for(let i=0;i<bookchild.length;i++){
    let tmp=bookcontainer.getAttribute("src");
    bookchild[i].addEventListener("mouseover",()=>{

       bookcontainer.setAttribute("src",bookchild[i].getAttribute("src"));

    });
    bookchild[i].addEventListener("mouseout",()=>{

        bookcontainer.setAttribute("src",tmp);
 
     });



}