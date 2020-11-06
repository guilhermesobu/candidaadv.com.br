var mailname  = document.querySelector('#mailname');
var mailemail = document.querySelector('#mailemail');
var mailtext  = document.querySelector('#mailtext');
var mailbtn  = document.querySelector('#mailbtn');

/*mailbtn.addEventListener('click', ()=>{
    if(mailname.value != "" && mailemail.value != "" && mailtext != ""){
        
    } else {
        return false;
    }
})*/

var mailModalJs = document.querySelector('#mailModalBtn');
function clickModal(){
    mailModalJs.click();
}
/*setTimeout(clickModal,1);*/