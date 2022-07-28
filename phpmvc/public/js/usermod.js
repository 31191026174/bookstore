
const mk1=document.getElementById("matkhau");
const mk2=document.getElementById('matkhaumoi');
const msg=document.getElementById('msg');
const msg1=document.getElementById('msg1');
const btn=document.querySelector(".doihinhnha");
const and=document.querySelector(".andoihinh");
and.addEventListener('click',()=>{
  btn.classList.remove('hidden');
  and.classList.add('hidden');
})


mk2.addEventListener("change",()=>{
  if(mk1.value!=mk2.value){
    msg.innerHTML='Mật khẩu không khớp';
  }
  else msg.innerHTML='';
});
mk1.addEventListener("change",()=>{
   
  if(mk1.value.split('').length<8){
    msg1.innerHTML="Tối thiểu 8 kí tự";
  }
  else msg1.innerHTML='';
})



