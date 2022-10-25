function Encriptar(){

    let  mensaje = document.getElementById("Nombre").value; 
    

    let remplaza;
    let guarda = ""; 
    let i;

    for( i = 0; i<mensaje.length; i++){

        remplaza = String.fromCharCode(mensaje.charCodeAt(i) + 9);
        guarda = guarda + remplaza;
    }

    document.getElementById("MensajeCifrado").value  = guarda;

}

function Desencriptar(){
    let  mensaje = document.getElementById("MensajeCifrado").value; 
    let remplaza;
    let guarda = ""; 
    let i;

    for( i = 0; i<mensaje.length; i++){

        remplaza = String.fromCharCode(mensaje.charCodeAt(i) - 9);
        guarda = guarda + remplaza;
    }

    document.getElementById("MensajeDescifrado").value  = guarda;
}

function Limpiar(){

    document.getElementById("Nombre").value = "";   
    document.getElementById("MensajeCifrado").value = "";  
    document.getElementById("MensajeDescifrado").value = "";  
}