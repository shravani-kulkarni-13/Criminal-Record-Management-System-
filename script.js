const idpass = {
    userName : "IndianPolice@100",
    passWord : "policeforce100"
};

const policeLogin = (event) => {
    event.preventDefault();

    const userid = document.getElementById("username").value;
    const pass = document.getElementById("password").value;
    const loginMessage = document.getElementById("loginMsg");

    if(userid === idpass.userName && pass === idpass.passWord) {
        loginMessage.style.color = "green";
        loginMessage.textContent = "Logging in..."
        setTimeout(() => {
            window.location.href = "cases.html";
        },3000);
    }
    else{
        loginMessage.style.color = "red";
        loginMessage.innerHTML = "Invalid username and password!!";
        setTimeout(() => {
            loginMessage.textContent = "";
        }, 5000);
    }
}
