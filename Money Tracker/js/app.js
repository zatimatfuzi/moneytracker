function matchPw() {
    var pw = document.getElementById("password").value; 
    var cpw = document.getElementById("confirm-password").value;

    if (pw == cpw) {
        return true;
    } else {
        document.getElementById("message").innerHTML = "Password and Confirm Password must matched";
        return false;
    }
}