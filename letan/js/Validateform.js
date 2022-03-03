function validateLogin(){
    let email = document.login.txtEmail;

    let emailPattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$";

    if(emailPattern.test(email.value)== false){
        email.value= "ko hop le";
        
    }
}