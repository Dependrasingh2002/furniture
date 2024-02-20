$(document).ready(function()
{
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
           
            1000:{
                items:1
            }
        }
    })
});

// captcha start.
function mycaptcha(){
    var str="asdfghjk4gjhj75H5B65gvfrgjers14Kv6";
    var len=str.length;
    alert(len);
    var rIndex=Math.floor(Math.random()*len)
    var rChar=str[rIndex]
    var caphcha="";
    for(var i=0; i<=5; i++){
        captcha=captcha+rChar;
    }
    document.querySelector("s").innerText=captcha;
}
function checkCaptcha(){
    var s=document.querySelector("s")
    var msg=document.querySelector("i")
    var t=document.querySelector("#cpt")
    if(s.innerText==t.value.trim()){
        s.style.border="3px solid green"
        t.style.border="3px solid green"
        msg.innerText="Valid captcha code ..."
        msg.style.color="green";
    }
    else{
        s.style.border="3px solid red"
        t.style.border="3px solid red"
        msg.innerText="invalid captcha code ..."
        msg.style.color="red";
    }
}
// captcha end .