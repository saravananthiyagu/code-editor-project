<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY-CODE</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</style>
</head>
<body>
    <header>
     <h2>EASY-CODE</h2>
      <nav>
        <a href="index.php">HOME</a>
        <a href="cnctws.php">CONTACT</a>
        <a href="about.php">ABOUT</a>
      </nav>
      <div class="sign-in-up">
        <button type="button" id="btn" onclick="popup('login-popup')">LOGIN</button>
        <button type="button" id="btn" onclick="popup('register-popup')">REGISTER</button>
      </div>
    </header>
     <div class="popup-container" id="login-popup">
        <div class='popup'>
          <form method="POST" action="validation.php">
            <h2>
                <span>LOGIN</span>
            <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password" id="">
            <button id="login" style="background-color: black;color:white;" type="submit" class="login-btn" name="login">LOGIN</button>
          </form>
        </div>
     </div>

     <div class="popup-container" id="register-popup">
        <div class='register popup'>
          <form method="POST" action="registration.php">
            <h2>
                <span>REGISTER</span>
            <button type="reset" onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Username" name="username" id="">
            <input type="email" placeholder="E-mail" name="emails">
            <input type="password" placeholder="Password" name="password" id="psw"  minlength="8" maxlength="12" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
            <button id="register" style="background-color: black;color:white;" type="submit" class="register-btn" name ="register">REGISTER</button>
          </form>
        </div>
     </div>
     
     <!--<h1 style="bottom: 30%;
    padding-left: 24%;
    position: absolute;color:#CFD4F6;">An online platform to learn and practice HTML,CSS and JS.</h1>-->
   
   <script>
        function popup(popup_name){
            get_popup =document.getElementById(popup_name)
            if(get_popup.style.display=="flex"){
                get_popup.style.display="none" 
            }else{
                get_popup.style.display="flex"
            }
        }

        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
   </script>
</body>
</html>