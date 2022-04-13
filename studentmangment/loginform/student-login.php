
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login/student-login.php" method="POST" class="login" id="student">
            <div class="images">
                <img src="image/2.jpg" alt="" id="hides">
            </div>
            <header><i class="fas fa-user"></i></header>
            <div class="container">
                <div class="field"><span class="fa fa-user"></span><input type="text" placeholder="Email or Username"
                        name="UserName" reqired="true"></div>
                <div class="field"><span class="fa fa-lock"></span><input type="PASSWORD" placeholder="Password"
                        name="Password" required="true"></div>
                <div class="forgot-password"><a href="">Forgot password?</a></div>
                <input type="submit" class="submit" name="LOGIN" value="LOGIN">
                <!-- <span class="login-form-copy">Or Login with</span>
             <div class="social-icons">
                <div class="social-icon instagram"><span class="fa fa-instagram"></span></div>
                <div class="social-icon facebook"><span class="fa fa-facebook"></span></div>
                <div class="social-icon google"><span class="fa fa-google"></span></div>
                <div class="social-icon linkedin"><span class="fa fa-linkedin"></span></div>
                <div class="social-icon twitter"><span class="fa fa-twitter"></span></div>
            </div> 
            <span class="login-form-copy">Don't have an account?<a href="" class="login-form_sign-up">Sign up</a></span> -->
            </div>

        </form>
</body>
</html>