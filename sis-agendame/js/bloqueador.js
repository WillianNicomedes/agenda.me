const nomeContatoInput = document.querySelector("#nomeContato");

nomeContatoInput.addEventListener("keypress", function(e) {
 
    if(!checkChar(e)){
        e.preventDefault();
    }

});

function checkChar(e){
    const char = String.fromCharCode(e.keyCode);

    const pattern = '[a-zA-Z0]';

    if(char.match(pattern)){
        console.log(char);
        return true;
    }else{
        console.log(char);
    }
}