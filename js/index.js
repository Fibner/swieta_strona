function checkValidation(){
    var login = document.querySelector("#login").value
    var pass = document.querySelector("#pass").value
    if(login == "" || pass == "" || login == null || pass == null){
        if(login == ""){
            document.querySelector("#login").style.backgroundColor = "red";
            $("#login").animate({rotate: '100deg'}, 1000)
        }
        if(pass == ""){
            document.querySelector("#pass").style.backgroundColor = "red";
        }
        return false;
    }
}
function loop(){
    $("#img").css({left: '105%'});
    $("#img").animate({left: '-50%'}, 5000, loop);
}

loop();
