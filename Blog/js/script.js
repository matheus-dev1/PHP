function valida_campos() {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    
    if(nome.length > 0 && email.length > 0 && senha.length > 0){
        document.getElementById("cadastrar_autores").style.visibility = "initial";
    }
    else{
        document.getElementById("cadastrar_autores").style.visibility = "hidden"; 
    }
}