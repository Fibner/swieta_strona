function checkValidation(){
    document.querySelector("#login").style.backgroundColor = "white";
    document.querySelector("#pass").style.backgroundColor = "white";
    var login = document.querySelector("#login").value
    var pass = document.querySelector("#pass").value
    if(login == "" || pass == "" || login == null || pass == null){
        if(login == ""){
            document.querySelector("#login").style.backgroundColor = "FireBrick";
            $("#login").animate({height: '25px', width: '179px'}, 500)
            $("#login").animate({height: '15px', width: '169px'}, 500)
        }
        if(pass == ""){
            document.querySelector("#pass").style.backgroundColor = "FireBrick";
            $("#pass").animate({height: '25px', width: '179px'}, 500)
            $("#pass").animate({height: '15px', width: '169px'}, 500)
        }
        return false;
    }
}
function loop(){
    $("#img").css({left: '105%'});
    $("#img").animate({left: '-50%'}, 5000, loop);
}

loop();
