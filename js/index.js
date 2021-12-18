function checkValidation(){
    var login = document.querySelector("#login").value
    var pass = document.querySelector("#pass").value
    if(login == "" || pass == "" || login == null || pass == null){
        if(login == ""){
            document.querySelector("#login").style.backgroundColor = "red";
        }
        if(pass == ""){
            document.querySelector("#pass").style.backgroundColor = "red";
        }
        return false;
    }
}

$("#img").animate({left: '-50%'}, 5000);
setTimeout(function(){
    $("#img").css({left: '105%'});
},5000);
setInterval(function(){
    $("#img").animate({left: '-50%'}, 5000);
    setTimeout(function(){
        $("#img").css({left: '105%'});
    },5000);
}, 5000)