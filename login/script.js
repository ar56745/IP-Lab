function fun(){
    var password=document.getElementById("pwd").value;
    if(password.length<8){
        alert("Short password");
        return false;
    }

    var capitalRegex = /[A-Z]/;
            if (!capitalRegex.test(password)) {
                alert("Password must contain at least one capital letter.");
                return false;
            }

    var specialRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
            if (!specialRegex.test(password)) {
                alert("Password must contain at least one special character.");
                return false;
            }

    var numberRegex = /[0-9]/;
            if (!numberRegex.test(password)) {
                alert("Password must contain at least one number.");
                return false;
            }

            return true;

}