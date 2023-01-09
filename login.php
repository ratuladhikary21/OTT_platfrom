<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- TAB ICON LINK -->
 <link rel="icon" href="assets/images/tab-icon1.webp">
<div class="netflixLogo">
        <a id="logo" href="index.html"><img src="assets/images/logo1.jpeg" alt="Logo Image"></a>
      </div> 


<style>
	body {
    position: relative;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    min-height: 100%;
    font-size: 16px;
    background-size: cover;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
      url("assets/banner.png");
  
    margin: 0;
  }
  .netflixLogo {
    grid-area: nt;
    object-fit: cover;
    width: 100px;
    max-height: 100%;
    
    padding-left: 20px;
    padding-top: 20px; 
  }
  .netflixLogo img {  
    height: 40px;     
  }
  
  .logo img {
    height: 45px;
    margin: 22px;
  }
  
.sign-up-container{
	height: 600px;
	width: 400px;
	position: absolute;
	top: 10%;
    left: 40%;
	background: rgba(255, 255, 255, 0.2);
	border: 1px solid white;
	border-radius: 20px;
	padding-top: 50px;
}
.form-label{
color:white !important;
}
#login-btn{
	width: 238px;
    height: 50px;
    margin: 30px 0 10px 0;
    background-color: #e50914;
    color: white;
    border: 5px hidden;
    border-radius: 5px;
    font-weight: 700;
    font-size: 17px;
    padding: 0px 14px;
}
.action-group {
      margin-top: 8px;
      width: 100%;
      display: flex;
      justify-content: space-between;
      color: white !important;
      font-size: 13px;
}


</style>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading"  style="color:white;">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now">
							<div class="action-group">
            <label for="remember-me">
              <input type="checkbox" class="checkbox" id="remember-me" />
              Remember me
            </label>
            <a>Need Help?</a>
          </div>
		  </div>
              
            </div>
            New to Momix? <a href="user-registration.php" style="color:white;">Sign up now.</a>
          </div>
					</div>
				</form>
			</div>
			
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
