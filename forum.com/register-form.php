<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  color: #fff;
  background: #19aa8d;
  font-family: 'Roboto', sans-serif;
}
.form-control {
  font-size: 15px;
}
.form-control, .form-control:focus, .input-group-text {
  border-color: #e1e1e1;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 400px;
  margin: 0 auto;
  padding: 30px 0;    
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form h2 {
  color: #333;
  font-weight: bold;
  margin-top: 0;
}
.signup-form hr {
  margin: 0 -30px 20px;
}
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form label {
  font-weight: normal;
  font-size: 15px;
}
.signup-form .form-control {
  min-height: 38px;
  box-shadow: none !important;
} 
.signup-form .input-group-addon {
  max-width: 42px;
  text-align: center;
} 
.signup-form .btn, .signup-form .btn:active {        
  font-size: 16px;
  font-weight: bold;
  background: #19aa8d !important;
  border: none;
  min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
  background: #179b81 !important;
}
.signup-form a {
  color: #fff;  
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #19aa8d;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}
.signup-form .fa {
  font-size: 21px;
}
.signup-form .fa-paper-plane {
  font-size: 18px;
}
.signup-form .fa-check {
  color: #fff;
  left: 17px;
  top: 18px;
  font-size: 7px;
  position: absolute;
}
</style>
</head>
<body>
<div class="signup-form">
    <form action="/register.php" method="post" id="registrar" onsubmit="event.preventDefault(); enviar(return validateForm());">
    <h2>Register</h2>
    <p>Please fill in this form to create an account!</p>
    <hr>
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-user"></span>
          </span>                    
        </div>
        <input type="text" class="form-control" name="username" placeholder="Username" required="required"  oninvalid="this.setCustomValidity('Hi! We need your username to identify you to other users.')">
      </div>
        </div>
      <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-id-card"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="name" placeholder="Name" required="required">
      </div>
        </div>
      <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-id-card"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="surname" placeholder="Surname" required="required" oninvalid="this.setCustomValidity('Hi, we need your email address to give you information about your account.')">
      </div>
        </div>
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa fav fa-at"></i>
          </span>                    
        </div>
        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
      </div>
        </div>
      <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa fav fa-at"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="confirm_email" placeholder="Confirm Email" required="required"
               oninvalid="this.setCustomValidity('Let's make sure the email is the same as above!')">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="password" class="form-control" name="password" placeholder="Password" required="required"
               oninvalid="this.setCustomValidity('Fill it up! You don't want anyone to be able to access your account, do you?')">
      </div>
        </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
            <i class="fa fa-check"></i>
          </span>                    
        </div>
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required"
              oninvalid="this.setCustomValidity('Let's make sure the password is the same as above!')">
      </div>
        </div>
      <h5>CUSTOM</h5>
       <div class="form-group">
         <label>Own Color</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa fav fa-at"></i>
          </span>                    
        </div>
        <input type="color" class="form-control" name="color" placeholder="Choose Color" required="required">
      </div>

        </div>
        <div class="form-group">
        <sub>This color will appear in certain places on the website</sub>
        </div>
        <div class="form-group">
      <!--<div class="g-recaptcha" data-sitekey=""></div>-->
        </div>
        
       <!--<div class="form-group">
      <label>Profile Image</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
           <i class="fa fa-image"></i>
          </span>                    
        </div>
        <input type="file" class="form-control" name="profile_image" accept="image/x-png,image/gif,image/jpeg" placeholder="Imagen de Usuario" required="required">
      </div>
          <sub>It will be the image that other users will see when viewing your profile and interacting with you.</sub>
        </div>-->
      
        <div class="form-group">
      <label class="form-check-label"><input type="checkbox" required="required" name="accepted"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>
      
    <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
  <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
<script>
	function validarEmail(){
	    let email_u = document.querySelector("body > div.signup-form > form > div:nth-child(7) > div > input").value
	    let email_d = document.querySelector("body > div.signup-form > form > div:nth-child(8) > div > input").value
	    if(email_d === email_u){
	        console.log(email_d,email_u);
	        return true;
	    }else{
	    	console.log(email_d,email_u);
	        return false;
	    }
	}
	
	function validarPassword(){
	    let pasu = document.querySelector("body > div.signup-form > form > div:nth-child(9) > div > input").value
	    let pasd = document.querySelector("body > div.signup-form > form > div:nth-child(10) > div > input").value
	    if(pasu === pasd){
	        console.log(pasu,pasd);
	        if(pasu == null && pasu == ' '){
	        	// DEBES DEFINIR UNA CONTRASEÑA
	        	return false;
	        }else if(pasu.length < 6){
	        	// LA CONTRASEÑA DEBE CONTENER MINIMO 7 DIGITOS
	        	return false;
	        }else{
	        	return true;
	        }
	    }else{
	    	console.log(pasu,pasd);
	        return false;
	    }
	}

	function validateForm(){
		if(validarEmail() && validarPassword()){
			return true;
		}else{
			return false;
		}	
	}

/*	function myFunctiond(event) {
		
		if(validateForm()){
		
		}else{
			// AQUI MOSTRAR MENSAJE DE ERROR
		}
	}	*/
	document.getElementById("registrar").onsubmit = function() {
		if(validateForm()===true){
			console.log(1);
		}else{
			event.preventDefault();
			console.log(2);
		}
		//myFunctiond(event)
		};

</script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Ldux-QiAAAAAL50_okSEiTVQkwrYliO7YYgkn_0"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Ldux-QiAAAAAL50_okSEiTVQkwrYliO7YYgkn_0', {action: 'login'}).then(function(token) {
       //holahola
    });
});
</script>
</body>
</html>