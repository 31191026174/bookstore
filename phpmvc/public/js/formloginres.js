

// function signin() {
//     var account = document.getElementById('account').value;
//     var pass = document.getElementById('password').value;

//     if (account == "" && pass == "") {
//         alert("Please fill your information")
//         return false;
//     }
//     if (account == "") {
//         alert("Please fill user name");
//     }

//     if (account != "" && pass == "") {
//         alert("Please fill password");
        
//     }
//     if(account!="" && pass!="" ){
//         alert("you sign in!")
//     }
    
// }

// function check() {
    
//     if (document.getElementById('password').value == document.getElementById('cfpassword').value) {
//         document.getElementById('message').style.color = 'wheat';
//         document.getElementById('message').innerHTML = 'matching';
//     } if(document.getElementById('password').value != document.getElementById('cfpassword').value) {
//         document.getElementById('message').style.color = 'red';
//         document.getElementById('message').innerHTML = 'not matching';
        
        
//     }if (document.getElementById('password').value=="" && document.getElementById('cfpassword').value==""){
//         document.getElementById('message').innerHTML = "";
//     }
// }

// function signup(){
//     if(document.getElementById('account').value!="" && document.getElementById('email').value !="" && document.getElementById('password').value==
//     document.getElementById('cfpassword').value &&document.getElementById('phone').value !=""){
//         alert("You have successfully registered!")
//     }else{
//         alert("You have failed to register! Try Again")
//     }
// }

// function resetfunction() {
//     var email = document.getElementById('email').value

//     if (email == "") {
//         alert("please fill email")
//     } else {
//        window.location.pathname='/Form(reset).html'
//     }

// }




var formlogin=document.querySelector(".signin");
var formres=document.querySelector(".signup");
var forgot1=document.querySelector(".forgot1");
var forgot2=document.querySelector(".forgot2");

console.log(forgot1)
forgot1.addEventListener("click",()=>{
    formlogin.classList.toggle("hidden");
    formres.classList.toggle("hidden");
});
forgot2.addEventListener("click",()=>{
    formlogin.classList.toggle("hidden");
    formres.classList.toggle("hidden");
});