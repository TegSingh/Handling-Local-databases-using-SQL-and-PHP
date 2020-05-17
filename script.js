function openMode(event,id){
    if (id==="register-button") {
        document.getElementById("login").style.display = "none";
        document.getElementById("register").style.display = "block";        
    }
    else{
        document.getElementById("login").style.display = "block";
        document.getElementById("register").style.display = "none";            
    }

}