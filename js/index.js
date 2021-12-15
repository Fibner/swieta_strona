function checkValidation(){
    var login = document.querySelector("#login").value
    var pass = document.querySelector("#pass").value
    if(login == null || pass == null || login == "" || pass == ""){
        if(login == ""){
            document.getElementById("login").style.backgroundColor = "red";
        }
        if(pass == ""){
            document.getElementById("pass").style.backgroundColor = "red";
        }
        return false;
    }
    return true;
}