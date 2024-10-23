<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals Lab Exam</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card{
            height: 450px;
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 0 15px 5px #dddddd;
            padding: .5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            row-gap: .5rem;
            padding: 1rem;
        }

        .inputs{
            width: 100%;
            height: 60%;
            display: flex;
            flex-wrap: wrap;
        }

        .inputs .group-input{
            height: 55px;
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: .3rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        label{
            font-size: .9rem;
            color: blue;
        }

        input{
            height: 30px;
            border: none;
            font-size: 1rem;
            padding-left: .5rem;
        }

        .btn{
            margin-top: 2rem;
            margin-bottom: .5rem;
            padding: .7rem 3rem;
            font-size: 1.2rem;
            border-radius: 5px;
            background: rgb(0, 0, 200);
            cursor: pointer;
            color: white;
        }

        .btn:hover{
            background: blue;
        }

        .footer{
            font-size: .9rem;
            font-weight: bold;
        }

        .card:nth-child(1){
            width: 350px;
        }

        .card:nth-child(1) .inputs{
            height: 35%;
            flex-wrap: nowrap;
            justify-content: end;
            align-items: center;
            flex-direction: column;
            row-gap: 1rem;
        }

        #forgotPassBtn{
            width: 100%;
            text-align: right;
            color: rgb(0, 0, 200);
            cursor: pointer;
        }
        
        #forgotPassBtn:hover{
            color: blue;
            text-decoration: underline;
        }

        .card:nth-child(1) .btn{
            margin: 3rem 0 1.5rem;
        }

        .option{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: .3rem;
            width: 100%;
            gap: .3rem;
        }

        .option div{
            color: rgb(0, 0, 200);
            cursor: pointer;
        }

        #gotoSignUp:hover{
            color: blue;
            text-decoration: underline;
        }

        .card:nth-child(2) .inputs{
            row-gap: .5rem;
            column-gap: .4rem;
            max-height: 45%;
            margin: 1rem 0;
            align-items: end;
        }

        .card:nth-child(2) .inputs .group-input:nth-child(1), .card:nth-child(2) .inputs .group-input:nth-child(2) {
            width: 49%;
        }

        .card:nth-child(2) .btn{
            margin: 1.5rem 0 .5rem;
        }

        .card:nth-child(3) .inputs{
            margin-top: 1rem;
            row-gap: .5rem;
        }

        .card:nth-child(3) .btn{
            padding: .7rem 1.5rem;
        }

        .forgot{
            display: flex;
            gap: .3rem;
            margin-bottom: .5rem;
        }

        .forgot div{
            color: rgb(0, 0, 200);
            cursor: pointer;
        }

        .forgot div:hover{
            color: blue;
            text-decoration: underline;
        }

        #notif{
            height: 100%;
            width: 100%;
            position: fixed;
            background: rgba(200, 200, 200, .3);
            display: flex;
            justify-content: center;
            align-items: start;
        }

        #notif p{
            padding: 1rem 2.5rem;
            color: black;
            font-size: 1.2rem;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px 2px #dddddd;
            margin-top: 1.5rem;
        }

    </style>
</head>
<body>
    <div id="login" class="card">
        <h1>Log In</h1>
        <div class="inputs">
            <div class="group-input">
                <label for="uName">Email Address</label>
                <input type="email" id="uName">
            </div>
            <div class="group-input">
                <label for="uPass">Password</label>
                <input type="password" id="uPass" autocomplete="off">
            </div>
        </div>
        <div id="forgotPassBtn" onclick="forgot()">forgot password?</div>
        <div id="loginBtn" class="btn" onclick="log()">Log In</div>
        <div class="option">
            <p>Don't have an Account?</p>
            <div id="gotoSignUp" onclick="sign()">Sign Up</div>
        </div>
        <p class="footer">All Rights Reserved | 2024</p>
    </div>

    <div id="signup" class="card" style="display: none;">
        <h1>Sign Up</h1>
        <div class="inputs">
            <div class="group-input">
                <label for="lname">Last Name</label>
                <input type="text" id="lname">
            </div>
            <div class="group-input">
                <label for="fname">First Name</label>
                <input type="text" id="fname">
            </div>
            <div class="group-input">
                <label for="email">Email Address</label>
                <input type="email" id="email">
            </div>
            <div class="group-input">
                <label for="pass">Password</label>
                <input type="password" id="pass" autocomplete="off">
            </div>
        </div>
        <div id="signupBtn" class="btn" onclick="signup()">Sign Up</div>
        <div class="option">
            <p>Already have an Account?</p>
            <div id="gotoLogIn" onclick="login()">Log In</div>
        </div>
        <p class="footer">All Rights Reserved | 2024</p>
    </div>

    <div id="forgotPass" class="card" style="display: none;"> 
        <h1>Forgot Pass</h1>
        <div class="inputs">
            <div class="group-input">
                <label for="fEmail">Email Address</label>
                <input type="email" id="fEmail">
            </div>
            <div class="group-input">
                <label for="newPass">New Password</label>
                <input type="password" id="newPass" autocomplete="off">
            </div>
            <div class="group-input">
                <label for="conPass">Confirm Password</label>
                <input type="password" id="conPass" autocomplete="off">
            </div>
        </div>
        <div id="changePassBtn" class="btn" onclick="confirmPass()">Confirm Changes</div>
        <div class="forgot">
            <div id="log" onclick="login()">Log In</div>
            <p>|</p>
            <div id="sign" onclick="sign()">Sign Up</div>
        </div>
        <p class="footer">All Rights Reserved | 2024</p>
    </div>

    <div id="notif" style="display: none;">
        <p id="message">Message Text</p>
    </div>
</body>
<script>
    function log(){
        var username = document.getElementById('uName').value;
        var pass = document.getElementById('uPass').value;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("login=1&uname=" + username + "&upass=" + pass);
        xhr.onload = function() {
            if (xhr.status !== 200) {
                let message = "Error: Unable to process request.";
                notif(message);
            } else {
                if (parseInt(xhr.responseText, 10) == 0) {
                    window.location.href = "mainpage.php";
                } else {
                    let message = "Invalid Email Address or Password.";
                    notif(message);
                    pass = "";
                }
            }
        }
    }

    function forgot() {
        if (document.getElementById('forgotPass').style.display !== "flex") {
            document.getElementById('forgotPass').style.display = "flex";
            document.getElementById('login').style.display = "none";
            document.getElementById('signup').style.display = "none";
        }
    }

    function sign() {
        if (document.getElementById('signup').style.display !== "flex") {
            document.getElementById('signup').style.display = "flex";
            document.getElementById('login').style.display = "none";
            document.getElementById('forgotPass').style.display = "none";
        }
    }

    function login() {
        if (document.getElementById('login').style.display !== "flex") {
            document.getElementById('login').style.display = "flex";
            document.getElementById('signup').style.display = "none";
            document.getElementById('forgotPass').style.display = "none";
        }
    }

    function signup() {
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("signup=1&fn=" + fname + "&ln=" + lname + "&em=" + email + "&pass=" + pass);
        xhr.onload = function() {
            if (xhr.status !== 200) {
                let message = "Error: Unable to process request.";
                notif(message);
            } else {
                if (parseInt(xhr.responseText, 10) == 0) {
                    login();
                } else {
                    let message = "Error: Unable to process request.";
                    notif(message);
                }
            }
        }
    }

    function confirmPass() {
        var email = document.getElementById('fEmail').value;
        var newpass = document.getElementById('newPass').value;
        var conpass = document.getElementById('conPass').value;

        if (newpass !== conpass) {
            let message = "Password and Confirm Password does not match.";
            notif(message);
            newpass = "";
            conpass = "";
        } else {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("changepass=1&em=" + email + "&pass=" + conpass);
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    let message = "Error: Unable to process request.";
                    notif(message);
                } else {
                    if (parseInt(xhr.responseText, 10) == 0) {
                        window.location.href = "mainpage.php";
                    } else {
                        if (parseInt(xhr.responseText, 10) == 0) {
                            login();
                        } else {
                            let message = "Incorrect Email Address.";
                            notif(message);
                        }
                    }
                }
            }
        }
    }

    function notif(text) {
        const showPrompt = document.getElementById('notif');
        showPrompt.style.display = "flex";
        if (showPrompt.style.display === "flex") {            
            document.getElementById('message').innerText = text;
                    
            setTimeout(function() {
                showPrompt.style.display = "none";
                }, 3000); 
            }
        }
</script>
</html>