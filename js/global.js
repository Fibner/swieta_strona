document.querySelector("#logo").addEventListener("click", function(){
    document.location.href = 'main';
});

function slide(number){
    console.log(number);
    if(document.querySelector(`#info${number}`).style.display == "none"){
        $(`#info${number}`).fadeIn('slow');
    }else{
        $(`#info${number}`).fadeOut('slow');
    }
}