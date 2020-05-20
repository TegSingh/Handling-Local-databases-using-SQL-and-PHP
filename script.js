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

function validateForm() {
    console.log("ALERT!!!!!!!");
    var pwd = document.forms["register"]["password-register-new"].value;
    var confirmPwd = document.forms["register"]["password-register-confirm"].value;
    if (pwd !== confirmPwd) {
        alert("Passwords dont Match");
        return false;
    }
    else
        return true;
}